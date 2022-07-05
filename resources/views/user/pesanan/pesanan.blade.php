<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

        <!--=============== SWIPER CSS ===============--> 
        <link rel="stylesheet" href="{{asset('temauser/css/swiper-bundle.min.css')}}">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{asset('temauser/css/styles.css')}}">

      <link rel="stylesheet" href="{{asset('temaadmin/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('temaadmin/css/typography.css')}}">
      <link rel="stylesheet" href="{{asset('temaadmin/css/style.css')}}">
      

      
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">


        <title>Futsal</title>
        
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    Futsal
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{{url('user/index')}}" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{url('user/booking')}}" class="nav__link">Booking</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{url('user/pesanan')}}" class="nav__link active-link">Pesanan</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{url('user/profil')}}" class="nav__link">Profil</a>
                        </li>
                        <li class="nav__item">
                            <a href="" class="nav__link">Logout</a>
                        </li>
                    </ul>
                    

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x' ></i>
                    </div>

                    <!-- <img src="assets/img/nav-light.png" alt="" class="nav__img"> -->
                </div>
                <div class="nav__btns">

                    <!-- Toggle button -->
                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-grid-alt' ></i>
                    </div>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid" style="text-align-last: center; grid-template-columns: repeat(1, 1fr); margin-top: 10%;">
                    <div class="home__data">
                        <h1 class="home__title">Selamat Datang di<br>  Sewa Lapangan Futsal Magetan</h1>
                    </div>
                </div>
            </section>

            <section class="message section container">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="header-title">
                                 <h4 class="card-title">Riwayat Pesanan</h4>
                              </div>
                           </div>
                           <div class="iq-card-header d-flex justify-content-end">
                                <span class="float-right mb-3 mr-2">
                                    <h4><a href="{{url('mahasiswa/viewcetak')}}" target="blank" class="badge badge-info text-decoration-none" style="border: none;"><i class="ri-printer-line"></i><span> Cetak Riwayat</span></a></li></h4>
                                </span>
                            </div>

                           <div class="card-body">
                                 <table class="table" id="table_id" style="display: inline-table;">
                                    <thead >
                                       <tr>
                                          <th>No</th>
                                          <th>Nama</th>
                                          <th>Tanggal</th>
                                          <th>Jam Mulai</th>
                                          <th>Durasi</th>
                                          <th>Total Bayar</th>
                                          <th>Status</th>
                                          <th class="text-center">Aksi</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pesanans as $pesanan)
                                        <?php $no = 1; ?>
                                       <tr>
                                          <td>{{$no}}</td>
                                          <td>{{$pesanan->nama_lapangan}}</td>
                                          <td>{{$pesanan->tanggal}}</td>
                                          <td>{{$pesanan->jam}}</td>
                                          <td>{{$pesanan->durasi}}</td>
                                          <td>{{$pesanan->total_bayar}}</td>
                                          <td>{{$pesanan->status_bayar}}</td>
                                          <td class="" >
                                             <div class="list-user-action text-center">
                                                <a class="bg-primary text-decoration-none" href="{{url('user/pesanan')}}/{{$pesanan->id}}"><i class="ri-eye-line"></i></a>
                                             </div>
                                          </td>
                                       </tr>
                                       <?php $no++; ?>
                                        @endforeach
                                    </tbody>
                                 </table>
                           </div>
                        </div>
                     </div>               
                  </div>      
               </div>    
            </section>

            

                        

        </main>

        

        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
        </a>


        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
         <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
         <script>
            $(document).ready( function () {
               $('#table_id').DataTable({

               });
            } );
         </script>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="{{asset('temauser/js/scrollreveal.min.js')}}"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="{{asset('temauser/js/swiper-bundle.min.js')}}"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{asset('temauser/js/main.js')}}"></script>
    </body>
</html>