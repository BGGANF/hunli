<?php if(!defined("RUN_MODE")) die();?>
<?php
$config->guests->require = new stdclass();
$config->guests->require->create         = 'categories, title, content';
$config->guests->require->page           = 'title, content';
$config->guests->require->link           = 'categories, title, link';
$config->guests->require->pageLink       = 'title, link';
$config->guests->require->edit           = 'categories, title, content';
$config->guests->require->forward2Blog   = 'categories';
$config->guests->require->forward2Forum  = 'board';
$config->guests->require->post           = 'title, content';
$config->guests->require->modify         = 'title, content';
$config->guests->require->video          = 'categories, title';

$config->guests->editor = new stdclass();
$config->guests->editor->create = array('id' => 'content', 'tools' => 'full');
$config->guests->editor->edit   = array('id' => 'content', 'tools' => 'full');
$config->guests->editor->post   = array('id' => 'content', 'tools' => 'simple');
$config->guests->editor->modify = array('id' => 'content', 'tools' => 'simple');

/* Set the recPerPage of guests. */
$config->guests->recPerPage = 5;
