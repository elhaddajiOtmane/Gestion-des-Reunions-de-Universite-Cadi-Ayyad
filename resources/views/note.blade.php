@extends('layout.template')

@section('title', 'Minutes')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <form action="/meeting/buatNotulensi" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <h3 class="card-title">
                    Procès-verbal de réunion ordinaire
                </h3>
            </div>
            <div class="card-body">
                <textarea id="summernote" name="isi" >
                    @if (!is_null($note))
                        {!! $note->isi !!}
                    @endif
                </textarea>
                <input type="text" name="id" value="{{ $id }}" hidden>

                <div class="form-group">
                    <label for="exampleInputFile">Documentation</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="lampiran[]" type="file" class="custom-file-input" id="exampleInputFile"
                                multiple>
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                    @error('lampiran')
                    <span class="alert-danger" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <input type="submit" value="Buat" class="btn btn-block btn-primary">
            </div>
            <div class="card-footer">
                *Veuillez vérifier les résultats du procès-verbal avant de soumettre.
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
