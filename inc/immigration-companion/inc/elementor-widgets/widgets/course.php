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
 * Immigration elementor Team Member section widget.
 *
 * @since 1.0
 */
class Immigration_Course extends Widget_Base {

	public function get_name() {
		return 'immigration-course';
	}

	public function get_title() {
		return __( 'Course', 'immigration' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'immigration-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  Course Section Heading ------------------------------
        $this->start_controls_section(
            'course_heading',
            [
                'label' => __( 'course Section Heading', 'immigration' ),
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
        
		// ----------------------------------------   Course content ------------------------------
		$this->start_controls_section(
			'course_block',
			[
				'label' => __( 'Course', 'immigration' ),
			]
		);
		$this->add_control(
            'course_content', [
                'label' => __( 'Create Course', 'immigration' ),
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
                        'name'  => 'url',
                        'label' => __( 'Title Url', 'immigration' ),
                        'type'  => Controls_Manager::URL,
                        'show_external' => false,
                    ],
                    [
                        'name'  => 'tagtitle',
                        'label' => __( 'Tag Title', 'immigration' ),
                        'type'  => Controls_Manager::TEXT,
                    ],
                    [
                        'name'  => 'price',
                        'label' => __( 'Price', 'immigration' ),
                        'type'  => Controls_Manager::TEXT,
                    ],
                    [
                        'name'  => 'desc',
                        'label' => __( 'Descriptions', 'immigration' ),
                        'type'  => Controls_Manager::TEXTAREA,
                    ],
                    [
                        'name'  => 'img',
                        'label' => __( 'Photo', 'immigration' ),
                        'type'  => Controls_Manager::MEDIA,
                    ]
                ],
            ]
		);

		$this->end_controls_section(); // End Services content


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



	}

	protected function render() {

    $settings = $this->get_settings();

    ?>

    <!-- Start top-course Area -->
    <section class="top-course-area section-gap">
        <div class="container">

            <?php 
            // Section Heading
            immigration_section_heading( $settings['sect_title'], $settings['sect_subtitle'] );
            ?>

            <div class="row">
                <?php 
                if( is_array( $settings['course_content'] ) && count( $settings['course_content'] ) > 0 ):
                    foreach( $settings['course_content'] as $course ):
 
                // Member Picture
                $bgUrl = '';
                if( ! empty( $course['img']['url'] ) ) {
                    $bgUrl = $course['img']['url'];
                }
                
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-top-course">
                        <div class="thumbs relative">
                            <div class="overlay overlay-bg"></div>
                            <?php 
                            // Image
                            echo immigration_img_tag(
                                array(
                                    'url'   => esc_url( $bgUrl ),
                                    'class'   => 'img-fluid'
                                )
                            );
                            //
                            if( ! empty( $course['tagtitle'] ) ) {
                                echo '<span class="thumb-btn">' . esc_html( $course['tagtitle'] ). '</span>';
                            }
                            ?>
                        </div>
                        <div class="details">
                            <div class="title justify-content-between d-flex">
                                <?php
                                // Title
                                if( ! empty( $course['label'] ) ) {

                                    $atagstart  = '';
                                    $atagend    = '';

                                    if( ! empty( $course['url']['url'] ) ) {

                                        $atagstart  = '<a href="'.esc_url( $course['url']['url'] ).'">';
                                        $atagend    = '</a>';

                                    }
                                    echo wp_kses_post( $atagstart );
                                    echo immigration_heading_tag(
                                        array(
                                            'tag'  => 'h4',
                                            'text' => esc_html( $course['label'] )
                                        )
                                    );
                                    echo wp_kses_post( $atagend );
                                }
                                // Price
                                if( ! empty( $course['price'] ) ) {
                                    echo immigration_other_tag(
                                        array(
                                            'text'  => esc_html( $course['price'] ),
                                            'class' => 'price'
                                        )
                                    );
                                }
                                ?>
                            </div>
                            <?php
                            // Description
                            if( ! empty( $course['desc'] ) ) {
                                echo immigration_paragraph_tag(
                                    array(
                                        'text'  => esc_html( $course['desc'] ),
                                    )
                                );
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <?php
                    endforeach;
                endif;
                ?>

            </div>
        </div>  
    </section>
    <!-- End top-course Area -->

    <?php

    }

}
