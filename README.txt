=== Property Hive Mortgage Calculator ===
Contributors: PropertyHive,BIOSTALL
Tags: mortgage calculator, mortgage, repayments, propertyhive, property hive, property, real estate, estate agents, estate agent
Requires at least: 3.8
Tested up to: 7.1
Stable tag: 1.0.8
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Quickly and easily add a mortgage calculator to your website

== Description ==

Add a free, easy-to-use mortgage calculator to your WordPress website in seconds. Help visitors estimate their monthly mortgage repayments based on property price, deposit, interest rate and mortgage term.

The **Property Hive Mortgage Calculator** plugin makes it simple to add an interactive mortgage repayment calculator to any WordPress website. Perfect for estate agents, property professionals and anyone looking to help buyers understand the potential monthly cost of purchasing a home.

Simply add a shortcode to any page or post, and visitors can instantly calculate their estimated mortgage repayments.

= Features =

* **Free WordPress mortgage calculator** - No subscription or ongoing fees.
* **Instant mortgage repayment calculations** - Help visitors estimate their monthly mortgage payments in seconds.
* **Customisable mortgage details** - Visitors can enter the property purchase price, deposit amount, interest rate and repayment period.
* **Easy shortcode integration** - Add a mortgage calculator to any WordPress page or post in seconds.
* **Simple to use** - No complicated configuration or technical knowledge required.
* **Perfect for estate agents** - Give prospective buyers a useful tool to help understand property affordability.
* **Works independently** - Compatible with any WordPress website. Property Hive is not required.

= How Does the Mortgage Calculator Work? =

The mortgage calculator allows website visitors to enter four key details:

1. **Property purchase price** - The price of the property they're looking to buy.
2. **Deposit amount** - How much they intend to put towards the purchase.
3. **Interest rate** - The annual mortgage interest rate.
4. **Mortgage term** - The number of years over which the mortgage will be repaid.

Using these figures, the calculator instantly estimates the mortgage repayments, helping buyers better understand the potential cost of their new home.

= How to Add a Mortgage Calculator to WordPress =

Getting started couldn't be easier:

1. Install and activate the Property Hive Mortgage Calculator plugin.
2. Create or edit the WordPress page or post where you want the calculator to appear.
3. Add the following shortcode:

`[mortgage_calculator]`

4. Save your page and you're done! Visitors can now calculate their estimated mortgage repayments directly on your website.

= Perfect for Estate Agent Websites =

When searching for a new home, one of the biggest questions buyers have is how much their mortgage repayments might be each month.

By adding a free mortgage calculator to your estate agency website, you can help prospective buyers explore their potential monthly repayments without needing to leave your website.

Whether visitors are first-time buyers, home movers or simply researching property prices, a mortgage repayment calculator is a valuable addition to any property website.

= Do I Need Property Hive? =

**No!** Although developed by the creators of [Property Hive](https://wordpress.org/plugins/propertyhive/), this mortgage calculator is a completely standalone WordPress plugin.

You don't need to have Property Hive installed or be using it to manage your properties. Simply install the plugin and start displaying a mortgage calculator on your website.

== Installation ==

= Automatic installation =

Automatic installation is the easiest option as WordPress handles the file transfers itself and you don’t need to leave your web browser. To do an automatic install of the Property Hive mortgage calculator, log in to your WordPress dashboard, navigate to the Plugins menu and click Add New.

In the search field type “Property Hive Mortgage Calculator” and click Search Plugins. Once you’ve found our plugin you can view details about it such as the point release, rating and description. Most importantly of course, you can install it by simply clicking “Install Now”.

= Manual installation =

The manual installation method involves downloading the plugin and uploading it to your webserver via your favourite FTP application. The WordPress codex contains [instructions on how to do this here](https://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).

= Updating =

Updating should work like a charm; as always though, ensure you backup your site just in case.

= The Shortcode =

Simply add the shortcode [mortgage_calculator] where you want it to appear.

If you want to default the 'Purchase Price' you can also pass a 'price' attribute through to the shortcode like so: [mortgage_calculator price="200000"] 

== Screenshots ==

1. Once you've added the shortcode the mortgage calculator becomes avalaible for people to complete
2. Users are instantly shown monthly repayment information once they've completed the form

== Changelog ==

= 1.0.8 =
* Declared support for WordPress 7.1

= 1.0.7 =
* Update default interest rate shown in form to 5.1% to be more inline with todays average rates
* Made interest rate and years default values in inputs, as opposed to placeholders
* If a price is provided as an attribute, default the deposit input to 10% of this price
* Added sanitization and escape elements output in form template
* Declared support for WordPress 6.7.1

= 1.0.6 =
* PHP8.2 compatibility
* Declared support for WordPress 6.6.2

= 1.0.5 =
* Declared support for WordPress 6.5.3

= 1.0.4 =
* Declared support for WordPress 5.7.2

= 1.0.3 =
* Added ability to pass in 'price' attribute to shortcode for when being used on a property page
* Declared support for WordPress 4.9.8

= 1.0.2 =
* Provided ability to override template by creating a copy in yourtheme/propertyhive/mortgage-calculator.php
* Declared support for WordPress 4.6.1

= 1.0.1 =
* Fixed issue with shortcode output being echoed instead of returned, meaning it would appear in the wrong place
* Declared support for WordPress 4.6

= 1.0.0 =
* First working release of the plugin