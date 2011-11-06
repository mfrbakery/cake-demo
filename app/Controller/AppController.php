<?php
App::uses('AppController', 'Controller');
/**
 * AppController
 */
class AppController extends Controller {

  public $helpers = array(
    'Pjax.Pjax',
    'MarkItUp.MarkItUp',
    'Html',
    'Form',
    'Session',
  );

  public $components = array('Pjax.Pjax', 'Session');

}
