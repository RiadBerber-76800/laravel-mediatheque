<x-layouts.layout title='Bienvenue sur notre Mediatheque'>
    <div class="px-20 py-20">
        <h1 class="text-2xl font-black py-5 text-center m-10">Liste des livres</h1>

<!-- table -->
    <div class="overflow-x-auto mt-16">
        <table class="table w-full">
            <!-- head -->
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Prix</th>
                    <th>Pages</th>
                    {{-- <th>Description</th> --}}
                    <th>Editer</th>
                    {{-- <th>Supprimer</th> --}}
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $book)

                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->price }}</td>
                    <td>{{ $book->nombre_pages }}</td>
                    {{-- <td>{{ $book->description }}</td> --}}
                    <td>
                        <a href="books/{{ $book->id }}" class="px-3">
                            <img src="loupe.png" alt="loupe" class="w-4 hover:text-blue-500">
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>Pas de livre actuellement!</td>
                </tr>
                @endforelse
            </tbody>
            <div>
        </table>
    </div>
    <div class="">
      {{ $books->links()}}
    </div>
</x-layouts.layout>
