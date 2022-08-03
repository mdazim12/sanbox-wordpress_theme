
 <?php get_header();?>

    <!-- /header -->
    <section class="wrapper bg-soft-primary">
      <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
       
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="blog classic-view mt-n17">

              
              <!-- /.post -->
              
              <!-- /.post -->
              
              <!-- /.post -->
            </div>
            <!-- /.blog -->
            <div class="blog grid grid-view">
              <div class="row isotope gx-md-8 gy-8 mb-8">


              <?php
                if(have_posts(  )){
                  while(have_posts(  )) : the_post(  );  ?>

                      <article class="item post col-md-6">
                  <div class="card">
                    <figure class="card-img-top overlay overlay-1 hover-scale"><a href="<?php the_permalink( );?>"> <?php the_post_thumbnail(  );?></a>
                      <figcaption>
                        <h5 class="from-top mb-0">Read More</h5>
                      </figcaption>
                    </figure>
                    <div class="card-body">
                      <div class="post-header">
                        <div class="post-category text-line">
                          <a href="#" class="hover" rel="category"><?php the_category( );?></a>
                        </div>
                        <!-- /.post-category -->
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="<?php the_permalink(  );?>"> <?php the_title( );?> </a></h2>
                      </div>
                      <div class="post-content">
                        <p> <?php echo wp_trim_words( get_the_content( ), 20, ' ');?> </p>
                      </div>
                      <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                      <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span> <?php the_date('d-M-y')?> </span></li>
                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>2</a></li>
                        <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li>
                      </ul>
                      <!-- /.post-meta -->
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </article>

              <?php  endwhile;
                }
              ?>
                
               
                <article class="item post col-md-6">
                  <div class="card">
                    <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="assets/img/photos/b7.jpg" alt="" /></a>
                      <figcaption>
                        <h5 class="from-top mb-0">Read More azim</h5>
                      </figcaption>
                    </figure>
                    <div class="card-body">
                      <div class="post-header">
                        <div class="post-category text-line">
                          <a href="#" class="hover" rel="category">Business Tips azim</a>
                        </div>
                        <!-- /.post-category -->
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="blog-post.html">Morbi leo risus porta eget</a></h2>
                      </div>
                      <div class="post-content">
                        <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor. Aenean lacinia bibendum nulla sed.</p>
                      </div>
                      <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                      <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Jan 2022</span></li>
                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>2</a></li>
                        <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li>
                      </ul>
                      <!-- /.post-meta -->
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </article>





                <!-- /.post -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.blog -->
            <nav class="d-flex" aria-label="pagination">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                  </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                  </a>
                </li>
              </ul>
              <!-- /.pagination -->
            </nav>
            <!-- /nav -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>

  <?php get_footer(  );?>