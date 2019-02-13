<?php

namespace Shopping\Order;

use User;

class Order
{
    /**
     * $order object.
     */
    protected $order;

    /**
     * Constructor.
     */
    public function __construct(\Shopping\Order\Interfaces\OrderRepositoryInterface $order)
    {
        $this->order = $order;
    }

    /**
     * Returns count of order.
     *
     * @param array $filter
     *
     * @return int
     */
    public function count()
    {
        return  0;
    }

    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.order.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->order->pushCriteria(new \Litepie\Shopping\Repositories\Criteria\OrderUserCriteria());
        }

        $order = $this->order->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('order::' . $view, compact('order'))->render();
    }
}
