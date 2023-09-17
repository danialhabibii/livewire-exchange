<div class="currency_order_table_container" wire:poll.500ms>
    <div class="order_nav_container">
        <div class="order_table_header">
            <div class="currency_order_nav_icon" wire:key="{{now()}}-sortDate" wire:click="sortBy('time')">
                <span class="order_table_header_nav">Time</span>
                <span><i class="fas fa-sort"></i></span>
            </div>
            <div class="currency_order_nav_icon" wire:key="{{now()}}-sortDate" wire:click="sortBy('pair')">
                <span class="order_table_header_nav">Pair</span>
                <span><i class="fas fa-sort"></i></span>
            </div>
            <div class="currency_order_nav_icon" wire:key="{{now()}}-sortDate" wire:click="sortBy('type')">
                <span class="order_table_header_nav">Type</span>
                <span><i class="fas fa-sort"></i></span>
            </div>
            <div class="currency_order_nav_icon" wire:key="{{now()}}-sortDate" wire:click="sortBy('price')">
                <span class="order_table_header_nav">Price</span>
                <span><i class="fas fa-sort"></i></span>
            </div>
            <div class="currency_order_nav_icon amount_field" wire:key="{{now()}}-sortDate" wire:click="sortBy('amount')">
                <span class="order_table_header_nav">Amount</span>
                <span><i class="fas fa-sort"></i></span>
            </div>

        </div>
        <div x-data="{cancel : false}">
            <div class="cancel_all">
                <span @click="cancel = !cancel" class="order_table_header_nav cancel_order">Cancel All</span>
                <svg class="ICQuestion_svg__icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"><path d="M341.344 397.344a170.656 170.656 0 11213.312 165.28v48.032a42.656 42.656 0 01-85.312 0v-85.344c0-23.552 19.104-42.656 42.656-42.656a85.344 85.344 0 10-85.344-85.344 42.656 42.656 0 01-85.312 0zm224 352a53.344 53.344 0 11-106.656 0 53.344 53.344 0 01106.656 0z"></path><path d="M180.128 180.128C265.024 95.232 382.4 42.656 512 42.656s246.976 52.576 331.872 137.472C928.768 265.024 981.344 382.4 981.344 512s-52.576 246.976-137.472 331.872C758.976 928.768 641.6 981.344 512 981.344s-246.976-52.576-331.872-137.472C95.232 758.976 42.656 641.6 42.656 512s52.576-246.976 137.472-331.872zM512 128c-106.048 0-201.984 42.944-271.52 112.48S128 405.952 128 512c0 106.048 42.944 201.984 112.48 271.52S405.952 896 512 896c106.048 0 201.984-42.944 271.52-112.48S896 618.048 896 512c0-106.048-42.944-201.984-112.48-271.52S618.048 128 512 128z"></path></svg>
            </div>
            <div x-show="cancel" class="Modal_box">
                <div @click.away="destroy = false" class="destroy_body">
                    <div class="destroy_containers">
                        <div class="destroy_container">
                            <svg class="destroy_svg"
                                 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-width="2"
                                      d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <span
                                class="destroy_title">Are you Sure ?</span>
                        </div>
                        <div class="friends">
                            <a wire:key="{{now()}}-cancel" wire:click="cancel"
                               @click="cancel = false"
                               class="confirm_button">{{__('custom.dashboard.orders.modal.action.destroy.button.submit')}}</a>
                            <a @click="cancel = false"
                               class="cancel_button">{{__('custom.dashboard.orders.modal.action.destroy.button.cancel')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($count === 0)
        <div class="order_table_none">
            <img src="{{asset('asset/image/logo/orders/currency/none_order.svg')}}" alt="">
            <span>No data</span>
        </div>
    @else
        @foreach($orders as $order)
            <div class="order_table_header">
                <span class="order_table_main">{{$order->time}}</span>
                <span class="order_table_main">{{$order->pair}}</span>
                <span class="order_table_main">{{$order->type ? 'Sell' : 'Buy'}}</span>
                <span class="order_table_main">{{$order->price}}</span>
                <span class="order_table_main">{{$order->amount}}</span>
            </div>
        @endforeach
    @endif

</div>
