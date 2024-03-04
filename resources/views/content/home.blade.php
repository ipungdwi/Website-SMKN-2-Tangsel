@extends('index')
@section('content')

<div class="untree_co-hero overlay" style="background-image: url('assets/images/hero-img-smk.png');">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="row justify-content-center ">
                    <div class=" col-lg-10 text-center ">

                        <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Selamat Datang di <br>SMKN 2 Kota Tangerang Selatan</h1>
                        <p class="mb-4  text-white" data-aos="fade-up" data-aos-delay="100">Kami bangga hadir menjadi bagian dari peserta didik yang akan mewarnai perjalanan mereka mewujudkan impian dan kesuksesannya sehingga dapat menjadi pribadi yang unggul dan bermanfaat bagi dirinya, keluarga dan masyarakat luas.</p>
                        <h5 class="mb-4  text-white" data-aos="fade-up" data-aos-delay="100">SMK Bisa…SMK Hebat….SMK Bisa Hebat…</h5>
                        <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="https://youtu.be/eOb1Xi93EVY" data-fancybox data-aos="fade-up" data-aos-delay="0" class="btn btn-secondary">Watch More</a></p>

                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.untree_co-hero -->

<div class="untree_co-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5 mb-5">
                <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0">Tentang Kami</h2>
                <p data-aos="fade-up" data-aos-delay="100">SMKN 2 Kota Tangerang Selatan telah berdedikasi untuk memberikan pendidikan berkualitas dan mempersiapkan siswa untuk menjadi pemimpin masa depan yang berdaya saing di dunia industri dan teknologi.</p>
                <ul class="list-unstyled ul-check mb-5 primary" data-aos="fade-up" data-aos-delay="200">
                    <li>Akreditasi A</li>
                    <li>Fasilitas Lengkap</li>
                    <li>Lingkungan Bersih </li>
                </ul>

                <!-- <div class="row count-numbers mb-5">
                    <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                        <span class="counter d-block"><span data-number="1202">0</span><span>+</span></span>
                        <span class="caption-2">Siswa</span>
                    </div>
                    <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <span class="counter d-block"><span data-number="70">0</span><span></span></span>
                        <span class="caption-2">Guru</span>
                    </div>
                    <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <span class="counter d-block"><span data-number="20">0</span><span></span></span>
                        <span class="caption-2">Staff</span>
                    </div>
                </div> -->

                <p data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ url('profil') }}" class="btn btn-outline-primary">Selengkapnya</a>
                </p>
            </div>
            <div class="col-span-6" data-aos="fade-up" data-aos-delay="400">
                <div class="w-full h-80">
                    <video controls autoplay class="w-full h-full" width="480" height="360">
                    <!-- <video controls class="w-full h-full"> -->
                        <source src="{{asset('assets/videos/videosmk.mp4')}}" type="video/mp4"> <br>
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /.untree_co-section -->




