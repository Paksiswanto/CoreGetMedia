@extends('layouts.user.app')

@section('style')
<style>
    .theme-dark .accordion-item:first-of-type .accordion-button {
      background-color: var(--codColor);
      color: #ffffff;
    }

    .theme-dark .accordion-button {
      background-color: var(--codColor);
      color: #ffffff;
    }

    .theme-dark .accordion-body {
      background-color: var(--codColor);
      color: #ffffff;
    
    }

    .theme-dark .button .accordion-button .collapsed::after{
      color: #ffffff;
    }


    .theme-dark .accordion {
        --bs-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        --bs-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    }

</style>

@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <img src="{{ asset('assets/img/faq-icon.png') }}"  alt="" class="" srcset="">
    </div>
    <div class="text-center">
        <h3>
            Pertanyaan yang sering diajukan
        </h3>
        <p>
            Temukan pertanyaanmu
        </p>
    </div>
    <div class="accordion" id="accordionExample">
      <div class="container">
        <div class="card m-5">

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapseOne">
                    Bagaimana cara mendaftar menjadi penulis
                  </button>
                </h2>
                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      klilk profil setelah itu klik button daftar menjadi penulis
                  </div>
                </div>
            </div>
          
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapseOne">
                Pertanyaan 1
              </button>
            </h2>
            <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  Jawaban 1
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="true" aria-controls="collapseOne">
                Pertanyaan 2
              </button>
            </h2>
            <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  Jawaban 2
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    
@endsection