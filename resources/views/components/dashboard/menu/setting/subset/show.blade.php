<div class="menu_items {{$buttons ? 'after' : ''}}" wire:key="{{now()}}-{{$title}}"
     wire:click="loadcomponent('{{$title}}')">
    <span><i class="{{$icon}}"></i></span>
    <span>{{__('custom.dashboard.setting.type.title',['title'=>$title])}}</span>
</div>
