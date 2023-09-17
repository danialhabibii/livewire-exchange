<div x-data="{info : false}" class="new_coin_modal">
    <div @click="info = true" class="new_coin">
        <div class="icon_info">
            <div class="coin_icon_container">
                <img class="new_coin_icon"
                     src="{{$icon}}">
            </div>
            <div class="new_coin_title">
                <span>{{$symbol}}</span>
                <span class="timestamp">{{$timestamp}}</span>
            </div>
        </div>
        <div class="arrow_right">
            <i class="fas fa-chevron-right"></i>
        </div>
        <hr>
    </div>
    <div class="hr"></div>
    <div x-show="info" class="Modal_box">
        <div @click.away="info = false" class="info_body">
            <div class="deposit_body_container">
                <div class="deposit_top">
                    <div class="navbar">
                        <x-dashboard.modal.deposit.title title="Coin Info"
                                                         class="deposit_title"/>
                        <i @click="info = false" class="drop_down_icon fa fa-close" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="more_info">
                    <span class="more_info_title">Symbol</span>
                    <span class="more_info_value">{{$symbol}}</span>
                </div>
                <div class="more_info">
                    <span class="more_info_title">Name</span>
                    <span class="more_info_value">{{$name}}</span>
                </div>
{{--                <div class="more_info">--}}
{{--                    <span>icon Url</span>--}}
{{--                    <span>{{$icon}}</span>--}}
{{--                </div>--}}
                <div class="more_info">
                    <span class="more_info_title">Market Cap</span>
                    <span class="more_info_value">{{$market}}</span>
                </div>
                <div class="more_info">
                    <span class="more_info_title">Price</span>
                    <span class="more_info_value">{{$price}}</span>
                </div>
                <div class="more_info">
                    <span class="more_info_title">Listed At</span>
                    <span class="more_info_value">{{substr($timestamp,9)}}</span>
                </div>
                <div class="more_info">
                    <span class="more_info_title">Rank</span>
                    <span class="more_info_value">{{$rank}}</span>
                </div>
                <div class="more_info">
                    <span class="more_info_title">24hVolume</span>
                    <span class="more_info_value">${{$volume}}</span>
                </div>
            </div>
        </div>
    </div>
</div>

