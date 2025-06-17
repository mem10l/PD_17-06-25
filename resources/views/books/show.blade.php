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

    <form action="{{ route('book.destroy', $singleBook) }}" method="DELETE">
        @csrf
        @method('DELETE')
        <input type="submit" value="Dzēst">
    </form>

    <h2>{{ $singleBook->title }}</h2>
    <h3>{{ $singleBook->author }}</h3>
    <p>{{ $singleBook->released_at }}</p>
    <a href="{{ route('book.index') }}">All books</a>
</body>
</html>
</x-app-layout>
</x-global>