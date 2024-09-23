<section class="topics-detail-section section-padding" id="topics-detail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 m-auto">
                        <h3 class="mb-4">{{ $topic->title }}</h3>

                        {!! $topic->content !!}

                        <p class="mt-4"><strong>Category:</strong> {{ $topic->category->name }}</p>
                        <p><strong>Published on:</strong> {{ $topic->created_at->format('F d, Y') }}</p>
                        <p><strong>Views:</strong> {{ $topic->views }}</p>
                    </div>
                </div>
            </div>
        </section>