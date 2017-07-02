@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ $event->path() }}">
                        <h4>{{ $event->title }}</h4>
                    </a>
                </div>
                <div class="panel-body">
                    <article>
                            <p>{{ $event->body }}</p>
                    </article>              
                </div>
                @include('partials.panel.footer', [
                    'creator_name' => $event->creator->name,
                    'update_at' => $event->updated_at->diffForHumans()
                    ])
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($event->batches as $batch)
            @include('partials.panel.batch')
        @endforeach       
    </div>
</div>
@endsection
