@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add new catagory') }}
                        <a href="{{ Route('catagory.index') }}" class="btn btn-danger btn-sm" style="float:right;">All catagory</a>
                    </div>

                    <div class="card-body">
                        @if (session()->has('sucess'))
                            <div class="alert alert-success">
                                {{ session()->get('sucess') }}
                            </div>
                        @endif
                        <form action="{{ Route('catagory.update',$data->id) }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label" required>Catagory Name</label>
                                <input value="{{ $data->catagory_name }}" type="text" name="catagory_name" 
                                    class="form-control @error('catagory_name') is-invalid @enderror">
                                @error('catagory_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                <label for="" class="form-label" required>Catagory_slug</label>
                                <input value="{{$data->catagory_slug }}" type="text" name="catagory_slug"
                                   
                                    class="form-control @error('catagory_slug') is-invalid @enderror">
                                @error('catagory_slug')
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
