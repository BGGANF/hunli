<?php if(!defined("RUN_MODE")) die();?>
<?php
/**
 * The about front view file of block module of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPLV12 (http://zpl.pub/page/zplv12.html)
 * @author      Yidong wang <yidong@cnezsoft.com>
 * @package     block
 * @version     $Id$
 * @link        http://www.chanzhi.org
*/
$block->content = json_decode($block->content);
$this->config->company = $this->loadModel('file')->replaceImgURL($this->config->company, 'desc');
?>
<div id="block<?php echo $block->id;?>" class='panel panel-block panel-block-about <?php echo $blockClass;?>'>
  <div class='panel-heading'>
    <strong><?php echo $icon . $block->title;?></strong>
    <?php if(!empty($block->content->moreText) and !empty($block->content->moreUrl)):?>
    <div class='pull-right'><?php echo html::a($block->content->moreUrl, $block->content->moreText, "data-toggle='modal' data-type='ajax'");?></div>
    <?php endif;?>
  </div>
  <div class='panel-body'>
    <div class='article-content'><?php echo $this->config->company->desc;?></div>
  </div>
</div>
