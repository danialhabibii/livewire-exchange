<div class="authentication">
    <div>
        <span class="authentication_title">{{auth()->user()->two_factory ? __('custom.dashboard.security.two-verification.secure_title') : __('custom.dashboard.security.two-verification.no_secure_title')}}</span>
        <span><i class=" {{auth()->user()->two_factory ? 'fa-solid fa-check' : 'fa-solid fa-circle-exclamation'}}" style="color: {{auth()->user()->two_factory ? '#2fbe2d' : '#e71313'}};"></i></span>
    </div>
    <p class="authentication_description">{{__('custom.dashboard.security.two-verification.description')}}</p>
    <a class="enable_authentication" wire:key="{{now()}}-two_factory" wire:click="Factory">{{auth()->user()->two_factory ? __('custom.dashboard.security.two-verification.disable') : __('custom.dashboard.security.two-verification.enable')}}</a>
</div>
