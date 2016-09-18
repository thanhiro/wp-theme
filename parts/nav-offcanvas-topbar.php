<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="header-bar row">
    <div class="show-for-medium">
        <div class="large-4 medium-5 columns">
            <!-- <?php bloginfo('name'); ?> -->
            <a class="logo" href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/miasma_logo.png" alt="" />
            </a>
        </div>
        <div class="large-5 medium-7 columns">
            <ul class="menu">
                <li><a href="/category/artikkeli/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/articles_link.png" alt="" />
                    </a></li>
                <li><a href="/category/levyarvio/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews_link.png" alt="" />
                    </a></li>
                <li><a href="/category/raportti/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reports_link.png" alt="" />
                    </a></li>
            </ul>
        </div>
        <div class="large-3 columns hide-for-medium-only">
            <form role="search" method="get" class="search-form" action="/">
                <label>
                    <input type="search" class="search-field" placeholder="hae..." value="" name="s"
                        title="Search for:">
                </label>
            </form>
        </div>
    </div>
    <!--
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>
	</div>-->
    <div class="show-for-small-only mobile-logo">
        <a class="logo" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/miasma_logo.png" alt="" />
        </a>
    </div>
    <div class="top-bar-right float-right mobile-top-bar show-for-small-only">
        <ul class="burger-menu">
            <li>
                <button class="menu-icon" type="button" data-toggle="off-canvas"></button>
            </li>
        </ul>
    </div>
</div>
