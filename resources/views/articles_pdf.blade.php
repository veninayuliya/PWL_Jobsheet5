<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr td{
            font-size: 9pt;
        }
    </style>
    <center>
        <h3>Laporan Artikel</h3>
    </center>
    <table class='table table-bordered' border="1" cellpadding="7">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($articles as $a)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$a->title}}</td>
                <td>{{$a->content}}</td>
                <td>
                <img width="150px" src="{{('storage/'.$a->featured_image)}}" class="card-img-top" alt="Card image cap">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>