@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('All Catagory') }}
                        <a href="{{ Route('catagory.create') }}" class="btn btn-primary btn-sm" style="float:right;">Add New catagory</a>
                    </div>

                    <div class="card-body">

                        <table class="table table-responsive table-strioe" class="table table-bordered border-primary">
                            <thead>
                                <tr>
                                    <td>SL</td>
                                    <td>Id</td>
                                    <td>Catagory Name</td>
                                    <td>Catagory Slug</td>
                                    <td>Action</td>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($catagory as $key => $row)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->catagory_name }}</td>
                                        <td>{{ $row->catagory_slug }}</td>

                                        <td>
                                    
                                            <a href="{{ Route('catagory.update',$row->id) }}"
                                                class="btn btn-info btn-sm">Edit</a>
                                            <!-- delete option -->
                                            {{-- <form action="" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">

                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>

                                            </form> --}}
                                            <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody> 

                        </table>
                         {{-- $catagory->links('pagination::bootstrap-4')  --}}

                        <a href="{{ url()->previous() }}" class="btn btn-warning btn-sm" style="float:left;">Back</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
