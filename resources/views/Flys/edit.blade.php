@extends('mastar.layout')
@extends('mastar.layouts')

@section('contents')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit car
                </div>
                <div class="float-end">
                    <a href="{{ route('cars.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('cars.update', $car->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <!-- <div class="mb-3 row">
                        <label for="id" class="col-md-4 col-form-label text-md-end text-start">id</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('id') is-invalid @enderror" id="id" name="id" value="{{ $car->id }}">
                            @if ($errors->has('id'))
                                <span class="text-danger">{{ $errors->first('id') }}</span>
                            @endif
                        </div>
                    </div> -->

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $car->name }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="model" class="col-md-4 col-form-label text-md-end text-start">model</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model" value="{{ $car->model }}">
                            @if ($errors->has('model'))
                                <span class="text-danger">{{ $errors->first('model') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="priceForDay" class="col-md-4 col-form-label text-md-end text-start">priceForDay</label>
                        <div class="col-md-6">
                          <input type="text" step="0.01" class="form-control @error('priceForDay') is-invalid @enderror" id="priceForDay" name="priceForDay" value="{{ $car->priceForDay }}">
                            @if ($errors->has('priceForDay'))
                                <span class="text-danger">{{ $errors->first('priceForDay') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start">Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ $car->description }}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="carPhoto" class="col-md-4 col-form-label text-md-end text-start">carPhoto</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('carPhoto') is-invalid @enderror" id="carPhoto" name="carPhoto">{{ $car->carPhoto }}</textarea>
                            @if ($errors->has('carPhoto'))
                                <span class="text-danger">{{ $errors->first('carPhoto') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection