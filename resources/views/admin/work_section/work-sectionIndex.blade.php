@extends('admin.master')

@section('body')
    <div class="col-md-12">
        <div class="tile">

            <div class="tile-body">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3 class=" align-middle">Work Station List :</h3></label>


                    </div>

                    <div class="col-lg-12">
                      <div class="card">
                        <div class="card-body">
                    <form action="{{route('add-work-section')}}" method="post">
                        @csrf
                        <div class="row">
                            <label class="control-label col-md-2 font-weight-bold">Work Station Name :</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="work_station" placeholder="Work Station Name">
                            </div>

                            <div class="col-md-5">

                                  <div class="col-md-5">
                                      <input class="form-control" type="number" name="serial_num"  required min="1" max="10" value="9">
                                  </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label class="control-label col-md-2 font-weight-bold">Description :</label>
                            <div class="col-md-5">
                                <textarea class="form-control" rows="5" name="description" placeholder="Description"></textarea>
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
                            <label class="control-label col-md-2 font-weight-bold">Type :</label>
                            <div class="col-md-5">
                                <select class="form-control" id="exampleSelect1 " name="station_type_id">
                                    <option>--Select Option--</option>
                                    @foreach($work_station_types as $work_station_type)
                                        <option value="{{$work_station_type->id}}">{{$work_station_type->station_type_name}}</option>
                                    @endforeach

                                </select>

                                </select>
                            </div>

                            <div class="col-md-5">
                                <button class="btn btn-info" name="btn" value="submit" ><i class="fa fa-save"></i> Save</button>

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
                            <th>Work Station Name</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>

                        @php($i=1)
                        @foreach($work_sections as $work_section)
                        <tr>

                            <td>{{$i++}}</td>
                            <td>{{$work_section->work_station}}</td>
                            <td>{{$work_section->station_type_name}}</td>
                            <td>{{$work_section->status == 1 ? 'Active':'Inactive' }}

                            </td>
                            <td>{{$work_section->created_at}}</td>

                            <td>
                                <a href="{{route('edit-add-work-section',['id'=>$work_section->id])}}" class="btn btn-success">
                                    <span class="fa fa-pencil-square-o"></span>
                                </a>
                                <a href="{{route('delete-work-section',['id'=>$work_section->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure delete this !')">
                                    <span class="fa fa-trash-o"></span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>

                    </table>
                        <div class="pull-right">
                        {{$work_sections->links()}}
                        </div>

                </div>

                </div>
            </div>


            </div>



    @endsection
