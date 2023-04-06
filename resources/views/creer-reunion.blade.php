@extends('layout.v_template')

@section('title', 'Créer une réunion')
@section('content')
    <form action="/meeting-store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
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
                            <input type="textarea" name="judul" id="judul" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Date</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="mulai">Commencer</label>
                            <input type="time" name="mulai" id="mulai" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="berakhir">Terminer</label>
                            <input type="time" name="berakhir" id="berakhir" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tempat">Lieu</label>
                            <input type="text" name="tempat" id="tempat" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="notulen">destinataire</label>
                            <select id="notulen" name="notulen" class="form-control">
                                    @foreach ($users as $item)
                                        @if (!is_null($meetings))
                                        <option value="{{ $item->id }}"
                                            @if ($item->id == $meetings->minuter)disabled @endif>
                                            {{ $item->name }}
                                            @if ($item->id == $meetings->minuter)(Désactivé)@endif
                                        </option>
                                        @else
                                        <option value="{{ $item->id }}">
                                            {{ $item->name }}
                                        </option>
                                        @endif
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

            <div class="col-md-6">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Additionnel</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="field_wrapper form-group">
                            <label for="judul">Sujet</label>
                            <div style=" display:flex;">
                                <input type="text" id="judul1" name="field_name[]" class="form-control nn" required><br>
                                <a href="javascript:void(0);" class="add_button btn btn-primary" title="Add field"
                                    style="flex:1;">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputFile">Pièce jointe</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="lampiran[]" type="file" class="custom-file-input" id="exampleInputFile"
                                        multiple>
                                    <label class="custom-file-label" for="exampleInputFile">Choisir un fichier</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <input type="submit" value="Create Meeting" class="btn btn-success btn-block">
                <a href="#" class="btn btn-danger btn-block">cancle</a>
            </div>
        </div>
    </form>
@endsection
