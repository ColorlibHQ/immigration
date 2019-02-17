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
 * Consultancy elementor about us section widget.
 *
 * @since 1.0
 */
class Consultancy extends Widget_Base {

	public function get_name() {
		return 'immigration-consultancy';
	}

	public function get_title() {
		return __( 'Consultancy', 'immigration' );
	}

	public function get_icon() {
		return 'eicon-column';
	}

	public function get_categories() {
		return [ 'immigration-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  content ------------------------------
        $this->start_controls_section(
            'consultancy_content',
            [
                'label' => __( 'Consultancy', 'immigration' ),
            ]
        );
        $this->add_control(
            'consultancy_titleone',
            [
                'label'         => esc_html__( 'Title #1', 'immigration' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true
            ]
        );
        $this->add_control(
            'consultancy_titletwo',
            [
                'label'         => esc_html__( 'Title #2', 'immigration' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true
            ]
        );
        $this->add_control(
            'consultancy_desc',
            [
                'label'         => esc_html__( 'Description', 'immigration' ),
                'type'          => Controls_Manager::TEXTAREA,
                'label_block'   => true
            ]
        );
        $this->add_control(
            'consultancy_btnlabel',
            [
                'label'         => esc_html__( 'Button Label', 'immigration' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Explore Us', 'immigration' )
            ]
        );
        $this->add_control(
            'consultancy_btnurl',
            [
                'label'         => esc_html__( 'Button Url', 'immigration' ),
                'type'          => Controls_Manager::URL,
                'show_external' => false
            ]
        );

        $this->end_controls_section(); // End content

        // ----------------------------------------  Form Settings ------------------------------
        $this->start_controls_section(
            'consultancy_formsettings',
            [
                'label' => __( 'Banner Form Settings', 'immigration' ),
            ]
        );
        $this->add_control(
            'booking_form_show',
            [
                'label'         => esc_html__( 'Show Car Booking Form', 'immigration' ),
                'type'          => Controls_Manager::SWITCHER,
            ]
        );
        $this->add_control(
            'consultancy_formtitle',
            [
                'label'         => esc_html__( 'Form Title', 'immigration' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Book Your Car Today!', 'immigration' )
            ]
        );
        $this->end_controls_section(); // End Form Settings

        //------------------------------ Style Content ------------------------------
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
                    '{{WRAPPER}} .booking-left h1' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name'      => 'typography_titleone',
                'selector'  => '{{WRAPPER}} .booking-left h1',
            ]
        );
        $this->add_control(
            'color_titletwo', [
                'label'     => __( 'Title #2 Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .booking-left h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name'      => 'typography_titletwo',
                'selector'  => '{{WRAPPER}} .booking-left h4',
            ]
        );
        $this->add_control(
            'color_desc', [
                'label'     => __( 'Description Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777777',
                'selectors' => [
                    '{{WRAPPER}} .booking-left p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name'      => 'typography_desc',
                'selector'  => '{{WRAPPER}} .booking-left p',
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
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .primary-btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnhoverlabel', [
                'label'     => __( 'Button Hover Label Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .primary-btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnborder', [
                'label'     => __( 'Button Border Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f6214b',
                'selectors' => [
                    '{{WRAPPER}} .primary-btn' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnhovborder', [
                'label'     => __( 'Button Hover Border Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .primary-btn:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnbg', [
                'label'       => __( 'Button Background Color', 'immigration' ),
                'type'        => Controls_Manager::COLOR,
                'default'     => '#f6214b',
                'selectors'   => [
                    '{{WRAPPER}} .primary-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnhovbg', [
                'label'     => __( 'Button Hover Background Color', 'immigration' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => 'rgba(255,255,255,0)',
                'selectors' => [
                    '{{WRAPPER}} .primary-btn:hover' => 'background-color: {{VALUE}};',
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
                'selector' => '{{WRAPPER}} .booking-area .overlay-bg',
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
                'selector' => '{{WRAPPER}} .booking-area',
            ]
        );

        $this->end_controls_section();


	}

	protected function render() {

    $settings = $this->get_settings();
    // call load widget script
    $this->load_widget_script();

   $result = immigration_booking_form_data();


    ?>
    <section class="booking-area section-gap relative" id="consultancy">
        <?php 
        if( ! empty( $settings['bg_overlay'] ) ) {
            echo '<div class="overlay overlay-bg"></div>';
        }
        ?>
        
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 col-md-6 booking-left">
                    <?php 
                    // Text one
                    if( ! empty( $settings['consultancy_titleone'] ) ) {
                        echo immigration_heading_tag(
                            array(
                                'tag'   => 'h1',
                                'text'  => esc_html( $settings['consultancy_titleone'] )
                            )
                        );
                    }
                    // Text two
                    if( ! empty( $settings['consultancy_titletwo'] ) ) {
                        echo immigration_heading_tag(
                            array(
                                'tag'  => 'h4',
                                'text' => esc_html( $settings['consultancy_titletwo'] ),

                            )
                        );
                    }
                    // 
                    if( ! empty( $settings['consultancy_desc'] ) ) {
                        echo immigration_paragraph_tag(
                            array(
                                'text' => esc_html( $settings['consultancy_desc'] )
                            )
                        );
                    }
                    //
                    if( !empty( $settings['consultancy_btnlabel'] ) && !empty( $settings['consultancy_btnurl']['url'] ) ){
                        echo immigration_anchor_tag(
                            array(
                                'text'  => esc_html( $settings['consultancy_btnlabel'] ),
                                'url'   => esc_url( $settings['consultancy_btnurl']['url'] ),
                                'class' => 'primary-btn'
                            )
                        );
                    }
                    ?>
                </div>
                <?php 
                if( ! empty( $settings['booking_form_show'] ) ):
                ?>
                <div class="col-lg-4 col-md-6 booking-right">
                    <?php 
                    if( ! empty( $settings['consultancy_formtitle'] ) ) {

                        echo immigration_heading_tag (
                            array(
                                'tag'  => 'h4',
                                'text' => esc_html( $settings['consultancy_formtitle'] ),
                                'class' => 'mb-20'

                            )
                        );
                    }
                    //

                    if( $result ) {
                        echo '<div class="alert alert-info"> ' . esc_html( $result ) . ' </div>';
                    }

                    ?>
                    <form action="#" method="post">
                        <input class="form-control" type="text" name="uname" placeholder="<?php esc_attr_e( 'Your name', 'immigration' ) ?>" required>
                        <input class="form-control" type="email" name="uemail" placeholder="<?php esc_attr_e( 'Email Address', 'immigration' ) ?>" required>
                        <input class="form-control" type="text" name="uphone" placeholder="<?php esc_attr_e( 'Phone Number', 'immigration' ) ?>">
                        <div class="default-select">
                            <select name="ucompany">
                                <option value="" disabled selected hidden><?php esc_attr_e( 'Company Type', 'immigration' ) ?></option>
                                <?php
                                $companytypes = unserialize( get_option( 'companytypes' ) );
                                if( is_array( $companytypes ) && count( $companytypes ) > 0 ) {
                                    foreach( $companytypes as $val ) {
                                        echo '<option value="' .esc_attr( $val ). '">' . esc_html( $val ) . '</option>';
                                    }
                                }
                                ?>                          
                            </select>
                        </div>
                        <textarea class="common-textarea form-control mt-10" name="umessage" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
                        <?php wp_nonce_field( 'request_nonce_action', 'request_submit_nonce_check' ); ?>
                        <button  name="booking_submit" class="btn btn-default btn-lg btn-block text-center"><?php esc_html_e( 'Request Free Consultancy', 'immigration' ) ?></button>
                    </form>
                </div>
                <?php 
                endif;
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
