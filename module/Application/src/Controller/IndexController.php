<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Facebook\Facebook;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {

        $parameters = array ('app_id' => '482345681927771',
            'app_secret' => '0c9f2fb0a24b02b402bf1d1697caffce',
            'default_graph_version' => 'v2.7',);

        $fb = new Facebook($parameters);


        $helper = $fb->getRedirectLoginHelper();
        $permissions = ['email', 'user_likes']; // optional
        $loginUrl = $helper->getLoginUrl('http://fenilleapps.com.br/login-callback.php', $permissions);

        echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
        return new ViewModel();
    }
}
