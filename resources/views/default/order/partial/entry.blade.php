            <div class='row'>
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