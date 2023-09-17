<div class="input_container">
    <label for="{{$id}}">
        {{__('custom.dashboard.setting.form.label',['label'=>$label])}}
    </label>
    <input wire:model="form.{{$id}}" type="{{$type}}" id="{{$id}}" class="basic_input"
           placeholder="{{__('custom.dashboard.setting.form.place',['text'=>$place])}}">
    @error('form.'.$id)
    <span class="warning">{{$message}}</span>
    @enderror
</div>