<div class="untree_co-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                <h2 class="line-bottom text-center mb-4">Manajemen</h2>
                <p>Memimpin dengan visi, menggerakkan dengan semangat, dan mewujudkan prestasi bersama.</p>
            </div>
        </div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active bg-dark"></li>
                <li data-target="#myCarousel" data-slide-to="1" class="bg-dark"></li>
                <li data-target="#myCarousel" data-slide-to="2" class="bg-dark"></li>
                <li data-target="#myCarousel" data-slide-to="3" class="bg-dark"></li>
                <li data-target="#myCarousel" data-slide-to="4" class="bg-dark"></li>
                <li data-target="#myCarousel" data-slide-to="5" class="bg-dark"></li>
                <li data-target="#myCarousel" data-slide-to="6" class="bg-dark"></li>
                <li data-target="#myCarousel" data-slide-to="7" class="bg-dark"></li>
                <li data-target="#myCarousel" data-slide-to="8" class="bg-dark"></li>
                <li data-target="#myCarousel" data-slide-to="9" class="bg-dark"></li>


                <!-- Tambahkan item tambahan di sini jika diperlukan -->
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="services-section">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-lg-4 mb-5 mb-lg-0">
                                    <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
                                        <h2 class="line-bottom mb-5">Dr. Akhmad Basuni, S.PdI., MA.Pd</h2>
                                    </div>
                                    <p data-aos="fade-up" data-aos-delay="100">"Sebagai pendidik, kita tidak hanya menyampaikan informasi, tetapi kita juga menginspirasi dan mendukung. Setiap anak memiliki potensi yang unik, dan tugas kita adalah membantu mereka menemukan dan mengembangkan potensi tersebut."</p>
                                    <br>
                                    <br>
                                    <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-warning">Kepala Sekolah</a></p>
                                </div>
                                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                                    <figure class="img-wrap-2">
                                        <img src="assets/images/guru/basuni.jpg" alt="Image" class="img-fluid" style="border-radius: 30px;">
                                        <div class="dotted"></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="services-section">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-lg-4 mb-5 mb-lg-0">
                                    <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
                                        <h2 class="line-bottom mb-5">Retno Lestari, S.Pd</h2>
                                    </div>
                                    <p data-aos="fade-up" data-aos-delay="100">"Pendidikan adalah cahaya yang membuka pintu gelapnya dunia. Jadilah sumber cahaya yang membimbing mereka menuju pengetahuan dan kebijaksanaan."</p>
                                    <br>
                                    <br>
                                    <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-warning">Wakil Kepala Sekolah<br>Bidang Kurikulum</a></p>
                                </div>
                                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                                    <figure class="img-wrap-2">
                                        <img src="assets/images/guru/Retno.jpg" alt="Image" class="img-fluid" style="border-radius: 30px;">
                                        <div class="dotted"></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="services-section">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-lg-4 mb-5 mb-lg-0">
                                    <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
                                        <h2 class="line-bottom mb-5">Ririn Rahmani, S.Pd.Si, M.Pd</h2>
                                    </div>
                                    <p data-aos="fade-up" data-aos-delay="100">"Ketika kita mendidik, kita tidak hanya memberikan pengetahuan, tetapi juga membentuk karakter. Siswa-siswa kita adalah investasi masa depan yang akan membawa perubahan positif."</p>
                                    <br>
                                    <br>
                                    <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-warning">Wakil Kepala Sekolah<br>Bidang Kesiswaan</a></p>
                                </div>
                                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                                    <figure class="img-wrap-2">
                                        <img src="assets/images/guru/Ririn.jpg" alt="Image" class="img-fluid" style="border-radius: 30px;">
                                        <div class="dotted"></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="services-section">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-lg-4 mb-5 mb-lg-0">
                                    <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
                                        <h2 class="line-bottom mb-5">Nur Bayu Wijayaningsih, S.Pd, S.Kons</h2>
                                    </div>
                                    <p data-aos="fade-up" data-aos-delay="100">"Tidak semua pembelajaran terjadi di dalam kelas. Terkadang, pelajaran terbesar dapat ditemukan di luar ruang kelas, dalam perjalanan hidup sehari-hari."</p>
                                    <br>
                                    <br>
                                    <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-warning">Wakil Kepala Sekolah<br>Bidang Hubungan Industri</a></p>
                                </div>
                                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                                    <figure class="img-wrap-2">
                                        <img src="assets/images/guru/Nur Bayu.jpg" alt="Image" class="img-fluid" style="border-radius: 30px;">
                                        <div class="dotted"></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="services-section">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-lg-4 mb-5 mb-lg-0">
                                    <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
                                        <h2 class="line-bottom mb-5">Wawan Herwanto, S.Pd</h2>
                                    </div>
                                    <p data-aos="fade-up" data-aos-delay="100">"Seorang guru yang inspiratif mampu menyalakan api pengetahuan dan semangat belajar. Mari jadilah sumber inspirasi bagi setiap siswa."</p>
                                    <br>
                                    <br>
                                    <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-warning">Wakil Kepala Sekolah<br>Bidang Sarana Prasarana</a></p>
                                </div>
                                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                                    <figure class="img-wrap-2">
                                        <img src="assets/images/guru/Wawan H.jpg" alt="Image" class="img-fluid" style="border-radius: 30px;">
                                        <div class="dotted"></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="services-section">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-lg-4 mb-5 mb-lg-0">
                                    <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
                                        <h2 class="line-bottom mb-5">Hamdi Gafur, S.Kom</h2>
                                    </div>
                                    <p data-aos="fade-up" data-aos-delay="100">"Pendidikan adalah kunci untuk membuka pintu menuju mimpi. Jadilah penuntun yang memberikan kunci-kunci tersebut kepada siswa-siswa kita."</p>
                                    <br>
                                    <br>
                                    <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-warning">Kepala Program Keahlian<br>Desain Komunikasi Visual</a></p>
                                </div>
                                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                                    <figure class="img-wrap-2">
                                        <img src="assets/images/guru/Hamdi Gafur.jpg" alt="Image" class="img-fluid" style="border-radius: 30px;">
                                        <div class="dotted"></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="services-section">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-lg-4 mb-5 mb-lg-0">
                                    <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
                                        <h2 class="line-bottom mb-5">Fitria Rahayu N, SE, M.Pd</h2>
                                    </div>
                                    <p data-aos="fade-up" data-aos-delay="100">"Setiap kegagalan adalah peluang untuk belajar. Biarkan kita mengajarkan siswa kita untuk melihat tantangan sebagai langkah menuju keberhasilan."</p>
                                    <br>
                                    <br>
                                    <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-warning">Kepala Program Keahlian<br> Akuntansi</a></p>
                                </div>
                                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                                    <figure class="img-wrap-2">
                                        <img src="assets/images/guru/Fitri.jpg" alt="Image" class="img-fluid" style="border-radius: 30px;">
                                        <div class="dotted"></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="services-section">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-lg-4 mb-5 mb-lg-0">
                                    <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
                                        <h2 class="line-bottom mb-5">Fatwa Tresna Radityan, S.Pd</h2>
                                    </div>
                                    <p data-aos="fade-up" data-aos-delay="100">"Seorang guru adalah arsitek masyarakat. Dengan memberikan pengetahuan dan nilai-nilai positif, kita membantu membangun fondasi yang kuat untuk generasi yang akan datang."</p>
                                    <br>
                                    <br>
                                    <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-warning">Kepala Program Keahlian<br>Teknik Kendaraan Ringan</a></p>
                                </div>
                                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                                    <figure class="img-wrap-2">
                                        <img src="assets/images/guru/Fatwa.jpg" alt="Image" class="img-fluid" style="border-radius: 30px;">
                                        <div class="dotted"></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="services-section">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-lg-4 mb-5 mb-lg-0">
                                    <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
                                        <h2 class="line-bottom mb-5">Uus Supandi, S.Pd.I</h2>
                                    </div>
                                    <p data-aos="fade-up" data-aos-delay="100">"Pendidikan bukan hanya tentang memberikan informasi, tetapi juga membuka pintu untuk penemuan, kreativitas, dan pemahaman yang mendalam."</p>
                                    <br>
                                    <br>
                                    <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-warning">Kepala Program Keahlian<br>Teknik Sepeda Motor</a></p>
                                </div>
                                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                                    <figure class="img-wrap-2">
                                        <img src="assets/images/guru/Uus.jpg" alt="Image" class="img-fluid" style="border-radius: 30px;">
                                        <div class="dotted"></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="services-section">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-lg-4 mb-5 mb-lg-0">
                                    <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
                                        <h2 class="line-bottom mb-5">Arfan Fajrin, ST</h2>
                                    </div>
                                    <p data-aos="fade-up" data-aos-delay="100">"Sebagai pendidik, kita memiliki kekuatan untuk membentuk masa depan. Setiap siswa adalah potensi yang perlu ditemukan dan dikembangkan."</p>
                                    <br>
                                    <br>
                                    <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-warning">Kepala Program Keahlian<br>Elektronika Industri</a></p>
                                </div>
                                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                                    <figure class="img-wrap-2">
                                        <img src="assets/images/Arfan.jpg" alt="Image" class="img-fluid" style="border-radius: 30px;">
                                        <div class="dotted"></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan item tambahan di sini jika diperlukan -->
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<div class="untree_co-section ">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                <h2 class="line-bottom text-center mb-4">Program Keahlian</h2>
                <p>Program keahlian sekolah memberi siswa pengetahuan dan keterampilan khusus yang sesuai dengan kebutuhan dunia kerja.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="custom-media">
                    <a><img src="assets/images/jurusan/dkv.jpg" alt="Image" class="img-fluid"></a>
                    <div class="custom-media-body">
                        <div class="d-flex justify-content-between pb-3">
                        </div>
                        <h3>Desain Komunikasi Visual</h3>
                        <p class="mb-4" style="text-align: justify;">Desain Komunikasi Visual akan fokus mempelajari tentang konsep komunikasi dan ungkapan kreatif,
                            teknik dan media dengan memanfaatkan elemen-elemen visual ataupun
                            rupa untuk menyampaikan pesan untuk tujuan tertentu</p>
                        <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                            <div><span class="price"></span></div>
                            <div><a href="{{ url('dkv') }}">Selengkapnya</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="custom-media">
                    <a><img src="assets/images/jurusan/akl.jpg" alt="Image" class="img-fluid"></a>
                    <div class="custom-media-body">
                        <div class="d-flex justify-content-between pb-3">
                        </div>
                        <h3>Akuntansi</h3>
                        <p class="mb-4" style="text-align: justify;">Akuntansi merupakan salah satu program keahlian dalam kelompok
                            bisnis dan manajemen yang bertujuan untuk mempelajari pencatatan dan penyusunan laporan keuangan secara
                            manual maupun menggunakan sistem komputerisasi .</p>
                        <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                            <div><span class="price"></span></div>
                            <div><a href="{{ url('akl') }}">Selengkapnya</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="custom-media">
                    <a><img src="assets/images/jurusan/elin.jpg" alt="Image" class="img-fluid"></a>
                    <div class="custom-media-body">
                        <div class="d-flex justify-content-between pb-3">


                        </div>
                        <h3>Elektronika Industri</h3>
                        <p class="mb-4" style="text-align: justify;">Program Jurusan Elektronika Industri mendidik siswa agar mempunyai kemampuan / keterampilan kepada
                            anak didik pada bidang sistem kontrol dan maintenance peralatan industri berbasis “electrical control” dan “micro processor”.</p>
                        <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                            <div><span class="price"></span></div>
                            <div><a href="{{ url('elin') }}">Selengkapnya</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0 ">
                <div class="custom-media">
                    <a><img src="assets/images/jurusan/tkr.jpg" alt="Image" class="img-fluid"></a>
                    <div class="custom-media-body">
                        <div class="d-flex justify-content-between pb-3">


                        </div>
                        <h3>Teknik Kendaraan Ringan</h3>
                        <p class="mb-4" style="text-align: justify;">Teknik Kendaraan Ringan (TKR) merupakan kompetensi keahlian bidang teknik otomotif yang menekankan keahlian pada
                            bidang penguasaan jasa perbaikan pada kendaraan ringan mobil dan sepeda motor.</p>
                        <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                            <div><span class="price"></span></div>
                            <div><a href="{{ url('tkr') }}">Selengkapnya</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0 ">
                <div class="custom-media">
                    <a><img src="assets/images/jurusan/tsm.jpg" alt="Image" class="img-fluid"></a>
                    <div class="custom-media-body">
                        <div class="d-flex justify-content-between pb-3">
                        </div>
                        <h3>Teknik Sepeda Motor</h3>
                        <p class="mb-4" style="text-align: justify;">Teknik Sepeda Motor (TSM) adalah salah satu cabang ilmu teknik mesin yang mempelajari tentang
                            bagaimana merancang, membuat dan mengembangkan alat-alat transportasi darat yang menggunakan mesin, terutama sepeda motor.</p>
                        <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                            <div><span class="price"></span></div>
                            <div><a href="{{ url('tsm') }}">Selengkapnya</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="untree_co-section pt-0 bg-img overlay" style="background-image: url('assets/images/hero-img-smk.png');">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-7">
                <p class="text-white h5 mb-4" data-aos="fade-up" data-aos-delay="100">"Ada tiga hal yang tidak bisa diajar di sekolah: keberanian untuk mempertanyakan otoritas, keberanian untuk bermimpi besar, dan keberanian untuk gagal."</p>
                <p><a class="btn btn-warning" data-aos="fade-up" data-aos-delay="200">Ki Hajar Dewantara</a></p>
            </div>
        </div>
    </div>
