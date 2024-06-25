@extends("mastar.layout")

@section("content")

<div class="row justify-content-center mt-3" style="padding-top: 100px;">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Add New Car
                </div>
                <div class="float-end">
                    <a href="{{ route('cars.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body" style="padding-top: 50px;">
                <form action="{{ route('cars.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('Name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="model" class="col-md-4 col-form-label text-md-end text-start">Model</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('Model') is-invalid @enderror" id="model" name="model" value="{{ old('model') }}">
                            @if ($errors->has('model'))
                            <span class="text-danger">{{ $errors->first('model') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="priceForDay" class="col-md-4 col-form-label text-md-end text-start">Price</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('Price') is-invalid @enderror" id="priceForDay" name="priceForDay" value="{{ old('priceForDay') }}">
                            @if ($errors->has('priceForDay'))
                            <span class="text-danger">{{ $errors->first('priceForDay') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start">Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('Description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                            <!-- <input type="number" step="0.01" class="form-control @error('Description') is-invalid @enderror" id="price" name="description" value="{{ old('price') }}"> -->
                            @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="carPhoto" class="col-md-4 col-form-label text-md-end text-start">Photo</label>
                        <div class="col-md-6">
                            <input class="form-control @error('carPhoto') is-invalid @enderror" type="file" id="carPhoto" name="carPhoto" value="">{{ old('carPhoto') }}</input>
                            @if ($errors->has('carPhoto'))
                            <span class="text-danger">{{ $errors->first('carPhoto') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add Product">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection