<!doctype html>
<html lang="en">
<head>
@include('admin.includes.head')

<body>
  
@include('admin.includes.header')

   


        <section class="topics-detail-section section-padding" id="topics-detail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 m-auto">
                        <h3 class="mb-4">{{ $topic->title }}</h3>

                        {!! $topic->content !!}

                        <p class="mt-4"><strong>Category:</strong> 
                        @if($topic->category)
                            <a href="{{ route('categories.show', $topic->category) }}">{{ $topic->category->name }}</a>
                        @else
                            Uncategorized
                        @endif
                    </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter section -->
        
    </main>
		
    <!-- Footer -->

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>