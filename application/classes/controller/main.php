<?

defined('SYSPATH') or die('No direct script access.'); 

class Controller_Main extends Controller {
	
	var $languages = array('en','pl');

	public function before()
	{
		$config = new Model_Config;
		
		// select language - user selected, user profile or default		
		if(Session::instance()->get('language') != NULL)
			i18n::lang(Session::instance()->get('language'));
		if(Auth::instance()->logged_in())
		{
			i18n::lang(Auth::instance()->get_user()->lang);
		}
		else
		{
			i18n::lang($config->getConfig('language','default'));
		}
		
		
	}
	
	
}


?>
