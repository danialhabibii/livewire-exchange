@if($checkbox)
    <div class="edit_input_container">
        <label for="{{$id}}">{{__('custom.dashboard.orders.modal.action.edit.label',['name'=>$label])}}</label>
        <select class="edit_input" name="" id="{{$id}}">
            <option value="{{$pay}}">{{$pay ? 'Paid' : 'Not paid'}}</option>
        </select>
    </div>
@else
    <div class="edit_input_container">
        <label for="{{$id}}">{{__('custom.dashboard.orders.modal.action.edit.label',['name'=>$label])}}</label>
        <input wire:model.live="{{$wire}}" name="{{$wire}}" class="edit_input" type="{{$type}}" id="{{$id}}" value="{{$value}}">
    </div>
@endif
