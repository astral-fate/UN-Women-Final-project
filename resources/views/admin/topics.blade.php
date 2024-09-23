<!DOCTYPE html>
<html lang="en">


@include('admin.includes.head')

<body>
@include('admin.includes.header')

   

      <div class="container my-5">
        <div class="mx-2">
            <div class="row justify-content-between mb-2 pb-2">
                <h2 class="fw-bold fs-2 col-auto">All Topics</h2>
              
                <a href="{{ route('admin.topics.create') }}" class="btn btn-link link-dark fw-semibold col-auto me-3">
                  ➕Add new topic</a>
                  
            </div>
            <div class="table-responsive">
                <table class="table table-hover display" id="_table">
                    <thead>
                        <tr>
                            <th scope="col">Created At</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Content</th>
                            <th scope="col">No. of views</th>
                            <th scope="col">Published</th>
                            <th scope="col">Trending</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($topics as $topic)
                        <tr>
                            <td>{{ $topic->created_at->format('Y-m-d H:i') }}</td>
                            <td>{{ $topic->title }}</td>
                            <td>{{ $topic->category->name }}</td>
                            <td>{{ Str::limit($topic->content, 50) }}</td>
                            <td>{{ $topic->views }}</td>
                            <td>{{ $topic->is_published ? 'Yes' : 'No' }}</td>
                            <td>{{ $topic->is_trending ? 'Yes' : 'No' }}</td>
                            <td>
                                <a href="{{ route('admin.topics.edit', $topic->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.topics.destroy', $topic->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this topic?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="assests/js/jquery.min.js"></script>
    <script src="assests/js/bootstrap.bundle.min.js"></script>
    <script src="assests/js/dataTables.min.js"></script>
    <script src="assests/js/tables.js"></script>
</body>

</html>