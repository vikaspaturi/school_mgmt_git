<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['post_controller_constructor'] = array(
                            'class'    => 'Session_check',
                            'function' => 'check_login',
                            'filename' => 'session_check.php',
                            'filepath' => 'hooks',
                            'params'   => ''
                        );



/* End of file hooks.php */
/* Location: ./application/config/hooks.php */