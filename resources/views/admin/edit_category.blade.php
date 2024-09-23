<!DOCTYPE html>
<html lang="en">

@include('admin.includes.head')

<body>
  
@include('admin.includes.header')

   

  
  <div class="container my-5">
        <div class="mx-2">
            <h2 class="fw-bold fs-2 mb-5 pb-2">Edit Category</h2>
            <form action="{{ route('admin.categories.update', $category) }}" method="POST" class="px-md-5">
                @csrf
                @method('PUT')
                <div class="form-group mb-3 row">
                    <label for="name" class="form-label col-md-2 fw-bold text-md-end">Category Name:</label>
                    <div class="col-md-10">
                        <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" placeholder="e.g. Computer Science" class="form-control py-2" required />
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="text-md-end">
                    <button type="submit" class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
                        Update Category
                    </button>
                </div>
            </form>
        </div>
    </div>
  </main>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.min.js') }}"></script>
    <script src="{{ asset('js/tables.js') }}"></script>
</body>

</html>