{{-- <x-layouts.layout title='Bienvenue sur notre Mediatheque'>
    <div class="px-20 py-20">
        <h1 class="text-xl font-black py-5 text-center m-20">Liste des livres</h1>
        <div class="overflow-x-auto mt-16">
        <table class="table w-full">
            <!-- head -->
            <thead>
                <tr>
                    <th>id</th>
                    <th>Auteur</th>
                    <th>Titre</th>
                    <th>Prix</th>
                    <th>Pages</th>
                    {{-- <th>Description</th> --}}
                    <th>voir</th>
                    {{-- <th>Supprimer</th> --}}
                </tr>
            </thead>
            <tbody>
                <div class="grid grid-cols-4 gap-4">
                    @forelse ($books as $book)
                {{-- <a href="books/{{ $book->id }}" class="">
                <x-cards.cardBook :title='$book->title' :description='$book->description' :url_img='$book->url_img' :price='$book->price' :author='$book->author' :nombre_pages='$book->nombre_pages'/>
                </a> --}}
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->price }}</td>
                    <td>{{ $book->nombre_pages }}</td>
                    {{-- <td>{{ $book->description }}</td> --}}
                    <td>
                        <a href="books/{{ $book->id }}" class="px-3">
                            <img src="loupe.png" alt="loupe" class="w-4 hover:text-blue-500">

                        </a>
                    </td>
                @empty

                </tr>
                @endforelse
            </tbody>

            <div>
        </table>
    </div>
    <div class="">
      {{ $books->links()}}
    </div>

</x-layouts.layout> --}}

