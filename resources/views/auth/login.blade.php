<!DOCTYPE html>
<html lang="en">
  <head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - Sosmed</title>
		<meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta property="og:title" content="" />
        <meta property="og:url" content="" />
        <meta property="og:description" content="" />		
		<link rel="icon" href="#">

        <link type="text/css" href="{{asset('assets/css/demos/interest.css')}}" rel="stylesheet" />
  </head>

  <body>

     <section class="home" id="home">
      <div class="container">
   	   <div class="row">
	   
        <div class="col-lg-4 num-down">	
		 <div class="logo col-lg-12">
		  <a href="https://www.duuuunk.com/a-new-beginning"><h2>Fluffs</h2></a><br/>
		  <p>Discover a world where people share your passions & interests.</p>
		 </div>		
		 <div class="logo num col-lg-12">
		  <a><h2>Registered Fluffers</h2></a><br/>
		  <p>1,200,000,000</p>
		 </div>	
        </div> 
		
        <div class="col-lg-4 col-lg-offset-4 col-md-12 col-sm-12 col-xs-12">

        <form class="form-login" method="post" action="{{route('login')}}" id="loginform">
          <div class="login-wrap">
              @csrf
           <div class="form-group">
            <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" required autocomplete="email" autofocus placeholder="Email / Username">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong style="color:red;"> {{ $message }}</strong>
                </span>
            @enderror
		   </div>
		  <div class="form-group">
           <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <button class="btn btn-theme btn-block" type="submit" name="login"><i class="fa fa-lock"></i> Sign In</button>
          <label class="checkbox text-center">
          <span class="text-center">
              @if(Route::has('password.request'))
          <a href="{{route('password.request')}}">Forgot your password?</a>
           @endif
          </span>
          </label>
         </div>
        </form>
        <br/> 
        
		<form class="form-login" method="post" action="{{route('register')}}" id="regform">
		 <h4 class="form-login-heading">Sign up for Sosmed</h4>
		 <div class="login-wrap">
             @csrf
             <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Nama">
                   </div>
		  <div class="form-group">
                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" required autocomplete="email" autofocus placeholder="Email">
		  </div>
		  <div class="form-group">
           <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" required autocomplete="username">
           @error('username')
    <div class="alert alert-danger">Username tidak boleh mengandung spasi</div>
@enderror
		  </div>
		  <div class="form-group">
           <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
           @error('password')
           <div class="alert alert-danger">{{$message}}</div>
           @enderror
          </div>
          <div class="form-group">
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Password" required autocomplete="new-password">
                @error('password_confirmation')
           <div class="alert alert-danger">{{$message}}</div>
           @enderror
               </div>
		  <button class="btn btn-theme btn-block" name="register" type="submit"><i class="fa fa-lock"></i> Sign Up</button>
	     </div> 	
		 </form>
		 
		</div> 
		 
	   </div><!-- End row-->
      </div><!-- End container--> 
     </section><!-- End section-->	
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/base.js')}}"></script>

  </body>
</html>
