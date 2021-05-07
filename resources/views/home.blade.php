@extends('layouts.index')

@section('content')
    <h1>Page User All</h1>
    @include('layouts.flash')
    <a href="{{ route('user.create') }}" class="btn btn-success">Add user</a>


    <div class="row my-5">
        @forelse ($users as $user)
            <div class="card col-4">
                <div class="card-body">
                    <p>{{ $user->email }}</p>
                    <p>{{ $user->nickname }}</p>
                    {{-- @dump($user->profil) --}}
                    <hr>
                    <p>{{ $user->profil->name }}</p>
                    <p>{{ $user->profil->age }}</p>
                </div>
            </div>
        @empty
            <p>Pas de users dispo</p>
        @endforelse

        
    </div>
@endsection