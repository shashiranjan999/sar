<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TEsts</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach($student as $kk)
         <tr>
            <td><a href="{{route('enter_student',$kk->ID)}}">{{$kk->ID}}</a></td>
            <td>{{$kk->name}}</td>
            <td>{{$kk->father_name}}</td>
            <td>{{$kk->email}}</td>
            <td>{{$kk->mobile}}</td>
            <td>{{$kk->address}}</td>
            
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>