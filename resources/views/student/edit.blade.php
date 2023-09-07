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
        <h2>Students Table - Edit</h2>
        <br>

        @php 
            // dd($data);
        @endphp

        <table class="table">
            <form action="{{route('students.update', ['student' => $data['id']]);}}" method="post">
                @csrf
                @method('put')
                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
                <thead>
                    <tr>
                        <th>NAME</th>
                        <th>MOBILE</th> 
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="20%">
                            <input type="text" name="name" id="" value="{{$data['name']}}">
                        </td>
                        <td>
                            <input type="text" name="mobile" id="" value="{{$data['mobile']}}">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit">submit</button>
                        </td>
                    </tr>

                </tbody>
            </form>
        </table>
    </div>

</body>

</html>
