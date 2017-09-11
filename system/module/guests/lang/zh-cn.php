<?php if(!defined("RUN_MODE")) die();?>
<?php
/**
 * The guests category zh-cn file of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPLV1.2 (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     guests
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
$lang->guests->common      = '宾客';
$lang->guests->setting     = '宾客设置';

$lang->guests->id         = '编号';
$lang->guests->category   = '类目';
$lang->guests->categories = '类目';
$lang->guests->name       = '姓名';
$lang->guests->mobile     = '手机号码';
$lang->guests->keywords   = '关键字';
$lang->guests->summary    = '摘要';
$lang->guests->author     = '作者';
$lang->guests->editor     = '编辑';
$lang->guests->addedDate  = '发布时间';
$lang->guests->editedDate = '编辑时间';
$lang->guests->status     = '状态';
$lang->guests->type       = '类型';
$lang->guests->order      = '排序';

$lang->guests->selectCategories = '选择类目';
$lang->guests->selectBoard      = '选择版块';

$lang->submission= new stdclass();
$lang->submission->common  = '投稿';
$lang->submission->check   = '审核';
$lang->submission->list    = '投稿列表';
$lang->submission->publish = '发布';
$lang->submission->reject  = '驳回';

$lang->submission->status[0] = '';
$lang->submission->status[1] = '<span class="label label-xsm label-primary">' . '待审核' .'</span>';
$lang->submission->status[2] = '<span class="label label-xsm label-success">' . '通过' . '</span>';
$lang->submission->status[3] = '驳回';


$lang->guests->onlyBody = '不显示头部、侧边和底部(可定制性更强)';

$lang->guests->list          = '宾客列表';
$lang->guests->admin         = '维护宾客';
$lang->guests->create        = '添加宾客';
$lang->guests->edit          = '编辑宾客';

$lang->guests->statusList['normal'] = '正常';
$lang->guests->statusList['draft']  = '草稿';

$lang->guests->confirmDelete = '您确定删除该宾客吗？';
$lang->guests->categoryEmpty = '类目不能为空';

$lang->guests->lblAddedDate = '<strong>添加时间：</strong> %s &nbsp;&nbsp;';
$lang->guests->lblAuthor    = "<strong>作者：</strong> %s &nbsp;&nbsp;";
$lang->guests->lblSource    = '<strong>来源：</strong>';
$lang->guests->lblEditor    = '最后编辑：%s 于 %s';

$lang->guests->none      = '没有了';
$lang->guests->previous  = '上一篇';
$lang->guests->next      = '下一篇';
$lang->guests->directory = '返回目录';
$lang->guests->noCssTag  = '不需要&lt;style&gt;&lt;/style&gt;标签';
$lang->guests->noJsTag   = '不需要&lt;script&gt;&lt;/script&gt;标签';

$lang->guests->forwardFrom = '转发自';

$lang->guests->noCategoriesTip = '您还没有添加类目，请添加类目。';

$lang->guests->noCategories = array();
$lang->guests->noCategories['guests'] = '您还没有为文章添加类目，请添加类目。';

$lang->guests->blog = new stdclass();
$lang->guests->blog->category                   = '博客列表类目';
$lang->guests->blog->categoryLevel              = '级别';
$lang->guests->blog->categoryNameList['abbr']   = '简称';
$lang->guests->blog->categoryNameList['full']   = '全称';
$lang->guests->blog->categoryLevelList['first'] = '顶级';
$lang->guests->blog->categoryLevelList['final'] = '终级';

$lang->guests->blog->categoryOptions['1'] = '显示';
$lang->guests->blog->categoryOptions['0'] = '不显示';

$lang->guests->browseImage = new stdclass();
$lang->guests->browseImage->common   = '列表图片';
$lang->guests->browseImage->maxWidth = '最大宽度';

$lang->guests->browseImage->positionList['left']  = '居左';
$lang->guests->browseImage->positionList['right'] = '居右';

$lang->guests->browseImage->sizeList['small']  = '小图';
$lang->guests->browseImage->sizeList['middle'] = '中图';
