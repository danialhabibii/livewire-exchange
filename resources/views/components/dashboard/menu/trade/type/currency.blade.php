<div class="symbol {{$if ? 'symbol_focus' : ''}}" wire:key="{{now()}}-{{$title}}"
     wire:click="loadSymbol('{{$title}}')">
    <span>{{strtoupper($title)}}</span>
</div>
