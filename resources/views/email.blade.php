<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Cher Père et Mère Maître de conférences D3 Informatique
    </p>
    <br>
    <p>Ceci est un e-mail de notification sera tenu une réunion avec la description suivante :</p>
    <table>
        <tr>
            <td>Judul</td>
            <td>: {{ $judul }}</td>
        </tr>
        <tr>
            <td>Ketua Rapat</td>
            <td>: {{ $ketua }}</td>
        </tr>
        <tr>
            <td>Note</td>
            <td>: {{ $notulis }}</td>
        </tr>
        <tr>
            <td>Tempat</td>
            <td>: {{ $tempat }}</td>
        </tr>
        <tr>
            <td>Hari/Tanggal</td>
            <td>: {{\Carbon\Carbon::parse($tanggal)->translatedFormat('l, d F Y')}}</td>
        </tr>
        <tr>
            <td>Waktu</td>
            <td>: {{ $waktu }}</td>
        </tr>
    </table>
    <br>
    <p>Mohon Bapak dan Ibu membuka kembali sistem untuk mengkonfirmasi kehadiran dengan klik di <a href="http://127.0.0.1:8000">sini</a>. </p>

    <br>
    <p>Terima kasih atas perhatian nya.</p>
</body>
</html>
