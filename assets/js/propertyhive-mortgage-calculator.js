function ph_mc_add_commas(nStr)
{
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + ',' + '$2');
	}
	return x1 + x2;
}

function ph_mc_calculate()
{
	var data = {
    	deposit_amount: jQuery('.mortgage-calculator input[name=\'deposit_amount\']').val().replace(/,/g, ''),
    	purchase_price: jQuery('.mortgage-calculator input[name=\'purchase_price\']').val().replace(/,/g, ''),
    	interest_rate: jQuery('.mortgage-calculator input[name=\'interest_rate\']').val().replace(/,/g, '').replace('%', ''),
    	repayment_period: jQuery('.mortgage-calculator input[name=\'repayment_period\']').val().replace(/,/g, '')
	};

	if (data.deposit_amount == '')
	{
		data.deposit_amount = 0;
	}

    if ( data.purchase_price != '' && data.interest_rate != '' && data.repayment_period != '' )
    {
    	var remaining = data.purchase_price - data.deposit_amount;
        var ratePerMonth = data.interest_rate / 1200;
        var monthlyRepayment = (remaining * ratePerMonth) / (1 - (1 / Math.pow((1 + ratePerMonth), data.repayment_period * 12)));
        var loanValue = monthlyRepayment * data.repayment_period * 12;
        var interestRepayment = (remaining / 100) * (data.interest_rate / 12);

        jQuery(".mortgage-calculator #results input[name=\'repayment\']").val(ph_mc_add_commas(monthlyRepayment.toFixed(2)));
        jQuery(".mortgage-calculator #results input[name=\'interest\']").val(ph_mc_add_commas(interestRepayment.toFixed(2)));

        jQuery('.mortgage-calculator #results').slideDown();
    }
}

jQuery(document).ready(function()
{
	jQuery("body").on('blur', '.mortgage-calculator input', function() 
	{
		ph_mc_calculate();
	});
	jQuery("body").on('click', '.mortgage_calculator button', function() 
	{
		ph_mc_calculate();
	});
});