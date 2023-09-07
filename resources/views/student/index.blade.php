<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Students Table</h2>
        <div class="float-end">
            <a class="btn btn-success" href="{{ route('students.create') }}" role="button">add</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>MOBILE</th>
                    <th>operate</th>
                </tr>
            </thead>
            @php
                // dd($data);
            @endphp
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['mobile'] }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('students.edit', ['student' => $item['id']]) }}"
                                role="button">修改</a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

</body>

</html>
