<x-admin-master>
    @section('content')
    <h3>View All Categories</h3>

    @foreach($categories as $category)
    <div class="card mb-4">
    <div class="card-body">
        <h5>Category Name: {{$category->name}}</h5>
        <h8>Create at-{{$category->created_at}}</h8>
        <form method="post" action="{{route('category.destroy', $category->id)}}">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Delete</button>
        </form>
        <a href="{{route('category.edit', $category->id)}}" class="btn btn-dark">Edit</a>
    </div>

    </div>
    @endforeach
    @endsection
</x-admin-master>