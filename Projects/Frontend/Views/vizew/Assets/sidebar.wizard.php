 <div class="col-12 col-md-5 col-lg-4">
    <div class="sidebar-area">
        <div class="single-widget latest-video-widget mb-50">
           <div class="section-heading style-2 mb-30"><h4>Category</h4><div class="line"></div></div>                        
            <div class="single-blog-post d-flex">
                <div class="post-content">
                    <ul >
                    @foreach(category('0') as $key)
                        <li ><a href="/category/{{ $key->id.'/'.$key->nameSeo  }}" class="post-title">{{ $key->name }}</a></li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPisilinux%2F&tabs=timeline&width=350&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=366773454303211" width="350" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
    </div>
</div>