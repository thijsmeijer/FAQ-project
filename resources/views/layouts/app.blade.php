<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Bit Academy</title>

        <script src="{{ asset('js/app.js') }}" defer></script>

        <link rel="dns-prefetch" href="//fonts.gstatic.com" />
        <link
            href="https://fonts.googleapis.com/css?family=Nunito"
            rel="stylesheet"
        />
        <script src="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/js/medium-editor.min.js"></script>
        <link 
            rel="stylesheet"
            href="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/medium-editor.min.css"
            type="text/css"
            media="screen"
            charset="utf-8"
        />

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    </head>
    <body class="min-h-full">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-black">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img class="BitLogo" src="/img/logo.svg" alt="" />
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div
                        class="collapse navbar-collapse"
                        id="navbarSupportedContent"
                    >
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item" id="login">
                                @unless(Request::path() === '/') 
                                    <a class="nav-link text-white" href="/">Home</a>
                                @endunless
                            </li>
                            <li class="nav-item" id="login">
                                    <a class="nav-link text-white" href="https://www.bit-academy.nl/">Bit-Academy</a>
                            </li>
                            <li class="nav-item" id="login">
                                <a class="nav-link text-white" href="/faqs">Questions</a>
                            </li>
                            @guest @if (Route::has('login'))
                            <li class="nav-item" id="login">
                                <a
                                    class="nav-link text-white"
                                    href="{{ route('login') }}"
                                    >{{ __("Login") }}</a
                                >
                            </li>
                            @endif @if (Route::has('register'))
                            <li class="nav-item">
                                <a
                                    class="nav-link text-white"
                                    href="{{ route('register') }}"
                                    >{{ __("Register") }}</a
                                >
                            </li>
                            @endif @else
                            <li class="nav-item dropdown">
                                <a
                                    id="navbarDropdown"
                                    class="nav-link dropdown-toggle text-white"
                                    href="#"
                                    role="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    v-pre
                                >
                                    {{ Auth::user()->name }}
                                </a>

                                <div
                                    class="dropdown-menu dropdown-menu-right"
                                    aria-labelledby="navbarDropdown"
                                >
                                    <a
                                        class="dropdown-item"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                    >
                                        {{ __("Logout") }}
                                    </a>

                                    <form
                                        id="logout-form"
                                        action="{{ route('logout') }}"
                                        method="POST"
                                        class="d-none"
                                    >
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="test">@yield('content')</main>
        </div>
        <footer class="text-center text-lg-start text-muted fixed bottom-0">
            <section class="">
              <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="/img/logo.svg" alt="" />
                    </a>
                  </div>
          
             <div class="">
                  <div class="Button-Border"> 
                    <a class=" TestButton mb-md-0 nav-link text-white" href="/ask-question">Heb je een vraag? ➟</a>
                </div>
           </div>

                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4 text-light">
                      Contact
                    </h6>
                    <p class="text-light"><i class="fas fa-home me-3 text-light"></i> Koningin Wilhelminaplein 1 <br> Amsterdam</p>
                    <p class="text-light">
                      <i class="fas fa-envelope me-3 text-light"></i>
                      info@bit-academy.nl
                    </p>
                    <p class="text-light"><i class="fas fa-phone me-3 text-light"></i> +31 20 247 0347</p>
                  </div>
                </div>
              </div>
            </section>
          </footer> 
        


        <script>
            var editor = new MediumEditor(".editable");
        </script>
    </body>
</html>
