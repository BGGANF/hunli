<?php
 die();
?>
20170905 18:43:38: /admin.php?m=guests&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','guest')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 18:43:38: /admin.php?m=user&f=login&referer=L2FkbWluLnBocD9tPWd1ZXN0cyZmPWFkbWluJnR5cGU9Z3Vlc3RzJmNhdGVnb3J5SUQ9NA==
  SELECT * FROM hl_config WHERE owner IN ('system','guest')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 18:43:40: /admin.php?m=user&f=login&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','guest')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM hl_user AS u  LEFT JOIN hl_oauth AS o  ON u.account = o.account  WHERE u.account  = 'root'
  SELECT * FROM hl_user WHERE account  = 'root'
  INSERT INTO hl_log SET `account` = 'root',`date` = '2017-09-05 18:43:40',`ip` = '172.17.0.1',`location` = '局域网 局域网  ',`browser` = 'chrome 60',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/60.0.3112.113 Safari\\/537.36\"}'
  UPDATE hl_user SET `id` = '1',`account` = 'root',`password` = '93234f6e10ca0bab3781ff19c77a0b82',`realname` = 'root',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '9',`ip` = '172.17.0.1',`last` = '2017-09-05 18:43:40',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2017-09-03 14:25:45',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Mac OS X',`browser` = 'chrome 60',`lang` = 'zh-cn' WHERE account  = 'root'
  UPDATE hl_user SET  `browser` = 'chrome 60', `os` = 'Mac OS X' WHERE id  = '1' AND  hl_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM hl_usergroup AS t1  LEFT JOIN hl_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = 'root' AND  t1.lang in('zh-cn', 'all') 

20170905 18:43:41: /admin.php?m=admin&f=index
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE account  = 'root' AND  hidden  = '0'  AND  hl_widget.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 18:43:42: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE id  = '5' AND  hl_widget.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 18:43:43: /admin.php?m=guests&f=admin&type=guests
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

20170905 18:43:48: /admin.php?m=guests&f=admin&categoryID=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '5'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '5'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '5'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '5'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = '5'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 18:43:54: /admin.php?m=tree&f=browse&type=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = '5'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = '5'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 18:43:55: /admin.php?m=tree&f=children&type=5&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = '5'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 18:43:56: /admin.php?m=guests&f=admin
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

20170905 18:43:57: /admin.php?m=guests&f=admin&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '4'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '4'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '4'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '4'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = '4'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 18:44:01: /admin.php?m=tree&f=browse&type=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = '4'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = '4'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 18:44:01: /admin.php?m=tree&f=children&type=4&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = '4'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 18:44:02: /admin.php?m=guests&f=admin
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

20170905 18:44:52: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 18:44:53: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 18:45:04: /admin.php?m=tree&f=children&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '0' AND  type  = 'article' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '0'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'junior' AND  id  != '4' AND  type IN ('') AND  hl_category.lang in('zh-cn', 'all') 
  UPDATE hl_category SET  `name` = '初中同学', `alias` = 'junior', `order` = '10' WHERE id  = '4' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'high' AND  id  != '5' AND  type IN ('') AND  hl_category.lang in('zh-cn', 'all') 
  UPDATE hl_category SET  `name` = '高中同学', `alias` = 'high', `order` = '20' WHERE id  = '5' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'college' AND  id  != '6' AND  type IN ('') AND  hl_category.lang in('zh-cn', 'all') 
  UPDATE hl_category SET  `name` = '大学同学', `alias` = 'college', `order` = '30' WHERE id  = '6' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'aaa' AND  id  != '0' AND  type IN ('') AND  hl_category.lang in('zh-cn', 'all') 
  INSERT INTO hl_category SET `parent` = '0',`grade` = '1',`type` = 'guests',`postedDate` = '2017-09-05 18:45:04',`name` = 'AAA',`alias` = 'aaa',`order` = '40',`lang` = 'zh-cn'
  UPDATE hl_category SET  `path` = ',7,' WHERE id  = '7' AND  hl_category.lang in('zh-cn', 'all') 

