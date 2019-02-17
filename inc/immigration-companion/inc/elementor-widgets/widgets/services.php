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
class Immigration_Services extends Widget_Base {

	public function get_name() {
		return 'immigration-services';
	}

	public function get_title() {
		return __( 'Services', 'immigration' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'immigration-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  Services Section Heading ------------------------------
        $this->start_controls_section(
            'services_heading',
            [
                'label' => __( 'Services Section Heading', 'immigration' ),
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
        
		// ----------------------------------------   Services content ------------------------------
		$this->start_controls_section(
			'services_block',
			[
				'label' => __( 'Services', 'immigration' ),
			]
		);
		$this->add_control(
            'services_content', [
                'label' => __( 'Create Service', 'immigration' ),
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
                        'name'  => 'country',
                        'label' => __( 'Country', 'immigration' ),
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

        //------------------------------ Style Services Box ------------------------------
        $this->start_controls_section(
            'style_servicesbox', [
                'label' => __( 'Style Services Box', 'immigration' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_featuretitle', [
                'label' => __( 'Title Color', 'immigration' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-service h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_featuredescription', [
                'label' => __( 'Description Color', 'immigration' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-service p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();


	}

	protected function render() {

    $settings = $this->get_settings();

    ?>

    <!-- Start service Area -->
    <section class="service-area section-gap" id="immigration">
        <div class="container">
            <?php 
            // Section Heading
            immigration_section_heading( $settings['sect_title'], $settings['sect_subtitle'] );
            ?>

            <div class="row">

                <?php 
                if( is_array( $settings['services_content'] ) && count( $settings['services_content'] ) > 0 ):
                    foreach( $settings['services_content'] as $service ):
 
                // Member Picture
                $bgUrl = '';
                if( ! empty( $service['img']['url'] ) ) {
                    $bgUrl = $service['img']['url'];
                }
                            

                ?>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <div class="thumb">
                            <?php 
                            // Image
                            echo immigration_img_tag(
                                array(
                                    'url'   => esc_url( $bgUrl )
                                )
                            );
                            ?>
                        </div>
                        <?php 
                            // Country
                            if( ! empty( $service['country'] ) ) {
                                echo '<a class="tag">' . esc_html( $service['country'] ) . '</a>';
                            }
                            // Title
                            if( ! empty( $service['label'] ) ) {

                                $atagstart  = '';
                                $atagend    = '';

                                if( ! empty( $service['url']['url'] ) ) {

                                    $atagstart  = '<a href="'.esc_url( $service['url']['url'] ).'">';
                                    $atagend    = '</a>';

                                }
                                echo wp_kses_post( $atagstart );
                                echo immigration_heading_tag(
                                    array(
                                        'tag'  => 'h4',
                                        'text' => esc_html( $service['label'] )
                                    )
                                );
                                echo wp_kses_post( $atagend );
                            }
                            
                            // Description
                            if( ! empty( $service['desc'] ) ) {
                                echo immigration_paragraph_tag(
                                    array(
                                        'text'  => esc_html( $service['desc'] ),
                                    )
                                );
                            }

                        ?>
                    </div>
                </div>
                <?php
                    endforeach; 
                endif;
                ?>

            </div>
        </div>  
    </section>
    <!-- End service Area -->

    <?php

    }

	
}
