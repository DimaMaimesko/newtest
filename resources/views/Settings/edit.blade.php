@extends('welcome')
@section('content')
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">Create new setting</h6>
                <div class="mT-30">
                    {!! Form::open(['route' => ['update',$setting['key'],$setting['loc']],'method'=>'post','autocomplete'=>'off']) !!}
                    <div class="form-group">
                        <label for="userCreateName">Key</label>
                        {!! Form::text('key',$setting['key'],['class'=>'form-control','placeholder'=>'Key','id'=>'keySetting']) !!}
                    </div>
                    <div class="form-group">
                        <label for="userCreateName">Value</label>
                        {!! Form::text('value',$setting['value'],['class'=>'form-control','placeholder'=>'Value','id'=>'keyValue']) !!}
                    </div>
                    <div class="form-group">
                        <label for="userCreateName">Locale</label>
                        {!! Form::text('loc',$setting['loc'],['class'=>'form-control','placeholder'=>'Locale','id'=>'keyLocale']) !!}
                    </div>

                    <button type="submit" class="btn btn-primary text-uppercase">Submit</button>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection