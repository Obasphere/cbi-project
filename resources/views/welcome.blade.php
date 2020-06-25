<!DOCTYPE html>
<html lang="en">
<head>
  <title>CBI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ ('../boostrap-3/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ ('../css/xproject.css') }}">

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script src="{{ ('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') }}"></script>
  <script src="{{ ('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}"></script>


</head>
<body>



<header>


  <div class="banner">


    <nav class="navbar navbar-default">
                <div class="container">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Computer Based Instruction</a><hr><br>
                        <div class="links">
                        <a href="{{route('examinfo.create')}}" style="background-color: #ff9f3b;padding: 10px;margin: 10px;color: black;border-radius: 5px;">Teacher's Corner</a>                   
                        </div>
                  </div>
                  <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                      <li class="navsign" ><a href="{{ route('register') }}" class="navsign1" style="color:blue">Sign up</a></li>
                    </ul>
                  </div>
                </div>
    </nav>

                   <p class="banner-text2">
                      <a href="" class="typewrite" data-period="2000" data-type='[ " Computer Based Instruction platform for learning", "Learn at Distance.", "Lifelong Learning.", "Growth of non-traditional Students." ]'>
                        <span class="wrap"></span>
                      </a>
                 </p>

            <div class="row">

              <div class="col-md-6"></div>
                <div class="col-md-5">

                    <ul class="nav navbar-nav navbar">
                      <li class="navsign" ><a href="{{ route('login') }}" class="navsign1" style="color:Green"><strong>  Log in</strong></a></li>
                    </ul>
                </div>
              <div class="col-md-5"></div>
            </div>
  </div>







</header><!--End of header-->


</body>
<!---->
<script src="{{ ('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js') }}"></script>
<!-- <script src="./boostrap-3/js/bootstrap.jquery V3.3.1.js"></script> -->
<script src="{{ ('./boostrap-3/js/bootstrap.min.js') }}"></script>
<script src="{{ ('../js/typewriter.js') }}"></script>
<!-- <script>
    $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
}); -->




</html>
