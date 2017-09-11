<?php
 die();
?>
20170903 14:10:33: /install.php

20170903 14:10:36: /install.php?m=install&f=step0

20170903 14:10:40: /install.php?m=install&f=step1

20170903 14:10:43: /install.php?m=install&f=step2

20170903 14:12:41: /install.php?m=install&f=step3

20170903 14:12:43: /install.php?m=install&f=step2

20170903 14:16:08: /install.php?m=install&f=step3

20170903 14:16:11: /install.php?m=install&f=step2

20170903 14:16:15: /install.php?m=install&f=step3

20170903 14:16:18: /install.php?m=install&f=step2

20170903 14:17:28: /install.php?m=install&f=step3

20170903 14:18:41: /install.php?m=install&f=step3

20170903 14:18:42: /install.php

20170903 14:19:43: /install.php?m=install&f=step3

20170903 14:19:43: /install.php?m=install&f=step0

20170903 14:20:50: /install.php?m=install&f=step0

20170903 14:20:53: /install.php?m=install&f=step1

20170903 14:20:55: /install.php?m=install&f=step2

20170903 14:22:13: /install.php?m=install&f=step3

20170903 14:23:14: /install.php?m=install&f=step3

20170903 14:23:14: /install.php?m=install&f=step2

20170903 14:23:16: /install.php?m=install&f=step2

20170903 14:23:17: /install.php?m=install&f=step2

20170903 14:23:18: /install.php?m=install&f=step3

20170903 14:24:53: /install.php

20170903 14:24:55: /install.php?m=install&f=step0

20170903 14:24:59: /install.php?m=install&f=step1

20170903 14:25:02: /install.php?m=install&f=step2

20170903 14:25:28: /install.php?m=install&f=step3

20170903 14:25:29: /install.php?m=install&f=step4

20170903 14:25:45: /install.php?m=install&f=step4
  INSERT INTO hl_user SET `account` = 'root',`realname` = 'root',`password` = '93234f6e10ca0bab3781ff19c77a0b82',`admin` = 'super',`join` = '2017-09-03 14:25:45',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'global',`key` = 'version',`value` = '6.5',`lang` = 'all'

20170903 14:25:45: /install.php?m=install&f=step5
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'lang',`value` = '',`lang` = 'all'

20170903 14:25:57: /admin.php?m=user&f=login&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','guest')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM hl_user AS u  LEFT JOIN hl_oauth AS o  ON u.account = o.account  WHERE u.account  = 'root'
  SELECT * FROM hl_user WHERE account  = 'root'
  INSERT INTO hl_log SET `account` = 'root',`date` = '2017-09-03 14:25:57',`ip` = '172.17.0.1',`location` = '局域网 局域网  ',`browser` = 'chrome 60',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/60.0.3112.113 Safari\\/537.36\"}'
  UPDATE hl_user SET `id` = '1',`account` = 'root',`password` = '93234f6e10ca0bab3781ff19c77a0b82',`realname` = 'root',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '1',`ip` = '172.17.0.1',`last` = '2017-09-03 14:25:57',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2017-09-03 14:25:45',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = '',`browser` = '',`lang` = 'zh-cn' WHERE account  = 'root'
  UPDATE hl_user SET  `browser` = 'chrome 60', `os` = 'Mac OS X' WHERE id  = '1' AND  hl_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM hl_usergroup AS t1  LEFT JOIN hl_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = 'root' AND  t1.lang in('zh-cn', 'all') 

20170903 14:25:58: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE id  = '5' AND  hl_widget.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 14:26:40: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE id  = '5' AND  hl_widget.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 14:26:48: /admin.php?m=admin&f=ignore
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'global',`key` = 'ignoreAdminEntry',`value` = '1',`lang` = 'zh-cn'

20170903 14:26:49: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE id  = '5' AND  hl_widget.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 14:27:35: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE id  = '5' AND  hl_widget.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 14:27:58: /admin.php?m=tree&f=children&type=article&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 14:28:06: /admin.php?m=tree&f=children&type=product&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'product'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 14:29:04: /admin.php?m=tree&f=children&type=product&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '0' AND  type  = 'article' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '0'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'junior' AND  id  != '0' AND  type IN ('article','product') AND  hl_category.lang in('zh-cn', 'all') 
  INSERT INTO hl_category SET `parent` = '0',`grade` = '1',`type` = 'product',`postedDate` = '2017-09-03 14:29:04',`name` = '初中同学',`alias` = 'junior',`order` = '10',`lang` = 'zh-cn'
  UPDATE hl_category SET  `path` = ',1,' WHERE id  = '1' AND  hl_category.lang in('zh-cn', 'all') 

20170903 14:29:06: /admin.php?m=tree&f=children&type=product&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'product'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 14:29:40: /admin.php?m=product&f=create&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'product'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'product'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_product SET `name` = '彭凯迪',`titleColor` = '',`order` = '1',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '初中同学',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0',`promotion` = '0',`author` = 'root',`addedDate` = '2017-09-03 14:29:39',`editedDate` = '2017-09-03 14:29:39',`lang` = 'zh-cn'
  DELETE FROM hl_product_custom WHERE product  = '1' AND  hl_product_custom.lang in('zh-cn', 'all') 
  REPLACE hl_product_custom SET `product` = '1',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'product' AND  id  = '1' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'product',`id` = '1',`category` = '1',`lang` = 'zh-cn'
  SELECT * FROM hl_product WHERE id  = '1' AND  hl_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM hl_category AS t1  LEFT JOIN hl_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '1' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_product_custom WHERE product  = '1'  AND  hl_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM hl_file WHERE objectType  = 'product' AND  objectID IN ('1') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'product' AND  objectID IN ('1') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  REPLACE hl_search_dict SET `key` = '24429',`value` = '彭',`lang` = 'zh-cn'
  REPLACE hl_search_dict SET `key` = '20975',`value` = '凯',`lang` = 'zh-cn'
  REPLACE hl_search_dict SET `key` = '36842',`value` = '迪',`lang` = 'zh-cn'
  REPLACE hl_search_dict SET `key` = '21021',`value` = '初',`lang` = 'zh-cn'
  REPLACE hl_search_dict SET `key` = '20013',`value` = '中',`lang` = 'zh-cn'
  REPLACE hl_search_dict SET `key` = '21516',`value` = '同',`lang` = 'zh-cn'
  REPLACE hl_search_dict SET `key` = '23398',`value` = '学',`lang` = 'zh-cn'
  REPLACE hl_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE hl_search_index SET `objectID` = '1',`objectType` = 'product',`title` = ' 24429 20975 36842',`status` = 'normal',`addedDate` = '2017-09-03 14:29:39',`editedDate` = '2017-09-03 14:29:39',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 21021 20013 21516 23398 65306',`lang` = 'zh-cn'

20170903 14:29:49: /admin.php?m=product&f=delete&productID=1
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'product'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_product WHERE id  = '1' AND  hl_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM hl_category AS t1  LEFT JOIN hl_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '1' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_product_custom WHERE product  = '1'  AND  hl_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM hl_file WHERE objectType  = 'product' AND  objectID IN ('1') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'product' AND  objectID IN ('1') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  DELETE FROM hl_relation WHERE id  = '1' AND  type  = 'product' AND  hl_relation.lang in('zh-cn', 'all') 
  DELETE FROM hl_product WHERE id  = '1' AND  hl_product.lang in('zh-cn', 'all') 
  DELETE FROM hl_product_custom WHERE product  = '1' AND  hl_product_custom.lang in('zh-cn', 'all') 
  DELETE FROM hl_search_index WHERE objectType  = 'product' AND  objectID  = '1' AND  hl_search_index.lang in('zh-cn', 'all') 

20170903 14:29:51: /admin.php?m=tree&f=children&type=product&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'product'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 14:29:55: /admin.php?m=tree&f=delete&category=1
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '1' AND  type  = 'article' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '1'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','1','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT * FROM hl_category WHERE parent  = '1' AND  type  = 'product'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM hl_category WHERE alias  = '1' AND  type  = 'article' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '1'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','1','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT * FROM hl_category WHERE alias  = '1' AND  type  = '' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '1'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','1','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',1,%' AND  hl_category.lang in('zh-cn', 'all') 
  UPDATE hl_category SET  `grade` = `grade` - 1 WHERE id IN ('1') AND  grade  > '0' AND  hl_category.lang in('zh-cn', 'all') 
  UPDATE hl_category SET  `parent` = '0' WHERE parent  = '1' AND  hl_category.lang in('zh-cn', 'all') 
  DELETE FROM hl_category WHERE id  = '1' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, parent FROM hl_category WHERE type  = 'product' AND  hl_category.lang in('zh-cn', 'all') 

