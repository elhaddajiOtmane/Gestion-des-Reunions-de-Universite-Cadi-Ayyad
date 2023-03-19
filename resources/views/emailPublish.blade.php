<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Chers admin dan ,</p>
    <br>
    <p>Ceci est un e-mail de notification pour une réunion avec la description suivante :</p>
    <table>
        <tr>
            <td>Titre</td>
            <td>: {{ $judul }}</td>
        </tr>
        <tr>
            <td>Président de la Réunion</td>
            <td>: {{ $ketua }}</td>
        </tr>
        <tr>
            <td>Secrétaire</td>
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
    <p>Le compte rendu de la réunion a été publié dans le système gestion des réunions.</p>
    <p>Vous pouvez vérifier les résultats de la réunion en ouvrant à nouveau le système <a href="http://127.0.0.1:8000/meeting/hasil/{{ $id }}">ici</a>.</p>
    <br>
<p>Nous vous remercions pour votre attention.</p>
</body>
</html>
