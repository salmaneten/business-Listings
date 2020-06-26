@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
        <div class="card-header">{{$listing->name}} <a href="larabiz/public/listings" class="btn btn-primary btn-sm float-right">Go Back</a></div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

               <ul class="list-group">
               <li class="list-group-item">Address : {{$listing->adress}}</li>
               <li class="list-group-item">Website : <a href="{{$listing->website}}" target="_blank">{{$listing->website}}</a></li>
               <li class="list-group-item"> Email : {{$listing->email}}</li>
               <li class="list-group-item">Phone : {{$listing->phone}}</li>
               </ul>
               <hr>
               <div class="card card-body">
                   {{$listing->bio}}
               </div>
            </div>
        </div>
    </div>
</div>

@endsection