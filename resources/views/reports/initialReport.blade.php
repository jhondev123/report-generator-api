<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$data['title']}}</title>
</head>
<body>
    <h1>{{$data['title']}}</h1>
    <hr>
    <table>
        <thead>
            @foreach ($data['headers'] as $header)
                <th>{{$header}}</th>
            @endforeach
        </thead>
        <tbody>
            @foreach ($data['data'] as $dataTable)
                <tr>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
{{-- @dd($data['data'])
@dd('teste') --}}