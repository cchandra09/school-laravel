@extends('frontend.layouts.app')
@section('content')

@include('frontend.home.hero')
@include('frontend.home.information')
@include('frontend.home.news')
<div class="latest_coures_area" style="margin-bottom: 250px">
    <div class="latest_coures_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="coures_info">
                        <div class="section_title white_text">
                            <h3>Latest Courses</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br> veniam, quis nostrud exercitation.</p>
                        </div>
                        <div class="coures_wrap d-flex">
                            <div class="single_wrap">
                                <div class="icon">
                                    <i class="flaticon-lab"></i>
                                </div>
                                <h4>Bachelor of <br>
                                    Graphic Design</h4>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tpor incididunt ut piscing vcs.</p>
                                    {{-- <a href="#" class="boxed-btn5">Apply NOw</a> --}}
                            </div>
                            <div class="single_wrap">
                                <div class="icon">
                                    <i class="flaticon-lab"></i>
                                </div>
                                <h4>Bachelor of <br>
                                    Graphic Design</h4>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tpor incididunt ut piscing vcs.</p>
                                    {{-- <a href="#" class="boxed-btn5">Apply NOw</a> --}}
                            </div>
                        </div>
                        <div class="coures_wrap d-flex">
                            <div class="single_wrap">
                                <div class="icon">
                                    <i class="flaticon-lab"></i>
                                </div>
                                <h4>Bachelor of <br>
                                    Graphic Design</h4>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tpor incididunt ut piscing vcs.</p>
                                    {{-- <a href="#" class="boxed-btn5">Apply NOw</a>  --}}
                            </div>
                            <div class="single_wrap">
                                <div class="icon">
                                    <i class="flaticon-lab"></i>
                                </div>
                                <h4>Bachelor of <br>
                                    Graphic Design</h4>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tpor incididunt ut piscing vcs.</p>
                                    {{-- <a href="#" class="boxed-btn5">Apply NOw</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @include('frontend.home.estrakuliler') --}}
@include('frontend.home.performance')
<section class="contact-section">
    <div class="container">
        <div class="d-none d-sm-block mb-5 pb-4">
            <div id="map" style="height: 480px; position: relative; overflow: hidden;"></div>
            <script>
                function initMap() {
                    var uluru = {
                        lat: -25.363,
                        lng: 131.044
                    };
                    var grayStyles = [{
                            featureType: "all",
                            stylers: [{
                                    saturation: -90
                                },
                                {
                                    lightness: 50
                                }
                            ]
                        },
                        {
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#ccdee9'
                            }]
                        }
                    ];
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: {
                            lat: -31.197,
                            lng: 150.744
                        },
                        zoom: 9,
                        styles: grayStyles,
                        scrollwheel: false
                    });
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
            </script>

        </div>


        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Messege"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Buttonwood, California.</h3>
                        <p>Rosemead, CA 91770</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>+1 253 565 2365</h3>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>support@colorlib.com</h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Start Footer 
    ============================================= -->
    <footer class="bg-fixed default-padding-top bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-4 item">
                        <div class="f-item">
                            <img class="img-responsive" src="https://www.sman1yogya.sch.id/assets/images/logo_putih_besar.png" alt="Logo">
                            <p>
                                SMA Negeri 1 Yogyakarta telah menjadi bagian tak terpisahkan dari perjalanan Yogyakarta sebagai kota pendidikan sejak tahun 1957. 
                             Dijiwai motto Teladan Jayamahe, Sekolah ini mengantar keluarga besarnya untuk berjaya di manapun dan kapanpun.
                            </p>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a target="_blank" href="https://www.facebook.com/smanegeri1yogyakarta"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.instagram.com/sman1yogyakarta"><i class="fab fa-instagram"></i></a>
                                    </li>
                                	<li>
                                        <a target="_blank" href="https://www.youtube.com/c/smanegeri1yogyakarta"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="f-item recent-post">
                            <h4>Info Sekolah</h4>
                            <ul>
                                                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="https://www.sman1yogya.sch.id/assets/images/uploads/info/4074c6416b069c614dd2d7acfe7c670b-100x100.JPG" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="https://www.sman1yogya.sch.id/id/info/detail/16">Laporan Program Sekolah&#8230;</a>
                                            <div class="meta-title">
                                                <span class="post-date">11 May, 2022</span>
                                                <p>Berikut kami lampirkan laporan program sekolah tahun 2022 :&#8230;</p>
                                            </div>
                                        </div>
                                    </li>
                                                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="https://www.sman1yogya.sch.id/assets/images/uploads/info/0e5ebbe16dd9cc84167530ebc1cc8d2b-100x100.jpeg" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="https://www.sman1yogya.sch.id/id/info/detail/15">Pengumuman Kelulusan&#8230;</a>
                                            <div class="meta-title">
                                                <span class="post-date">05 May, 2022</span>
                                                <p>Pengumuman Kelulusan dan Pembagian SKL SMA Negeri 1 Yogyakarta&#8230;</p>
                                            </div>
                                        </div>
                                    </li>
                                                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="f-item recent-post">
                            <h4>Agenda Sekolah</h4>
                            <ul>
                                                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="https://www.sman1yogya.sch.id/assets/images/uploads/agenda/f7a13cee2339c4604fe49f9e12f69c36-100x100.jpg" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="https://www.sman1yogya.sch.id/id/agenda/detail/3">Surat Edaran Kelulusan&#8230;</a>
                                            <div class="meta-title">
                                                <span class="post-date">18 Apr, 2020</span>
                                                <p>Surat Edaran Kelulusan Siswa Kelas XII Tahun Ajaran 2019/2020&#8230;</p>
                                            </div>
                                        </div>
                                    </li>
                                                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="https://www.sman1yogya.sch.id/assets/images/uploads/agenda/6c1da5caa5caf36956b66a1aa6c5c928-100x100.jpg" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="https://www.sman1yogya.sch.id/id/agenda/detail/2">Pembagian Laporan Hasil&#8230;</a>
                                            <div class="meta-title">
                                                <span class="post-date">13 May, 2019</span>
                                                <p>Pembagian laporan hasil belajar siswa akan dilaksanakan pada&#8230;</p>
                                            </div>
                                        </div>
                                    </li>
                                                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom bg-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <p>&copy; Copyright 2019. All Rights Reserved by <a href="#">ICT Teladan</a></p>
                        </div>
                        <div class="col-md-6 text-right link">
                            <ul>
                                <li>
                                    <a href="#">Terms of user</a>
                                </li>
                                <li>
                                    <a href="#">License</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->
@endsection
