<?php

namespace App\Controllers;

use App\Models\{Category, Product};

// Si j'ai besoin du Model Category
// use App\Models\Category;

class MainController extends CoreController {

    /**
     * Méthode s'occupant de la page d'accueil
     *
     * @return void
     */
    public function home()
    {
    $categoryHomeModel = new Category();
    $categoryHomeList = $categoryHomeModel->find3CategoriesHomepage();
    $productHomeModel = new Product();
    $productHomeList = $productHomeModel->find3ProductsHomepage();

    $dataToDisplay = [
        'categoryHomeList' => $categoryHomeList,
        'productHomeList' => $productHomeList
    ];
    $this->show('main/home', $dataToDisplay);
    }

    public function category()
    {
    $categoryModel = new Category();
    $categoryList = $categoryModel->findAll();
    $dataToDisplay = ['categoryList' => $categoryList];
    $this->show('main/category', $dataToDisplay);
    }

    public function product()
    {
    $productModel = new Product();
    $productList = $productModel->findAll();
    $dataToDisplay = ['productList' => $productList];
    $this->show('main/product', $dataToDisplay);
    }
    public function productAdd()
    {
        $this->show('main/product-add');
    }
    public function categoryAdd()
    {
        $this->show('main/product-add');
    }
}
