<?php

require_once SITE_ROOT."/Dao/ProductCategoriesDao.php";
require_once SITE_ROOT."/Dao/ProductsDao.php";

class ShopServices
{
	private $productDao;
	private $productCategoriesDao;

	public function __construct() {
		$this->productDao = new ProductsDao();
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
    	return $this->productCategoriesDao->getIdByNameProductCategories($Name);
    }

    public function getNameById($Id)
    {
        return $this->productCategoriesDao->getNameById($Id);
    }

    public function insertProductCategories($ProductCategories)
    {
    	$this->productCategoriesDao->insertProductCategories($ProductCategories);
    }

    public function updateProductCategories($ProductCategories)
    {
    	$this->productCategoriesDao->updateProductCategories($ProductCategories);
    }

    public function deleteProductCategories($Id)
    {
    	$this->productCategoriesDao->deleteProductCategories($Id);
    }
}

?>