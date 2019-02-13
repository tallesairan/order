<?php

namespace Shopping\Order\Repositories\Eloquent;

use Shopping\Order\Interfaces\OrderRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('shopping.order.order.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('shopping.order.order.model.model');
    }
}