</div> <!-- /.untree_co-section -->



<div class="untree_co-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                <h2 class="line-bottom text-center mb-4">Berita Sekolah</h2>
                <p>Kami akan memberikan update terkini seputar kegiatan belajar mengajar, agenda penting, dan informasi terbaru dari sekolah.</p>
            </div>
        </div>
        <div class="row align-items-stretch">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="media-h d-flex h-100">
                    <figure>
                        <img src="assets/images/news/1.jpg" alt="Image">
                    </figure>
                    <div class="media-h-body">
                        <h2 class="mb-3"><a href="#">SMKN 2 Tangerang Selatan Terpilih sebagai SMK Pusat Keunggulan</a></h2>
                        <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>22 Juni, 2022</span> <span class="icon-person mr-2"></span>Penulis by Sari Purwaningrum, ST, M.Pd, Editor Retno Lestari</div>
                        <p>Alhamdulillah.. Pada tahun pelajaran baru ini SMKN 2 Tangerang Selatan terpilih menjadi salah satu SMK Pusat Keunggulan dalam Program Keahlian Teknik Kendaraan Ringan Otomotif.</p>
                        <p><a href="{{ url('news') }}">Selengkapnya</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="media-h d-flex h-100">
                    <figure>
                        <img src="assets/images/news/2.jpg" alt="Image">
                    </figure>
                    <div class="media-h-body">
                        <h2 class="mb-3"><a href="#">Tips Semangat Belajar dari Rumah!</a></h2>
                        <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>22 Juni, 2021</span> <span class="icon-person mr-2"></span>Penulis oleh Lestari_Eno </div>
                        <p>Penyakit virus corona (COVID-19) adalah penyakit menular yang disebabkan oleh virus SARS-CoV-2.</p>
                        <p><a href="{{ url('news') }}">Selengkapnya</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /.untree_co-section -->

