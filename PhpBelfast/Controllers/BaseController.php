<?php
namespace PhpBelfast\Controllers;

use Slim\Slim;

/**
 * Class BaseController
 * @package PhpBelfast\Controllers
 */
class BaseController {

    /**
     * @var null
     */
    protected $app = null;

    protected $view = null;

    /**
     *
     */
    public function __construct()
    {
        $this->app = Slim::getInstance();
        $this->view = $this->app->view();
    }


    /**
     *
     */
    public function hello($name)
    {
        $this->view->set('name', $name);
        $this->app->render('hello.tpl');
    }

} 