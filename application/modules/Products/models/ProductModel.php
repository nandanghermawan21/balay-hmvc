<?php
/**
 * Created by PhpStorm.
 * User: hermawan
 * Date: 8/4/2018
 * Time: 11:48 PM
 */

class ProductModel extends CI_Model
{
    /**
     * ProductModel constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return array(Category)
     * @param $withImage boolean
     */
    public function loadCategory($withImage = false){
        $res = $this->db->get("modul_product_category");
        $resArray = $res->result_array();

        //get all category
        $categories = array();
        foreach ($resArray as $item){
            $item = castObjectFromArray($item,new Category());
            array_push( $categories,$item);
        }

        //get all product
        foreach ($categories as $category){
            /** @var $category Category */
            $category->products = $this->getProductByCategory($category->id,$withImage);
        }

        return $categories;
    }

    /**
     * @return array(Product)
     * @param $categoryId integer
     * @param $withImage boolean
     */
    public function getProductByCategory($categoryId, $withImage = false){

        /** @var  $products array(Product)*/
        $products = array();

        $res = $this->db->get_where("modul_product",array("category_id" => $categoryId));
        $resArray = $res->result_array();
        foreach ($resArray as $item){
            $item = castObjectFromArray($item, new Product());
            array_push($products,$item);
        }

        //load image
        if($withImage){
            foreach ($products as $product){
                /**@var  $product Product */
                $product->productImages = $this->getProductImageByProductId($product->id);
            }
        }

        return $products;
    }

    /**
     * @param $productId
     * @return array(ProductImage)
     */
    public function getProductImageByProductId($productId){

        /** @var  $images array(ProductImage)*/
        $images = array();

        $res = $this->db->get_where("modul_product_image",array("product_id" => $productId));
        $resArray = $res->result_array();
        foreach ($resArray as $item){
            $item = castObjectFromArray($item, new ProductImage());
            array_push($images,$item);
        }

        return $images;
    }


    /**
     * @param $productId
     * @param $withImage boolean
     * @return Product
     */
    public function getProductById($productId,$withImage = false){
        $res = $this->db->get_where("modul_product",array("id" => $productId));
        $res = $res->row_array();

        /** @var  $product Product*/
        $product = castObjectFromArray($res, new Product());

        if($withImage){
            $product->productImages = $this->getProductImageByProductId($product->id);
        }

        return $product;
    }

    /**
     * @param $categoryId integer
     * @param $withProduct boolean
     * @param $withImage boolean
     * @return Category
     */
    public function getCtegoryById($categoryId, $withProduct = false, $withImage = false){
        $res = $this->db->get_where("modul_product_category",array("id" => $categoryId));
        $res = $res->row_array();

        /** @var  $category Category*/
        $category = castObjectFromArray($res, new Category());

        if($withProduct){
            $category->products = $this->getProductByCategory($category->id,$withImage);
        }

        return $category;
    }
}

/**
 * Class Category
 */
class Category{
    /** @var integer */
    public $id;

    /** @var string */
    public $image;

    /** @var string */
    public $name;

    /**
     * @var string
     */
    public $description;

    /** @var array(Product) */
    public $products = array();

     /**
     * @param int $id
     * @return Category
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $image
     * @return Category
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param array $products
     * @return Category
     */
    public function setProducts($products)
    {
        $this->products = $products;
        return $this;
    }


    /**
     * @return array
     */
    public function getClass() {
       return get_object_vars($this);
    }

    /**
     * @param string $description
     * @return Category
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }



}

/**
 * Class Product
 */
class Product{
    /** @var integer */
    public $category_id;

    /** @var integer */
    public $id;

    /** @var string */
    public $image;

    /** @var string */
    public $name;

    /** @var array(ProductImage) */
    public $productImages = array();

    /**
     * @var string
     */
    public $description;

    /**
     * @param int $id
     * @return Product
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $image
     * @return Product
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param array $productImages
     * @return Product
     */
    public function setProductImages($productImages)
    {
        $this->productImages = $productImages;
        return $this;
    }

    /**
     * @return array
     */
    public function getClass() {
        return get_object_vars($this);
    }

    /**
     * @param int $category_id
     * @return Product
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
        return $this;
    }

    /**
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }



}


/**
 * Class ProductImage
 */
class ProductImage{
    /** @var integer */
    public $product_id;

    /** @var integer */
    public $id;

    /** @var string */
    public $image;

     /**
     * @param int $product_id
     * @return ProductImage
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
    }

    /**
     * @param int $id
     * @return ProductImage
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $image
     * @return ProductImage
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return array
     */
    public function getClass() {
        return get_object_vars($this);
    }
}