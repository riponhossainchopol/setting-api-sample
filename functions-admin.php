<?php
function general_ripon(){
    add_settings_field('theme_options','enter your name','ripon_test','general');
    register_setting('general','theme_options');
}
add_action('admin_init','general_ripon');
function ripon_test(){
    echo '<input type="text" class="widefat" name="theme_options" value="'.get_option('theme_options').'" />';
}
//index.php
<?php echo get_option('theme_options')?>
