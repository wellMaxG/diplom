@extends('layouts.base')

@section('page.title', $service->title);


@section('content')

<a href="{{route('service')}}">
    
    Назад

</a>

<h1 class="mb-5">

   {{ $service->title }}

</h1>

        <p>
            {!! $service->content !!}
        </p>

@endsection
