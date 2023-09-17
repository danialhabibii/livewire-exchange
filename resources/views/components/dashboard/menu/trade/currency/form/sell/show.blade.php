<div class="currency_actions">
    <a class="currency_action {{$buttons[0]['status'] ? 'after' : ''}}" wire:key="{{now()}}-buy"
       wire:click="loadcomponent('buy')">Buy {{$symbol}}</a>
    <div class="market_hr"></div>
    <a class="currency_action {{$buttons[1]['status'] ? 'after' : ''}}" wire:key="{{now()}}-sell"
       wire:click="loadcomponent('sell')">Sell {{$symbol}}</a>
</div>
