

<!-- ====== Navbar Section Start -->
    <header
      x-data="
        {
          navbarOpen: false,
        }
      "
      class="absolute left-0 top-0 z-50 w-full"
    >
      <div class="container mx-auto">
        <div class="relative -mx-4 flex items-center justify-between">
          <div class="w-60 max-w-full px-4">
            <a href="javascript:void(0)" class="block w-full py-5">
              <img
                src="assets/images/logo/logo.svg"
                alt="logo"
                class="w-full"
              />
            </a>
          </div>
          <div class="flex w-full items-center justify-between px-4">
            <div>
              <button
                @click="navbarOpen = !navbarOpen"
                :class="navbarOpen && 'navbarTogglerActive'"
                id="navbarToggler"
                class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
              >
                <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"
                ></span>
                <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"
                ></span>
                <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"
                ></span>
              </button>
              <nav
                x-transition
                :class="!navbarOpen && 'hidden'"
                id="navbarCollapse"
                class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 px-6 shadow transition-all lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none"
              >
                <ul class="block lg:flex">
                  <li>
                    <a
                      href="{{route('inicio')}}"
                      class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex"
                    >
                      Inicio
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex"
                    >
                      Progreso
                    </a>
                  </li>
                  <li>
                    <a
                      href="{{route('nosotros')}}"
                      class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex"
                    >
                      Acerca
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
              <a
                href="{{route('login')}}"
                class="py-3 px-7 text-base font-medium text-dark hover:text-primary"
              >
                Iniciar Session
              </a>
              <a
                href="javascript:void(0)"
                class="rounded-lg bg-primary py-3 px-7 text-base font-medium text-white hover:bg-opacity-90"
              >
                Registrate
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

