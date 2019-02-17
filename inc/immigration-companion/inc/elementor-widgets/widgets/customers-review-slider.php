<?php
namespace Immigrationelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Immigration elementor section widget.
 *
 * @since 1.0
 */
class Immigration_Customers_Review_Slider extends Widget_Base {

	public function get_name() {
		return 'immigration-customersreview';
	}

	public function get_title() {
		return __( 'Customers Review', 'immigration' );
	}

	public function get_icon() {
		return 'eicon-post-slider';
	}

	public function get_categories() {
		return [ 'immigration-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  Customers Review Section Heading ------------------------------
        $this->start_controls_section(
            'customersreview_heading',
            [
                'label' => __( 'Customers Review Section Heading', 'immigration' ),
            ]
        );
        $this->add_control(
            'sect_title', [
                'label' => __( 'Title', 'immigration' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true

            ]
        );
        $this->add_control(
            'sect_subtitle', [
                'label' => __( 'Sub Title', 'immigration' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true

            ]
        );

        $this->end_controls_section(); // End section top content
        
		// ----------------------------------------  Customers review content ------------------------------
		$this->start_controls_section(
			'customersreview_content',
			[
				'label' => __( 'Customers Review', 'immigration' ),
			]
		);
		$this->add_control(
            'review_slider', [
                'label' => __( 'Create Review', 'immigration' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ label }}}',
                'fields' => [
                    [
                        'name'  => 'label',
                        'label' => __( 'Name', 'immigration' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => 'Name'
                    ],
                    [
                        'name' => 'reviewstar',
                        'label' => __( 'Star Review', 'immigration' ),
                        'type' => Controls_Manager::CHOOSE,
                            'options' => [
                                '1' => [
                                    'title' => __( '1', 'immigration' ),
                                    'icon' => 'fa fa-star',
                                ],
                                '2' => [
                                    'title' => __( '2', 'immigration' ),
                                    'icon' => 'fa fa-star',
                                ],
                                '3' => [
                                    'title' => __( '3', 'immigration' ),
                                    'icon' => 'fa fa-star',
                                ],
                                '4' => [
                                    'title' => __( '4', 'immigration' ),
                                    'icon' => 'fa fa-star',
                                ],
                                '5' => [
                                    'title' => __( '5', 'immigration' ),
                                    'icon' => 'fa fa-star',
                                ],
                            ],
                    ],
                    [
                        'name'  => 'desc',
                        'label' => __( 'Descriptions', 'immigration' ),
                        'type'  => Controls_Manager::WYSIWYG,
                    ],
                    [
                        'name'  => 'img',
                        'label' => __( 'Photo', 'immigration' ),
                        'type'  => Controls_Manager::MEDIA,
                    ]
                ],
            ]
		);

		$this->end_controls_section(); // End exibition content


        //------------------------------ Style Section ------------------------------
        $this->start_controls_section(
            'style_section', [
                'label' => __( 'Style Section Heading', 'immigration' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'Section Title Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#333333',
                'selectors' => [
                    '{{WRAPPER}} .title h1' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'color_sectsubtitle', [
                'label'     => __( 'Section Sub Title Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777',
                'selectors' => [
                    '{{WRAPPER}} .title p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();


        //------------------------------ Style Content ------------------------------
        $this->start_controls_section(
            'style_content', [
                'label' => __( 'Style Content', 'immigration' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_title', [
                'label'     => __( 'Title Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222222',
                'selectors' => [
                    '{{WRAPPER}} .single-review h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_price', [
                'label'     => __( 'Star Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f6214b',
                'selectors' => [
                    '{{WRAPPER}} .single-review .star .fa.checked' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_desc', [
                'label'     => __( 'Descriptions Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777777',
                'selectors' => [
                    '{{WRAPPER}} .single-review p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();


        /**
         * Style Tab
         * ------------------------------ Background Style ------------------------------
         *
         */
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'immigration' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'bg_overlay',
            [
                'label' => __( 'Overlay', 'immigration' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'immigration' ),
                'label_off' => __( 'Hide', 'immigration' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'sect_ooverlay_bgcolor',
            [
                'label'     => __( 'Overlay Color', 'immigration' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'bg_overlay' => 'yes'
                ]
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionoverlaybg',
                'label' => __( 'Overlay', 'immigration' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .review-area .overlay-bg',
                'condition' => [
                    'bg_overlay' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'section_bgheading',
            [
                'label'     => __( 'Background Settings', 'immigration' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'immigration' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .review-area',
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();
    // call load widget script
    $this->load_widget_script();
    ?>

    <!-- Start review Area -->
    <section class="review-area section-gap">
        <?php 
        if( ! empty( $settings['bg_overlay'] ) ) {
            echo '<div class="overlay overlay-bg"></div>';
        }
        ?>
        <div class="container">
            <?php 
            // Section Heading
            immigration_section_heading( $settings['sect_title'], $settings['sect_subtitle'] );
            ?>

            <div class="row">

                <div class="active-review-carusel">

                <?php 
                if( is_array( $settings['review_slider'] ) && count( $settings['review_slider'] ) > 0 ):
                    foreach( $settings['review_slider'] as $review ):
 
                // Member Picture
                $bgUrl = '';
                if( !empty( $review['img']['url'] ) ){
                    $bgUrl = $review['img']['url'];
                }

                ?>
                    <div class="single-review item">
                        <?php 
                        echo immigration_img_tag(
                            array(
                                'url'   => esc_url( $bgUrl )
                            )
                        );
                        ?>
                        <div class="title justify-content-start d-flex">
                            <?php 
                            if( ! empty( $review['label'] ) ) {
                                echo immigration_heading_tag(
                                    array(
                                        'tag'  => 'h4',
                                        'text' => esc_html( $review['label'] ),
                                    )
                                ); 
                            }
                            //
                            if( ! empty( $review['reviewstar'] ) ) {
                                echo '<div class="star">';
                                    for( $i = 1; $i <= 5; $i++ ) {

                                        if( $review['reviewstar'] >= $i ) {
                                            echo '<span class="fa fa-star checked"></span>';
                                        } else {
                                            echo '<span class="fa fa-star"></span>';
                                        }
                                    }
                                echo '</div>';
                            }
                            ?>
                        </div>
                        <?php 
                        if( ! empty( $review['desc'] ) ) {
                            echo immigration_get_textareahtml_output( $review['desc'] );
                        }
                        ?>
                    </div>
                <?php
                    endforeach; 
                endif;
                ?>
                                                                               
                </div>
            </div>
        </div>  
    </section>
    <!-- End review Area -->

    <?php

    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            
            // Exibition widget owlCarousel
            $('.active-review-carusel').owlCarousel({
                items:2,
                loop:true,
                margin:30,
                dots: true
            });

        })(jQuery);
        </script>
        <?php 
        }
    }
	
}
