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
 * Immigration elementor call to action section widget.
 *
 * @since 1.0
 */
class Immigration_Cta extends Widget_Base {

	public function get_name() {
		return 'immigration-cta';
	}

	public function get_title() {
		return __( 'Call To Action', 'immigration' );
	}

	public function get_icon() {
		return 'eicon-call-to-action';
	}

	public function get_categories() {
		return [ 'immigration-elements' ];
	}

	protected function _register_controls() {


        // ----------------------------------------  Call to action content ------------------------------
        $this->start_controls_section(
            'cta_content',
            [
                'label' => __( 'Call To Action Content', 'immigration' ),
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'immigration' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'Everything You can imagine is right here', 'immigration' )
            ]
        );
        $this->add_control(
            'btnlabel',
            [
                'label' => esc_html__( 'Button Label', 'immigration' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'Reach Our Support Team', 'immigration' )
            ]
        );
        $this->add_control(
            'btnurl',
            [
                'label' => esc_html__( 'Button Url', 'immigration' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => ''
            ]
        );
        $this->add_control(
            'content',
            [
                'label'         => esc_html__( 'Contact', 'immigration' ),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => esc_html__( 'inappropriate behaviour is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women.', 'immigration' )
            ]
        );

        $this->end_controls_section(); // End content

        /**
         * Style Tab
         * ------------------------------ Style ------------------------------
         *
         */
        $this->start_controls_section(
            'stylecolor', [
                'label' => __( 'Style Color', 'immigration' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_title', [
                'label'     => __( 'Title Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .callto-area h1'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_titlebold', [
                'label'     => __( 'Description Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .callto-area p' => 'color: {{VALUE}};',
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
                    '{{WRAPPER}} .callto-area .primary-btn'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_label', [
                'label'     => __( 'Hover Label Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .callto-area .primary-btn:hover'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_bg', [
                'label'     => __( 'Background Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f6214b',
                'selectors' => [
                    '{{WRAPPER}} .callto-area .primary-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_bg', [
                'label'     => __( 'Hover Background Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => 'rgba(250,183,0,0)',
                'selectors' => [
                    '{{WRAPPER}} .callto-area .primary-btn:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_border', [
                'label'     => __( 'Border Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f6214b',
                'selectors' => [
                    '{{WRAPPER}} .callto-area .primary-btn' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_border', [
                'label'     => __( 'Hover Border Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .callto-area .primary-btn:hover' => 'border-color: {{VALUE}};',
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
                'selector' => '{{WRAPPER}} .callto-area .overlay-bg',
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
                'selector' => '{{WRAPPER}} .callto-area',
            ]
        );

        $this->end_controls_section();


	}

	protected function render() {

    $settings = $this->get_settings();

    ?>

    <section class="callto-area section-gap relative">
        <?php 
        if( ! empty( $settings['bg_overlay'] ) ) {
            echo '<div class="overlay overlay-bg"></div>';
        }
        ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <?php 
                    // Title
                    if( ! empty( $settings['title'] ) ) {
                        echo immigration_heading_tag(
                            array(
                                'tag' => 'h1',
                                'text' => esc_html( $settings['title'] ),
                            )
                        );
                    }
                    // Description
                    if( ! empty( $settings['content'] ) ) {
                        echo '<div class="pt-20 pb-20">';
                        echo immigration_get_textareahtml_output( $settings['content'] );
                        echo '</div>';
                    }
                    // Button 
                    if( !empty( $settings['btnlabel'] ) && ! empty( $settings['btnurl'] ) ) {
                        echo immigration_anchor_tag(
                            array(
                                'text'   => esc_html( $settings['btnlabel'] ),
                                'url'    => esc_url( $settings['btnurl'] ),
                                'class'  => 'primary-btn',
                            )
                        );
                    }
                    ?>
                </div>
            </div>
        </div>  
    </section>

    <?php

        }
	
}
