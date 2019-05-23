
@extends('admin.master')

@section('body')
    <div class="col-md-8 m-auto">
        <div class="tile">
            <div class="tile-title">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3>Update Section</h3></label>
                        <h2 class="text-center">{{ Session::get('message') }}</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body col-md-10">
                <h2 class="text-center text-success">{{ Session::get('message') }}</h2>
                <form class="form-horizontal" action="{{ route('update-section') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label class="control-label col-md-3">Section Name</label>
                        <div class="col-md-9">
                            <input class="form-control" value="{{ $section->section_name }}" name="section_name" type="text">
                            <input class="form-control" value="{{ $section->id }}" name="section_id" type="hidden">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3"></label>
                        <div class="col-md-6">
                            <button class="btn btn-success" name="btn" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

