<x-admin-master>
    @section('content')
    <div class="card mb-4">
    <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">User</th>
      <th scope="col">Roles</th>
      <th scope="col">Add Roles</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{$user->name}}</td>
      <td>@foreach($user->roles as $role) {{$role->name}} @endforeach</td>
      <td><a href="{{route('add_user_role', $user)}}" class="btn btn-info">Add Role</a></td>
      <td><a href="{{route('delele_user_role', $user)}}" class="btn btn-danger">Delete Role</a></td>
    </tr>
    @endforeach
   
    </tbody>
    </table>
    </div>
    </div>
    @endsection
</x-admin-master>