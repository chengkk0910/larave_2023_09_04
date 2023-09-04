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
        <h2>Students Table - Create</h2>
        <br>
        <table class="table">
            <form action="{{route('students.store')}}" method="post">
                @csrf
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
                            <input type="text" name="name" id="">
                        </td>
                        <td>
                            <input type="text" name="mobile" id="">
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
