<div class="notifications">
    <div class="notification_form_container">

        <x-dashboard.menu.setting.notification.form.form>

            <x-dashboard.menu.setting.notification.form.input type="Email Notifications"
                                                              description="Let me know when a user opens or response to my email?"
                                                              name="email_type" />

            <x-dashboard.menu.setting.notification.form.input type="Private Message"
                                                              description="Let me know when a user opens or response to my email?"
                                                              name="message_type"/>

            <x-dashboard.menu.setting.notification.form.input type="Show My Profile"
                                                              description="Let me know when a user opens or response to my email?"
                                                              name="profile_type"/>
            <x-dashboard.menu.setting.notification.form.button title="Save"/>
        </x-dashboard.menu.setting.notification.form.form>
        <x-dashboard.menu.setting.notification.form.flash/>
    </div>
</div>
