# Yoyo demo app for Laravel

This is a port to Laravel of the [framework agnostic Yoyo app](https://github.com/clickfwd/yoyo-app)

Only 3 new files are added to the Laravel project:

- app/Providers/YoyoLaravelServiceProvider.php

- config/yoyo.php

    Here you can adjust Yoyo config settings such as the name of the route used for requests, class namespace for dynamic components and the location for the Yoyo components blade template files

- public/assets/scripts/yoyo.js

    You can find this file within the Yoyo vendor package

Services providers needed to registered in `config/app.php`:

```php
/*
* Package Service Providers...
*/
App\Providers\YoyoLaravelServiceProvider::class,
Clickfwd\Yoyo\Blade\YoyoServiceProvider::class, 
```
