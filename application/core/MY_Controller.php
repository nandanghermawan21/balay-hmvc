
<?php
/**
 * @package	HMVC
 * @author	SkyLab
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://SkyLab.com/)
 * @copyright	Copyright (c) 2014 - 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */


defined('BASEPATH') or exit('No direct script access allowed');


/**
 * CodeIgniter URL Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Core
 * @category	Core
 * @author		CloudLab Dev Team
 * @link		https://SkyLab.com/user_guide/helpers/url_helper.html
 */

/* load the MX_Loader class */
require APPPATH."third_party/MX/Controller.php";


class MY_Controller extends MX_Controller
{
    /**
     * @var string
     */
    private $frontendLayout;
    private $backendLayout;


    public function __construct()
    {
        parent::__construct();
        $this->frontendLayout = $this->config->item('frontend_layout');
        $this->backendLayout = $this->config->item('backend_layout');

        if($this->frontendLayout == ""){
            $this->frontendLayout = "frontend";
        }
        if($this->backendLayout == ""){
            $this->backendLayout = "backend";
        }
    }


    /**
     * load view with frontend layout
     * @param array $data
     * @param null $view
     */
    public function frontend($data = [], $view = null)
    {
        if (ENVIRONMENT === 'production') {
            $this->load->view('layouts/'.$this->frontendLayout.'/header-min', $data);
            if ($view) {
                $this->load->view($view . '-min');
            }
            $this->load->view('layouts/'.$this->frontendLayout.'/footer-min');
        } else {
            $this->load->view('layouts/'.$this->frontendLayout.'/header', $data);
            if ($view) {
                $this->load->view($view);
            }
            $this->load->view('layouts/'.$this->frontendLayout.'/footer');
        }
    }


    /**
     * load view with backend layout
     * @param array $data
     * @param null $view
     */
    public function backend($data = [], $view = null)
    {


        if (ENVIRONMENT === 'production') {
            $this->load->view('layouts/'.$this->backendLayout.'/header-min', $data);
            if ($view) {
                $this->load->view($view . '-min');
            }
            $this->load->view('layouts/'.$this->backendLayout.'/footer-min');
        } else {
            $this->load->view('layouts/'.$this->backendLayout.'/header', $data);
            if ($view) {
                $this->load->view($view);
            }
            $this->load->view('layouts/'.$this->backendLayout.'/footer');
        }
    }


    /**
     * load a view without layout
     * @param array $data
     * @param null $view
     */
    public function independen($data = [], $view = null)
    {
        if ($view) {
            if (ENVIRONMENT === 'production') {
                $this->load->view($view . '-min');
            } else {
                $this->load->view($view);
            }
        }
    }

    public function layout($layout, $data = [], $view = null)
    {


        if (ENVIRONMENT === 'production') {
            $this->load->view('layouts/'.$layout.'/header-min', $data);
            if ($view) {
                $this->load->view($view . '-min');
            }
            $this->load->view('layouts/'.$layout.'/footer-min');
        } else {
            $this->load->view('layouts/'.$layout.'/header', $data);
            if ($view) {
                $this->load->view($view);
            }
            $this->load->view('layouts/'.$layout.'/footer');
        }
    }

}
