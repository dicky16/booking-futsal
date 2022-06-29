<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Futsal</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('temaadmin/css/bootstrap.min.css')}}">
      <!-- Chart list Js -->
      <link rel="stylesheet" href="{{asset('temaadmin/js/chartist/chartist.min.css')}}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{asset('temaadmin/css/typography.css')}}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{asset('temaadmin/css/style.css')}}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{asset('temaadmin/css/responsive.css')}}">

      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
      <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"> -->

   </head>
   <body>
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="{{url('user/profil')}}">
               <div class="iq-light-logo">
                  <div class="iq-light-logo">
                     <img src="{{asset('images/logo.gif')}}" class="img-fluid" alt="">
                   </div>
                     <div class="iq-dark-logo">
                        <img src="{{asset('images/logo-dark.gif')}}" class="img-fluid" alt="">
                     </div>
               </div>
               <div class="iq-dark-logo">
                  <img src="{{asset('images/logo-dark.gif')}}" class="img-fluid" alt="">
               </div>
               <span >Futsal</span>
               </a>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Home</span></li>
                     <li class=""><a href="{{url('user/profil')}}" class="iq-waves-effect" aria-expanded="false"><i class="ri-account-box-line"></i><span>Profil</span></a></li>

                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Apps</span></li>
                     <li class="active"><a href="{{url('user/booking')}}" class="iq-waves-effect" aria-expanded="false"><i class="ri-pages-line"></i><span>Booking</span></a></li>
                     <li><a href="{{url('user/pesanan')}}" class="iq-waves-effect" aria-expanded="false"><i class="ri-printer-line"></i><span>Pesanan Saya</span></a></li>
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <div class="iq-sidebar-logo">
                  <div class="top-logo">
                     <a href="{{url('user/profil')}}" class="logo">
                     <div class="iq-light-logo">
                  <img src="{{asset('temaadmin/images/logo.gif')}}" class="img-fluid" alt="">
               </div>
               <div class="iq-dark-logo">
                  <img src="{{asset('temaadmin/images/logo-dark.gif')}}" class="img-fluid" alt="">
               </div>
                     <span>vito</span>
                     </a>
                  </div>
               </div>
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="navbar-left">                  
                     <div class="iq-search-bar d-none d-md-block">
                        <h4>Futsal</h4>
                     </div>
                  </div>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                        <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                     </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                     </ul>
                  </div>
                  <ul class="navbar-list">
                     <li>
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center bg-primary rounded">
                           <img src="{{asset('temaadmin/images/user/1.jpg')}}" class="img-fluid rounded mr-3" alt="user">
                           <div class="caption">
                              <h6 class="mb-0 line-height text-white"></h6>
                              <span class="font-size-12 text-white"></span>
                           </div>
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height"></h5>
                                    <span class="text-white font-size-12"></span>
                                 </div>
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="btn btn-primary dark-btn-primary" href="/mahasiswa/logout" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </nav>
               

            </div>
         </div>
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Tambah Booking Lapangan</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                               
                                <form action="" method="post" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label for="exampleInputText1">Nama</label>
                                        <input type="text" class="form-control" id="exampleInputText1" value="" placeholder="Nama" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputText1">No HP</label>
                                        <input type="text" class="form-control" id="exampleInputText1" value="" placeholder="No HP" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputText1">Email</label>
                                        <input type="text" class="form-control" id="exampleInputText1" value="" placeholder="Email" >
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Lapangan</label>
                                                <select class="form-control" id="tipe_kegiatan" name="tipe_kegiatan" data-dependent="tingkat_kegiatan">
                                                    <option selected="" disabled="">Pilih Lapangan</option>
                                                       <option value="">Lapangan 1</option>
                                                       <option value="">Lapangan 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputdate">Tanggal</label>
                                                <input type="date" class="form-control" id="" name="" value="">
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputdate">Jam Mulai</label>
                                                <input type="time" class="form-control" id="" name="" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputdate">Jam Selesai</label>
                                                <input type="time" class="form-control" id="" name="" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Booking</button>
                                    <a class="btn iq-bg-danger text-decoration-none" data-toggle="tooltip" title=""  href="{{ url()->previous() }}">Batal</i></a>
                                </form>
                            </div>
                        </div>
                    </div>             
               </div>      
            </div>            
         </div>

      <!-- Wrapper END -->
      

      <script src="{{asset('temaadmin/js/jquery.min.js')}}"></script>
      
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
      <script>
         $(document).ready( function () {
            $('#table_id').DataTable({

            });
         } );
      </script>
      
      
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      
      
      <script src="{{asset('temaadmin/js/popper.min.js')}}"></script>
      <script src="{{asset('temaadmin/js/bootstrap.min.js')}}"></script>
      <!-- Appear JavaScript -->
      <script src="{{asset('temaadmin/js/jquery.appear.js')}}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{asset('temaadmin/js/countdown.min.js')}}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{asset('temaadmin/js/waypoints.min.js')}}"></script>
      <script src="{{asset('temaadmin/js/jquery.counterup.min.js')}}"></script>
      <!-- Wow JavaScript -->
      <script src="{{asset('temaadmin/js/wow.min.js')}}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{asset('temaadmin/js/apexcharts.js')}}"></script>
      <!-- Slick JavaScript -->
      <script src="{{asset('temaadmin/js/slick.min.js')}}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{asset('temaadmin/js/select2.min.js')}}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{asset('temaadmin/js/jquery.magnific-popup.min.js')}}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{asset('temaadmin/js/smooth-scrollbar.js')}}"></script>
      <!-- lottie JavaScript -->
      <script src="{{asset('temaadmin/js/lottie.js')}}"></script>
      <!-- am core JavaScript -->
      <script src="{{asset('temaadmin/js/core.js')}}"></script>
      <!-- am charts JavaScript -->
      <script src="{{asset('temaadmin/js/charts.js')}}"></script>
      <!-- am animated JavaScript -->
      <script src="{{asset('temaadmin/js/animated.js')}}"></script>
      <!-- am kelly JavaScript -->
      <script src="{{asset('temaadmin/js/kelly.js')}}"></script>
      <!-- Morris JavaScript -->
      <script src="{{asset('temaadmin/js/morris.js')}}"></script>
      <!-- am maps JavaScript -->
      <script src="{{asset('temaadmin/js/maps.js')}}"></script>
      <!-- am worldLow JavaScript -->
      <script src="{{asset('temaadmin/js/worldLow.js')}}"></script>
      <!-- ChartList Js -->
      <script src="{{asset('temaadmin/js/chartist/chartist.min.js')}}"></script>
      <!-- Chart Custom JavaScript -->
      <script async src="{{asset('temaadmin/js/chart-custom.js')}}"></script>
      <!-- Custom JavaScript -->
      <script src="{{asset('temaadmin/js/custom.js')}}"></script>
      
      <script>
         $("#autoalert").fadeTo(2000, 500).slideUp(500, function(){
            $("#autoalert").slideUp(500);
         })
      </script>
   </body>
</html>
