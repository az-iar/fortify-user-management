<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fortify User Management</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
</head>
<body class="bg-gray-200">
    @if(auth()->check())
        <div class="min-h-full">
          <nav class="bg-white border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="flex justify-between h-16">
                <div class="flex">
                  <div class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-8 w-auto"
                         src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                         alt="Workflow">
                    <img class="hidden lg:block h-8 w-auto"
                         src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-800-text.svg"
                         alt="Workflow">
                  </div>
                  <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
                    <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                    <a href="{{ route('home') }}"
                       @if(request()->routeIs('home'))
                       aria-current="page"
                       class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                       @else
                       class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                            @endif

                    >
                      Dashboard
                    </a>

                    <a href="{{ route('users.index') }}"
                       @if(request()->routeIs('users.index'))
                       aria-current="page"
                       class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                       @else
                       class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                            @endif
                    >
                      Users
                    </a>
                  </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <form action="{{ route('logout') }}" method="post">
                        {!! csrf_field() !!}
                        <button
                                type="submit"
                                class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                          Logout
                        </button>
                    </form>

                </div>
              </div>
            </div>
          </nav>

          <div class="py-10">
            <header>
              <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold leading-tight text-gray-900">
                  @yield('pageTitle')
                </h1>
              </div>
            </header>
            <main>
              <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Replace with your content -->
                <div class="px-4 py-8 sm:px-0">
                  @yield('content')
                </div>
                <!-- /End replace -->
              </div>
            </main>
          </div>
        </div>

    @else
        @yield('content')
    @endif

    @yield('modal')

    <!-- Scripts -->
    @livewireScripts
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>