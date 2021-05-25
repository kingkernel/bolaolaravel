<?php

return [
//'default' => env('MAIL_MAILER', 'smtp'),
'default' => 'sendmail',
'driver' => 'sendmail',
'mailers' => [
    'smtp' => [
        'transport' => 'smtp',
        'host' => 'localhost',
        'port' => 25,
        'encryption' => 'null',
        'path' => 'C:/xampp/mailtodisk/mailtodisk.exe',
        //'username' => env('MAIL_USERNAME'),
        //'password' => env('MAIL_PASSWORD'),
    ],
    'ses' => [
        'transport' => 'ses',
    ],
    'sendmail' => [
        'transport' => 'sendmail',
        //'path' => '/usr/sbin/sendmail -bs',
        'host' => 'localhost',
        'port' => 25,
        'path' => 'C:/xampp/mailtodisk/mailtodisk.exe -t -i',
    ],
    'log' => [
        'transport' => 'log',
        'channel' => env('MAIL_LOG_CHANNEL'),
    ],
    'array' => [
        'transport' => 'array',
    ],
],
];