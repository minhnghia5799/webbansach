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
		$newList0 = array();
		for ($i = count($productList)-1; $i >= count($productList)-3; $i--)
		{
			array_push($newList0, $productList[$i]);
		}
		return $newList0;
	}

	public function get3ProductViewed($productList)
	{
		$newList1 = array();
		for ($j = 1; $j <= 3; $j++)
		{
			$max = $productList[0]->getViewedAmount();
			$tmp = 0;
			for ($i = 1; $i < count($productList); $i++)
			{
				if ($max < $productList[$i]->getViewedAmount()) 
				{
					$max = $productList[$i]->getViewedAmount();
					$tmp = $i;
				}
			}	
			array_push($newList1, $productList[$tmp]);			
			array_splice($productList, $tmp, 1);
		}
		return $newList1;
	}

	public function get3ProductSelled($productList)
	{
		$newList2 = array();
		for ($j = 1; $j <= 3; $j++)
		{
			$max = $productList[0]->getSelledAmount();
			$tmp = 0;
			for ($i = 1; $i < count($productList); $i++)
			{
				if ($max < $productList[$i]->getSelledAmount()) 
				{
					$max = $productList[$i]->getSelledAmount();
					$tmp = $i;
				}
			}	
			array_push($newList2, $productList[$tmp]);
			array_splice($productList, $tmp, 1);
		}
		return $newList2;
	}

	




	// Shop Page
	public function getProductByNumberList($num, $productList)
	{
		$newList = array();
		for ($i = $num*12-12; $i <= $num*12-1; $i++)
		{
			if ($i >= count($productList)) break;
			array_push($newList, $productList[$i]);
		}
		return $newList;
	}

	public function get5NumberList($num, $totalNum)
	{
		$list = array();
		if ($num == 1 || $num == 2)
		{
			array_push($list, 1);
			array_push($list, 2);
			array_push($list, 3);
			array_push($list, 4);
			array_push($list, 5);
		}
		else if ($num == $totalNum || $num == $totalNum-1)
		{
			array_push($list, $totalNum-4);
			array_push($list, $totalNum-3);
			array_push($list, $totalNum-2);
			array_push($list, $totalNum-1);
			array_push($list, $totalNum);
		}
		else 
		{
			array_push($list, $num-2);
			array_push($list, $num-1);
			array_push($list, $num);
			array_push($list, $num+1);
			array_push($list, $num+2);	
		}

		return $list;
	}
}

?>