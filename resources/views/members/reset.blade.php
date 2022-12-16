<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
          crossorigin="anonymous">
          <link rel="stylesheet" href="../css/register.css">
          
</head>
<body>
    <main>
         <h1 class="topText"><img src="../../imgs/logo-01.png"></h1>
    <div class="container">
        <div class="left">
            
                <h1>Reset Password</h1><hr>
                <form action="{{route('reset-password')}}" method="post">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @if(Session::get('info'))
                    <div class="alert alert-info">{{Session::get('info')}}</div>
                    @endif
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" placeholder="Enter Email" name="email" 
                            value="{{$email ?? old('email')}}">
                            <p class="text-danger">@error('email') {{$message}} @enderror</p>
                        </div>
                    <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{old('password')}}">
                            <p class="text-danger">@error('password') {{$message}} @enderror</p>
                        </div>
                    <div class="form-group">
                            <label for="password">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password" name="password_confirmation" value="{{old('password_confirmation')}}">
                            <p class="text-danger">@error ('password_confirmation') {{$message}} @enderror</p>
                        </div>
                    <div class="form-group">
                        <button type='submit' class="btn btn-block btn-primary" type="submit">Reset Password</button>
                        </div>
                        <br>
                        <a href="{{route('members.session.create')}}">Return Login<a>
                </form>
            
            
        </div>
        <div class="right">
            <img src="../imgs/Illustration1.png">
            </div>
    </div>
    </main>
   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
        crossorigin="anonymous"></script>
</html>