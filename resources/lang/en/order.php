<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for order in order package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  order module in order package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Order',
    'names'         => 'Orders',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Orders',
        'sub'   => 'Orders',
        'list'  => 'List of orders',
        'edit'  => 'Edit order',
        'create'    => 'Create new order'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'user_id'                    => 'Please enter user id',
        'payment_address'            => 'Please enter payment address',
        'shipping_address'           => 'Please enter shipping address',
        'shipping_method'            => 'Please enter shipping method',
        'shipping_method_description'        => 'Please enter shipping method description',
        'payment_method'             => 'Please enter payment method',
        'payment_status'             => 'Please enter payment status',
        'payment_method_description'        => 'Please enter payment method description',
        'total'                      => 'Please enter total',
        'subtotal'                   => 'Please enter subtotal',
        'coupon_id'                  => 'Please enter coupon id',
        'invoice_no'                 => 'Please enter invoice no',
        'invoice_prefix'             => 'Please enter invoice prefix',
        'firstname'                  => 'Please enter firstname',
        'lastname'                   => 'Please enter lastname',
        'email'                      => 'Please enter email',
        'telephone'                  => 'Please enter telephone',
        'fax'                        => 'Please enter fax',
        'payment_custom_field'        => 'Please enter payment custom field',
        'payment_code'               => 'Please enter payment code',
        'shipping_custom_field'        => 'Please enter shipping custom field',
        'shipping_code'              => 'Please enter shipping code',
        'comment'                    => 'Please enter comment',
        'order_status_id'            => 'Please enter order status id',
        'tracking'                   => 'Please enter tracking',
        'ip'                         => 'Please enter ip',
        'created_at'                 => 'Please select created',
        'updated_at'                 => 'Please select updated',
        'deleted_at'                 => 'Please select deleted',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'user_id'                    => 'User id',
        'payment_address'            => 'Payment address',
        'shipping_address'           => 'Shipping address',
        'shipping_method'            => 'Shipping method',
        'shipping_method_description'        => 'Shipping method description',
        'payment_method'             => 'Payment method',
        'payment_status'             => 'Payment status',
        'payment_method_description'        => 'Payment method description',
        'total'                      => 'Total',
        'subtotal'                   => 'Subtotal',
        'coupon_id'                  => 'Coupon id',
        'invoice_no'                 => 'Invoice no',
        'invoice_prefix'             => 'Invoice prefix',
        'firstname'                  => 'Firstname',
        'lastname'                   => 'Lastname',
        'email'                      => 'Email',
        'telephone'                  => 'Telephone',
        'fax'                        => 'Fax',
        'payment_custom_field'        => 'Payment custom field',
        'payment_code'               => 'Payment code',
        'shipping_custom_field'        => 'Shipping custom field',
        'shipping_code'              => 'Shipping code',
        'comment'                    => 'Comment',
        'order_status_id'            => 'Order status id',
        'tracking'                   => 'Tracking',
        'ip'                         => 'Ip',
        'created_at'                 => 'Created',
        'updated_at'                 => 'Updated',
        'deleted_at'                 => 'Deleted',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'shipping_method'            => ['name' => 'Shipping method', 'data-column' => 1, 'checked'],
        'payment_method'             => ['name' => 'Payment method', 'data-column' => 2, 'checked'],
        'payment_status'             => ['name' => 'Payment status', 'data-column' => 3, 'checked'],
        'total'                      => ['name' => 'Total', 'data-column' => 4, 'checked'],
        'subtotal'                   => ['name' => 'Subtotal', 'data-column' => 5, 'checked'],
        'invoice_no'                 => ['name' => 'Invoice no', 'data-column' => 6, 'checked'],
        'invoice_prefix'             => ['name' => 'Invoice prefix', 'data-column' => 7, 'checked'],
        'firstname'                  => ['name' => 'Firstname', 'data-column' => 8, 'checked'],
        'lastname'                   => ['name' => 'Lastname', 'data-column' => 9, 'checked'],
        'email'                      => ['name' => 'Email', 'data-column' => 10, 'checked'],
        'telephone'                  => ['name' => 'Telephone', 'data-column' => 11, 'checked'],
        'ip'                         => ['name' => 'Ip', 'data-column' => 12, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Orders',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
