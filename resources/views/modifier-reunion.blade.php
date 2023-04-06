@extends('layout.v_template')

@section('title', 'Modifier la réunion')
@section('content')
    <form action="/meetingupdate" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Général</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="judul">Titre</label>
                            <input type="textarea" name="judul" id="judul" class="form-control"
                                value="{{ $meetings->title }}" required>
                            <input type="textarea" name="id" id="id" class="form-control"
                                value="{{ $meetings->id }}" required hidden>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Date</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control"
                                value="{{ $meetings->tanggal }}" required>
                        </div>
                        <div class="form-group">
                            <label for="mulai">Mulai</label>
                            <input type="time" name="mulai" id="mulai" class="form-control"
                                value="{{ $meetings->waktu_mulai }}" required>
                        </div>
                        <div class="form-group">
                            <label for="berakhir">Berakhir</label>
                            <input type="time" name="berakhir" id="berakhir" value="{{ $meetings->waktu_akhir }}"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <input type="text" name="tempat" id="tempat" class="form-control"
                                value="{{ $meetings->place }}" required>
                        </div>
                        <div class="form-group">
                            <label for="notulen">Minutes</label>
                            <select id="notulen" name="notulen" class="form-control" value="{{ $meetings->minuter }}">
                                @foreach ($users as $item)
                                    @if ($item->id == $meetings->minuter)
                                        <option selected value="{{ $item->id }}">{{ $item->name }}</option>
                                    @else
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Pièce jointe</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="lampiran[]" type="file" class="custom-file-input" id="exampleInputFile"
                                        multiple>
                                    <label class="custom-file-label" for="exampleInputFile">Choisir file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-12">
            <input type="submit" value="Perbaharui" class="btn btn-warning btn-block">
            <a href="/meeting/jadwal" class="btn btn-danger btn-block">annuler</a>
        </div>
    </form>
@endsection
