<?php if(!defined("RUN_MODE")) die();?>
<?php
/**
 * The control file of guests module of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPLV1.2 (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     guests
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
class guests extends control
{
    /** 
     * The index page, locate to the first category or home page if no category.
     * 
     * @access public
     * @return void
     */
    public function index()
    {   
        $category = $this->loadModel('tree')->getFirst('guests');
        if($category) $this->locate(inlink('browse', "category=$category->id"));
        $this->locate($this->createLink('index'));
    }   

    /** 
     * Browse guests in front.
     * 
     * @param int    $categoryID   the category id
     * @param int    $pageID       current page id
     * @access public
     * @return void
     */
    public function browse($categoryID = 0, $pageID = 1)
    {   
        $category = $this->loadModel('tree')->getByID($categoryID, 'guests');

        if($category->link) helper::header301($category->link);

        $recPerPage = !empty($this->config->site->guestsRec) ? $this->config->site->guestsRec : $this->config->guests->recPerPage;
        $this->app->loadClass('pager', $static = true);
        $pager = new pager($recTotal = 0, $recPerPage, $pageID);

        $categoryID = is_numeric($categoryID) ? $categoryID : $category->id;
        $orderBy    = zget($_COOKIE, 'guestsOrderBy' . $categoryID, 'addedDate_desc');
        $orderField = str_replace('_asc', '', $orderBy);
        $orderField = str_replace('_desc', '', $orderField);
        if(!in_array($orderField, array('id', 'views', 'addedDate'))) $orderBy = 'addedDate_desc';

        $families   = $categoryID ? $this->tree->getFamily($categoryID, 'guests') : '';
        $sticks     = $this->guests->getSticks($families, 'guests');
        $guestss   = $this->guests->getList('guests', $families, $orderBy, $pager);
        $guestss   = $sticks + $guestss;

        if(commonModel::isAvailable('message')) $guestss = $this->guests->computeComments($guestss, 'guests');

        if($category)
        {
            $title    = $category->name;
            $keywords = (!empty($category->keywords) ? ($category->keywords . ' - ') : '') . $this->config->site->keywords;
            $desc     = strip_tags($category->desc);
            $this->session->set('guestsCategory', $category->id);
        }
        else
        {
            die($this->fetch('errors', 'index'));
        }

        $guestsList = '';
        foreach($guestss as $guests) $guestsList .= $guests->id . ',';
        $this->view->guestsList = $guestsList;
        
        $this->view->title      = $title;
        $this->view->keywords   = trim($keywords);
        $this->view->desc       = $desc;
        $this->view->category   = $category;
        $this->view->guestss   = $guestss;
        $this->view->pager      = $pager;
        $this->view->pageID     = $pageID;
        $this->view->orderBy    = $orderBy;
        $this->view->contact    = $this->loadModel('company')->getContact();
        $this->view->mobileURL  = helper::createLink('guests', 'browse', "categoryID={$category->id}", "category={$category->alias}", 'mhtml');
        $this->view->desktopURL = helper::createLink('guests', 'browse', "categoryID={$category->id}", "category={$category->alias}", 'html');
        $this->view->layouts    = $this->loadModel('block')->getPageBlocks('guests', 'browse', $category->id);
        $this->view->sideGrid   = $this->loadModel('ui')->getThemeSetting('sideGrid', 3);
        $this->view->sideFloat  = $this->ui->getThemeSetting('sideFloat', 'right');

        $this->display();
    }
    
    /**
     * Browse guests in admin.
     * 
     * @param string $type        the guests type
     * @param int    $categoryID  the category id
     * @param int    $recTotal 
     * @param int    $recPerPage 
     * @param int    $pageID 
     * @access public
     * @return void
     */
    public function admin($type = 'guests', $categoryID = 0, $orderBy = 'id_desc', $recTotal = 0, $recPerPage = 15, $pageID = 1)
    {
        if($this->get->tab == 'user') 
        {
            $type = 'submission';
            $this->lang->menuGroups->guests = $type;
            unset($this->lang->guests->menu);
            $this->view->title = $this->lang->submission->common;
        }
        else
        {
            $this->lang->guests->menu = isset($this->lang->$type->menu) ? $this->lang->$type->menu : null;
            $this->lang->menuGroups->guests = $type;
            $this->view->title = $this->lang->$type->common;
        }

        $this->app->loadClass('pager', $static = true);
        $pager = new pager($recTotal, $recPerPage, $pageID);

        $families = $categoryID ? $this->loadModel('tree')->getFamily($categoryID, $type) : '';
        $sticks   = $this->get->tab != 'feedback' ? $this->guests->getSticks($families, $type) : array();
        $guestss = $this->guests->getList($type, $families, $orderBy, $pager);
        $guestss = $sticks + $guestss;

        if($type != 'page' and $type != 'submission') 
        {
            $this->view->treeModuleMenu = $this->loadModel('tree')->getTreeMenu($type, 0, array('treeModel', 'createAdminLink'));
            $this->view->treeManageLink =  html::a(helper::createLink('tree', 'browse', "type={$type}"), $this->lang->tree->manage);
        }
        if($type == 'page') unset($this->lang->guests->menu);

        $this->loadModel('block');

        $this->view->type       = $type;
        $this->view->categoryID = $categoryID;
        $this->view->guestss   = $guestss;
        $this->view->pager      = $pager;
        $this->view->orderBy    = $orderBy;
        $this->view->template   = $this->config->template->{$this->app->clientDevice}->name;

        $this->display();
    }   

    /**
     * Create an guests.
     * 
     * @param  string $type 
     * @param  int    $categoryID
     * @access public
     * @return void
     */
    public function create($type = 'guests', $categoryID = '')
    {
        $this->lang->guests->menu = $this->lang->{$type}->menu;
        $this->lang->menuGroups->guests = $type;

        $categories = $this->loadModel('tree')->getOptionMenu($type, 0, $removeRoot = true);
        if(empty($categories) && $type != 'page')
        {
            $this->view->reason = isset($this->lang->guests->noCategories[$type]) ? $this->lang->guests->noCategories[$type] : $this->lang->guests->noCategoriesTip;
            $this->view->locate = helper::createLink('tree', 'browse', "type=$type");
            $this->display('common', 'redirect');
            die();
        }

        if($_POST)
        {
            $this->guests->create($type);
            if(dao::isError()) $this->send(array('result' => 'fail', 'message' => dao::getError()));
            if(RUN_MODE == 'front') $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess, 'locate'=>inlink('submission')));
            $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess, 'locate'=>inlink('admin', "type=$type")));
        }

        if($type != 'page') 
        {
            $this->view->treeModuleMenu = $this->loadModel('tree')->getTreeMenu($type, 0, array('treeModel', 'createAdminLink'));
            $this->view->treeManageLink = html::a(helper::createLink('tree', 'browse', "type={$type}"), $this->lang->tree->manage);
        }
        $maxID = $this->dao->select('max(id) as maxID')->from(TABLE_GUESTS)->fetch('maxID');

        $this->view->title           = $this->lang->{$type}->create;
        $this->view->currentCategory = $categoryID;
        $this->view->categories      = $categories ;
        $this->view->order           = $maxID + 1;
        $this->view->type            = $type;

        $this->display();
    }

    /**
     * Create an submission.
     * 
     * @param  string $type 
     * @param  int    $categoryID
     * @access public
     * @return void
     */
    public function post()
    {
        if(!commonModel::isAvailable('submission')) die();
        if($_POST)
        {
            $this->guests->create('submission');
            if(dao::isError()) $this->send(array('result' => 'fail', 'message' => dao::getError()));
            if(RUN_MODE == 'front') $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess, 'locate'=>inlink('submission')));
        }

        $this->view->title = $this->lang->guests->create;
        $this->display();
    }

    /**
     * edit an submission.
     * 
     * @param  string $type 
     * @param  int    $categoryID
     * @access public
     * @return void
     */
    public function modify($guestsID)
    {
        if(!commonModel::isAvailable('submission')) die();
        $guests = $this->guests->getByID($guestsID);
        $guests = $this->loadModel('file')->replaceImgURL($guests, $this->config->guests->editor->modify['id']);

        if(RUN_MODE == 'front' and $guests->addedBy != $this->app->user->account) return false;

        if($_POST)
        {
            $this->guests->update($guestsID, 'submission');
            if(dao::isError()) $this->send(array('result' => 'fail', 'message' => dao::getError()));
            $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess, 'locate' => inlink('submission')));
        }

        $this->view->title   = $this->lang->guests->edit;
        $this->view->guests = $guests;
        $this->display();
    }

    /**
     * check submission.
     * 
     * @param  int    $id 
     * @access public
     * @return void
     */
    public function check($id)
    {
        if($_POST)
        {
            $type = $this->post->type;
            $categories = '';
            if($type == 'guests') $categories = $this->post->guestsCategories;
            if($type == 'blog')    $categories = $this->post->blogCategories;
            if($type == 'book')    $categories = array($this->post->bookCatalogs);

            if(empty($categories))$this->send(array('result' => 'fail', 'message' => $this->lang->guests->categoryEmpty));
            $result = $this->guests->approve($id, $type, $categories);
            if(!$result) $this->send(array('result' => 'fail', 'message' => dao::getError()));
            $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess, 'locate' => inlink('admin', "type=submission&tab=feedback")));
        }

        unset($this->lang->guests->menu);
        $this->lang->menuGroups->guests = 'submission';

        $this->loadModel('book');
        $bookList = $this->book->getBookPairs();
        $bookCatalog = $this->book->getOptionMenu(key($bookList), $removeRoot = true);

        $this->view->title             = $this->lang->submission->check;
        $this->view->guests           = $this->guests->getByID($id);
        $this->view->guestsCategories = $this->loadModel('tree')->getOptionMenu('guests', 0, $removeRoot = true);
        $this->view->blogCategories    = $this->loadModel('tree')->getOptionMenu('blog', 0, $removeRoot = true);
        $this->view->bookList          = $bookList;
        $this->view->bookCatalog       = $bookCatalog;

        $this->display();
    }

    /**
     * Edit an guests.
     * 
     * @param  int    $guestsID 
     * @param  string $type 
     * @access public
     * @return void
     */
    public function edit($guestsID, $type)
    {
        if($type == 'book')
        {
            $node = $this->dao->select('*')->from(TABLE_BOOK)->where('guestsID')->eq($guestsID)->fetch();
            if($node) $this->locate($this->createLink('book', 'edit', "nodeID=$node->id"));
        }

        $this->lang->guests->menu = $this->lang->$type->menu;
        $this->lang->menuGroups->guests = $type;

        $guests  = $this->guests->getByID($guestsID, $replaceTag = false);
        $guests = $this->loadModel('file')->replaceImgURL($guests, $this->config->guests->editor->edit['id']);

        $categories = $this->loadModel('tree')->getOptionMenu($type, 0, $removeRoot = true);
        if(empty($categories) && $type != 'page')
        {
            die(js::alert($this->lang->tree->noCategories) . js::locate($this->createLink('tree', 'browse', "type=$type")));
        }

        if($_POST)
        {
            $this->guests->update($guestsID, $type);
            if(dao::isError()) $this->send(array('result' => 'fail', 'message' => dao::getError()));
            $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess, 'locate' => inlink('admin', "type=$type")));
        }

        if($type != 'page') 
        {
            $this->view->treeModuleMenu = $this->loadModel('tree')->getTreeMenu($type, 0, array('treeModel', 'createAdminLink'));
            $this->view->treeManageLink = html::a(helper::createLink('tree', 'browse', "type={$type}"), $this->lang->tree->manage);
        }

        $this->view->title      = $this->lang->$type->edit;
        $this->view->guests    = $guests;
        $this->view->categories = $categories;
        $this->view->type       = $type;
        $this->display();
    }

    /**
     * View an guests.
     * 
     * @param int $guestsID 
     * @access public
     * @return void
     */
    public function view($guestsID)
    {
        $guests = $this->guests->getByID($guestsID);

        if(!$guests) die($this->fetch('errors', 'index'));
        if($guests->link) helper::header301($guests->link);

        /* fetch category for display. */
        $category = array_slice($guests->categories, 0, 1);
        $category = $category[0]->id;

        $currentCategory = $this->session->guestsCategory;
        if($currentCategory > 0)
        {
            if(isset($guests->categories[$currentCategory]))
            {
                $category = $currentCategory;  
            }
            else
            {
                foreach($guests->categories as $guestsCategory)
                {
                    if(strpos($guestsCategory->path, $currentCategory)) $category = $guestsCategory->id;
                }
            }
        }

        $category = $this->loadModel('tree')->getByID($category);
        $this->session->set('guestsCategory', $category->id);

        $title    = $guests->title . ' - ' . $category->name;
        $keywords = (!empty($guests->keywords) ? ($guests->keywords . ' - ') : '') . (!empty($category->keywords) ? ($category->keywords . ' - ') : '') . $this->config->site->keywords;
        $desc     = strip_tags($guests->summary);
        
        $this->view->title       = $title;
        $this->view->keywords    = $keywords;
        $this->view->desc        = $desc;
        $this->view->guests     = $guests;
        $this->view->prevAndNext = $this->guests->getPrevAndNext($guests, $category->id);
        $this->view->category    = $category;
        $this->view->mobileURL   = helper::createLink('guests', 'view', "guestsID={$guests->id}", "category={$category->alias}&name={$guests->alias}", 'mhtml');
        $this->view->desktopURL  = helper::createLink('guests', 'view', "guestsID={$guests->id}", "category={$category->alias}&name={$guests->alias}", 'html');

        $this->view->layouts     = $this->loadModel('block')->getPageBlocks('guests', 'view', $guests->id);
        $this->view->sideGrid    = $this->loadModel('ui')->getThemeSetting('sideGrid', 3);
        $this->view->sideFloat   = $this->ui->getThemeSetting('sideFloat', 'right');

        if($this->app->clientDevice == 'desktop') 
        {
            $this->view->canonicalURL = helper::createLink('guests', 'view', "guestsID={$guests->id}", "category={$category->alias}&name={$guests->alias}", 'html'); 
        }
        else
        {
            $this->view->canonicalURL = helper::createLink('guests', 'view', "guestsID={$guests->id}", "category={$category->alias}&name={$guests->alias}", 'mhtml'); 
        }
            
        $this->display();
    }

    /**
     * Delete an guests.
     * 
     * @param  int      $guestsID 
     * @access public
     * @return void
     */
    public function delete($guestsID)
    {
        if($this->guests->delete($guestsID)) $this->send(array('result' => 'success'));
        $this->send(array('result' => 'fail', 'message' => dao::getError()));
    }

    /**
     * Set css.
     * 
     * @param  int      $guestsID 
     * @access public
     * @return void
     */
    public function setCss($guestsID)
    {
        $guests = $this->guests->getByID($guestsID);
        if($_POST)
        {
            if($this->guests->setCss($guestsID)) $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess));
            $this->send(array('result' => 'fail', 'message' => dao::getError()));
        }

        $this->view->title   = $this->lang->guests->css;
        $this->view->guests = $guests;
        $this->display();
    }


    /**
     * Set js.
     * 
     * @param  int      $guestsID 
     * @access public
     * @return void
     */
    public function setJs($guestsID)
    {
        $guests = $this->guests->getByID($guestsID);
        if($_POST)
        {
            if($this->guests->setJs($guestsID)) $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess));
            $this->send(array('result' => 'fail', 'message' => dao::getError()));
        }

        $this->view->title   = $this->lang->guests->js;
        $this->view->guests = $guests;
        $this->display();
    }

    /**
     * Stick an guests.
     * 
     * @param  int    $guestsID 
     * @param  int    $stick 
     * @access public
     * @return void
     */
    public function stick($guestsID, $stick)
    {
        $guests = $this->guests->getByID($guestsID);

        $this->dao->update(TABLE_guests)->set('sticky')->eq($stick)->where('id')->eq($guestsID)->exec();
        if(dao::isError()) $this->send(array('result' =>'fail', 'message' => dao::getError()));

        $message = $stick == 0 ? $this->lang->guests->successUnstick : $this->lang->guests->successStick;
        $this->send(array('result' => 'success', 'message' => $message, 'locate' => inlink('admin', "type={$guests->type}")));
    }

    /**
     * Forward an guests to blog. 
     * 
     * @param  int    $guestsID 
     * @access public
     * @return void
     */
    public function forward2Blog($guestsID)
    {
        $categories = $this->loadModel('tree')->getOptionMenu('blog', 0, $removeRoot = true);

        if($_POST)
        {
            $result = $this->guests->forward2Blog($guestsID);
            if($result) $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess, 'locate' => inlink('admin')));
            $this->send(array('result' => 'fail', 'message' => dao::getError()));
        }

        $this->view->title      = $this->lang->guests->forward2Blog;
        $this->view->categories = $categories;
        $this->view->guestsID  = $guestsID;
        $this->display();
    }
    
    /**
     * Forward an guests to forum. 
     * 
     * @param  int    $guestsID 
     * @access public
     * @return void
     */
    public function forward2Forum($guestsID)
    {
        $categories = $this->loadModel('tree')->getOptionMenu('forum', 0, $removeRoot = true);
        if($_POST)
        {
            $result = $this->guests->forward2Forum($guestsID);
            if($result) $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess, 'locate' => inlink('admin')));
            $this->send(array('result' => 'fail', 'message' => dao::getError()));
        }

        $parents = $this->dao->select('*')->from(TABLE_CATEGORY)->where('parent')->eq(0)->andWhere('type')->eq('forum')->fetchAll('id');

        $this->view->title      = $this->lang->guests->forward2Forum;
        $this->view->parents    = array_keys($parents);
        $this->view->categories = $categories;
        $this->view->guestsID  = $guestsID;
        $this->display();
    }

    /**
     * Manage guests submission.
     * 
     * @access public
     * @return void
     */
    public function submission($orderBy = 'id_desc', $recTotal = 0, $recPerPage = 10, $pageID = 1)
    {
        if(!commonModel::isAvailable('submission')) die();
        $this->app->loadLang('user');

        $this->app->loadClass('pager', $static = true);
        $pager = new pager($recTotal, $recPerPage, $pageID);

        $guestss = $this->dao->select('t1.*,t2.id as bookID')->from(TABLE_guests)->alias('t1')
            ->leftJoin(TABLE_BOOK)->alias('t2')->on('t1.id = t2.id')
            ->where('t1.submission')->ne(0)
            ->andWhere('t1.addedBy')->eq($this->app->user->account)
            ->orderBy('id_desc')
            ->page($pager)
            ->fetchAll('id'); 

        $this->view->title        = $this->lang->user->submission;
        $this->view->guestss     = $guestss;
        $this->view->pager        = $pager;
        $this->view->orderBy      = $orderBy;

        $this->view->mobileURL  = helper::createLink('guests', 'submission', '', '', 'mhtml');
        $this->view->desktopURL = helper::createLink('guests', 'submission', '', '', 'html');
        $this->display();
    }

    /**
     * Reject an guests.
     * 
     * @param  int    $guestsID 
     * @access public
     * @return void
     */
    public function reject($guestsID)
    {
        $result = $this->guests->reject($guestsID);
        if(!$result) $this->send(array('result' => 'fail', 'message' => dao::getError()));
        $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess, 'locate' => inlink('admin', "type=submission&tab=feedback")));
    }
}
