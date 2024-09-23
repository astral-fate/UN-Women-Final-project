<section class="featured-section">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($mostViewedTopics as $topic)
                        <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    @if($topic->image)
                                        <img src="{{ asset($topic->image) }}"
                                             class="custom-block-image img-fluid" 
                                             alt="{{ $topic->title }}">
                                    @else
                                        <img src="{{ asset('images/topics/default.png') }}"
                                             class="custom-block-image img-fluid" 
                                             alt="Default topic image">
                                    @endif

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">{{ $topic->title }}</h5>

                                            <p class="text-white">{{ Str::limit($topic->content, 100) }}</p>

                                            <a href="{{ route('topics.show', $topic) }}" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                        </div>

                                        <span class="badge bg-finance rounded-pill ms-auto">{{ $topic->views }}</span>
                                    </div>

                                    <div class="social-share d-flex">
                                        <p class="text-white me-4">Share:</p>

                                        <ul class="social-icon">
                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-twitter"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-facebook"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-pinterest"></a>
                                            </li>
                                        </ul>

                                        <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                                    </div>

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>