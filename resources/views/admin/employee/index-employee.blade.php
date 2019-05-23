
@extends('admin.master')

@section('body')


    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="col-md-12">
                        <h4 >All Employee List :<a href="{{route('new-employee')}}"  class="btn btn-info pull-right" >Add New Employee</a></h4>

                    </div>
                    <hr>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>

                            <th>#ID</th>
                            <th>Employee Name</th>
                            <th>Designation</th>
                            <th>Section</th>
                            <th>Mobile</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($employees as $employee)
                            <tr>

                                <td>{{$employee->employee_id}}</td>
                                <td>{{$employee->employee_name}}</td>
                                <td>{{$employee->designation}}</td>
                                <td>{{$employee->section_name}}</td>
                                <td>{{$employee->mobile_no}}</td>
                                <td>
                                    <img src="{{asset('/uploads/'.$employee->Photo)}}" height="50px" width="40px"style="border-radius: 50%;" alt="Avatar">

                                </td>
                                <td>
                                    <a href="{{route('edit-employee',['id'=>$employee->id])}}" class="btn btn-success">
                                        <span class="fa fa-pencil-square-o"></span>
                                    </a>
                                    <a href="{{route('delete-employee',['id'=>$employee->id])}} " class="btn btn-danger" onclick="return confirm('Are you sure delete this !')">
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


    <!-- Data table plugin-->
    <script src="{{ asset('/') }}admin/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}admin/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}admin/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>

    <script type="text/javascript">
        if(document.location.hostname == 'pratikborsadiya.in') {
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-72504830-1', 'auto');
            ga('send', 'pageview');
        }
    </script>


    @endsection
