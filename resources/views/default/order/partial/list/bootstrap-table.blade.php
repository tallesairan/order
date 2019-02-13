            <table class="table" id="main-table" data-url="{!!guard_url('order/order?withdata=Y')!!}">
                <thead>
                    <tr>
                        <th data-field="shipping_method">{!! trans('order::order.label.shipping_method')!!}</th>
                    <th data-field="payment_method">{!! trans('order::order.label.payment_method')!!}</th>
                    <th data-field="payment_status">{!! trans('order::order.label.payment_status')!!}</th>
                    <th data-field="total">{!! trans('order::order.label.total')!!}</th>
                    <th data-field="subtotal">{!! trans('order::order.label.subtotal')!!}</th>
                    <th data-field="invoice_no">{!! trans('order::order.label.invoice_no')!!}</th>
                    <th data-field="invoice_prefix">{!! trans('order::order.label.invoice_prefix')!!}</th>
                    <th data-field="firstname">{!! trans('order::order.label.firstname')!!}</th>
                    <th data-field="lastname">{!! trans('order::order.label.lastname')!!}</th>
                    <th data-field="email">{!! trans('order::order.label.email')!!}</th>
                    <th data-field="telephone">{!! trans('order::order.label.telephone')!!}</th>
                    <th data-field="ip">{!! trans('order::order.label.ip')!!}</th>
                        <th data-field="actions"  data-formatter="operateFormatter" class="text-right">Actions</th>
                    </tr>
                </thead>
            </table>