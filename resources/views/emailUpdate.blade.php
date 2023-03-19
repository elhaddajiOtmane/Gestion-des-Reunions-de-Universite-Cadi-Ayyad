<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<br>
<body>
    <p>Chers Bapa et Ibu Dosen D3 Teknologi Informasi,</p>
    <p>Ceci est un courriel de notification de changement de programme de réunion avec les détails suivants :</p>
    <table>
        <tr>
            <td>Titre</td>
            <td>: {{ $judul }}</td>
        </tr>
        <tr>
            <td>Président de la réunion</td>
            <td>: {{ $ketua }}</td>
        </tr>
        <tr>
            <td>Secrétaire de la réunion</td>
            <td>: {{ $notulis }}</td>
        </tr>
        <tr>
            <td>Lieu</td>
            <td>: {{ $tempat }}</td>
        </tr>
        <tr>
            <td>Jour/Date</td>
            <td>: {{\Carbon\Carbon::parse($tanggal)->translatedFormat('l, d F Y')}}</td>
        </tr>
        <tr>
            <td>Heure</td>
            <td>: {{ $waktu }}</td>
        </tr>
    </table>
    <br>
    <p>Veuillez ouvrir à nouveau le système pour confirmer votre présence en cliquant <a href="http://127.0.0.1:8000">ici</a>.</p>
<p>Merci de votre attention.</p>
</body>
</html>
