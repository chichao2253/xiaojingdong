<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_rank`;");
E_C("CREATE TABLE `ecs_user_rank` (
  `rank_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `rank_name` varchar(30) NOT NULL DEFAULT '',
  `min_points` int(10) unsigned NOT NULL DEFAULT '0',
  `max_points` int(10) unsigned NOT NULL DEFAULT '0',
  `discount` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `show_price` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `special_rank` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_recomm` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rank_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_rank` values('1','普通会员','0','999','100','1','0','0');");
E_D("replace into `ecs_user_rank` values('2','会员价','1000','5999','90','1','0','0');");
E_D("replace into `ecs_user_rank` values('3','批发会员','6000','9999','40','1','0','0');");
E_D("replace into `ecs_user_rank` values('4','钻石会员','10000','2147483647','40','1','0','0');");

require("../../inc/footer.php");
?>