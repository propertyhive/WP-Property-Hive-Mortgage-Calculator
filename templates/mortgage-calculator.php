<?php
/**
 * The Template for displaying the mortgage calculator form and results
 *
 * Override this template by copying it to yourtheme/propertyhive/mortgage-calculator.php
 *
 * NOTE: For the calculation to still occur it's important that most classes, ids and input names remain unchanged
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<div class="mortgage-calculator">

    <label><?php echo esc_html( __( 'Purchase Price', 'propertyhive' ) ); ?> (&pound;)</label>
    <input type="text" name="purchase_price" value="<?php echo esc_attr( $atts['price'] ); ?>" placeholder="e.g. 500,000">

    <label><?php echo esc_html( __( 'Deposit Amount', 'propertyhive' ) ); ?> (&pound;)</label>
    <input type="text" name="deposit_amount" value="<?php echo esc_attr( $deposit ); ?>" placeholder="e.g. 75,000">

    <label><?php echo esc_html( __( 'Interest Rate', 'propertyhive' ) ); ?> (%)</label>
    <input type="text" name="interest_rate" value="5.1">

    <label><?php echo esc_html( __( 'Repayment Period', 'propertyhive' ) ); ?> (<?php echo esc_html( __( 'years', 'propertyhive' ) ); ?>)</label>
    <input type="text" name="repayment_period" value="25">

    <button><?php echo esc_html( __( 'Calculate', 'propertyhive' ) ); ?></button>

    <div class="mortgage-calculator-results" id="results" style="display:none">

        <h4><?php echo esc_html( __( 'Monthly Costs', 'propertyhive' ) ); ?>:</h4>

        <label><?php echo esc_html( __( 'Repayment', 'propertyhive' ) ); ?> (&pound;)</label>
        <input type="text" name="repayment" value="" placeholder="" disabled>

        <label><?php echo esc_html( __( 'Interest Only', 'propertyhive' ) ); ?> (&pound;)</label>
        <input type="text" name="interest" value="" placeholder="" disabled>

    </div>

</div>
