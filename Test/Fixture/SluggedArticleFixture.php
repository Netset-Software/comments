<?php
/**
 * Copyright 2009 - 2013, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2009 - 2013, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Slugged Article Fixture
 *
 * @package comments
 * @subpackage comments.tests.fixtures
 */
class SluggedArticleFixture extends CakeTestFixture {

/**
 * name property
 *
 * @var string 'AnotherArticle'
 */
	public $name = 'SluggedArticle';

/**
 * fields property
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'), 		
		'title' => array('type' => 'string', 'null' => false),
		'slug' => array('type' => 'string', 'null' => false),
		'position' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10),
		'created' => 'datetime',
		'updated' => 'datetime');

/**
 * records property
 *
 * @var array
 */
	public $records = array(
		array('id' => '1', 'title' => 'First Article', 'slug' => 'first_article', 'position' => 1, 'created' => '2007-03-18 10:39:23', 'updated' => '2007-03-18 10:41:31'),
		array('id' => '2', 'title' => 'Second Article', 'slug' => 'second_article', 'position' => 2, 'created' => '2007-03-18 10:41:23', 'updated' => '2007-03-18 10:43:31'),
		array('id' => '3', 'title' => 'Third Article', 'slug' => 'third_article', 'position' => 3, 'created' => '2007-03-18 10:43:23', 'updated' => '2007-03-18 10:45:31'));
}
