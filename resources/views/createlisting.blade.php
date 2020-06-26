@extends('layouts.app')

@section('content')
@include('flashMessage')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create Listing <a class = "float-right btn btn-primary btn-sm" href="/larabiz/public/dashboard">Go Back</a></div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {!! Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) !!}
                {{Form::bsText('name', '', ['placeholder' => 'Company Name'])}}
                {{Form::bsText('website', '', ['placeholder' => 'Company Website'])}}
                {{Form::bsText('email', '', ['placeholder' => 'Contact Email'])}}
                {{Form::bsText('phone', '', ['placeholder' => 'Contact Phone'])}}
                {{Form::bsText('adress', '', ['placeholder' => 'Business Address'])}}
                {{Form::bsTextArea('bio', '', ['placeholder' => 'About this Business'])}} 
                {{Form::submit('Ajouter', ['class' => 'btn btn-success'])}}   
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection