<div class="bottom_box">
    <div class="box_value {{$img === 'activity.png' ? 'high_activity' : ''}}">
        <div class="main_icon">
            <img src="{{asset('asset/image/logo/dashboard_icon/main_icon/'.$img)}}">
        </div>
        <div>
            <span>{{$title}}</span>
        </div>
    </div>
    <div class="box_bottom_value">
        <span>{{$balance}}</span>
        <span>{{$type}}</span>
    </div>
</div>
