<center>
    <h1>Students List</h1>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Teacher</th>
        </tr>
        @foreach ($data as $value )
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->age }}</td>
            <td>{{ $value->teacher }}</td>
        </tr>
            
        @endforeach
    </table>
    <script src="/bootstrap/js/bootstrap.js"></script>
</center>