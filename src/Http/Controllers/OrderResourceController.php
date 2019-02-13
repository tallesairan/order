<?php

namespace Shopping\Order\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Shopping\Order\Http\Requests\OrderRequest;
use Shopping\Order\Interfaces\OrderRepositoryInterface;
use Shopping\Order\Models\Order;

/**
 * Resource controller class for order.
 */
class OrderResourceController extends BaseController
{

    /**
     * Initialize order resource controller.
     *
     * @param type OrderRepositoryInterface $order
     *
     * @return null
     */
    public function __construct(OrderRepositoryInterface $order)
    {
        parent::__construct();
        $this->repository = $order;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Shopping\Order\Repositories\Criteria\OrderResourceCriteria::class);
    }

    /**
     * Display a list of order.
     *
     * @return Response
     */
    public function index(OrderRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Shopping\Order\Repositories\Presenter\OrderPresenter::class)
                ->$function();
        }

        $orders = $this->repository->paginate();

        return $this->response->title(trans('order::order.names'))
            ->view('order::order.index', true)
            ->data(compact('orders'))
            ->output();
    }

    /**
     * Display order.
     *
     * @param Request $request
     * @param Model   $order
     *
     * @return Response
     */
    public function show(OrderRequest $request, Order $order)
    {

        if ($order->exists) {
            $view = 'order::order.show';
        } else {
            $view = 'order::order.new';
        }

        return $this->response->title(trans('app.view') . ' ' . trans('order::order.name'))
            ->data(compact('order'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new order.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(OrderRequest $request)
    {

        $order = $this->repository->newInstance([]);
        return $this->response->title(trans('app.new') . ' ' . trans('order::order.name')) 
            ->view('order::order.create', true) 
            ->data(compact('order'))
            ->output();
    }

    /**
     * Create new order.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(OrderRequest $request)
    {
        try {
            $attributes              = $request->all();
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $order                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('order::order.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('order/order/' . $order->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/order/order'))
                ->redirect();
        }

    }

    /**
     * Show order for editing.
     *
     * @param Request $request
     * @param Model   $order
     *
     * @return Response
     */
    public function edit(OrderRequest $request, Order $order)
    {
        return $this->response->title(trans('app.edit') . ' ' . trans('order::order.name'))
            ->view('order::order.edit', true)
            ->data(compact('order'))
            ->output();
    }

    /**
     * Update the order.
     *
     * @param Request $request
     * @param Model   $order
     *
     * @return Response
     */
    public function update(OrderRequest $request, Order $order)
    {
        try {
            $attributes = $request->all();

            $order->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('order::order.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('order/order/' . $order->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('order/order/' . $order->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the order.
     *
     * @param Model   $order
     *
     * @return Response
     */
    public function destroy(OrderRequest $request, Order $order)
    {
        try {

            $order->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('order::order.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('order/order/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('order/order/' . $order->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple order.
     *
     * @param Model   $order
     *
     * @return Response
     */
    public function delete(OrderRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('order::order.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('order/order'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/order/order'))
                ->redirect();
        }

    }

    /**
     * Restore deleted orders.
     *
     * @param Model   $order
     *
     * @return Response
     */
    public function restore(OrderRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('order::order.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/order/order'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/order/order/'))
                ->redirect();
        }

    }

}
