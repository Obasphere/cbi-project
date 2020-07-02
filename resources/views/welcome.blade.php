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
            <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button> -->
            <a class="navbar-brand" href="#">Computer Based Instruction</a>
          </div>
          <br><br><br>
          <div class="text-left">
            <button type="button" style="background-color: #ff9f3b" class="btn">
              <a href="{{route('examinfo.create')}}" style="color:black">Teacher's Corner</a>
            </button>
            <button type="button" class="btn btn-light" style="float: right">
              <a href="{{ route('register') }}" style="color:blue"><strong> Sign up</strong></a>
            </button>
          </div>
          <!-- <div class="text-right">
            <button type="button" class="btn btn-light"><a href="{{ route('register') }}" style="color:blue"><strong> Sign up</strong></a></button>
          </div> -->
          <!-- <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li class="navsign"><a href="{{ route('register') }}" class="navsign1" style="color:blue">Sign up</a></li>
            </ul>
          </div> -->
        </div>
      </nav>

      <p class="banner-text2">
        <a href="" class="typewrite" data-period="2000" data-type='[ " Computer Based Instruction platform for learning", "Learn at Distance.", "Lifelong Learning.", "Growth of non-traditional Students." ]'>
          <span class="wrap"></span>
        </a>
      </p>

      <div class="text-center">
        <button type="button" class="btn btn-light"><a href="{{ route('login') }}" style="color:Green"><strong> Log in</strong></a></button>
        <!-- <li class="navsign"><a href="{{ route('login') }}" class="navsign1" style="color:Green"><strong> Log in</strong></a></li> -->
      </div>
    </div>

  </header>
  <!--End of header-->

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