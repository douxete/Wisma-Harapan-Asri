<!DOCTYPE html>
<html>

<head>
    <title>Laporan PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Daftar Penghuni</h4>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th >Nama Penghuni</th>
                <th >Nama Penanggung Jawab</th>
                <th >ruang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penghuni as $penghuni)
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 text-left whitespace-nowrap">
                    <div class="flex items-center">
                        <span class="font-medium">{{ $penghuni->namaLengkap }}</span>
                    </div>
                </td>
                <td class="py-3 px-6 text-left whitespace-nowrap">
                    <div class="flex items-center">
                        <span>{{ $penghuni->nama }}</span>
                    </div>
                </td>
                <td class="py-3 px-6 text-center whitespace-nowrap">
                    <div class="flex items-center">
                        <span>{{ $penghuni->ruang }}</span>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>