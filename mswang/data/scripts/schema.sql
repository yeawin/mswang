CREATE TABLE `mswang`.`tb_users` (
 `id` INT NOT NULL AUTO_INCREMENT COMMENT '主键id' , 
 `username` VARCHAR(255) NOT NULL COMMENT '用户名' , 
 `password` VARCHAR(255) NOT NULL COMMENT '密码' ,
  `userrole` TINYINT NOT NULL COMMENT '角色' , 
  PRIMARY KEY (`id`)
  ) ENGINE = MyISAM CHARSET=utf8 COLLATE utf8_unicode_ci COMMENT = '用户表';
  
  CREATE TABLE `mswang`.`tb_web_subjects` (
   `id` INT NOT NULL AUTO_INCREMENT COMMENT 'id主键' ,
   `subject_name` VARCHAR(50) NOT NULL COMMENT '板块名' , 
   PRIMARY KEY (`id`)
   ) ENGINE = MyISAM COMMENT = '网站导航板块栏目列表';