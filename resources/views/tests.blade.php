<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TEsts</title>
</head>
<body>
<form action="{{route('studnetdata')}}" method="post">
    @csrf
    <input type="text" required value="{{!empty($student)?$student->ID:''}}" name="id">
    <input type="text" value="{{!empty($student)?$student->name:''}}" placeholder="name" name="name">
    <input type="text" value="{{!empty($student)?$student->mobile:''}}" placeholder="mobile" name="mobile">
    <input type="text" value="{{!empty($student)?$student->email:''}}" placeholder="email" name="email">
    <input type="text" value="{{!empty($student)?$student->address:''}}" placeholder="address" name="address">
    <input type="text" value="{{!empty($student)?$student->father_name:''}}" placeholder="father" name="father">
    <button type="submit">Submit</button>
</form>
</body>
</html>