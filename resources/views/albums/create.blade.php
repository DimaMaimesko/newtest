@extends('layouts.app')

@section('content')

    <h3>Create Album</h3>
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6 col-lg-4">

                <div class="mT-30">
                    {!! Form::open(['url' => route('albums.store'),'method'=>'POST','autocomplete'=>'off', 'enctype'=>'multipart/form-data']) !!}

                    <div class="form-group">
                        <label for="">Name</label>
                        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Album Name']) !!}
                    </div>

                    <div class="form-group">
                        <label for="u">Description</label>
                        {!! Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Album Description']) !!}
                    </div>

                    <div class="form-group">
                        <label for="userCreateName"></label>
                        {!! Form::file('image',null,['class'=>'form-control','placeholder'=>'Locale']) !!}
                    </div>

                    <button type="submit" class="btn btn-primary text-uppercase">Submit</button>

                    {!! Form::close() !!}

        </div>
    </div>



@endsection