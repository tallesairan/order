@extends('resource.index')
@php
$links['create'] = guard_url('order/order/create');
$links['search'] = guard_url('order/order');
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('order::order.title.main') !!}
@stop

@section('sub.title') 
{!! __('order::order.title.list') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('order/order')!!}">{!! __('order::order.name') !!}</a></li>
  <li>{{ __('app.list') }}</li>
@stop

@section('entry') 
<div id="entry-form">

</div>
@stop

@section('list')
    @include('order::order.partial.list.' . $view, ['mode' => 'list'])
@stop

@section('pagination') 
    {!!$orders->links()!!}
@stop

@section('script')

@stop

@section('style')

@stop 
