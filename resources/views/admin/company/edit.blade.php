@extends('admin.master')

@section('body')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3>Update Company Info</h3></label>
{{--                        <a href="{{ route('new-info') }}" class="btn btn-info pull-right">View Info</a>--}}
                        <h2 class="text-center">{{ Session::get('message') }}</h2>
                    </div>
                </div>
            </div>
            <div class="tile-body col-md-8 m-auto">
                <form class="form-horizontal" action="{{ route('update') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="control-label col-md-3">Company Name</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" value="{{ $company->company_name }}" name="company_name">
                            <input class="form-control" type="hidden" value="{{ $company->id }}" name="company_id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Email</label>
                        <div class="col-md-8">
                            <input class="form-control" type="email" value="{{ $company->company_email }}" name="company_email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Address</label>
                        <div class="col-md-8">
                            <textarea class="form-control" rows="4" name="company_address">{{ $company->company_address }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3"></label>
                        <div class="col-md-6">
                            <button class="btn btn-success" name="btn" type="submit">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

