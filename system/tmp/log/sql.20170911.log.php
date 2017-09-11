<?php
 die();
?>
20170911 20:13:17: 
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
  SELECT * FROM hl_article WHERE type  = 'article' AND  status  = 'normal' AND  addedDate  <= '2017-09-11 20:13:17'  AND  hl_article.lang in('zh-cn', 'all')  ORDER BY `sticky` desc,`addedDate` desc  LIMIT 7 

20170911 20:13:19: /admin.php?m=guests&f=admin&type=guests&categoryID=4
  SELECT * FROM hl_config WHERE owner IN ('system','guest')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170911 20:13:19: /admin.php?m=user&f=login&referer=L2FkbWluLnBocD9tPWd1ZXN0cyZmPWFkbWluJnR5cGU9Z3Vlc3RzJmNhdGVnb3J5SUQ9NA==
  SELECT * FROM hl_config WHERE owner IN ('system','guest')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170911 20:13:21: /admin.php?m=user&f=login&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','guest')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM hl_user AS u  LEFT JOIN hl_oauth AS o  ON u.account = o.account  WHERE u.account  = 'root'
  SELECT * FROM hl_user WHERE account  = 'root'
  INSERT INTO hl_log SET `account` = 'root',`date` = '2017-09-11 20:13:21',`ip` = '172.17.0.1',`location` = '局域网 局域网  ',`browser` = 'chrome 60',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/60.0.3112.113 Safari\\/537.36\"}'
  UPDATE hl_user SET `id` = '1',`account` = 'root',`password` = '93234f6e10ca0bab3781ff19c77a0b82',`realname` = 'root',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '10',`ip` = '172.17.0.1',`last` = '2017-09-11 20:13:21',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2017-09-03 14:25:45',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Mac OS X',`browser` = 'chrome 60',`lang` = 'zh-cn' WHERE account  = 'root'
  UPDATE hl_user SET  `browser` = 'chrome 60', `os` = 'Mac OS X' WHERE id  = '1' AND  hl_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM hl_usergroup AS t1  LEFT JOIN hl_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = 'root' AND  t1.lang in('zh-cn', 'all') 

20170911 20:13:22: /admin.php?m=admin&f=index
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE account  = 'root' AND  hidden  = '0'  AND  hl_widget.lang in('zh-cn', 'all')  ORDER BY `order` 

20170911 20:13:23: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_widget WHERE id  = '5' AND  hl_widget.lang in('zh-cn', 'all') 
  SELECT * FROM hl_category WHERE type  = 'article'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170911 20:13:24: /admin.php?m=guests&f=admin&type=guests
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

20170911 20:13:27: /admin.php?m=guests&f=admin&type=guests&categoryID=4
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

20170911 20:13:29: /admin.php?m=guests&f=admin&type=guests&categoryID=5
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

20170911 20:13:31: /admin.php?m=guests&f=admin&type=guests&categoryID=6
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

20170911 20:13:34: /admin.php?m=guests&f=admin&type=guests&categoryID=8
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

20170911 20:13:37: /admin.php?m=guests&f=admin&type=guests&categoryID=9
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

20170911 20:13:39: /admin.php?m=guests&f=admin&type=guests&categoryID=8
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

20170911 20:13:41: /admin.php?m=guests&f=admin&type=guests&categoryID=9
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

20170911 20:15:14: /admin.php?m=guests&f=admin&type=guests&categoryID=8
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

20170911 20:15:17: /admin.php?m=guests&f=edit&guestsID=17&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '17' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '17' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('17') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20170911 20:15:29: /admin.php?m=guests&f=edit&guestsID=17&type=guests
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 
  SELECT * FROM hl_guests WHERE id  = '17' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '17' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('17') ORDER BY `order`,`editor` desc 
  SELECT * FROM hl_category WHERE type  = 'guests'  AND  hl_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM hl_guests WHERE id  = '17' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '17' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('17') ORDER BY `order`,`editor` desc 
  UPDATE hl_guests SET `author` = 'root',`titleColor` = '',`name` = '彭春景',`mobile` = '15605923992',`summary` = '翔安 彭厝',`content` = '翔安 彭厝',`addedDate` = '2017-09-05 23:51:00',`editor` = 'root',`editedDate` = '2017-09-11 20:15:29',`link` = '',`keywords` = '',`lang` = 'zh-cn' WHERE id  = '17' AND  hl_guests.lang in('zh-cn', 'all') 
  DELETE FROM hl_relation WHERE type  = 'guests' AND  id  = '17' AND  hl_relation.lang in('zh-cn', 'all') 
  INSERT INTO hl_relation SET `type` = 'guests',`id` = '17',`category` = '8',`lang` = 'zh-cn'
  SELECT * FROM hl_guests WHERE id  = '17' AND  hl_guests.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM hl_tag WHERE link  != ''  AND  hl_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM hl_relation AS t1  LEFT JOIN hl_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'guests' AND  t1.id  = '17' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM hl_file WHERE objectType  = 'guests' AND  objectID IN ('17') ORDER BY `order`,`editor` desc 

20170911 20:15:31: /admin.php?m=guests&f=admin&type=guests
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

20170911 20:15:35: /admin.php?m=guests&f=admin
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

20170911 20:15:38: /admin.php?m=guests&f=admin
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

20170911 20:15:39: /admin.php?m=guests&f=admin&type=guests&categoryID=4
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

20170911 20:15:41: /admin.php?m=guests&f=admin&type=guests&categoryID=5
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

20170911 20:15:45: /admin.php?m=guests&f=admin&type=guests&categoryID=8
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

20170911 20:21:57: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM hl_config WHERE owner IN ('system','root')  AND  hl_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM hl_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  hl_category.lang in('zh-cn', 'all') 

20170911 20:24:44: /admin.php?m=guests&f=admin&type=guests&categoryID=8
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

20170911 20:26:15: /admin.php?m=guests&f=admin&type=guests&categoryID=8
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

20170911 20:26:37: /admin.php?m=guests&f=admin&type=guests&categoryID=8
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

20170911 20:26:53: /admin.php?m=guests&f=admin&type=guests&categoryID=8
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

20170911 20:27:03: /admin.php?m=guests&f=admin&type=guests&categoryID=8
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

20170911 20:27:38: /admin.php?m=guests&f=admin&type=guests&categoryID=8
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

20170911 20:28:08: /admin.php?m=guests&f=admin&type=guests&categoryID=8
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

20170911 20:28:13: /admin.php?m=guests&f=admin&type=guests&categoryID=8
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

