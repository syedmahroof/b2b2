<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session"
    |
    */
    'guards' => [
        // Default guard for regular users
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    
        // Guard for the admin users
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
    
        // Guard for the suppliers
        'supplier' => [
            'driver' => 'session',
            'provider' => 'suppliers',
        ],
    
        // Guard for the buyers
        'buyer' => [
            'driver' => 'session',
            'provider' => 'buyers',
        ],
    
        // Guard for marketing executives
        'marketing' => [
            'driver' => 'session',
            'provider' => 'marketing_executives',
        ],
    
        // Guard for quality checkers
        'quality-checker' => [
            'driver' => 'session',
            'provider' => 'quality_checkers',
        ],
    
        // Guard for customer support
        'customer-support' => [
            'driver' => 'session',
            'provider' => 'customer_supports',
        ],
    
        // Guard for inventory managers
        'inventory-manager' => [
            'driver' => 'session',
            'provider' => 'inventory_managers',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        // Default user provider for regular users
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
    
        // User provider for admins
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class, // Replace 'App\Models\Admin' with the actual path to your Admin model.
        ],
    
        // User provider for suppliers
        'suppliers' => [
            'driver' => 'eloquent',
            'model' => App\Models\Supplier::class, // Replace 'App\Models\Supplier' with the actual path to your Supplier model.
        ],
    
        // User provider for buyers
        'buyers' => [
            'driver' => 'eloquent',
            'model' => App\Models\Buyer::class, // Replace 'App\Models\Buyer' with the actual path to your Buyer model.
        ],
    
        // User provider for marketing executives
        'marketing_executives' => [
            'driver' => 'eloquent',
            'model' => App\Models\MarketingExecutive::class, // Replace 'App\Models\MarketingExecutive' with the actual path to your MarketingExecutive model.
        ],
    
        // User provider for quality checkers
        'quality_checkers' => [
            'driver' => 'eloquent',
            'model' => App\Models\QualityChecker::class, // Replace 'App\Models\QualityChecker' with the actual path to your QualityChecker model.
        ],
    
        // User provider for customer support
        'customer_supports' => [
            'driver' => 'eloquent',
            'model' => App\Models\CustomerSupport::class, // Replace 'App\Models\CustomerSupport' with the actual path to your CustomerSupport model.
        ],
    
        // User provider for inventory managers
        'inventory_managers' => [
            'driver' => 'eloquent',
            'model' => App\Models\InventoryManager::class, // Replace 'App\Models\InventoryManager' with the actual path to your InventoryManager model.
        ],
    ],
    

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expiry time is the number of minutes that each reset token will be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    | The throttle setting is the number of seconds a user must wait before
    | generating more password reset tokens. This prevents the user from
    | quickly generating a very large amount of password reset tokens.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
