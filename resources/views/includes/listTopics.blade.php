<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 text-center">
                <h3 class="mb-4">All Topics</h3>
            </div>

            <div class="col-lg-8 col-12 mt-3 mx-auto">
                @foreach($topics as $topic)
                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                        <div class="d-flex">
                            @if($topic->image)
                                <img src="{{ asset($topic->image) }}" class="custom-block-image img-fluid" alt="{{ $topic->title }}">
                            @else
                                <img src="{{ asset('path/to/default/image.jpg') }}" class="custom-block-image img-fluid" alt="Default topic image">
                            @endif

                            <div class="custom-block-topics-listing-info d-flex">
                                <div>
                                    <h5 class="mb-2">{{ $topic->title }}</h5>
                                    <p class="mb-0">{{ Str::limit($topic->content, 100) }}</p>
                                    <a href="{{ route('topics.show', $topic) }}" class="btn custom-btn mt-3 mt-lg-4">Learn More</a>
                                </div>
                                <span class="badge bg-{{ Str::slug($topic->category->name) }} rounded-pill ms-auto">{{ $topic->category->name }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-lg-12 col-12">
                {{ $topics->links() }}
            </div>
        </div>
    </div>
        </section>