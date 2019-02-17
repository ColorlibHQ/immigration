<?php
namespace Immigrationelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Immigration elementor few words section widget.
 *
 * @since 1.0
 */
class Immigration_Blog extends Widget_Base {

	public function get_name() {
		return 'immigration-blog';
	}

	public function get_title() {
		return __( 'Blog', 'immigration' );
	}

	public function get_icon() {
		return 'eicon-post-list';
	}

	public function get_categories() {
		return [ 'immigration-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  Blog content ------------------------------
        $this->start_controls_section(
            'blog_content',
            [
                'label' => __( 'Blgo', 'immigration' ),
            ]
        );
        $this->add_control(
            'blog_sectiontitle',
            [
                'label'       => esc_html__( 'Section Title', 'immigration' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
            ]
        );
        $this->add_control(
            'blog_sectionsubtitle',
            [
                'label'       => esc_html__( 'Section Sub Title', 'immigration' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
            ]
        );
        $this->add_control(
            'blog_limit',
            [
                'label'     => esc_html__( 'Post Limit', 'immigration' ),
                'type'      => Controls_Manager::TEXT,
                'default'   => 3
            ]
        );

        $this->end_controls_section(); // End few words content

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

        //------------------------------ Style text ------------------------------
        $this->start_controls_section(
            'style_content', [
                'label' => __( 'Style Content', 'immigration' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_blogtitle', [
                'label'     => __( 'Blog Title Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .single-blog h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_blogtitlehov', [
                'label'     => __( 'Blog Title Hover Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .single-blog:hover h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_blogtext', [
                'label'     => __( 'Blog Text Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777',
                'selectors' => [
                    '{{WRAPPER}} .single-blog p'                    => 'color: {{VALUE}};',
                    '{{WRAPPER}} .single-blog .meta-bottom p'       => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_tagname', [
                'label'     => __( 'Tags Name Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .latest-blog-area .single-blog .tags li a'  => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_tagenamehover', [
                'label'     => __( 'Tags Name Hover Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .latest-blog-area .single-blog .tags li a:hover'  => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_tagbg', [
                'label'     => __( 'Tags Background Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f6214b',
                'selectors' => [
                    '{{WRAPPER}} .latest-blog-area .single-blog .tags li'    => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_taghoverbg', [
                'label'     => __( 'Tags Hover Background Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .latest-blog-area .single-blog .tags li:hover'    => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_date', [
                'label'     => __( 'Date Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .single-blog p.date'    => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();

    ?>
    <section class="latest-blog-area section-gap">
        <div class="container">
            <?php
            // Section Heading
            immigration_section_heading( $settings['blog_sectiontitle'], $settings['blog_sectionsubtitle'] );

            // Blog
            immigration_blog_section( $settings['blog_limit'] );

            ?>
        </div>
    </section>
    
    <?php

        }
	
}
