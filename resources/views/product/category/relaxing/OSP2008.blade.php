@extends('layouts.content')

@section('content')
     


     <main>

        <h1> 產 品 問 題 </h1>
        <div class="QA_content">
        <div class="left-content">
            <img src="https://www.oshima.com.tw/archive/image/product1/images/layoutlist/OSP-2008-600-3.png">
            <h2>蒸氣預縮 OSP-2008/2008L/2008W/2008WL</h2>
            <h3>中小型工廠 最愛</h3>
        </div>
        <div class="right-content">
              
             @include('layouts.question-message')

             <div class="baseline"></div>
             <h3>機器相關問題提交</h3>

              <form method="post" action="{{ route('post')}}" enctype="multipart/form-data">
                    <input type="hidden" name="product_id" value="9">
                    @include('layouts.question-post')
              </form>
             
        </div>

       
        </div>
        

             
        
    </main>
@endsection 