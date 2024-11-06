<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Mailer
    |--------------------------------------------------------------------------
    |
    | This option controls the default mailer that is used to send any email
    | messages sent by your application. Alternative mailers may be setup
    | and used as needed; however, this mailer will be used by default.
    |
     */

    'default' => env('MAIL_MAILER', 'smtp'),

    /*
    |--------------------------------------------------------------------------
    | Mailer Configurations
    |--------------------------------------------------------------------------
    |
    | Here you may configure all of the mailers used by your application plus
    | their respective settings. Several examples have been configured for
    | you and you are free to add your own as your application requires.
    |
    | Laravel supports a variety of mail "transport" drivers to be used while
    | sending an e-mail. You will specify which one you are using for your
    | mailers below. You are free to add additional mailers as required.
    |
    | Supported: "smtp", "sendmail", "mailgun", "ses",
    |            "postmark", "log", "array", "failover"
    |
     */

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'premium221.web-hosting.com'),
            'port' => env('MAIL_PORT', 465),
            'encryption' => env('MAIL_ENCRYPTION', 'ssl'),
            'username' => env('MAIL_USERNAME', 'info@tgrafrica.com'),
            'password' => env('MAIL_PASSWORD', 'T@nG0M@m@S3@T3r'),
            'from' => [
                'address' => env('MAIL_FROM_ADDRESS', 'info@tgrafrica.com'),
                'name' => env('MAIL_FROM_NAME', 'TGR Africa'),
            ],
        ],

        'investors' => [
            'transport' => 'smtp',
            'host' => env('INVESTOR_MAIL_HOST', 'premium221.web-hosting.com'),
            'port' => env('INVESTOR_MAIL_PORT', 465),
            'encryption' => env('INVESTOR_MAIL_ENCRYPTION', 'ssl'),
            'username' => env('INVESTOR_MAIL_USERNAME', 'investorscommunity@tgrafrica.com'),
            'password' => env('INVESTOR_MAIL_PASSWORD', 'L@k3S!d33st@t3'),
            'from' => [
<<<<<<< HEAD
                'address' => env('INVESTOR_MAIL_FROM_ADDRESS', 'investorscommunity@tgrafrica.com'),
                'name' => env('INVESTOR_MAIL_FROM_NAME', 'TGR Investors Community'),
            ],
        ],

=======
                'address' => env('MAIL_FROM_ADDRESS', 'investorscommunity@tgrafrica.com'),
                'name' => env('MAIL_FROM_NAME', 'TGR Investors Community'),
            ],
        ],
        
>>>>>>> 5340d2a (New Pull)
        // 'smtp' => [
        //     'transport' => 'smtp',
        //     'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
        //     'port' => env('MAIL_PORT', 587),
        //     'encryption' => env('MAIL_ENCRYPTION', 'tls'),
        //     'username' => env('MAIL_USERNAME'),
        //     'password' => env('MAIL_PASSWORD'),
        //     'timeout' => null,
        //     'local_domain' => env('MAIL_EHLO_DOMAIN'),
        // ],
        // 'investors' => [
        //     'transport' => 'smtp',
        //     'host' => 'premium221.web-hosting.com',
        //     'port' => 465,
        //     'encryption' => 'ssl',
        //     'username' => 'investorscommunity@tgrafrica.com',
        //     'password' => 'L@k3S!d33st@t3',
        // ],
        'ses' => [
            'transport' => 'ses',
        ],

        'mailgun' => [
            'transport' => 'mailgun',
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],

        'postmark' => [
            'transport' => 'postmark',
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],

        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
        ],
    ],

    //Investors mailers config.

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address
    |--------------------------------------------------------------------------
    |
    | You may wish for all e-mails sent by your application to be sent from
    | the same address. Here, you may specify a name and address that is
    | used globally for all e-mails that are sent by your application.
    |
     */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Markdown Mail Settings
    |--------------------------------------------------------------------------
    |
    | If you are using Markdown based email rendering, you may configure your
    | theme and component paths here, allowing you to customize the design
    | of the emails. Or, you may simply stick with the Laravel defaults!
    |
     */

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
