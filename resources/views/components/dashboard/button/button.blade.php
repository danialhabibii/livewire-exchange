@if(!$status)
    <div x-data="{show:false}" class="Modal_container">
        <div @click="show=true" class="{{$class}}">
            <img src="{{asset('asset/image/logo/btn/'.$icon)}}">
            <span>{{$title}}</span>
        </div>
        <div x-show="show" class="Modal_box">
            <div @click.away="show = false" class="withdraw_body">
                <div class="close_modal">
                    <span><i @click="show = false" class="drop_down_icon fa fa-close" aria-hidden="true"></i></span>
                </div>
                <div class="withdrawModal_top">
                    <span class="deposit_title">{{__('custom.dashboard.main.button.withdraw')}}</span>
                </div>
                <form class="withdraw_form">
                    <x-dashboard.modal.withdraw.input title="Amount" place="Enter amount"/>
                    <x-dashboard.modal.withdraw.input title="Wallet" place="Enter your wallet"/>
                    <button type="submit" class="submit_withdraw"> {{__('custom.dashboard.main.Modal.Withdraw.submit')}}</button>
                </form>
                <div class="withdraw_footer">
                    <div class="hr"></div>
                    <p class="withdraw_footer_description">{{__('custom.dashboard.main.Modal.Withdraw.description')}} <span class="privacy">{{__('custom.dashboard.main.Modal.Withdraw.policy')}}</span></p>
                    <a class="document">{{__('custom.dashboard.main.Modal.Withdraw.document')}}</a>
                </div>
            </div>
        </div>
    </div>
@else
    <div x-data="{show:false}" class="Modal_container">
        <div @click="show=true" class="{{$class}}">
            <img src="{{asset('asset/image/logo/btn/'.$icon)}}">
            <span>{{$title}}</span>
        </div>
        <div x-show="show" class="Modal_box">
            <div @click.away="show = false" class="deposit_body">
                <div class="deposit_body_container">
                    <div class="deposit_top">
                        <div class="navbar">
                            <x-dashboard.modal.deposit.title title="{{__('custom.dashboard.main.button.deposit')}}"
                                                             class="deposit_title"/>
                            <i @click="show = false" class="drop_down_icon fa fa-close" aria-hidden="true"></i>
                        </div>
                        <x-dashboard.modal.deposit.title
                            title="{{__('custom.dashboard.main.Modal.Deposit.description')}}"
                            class="deposit_description"/>
                    </div>

                    <div class="deposit_types">
                        <div class="deposit_type">
                            <x-dashboard.modal.deposit.type
                                title="{{__('custom.dashboard.main.Modal.Deposit.item', ['Name' => 'Phone'])}}"
                                class="Phone"/>
                            <x-dashboard.modal.deposit.type
                                title="{{__('custom.dashboard.main.Modal.Deposit.item', ['Name' => 'Wallet'])}}"
                                class="wallet"/>
                        </div>
                    </div>

                    <div class="Network">
                        <span>{{__('custom.dashboard.main.Modal.Deposit.Network', ['Name' => 'Network'])}}</span>
                        <x-dashboard.modal.deposit.select-box title="TRC 20"/>
                    </div>
                    <div class="qr">
                        <img class="qr_img" src="{{asset('asset/image/qr/qr.svg')}}">
                    </div>
                    <div class="wallet_address">
                        <x-dashboard.modal.deposit.wallet title="{{__('custom.dashboard.main.Modal.Deposit.Wallet')}}"
                                                          class="wallet_address_title"/>
                        <x-dashboard.modal.deposit.wallet
                            title="{{__('custom.dashboard.main.Modal.Deposit.address')}}"/>
                    </div>
                    <div class="wallet_btns">
                        <x-dashboard.modal.deposit.action title="{{__('custom.dashboard.main.Modal.Deposit.copy')}}"
                                                          class="copy_address" status="1"/>
                        <x-dashboard.modal.deposit.action title="{{__('custom.dashboard.main.Modal.Deposit.share')}}"
                                                          class="share_address" status="2"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif



