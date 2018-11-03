@extends('welcome')
@section('content')
<div class="row">
    <div class="col-6 col-md-8 col-lg-10">
        <h4 class="c-grey-900">Users</h4>
    </div>
    <div class="col-6 col-md-4 col-lg-2">
        <p>
            <a href="{{ route('create') }}" class="btn btn-block btn-sm btn-success text-uppercase">
                <span class="t-pencil"></span>
                Create new user
            </a>
        </p>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Key</th>
            <th>Value</th>
            <th>Locale</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @forelse($settings as $setting)
            <tr>
                <td>{{ $setting->key }}</td>
                <td>{{ $setting->value }}</td>
                <td>{{ $setting->locale }}</td>

                <td>
                    <a href="{{ route('edit',['key'=> $setting->key,'loc'=>$setting->locale]) }}" class="btn btn-sm btn-primary text-uppercase">
                        <span class="t-pencil"></span>
                        Edit
                    </a>
                </td>><td>
                    <a href="{{ route('delete',['key'=> $setting->key,'loc'=>$setting->locale]) }}" class="btn btn-sm btn-danger text-uppercase">
                        <span class="t-pencil"></span>
                        Delete
                    </a>
                </td>>

                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="bg-warning">
                    <h3 class="text-center">
                        Nothing found
                    </h3>
                </td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection