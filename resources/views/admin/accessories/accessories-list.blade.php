@extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title bg-primary" style="color: white; padding-left: 10px; height: 35px; border-radius: 8px;">Accessories List</h3>
            <div class="tile-body">
                <form class="form-horizontal" action="{{ route('add-accessories') }}" method="POST">
                    @csrf
                       <div class="form-group row">
                           <label class="control-label col-md-2">Accessories Name</label>
                           <div class="col-md-10">
                               <div class="row">
                                   <div class="col-md-8">
                                       <input class="form-control" type="text" name="accessories_name"  placeholder="Accessories Name">
                                   </div>
                                   <div class="col-md-2">
                                       <div class="form-group">
                                           <select class="form-control" name="accessories_status" >
                                               <option value="1">Active</option>
                                               <option value="0">Inactive</option>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="col-md-2">
                                       <div class="form-group">
                                           <select class="form-control" name="category_id">
                                               @foreach($categories as $category)
                                               <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                   @endforeach
                                           </select>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                    <div class="form-group row">
                        <label class="control-label col-md-2">Specification</label>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-8">
                                    <input class="form-control" name="specification_name" type="text" placeholder="Specification">
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <select class="form-control" name="quantity_id">
                                            @foreach($quantities as $quantity)
                                            <option value="{{ $quantity->id }}">{{ $quantity->quantity_name }}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <p class="bs-component">
                                        <button class="btn btn-primary" name="btn" type="submit">Submit</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>


                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <div class="title-body">
                                <table class="table table-hover table-bordered" id="sampleTable">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Accessories Name</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>Active</td>
                                            <td>2011/04/25</td>
                                            <td>
                                                <a href="">Edit</a>
                                                <a href="">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection

