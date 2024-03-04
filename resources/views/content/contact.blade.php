@extends('index')
@section('content')


<div class="untree_co-hero overlay" style="background-image: url('assets/images/hero-img-smk.png');">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="row justify-content-center ">
                    <div class="col-lg-7 text-center ">
                        <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Hubungi Kami</h1>

                            <p class="mb-4  text-white" data-aos="fade-up" data-aos-delay="100">"Kami di sini untuk membantu! Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan, saran, atau kebutuhan informasi lebih lanjut. Kami berkomitmen untuk memberikan layanan terbaik untuk kemajuan pendidikan anak Anda."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->

</div> <!-- /.untree_co-hero -->




<div class="untree_co-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-7 mr-auto order-1" data-aos="fade-up" data-aos-delay="200">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.158717993841!2d106.7059209!3d-6.2585037!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fa63d935d89d%3A0x3fd0b
                            5bd0895250!2sState%20Vocational%20High%20School%202%20South%20Tangerang!5e0!3m2!1sen!2sid!4v1709447164702!5m2!1sen!2sid" width="700" height="365" style="border: 11px;;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 mb-5 order-2 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-info">
                    <div class="address mt-4">
                        <i class="icon-room"></i>
                        <h4 class="mb-2">lokasi:</h4>
                        <p>JI Pondok Aren Raya No 52 Kecamatan Pondok Aren Kota Tangerang Selatan 15224</p>
                    </div>

                    <div class="open-hours mt-4">
                        <i class="icon-clock-o"></i>
                        <h4 class="mb-2">Jam Kerja:</h4>
                        <p>
                            Senin - Jum'at:<br>
                            08:00 - 16:00
                        </p>
                    </div>

                    <div class="email mt-4">
                        <i class="icon-envelope"></i>
                        <h4 class="mb-2">Email:</h4>
                        <p>smkn2tangsel@gmail.com</p>
                    </div>

                    <div class="phone mt-4">
                        <i class="icon-phone"></i>
                        <h4 class="mb-2">Nomer Telp</h4>
                        <p>(021) 7319996</p>
                    </div>

                </div>
            </div>



        </div>
        <div data-aos="fade-up" data-aos-delay="300">
            <form action="#">
                <div class="row">
                    <div class="col-6 mb-3">
                        <input type="text" class="form-control" placeholder="Nama">
                    </div>
                    <div class="col-6 mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-12 mb-3">
                        <input type="text" class="form-control" placeholder="Subjek">
                    </div>
                    <div class="col-12 mb-3">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
                    </div>

                    <div class="col-12">
                        <input type="submit" value="Kirim Pesan" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>

    </div>
</div> <!-- /.untree_co-section -->

@endsection