<?php

function ju_misc_customizer_home_section( $wp_customize ){

    /**
     * Customize Control for Taxonomy Select.
     *
     * @since 1.0.0
     *
     * @see WP_Customize_Control
     */
    class Newsever_Dropdown_Taxonomies_Control extends WP_Customize_Control {

        /**
         * Control type.
         *
         * @access public
         * @var string
         */
        public $type = 'dropdown-taxonomies';

        /**
         * Taxonomy.
         *
         * @access public
         * @var string
         */
        public $taxonomy = '';

        /**
         * Constructor.
         *
         * @since 1.0.0
         *
         * @param WP_Customize_Manager $manager Customizer bootstrap instance.
         * @param string               $id      Control ID.
         * @param array                $args    Optional. Arguments to override class property defaults.
         */
        public function __construct( $manager, $id, $args = array() ) {

            $our_taxonomy = 'category';
            if ( isset( $args['taxonomy'] ) ) {
                $taxonomy_exist = taxonomy_exists( $args['taxonomy']  );
                if ( true === $taxonomy_exist ) {
                    $our_taxonomy =  $args['taxonomy'];
                }
            }
            $args['taxonomy'] = $our_taxonomy;
            $this->taxonomy =  $our_taxonomy;

            parent::__construct( $manager, $id, $args );
        }

        /**
         * Render content.
         *
         * @since 1.0.0
         */
        public function render_content() {

            $tax_args = array(
                'hierarchical' => 0,
                'taxonomy'     => $this->taxonomy,
            );
            $all_taxonomies = get_categories( $tax_args );

            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <?php if ( ! empty( $this->description ) ) : ?>
                    <span class="description customize-control-description"><?php echo $this->description; ?></span>
                <?php endif; ?>
                <select <?php $this->link(); ?>>
                    <?php
                    printf( '<option value="%s" %s>%s</option>', 0, selected( $this->value(), '', false ), __( 'All', 'newsever' )  );
                    ?>
                    <?php if ( ! empty( $all_taxonomies ) ) :  ?>
                        <?php foreach ( $all_taxonomies as $key => $tax ) :  ?>
                            <?php
                            printf( '<option value="%s" %s>%s</option>', esc_attr( $tax->term_id ), selected( $this->value(), $tax->term_id, false ), esc_html( $tax->name ) );
                            ?>
                        <?php endforeach ?>
                    <?php endif ?>
                </select>
            </label>
            <?php
        }
    }
    $wp_customize->add_section( 'ju_home_section', [
        'title'         =>  __( 'Udemy Home Section', 'udemy' ),
        'priority'      =>  30,
        'panel'         =>  'udemy'
    ]);
    $wp_customize->add_setting( 'ju_show_first_section_posts', [
        'default'       =>  false
    ]);
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_show_first_section_posts_input',
            array(
                'label'     => __( 'Show First Section Posts', 'udemy' ),
                'section'   => 'ju_home_section',
                'settings'  => 'ju_show_first_section_posts',
                'type'      =>  'checkbox',
                'choices'   =>  [
                    'yes'   =>  __( 'Yes', 'udemy' )
                ]
            )
        )
    );
    $wp_customize->add_setting('ju_first_section_slider_posts', [
        'default'     => 0,
    ]);
    $wp_customize->add_control(
        new Newsever_Dropdown_Taxonomies_Control(
            $wp_customize,
            'ju_first_section_slider_posts_widget_input',
            array(
                'label'     => __( 'First Section Slider Posts', 'udemy' ),
                'section'   => 'ju_home_section',
                'settings'  => 'ju_first_section_slider_posts',
                'type'      =>  'dropdown-taxonomies',
                'taxonomy'  => 'category',
                'priority'  => 23
            )
        )
    );
    $wp_customize->add_setting('ju_first_section_right_posts', [
        'default'     => 0,
    ]);
    $wp_customize->add_control(
        new Newsever_Dropdown_Taxonomies_Control(
            $wp_customize,
            'ju_first_section_right_posts_widget_input',
            array(
                'label'     => __( 'First Section Right Posts', 'udemy' ),
                'section'   => 'ju_home_section',
                'settings'  => 'ju_first_section_right_posts',
                'type'      =>  'dropdown-taxonomies',
                'taxonomy'  => 'category',
                'priority'  => 23
            )
        )
    );
    $wp_customize->add_setting( 'ju_show_second_section_posts', [
        'default'       =>  false
    ]);
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_show_second_section_posts_input',
            array(
                'label'     => __( 'Show Second Section Posts', 'udemy' ),
                'section'   => 'ju_home_section',
                'settings'  => 'ju_show_second_section_posts',
                'type'      =>  'checkbox',
                'choices'   =>  [
                    'yes'   =>  __( 'Yes', 'udemy' )
                ]
            )
        )
    );
    $wp_customize->add_setting( 'ju_second_section_category_title', [
        'default'       =>  'Second Section',
    ]);
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_second_section_category_title_input',
            array(
                'label'     => __( 'Second section Category Title', 'udemy' ),
                'section'   => 'ju_home_section',
                'settings'  => 'ju_second_section_category_title',
            )
        )
    );
    $wp_customize->add_setting('ju_second_section_posts', [
        'default'     => 0,
    ]);
    $wp_customize->add_control(
        new Newsever_Dropdown_Taxonomies_Control(
            $wp_customize,
            'ju_second_section_posts_input',
            array(
                'label'     => __( 'Second Section Left Posts', 'udemy' ),
                'section'   => 'ju_home_section',
                'settings'  => 'ju_second_section_posts',
                'type'      =>  'dropdown-taxonomies',
                'taxonomy'  => 'category',
                'priority'  => 23
            )
        )
    );
    $wp_customize->add_setting( 'ju_show_third_section_posts', [
        'default'       =>  false
    ]);
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_show_third_section_posts_input',
            array(
                'label'     => __( 'Show Third Section Posts', 'udemy' ),
                'section'   => 'ju_home_section',
                'settings'  => 'ju_show_third_section_posts',
                'type'      =>  'checkbox',
                'choices'   =>  [
                    'yes'   =>  __( 'Yes', 'udemy' )
                ]
            )
        )
    );
    $wp_customize->add_setting( 'ju_third_section_category_title', [
        'default'       =>  'Third Section'
    ]);
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_third_section_category_title_input',
            array(
                'label'     => __( 'Third section Category Title', 'udemy' ),
                'section'   => 'ju_home_section',
                'settings'  => 'ju_third_section_category_title',
            )
        )
    );
    $wp_customize->add_setting('ju_third_section_posts', [
        'default'     => 0,
    ]);
    $wp_customize->add_control(
        new Newsever_Dropdown_Taxonomies_Control(
            $wp_customize,
            'ju_third_section_posts_input',
            array(
                'label'     => __( 'Third Section Left Posts', 'udemy' ),
                'section'   => 'ju_home_section',
                'settings'  => 'ju_third_section_posts',
                'type'      =>  'dropdown-taxonomies',
                'taxonomy'  => 'category',
                'priority'  => 23
            )
        )
    );

    $wp_customize->add_setting( 'ju_show_fourth_section_posts', [
        'default'       =>  false
    ]);
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_show_fourth_section_posts_input',
            array(
                'label'     => __( 'Show Fourth Section Posts', 'udemy' ),
                'section'   => 'ju_home_section',
                'settings'  => 'ju_show_fourth_section_posts',
                'type'      =>  'checkbox',
                'choices'   =>  [
                    'yes'   =>  __( 'Yes', 'udemy' )
                ]
            )
        )
    );
    $wp_customize->add_setting( 'ju_fourth_section_category_title', [
        'default'       =>  'Fourth Section'
    ]);
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_fourth_section_category_title_input',
            array(
                'label'     => __( 'Fourth section Category Title', 'udemy' ),
                'section'   => 'ju_home_section',
                'settings'  => 'ju_fourth_section_category_title',
            )
        )
    );
    $wp_customize->add_setting('ju_fourth_section_posts', [
        'default'     => 0,
    ]);
    $wp_customize->add_control(
        new Newsever_Dropdown_Taxonomies_Control(
            $wp_customize,
            'ju_fourth_section_posts_ctegory',
            array(
                'label'     => __( 'Fourth Section Left Posts', 'udemy' ),
                'section'   => 'ju_home_section',
                'settings'  => 'ju_fourth_section_posts',
                'type'      =>  'dropdown-taxonomies',
                'taxonomy'  => 'category',
                'priority'  => 23
            )
        )
    );
}