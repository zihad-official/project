<x-admin-master>
    @section('content')
    <h3>All Categories</h3>

    @foreach($categories as $category)
    <div class="card mb-4">
    <div class="card-body">
        <h5>Category Name: {{$category->name}}</h5>
        <h8>Created at: {{$category->created_at}}</h8>
    </div>
    <div class="card-body">
        <a href="{{route('category.destroy', $category->id)}}" class="btn btn-danger">Delete category</a>
        <a href="{{route('category.edit', $category->id)}}" class="btn btn-primary">Edit category</a>
    </div>
    

    </div>
    @endforeach
    @endsection
</x-admin-master>