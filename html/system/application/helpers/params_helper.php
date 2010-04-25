<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function get_params() {
    $params = array(
        'username' => '^[1-9A-Za-z!@#$%^&*()]{6,16}$',
        'password' => '^[1-9A-Za-z!@#$%^&*()]{6,16}$'
    );
    return $params;
}

/* End of file common_helper.php */
/* Location: ./system/application/helpers/common_helper.php */
