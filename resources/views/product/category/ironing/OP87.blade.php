@extends('layouts.content')

@section('content')
     


     <main>

        @include('components.question-title')
        <div class="QA_content">
        <div class="left-content">
            <img src="https://www.oshima.com.tw/archive/image/product1/images/layoutlist/OP-87-600.png">
            <h2>全蒸氣式燙斗 OP-87/88S/89</h2>
        </div>
        <div class="right-content">
              
           @include('layouts.question-message')

              <form method="post" action="{{ route('OP-87')}}" enctype="multipart/form-data">
                   <input type="hidden" name="product_id" value="25">
                    @include('layouts.question-post')
              </form>
             
        </div>

       
        </div>
        

             
        
    </main>
@endsection 