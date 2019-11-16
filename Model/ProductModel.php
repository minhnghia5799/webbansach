<?php

class ProductModel
{
	public function __construct() {}



	// Home Page
	public function get10ProductNew($productList)
	{
		$newList = array();
		for ($i = count($productList)-1; $i >= count($productList)-10; $i--)
		{
			array_push($newList, $productList[$i]);
		}
		return $newList;
	}

	public function get3ProductNew($productList)
	{
		$newList = array();
		for ($i = count($productList)-1; $i >= count($productList)-3; $i--)
		{
			array_push($newList, $productList[$i]);
		}
		return $newList;
	}

	//	Cần 2 cột nữa của DB và thêm 2 function nữa tại đây (Top Seller and Top Viewer)




	// Shop Page
	public function getProductByNumberList($num, $productList)
	{
		$newList = array();
		for ($i = $num*12-12; $i <= $num*12-1; $i++)
		{
			array_push($newList, $productList[$i]);
		}
		return $newList;
	}
}

?>