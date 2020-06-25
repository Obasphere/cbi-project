@extends('layouts.app')

@section('content')

<!-- @for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor -->

<form method="post" action="{{route('student.store')}}">
	{{ csrf_field() }}

	<div class="col-md-6 col-lg-6 col-sm-6 col-lg-offset-3">
	  <div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput">Student ID</label>
	    <input type="text" name="student_id" class="form-control " id="formGroupExampleInput" placeholder="example: 090591013" required>
	  </div>
	  <div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput2">Test Code</label>
	    <input type="text" name="exam_code" class="form-control" id="formGroupExampleInput2" placeholder="The Test Code issued by your Teacher" required>
	  </div>
	  <button type="Submit" class="btn btn-success btn-block">Submit</button><br><br>
	  <h4 style="color: red">**Note that Test Question (next page) would be invalid after limited test time. Try to supply Answer in time.</h4>
	</div>

	<div class="flex-center position-ref blur">
                    <div class="links">
                        <!-- <a href="{{route('examinfo.create')}}" style="background-color: #ff9f3b;padding: 10px;margin: 10px;color: black;border-radius: 5px;">Create Test</a> -->
						<a href="{{route('home')}}" style="background-color: #ff9f3b;padding: 10px;margin: 10px;color: black;border-radius: 5px;">Back to Class</a>                  
						<a href="{{route('result.index')}}" style="background-color: #ff9f3b;padding: 10px;margin: 10px;color: black;border-radius: 5px;">Result</a>
                        <!-- <a href="{{route('result.index')}}" style="background-color: #ff9f3b;padding: 10px;margin: 10px;color: black;border-radius: 5px;">Result</a>                   -->
                    </div>
    </div>

</form>

    @endsection
