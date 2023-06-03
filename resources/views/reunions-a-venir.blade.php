@extends('layout.template')

@section('title', 'Résultats de la réunion')
@section('content')
    <!-- Default box -->
    <div class="card card-primary">
        <div class="card-header ">
            <h1 class="card-title">{{ $meetings->title }}</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">
                                        Date</span>
                                    <span
                                        class="info-box-number text-center text-muted mb-0">{{ $meetings->date }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Date</span>
                                    <span
                                        class="info-box-number text-center text-muted mb-0">{{ $meetings->end_time }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">le lieu</span>
                                    <span
                                        class="info-box-number text-center text-muted mb-0">{{ $meetings->place }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h4 class="card-title w-100">
                                            Sujet de la réunion
                                        </h4>
                                    </div>
                                <div class="card-body">
                                    @foreach ($topik as $topics)
                                        {{ $topics->judul }}
                                    @endforeach
                                </div>
                            </div>
                       </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                    <div class="text-muted">
                        <p class="text-sm">Project Leader
                            <a href="/user/{{ $meetings->leader }}">
                                <b class="d-block">{{ $leaders->name }}</b>
                            </a>
                        </p>
                        <p class="text-sm">destinataire
                            <a href="/user/{{ $meetings->minuter }}">
                                <b class="d-block">{{ $notulen->name }}</b>
                            </a>
                        </p>
                        <p class="text-sm">
                            <a href="/reunions/membres/{{ $meetings->id }}">
                                <b class="d-block">Membre de la réunion</b>
                            </a>
                        </p>
                    </div>

                    @if (!$lampirans->isEmpty())
                    <h5 class="mt-5 text-muted">Files</h5>
                    <ul class="list-unstyled">
                        <?php $i = 1; ?>
                        @foreach ($lampirans as $data)
                            <li>
                                <a taget="_blank" rel="noopener noreferrer" href="{{ url('files/' . $data->Path) }}"
                                    class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Lampiran
                                    {{ $i++ }}</a>
                            </li>
                        @endforeach
                    </ul>
                    @endif
                    <div>

                    @if ($meetings->minuter==Auth::user()->id)
                        <a href="/meeting/notulensi/{{ $meetings->id }}"><button class="btn btn-sm btn-primary" @if($now->toDateTimeString()<=$meetings->date.' '.$meetings->end_time)
                            disabled
                        @endif>Catatan</button></a>
                        <a href="/absen/buatabsen/{{ $meetings->id }}"><button class="btn btn-sm btn-warning" @if($now->toDateTimeString()<=$meetings->date.' '.$meetings->end_time)
                            disabled
                        @endif>absence</button></a>
                    @endif
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>



    @if (!is_null($result) && Auth::user()->id==$meetings->minuter)
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Résultats de la réunion
            </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse"><i class="fas fa-minus"></i></button>
            </div>
        </div>

        <div class="card-body">
            {!! $result->isi !!}
        </div>
    </div>

    @if (!is_null($dokumentasi))
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Documents de réunion
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($dokumentasi as $item)
                <div class="col-sm-2">
                  <a href="{{ url('dokumentasi/' . $item->Path) }}" data-toggle="lightbox" data-title="Dokumentasi" data-gallery="gallery">
                    <img src="{{ url('dokumentasi/' . $item->Path) }}" class="img-fluid mb-2" alt=""/>
                  </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    @endif
@endsection
