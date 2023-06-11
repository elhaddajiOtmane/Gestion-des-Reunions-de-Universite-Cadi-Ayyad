@extends('layout.template')

@section('title', 'Edit Meeting')
@section('content')
<form action="/meetingupdate" method="post" enctype="multipart/form-data">
@csrf
<div class="row">
<div class="col-md-12">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">General</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
<i class="fas fa-minus"></i>
</button>
</div>
</div>
<div class="card-body">
<div class="form-group">
<label for="judul">Title</label>
<input type="textarea" name="judul" id="judul" class="form-control"
                             value="{{ $meetings->title }}" required>
<input type="textarea" name="id" id="id" class="form-control"
                             value="{{ $meetings->id }}" required hidden>
</div>
<div class="form-group">
<label for="date">Date</label>
<input type="date" name="date" id="date" class="form-control"
                             value="{{ $meetings->date }}" required>
</div>
<div class="form-group">
<label for="mulai">Start</label>
<input type="time" name="mulai" id="mulai" class="form-control"
                             value="{{ $meetings->end_time }}" required>
</div>
<div class="form-group">
<label for="berakhir">End</label>
<input type="time" name="berakhir" id="berakhir" value="{{ $meetings->end_time }}"
                             class="form-control">
</div>
<div class="form-group">
<label for="tempat">Location</label>
<input type="text" name="tempat" id="tempat" class="form-control"
                             value="{{ $meetings->place }}" required>
</div>
<div class="form-group">

</div>
<div class="form-group">
<label for="exampleInputFile">Attachment</label>
<div class="input-group">
<div class="custom-file">
<input name="lampiran[]" type="file" class="custom-file-input" id="exampleInputFile"
                                     multiple>
<label class="custom-file-label" for="exampleInputFile">Choose file</label>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-12">
<input type="submit" value="Update" class="btn btn-warning btn-block">
<a href="/reunion/horaire" class="btn btn-danger btn-block">Cancel</a>
</div>
</form>
@endsection
