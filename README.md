# Laravel Boilerplate Project

Laravel version **5.4**.

This is the boilerplate project for any Laravel application with packages I'm using. Feel free to fork and edit everything you want. The template has this packages installed:

- [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper) Laravel IDE helper to generate helper files for my PhpStorm.
-
[zizaco/entrust](https://github.com/Zizaco/entrust) Adds ACL to your application.
- [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) To simplify application debuging.
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

If you want to use homestead package check the following guide how to easily setup the Homestead.yaml file.

### Homestead installation

I created two simple scripts for easily Homestead configuration. For create a Homestead.yaml file issue the following command:

	# on Linux or OSX
	bash homestead.sh

	# on Windows
	just double click on homestead.bat

You should use latest Vagrant and homeastead box version. You can get latest Vagrant [here](https://www.vagrantup.com/downloads.html).

### License

This template is licensed under the MIT license.

The MIT License (MIT)  
Copyright (c)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
