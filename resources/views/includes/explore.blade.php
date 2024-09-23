
<section class="explore-section section-padding" id="section_2">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="mb-4">Browse Topics</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @foreach($categories as $index => $category)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $index === 0 ? 'active' : '' }}" 
                                id="{{ Str::slug($category->name) }}-tab" 
                                data-bs-toggle="tab"
                                data-bs-target="#{{ Str::slug($category->name) }}-tab-pane" 
                                type="button" 
                                role="tab" 
                                aria-controls="{{ Str::slug($category->name) }}-tab-pane" 
                                aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                            {{ $category->name }}
                        </button>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="myTabContent">
                    @foreach($categories as $index => $category)
                        <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" 
                             id="{{ Str::slug($category->name) }}-tab-pane" 
                             role="tabpanel"
                             aria-labelledby="{{ Str::slug($category->name) }}-tab" 
                             tabindex="0">
                            <div class="row">
                                @foreach($category->topics->take(3) as $topic)
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="{{ route('topics.show', $topic) }}">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">{{ $topic->title }}</h5>
                                                        <p class="mb-0">{{ Str::limit($topic->content, 50) }}</p>
                                                    </div>
                                                    <span class="badge bg-{{ Str::slug($category->name) }} rounded-pill ms-auto">
                                                        {{ $topic->id }}
                                                    </span>
                                                </div>
                                                @if($topic->image)
                                                    <!-- <img src="{{ asset('storage/' . $topic->image) }}" -->
                                                    <img src="{{ asset($topic->image) }}"

                                                         class="custom-block-image img-fluid" 
                                                         alt="{{ $topic->title }}">
                                                @else
                                                    <img src="{{ asset('images/topics/default.png') }}"
                                                         class="custom-block-image img-fluid" 
                                                         alt="Default topic image">
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
        </section>