<?php get_header(  );?>







<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-15 pt-md-14 pb-md-20">
      <div class="row gx-lg-8 gx-xl-12 gy-10 mb-5 align-items-center">
        <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start order-2 order-lg-0" data-cues="slideInDown" data-group="page-title" data-delay="600">
          <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0">Creative. Smart. Awesome.</h1>
          <p class="lead fs-lg mb-7">We specialize in web, mobile and identity design. We love to turn ideas into beautiful things.</p>
          <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
            <span><a class="btn btn-primary rounded me-2">See Projects</a></span>
            <span><a class="btn btn-yellow rounded">Learn More</a></span>
          </div>
        </div>
        <!-- /column -->
        <div class="col-lg-7" data-cue="slideInDown">
        <figure><img class="w-auto" src="<?php echo get_template_directory_uri();?>. /assets/img/illustrations/i6.png" srcset="<?php echo get_template_directory_uri();?> /assets/img/illustrations/i6.png 2x" alt="" /></figure>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper bg-light">
    <div class="container pt-14 pt-md-16 pb-9 pb-md-11 pb-md-17">
      <div class="row gx-md-5 gy-5 mt-n18 mt-md-n21 mb-14 mb-md-17">

      <?php
       $services_query = new WP_Query(array(
          'post_type'     =>'san_services',
          'post_per_page' =>-1,
          'order'         =>'DSC'
       ));
      ?>
    
           <?php if($services_query->have_posts(  )){
              while($services_query->have_posts(  )) : $services_query->the_post(  ); ?>

            <div class="col-md-6 col-xl-3">
              <div class="card shadow-lg">
                <div class="card-body">
                

                  <?php the_post_thumbnail( 'thumb', array( 'class' => 'svg-inject icon-svg icon-svg-md text-yellow mb-3' )) ;?> 
                    <h4><?php the_title( );?></h4>
                    <p class="mb-2"><?php the_content( );?></p>
                    <a href="#" class="more hover link-yellow">Learn More</a>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>

            <?php  
              endwhile;
              }
            ?>

      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->



  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row gx-md-8 gy-10 align-items-center">
        <div class="col-lg-6 offset-lg-1 order-lg-2 position-relative">
          <figure class="rounded"><img class="img-fluid" src="<?php echo get_template_directory_uri();?>./assets/img/photos/about27.jpg" srcset="./assets/img/photos/about27@2x.jpg 2x" alt="" /></figure>
          <div class="card shadow-lg position-absolute d-none d-md-block" style="top: 15%; left: -7%">
            <div class="card-body py-4 px-5">
              <div class="d-flex flex-row align-items-center">
                <div>
                  <img src="<?php echo get_template_directory_uri();?>./assets/img/icons/solid/cloud-group.svg" class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-3" alt="" />
                  
                </div>
                <div>
                  <h3 class="fs-25 counter mb-0 text-nowrap">25000+</h3>
                  <p class="fs-16 lh-sm mb-0 text-nowrap">Happy Clients</p>
                </div>
              </div>
            </div>
            <!--/.card-body -->
          </div>
          <!--/.card -->
          <div class="card shadow-lg position-absolute text-center d-none d-md-block" style="bottom: 10%; left: -10%;">
            <div class="card-body p-6">
              <div class="progressbar semi-circle fuchsia mb-3" data-value="80"></div>
              <h4 class="mb-0">Time Saved</h4>
            </div>
            <!--/.card-body -->
          </div>
          <!--/.card -->
        </div>
        <!--/column -->
        <div class="col-lg-5">
          <h2 class="fs-16 text-uppercase text-gradient gradient-1 mb-3">What Makes Us Different?</h2>
          <h3 class="display-4 mb-4 me-lg-n5">We make spending stress free so you have the perfect control.</h3>
          <p class="mb-6">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus. Integer posuere erat a ante venenatis dapibus posuere velit.</p>
          <ul class="icon-list bullet-bg bullet-soft-primary">
            <li><i class="uil uil-check"></i>Aenean eu leo quam. Pellentesque ornare.</li>
            <li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis ornare.</li>
            <li><i class="uil uil-check"></i>Donec id elit non mi porta gravida at eget.</li>
          </ul>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->








  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
        <div class="col-lg-4 mt-lg-2">
          <h2 class="fs-15 text-uppercase text-muted mb-3">Our Clients</h2>
          <h3 class="display-4 mb-3 pe-xxl-5">Trusted by over 300+ clients</h3>
          <p class="lead fs-lg mb-0 pe-xxl-5">We bring solutions to make life easier for our customers.</p>
        </div>
        <!-- /column -->
        <div class="col-lg-8">
          <div class="row row-cols-2 row-cols-md-4 gx-0 gx-md-8 gx-xl-12 gy-12">

          <?php
           $san_clients = new WP_Query(array(
              'post_type'     =>'san_client',
              'post_per_page' =>-1,
              'order'         =>'DSC',
           ));
          ?>


          <?php
            if($san_clients->have_posts()){
              while($san_clients->have_posts()) : $san_clients->the_post(); ?>

              <div class="col">
               <figure class="px-3 px-md-0 px-xxl-2"><?php the_post_thumbnail( );?></figure>
            </div>

            <?php
            endwhile;
            }
          ?>
           
            <!--/column -->
          </div>
          <!--/.row -->
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
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-lg-7">
          <figure><img class="w-auto" src="<?php echo get_template_directory_uri();?>./assets/img/illustrations/i3.png" srcset="./assets/img/illustrations/i3@2x.png 2x" alt="" /></figure>
        </div>
        <!--/column -->
        <div class="col-lg-5">
          <h2 class="fs-15 text-uppercase text-line text-primary mb-3">How It Works?</h2>
          <h3 class="display-5 mb-7 pe-xxl-5">Everything you need on creating a business process.</h3>
          <div class="d-flex flex-row mb-4">
            <div>
              <img src="<?php echo get_template_directory_uri();?>./assets/img/icons/lineal/light-bulb.svg" class="svg-inject icon-svg icon-svg-sm text-primary me-4" alt="" />
            </div>
            <div>
              <h4 class="mb-1">Collect Ideas</h4>
              <p class="mb-1">Nulla vitae elit libero pharetra augue dapibus.</p>
            </div>
          </div>
          <div class="d-flex flex-row mb-4">
            <div>
              <img src="./assets/img/icons/lineal/pie-chart-2.svg" class="svg-inject icon-svg icon-svg-sm text-green me-4" alt="" />
            </div>
            <div>
              <h4 class="mb-1">Data Analysis</h4>
              <p class="mb-1">Vivamus sagittis lacus augue laoreet vel.</p>
            </div>
          </div>
          <div class="d-flex flex-row">
            <div>
              <img src="<?php echo get_template_directory_uri();?>./assets/img/icons/lineal/design.svg" class="svg-inject icon-svg icon-svg-sm text-yellow me-4" alt="" />
            </div>
            <div>
              <h4 class="mb-1">Magic Touch</h4>
              <p class="mb-0">Cras mattis consectetur purus sit amet.</p>
            </div>
          </div>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->



  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-lg-4">
          <h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3">Meet the Team</h2>
          <h3 class="display-5 mb-5">Save your time and money by choosing our professional team.</h3>
          <p>Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros tempus porttitor.</p>
          <a href="#" class="btn btn-primary rounded-pill mt-3">See All Members</a>
        </div>
        <!--/column -->
        <div class="col-lg-8">
          <div class="swiper-container text-center mb-6" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
            <div class="swiper">
              <div class="swiper-wrapper">

              <?php
                $team_query = new WP_Query(array(
                  'post_type'     =>'san_team',
                  'post_order'    =>'DSC',
                  'post_per_page' =>-1,
                ));
              ?>
               

              <?php
                if( $team_query->have_posts(  )){
                  while( $team_query->have_posts(  )) :  $team_query->the_post(  ); 
                  $team_role  = get_post_meta( get_the_ID(),'san_team_role', true );
                  $team_fb  = get_post_meta( get_the_ID(),'san_tean_facebook', true );
                  $team_twi  = get_post_meta( get_the_ID(),'san_team_twitter', true );
                  $team_linkdin  = get_post_meta( get_the_ID(),'san_team_linkdin', true );
                  ?>

                <div class="swiper-slide">
                <?php the_post_thumbnail('blog-thumb', array( 'class' => 'rounded-circle w-20 mx-auto mb-4' ));?>
                  <h4 class="mb-1"><?php the_title();?></h4>
                  <div class="meta mb-2"><?php echo $team_role; ?></div>
                  <p class="mb-2"> <?php echo wp_trim_words( get_the_content(), 20, '' )?> </p>
                  <nav class="nav social justify-content-center text-center mb-0">
                    <a href="<?php echo $team_fb ;?>"><i class="uil uil-youtube"></i></a>
                    <a href="<?php echo $team_twi ;?>"><i class="uil uil-facebook-f"></i></a>
                    <a href="<?php echo $team_linkdin ;?>"><i class="uil uil-dribbble"></i></a>
                  </nav>
                  <!-- /.social -->
                </div>
                <!--/.swiper-slide -->

              <?php   endwhile;
                }
              
              ?>
                
               


               
               
               
              </div>
              <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
          </div>
          <!-- /.swiper-container -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->


  
  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row">
        <div class="col-lg-11 col-xl-10 mx-auto mb-10">
          <h2 class="fs-16 text-uppercase text-muted text-center mb-3">Our Projects</h2>
          <h3 class="display-3 text-center px-lg-5 px-xl-10 px-xxl-16 mb-0">Check out some of our awesome projects with creative ideas and great design.</h3>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="grid grid-view projects-masonry">
        <div class="row gx-md-8 gy-10 gy-md-13 isotope">


        <?php
          $project_query= new WP_Query(array(
              'post_type'         =>'san_project',
              'post_per_page'     =>-1,
              'order'             =>'DSC',
          ));
        ?>

        <?php
          if($project_query->have_posts(  )){
            while($project_query->have_posts(  )) : $project_query->the_post(  ); ?>

          <div class="project item col-md-6 col-xl-4">
            <figure class="rounded mb-6"><?php the_post_thumbnail();?><a class="item-link" href="<?php get_the_post_thumbnail(  );?>" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <h2 class="post-title h3 fs-22"><a href="./single-project.html" class="link-dark"><?php the_title();?></a></h2>
                <div class="post-category text-ash">
                  <?php
                    $category = get_the_terms(get_the_ID(),'portfolio_taxonomy' );
                    foreach($category as $categorys){
                      $port_category = $categorys->name;
                      $link = get_term_link( $categorys,'portfolio_taxonomy' );
                      echo '<a href="'.$link.'">'.$port_category.'</a> ';
                    }
                  
                  ?>
                </div>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.item -->

        <?php  endwhile;
          }
        ?>

          
        </div>
        <!-- /.row -->
      </div>
      <!-- /.grid -->
      <div class="text-center mt-10">
        <a href="#" class="btn btn-lg btn-primary rounded-pill">Start a Project</a>
      </div>
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->



  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <h2 class="display-5 mb-7 text-center">Our Pricing</h2>
      <div class="pricing-wrapper">
        <div class="pricing-switcher-wrapper switcher">
          <p class="mb-0 pe-3">Monthly</p>
          <div class="pricing-switchers">
            <div class="pricing-switcher pricing-switcher-active"></div>
            <div class="pricing-switcher"></div>
            <div class="switcher-button bg-primary"></div>
          </div>
          <p class="mb-0 ps-3">Yearly <span class="text-red">(Save 30%)</span></p>
        </div>
        <div class="row gx-0 gy-6 mt-2">

        <?php
          $san_price = new WP_Query(array(
            'post_type'   =>'san_price',
            'post_per_page'=>-1,
            'post_order'   =>'ASC'
          ));
        ?>

        <?php
         if($san_price->have_posts(  )){
            while($san_price->have_posts(  )) : $san_price->the_post(  ); 
            $san_team_price = get_post_meta( get_the_ID(),'san_team_price', true );
            $san_team_price_year = get_post_meta( get_the_ID(),'san_team_price_year', true );
            $san_price_num_project = get_post_meta( get_the_ID(),'san_price_num_project', true );
            $san_price_num_api = get_post_meta( get_the_ID(),'san_price_num_api', true );
            $san_price_num_mb = get_post_meta( get_the_ID(),'san_price_num_mb', true );
            $san_price_num_supports = get_post_meta( get_the_ID(),'san_price_num_supports', true );


            ?>
          
          <div class="col-md-6 col-lg-3">
            <div class="pricing card shadow-none">
              <div class="card-body">
                <div class="icon btn btn-circle btn-lg btn-soft-primary disabled"> <i class="uil uil-shopping-bag"></i> </div>
                <h4 class="card-title"> <?php the_title();?> </h4>
                <div class="prices text-dark">
                  <div class="price price-show justify-content-start"><span class="price-currency">$</span><span class="price-value"><?php echo $san_team_price;?></span> <span class="price-duration">mo</span></div>
                  <div class="price price-hide price-hidden justify-content-start"><span class="price-currency">$</span><span class="price-value"><?php echo $san_team_price_year;?></span> <span class="price-duration">yr</span></div>
                </div>
                <!--/.prices -->
                <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8">
                  <li><i class="uil uil-check"></i><span><strong><?php echo $san_price_num_project;?></strong> Project </span></li>
                  <li><i class="uil uil-check"></i><span><strong><?php echo  $san_price_num_api;?></strong> API Access </span></li>
                  <li><i class="uil uil-check"></i><span><strong><?php echo  $san_price_num_mb; ?></strong> Storage </span></li>
                  <li><i class="uil uil-times bullet-soft-red"></i><span> Weekly <strong>Reports</strong> </span></li>
                  <li><i class="uil uil-times bullet-soft-red"></i><span> <?php echo $san_price_num_supports;?> <strong>Support</strong></span></li>
                </ul>
                <a href="#" class="btn btn-soft-primary rounded-pill">Choose Plan</a>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.pricing -->
          </div>
          <!--/column -->

         <?php   endwhile;
         }
        ?>

        </div>
        <!--/.row -->
      </div>
      <!--/.pricing-wrapper -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->


            

          



