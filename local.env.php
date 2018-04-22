<?php

/*
|--------------------------------------------------------------------------
| # Environment master settings
|--------------------------------------------------------------------------
*/

return [
        'debug'                      => TRUE,
        'app_key'                    => 'mysupersecurekey',
        'port'                       => FALSE,
        'rocket_chat_outgoing_token' => 'CtWwf3MW2GiEvwsEo2FgYytF',
        'rocket_chat_incoming_url'   => 'http://192.168.1.150:3000/hooks/CJBtqqFm6c7LLuo6X/tDwzg9DF2wBDHWgKxHujYek9ptwy7vMcfhashmsAfo9c2s7N',
        'rocket_chat_bot_name'       => 'rocket.cat',
        
        'middlewares' => [
        
        ],
        
        'routes' => [
        
        ],
        
        'databases' => [
                'on'      => TRUE,
                'default' => 'local',
                'local'   => [
                        'service'       => TRUE,
                        'driver'        => 'mysql',
                        'hostname'      => 'localhost',
                        'username'      => 'root',
                        'password'      => 'root',
                        'basename'      => 'softn_rocket_chat',
                        'limit_request' => 25,
                ],
        ],
        
        'mail' => [
                'service' => FALSE,
                'email'   => 'your@email.test',
                'name'    => 'Your Name',
        ],

];
