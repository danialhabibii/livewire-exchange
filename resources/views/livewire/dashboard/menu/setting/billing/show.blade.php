<div class="billing">
    <div class="billing_form_container">
        <span class="billing_title">Financial Information</span>
        <x-dashboard.menu.setting.billing.form.form>
            <div class="input_group">
                <x-dashboard.menu.setting.billing.form.select id="bank" label="Bank"/>
                <x-dashboard.menu.setting.billing.form.input id="card_number" label="Card Number" place="0000 0000 0000 0000"/>
            </div>
            <div class="input_group">
                <x-dashboard.menu.setting.billing.form.input id="account_number" label="account number" place="0000 000 000"/>
                <x-dashboard.menu.setting.billing.form.input id="account_holder" label="Name of the account holder" place="danial habibi"/>
            </div>
            <div class="input_group">
                <x-dashboard.menu.setting.billing.form.input id="shaba_number" label="Shaba number" place="IR 0000 0000 0000 0000"/>
                <x-dashboard.menu.setting.billing.form.input id="national_code" label="National code" place="372 1000 000"/>
            </div>
            <x-dashboard.menu.setting.billing.form.button title="Save"/>
        </x-dashboard.menu.setting.billing.form.form>
    </div>
</div>
