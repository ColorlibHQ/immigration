<header id="header">
<div class="container">
    <div class="row header-top align-items-center">
        <?php 
        $text = immigration_opt( 'immigration_header_left_text', esc_html( 'We believe we helps people for happier lives' ) );

        if( $text ) {
            ?>
            <div class="col-lg-4 col-sm-4 menu-top-left">
                <span><?php echo esc_html( $text ) ?></span>
            </div>
            <?php
        }

        ?>
        <div class="col-lg-4 menu-top-middle justify-content-center d-flex">
            <?php 
            // Header Logo
            echo immigration_theme_logo();
            ?>                        
        </div>
        <?php 
        $phone = immigration_opt( 'immigration_header_phone', esc_html( '+880 123 12 658 439' ) );
        if( $phone ) {

            $attrNumber = str_replace(' ', '', $phone);

            ?>
            <div class="col-lg-4 col-sm-4 menu-top-right">
                <a class="tel" href="tel:<?php echo esc_attr( $attrNumber ) ?>"><?php echo esc_html( $phone ); ?></a>
                <a href="tel:<?php echo esc_attr( $attrNumber ) ?>"><span class="lnr lnr-phone-handset"></span></a>
            </div>

            <?php
        }
        ?>
    </div>
</div>  
    <hr>
<div class="container"> 
    <div class="row align-items-center justify-content-center d-flex">
      <nav id="nav-menu-container">
        <?php 
        //
        if( has_nav_menu( 'primary-menu' ) ) {
            $args = array(
                'theme_location' => 'primary-menu',
                'container'      => '',
                'depth'          => 2,
                'menu_class'     => 'nav-menu',
                'fallback_cb'    => 'immigration_bootstrap_navwalker::fallback',
                'walker'         => new immigration_bootstrap_navwalker(),
            );  
            wp_nav_menu( $args );
        }
        ?>
      </nav><!-- #nav-menu-container -->                    
    </div>
</div>
</header><!-- #header -->