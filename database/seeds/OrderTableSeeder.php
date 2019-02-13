<?php

namespace Shopping;

use DB;
use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('orders')->insert([
            
        ]);

        DB::table('permissions')->insert([
            [
                'slug'      => 'order.order.view',
                'name'      => 'View Order',
            ],
            [
                'slug'      => 'order.order.create',
                'name'      => 'Create Order',
            ],
            [
                'slug'      => 'order.order.edit',
                'name'      => 'Update Order',
            ],
            [
                'slug'      => 'order.order.delete',
                'name'      => 'Delete Order',
            ],
            
            
        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/order/order',
                'name'        => 'Order',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/order/order',
                'name'        => 'Order',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'order',
                'name'        => 'Order',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
            [
                'pacakge'   => 'Order',
                'module'    => 'Order',
                'user_type' => null,
                'user_id'   => null,
                'key'       => 'order.order.key',
                'name'      => 'Some name',
                'value'     => 'Some value',
                'type'      => 'Default',
                'control'   => 'text',
            ],
            */
        ]);
    }
}
