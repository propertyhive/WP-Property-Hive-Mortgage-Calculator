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

    <label><?php echo __( 'Purchase Price', 'propertyhive' ); ?> (&pound;)</label>
    <input type="text" name="purchase_price" value="<?php echo $atts['price']; ?>" placeholder="500,000">

    <label><?php echo __( 'Deposit Amount', 'propertyhive' ); ?> (&pound;)</label>
    <input type="text" name="deposit_amount" value="" placeholder="75,000">

    <label><?php echo __( 'Interest Rate', 'propertyhive' ); ?> (%)</label>
    <input type="text" name="interest_rate" value="" placeholder="3.2">

    <label><?php echo __( 'Repayment Period', 'propertyhive' ); ?> (<?php echo __( 'years', 'propertyhive' ); ?>)</label>
    <input type="text" name="repayment_period" value="" placeholder="25">

    <button><?php echo __( 'Calculate', 'propertyhive' ); ?></button>

    <div class="mortgage-calculator-results" id="results" style="display:none">

        <h4><?php echo __( 'Monthly Costs', 'propertyhive' ); ?>:</h4>

        <label><?php echo __( 'Repayment', 'propertyhive' ); ?> (&pound;)</label>
        <input type="text" name="repayment" value="" placeholder="" disabled>

        <label><?php echo __( 'Interest Only', 'propertyhive' ); ?> (&pound;)</label>
        <input type="text" name="interest" value="" placeholder="" disabled>

    </div>

</div>