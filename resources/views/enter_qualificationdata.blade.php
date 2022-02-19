<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TEsts</title>
</head>
<body>
<form action="{{route('qualificationdata')}}" method="post">
    @csrf
    <input type="hidden" required value="{{!empty($student)?$student->ID:''}}" name="id">
    <input type="text" value="{{!empty($student)?$student->name:''}}" placeholder="name" name="name">
    <input type="text" value="{{!empty($student)?$student->mobile:''}}" placeholder="sequence" name="sequence">
    <button type="submit">Submit</button>
</form>
</body>
</html>