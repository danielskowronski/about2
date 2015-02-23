<?php defined('SYSPATH') or die('No direct script access.');

class HTTP_Exception extends Kohana_HTTP_Exception 
{
 
    /**
     * Generate a Response for all Exceptions without a more specific override
     * 
     * The user should see a nice error page, however, if we are in development
     * mode we should show the normal Kohana error page.
     * 
     * @return Response
     */
    public function get_response()
    {   
        // Lets log the Exception, Just in case it's important!
        Kohana_Exception::log($this);
 
        /* if (Kohana::$environment >= Kohana::DEVELOPMENT)
        {
            // Show the normal Kohana error page.
            return parent::get_response();
        }
        else
        {*/
            if ($this->getCode()=="404")
            {
                //resource not found - page "_error404" editable from admin panel
                $lng = Helper_Lang::checkLang();
                
                $page = ORM::factory('Page', array('url'=>'_error404', 'lang'=>$lng['lang']));
                
                $view = View::factory('page/show');
                $view->langsel_offer = $lng['offer'];
                $view->page = $page;
                $view->section_header = ORM::factory('Region', array('region'=>'header', 'lang'=>$lng['lang']))->body;
                $view->section_footer = ORM::factory('Region', array('region'=>'footer', 'lang'=>$lng['lang']))->body;
                $view->top_menus      = ORM::factory('Topmenu')->where('lang', '=', $lng['lang'])->find_all();
                $view->page_name      = ORM::factory('Config', array('name' => 'page_name'))->value;
                
                $response = Response::factory()
                    ->status($this->getCode())
                    ->body($view->render());
                return $response;
            }
            else
            {
                //generic error - for not really not found resources but rather unmapped actions etc.
                $view = View::factory('errors/default');
                $view->error = $this->getCode();
                $response = Response::factory()
                    ->status($this->getCode())
                    ->body($view->render());
     
                return $response;
            }
        /* }*/
    }
}