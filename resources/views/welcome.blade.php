<!DOCTYPE html>
<html lang="en" class="fullscreen-bg">
  <head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}" />
    <link
      rel="stylesheet"
      href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}"
    />
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}" />
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}" />
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}" />
    <!-- GOOGLE FONTS -->
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700"
      rel="stylesheet"
    />
    <!-- ICONS -->
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="{{asset('admin/assets/img/apple-icon.png')}}"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="96x96"
      href="{{asset('admin/assets/img/favicon.png')}}"
    />
  </head>

  <body>
    <!-- WRAPPER -->

    <div id="wrapper">
      <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
          <div class="auth-box ">
            <div class="left">
              <div class="content">
                <div class="header">
                  <div class="logo text-center">
                    <img src="{{asset('admin/assets/img/logo-dark.png')}}" alt="Klorofil Logo" />
                  </div>
                  <p class="lead">Login to your account</p>
                </div>
                <form method="POST" action="{{ route('login') }}">
                @csrf
                  <div class="form-group">
                    <label for="signin-email" class="control-label sr-only"
                      >Email</label
                    >
                    <input
                      id="email"
                      type="email"
                      class="form-control @error('email') is-invalid @enderror"
                      name="email"
                      value="{{ old('email') }}"
                      required
                      autocomplete="email"
                      autofocus
                    />

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="signin-password" class="control-label sr-only"
                      >Password</label
                    >
                    <input
                      id="password"
                      type="password"
                      class="form-control @error('password') is-invalid @enderror"
                      name="password"
                      required
                      autocomplete="current-password"
                    />

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <button
                    type="submit"
                    class="btn btn-primary btn-lg btn-block"
                  >
                    LOGIN
                  </button>
                  <div class="bottom">
                    <span class="helper-text"
                      ><i class="fa fa-lock"></i>
                    >
                  </div>
                </form>
              </div>
            </div>
            <div class="right">
              <div class="overlay"></div>
              <div class="content text">
                <h1 class="heading">Barber Folks</h1>
                <p>Selamat Datang</p>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- END WRAPPER -->
  </body>
</html>
