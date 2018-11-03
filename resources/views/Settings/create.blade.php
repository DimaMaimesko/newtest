@extends('welcome')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">Create new setting</h6>
                <div class="mT-30">
                    {!! Form::open(['url' => route('store'),'method'=>'POST','autocomplete'=>'off']) !!}
                    <div class="form-group">
                        <label for="userCreateName">Key</label>
                        {!! Form::text('key',null,['class'=>'form-control','placeholder'=>'Key','id'=>'keySetting']) !!}
                    </div>
                    <div class="form-group">
                        <label for="userCreateName">Value</label>
                        {!! Form::text('value',null,['class'=>'form-control','placeholder'=>'Value','id'=>'keyValue']) !!}
                    </div>
                    <div class="form-group">
                        <label for="userCreateName">Locale</label>
                        {!! Form::text('loc',null,['class'=>'form-control','placeholder'=>'Locale','id'=>'keyLocale']) !!}
                    </div>

                    <button type="submit" class="btn btn-primary text-uppercase">Submit</button>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
