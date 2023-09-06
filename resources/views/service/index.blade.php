@extends('layouts.base')

@section('page.title','Страница услуг')


@section('content')

<h1 class="mb-5">

    Список услуг

</h1>

@if (@empty($services))

    Нет услуг

    @else 
    @foreach ($services as $service)
    <div class="mb-4">
        <h5>
            <a href="{{ route('service.show', $service->id) }}">

            {{$service->title}}

            </a>
        </h5>
        <p>
            {!! $service->content !!}
        </p>
    </div>
        
        @endforeach
    @endif
@endsection
