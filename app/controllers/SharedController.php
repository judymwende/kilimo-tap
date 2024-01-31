<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * products_product_category_option_list Model Action
     * @return array
     */
	function products_product_category_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT category AS value,category AS label FROM product_categories";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

}
