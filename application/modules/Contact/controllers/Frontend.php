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
        LayoutFactory::Instance()->setSelectedMenu("4");

        $this->load->model("ContactModel");
    }

    /**
     * Default | Home
     *
     */
    public function index()
    {
        $data = "";
        Pagefactory::Instance()->setMenu($this->ContactModel->loadMenu());

        $contactForm = new Content();
        $contactForm->setId(1)
            ->setTitle("Contact Form")
            ->setData("")
            ->setView("frontend/form");

        $direction = new Content();
        $direction->setId(2)
            ->setTitle("Directions")
            ->setView("frontend/directions")
            ->setData("");

        Pagefactory::Instance()->addContent($contactForm)
            ->addContent($direction);

        $this->frontend($data,"");
    }

}
