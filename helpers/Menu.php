<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbartopleft = array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => '<i class="fa fa-home "></i>'
		),
		
		array(
			'path' => 'farmers', 
			'label' => 'Farmers', 
			'icon' => '<i class="fa fa-users "></i>'
		),
		
		array(
			'path' => 'products', 
			'label' => 'Products', 
			'icon' => '<i class="fa fa-leaf "></i>','submenu' => array(
		array(
			'path' => 'products', 
			'label' => 'Products', 
			'icon' => ''
		),
		
		array(
			'path' => 'product_categories', 
			'label' => 'Product Categories', 
			'icon' => ''
		)
	)
		),
		
		array(
			'path' => 'buyers', 
			'label' => 'Buyers', 
			'icon' => '<i class="fa fa-shopping-cart "></i>'
		),
		
		array(
			'path' => 'logistics', 
			'label' => 'Logistics', 
			'icon' => '<i class="fa fa-car "></i>','submenu' => array(
		array(
			'path' => 'vehicles', 
			'label' => 'Vehicles', 
			'icon' => ''
		)
	)
		),
		
		array(
			'path' => 'on_demand_products', 
			'label' => 'On Demand Products', 
			'icon' => '<i class="fa fa-cart-plus "></i>'
		)
	);
		
	
	
			public static $terms = array(
		array(
			"value" => "Fixed", 
			"label" => "Fixed", 
		),
		array(
			"value" => "Negotiable", 
			"label" => "Negotiable", 
		),);
		
			public static $gender = array(
		array(
			"value" => "Male", 
			"label" => "Male", 
		),
		array(
			"value" => "Female", 
			"label" => "Female", 
		),);
		
}