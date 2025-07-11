<x-app-layout>
<x-global>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

    <h1>Books</h1>
    <a href="{{ route('book.create') }}">Create a book</a>
    <ul>
        @foreach($books as $book)
            <li>
                <h2>{{ $book->title }}</h2>
                <h2>{{ $book->author }}</h2>
                <h2>{{ $book->released_at }}</h2>
                <div>
                    <a href="{{ route('book.show', $book) }}">Show</a>
                    <a href="{{ route('book.edit', $book) }}">Edit</a>
                </div>
            </li>
        @endforeach
    </ul>
</body>
</html>
</x-app-layout>
</x-global>