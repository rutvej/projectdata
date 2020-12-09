<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="{{url('registration')}}" method="post">
    name:<br>
    <input type="text" name="name"><br>
    email:<br>
    <input type="email" name="email"><br>
    phone:<br>
    <input type="text" maxlength="10" name="phone"><br>
    date of birth:<br>
    <input type="date" name="dateofbirth"><br>
    position:<br>
    <input type="text" name="position"><br>
    degree:<br>
    <input type="text" name="degree"><br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="submit" value="submit">
    </form>
</body>
</html>