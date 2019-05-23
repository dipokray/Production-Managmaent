@extends('admin.master')

@section('body')
<div class="modal fade" id="addCategory">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Add Category</h3>
                <button type="button" class="close" data-dismiss="modal">
                    &Cross;
                </button>
            </div>
            <div class="modal-body">
                <h2 class="text-center text-success">{{ Session::get('message') }}</h2>
                <form class="form-horizontal" action="{{ route('category-create') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label class="control-label col-md-3">Category Name</label>
                        <div class="col-md-9">
                            <input class="form-control" name="category_name" type="text">
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
                   <label><h3>Category List</h3></label>
                   <h2 class="text-center text-success">{{ Session::get('message') }}</h2>
                   <a href="#" data-toggle="modal" class="btn btn-info pull-right" data-target="#addCategory">Add Category</a>
               </div>
            </div>
        </div>
        <div class="tile-body">
            <div class="row">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Category Name</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td>{{ $category->created_at }}</td>
                            <td>
                                <a href="{{ route('edit-category', ['id'=>$category->id]) }}" class="btn btn-success">
                                    <span class="fa fa-pencil-square-o"></span>
                                </a>
                                <a href="{{ route('delete-category', ['id'=>$category->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure delete this !')">
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