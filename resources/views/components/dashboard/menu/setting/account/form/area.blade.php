<div class="area_container">
    <label for="{{$id}}">
        {{__('custom.dashboard.setting.form.label',['label'=>$label])}}
    </label>
    <textarea wire:model.live="form.{{$id}}" id="{{$id}}" class="basic_input" cols="50" rows="7"
              placeholder="{{__('custom.dashboard.setting.form.place',['text'=>$place])}}"></textarea>
    @error('form.'.$id)
    <span class="warning">{{$message}}</span>
    @enderror
</div>
