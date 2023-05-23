@extends('layouts.app')
@section('page-title','Edit | Todo')

@section('content')
<div class="row my-6 justify-content-center">
            <div class="col-lg-6">
               <div class="card">
                <div class="card-header">
                    <h2 class='card-title'>Edit Gun name</h2>
                </div>
                <div class="card-body">
                <form action="/update-todo/{{ $gunsEdit->id }}" method='POST' >
                    @csrf
                    <div class="my-3">
                        <label for="">Gun's name</label>
                        <input type="text" name='name' value='{{ $gunsEdit->name }}'  class='form-control'>
                    </div>
                    <div class="my-3">
                        <label for="">details</label>
                        <textarea name="details" class='form-control' >{{ $gunsEdit->details }}</textarea>
                    </div>
                    <div class="d-grid">
                        <input type="submit" name='submit' value='Update' class='btn btn-success'>
                    </div>
                </form>
                </div>
               </div>
            </div>
        </div>
@endsection