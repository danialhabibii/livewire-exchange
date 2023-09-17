<div class="withdraw_form" wire:poll>
    <span class="order_title">{{__('custom.dashboard.orders.top.title')}}</span>
    <div class="withdraw_form">
        <div class="navbar">
            <div class="order__input">
                <div>
                    <span><i class="fas fa-search"></i></span>
                </div>
                <div>
                    <input wire:model.live.debounce.500ms="search" type="search" class="order_input"
                           placeholder="{{__('custom.dashboard.orders.top.place')}}">
                </div>
            </div>
            @if($destroyStatus)
                <div x-data="{destroyAll : false}" class="icon_info">
                    <div @click="destroyAll = !destroyAll" class="filter">
                        <span>{{__('custom.dashboard.orders.top.button.destroy')}}</span>
                        <span><i class="fas fa-trash"></i></span>
                    </div>
                    <span class="drop_down_icon"><i class="fa-solid fa-ellipsis"></i></span>
                    <div x-show="destroyAll" class="Modal_box">
                        <div @click.away="destroyAll = false" class="destroy_body">
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
                                        class="destroy_title">{{__('custom.dashboard.orders.modal.action.destroy.title')}}</span>
                                </div>
                                <div class="friends">
                                    <a wire:click="deleteAllSelected"
                                       @click="destroyAll = false"
                                       class="confirm_button">{{__('custom.dashboard.orders.modal.action.destroy.button.submit')}}</a>
                                    <a @click="destroyAll = false"
                                       class="cancel_button">{{__('custom.dashboard.orders.modal.action.destroy.button.cancel')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div>
            <x-dashboard.menu.orders.count.count :count="$count"/>
        </div>
        <div class="orders_table_container">
            <table class="table">
                <thead class="orders_thead">
                <tr>
                    <th class="order_th">
                        <input wire:model="select" wire:click="selectedAll" type="checkbox" class="drop_down_icon" {{$select ? 'checked' : ''}}>
                    </th>
                    <x-dashboard.menu.orders.th title="#"/>
                    <x-dashboard.menu.orders.th title="Date" date="1"/>
                    <x-dashboard.menu.orders.th title="Status"/>
                    <x-dashboard.menu.orders.th title="Customer"/>
                    <x-dashboard.menu.orders.th title="Purchased"/>
                    <x-dashboard.menu.orders.th title="Revenue"/>
                    <x-dashboard.menu.orders.th title=""/>
                    <x-dashboard.menu.orders.th title=""/>
                </tr>
                </thead>
                @foreach($orders as $order)
                    <tr>
                        <td class="order_td">
                            <input wire:key="{{now()}}" wire:model.live="selectedItems" type="checkbox"
                                   class="drop_down_icon" value="{{$order->id}}" {{$select ? 'checked' : ''}}>
                        </td>
                        <td class="order_td">{{$order->order_id}}</td>
                        <td class="order_td">{{$order->date}}</td>
                        <td class="order_td">
                            <div class="order_status">
                                @if($order->status)
                                    <x-dashboard.menu.orders.pay.status status="1"/>
                                @else
                                    <x-dashboard.menu.orders.pay.status/>
                                @endif
                            </div>
                        </td>
                        <td class="order_td">{{$order->customer}}</td>
                        <td class="order_td">{{$order->purchased}}</td>
                        <td class="order_td">{{$order->revenue}}</td>
                        <td x-data="{destroy : false}" class="order_td drop_down_icon">
                            <span @click="destroy = !destroy"><i class="fa-solid fa-trash"
                                                                 aria-hidden="true"></i></span>
                            <div x-show="destroy" class="Modal_box">
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
                                                class="destroy_title">{{__('custom.dashboard.orders.modal.action.destroy.title')}}</span>
                                        </div>
                                        <div class="friends">
                                            <a wire:key="{{now()}}" wire:click="destroy({{$order->id}})"
                                               @click="destroy = false"
                                               class="confirm_button">{{__('custom.dashboard.orders.modal.action.destroy.button.submit')}}</a>
                                            <a @click="destroy = false"
                                               class="cancel_button">{{__('custom.dashboard.orders.modal.action.destroy.button.cancel')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td x-data="{edit : false}" class="order_td drop_down_icon">
                            <span @click="edit = !edit"><i class="fa-solid fa-edit" aria-hidden="true"></i></span>
                            <div x-show="edit" class="Modal_box">
                                <div @click.away="edit = false" class="edit_body">
                                    <div class="edit_container">
                                        <div class="edit_form_top_container">
                                            <div class="edit_title_container">
                                                <span
                                                    class="deposit_title">{{__('custom.dashboard.orders.modal.action.edit.title')}}</span>
                                                <span class="drop_down_icon" @click="edit = false"><i
                                                        class="fa fa-close"></i></span>
                                            </div>
                                            <div class="hr"></div>
                                        </div>
                                        <x-dashboard.menu.orders.edit.form.form>
                                            <div class="edit_input_container">
                                                <label
                                                    for="order_id">{{__('custom.dashboard.orders.modal.action.edit.label',['name'=>'order id'])}}</label>
                                                <input wire:model.live="order_id" class="edit_input" type="number"
                                                       id="order.order_id">
                                            </div>
                                            <div class="edit_input_container">
                                                <label
                                                    for="date">{{__('custom.dashboard.orders.modal.action.edit.label',['name'=>'date'])}}</label>
                                                <input wire:model.live="order.date" class="edit_input" type="date" id="date">
                                            </div>
                                            <div class="edit_input_container">
                                                <label
                                                    for="order_id">{{__('custom.dashboard.orders.modal.action.edit.label',['name'=>'order id'])}}</label>
                                                <select class="edit_input" name="" id="order_id">
                                                    <option
                                                        value="{{$order->status}}">{{$order->status ? 'Paid' : 'Not paid'}}</option>
                                                </select>
                                            </div>
                                            <div class="edit_input_container">
                                                <label
                                                    for="customer">{{__('custom.dashboard.orders.modal.action.edit.label',['name'=>'customer'])}}</label>
                                                <input wire:model="orderData.customer" class="edit_input" type="text"
                                                       id="customer">
                                            </div>
                                            <div class="edit_input_container">
                                                <label
                                                    for="purchased">{{__('custom.dashboard.orders.modal.action.edit.label',['name'=>'purchased'])}}</label>
                                                <input wire:model.live="order.purchased" class="edit_input" type="text"
                                                       id="purchased">
                                            </div>
                                            <div class="edit_input_container">
                                                <label
                                                    for="revenue">{{__('custom.dashboard.orders.modal.action.edit.label',['name'=>'revenue'])}}</label>
                                                <input wire:model.live="order.revenue" class="edit_input" type="text"
                                                       id="revenue">
                                            </div>
                                            <x-dashboard.menu.orders.edit.form.button/>
                                        </x-dashboard.menu.orders.edit.form.form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
