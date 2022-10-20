<x-layouts.layout title='Bienvenue sur notre site'>
  <div class="px-20 py-20">
    <div class="">
        <div class="">
            <img src="{{ asset('storage/' .$book->url_img) }}" class="w-96">
            </div>
            <h1 class="text-xl font-black py-5">Titre : {{ $book->title }}</h1>
            <p class=text-blue-500>Auteur : {{ $book->author }}</p>
            <div class="pt-5">
            <p class=>{!! nl2br(e($book->description)) !!}</p>
            <div class="flex jusfify-center space-x-6 py-10">
                <p class='text-blue-500'>prix: {{ $book->price }} €</p>
                <p class=text-blue-500>Nombre de page : {{ $book->nombre_pages }}</p>
            </div>
        </div>
        @auth
        </div>
    <div class="flex space-x-5 pt-8">
      <a href="{{ route('books.edit', $book->id) }}" class="bg-green-600 text-white p-2 rounded-lg">Modifier</a>
      <x-btn-delete :item='$book' routeItem='books.destroy' />
    </div>
    @endauth
  </div>

</x-layouts.layout>
