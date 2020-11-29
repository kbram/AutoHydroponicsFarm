@extends('layouts.app')

@section('content')
    <h1><?php echo $title; ?></h1>
    <p>This is services page</p>
    @if (count($service)>0)
        <ul class ="list-group">
            @foreach ($service as $ser)
                <li class ="list-group-item"><?php echo $ser; ?></li>
            @endforeach
        </ul>
    @endif
@endsection
  