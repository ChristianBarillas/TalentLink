<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TalentLink Connect +</title>


<head>
    <link href="{{ asset('css/estilosTailwinds.css') }}" rel="stylesheet">
    <!-- Resto del código -->
</head>



  </head>
  <body>
    <!-- ====== Navbar Section Start -->
  @include('_navbar')
    <!-- ====== TalenLink Section Start -->
    <div class="relative bg-white pt-[120px] pb-[110px] lg:pt-[150px]">
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4 lg:w-5/12">
            <div class="hero-content">
              <h1
                class="mb-3 text-4xl font-bold leading-snug text-dark sm:text-[42px] lg:text-[40px] xl:text-[42px]"
              >
                TalentLink <br />
                Conectando <br />
                Contigo
              </h1>
              <p class="mb-8 max-w-[480px] text-base text-body-color">
                Quieres hacer tus horas sociales? Con TalenLink podras hacerlo con un solo click!
              </p>
              <ul class="flex flex-wrap items-center">
                <li>
                  <a
                    href="javascript:void(0)"
                    class="inline-flex items-center justify-center rounded-lg bg-primary py-4 px-6 text-center text-base font-normal text-white hover:bg-opacity-90 sm:px-10 lg:px-8 xl:px-10"
                  >
                    Prueba gratuita
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="inline-flex items-center justify-center py-4 px-6 text-center text-base font-normal text-body-color hover:text-primary sm:px-10 lg:px-8 xl:px-10"
                  >
                    <span class="mr-2">
                      <svg
                        width="22"
                        height="22"
                        viewBox="0 0 22 22"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <circle cx="11" cy="11" r="11" fill="#3056D3" />
                        <rect
                          x="6.90906"
                          y="13.3636"
                          width="8.18182"
                          height="1.63636"
                          fill="white"
                        />
                        <rect
                          x="10.1818"
                          y="6"
                          width="1.63636"
                          height="4.09091"
                          fill="white"
                        />
                        <path
                          d="M11 12.5454L13.8343 9.47726H8.16576L11 12.5454Z"
                          fill="white"
                        />
                      </svg>
                    </span>
                    Descarga nuestra App
                  </a>
                </li>
              </ul>
              <div class="clients pt-16">
                <h6
                  class="mb-2 flex items-center text-xs font-normal text-body-color"
                >
                  Conoce nuestras alianzas
                  <span
                    class="ml-2 inline-block h-[1px] w-8 bg-body-color"
                  ></span>
                </h6>
                <div class="flex items-center">
                  <div class="mr-4 w-full py-3">
                    <img src="{{asset ('img/universidades/evangelica.png')}}" alt="UniversidadEvangelica" />
                  </div>
                  <div class="mr-4 w-full py-3">
                    <img
                      src="{{asset ('img/universidades/andresbello.png')}}"
                      alt="graygrids"
                    />
                  </div>
                  <div class="mr-4 w-full py-3">
                    <img src="{{asset ('img/universidades/donbosco.jpg')}}" alt="UniversidadUcca" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="hidden px-4 lg:block lg:w-1/12"></div>
          <div class="w-full px-4 lg:w-6/12">
            <div class="lg:ml-auto lg:text-right">
              <div class="relative z-10 inline-block pt-11 lg:pt-0">
                <img
                  src="assets/images/hero/hero-image-01.png"
                  alt="logo"
                  class="max-w-full lg:ml-auto"
                />
                <span class="absolute -left-8 -bottom-8 z-[-1]">
                  <svg
                    width="93"
                    height="93"
                    viewBox="0 0 93 93"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                    <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                    <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                    <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                    <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                    <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                    <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                    <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                    <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                    <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                    <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                    <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                    <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                    <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                    <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                    <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                    <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                    <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                    <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                    <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                    <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                    <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                    <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                    <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                    <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        <!-- ====== Hero Section End -->
<script src="{{asset('js/funTailwinds.js')}}"></script>
  </body>
</html>

