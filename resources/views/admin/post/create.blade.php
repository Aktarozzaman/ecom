@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add New Post</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form  method="post" enctype="multipart/form-data" action="{{ Route('post.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Post Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter post Title" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Catagory</label>
                                <select class="form-control" name="subcatagory_id">
                                    <option selected disabled>Chose catagory</option>
                                    @foreach ($catagory as $cat)
                                   
                                    @php
                                        $subcatagories=DB::table('subcatagories')->where('catagory_id',$cat->id)->get();
                                    @endphp
                                         <option disabled class="text-info">{{ $cat->catagory_name }}</option>
                                         @foreach ($subcatagories as $sub)

                                         <option value="{{ $sub->id }}">--{{ $sub->subcatagory_name }}</option>
                                             
                                         @endforeach
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="form-group">
                                <label for="exampleInputEmail1">SubCatagory</label>
                                <select class="form-control" name="subcatagory_id">
                                    <option>Example One</option>
                                </select>
                            </div> --}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Post Date</label>
                                <input type="date" class="form-control" name="post_date" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tags</label>
                                <input type="text" class="form-control" name="tags" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea class="form-control summernote" id="summernote" name="description" required rows="4" placeholder="Enter your description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image"  required>
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                       
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="status" value="1">
                                <label class="form-check-label" for="exampleCheck1">Publish Now</label>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection
{{-- // @if (session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif --}}
