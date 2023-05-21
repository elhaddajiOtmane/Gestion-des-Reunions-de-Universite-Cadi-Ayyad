<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Chers Bapak/Ibu Dosen D3 Teknologi Informasi,</p>
    <br>
    <p>Ceci est un e-mail de notification concernant le résultat de la réunion avec la description suivante :</p>
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
            <td>Preneur de notes</td>
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
    <p>Le président du département n'a pas approuvé la publication de ce résultat de réunion, avec le commentaire suivant :</p>
    <p>"{{ $pesan }}"</p>
    <p>Nous vous prions de bien vouloir ouvrir à nouveau le système pour corriger le résultat de la réunion à l'adresse suivante : <a href="http://127.0.0.1:8000/reunion/horaire/{{ $id }}">ici</a>. </p>

    <br>
    <p>Nous vous remercions pour votre attention.</p>
</body>

</html>
