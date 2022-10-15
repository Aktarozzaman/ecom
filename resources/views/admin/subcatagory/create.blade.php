@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add new Subcatagory') }}
                        <a href="{{ Route('subcatagory.index') }}" class="btn btn-danger btn-sm" style="float:right;">All
                            catagory</a>
                    </div>

                    <div class="card-body">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <form action="{{ Route('subcatagory.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label" required> Chose SubCatagory</label>
                                <select class="form-control" name="catagory_name"> 
                                    @foreach ($catagories as $row)
                                        <option  value="{{ $row->id}}">{{ $row->catagory_name }}</option>
                                    @endforeach
                                </select>
                            

                                <label for="" class="form-label" required>Catagory Name</label>
                                <input value="{{ old('subcatagory_name') }}" type="text" name="subcatagory_name"
                                    placeholder=" Enter Subcatagory Name"
                                    class="form-control @error('subcatagory_name') is-invalid @enderror">
                                @error('subcatagory_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="" class="form-label" required>Subcatagory_slug</label>
                                <input value="{{ old('subcatagory_slug') }}" type="text" name="subcatagory_slug"
                                    placeholder=" Enter your Catagory Slug"
                                    class="form-control @error('subcatagory_slug') is-invalid @enderror">
                                @error('subcatagory_slug')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection