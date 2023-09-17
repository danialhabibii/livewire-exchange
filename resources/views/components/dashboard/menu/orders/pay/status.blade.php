@if($status)
    <i class="fa fa-check" aria-hidden="true"></i>
    <span>{{__('custom.dashboard.orders.order_status.ok')}}</span>
@else
    <i class="fa fa-close" aria-hidden="true"></i>
    <span>{{__('custom.dashboard.orders.order_status.error')}}</span>
@endif
