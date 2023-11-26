<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Git Branching

# Git Guidelines for Epaper Project


**New Feature:**<br>
To create a new feature, whatever branch you are, checkout to master branch (this can change in some cases, discuss in pre-production section).
```
git checkout master
```
Then pull from master branch.
```
git pull origin master
```
Now checkout to new branch you want to start working.
Please keep in mind that, the branch name should start with the ticket number and then the feature name like ```SW-4-delivery-page```.

```
git checkout <branch-name>
```

When your feature is done from your side, push your code to git (It's a good practice to push multiple time a day)

```
git add .
git commit -m "<commit message>"
git push origin <branch-name-SW-4-delivery-page>
```
Here remember one thing __*never pull `development` from your branch*__. It can came with multiple unfinished work.
Now you have to send it for testing.<br>

Checkout to development branch,
```
git checkout development
```
Update local with remote
```
git pull origin development
```
Merge feature branch with development
```
git merge <branch-name-SW-4-delivery-page>
```
If there is any conflict arise resolve this and push to `development` branch.<br>

Now go to staging server, pull development, if it's backend work then voila you're done.<br>
If it's frontend then you have to do some extra work to deploy it.<br>

Go to working directory,
```
cd /var/www/epaper
```
or the working directory,
pull code from development branch,
```
git pull origin development
```
If it's the frontend, after pulling the code run
```
npm run build
```
If there is any permission issue then run it with `sudo`.<br>

Kill the 3000 port as previous version is running on that port.
```
sudo kill -9 $(sudo lsof -t -i:3000)
```
Now move your ticket from `In Progress` to `Ready for Test`. <br>
Congratulations, you successfully deployed in staging server.<br>

After testing if any issue arise then solve it in your feature branch `<branch_name>`, push to git.<br>

Then checkout in development, pull from it, merge it in development branch(resolve conflict if available). Push and deploy you work then again pass for testing.<br>

Now if your work passes all the test, create a __*Pull Request(PR)*__ with from your feature branch to destination branch `pre-production`.<br>
If more than one developer working in the project, select a reviewer for your code to review. There will be a column in the Jira board for code review. The developer who create the __*PR*__  will not merge the code.<br>
Instead, the other developer who is reviewing the code will merge it or you can merge the code after it is approved by the reviewer (the code quality of both developer will improve in this manner).

If the reviewer made a suggestion for your code, discuss with the reviewer and change accordingly.
Again move the ticket to `Ready for Test`. QA will check it again.


Now your finished work is in the pre-production branch.

Do not delete your feature branch until the release is done. The client can ask to deploy a feature at any time. So we can merge it with master then deploy it.

You can start working on a new feature.

**Pre-production Branch:**<br>
When a feature is dependent on other feature then the after finishing the feature please create new branch from the `pre-production` branch.

**Production Server**:<br>
When you have to make a release, create a __*Pull Request(PR)*__ from the `pre-production` branch to destination `master` branch.<br>

Scan trough the code and then merge it. Remember to make a release with version number and the features that going to that release.

__*The production server only pull from master branch. There will be no other branch in the production server.*__
