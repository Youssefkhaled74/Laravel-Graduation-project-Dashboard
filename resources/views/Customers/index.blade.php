
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
            <div class="card-header">Customers List</div>
            <div class="card-body">
                <a href="{{ route('customers.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Customer</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        
                        <th scope="col">Iteration</th>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Nationalty</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($Customers as $Customer)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $Customer->id }}</td>
                            <td>{{ $Customer->name }}</td>
                            <td>{{ $Customer->email }}</td>
                            <td>{{ $Customer->phone }}</td>
                            <td>{{ $Customer->nationalty }}</td>
                            <td>
                                <form action="{{ route('customers.destroy', $Customer->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('customers.show', $Customer->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                    <a href="{{ route('customers.edit', $Customer->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this product?');"><i class="bi bi-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>No Customer Found!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                  </table>

                  
                  {{ $Customers->links() }}
                  

            </div>
        </div>
    </div>    
</div>
    
@endsection