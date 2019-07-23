<h2>Select a book for reading</h2>

<br>

<table style="width: 100%; border: 5px double black">
    <tr style="border-bottom: 1px solid black">
        <th style="width:50%; border-bottom: 1px solid black">Book Title</th>
        <th style="width:50%; border-bottom: 1px solid black">Author</th>
    </tr>
@foreach($booksRepository as $repoItem)
    <tr >
        <td><a href="{{ route('books.read') }}">{{ $repoItem['book'] }}</a></td>
        <td>{{ $repoItem['author'] }}</td>
    </tr>
@endforeach
</table>
