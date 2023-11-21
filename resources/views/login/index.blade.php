<style type="text/css">
  *{
    font-family: 'Poppins', sans-serif;
  }

  .login {
      height: 100vh;
  }

  .header h1 {
      font-style: normal;
      font-weight: 600;
      font-size: 32px;
      line-height: 48px;

      color: black;
  }

  .header p {
      font-style: normal;
      font-weight: 400;
      font-size: 14px;
      line-height: 21px;
      margin-bottom: 20px;

      color: #737373;
  }

  .login-form label {
      font-style: normal;
      font-weight: 400;
      font-size: 16px;
      line-height: 24px;
      margin-top: 20px;

      color: black;
  }

  .login-form input {
      background: #FFFFFF;
      border: 1px solid #BCBCBC;
      box-sizing: border-box;
      border-radius: 8px;
  }

  /* .login-form a {
      font-style: normal;
      font-weight: 400;
      font-size: 14px;
      line-height: 21px;
      margin: 20px 0;
      display: block;

      color: #737373;
  } */

  .login-form .signin {
      width: 100%;
      height: 42px;
      background: #395493;
      border-radius: 8px;
      color: #FFFFFF;
      border: none;
      margin-top: 30px;
      display: block;
  }

  .login-form span {
      font-style: normal;
      font-weight: 400;
      font-size: 14px;
      line-height: 21px;

      color: #737373;
  }
</style>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- Fonts Google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    
    <title>Login</title>
  </head>

  <body>
    <section class="login d-flex">
      {{-- Left --}}
      <div class="login-left w-50 h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-lg-6">

            {{-- Alert Success--}}
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Alert Error --}}
            @if(session()->has('loginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{ session('loginError') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <div class="header">
              <h1>Work Wise Search</h1>
              <p>Welcome back! Please enter your details.</p>
            </div>
            
            <form action="/login" method="post">
              @csrf
              {{-- Email --}}
              <div class="login-form">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter your email" autofocus required value="{{ old('email') }}">
                @error('email')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
              </div>

              {{-- Password --}}
              <div class="login-form">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password" required  value="{{ old('password') }}">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
                
              {{-- Button --}}
              <div class="login-form">
                <button id="loginButton" class="signin" type="submit">Sign In</button>

                <br><span class="d-inline">Don't have an account? <a href="/register" class="signup d-inline">Sign up</a></span>
              </div>
            </form>
          </div>
        </div>
      </div>

      {{-- Right --}}
      <div class="login-right w-50 h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              {{-- Gambar 1 --}}
              <div class="carousel-item active">
                <img src="{{ asset('pictures') }}/job.jpg" class="d-block w-100" alt="">
              </div>
              {{-- Gambar 2 --}}
              <div class="carousel-item">
                <img src="{{ asset('pictures') }}/job2.jpg" class="d-block w-100" alt="">
              </div>
              {{-- Gambar 3 --}}
              <div class="carousel-item">
                <img src="{{ asset('pictures') }}/job3.jpg" class="d-block w-100" alt="">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>