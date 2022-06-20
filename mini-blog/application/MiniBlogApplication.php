<?php

class MiniBlogApplication extends Application
{
  protected $login_action = array('account','signin');

  public function getRootDir()
  {
    return dirname(__FILE__);
  }

  protected function registerRoutes()
  {//MiniBlogApplication::registerRoutes()
    return array(
      // StatusControllerの他のルーティング
      '/user/:user_name'
      =>array('controller'=>'status','action' => 'user'),
      '/user/:user_name/status/:id'
      =>array('controller' => 'status','action' => 'show'),
      //AccountControllerのルーティング
      '/'
      =>array('controller'=>'status','action' => 'index'),
      '/status/post'
      =>array('controller' => 'status','action' => 'post'),
      '/account'
      => array('controller' => 'account','action' => 'index'),
      '/account/:action'
      => array('controller' => 'account'),
      '/follow'
      =>array('controller' => 'account','action' => 'follow'),
    );
  }

  protected function configure()
  {
    $this->db_manager->connect('master',array(
      'dsn' => 'pgsql:dbname=d4s5lppcpkrgh1;host=ec2-23-23-182-238.compute-1.amazonaws.com;port=5432',
      'user' => 'nszokmywshqthd',
      'password' => '2a0be29776c1febeea47ff8ab01f0fa3f89e6389d884d32dc592ce6836a52639',
    ));
  }
}
