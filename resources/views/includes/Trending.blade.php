<section class="section-padding section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <h3 class="mb-4">Trending Topics</h3>
                    </div>

                    @foreach($trendingTopics as $topic)
                        <div class="col-lg-6 col-md-6 col-12 mt-3 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="{{ route('topics.show', $topic) }}">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">{{ $topic->title }}</h5>
                                            <p class="mb-0">{{ Str::limit($topic->content, 50) }}</p>
                                        </div>
                                        <span class="badge bg-{{ Str::slug($topic->category->name) }} rounded-pill ms-auto">{{ $topic->id }}</span>
                                    </div>
                                    @if($topic->image)
                                    <img src="{{ asset($topic->image) }}"  class="custom-block-image img-fluid" alt="Default topic image">
                                           @else
                                           <img src="{{ asset($topic->image) }}"  class="custom-block-image img-fluid" alt="Default topic image">

                                          @endif
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>