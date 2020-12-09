<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download</title>
</head>
<body>
<table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>DOB</th>
                    <th>Position</th>
                    <th>Degree</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $dat)
                <tr>
                    <th scope="row">{{ $dat->id }}</th>
                    <td>{{ $dat->name }}</td>
                    <td>{{ $dat->email }}</td>
                    <td>{{ $dat->phone }}</td>
                    <td>{{ $dat->dateofbrith }}</td>
                    <td>{{ $dat->position }}</td>
                    <td>{{ $dat->degree }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>