@extends('layouts.app')
@section('content')

<div class="flex-center position-ref blur col-lg-offset-8">
    <div class="links">
		<a href="{{route('home')}}" style="background-color: #ff9f3b;padding: 10px;margin: 10px;color: black;border-radius: 5px;">Back to Class</a>                  
    </div>
</div>

<div>
    <div class="col-lg-offset-5">
        <h2>Student ID : {{$studentId}}</h2>
        <h2>Subject Name : {{$course}}</h2>
        <h3 >Your total score : <b><span style="color: green">{{$getScore}}</span></b></h3>
    </div><hr>
            
        @foreach($answeredQuestion as $answerQ)
            <div class="col-md-6 col-lg-8 col-sm-6 col-lg-offset-4">
                <h3><span style="color: red">Question : </span> {{$answerQ->question}} ?</h3>
                <div class="col-lg-offset-2">  
                    <div class="form-group">
                        <p type="text" name="given_answer">Your Choice Was : {{$answerQ->given_answer}}</p>
                    </div>
                     <div class="form-group">
                        <p type="text" name="true_answer"><span style="color: green">True Answer : {{$answerQ->true_answer}}</span></p>
                    </div>

                </div>
            </div>
         @endforeach

    </div>
@endsection
