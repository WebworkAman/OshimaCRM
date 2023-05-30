<div class="message_border">
        @if($questions->isEmpty())
            <p>此機型暫無用戶提問</p>
        @else    
              @foreach($questions as $question)
                <div class="message">
                             <p>姓名：{{ $question->member->name}}</p>
                             <p>標題：{{ $question->title }}</p>
                             <p>內容：{{ $question->content }}</p>
                             <p>
                                日期：{{ $question->created_at }} 
                                <button class="reply-button" data-question-id="{{$question->id}}">
                                    查看回覆
                                </button>
                             </p>
                             <!-- @if($question->photo)
                             <img src="{{ Storage::url($question->photo) }}" alt="Question Photo">
                             @endif -->
               <div class="popup" style="display: none">
                  <div class="popup-content">
                             @if($question->answers->count() > 0)
                              @foreach($question->answers as $answer)
                                  <p>{{ $answer->answer }}</p>
                              @endforeach
                          @else
                                   <p>暫無回答</p>
                          @endif
                  </div>
                  <button class="popclose">Close</button>
               </div>
               </div>
              @endforeach
        @endif
</div>
<div class="baseline"></div>
<button class="showPostBtn">我要提問</button>
<div class="questionPostpop" style="display: none">