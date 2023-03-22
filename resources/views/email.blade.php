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
            <td>Titre</td>
            <td>: {{ $judul }}</td>
        </tr>
        <tr>
            <td>fermer</td>
            <td>: {{ $ketua }}</td>
        </tr>
        <tr>
            <td>note</td>
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
            <td>Temps</td>
            <td>: {{ $waktu }}</td>
        </tr>
    </table>
    <br>
  <p> Veuillez revoir le système pour confirmer la présence en cliquant sur<a href="http://127.0.0.1:8000">ici</a>. </p>

    <br>
    <p>Merci pour votre attention.</p>
</body>
</html>
