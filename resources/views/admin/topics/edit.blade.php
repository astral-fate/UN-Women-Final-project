<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.includes.head')

<body>
  
@include('admin.includes.header')

   

  <div class="container my-5">
    <div class="mx-2">
        <h2 class="fw-bold fs-2 mb-5 pb-2">Edit Topic</h2>
        <form action="{{ route('admin.topics.update', $topic->id) }}" method="POST" enctype="multipart/form-data" class="px-md-5">
            @csrf
            @method('PUT')
            <div class="form-group mb-3 row">
                <label for="title" class="form-label col-md-2 fw-bold text-md-end">Topic Title:</label>
                <div class="col-md-10">
                    <input type="text" name="title" id="title" placeholder="e.g. Design Patterns" class="form-control py-2" value="{{ $topic->title }}" required/>
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label for="category_id" class="form-label col-md-2 fw-bold text-md-end">Category:</label>
                <div class="col-md-10">
                    <select name="category_id" id="category_id" class="form-control py-1" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $topic->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label for="content" class="form-label col-md-2 fw-bold text-md-end">Content:</label>
                <div class="col-md-10">
                    <textarea name="content" id="content" rows="5" class="form-control" required>{{ $topic->content }}</textarea>
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label for="is_trending" class="form-label col-md-2 fw-bold text-md-end">Trending:</label>
                <div class="col-md-10">
                    <input type="checkbox" name="is_trending" id="is_trending" class="form-check-input" style="padding: 0.7rem;" {{ $topic->is_trending ? 'checked' : '' }} />
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label for="is_published" class="form-label col-md-2 fw-bold text-md-end">Published:</label>
                <div class="col-md-10">
                    <input type="checkbox" name="is_published" id="is_published" class="form-check-input" style="padding: 0.7rem;" {{ $topic->is_published ? 'checked' : '' }} />
                </div>
            </div>
            <hr>
            <div class="form-group mb-3 row">
                <label for="image" class="form-label col-md-2 fw-bold text-md-end">Image:</label>
                <div class="col-md-10">
                    <input type="file" name="image" id="image" class="form-control" style="padding: 0.7rem; margin-bottom: 10px;" />
                    @if($topic->image)
                        <img src="{{ asset('storage/' . $topic->image) }}" alt="{{ $topic->title }}" style="width: 10rem;">
                    @endif
                </div>
            </div>
            <div class="text-md-end">
                <button type="submit" class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
                    Update Topic
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