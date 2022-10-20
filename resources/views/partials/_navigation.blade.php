<nav class="p-10 flex justify-between items-center bg-orange-500">
  <div>
    <a class="font-bold text-[40px] bg-gray-100 underline rounded p-2" href="index.php">Mediathèque<span class="text-red-500">On</span>Line<span class="text-red-500">.</span></a>
  </div>

  <div class="space-x-4">
        @guest()
        <a class='border-solid border-2 border-gray-100 rounded p-2 text-white' href="{{ route('login') }}">Connexion</a>
        <a class='border-solid border-2 border-gray-100 rounded p-2 text-white' href="{{ route('register') }}">Inscription</a>
        @endguest
        @auth()
        <div class="flex space-x-3">
            <div class="py-3">
                <a class='border-solid border-2 border-gray-100 rounded p-2 text-white ' href="{{ route('dashboard') }}">Dashboard</a>
            </div>
            <div class="">
                <form method="POST" action={{ route('logout') }}>
                    @csrf
                    <button type='submit' class='border-solid border-2 border-gray-100 rounded p-2 text-white'>Deconnexion</button>
                </form>
            </div>
        </div>
        @endauth
      </div>
</nav>















