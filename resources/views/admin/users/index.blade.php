<!DOCTYPE html>
<html lang="en">

@include('admin.includes.head')

<body>
  
@include('admin.includes.header')

  

  <div class="container my-5">
    <div class="mx-2">
        <div class="row justify-content-between mb-2 pb-2">
            <h2 class="fw-bold fs-2 col-auto">All Users</h2>
            <a href="{{ route('admin.users.create') }}" class="btn btn-link link-dark fw-semibold col-auto me-3">
                ➕Add new users
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover display" id="_table">
                <thead>
                    <tr>
                        <th scope="col">Registration Date</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Active</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->created_at->format('d M Y') }}</th>
                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone ?? '_' }}</td>
                        <td>{{ $user->is_active ? 'YES' : 'NO' }}</td>
                        <td class="text-center">
                            <a class="text-decoration-none text-dark" href="{{ route('admin.users.edit', $user->id) }}">
                                <img src="{{ asset('assests/images/edit-svgrepo-com.svg') }}" alt="Edit">
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>

  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.min.js') }}"></script>
  <script src="{{ asset('js/tables.js') }}"></script>
</body>

</html>