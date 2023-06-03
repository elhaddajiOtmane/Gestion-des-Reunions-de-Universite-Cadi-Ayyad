@extends('layout.template2')

@section('title', 'Statut de la réunion')
@section('content')
{{-- <h1>{{ $anggota->la date }}</h1> --}}
<div class="card">
    <div class="card-body p-0">
        <table id="example1" class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        Non
                    </th>
                    <th>
                        Nom
                    </th>
                    <th>
                        Statut
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($anggota as $item)
                    <tr>
                        <td class="text-center">
                            {{ $no++ }}
                        </td>
                        <td>
                            {{ $item->name }}
                        </td>
                        <td>
                            @if (is_null($item->respon))
                                <span class="badge badge-warning">En attente</span>
                            @elseif ($item->respon==1)
                                <span class="badge badge-primary">Sera présent</span>
                            @elseif ($item->respon==2)
                                <span class="badge badge-success">Présent</span>
                            @else
                                <span class="badge badge-danger">Empêché</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
