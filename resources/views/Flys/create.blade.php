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
                    <a href="{{ route('flys.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body" style="padding-top: 50px;">
                <form action="{{ route('flys.store') }}" method="post">
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
                        <label for="price" class="col-md-4 col-form-label text-md-end text-start">price</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('Name') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}">
                            @if ($errors->has('price'))
                            <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="degree" class="col-md-4 col-form-label text-md-end text-start">degree</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('Name') is-invalid @enderror" id="degree" name="degree" value="{{ old('degree') }}">
                            @if ($errors->has('degree'))
                            <span class="text-danger">{{ $errors->first('degree') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="discrition" class="col-md-4 col-form-label text-md-end text-start">discrition</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('Name') is-invalid @enderror" id="discrition" name="discrition" value="{{ old('discrition') }}">
                            @if ($errors->has('discrition'))
                            <span class="text-danger">{{ $errors->first('discrition') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="photo" class="col-md-4 col-form-label text-md-end text-start">Photo</label>
                        <div class="col-md-6">
                            <input class="form-control @error('Photo') is-invalid @enderror" type="file" id="photo" name="photo">{{ old('photo') }}</input>
                            @if ($errors->has('photo'))
                            <span class="text-danger">{{ $errors->first('photo') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="go" class="col-md-4 col-form-label text-md-end text-start">go</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control @error('Name') is-invalid @enderror" id="go" name="go" value="{{ old('go') }}">
                            @if ($errors->has('go'))
                            <span class="text-danger">{{ $errors->first('go') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="back" class="col-md-4 col-form-label text-md-end text-start">back</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control @error('Name') is-invalid @enderror" id="back" name="back" value="{{ old('back') }}">
                            @if ($errors->has('back'))
                            <span class="text-danger">{{ $errors->first('back') }}</span>
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