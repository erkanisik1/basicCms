
                

                        <!-- Section Heading -->
                        <div class="section-heading style-2">
                            <h4>Son Eklenenler</h4>
                            <div class="line"></div>
                        </div>
                        
                        @foreach($homeContent as $key)
                        
                             <!-- Single Post Area -->
                        <div class="single-post-area mb-30">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-6">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="{{ contentImage($key->content) }}" alt="">

                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Post Content -->
                                    <div class="post-content mt-0">
                                        <a href="/category/{{ $key->categoryId }}/{{categoriRow($key->categoryId)->nameSeo }}" class="post-cata cata-sm cata-success">{{ categoriRow($key->categoryId)->name }}</a>
                                        <a href="/content/{{$key->id}}/{{$key->titleSeo}}" class="post-title mb-2">{{ $key->title }}</a>
                                        <div class="post-meta d-flex align-items-center mb-2">
                                            <a href="#" class="post-author">{{ editorName($key->author) }}</a>
                                            <i class="fa fa-circle" aria-hidden="true"></i>
                                            <a href="#" class="post-date">{{ Date::convert($key->createDate, '{dayNumber}/{monthNumber}/{year}')}}</a>
                                            <i class="fa fa-circle" aria-hidden="true"></i>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $key->hit }}</a>
                                        </div>
                                        <p class="mb-2">{{ kelimebol($key->content,'150') }}</p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                            
                        @endforeach
                       