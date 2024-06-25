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
                    Edit customer
                </div>
                <div class="float-end">
                    <a href="{{ route('customers.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('customers.update', $Customer->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $Customer->name }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">email</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $Customer->email }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">password</label>
                        <div class="col-md-6">
                          <input type="text" step="0.01" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ $Customer->password }}">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="phone" class="col-md-4 col-form-label text-md-end text-start">phone</label>
                        <div class="col-md-6">
                            <input class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $Customer->phone }}">
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nationalty" class="col-md-4 col-form-label text-md-end text-start">nationalty</label>
                        <div class="col-md-6">
                            <input class="form-control @error('nationalty') is-invalid @enderror" id="nationalty" name="nationalty" value="{{ $Customer->nationalty }}">
                            @if ($errors->has('nationalty'))
                                <span class="text-danger">{{ $errors->first('nationalty') }}</span>
                            @endif
                        </div>
                    </div>
                    

                    <div class="mb-3 row">
                        <label for="passId" class="col-md-4 col-form-label text-md-end text-start">passId</label>
                        <div class="col-md-6">
                            <input class="form-control @error('passId') is-invalid @enderror" id="passId" name="passId" value="{{ $Customer->passId }}">
                            @if ($errors->has('passId'))
                                <span class="text-danger">{{ $errors->first('passId') }}</span>
                            @endif
                        </div>
                    </div>
                    

                    <div class="mb-3 row">
                        <label for="car_id" class="col-md-4 col-form-label text-md-end text-start">car_id</label>
                        <div class="col-md-6">
                            <input class="form-control @error('car_id') is-invalid @enderror" id="car_id" name="car_id" value="{{ $Customer->car_id }}">
                            @if ($errors->has('car_id'))
                                <span class="text-danger">{{ $errors->first('car_id') }}</span>
                            @endif
                        </div>
                    </div>
                    

                    <div class="mb-3 row">
                        <label for="fly_id" class="col-md-4 col-form-label text-md-end text-start">fly_id</label>
                        <div class="col-md-6">
                            <input class="form-control @error('fly_id') is-invalid @enderror" id="fly_id" name="fly_id" value="{{ $Customer->fly_id }}">
                            @if ($errors->has('fly_id'))
                                <span class="text-danger">{{ $errors->first('fly_id') }}</span>
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