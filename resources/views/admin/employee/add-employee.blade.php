@extends('admin.master')

@section('body')
    <div class="col-md-12" >
    <div class="card">
        <div class="card-body ">
            <div class="col-md-12">
                <label><h3 bgcolor="red">Add New Employee :</h3></label>
                <a href=" {{route('index-employee')}}"  class="btn btn-info pull-right" > All Employee </a>
            </div>



            <div class="tile">
                <div class="tile-body">
            <div class="col-md-10" >
                <div class="justify-align-center">



    <form class="form-horizontal" action="{{route('store-employee')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label class="control-label col-md-3 font-weight-bold">Employee Name * :</label>
            <div class="col-md-9">
                <input class="form-control" name="employee_name" type="text" placeholder="Employee Name">
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3 font-weight-bold">Employee ID * : </label>
            <div class="col-md-9">
                <input class="form-control" name="employee_id" type="text" placeholder="Employee ID">
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3 font-weight-bold">Designation * :</label>
            <div class="col-md-9">
                <input class="form-control" name="designation" type="text" placeholder="Designation">
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3 font-weight-bold">Section * :</label>
            <div class="col-md-9">

                <select class="custom-select" name="section_id">

                    <option selected>Select Section Name </option>
                    @foreach($sections as $section)
                    <option value="{{$section->id}}">{{$section->section_name}}</option>
                    @endforeach
                </select>

            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3 font-weight-bold">Email :</label>
            <div class="col-md-9">
                <input class="form-control" name="email" type="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="control-label col-md-3 font-weight-bold">Address :</label>
            <div class="col-md-9">
                <textarea name="address" id="address" class="form-control" placeholder="Address"></textarea>

            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3 font-weight-bold">Mobile No: </label>
            <div class="col-md-9">
                <input class="form-control" name="mobile_no" type="number" placeholder="Mobile No">
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3 font-weight-bold" > Basic Pay :</label>
            <div class="col-md-9">
                <input class="form-control" name="basic_pay" type="text" placeholder="Basic Pay">
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-3 font-weight-bold">House Rent :</label>
            <div class="col-md-9">
                <input class="form-control" name="house_rent" placeholder="House rent" type="text">
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-md-3 col-form-label font-weight-bold"> Medical Allowance :</label>
            <div class="col-md-9">
                <input class="form-control" name="medical_allowance" type="text" placeholder="Medical Allowance">
            </div>
        </div>
        <div class="form-group row  ">
            <label class="control-label col-md-3 font-weight-bold">Photo : </label>

            <div class="box__input col-md-9">
                <input class="box__file" type="file" name="Photo" id="file" accept="image/*"  />



            </div>
        </div>


            <div class="form-group row">
            <label  class="col-md-3 col-form-label font-weight-bold"> Status :</label>
            <div class="col-md-8">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="status" value="1">
                    <label class="form-check-label" for="status">Active</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="status" value="0">
                    <label class="form-check-label" for="status">Inactive</label>
                </div>
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
        </div>
    </div>
    </div>

    @endsection