20170903 14:29:56: /admin.php?m=tree&f=children&type=product&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'product'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 14:29:59: /admin.php?m=tree&f=children&type=article&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 14:30:05: /admin.php?m=tree&f=children&type=article&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '0' AND  type  = 'article' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '0'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'junior' AND  id  != '0' AND  type IN ('article','product') AND  hl_category.lang in('zh-cn', 'all') 
  INSERT INTO hl_category SET `parent` = '0',`grade` = '1',`type` = 'article',`postedDate` = '2017-09-03 14:30:05',`name` = '初中同学',`alias` = 'junior',`order` = '10',`lang` = 'zh-cn'
  UPDATE hl_category SET  `path` = ',2,' WHERE id  = '2' AND  hl_category.lang in('zh-cn', 'all') 

20170903 14:30:07: /admin.php?m=tree&f=children&type=article&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 14:30:39: /admin.php?m=article&f=create&type=article&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_article SET `author` = 'root',`source` = 'original',`titleColor` = '',`title` = '彭凯迪',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = '初中同学',`addedDate` = '2017-09-03 14:30',`status` = 'normal',`editedDate` = '2017-09-03 14:30:39',`type` = 'article',`addedBy` = 'root',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'article' AND  id  = '1' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'article',`id` = '1',`category` = '2',`lang` = 'zh-cn'
  SELECT * FROM hl_article WHERE id  = '1' AND  hl_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '1' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'article' AND  objectID IN ('1') ORDER BY `order`,`editor` desc 
  REPLACE hl_search_dict SET `key` = '24429',`value` = '彭',`lang` = 'zh-cn'
  REPLACE hl_search_dict SET `key` = '20975',`value` = '凯',`lang` = 'zh-cn'
  REPLACE hl_search_dict SET `key` = '36842',`value` = '迪',`lang` = 'zh-cn'
  REPLACE hl_search_dict SET `key` = '21021',`value` = '初',`lang` = 'zh-cn'
  REPLACE hl_search_dict SET `key` = '20013',`value` = '中',`lang` = 'zh-cn'
  REPLACE hl_search_dict SET `key` = '21516',`value` = '同',`lang` = 'zh-cn'
  REPLACE hl_search_dict SET `key` = '23398',`value` = '学',`lang` = 'zh-cn'
  REPLACE hl_search_index SET `objectID` = '1',`objectType` = 'article',`title` = ' 24429 20975 36842',`status` = 'normal',`addedDate` = '2017-09-03 14:30:00',`editedDate` = '2017-09-03 14:30:39',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 21021 20013 21516 23398',`lang` = 'zh-cn'

20170903 14:30:52: /admin.php?m=article&f=delete&articleID=1
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE id  = '1' AND  hl_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '1' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'article' AND  objectID IN ('1') ORDER BY `order`,`editor` desc 
  DELETE FROM hl_relation WHERE id  = '1' AND  type  = 'article' AND  hl_relation.lang in('zh-cn', 'all') 
  DELETE FROM hl_article WHERE id  = '1' AND  hl_article.lang in('zh-cn', 'all') 
  DELETE FROM hl_search_index WHERE objectType  = 'article' AND  objectID  = '1' AND  hl_search_index.lang in('zh-cn', 'all') 

20170903 14:31:45: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE id  = '5' AND  hl_widget.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 14:32:10: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE id  = '5' AND  hl_widget.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 14:32:32: /admin.php?m=site&f=setbasic
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'status',`value` = 'normal',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'pauseTip',`value` = '站点维护中……',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'type',`value` = 'portal',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'mobileTemplate',`value` = 'open',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'name',`value` = '蝉知企业门户系统',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'copyright',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'modules',`value` = 'article,user',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'keywords',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'indexKeywords',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'slogan',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'meta',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'desc',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'icpSN',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'icpLink',`value` = 'http://www.miitbeian.gov.cn',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'policeSN',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'policeLink',`value` = 'http://www.miitbeian.gov.cn',`lang` = 'zh-cn'

20170903 14:32:41: /admin.php?m=user&f=login&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','guest')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM hl_user AS u  LEFT JOIN hl_oauth AS o  ON u.account = o.account  WHERE u.account  = 'root'
  SELECT * FROM hl_user WHERE account  = 'root'
  INSERT INTO hl_log SET `account` = 'root',`date` = '2017-09-03 14:32:41',`ip` = '172.17.0.1',`location` = '局域网 局域网  ',`browser` = 'chrome 60',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/60.0.3112.113 Safari\\/537.36\"}'
  UPDATE hl_user SET `id` = '1',`account` = 'root',`password` = '93234f6e10ca0bab3781ff19c77a0b82',`realname` = 'root',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '2',`ip` = '172.17.0.1',`last` = '2017-09-03 14:32:41',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2017-09-03 14:25:45',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Mac OS X',`browser` = 'chrome 60',`lang` = 'zh-cn' WHERE account  = 'root'
  UPDATE hl_user SET  `browser` = 'chrome 60', `os` = 'Mac OS X' WHERE id  = '1' AND  hl_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM hl_usergroup AS t1  LEFT JOIN hl_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = 'root' AND  t1.lang in('zh-cn', 'all') 

20170903 14:33:22: /admin.php?m=site&f=setbasic
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'status',`value` = 'normal',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'pauseTip',`value` = '站点维护中……',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'type',`value` = 'portal',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'mobileTemplate',`value` = 'open',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'name',`value` = '蝉知企业门户系统',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'copyright',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'modules',`value` = 'article,user,product,stat',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'keywords',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'indexKeywords',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'slogan',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'meta',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'desc',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'icpSN',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'icpLink',`value` = 'http://www.miitbeian.gov.cn',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'policeSN',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'policeLink',`value` = 'http://www.miitbeian.gov.cn',`lang` = 'zh-cn'

20170903 14:33:26: /admin.php?m=user&f=login&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','guest')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM hl_user AS u  LEFT JOIN hl_oauth AS o  ON u.account = o.account  WHERE u.account  = 'root'
  SELECT * FROM hl_user WHERE account  = 'root'
  INSERT INTO hl_log SET `account` = 'root',`date` = '2017-09-03 14:33:26',`ip` = '172.17.0.1',`location` = '局域网 局域网  ',`browser` = 'chrome 60',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/60.0.3112.113 Safari\\/537.36\"}'
  UPDATE hl_user SET `id` = '1',`account` = 'root',`password` = '93234f6e10ca0bab3781ff19c77a0b82',`realname` = 'root',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '3',`ip` = '172.17.0.1',`last` = '2017-09-03 14:33:26',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2017-09-03 14:25:45',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Mac OS X',`browser` = 'chrome 60',`lang` = 'zh-cn' WHERE account  = 'root'
  UPDATE hl_user SET  `browser` = 'chrome 60', `os` = 'Mac OS X' WHERE id  = '1' AND  hl_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM hl_usergroup AS t1  LEFT JOIN hl_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = 'root' AND  t1.lang in('zh-cn', 'all') 

20170903 14:33:33: /admin.php?m=tree&f=children&type=product&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'product'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 14:33:40: /admin.php?m=tree&f=children&type=product&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '0' AND  type  = 'article' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '0'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'junior' AND  id  != '0' AND  type IN ('article','product') AND  hl_category.lang in('zh-cn', 'all') 

20170903 14:33:44: /admin.php?m=tree&f=children&type=product&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '0' AND  type  = 'article' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '0'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'junior' AND  id  != '0' AND  type IN ('article','product') AND  hl_category.lang in('zh-cn', 'all') 

20170903 14:33:49: /admin.php?m=tree&f=children&type=product&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'product'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 14:34:54: /admin.php?m=tree&f=children&type=product&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '0' AND  type  = 'article' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '0'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'high' AND  id  != '0' AND  type IN ('article','product') AND  hl_category.lang in('zh-cn', 'all') 
  INSERT INTO hl_category SET `parent` = '0',`grade` = '1',`type` = 'product',`postedDate` = '2017-09-03 14:34:54',`name` = '高中同学',`alias` = 'high',`order` = '10',`lang` = 'zh-cn'
  UPDATE hl_category SET  `path` = ',3,' WHERE id  = '3' AND  hl_category.lang in('zh-cn', 'all') 

