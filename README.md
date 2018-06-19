# SimpleMVC
In this project I'm trying to create a small and simple MVC based Web-App using PHP as well as composer packages.


## Dependencies ##
| Packages              | Version        |
|:--------------------- |:-------------- |
| Blade Template Engine | ^1.1           |
| Illuminate Database   | ^5.6           |
| PHP DotENV            | ^2.4           |


## Inspired by ##
* [Laravel](https://laravel.com)
* [YouTube/Codecourse](https://www.youtube.com/playlist?list=PLfdtiltiRHWGXVHXX09fxXDi-DqInchFD)


## How to use ##
* In order to use this project you need to install [composer](https://getcomposer.org) first.
* Install dependencies using composer __(inside project folder)__
    ```
    cmd> composer install
    ```

* Add Page:
    * Create Page Controller
    ```
    app/Controllers/template.Controller.php
    ```

    * Create Page View
    ```
    resources/views/pages/template.blade.php
    ```

    * Create Page Model __[Optional]__
    ```
    app/Models/Template.php
    ```
    ```
    cmd> composer dump-autoload
    ```

## Where to find stuff ##
* Init files
    ```
    app/init.php
    public/index.php
    composer.json
    ```

* Libraries (installed with __composer__)
    ```
    composer.json
    ```

* Core App files __(namespace: Core)__
    ```
    app/Core/
    ```

* Controller
    ```
    app/Controllers
    ```

* Models __(namespace: Model)__
    ```
    app/Models/
    ```

* Views
    * Master Layout
        ```
        resources/views/master.blade.php
        ```
    * Other Layouts
        ```
        resources/views/layouts/
        ```
    * Page Views
        ```
        resources/views/pages/
        ```
    * Page partials
        ```
        resources/views/partials/
        ```
    * Cached Views
        ```
        storage/views/
        ```

* URL Rewrite conditions + access control
    ```
    app/.htaccess
    public/.htaccess
    ```

* CSS
    ```
    public/css/
    ```

* JavaScript
    ```
    public/js/
    ```

* Images
    ```
    public/img/
    ```
