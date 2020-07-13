    <section class="post-details-area">
        <div class="container ">
           

            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8 col-xl-12">
                    <div class="post-details-content">
                        <!-- Blog Content -->
                        <div class="blog-content" >

                            <!-- Post Content -->
                            <div class="post-content mt-0">
                              
                                <a href="#" class="post-title mb-2">{{ $homeContent->title}}</a>

                                <div class="d-flex justify-content-between mb-30">
                                    <div class="post-meta d-flex align-items-center">
                                        <a href="#" class="post-author">{{ editorName($homeContent->author) }}</a>
                                        <i class="fa fa-circle" aria-hidden="true"></i>
                                        <a href="#" class="post-date">{{ dateConvert($homeContent->createDate)}}</a>
                                    </div>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 0</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{$homeContent->hit}}</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> {{$homeContent->hit/3}}</a>
                                    </div>
                                </div>


                            </div>
                            <p style="background: #fff !important;">
                                {{ decode($homeContent->content) }}
                            </p>
                           


                        </div>
                    </div>
                </div>

              
            </div>
        </div>
    </section>
                       