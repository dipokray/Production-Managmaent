@extends('admin.master')

@section('body')

    <div class="col-md-12">
        <div class="tile">

            <div class="tile-body">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3 >Update Work Type List :</h3></label>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('update-work-type')}}" method="post" name="typeForm">
                                    @csrf
                                    <div class="row">
                                        <label class="control-label col-md-2 font-weight-bold">Work Type Name :</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="work_type" value="{{$work_types->work_type}}" placeholder="Work Type Name">
                                            <input type="hidden" class="form-control" name="id" value="{{$work_types->id}}" >
                                        </div>

                                        <div class="col-lg-5">
                                            <div class="col-md-5">
                                                <select class="form-control" name="status" id="exampleSelect1 ">
                                                    <option {{$work_types->status == 1 ?'Active' : ''}} value="1">Active</option>
                                                    <option  {{$work_types->status == 0 ?'Inactive' : ''}} value="0">Inactive</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label class="control-label col-md-2 font-weight-bold">Price :</label>
                                        <div class="col-md-5">
                                            <input class="form-control" type="number" name="price"  value="{{$work_types->price}}" step=".01" placeholder="Enter price">
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

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.forms['typeForm'].elements['work_section_id'].value="{{$work_types->work_section_id}}";
    </script>


    @endsection
