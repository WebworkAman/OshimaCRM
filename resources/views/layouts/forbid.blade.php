
@extends('layouts.content')
@section('content')

<main>
<ul  class="forbidUl" style="text-align:center;">
    
    <li><img class="forbid-icon" src="{{asset('imgs/photo/forbidden.png')}}" ></li>
    <li><p>尚無授權此產品權限</p></li>
    <li style="margin-top: 50px;"><a class="forbid-link" href="{{route('home')}}"> 請點此跳轉回首頁，選擇其他系列 </a></li>
</ul>
</main>
@endsection 