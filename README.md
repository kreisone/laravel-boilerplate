# Laravel Boilerplate Project

This is the boilerplate project for any laravel application with packages I'm using. Feel free to fork and edit everything you want. The template has this packages installed:

- [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper) Laravel IDE helper to generate helper files for my PhpStorm.
- [laravelcollective/html](https://github.com/LaravelCollective/html) For generating HTML code easily.
- [laracasts/generators](https://github.com/laracasts/Laravel-5-Generators-Extended) Variety of generators to speed up your development process.
- [laravel/homestead](https://github.com/laravel/homestead) Pre-configured Vagrant box that provides wonderful development environment.

Check [composer.json](composer.json) if you want to know which versions of packages it currently uses.
Also I added the [contribution](CONTRIBUTION.md), [changelog](CHANGELOG.md) and [license](LICENSE.md) markdown files. If you don't wont to use them, simply delete them.

The template has also generated .gitignore file.

### Template project installation
Just clone this repo and issue the following commands (I'm using OS X so this commands are for OS X or Linux):

	# if you want to remove git version control
	rm -r .git
	
	# change origin url
	git remote set-url origin your-new-git-url
	
	# after clone you should update all dependencies
	composer update
	
	# if you are not using Intellij
	rm -r .idea

If you want to use homestead package check the following guide how to easily setup the Homestead.yaml file.

### Homestead installation

I created two simple scripts for easily Homestead configuration. For create a Homestead.yaml file issue the following command:
	
	# on Linux or OSX
	bash homestead.sh
	
	# on Windows
	just double click on homestead.bat

Vagrantfile is now configured to use the box version 0.5.0 and has disabled update checks.
 If you want to change this jus remove the following lines in [Vagranfile](Vagrantfile):
 
    config.vm.box_check_update = false
    config.vm.box_version = "0.5.0"

To get rid of Xenial networking error, please use the latest Vagrant. Can be downloaded [here](https://www.vagrantup.com/downloads.html).

### Using the simple ACL
I've added into this template some classes - [simple ACL](https://gist.github.com/drawmyattention/8cb599ee5dc0af5f4246) - for simple ACL system.
If you want to use them, read the following doc:

##### Adding new Role

If you want to add new role, open database/seeds/RoleTableSeeder.php and add create the new role object:
 
```php
Role::create([
    'id'            => 1,
    'name'          => 'Admin',
    'description'   => 'Description of this role'
]);
```
    
Then protect your routes with the roles middleware.

```php
Route::group(['middleware' => ['roles'], 'roles' => ['admin']], function(){
	// add here all protected routes
});
```
	
If you don't want to use this ACL remove this files:

	database/seed/RoleTableSeeder.php
	database/migrations/2016_08_06_141308_create_roles_table.php
	app/Role.php
	app/Http/Middleware/CheckRole.php
	
Files to edit:
	
	app/User.php - delete all role stuff
	app/Http/Kernel.php - delte role middleware in routeMiddlewares
	database/migrations/2014_10_12_000000_create_users_table.php - delete role_id
		

### License

This template is licensed under the MIT license.

The MIT License (MIT)  
Copyright (c)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
