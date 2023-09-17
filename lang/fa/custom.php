<?php


return [
    'dashboard' => [
        'menu' => [
            'logo' => 'Ofspace LLC',
            'items' => [
                'item' => ':Name'
            ],
            'box' => [
                'title' => 'حساب ویژه شما امادست',
                'button' => 'شروع'
            ]
        ],
        'main' => [
            'input' => [
                'search' => 'جستجو'
            ],
            'box' => [
                'info' => [
                    '24H' => 'کیف پول',
                    'highest' => 'بیشترین تراکنش',
                    'portfolio' => 'تاریخ ثبت نام'
                ]
            ],
            'symbol' => [
                'symbol' => ':Name'
            ],
            'button' => [
                'deposit' => 'واریز',
                'withdraw' => 'برداشت'
            ],
            'table' => [
                'th' => [
                    '' => '',
                    'token' => 'ارز',
                    'symbol' => 'سمبل',
                    'price' => 'قیمت',
                    '24h' => 'تغییرات',
                    'market' => 'مارکت'
                ],
                'td' => [
                    'coin' => ':Name'
                ]
            ],
            'news' => [
                'coin' => [
                    'title' => 'ارز های جدید'
                ]
            ],
            'notification' => [
                'Not' => 'اعلانی وجود ندارد'
            ],

            'Modal' => [
                'Deposit' => [
                    'description' => 'ارز دیجیتال را از کاربر Zero دریافت کنید یا کیف پول صفر خود را از حساب های خارجی تامین کنید',
                    'item' => ':Name',
                    'Wallet' => 'کیف پول',
                    'address' => 'bc1qtsnh22563prpepfnnlpw0flt6y6lemtmlz445m',
                    'copy' => 'کپی',
                    'share' => 'ارسال',
                    'Network' => ':Name',
                    'status' => ':Name'
                ],
                'Withdraw' => [
                    'placeholder' => ':Name',
                    'label' => ':Name',
                    'submit' => 'تایید',
                    'description' => 'بعد از تایید پرداخت مبلغ مورد نظر طی 24 ساعت کاری واریز میشود',
                    'document' => 'راهنمای برداشت',
                    'policy'=>'حریم خصوصی',
                    'balance' => 'موجودی',

                ]
            ]
        ],
        'orders'=>[
            'top'=>[
                'title'=>'Orders',
                'place'=>'Search by order #, name or email...',
                'button'=>[
                    'filters'=>'Filters'
                ]
            ]
        ]
    ]

];
