@extends('mastar.layout')
@extends('mastar.layouts')
@section('contents')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Customer Information
                </div>
                <div class="float-end">
                    <a href="{{ route('customers.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Id:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $Customer->id }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $Customer->name }}
                        </div>
                    </div>


                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>email:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $Customer->email }}
                        </div>
                    </div>


                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>password:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $Customer->password }}
                        </div>
                    </div>


                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>phone:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $Customer->phone }}
                        </div>
                    </div>


                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>nationalty:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $Customer->nationalty }}
                        </div>
                    </div>


                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>passId:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $Customer->passId }}
                        </div>
                    </div>


                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>car_id:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $Customer->car_id }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>fly_id:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $Customer->fly_id }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Created at:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $Customer->created_at }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Updated at:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $Customer->updated_at }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection