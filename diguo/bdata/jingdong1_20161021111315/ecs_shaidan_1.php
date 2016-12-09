<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_shaidan`;");
E_C("CREATE TABLE `ecs_shaidan` (
  `shaidan_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `rec_id` mediumint(9) NOT NULL DEFAULT '0',
  `goods_id` mediumint(9) NOT NULL DEFAULT '0',
  `user_id` mediumint(9) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `add_time` int(10) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `hide_username` tinyint(1) NOT NULL DEFAULT '0',
  `pay_points` int(10) NOT NULL DEFAULT '0',
  `is_points` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`shaidan_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>