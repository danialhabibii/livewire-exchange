<div class="settings">
    <div class="setting_container">
        <div>
            <div class="items_container">
                <div class="setting_menu_title">
                    <x-dashboard.menu.setting.subset.show :buttons="$buttons[0]['status']" title="account" icon="fa-solid fa-user"/>
                    <x-dashboard.menu.setting.subset.show :buttons="$buttons[1]['status']" title="billing" icon="fa-solid fa-credit-card"/>
                    <x-dashboard.menu.setting.subset.show :buttons="$buttons[2]['status']" title="notification" icon="fa-solid fa-bell"/>
                </div>
            </div>
        </div>
        <x-dashboard.loading.show/>
        @if($component === 'account')
            <livewire:dashboard.menu.setting.account.show/>
        @elseif($component === 'billing')
            <livewire:dashboard.menu.setting.billing.show/>
        @elseif($component === 'notification')
            <livewire:dashboard.menu.setting.notification.show/>
        @endif
    </div>
</div>
