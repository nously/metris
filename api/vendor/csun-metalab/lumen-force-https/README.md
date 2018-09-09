# Lumen Force HTTPS Package
A small Composer package for Lumen 5.1 and above to force HTTPS in the URL via middleware.

## Table of Contents

* [Installation](#installation)
    * [Composer, Environment, and Service Provider](#composer-environment-and-service-provider)
        * [Composer](#composer)
        * [Environment](#environment)
        * [Service Provider](#service-provider)
    * [Configuration File](#configuration-file)
    * [Middleware Installation](#middleware-installation)
* [Required Environment Variables](#required-environment-variables)
* [Middleware](#middleware)
    * [Force HTTPS Middleware](#force-https-middleware)
* [Resources](#resources)

## Installation

### Composer, Environment, and Service Provider

#### Composer

To install from Composer, use the following command:

```
composer require csun-metalab/lumen-force-https
```

#### Environment

Now, add the following line(s) to your `.env` file:

```
FORCE_HTTPS=true
```

This will enable the forcing functionality.

#### Service Provider

Next, register the service provider and the configuration file in `bootstrap/app.php` as follows:

```
$app->configure('forcehttps');
$app->register(CSUNMetaLab\LumenForceHttps\Providers\ForceHttpsServiceProvider::class);
```

### Configuration File

If you do not already have a `config` directory in your project root, go ahead and create it.

In order to leverage the custom configuration values from this package, copy and paste the following code into a file called `forcehttps.php` within your `config` directory in Lumen:

```
<?php

return [

  /*
    |--------------------------------------------------------------------------
    | Force HTTPS
    |--------------------------------------------------------------------------
    |
    | Whether to force HTTPS on all URLs or not. Default is false.
    |
    */
  'force_https' => env('FORCE_HTTPS', false),

];

?>
```

### Middleware Installation

Finally, add a call to `$app->middleware()` in `bootstrap/app.php` to apply it to all requests the application receives:

```
$app->middleware(CSUNMetaLab\LumenForceHttps\Http\Middleware\ForceHttps::class);
```

## Required Environment Variables

You added an environment variable to your `.env` file that controls the protocol the application traffic uses.

### FORCE_HTTPS

Whether to force HTTPS on all URLs or not. Default is `false` to prevent any unexpected issues from forcing HTTPS directly upon installation.

## Middleware

### Force HTTPS Middleware

This class is namespaced as `CSUNMetaLab\LumenForceHttps\Http\Middleware\ForceHttps`.

The middleware performs the following steps:

1. Checks to see if the application configuration requests traffic to be forced over HTTPS
2. If so, it performs the following steps:
    1. Resolves the request URI as an absolute URL so it can also see the protocol
    2. Checks to see if the `HTTPS` server variable is a non-empty value or set as `off`
    2. If the protocol isn't already `https:` then it replaces it with `https:` and returns a redirect
3. If not, it passes the request instance to the next configured middleware in the pipeline

## Resources

### Middleware

* [Middleware in Lumen 5.1](https://lumen.laravel.com/docs/5.1/middleware)
* [Middleware in Lumen 5.2](https://lumen.laravel.com/docs/5.2/middleware)
* [Middleware in Lumen 5.3](https://lumen.laravel.com/docs/5.3/middleware)
* [Middleware in Lumen 5.4](https://lumen.laravel.com/docs/5.4/middleware)
* [Middleware in Lumen 5.5](https://lumen.laravel.com/docs/5.5/middleware)