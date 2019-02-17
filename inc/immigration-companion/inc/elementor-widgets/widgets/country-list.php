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
class Immigration_Country_List extends Widget_Base {

	public function get_name() {
		return 'immigration-country-list';
	}

	public function get_title() {
		return __( 'Country List', 'immigration' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'immigration-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  Features Section Heading ------------------------------
        $this->start_controls_section(
            'country_list_heading',
            [
                'label' => __( 'Country List Section Heading', 'immigration' ),
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
			'country_list_block',
			[
				'label' => __( 'Country List', 'immigration' ),
			]
		);
		$this->add_control(
            'country_content', [
                'label' => __( 'Create Country List', 'immigration' ),
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
                        'label' => __( 'Url', 'immigration' ),
                        'type'  => Controls_Manager::URL,
                        'show_external' => false,
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

		$this->end_controls_section(); // End features content


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

        //------------------------------ Style Country ------------------------------
        $this->start_controls_section(
            'style_country', [
                'label' => __( 'Style Country', 'immigration' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'country_title_heading',
            [
                'label'     => __( 'Style Title ', 'immigration' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'color_featuretitle', [
                'label' => __( 'Title Color', 'immigration' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-country-list h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_desc', [
                'label'     => __( 'Descriptions Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-country-list p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        /**
         * Style Tab
         * ------------------------------ Button Style ------------------------------
         *
         */
        $this->start_controls_section(
            'buttonstyle', [
                'label' => __( 'Style Button', 'immigration' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_label', [
                'label'     => __( 'Label Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .single-country-list .primary-btn'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_label', [
                'label'     => __( 'Hover Label Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .single-country-list .primary-btn:hover'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_bg', [
                'label'     => __( 'Background Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f6214b',
                'selectors' => [
                    '{{WRAPPER}} .single-country-list .primary-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_bg', [
                'label'     => __( 'Hover Background Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => 'rgba(250,183,0,0)',
                'selectors' => [
                    '{{WRAPPER}} .single-country-list .primary-btn:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_border', [
                'label'     => __( 'Border Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f6214b',
                'selectors' => [
                    '{{WRAPPER}} .single-country-list .primary-btn' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_border', [
                'label'     => __( 'Hover Border Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f9f9ff',
                'selectors' => [
                    '{{WRAPPER}} .single-country-list .primary-btn:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();
	}

	protected function render() {

    $settings = $this->get_settings();

    ?>

    <!-- Start counrty-list Area -->
    <section class="counrty-list-area section-gap">
        <div class="container">

            <?php 
            // Section Heading
            immigration_section_heading( $settings['sect_title'], $settings['sect_subtitle'] );
            ?>

            <div class="row">
                <?php 
                if( is_array( $settings['country_content'] ) && count( $settings['country_content'] ) > 0 ):
                    foreach( $settings['country_content'] as $country ):
 
                // img
                $bgUrl = '';
                if( ! empty( $country['img']['url'] ) ) {
                    $bgUrl = $country['img']['url'];
                }
                ?>
                <div class="col-lg-3 col-md-6">
                    <div class="single-country-list">
                        <?php 
                        // Image
                        echo immigration_img_tag(
                            array(
                                'url'   => esc_url( $bgUrl )
                            )
                        );
                        // Title
                        if( ! empty( $country['label'] ) ) {

                            $atagstart  = '';
                            $atagend    = '';

                            if( ! empty( $country['url']['url'] ) ) {

                                $atagstart  = '<a href="'.esc_url( $country['url']['url'] ).'">';
                                $atagend    = '</a>';

                            }
                            echo wp_kses_post( $atagstart );
                            echo immigration_heading_tag(
                                array(
                                    'tag'  => 'h4',
                                    'text' => esc_html( $country['label'] )
                                )
                            );
                            echo wp_kses_post( $atagend );
                        }
                        // Description
                        if( ! empty( $country['desc'] ) ) {
                            echo immigration_paragraph_tag(
                                array(
                                    'text'  => esc_html( $country['desc'] ),
                                )
                            );
                        }
                        // Anchor
                        if( ! empty( $country['url']['url'] ) ) {
                            echo immigration_anchor_tag(
                                array(
                                    'text' => esc_html__( 'View Details', 'immigration' ),
                                    'url'  => esc_url( $country['url']['url'] ),
                                    'class' => 'primary-btn'
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
    <!-- End counrty-list Area -->

    <?php

    }

	
}
