# Wizardtube installer package
- php 8.2
- require Laravel 10

## Installation

```sh
composer require spizian/wizardtube
```

Code style will be automatically fixed by php-cs-fixer.

To secure the code so that it can only be accessed in certain domains, create a middleware class.
Example "CheckDomain"

```sh
php artisan make:middleware CheckDomain
```

then create a handle function
```php
public function handle(Request $request, Closure $next): Response
{
    if ($request->getHttpHost() != env('DOMAIN_SITE')) {
        return response('Create message here'); // Change respond with what you want.
    }
    return $next($request);
}
```

Import in route and and create a middleware group for CheckDomain.
```php
use App\Http\Middleware\CheckDomain;

Route::middleware(CheckDomain::class)->group(function () {
    // Your routes here
});
```