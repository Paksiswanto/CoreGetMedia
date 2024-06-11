@extends('layouts.user.app')

@section('style')
<style>
/* 
    .social-profile li a {
    border: 1px solid rgba(255, 255, 255, 0.1);
    }
    .social-profile li a i {
    color: var(--whiteColor);
    }
    .social-profile li a:hover {
    border-color: transparent;
    background-color: var(--secondaryColor);
    }
    .social-profile li a:hover i {
    color: var(--whiteColor);
    }
    .social-profile li a {
    border: 1px solid rgba(255, 255, 255, 0.1);
    }
    .social-profile li a i {
    color: var(--whiteColor);
    }
 } */
    .social-profile li a {
    border: 1px solid #eee;
    }
    .social-profile li a:hover {
    border-color: transparent;
    }

    .social-profile {
  margin-top: 16px;
}
.social-profile li {
  margin-right: 5px;
}
.social-profile li:last-child {
  margin-right: 0;
}
.social-profile li a {
  width: 35px;
  height: 35px;
  border-radius: 50%;
  background: rgba(103, 77, 243, 0.1);
}
.social-profile li a i {
  color: #fff;
  font-size: 15px;
}
.social-profile li a:hover {
  background-color: #175A95;
}
.social-profile li a:hover i {
  color: var(--whiteColor);
}

.breadcrumb-wrap {
    padding: 80px 0 74px;
    background-image: url("assets/img/contact/contact-bg.jpg");
}

.input-group-text {
    background-color: transparent;
}

.bg-contact {
    background-image: url("assets/img/contact/circle-bg-png");
}


</style>
@endsection

@section('content')
<div class="breadcrumb-wrap">
    <div class="container">
        <h2 class="breadcrumb-title text-white">Penulis</h2>
        <ul class="breadcrumb-menu list-style text-white">
            <li><a class="text-white" href="/">Beranda</a></li>
            <li>Penulis</li>
        </ul>
    </div>
</div>

<div class="container-fluid pb-75 mt-5">
    <div class="row">
        <div class="col-lg-4">
            <div class="card bg-contact" style="background-color: #183249;">
                <div class="card-body p-5">
                    <h3 class="text-white">Hubungi Kami</h3>
                    <p class="text-white mt-4">
                        Masukan Anda berharga bagi kami. Bantu kami meningkatkan portal berita kami dengan membagikan pemikiran Anda
                    </p>

                    <div class="row mt-5">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="d-flex justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="#ffffff" d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zM20 8l-7.475 4.675q-.125.075-.262.113t-.263.037t-.262-.037t-.263-.113L4 8v10h16zm-8 3l8-5H4zM4 8v.25v-1.475v.025V6v.8v-.012V8.25zv10z"/></svg>
                            </div>
                        </div>
                        <div class="col-lg-10 col-lg-10 col-sm-10">
                            <p class="text-white">getmedia@gmail.com</p>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="d-flex justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="#ffffff" d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zM20 8l-7.475 4.675q-.125.075-.262.113t-.263.037t-.262-.037t-.263-.113L4 8v10h16zm-8 3l8-5H4zM4 8v.25v-1.475v.025V6v.8v-.012V8.25zv10z"/></svg>
                            </div>
                        </div>
                        <div class="col-lg-10 col-lg-10 col-sm-10">
                            <p class="text-white">+62-8909-1234-1223</p>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="d-flex justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="#ffffff" d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zM20 8l-7.475 4.675q-.125.075-.262.113t-.263.037t-.262-.037t-.263-.113L4 8v10h16zm-8 3l8-5H4zM4 8v.25v-1.475v.025V6v.8v-.012V8.25zv10z"/></svg>
                            </div>
                        </div>
                        <div class="col-lg-10 col-lg-10 col-sm-10">
                            <p class="text-white">Perum Permata Regency 1 Blok 10/28, Perun Gpa, Ngijo, Kec. Karang Ploso, Kabupaten Malang, Jawa Timur 65152.</p>
                        </div>
                    </div>

                    <div class="mt-4 mb-3">
                        <ul class="social-profile list-style">
                            <li>
                                <a href="https://www.fb.com/" target="_blank"><i class="ri-facebook-fill"></i></a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/" target="_blank"><i class="ri-twitter-fill"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank"><i class="ri-instagram-line"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank"><i class="ri-linkedin-fill"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 p-3 ps-4">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <label for="password"><b>Name</b></label>

                        <div class="input-group">
                            <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M12 5.9a2.1 2.1 0 1 1 0 4.2a2.1 2.1 0 0 1 0-4.2m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4s4-1.79 4-4s-1.79-4-4-4m0 9c-2.67 0-8 1.34-8 4v2c0 .55.45 1 1 1h14c.55 0 1-.45 1-1v-2c0-2.66-5.33-4-8-4"/></svg>
                            </span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="col-lg-6 mb-4">
                    <label for="password"><b>Email</b></label>

                        {{-- <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" required> --}}

                        <div class="input-group">
                            <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zm8-7L4 8v10h16V8zm0-2l8-5H4zM4 8V6v12z"/></svg>
                            </span>
                            <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                        </div>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="col-lg-12 mb-4">
                    <label for="password"><b>No Hp</b></label>

                    <div class="input-group">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M19.95 21q-3.125 0-6.175-1.362t-5.55-3.863t-3.862-5.55T3 4.05q0-.45.3-.75t.75-.3H8.1q.35 0 .625.238t.325.562l.65 3.5q.05.4-.025.675T9.4 8.45L6.975 10.9q.5.925 1.187 1.787t1.513 1.663q.775.775 1.625 1.438T13.1 17l2.35-2.35q.225-.225.588-.337t.712-.063l3.45.7q.35.1.575.363T21 15.9v4.05q0 .45-.3.75t-.75.3M6.025 9l1.65-1.65L7.25 5H5.025q.125 1.025.35 2.025T6.025 9m8.95 8.95q.975.425 1.988.675T19 18.95v-2.2l-2.35-.475zm0 0"/></svg>
                        </span>
                        <input type="text" class="form-control" placeholder="No Hp" aria-label="No Hp" aria-describedby="basic-addon1">
                    </div>

                        @error('no_hp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="col-lg-12 mb-4">
                    <label for="password"><b>Isi Pesan</b></label>
                    <p>Kami selalu terbuka untuk saran dan berusaha memberikan pengalaman berita terbaik bagi pembaca kami</p>
                    <textarea name="" id="" rows="7" class="form-control"></textarea>

                        @error('no_hp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div>
                    <button class="btn-two py-3" style="background-color: #183249">Kirim Pesan</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d91657.21347161348!2d112.53279441032956!3d-7.907167633071978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x2e7881c2c4637501%3A0x10433eaf1fb2fb4c!2sPerum%20Permata%20Regency%201%2C%20Blk.%2010%20No.28%2C%20Perun%20Gpa%2C%20Ngijo%2C%20Kec.%20Karang%20Ploso%2C%20Kabupaten%20Malang%2C%20Jawa%20Timur%2065152!3m2!1d-7.900062999999999!2d112.6068816!5e0!3m2!1sid!2sid!4v1718069467720!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection
