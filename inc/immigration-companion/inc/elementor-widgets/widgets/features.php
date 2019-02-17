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
class Immigration_Features extends Widget_Base {

	public function get_name() {
		return 'immigration-features';
	}

	public function get_title() {
		return __( 'Features', 'immigration' );
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
            'features_heading',
            [
                'label' => __( 'Features Section Heading', 'immigration' ),
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
			'features_block',
			[
				'label' => __( 'Features', 'immigration' ),
			]
		);
		$this->add_control(
            'features_content', [
                'label' => __( 'Create Features', 'immigration' ),
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
                        'name' => 'fonticon',
                        'label' => __( 'Font Icon', 'immigration' ),
                        'type' => Controls_Manager::ICON,
                    ],
                    [
                        'name'  => 'desc',
                        'label' => __( 'Descriptions', 'immigration' ),
                        'type'  => Controls_Manager::TEXTAREA,
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

        //------------------------------ Style Features ------------------------------
        $this->start_controls_section(
            'style_features', [
                'label' => __( 'Style Features', 'immigration' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'features_title_heading',
            [
                'label'     => __( 'Style Feature Title ', 'immigration' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'color_featuretitle', [
                'label' => __( 'Title Color', 'immigration' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-feature h4' => 'color: {{VALUE}};',
                ],
            ]
        );

        //
        $this->add_control(
            'features_fonticon_heading',
            [
                'label'     => __( 'Style Font Icon', 'immigration' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'color_fonticon', [
                'label'     => __( 'Font Icon Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-feature .fa' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'fontsize',
            [
                'label' => __( 'Icon Font Size', 'immigration' ),
                'type'  => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default'  => [
                    'unit' => 'px',
                    'size' => 18,
                ],
                'selectors' => [
                    '{{WRAPPER}} .single-feature .fa' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Text_Shadow::get_type(), [
                'name'      => 'text_shadow_fonticon',
                'selector'  => '{{WRAPPER}} .single-feature .fa',
            ]
        );

        //
        $this->add_control(
            'features_desc_heading',
            [
                'label'     => __( 'Style Descriptions', 'immigration' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'color_desc', [
                'label'     => __( 'Descriptions Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-feature p' => 'color: {{VALUE}};',
                ],
            ]
        );


        $this->end_controls_section();


	}

	protected function render() {

    $settings = $this->get_settings();

    ?>

    <!-- Start feature Area -->
    <section class="feature-area section-gap">
        <div class="container">

            <?php 
            // Section Heading
            immigration_section_heading( $settings['sect_title'], $settings['sect_subtitle'] );
            ?>

            <div class="row">

                <?php 
                if( is_array( $settings['features_content'] ) && count( $settings['features_content'] ) > 0 ):
                    foreach( $settings['features_content'] as $feature ):
 
                // Icon
                $icon = '';
                if( ! empty( $feature['fonticon'] ) ) {
                    $icon = '<i class="'. esc_attr( $feature['fonticon'] ) .'"></i>';
                } 
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <h4><?php echo $icon.' '.esc_html( $feature['label'] ); ?></h4>
                        <p>
                        <?php echo esc_html( $feature['desc'] ); ?>
                        </p>
                    </div>
                </div>
                <?php 
                    endforeach;
                endif;
                ?>
            </div>
        </div>  
    </section>
    <?php

    }

	
}
