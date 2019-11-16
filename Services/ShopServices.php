<?php

require_once SITE_ROOT."/Dao/ProductCategoriesDao.php";
require_once SITE_ROOT."/Dao/ProductDao.php";

class ShopServices
{
	private $productDao;
	private $productCategoriesDao;

	public function __construct() {
		$this->productDao = new ProductDao();
		$this->productCategoriesDao = new ProductCategoriesDao();
    }


    // Product
    public function getAllProducts()
    {
    	return $this->productDao->getAllProducts();
    }

    public function getProductByCategory($Category)
    {
    	return $this->productDao->getProductByCategory($Category);
    }

    public function getProductById($Id)
    {
    	return $this->productDao->getProductById($Id);
    }

    public function insertProduct($Product)
    {
    	$this->productDao->insertProduct($Product);
    }

    public function updateProduct($Product)
    {
    	$this->productDao->updateProduct($Product);
    }

    public function deleteProduct($Id)
    {
    	$this->productDao->deleteProduct($Id);
    }


    // Product Categories
    public function getAllProductCategories()
    {
    	return $this->productCategoriesDao->getAllProductCategories();
    }

    public function getIdByNameProductCategories($Name)
    {
    	return $this->ProductCategoriesDao->getIdByNameProductCategories($Name);
    }

    public function insertProductCategories($ProductCategories)
    {
    	$this->ProductCategoriesDao->insertProductCategories($ProductCategories);
    }

    public function updateProductCategories($ProductCategories)
    {
    	$this->ProductCategoriesDao->updateProductCategories($ProductCategories);
    }

    public function deleteProductCategories($Id)
    {
    	$this->ProductCategoriesDao->deleteProductCategories($Id);
    }
}

?>