20170905 18:45:06: /admin.php?m=tree&f=browse&type=guests&root=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 18:45:06: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 18:45:10: /admin.php?m=guests&f=admin&type=guests
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

20170905 18:45:12: /admin.php?m=guests&f=admin&categoryID=7
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '7'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = '7'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 18:45:24: /admin.php?m=guests&f=admin&categoryID=7
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '7'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = '7'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 18:46:28: /admin.php?m=guests&f=admin&categoryID=7
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '7'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = '7'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 18:46:58: /admin.php?m=guests&f=admin&categoryID=7
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '7'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = '7'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 18:48:09: /admin.php?m=guests&f=admin&categoryID=7
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '7'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = '7'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 18:48:21: /admin.php?m=article&f=admin&categoryID=7
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '7'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_article WHERE type  = '7'  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = '7'  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = '7'  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = '7'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 18:48:24: /admin.php?m=guests&f=admin&categoryID=7
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '7'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = '7'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 18:49:50: /admin.php?m=guests&f=admin&categoryID=7
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '7'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = '7'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 18:51:23: /admin.php?m=guests&f=admin&categoryID=7
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '7'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = '7'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 18:52:16: /admin.php?m=guests&f=admin&categoryID=7
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '7'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = '7'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 18:52:57: /admin.php?m=guests&f=admin&categoryID=7
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '7'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 

20170905 18:52:59: /admin.php?m=guests&f=admin&categoryID=7
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '7'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 

20170905 18:52:59: /admin.php?m=guests&f=admin&categoryID=7
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '7'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 

20170905 18:53:56: /admin.php?m=guests&f=admin&categoryID=7
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 18:54:19: /admin.php?m=guests&f=admin&categoryID=7
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 18:54:21: /admin.php?m=guests&f=admin&categoryID=7
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 18:54:52: /admin.php?m=guests&f=admin&categoryID=7
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '7'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '7'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = '7'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 18:54:57: /admin.php?m=guests&f=admin&type=guests
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

20170905 18:54:58: /admin.php?m=guests&f=admin&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '4'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '4'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '4'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '4'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = '4'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 18:55:07: /admin.php?m=guests&f=admin&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = '4'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = '4'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = '4'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = '4'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = '4'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 18:55:09: /admin.php?m=guests&f=admin&type=guests
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

20170905 18:55:10: /admin.php?m=article&f=admin&type=guests&categoryID=4
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

20170905 18:55:12: /admin.php?m=article&f=admin&type=guests&categoryID=5
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

20170905 18:55:13: /admin.php?m=article&f=admin&type=guests&categoryID=6
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

20170905 18:55:16: /admin.php?m=article&f=admin&type=guests&categoryID=4
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

20170905 18:55:18: /admin.php?m=article&f=admin&type=guests&categoryID=4
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

20170905 18:55:20: /admin.php?m=guests&f=admin
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

20170905 18:55:34: /admin.php?m=article&f=admin&type=guests&categoryID=4
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

20170905 18:55:37: /admin.php?m=article&f=admin&type=guests&categoryID=5
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

20170905 18:55:40: /admin.php?m=article&f=admin&type=guests&categoryID=4
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

20170905 18:55:42: /admin.php?m=article&f=admin&type=guests&categoryID=5
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

20170905 18:55:43: /admin.php?m=article&f=admin&type=guests&categoryID=6
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

20170905 18:55:44: /admin.php?m=article&f=admin&type=guests&categoryID=4
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

20170905 18:55:48: /admin.php?m=article&f=create&type=guests&category=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_article WHERE  hl_article.lang in('zh-cn', 'all') 

20170905 18:55:57: /admin.php?m=article&f=create&type=guests&category=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_article SET `author` = 'root',`source` = 'original',`titleColor` = '',`title` = 'asdf',`link` = '',`alias` = '',`keywords` = '',`summary` = '',`content` = 'asdf',`addedDate` = '2017-09-05 18:55',`status` = 'normal',`editedDate` = '2017-09-05 18:55:57',`type` = 'guests',`addedBy` = 'root',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '3' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '3',`category` = '4',`lang` = 'zh-cn'
  SELECT * FROM hl_article WHERE id  = '3' AND  hl_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 

