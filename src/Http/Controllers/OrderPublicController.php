<?php

namespace Shopping\Order\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Shopping\Order\Interfaces\OrderRepositoryInterface;

class OrderPublicController extends BaseController
{
    // use OrderWorkflow;

    /**
     * Constructor.
     *
     * @param type \Shopping\Order\Interfaces\OrderRepositoryInterface $order
     *
     * @return type
     */
    public function __construct(OrderRepositoryInterface $order)
    {
        $this->repository = $order;
        parent::__construct();
    }

    /**
     * Show order's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $orders = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('$order::$order.names'))
            ->view('$order::public.order.index')
            ->data(compact('$orders'))
            ->output();
    }

    /**
     * Show order's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $orders = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('$order::$order.names'))
            ->view('$order::public.order.index')
            ->data(compact('$orders'))
            ->output();
    }

    /**
     * Show order.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $order = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);

        return $this->response->title($$order->name . trans('$order::$order.name'))
            ->view('$order::public.order.show')
            ->data(compact('$order'))
            ->output();
    }

}
