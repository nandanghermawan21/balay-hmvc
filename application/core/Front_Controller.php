<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Front Controller...Pre-Logged-in stuff
 *
 * @author budy k
 *
 */

/**
 * Class Front_Controller
 * @property MenuModel $MenuModel modelmenu
 */
class Front_Controller extends MY_Controller
{
    public $menu = array();

    public function __construct()
    {
        parent::__construct();
        //load resources
        $this->load->model("MenuModel");

        $layput = LayoutFactory::Instance();


        $layput->setMenu($this->MenuModel->FrontEndMenu());

        $menus = $this->MenuModel->FrontEndMenu();




    }

    //just in case you need to add something here

}
