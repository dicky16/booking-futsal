<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Futsal</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('temaadmin/css/bootstrap.min.css')}}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{asset('temaadmin/css/typography.css')}}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{asset('temaadmin/css/style.css')}}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{asset('temaadmin/css/responsive.css')}}">
   </head>
   <body class=" bg-white">
      <!-- loader Start -->
      
      <!-- loader END -->
        <!-- Sign in Start -->
        <section class="sign-in">
            <div class="container p-0 bg-white">
                <div class="row no-gutters">
                    <div class="col-sm-2 align-self-center">

                    </div>
                    <div class="col-sm-8 align-self-center">
                        <div class="sign-in-from " style="margin-top: 6%;">
                            <h1 class="mb-0">Register</h1>
                            <p>Silahkan Registrasi</p>
                            <form class="mt-4" action="{{url('register')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" name="nama" class="form-control mb-0" id="exampleInputEmail1" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail2">Email</label>
                                    <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail2" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail2">No HP</label>
                                    <input type="text" name="no_hp" class="form-control mb-0" id="exampleInputEmail2" placeholder="No HP">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="d-inline-block w-100">   
                                    <p>Sudah punya akun ? <a href="{{url('login')}}">Login</a></p>                                 
                                    <button type="submit" class="btn btn-primary float-right">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-2 align-self-center">

                    </div>
                </div>
            </div>
        </section>
        <!-- Sign in END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{asset('temauser/js/jquery.min.js')}}"></script>
      <script src="{{asset('temauser/js/popper.min.js')}}"></script>
      <script src="{{asset('temauser/js/bootstrap.min.js')}}"></script>
      <!-- Appear JavaScript -->
      <script src="{{asset('temauser/js/jquery.appear.js')}}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{asset('temauser/js/countdown.min.js')}}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{asset('temauser/js/waypoints.min.js')}}"></script>
      <script src="{{asset('temauser/js/jquery.counterup.min.js')}}"></script>
      <!-- Wow JavaScript -->
      <script src="{{asset('temauser/js/wow.min.js')}}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{asset('temauser/js/apexcharts.js')}}"></script>
      <!-- Slick JavaScript -->
      <script src="{{asset('temauser/js/slick.min.js')}}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{asset('temauser/js/select2.min.js')}}"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{asset('temauser/js/owl.carousel.min.js')}}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{asset('temauser/js/jquery.magnific-popup.min.js')}}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{asset('temauser/js/smooth-scrollbar.js')}}"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{asset('temauser/js/chart-custom.js')}}"></script>
      <!-- Custom JavaScript -->
      <script src="{{asset('temauser/js/custom.js')}}"></script>
   </body>
</html>