@extends('mastar.layout')
@extends('mastar.layouts')
@section('contents')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Product Information
                </div>
                <div class="float-end">
                    <a href="{{ route('cars.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Id:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $fly->id }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $fly->name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>price:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $fly->price }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>degree:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $fly->degree }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>description:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $fly->descrition }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>photo:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $fly->photo }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Created at:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $fly->created_at }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Updated at:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $fly->updated_at }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Go:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $fly->go }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Back:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $fly->back }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection