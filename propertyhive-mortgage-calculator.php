<?php
/**
 * Plugin Name: Property Hive Mortgage Calculator
 * Plugin Uri: https://wp-property-hive.com/addons/mortgage-calculator/
 * Description: Quickly and easily add a mortgage calculator to your website using a simple shortcode 
 * Version: 1.0.6
 * Author: PropertyHive
 * Author URI: https://wp-property-hive.com
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'PH_Mortgage_Calculator' ) ) :

final class PH_Mortgage_Calculator {

    /**
     * @var string
     */
    public $version = '1.0.6';

    /**
     * @var Property Hive The single instance of the class
     */
    protected static $_instance = null;

    /**
     * @var string
     */
    public $id = '';

    /**
     * @var string
     */
    public $label = '';
    
    /**
     * Main Property Hive Mortgage Calculator Instance
     *
     * Ensures only one instance of Property Hive Mortgage Calculator is loaded or can be loaded.
     *
     * @static
     * @return Property Hive Mortgage Calculator - Main instance
     */
    public static function instance() 
    {
        if ( is_null( self::$_instance ) ) 
        {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Constructor.
     */
    public function __construct() {

        $this->id    = 'mortgagecalculator';
        $this->label = __( 'Mortgage Calculator', 'propertyhive' );

        // Define constants
        $this->define_constants();

        // Include required files
        $this->includes();

        add_action( 'wp_enqueue_scripts', array( $this, 'load_mortgage_calculator_scripts' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'load_mortgage_calculator_styles' ) );

        add_shortcode( 'mortgage_calculator', array( $this, 'propertyhive_mortgage_calculator_shortcode' ) );
    }

    /**
     * Define PH Mortgage Calculator Constants
     */
    private function define_constants() 
    {
        define( 'PH_MORTGAGE_CALCULATOR_PLUGIN_FILE', __FILE__ );
        define( 'PH_MORTGAGE_CALCULATOR_VERSION', $this->version );
    }

    private function includes()
    {
        //include_once( dirname( __FILE__ ) . "/includes/class-ph-map-search-install.php" );
    }

    public function propertyhive_mortgage_calculator_shortcode( $atts )
    {
        $atts = shortcode_atts( array(
            'price' => ''
        ), $atts );

        wp_enqueue_style( 'ph-mortgage-calculator' );

        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'ph-mortgage-calculator' );

        ob_start();

        $template = locate_template( array('propertyhive/mortgage-calculator.php') );
        if ( !$template )
        {
            include( dirname( PH_MORTGAGE_CALCULATOR_PLUGIN_FILE ) . '/templates/mortgage-calculator.php' );
        }
        else
        {
            include( $template );
        }

        return ob_get_clean();
    }

    public function load_mortgage_calculator_scripts() {

        $assets_path = str_replace( array( 'http:', 'https:' ), '', untrailingslashit( plugins_url( '/', __FILE__ ) ) ) . '/assets/';

        wp_register_script( 
            'ph-mortgage-calculator', 
            $assets_path . 'js/propertyhive-mortgage-calculator.js', 
            array(), 
            PH_MORTGAGE_CALCULATOR_VERSION,
            true
        );
    }

    public function load_mortgage_calculator_styles() {

        $assets_path = str_replace( array( 'http:', 'https:' ), '', untrailingslashit( plugins_url( '/', __FILE__ ) ) ) . '/assets/';

        wp_register_style( 
            'ph-mortgage-calculator', 
            $assets_path . 'css/propertyhive-mortgage-calculator.css', 
            array(), 
            PH_MORTGAGE_CALCULATOR_VERSION
        );
    }
}

endif;

/**
 * Returns the main instance of PH_Mortgage_Calculator to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return PH_Mortgage_Calculator
 */
function PHMC() {
    return PH_Mortgage_Calculator::instance();
}

PHMC();