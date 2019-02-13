<?php

namespace Shopping\Order\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class OrderTransformer extends TransformerAbstract
{
    public function transform(\Shopping\Order\Models\Order $order)
    {
        return [
            'id'                => $order->getRouteKey(),
            'key'               => [
                'public'    => $order->getPublicKey(),
                'route'     => $order->getRouteKey(),
            ], 
            'id'                => $order->id,
            'user_id'           => $order->user_id,
            'payment_address'   => $order->payment_address,
            'shipping_address'  => $order->shipping_address,
            'shipping_method'   => $order->shipping_method,
            'shipping_method_description' => $order->shipping_method_description,
            'payment_method'    => $order->payment_method,
            'payment_status'    => $order->payment_status,
            'payment_method_description' => $order->payment_method_description,
            'total'             => $order->total,
            'subtotal'          => $order->subtotal,
            'coupon_id'         => $order->coupon_id,
            'invoice_no'        => $order->invoice_no,
            'invoice_prefix'    => $order->invoice_prefix,
            'firstname'         => $order->firstname,
            'lastname'          => $order->lastname,
            'email'             => $order->email,
            'telephone'         => $order->telephone,
            'fax'               => $order->fax,
            'payment_custom_field' => $order->payment_custom_field,
            'payment_code'      => $order->payment_code,
            'shipping_custom_field' => $order->shipping_custom_field,
            'shipping_code'     => $order->shipping_code,
            'comment'           => $order->comment,
            'order_status_id'   => $order->order_status_id,
            'tracking'          => $order->tracking,
            'ip'                => $order->ip,
            'created_at'        => $order->created_at,
            'updated_at'        => $order->updated_at,
            'deleted_at'        => $order->deleted_at,
            'url'               => [
                'public'    => trans_url('order/'.$order->getPublicKey()),
                'user'      => guard_url('order/order/'.$order->getRouteKey()),
            ], 
            'status'            => trans('app.'.$order->status),
            'created_at'        => format_date($order->created_at),
            'updated_at'        => format_date($order->updated_at),
        ];
    }
}