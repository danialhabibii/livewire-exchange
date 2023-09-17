<div class="dashboard_container">
    <div class="top_container">
        <div class="Info">
            <div class="Balance">
                <div class="transfer_icon" wire:key="{{now()}}-convert" wire:click="convert">
                    <i class="fas fa-exchange-alt fa-rotate-90"></i>
                </div>
                <div>
                    @if($status)
                        <x-dashboard.menu.box.user-info class="balance_title" balance="{{$btc}}"
                                                        type="BTC"/>
                        <x-dashboard.menu.box.user-info class="balance_usd" balance="{{$balance}}" type="USD"/>
                    @else
                        <x-dashboard.menu.box.user-info class="balance_usd" balance="{{$balance}}" type="USD"/>
                        <x-dashboard.menu.box.user-info class="balance_title" balance="{{$btc}}"
                                                        type="BTC"/>
                    @endif
                </div>
            </div>
            <div class="bottom">
                <x-dashboard.menu.box.balance title="{{__('custom.dashboard.main.box.info.24H')}}"
                                              img="folder.png" balance="-75.11"
                                              type="USD"/>
                <x-dashboard.menu.box.balance title="{{__('custom.dashboard.main.box.info.highest')}}"
                                              img="activity.png"
                                              balance="66,075.11"
                                              type="USD"/>
                <x-dashboard.menu.box.balance title="{{__('custom.dashboard.main.box.info.portfolio')}}"
                                              img="activity2.png" balance="3"
                                              type="years"/>
            </div>
        </div>
        <div class="charts">
            <div class="btn">
                <x-dashboard.button.button class="deposit_btn" icon="deposit_btn_icon.svg"
                                           title="{{__('custom.dashboard.main.button.deposit')}}"
                                           status="true"/>
                <x-dashboard.button.button class="withdraw_btn" icon="withdraw_btn_icon.png"
                                           title="{{__('custom.dashboard.main.button.withdraw')}}"/>
            </div>
        </div>
    </div>
    <div class="bottom_container">
        <div class="table_container">
            @livewire('currency.price')
        </div>
        <div class="news" wire:poll.120s>
            <span class="news_title">{{__('custom.dashboard.main.news.coin.title')}}</span>
            @foreach($info as $coin)
                <x-dashboard.news.new-icon.new-i-con icon="{{$coin['iconUrl']}}"
                                                     symbol="{{$coin['symbol']}}" name="{{$coin['name']}}"
                                                     timestamp="Added on {{\App\View\helpers\Helper::calculated($coin['listedAt'])}}"
                                                     price="{{$coin['price']}}" rank="{{$coin['rank']}}" market="{{$coin['marketCap']}}" volume="{{$coin['24hVolume']}}"/>
            @endforeach
        </div>
    </div>
</div>
