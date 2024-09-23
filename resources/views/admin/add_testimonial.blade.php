<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.includes.head')

<body>
  
@include('admin.includes.header')

   


  <div class="container my-5">
        <div class="mx-2">
            <h2 class="fw-bold fs-2 mb-5 pb-2">Add Testimonial</h2>
            <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data" class="px-md-5">
                @csrf
                <div class="form-group mb-3 row">
                    <label for="name" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
                    <div class="col-md-10">
                        <input type="text" name="name" id="name" placeholder="e.g. John Doe" class="form-control py-2" required />
                    </div>
                </div>
                <div class="form-group mb-3 row">
                    <label for="content" class="form-label col-md-2 fw-bold text-md-end">Content:</label>
                    <div class="col-md-10">
                        <textarea name="content" id="content" rows="5" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="form-group mb-3 row">
                    <label for="is_published" class="form-label col-md-2 fw-bold text-md-end">Published:</label>
                    <div class="col-md-10">
                        <input type="checkbox" name="is_published" id="is_published" class="form-check-input" style="padding: 0.7rem;" />
                    </div>
                </div>
                <hr>
                <div class="form-group mb-3 row">
                    <label for="image" class="form-label col-md-2 fw-bold text-md-end">Image:</label>
                    <div class="col-md-10">
                        <input type="file" name="image" id="image" class="form-control" style="padding: 0.7rem;" />
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