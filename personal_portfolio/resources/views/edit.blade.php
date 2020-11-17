@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row"><h1>Edit The Entry</h1></div>
        <div class="card card-primary ">
            <form action="{{ route('education.update') }}" method="POST">
                @csrf
             <div class="card-body">
                <input type="hidden" name="id" value="{{ $entry->id }}">
              <label for="title">Degree </label>
              <input class="form-control form-group" type="text" id="title" name="title" value="{{ $entry->title }}" placeholder="Put Degree title" >
              <label for="institution">Institution </label>
              <input class="form-control form-group" type="text" id="institution" name="institution" value={{ $entry->institution }} placeholder="Put The institution" >
              <label for="years">Years </label>
              <input class="form-control form-group" type="number" id="years" value={{ $entry->years }} name="years" placeholder="Put Course Years " >
              <label for="graduating_in">Graduation Date </label>
              <input class="form-control form-group" type="date" id="graduating_in" value={{ $entry->graduating_in }} name="graduating_in" placeholder="Put Graduation Date" >
              <label for="Status">Status </label>
             <select class="form-control form-group" name="status" id="status">
              <option value="">--Select--</option>
                 <option value="graduated">Graduated</option>

                 <option value="in-progress">In-Progress</option>
             </select>
             <button type="submit" value="submit" class="btn btn-success form-group form-control">Update</button>

            </div>

            </form>

          </div>

    </div>



@endsection
