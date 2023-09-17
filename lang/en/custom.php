<?php


return [
    'dashboard' => [
        'menu' => [
            'logo' => 'Ofspace LLC',
            'items' => [
                'item' => ':Name'
            ],
            'box' => [
                'title' => 'Upgrade Your Plan To Premium',
                'button' => 'Get Started'
            ]
        ],
        'main' => [
            'input' => [
                'search' => 'search'
            ],
            'box' => [
                'info' => [
                    '24H' => '24H Change',
                    'highest' => 'Highest Balance',
                    'portfolio' => 'Portfolio Age'
                ]
            ],
            'symbol' => [
                'symbol' => ':Name'
            ],
            'button' => [
                'deposit' => 'Deposit',
                'withdraw' => 'Withdraw'
            ],
            'table' => [
                'th' => [
                    '' => '',
                    'token' => 'TOKEN',
                    'symbol' => 'SYMBOL',
                    'price' => 'PRICE',
                    '24h' => '24H',
                    'market' => 'MARKET_CAP'
                ],
                'td' => [
                    'coin' => ':Name'
                ]
            ],
            'news' => [
                'coin' => [
                    'title' => 'New on Coinranking'
                ]
            ],
            'notification' => [
                'Not' => 'No Notification'
            ],

            'Modal' => [
                'Deposit' => [
                    'description' => 'Recive crypto from Zero user or fund your zero wallet from external accounts',
                    'item' => ':Name',
                    'Wallet' => 'Wallet Address',
                    'address' => 'bc1qtsnh22563prpepfnnlpw0flt6y6lemtmlz445m',
                    'copy' => 'Copy Address',
                    'share' => 'Share Address',
                    'Network' => ':Name',
                    'status' => ':Name'
                ],
                'Withdraw' => [
                    'placeholder' => ':Name',
                    'label' => ':Name',
                    'submit' => 'Submit',
                    'description' => 'By clicking to Allow access,you authorize Coinbase to use
                        your information in accordance with its',
                    'document' => 'Read documentation',
                    'policy' => 'Privacy Policy',
                    'balance' => 'Balance',
                ]
            ]
        ],
        'orders' => [
            'top' => [
                'title' => 'Orders',
                'place' => 'Search by order #, name or email...',
                'button' => [
                    'destroy' => 'delete all'
                ]
            ],
            'modal' => [
                'action' => [
                    'edit' => [
                        'title' => 'Edit User',
                        'label' => ':Name',
                        'button' => [
                            'submit' => 'Save'
                        ]
                    ],
                    'destroy' => [
                        'title' => 'Are you sure you want delete this product?',
                        'button' => [
                            'submit' => "Yes,I'm sure",
                            'cancel' => 'No, cancel'
                        ]
                    ]
                ]
            ],
            'order_status' => [
                'ok' => 'Paid',
                'error' => 'Not Paid'
            ],
            'all' => [
                'title' => ':Name'
            ]
        ],
        'invite' => [
        ],

        'setting' => [
            'type' => [
                'title' => ':title'
            ],
            'form' => [
                'upload' => [
                    'profile' => 'Upload new picture'
                ],
                'button' => 'Save Changes',
                'label' => ':label',
                'place' => ':text'
            ]
        ],
        'security' => [
            'form' => [
                'label' => ':label'
            ],
            'two-verification' => [
                'no_secure_title' => 'You have not enabled two factor authentication',
                'secure_title'=>'Your account is secure',
                'description' => 'When two factor authentication is enabled, you will be prompted for a
        secure, random token during authentication. You may retrieve this token from your phones GoogleAuthenticator application',
                'enable'=>'ENABLE',
                'disable'=>'DISABLE'
            ]
        ]
    ]

];
