@extends('layouts.app')
@section('page-title')
    Create | Todo
@endsection

@section('content')
        <div class="row my-6 justify-content-center">
            <div class="col-lg-6">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
               <div class="card">
                <div class="card-header">
                    <h2 class='card-title'>Create Gun name</h2>
                </div>
                <div class="card-body">
                <form action="/store-todo" method='POST' >
                    @csrf
                    <div class="my-3">
                        <label for="">Gun's name</label>
                        <input type="text" name='name' class='form-control'>
                    </div>
                    <div class="my-3">
                        <label for="">details</label>
                        <textarea name="details" id="" class='form-control' ></textarea>
                    </div>
                    <div class="d-grid">
                        <input type="submit" name='submit' class='btn btn-success'>
                    </div>
                </form>
                </div>
               </div>
            </div>
        </div>
@endsection