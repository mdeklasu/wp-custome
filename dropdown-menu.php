            <?php

                wp_nav_menu(array(
                    'theme_location'=>'primary',
                    'menu_class'=>'navbar-nav m-auto py-4',
                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'fallback_cb'     => 'main nav WP_Bootstrap_Navwalker::fallback',
                     'walker'          => new WP_Bootstrap_Navwalker(),
                   
                  

                ));

            ?>