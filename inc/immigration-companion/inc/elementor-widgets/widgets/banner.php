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
 * Immigration elementor about us section widget.
 *
 * @since 1.0
 */
class Immigration_Banner extends Widget_Base {

	public function get_name() {
		return 'immigration-banner';
	}

	public function get_title() {
		return __( 'Banner', 'immigration' );
	}

	public function get_icon() {
		return 'eicon-banner';
	}

	public function get_categories() {
		return [ 'immigration-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  content ------------------------------
        $this->start_controls_section(
            'banner_content',
            [
                'label' => __( 'Banner Section Content', 'immigration' ),
            ]
        );
        $this->add_control(
            'banner_titleone',
            [
                'label'         => esc_html__( 'Title #1', 'immigration' ),
                'type'          => Controls_Manager::TEXT,
                'default'       => esc_html__( 'Process Visa without within hours', 'immigration' ),
                'label_block'   => true
            ]
        );
        $this->add_control(
            'banner_titletwo',
            [
                'label'         => esc_html__( 'Title #2', 'immigration' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true
            ]
        );
        $this->add_control(
            'banner_btnlabel',
            [
                'label'         => esc_html__( 'Button Label', 'immigration' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Book Consultancy', 'immigration' )
            ]
        );
        $this->add_control(
            'banner_btnurl',
            [
                'label'         => esc_html__( 'Button Url', 'immigration' ),
                'type'          => Controls_Manager::URL,
                'show_external' => false
            ]
        );
        $this->add_control(
            'banner_img',
            [
                'label'         => esc_html__( 'Featured Image', 'immigration' ),
                'type'          => Controls_Manager::MEDIA,
            ]
        );
        $this->end_controls_section(); // End content

        //------------------------------ Style title ------------------------------
        $this->start_controls_section(
            'style_textcolor', [
                'label' => __( 'Style Content', 'immigration' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_titleone', [
                'label'     => __( 'Title #1 Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner-content h6' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name'      => 'typography_titleone',
                'selector'  => '{{WRAPPER}} .banner-content h6',
            ]
        );
        $this->add_control(
            'color_titletwo', [
                'label'     => __( 'Title #2 Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner-content h1' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name'      => 'typography_titletwo',
                'selector'  => '{{WRAPPER}} .banner-content h1',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'          => 'banneroverlay',
                'label'         => __( 'Overlay Background', 'immigration' ),
                'separator'     => 'before',
                'description'   => esc_html__( 'Set banner overlay background color.', 'immigration' ),
                'types'         => [ 'gradient' ],
                'selector'      => '{{WRAPPER}} .banner-area .overlay-bg',
            ]
        );
        $this->end_controls_section();

        //------------------------------ Style button ------------------------------
        $this->start_controls_section(
            'style_btn', [
                'label' => __( 'Style Button', 'immigration' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_btnlabel', [
                'label'     => __( 'Button Label Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .banner-content .genric-btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnhoverlabel', [
                'label'     => __( 'Button Hover Label Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner-content .genric-btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnborder', [
                'label'     => __( 'Button Border Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner-content .genric-btn' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnhovborder', [
                'label'     => __( 'Button Hover Border Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner-content .genric-btn:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnbg', [
                'label'       => __( 'Button Background Color', 'immigration' ),
                'type'        => Controls_Manager::COLOR,
                'default'     => '#fff',
                'selectors'   => [
                    '{{WRAPPER}} .banner-content .genric-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnhovbg', [
                'label'     => __( 'Button Hover Background Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => 'rgba(255,255,255,0)',
                'selectors' => [
                    '{{WRAPPER}} .banner-content .genric-btn:hover' => 'background-color: {{VALUE}};',
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
                'selector' => '{{WRAPPER}} .banner-area .overlay-bg',
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
                'selector' => '{{WRAPPER}} .banner-area',
            ]
        );

        $this->end_controls_section();


	}

	protected function render() {

    $settings = $this->get_settings();
    // call load widget script
    $this->load_widget_script();

    ?>
    <section class="banner-area"> 
        <?php 
        if( ! empty( $settings['bg_overlay'] ) ) {
            echo '<div class="overlay overlay-bg"></div>';
        }
        ?>
        <div class="container">             
            <div class="row fullscreen d-flex align-items-center justify-content-start">
                <div class="banner-content col-lg-9">
                    <?php 
                    // Banner Title
                    if( ! empty( $settings['banner_titleone'] ) ) {
                        echo immigration_heading_tag(
                            array(
                                'tag' => 'h6',
                                'text' => esc_html( $settings['banner_titleone'] ),
                            )
                        );
                    }
                    // 
                    if( ! empty( $settings['banner_titletwo'] ) ) {
                        echo immigration_heading_tag(
                            array(
                                'tag' => 'h1',
                                'text' => esc_html( $settings['banner_titletwo'] ),
                            )
                        );
                    }
                    //
                    if( ! empty( $settings[ 'banner_btnlabel' ] ) && !empty( $settings['banner_btnurl']['url'] ) ) {
                        echo immigration_anchor_tag(
                            array(
                                'url'   => esc_url( $settings['banner_btnurl']['url'] ),
                                'text'  => esc_html( $settings['banner_btnlabel'] ),
                                'class' => esc_attr( 'genric-btn circle' )
                            )
                        );  
                    }
                    ?>
                </div>
                <?php 
                if( ! empty( $settings['banner_img']['url'] ) ) {
                    echo immigration_img_tag(
                        array(
                            'class' => esc_attr( 'header-img img-fluid align-self-end d-flex' ),
                            'url'   => esc_url( $settings['banner_img']['url'] )
                        )
                    );
                }
                ?>
            </div>
        </div>
    </section>
    <?php

    }
    
    public function load_widget_script() {
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            // Exibition widget owlCarousel
            var window_height    = window.innerHeight,
            header_height        = $(".default-header").height(),
            fitscreen            = window_height - header_height;


            $(".fullscreen").css("height", window_height)
            $(".fitscreen").css("height", fitscreen);
        })(jQuery);
        </script>
        <?php 
        }
    }
	
}
