<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cat_recommend`;");
E_C("CREATE TABLE `ecs_cat_recommend` (
  `cat_id` smallint(5) NOT NULL,
  `recommend_type` tinyint(1) NOT NULL,
  PRIMARY KEY (`cat_id`,`recommend_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_cat_recommend` values('6','3');");
E_D("replace into `ecs_cat_recommend` values('7','3');");
E_D("replace into `ecs_cat_recommend` values('8','3');");
E_D("replace into `ecs_cat_recommend` values('9','3');");
E_D("replace into `ecs_cat_recommend` values('10','3');");
E_D("replace into `ecs_cat_recommend` values('11','3');");
E_D("replace into `ecs_cat_recommend` values('12','3');");
E_D("replace into `ecs_cat_recommend` values('13','3');");
E_D("replace into `ecs_cat_recommend` values('15','3');");
E_D("replace into `ecs_cat_recommend` values('16','3');");
E_D("replace into `ecs_cat_recommend` values('17','3');");
E_D("replace into `ecs_cat_recommend` values('18','3');");
E_D("replace into `ecs_cat_recommend` values('19','3');");
E_D("replace into `ecs_cat_recommend` values('20','3');");
E_D("replace into `ecs_cat_recommend` values('21','3');");
E_D("replace into `ecs_cat_recommend` values('22','3');");
E_D("replace into `ecs_cat_recommend` values('23','3');");
E_D("replace into `ecs_cat_recommend` values('24','3');");
E_D("replace into `ecs_cat_recommend` values('26','3');");
E_D("replace into `ecs_cat_recommend` values('27','3');");
E_D("replace into `ecs_cat_recommend` values('28','3');");
E_D("replace into `ecs_cat_recommend` values('30','3');");
E_D("replace into `ecs_cat_recommend` values('46','3');");
E_D("replace into `ecs_cat_recommend` values('47','3');");
E_D("replace into `ecs_cat_recommend` values('61','3');");
E_D("replace into `ecs_cat_recommend` values('62','3');");
E_D("replace into `ecs_cat_recommend` values('67','3');");
E_D("replace into `ecs_cat_recommend` values('80','3');");
E_D("replace into `ecs_cat_recommend` values('84','3');");
E_D("replace into `ecs_cat_recommend` values('89','3');");
E_D("replace into `ecs_cat_recommend` values('92','3');");
E_D("replace into `ecs_cat_recommend` values('95','3');");
E_D("replace into `ecs_cat_recommend` values('107','3');");
E_D("replace into `ecs_cat_recommend` values('125','3');");
E_D("replace into `ecs_cat_recommend` values('126','3');");
E_D("replace into `ecs_cat_recommend` values('127','3');");
E_D("replace into `ecs_cat_recommend` values('128','3');");
E_D("replace into `ecs_cat_recommend` values('136','3');");
E_D("replace into `ecs_cat_recommend` values('137','3');");
E_D("replace into `ecs_cat_recommend` values('138','3');");
E_D("replace into `ecs_cat_recommend` values('139','3');");
E_D("replace into `ecs_cat_recommend` values('140','3');");
E_D("replace into `ecs_cat_recommend` values('149','3');");
E_D("replace into `ecs_cat_recommend` values('153','3');");
E_D("replace into `ecs_cat_recommend` values('154','3');");
E_D("replace into `ecs_cat_recommend` values('156','3');");
E_D("replace into `ecs_cat_recommend` values('164','3');");
E_D("replace into `ecs_cat_recommend` values('165','3');");
E_D("replace into `ecs_cat_recommend` values('166','3');");
E_D("replace into `ecs_cat_recommend` values('168','3');");
E_D("replace into `ecs_cat_recommend` values('169','3');");
E_D("replace into `ecs_cat_recommend` values('191','3');");
E_D("replace into `ecs_cat_recommend` values('192','3');");
E_D("replace into `ecs_cat_recommend` values('193','3');");
E_D("replace into `ecs_cat_recommend` values('194','3');");
E_D("replace into `ecs_cat_recommend` values('196','3');");
E_D("replace into `ecs_cat_recommend` values('197','3');");
E_D("replace into `ecs_cat_recommend` values('199','3');");
E_D("replace into `ecs_cat_recommend` values('201','3');");
E_D("replace into `ecs_cat_recommend` values('203','3');");
E_D("replace into `ecs_cat_recommend` values('227','3');");
E_D("replace into `ecs_cat_recommend` values('242','3');");
E_D("replace into `ecs_cat_recommend` values('243','3');");
E_D("replace into `ecs_cat_recommend` values('245','3');");
E_D("replace into `ecs_cat_recommend` values('246','3');");
E_D("replace into `ecs_cat_recommend` values('247','3');");
E_D("replace into `ecs_cat_recommend` values('250','3');");
E_D("replace into `ecs_cat_recommend` values('252','3');");
E_D("replace into `ecs_cat_recommend` values('253','3');");
E_D("replace into `ecs_cat_recommend` values('276','3');");
E_D("replace into `ecs_cat_recommend` values('277','3');");
E_D("replace into `ecs_cat_recommend` values('280','3');");
E_D("replace into `ecs_cat_recommend` values('282','3');");
E_D("replace into `ecs_cat_recommend` values('285','3');");
E_D("replace into `ecs_cat_recommend` values('286','3');");
E_D("replace into `ecs_cat_recommend` values('287','3');");
E_D("replace into `ecs_cat_recommend` values('288','3');");
E_D("replace into `ecs_cat_recommend` values('297','3');");
E_D("replace into `ecs_cat_recommend` values('312','3');");
E_D("replace into `ecs_cat_recommend` values('313','3');");
E_D("replace into `ecs_cat_recommend` values('332','3');");
E_D("replace into `ecs_cat_recommend` values('337','3');");
E_D("replace into `ecs_cat_recommend` values('340','3');");
E_D("replace into `ecs_cat_recommend` values('350','3');");
E_D("replace into `ecs_cat_recommend` values('351','3');");
E_D("replace into `ecs_cat_recommend` values('352','3');");
E_D("replace into `ecs_cat_recommend` values('355','3');");
E_D("replace into `ecs_cat_recommend` values('357','3');");
E_D("replace into `ecs_cat_recommend` values('358','3');");
E_D("replace into `ecs_cat_recommend` values('359','3');");
E_D("replace into `ecs_cat_recommend` values('360','3');");
E_D("replace into `ecs_cat_recommend` values('361','3');");
E_D("replace into `ecs_cat_recommend` values('417','3');");
E_D("replace into `ecs_cat_recommend` values('418','3');");
E_D("replace into `ecs_cat_recommend` values('419','3');");
E_D("replace into `ecs_cat_recommend` values('422','3');");
E_D("replace into `ecs_cat_recommend` values('557','3');");
E_D("replace into `ecs_cat_recommend` values('564','3');");
E_D("replace into `ecs_cat_recommend` values('566','3');");
E_D("replace into `ecs_cat_recommend` values('572','3');");
E_D("replace into `ecs_cat_recommend` values('702','3');");
E_D("replace into `ecs_cat_recommend` values('826','3');");
E_D("replace into `ecs_cat_recommend` values('829','3');");
E_D("replace into `ecs_cat_recommend` values('830','3');");
E_D("replace into `ecs_cat_recommend` values('831','3');");
E_D("replace into `ecs_cat_recommend` values('910','3');");
E_D("replace into `ecs_cat_recommend` values('916','3');");
E_D("replace into `ecs_cat_recommend` values('922','3');");
E_D("replace into `ecs_cat_recommend` values('932','3');");
E_D("replace into `ecs_cat_recommend` values('943','3');");
E_D("replace into `ecs_cat_recommend` values('1036','3');");
E_D("replace into `ecs_cat_recommend` values('1037','3');");
E_D("replace into `ecs_cat_recommend` values('1038','3');");
E_D("replace into `ecs_cat_recommend` values('1069','3');");
E_D("replace into `ecs_cat_recommend` values('1119','3');");
E_D("replace into `ecs_cat_recommend` values('1124','3');");
E_D("replace into `ecs_cat_recommend` values('1132','1');");
E_D("replace into `ecs_cat_recommend` values('1133','1');");
E_D("replace into `ecs_cat_recommend` values('1133','3');");
E_D("replace into `ecs_cat_recommend` values('1134','3');");
E_D("replace into `ecs_cat_recommend` values('1135','3');");
E_D("replace into `ecs_cat_recommend` values('1136','3');");
E_D("replace into `ecs_cat_recommend` values('1137','3');");
E_D("replace into `ecs_cat_recommend` values('1138','3');");
E_D("replace into `ecs_cat_recommend` values('1139','3');");
E_D("replace into `ecs_cat_recommend` values('1140','3');");
E_D("replace into `ecs_cat_recommend` values('1141','3');");
E_D("replace into `ecs_cat_recommend` values('1142','1');");
E_D("replace into `ecs_cat_recommend` values('1142','2');");
E_D("replace into `ecs_cat_recommend` values('1143','3');");
E_D("replace into `ecs_cat_recommend` values('1144','3');");
E_D("replace into `ecs_cat_recommend` values('1145','3');");
E_D("replace into `ecs_cat_recommend` values('1146','3');");
E_D("replace into `ecs_cat_recommend` values('1147','3');");
E_D("replace into `ecs_cat_recommend` values('1148','3');");
E_D("replace into `ecs_cat_recommend` values('1149','3');");
E_D("replace into `ecs_cat_recommend` values('1150','3');");
E_D("replace into `ecs_cat_recommend` values('1151','3');");
E_D("replace into `ecs_cat_recommend` values('1152','3');");
E_D("replace into `ecs_cat_recommend` values('1153','3');");
E_D("replace into `ecs_cat_recommend` values('1154','3');");
E_D("replace into `ecs_cat_recommend` values('1155','3');");
E_D("replace into `ecs_cat_recommend` values('1156','3');");
E_D("replace into `ecs_cat_recommend` values('1157','3');");

require("../../inc/footer.php");
?>