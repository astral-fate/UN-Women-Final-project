<header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5 col-12 mb-5">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Homepage</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('categories.show', $topic->category) }}">{{ $topic->category->name }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $topic->title }}</li>
                            </ol>
                        </nav>

                        <h2 class="text-white">{{ $topic->title }}</h2>

                        <div class="d-flex align-items-center mt-5">
                            <a href="#topics-detail" class="btn custom-btn custom-border-btn smoothscroll me-4">Read More</a>
                            <a href="#" class="custom-icon bi-bookmark smoothscroll"></a>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="topics-detail-block bg-white shadow-lg">
                            @if($topic->image)
                            <img src="{{ asset($topic->image) }}"

                            @else
                                <img src="{{ asset($topic->image) }}"
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </header>