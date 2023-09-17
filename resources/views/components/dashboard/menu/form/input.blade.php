<i class="drop_down_icon fas fa-search"></i>
<input type="{{$type}}" name="" class="search_input" wire:model.live="{{$name}}" wire:keydown.debounce.500ms="searchComponent" placeholder="{{__('custom.dashboard.main.input.'.$name)}}">

