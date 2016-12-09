<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_chat_customer`;");
E_C("CREATE TABLE `ecs_chat_customer` (
  `cus_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `user_id` mediumint(8) NOT NULL COMMENT 'ECShop平台系统用户编号',
  `of_username` varchar(120) NOT NULL COMMENT '绑定的OpenFire系统用户名',
  `cus_name` varchar(120) NOT NULL COMMENT '客服名称',
  `supp_id` mediumint(8) NOT NULL DEFAULT '-1' COMMENT '入驻商编号',
  `cus_type` int(11) NOT NULL DEFAULT '0' COMMENT '客服类型',
  `cus_status` int(11) NOT NULL DEFAULT '0' COMMENT '客服状态',
  `chat_time` int(11) DEFAULT NULL COMMENT '上次聊天的时间',
  `session_count` int(11) DEFAULT '0' COMMENT '客服对话量',
  `talk_time` int(11) DEFAULT '0' COMMENT '客服总的通话时间',
  `cus_degree` int(11) DEFAULT '0' COMMENT '总的满意度',
  `cus_enable` int(11) DEFAULT '1' COMMENT '是否可用',
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`cus_id`),
  UNIQUE KEY `UNIQUE` (`user_id`,`of_username`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_chat_customer` values('7','1','kefu','今天优品官方','-1','0','0','0','0','0','0','1','1468215024');");
E_D("replace into `ecs_chat_customer` values('8','23','萌萌的骚年','骚年你好','38','0','0','0','0','0','0','1','1468264862');");
E_D("replace into `ecs_chat_customer` values('9','22','diaoninaohai','yiren','37','0','0','0','0','0','0','1','1468265124');");

require("../../inc/footer.php");
?>