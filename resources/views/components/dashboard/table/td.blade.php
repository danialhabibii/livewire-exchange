<td x-data="{ icon: 'fa-regular fa-star',style: '' }" class="currency_info star"><i :class="icon" :style="style"
                                                                                    @click="icon = (icon === 'fa-regular fa-star') ? 'fa-solid fa-star' : 'fa-regular fa-star'; style = (style === '') ? 'color: #d9d20d' : ''"></i>
</td>
<td class="currency_info">
    <div class="btc_container gap-[1rem]">
        <img class="currency_icon" src="{{asset('asset/image/logo/currency/'.$icon)}}">
        <span class="currency_icon">{{$name}}</span>
    </div>
</td>
<td class="currency_info btc">{{$symbol}}</td>
<td class="currency_info">{{$price}}</td>
<td class="currency_info {{ $statusIcon === 'up' ? 'up' : 'down'}}">
    <div class="btc_container">
        <span class="status_icon">
            @if($statusIcon === 'up')
                <img src="{{asset("asset/image/logo/currency/sort/sort_up.png")}}">
            @else
                <img src="{{asset("asset/image/logo/currency/sort/sort_down.png")}}">
            @endif
        </span>
        <span>{{$status}}%</span>
    </div>
</td>
<td class="currency_info">{{$market}}</td>
