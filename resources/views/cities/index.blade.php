@extends('app')
 
@section('content')
    <h2>Cities</h2>
 
    @if ( !$cities->count() )
        You have no cities
    @else
        <ul>
            @foreach( $cities as $city )
                <li><a href="#">{{ $city->name }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection
