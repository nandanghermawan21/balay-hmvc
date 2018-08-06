<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2017, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
(defined('BASEPATH')) OR exit('No direct script access allowed');


require APPPATH."third_party/MX/Loader.php";

/**
 * Loader Class
 *
 * Loads framework components.
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Loader
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/user_guide/libraries/loader.html
 * @property    MY_Loader $cart Cart module
 */
class MY_Loader extends MX_Loader {


    protected $_ci_entity_paths =	array(APPPATH, BASEPATH);


    protected $_ci_entities =	array();

    /**
     * Entity Loader
     *
     * @param	string|string[]	$entities	Helper name(s)
     * @return	object
     */
    public function entity($entities = array())
    {
        is_array($entities) OR $entities = array($entities);
        foreach ($entities as &$entity)
        {
            $filename = basename($entity);
            $filepath = ($filename === $entity) ? '' : substr($entity, 0, strlen($entity) - strlen($filename));
            $filename = strtolower(preg_replace('#(_entity)?(\.php)?$#i', '', $filename)).'_entity';
            $entity   = $filepath.$filename;

            if (isset($this->_ci_entities[$entity]))
            {
                continue;
            }

            // Is this a helper extension request?
            $ext_entity = config_item('subclass_prefix').$filename;
            $ext_loaded = FALSE;
            foreach ($this->_ci_entity_paths as $path)
            {
                if (file_exists($path.'entity/'.$ext_entity.'.php'))
                {
                    include_once($path.'entity/'.$ext_entity.'.php');
                    $ext_loaded = TRUE;
                }
            }

            // If we have loaded extensions - check if the base one is here
            if ($ext_loaded === TRUE)
            {
                $base_entity = BASEPATH.'entity/'.$entity.'.php';
                if ( ! file_exists($base_entity))
                {
                    show_error('Unable to load the requested file: entity/'.$entity.'.php');
                }

                include_once($base_entity);
                $this->_ci_entities[$entity] = TRUE;
                log_message('info', 'Entity loaded: '.$entity);
                continue;
            }

            // No extensions found ... try loading regular helpers and/or overrides
            foreach ($this->_ci_entity_paths as $path)
            {
                if (file_exists($path.'entity/'.$entity.'.php'))
                {
                    include_once($path.'entity/'.$entity.'.php');

                    $this->_ci_entities[$entity] = TRUE;
                    log_message('info', 'Entity loaded: '.$entity);
                    break;
                }
            }

            // unable to load the helper
            if ( ! isset($this->_ci_entities[$entity]))
            {
                show_error('Unable to load the requested file: entity/'.$entity.'.php');
            }
        }

        return $this;
    }
}