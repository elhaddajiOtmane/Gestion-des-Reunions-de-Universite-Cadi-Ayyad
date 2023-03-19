<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Cher Monsieur/Madame le Chef du Programme D3 Technologie de l'Information,</p>
    <br>
    <p>Ceci est un email de notification pour les membres de la réunion avec les descriptions suivantes :</p>
    <table>
        <tr>
            <td>
                Nom
            </td>
            <td>
                : {{ $nama }}
            </td>
        </tr>
        <tr>
            <td>
                Email
            </td>
            <td>
                : {{ $email }}
            </td>
        </tr>
        <tr>
            <td>
                Message
            </td>
            <td>
                : {{ $pesan }}
            </td>
        </tr>
    </table>
    <br>
    <p>Ne peut pas assister à la réunion avec les descriptions suivantes :</p>
    <table>
        <tr>
            <td>Titre</td>
            <td>: {{ $judul }}</td>
        </tr>
        <tr>
            <td>Chef de Réunion</td>
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
<p>Pour plus d'informations sur les membres de la réunion, veuillez consulter <a href="http://127.0.0.1:8000/meeting/jadwal/{{ $id }}">ici</a>. </p>
<p>Merci de votre attention.</p>
</body>
</html>
