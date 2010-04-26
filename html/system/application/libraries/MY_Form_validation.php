<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

    function regex($str, $name) {
        $CI =& get_instance();
        $CI->load->helper('params');

        $params  = get_params();
        $pattern = $params[$name];

        return preg_match('/' . $pattern . '/', $str) ? TRUE : FALSE;
    }

    function validate( $in_config = '', &$errors = '' ) {

        if ( ! is_array($in_config) ) {
            return FALSE;
        }

        $CI =& get_instance();
        $config = array();
        foreach ( $in_config as $name => $rules ) {
            $field = array(
                'field' => $name,
                'label' => ucfirst($name),
                'rules' => $rules,
            );
            $config[] = $field;
        }

        $CI->form_validation->set_rules($config);
        $CI->form_validation->run();

        $validator = new Validator();

        if ( validation_errors() ){
            $validator->errors = $CI->form_validation->_error_array;
            $validator->has_errors = 1;
        }
 
        foreach( $in_config as $name => $rules ) {
            $value = $CI->form_validation->_field_data[$name]['postdata'];
            if ( count($validator->errors) && array_key_exists( $name, $validator->errors ) ) {
                $validator->invalid[$name] = $value;
            }
            else {
                $validator->valid[$name] = $value;
            }
        }
        return $validator;
    }
}

class Validator {
    var $has_errors = 0;
    var $invalid    = array();
    var $valid      = array();
    var $errors     = array();
}
/* End of file MY_Form_validation.php */
/* Location: ./application/libraries/MY_Form_validation.php */
