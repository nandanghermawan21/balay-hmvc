<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Home class
 * Extending Front_Controller. Check /core/Front_Controller
 *
 * @author budy k
 * @link www.facebook.com/teknosains
 * @link www.teknosains.com
 *
 */
class Frontend extends Front_Controller
{
    public function __construct()
    {
        parent::__construct();
        LayoutFactory::Instance()->setSelectedMenu("2");

        $this->load->model("ProductModel");
    }

    /**
     * Default | Home
     *
     */
    public function index()
    {
        $data = array();
        $data["category"] = $this->ProductModel->loadCategory();


        $this->frontend($data, 'frontend/index');
    }

    public function category($id){
        $data = array();
        $data["category"] = $this->ProductModel->getCtegoryById($id,true);

        //make menu for add to breadcumb
        $productMenu = new Menu();
        $productMenu->setId(1)
            ->setName("Product")
            ->setSlug("Frontend/Products")
            ->setActive(1);

        $categoryMenu = new Menu();
        $categoryMenu->setId(2)
            ->setName($data["category"]->name)
            ->setSlug('!#')
            ->setActive("0");

        Pagefactory::Instance()->addToBreadcumb($productMenu)
            ->addToBreadcumb($categoryMenu);

        $this->frontend($data,"frontend/category");

    }

    /**
     * @param $id integer
     */
    public function detail($id){
        $data = array();
        $data["product"] = $this->ProductModel->getProductById($id,true);
        $data["category"] = $this->ProductModel->getCtegoryById($data["product"]->category_id);

        //make menu for add to breadcumb
        $productMenu = new Menu();
        $productMenu->setId(1)
            ->setName("Product")
            ->setSlug("Frontend/Products")
            ->setActive(1);

        $categoryMenu = new Menu();
        $categoryMenu->setId(2)
            ->setName($data["category"]->name)
            ->setSlug('Frontend/Products/Category/'.$data["category"]->id)
            ->setActive("1");

        $detailMenu = new Menu();
        $detailMenu->setId(2)
            ->setName($data["product"]->name)
            ->setSlug('!#')
            ->setActive("0");


        Pagefactory::Instance()
            ->clearBreadcumb()
            ->addToBreadcumb($productMenu)
            ->addToBreadcumb($categoryMenu)
            ->addToBreadcumb($detailMenu);


        $this->frontend($data,'frontend/detail');
    }

}
