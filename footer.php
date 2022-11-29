

  <footer class="bg-dark text-inverse">
    <div class="container py-13 py-md-15">
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-3">
          <?php
            if(is_active_sidebar('footer_widgets_one')){
              dynamic_sidebar( 'footer_widgets_one' );
            }
          ?>
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <?php
            if(is_active_sidebar('footer_widgets_two')){
              dynamic_sidebar( 'footer_widgets_two' );
            }
          ?>
        </div>
        
       
        <div class="col-md-4 col-lg-3">
          <?php
              if(is_active_sidebar('footer_widgets_three')){
                dynamic_sidebar( 'footer_widgets_three' );
              }
            ?>
        </div>
        <!-- /column -->
        <div class="col-md-12 col-lg-3">
          <?php
            if(is_active_sidebar('footer_widgets_four')){
              dynamic_sidebar( 'footer_widgets_four' );
            }
          ?>
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>
  


<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

<?php wp_footer(  );?>
</body>


<!-- Mirrored from sandbox.elemisthemes.com/demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 20:55:46 GMT -->

</html>