20170905 18:56:05: /admin.php?m=article&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('3','10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('3','10','11')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('3','10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS article FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('3') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_article WHERE id  = '3' AND  hl_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 

20170905 18:56:14: /admin.php?m=article&f=admin&type=guests&categoryID=5
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

20170905 18:56:16: /admin.php?m=article&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('3','10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('3','10','11')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('3','10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS article FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('3') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_article WHERE id  = '3' AND  hl_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 

20170905 18:56:17: /admin.php?m=guests&f=admin
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

20170905 18:56:18: /admin.php?m=article&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_article AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('3','10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_article WHERE type  = 'guests' AND  id IN ('3','10','11')  AND  hl_article.lang in('zh-cn', 'all')  
  SELECT * FROM hl_article WHERE type  = 'guests' AND  id IN ('3','10','11')  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS article FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('3') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_article WHERE id  = '3' AND  hl_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '3' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('3') ORDER BY `order`,`editor` desc 

20170905 18:56:19: /admin.php?m=article&f=admin&type=guests&categoryID=5
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

20170905 18:56:59: /admin.php?m=article&f=admin&type=guests&categoryID=5
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

20170905 18:57:01: /admin.php?m=guests&f=admin&type=guests
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

20170905 18:57:02: /admin.php?m=guests&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('3','10','11')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('3','10','11')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('3','10','11')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 18:57:03: /admin.php?m=guests&f=admin&type=guests&categoryID=5
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

20170905 19:03:10: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 19:09:13: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 19:15:04: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 19:21:04: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 19:27:04: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 19:33:04: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 19:39:07: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 19:45:04: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 19:51:05: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 19:53:27: /admin.php?m=guests&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('3','10','11')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('3','10','11')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('3','10','11')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 19:53:30: /admin.php?m=guests&f=admin&type=guests&categoryID=5
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

20170905 19:53:31: /admin.php?m=guests&f=admin&type=guests&categoryID=6
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

20170905 19:53:32: /admin.php?m=guests&f=admin&type=guests&categoryID=7
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '7' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '7'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','7','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',7,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('7')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('7') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 19:53:33: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 19:53:34: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 19:53:37: /admin.php?m=tree&f=delete&category=7
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '7' AND  type  = 'article' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '7'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','7','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT * FROM hl_category WHERE parent  = '7' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 
  SELECT * FROM hl_category WHERE alias  = '7' AND  type  = 'article' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '7'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','7','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT * FROM hl_category WHERE alias  = '7' AND  type  = '' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '7'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','7','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',7,%' AND  hl_category.lang in('zh-cn', 'all') 
  UPDATE hl_category SET  `grade` = `grade` - 1 WHERE id IN ('7') AND  grade  > '0' AND  hl_category.lang in('zh-cn', 'all') 
  UPDATE hl_category SET  `parent` = '0' WHERE parent  = '7' AND  hl_category.lang in('zh-cn', 'all') 
  DELETE FROM hl_category WHERE id  = '7' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, parent FROM hl_category WHERE type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  UPDATE hl_category SET `id` = '4',`parent` = '0',`grade` = '1',`path` = ',4,',`lang` = 'zh-cn' WHERE id  = '4' AND  hl_category.lang in('zh-cn', 'all') 
  UPDATE hl_category SET `id` = '5',`parent` = '0',`grade` = '1',`path` = ',5,',`lang` = 'zh-cn' WHERE id  = '5' AND  hl_category.lang in('zh-cn', 'all') 
  UPDATE hl_category SET `id` = '6',`parent` = '0',`grade` = '1',`path` = ',6,',`lang` = 'zh-cn' WHERE id  = '6' AND  hl_category.lang in('zh-cn', 'all') 

20170905 19:53:37: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 19:53:38: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 19:53:39: /admin.php?m=guests&f=admin&type=guests
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

20170905 19:59:42: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 20:05:46: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 20:11:44: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 20:17:46: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 20:23:40: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 20:29:39: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 20:35:39: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 20:41:40: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 20:47:54: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 20:53:46: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 20:59:39: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 21:05:39: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 21:11:48: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 21:17:47: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 21:23:39: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 21:28:04: /admin.php?m=guests&f=admin&type=guests
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

20170905 21:28:44: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170905 21:29:07: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 21:29:13: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_guests SET `author` = 'root',`titleColor` = '',`name` = '彭辉特',`mobile` = '',`summary` = '翔安 彭厝',`content` = '翔安 彭厝',`addedDate` = '2017-09-05 21:28',`editedDate` = '2017-09-05 21:29:13',`type` = 'guests',`addedBy` = 'root',`link` = '',`keywords` = '',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '12' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '12',`category` = '4',`lang` = 'zh-cn'

20170905 21:29:15: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 21:29:42: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170905 21:29:48: /admin.php?m=guests&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('3','10','11','12')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('3','10','11','12')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('3','10','11','12')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 21:29:49: /admin.php?m=guests&f=create&type=guests&category=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170905 21:30:15: /admin.php?m=guests&f=create&type=guests&category=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_guests SET `author` = 'root',`titleColor` = '',`name` = '彭永智',`mobile` = '',`summary` = '翔安 彭厝',`content` = '翔安 彭厝',`addedDate` = '2017-09-05 21:29',`editedDate` = '2017-09-05 21:30:15',`type` = 'guests',`addedBy` = 'root',`link` = '',`keywords` = '',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '13' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '13',`category` = '4',`lang` = 'zh-cn'

20170905 21:30:16: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('13','12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 21:30:23: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170905 21:30:38: /admin.php?m=guests&f=create&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_guests SET `author` = 'root',`titleColor` = '',`name` = '彭桂生',`mobile` = '',`summary` = '翔安 彭厝',`content` = '翔安 彭厝',`addedDate` = '2017-09-05 21:30',`editedDate` = '2017-09-05 21:30:38',`type` = 'guests',`addedBy` = 'root',`link` = '',`keywords` = '',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '14' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '14',`category` = '4',`lang` = 'zh-cn'

20170905 21:30:40: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('14','13','12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 21:36:45: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 21:42:44: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 21:48:42: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 21:54:41: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 22:00:40: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 22:06:40: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 22:12:40: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 22:18:41: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 22:24:40: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 22:30:42: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 22:36:51: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 22:42:41: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 22:48:50: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 22:50:57: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('14','13','12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 22:52:19: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('14','13','12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 22:52:32: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('14','13','12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 22:53:28: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('14','13','12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 22:53:34: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('14','13','12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 22:53:36: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('14','13','12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 22:53:38: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('14','13','12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 22:54:57: /admin.php?m=guests&f=admin&type=guests&categoryID=6
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

20170905 22:54:59: /admin.php?m=guests&f=admin&type=guests&categoryID=5
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

20170905 22:55:01: /admin.php?m=guests&f=admin&type=guests&categoryID=5
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

20170905 22:55:03: /admin.php?m=guests&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('3','10','11','12','13','14')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('3','10','11','12','13','14')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('3','10','11','12','13','14')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('14','13','12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:01:04: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 23:07:04: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 23:13:04: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 23:19:05: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 23:25:04: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 23:31:04: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 23:37:06: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 23:43:04: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170905 23:44:46: /admin.php?m=guests&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('3','10','11','12','13','14')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('3','10','11','12','13','14')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('3','10','11','12','13','14')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('14','13','12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:44:48: /admin.php?m=guests&f=admin&type=guests&categoryID=5
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

20170905 23:44:51: /admin.php?m=guests&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '4' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '4'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','4','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',4,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('4')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('4') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('3','10','11','12','13','14')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('3','10','11','12','13','14')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('3','10','11','12','13','14')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('14','13','12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:45:01: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 23:45:02: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 23:45:17: /admin.php?m=tree&f=children&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '0' AND  type  = 'article' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '0'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'junior' AND  id  != '4' AND  type IN ('') AND  hl_category.lang in('zh-cn', 'all') 
  UPDATE hl_category SET  `name` = '初中同学', `alias` = 'junior', `order` = '10' WHERE id  = '4' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'high' AND  id  != '5' AND  type IN ('') AND  hl_category.lang in('zh-cn', 'all') 
  UPDATE hl_category SET  `name` = '高中同学', `alias` = 'high', `order` = '20' WHERE id  = '5' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'college' AND  id  != '6' AND  type IN ('') AND  hl_category.lang in('zh-cn', 'all') 
  UPDATE hl_category SET  `name` = '大学同学', `alias` = 'college', `order` = '30' WHERE id  = '6' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'bro' AND  id  != '0' AND  type IN ('') AND  hl_category.lang in('zh-cn', 'all') 
  INSERT INTO hl_category SET `parent` = '0',`grade` = '1',`type` = 'guests',`postedDate` = '2017-09-05 23:45:17',`name` = '彭厝兄弟姐妹',`alias` = 'bro',`order` = '40',`lang` = 'zh-cn'
  UPDATE hl_category SET  `path` = ',8,' WHERE id  = '8' AND  hl_category.lang in('zh-cn', 'all') 

20170905 23:45:19: /admin.php?m=tree&f=browse&type=guests&root=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 23:45:19: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 23:45:21: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('14','13','12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:45:22: /admin.php?m=guests&f=admin&type=guests&categoryID=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '8' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '8'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','8','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',8,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('8')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('8') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:45:24: /admin.php?m=guests&f=create&type=guests&category=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170905 23:45:47: /admin.php?m=guests&f=create&type=guests&category=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_guests SET `author` = 'root',`titleColor` = '',`name` = '彭辉丛',`mobile` = '',`summary` = '翔安 彭厝',`content` = '翔安 彭厝',`addedDate` = '2017-09-05 23:45',`editedDate` = '2017-09-05 23:45:47',`type` = 'guests',`addedBy` = 'root',`link` = '',`keywords` = '',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '15' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '15',`category` = '8',`lang` = 'zh-cn'

20170905 23:45:49: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('15','14','13','12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('15','14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('15','14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:46:02: /admin.php?m=guests&f=admin&type=guests&categoryID=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '8' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '8'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','8','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',8,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('8')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('8') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('15')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('15') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:46:06: /admin.php?m=guests&f=edit&guestsID=15&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '15' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '15' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('15') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:46:48: /admin.php?m=guests&f=edit&guestsID=15&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '15' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '15' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('15') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '15' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '15' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('15') ORDER BY `order`,`editor` desc 
  UPDATE hl_guests SET `author` = 'root',`titleColor` = '',`name` = '彭辉丛',`mobile` = '15985815811',`summary` = '翔安 彭厝',`content` = '翔安 彭厝',`addedDate` = '2017-09-05 23:45:00',`editor` = 'root',`editedDate` = '2017-09-05 23:46:48',`link` = '',`keywords` = '',`lang` = 'zh-cn' WHERE id  = '15' AND  hl_guests.lang in('zh-cn', 'all') 
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '15' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '15',`category` = '8',`lang` = 'zh-cn'
  SELECT * FROM hl_guests WHERE id  = '15' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '15' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('15') ORDER BY `order`,`editor` desc 

20170905 23:46:49: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('15','14','13','12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('15','14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('15','14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:46:51: /admin.php?m=guests&f=admin&type=guests&categoryID=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '8' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '8'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','8','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',8,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('8')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('8') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('15')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('15') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:46:54: /admin.php?m=guests&f=create&type=guests&category=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170905 23:47:27: /admin.php?m=guests&f=create&type=guests&category=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_guests SET `author` = 'root',`titleColor` = '',`name` = '彭启填',`mobile` = '13124072663',`summary` = '翔安 彭厝',`content` = '翔安 彭厝',`addedDate` = '2017-09-05 23:46',`editedDate` = '2017-09-05 23:47:27',`type` = 'guests',`addedBy` = 'root',`link` = '',`keywords` = '',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '16' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '16',`category` = '8',`lang` = 'zh-cn'

20170905 23:47:29: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('16','15','14','13','12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('16','15','14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('16','15','14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:47:31: /admin.php?m=guests&f=admin&type=guests&categoryID=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '8' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '8'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','8','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',8,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('8')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('8') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('16','15') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('16','15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('16','15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:49:31: /admin.php?m=guests&f=admin&type=guests&categoryID=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '8' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '8'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','8','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',8,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('8')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('8') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('16','15') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('16','15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('16','15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:50:07: /admin.php?m=guests&f=admin&type=guests&categoryID=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '8' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '8'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','8','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',8,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('8')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('8') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('16','15') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('16','15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('16','15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:51:16: /admin.php?m=guests&f=create&type=guests&category=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170905 23:51:35: /admin.php?m=guests&f=create&type=guests&category=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_guests SET `author` = 'root',`titleColor` = '',`name` = '彭春景',`mobile` = '',`summary` = '翔安 彭厝',`content` = '翔安 彭厝',`addedDate` = '2017-09-05 23:51',`editedDate` = '2017-09-05 23:51:35',`type` = 'guests',`addedBy` = 'root',`link` = '',`keywords` = '',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '17' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '17',`category` = '8',`lang` = 'zh-cn'

20170905 23:51:37: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('17','16','15','14','13','12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('17','16','15','14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('17','16','15','14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:51:39: /admin.php?m=guests&f=admin&type=guests&categoryID=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '8' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '8'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','8','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',8,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('8')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('8') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16','17')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16','17')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16','17')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('17','16','15') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('17','16','15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('17','16','15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:52:23: /admin.php?m=guests&f=create&type=guests&category=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170905 23:52:53: /admin.php?m=guests&f=create&type=guests&category=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_guests SET `author` = 'root',`titleColor` = '',`name` = '彭晓青',`mobile` = '13606052119',`summary` = '翔安 彭厝',`content` = '翔安 彭厝',`addedDate` = '2017-09-05 23:52',`editedDate` = '2017-09-05 23:52:53',`type` = 'guests',`addedBy` = 'root',`link` = '',`keywords` = '',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '18' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '18',`category` = '8',`lang` = 'zh-cn'

20170905 23:52:55: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('18','17','16','15','14','13','12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('18','17','16','15','14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('18','17','16','15','14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:53:01: /admin.php?m=guests&f=admin&type=guests&categoryID=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '8' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '8'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','8','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',8,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('8')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('8') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16','17','18')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16','17','18')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16','17','18')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('18','17','16','15') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('18','17','16','15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('18','17','16','15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:53:03: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 23:53:03: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 23:53:12: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('18','17','16','15','14','13','12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('18','17','16','15','14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('18','17','16','15','14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:53:13: /admin.php?m=guests&f=admin&type=guests&categoryID=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '8' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '8'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','8','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',8,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('8')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('8') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16','17','18')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16','17','18')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16','17','18')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('18','17','16','15') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('18','17','16','15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('18','17','16','15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:53:16: /admin.php?m=guests&f=create&type=guests&category=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT max(id) as maxID FROM hl_guests WHERE  hl_guests.lang in('zh-cn', 'all') 

20170905 23:53:41: /admin.php?m=guests&f=create&type=guests&category=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  INSERT INTO hl_guests SET `author` = 'root',`titleColor` = '',`name` = '彭小玲',`mobile` = '15959248002',`summary` = '翔安 彭厝',`content` = '翔安 彭厝',`addedDate` = '2017-09-05 23:53',`editedDate` = '2017-09-05 23:53:41',`type` = 'guests',`addedBy` = 'root',`link` = '',`keywords` = '',`lang` = 'zh-cn'
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '19' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '19',`category` = '8',`lang` = 'zh-cn'

20170905 23:53:42: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('19','18','17','16','15','14','13','12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('19','18','17','16','15','14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('19','18','17','16','15','14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:53:48: /admin.php?m=guests&f=admin&type=guests&categoryID=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '8' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '8'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','8','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',8,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('8')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('8') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16','17','18','19')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16','17','18','19')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16','17','18','19')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('19','18','17','16','15') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('19','18','17','16','15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('19','18','17','16','15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:54:27: /admin.php?m=guests&f=admin&type=guests&categoryID=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '8' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '8'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','8','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',8,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('8')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('8') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16','17','18','19')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16','17','18','19')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16','17','18','19')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('19','18','17','16','15') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('19','18','17','16','15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('19','18','17','16','15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:57:08: /admin.php?m=tree&f=browse&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 23:57:09: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 23:57:40: /admin.php?m=tree&f=children&type=guests&category=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '0' AND  type  = 'article' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '0'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'junior' AND  id  != '4' AND  type IN ('') AND  hl_category.lang in('zh-cn', 'all') 
  UPDATE hl_category SET  `name` = '初中同学', `alias` = 'junior', `order` = '10' WHERE id  = '4' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'high' AND  id  != '5' AND  type IN ('') AND  hl_category.lang in('zh-cn', 'all') 
  UPDATE hl_category SET  `name` = '高中同学', `alias` = 'high', `order` = '20' WHERE id  = '5' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'college' AND  id  != '6' AND  type IN ('') AND  hl_category.lang in('zh-cn', 'all') 
  UPDATE hl_category SET  `name` = '大学同学', `alias` = 'college', `order` = '30' WHERE id  = '6' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'bro' AND  id  != '8' AND  type IN ('') AND  hl_category.lang in('zh-cn', 'all') 
  UPDATE hl_category SET  `name` = '彭厝兄弟姐妹', `alias` = 'bro', `order` = '40' WHERE id  = '8' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM hl_category WHERE `alias`  = 'workmate' AND  id  != '0' AND  type IN ('') AND  hl_category.lang in('zh-cn', 'all') 
  INSERT INTO hl_category SET `parent` = '0',`grade` = '1',`type` = 'guests',`postedDate` = '2017-09-05 23:57:40',`name` = '同事',`alias` = 'workmate',`order` = '50',`lang` = 'zh-cn'
  UPDATE hl_category SET  `path` = ',9,' WHERE id  = '9' AND  hl_category.lang in('zh-cn', 'all') 

20170905 23:57:41: /admin.php?m=tree&f=browse&type=guests&root=0
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 23:57:42: /admin.php?m=tree&f=children&type=guests&root=0&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE parent  = '0' AND  type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20170905 23:57:42: /admin.php?m=guests&f=admin&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests'  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests'  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('19','18','17','16','15','14','13','12','11','10') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('19','18','17','16','15','14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('19','18','17','16','15','14','13','12','11','10') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:57:48: /admin.php?m=guests&f=admin&type=guests&categoryID=9
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '9' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '9'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','9','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',9,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('9')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('9') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170905 23:57:55: /admin.php?m=guests&f=admin&type=guests&categoryID=8
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE alias  = '8' AND  type  = 'guests' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE `id` = '8'  AND  hl_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM hl_category WHERE id IN ('','8','')  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` 
  SELECT id FROM hl_category WHERE path  LIKE ',8,%' AND  hl_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM hl_guests AS t1  LEFT JOIN hl_relation AS t2  ON t1.id = t2.id  WHERE t1.sticky  != '0' AND  t2.type  = 'guests' AND  t2.category IN ('8')  AND  t1.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc 
  SELECT id FROM hl_relation WHERE type  = 'guests' AND  category IN ('8') AND  hl_relation.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16','17','18','19')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16','17','18','19')  AND  hl_guests.lang in('zh-cn', 'all')  
  SELECT * FROM hl_guests WHERE type  = 'guests' AND  id IN ('15','16','17','18','19')  AND  hl_guests.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT t2.id, t2.name, t2.abbr, t2.alias, t1.id AS guests FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'guests' AND  t1.id IN ('19','18','17','16','15') AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('19','18','17','16','15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('19','18','17','16','15') AND  extension IN ('jpeg','jpg','gif','png') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

