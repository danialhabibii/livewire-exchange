<img src="{{asset('asset/image/logo/dashboard_icon/'.$name)}}" class="icon">

@if($title == "Invite Friends")
    <div class="friends">
        <a>Invite Friends</a>
        <div class="friend_profit">
            <a>Earn</a>
            <span>$15</span>
        </div>
    </div>
@else
    <div>
        <a>{{$title}}</a>
    </div>
@endif
