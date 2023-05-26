<section id="page__content" class="page__content">
    <div class="content info_content">
        <div class="header_content">
            <div class="container">
                <div class="row_item align_item">
                    <div class="con_lenght info_title_content aos-init aos-animate" data-aos="fade-right" data-aos-duration="1500">
                        <h4 class="font-l cl_white left_contenttext">{{ $posts[1]["left_contenttext"] }}</h4>
                    </div><!-- end con_lenght -->
                    <div class="con_lenght info_imageslide_content">
                        <div class="slideImg carousel scrolling">
                            <div class="imageslide carousel-item active" style="z-index: 0; opacity: 0.894122; visibility: visible; transform: translateX(9px) translateY(-11.5px) translateX(39.0691px) translateX(0px) translateZ(-31.7635px);">
                                <div class="inblk">
                                    <div class="titleslide_content">
                                        <h5>{{ $posts[1]["imageslide"][0]["titleslide_content"] }}</h5>
                                    </div>
                                    <div class="imgslide_content">
                                        <img src={{ $posts[1]["imageslide"][0]["imgslide_content"] }}>
                                    </div>
                                    <div class="descslide_content list_desc_job">
                                        <ul class="dod_job">
                                            @foreach ($posts[1]["imageslide"][0]["dod_job"] as $li)
                                                <li>{{ $li }}</li>
                                            @endforeach                                                   
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end carousel-item-->
                            <div class="imageslide carousel-item" style="transform: translateX(9px) translateY(-11.5px) translateX(285.069px) translateZ(-231.763px); z-index: -1; opacity: 0.227455; visibility: visible;">
                                <div class="inblk">
                                    <div class="titleslide_content">
                                        <h5>{{ $posts[1]["imageslide"][1]["titleslide_content"] }}</h5>
                                    </div>
                                    <div class="imgslide_content">
                                        <img src={{ $posts[1]["imageslide"][1]["imgslide_content"] }}>
                                    </div>
                                    <div class="descslide_content list_desc_job">
                                        <ul class="dod_job">
                                            @foreach ($posts[1]["imageslide"][1]["dod_job"] as $li)
                                                <li>{{ $li }}</li>
                                            @endforeach                                           
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end carousel-item-->
                            <div class="imageslide carousel-item" style="transform: translateX(9px) translateY(-11.5px) translateX(-206.931px) translateZ(-168.237px); z-index: -1; opacity: 0.439212; visibility: visible;">
                                <div class="inblk">
                                    <div class="titleslide_content">
                                        <h5>{{ $posts[1]["imageslide"][2]["titleslide_content"] }}</h5>
                                    </div>
                                    <div class="imgslide_content">
                                        <img src={{ $posts[1]["imageslide"][2]["imgslide_content"] }}>
                                    </div>
                                    <div class="descslide_content list_desc_job">
                                        <ul class="dod_job">
                                            @foreach ($posts[1]["imageslide"][2]["dod_job"] as $li)
                                                <li>{{ $li }}</li>
                                            @endforeach                                           
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end carousel-item-->
                        </div><!-- end carousel -->
                    </div><!-- end con_lenght -->
                </div><!-- end row_item -->
            </div><!-- end container -->
        </div><!-- end header container -->
    </div><!-- end content info_content-->
</section>