@extends('admin.master')

@section('body')

    <div class="col-md-12">
        <div class="tile">

            <div class="tile-body">
              <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3 class=" align-middle">Work Station List :</h3></label>
                        <hr>

                    </div>
                    <div class="col-lg-12">
                    <form action="{{route('update-work-section')}}" method="post" name="dataForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <label class="control-label col-md-2 font-weight-bold">Work Station Name :</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="work_station" value="{{$work_sections->work_station}}" placeholder="Work Station Name">
                                  <input type="hidden" class="form-control" name="id" value="{{$work_sections->id}}" >
                            </div>

                            <div class="col-lg-5">
                            <div class="col-md-5">
                                <select class="form-control" name="status">
                                    <option  {{$work_sections->status == 1 ? 'Active' : ''}} value="1">Active</option>
                                    <option  {{$work_sections->status == 0 ? 'Inactive' : ''}} value="0">Inactive</option>
                                </select>

                            </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label class="control-label col-md-2 font-weight-bold">Description :</label>
                            <div class="col-md-5">
                                <textarea class="form-control" rows="5" name="description"  placeholder="Description">{{$work_sections->description}}</textarea>
                            </div>

                          <div class="col-md-5">

                                <div class="col-md-5">
                                    <input class="form-control" type="number" name="serial_num" value="{{$work_sections->serial_num}}"  required min="1" max="10" value="9">
                                </div>
                          </div>

                        </div>
                        <br>
                        <div class="row">
                            <label class="control-label col-md-2 font-weight-bold">Type :</label>
                            <div class="col-md-5">
                                <select class="form-control" " name="station_type_id">
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
                        <hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        

<script>

document.forms['dataForm'].elements['station_type_id'].value="{{$work_sections->station_type_id}}";

</script>
@endsection
