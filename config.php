 <?php

return [
    'database' => [
        'name' => 'laracast',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ],
    'zohocrm' => [
        'apiBaseUrl' => 'www.zohoapis.com',
        'client_id'=>'1000.NOCG6IXDSQNRIHGC25FOV61AW7XJ1H',
        'client_secret'=>'52e7f821025b2e65468cd786937b78a6dde89e22f7',
        'redirect_uri'=>'http://localhost:888/auth',
        'accounts_url'=>'https://accounts.zoho.com',
        'currentUserEmail' => 'simanto@w3scloud.com',
        'token_persistence_path'=> dirname(__FILE__).'/log/',
        'applicationLogFilePath'=> dirname(__FILE__).'/log/',
    ]
];
