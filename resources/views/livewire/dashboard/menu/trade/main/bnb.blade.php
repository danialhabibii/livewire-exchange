<div class="trade_main_container">
    <div class="currency_price">
        <span class="currency_title">Binance coin (BNB) Price Chart</span>
        <div class="status_container">
            <span class="now_price">${{$data['data']['BNB']['USD']['price']}}</span>
            <div class="{{$message = (substr($data['data']['BNB']['USD']['week'], 0, 1) === '-') ? 'currency_status text-[red]' :'currency_status text-[green]'}}">
                <span><i class="{{$message = (substr($data['data']['BNB']['USD']['week'], 0, 1) === '-') ? 'fas fa-arrow-alt-circle-down' :'fas fa-arrow-alt-circle-up'}}"></i></span>
                <span>{{($data['data']['BNB']['USD']['week'])}}%</span>
            </div>
        </div>
    </div>
    <div class="status_boxes">
        <x-dashboard.menu.trade.market.info title="Market Cap" number="${{number_format($data['data']['BNB']['USD']['cap'])}}"/>
        <x-dashboard.menu.trade.market.info title="Volume 24h" number="${{($data['data']['BNB']['USD']['volume'])}}"/>
        <x-dashboard.menu.trade.market.info title="Open 24h" number="${{($data['data']['BNB']['USD']['open'])}}"/>
        <x-dashboard.menu.trade.market.info title="High" number="${{($data['data']['BNB']['USD']['high'])}}"/>
    </div>
</div>
