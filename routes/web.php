<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/redirect', function (Request $request) {
    $request->session()->put('state', $state = Str::random(40));

    $query = http_build_query([
        'client_id'     => config('services.passport.oauth_client_id'),
        'redirect_uri'  => config('services.passport.oauth_callback_url'),
        'response_type' => 'code',
        'scope'         => '',
        'state'         => $state,
    ]);

    return redirect(config('services.passport.oauth_authorization_url').$query);
})->name('get.token');



Route::get('/callback', function (Request $request) {
    $state = $request->session()->pull('state');

    throw_unless(
        strlen($state) > 0 && $state === $request->state,
        InvalidArgumentException::class
    );

    $response = Http::asForm()->post(config('services.passport.oauth_endpoint'), [
        'grant_type'    => 'authorization_code',
        'client_id'     => config('services.passport.oauth_client_id'),
        'client_secret' => config('services.passport.oauth_client_secret'),
        'redirect_uri'  => config('services.passport.oauth_callback_url'),
        'code'          => $request->code,
    ]);

    echo '<h1>Welcome to Khulna University Central WiFi.</h1>';
    echo '<h2>You\'re Connected.</h2>';
    print_r($response->json());
});

Route::post('login',function(Request $request){
   $http = new GuzzleHttp\Client();
   try {
    $response = $http->post(config('services.passport.login_endpoint'), [
        'form_params' => [
            'grant_type'    => 'password',
            'client_id'     => config('services.passport.login_client_id'),
            'client_secret' => config('services.passport.login_client_secret'),
            'username'      => $request->username,
            'password'      => $request->password,
        ]
    ]);
    echo '<h1>Welcome to Khulna University Central WiFi.</h1>';
    echo '<h2>You\'re Connected.</h2>';
    return $response->getBody();
} catch (\GuzzleHttp\Exception\BadResponseException $e) {
    if ($e->getCode() === 400) {
        return response()->json([
            'message'=>$e->getMessage()
        ],
            $e->getCode()
        );
    } else if ($e->getCode() === 401) {
        return response()->json('401'.$e->getMessage(), $e->getCode());
    }

    return response()->json('Something went wrong on the server.', $e->getCode());
}
})->name('login');
