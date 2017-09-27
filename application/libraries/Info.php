<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Auto config loader for codigniter application
 */
class Info {

    /**
     * __construct description
     * @param array $config [description]
     */
    public function __construct ($config = [])
    {
        $data = [];
        foreach ($config as $key=>$value) {  
            $data[$key] = $value; 
            //load varse   
            $this->load->vars($data);
        }
    }

    /**
     * Get codeigniter instance()
     * @param  [type] $property [description]
     * @return [type]           [description]
     */
    public function __get($property)
    {
        return get_instance()->$property;
    }
}