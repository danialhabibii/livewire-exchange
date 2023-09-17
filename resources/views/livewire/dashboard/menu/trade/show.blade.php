<div class="trade">
    @if(!auth()->user()->is_verify)
        <x-dashboard.if.show/>
    @else
        <div class="Markets">
            <div class="Market_container">
                <div class="Market_list">
                    <div class="symbol_list">
                        <x-dashboard.menu.trade.type.currency title="usd" :if="$symbols[0]['status']"/>
                        <x-dashboard.menu.trade.type.currency title="eur" :if="$symbols[1]['status']"/>
                    </div>
                    <div class="symbol_setting">
                        <div class="market_hr"></div>
                        <div class="market_setting">
                            <span><i class="fa fa-cog" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
                <div class="currency_box_container {{$symbols[0]['status'] ? '' : 'hidden'}}">
                    <x-dashboard.menu.trade.currency.crypto-box.show type="USD" :if="$main[0]['status']" symbol="BTC"
                                                                     chart="https://www.coingecko.com/coins/1/sparkline.svg"/>
                    <x-dashboard.menu.trade.currency.crypto-box.show type="USD" :if="$main[1]['status']" symbol="ETH"
                                                                     chart="https://www.coingecko.com/coins/279/sparkline.svg"/>
                    <x-dashboard.menu.trade.currency.crypto-box.show type="USD" :if="$main[2]['status']" symbol="BNB"
                                                                     chart="https://www.coingecko.com/coins/825/sparkline.svg"/>
                    <x-dashboard.menu.trade.currency.crypto-box.show type="USD" :if="$main[3]['status']" symbol="XMR"
                                                                     chart="https://www.coingecko.com/coins/69/sparkline.svg"/>
                    <x-dashboard.menu.trade.currency.crypto-box.show type="USD" :if="$main[4]['status']" symbol="DOGE"
                                                                     chart="https://www.coingecko.com/coins/5/sparkline.svg"/>
                    <x-dashboard.menu.trade.currency.crypto-box.show type="USD" :if="$main[5]['status']" symbol="ADA"
                                                                     chart="https://www.coingecko.com/coins/975/sparkline.svg"/>
                </div>
                {{--eur--}}
                <div class="currency_box_container {{$symbols[1]['status'] ? '' : 'hidden'}}">
                    <x-dashboard.menu.trade.currency.crypto-box.show type="EUR" :if="$main[0]['status']" symbol="BTC"
                                                                     chart="https://www.coingecko.com/coins/1/sparkline.svg"/>
                    <x-dashboard.menu.trade.currency.crypto-box.show type="EUR" :if="$main[1]['status']" symbol="ETH"
                                                                     chart="https://www.coingecko.com/coins/279/sparkline.svg"/>
                    <x-dashboard.menu.trade.currency.crypto-box.show type="EUR" :if="$main[2]['status']" symbol="BNB"
                                                                     chart="https://www.coingecko.com/coins/825/sparkline.svg"/>
                    <x-dashboard.menu.trade.currency.crypto-box.show type="EUR" :if="$main[3]['status']" symbol="XMR"
                                                                     chart="https://www.coingecko.com/coins/69/sparkline.svg"/>
                    <x-dashboard.menu.trade.currency.crypto-box.show type="EUR" :if="$main[4]['status']" symbol="DOGE"
                                                                     chart="https://www.coingecko.com/coins/5/sparkline.svg"/>
                    <x-dashboard.menu.trade.currency.crypto-box.show type="EUR" :if="$main[5]['status']" symbol="ADA"
                                                                     chart="https://www.coingecko.com/coins/975/sparkline.svg"/>
                </div>
                <x-dashboard.loading.show/>
                <div class="hr"></div>
                @if($main_component === 'btc' && $symbol_component === 'usd')
                    <x-dashboard.menu.trade.currency.form.sell.show symbol="BTC" :buttons="$buttons"/>
                    @if($component === 'buy')
                        <livewire:dashboard.menu.trade.buy.show/>
                    @elseif($component === 'sell')
                        <livewire:dashboard.menu.trade.sell.show/>
                    @endif
                @elseif($main_component === 'eth' && $symbol_component === 'usd')
                    <x-dashboard.menu.trade.currency.form.sell.show symbol="ETH" :buttons="$buttons"/>
                    @if($component === 'buy')
                        <livewire:dashboard.menu.trade.buy.eth.show/>
                    @elseif($component === 'sell')
                        <livewire:dashboard.menu.trade.sell.eth.show/>
                    @endif
                @elseif($main_component === 'bnb' && $symbol_component === 'usd')
                    <x-dashboard.menu.trade.currency.form.sell.show symbol="BNB" :buttons="$buttons"/>
                    @if($component === 'buy')
                        <livewire:dashboard.menu.trade.buy.bnb.show/>
                    @elseif($component === 'sell')
                        <livewire:dashboard.menu.trade.sell.bnb.show/>
                    @endif
                @elseif($main_component === 'xmr' && $symbol_component === 'usd')
                    <x-dashboard.menu.trade.currency.form.sell.show symbol="XMR" :buttons="$buttons"/>
                    @if($component === 'buy')
                        <livewire:dashboard.menu.trade.buy.xmr.show/>
                    @elseif($component === 'sell')
                        <livewire:dashboard.menu.trade.sell.xmr.show/>
                    @endif
                @elseif($main_component === 'doge' && $symbol_component === 'usd')
                    <x-dashboard.menu.trade.currency.form.sell.show symbol="DOGE" :buttons="$buttons"/>
                    @if($component === 'buy')
                        <livewire:dashboard.menu.trade.buy.doge.show/>
                    @elseif($component === 'sell')
                        <livewire:dashboard.menu.trade.sell.doge.show/>
                    @endif
                @elseif($main_component === 'ada' && $symbol_component === 'usd')
                    <x-dashboard.menu.trade.currency.form.sell.show symbol="ADA" :buttons="$buttons"/>
                    @if($component === 'buy')
                        <livewire:dashboard.menu.trade.buy.ada.show/>
                    @elseif($component === 'sell')
                        <livewire:dashboard.menu.trade.sell.ada.show/>
                    @endif
                @endif
                {{--EUR form--}}
                @if($main_component === 'btc' && $symbol_component === 'eur')
                    <x-dashboard.menu.trade.currency.form.sell.show symbol="BTC" :buttons="$buttons"/>
                    @if($component === 'buy')
                        <livewire:dashboard.menu.trade.buy.eur.btc.show/>
                    @elseif($component === 'sell')
                        <livewire:dashboard.menu.trade.sell.eur.btc.show/>
                    @endif
                @elseif($main_component === 'eth' && $symbol_component === 'eur')
                    <x-dashboard.menu.trade.currency.form.sell.show symbol="ETH" :buttons="$buttons"/>
                    @if($component === 'buy')
                        <livewire:dashboard.menu.trade.buy.eur.eth.show/>
                    @elseif($component === 'sell')
                        <livewire:dashboard.menu.trade.sell.eur.eth.show/>
                    @endif
                @elseif($main_component === 'bnb' && $symbol_component === 'eur')
                    <x-dashboard.menu.trade.currency.form.sell.show symbol="BNB" :buttons="$buttons"/>
                    @if($component === 'buy')
                        <livewire:dashboard.menu.trade.buy.eur.bnb.show/>
                    @elseif($component === 'sell')
                        <livewire:dashboard.menu.trade.sell.eur.bnb.show/>
                    @endif
                @elseif($main_component === 'xmr' && $symbol_component === 'eur')
                    <x-dashboard.menu.trade.currency.form.sell.show symbol="XMR" :buttons="$buttons"/>
                    @if($component === 'buy')
                        <livewire:dashboard.menu.trade.buy.eur.xmr.show/>
                    @elseif($component === 'sell')
                        <livewire:dashboard.menu.trade.sell.eur.xmr.show/>
                    @endif
                @elseif($main_component === 'doge' && $symbol_component === 'eur')
                    <x-dashboard.menu.trade.currency.form.sell.show symbol="DOGE" :buttons="$buttons"/>
                    @if($component === 'buy')
                        <livewire:dashboard.menu.trade.buy.eur.doge.show/>
                    @elseif($component === 'sell')
                        <livewire:dashboard.menu.trade.sell.eur.doge.show/>
                    @endif
                @elseif($main_component === 'ada' && $symbol_component === 'eur')
                    <x-dashboard.menu.trade.currency.form.sell.show symbol="ADA" :buttons="$buttons"/>
                    @if($component === 'buy')
                        <livewire:dashboard.menu.trade.buy.eur.ada.show/>
                    @elseif($component === 'sell')
                        <livewire:dashboard.menu.trade.sell.eur.ada.show/>
                    @endif
                @endif
            </div>
        </div>
        @if($main_component === 'btc' && $type === 'usd')
            <div class="main_content">
                <livewire:dashboard.menu.trade.main.btc/>
                <livewire:dashboard.menu.trade.orders.show/>
                @elseif($main_component === 'eth' && $type === 'usd')
                    <livewire:dashboard.menu.trade.main.eth/>
                @elseif($main_component === 'bnb' && $type === 'usd')
                    <livewire:dashboard.menu.trade.main.bnb/>
                @elseif($main_component === 'xmr' && $type === 'usd')
                    <livewire:dashboard.menu.trade.main.xmr/>
                @elseif($main_component === 'doge' && $type === 'usd')
                    <livewire:dashboard.menu.trade.main.doge/>
                @elseif($main_component === 'ada' && $type === 'usd')
                    <livewire:dashboard.menu.trade.main.ada/>
                @endif
                {{--eur--}}
                @if($main_component === 'btc' && $type === 'eur')
                    <livewire:dashboard.menu.trade.main.eur.btc/>
                @elseif($main_component === 'eth' && $type === 'eur')
                    <livewire:dashboard.menu.trade.main.eur.eth/>
                @elseif($main_component === 'bnb' && $type === 'eur')
                    <livewire:dashboard.menu.trade.main.bnb/>
                @elseif($main_component === 'xmr' && $type === 'eur')
                    <livewire:dashboard.menu.trade.main.eur.xmr/>
                @elseif($main_component === 'doge' && $type === 'eur')
                    <livewire:dashboard.menu.trade.main.eur.doge/>
                @elseif($main_component === 'ada' && $type === 'eur')
                    <livewire:dashboard.menu.trade.main.eur.ada/>
                @endif
            </div>
        @endif
</div>
