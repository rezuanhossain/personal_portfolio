@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row"><h1>Edit The Entry</h1></div>
        <div class="card card-primary ">
            <form action="{{ route('workfiled.update') }}"  method="POST">
                @csrf
                <div class="card-body">
                    <h5 class="card-title form-group">Add Or Update Work Details</h5><br>
                    <input type="hidden" name="id" value={{ $entry->id }}>
                  <label for="title">Job Title </label>
                  <input class="form-control form-group" type="text" id="work_title" name="title" placeholder="Put Job title" value="{{ $entry->title }}" >
                  <label for="company">Company </label>
                  <input class="form-control form-group" type="text" id="company" name="company" placeholder="Put The Company" value="{{ $entry->company }}" >
                  <label for="from">Started Date </label>
                  <input class="form-control form-group" type="date" id="from" name="from" placeholder="Put Graduation Date"  value="{{ $entry->from }}" >
                  <label for="Status">Status </label>
                    <div class="d-flex">
                        <div class="form-check">
                            <input class="form-check-input form-group" name="end" type="checkbox" value="current" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                             Current
                            </label>
                          </div>
                          <h3 style="margin-left:30px;margin-right:30px;">OR</h3>
                          <div> <input class="form-group form-control" type="date" name="to"></div>
                    </div>

                  <label for="des">Work Description</label>
                  <textarea class="form-control" id="des" placeholder="Put Work Description ..." name="description" rows="3">{{ $entry->description }}</textarea><br>
                    <button value="submit" type="submit" class="form-group form-control btn btn-success">Update</button>
                </div>

            </form>

          </div>

    </div>




@endsection