20170903 14:34:56: /admin.php?m=tree&f=children&type=product&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'product'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 14:35:07: /admin.php?m=product&f=create&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'product'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'product'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_product SET `name` = 'test',`titleColor` = '',`order` = '1',`alias` = '',`mall` = '',`keywords` = '',`desc` = '',`content` = '1',`brand` = '',`model` = '',`color` = '',`amount` = '0',`origin` = '',`unit` = '',`price` = '0',`promotion` = '0',`author` = 'root',`addedDate` = '2017-09-03 14:35:07',`editedDate` = '2017-09-03 14:35:07',`lang` = 'zh-cn'
  DELETE FROM hl_product_custom WHERE product  = '2' AND  hl_product_custom.lang in('zh-cn', 'all') 
  REPLACE hl_product_custom SET `product` = '2',`label` = '',`order` = '0',`value` = '',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'product' AND  id  = '2' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'product',`id` = '2',`category` = '3',`lang` = 'zh-cn'
  SELECT * FROM hl_product WHERE id  = '2' AND  hl_product.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t1.* FROM hl_category AS t1  LEFT JOIN hl_relation AS t2  ON t2.category = t1.id  WHERE t2.type  = 'product' AND  t2.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_product_custom WHERE product  = '2'  AND  hl_product_custom.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM hl_file WHERE objectType  = 'product' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'product' AND  objectID IN ('2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  REPLACE hl_search_dict SET `key` = '65306',`value` = '：',`lang` = 'zh-cn'
  REPLACE hl_search_index SET `objectID` = '2',`objectType` = 'product',`title` = ' test_',`status` = 'normal',`addedDate` = '2017-09-03 14:35:07',`editedDate` = '2017-09-03 14:35:07',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' |1|__ 65306',`lang` = 'zh-cn'

20170903 14:35:13: /admin.php?m=file&f=browse&objectType=product&objectID=2&isImage=1
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'product' AND  objectID IN ('2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM hl_user ORDER BY `id` asc 

20170903 14:35:21: /admin.php?m=file&f=browse&objectType=product&objectID=2&isImage=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'product' AND  objectID IN ('2') AND  extension  NOT IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM hl_user ORDER BY `id` asc 

20170903 14:35:38: /admin.php?m=file&f=browse&objectType=product&objectID=2&isImage=1
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'product' AND  objectID IN ('2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT account, realname, realnames FROM hl_user ORDER BY `id` asc 

20170903 14:35:46: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE id  = '5' AND  hl_widget.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 14:36:07: /admin.php?m=site&f=setbasic
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'status',`value` = 'normal',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'pauseTip',`value` = '站点维护中……',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'type',`value` = 'portal',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'mobileTemplate',`value` = 'open',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'name',`value` = '蝉知企业门户系统',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'copyright',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'modules',`value` = 'article,user',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'keywords',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'indexKeywords',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'slogan',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'meta',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'desc',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'icpSN',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'icpLink',`value` = 'http://www.miitbeian.gov.cn',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'policeSN',`value` = '',`lang` = 'zh-cn'
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'policeLink',`value` = 'http://www.miitbeian.gov.cn',`lang` = 'zh-cn'

20170903 14:36:29: /admin.php?m=user&f=login&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','guest')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM hl_user AS u  LEFT JOIN hl_oauth AS o  ON u.account = o.account  WHERE u.account  = 'root'
  SELECT * FROM hl_user WHERE account  = 'root'
  INSERT INTO hl_log SET `account` = 'root',`date` = '2017-09-03 14:36:29',`ip` = '172.17.0.1',`location` = '局域网 局域网  ',`browser` = 'chrome 60',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/60.0.3112.113 Safari\\/537.36\"}'
  UPDATE hl_user SET `id` = '1',`account` = 'root',`password` = '93234f6e10ca0bab3781ff19c77a0b82',`realname` = 'root',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '4',`ip` = '172.17.0.1',`last` = '2017-09-03 14:36:29',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2017-09-03 14:25:45',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Mac OS X',`browser` = 'chrome 60',`lang` = 'zh-cn' WHERE account  = 'root'
  UPDATE hl_user SET  `browser` = 'chrome 60', `os` = 'Mac OS X' WHERE id  = '1' AND  hl_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM hl_usergroup AS t1  LEFT JOIN hl_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = 'root' AND  t1.lang in('zh-cn', 'all') 

20170903 14:38:56: /admin.php?m=user&f=login&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','guest')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM hl_user AS u  LEFT JOIN hl_oauth AS o  ON u.account = o.account  WHERE u.account  = 'root'
  SELECT * FROM hl_user WHERE account  = 'root'
  INSERT INTO hl_log SET `account` = 'root',`date` = '2017-09-03 14:38:56',`ip` = '172.17.0.1',`location` = '局域网 局域网  ',`browser` = 'chrome 60',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/60.0.3112.113 Safari\\/537.36\"}'
  UPDATE hl_user SET `id` = '1',`account` = 'root',`password` = '93234f6e10ca0bab3781ff19c77a0b82',`realname` = 'root',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '5',`ip` = '172.17.0.1',`last` = '2017-09-03 14:38:56',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2017-09-03 14:25:45',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Mac OS X',`browser` = 'chrome 60',`lang` = 'zh-cn' WHERE account  = 'root'
  UPDATE hl_user SET  `browser` = 'chrome 60', `os` = 'Mac OS X' WHERE id  = '1' AND  hl_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM hl_usergroup AS t1  LEFT JOIN hl_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = 'root' AND  t1.lang in('zh-cn', 'all') 

20170903 14:42:31: /admin.php?m=user&f=login&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','guest')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM hl_user AS u  LEFT JOIN hl_oauth AS o  ON u.account = o.account  WHERE u.account  = 'root'
  SELECT * FROM hl_user WHERE account  = 'root'
  INSERT INTO hl_log SET `account` = 'root',`date` = '2017-09-03 14:42:31',`ip` = '172.17.0.1',`location` = '局域网 局域网  ',`browser` = 'chrome 60',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/60.0.3112.113 Safari\\/537.36\"}'
  UPDATE hl_user SET `id` = '1',`account` = 'root',`password` = '93234f6e10ca0bab3781ff19c77a0b82',`realname` = 'root',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '6',`ip` = '172.17.0.1',`last` = '2017-09-03 14:42:31',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2017-09-03 14:25:45',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Mac OS X',`browser` = 'chrome 60',`lang` = 'zh-cn' WHERE account  = 'root'
  UPDATE hl_user SET  `browser` = 'chrome 60', `os` = 'Mac OS X' WHERE id  = '1' AND  hl_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM hl_usergroup AS t1  LEFT JOIN hl_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = 'root' AND  t1.lang in('zh-cn', 'all') 

20170903 14:45:58: /admin.php?m=site&f=sethomemenu
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  REPLACE hl_config SET `owner` = 'system',`module` = 'common',`section` = 'menus',`key` = 'home',`value` = 'admin,',`lang` = 'zh-cn'

20170903 14:46:05: /admin.php?m=user&f=login&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','guest')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM hl_user AS u  LEFT JOIN hl_oauth AS o  ON u.account = o.account  WHERE u.account  = 'root'
  SELECT * FROM hl_user WHERE account  = 'root'
  INSERT INTO hl_log SET `account` = 'root',`date` = '2017-09-03 14:46:05',`ip` = '172.17.0.1',`location` = '局域网 局域网  ',`browser` = 'chrome 60',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/60.0.3112.113 Safari\\/537.36\"}'
  UPDATE hl_user SET `id` = '1',`account` = 'root',`password` = '93234f6e10ca0bab3781ff19c77a0b82',`realname` = 'root',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '7',`ip` = '172.17.0.1',`last` = '2017-09-03 14:46:05',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2017-09-03 14:25:45',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Mac OS X',`browser` = 'chrome 60',`lang` = 'zh-cn' WHERE account  = 'root'
  UPDATE hl_user SET  `browser` = 'chrome 60', `os` = 'Mac OS X' WHERE id  = '1' AND  hl_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM hl_usergroup AS t1  LEFT JOIN hl_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = 'root' AND  t1.lang in('zh-cn', 'all') 

20170903 14:50:27: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 14:54:39: /admin.php?m=user&f=login&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','guest')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM hl_user AS u  LEFT JOIN hl_oauth AS o  ON u.account = o.account  WHERE u.account  = 'root'
  SELECT * FROM hl_user WHERE account  = 'root'
  INSERT INTO hl_log SET `account` = 'root',`date` = '2017-09-03 14:54:39',`ip` = '172.17.0.1',`location` = '局域网 局域网  ',`browser` = 'chrome 60',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/60.0.3112.113 Safari\\/537.36\"}'
  UPDATE hl_user SET `id` = '1',`account` = 'root',`password` = '93234f6e10ca0bab3781ff19c77a0b82',`realname` = 'root',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '8',`ip` = '172.17.0.1',`last` = '2017-09-03 14:54:39',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2017-09-03 14:25:45',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Mac OS X',`browser` = 'chrome 60',`lang` = 'zh-cn' WHERE account  = 'root'
  UPDATE hl_user SET  `browser` = 'chrome 60', `os` = 'Mac OS X' WHERE id  = '1' AND  hl_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM hl_usergroup AS t1  LEFT JOIN hl_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = 'root' AND  t1.lang in('zh-cn', 'all') 

20170903 14:56:27: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 15:02:34: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 15:07:38: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 15:08:35: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 15:13:39: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 15:14:35: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 15:19:39: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 15:20:40: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 15:24:42: /admin.php?m=admin&f=index
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE account  = 'root' AND  hidden  = '0'  AND  hl_widget.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:24:43: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE id  = '5' AND  hl_widget.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 15:24:46: /admin.php?m=admin&f=index
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE account  = 'root' AND  hidden  = '0'  AND  hl_widget.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:24:46: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE id  = '5' AND  hl_widget.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 15:25:38: /admin.php?m=admin&f=index
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE account  = 'root' AND  hidden  = '0'  AND  hl_widget.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:26:27: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 15:28:45: /admin.php?m=admin&f=index
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE account  = 'root' AND  hidden  = '0'  AND  hl_widget.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:28:54: /admin.php?m=admin&f=index
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE account  = 'root' AND  hidden  = '0'  AND  hl_widget.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:30:22: /admin.php?m=admin&f=index
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE account  = 'root' AND  hidden  = '0'  AND  hl_widget.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:32:08: /admin.php?m=admin&f=index
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE account  = 'root' AND  hidden  = '0'  AND  hl_widget.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:32:09: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE id  = '5' AND  hl_widget.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 15:32:12: /admin.php?m=admin&f=index
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE account  = 'root' AND  hidden  = '0'  AND  hl_widget.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:32:13: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE id  = '5' AND  hl_widget.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 15:32:14: /admin.php?m=admin&f=index
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE account  = 'root' AND  hidden  = '0'  AND  hl_widget.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:32:14: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE id  = '5' AND  hl_widget.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 15:32:15: /admin.php?m=admin&f=index
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE account  = 'root' AND  hidden  = '0'  AND  hl_widget.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:32:15: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE id  = '5' AND  hl_widget.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 15:32:16: /admin.php?m=article&f=admin&type=article
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'article'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_article WHERE type  = 'article'  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'article'  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'article'  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 15:32:17: /admin.php?m=admin&f=index
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE account  = 'root' AND  hidden  = '0'  AND  hl_widget.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:32:17: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE id  = '5' AND  hl_widget.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 15:32:18: /admin.php?m=package&f=browse
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_package WHERE status  = 'installed' AND  type  != 'theme'

20170903 15:32:22: /admin.php?m=admin&f=index
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE account  = 'root' AND  hidden  = '0'  AND  hl_widget.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:32:23: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE id  = '5' AND  hl_widget.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 15:32:28: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 15:34:18: /admin.php?m=tag&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 
  SELECT COUNT(*) AS recTotal FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 

20170903 15:35:10: /admin.php?m=tag&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 
  SELECT COUNT(*) AS recTotal FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 

20170903 15:35:12: /admin.php?m=tag&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 
  SELECT COUNT(*) AS recTotal FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 

20170903 15:35:25: /admin.php?m=tag&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 
  SELECT COUNT(*) AS recTotal FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 

20170903 15:35:29: /admin.php?m=tag&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 
  SELECT COUNT(*) AS recTotal FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 

20170903 15:36:08: /admin.php?m=tag&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 
  SELECT COUNT(*) AS recTotal FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 

20170903 15:37:14: /admin.php?m=tag&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 
  SELECT COUNT(*) AS recTotal FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 

20170903 15:37:45: /admin.php?m=tag&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 
  SELECT COUNT(*) AS recTotal FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 

20170903 15:38:48: /admin.php?m=tag&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 
  SELECT COUNT(*) AS recTotal FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 

20170903 15:39:05: /admin.php?m=tag&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 
  SELECT COUNT(*) AS recTotal FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 

20170903 15:39:40: /admin.php?m=tag&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 
  SELECT COUNT(*) AS recTotal FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 

20170903 15:40:07: /admin.php?m=tag&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 
  SELECT COUNT(*) AS recTotal FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 

20170903 15:40:10: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 15:40:36: /admin.php?m=tag&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 
  SELECT COUNT(*) AS recTotal FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 

20170903 15:40:41: /admin.php?m=site&f=setbasic
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 15:40:46: /admin.php?m=tag&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 
  SELECT COUNT(*) AS recTotal FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  
  SELECT * FROM hl_tag  WHERE  hl_tag.lang in('zh-cn', 'all')  ORDER BY `rank` desc 

20170903 15:40:48: /admin.php?m=ui&f=settemplate
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_package WHERE type  = 'theme' AND  hl_package.lang in('zh-cn', 'all') 
  SELECT * FROM hl_package WHERE type  = 'theme' AND  hl_package.lang in('zh-cn', 'all') 
  SELECT * FROM hl_package WHERE type  = 'theme' AND  hl_package.lang in('zh-cn', 'all') 
  SELECT * FROM hl_package WHERE type  = 'theme' AND  hl_package.lang in('zh-cn', 'all') 

20170903 15:44:17: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM TABLE_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 

20170903 15:44:55: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM TABLE_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 

20170903 15:45:46: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM TABLE_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 

20170903 15:45:47: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM TABLE_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 

20170903 15:46:55: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 15:47:56: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 15:48:57: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 15:49:03: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:49:03: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:49:18: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:49:18: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:50:15: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 15:50:20: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:50:20: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:50:46: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:50:46: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:50:49: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 15:50:54: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:50:54: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:50:56: /admin.php?m=article&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'article'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_article WHERE type  = 'article'  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'article'  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'article'  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 15:51:03: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 15:51:44: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:51:45: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:54:18: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:54:19: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:54:42: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:54:43: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:55:00: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:55:13: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:55:13: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:55:14: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:55:15: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:55:38: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:55:41: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:57:22: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:57:23: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:57:32: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:57:33: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:58:17: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:58:40: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 15:59:02: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:00:24: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:00:54: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:02:44: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:02:45: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:02:51: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:03:13: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:03:14: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:03:15: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:03:16: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:03:31: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:03:32: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:03:52: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:03:53: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:05:06: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:05:20: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:05:21: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:05:23: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:05:28: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:05:29: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:05:46: /admin.php?m=tree&f=children&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '0' AND  type  = 'article' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '0'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'a' AND  id  != '0' AND  type IN ('') AND  hl_category.lang in('zh-cn', 'all') 
  INSERT INTO hl_category SET `parent` = '0',`grade` = '1',`type` = 'guests',`postedDate` = '2017-09-03 16:05:46',`name` = 'A',`alias` = 'a',`order` = '10',`lang` = 'zh-cn'
  UPDATE hl_category SET  `path` = ',4,' WHERE id  = '4' AND  hl_category.lang in('zh-cn', 'all') 

20170903 16:05:48: /admin.php?m=tree&f=browse&type=guests&root=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:05:49: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:05:52: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:05:56: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM TABLE_guests WHERE  TABLE_guests.lang in('zh-cn', 'all') 

20170903 16:06:54: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM TABLE_guests WHERE  TABLE_guests.lang in('zh-cn', 'all') 

20170903 16:07:32: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:07:50: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:08:26: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:08:33: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_guests SET `author` = 'root',`copySite` = '',`copyURL` = '',`titleColor` = '',`title` = 'AAAA',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = 'A',`addedDate` = '2017-09-03 16:08',`editedDate` = '2017-09-03 16:08:33',`type` = 'guests',`addedBy` = 'root',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '2' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '2',`category` = '4',`lang` = 'zh-cn'
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:11:40: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_guests SET `author` = 'root',`copySite` = '',`copyURL` = '',`titleColor` = '',`title` = 'AAAA',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = 'A',`addedDate` = '2017-09-03 16:08',`editedDate` = '2017-09-03 16:11:40',`type` = 'guests',`addedBy` = 'root',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '3' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '3',`category` = '4',`lang` = 'zh-cn'
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 

20170903 16:12:46: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_guests SET `author` = 'root',`copySite` = '',`copyURL` = '',`titleColor` = '',`title` = 'AAAA',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = 'A',`addedDate` = '2017-09-03 16:08',`editedDate` = '2017-09-03 16:12:46',`type` = 'guests',`addedBy` = 'root',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '4' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '4',`category` = '4',`lang` = 'zh-cn'
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 

20170903 16:14:27: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 16:14:28: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_guests SET `author` = 'root',`copySite` = '',`copyURL` = '',`titleColor` = '',`title` = 'AAAA',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = 'A',`addedDate` = '2017-09-03 16:08',`editedDate` = '2017-09-03 16:14:28',`type` = 'guests',`addedBy` = 'root',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '5' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '5',`category` = '4',`lang` = 'zh-cn'
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  REPLACE hl_search_index SET `objectID` = '5',`objectType` = 'guests',`title` = ' aaaa_',`status` = 'normal',`addedDate` = '2017-09-03 16:08:00',`editedDate` = '2017-09-03 16:14:28',`params` = '{\"\":\"\"}',`content` = ' a____',`lang` = 'zh-cn'

20170903 16:14:30: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:19:49: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:20:35: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:21:25: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:21:33: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:22:38: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:22:40: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:22:54: 
  SELECT * FROM hl_config WHERE owner IN ('system','guest')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_layout WHERE page IN ('all','index_index') AND  template  = 'default' AND  plan IN ('all','0') AND  object  = '' AND  hl_layout.lang in('zh-cn', 'all') 
  SELECT * FROM hl_block WHERE id IN ('13','12','3','11','1','10','5') AND  hl_block.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'slide'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `id`  LIMIT 1 
  SELECT * FROM hl_category WHERE alias  = '' AND  type  = 'article' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '0'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id FROM hl_relation WHERE type  = 'product' AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT `objectID` FROM hl_file WHERE objectType  = 'product' AND  extension IN ('jpeg','jpg','gif','png') AND  objectID IN ('2') ORDER BY `objectID` desc 
  SELECT * FROM hl_product WHERE 1 = 1  AND  id IN ('') AND  status  = 'normal'  AND  hl_product.lang in('zh-cn', 'all')  ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM hl_product WHERE 1 = 1  AND  id IN ('') AND  status  = 'normal'  AND  hl_product.lang in('zh-cn', 'all')  
  SELECT * FROM hl_product WHERE 1 = 1  AND  id IN ('') AND  status  = 'normal'  AND  hl_product.lang in('zh-cn', 'all')  ORDER BY `order` desc 
  SELECT * FROM hl_article WHERE type  = 'article' AND  status  = 'normal' AND  addedDate  <= '2017-09-03 16:22:54'  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc  LIMIT 7 

20170903 16:23:01: /admin.php?m=guests&f=edit&guestsID=5&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:23:13: /admin.php?m=guests&f=edit&guestsID=2&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:23:58: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:24:14: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:26:21: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:27:02: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:28:16: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:28:21: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:28:33: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:28:51: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:29:27: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:29:31: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:29:57: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:30:31: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:30:35: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:30:54: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:32:07: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:32:16: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:32:46: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:32:56: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:34:25: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:34:35: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_guests SET `author` = 'root',`copySite` = '',`copyURL` = '',`titleColor` = '',`title` = 'b',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = 'b',`addedDate` = '2017-09-03 16:34',`editedDate` = '2017-09-03 16:34:34',`type` = 'guests',`addedBy` = 'root',`lang` = 'zh-cn'

20170903 16:35:18: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:35:28: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_guests SET `author` = 'root',`copySite` = '',`copyURL` = '',`titleColor` = '',`name` = 'b',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = 'b',`addedDate` = '2017-09-03 16:35',`editedDate` = '2017-09-03 16:35:28',`type` = 'guests',`addedBy` = 'root',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '6' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '6',`category` = '4',`lang` = 'zh-cn'
  SELECT * FROM hl_guests WHERE id  = '6' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '6' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('6') ORDER BY `order`,`editor` desc 

20170903 16:36:11: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_guests SET `author` = 'root',`copySite` = '',`copyURL` = '',`titleColor` = '',`name` = 'b',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = 'b',`addedDate` = '2017-09-03 16:35',`editedDate` = '2017-09-03 16:36:11',`type` = 'guests',`addedBy` = 'root',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '7' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '7',`category` = '4',`lang` = 'zh-cn'
  SELECT * FROM hl_guests WHERE id  = '7' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '7' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('7') ORDER BY `order`,`editor` desc 

20170903 16:37:36: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_guests SET `author` = 'root',`copySite` = '',`copyURL` = '',`titleColor` = '',`name` = 'b',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = 'b',`addedDate` = '2017-09-03 16:35',`editedDate` = '2017-09-03 16:37:36',`type` = 'guests',`addedBy` = 'root',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '8' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '8',`category` = '4',`lang` = 'zh-cn'

20170903 16:37:38: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('8','7','6','5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('8','7','6','5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('8','7','6','5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '8' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '8' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('8') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '7' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '7' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('7') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '6' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '6' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('6') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:38:28: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('8','7','6','5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('8','7','6','5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('8','7','6','5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '8' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '8' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('8') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '7' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '7' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('7') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '6' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '6' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('6') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:38:57: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('8','7','6','5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('8','7','6','5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('8','7','6','5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '8' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '8' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('8') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '7' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '7' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('7') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '6' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '6' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('6') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:39:21: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:40:04: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:40:11: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:40:58: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:41:08: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:41:22: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:41:30: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:41:42: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:41:57: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_guests SET `author` = 'root',`copySite` = '',`copyURL` = '',`titleColor` = '#CA1407',`name` = 'asdf',`link` = '',`keywords` = 'sdf',`summary` = '',`content` = 'asdf',`addedDate` = '2017-09-03 16:41',`editedDate` = '2017-09-03 16:41:57',`type` = 'guests',`addedBy` = 'root',`lang` = 'zh-cn'
  SELECT count(*) as count FROM hl_article WHERE concat(',', keywords, ',')  LIKE '%,sdf,%' AND  hl_article.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_product WHERE concat(',', keywords, ',')  LIKE '%,sdf,%' AND  hl_product.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE concat(',', keywords, ',')  LIKE '%,sdf,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_book WHERE concat(',', keywords, ',')  LIKE '%,sdf,%' AND  hl_book.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_tag WHERE tag  = 'sdf' AND  hl_tag.lang in('zh-cn', 'all') 
  INSERT INTO hl_tag SET `tag` = 'sdf',`rank` = '0',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '9' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '9',`category` = '4',`lang` = 'zh-cn'

20170903 16:41:59: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('9','8','7','6','5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('9','8','7','6','5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('9','8','7','6','5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '9' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '9' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('9') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '8' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '8' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('8') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '7' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '7' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('7') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '6' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '6' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('6') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:42:04: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:42:09: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('9','8','7','6','5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('9','8','7','6','5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('9','8','7','6','5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '9' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '9' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('9') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '8' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '8' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('8') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '7' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '7' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('7') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '6' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '6' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('6') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:42:11: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:42:28: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:42:45: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:43:33: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:45:06: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:45:53: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:46:11: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:46:49: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_guests SET `author` = 'root',`titleColor` = '',`name` = '凯迪',`summary` = '初中同学',`content` = '这是一个初中同学',`addedDate` = '2017-09-03 16:46',`editedDate` = '2017-09-03 16:46:49',`type` = 'guests',`addedBy` = 'root',`link` = '',`keywords` = '',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '10' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '10',`category` = '4',`lang` = 'zh-cn'

20170903 16:46:51: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('10','9','8','7','6','5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','9','8','7','6','5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','9','8','7','6','5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '9' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '9' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('9') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '8' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '8' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('8') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '7' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '7' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('7') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '6' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '6' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('6') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:47:02: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:47:50: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:49:07: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:49:22: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:49:53: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:50:10: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:50:19: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:50:24: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('10','9','8','7','6','5','4','3','2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','9','8','7','6','5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','9','8','7','6','5','4','3','2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '9' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '9' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('9') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '8' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '8' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('8') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '7' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '7' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('7') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '6' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '6' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('6') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 16:50:33: /admin.php?m=guests&f=delete&guestsID=2
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 
  DELETE FROM hl_relation WHERE id  = '2' AND  type  = 'guests' AND  hl_relation.lang in('zh-cn', 'all') 
  DELETE FROM hl_guests WHERE id  = '2' AND  hl_guests.lang in('zh-cn', 'all') 
  DELETE FROM hl_search_index WHERE objectType  = 'guests' AND  objectID  = '2' AND  hl_search_index.lang in('zh-cn', 'all') 

20170903 16:50:33: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('10','9','8','7','6','5','4','3') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','9','8','7','6','5','4','3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','9','8','7','6','5','4','3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '9' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '9' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('9') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '8' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '8' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('8') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '7' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '7' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('7') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '6' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '6' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('6') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 

20170903 16:50:56: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('10','9','8','7','6','5','4','3') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','9','8','7','6','5','4','3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','9','8','7','6','5','4','3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '9' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '9' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('9') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '8' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '8' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('8') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '7' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '7' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('7') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '6' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '6' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('6') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 

20170903 16:51:06: /admin.php?m=guests&f=delete&guestsID=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '5' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('5') ORDER BY `order`,`editor` desc 
  DELETE FROM hl_relation WHERE id  = '5' AND  type  = 'guests' AND  hl_relation.lang in('zh-cn', 'all') 
  DELETE FROM hl_guests WHERE id  = '5' AND  hl_guests.lang in('zh-cn', 'all') 
  DELETE FROM hl_search_index WHERE objectType  = 'guests' AND  objectID  = '5' AND  hl_search_index.lang in('zh-cn', 'all') 

20170903 16:51:07: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('10','9','8','7','6','4','3') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','9','8','7','6','4','3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','9','8','7','6','4','3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '9' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '9' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('9') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '8' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '8' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('8') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '7' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '7' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('7') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '6' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '6' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('6') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 

20170903 16:51:10: /admin.php?m=guests&f=delete&guestsID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '4' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('4') ORDER BY `order`,`editor` desc 
  DELETE FROM hl_relation WHERE id  = '4' AND  type  = 'guests' AND  hl_relation.lang in('zh-cn', 'all') 
  DELETE FROM hl_guests WHERE id  = '4' AND  hl_guests.lang in('zh-cn', 'all') 
  DELETE FROM hl_search_index WHERE objectType  = 'guests' AND  objectID  = '4' AND  hl_search_index.lang in('zh-cn', 'all') 

20170903 16:51:11: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('10','9','8','7','6','3') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','9','8','7','6','3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','9','8','7','6','3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '9' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '9' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('9') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '8' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '8' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('8') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '7' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '7' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('7') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '6' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '6' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('6') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 

20170903 16:51:14: /admin.php?m=guests&f=delete&guestsID=6
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '6' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '6' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('6') ORDER BY `order`,`editor` desc 
  DELETE FROM hl_relation WHERE id  = '6' AND  type  = 'guests' AND  hl_relation.lang in('zh-cn', 'all') 
  DELETE FROM hl_guests WHERE id  = '6' AND  hl_guests.lang in('zh-cn', 'all') 
  DELETE FROM hl_search_index WHERE objectType  = 'guests' AND  objectID  = '6' AND  hl_search_index.lang in('zh-cn', 'all') 

20170903 16:51:15: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('10','9','8','7','3') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','9','8','7','3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','9','8','7','3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '9' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '9' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('9') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '8' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '8' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('8') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '7' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '7' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('7') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 

20170903 16:51:18: /admin.php?m=guests&f=delete&guestsID=7
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '7' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '7' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('7') ORDER BY `order`,`editor` desc 
  DELETE FROM hl_relation WHERE id  = '7' AND  type  = 'guests' AND  hl_relation.lang in('zh-cn', 'all') 
  DELETE FROM hl_guests WHERE id  = '7' AND  hl_guests.lang in('zh-cn', 'all') 
  DELETE FROM hl_search_index WHERE objectType  = 'guests' AND  objectID  = '7' AND  hl_search_index.lang in('zh-cn', 'all') 

20170903 16:51:19: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('10','9','8','3') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','9','8','3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','9','8','3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '9' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '9' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('9') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '8' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '8' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('8') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 

20170903 16:51:22: /admin.php?m=guests&f=delete&guestsID=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '8' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '8' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('8') ORDER BY `order`,`editor` desc 
  DELETE FROM hl_relation WHERE id  = '8' AND  type  = 'guests' AND  hl_relation.lang in('zh-cn', 'all') 
  DELETE FROM hl_guests WHERE id  = '8' AND  hl_guests.lang in('zh-cn', 'all') 
  DELETE FROM hl_search_index WHERE objectType  = 'guests' AND  objectID  = '8' AND  hl_search_index.lang in('zh-cn', 'all') 

20170903 16:51:22: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('10','9','3') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','9','3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','9','3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '9' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '9' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('9') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 

20170903 16:51:28: /admin.php?m=guests&f=delete&guestsID=9
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '9' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '9' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('9') ORDER BY `order`,`editor` desc 
  DELETE FROM hl_relation WHERE id  = '9' AND  type  = 'guests' AND  hl_relation.lang in('zh-cn', 'all') 
  DELETE FROM hl_guests WHERE id  = '9' AND  hl_guests.lang in('zh-cn', 'all') 
  DELETE FROM hl_search_index WHERE objectType  = 'guests' AND  objectID  = '9' AND  hl_search_index.lang in('zh-cn', 'all') 

20170903 16:51:28: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('10','3') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 

20170903 16:51:29: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:51:33: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:51:33: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:51:54: /admin.php?m=tree&f=children&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '0' AND  type  = 'article' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '0'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'junior' AND  id  != '4' AND  type IN ('') AND  hl_category.lang in('zh-cn', 'all') 
  UPDATE hl_category SET  `name` = '初中同学', `alias` = 'junior', `order` = '10' WHERE id  = '4' AND  hl_category.lang in('zh-cn', 'all') 

20170903 16:51:56: /admin.php?m=tree&f=browse&type=guests&root=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:51:56: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 16:51:57: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('10','3') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 

20170903 16:52:03: /admin.php?m=guests&f=delete&guestsID=3
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 
  DELETE FROM hl_relation WHERE id  = '3' AND  type  = 'guests' AND  hl_relation.lang in('zh-cn', 'all') 
  DELETE FROM hl_guests WHERE id  = '3' AND  hl_guests.lang in('zh-cn', 'all') 
  DELETE FROM hl_search_index WHERE objectType  = 'guests' AND  objectID  = '3' AND  hl_search_index.lang in('zh-cn', 'all') 

20170903 16:52:04: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 

20170903 16:52:06: /admin.php?m=guests&f=edit&guestsID=10&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:52:24: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 16:52:51: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_guests SET `author` = 'root',`titleColor` = '',`name` = '陈志鹏',`mobile` = '18966666666',`summary` = '初中同学',`content` = '初中同学',`addedDate` = '2017-09-03 16:52',`editedDate` = '2017-09-03 16:52:51',`type` = 'guests',`addedBy` = 'root',`link` = '',`keywords` = '',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '11' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '11',`category` = '4',`lang` = 'zh-cn'

20170903 16:52:53: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '11' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 

20170903 16:53:45: 
  SELECT * FROM hl_config WHERE owner IN ('system','guest')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_layout WHERE page IN ('all','index_index') AND  template  = 'default' AND  plan IN ('all','0') AND  object  = '' AND  hl_layout.lang in('zh-cn', 'all') 
  SELECT * FROM hl_block WHERE id IN ('13','12','3','11','1','10','5') AND  hl_block.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'slide'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `id`  LIMIT 1 
  SELECT * FROM hl_category WHERE alias  = '' AND  type  = 'article' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '0'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'article' AND  status  = 'normal' AND  addedDate  <= '2017-09-03 16:53:45'  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc  LIMIT 7 

20170903 16:54:27: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '11' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 

20170903 16:54:32: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '11' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 

20170903 16:55:12: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:55:23: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '11' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 

20170903 16:55:35: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:56:17: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:56:24: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:56:45: /admin.php?m=guests&f=admin&type=guests&categoryID=0&orderBy=name_asc&recTotal=2&recPerPage=15
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `name` asc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('10','11') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','11') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','11') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:56:47: /admin.php?m=guests&f=admin&type=guests&categoryID=0&orderBy=name_desc&recTotal=2&recPerPage=15
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `name` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:56:48: /admin.php?m=guests&f=admin&type=guests&categoryID=0&orderBy=name_asc&recTotal=2&recPerPage=15
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `name` asc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('10','11') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','11') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','11') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:56:49: /admin.php?m=guests&f=admin&type=guests&categoryID=0&orderBy=name_desc&recTotal=2&recPerPage=15
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `name` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:56:58: /admin.php?m=guests&f=admin&type=guests&categoryID=0&orderBy=author_asc&recTotal=2&recPerPage=15
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `author` asc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:56:59: /admin.php?m=guests&f=admin&type=guests&categoryID=0&orderBy=author_desc&recTotal=2&recPerPage=15
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `author` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:57:02: /admin.php?m=guests&f=admin&type=guests&categoryID=0&orderBy=addedDate_asc&recTotal=2&recPerPage=15
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `addedDate` asc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('10','11') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','11') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','11') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:57:04: /admin.php?m=guests&f=admin&type=guests&categoryID=0&orderBy=addedDate_desc&recTotal=2&recPerPage=15
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `addedDate` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:57:14: /admin.php?m=guests&f=edit&guestsID=11&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '11' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:57:49: /admin.php?m=guests&f=edit&guestsID=11&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '11' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:58:24: /admin.php?m=guests&f=edit&guestsID=11&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '11' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:58:36: /admin.php?m=guests&f=edit&guestsID=11&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '11' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:58:54: /admin.php?m=guests&f=edit&guestsID=11&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '11' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:59:19: /admin.php?m=guests&f=edit&guestsID=11&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '11' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 16:59:43: /admin.php?m=guests&f=edit&guestsID=11&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '11' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:00:01: /admin.php?m=guests&f=edit&guestsID=11&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '11' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:00:15: /admin.php?m=guests&f=edit&guestsID=11&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '11' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:00:28: /admin.php?m=guests&f=edit&guestsID=11&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '11' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:00:43: /admin.php?m=guests&f=edit&guestsID=11&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '11' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:01:14: /admin.php?m=guests&f=edit&guestsID=11&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '11' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:01:22: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:01:26: /admin.php?m=guests&f=edit&guestsID=10&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:01:35: /admin.php?m=guests&f=edit&guestsID=10&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  UPDATE hl_guests SET `author` = 'root',`titleColor` = '',`title` = '彭凯迪',`mobile` = '',`summary` = '初中同学',`content` = '这是一个初中同学',`addedDate` = '2017-09-03 16:46:00',`editor` = 'root',`editedDate` = '2017-09-03 17:01:35',`link` = '',`keywords` = '',`lang` = 'zh-cn' WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 

20170903 17:01:41: /admin.php?m=guests&f=edit&guestsID=10&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  UPDATE hl_guests SET `author` = 'root',`titleColor` = '',`title` = '彭凯迪',`mobile` = '',`summary` = '初中同学',`content` = '这是一个初中同学',`addedDate` = '2017-09-03 16:46:00',`editor` = 'root',`editedDate` = '2017-09-03 17:01:41',`link` = '',`keywords` = '',`lang` = 'zh-cn' WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 

20170903 17:02:32: /admin.php?m=guests&f=edit&guestsID=10&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  UPDATE hl_guests SET `author` = 'root',`titleColor` = '',`title` = '彭凯迪',`mobile` = '',`summary` = '初中同学',`content` = '这是一个初中同学',`addedDate` = '2017-09-03 16:46:00',`editor` = 'root',`editedDate` = '2017-09-03 17:02:32',`link` = '',`keywords` = '',`lang` = 'zh-cn' WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 

20170903 17:02:36: /admin.php?m=guests&f=edit&guestsID=10&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:02:43: /admin.php?m=guests&f=edit&guestsID=10&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  UPDATE hl_guests SET `author` = 'root',`titleColor` = '',`name` = '彭凯迪',`mobile` = '',`summary` = '初中同学',`content` = '这是一个初中同学',`addedDate` = '2017-09-03 16:46:00',`editor` = 'root',`editedDate` = '2017-09-03 17:02:43',`link` = '',`keywords` = '',`lang` = 'zh-cn' WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '10' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '10',`category` = '4',`lang` = 'zh-cn'
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 

20170903 17:03:21: /admin.php?m=guests&f=edit&guestsID=10&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  UPDATE hl_guests SET `author` = 'root',`titleColor` = '',`name` = '彭凯迪',`mobile` = '',`summary` = '初中同学',`content` = '这是一个初中同学',`addedDate` = '2017-09-03 16:46:00',`editor` = 'root',`editedDate` = '2017-09-03 17:03:21',`link` = '',`keywords` = '',`lang` = 'zh-cn' WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '10' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '10',`category` = '4',`lang` = 'zh-cn'
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 

20170903 17:03:23: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:03:32: /admin.php?m=guests&f=admin&type=guests&categoryID=0&orderBy=name_asc&recTotal=2&recPerPage=15
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `name` asc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('10','11') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','11') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','11') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:03:34: /admin.php?m=guests&f=admin&type=guests&categoryID=0&orderBy=id_asc&recTotal=2&recPerPage=15
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('10','11') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','11') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','11') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:03:35: /admin.php?m=guests&f=admin&type=guests&categoryID=0&orderBy=id_desc&recTotal=2&recPerPage=15
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:03:37: /admin.php?m=guests&f=admin&type=guests&categoryID=0&orderBy=id_asc&recTotal=2&recPerPage=15
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('10','11') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','11') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','11') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:05:12: /admin.php?m=guests&f=admin&type=guests&categoryID=0&orderBy=id_asc&recTotal=2&recPerPage=15
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` asc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('10','11') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','11') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10','11') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:05:17: /admin.php?m=guests&f=edit&guestsID=10&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:05:22: /admin.php?m=guests&f=edit&guestsID=10&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  UPDATE hl_guests SET `author` = 'root',`titleColor` = '',`name` = '彭凯迪',`mobile` = '',`summary` = '和美',`content` = '这是一个初中同学',`addedDate` = '2017-09-03 16:46:00',`editor` = 'root',`editedDate` = '2017-09-03 17:05:22',`link` = '',`keywords` = '',`lang` = 'zh-cn' WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '10' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '10',`category` = '4',`lang` = 'zh-cn'
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 

20170903 17:05:24: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:05:28: /admin.php?m=guests&f=edit&guestsID=10&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:05:36: /admin.php?m=guests&f=edit&guestsID=10&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  UPDATE hl_guests SET `author` = 'root',`titleColor` = '',`name` = '彭凯迪',`mobile` = '',`summary` = '翔安 彭厝',`content` = '这是一个初中同学',`addedDate` = '2017-09-03 16:46:00',`editor` = 'root',`editedDate` = '2017-09-03 17:05:36',`link` = '',`keywords` = '',`lang` = 'zh-cn' WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '10' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '10',`category` = '4',`lang` = 'zh-cn'
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 

20170903 17:05:38: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:05:41: /admin.php?m=guests&f=edit&guestsID=11&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '11' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:05:49: /admin.php?m=guests&f=edit&guestsID=11&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '11' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '11' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  UPDATE hl_guests SET `author` = 'root',`titleColor` = '',`name` = '陈志鹏',`mobile` = '18966666666',`summary` = '翔安 和美',`content` = '初中同学',`addedDate` = '2017-09-03 16:52:00',`editor` = 'root',`editedDate` = '2017-09-03 17:05:49',`link` = '',`keywords` = '',`lang` = 'zh-cn' WHERE id  = '11' AND  hl_guests.lang in('zh-cn', 'all') 
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '11' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '11',`category` = '4',`lang` = 'zh-cn'
  SELECT * FROM hl_guests WHERE id  = '11' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 

20170903 17:05:50: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:06:00: /admin.php?m=guests&f=edit&guestsID=10&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:06:09: /admin.php?m=guests&f=edit&guestsID=10&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 
  UPDATE hl_guests SET `author` = 'root',`titleColor` = '',`name` = '彭凯迪',`mobile` = '13395052845',`summary` = '翔安 彭厝',`content` = '这是一个初中同学',`addedDate` = '2017-09-03 16:46:00',`editor` = 'root',`editedDate` = '2017-09-03 17:06:09',`link` = '',`keywords` = '',`lang` = 'zh-cn' WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '10' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '10',`category` = '4',`lang` = 'zh-cn'
  SELECT * FROM hl_guests WHERE id  = '10' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '10' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('10') ORDER BY `order`,`editor` desc 

20170903 17:06:11: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:06:14: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 17:06:14: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 17:06:23: /admin.php?m=tree&f=children&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '0' AND  type  = 'article' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '0'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'junior' AND  id  != '4' AND  type IN ('') AND  hl_category.lang in('zh-cn', 'all') 
  UPDATE hl_category SET  `name` = '初中同学', `alias` = 'junior', `order` = '10' WHERE id  = '4' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'high' AND  id  != '0' AND  type IN ('') AND  hl_category.lang in('zh-cn', 'all') 
  INSERT INTO hl_category SET `parent` = '0',`grade` = '1',`type` = 'guests',`postedDate` = '2017-09-03 17:06:23',`name` = '高中同学',`alias` = 'high',`order` = '20',`lang` = 'zh-cn'
  UPDATE hl_category SET  `path` = ',5,' WHERE id  = '5' AND  hl_category.lang in('zh-cn', 'all') 

20170903 17:06:24: /admin.php?m=tree&f=browse&type=guests&root=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 17:06:25: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 17:06:50: /admin.php?m=tree&f=children&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '0' AND  type  = 'article' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '0'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'junior' AND  id  != '4' AND  type IN ('') AND  hl_category.lang in('zh-cn', 'all') 
  UPDATE hl_category SET  `name` = '初中同学', `alias` = 'junior', `order` = '10' WHERE id  = '4' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'high' AND  id  != '5' AND  type IN ('') AND  hl_category.lang in('zh-cn', 'all') 
  UPDATE hl_category SET  `name` = '高中同学', `alias` = 'high', `order` = '20' WHERE id  = '5' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'college' AND  id  != '0' AND  type IN ('') AND  hl_category.lang in('zh-cn', 'all') 
  INSERT INTO hl_category SET `parent` = '0',`grade` = '1',`type` = 'guests',`postedDate` = '2017-09-03 17:06:50',`name` = '大学同学',`alias` = 'college',`order` = '30',`lang` = 'zh-cn'
  UPDATE hl_category SET  `path` = ',6,' WHERE id  = '6' AND  hl_category.lang in('zh-cn', 'all') 

20170903 17:06:52: /admin.php?m=tree&f=browse&type=guests&root=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 17:06:52: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 17:06:54: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:06:57: /admin.php?m=article&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:06:58: /admin.php?m=article&f=admin&type=guests&categoryID=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '5' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '5'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','5','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',5,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('5')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('5') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:06:59: /admin.php?m=article&f=admin&type=guests&categoryID=6
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '6' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '6'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','6','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',6,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('6')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('6') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:07:02: /admin.php?m=article&f=admin&type=guests&categoryID=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '5' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '5'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','5','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',5,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('5')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('5') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:07:06: /admin.php?m=article&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:07:09: /admin.php?m=article&f=admin&type=guests&categoryID=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '5' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '5'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','5','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',5,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('5')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('5') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:07:10: /admin.php?m=article&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:07:13: /admin.php?m=article&f=admin&type=guests&categoryID=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '5' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '5'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','5','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',5,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('5')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('5') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:07:14: /admin.php?m=article&f=admin&type=guests&categoryID=6
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '6' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '6'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','6','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',6,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('6')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('6') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:07:15: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:07:17: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:07:20: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:07:23: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 17:07:30: /admin.php?m=article&f=admin&type=guests&categoryID=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '5' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '5'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','5','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',5,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('5')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('5') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:07:33: /admin.php?m=article&f=create&type=guests&category=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_article WHERE  hl_article.lang in('zh-cn', 'all') 

20170903 17:07:45: /admin.php?m=article&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:07:48: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:07:51: /admin.php?m=article&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:07:53: /admin.php?m=article&f=create&type=guests&category=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_article WHERE  hl_article.lang in('zh-cn', 'all') 

20170903 17:08:28: /admin.php?m=article&f=create&type=guests&category=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_article SET `author` = 'root',`source` = 'original',`titleColor` = '',`title` = 'aa',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = 'asd',`addedDate` = '2017-09-03 17:07',`status` = 'normal',`editedDate` = '2017-09-03 17:08:28',`type` = 'guests',`addedBy` = 'root',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '2' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '2',`category` = '4',`lang` = 'zh-cn'
  SELECT * FROM hl_article WHERE id  = '2' AND  hl_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 17:08:42: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:08:47: /admin.php?m=article&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('2','10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('2','10','11')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('2','10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS article FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_article WHERE id  = '2' AND  hl_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 17:09:03: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:09:05: /admin.php?m=article&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('2','10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('2','10','11')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('2','10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS article FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_article WHERE id  = '2' AND  hl_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 17:09:08: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:09:28: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:09:30: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 17:09:31: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170903 17:10:31: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:10:33: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:12:22: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:13:06: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:13:35: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:13:49: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:14:23: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:14:58: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:16:35: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:17:43: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:18:15: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:19:18: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:20:07: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:20:23: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170903 17:20:30: /admin.php?m=article&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('2','10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('2','10','11')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('2','10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS article FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_article WHERE id  = '2' AND  hl_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 17:20:33: /admin.php?m=article&f=admin&type=guests&categoryID=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '5' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '5'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','5','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',5,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('5')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('5') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:20:35: /admin.php?m=article&f=admin&type=guests&categoryID=6
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '6' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '6'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','6','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',6,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('6')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('6') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:20:40: /admin.php?m=guests&f=admin&type=guests&categoryID=6
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '6' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '6'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','6','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',6,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('6')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('6') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:20:41: /admin.php?m=article&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('2','10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('2','10','11')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('2','10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS article FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_article WHERE id  = '2' AND  hl_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 17:20:45: /admin.php?m=guests&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('2','10','11')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('2','10','11')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('2','10','11')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:20:48: /admin.php?m=article&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('2','10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('2','10','11')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('2','10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS article FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('2') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_article WHERE id  = '2' AND  hl_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 

20170903 17:20:54: /admin.php?m=article&f=delete&articleID=2
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE id  = '2' AND  hl_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '2' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('2') ORDER BY `order`,`editor` desc 
  DELETE FROM hl_relation WHERE id  = '2' AND  type  = 'guests' AND  hl_relation.lang in('zh-cn', 'all') 
  DELETE FROM hl_article WHERE id  = '2' AND  hl_article.lang in('zh-cn', 'all') 
  DELETE FROM hl_search_index WHERE objectType  = 'guests' AND  objectID  = '2' AND  hl_search_index.lang in('zh-cn', 'all') 

20170903 17:20:54: /admin.php?m=article&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:21:01: /admin.php?m=guests&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:21:12: /admin.php?m=guests&f=admin&type=guests&categoryID=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '5' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '5'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','5','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',5,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('5')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('5') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:22:08: /admin.php?m=guests&f=admin&type=guests&categoryID=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '5' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '5'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','5','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',5,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('5')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('5') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:22:16: /admin.php?m=guests&f=admin&type=guests&categoryID=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '5' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '5'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','5','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',5,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('5')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('5') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:22:50: /admin.php?m=guests&f=admin&type=guests&categoryID=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '5' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '5'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','5','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',5,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('5')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('5') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:24:52: /admin.php?m=guests&f=admin&type=guests&categoryID=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '5' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '5'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','5','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',5,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('5')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('5') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:27:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 17:30:53: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 17:33:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 17:36:53: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 17:37:31: /admin.php?m=guests&f=admin&type=guests&categoryID=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '5' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '5'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','5','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',5,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('5')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('5') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:37:33: /admin.php?m=guests&f=admin&type=guests&categoryID=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '5' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '5'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','5','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',5,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('5')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('5') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:37:35: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:38:02: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:38:03: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:38:04: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:38:13: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:39:04: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:39:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 17:41:22: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 17:45:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 17:47:23: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 17:51:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 17:53:23: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 17:57:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 17:59:23: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 18:03:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 18:05:23: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 18:09:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 18:11:23: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 18:15:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 18:16:28: /admin.php?m=article&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:17:18: /admin.php?m=article&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:18:20: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:18:31: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:18:33: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:19:01: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:20:11: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:20:15: /admin.php?m=article&f=admin&type=guests&categoryID=6
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '6' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '6'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','6','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',6,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('6')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('6') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:20:16: /admin.php?m=article&f=admin&type=guests&categoryID=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '5' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '5'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','5','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',5,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('5')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('5') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:20:18: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:21:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 18:22:09: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:27:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 18:28:00: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:28:11: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:28:37: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:30:35: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 

20170903 18:31:32: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 

20170903 18:31:33: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 

20170903 18:31:54: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:32:33: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:33:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 18:33:28: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:33:46: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:34:10: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:34:33: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:37:16: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:37:19: /admin.php?m=guests&f=admin&categoryID=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '5'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '5'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '5'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '5'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = '5'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 18:39:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 18:43:20: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 18:45:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 18:49:20: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 18:51:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 18:55:20: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 18:57:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 19:01:20: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 19:03:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 19:07:20: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 19:09:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 19:13:20: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 19:15:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 19:19:20: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 19:21:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 19:25:20: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 19:27:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 19:31:20: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 19:33:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 19:37:20: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 19:39:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 19:43:20: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 19:45:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 19:49:20: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 19:51:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 19:55:20: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 19:57:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 20:01:20: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 20:03:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 20:07:20: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 20:09:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 20:13:20: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 20:15:17: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 20:19:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 20:21:18: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 20:25:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 20:27:18: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 20:31:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 20:33:18: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170903 20:34:10: /admin.php?m=guests&f=admin&categoryID=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '5'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '5'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '5'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '5'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = '5'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 20:34:14: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 20:34:16: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 20:34:17: /admin.php?m=guests&f=admin&categoryID=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '5'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '5'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '5'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '5'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = '5'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 20:34:23: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 20:34:25: /admin.php?m=guests&f=admin&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '4'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '4'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '4'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '4'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = '4'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 20:34:28: /admin.php?m=guests&f=admin
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170903 20:34:31: /admin.php?m=guests&f=admin&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '4'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '4'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '4'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '4'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = '4'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

