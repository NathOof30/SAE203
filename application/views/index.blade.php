@extends('templates.main')
@section('content')



<section>
@foreach($plats as $plat)
<img src="{{URL_IMG.$plat['image']}}" alt="{{$plat['description']}} title="{{$plat['description']}}">
@endforeach
</section>


@endsection