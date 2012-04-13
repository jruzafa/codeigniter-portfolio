<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * MY_Config Class
 *
 * @subpackage	Libraries
 * @author		Jérôme Jaglale
 * @author		Razican
 * @category	Libraries
 * @link		http://maestric.com/en/doc/php/codeigniter_i18n
 * @link		http://www.razican.com/
 */

class MY_Config extends CI_Config {

	function __construct()
	{
		parent::__construct();
	}

	function site_url($uri = '')
	{
		if (is_array($uri))
		{
			$uri = implode('/', $uri);
		}

		return parent::site_url($uri);
	}
}


/* End of file MY_Config.php */
/* Location: ./application/core/MY_Config.php */
