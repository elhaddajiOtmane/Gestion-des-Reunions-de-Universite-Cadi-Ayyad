@extends('layout.template')

@section('title', 'Calendrier des réunions')
@section('content')
    <div class="card">
        <div class="card-body p-0">
            <table id="example1" class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            n
                        </th>
                        <th style="width: 30%">
                            titre
                        </th>
                        <th style="width: 10%" class="text-center">
                            titre
                        </th>
                        <th style="width: 10%" class="text-center">
                            Temps
                        </th>
                        <th>
                            Lieu
                        </th>
                        <th style="width: 20%" class="text-center">
                            distinatire
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($meetings as $item)
                        <tr>
                            <td class="text-center">
                                {{ $no++ }}
                            </td>
                            <td>
                                {{ $item->title }}
                            </td>
                            <td class="text-center">
                                {{ $item->date }}
                            </td>
                            <td class="text-center">
                                {{ $item->end_time }}
                            </td>
                            <td class="text-center">
                                {{ $item->place }}
                            </td>
                            <td class="text-center">
                                {{ $item->name }}
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="/reunion/horaire/{{ $item->id }}" data-toggle="tooltip" data-placement="left" title="Lihat Data Rapat">
                                    <i class="fas fa-eye">
                                    </i>
                                </a>

                                @if (auth()->user()->role == 2)
                                    @if ($now->toDateTimeString() < $item->date.' '.$item->end_time)
                                        <a class="btn btn-info btn-sm" href="/meeting/edit/{{ $item->id }}" data-toggle="tooltip" data-placement="left" title="Edit Data Rapat">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                        <a class="btn btn-danger btn-sm swalDefaultSuccess" data-toggle="tooltip" data-placement="left" title="Supprimer les données de réunion
                                        " href="/meeting/delete/{{ $item->id }}" onclick="return confirm('Apakah anda yakin ingin menghapus?')">
                                            <i class="fas fa-trash">
                                            </i>
                                        </a>
                                    @endif
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
