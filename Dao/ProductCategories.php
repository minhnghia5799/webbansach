<?php
include_once("config/DBCon.php");

class productCategory extends DBConnection
{
	public function __construct() {
		parent::__construct();
    }
    public function getIdByNameProductCategory($name)
	{
		$result = $this->runQuery("SELECT name FROM product_categories WHERE name = '{$$Category->name}' ");
		return $result->fetch_assoc()['id'];
	}

	public function getAllProductCategories()
	{
		$result = $this->runQuery("SELECT * FROM product_categories");

		$categoriesList = array();
		while ($row = $result->fetch_assoc())
		{
			$category = new ProductCategory(
				$row['id'],
				$row['name']
			);
			array_push($categoriesList, $category);
		}

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

	public function insertCategory($name)
	{
		$this->runQuery("INSERT INTO product_categories(NAME) VALUE ('{$name}')");
	}

	public function deleteCategory($CategoryID)
	{
		$this->runQuery("DELETE FROM product_categories WHERE id = {$CategoryID}");
	}