<div class="untree_co-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                <h2 class="line-bottom text-center mb-4">Hubungan Industri</h2>
                <p>"Kerjasama industri di sekolah mempersiapkan siswa dengan pengalaman langsung dan keterampilan praktis untuk sukses di dunia kerja."</p>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature text-center d-flex flex-column align-items-center media-h">
                    <img src="assets/images/logo/BMW.png" alt="Image" class="" style="width: 100px; height: auto;">
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature text-center d-flex flex-column align-items-center media-h">
                    <img src="assets/images/logo/Daihatsu.png" alt="Image" class="img-fluid" style="width: 100px; height: auto;">
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature text-center d-flex flex-column align-items-center media-h">
                    <img src="assets/images/logo/AUTO2000.png" alt="Image" class="img-fluid" style="width: 100px; height: auto;   ">
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature text-center d-flex flex-column align-items-center media-h">
                    <img src="assets/images/logo/Bengkel BOS.png" alt="Image" class="img-fluid" style="width: 100px; height: auto;">
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature text-center d-flex flex-column align-items-center media-h">
                    <img src="assets/images/logo/Planet Ban.png" alt="Image" class="img-fluid" style="width: 100px; height: auto;">
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature text-center d-flex flex-column align-items-center media-h">
                    <img src="assets/images/logo/Jasa Foto Jakarta.png" alt="Image" class="img-fluid" style="width: 100px; height: auto;">
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature text-center d-flex flex-column align-items-center media-h">
                    <img src="assets/images/logo/Surya Kencana.png" alt="Image" class="img-fluid" style="width: 100px; height: auto;">
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature text-center d-flex flex-column align-items-center media-h">
                    <img src="assets/images/logo/timexs.png" alt="Image" class="img-fluid" style="width: 100px; height: auto;">
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature text-center d-flex flex-column align-items-center media-h">
                    <img src="assets/images/logo/Prima Food.png" alt="Image" class="img-fluid" style="width: 100px; height: auto;">
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature text-center d-flex flex-column align-items-center media-h">
                    <img src="assets/images/logo/Jejak.in.png" alt="Image" class="img-fluid" style="width: 100px; height: auto;">
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature text-center d-flex flex-column align-items-center media-h">
                    <img src="assets/images/logo/Aeon.png" alt="Image" class="img-fluid" style="width: 100px; height: auto;">
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature text-center d-flex flex-column align-items-center media-h">
                    <img src="assets/images/logo/Indomaret.png" alt="Image" class="img-fluid" style="width: 100px; height: auto;">
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature text-center d-flex flex-column align-items-center media-h">
                    <img src="assets/images/logo/Panasonic.png" alt="Image" class="img-fluid" style="width: 100px; height: auto;">
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature text-center d-flex flex-column align-items-center media-h">
                    <img src="assets/images/logo/Thalia Tech.png" alt="Image" class="img-fluid" style="width: 100px; height: auto;">
                </div>
            </div>

            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom text-center mb-4">Hubungan Kampus</h2>
                    <p>"Kerjasama kampus-industri memperkaya pendidikan, memberikan pengalaman praktis, dan mempersiapkan mahasiswa untuk kesuksesan profesional."</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature text-center d-flex flex-column align-items-center media-h">
                        <img src="assets/images/logo/Mercu Buana.png" alt="Image" class="" style="width: 100px; height: auto;">
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature text-center d-flex flex-column align-items-center media-h">
                        <img src="assets/images/logo/Budi Luhur.png" alt="Image" class="img-fluid" style="width: 100px; height: auto;">
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature text-center d-flex flex-column align-items-center media-h">
                        <img src="assets/images/logo/Pamulang.png" alt="Image" class="img-fluid" style="width: 100px; height: auto;   ">
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature text-center d-flex flex-column align-items-center media-h">
                        <img src="assets/images/logo/Terbuka.png" alt="Image" class="img-fluid" style="width: 100px; height: auto;">

                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature text-center d-flex flex-column align-items-center media-h">
                        <img src="assets/images/logo/STIE.png" alt="Image" class="img-fluid" style="width: 100px; height: auto;">
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature text-center d-flex flex-column align-items-center media-h">
                        <img src="assets/images/logo/BCMC.png" alt="Image" class="img-fluid" style="width: 100px; height: auto;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 
    <div class="untree_co-section">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom text-center mb-4">Hubungan Industri</h2>
                </div>
            </div>
            <div class="row align-items-stretch">
                <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
                    <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                            <i class="uil uil-atom"></i>
                        </div>
                        <div>
                            <h3>BMW</h3>

                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                            <i class="uil uil-briefcase"></i>
                        </div>
                        <div>
                            <h3>Bengkel BOS</h3>

                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                            <i class="uil uil-calculator"></i>
                        </div>
                        <div>
                            <h3>Planet Ban</h3>

                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                            <i class="uil uil-pen"></i>
                        </div>
                        <div>
                            <h3>Daihatsu</h3>

                        </div>
                    </a>
                </div>


                <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
                    <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                            <i class="uil uil-music"></i>
                        </div>
                        <div>
                            <h3>Jasa Foto Jakarta</h3>

                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                            <i class="uil uil-chart-pie"></i>
                        </div>
                        <div>
                            <h3>Surya Kencana</h3>

                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                            <i class="uil uil-camera"></i>
                        </div>
                        <div>
                            <h3> timexs</h3>

                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                            <i class="uil uil-circle-layer"></i>
                        </div>
                        <div>
                            <h3>Prima Food</h3>

                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                            <i class="uil uil-circle-layer"></i>
                        </div>
                        <div>
                            <h3>Jejak.in</h3>

                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                            <i class="uil uil-circle-layer"></i>
                        </div>
                        <div>
                            <h3>Thalia Tech</h3>

                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                            <i class="uil uil-circle-layer"></i>
                        </div>
                        <div>
                            <h3>Aeon</h3>

                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                            <i class="uil uil-circle-layer"></i>
                        </div>
                        <div>
                            <h3>AUTO2000</h3>

                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                            <i class="uil uil-circle-layer"></i>
                        </div>
                        <div>
                            <h3>Indomaret</h3>

                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                            <i class="uil uil-circle-layer"></i>
                        </div>
                        <div>
                            <h3>Panasonic</h3>

                        </div>
                    </a>
                </div>

            </div>


        </div>

        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom text-center mb-4">Hubungan Kampus</h2>
                </div>
            </div>
            <div class="row align-items-stretch">
                <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
                    <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                            <i class="uil uil-atom"></i>
                        </div>
                        <div>
                            <h3>Universitas Mercu Buana</h3>

                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                            <i class="uil uil-briefcase"></i>
                        </div>
                        <div>
                            <h3>Universitas Pamulang</h3>

                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                            <i class="uil uil-calculator"></i>
                        </div>
                        <div>
                            <h3>Universitas Terbuka</h3>

                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                            <i class="uil uil-pen"></i>
                        </div>
                        <div>
                            <h3>Business And Capital Market College</h3>

                        </div>
                    </a>
                </div>


                <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
                    <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                            <i class="uil uil-music"></i>
                        </div>
                        <div>
                            <h3>Sekolah Tinggi Ilmu Ekonomi</h3>

                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <a href="#" class="category d-flex align-items-start h-100">
                        <div>
                            <i class="uil uil-chart-pie"></i>
                        </div>
                        <div>
                            <h3>Universitas Budi Luhur</h3>

                        </div>
                    </a>
                </div>

            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="400">
                <div class="col-lg-8 text-center">
                    <p>We have more category here. <a href="#">Browse all</a></p>
                </div>
            </div>
        </div>
    </div> -->




    <!-- <div class="untree_co-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                <h2 class="line-bottom text-center mb-4">Pricing</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="00">
                <div class="pricing">
                    <div class="pricing-img mb-4"><img src="assets/images/1x/asset-1.png" alt="Image" class="img-fluid"></div>
                    <div class="pricing-body">

                        <h3 class="pricing-plan-title">Starter</h3>
                        <div class="price"><span class="fig">$50.99</span><span>/month</span></div>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                        <p><a href="#" class="btn btn-outline-primary">Get Started</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="pricing">
                    <div class="pricing-img mb-4"><img src="assets/images/1x/asset-2.png" alt="Image" class="img-fluid"></div>
                    <div class="pricing-body">

                        <h3 cl  ass="pricing-plan-title">Business</h3>
                        <div class="price"><span class="fig">$99.99</span><span>/month</span></div>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                        <p><a href="#" class="btn btn-primary">Get Started</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="pricing">
                    <div class="pricing-img mb-4"><img src="assets/images/1x/asset-3.png" alt="Image" class="img-fluid"></div>
                    <div class="pricing-body">

                        <h3 class="pricing-plan-title">Premium</h3>
                        <div class="price"><span class="fig">$199.99</span><span>/month</span></div>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                        <p><a href="#" class="btn btn-outline-primary">Get Started</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  -->

    <!-- 
