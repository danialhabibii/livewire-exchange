<div class="financial_input_container">
    <label for="{{$id}}">
        {{$label}}
    </label>
    <input wire:model.live="form.{{$id}}" type="text" id="{{$id}}" class="financial_input"
           placeholder="{{$place}}">
    @error('form.'.$id)
    <span class="warning">{{$message}}</span>
    @enderror
</div>
