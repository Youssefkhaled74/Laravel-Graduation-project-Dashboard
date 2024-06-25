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
                    <a href="{{ route('customers.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body" style="padding-top: 50px;">
                <form action="{{ route('customers.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('Name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('Name'))
                            <span class="text-danger">{{ $errors->first('Name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="model" class="col-md-4 col-form-label text-md-end text-start">email</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="priceForDay" class="col-md-4 col-form-label text-md-end text-start">password</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('password') is-invalid @enderror" id="passwordForDay" name="passwordForDay" value="{{ old('password') }}">
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start">phone</label>
                        <div class="col-md-6">
                            <input class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" type="text">{{ old('phone') }}</input>
                            <!-- <input type="number" step="0.01" class="form-control @error('phone') is-invalid @enderror" id="price" name="phone" value="{{ old('price') }}"> -->
                            @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="carPhoto" class="col-md-4 col-form-label text-md-end text-start">nationalty</label>
                        <div class="col-md-6">
                            <input class="form-control @error('nationalty') is-invalid @enderror" type="text" id="nationalty" name="nationalty">{{ old('nationalty') }}</input>
                            @if ($errors->has('nationalty'))
                            <span class="text-danger">{{ $errors->first('nationalty') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="carPhoto" class="col-md-4 col-form-label text-md-end text-start">passId</label>
                        <div class="col-md-6">
                            <input class="form-control @error('passId') is-invalid @enderror" type="text" id="passId" name="passId">{{ old('passId') }}</input>
                            @if ($errors->has('passId'))
                            <span class="text-danger">{{ $errors->first('passId') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="carPhoto" class="col-md-4 col-form-label text-md-end text-start">car_id</label>
                        <div class="col-md-6">
                            <input class="form-control @error('car_id') is-invalid @enderror" type="text" id="car_id" name="car_id">{{ old('car_id') }}</input>
                            @if ($errors->has('car_id'))
                            <span class="text-danger">{{ $errors->first('car_id') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="carPhoto" class="col-md-4 col-form-label text-md-end text-start">fly_id</label>
                        <div class="col-md-6">
                            <input class="form-control @error('fly_id') is-invalid @enderror" type="text" id="fly_id" name="fly_id">{{ old('fly_id') }}</input>
                            @if ($errors->has('fly_id'))
                            <span class="text-danger">{{ $errors->first('fly_id') }}</span>
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