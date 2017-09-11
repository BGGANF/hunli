<?php if(!defined("RUN_MODE")) die();?>
<?php
/**
 * The admin view file of guests of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPLV1.2 (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     guests
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
?>
<?php include '../../common/view/header.admin.html.php';?>
<?php js::set('categoryID', $categoryID);?>
<div class='panel'>
  <div class='panel-heading'>
  <strong><i class="icon-th-large"></i> <?php echo $lang->$type->list;?></strong>
  <?php if($type != 'submission'):?>
  <div class='panel-actions'>
    <form method='get' class='form-inline form-search'>
      <?php echo html::hidden('m', 'guests');?>
      <?php echo html::hidden('f', 'admin');?>
      <?php echo html::hidden('type', $type);?>
      <?php echo html::hidden('categoryID', $categoryID);?>
      <?php echo html::hidden('orderBy', $orderBy);?>
      <?php echo html::hidden('recTotal', isset($this->get->recTotal) ? $this->get->recTotal : 0);?>
      <?php echo html::hidden('recPerPage', isset($this->get->recPerPage) ? $this->get->recPerPage : 10);?>
      <?php echo html::hidden('pageID', isset($this->get->pageID) ? $this->get->pageID :  1);?>
      <div class="input-group">
        <?php echo html::input('searchWord', $this->get->searchWord, "class='form-control search-query'");?>
        <span class="input-group-btn"><?php echo html::submitButton($lang->search->common, "btn btn-primary"); ?></span>
      </div>
    </form>
     <?php if($type == 'page') commonModel::printLink('guests', 'create', "type={$type}", '<i class="icon-plus"></i> ' . $lang->page->create, 'class="btn btn-primary"');?>
     <?php if($type != 'page') commonModel::printLink('guests', 'create', "type={$type}&category={$categoryID}", '<i class="icon-plus"></i> ' . $lang->$type->create, 'class="btn btn-primary"');?>
   </div>
  <?php endif;?>
  </div>
  <table class='table table-hover table-striped tablesorter table-fixed'>
    <thead>
      <tr>
        <?php $vars = "type=$type&categoryID=$categoryID&orderBy=%s&recTotal={$pager->recTotal}&recPerPage={$pager->recPerPage}";?>
        <th class='text-center w-60px'><?php commonModel::printOrderLink('id', $orderBy, $vars, $lang->guests->id);?></th>
        <th class='text-center w-120px'><?php commonModel::printOrderLink('name', $orderBy, $vars, $lang->guests->name);?></th>
        <th class='text-center w-160px'><?php echo $lang->guests->category;?></th>
        <th class='text-center w-120px'><?php echo $lang->guests->mobile;?></th>
        <th class='text-center w-160px'><?php echo $lang->guests->summary;?></th>
<!--        <th class='text-center w-80px'>--><?php //commonModel::printOrderLink('author', $orderBy, $vars, $lang->guests->author);?><!--</th>-->
        <th class='text-center w-150px'><?php commonModel::printOrderLink('addedDate', $orderBy, $vars, $lang->guests->addedDate);?></th>
        <?php $actionClass = $type == 'page' ? 'w-250px' : 'w-300px';?>
        <?php 
          if($type == 'page')
          {
            $actionClass = 'w-250px';
          }
          else if($type == 'submission')
          {
            $actionClass = 'w-150px';
          }
          else
          {
            $actionClass = 'w-200px';
          }
        ?>
        <th class="text-center <?php echo $actionClass;?>"><?php echo $lang->actions;?></th>
      </tr>
    </thead>
    <tbody>
      <?php $maxOrder = 0; foreach($guestss as $guests):?>
      <tr>
        <td class='text-center'><?php echo $guests->id;?></td>
        <td title="<?php echo $guests->title;?>" style="color:<?php echo $guests->titleColor;?>">
          <?php if($guests->sticky):?><span class='red'><i class="icon icon-pushpin"></i></span><?php endif;?>
          <?php if($guests->status == 'draft') echo '<span class="label label-xsm label-warning">' . $lang->guests->statusList[$guests->status] .'</span>';?>
          <?php echo $guests->name;?>
        </td>
        <td class='text-center'><?php foreach($guests->categories as $category) echo $category->name . ' ';?></td>
        <td class='text-center'><?php echo $guests->mobile;?></td>
        <td class='text-center'><?php echo $guests->summary;?></td>
<!--        <td class='text-center'>--><?php //echo $guests->author;?><!--</td>-->
        <td class='text-center'><?php echo $guests->addedDate;?></td>

        <?php
        if($type != 'page' and commonModel::isAvailable('submission'))
        {
            echo "<td class='text-center'>" . $lang->submission->status[$guests->submission] . '</td>';
        }
        ?>
        <td class='text-center nofixed'>
          <?php
          commonModel::printLink('guests', 'edit', "guestsID=$guests->id&type=$guests->type", $lang->edit);
          ?>
          <span class='dropdown'>
            <a data-toggle='dropdown' href='javascript:;'><?php echo $this->lang->more;?><span class='caret'></span></a>
            <ul class='dropdown-menu pull-right'>    
              <li><?php commonModel::printLink('guests', 'delete', "guestsID=$guests->id", $lang->delete, 'class="deleter"');?></li>
            </ul>
          </span>
        </td>
      </tr>
      <?php endforeach;?>
    </tbody>
    <tfoot>
      <tr>
        <td><button class="btn" type="button">导出Excel</button> <button class="btn" type="button">导出PDF</button></td>
        <?php $col = commonModel::isAvailable('submission') ? 8 : 7;?>
        <?php if($type == 'page') $col = 5;?>
        <?php if($type == 'submission') $col = 8;?>
        <td colspan="<?php echo $col;?>"><?php $pager->show();?></td>
      </tr>
    </tfoot>
  </table>
</div>
<?php include '../../common/view/footer.admin.html.php';?>
