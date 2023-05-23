@extends('layouts.app')
@section('page-title')
     Show | Todo
@endsection

@section('content')
<div class="row my-6 justify-content-center">
            <div class="col-lg-6">
               <div class="card">
                <div class="card-header">
                    <h2 class='card-title'> {{ $guns->name }}  </h2>
                </div>
                <div class="card-body">
                    <p> {{ $guns->details }} </p>
                    <p> 
                        <a href="/todo/{{ $guns->id }}/edit" class='btn btn-primary btn-sm'>Edit</a> 
                        <a href="/todo/{{ $guns->id }}/delete" class='btn btn-danger btn-sm mx-2'>Delete</a>
                    </p>
                </div>
               </div>
            </div>
        </div>
@endsection