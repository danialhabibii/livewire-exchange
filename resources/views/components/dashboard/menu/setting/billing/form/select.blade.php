<div class="financial_input_container">
    <label for="{{$id}}">
        {{$label}}
    </label>
    <select wire:model.live="form.{{$id}}" class="financial_input drop_down_icon" id="{{$id}}">
        <option selected>Select Bank</option>
        <option value="maskan">Maskan</option>
    </select>
    @error('form.'.$id)
    <span class="warning">{{$message}}</span>
    @enderror
</div>
