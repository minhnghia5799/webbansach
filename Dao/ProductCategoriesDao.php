<?php
require_once SITE_ROOT."/Config/DBCon.php";
require_once SITE_ROOT."/Entity/ProductCategories.php";


class ProductCategoriesDao extends DBConnection
{
	public function __construct() {
		parent::__construct();
	}
	
    public function getIdByNameProductCategory($Name)
	{
		$result = $this->runQuery("SELECT name FROM product_categories WHERE name = '$Name' ");

		return $result->fetch_assoc()['id'];
	}

	public function getAllProductCategories()
	{
		$result = $this->runQuery("SELECT * FROM product_categories");

		$categoriesList = array();
		while ($row = $result->fetch_assoc())
		{
			$Category = new ProductCategories(
				$row['id'],
				$row['name']
			);
			array_push($categoriesList, $Category);
		}
		$result->free();
		return $categoriesList;
	}

	public function updateCategory($Category)
	{
		$this->runQuery(
			"UPDATE product_categories
			SET name = '{$Category->name}'
			WHERE id = {$Category->id}"
		);
	}

	public function insertProductCategories($name)
	{
		return $this->runQuery(
			"INSERT INTO productcategories(id,name) 
		VALUE (
			'{$ProductCategories->getId}',
			'{$ProductCategories->getName}'
			)"
			);
	}

	public function deleteProductCategories($Id)
	{
		$this->runQuery("DELETE FROM product_categories WHERE id = {$Id}");
	}
?>