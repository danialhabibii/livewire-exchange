<div class="trade_main_container">
    <div class="currency_price">
        <span class="currency_title">Monero (XMR) Price Chart</span>
        <div class="status_container">
            <span class="now_price">${{$data['data']['XMR']['USD']['price']}}</span>
            <div class="{{$message = (substr($data['data']['XMR']['USD']['week'], 0, 1) === '-') ? 'currency_status text-[red]' :'currency_status text-[green]'}}">
                <span><i class="{{$message = (substr($data['data']['XMR']['USD']['week'], 0, 1) === '-') ? 'fas fa-arrow-alt-circle-down' :'fas fa-arrow-alt-circle-up'}}"></i></span>
                <span>{{($data['data']['XMR']['USD']['week'])}}%</span>
            </div>
        </div>
    </div>
    <div class="status_boxes">
        <x-dashboard.menu.trade.market.info title="Market Cap" number="${{number_format($data['data']['XMR']['USD']['cap'])}}"/>
        <x-dashboard.menu.trade.market.info title="Volume 24h" number="${{($data['data']['XMR']['USD']['volume'])}}"/>
        <x-dashboard.menu.trade.market.info title="Open 24h" number="${{($data['data']['XMR']['USD']['open'])}}"/>
        <x-dashboard.menu.trade.market.info title="High" number="${{($data['data']['XMR']['USD']['high'])}}"/>
    </div>
</div>
