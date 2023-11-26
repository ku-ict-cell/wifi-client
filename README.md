<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This Prototype
Actually this project is made for the prototype purpose to simplify how 3rd party(e.g library here) app should implement their login service with Khulna University Accounts. 

This project is based on Laravel Passport. We've implemented both client login using general login service and oAuth2.0 service. 

In order to use General Login, you need to update the following in environmental file.
 
1. PASSPORT_LOGIN_ENDPOINT
2. PASSPORT_LOGIN_CLIENT_ID
3. PASSPORT_LOGIN_CLIENT_SECRET

For oAuth2.0 

1. PASSPORT_OAUTH_ENDPOINT
2. PASSPORT_OAUTH_CLIENT_ID
3. PASSPORT_OAUTH_CLIENT_SECRET
4. PASSPORT_OAUTH_AUTHORIZATION_URL
5. PASSPORT_OAUTH_CALLBACK_URL

