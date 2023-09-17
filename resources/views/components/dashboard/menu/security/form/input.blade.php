<div class="security_input_container">
    <label for="current">{{__('custom.dashboard.security.form.label',['label'=>$title])}}</label>
    <input wire:model.live="form.{{$id}}" type="password" class="password_input">
    @error('form.'.$id)
    <span class="validation_error">{{$message}}</span>
    @enderror
</div>
