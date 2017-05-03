<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux_Framework_ta_config' ) ) {

        class Redux_Framework_ta_config {

            public $args = array();
            public $sections = array();
            public $theme;
            public $ReduxFramework;

            public function __construct() {

                if ( ! class_exists( 'ReduxFramework' ) ) {
                    return;
                }

                // This is needed. Bah WordPress bugs.  ;)
                if ( true == Redux_Helpers::isTheme( __FILE__ ) ) {
                    $this->initSettings();
                } else {
                    add_action( 'plugins_loaded', array( $this, 'initSettings' ), 10 );
                }

            }

            public function initSettings() {

                // Set the default arguments
                $this->setArguments();

                // Create the sections and fields
                $this->setSections();

                if ( ! isset( $this->args['opt_name'] ) ) { // No errors please
                    return;
                }

                $this->ReduxFramework = new ReduxFramework( $this->sections, $this->args );
            }

            /**
             * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
             * Simply include this function in the child themes functions.php file.
             * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
             * so you must use get_template_directory_uri() if you want to use any of the built in icons
             * */
            function dynamic_section( $sections ) {
                //$sections = array();
                $sections[] = array(
                    'title'  => __( 'Section via hook', 'ta-dailyblog' ),
                    'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'ta-dailyblog' ),
                    'icon'   => 'el el-paper-clip',
                    // Leave this as a blank section, no options just some intro text set above.
                    'fields' => array()
                );

                return $sections;
            }

            /**
             * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
             * */
            function change_arguments( $args ) {
                //$args['dev_mode'] = true;

                return $args;
            }

            /**
             * Filter hook for filtering the default value of any given field. Very useful in development mode.
             * */
            function change_defaults( $defaults ) {
                $defaults['str_replace'] = 'Testing filter hook!';

                return $defaults;
            }

            public function setSections() {

				//Theme Style Sheets 
                $styles = array(
                    'cerulean.css'  => 'Cerulean', 
                    'cosmo.css'     => 'Cosmo', 
                    'cyborg.css'    => 'Cyborg',
                    'darkly.css'    => 'Darkly',
                    'flatly.css'    => 'Flatly', 
                    'journal.css'   => 'Journal', 
                    'lumen.css'     => 'Lumen', 
                    'paper.css'     => 'Paper',
                    'readable.css'  => 'Readable',
                    'sandstone.css' => 'Sandstone', 
                    'simplex.css'   => 'Simplex', 
                    'slate.css'     => 'Slate', 
                    'spacelab.css'  => 'Spacelab', 
                    'superhero.css' => 'Superhero', 
                    'united.css'    => 'United', 
                    'yeti.css'      => 'Yeti'
                );

				// Bootstrap Button Colors
                $btn_color = array(
                    "default"   => "Default",
                    "primary"   => "Blue",
                    "info"      => "Light Blue",
                    "success"   => "Green",
                    "warning"   => "Orange",
                    "danger"    => "Red",
                    "link"      => "None"
                );

                // Bootstrap Button Size
                $btn_size = array(
                    "xs"        => "Extra Small",
                    "sm"        => "Small",
                    "default"   => "Medium",
                    "lg"        => "Large"
                );

				// Array of social options
                $social_options = array(
                    'Twitter'       => 'Twitter',
                    'Facebook'      => 'Facebook',
                    'Google Plus'   => 'Google Plus',
                    'Instagram'     => 'Instagram',
                    'LinkedIn'      => 'LinkedIn',
                    'Tumblr'        => 'Tumblr',
                    'Pinterest'     => 'Pinterest',
                    'Dribbble'      => 'Dribbble',
                    'Flickr'        => 'Flickr',
					'DeviantArt'    => 'DeviantArt',
                    'Skype'         => 'Skype',
                    'YouTube'       => 'YouTube',
                    'Vimeo'         => 'Vimeo',
                    'GitHub'        => 'GitHub',
                    'RSS'           => 'RSS',
					'SoundCloud'    => 'SoundCloud',
                );

                // Background Patterns Reader
                $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
                $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
                $sample_patterns      = array();

                if ( is_dir( $sample_patterns_path ) ) :

                    if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) :
                        $sample_patterns = array();

                        while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                            if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                                $name              = explode( '.', $sample_patterns_file );
                                $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                                $sample_patterns[] = array(
                                    'alt' => $name,
                                    'img' => $sample_patterns_url . $sample_patterns_file
                                );
                            }
                        }
                    endif;
                endif;

                ob_start();

                $ct          = wp_get_theme();
                $this->theme = $ct;
                $item_name   = $this->theme->get( 'Name' );
                $tags        = $this->theme->Tags;
                $screenshot  = $this->theme->get_screenshot();
                $class       = $screenshot ? 'has-screenshot' : '';

                $customize_title = sprintf( __( 'Customize &#8220;%s&#8221;', 'ta-dailyblog' ), $this->theme->display( 'Name' ) );

                ?>
                <div id="current-theme" class="<?php echo esc_attr( $class ); ?>">
                    <?php if ( $screenshot ) : ?>
                        <?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
                            <a href="<?php echo wp_customize_url(); ?>" class="load-customize hide-if-no-customize"
                               title="<?php echo esc_attr( $customize_title ); ?>">
                                <img src="<?php echo esc_url( $screenshot ); ?>"
                                     alt="<?php esc_attr_e( 'Current theme preview', 'ta-dailyblog' ); ?>"/>
                            </a>
                        <?php endif; ?>
                        <img class="hide-if-customize" src="<?php echo esc_url( $screenshot ); ?>"
                             alt="<?php esc_attr_e( 'Current theme preview', 'ta-dailyblog' ); ?>"/>
                    <?php endif; ?>

                    <h4><?php echo $this->theme->display( 'Name' ); ?></h4>

                    <div>
                        <ul class="theme-info">
                            <li><?php printf( __( 'By %s', 'ta-dailyblog' ), $this->theme->display( 'Author' ) ); ?></li>
                            <li><?php printf( __( 'Version %s', 'ta-dailyblog' ), $this->theme->display( 'Version' ) ); ?></li>
                            <li><?php echo '<strong>' . __( 'Tags', 'ta-dailyblog' ) . ':</strong> '; ?><?php printf( $this->theme->display( 'Tags' ) ); ?></li>
                        </ul>
                        <p class="theme-description"><?php echo $this->theme->display( 'Description' ); ?></p>
                        <?php
                            if ( $this->theme->parent() ) {
                                printf( ' <p class="howto">' . __( 'This <a href="%1$s">child theme</a> requires its parent theme, %2$s.', 'ta-dailyblog' ) . '</p>', __( 'http://codex.wordpress.org/Child_Themes', 'ta-dailyblog' ), $this->theme->parent()->display( 'Name' ) );
                            }
                        ?>

                    </div>
                </div>

                <?php
                $item_info = ob_get_contents();

                ob_end_clean();

				//Blog Setting
                $this->sections[] = array(
                    'icon'      => 'el el-wordpress',
                    'title'     => __('Blog Settings', 'ta-dailyblog'),
                    'fields'    => array(
						array( 
							'title'     => __( 'Display Meta Data', 'ta-dailyblog' ),
							'subtitle'  => __( 'Select to enable/disable the date and author.', 'ta-dailyblog' ),
							'id'        => 'disable_meta',
							'default'   => true,
							'on'        => __( 'Enable', 'ta-dailyblog' ),
							'off'       => __( 'Disable', 'ta-dailyblog' ),
							'type'      => 'switch',
						),

						array(  
                            'title'     => __( 'Read More Button Text', 'ta-dailyblog' ),
                            'subtitle'  => __( 'This is the text that will replace Read More.', 'ta-dailyblog' ),
                            'id'        => 'read_more_text',
                            'default'   => 'Read More',
                            'type'      => 'text',
                        ),

                        array( 
                            'title'     => __( 'Make the "Read More" button full width - Block', 'ta-dailyblog' ),
                            'subtitle'  => __( 'Enable/Disable full width button.', 'ta-dailyblog' ),
                            'id'        => 'read_more_block',
                            'default'   => false,
                            'on'        => __( 'Enable', 'ta-dailyblog' ),
                            'off'       => __( 'Disable', 'ta-dailyblog' ),
                            'type'      => 'switch',
                        ),

                        array( 
                            'title'     => __( 'Read More Button Size', 'ta-dailyblog' ),
                            'subtitle'  => __( 'Select the Bootstrap button size you want.', 'ta-dailyblog' ),
                            'id'        => 'read_more_size',
                            'default'   => 'default',
                            'type'      => 'select',
                            'options'   => $btn_size,
                        ),

                        array( 
                            'title'     => __( 'Read More Button Color', 'ta-dailyblog' ),
                            'subtitle'  => __( 'Select the Bootstrap button color you want.', 'ta-dailyblog' ),
                            'id'        => 'read_more_color',
                            'default'   => 'default',
                            'type'      => 'select',
                            'options'   => $btn_color,
                        ),

                        array( 
                            'title'     => __( 'Author Info Box', 'ta-dailyblog' ),
                            'subtitle'  => __( 'Select to enable/disable author info box under each Post.', 'ta-dailyblog' ),
                            'id'        => 'enable_disable_author_box',
                            'default'   => true,
                            'on'        => __( 'Enable', 'ta-dailyblog' ),
                            'off'       => __( 'Disable', 'ta-dailyblog' ),
                            'type'      => 'switch',
                        ),

                        array( 
                            'title'     => __( 'Display Tags', 'ta-dailyblog' ),
                            'subtitle'  => __( 'Select to enable/disable the post tags.', 'ta-dailyblog' ),
                            'id'        => 'enable_disable_tags',
                            'default'   => true,
                            'on'        => __( 'Enable', 'ta-dailyblog' ),
                            'off'       => __( 'Disable', 'ta-dailyblog' ),
                            'type'      => 'switch',
                        ),
                    )
                );

				//Color Schemes
                $this->sections[] = array(
                    'icon'      => 'el el-livejournal',
                    'title'     => __('Color Schemes', 'ta-dailyblog'),
                    'fields'    => array(
                        array(   
							'type'      => 'select',
							'id'        => 'css_style',
							'title'     => __('Theme Style Sheets', 'ta-dailyblog'), 
							'subtitle'  => __('Select your themes alternative color schemes.', 'ta-dailyblog'),
							'default'   => 'lumen.css',
							'options'   => $styles,
                        ),
                    )
                );

				// Header Settings
                $this->sections[] = array(
                    'icon'      => 'el el-website',
                    'title'     => __('Header Settings', 'ta-dailyblog'),
                    'fields'    => array(
                        array( 
                            'title'     => __( 'Fixed Navbar', 'ta-dailyblog' ),
                            'subtitle'  => __( 'Select to enable/disable a fixed navbar.', 'ta-dailyblog' ),
                            'id'        => 'disable_fixed_navbar',
                            'default'   => false,
                            'on'        => __( 'Enable', 'ta-dailyblog' ),
                            'off'       => __( 'Disable', 'ta-dailyblog' ),
                            'type'      => 'switch',
                        ),

                        array( 
                            'title'     => __( 'Inverse Navbar', 'ta-dailyblog' ),
                            'subtitle'  => __( 'Select to enable/disable an inverse navbar color.', 'ta-dailyblog' ),
                            'id'        => "disable_inverse_navbar",
                            'default'   => false,
                            'on'        => __( 'Enable', 'ta-dailyblog' ),
                            'off'       => __( 'Disable', 'ta-dailyblog' ),
                            'type'      => 'switch',
                        ),

						array( 
                            'title'     => __( 'Logo', 'ta-dailyblog' ),
                            'subtitle'  => __( 'Use this field to upload your custom logo for use in the theme header. (Max height: 40px)', 'ta-dailyblog' ),
                            'id'        => 'custom_logo',
                            'default'   => '',
                            'type'      => 'media',
                            'url'       => true,
                        ),

						array( 
                            'title'     => __( 'Favicon', 'ta-dailyblog' ),
                            'subtitle'  => __( 'Use this field to upload your custom favicon.', 'ta-dailyblog' ),
                            'id'        => 'custom_favicon',
                            'default'   => '',
                            'type'      => 'media',
                            'url'       => true,
                        ),
                    )
                );

				//Social Settings
                $this->sections[] = array(
                    'icon'      => 'el el-torso',
                    'title'     => __('Social Settings', 'ta-dailyblog'),
                    'fields'    => array(
                        array( 
                            'title'     => __( 'Social Icons', 'ta-dailyblog' ),
                            'subtitle'  => __( 'Arrange your social icons. Add complete URLs to your social profiles.', 'ta-dailyblog' ),
                            'id'        => 'social_icons',
                            'type'      => 'sortable',
                            'options'   => $social_options,
                        ),
                    )
                );

				//Footer Settings
                $this->sections[] = array(
                    'icon'      => 'el el-photo',
                    'title'     => __('Footer Settings', 'ta-dailyblog'),
                    'fields'    => array(
                        array( 
                            'title'     => __( 'Custom Copyright', 'ta-dailyblog' ),
                            'subtitle'  => __( 'Add your own custom text/html for copyright region. You are <strong style="color:red;">not allowed</strong> to Remove Back Link/Credit unless you <a href="http://themeart.co/support-themeart/" target="_blank">donated us</a>.', 'ta-dailyblog' ),
                            'id'        => 'custom_copyright',
                            'default'   => 'Copyright &copy; 2015 - <a href="http://themeart.co/free-theme/ta-dailyblog/" title="TA DailyBlog Free WordPress Theme" target="_blank">TA DailyBlog</a>. Design and Developed by <a href="http://themeart.co/" title="Download Free Premium WordPress Themes" target="_blank">ThemeArt</a>.',
                            'type'      => 'editor',
                        ),
                    )
                );

				//Custom CSS
                $this->sections[] = array(
                    'icon'      => 'el el-css',
                    'title'     => __('Custom CSS', 'ta-dailyblog'),
                    'fields'    => array(
                        array(
                            'title'     => __( 'Custom CSS', 'ta-dailyblog' ),
                            'subtitle'  => __( 'Insert any custom CSS.', 'ta-dailyblog' ),
                            'id'        => 'custom_css',
                            'type'      => 'ace_editor',
                            'mode'      => 'css',
                            'theme'     => 'monokai',
                        ),
                    )
                );

				$this->sections[] = array(
                    'title'  => __( 'Import / Export', 'ta-dailyblog' ),
                    'desc'   => __( 'Import and Export your theme settings from file, text or URL.', 'ta-dailyblog' ),
                    'icon'   => 'el el-refresh',
                    'fields' => array(
                        array(
                            'id'         => 'opt-import-export',
                            'type'       => 'import_export',
                            'full_width' => false,
						),
					),
				);

                $this->sections[] = array(
                    'type' => 'divide',
				);

                $this->sections[] = array(
                    'icon'   => 'el el-info-circle',
                    'title'  => __( 'Theme Information', 'ta-dailyblog' ),
                    'desc'   => __( '<p class="description">About DailyBlog</p>', 'ta-dailyblog' ),
                    'fields' => array(
                        array(
                            'id'      => 'opt-raw-info',
                            'type'    => 'raw',
                            'content' => $item_info,
                        )
                    ),
                );
            }

            /**
             * All the possible arguments for Redux.
             * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
             * */
            public function setArguments() {

                $theme = wp_get_theme(); // For use with some settings. Not necessary.

                $this->args = array(
					// Disable tracking
					'disable_tracking'     => true,
                    // TYPICAL -> Change these values as you need/desire
                    'opt_name'             => 'ta-option',
                    // This is where your data is stored in the database and also becomes your global variable name.
                    'display_name'         => $theme->get( 'Name' ),
                    // Name that appears at the top of your panel
                    'display_version'      => $theme->get( 'Version' ),
                    // Version that appears at the top of your panel
                    'menu_type'            => 'menu',
                    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                    'allow_sub_menu'       => true,
                    // Show the sections below the admin menu item or not
                    'menu_title'           => __( 'Theme Panel', 'ta-dailyblog' ),
                    'page_title'           => __( 'Theme Options', 'ta-dailyblog' ),
                    // You will need to generate a Google API key to use this feature.
                    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                    'google_api_key'       => '',
                    // Set it you want google fonts to update weekly. A google_api_key value is required.
                    'google_update_weekly' => false,
                    // Must be defined to add google fonts to the typography module
                    'async_typography'     => true,
                    // Use a asynchronous font on the front end or font string
                    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
                    'admin_bar'            => true,
                    // Show the panel pages on the admin bar
                    'admin_bar_icon'     => 'dashicons-admin-settings',
                    // Choose an icon for the admin bar menu
                    'admin_bar_priority' => 50,
                    // Choose an priority for the admin bar menu
                    'global_variable'      => '',
                    // Set a different name for your global variable other than the opt_name
                    'dev_mode'             => false,
                    // Show the time the page took to load, etc
                    'update_notice'        => true,
                    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
                    'customizer'           => true,
                    // Enable basic customizer support
                    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
                    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

                    // OPTIONAL -> Give you extra features
                    'page_priority'        => null,
                    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                    'page_parent'          => 'themes.php',
                    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
                    'page_permissions'     => 'manage_options',
                    // Permissions needed to access the options panel.
                    'menu_icon'            => '',
                    // Specify a custom URL to an icon
                    'last_tab'             => '',
                    // Force your panel to always open to a specific tab (by id)
                    'page_icon'            => 'icon-themes',
                    // Icon displayed in the admin panel next to your menu_title
                    'page_slug'            => '_options',
                    // Page slug used to denote the panel
                    'save_defaults'        => true,
                    // On load save the defaults to DB before user clicks save or not
                    'default_show'         => false,
                    // If true, shows the default value next to each field that is not the default value.
                    'default_mark'         => '',
                    // What to print by the field's title if the value shown is default. Suggested: *
                    'show_import_export'   => true,
                    // Shows the Import/Export panel when not used as a field.

                    // CAREFUL -> These options are for advanced use only
                    'transient_time'       => 60 * MINUTE_IN_SECONDS,
                    'output'               => true,
                    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                    'output_tag'           => true,
                    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

                    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                    'database'             => '',
                    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
                    'system_info'          => false,
                    // REMOVE

                    // HINTS
                    'hints'                => array(
                        'icon'          => 'icon-question-sign',
                        'icon_position' => 'right',
                        'icon_color'    => 'lightgray',
                        'icon_size'     => 'normal',
                        'tip_style'     => array(
                            'color'   => 'light',
                            'shadow'  => true,
                            'rounded' => false,
                            'style'   => '',
                        ),
                        'tip_position'  => array(
                            'my' => 'top left',
                            'at' => 'bottom right',
                        ),
                        'tip_effect'    => array(
                            'show' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'mouseover',
                            ),
                            'hide' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'click mouseleave',
                            ),
                        ),
                    )
                );

                // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
                $this->args['admin_bar_links'][] = array(
                    'id'    => 'redux-docs',
                    'href'   => 'http://themeart.co/document/ta-dailyblog-theme-documentation/',
                    'title' => __( 'Documentation', 'ta-dailyblog' ),
                );

                $this->args['admin_bar_links'][] = array(
                    //'id'    => 'redux-support',
                    'href'   => 'http://themeart.co/support/',
                    'title' => __( 'Support', 'ta-dailyblog' ),
                );

                // Panel Intro text -> before the form
                if ( ! isset( $this->args['global_variable'] ) || $this->args['global_variable'] !== false ) {
                    if ( ! empty( $this->args['global_variable'] ) ) {
                        $v = $this->args['global_variable'];
                    } else {
                        $v = str_replace( '-', '_', $this->args['opt_name'] );
                    }
                    $this->args['intro_text'] = sprintf( __( '<p>You can start customizing your theme with the powerful option panel.</p>', 'ta-dailyblog' ), $v );
                } else {
                    $this->args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'ta-dailyblog' );
                }

                // Add content after the form.
                $this->args['footer_text'] = __( '<p>Thanks for using <a href="http://themeart.co/free-theme/ta-dailyblog/" target="_blank">DailyBlog</a>. This free WordPress theme is designed by <a href=
				"http://themeart.co/" target="_blank">ThemeArt</a>. Please feel free to leave us some feedback about your experience, so we can improve our themes for you.</p>', 'ta-dailyblog' );
            }

            public function validate_callback_function( $field, $value, $existing_value ) {
                $error = true;
                $value = 'just testing';

                $return['value'] = $value;
                $field['msg']    = 'your custom error message';
                if ( $error == true ) {
                    $return['error'] = $field;
                }

                return $return;
            }

            public function class_field_callback( $field, $value ) {
                print_r( $field );
                echo '<br/>CLASS CALLBACK';
                print_r( $value );
            }

        }

        global $reduxConfig;
        $reduxConfig = new Redux_Framework_ta_config();
    } else {
        echo "The class named Redux_Framework_ta_config has already been called. <strong>Developers, you need to prefix this class with your company name or you'll run into problems!</strong>";
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ):
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    endif;

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ):
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error = true;
            $value = 'just testing';

            $return['value'] = $value;
            $field['msg']    = 'your custom error message';
            if ( $error == true ) {
                $return['error'] = $field;
            }

            return $return;
        }
    endif;