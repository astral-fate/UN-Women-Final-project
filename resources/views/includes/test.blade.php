<section class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mb-4">What Our Clients Say</h2>
                        </div>
                    </div>
                    @if($testimonials->count() > 0)
                        <div class="row">
                            @foreach($testimonials as $testimonial)
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            @if($testimonial->image)
                                                <img src="{{ asset($testimonial->image) }}" alt="{{ $testimonial->name }}" class="img-fluid rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                                            @endif
                                            <h5 class="card-title">{{ $testimonial->name }}</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">{{ $testimonial->created_at->format('d/m/Y') }}</h6>
                                            <p class="card-text">{{ $testimonial->content }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-12">
                                {{ $testimonials->links() }}
                            </div>
                        </div>
                    @else
                        <p>No testimonials available at the moment.</p>
                    @endif
                </div>
            </section>