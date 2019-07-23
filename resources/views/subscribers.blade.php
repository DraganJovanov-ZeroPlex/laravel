<h2>List of all our lovely subscribers</h2>

<br>

<table style="width: 100%; border: 5px double black">
    <tr style="border-bottom: 1px solid black">
        <th style="width:50%; border-bottom: 1px solid black">Name</th>
        <th style="width:25%; border-bottom: 1px solid black">Books Loaned</th>
        <th style="width:25%; border-bottom: 1px solid black">Penalty for being late (€)</th>
    </tr>
@foreach($subscribers as $subscriber)
    <tr >
        <td>{{ $subscriber['name'] }}</td>
        <td>{{ $subscriber['books_loaned'] }}</td>
        <td>{{ $subscriber['owes'] }}</td>
    </tr>
@endforeach
</table>
