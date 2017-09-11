<?php if(!defined("RUN_MODE")) die();?>
<?php
/**
 * The model file of guests module of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPLV1.2 (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     guests
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
class guestsModel extends model
{
    /** 
     * Get an guests by id.
     * 
     * @param  int      $guestsID 
     * @param  bool     $replaceTag 
     * @access public
     * @return bool|object
     */
    public function getByID($guestsID, $replaceTag = true)
    {   
        /* Get guests self. */
        if(!is_numeric($guestsID))
        {
            $guests = $this->dao->select('*')->from(TABLE_GUESTS)->where('alias')->eq($guestsID)->fetch();
        }
        else
        {
            $guests = $this->dao->select('*')->from(TABLE_GUESTS)->where('id')->eq($guestsID)->fetch();
        }

        if(!$guests) return false;
        /* Add link to content if necessary. */
        if($replaceTag) $guests->content = $this->loadModel('tag')->addLink($guests->content);

        /* Get it's categories. */
        $guests->categories = $this->dao->select('t2.name,t2.id,t2.alias,t2.path')
            ->from(TABLE_RELATION)->alias('t1')
            ->leftJoin(TABLE_CATEGORY)->alias('t2')->on('t1.category = t2.id')
            ->where('t1.type')->eq($guests->type)
            ->andWhere('t1.id')->eq($guests->id)
            ->fetchAll('id');

        /* Get guests path to highlight main nav. */
        $path = '';
        foreach($guests->categories as $category) $path .= $category->path;
        $guests->path = explode(',', trim($path, ','));

        /* Get it's files. */
        $guests->files = $this->loadModel('file')->getByObject($guests->type, $guestsID);

        $guests = $this->loadModel('file')->replaceImgURL($guests, $this->config->guests->editor->modify['id']);
        return $guests;
    }   

    /**
     * Get page by ID.
     * 
     * @param  int    $pageID 
     * @access public
     * @return void
     */
    public function getPageByID($pageID)
    {
        /* Get guests self. */
        if(!is_numeric($pageID)) $page = $this->dao->select('*')->from(TABLE_GUESTS)->where('alias')->eq($pageID)->andWhere('type')->eq('page')->fetch();
        if(is_numeric($pageID))  $page = $this->dao->select('*')->from(TABLE_GUESTS)->where('id')->eq($pageID)->andWhere('type')->eq('page')->fetch();

        if(!$page) return false;
        
        /* Add link to content if necessary. */
        $page->content = $this->loadModel('tag')->addLink($page->content);
        
        /* Get it's files. */
        $page->files = $this->loadModel('file')->getByObject('page', $page->id);
        $page = $this->file->replaceImgURL($page, $this->config->guests->editor->modify['id']);

        return $page;
    }

    /** 
     * Get guests list.
     *
     * @param  string  $type 
     * @param  array   $categories 
     * @param  string  $orderBy 
     * @param  object  $pager 
     * @param  int     $limit 
     * @access public
     * @return array
     */
    public function getList($type, $categories, $orderBy, $pager = null, $limit = 0)
    {
        $searchWord = $this->get->searchWord;
        $categoryID = $this->get->categoryID;
        if($type == 'page')
        {
            $guestss = $this->dao->select('*')->from(TABLE_GUESTS)
                ->where('type')->eq('page')
                ->beginIf(defined('RUN_MODE') and RUN_MODE == 'front')
                ->andWhere('addedDate')->le(helper::now())
                ->andWhere('status')->eq('normal')
                ->fi()
                ->beginIf($searchWord)
                ->andWhere('title')->like("%{$searchWord}%")
                ->orWhere('keywords')->like("%{$searchWord}%")->andWhere('type')->eq($type)
                ->orWhere('summary')->like("%{$searchWord}%")->andWhere('type')->eq($type)
                ->orWhere('content')->like("%{$searchWord}%")->andWhere('type')->eq($type)
                ->fi()
                ->orderBy($orderBy)
                ->beginIf($limit)->limit($limit)->fi()
                ->page($pager)
                ->fetchAll('id');
        }
        elseif($type == 'submission')
        {
            $guestss = $this->dao->select('*')->from(TABLE_GUESTS)
                ->where('submission')->ne(0)
                ->beginIf(RUN_MODE == 'front')
                ->andWhere('addedBy')->eq($this->app->user->account)
                ->fi()
                ->orderBy($orderBy)
                ->beginIf($limit)->limit($limit)->fi()
                ->page($pager)
                ->fetchAll('id');
        }
        else
        {
            $guestsIdList = array();
            if(!empty($categories))
            {
                /*Get guestss containing the search word (use groupBy to distinct guestss).  */
                $guestsIdList = $this->dao->select('id')->from(TABLE_RELATION)
                    ->where('type')->eq($type)
                    ->andWhere('category')->in($categories)
                    ->fetchAll('id');
            }

            $guestss = $this->dao->select('*')->from(TABLE_GUESTS)
                ->where('type')->eq($type)
                ->beginIf(defined('RUN_MODE') and RUN_MODE == 'front')
                ->andWhere('status')->eq('normal')
                ->andWhere('addedDate')->le(helper::now())
                ->fi()
                ->beginIf(!empty($categories))->andWhere('id')->in(array_keys($guestsIdList))->fi()

                ->beginIf($searchWord)
                ->andWhere('title', true)->like("%{$searchWord}%")
                ->orWhere('keywords')->like("%{$searchWord}%")
                ->orWhere('summary')->like("%{$searchWord}%")
                ->orWhere('content')->like("%{$searchWord}%")
                ->markRight(1)
                ->fi()

                ->orderBy($orderBy)
                ->page($pager)
                ->beginIf($limit)->limit($limit)->fi()
                ->fetchAll('id');
        }
        if(!$guestss) return array();

        return $this->processguestsList($guestss, $type);
    }

    /**
     * Get page pairs.
     * 
     * @access public
     * @return array
     */
    public function getPagePairs()
    {
        return $this->dao->select('id, title')->from(TABLE_GUESTS)
            ->where('type')->eq('page')
            ->andWhere('addedDate')->le(helper::now())
            ->andWhere('status')->eq('normal')
            ->orderBy('id_desc')
            ->fetchPairs();
    }

    /**
     * get hot guestss. 
     *
     * @param string|array    $categories
     * @param int             $count
     * @param string          $type
     * @access public
     * @return array
     */
    public function getHot($categories, $count, $type = 'guests')
    {
        $family = array();
        $this->loadModel('tree');

        if(!is_array($categories)) $categories = explode(',', $categories);
        foreach($categories as $category) $family = array_merge($family, $this->tree->getFamily($category));

        return $this->getList($type, $family, 'sticky_desc, views_desc', null, $count);
    }

    /**
     * get latest guestss. 
     *
     * @param string|array     $categories
     * @param int              $count
     * @param string           $type
     * @access public
     * @return array
     */
    public function getLatest($categories, $count, $type = 'guests')
    {
        $family = array();
        $this->loadModel('tree');

        if(!is_array($categories)) $categories = explode(',', $categories);
        foreach($categories as $category) $family = array_merge($family, $this->tree->getFamily($category));

        $this->app->loadClass('pager', true);
        return $this->getList($type, $family, 'sticky_desc, addedDate_desc', null, $count);
    }

    /**
     * Get page list. 
     *
     * @param int              $count
     * @param string           $type
     * @access public
     * @return array
     */
    public function getPageList($count)
    {
        $this->app->loadClass('pager', true);
        return $this->getList('page', '', '`order` desc', null, $count);
    }

    /**
     * Get stick guestss.
     * 
     * @param  mix    $categories 
     * @access public
     * @return array
     */
    public function getSticks($categories, $type)
    { 
        $sticks = $this->dao->select('t1.*, t2.category')->from(TABLE_GUESTS)->alias('t1')
                ->leftJoin(TABLE_RELATION)->alias('t2')->on('t1.id = t2.id')
                ->where('t1.sticky')->ne(0)
                ->andWhere('t2.type')->eq($type)
                ->beginIf(defined('RUN_MODE') and RUN_MODE == 'front')
                ->andWhere('t1.addedDate')->le(helper::now())
                ->andWhere('t1.status')->eq('normal')
                ->fi()
                ->beginIf($categories)->andWhere('t2.category')->in($categories)->fi()
                ->orderBy('sticky_desc, addedDate_desc')
                ->fetchAll('id');

        if(!$sticks) return array();

        return $this->processguestsList($sticks, $type);
    }

    /**
     * Process guests list.
     * 
     * @param  array    $guestss 
     * @param  string   $type 
     * @access public
     * @return array
     */
    public function processguestsList($guestss, $type)
    {
        $guestsIdList = array_keys($guestss);
        $categories    = $this->dao->select('t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests')
            ->from(TABLE_RELATION)->alias('t1')
            ->leftJoin(TABLE_CATEGORY)->alias('t2')->on('t1.category = t2.id')
            ->where('t2.type')->eq($type)
            ->andWhere('t1.id')->in($guestsIdList)
            ->fetchGroup('guests', 'id');

        /* Get images for these guestss. */
        $images = $this->loadModel('file')->getByObject($type, $guestsIdList, $isImage = true);

         /* Assign summary, category to it's guests. */
        foreach($guestss as $guests)
        {
            $guests->summary    = empty($guests->summary) ? helper::substr(strip_tags($guests->content), 200, '...') : $guests->summary;
            $guests->categories = isset($categories[$guests->id]) ? $categories[$guests->id] : array();
            $guests->category   = current($guests->categories);
        }

        $guestss = $this->loadModel('file')->processImages($guestss, $type);

        return $guestss;
    }

    /**
     * Compute comments of an guests list.
     * 
     * @param  array    $guestss 
     * @param  string   $type
     * @access public
     * @return array
     */
    public function computeComments($guestss, $type = 'guests')
    {
        if(empty($guestss)) return $guestss;
        if(!commonModel::isAvailable('message')) return $guestss;
        $guestsIdList = array_keys($guestss);

        $comments = $this->dao->select("objectID, count(id) as count")->from(TABLE_MESSAGE)
            ->where('type')->eq('comment')
            ->andWhere('objectType')->eq($type)
            ->andWhere('objectID')->in($guestsIdList)
            ->andWhere('status')->eq(1)
            ->groupBy('objectID')
            ->fetchPairs('objectID', 'count');

        foreach($guestss as $guests)
        {
            $guests->comments = isset($comments[$guests->id]) ? $comments[$guests->id] : 0;
        }

        return $guestss;
    }

    /**
     * Get the prev and next guests.
     * 
     * @param  int    $current  the current guests id.
     * @param  int    $category the category id.
     * @access public
     * @return array
     */
    public function getPrevAndNext($current, $category)
    {
        $prev = $this->dao->select('t1.id, title, alias')->from(TABLE_GUESTS)->alias('t1')
           ->leftJoin(TABLE_RELATION)->alias('t2')->on('t1.id = t2.id')
           ->where('t2.category')->eq($category)
           ->andWhere('t1.status')->eq('normal')
           ->andWhere('t1.addedDate')->lt($current->addedDate)
           ->orWhere('t1.addedDate', true)->eq($current->addedDate)
           ->andWhere('t1.id')->lt($current->id)
           ->markRight(1)
           ->orderBy('addedDate_desc, id_desc')
           ->limit(1)
           ->fetch();

       $next = $this->dao->select('t1.id, title, alias')->from(TABLE_GUESTS)->alias('t1')
           ->leftJoin(TABLE_RELATION)->alias('t2')->on('t1.id = t2.id')
           ->where('t2.category')->eq($category)
           ->andWhere('t1.addedDate')->le(helper::now())
           ->andWhere('t1.status')->eq('normal')
           ->andWhere('t1.addedDate')->gt($current->addedDate)
           ->orWhere('t1.addedDate', true)->eq($current->addedDate)
           ->andWhere('t1.id')->gt($current->id)
           ->markRight(1)
           ->orderBy('addedDate, id')
           ->limit(1)
           ->fetch();

        return array('prev' => $prev, 'next' => $next);
    }

    /**
     * Create an guests.
     * 
     * @param  string $type 
     * @access public
     * @return int|bool
     */
    public function create($type)
    {
        $now = helper::now();

        $guests = fixer::input('post')
            ->join('categories', ',')
            ->setDefault('addedDate', $now)
            ->add('editedDate', $now)
            ->add('type', $type)
            ->add('addedBy', $this->app->user->account)
            ->setIF(!$this->post->isLink, 'link', '')
            ->setIF(RUN_MODE == 'front', 'submission', 1)
            ->setIF($type == 'page' and !$this->post->onlyBody, 'onlyBody', 0)
            ->stripTags('content,link,videoLink', $this->config->allowedTags->admin)
            ->removeIF($type == 'video', 'videoLink, width, height, autoplay')
            ->get();
        if(!isset($guests->categories)) $guests->categories = '';

        if($type == 'submission')
        {
            $guests->author = $this->app->user->account;
            if(!empty($this->app->user->nickname)) $guests->author = $this->app->user->nickname;
            if(!empty($this->app->user->realname)) $guests->author = $this->app->user->realname;
        }

        /* Set video */
        if($type == 'video')
        {
            if(!$this->post->videoLink)
            {
                dao::$errors['videoLink'] = sprintf($this->lang->error->notempty, $this->lang->video->link);
                return false;
            }
    
            $video = new stdclass();
            $video->link     = $this->post->videoLink;
            $video->width    = $this->post->width;
            $video->height   = $this->post->height;
            $video->autoplay = $this->post->autoplay ? true : false;
            $guests->video = helper::jsonEncode($video);
        }

        $guests->keywords = seo::unify($guests->keywords, ',');
        if(!empty($guests->alias)) $guests->alias = seo::unify($guests->alias, '-', true);
        $guests->content = $this->rtrimContent($guests->content);
    
        $guests = $this->loadModel('file')->processImgURL($guests, $this->config->guests->editor->create['id'], $this->post->uid);
        $this->dao->insert(TABLE_GUESTS)
            ->data($guests, $skip = 'categories,uid,isLink')
            ->autoCheck()
            ->batchCheckIF($type != 'page' and $type != 'submission' and !$this->post->isLink, $this->config->guests->require->create, 'notempty')
            ->batchCheckIF($type == 'submission', $this->config->guests->require->post, 'notempty')
            ->batchCheckIF($type == 'page' and !$this->post->isLink, $this->config->guests->require->page, 'notempty')
            ->batchCheckIF($type != 'page' and $this->post->isLink, $this->config->guests->require->link, 'notempty')
            ->batchCheckIF($type == 'page' and $this->post->isLink, $this->config->guests->require->pageLink, 'notempty')
            ->batchCheckIF($type == 'video', $this->config->guests->require->video, 'notempty')
            ->checkIF(($type == 'page') and $this->post->alias, 'alias', 'unique', "type='page'")
            ->exec();
        $guestsID = $this->dao->lastInsertID();
        $this->loadModel('file')->updateObjectID($this->post->uid, $guestsID, $type); 
        $this->file->copyFromContent($this->post->content, $guestsID, $type);

        if(dao::isError()) return false;

        /* Save guests keywords. */
        $this->loadModel('tag')->save($guests->keywords);
        if($type != 'page' and $type != 'submission') $this->processCategories($guestsID, $type, $this->post->categories);

        return $guestsID;
    }

    /**
     * forward an guests to blog. 
     * 
     * @param  int    $guestsID 
     * @access public
     * @return bool 
     */
    public function forward2Blog($guestsID)
    {
        if(!commonModel::isAvailable('blog')) return false;
        $blog = $this->dao->select('*')->from(TABLE_GUESTS)->where('alias')->eq($guestsID)->fetch();
        if(!$blog) $blog = $this->dao->select('*')->from(TABLE_GUESTS)->where('id')->eq($guestsID)->fetch();

        if(!$blog) return false;
        
        $blog->source     = 'guests';
        $blog->type       = 'blog';
        $blog->categories = $this->post->categories;
        $blog->copyURL    = $guestsID; 
        $blog->author     = $this->app->user->account;
        $blog->addedDate  = $this->post->addedDate ? $this->post->addedDate : helper::now();
        $blog->editedDate = $blog->addedDate;
        $blog->views      = 0;
        $blog->sticky     = 0;

        $this->dao->insert(TABLE_GUESTS)->data($blog, $skip='id,categories')->autoCheck()->batchCheck($this->config->guests->require->forward2Blog, 'notempty')->exec();
        $blogID = $this->dao->lastInsertID();
        
        $files = $this->dao->select('*')->from(TABLE_FILE)->where('objectID')->eq($guestsID)->andWhere('objectType')->eq('guests')->fetchAll();
        foreach($files as $file)
        {
            $file->objectType = 'blog';
            $file->objectID   = $blogID;
            $file->downloads  = 0;
            $this->dao->insert(TABLE_FILE)->data($file, $skip='id')->autoCheck()->exec();
        }

        if(dao::isError()) return false;

        /* Save blog keywords. */
        $this->loadModel('tag')->save($blog->keywords);
        $this->processCategories($blogID, 'blog', $this->post->categories);

        $blog = $this->getByID($blogID);
        return $this->loadModel('search')->save('blog', $blog);
    }
    
    /**
     * Forward an guests to forum. 
     * 
     * @param  int    $guestsID 
     * @access public
     * @return bool 
     */
    public function forward2Forum($guestsID)
    {
        if(!commonModel::isAvailable('forum')) return false;
        $guests  = $this->getByID($guestsID);
        $category = current($guests->categories);
        $address  = $this->loadModel('common')->getSysURL() . $this->createPreviewLink($guestsID);

        $thread = $this->dao->select('*')->from(TABLE_GUESTS)->where('alias')->eq($guestsID)->fetch();
        if(!$thread) $thread = $this->dao->select('title, content')->from(TABLE_GUESTS)->where('id')->eq($guestsID)->fetch();

        if(!$thread) return false;
        
        $thread->board       = $this->post->board;
        $thread->author      = $this->app->user->realname;
        $thread->content    .= "<br><br><div style='text-align: right'>" . $this->lang->guests->forwardFrom . ' ' . html::a($address, $address) . '</div>';
        $thread->addedDate   = $this->post->addedDate ? $this->post->addedDate : helper::now();
        $thread->editedDate  = $thread->addedDate;
        $thread->repliedDate = $thread->addedDate;

        $this->dao->insert(TABLE_THREAD)->data($thread)->autoCheck()->batchCheck($this->config->guests->require->forward2Forum, 'notempty')->exec();
            
        $threadID = $this->dao->lastInsertID();
        $thread   = $this->loadModel('thread')->getByID($threadID);
        if(dao::isError()) return false;

        $files = $this->dao->select('*')->from(TABLE_FILE)->where('objectID')->eq($guestsID)->andWhere('objectType')->eq('guests')->fetchAll();
        foreach($files as $file)
        {
            $file->objectType = 'thread';
            $file->objectID   = $threadID;
            $this->dao->insert(TABLE_FILE)->data($file, $skip='id')->autoCheck()->exec();
        }
        if(dao::isError()) return false;

        $this->loadModel('search')->save('thread', $thread);

        return !dao::isError(); 
    }
    /**
     * Update an guests.
     * 
     * @param string   $guestsID 
     * @access public
     * @return void
     */
    public function update($guestsID, $type = 'guests')
    {
        $guests  = $this->getByID($guestsID);
        $category = array_keys($guests->categories);

        $guests = fixer::input('post')
            ->stripTags('content,link', $this->config->allowedTags->admin)
            ->join('categories', ',')
            ->add('editor', $this->app->user->account)
            ->add('editedDate', helper::now())
            ->setIF(!$this->post->isLink, 'link', '')
            ->setIF($type == 'page' and !$this->post->onlyBody, 'onlyBody', 0)
            ->get();

        $guests->keywords = seo::unify($guests->keywords, ',');
        if(!empty($guests->alias)) $guests->alias = seo::unify($guests->alias, '-', true);
        $guests->content  = $this->rtrimContent($guests->content);
        if(!isset($guests->categories)) $guests->categories = '';

        $guests = $this->loadModel('file')->processImgURL($guests, $this->config->guests->editor->edit['id'], $this->post->uid);
        $this->dao->update(TABLE_GUESTS)
            ->data($guests, $skip = 'categories,uid,isLink')
            ->autoCheck()
            ->batchCheckIF($type == 'submission', $this->config->guests->require->post, 'notempty')
            ->batchCheckIF($type != 'page' and $type != 'submission' and !$this->post->isLink, $this->config->guests->require->edit, 'notempty')
            ->batchCheckIF($type == 'page' and !$this->post->isLink, $this->config->guests->require->page, 'notempty')
            ->batchCheckIF($type != 'page' and $this->post->isLink, $this->config->guests->require->link, 'notempty')
            ->batchCheckIF($type == 'page' and $this->post->isLink, $this->config->guests->require->pageLink, 'notempty')
            ->checkIF(($type == 'page') and $this->post->alias, 'alias', 'unique', "type='page' and id<>{$guestsID}")
            ->where('id')->eq($guestsID)
            ->exec();

        $this->loadModel('file')->updateObjectID($this->post->uid, $guestsID, $type);
        $this->file->copyFromContent($this->post->content, $guestsID, $type);

        if(dao::isError()) return false;

        $this->loadModel('tag')->save($guests->keywords);
        if($type != 'page' and $type != 'submission') $this->processCategories($guestsID, $type, $this->post->categories);

        if(dao::isError()) return false;

        $guests = $this->getByID($guestsID);
        if(empty($guests)) return false;
        if($type == 'submission') return true;

        return true;
    }
        
    /**
     * Delete an guests.
     * 
     * @param  int      $guestsID 
     * @access public
     * @return void
     */
    public function delete($guestsID, $null = null)
    {
        $guests = $this->getByID($guestsID);
        if(!$guests) return false;
        if(RUN_MODE == 'front' and $guests->addedBy != $this->app->user->account) die();
        /* If this guests is a submission and has been adopt, front cannot delete it.*/
        if(RUN_MODE == 'front' and $guests->submission == 2) die();

        $this->dao->delete()->from(TABLE_RELATION)->where('id')->eq($guestsID)->andWhere('type')->eq($guests->type)->exec();
        $this->dao->delete()->from(TABLE_GUESTS)->where('id')->eq($guestsID)->exec();
        return $this->loadModel('search')->deleteIndex($guests->type, $guestsID);
    }

    /**
     * Process categories for an guests.
     * 
     * @param  int    $guestsID 
     * @param  string $tree
     * @param  array  $categories 
     * @access public
     * @return void
     */
    public function processCategories($guestsID, $type = 'guests', $categories = array())
    {
       if(!$guestsID) return false;

       /* First delete all the records of current guests from the releation table.  */
       $this->dao->delete()->from(TABLE_RELATION)
           ->where('type')->eq($type)
           ->andWhere('id')->eq($guestsID)
           ->autoCheck()
           ->exec();

       /* Then insert the new data. */
       foreach($categories as $category)
       {
           if(!$category) continue;

           $data = new stdclass();
           $data->type     = $type; 
           $data->id       = $guestsID;
           $data->category = $category;
           $this->dao->insert(TABLE_RELATION)->data($data)->exec();
       }
    }

    /**
     * Create preview link. 
     * 
     * @param  int    $guestsID 
     * @access public
     * @return string
     */
    public function createPreviewLink($guestsID, $viewType = '', $guestsType = '')
    {
        if($guestsType == 'book')
        {
            $this->loadModel('book');
            $bookNode = $this->book->getNodeByID($guestsID);

            $link = commonModel::createFrontLink('book', 'read', "guestsID=$bookNode->id", "book={$bookNode->book->alias}&node={$bookNode->alias}", $viewType);
            return $link;
        }

        $guests = $this->getByID($guestsID);
        if(empty($guests)) return null;
        $module  = $guests->type;
        $param   = "guestsID=$guestsID";
        if($guests->type != 'page')
        {
            $categories    = $guests->categories;
            $categoryAlias = current($categories)->alias;
            $alias         = "category=$categoryAlias&name=$guests->alias";
        }
        else
        {
            $alias = "name=$guests->alias";
        }

        $link = commonModel::createFrontLink($module, 'view', $param, $alias, $viewType);
        if(!empty($guests->link)) $link = $guests->link;

        return $link;
    }

    /**
     * Delete '<p><br /></p>' if it at string's last. 
     * 
     * @param  string    $content 
     * @access public
     * @return string
     */
    public function rtrimContent($content)
    {
        /* Delete empty line such as '<p><br /></p>' if guests content has it at last */
        $res   = '';
        $match = '/(\s+?<p><br \/>\s+?<\/p>)+$/';
        preg_match($match, $content, $res);
        if(isset($res[0]))
        {
            $content = substr($content, 0, strlen($content) - strlen($res[0]));
        }
        return $content;
    }

    /**
     * Set css.
     * 
     * @param  int      $guestsID 
     * @access public
     * @return int
     */
    public function setCss($guestsID)
    {
        $data = fixer::input('post')
            ->add('editor', $this->app->user->account)
            ->add('editedDate', helper::now())
            ->stripTags('css', $this->config->allowedTags->admin)
            ->get();

        $this->dao->update(TABLE_GUESTS)->data($data, $skip = 'uid')->autoCheck()->where('id')->eq($guestsID)->exec();
        
        return !dao::isError();
    }

    /**
     * Set js.
     * 
     * @param  int      $guestsID 
     * @access public
     * @return int
     */
    public function setJs($guestsID)
    {
        $data = fixer::input('post')
            ->stripTags('js', $this->config->allowedTags->admin)
            ->add('editor', $this->app->user->account)
            ->add('editedDate', helper::now())
            ->get();

        $this->dao->update(TABLE_GUESTS)->data($data, $skip = 'uid')->autoCheck()->where('id')->eq($guestsID)->exec();
        
        return !dao::isError();
    }

    /**
     * Saving setting in config table. 
     * 
     * @access public
     * @return bool 
     */
    public function saveSetting()
    {
        $setting = new stdclass();
        $setting->submission = $this->post->submission; 
        $this->loadModel('setting')->setItems('system.common.guests', $setting);
        return !dao::isError();
    }

    /**
     * Approve an submission. 
     * 
     * @param  int    $guestsID 
     * @access public
     * @return void
     */
    public function approve($guestsID, $type, $categories)
    {
        $guests = $this->getByID($guestsID);
        if($type == "book")
        {
            $this->loadModel('book');
            $parentNode = $this->book->getNodeByID($categories[0]);

            $node = new stdclass();
            $node->parent = $parentNode ? $parentNode->id : 0;
            $node->grade  = $parentNode ? $parentNode->grade + 1 : 1;

            /* First, save the child without path field. */
            $node->guestsID = $guestsID;
            $node->title     = $guests->title;
            $node->type      = "guests";
            $node->author    = $guests->author;
            $node->alias     = $guests->alias;
            $node->keywords  = $guests->keywords;
            $node->summary   = $guests->summary;
            $node->content   = $guests->content;
            $node->addedDate = $guests->addedDate;
            $node->order     = 0;
            $node->keywords  = seo::unify($node->keywords, ',');

            $this->dao->insert(TABLE_BOOK)->data($node)->exec();

            /* After saving, update it's path. */
            $nodeID   = $this->dao->lastInsertID();
            $nodePath = $parentNode->path . "$nodeID,";
            $this->dao->update(TABLE_BOOK)->set('path')->eq($nodePath)->set('order')->eq($nodeID)->where('id')->eq($nodeID)->exec();

            $bookguests = $this->dao->select('*')->from(TABLE_BOOK)->where('id')->eq($nodeID)->fetch();
            $this->loadModel('search')->save("guests", $bookguests);

            $this->dao->update(TABLE_FILE)->set('objectType')->eq('book')->set('objectID')->eq($nodeID)->where('objectID')->eq($guestsID)->andWhere('objectType')->eq('guests')->exec();
        }
        else
        {
            $this->loadModel('search')->save($type, $guests);
            $this->loadModel('file')->updateObjectType($guestsID, 'submission', $type);
            $this->processCategories($guestsID, $type, $categories);
        }

        $this->dao->update(TABLE_GUESTS)->set('type')->eq($type)->set('submission')->eq(2)->where('id')->eq($guestsID)->exec();

        if(commonModel::isAvailable('score')) $this->loadModel('score')->earn('approveSubmission', 'guests', $guestsID, '', $guests->addedBy);
        $this->loadModel('message')->send($this->app->user->account, $guests->addedBy, sprintf($this->lang->guests->approveMessage, $guests->title, $this->config->score->counts->approveSubmission));

        return !dao::isError();
    }

    /**
     * Reject guests.
     * 
     * @param  int    $guestsID 
     * @access public
     * @return void
     */
    public function reject($guestsID)
    {
        $this->dao->update(TABLE_GUESTS)->set('submission')->eq(3)->where('id')->eq($guestsID)->exec();
        $guests = $this->getByID($guestsID);
        $this->loadModel('message')->send($this->app->user->account, $guests->addedBy, sprintf($this->lang->guests->rejectMessage, $guests->title));

        return !dao::isError();
    }

    /**
     * Get new submission list.
     * 
     * @access public
     * @return array
     */
    public function getSubmissions($limit)
    {
        return $this->dao->select('*')->from(TABLE_GUESTS)
            ->where('type')->eq('submission')
            ->andWhere('submission')->ne(3)
            ->andWhere('editedDate')->like(date("Y-m-d") . '%')
            ->fetchAll('id');
    }
}
