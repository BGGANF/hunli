<?php if(!defined("RUN_MODE")) die();?>
<?php
/**
 * The edit view file of guests module of chanzhiEPS.
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
<?php include '../../common/view/datepicker.html.php';?>
<?php js::set('type',$type);?>
<?php include '../../common/view/kindeditor.html.php';?>
<?php include '../../common/view/chosen.html.php';?>
<?php
$colorPlates = '';
foreach (explode('|', $lang->colorPlates) as $value)
{
    $colorPlates .= "<div class='color color-tile' data='#" . $value . "'><i class='icon-ok'></i></div>";
}
?>
<div class='panel'>
  <div class='panel-heading'><strong><i class='icon-edit'></i> <?php echo $type == 'blog' ? $lang->blog->edit : ($type == 'page' ? $lang->page->edit : $lang->guests->edit);?></strong></div>
  <div class='panel-body'>
  <form method='post' id='ajaxForm' class='ve-form'>
    <table class='table table-form'>
      <?php if($type != 'page'):?>
      <tr>
        <th class='w-100px'><?php echo $lang->guests->category;?></th>
        <td class='w-p40'><?php echo html::select("categories[]", $categories, array_keys($guests->categories), "multiple='multiple' class='form-control chosen'");?></td><td></td>
      </tr>
      <tbody class='guestsInfo'>
      <tr>
        <th><?php echo $lang->guests->author;?></th>
        <td><?php echo html::input('author', $guests->author, "class='form-control'");?></td>
      </tr>
      <tr>
        <th><?php echo $lang->guests->source;?></th>
        <?php if($guests->source != 'guests') array_pop($lang->guests->sourceList);?>
        <td><?php echo html::select('source', $lang->guests->sourceList, $guests->source, "class='form-control chosen'");?></td>
      </tr>
      </tbody>
      <?php endif; ?>
      <tr>
        <th class='w-100px'><?php echo $lang->guests->name;?></th>
        <td colspan='2'>
          <div class='order  input-group'>
            <span class='input-group-btn colorplate'>
              <span class='current color active' data='<?php echo $guests->titleColor;?>'>
                <button type='button' class='btn dropdown-toggle' data-toggle='dropdown'> <i class='icon icon-question'></i> <span class='caret'></span></button>
                <div class='dropdown-menu colors'>
                  <?php echo $colorPlates; ?>
                </div>
              </span>
              <?php echo html::input('titleColor', $guests->titleColor, "class='form-control input-color hidden' placeholder='" . $lang->colorTip . "'");?>
            </span>
            <div class="col-sm-<?php echo $type == 'page' ? '9' : '12';?>"><?php echo html::input('name', $guests->name, "class='form-control'");?></div>
            <?php if($type == 'page'):?>
            <?php endif;?>
          </div>
        </td>
      </tr>
      <tbody class='guestsInfo'>
      <tr>
        <th><?php echo $lang->guests->mobile;?></th>
        <td colspan='2'><?php echo html::input('mobile', $guests->mobile, "class='form-control' placeholder='".$lang->guests->mobile."'");?></td>
      </tr>
      <tr>
        <th><?php echo $lang->guests->summary;?></th>
        <td colspan='2'><?php echo html::textarea('summary', $guests->summary, "rows='2' class='form-control'");?></td>
      </tr>
      </tbody>
      <tbody class='guestsInfo'>
      <tr>
        <th><?php echo $lang->guests->content;?></th>
        <td colspan='2'><?php echo html::textarea('content', htmlspecialchars($guests->content), "rows='10' class='form-control'");?></td>
      </tr>
      <tr>
        <th><?php echo $lang->guests->addedDate;?></th>
        <td>
          <div class='input-append date'>
            <?php echo html::input('addedDate', formatTime($guests->addedDate), "class='form-control'");?>
            <span class='add-on'><button class="btn btn-default" type="button"><i class="icon-calendar"></i></button></span>
          </div>
        </td>
        <td><span class='help-inline'><?php echo $lang->guests->placeholder->addedDate;?></span></td>
      </tr>
      </tbody>
      <tr>
        <th></th><td colspan='2'><?php echo html::submitButton();?></td>
      </tr>
    </table>
  </form>
  </div>
</div>

<?php include '../../common/view/footer.admin.html.php';?>