<div class="untree_co-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">

                <h3 class="line-bottom mb-4">ALUMNI</h3>
                <div class="owl-carousel wide-slider-testimonial">
                    <div class="item">
                        <blockquote class="block-testimonial">

                            <p>
                                &ldquo;Sekolah ini bukan hanya tempat belajar, tetapi juga tempat di mana saya menemukan teman sejati, guru yang menginspirasi, dan pelajaran berharga untuk kehidupan.&rdquo;</p>
                            <div class="author">
                                <img src="assets/images/person_1.jpg" alt="Free template by TemplateUX">
                                <h3>John Doe</h3>
                                <p class="position">CEO, Founder</p>
                            </div>
                        </blockquote>
                    </div>

                    <div class="item">
                        <blockquote class="block-testimonial">

                            <p>
                                &ldquo;Terima kasih kepada sekolah ini yang telah membimbing saya melalui perjalanan pendidikan. Pengalaman di sini tidak hanya membentuk akademik saya, tetapi juga karakter dan jiwa kepemimpinan.&rdquo;</p>
                            <div class="author">
                                <img src="assets/images/person_2.jpg" alt="Free template by TemplateUX">
                                <h3>James Woodland</h3>
                                <p class="position">Designer at Facebook</p>
                            </div>
                        </blockquote>
                    </div>

                    <div class="item">
                        <blockquote class="block-testimonial">

                            <p>
                                &ldquo;Sekolah ini adalah fondasi bagi impian dan pencapaian saya. Saya bangga menjadi bagian dari keluarga sekolah ini, dan saya akan selalu mengingat nilai-nilai yang diajarkan di sini.&rdquo;</p>
                            <div class="author">
                                <img src="assets/images/person_3.jpg" alt="Free template by TemplateUX">
                                <h3>Rob Smith</h3>
                                <p class="position">Product Designer at Twitter</p>
                            </div>
                        </blockquote>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> -->


    <!-- <div class="untree_co-section">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 mr-auto mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
                <img src="assets/images/img-school-5-min.jpg" alt="image" class="img-fluid">
            </div>
            <div class="col-lg-7 ml-auto" data-aos="fade-up" data-aos-delay="100">
                <h3 class="line-bottom mb-4">Why Choose Us</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>

                <div class="custom-accordion" id="accordion_1">
                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Good Teachers and Staffs</button>
                        </h2>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_1">
                            <div class="accordion-body">
                                <div class="d-flex">
                                    <div class="accordion-img mr-4">
                                        <img src="assets/images/img-school-1-min.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">We Value Good Characters</button>
                        </h2>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_1">
                            <div class="accordion-body">
                                <div class="d-flex">
                                    <div class="accordion-img mr-4">
                                        <img src="assets/images/img-school-2-min.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Your Children are Safe</button>
                        </h2>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_1">
                            <div class="accordion-body">
                                <div class="d-flex">
                                    <div class="accordion-img mr-4">
                                        <img src="assets/images/img-school-3-min.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div>
                                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
                                        <p>Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div> 

                </div>

            </div>
        </div>
    </div>
</div>  -->

    @endsection