<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Asia/Tokyo' for 'JST/9.0/no DST' instead in /Users/sanojimaru/workspace/cakephp/cake/console/templates/default/classes/test.ctp on line 22
/* Posts Test cases generated on: 2011-10-15 22:20:45 : 1318684845*/
App::import('Controller', 'Posts');

class TestPostsController extends PostsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PostsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.post');

	function startTest() {
		$this->Posts =& new TestPostsController();
		$this->Posts->constructClasses();
	}

	function endTest() {
		unset($this->Posts);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
