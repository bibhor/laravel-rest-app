@extends('app')
 
@section('content')
    <h2>Users</h2>
 
    @if ( !$users->count() )
        You have no users
    @else
        <ul>
            @foreach( $users as $user )
                <li><a href="{{ route('users.show', $user->slug) }}">{{ $user->first_name }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection
