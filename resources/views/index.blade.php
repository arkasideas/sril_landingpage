@extends('layouts.app')
@section('content')

<!-- NAVBAR AND SLIDER -->
<section class="header-area">
    <livewire:components.navbar />
    <livewire:components.slider />
</section>

<!-- ABOUT -->
<section id="about" class="about-area">
    <livewire:components.about />
</section>
    
    <!--====== portfolio PART START ======-->

    <section id="portfolio" class="portfolio-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Depo SRIL</h3>
                        <p class="text">Saat ini kami memiliki 2 depo yang bisa kalian kunjungi</p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row grid">
                <div class="col-lg-6 col-sm-6 branding-3 planning-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="portfolio-image">
                            <img src="assets/images/depot-1.jpg" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="assets/images/depot-1.jpg"><i class="lni-zoom-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#">Depo A</a></h4>
                            <p class="text">Jalan ...., Surabaya, Jawa Timur, Indonesia </p>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
                <div class="col-lg-6 col-sm-6 branding-3 planning-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="portfolio-image">
                            <img src="assets/images/depot-2.jpg" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="assets/images/depot-2.jpg"><i class="lni-zoom-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#">Depo B</a></h4>
                            <p class="text">Jalan ...., Surabaya, Jawa Timur, Indonesia </p>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== portfolio PART ENDS ======-->
    
    <!--====== PRINICNG STYLE EIGHT START ======-->

    <section id="pricing" class="pricing-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Visi & Misi SRIL</h3>
                        <p class="text">SRIL memiliki visi dan misi dalam melayani customer di bidang shipping & logistic</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">                
                <div class="col-lg-6 col-md-7 col-sm-9">
                    <div class="pricing-style-one mt-40 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="pricing-icon text-center">
                            <img src="assets/images/visi.png" alt="">
                        </div>
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Visi</h5>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Menggerakan perekonomian melalui perkapalan</li>
                                <li><i class="lni-check-mark-circle"></i> Memajukan dunia ekspedisi</li>
                            </ul>
                        </div>
                    </div> <!-- pricing style one -->
                </div>
                <div class="col-lg-6 col-md-7 col-sm-9">
                    <div class="pricing-style-one mt-40 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <div class="pricing-icon text-center">
                            <img src="assets/images/misi.png" alt="">
                        </div>
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Misi</h5>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i>Memberikan Solusi bagi masyarakat mengenai shipping</li>
                                <li><i class="lni-check-mark-circle"></i>Memberikan kenyamanan customer dalam shipping</li>
                            </ul>
                        </div>
                    </div> <!-- pricing style one -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PRINICNG STYLE EIGHT ENDS ======-->
    
 
    
    <!--====== TESTIMONIAL THREE PART START ======-->

    <section id="testimonial" class="testimonial-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Testimonial SRIL</h3>
                        <p class="text">Pelayanan SRIL memberikan hasil yang memuaskan untuk para customer. Kami akan terus melayani anda setiap hari</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="row testimonial-active">
                        <div class="col-lg-4">
                            <div class="single-testimonial mt-30 mb-30 text-center">
                                <div class="testimonial-image">
                                    <img src="https://source.boringavatars.com/beam/40/Alicia%20Dickerson" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="text">Terima kasih SRIL ! Telah membantu saya dalam hal ekspedisi. Terpercaya !</p>
                                    <h6 class="author-name">Sri Intan Purnama</h6>
                                    <span class="sub-title">Masyarakat Surabaya</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                        <div class="col-lg-4">
                            <div class="single-testimonial mt-30 mb-30 text-center">
                                <div class="testimonial-image">
                                    <img src="https://source.boringavatars.com/beam/40/Maya%20Angelou" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="text">Mudah, cepat, dan Terpercaya ! SRIL andalan kita semua. Sukses selalu buat SRIL !</p>
                                    <h6 class="author-name">Bambang Hartani</h6>
                                    <span class="sub-title">Staff Logistik PT Indah Makmur</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                        <div class="col-lg-4">
                            <div class="single-testimonial mt-30 mb-30 text-center">
                                <div class="testimonial-image">
                                    <img src="https://source.boringavatars.com/beam/40/Margaret%20Bourke" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="text">Mantap ! SRIL dapat diandalkan. Pengantaran cepat dan ontime. Lanjutkan SRIL !</p>
                                    <h6 class="author-name">Cahyadi Damar</h6>
                                    <span class="sub-title">Kepala Staff CV Indo Sejati</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                        <div class="col-lg-4">
                            <div class="single-testimonial mt-30 mb-30 text-center">
                                <div class="testimonial-image">
                                    <img src="https://source.boringavatars.com/beam/40/Elizabeth%20Peratrovich" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="text">Pelayanan yang memuaskan ! Tidak pakai menunda, SRIL selalu siap membantu.</p>
                                    <h6 class="author-name">Ningsih Iskandar</h6>
                                    <span class="sub-title">Ketua Div. Gudang PT Jaya Abadi</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL THREE PART ENDS ======-->
    
    <!--====== CLIENT LOGO PART START ======-->
{{-- 
    <section id="client" class="client-logo-area">
        <div class="container">
            <div class="row client-active">
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="assets/images/client_logo_01.png" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="assets/images/client_logo_02.png" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="assets/images/client_logo_03.png" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="assets/images/client_logo_04.png" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="assets/images/client_logo_05.png" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="assets/images/client_logo_06.png" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="assets/images/client_logo_07.png" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="col-lg-3">
                    <div class="single-client text-center">
                        <img src="assets/images/client_logo_08.png" alt="Logo">
                    </div> <!-- single client -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section> --}}

    <!--====== CLIENT LOGO PART ENDS ======-->
    
    <!--====== CONTACT TWO PART START ======-->

    <section id="contact" class="contact-area">
        <livewire:components.contact />
    </section>

    <!--====== CONTACT TWO PART ENDS ======-->
    
    <!--====== FOOTER FOUR PART START ======-->

    <footer id="footer" class="footer-area">
        
        <div class="footer-copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="copyright text-center text-lg-left mt-10">
                            <p class="text">Copyright © 2021 - 2022 <a style="color: #092179" rel="nofollow" href="https://uideck.com">Arkas Ideas.</a>All rights reserved.</p>
                        </div> <!--  copyright -->
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-logo text-center mt-10">
                            <a href="index.html"><img src="assets/images/logo.png" width="48px" height="48px" alt="Logo"></a>
                        </div> <!-- footer logo -->
                    </div>
                    <div class="col-lg-5">
                        <ul class="social text-center text-lg-right mt-10">
                            <li><a href="https://facebook.com"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="https://twitter.com"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="https://instagram.com"><i class="lni-instagram-original"></i></a></li>
                            <li><a href="https://linkedin.com"><i class="lni-linkedin-original"></i></a></li>
                        </ul> <!-- social -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>

    <!--====== FOOTER FOUR PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->  
@endsection

