
 <?php get_header(  );?>


    <!-- /header -->
    <section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="<?php echo $blog_thub;?>">
      <div class="container pt-18 pb-15 pt-md-20 pb-md-19 text-center">
        <div class="row">
          <div class="col-md-10 col-xl-8 mx-auto">
            <div class="post-header">
              <div class="post-category text-line text-white">
                <a href="<?php the_permalink();?>" class="text-reset" rel="category"><?php the_category( ' ', ' ',);?></a>
              </div>
              <!-- /.post-category -->
              <h1 class="display-1 mb-4 text-white"><?php wp_title(" ");?></h1>
              <ul class="post-meta text-white">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span> <?php the_date( ); the_time( ); ?> </span></li>
                <li class="post-author"><i class="uil uil-user"></i><a href="<?php the_permalink( );?>" class="text-reset"><span> <?php the_author( );?> </span></a></li>
                <li class="post-comments"><i class="uil uil-comment"></i><a href="#" class="text-reset"><?php comments_number( );?><span> </span></a></li>
              </ul>
              <!-- /.post-meta -->
            </div>
            <!-- /.post-header -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12">
          <div class="col-lg-8">
            <div class="blog single">
              <div class="card">
                <figure class="card-img-top"> <?php echo $blog_thub=get_the_post_thumbnail(  );?> </figure>
                <div class="card-body">
                  <div class="classic-view">
                    <article class="post">
                      <div class="post-content mb-5">
                        <h2 class="h1 mb-4"><?php the_title(  );;?></h2>
                        <p><?php the_content(  );?></p>
                        
                        
                      </div>
                      <!-- /.post-content -->
                      <div class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
                      
                      <div>
                          <ul class="list-unstyled tag-list mb-0">
                           
                          <?php the_tags(" " ," ");?>
                          </ul>
                        </div>

                        <?php
                          if(has_tag()){ ?>
                            <div class="mb-0 mb-md-2">
                          <div class="dropdown share-dropdown btn-group">
                            <button class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="uil uil-share-alt"></i> Share </button>
                            <div class="dropdown-menu">
                            <a href="https://www.facebook.com/sharer?u=&lt;?php the_permalink();?&gt;&amp;t=&lt;?php the_title(); ?&gt;" target="_blank" rel="noopener noreferrer">
                              <i class="uil uil-twitter"></i>Facebook</a>
                              <a title="Click to share this post on Twitter" href="http://twitter.com/intent/tweet?text=Currently reading &lt;?php the_title(); ?&gt;&amp;url=&lt;?php the_permalink(); ?&gt;" target="_blank" rel="noopener noreferrer"><i class="uil uil-facebook-f"></i>Twitter</a>
                              <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=&lt;?php the_permalink() ?&gt;&amp;title=&lt;?php the_title(); ?&gt;&amp;summary=&amp;source=&lt;?php bloginfo('name'); ?&gt;" target="_new" rel="noopener noreferrer"><i class="uil uil-linkedin"></i>Linkedin</a>
                            </div>
                            <!--/.dropdown-menu -->
                          </div>
                          <!--/.share-dropdown -->
                        </div>
                        <?php  }
                          else{ ?>
                            <button id="share_btn"class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0 "  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="uil uil-share-alt"></i> Share </button>
                         <?php }
                        ?>
                        
                        



                      </div>
                      <!-- /.post-footer -->
                    </article>
                    <!-- /.post -->
                  </div>
                <hr />
                 
                  
                  
                  <!-- /.comment-form -->

                  <?php
                    comments_template(  );
                  ?>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.blog -->
          </div>
          <!-- /column -->
          <aside class="col-lg-4 sidebar mt-11 mt-lg-6">
            <div class="widget">
              <h4 class="widget-title mb-3">About Us</h4>
              <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.</p>
              <nav class="nav social">
                <a href="#"><i class="uil uil-twitter"></i></a>
                <a href="#"><i class="uil uil-facebook-f"></i></a>
                <a href="#"><i class="uil uil-dribbble"></i></a>
                <a href="#"><i class="uil uil-instagram"></i></a>
                <a href="#"><i class="uil uil-youtube"></i></a>
              </nav>
              <!-- /.social -->
            </div>
            <!-- /.widget -->
            <div class="widget">
              <h4 class="widget-title mb-3">Popular Posts</h4>
              <ul class="image-list">
                <li>
                  <figure class="rounded"><a href="blog-post.html"><img src="assets/img/photos/a1.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="mb-2"> <a class="link-dark" href="blog-post.html">Magna Mollis Ultricies</a> </h6>
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Mar 2022</span></li>
                      <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                </li>
                <li>
                  <figure class="rounded"> <a href="blog-post.html"><img src="assets/img/photos/a2.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="mb-2"> <a class="link-dark" href="blog-post.html">Ornare Nullam Risus</a> </h6>
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16 Feb 2022</span></li>
                      <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>6</a></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                </li>
                <li>
                  <figure class="rounded"><a href="blog-post.html"><img src="assets/img/photos/a3.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="mb-2"> <a class="link-dark" href="blog-post.html">Euismod Nullam Fusce</a> </h6>
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>8 Jan 2022</span></li>
                      <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>5</a></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                </li>
              </ul>
              <!-- /.image-list -->
            </div>
            <!-- /.widget -->
            <div class="widget">
              <h4 class="widget-title mb-3">Categories</h4>
              <ul class="unordered-list bullet-primary text-reset">
                <li><a href="#">Teamwork (21)</a></li>
                <li><a href="#">Ideas (19)</a></li>
                <li><a href="#">Workspace (16)</a></li>
                <li><a href="#">Coding (7)</a></li>
                <li><a href="#">Meeting (12)</a></li>
                <li><a href="#">Business Tips (14)</a></li>
              </ul>
            </div>
            <!-- /.widget -->
            <div class="widget">
              <h4 class="widget-title mb-3">Tags</h4>
              <ul class="list-unstyled tag-list">
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Still Life</a></li>
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Urban</a></li>
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Nature</a></li>
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Landscape</a></li>
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Macro</a></li>
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Fun</a></li>
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Workshop</a></li>
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Photography</a></li>
              </ul>
            </div>
            <!-- /.widget -->
            <div class="widget">
              <h4 class="widget-title mb-3">Archive</h4>
              <ul class="unordered-list bullet-primary text-reset">
                <li><a href="#">February 2019</a></li>
                <li><a href="#">January 2019</a></li>
                <li><a href="#">December 2018</a></li>
                <li><a href="#">November 2018</a></li>
                <li><a href="#">October 2018</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </aside>
          <!-- /column .sidebar -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php get_footer(  );?>