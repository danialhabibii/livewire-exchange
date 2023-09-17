<div class="trade_main_container">
    <div class="currency_price">
        <span class="currency_title">Ethereum (ETH) Price Chart</span>
        <div class="status_container">
            <span class="now_price">€{{$data['data']['ETH']['EUR']['price']}}</span>
            <div class="{{$message = (substr($data['data']['ETH']['EUR']['week'], 0, 1) === '-') ? 'currency_status text-[red]' :'currency_status text-[green]'}}">
                <span><i class="{{$message = (substr($data['data']['ETH']['EUR']['week'], 0, 1) === '-') ? 'fas fa-arrow-alt-circle-down' :'fas fa-arrow-alt-circle-up'}}"></i></span>
                <span>{{($data['data']['ETH']['EUR']['week'])}}%</span>
            </div>
        </div>
    </div>
    <div class="status_boxes">
        <x-dashboard.menu.trade.market.info title="Market Cap" number="€{{number_format($data['data']['ETH']['EUR']['cap'])}}"/>
        <x-dashboard.menu.trade.market.info title="Volume 24h" number="€{{($data['data']['ETH']['EUR']['volume'])}}"/>
        <x-dashboard.menu.trade.market.info title="Open 24h" number="€{{($data['data']['ETH']['EUR']['open'])}}"/>
        <x-dashboard.menu.trade.market.info title="High" number="€{{($data['data']['ETH']['EUR']['high'])}}"/>
    </div>
</div>
