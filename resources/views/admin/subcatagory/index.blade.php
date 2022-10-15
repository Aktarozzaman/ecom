@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">SubCatagory Tables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">SubCatagory with minimal features & hover style</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            
                                            <td>Id</td>
                                            <td>Catagory</td>
                                            <td>SubCatagory name</td>
                                            <td>SubCatagory Slug</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
        
                                    <tbody>
                                        @foreach ($data as $key => $row)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $row->catagory->catagory_name }}</td>
                                                <td>{{ $row->subcatagory_name }}</td>
                                                <td>{{ $row->subcatagory_slug }}</td>
        
                                                <td>
                                            
                                                    <a href="{{ Route('subcatagory.edit',$row->id) }}"
                                                        class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
        
                                                
                                                    <a href="{{ Route('subcatagory.delete',$row->id) }}"
                                                        class="btn btn-danger btn-sm delete" ><i class="fa fa-trash"></i></a>
        
                                                </td>
                                            </tr>
                                        @endforeach
        
                                    </tbody> 
        
                                </table>
                                       
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.2.0
        </div>
        <strong>Copyright &copy; 2021-2022 <a href="https://adminlte.io">Aktar.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    
@endsection
