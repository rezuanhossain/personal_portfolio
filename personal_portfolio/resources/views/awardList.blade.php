@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row"><h1>Your Entry List</h1></div>
        @if(!is_null($awards))
        @forelse($awards  as $item)
        <div class="card">
            <div class="shadow">
                <div class="card-header">
                    <h4>Award:{{ $item->award }}</h4>
                </div>
                <div class="card-body">
                    <p><small class="text-muted">Given-By: {{ $item->given_by }}</small></p>
                    <p><small class="text-muted">Description: {{ $item->description }}</small></p>
                    <p><small class="text-muted">Received at: <i>{{ $item->date }}</i></small></p>
                    <div calss="d-flex">
                        <a href="{{ route('award.edit',$item->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('award.delete',$item->id) }}" class="btn btn-danger"> Delete</a>

                    </div>

                </div>

            </div>

        </div>

        <br>
        @empty
            <h1 style="color:red;">No Entry to Show..!</h1>


        <br>
        @endforelse
        @endif

    </div>

@endsection
