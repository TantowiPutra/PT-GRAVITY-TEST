<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Karyawan</title>

    <style>
        html, body {
            display: flex;
        }

        table, tr, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 4px 10px 4px 10px;
        }

    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jabatan</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($karyawans as $k) 
                <tr>
                    <th>{{  $k->id }}</th>
                    <th>{{  $k->nama }}</th>
                    <th>{{  $k->alamat }}</th>
                    <th>{{  $k->jabatan }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
