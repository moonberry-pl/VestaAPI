<p align="center">
<img width="150"  src="https://cloud.githubusercontent.com/assets/5102591/25568951/b69285b4-2e15-11e7-9bd1-c91a04fb7f97.png">
</p>


#
<p align="center">
Powerful API client hosting VestaCP for Laravel
</p>

<p align="center">
<a href="https://codeclimate.com/github/tabuna/VestaAPI"><img src="https://codeclimate.com/github/tabuna/VestaAPI/badges/gpa.svg" /></a>
<a href="https://styleci.io/repos/89877448"><img src="https://styleci.io/repos/89877448/shield?branch=master"/></a>
<a href="https://packagist.org/packages/tabuna/vesta-api"><img src="https://poser.pugx.org/tabuna/vesta-api/v/stable"/></a>
<a href="https://packagist.org/packages/tabuna/vesta-api"><img src="https://poser.pugx.org/tabuna/vesta-api/downloads"/></a>
<a href="https://packagist.org/packages/tabuna/vesta-api"><img src="https://poser.pugx.org/tabuna/vesta-api/license"/></a>
</p>


## Installation


#### Via Composer

Going your project directory on shell and run this command: 

```sh
$ composer require tabuna/vesta-api
```

Add to `config/app.php`:

Service provider to the 'providers' array:

```php
'providers' => [
    // Laravel Framework Service Providers...
    //...
    
    // Package Service Providers
    VestaAPI\Providers\VestaServiceProvider::class
    
    // ...
    
    // Application Service Providers
    // ...
];
```

Facades aliases to the 'aliases' array:
```php
'aliases' => [
    // ...
    
    'Vesta' => VestaAPI\Facades\Vesta::class,
];
```

Publication
```php
php artisan vendor:publish
```


## Usage

	
Simple usage
```php
$backups = Vesta::server('testVDS')->user('MyUserName')->listUserBackups();

//or class
$vesta = new Vesta('testVDS','MyUserName');
$vesta->addCron(
    $request->v_min,
    $request->v_hour,
    $request->v_day,
    $request->v_month,
    $request->v_wday,
    $request->v_cmd
);
```

