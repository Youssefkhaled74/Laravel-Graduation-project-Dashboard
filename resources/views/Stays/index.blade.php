
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
            <div class="card-header">Product List</div>
            <div class="card-body">
                <a href="{{ route('stays.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Product</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        
                        <th scope="col">Iteration</th>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">address</th>
                        <th scope="col">Description</th>
                        <th scope="col">price</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($stays as $stay)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $stay->id }}</td>
                            <td>{{ $stay->name }}</td>
                            <td>{{ $stay->address }}</td>
                            <td>{{ $stay->photo }}</td>
                            <!-- <td><a href="files/{{$stay->stayPhoto}}">Photo</a></td>
                            <td>{{ $stay->stayPhoto }}</td> -->
                            <td>{{ $stay->price}}</td>
                            <td>
                                <form action="{{ route('stays.destroy', $stay->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('stays.show', $stay->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                    <a href="{{ route('stays.edit', $stay->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this product?');"><i class="bi bi-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>No stay Found!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                  </table>

                  
                  {{ $stays->links() }}
                  

            </div>
        </div>
    </div>    
</div>
    
@endsection