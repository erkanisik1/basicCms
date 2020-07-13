 <div class="col-12 col-md-5 col-lg-4">
                    <div class="sidebar-area">

                   

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget latest-video-widget mb-50">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4>Şema arşivi</h4>
                                <div class="line"></div>
                            </div>

                        
                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                               
                                <div class="post-content">
                                  <ul >
                                     
                                       @foreach(category('7') as $key)
                        
                                            <li ><a href="/category/{{ $key->id.'/'.$key->nameSeo  }}" class="post-title">{{ $key->name }}</a></li>

                                             @endforeach
                                  </ul>
                                    

                                  
                                </div>
                            </div>

                          

                         
                        </div>

                      

                     
                    </div>
                </div>