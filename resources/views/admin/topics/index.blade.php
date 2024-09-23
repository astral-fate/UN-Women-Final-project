<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.includes.head')

<body>
  
@include('admin.includes.header')

   

    <div class="container my-5">
        <div class="mx-2">
            <div class="row justify-content-between mb-2 pb-2">
                <h2 class="fw-bold fs-2 col-auto">All Topics</h2>
                <!-- <a href="add_topic.php" class="btn btn-link  link-dark fw-semibold col-auto me-3"> -->
              
                <a href="{{ route('admin.topics.create') }}" 
                
                class="btn btn-link link-dark fw-semibold col-auto me-3">
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