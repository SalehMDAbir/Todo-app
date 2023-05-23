@extends('layouts.app')
@section('page-title')
   Home | Todo
@endsection

@section('content')
        <div class="row my-6 justify-content-center">
            <div class="col-lg-6">
               <div class="card">
                <div class="card-header">
                    <h2 class='card-title'>All Guns..</h2>
                </div>
                <div class="card-body">
                    <ul class='list-group'>
                        @foreach($guns as $data)
                        <li class='list-group-item'> {{ $data->details }}
                            <a href="/todo/{{ $data->id }}" class='btn btn-primary btn-sm float-end'>View</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
               </div>
            </div>
        </div>
@endsection


    
