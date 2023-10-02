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
                            <tr>
                                <td>#</td>
                                <td>#</td>
                            </tr>
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
                    <h4>List of Product</h4>
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
                            <tr>
                                <td>#</td>
                                <td>#</td>
                            </tr>
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
@endsection