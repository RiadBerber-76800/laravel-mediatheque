<x-layouts.layout title='Dashboard'>
@auth
    @if(Auth::user()->is_admin == 1)

  <div class="px-20 py-12">
    <h1 class="font-black text-2xl text-center">Bienvenue <span class="text-blue-500"> {{ Auth::user()->name}} </span> sur ton Dashboard</h1>
    <div class="py-8">
      <a href="{{ route('books.create') }}" class="">Ajouter un Film</a>
      <a href="{{ route('books.edit') }}" class="">Modifier un Film</a>
    </div>
  </div>
  @else
  <div class="px-20 py-12">
  @endif
  @endauth
</x-layouts.layout>

