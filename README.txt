=== Property Hive Mortgage Calculator ===
Contributors: PropertyHive,BIOSTALL
Tags: mortgage calculator, mortgage, repayments, propertyhive, property hive, property, real estate, estate agents, estate agent
Requires at least: 3.8
Tested up to: 6.6.2
Stable tag: 1.0.6
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Quickly and easily add a mortgage calculator to your website

== Description ==

This plugin, from the creators of [Property Hive](https://wordpress.org/plugins/propertyhive/), allows you to quickly and easily add a mortgage calculator to your website by simply adding the shortcode [mortgage_calculator] where you want it to appear.

Users simply enter the purchase price, deposit amount, interest rate and repayment period, then the repayment information is calculated instantly.

[Documentation](https://docs.wp-property-hive.com/category/533-mortgage-calculator)

Note: This plugin is independent of Property Hive. You DO NOT need to be using Property Hive to download and use this plugin.

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