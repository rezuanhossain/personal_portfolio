@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row"><h1>Edit The Entry</h1></div>
        <div class="card card-primary ">
            <form action="{{ route('award.update') }}"  method="POST">
                @csrf
                <div class="card-body">
                    <h5 class="card-title form-group">Update Award Details</h5><br>
                    <input type="hidden" name="id" value={{ $entry->id }}>
                  <label for="award">Award </label>
                  <input class="form-control form-group" type="text" id="work_title" name="award" placeholder="Put Award Title" value="{{ $entry->award }}" >
                  <label for="given_by">Given By </label>
                  <input class="form-control form-group" type="text" id="given_by" name="given_by" placeholder="Put The Institute / Organization" value="{{ $entry->given_by }}" >
                  <label for="date">Given At </label>
                  <input class="form-control form-group" type="date" id="date" name="date" placeholder="Put Received Date"  value="{{ $entry->date }}">
                  <label for="description">Award Description</label>
                  <textarea class="form-control" id="description" placeholder="Put Work Description ..." name="description" rows="3">{{ $entry->description }}</textarea><br>
                    <button value="submit" type="submit" class="form-group form-control btn btn-success">Update</button>
                </div>
            </form>

          </div>

    </div>




@endsection
