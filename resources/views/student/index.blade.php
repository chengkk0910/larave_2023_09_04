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
                    <th>ADDRESS</th>
                    <th>LOVE</th>
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
                            @if (!empty($item['address']))
                                {{ $item['address']['addr'] }}
                            @endif
                        </td>
                        <td>
                            @foreach ($item['loves'] as $love)
                                {{ $love['name'] }}
                            @endforeach
                        </td>
                        <td>
                            {{-- <a class="btn btn-warning" href="{{ route('students.edit', $item['id']}}"
                                role="button">修改</a> --}}

                            <form action="{{ route('students.destroy', ['student' => $item['id']]) }}" method="post">
                                <a class="btn btn-warning"
                                    href="{{ route('students.edit', ['student' => $item['id']]) }}"
                                    role="button">修改</a>
                                @csrf
                                @method('delete')
                                <button type="submit" class="d-inline btn btn-danger">Del</button>
                            </form>
                            {{-- form --}}
                            {{-- @csrf --}}
                            {{-- @method('DELETE') --}}
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

</body>

</html>
