<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'shopping',

    /*
     * Package.
     */
    'package'   => 'order',

    /*
     * Modules.
     */
    'modules'   => ['order'],

    
    'order'       => [
        'model' => [
            'model'                 => \Shopping\Order\Models\Order::class,
            'table'                 => 'orders',
            'presenter'             => \Shopping\Order\Repositories\Presenter\OrderPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'user_id',  'payment_address',  'shipping_address',  'shipping_method',  'shipping_method_description',  'payment_method',  'payment_status',  'payment_method_description',  'total',  'subtotal',  'coupon_id',  'invoice_no',  'invoice_prefix',  'firstname',  'lastname',  'email',  'telephone',  'fax',  'payment_custom_field',  'payment_code',  'shipping_custom_field',  'shipping_code',  'comment',  'order_status_id',  'tracking',  'ip',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'order/order',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Shopping',
            'package'   => 'Order',
            'module'    => 'Order',
        ],

    ],
];
