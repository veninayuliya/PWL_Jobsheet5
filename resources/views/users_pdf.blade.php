<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
    <style type="text/css">
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #999;
            color: #232323;
        }

        th, td {
            text-align: left;
            padding: 16px;
            color: #232323;
            border: 1px solid #999;
        }

        th{
            position: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

    </style>
    <center>
        <h3>Laporan User</h3>
    </center>
    <table class='table table-bordered' border="1" cellpadding="7">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Images</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($users as $u)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->roles}}</td>
                <td>
                <img width="150px" src="{{('storage/'.$u->featured_image)}}" class="card-img-top" alt="Card image cap">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>