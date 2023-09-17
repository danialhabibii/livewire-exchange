<div class="trade_main_container">
    <div class="currency_price">
        <span class="currency_title">Bitcoin (BTC) Price Chart</span>
        <div class="status_container">
            <span class="now_price">€{{$data['data']['BTC']['EUR']['price']}}</span>
            <div class="{{$message = (substr($data['data']['BTC']['EUR']['week'], 0, 1) === '-') ? 'currency_status text-[red]' :'currency_status text-[green]'}}">
                <span><i class="{{$message = (substr($data['data']['BTC']['EUR']['week'], 0, 1) === '-') ? 'fas fa-arrow-alt-circle-down' :'fas fa-arrow-alt-circle-up'}}"></i></span>
                <span>{{($data['data']['BTC']['EUR']['week'])}}%</span>
            </div>
        </div>
    </div>
    <div class="status_boxes">
        <x-dashboard.menu.trade.market.info title="Market Cap" number="€{{number_format($data['data']['BTC']['EUR']['cap'])}}"/>
        <x-dashboard.menu.trade.market.info title="Volume 24h" number="€{{($data['data']['BTC']['EUR']['volume'])}}"/>
        <x-dashboard.menu.trade.market.info title="Open 24h" number="€{{($data['data']['BTC']['EUR']['open'])}}"/>
        <x-dashboard.menu.trade.market.info title="High" number="€{{($data['data']['BTC']['EUR']['high'])}}"/>
    </div>
</div>
