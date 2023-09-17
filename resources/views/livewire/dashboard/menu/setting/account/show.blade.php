<div class="settings">
    <div class="setting_main">
        <div class="basic_form_container">
            <x-dashboard.menu.setting.account.form.form>
                <div class="setting_top_container">
                    <div class="menu_items">
                        <div class="setting_user_icon">
                            <img @click="dropdownMenu =! dropdownMenu" class="user_icon"
                                 src="{{asset('storage/pictures/'.auth()->user()->profile_picture)}}">
                        </div>
                        <div>
                            <span class="full_name">{{auth()->user()->name}}</span>
                        </div>
                    </div>
                    <label>
                        <a class="upload_picture">{{__('custom.dashboard.setting.form.upload.profile')}}</a>
                        <input wire:model.live="form.profile_picture" type="file" class="hidden">
                    </label>
                </div>
                <div class="hr"></div>
                <div class="top_input">
                    <x-dashboard.menu.setting.account.form.input label="Full Name" id="full_name" type="text"
                                                                 place="Your Name"/>
                    <x-dashboard.menu.setting.account.form.input label="Email Address" id="email" type="email"
                                                                 place="Example@gmail.com"/>
                    <x-dashboard.menu.setting.account.form.input label="Phone Number" id="phone" type="number"
                                                                 place="+12 3456 7890"/>
                    <x-dashboard.menu.setting.account.form.input label="Rule" id="rule" type="text"
                                                                 place="Designer"/>
                    <x-dashboard.menu.setting.account.form.area label="About Biography" id="about"
                                                                place="Say something about you..."/>
                    <x-dashboard.menu.setting.account.form.input label="Location" id="location" type="text"
                                                                 place="Your Location"/>
                    <x-dashboard.menu.setting.account.form.input label="Website" id="website" type="text"
                                                                 place="Example.com"/>
                </div>
                <x-dashboard.menu.setting.account.form.button/>
            </x-dashboard.menu.setting.account.form.form>
        </div>
    </div>
</div>
