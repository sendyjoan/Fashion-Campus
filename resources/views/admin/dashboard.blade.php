@extends('layouts.admin')

@section('title', 'Dashboard')

@section('sidebar')
    @parent
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-3 col-lg-3">
                <div class="card">
                    <div class="card-header">
                    <h4>List of Season</h4>
                    </div>
                    <div class="card-body">
                        <div class="buttons text-right">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#addData"><i class="fas fa-solid fa-plus"></i> Add Data</button>
                        </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                        <tr>
                            <th>#</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($seasons as $s)
                        <tr>
                            <td>#</td>
                            <td>{{ $s->name }}</td>
                        </tr>
                        @endforeach
                        </table>
                    </div>
                    </div>
                    <div class="card-footer text-right">
                    </div>
                </div>
            </div>
            <div class="col-3 col-lg-3">
                <div class="card">
                    <div class="card-header">
                    <h4>List of Sub Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="buttons text-right">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#import"><i class="fas fa-solid fa-plus"></i> Add Data</button>
                        </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                        <tr>
                            <th>#</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($subcategories as $sct)
                        <tr>
                            <td>#</td>
                            <td>{{ $sct->name }}</td>
                        </tr>
                        @endforeach
                        </table>
                    </div>
                    </div>
                    <div class="card-footer text-right">
                    </div>
                </div>
            </div>
            <div class="col-3 col-lg-3">
                <div class="card">
                    <div class="card-header">
                    <h4>List of Article Type</h4>
                    </div>
                    <div class="card-body">
                        <div class="buttons text-right">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#import"><i class="fas fa-solid fa-plus"></i> Add Data</button>
                        </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                        <tr>
                            <th>#</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($subcategories as $sct)
                        <tr>
                            <td>#</td>
                            <td>{{ $sct->name }}</td>
                        </tr>
                        @endforeach
                        </table>
                    </div>
                    </div>
                    <div class="card-footer text-right">
                    </div>
                </div>
            </div>
            <div class="col-3 col-lg-3">
                <div class="card">
                    <div class="card-header">
                    <h4>List of Usage</h4>
                    </div>
                    <div class="card-body">
                        <div class="buttons text-right">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#import"><i class="fas fa-solid fa-plus"></i> Add Data</button>
                        </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                        <tr>
                            <th>#</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($subcategories as $sct)
                        <tr>
                            <td>#</td>
                            <td>{{ $sct->name }}</td>
                        </tr>
                        @endforeach
                        </table>
                    </div>
                    </div>
                    <div class="card-footer text-right">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4 col-lg-4">
                <div class="card">
                    <div class="card-header">
                    <h4>List of Gender</h4>
                    </div>
                    <div class="card-body">
                        <div class="buttons text-right">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#addData"><i class="fas fa-solid fa-plus"></i> Add Data</button>
                        </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                        <tr>
                            <th>#</th>
                            <th>Gender Name</th>
                        </tr>
                        @foreach ($genders as $item)
                        <tr>
                            <td>#</td>
                            <td>{{ $item->name }}</td>
                        </tr>
                        @endforeach
                        </table>
                    </div>
                    </div>
                    <div class="card-footer text-right">
                    </div>
                </div>
            </div>
            <div class="col-4 col-lg-4">
                <div class="card">
                    <div class="card-header">
                    <h4>List of Master Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="buttons text-right">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#addData"><i class="fas fa-solid fa-plus"></i> Add Data</button>
                        </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                        <tr>
                            <th>#</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($categories as $c)
                        <tr>
                            <td>#</td>
                            <td>{{ $c->name }}</td>
                        </tr>
                        @endforeach
                        </table>
                    </div>
                    </div>
                    <div class="card-footer text-right">
                    </div>
                </div>
            </div>
            
            <div class="col-4 col-lg-4">
                <div class="card">
                    <div class="card-header">
                    <h4>List of Colors</h4>
                    </div>
                    <div class="card-body">
                        <div class="buttons text-right">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#addData"><i class="fas fa-solid fa-plus"></i> Add Data</button>
                        </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                        <tr>
                            <th>#</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($colors as $co)
                        <tr>
                            <td>#</td>
                            <td>{{ $co->name }}</td>
                        </tr>
                        @endforeach
                        </table>
                    </div>
                    </div>
                    <div class="card-footer text-right">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" tabindex="-1" role="dialog" id="import">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Add Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('subcategories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="file" name="file" class="form-control" placeholder="">
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
            </div>
        </div>
        </div>
</div>
@endsection