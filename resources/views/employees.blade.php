<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <ul>
        @foreach ($data as $d)
        <li>{{$d->fname}} {{$d->lname}}</li>
        @endforeach
    </ul> --}}


    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>First Name</td>
                <td>Last Name</td>
            </tr>
        </thead>

        <tbody>
            @foreach($data as $d)
                <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->fname}}</td>
                    <td>{{$d->lname}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
