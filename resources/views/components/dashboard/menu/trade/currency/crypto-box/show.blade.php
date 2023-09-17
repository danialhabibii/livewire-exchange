<div class="currency_box {{$if ? 'currency_box_focus' : ''}}"
     wire:key="{{now()}}-{{$symbol}}"
     wire:click="loadMain({{$symbol}})">
    <div class="symbol_price">
        <div class="name">
            <span class="crypto_symbol">{{$symbol}}/{{$type}}</span>
            <span class="price">1 = ${{$data['data'][$symbol][$type]['price']}}</span>
        </div>
        <div
            class="{{$message = (substr($data['data'][$symbol][$type]['week'], 0, 1) === '-') ? 'status text-[red]' :'status text-[green]'}}">
                            <span><i
                                    class="{{$message = (substr($data['data'][$symbol][$type]['week'], 0, 1) === '-') ? 'fas fa-caret-down' :'fas fa-caret-up'}}"></i></span>
            <span>{{($data['data'][$symbol][$type]['week'])}}</span>
        </div>
    </div>
    <div>
        <img src="{{$chart}}" alt="{{$symbol}}_chart">
    </div>
</div>
