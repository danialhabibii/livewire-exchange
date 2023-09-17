<div class="Home">
    <div class="dashboard ">
        <div class="menu ">
            <div class="menu_container">
                <div class="logo">
                    <x-dashboard.menu.img.logo name="menu.png" title="logo"/>
                </div>
                <div class="icons">
                    <div class="menu_icon {{$buttons[0]['status'] ? 'after' : ''}}" wire:key="{{now()}}-dashboard" wire:click="loadcomponent('dashboard')">
                        <x-dashboard.menu.img.image
                            title="{{__('custom.dashboard.menu.items.item',['name'=>'Dashboard'])}}"
                            name="Dashboard.png"/>
                    </div>
                    <div class="menu_icon {{$buttons[1]['status'] ? 'after' : ''}}" wire:key="{{now()}}-orders" wire:click="loadcomponent('orders')">
                        <x-dashboard.menu.img.image
                            title="{{__('custom.dashboard.menu.items.item',['name'=>'Orders'])}}"
                            name="orders.png"/>
                    </div>

                    <div class="menu_icon {{$buttons[2]['status'] ? 'after' : ''}}" wire:key="{{now()}}-trade" wire:click="loadcomponent('trade')">
                        <x-dashboard.menu.img.image
                            title="{{__('custom.dashboard.menu.items.item',['name'=>'Trade'])}}" name="Trade.svg"/>
                    </div>
                    <div class="menu_icon {{$buttons[4]['status'] ? 'after' : ''}}" wire:key="{{now()}}-invite" wire:click="loadcomponent('invite')">
                        <x-dashboard.menu.img.image
                            title="{{__('custom.dashboard.menu.items.item',['name'=>'Invite Friends'])}}"
                            name="inviteFriends.svg"/>
                    </div>
                    <div class="menu_icon {{$buttons[5]['status'] ? 'after' : ''}}" wire:key="{{now()}}-security" wire:click="loadcomponent('security')">
                        <x-dashboard.menu.img.image
                            title="{{__('custom.dashboard.menu.items.item',['name'=>'Security'])}}"
                            name="security.png"/>
                    </div>
                    <div class="menu_icon {{$buttons[6]['status'] ? 'after' : ''}}" wire:key="{{now()}}-settings" wire:click="loadcomponent('settings')">
                        <x-dashboard.menu.img.image
                            title="{{__('custom.dashboard.menu.items.item',['name'=>'Settings'])}}"
                            name="Settings.svg"/>
                    </div>
                </div>
                <x-dashboard.menu.box.box/>
            </div>
        </div>
        <div class="header">
            <div class="main_left">
                <div class="navbar">
                    <div class="search_container">
                        <div class="search">
                            <x-dashboard.menu.form.input type="search" name="search"/>
                        </div>
                        @if($search)
                            <div class="search_result">
                                <a href="#">{{$search}}</a>
                            </div>
                        @endif
                    </div>
                    <x-dashboard.users.status :notification="$notification" :count="$notification_count"/>
                </div>
                <x-dashboard.loading.show/>
                @if($component === 'dashboard')
                    <livewire:dashboard.menu.dashboard.show/>
                @elseif($component === 'orders')
                    <livewire:dashboard.menu.orders.show/>
                @elseif($component === 'trade')
                    <livewire:dashboard.menu.trade.show/>
                @elseif($component === 'invite')
                    <livewire:dashboard.menu.invite.show/>
                @elseif($component === 'security')
                    <livewire:dashboard.menu.security.show/>
                @elseif($component === 'settings')
                    <livewire:dashboard.menu.setting.show/>
                @endif
            </div>
        </div>
    </div>
</div>

