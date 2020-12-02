@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row"><h1>Your Entry List</h1></div>
        @if(!is_null($work_field))
        @forelse($work_field  as $item)
        <div class="card">
            <div class="shadow">
                <div class="card-header">
                    <h4>Title:{{ $item->title }}</h4>
                </div>
                <div class="card-body">
                    <p><small class="text-muted">Company: {{ $item->company }}</small></p>
                    <p><small class="text-muted">Description: {{ $item->description }}</small></p>
                    <p><small class="text-muted">From: <i>{{ $item->from }}</i></small></p>

                    <p><small class="text-muted">To: <i>{{ $item->to }}</i></small></p>
                    <div calss="d-flex">
                        <a href="{{ route('workfield.edit',$item->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('workfield.delete',$item->id) }}" class="btn btn-danger"> Delete</a>

                    </div>

                </div>

            </div>

        </div>

        <br>
        @empty
        <h1 style="color:red;">No Entry to Show</h1>

        <br>
        @endforelse
        @endif

    </div>

@endsection
