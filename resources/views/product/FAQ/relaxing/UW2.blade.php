@extends('layouts.content')

@section('content')
     


     <main>

        <h1> 常 見 問 題 </h1>
        <div class="QA_content">
        <div class="left-content">
            <img src="https://www.oshima.com.tw/archive/image/product1/images/layoutlist/UW-2-600-3.png">
            <h2>無蒸氣鬆布機 UW-2/2L/2M</h2>
            <h3>要慢，就等</h3>
        </div>
        <div class="right-content">
              
             <div class="faq">
             <button><a href="{{route('UW-2')}}">我 要 提 問</a></button>
                 @include('components.faq-message')
              
             </div>  
             
        </div>

       
        </div>
        

             
        
    </main>
@endsection 