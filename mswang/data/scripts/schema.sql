CREATE TABLE `mswang`.`tb_users` (
 `id` INT NOT NULL AUTO_INCREMENT COMMENT '��������' , 
 `username` VARCHAR(255) NOT NULL COMMENT '�û���' , 
 `password` VARCHAR(255) NOT NULL COMMENT '����' ,
  `userrole` TINYINT NOT NULL COMMENT '��ɫ' , 
  PRIMARY KEY (`id`)
  ) ENGINE = MyISAM CHARSET=utf8 COLLATE utf8_unicode_ci COMMENT = '�û���';