<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <h2 class="display-4 mb-3 text-center">Pricing FAQ</h2>
    <p class="lead text-center mb-10 px-md-16 px-lg-0">If you don't see an answer to your question, you can send us an email from our contact form.</p>
    <div class="row">

       <?php
           $FAQ_query = new WP_Query(array(
              'post_type'     =>'FAQ_client',
              'post_per_page' =>-1,
              'order'         =>'DSC',
            ));

          ?>

    <?php
      if($FAQ_query->have_posts(  )){
        while($FAQ_query->have_posts(  )) : $FAQ_query->the_post(  ); ?>
      <div class="col-lg-6 mb-0">
        <div id="accordion-<?php $i =1; $i++; echo $i;?>" class="accordion-wrapper">
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-1-<?php $i =1; $i++; echo $i;?>">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="false" aria-controls="accordion-collapse-1-1 ?>"><?php the_title( );?></button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-<?php $i =1; $i++; echo $i;?>" class="collapse" aria-labelledby="accordion-heading-1-<?php $i =1; $i++; echo $i;?>" data-bs-target="#accordion1-<?php $i =1; $i++; echo $i;?>">
              <div class="card-body">
                <p><?php the_content(  );?></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
        </div>
        <!-- /.accordion-wrapper -->
      </div>
     <?php endwhile;
      }
    ?>

      
      <!--/column -->

      <div class="col-lg-6 mb-0">
        <div id="accordion-1" class="accordion-wrapper">
          <div class="card accordion-item">
            <div class="card-header" id="accordion-heading-1-1">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="false" aria-controls="accordion-collapse-1-1">Can I cancel my subscription?</button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-2" class="collapse" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
              <div class="card-body">
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
          </div>
        </div>
        <!-- /

      



      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->








  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <h2 class="display-4 mb-3 text-center">Happy Customers</h2>
      <p class="lead text-center mb-6 px-md-16 px-lg-0">Customer satisfaction is our major goal. See what our customers are saying about us.</p>
      <div class="position-relative">
        <div class="shape rounded-circle bg-soft-yellow rellax w-16 h-16" data-rellax-speed="1" style="bottom: 0.5rem; right: -1.7rem;"></div>
        <div class="shape bg-dot primary rellax w-16 h-16" data-rellax-speed="1" style="top: -1rem; left: -1.7rem;"></div>
        <div class="swiper-container dots-closer mb-6" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
          <div class="swiper">
            <div class="swiper-wrapper">

        <?php
          $test_query = new WP_Query(array(
            'post_type'     =>'san_testi',
            'post_per_page' =>-1,
            'post_order'    =>'ASC',
          ));
        ?>

        <?php
          if($test_query->have_posts(  )){
            while($test_query->have_posts(  )) : $test_query->the_post(  ); 
             $pro = get_post_meta( get_the_ID(),'san_testi_pro', true );
            ?>

              <div class="swiper-slide">
                <div class="item-inner">
                  <div class="card">
                    <div class="card-body">
                      <blockquote class="icon mb-0">
                        <p><?php echo wp_trim_words(get_the_content(),10, ' ' );?></p>
                        <div class="blockquote-details">
                        <?php the_post_thumbnail('blog-thumb', array( 'class' => 'rounded-circle w-12' ));?>
                          <div class="info">
                            <h5 class="mb-1"><?php the_title();?></h5>
                            <p class="mb-0">Financial Analyst</p>
                          </div>
                        </div>
                      </blockquote>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.item-inner -->
              </div>
              <!--/.swiper-slide -->

         <?php endwhile;
          }
        ?>



             
              
              
              


              

             


            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
      </div>
      <!-- /.position-relative -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->


  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row">
        <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
          <h2 class="fs-15 text-uppercase text-primary text-center">Our News</h2>
          <h3 class="display-4 mb-6 text-center">Here are the latest company news from our blog that got the most attention.</h3>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="position-relative">
        <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1" style="top: 0; left: -1.7rem;"></div>
        <div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
          <div class="swiper">
            <div class="swiper-wrapper">
        
        <?php 
          if(have_posts(  )){
            while(have_posts(  )) : the_post(  ); ?>
                <div class="swiper-slide">
                <div class="item-inner">
                  <article>
                    <div class="card">
                      <figure class="card-img-top overlay overlay-1 hover-scale"><a href="<?php the_permalink( );?>"> <?php the_post_thumbnail( );?></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Read More</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body">
                        <div class="post-header">
                          <div class="post-category text-line">
                            <a href="#" class="hover" rel="category"><?php the_category(" " );?></a>
                          </div>
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="<?php the_permalink(  );?>"><?php the_title(  );?></a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                          <p><?php echo wp_trim_words( get_the_content(), 20, '' )?></p>
                        </div>
                        <!-- /.post-content -->
                      </div>
                      <!--/.card-body -->
                      <div class="card-footer">
                        <ul class="post-meta d-flex mb-0">
                          <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?php the_date('d-M-y' ); ?></span></li>
                         
                        </ul>
                        <!-- /.post-meta -->
                      </div>
                      <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!-- /.item-inner -->
              </div>
        <?php  endwhile;
          }
        ?>
            



             




              <!--/.swiper-slide -->
            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
      </div>
      <!-- /.position-relative -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->



  
  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16 text-center">
      <div class="row">
        <div class="col-md-9 col-lg-7 col-xl-7 mx-auto text-center">
          <img src="<?php echo get_template_directory_uri();?>./assets/img/icons/lineal/puzzle-2.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
          <h2 class="display-4 mb-3">Join Our Community</h2>
          <p class="lead fs-lg mb-6 px-xl-10 px-xxl-15">We are trusted by over 5000+ clients. Join them by using our services and grow your business.</p>
          <a href="#" class="btn btn-primary rounded">Join Us</a>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

  <?php get_footer(  );?>