<?php
/**
 * Created by PhpStorm.
 * User: SkyLab
 * Date: 8/1/2018
 * Time: 12:53 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter URL Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		SkyLab Dev Team
 * @link		https://codeigniter.com/user_guide/helpers/url_helper.html
 */

if ( ! function_exists('base_url'))
{

    /**
     * load asset from from folder asset with echo
     *
     * @param string $uri
     * @param null $protocol
     * @return mixed
     */
    function load_asset($uri = '', $protocol = NULL)
    {
        echo get_instance()->config->base_url('assets/'.$uri, $protocol);
    }

    function load_data($uri = '', $protocol = NULL)
    {
        echo get_instance()->config->base_url('data/'.$uri, $protocol);
    }
}