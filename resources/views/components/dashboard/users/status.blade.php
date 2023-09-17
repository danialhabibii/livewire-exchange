<div class="user_info">
    <div x-data="{notification : false}" class="users_icon">
        <div @click="notification =! notification" class="notification">
            <img class="notification_img"
                 src="{{asset('asset/image/logo/notification/notification.svg')}}">
        </div>
        <div x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-90" x-show="notification" class="user_notification">
            <div class="notification_count">
                <span>Notifications</span>
                <span>({{$count}})</span>
            </div>
            <div class="notification_hr"></div>
            <div class="notification_contents">
                @foreach($notification as $not)
                    <div class="notification_content">
                        <span class="notification_message">{{substr($not->message,0,20)}}...</span>
                        <span class="notification_date">Now</span>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <div x-data="{dropdownMenu : false}" class="users_icon">
        <img @click="dropdownMenu =! dropdownMenu" class="user_icon"
             src="{{auth()->user()->is_google ? auth()->user()->profile_picture  : asset('storage/pictures/'.auth()->user()->profile_picture)}}">
        <div x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-90" x-show="dropdownMenu" class="user_drop">
            <div class="dropDown_container">
                <x-dashboard.dropdown.dropdown-top title="Profile settings" class="user_profile_setting"/>
                <x-dashboard.dropdown.dropdown-top title="View profile" class="user_profile"/>
            </div>
            <div class="dropDown_hr"></div>
            <div class="dropDown_container">
                <x-dashboard.dropdown.dropdown title="Explore creators" icon="Explore.png"/>
                <x-dashboard.dropdown.dropdown title="Manage membership" icon="membership.png"/>
                <x-dashboard.dropdown.dropdown title="Inviite creators" icon="Invite.png"/>
            </div>
            <div class="dropDown_hr"></div>
            <div x-data="{logout : false}" class="logout">
                <span @click="logout = !logout" class="user_profile_Setting">Log out</span>
                <div x-show="logout" class="logout_modal_box">
                    <div @click.away="logout = false" class="destroy_body">
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
                                    class="destroy_title">Are you sure ?</span>
                            </div>
                            <div class="friends">
                                <a
                                    @click="logout = false"
                                    class="confirm_button" wire:key="{{now()}}-logout"
                                    wire:click="logout">{{__('custom.dashboard.orders.modal.action.destroy.button.submit')}}</a>
                                <a @click="logout = false"
                                   class="cancel_button">{{__('custom.dashboard.orders.modal.action.destroy.button.cancel')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div x-data="{icon: 'fas fa-angle-down'}" class="drop_down_icon">
        <i :class="icon" @click="icon = (icon === 'fas fa-angle-down') ? 'fas fa-angle-up' : 'fas fa-angle-down'"></i>
    </div>
</div>
