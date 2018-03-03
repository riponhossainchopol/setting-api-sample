<?php
function add_field_in_setting_options(){
add_settings_section('theme_section','theme  options','dami_text','theme_slug');
    
    add_settings_field('general_setting','theme options','test_design','theme_slug','theme_section');
    register_setting('theme_section','general_setting');
    
    
    add_settings_field('wp_general','your company slogan','wp_callback','theme_slug','theme_section');
    register_setting('theme_section','wp_general');
}
add_action('admin_init','add_field_in_setting_options');
function dami_text(){
    echo ' ';
}
function test_design(){
echo'<input class="widefat" type="text" name="general_setting" value="'.get_option('general_setting').'">';
}
function wp_callback(){
    echo '<input type="text" class="widefat" name="wp_general" value="'.get_option('wp_general').'">';
}
//ADMIN MENU GENERAE
function add_menu_in_admin_panel(){
    add_menu_page('theme_options','theme option','manage_options','theme_slug','menu_design','',1);
}
add_action('admin_menu','add_menu_in_admin_panel');
function menu_design(){
    ?>
    <?php settings_errors()?>
    <form action="options.php" method="post">
    <?php
    do_settings_sections('theme_slug');
    settings_fields('theme_section');
    submit_button();
    ?>
    </form>
<?php
}
// OUTPUT
 <h1><?php echo get_option('general_setting')?></h1> 
  <h1><?php echo get_option('wp_general')?></h1> 
