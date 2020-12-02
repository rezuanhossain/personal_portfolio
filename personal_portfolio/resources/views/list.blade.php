@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row"><h1>Your Entry List</h1></div>
        @if(!is_null($edu_field))
        @forelse($edu_field  as $item)
        <div class="card">
            <div class="shadow">
                <div class="card-header">
                    <h4>Title:{{ $item->title }}</h4>
                </div>
                <div class="card-body">
                    <p><small class="text-muted">Institution: {{ $item->institution }}</small></p>
                    <p><small class="text-muted">Course-length: {{ $item->years }}</small></p>
                    <p><small class="text-muted">Draduation-date: <i>{{ $item->graduating_in }}</i></small></p>
                    <p><small class="text-muted">Status: {{ $item->status }}</small></p>
                    <div calss="d-flex">
                        <a href="{{ route('education.edit',$item->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('education.delete',$item->id) }}" class="btn btn-danger"> Delete</a>

                    </div>

                </div>

            </div>

        </div>

        <br>
        @empty
            <h1 style="color:red;">No Entry to Show...!</h1>
            <br>
        @endforelse
        @endif

    </div>

@endsection
