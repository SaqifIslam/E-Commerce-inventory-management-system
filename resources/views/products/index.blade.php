@extends('layouts.master')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Product List</h5><br>
                            <a href="{{route('products.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add Product</a> <br><br>

                            <example-component></example-component>

                            <table class="table table-bordered datatable">
                                <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($products)
                                    @foreach($products as $key => $product)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{$product->name ?? ''}}</td>
                                            <td>
                                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-info">
                                                    <i class="fa fa-edit"></i>Edit</a>
                                                <a href="javascript:" class="btn btn-sm btn-danger sa-delete" data-form-id="product-delete-{{ $product->id }}">
                                                    <i class="fa fa-trash"></i>Delete</a>
                                                <form id="product-delete-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">

            </div>
            <!-- /.card-footer -->




        </div>
    </div>



@endsection
