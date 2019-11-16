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
		$result = $this->runQuery("SELECT * FROM productcategories WHERE name = '{$Name}' ");
		$row = $result->fetch_assoc();

		return new ProductCategories(
			$row['id'],
			$row['name']
		);
	}

	public function getAllProductCategories()
	{
		$result = $this->runQuery("SELECT * FROM productcategories");

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

	public function updateProductCategories($Category)
	{
		$this->runQuery(
			"UPDATE productcategories
			SET name = '{$Category->getName()}'
			WHERE id = {$Category->getId()}"
		);
	}

	public function insertProductCategories($ProductCategories)
	{
		return $this->runQuery(
			"INSERT INTO productcategories(id, name) 
			VALUE (
				'{$ProductCategories->getId()}',
				'{$ProductCategories->getName()}'
			)"
		);
	}

	public function deleteProductCategories($Id)
	{
		$this->runQuery("DELETE FROM productcategories WHERE id = {$Id}");
	}
?>