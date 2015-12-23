HyperbolaaUeditor
=====================

The ueditor generation support in Symfony2.

Installation
------------
### Step 1: Composer
Add the following require line to the `composer.json` file:
``` json
{
    "require": {
        "hyperbolaa/ueditor": "dev-master"
    }
}
```
And actually install it in your project using Composer:
``` bash
php composer.phar install
```
You can also do this in one step with this command:
``` bash
$ php composer.phar require hyperbolaa/ueditor "dev-master"
```

### Step 2: Enable the bundle

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Hyperbolaa\Ueditor\HyperbolaaUeditorBundle(),
    );
}
```

## Step 3: Enable the route

Add this to your routing configuration in `app/config/routing.yml`:

``` yaml
hyperbolaa_ueditor:
    resource: "@HyperbolaaUeditorBundle/Controller/"
    type:     annotation
```

Configuration
-------------
You can configure some options in `app/config/config.yml`. Those are the default
values:

``` yaml
hyperbolaa_ueditor:
    author: hyperbolaa
    find_best_mask: true
    find_from_random: false
    absolute_url: true
```

Usage examples
--------------

<img src="{{ hyperbolaa_ueditor('Text to encode') }}" />

<img src="{{ 'Text to encode'|hyperbolaa_ueditor }}" />


