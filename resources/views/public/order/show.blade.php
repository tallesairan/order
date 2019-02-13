            @include('order::public.order.partial.header')

            <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('order::public.order.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{!!url($order->defaultImage('images' , 'xl'))!!}" alt="{{$order->title}}">
                                    </div>
                                    <div class="content">
                                        <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="id">
                    {!! trans('order::order.label.id') !!}
                </label><br />
                    {!! $order['id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_id">
                    {!! trans('order::order.label.user_id') !!}
                </label><br />
                    {!! $order['user_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="payment_address">
                    {!! trans('order::order.label.payment_address') !!}
                </label><br />
                    {!! $order['payment_address'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="shipping_address">
                    {!! trans('order::order.label.shipping_address') !!}
                </label><br />
                    {!! $order['shipping_address'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="shipping_method">
                    {!! trans('order::order.label.shipping_method') !!}
                </label><br />
                    {!! $order['shipping_method'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="shipping_method_description">
                    {!! trans('order::order.label.shipping_method_description') !!}
                </label><br />
                    {!! $order['shipping_method_description'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="payment_method">
                    {!! trans('order::order.label.payment_method') !!}
                </label><br />
                    {!! $order['payment_method'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="payment_status">
                    {!! trans('order::order.label.payment_status') !!}
                </label><br />
                    {!! $order['payment_status'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="payment_method_description">
                    {!! trans('order::order.label.payment_method_description') !!}
                </label><br />
                    {!! $order['payment_method_description'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="total">
                    {!! trans('order::order.label.total') !!}
                </label><br />
                    {!! $order['total'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="subtotal">
                    {!! trans('order::order.label.subtotal') !!}
                </label><br />
                    {!! $order['subtotal'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="coupon_id">
                    {!! trans('order::order.label.coupon_id') !!}
                </label><br />
                    {!! $order['coupon_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="invoice_no">
                    {!! trans('order::order.label.invoice_no') !!}
                </label><br />
                    {!! $order['invoice_no'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="invoice_prefix">
                    {!! trans('order::order.label.invoice_prefix') !!}
                </label><br />
                    {!! $order['invoice_prefix'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="firstname">
                    {!! trans('order::order.label.firstname') !!}
                </label><br />
                    {!! $order['firstname'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="lastname">
                    {!! trans('order::order.label.lastname') !!}
                </label><br />
                    {!! $order['lastname'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="email">
                    {!! trans('order::order.label.email') !!}
                </label><br />
                    {!! $order['email'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="telephone">
                    {!! trans('order::order.label.telephone') !!}
                </label><br />
                    {!! $order['telephone'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="fax">
                    {!! trans('order::order.label.fax') !!}
                </label><br />
                    {!! $order['fax'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="payment_custom_field">
                    {!! trans('order::order.label.payment_custom_field') !!}
                </label><br />
                    {!! $order['payment_custom_field'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="payment_code">
                    {!! trans('order::order.label.payment_code') !!}
                </label><br />
                    {!! $order['payment_code'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="shipping_custom_field">
                    {!! trans('order::order.label.shipping_custom_field') !!}
                </label><br />
                    {!! $order['shipping_custom_field'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="shipping_code">
                    {!! trans('order::order.label.shipping_code') !!}
                </label><br />
                    {!! $order['shipping_code'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="comment">
                    {!! trans('order::order.label.comment') !!}
                </label><br />
                    {!! $order['comment'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="order_status_id">
                    {!! trans('order::order.label.order_status_id') !!}
                </label><br />
                    {!! $order['order_status_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="tracking">
                    {!! trans('order::order.label.tracking') !!}
                </label><br />
                    {!! $order['tracking'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="ip">
                    {!! trans('order::order.label.ip') !!}
                </label><br />
                    {!! $order['ip'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_at">
                    {!! trans('order::order.label.created_at') !!}
                </label><br />
                    {!! $order['created_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="updated_at">
                    {!! trans('order::order.label.updated_at') !!}
                </label><br />
                    {!! $order['updated_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="deleted_at">
                    {!! trans('order::order.label.deleted_at') !!}
                </label><br />
                    {!! $order['deleted_at'] !!}
            </div>
        </div>
    </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::textarea ('payment_address')
                    -> label(trans('order::order.label.payment_address'))
                    -> placeholder(trans('order::order.placeholder.payment_address'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::textarea ('shipping_address')
                    -> label(trans('order::order.label.shipping_address'))
                    -> placeholder(trans('order::order.placeholder.shipping_address'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('shipping_method')
                       -> label(trans('order::order.label.shipping_method'))
                       -> placeholder(trans('order::order.placeholder.shipping_method'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::textarea ('shipping_method_description')
                    -> label(trans('order::order.label.shipping_method_description'))
                    -> placeholder(trans('order::order.placeholder.shipping_method_description'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('payment_method')
                       -> label(trans('order::order.label.payment_method'))
                       -> placeholder(trans('order::order.placeholder.payment_method'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('payment_status')
                       -> label(trans('order::order.label.payment_status'))
                       -> placeholder(trans('order::order.placeholder.payment_status'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::textarea ('payment_method_description')
                    -> label(trans('order::order.label.payment_method_description'))
                    -> placeholder(trans('order::order.placeholder.payment_method_description'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('total')
                       -> label(trans('order::order.label.total'))
                       -> placeholder(trans('order::order.placeholder.total'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('subtotal')
                       -> label(trans('order::order.label.subtotal'))
                       -> placeholder(trans('order::order.placeholder.subtotal'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('coupon_id')
                       -> label(trans('order::order.label.coupon_id'))
                       -> placeholder(trans('order::order.placeholder.coupon_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('invoice_no')
                       -> label(trans('order::order.label.invoice_no'))
                       -> placeholder(trans('order::order.placeholder.invoice_no'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('invoice_prefix')
                       -> label(trans('order::order.label.invoice_prefix'))
                       -> placeholder(trans('order::order.placeholder.invoice_prefix'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('firstname')
                       -> label(trans('order::order.label.firstname'))
                       -> placeholder(trans('order::order.placeholder.firstname'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('lastname')
                       -> label(trans('order::order.label.lastname'))
                       -> placeholder(trans('order::order.placeholder.lastname'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::email('email')
                       -> label(trans('order::order.label.email'))
                       -> placeholder(trans('order::order.placeholder.email'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('telephone')
                       -> label(trans('order::order.label.telephone'))
                       -> placeholder(trans('order::order.placeholder.telephone'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('fax')
                       -> label(trans('order::order.label.fax'))
                       -> placeholder(trans('order::order.placeholder.fax'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('payment_custom_field')
                       -> label(trans('order::order.label.payment_custom_field'))
                       -> placeholder(trans('order::order.placeholder.payment_custom_field'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('payment_code')
                       -> label(trans('order::order.label.payment_code'))
                       -> placeholder(trans('order::order.placeholder.payment_code'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('shipping_custom_field')
                       -> label(trans('order::order.label.shipping_custom_field'))
                       -> placeholder(trans('order::order.placeholder.shipping_custom_field'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('shipping_code')
                       -> label(trans('order::order.label.shipping_code'))
                       -> placeholder(trans('order::order.placeholder.shipping_code'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::textarea ('comment')
                    -> label(trans('order::order.label.comment'))
                    -> placeholder(trans('order::order.placeholder.comment'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('order_status_id')
                       -> label(trans('order::order.label.order_status_id'))
                       -> placeholder(trans('order::order.placeholder.order_status_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('tracking')
                       -> label(trans('order::order.label.tracking'))
                       -> placeholder(trans('order::order.placeholder.tracking'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('ip')
                       -> label(trans('order::order.label.ip'))
                       -> placeholder(trans('order::order.placeholder.ip'))!!}
                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



