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
        LayoutFactory::Instance()->setSelectedMenu("3");
    }

    /**
     * Default | Home
     *
     */
    public function index()
    {
        $data = "";
        $this->frontend($data, '');
    }

}
