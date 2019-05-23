@extends('admin.master')





@section('body')


    <div class="col-md-12">
        <div class="tile">

            <div class="tile-body">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3 >Worker Assign to Section:</h3></label>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <form action="{{route('add-worker-assign')}}" method="post" enctype="multipart/form-data">

                                    @csrf
                                    <div class="row">
                                        <label class="control-label col-md-3 font-weight-bold">Work Section Name :</label>
                                        <div class="col-md-7">
                                            <select class="form-control"  name="work_section_id">
                                                <option><--Select Section Name--></option>
                                                @foreach($work_sections as $work_section)
                                                    <option value="{{$work_section->id}}">{{$work_section->work_station}}</option>
                                                    @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-12">

                                                <div class="row">
                                                    <table class="table table-hover table-bordered" id="sampleTable">
                                                        <thead>
                                                        <tr>
                                                            <th>Employee Name </th>
                                                            <th>Work Type</th>
                                                            <th>Price</th>
{{--                                                            <th><a href="#" class="btn btn-info addRow">+Add Row</a></th>--}}
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody class="firstTable">


                                                            <tr>
                                                                <td><input class="form-control " type="text"  id="search" autocomplete="off" value="" name="employee_name_id[]" >
                                                                <td>
                                                                    <select class="form-control"  name="work_type_id[]">
                                                                        <option><--Select Worker Type--></option>
                                                                        @foreach($work_types as $work_type)
                                                                        <option value="{{$work_type->id}}">{{$work_type->work_type}}</option>
                                                                            @endforeach
                                                                    </select>
                                                                </td>
                                                                <td><input class="form-control " type="number" name="price[]" step="0.01" ></td>
                                                                <td>
                                                                    <button type="button" class="btn btn-danger" >
                                                                        <span class="fa fa-trash-o"></span>
                                                                    </button>
                                                                </td>
                                                            </tr>


                                                        </tbody>

                                                    </table>
                                                    <div class="col-lg-12 ">

                                                    <button class="btn btn-info"><i class="fa fa-save"></i> Save</button>
                                                    <button type="button"  class="btn btn-success btn-xs pull-right addRow"><i class="fa fa-plus"></i>
                                                       Add Row</button>

                                                </div>
                                            </div>
                                    </div>
                                </form>
                          </div>
<hr>
                            <div class="col-md-12">
                                <div class="tile-body">
                                    <div class="row">
                                        <table class="table table-hover table-bordered" >
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Employee Name</th>
                                                <th>Work Type</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($i=1)
                                            @foreach($worker_assigns as $worker_assign)

                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$worker_assign->employee_name_id}}</td>
                                                <td>{{$worker_assign->work_type}}</td>
                                                <td>{{$worker_assign->price}}</td>
                                                <td></td>
                                                <td>{{$worker_assign->created_at}}</td>
                                                <td>
                                                    <a href="" class="btn btn-success" >

                                                        <span class="fa fa-pencil-square-o"></span>

                                                    </a>
                                                    <a href="" class="btn btn-danger" onclick="return confirm('Are you sure delete this !')">
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

                    </div>

                </div>
            </div>
        </div>
    </div>






    @endsection

@section('script')

    <script type="text/javascript">
        $(document).on('click','.addRow',function () {
            addRow();

        });
        function addRow() {
            var tr = '<tr>'+
                '<td><input class="form-control " type="text" id="search" autocomplete="off" name="employee_name_id[]" ></td>' +
                '<td> <select class="form-control"  name="work_section_id[]"> '+
                '<option><--Select Option--></option>'+
                '@foreach($work_types as $work_type)'+
                '<option value="{{$work_type->id}}">{{$work_type->work_type}}</option>'+
                ' @endforeach '+
                '</select> </td>'+
                '<td><input class="form-control " type="number" name="price[]" step="0.01" ></td>'+
                '<td> <button type="button" class="btn btn-danger remove" > <span class="fa fa-trash-o"></span> </button> </td>'+
                '</tr>';

            $('.firstTable').append(tr);
        };
        $(document).on('click','.remove',function () {

            $(this).parents('tr').remove();


        });


    </script>

    <script type="text/javascript">
        // $(function()
        // {

        $(document).on('keydown', '#search', function () {
            $(this).autocomplete({
                source: "{{url('employee/worker/assign')}}",
                // minLength: 3,
                select: function(event, ui) {
                    $('#search').val(ui.item.value);
                }
            });
        })

        // });
    </script>

@endsection




