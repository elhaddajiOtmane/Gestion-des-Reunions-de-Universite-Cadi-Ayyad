<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>&nbsp;</title>
    <style>
        .header, .header-space{
            height: 175px;
        }
        .footer, .footer-space {
        height: 100px;
        }
        .header {
            position: fixed; top: 0px; left: 100px; right: 100px;
        }
        .footer {
        position: fixed;
        bottom: 0;
        left: 0px;
        right: 0px;
        }
        .content{
            margin-left: 100px;
            margin-right: 100px;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('template/') }}/dist/css/adminlte.min.css">
</head>
<body onload="window.print();">
    <table>
        <thead>
            <tr>
                <td>
                    <div class="header-space">&nbsp;</div>
                </td>
            </tr>
        </thead>
        <tbody>
            <br>
            <br>
            <tr>
                <td>
                    <div class="content">
                        <table>
                            <tr>
                                <td>
                                    Nom de la réunion
                                </td>
                                <td>
                                    : {{ $meeting->title }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jour / Date
                                </td>
                                <td>
                                    {{-- : {{ $meeting->tanggal->format('d') }} --}}
                                    : {{\Carbon\Carbon::parse($meeting->tanggal)->translatedFormat('l, d F Y')}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Temps
                                </td>
                                <td>
                                    : {{ $meeting->waktu_mulai }} WIB
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Lieu
                                </td>
                                <td>
                                    : {{ $meeting->place }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Chef de la réunion
                                </td>
                                <td>
                                    : {{ $leader->name }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Procès-verbal de la réunion
                                </td>
                                <td>
                                    : {{ $notulen->name }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Participants à la réunion
                                </td>
                                <td>
                                    :
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <?php $no = 1; ?>
                                    @foreach ($anggota as $item)
                                        {{ $no++ }}. {{ $item->name }}<br>
                                    @endforeach
                                </td>
                            </tr>
                        </table>
                        <br>
                        <p><strong>Ordre du jour de la réunion</strong></p>
                        <?php $no = 1; ?>
                        @foreach ($topik as $item)
                            {{ $no++ }}. {{ $item->judul }}<br>
                         @endforeach
                        <br>
                        <p><strong>Procès-verbal de la réunion</strong></p>
                        {!! $result->isi !!}
                        <br>
                        <div>
                            <p><strong>Documentation de la réunion</strong></p>
                            @foreach ($dokumentasi as $item)
                                <img src="{{ url('dokumentasi/' . $item->Path) }}" class="img-fluid mb-2" alt="Dokuemntasi Rapat" width="50%"/>
                            @endforeach
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td>
                    <div class="footer-space">&nbsp;</div>
                </td>
            </tr>
        </tfoot>
    </table>

    <div class="header">
        <div class="row">
            <div class="col-3">
                <div class="row">
                    <div class="col text-center">
                        <img src="{{ url('foto/logodel.png') }}" alt="logo" width="100px" class="text-center">
                        <h4>  DEL</h4>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col text-center">
                        <h1>Procès-verbal de la réunion</h1>
                        <h2>Institut  Del</h2>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="footer">
        <hr>
        <p>
            <strong>Institut Teknologi Del</strong>
            <br>

            <a href="">info.ac.id</a>
            <a href="ww.ac.d">.ac.id</a>
        </p>
    </div>
</body>
<script type="text/javascript">
    window.onafterprint = window.close;
    window.print();
 </script>
</html>
