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
                    <a href="{{ route('stays.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Id:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $stay->id }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $stay->name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="quantity" class="col-md-4 col-form-label text-md-end text-start"><strong>Photo:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $stay->photo }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="price" class="col-md-4 col-form-label text-md-end text-start"><strong>address:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $stay->address }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="price" class="col-md-4 col-form-label text-md-end text-start"><strong>price:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $stay->price }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Created at:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $stay->created_at }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Updated at:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $stay->updated_at }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection