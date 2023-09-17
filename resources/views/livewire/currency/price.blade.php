<div wire:poll.60s>
    <table class="currency">
        <thead class="thead">
        <tr>
            <x-dashboard.table.th name=""/>
            <x-dashboard.table.th name="token"/>
            <x-dashboard.table.th name="symbol"/>
            <x-dashboard.table.th name="price"/>
            <x-dashboard.table.th name="24h"/>
            <x-dashboard.table.th name="market"/>
        </tr>
        </thead>
        <tbody class="table_child">
        <tr>
            <x-dashboard.table.td name="{{__('custom.dashboard.main.table.td.coin', ['Name' => 'bitcoin'])}}"
                                  icon="bitcoin.png"
                                  symbol="{{__('custom.dashboard.main.symbol.symbol', ['Name' => 'BTC'])}}"
                                  price="${{number_format($data['data']['BTC']['USD']['price'])}}"
                                  status="{{$data['data']['BTC']['USD']['day']}}"
                                  statusIcon="{{$message = (substr($data['data']['BTC']['USD']['day'], 0, 1) === '-') ? 'down' :'up'}}"
                                  market="${{number_format($data['data']['BTC']['USD']['cap'])}}"/>
        </tr>
        <tr>
            <x-dashboard.table.td name="{{__('custom.dashboard.main.table.td.coin', ['Name' => 'ethereum'])}}"
                                  icon="ETH.png"
                                  symbol="{{__('custom.dashboard.main.symbol.symbol', ['Name' => 'ETH'])}}"
                                  price="${{number_format($data['data']['ETH']['USD']['price'])}}"
                                  status="{{($data['data']['ETH']['USD']['day'])}}"
                                  statusIcon="{{$message = (substr($data['data']['ETH']['USD']['day'], 0, 1) === '-') ? 'down' :'up'}}"
                                  market="${{number_format($data['data']['ETH']['USD']['cap'])}}"/>
        </tr>
        <tr>
            <x-dashboard.table.td name="{{__('custom.dashboard.main.table.td.coin', ['Name' => 'binance'])}}"
                                  icon="binance.png"
                                  symbol="{{__('custom.dashboard.main.symbol.symbol', ['Name' => 'BNB'])}}"
                                  price="${{number_format($data['data']['BNB']['USD']['price'])}}"
                                  status="{{$data['data']['BNB']['USD']['day']}}"
                                  statusIcon="{{$message = (substr($data['data']['BNB']['USD']['day'], 0, 1) === '-') ? 'down' :'up'}}"
                                  market="${{number_format($data['data']['BNB']['USD']['cap'])}}"/>
        </tr>
        <tr>
            <x-dashboard.table.td name="{{__('custom.dashboard.main.table.td.coin', ['Name' => 'ripple'])}}"
                                  icon="xrp.svg"
                                  symbol="{{__('custom.dashboard.main.symbol.symbol', ['Name' => 'XRP'])}}"
                                  price="${{number_format($data['data']['XRP']['USD']['price'])}}"
                                  status="{{$data['data']['XRP']['USD']['day']}}"
                                  statusIcon="{{$message = (substr($data['data']['XRP']['USD']['day'], 0, 1) === '-') ? 'down' :'up'}}"
                                  market="${{number_format($data['data']['XRP']['USD']['cap'])}}"/>
        </tr>
        <tr>
            <x-dashboard.table.td name="{{__('custom.dashboard.main.table.td.coin', ['Name' => 'cardano'])}}"
                                  icon="ada.png"
                                  symbol="{{__('custom.dashboard.main.symbol.symbol', ['Name' => 'ADA'])}}"
                                  price="${{$data['data']['ADA']['USD']['price']}}"
                                  status="{{$data['data']['ADA']['USD']['day']}}"
                                  statusIcon="{{$message = (substr($data['data']['ADA']['USD']['day'], 0, 1) === '-') ? 'down' :'up'}}"
                                  market="${{number_format($data['data']['ADA']['USD']['cap'])}}"/>
        </tr>
        <tr>
            <x-dashboard.table.td name="{{__('custom.dashboard.main.table.td.coin', ['Name' => 'usd coin'])}}"
                                  icon="usdc.png"
                                  symbol="{{__('custom.dashboard.main.symbol.symbol', ['Name' => 'USDC'])}}"
                                  price="${{number_format($data['data']['USDC']['USD']['price'])}}"
                                  status="{{$data['data']['USDC']['USD']['day']}}"
                                  statusIcon="{{$message = (substr($data['data']['USDC']['USD']['day'], 0, 1) === '-') ? 'down' :'up'}}"
                                  market="${{number_format($data['data']['USDC']['USD']['cap'])}}"/>
        </tr>
        <tr>
            <x-dashboard.table.td name="{{__('custom.dashboard.main.table.td.coin', ['Name' => 'tether'])}}"
                                  icon="usdt.png"
                                  symbol="{{__('custom.dashboard.main.symbol.symbol', ['Name' => 'USDT'])}}"
                                  price="${{number_format($data['data']['USDT']['USD']['price'])}}"
                                  status="{{$data['data']['USDT']['USD']['day']}}"
                                  statusIcon="{{$message = (substr($data['data']['USDT']['USD']['day'], 0, 1) === '-') ? 'down' :'up'}}"
                                  market="${{number_format($data['data']['USDT']['USD']['cap'])}}"/>
        </tr>
        <tr>
            <x-dashboard.table.td name="{{__('custom.dashboard.main.table.td.coin', ['Name' => 'litecoin'])}}"
                                  icon="litecoin.png"
                                  symbol="{{__('custom.dashboard.main.symbol.symbol', ['Name' => 'LTC'])}}"
                                  price="${{$data['data']['LTC']['USD']['price']}}"
                                  status="{{$data['data']['LTC']['USD']['day']}}"
                                  statusIcon="{{$message = (substr($data['data']['LTC']['USD']['day'], 0, 1) === '-') ? 'down' :'up'}}"
                                  market="${{number_format($data['data']['LTC']['USD']['cap'])}}"/>
        </tr>
        <tr>
            <x-dashboard.table.td name="{{__('custom.dashboard.main.table.td.coin', ['Name' => 'dogecoin'])}}"
                                  icon="doge.png"
                                  symbol="{{__('custom.dashboard.main.symbol.symbol', ['Name' => 'DOGE'])}}"
                                  price="${{$data['data']['DOGE']['USD']['price']}}"
                                  status="{{$data['data']['DOGE']['USD']['day']}}"
                                  statusIcon="{{$message = (substr($data['data']['DOGE']['USD']['day'], 0, 1) === '-') ? 'down' :'up'}}"
                                  market="${{number_format($data['data']['DOGE']['USD']['cap'])}}"/>
        </tr>
        <tr>
            <x-dashboard.table.td name="{{__('custom.dashboard.main.table.td.coin', ['Name' => 'shiba'])}}"
                                  icon="shiba.png"
                                  symbol="{{__('custom.dashboard.main.symbol.symbol', ['Name' => 'SHIB'])}}"
                                  price="${{$data['data']['SHIB']['USD']['price']}}"
                                  status="{{$data['data']['SHIB']['USD']['day']}}"
                                  statusIcon="{{$message = (substr($data['data']['SHIB']['USD']['day'], 0, 1) === '-') ? 'down' :'up'}}"
                                  market="${{number_format($data['data']['SHIB']['USD']['cap'])}}"/>
        </tr>
        <tr>
            <x-dashboard.table.td name="{{__('custom.dashboard.main.table.td.coin', ['Name' => 'solana'])}}"
                                  icon="solana.png"
                                  symbol="{{__('custom.dashboard.main.symbol.symbol', ['Name' => 'SOL'])}}"
                                  price="${{$data['data']['SOL']['USD']['price']}}"
                                  status="{{$data['data']['SOL']['USD']['day']}}"
                                  statusIcon="{{$message = (substr($data['data']['SOL']['USD']['day'], 0, 1) === '-') ? 'down' :'up'}}"
                                  market=" ${{number_format($data['data']['SOL']['USD']['cap'])}}"/>
        </tr>
        <tr>
            <x-dashboard.table.td name="{{__('custom.dashboard.main.table.td.coin', ['Name' => 'tron'])}}"
                                  icon="trx.png"
                                  symbol="{{__('custom.dashboard.main.symbol.symbol', ['Name' => 'TRX'])}}"
                                  price="${{$data['data']['TRX']['USD']['price']}}"
                                  status="{{$data['data']['TRX']['USD']['day']}}"
                                  statusIcon="{{$message = (substr($data['data']['TRX']['USD']['day'], 0, 1) === '-') ? 'down' :'up'}}"
                                  market="${{number_format($data['data']['TRX']['USD']['cap'])}}"/>
        </tr>
        <tr>
            <x-dashboard.table.td name="{{__('custom.dashboard.main.table.td.coin', ['Name' => 'bitcoin cash'])}}"
                                  icon="btcc.png"
                                  symbol="{{__('custom.dashboard.main.symbol.symbol', ['Name' => 'BCH'])}}"
                                  price="${{$data['data']['BCH']['USD']['price']}}"
                                  status="{{$data['data']['BCH']['USD']['day']}}"
                                  statusIcon="{{$message = (substr($data['data']['BCH']['USD']['day'], 0, 1) === '-') ? 'down' :'up'}}"
                                  market="${{number_format($data['data']['BCH']['USD']['cap'])}}"/>
        </tr>
        <tr>
            <x-dashboard.table.td name="{{__('custom.dashboard.main.table.td.coin', ['Name' => 'monero'])}}"
                                  icon="xmr.png"
                                  symbol="{{__('custom.dashboard.main.symbol.symbol', ['Name' => 'XMR'])}}"
                                  price="${{$data['data']['XMR']['USD']['price']}}"
                                  status="{{$data['data']['XMR']['USD']['day']}}"
                                  statusIcon="{{$message = (substr($data['data']['XMR']['USD']['day'], 0, 1) === '-') ? 'down' :'up'}}"
                                  market="${{number_format($data['data']['XMR']['USD']['cap'])}}"/>
        </tr>
        <tr>
            <x-dashboard.table.td name="{{__('custom.dashboard.main.table.td.coin', ['Name' => 'zcash'])}}"
                                  icon="zcash.png"
                                  symbol="{{__('custom.dashboard.main.symbol.symbol', ['Name' => 'ZCASH'])}}"
                                  price="${{$data['data']['ZEC']['USD']['price']}}"
                                  status="{{$data['data']['ZEC']['USD']['day']}}"
                                  statusIcon="{{$message = (substr($data['data']['ZEC']['USD']['day'], 0, 1) === '-') ? 'down' :'up'}}"
                                  market="${{number_format($data['data']['ZEC']['USD']['cap'])}}"/>
        </tr>
        <tr>
            <x-dashboard.table.td name="{{__('custom.dashboard.main.table.td.coin', ['Name' => 'dash'])}}"
                                  icon="dash.png"
                                  symbol="{{__('custom.dashboard.main.symbol.symbol', ['Name' => 'DASH'])}}"
                                  price="${{$data['data']['DASH']['USD']['price']}}"
                                  status="{{$data['data']['DASH']['USD']['day']}}"
                                  statusIcon="{{$message = (substr($data['data']['DASH']['USD']['day'], 0, 1) === '-') ? 'down' :'up'}}"
                                  market="${{number_format($data['data']['DASH']['USD']['cap'])}}"/>
        </tr>
        </tbody>
    </table>
</div>
