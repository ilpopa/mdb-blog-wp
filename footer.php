
<!--Footer-->
<footer class="page-footer light-blue accent-4 center-on-small-only">
       <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">
            <!--First column-->
            <div class="col-lg-3 col-md-6 ml-auto">
            <?php if ( is_active_sidebar( 'footer' ) ) : ?>
            <?php dynamic_sidebar( 'footer' ); ?>
            <?php endif; ?>
            </div>
            <!--/.First column-->

                <hr class="w-100 clearfix d-sm-none">

            <!--Second column-->
            <div class="col-lg-2 col-md-6 ml-auto">
                <h5 class="title mb-3">First column</h5>
                <?php
                wp_nav_menu( array(
                'menu'              => 'footer1',
                'theme_location'    => 'footer1',
                'depth'             => 1
                )
                );
                ?>
            </div>
            <!--/.Second column-->

            <hr class="hidden-md-up">

            <!--Third column-->
            <div class="col-lg-2 col-md-6 ml-auto">
                <h5 class="title mb-3">Second column</h5>
                <?php
                wp_nav_menu( array(
                'menu'              => 'footer2',
                'theme_location'    => 'footer2',
                'depth'             => 1
                )
                );
                ?>
            </div>
            <!--/.Third column-->

            <hr class="hidden-md-up">

            <!--Fourth column-->
            <div class="col-lg-2 col-md-6 ml-auto">
                <h5 class="title mb-3">Third column</h5>
                <?php
                wp_nav_menu( array(
                'menu'              => 'footer3',
                'theme_location'    => 'footer3',
                'depth'             => 1
                )
                );
                ?>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 Copyright: <a href="https://www.MDBootstrap.com"  rel="nofollow"> MDBootstrap.com </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
            
<?php wp_footer(); ?>
<script>
$("#mdb-navigation > ul > li").addClass("page-item")
$("#mdb-navigation > ul > li > a").addClass("page-link")
</script>
</body>
</html>     
                