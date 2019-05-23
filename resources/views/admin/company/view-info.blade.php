@extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3>View Info</h3></label>
                        <h2 class="text-center text-success">{{ Session::get('message') }}</h2>
                    </div>
                </div>
            </div>
            <div class="tile-body">
                <div class="row">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Company Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($companys as $company)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $company->company_name }}</td>
                                <td>{{ $company->company_email }}</td>
                                <td>{{ $company->company_address }}</td>
                                <td>{{ $company->created_at }}</td>
                                <td>
                                    <a href="{{ route('edit', ['id'=>$company->id]) }}" class="btn btn-success">
                                        <span class="fa fa-pencil-square-o"></span>
                                    </a>
                                    <a href="{{ route('delete', ['id'=>$company->id]) }}" class="btn btn-danger" onclick="return confirm('Are You Sure Delete This !')">
                                        <span class="fa fa-trash-o"></span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection
