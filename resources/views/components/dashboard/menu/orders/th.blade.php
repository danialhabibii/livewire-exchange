@if($checkbox)
    <th class="order_th">
        <input wire:click="selectedAll" type="checkbox" class="drop_down_icon">
    </th>
@elseif($date)
    <th class="order_th">
        <div>
            {{$title}}
            <span><i class="fas fa-arrow-down"></i></span>
        </div>
    </th>
@else
    <th class="order_th">{{$title}}</th>
@endif

