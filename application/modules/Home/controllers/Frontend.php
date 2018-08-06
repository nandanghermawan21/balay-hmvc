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
        LayoutFactory::Instance()->setSelectedMenu("1");

        //load depedencies
        $this->load->model("HomeModel");

    }

    /**
    * Default | Home
    *
    */
    public function index()
    {
        $data = array();
        Pagefactory::Instance()->setMenu($this->HomeModel->loadMenu());


        //create contetnt profile
        $profile = new Content();
        $profile->setId("Profile")
            ->setData("")
            ->setTitle("Profile")
            ->setView("frontend/profile");
        Pagefactory::Instance()->addContent($profile);

        //create Content history
        $history = new Content();
        $history->setId("History")
            ->setTitle("History")
            ->setData("")
            ->setView("frontend/history");
        Pagefactory::Instance()->addContent($history);

        $this->frontend($data, 'frontend/home');
    }

}
