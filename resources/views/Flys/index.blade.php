
@extends("mastar.layout")
@extends("mastar.layouts")

@section("contents")

<div class="row justify-content-center mt-3" style="padding-top: 40px;">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
        <div class="float-end">
                        <a href="{{ route('home') }}" class="btn btn-primary btn-sm mx-4 mt-4">&larr; Back</a>
            </div>
            <div class="card-header">flying List</div>
            <div class="card-body">
                <a href="{{ route('flys.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Product</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        
                        <th scope="col">Iteration</th>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Degree</th>
                        <th scope="col">Go</th>
                        <th scope="col">Back</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($flys as $Fly)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $Fly->id }}</td>
                            <td>{{ $Fly->name }}</td>
                            <td>{{ $Fly->price }}</td>
                            <td>{{ $Fly->degree }}</td>
                            <td>{{ $Fly->go }}</td>
                            <td>{{ $Fly->back }}</td>
                            <!-- <td><a href="files/{{$Fly->carPhoto}}">Photo</a></td> -->
                            <!-- <td>{{ $Fly->carPhoto }}</td> -->
                            <!-- <td>{{ $Fly->created_at}}</td> -->
                            <td>
                                <form action="{{ route('flys.destroy', $Fly->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('flys.show', $Fly->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                    <a href="{{ route('flys.edit', $Fly->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this product?');"><i class="bi bi-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>No fly Found!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                  </table>

                  
                  {{ $flys->links() }}
                  

            </div>
        </div>
    </div>    
</div>
    
@endsection