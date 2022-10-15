@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('subcatagory update') }}
                        <a href="{{ Route('subcatagory.index') }}" class="btn btn-danger btn-sm" style="float:right;">All catagory</a>
                    </div>

                    <div class="card-body">
                        @if (session()->has('sucess'))
                            <div class="alert alert-success">
                                {{ session()->get('sucess') }}
                            </div>
                        @endif
                        <form action="{{ Route('subcatagory.update',$data->id) }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label" required> Chose Catagory</label>
                                <select class="form-control" name="catagory_id"> 
                                    @foreach ($catagory as $row)
                                        <option  value="{{ $row->id }} @if ($row->id==$data->catagory_id) selected
                                            
                                        @endif">{{ $row->catagory_name }}</option>
                                    @endforeach
                                </select>
                            

                                <label for="" class="form-label" required>Catagory Name</label>
                                <input value="{{ old($data->subcatagory_name) }}" type="text" name="subcatagory_name"
                                    placeholder=" Enter Subcatagory Name"
                                    class="form-control @error('subcatagory_name') is-invalid @enderror">
                                @error('subcatagory_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="" class="form-label" required>Subcatagory_slug</label>
                                <input value="{{ old($data->subcatagory_slug) }}" type="text" name="subcatagory_slug"
                                    placeholder=" Enter your Catagory Slug"
                                    class="form-control @error('subcatagory_slug') is-invalid @enderror">
                                @error('subcatagory_slug')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <button type="submit" class="btn btn-sm btn-primary">Updated</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
