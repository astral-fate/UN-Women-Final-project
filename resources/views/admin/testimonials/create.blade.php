<!DOCTYPE html>
<html lang="en">
  
@include('admin.includes.head')

<body>
  
@include('admin.includes.header')

   


  <div class="container my-5">
            <div class="mx-2">
                <h2 class="fw-bold fs-2 mb-5 pb-2">Add Testimonial</h2>
                
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data" class="px-md-5">
                    @csrf
                    <div class="form-group mb-3 row">
                        <label for="name" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
                        <div class="col-md-10">
                            <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="e.g. John Doe" class="form-control py-2 @error('name') is-invalid @enderror" required />
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group mb-3 row">
                        <label for="content" class="form-label col-md-2 fw-bold text-md-end">Content:</label>
                        <div class="col-md-10">
                            <textarea name="content" id="content" rows="5" class="form-control @error('content') is-invalid @enderror" required>{{ old('content') }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group mb-3 row">
                        <label for="is_published" class="form-label col-md-2 fw-bold text-md-end">Published:</label>
                        <div class="col-md-10">
                            <input type="hidden" name="is_published" value="0">
                            <input type="checkbox" name="is_published" id="is_published" value="1" class="form-check-input" style="padding: 0.7rem;" {{ old('is_published') ? 'checked' : '' }} />
                        </div>
                    </div>

                    <hr>

                    <div class="form-group mb-3 row">
                        <label for="image" class="form-label col-md-2 fw-bold text-md-end">Image:</label>
                        <div class="col-md-10">
                            <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" style="padding: 0.7rem;" />
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="text-md-end">
                        <button type="submit" class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
                            Add Testimonial
                        </button>
                    </div>
                </form>
            </div>
        </div>

  </main>
  <script src="assests/js/jquery.min.js"></script>
    <script src="assests/js/bootstrap.bundle.min.js"></script>
    <script src="assests/js/dataTables.min.js"></script>
    <script src="assests/js/tables.js"></script>
</body>

</html>