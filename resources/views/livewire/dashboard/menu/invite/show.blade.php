<div class="inviteFriends">
    <div class="invite">
        <x-dashboard.menu.invite.span title="Referring a friend couldnt get any easier! just send them this signup link : {{route('invite-friend',auth()->user()->invite_code)}} and we will do the rest."/>
        <x-dashboard.menu.invite.span title="Every time you refer a friend you will receive 5% of the alue of your firends first purchase. form example if your friend purchases $100.00 worth of credits you will be instantly awarded with $5.00 worth of credit into your account!"/>
        <x-dashboard.menu.invite.span title="Your referral link is: {{route('invite-friend',auth()->user()->invite_code)}}"/>
        <x-dashboard.menu.invite.span title="Referrals are avaliable after you have credited your account with at least $50.00"/>
        <x-dashboard.menu.invite.span title="Referrals are only paid if the first payment made is crypto currency."/>
    </div>
    <div class="currency_icon">
{{--        <img src="{{asset('asset/image/logo/invite/invite_logo.jpg')}}" alt="">--}}
    </div>
</div>
