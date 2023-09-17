@if($status === '1')
        <a data-clipboard-text="{{__('custom.dashboard.main.Modal.Deposit.address')}}" x-data="{copied: false}" x-on:click="copied = !copied; $event.target.innerText = copied ? '{{__('custom.dashboard.main.Modal.Deposit.status', ['Name' => 'copied !'])}}' : '{{__('custom.dashboard.main.Modal.Deposit.copy')}}'" class="{{$class}}">{{$title}}</a>
@endif
@if($status === '2')
    <a x-data="{share:false}" x-on:click="share = !share; $event.target.innerText = share ? '{{__('custom.dashboard.main.Modal.Deposit.status', ['Name' => 'Share url copied !'])}}' : '{{__('custom.dashboard.main.Modal.Deposit.share')}}'" class="{{$class}}">{{$title}}</a>
@endif
