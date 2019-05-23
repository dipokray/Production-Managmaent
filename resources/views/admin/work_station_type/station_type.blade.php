@extends('admin.master')

@section('body')

    <div class="modal fade" id="addStationType">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Add Work Station Type :</h3>
                    <button type="button" class="close" data-dismiss="modal">
                        &Cross;
                    </button>
                </div>
                <div class="modal-body">

                    <form class="form-horizontal" action="{{route('add-work-station-type')}}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label class="control-label col-md-3"> Station Type Name :</label>
                            <div class="col-md-9">
                                <input class="form-control" name="station_type_name" type="text">
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
    </div>


    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title">
                <div class="row">
                    <div class="col-md-12">

                        <label><h3>Work Station Type  List</h3></label>
                        <a href="#" data-toggle="modal" class="btn btn-info pull-right" data-target="#addStationType">Add Work Station Type </a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="tile-body">
                <div class="row">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Station Name</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @php($i=1)
                        @foreach($work_station_types as $work_station_type )

                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$work_station_type->station_type_name}}</td>
                                <td>{{$work_station_type->created_at}}</td>
                                <td>
                                    <a href="{{route('edit-work-station-type',['id'=>$work_station_type->id])}}" class="btn btn-success" >

                                        <span class="fa fa-pencil-square-o"></span>

                                    </a>
                                    <a href="{{route('delete-work-station-type',['id'=>$work_station_type->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure delete this !')">
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