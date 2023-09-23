@vite('resources/css/app.css')
<nav class="bg-white shadow-xl dark:bg-emerald-600 fixed w-full z-20 top-0 left-0">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="/" class="flex items-center">
      <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">🥕 Vegan XP</span>
  </a>
  <div class="flex md:order-2">
    <div class="flex items-center">
    
    </div>
      <!-- <a href="{{route('login')}}" type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Get started</a> -->
      <!-- Right Side Of Navbar -->
      <ul class="">
          <!-- Authentication Links -->
          @guest
              @if (Route::has('login'))
                  <li class="nav-item text-white">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
              @endif
              @if (Route::has('register'))
                  <li class="nav-item text-white">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown m-2">
                  <!-- <a href="{{ route('profile') }}" id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->username }}
                  </a> -->
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item text-white font-bold hover:text-emerald-300" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 dark:bg-emerald-600 text-lg  font-bold">
      <li>
        <a href="/" class="{{ request()->is('/') ? 'active-link' : '' }} block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0 md:dark:hover:text-emerald-300" aria-current="page">Home</a>
      </li>
      <li>
        <a href="profile" class="{{ request()->is('profile') ? 'active-link' : '' }} block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 md:dark:hover:text-emerald-300 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Profile</a>
      </li>
      <li>
        <a href="{{ route('rewards') }}" class="{{ request()->is('rewards') ? 'active-link' : '' }} block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent  md:p-0  dark:text-white dark:hover:bg-gray-700 md:dark:hover:text-emerald-300 md:dark:hover:bg-transparent dark:border-gray-700">Rewards</a>
      </li>
      <li>
        <a href="leaderboard" class="{{ request()->is('leaderboard') ? 'active-link' : '' }} block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 md:dark:hover:text-emerald-300 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Leaderboard</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

<style>
    .active-link {
      color: 	rgb(110,231,183);
    }
</style>
