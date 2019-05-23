@extends('admin.master')

@section('body')
    <div class="col-md-12">
        <div class="tile">

            <div class="tile-body">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3 class=" align-middle">Work Type List :</h3></label>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('add-work-type')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <label class="control-label col-md-2 font-weight-bold">Work Type Name :</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="work_type" placeholder="Work Type Name">
                                        </div>

                                        <div class="col-lg-5">
                                            <div class="col-md-5">
                                                <select class="form-control" name="status" id="exampleSelect1 ">
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label class="control-label col-md-2 font-weight-bold">Price :</label>
                                        <div class="col-md-5">
                                            <input class="form-control" type="number" name="price" step=".01" placeholder="Enter price">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label class="control-label col-md-2 font-weight-bold">Work Station :</label>
                                        <div class="col-md-5">
                                            <select class="form-control"  name="work_section_id">
                                                <option><--Select Option--></option>
                                                @foreach($work_sections as $work_section)
                                                    <option value="{{$work_section->id}}">{{$work_section->work_station}}</option>
                                                    @endforeach
                                            </select>

                                            </select>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="col-lg-6">
                                            <button class="btn btn-info" name="btn" value="submit" ><i class="fa fa-save"></i> Save</button>

                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-md-12">

                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Work Type Name</th>
                                <th>Work Station</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @php($i=1)
                            @foreach($work_types as $work_type)

                                <tr>

                                    <td>{{$i++}}</td>
                                    <td>{{$work_type->work_type}}</td>
                                    <td>{{$work_type->work_station}}</td>
                                    <td>{{$work_type->price}}</td>
                                    <td>{{$work_type->status == 1 ? 'Active' : 'Inactive'}}</td>
                                    <td>{{$work_type->created_at}}</td>


                                    <td>
                                        <a href="{{route('edit-work-type',['id'=>$work_type->id])}}" class="btn btn-success">
                                            <span class="fa fa-pencil-square-o"></span>
                                        </a>

                                        <a href="{{route('delete-work-type',['id'=>$work_type->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure delete this !')">
                                            <span class="fa fa-trash-o"></span>
                                        </a>
                                    </td>


                                </tr>
                                @endforeach

                            </tbody>

                        </table>
                        <div class="pull-right">
                        {{$work_types -> links()}}
                        </div>
                    </div>

                    </div>

                </div>
            </div>


        </div>



@endsection

