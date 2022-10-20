@php
  $style = "rounded w-full block mb-3"
@endphp
<x-layouts.layout title='Mediatheque'>
  <div class="px-20 py-20">
    <h1 class="text-xl font-black py-5 text-center">Create a new Book</h1>
    <div class="">
      <form action="{{ route('books.store') }}" method='post' enctype="multipart/form-data">

        @csrf
        <div class="">
          <input type="text" name='title' placeholder=Titre du livre value="{{ old('title')}}" class='{{ $style }}'>
          <x-error-msg name='title' />
        </div>
        <div class="">
          <input type="text" name='author' placeholder=' Auteur' value="{{ old('author')}}" class='{{ $style }}'>
          <x-error-msg name='author' />
        </div>
        <div class="div">
          <textarea name="description" id="" cols="30" rows="10" class="mt-5 block w-full rounded-lg border-gray-400" placeholder="Résumé">{{old('description')}}</textarea>
          <x-error-msg name='description' />
        </div>
        <div class="">
          <input type="number" name='price' placeholder="Prix" value="{{ old('price')}}" class='{{ $style }}'>
          <x-error-msg name='price' />
        </div>
        <div class="">
          <input type="number" name='nombre_pages' placeholder="Nombre de pages" class='{{ $style }}'value="{{ old('nombre_pages')}}">
          <x-error-msg name='nombre_pages' />
        </div>
        <div class="">
          <label for="">Image :</label>
          <input type="file" name="url_img" id="" class="block">
        </div>
        </x-error-msg name="url_img" />

      <button class="bg-blue-600  text-white mt-6 w-full py-6">Envoyer</button>
      </form>
    </div>
  </div>
</x-layouts.layout>
