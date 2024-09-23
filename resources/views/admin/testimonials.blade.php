<!DOCTYPE html>
<html lang="en">

@include('admin.includes.head')

<body>
  
@include('admin.includes.header')

   


      <div class="container my-5">
        <div class="mx-2">
            <div class="row justify-content-between mb-2 pb-2">
                <h2 class="fw-bold fs-2 col-auto">All Testimonials</h2>
                <a href="{{ route('admin.testimonials.create') }}" 
                class="btn btn-link link-dark fw-semibold col-auto me-3">
                  ➕Add new testimonial</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover display" id="_table">
                    <thead>
                        <tr>
                            <th scope="col">Created At</th>
                            <th scope="col">Name</th>
                            <th scope="col">Content</th>
                            <th scope="col">Published</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($testimonials as $testimonial)
                            <tr>
                                <th scope="row">{{ $testimonial->created_at->format('d M Y') }}</th>
                                <td>{{ $testimonial->name }}</td>
                                <td>{{ Str::limit($testimonial->content, 50) }}</td>
                                <td>{{ $testimonial->is_published ? 'YES' : 'NO' }}</td>
                                <td class="text-center">
                                    <a class="text-decoration-none text-dark" href="{{ route('admin.testimonials.edit', $testimonial) }}">
                                        <img src="{{ asset('images/edit-svgrepo-com.svg') }}" alt="Edit">
                                    </a>
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this testimonial?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link p-0">
                                            <img src="{{ asset('images/trash-can-svgrepo-com.svg') }}" alt="Delete">
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No testimonials found.</td>
                            </tr>
                        @endforelse
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