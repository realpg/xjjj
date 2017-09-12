# Host: 127.0.0.1  (Version: 5.5.5-10.1.8-MariaDB)
# Date: 2017-09-12 16:05:54
# Generator: MySQL-Front 5.3  (Build 4.271)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "backstage"
#

CREATE TABLE `backstage` (
  `backstage_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `backstage_title` varchar(255) DEFAULT NULL COMMENT '后台导航标题',
  `backstage_level` int(11) DEFAULT NULL COMMENT '后台子导航的父级id',
  `backstage_link` varchar(255) DEFAULT NULL COMMENT '后台导航的跳转地址',
  PRIMARY KEY (`backstage_id`)
) ENGINE=MyISAM AUTO_INCREMENT=181 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='后台导航';

#
# Data for table "backstage"
#

INSERT INTO `backstage` VALUES (1,'系统管理',0,''),(2,'用户信息',1,'../ht-user/select.php'),(3,'用户权限',1,'../ht-power/select.php'),(4,'后台导航管理',1,'../ht-backstage/select.php'),(5,'系统日志',1,'../ht-log/select.php'),(20,'系统设置',0,NULL),(21,'网站基本信息管理',20,'../ht-company/update.php'),(22,'网站背景色值管理',20,'../ht-color/select.php'),(31,'代码模块安装',20,'../ht-script/select.php'),(40,'SEO优化',0,NULL),(41,'SEO优化',40,'../ht-seo/select.php'),(50,'互动管理',0,NULL),(53,'留言管理',50,'../ht-leaveword/select.php'),(70,'内容管理',0,NULL),(75,'网站模块管理',70,'../ht-menu/select.php'),(80,'页面图片管理',70,'../ht-image/select.php'),(90,'分会场',70,'../ht-branch/select.php'),(100,'产品展示',70,'../ht-product/select.php'),(110,'活动亮点',70,'../ht-light/select.php'),(120,'现场热图',70,'../ht-scene/select.php'),(130,'优惠卷',70,'../ht-coupon/select.php'),(140,'品牌活动',70,'../ht-brand/select.php');

#
# Structure for table "brand"
#

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_title` varchar(255) DEFAULT NULL COMMENT '标题',
  `brand_color` varchar(255) DEFAULT NULL COMMENT '背景颜色',
  `brand_logo` varchar(255) DEFAULT NULL COMMENT 'LOGO',
  `brand_image` varchar(255) DEFAULT NULL COMMENT '图片',
  `brand_position` varchar(255) DEFAULT NULL COMMENT '位置',
  `brand_content` text COMMENT '内容',
  `brand_sort` int(11) DEFAULT NULL COMMENT '排序',
  `brand_show` int(11) DEFAULT NULL COMMENT '是否显示',
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='品牌活动';

#
# Data for table "brand"
#

INSERT INTO `brand` VALUES (3,'测试一','#f7acbc','upload/brand/201709080918181681.jpg','upload/brand/201709080918511757.png','A管一楼','我是测试内容',0,1),(4,'测试二','#4e72b8','upload/brand/201709080920144315.jpg','upload/brand/201709080920141367.png','A管二楼','我是测试内容二',0,1),(5,'测试三','#bed742','upload/brand/201709080922098342.jpg','upload/brand/201709080922097319.png','B管一楼','我是测试内容',0,1),(6,'测试四','#9b95c9','upload/brand/201709080918181681.jpg','upload/brand/201709080918511757.png','A管一楼','我是测试内容四',0,1),(7,'测试五','#840228','upload/brand/201709080920144315.jpg','upload/brand/201709080920141367.png','A管二楼','我是测试内容五',0,1),(8,'测试六','#ea66a6','upload/brand/201709080922098342.jpg','upload/brand/201709080922097319.png','B管一楼','我是测试内容六',0,1),(9,'测试七','#ffc20e','upload/brand/201709080918181681.jpg','upload/brand/201709080918511757.png','A管一楼','我是测试内容',0,1),(10,'测试八','#008792','upload/brand/201709080920144315.jpg','upload/brand/201709080920141367.png','A管二楼','我是测试内容二',0,1),(11,'测试九','#281f1d','upload/brand/201709080922098342.jpg','upload/brand/201709080922097319.png','B管一楼','我是测试内容',0,1);

#
# Structure for table "color"
#

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL AUTO_INCREMENT,
  `color_title` varchar(255) DEFAULT NULL COMMENT '位置',
  `color_content` varchar(255) DEFAULT NULL COMMENT '色值',
  `color_level` int(11) DEFAULT NULL COMMENT '分类（1：PC；2：WAP）',
  PRIMARY KEY (`color_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='色调搭配';

#
# Data for table "color"
#

INSERT INTO `color` VALUES (1,'PC端主页背景色','rgb(148,209,207)',1),(2,'PC端产品页面背景色','rgb(255,0,0)',1),(3,'手机端主页背景色','#d70c00',2),(4,'手机端产品页背景色','#d70c18',2),(5,'PC端模块标题颜色','#ffffff',1),(6,'手机端模块标题颜色','#ffffff',2),(9,'PC端首页查看更多背景颜色','#B22222',1),(10,'手机端首页查看更多背景颜色','#B22222',2),(11,'PC端优惠卷背景色','rgb(148,209,233)',1),(12,'手机端优惠卷背景色','rgb(148,209,207)',2);

#
# Structure for table "company"
#

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `company_name` varchar(255) DEFAULT NULL COMMENT '企业名',
  `company_logo` varchar(255) DEFAULT NULL COMMENT '企业Logo',
  `company_tel` varchar(255) DEFAULT NULL COMMENT '电话',
  `company_qq` varchar(255) DEFAULT NULL COMMENT 'QQ',
  `company_address` varchar(255) DEFAULT NULL COMMENT '地址',
  `company_copyright` varchar(255) DEFAULT NULL COMMENT '网站版权',
  `company_record` varchar(255) DEFAULT NULL COMMENT '企业备案号',
  `company_map` varchar(255) DEFAULT NULL COMMENT '公司位置地图',
  `company_x` varchar(255) DEFAULT NULL COMMENT '位置经度',
  `company_y` varchar(255) DEFAULT NULL COMMENT '位置纬度',
  `company_traffic` text COMMENT '交通配套',
  `company_about` text COMMENT '关于我们',
  `company_water_image` varchar(255) DEFAULT NULL COMMENT '水印图片',
  `company_water_position` int(11) DEFAULT NULL COMMENT '水印添加位置',
  `company_water_alpha` int(11) DEFAULT NULL COMMENT '透明度',
  `company_water_power` text COMMENT '可上传水印的模块',
  PRIMARY KEY (`company_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='公司信息';

#
# Data for table "company"
#

INSERT INTO `company` VALUES (1,'香江家居','upload/company/201709041142036988.png','024-25614838','1234567890','沈阳市铁西区保工南街2号','@copyright 香江家居工厂批发城','123456','123.360737,41.806659','123.360737','41.806659','<p><span style=\"font-family: 宋体; font-size: 16px;\">地址：辽宁省沈阳市铁西区建设大路与保工街交汇处</span></p><p><span style=\"font-size: 16px;\"><span style=\"font-family: 宋体;\">乘车路线：</span>239/240/266/204/242/297/176/<span style=\"font-family: 宋体;\">地铁一号线（保工街站</span>C<span style=\"font-family: 宋体;\">出口）</span></span></p><p><span style=\"font-size: 16px;\"><span style=\"font-family: 宋体;\">采购热线：</span>024-25614838</span></p>','<p style=\"line-height: 1.5em; text-indent: 0em;\"><img src=\"/ueditor/php/upload/image/20170904/1504500914280653.jpg\" title=\"1504500914280653.jpg\" alt=\"微信图片_20170904125451.jpg\"/> &nbsp; &nbsp;香江集团创建于1990年，产业包括家居流通、房地产开发建设、铝业和金融投资。沈阳香江好天地商贸有限公司隶属于香江集团，地处保工街与建设大路交汇处。</p>',NULL,NULL,NULL,NULL);

#
# Structure for table "coupon"
#

CREATE TABLE `coupon` (
  `coupon_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `coupon_title` varchar(255) DEFAULT NULL COMMENT '产品标题',
  `coupon_logo` varchar(255) DEFAULT NULL COMMENT '品牌LOGO',
  `coupon_logo_title` varchar(255) DEFAULT NULL COMMENT '品牌LOGO名称',
  `coupon_price` varchar(255) DEFAULT NULL COMMENT '金额',
  `coupon_content` text COMMENT '条件',
  `coupon_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '时间',
  `coupen_start` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '开始时间',
  `coupon_end` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '结束时间',
  `coupon_level` int(11) DEFAULT NULL COMMENT '父级id（分类）',
  `coupon_sort` int(11) DEFAULT NULL COMMENT '置顶',
  `coupon_show` int(11) DEFAULT NULL COMMENT '推荐',
  PRIMARY KEY (`coupon_id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='优惠券';

#
# Data for table "coupon"
#

INSERT INTO `coupon` VALUES (83,'优惠卷','upload/coupon/201709050957496789.jpg',NULL,'50',' 支付满100元可用 ','2017-11-11 18:00:00','2017-09-05 11:01:09','2017-11-11 00:00:00',252,0,1),(84,'联邦','upload/coupon/201709051331299245.jpg',NULL,'100',' 支付满299元可用 ','2017-11-11 18:00:00','2017-09-05 13:31:29','2017-11-11 00:00:00',252,0,1),(85,'3D木门','upload/coupon/201709051356331491.jpg',NULL,'50',' 支付满199元可用 ','2017-11-11 18:00:00','2017-09-05 13:56:33','2017-11-11 00:00:00',252,0,1),(86,'朗格尔','upload/coupon/201709051357406944.jpg',NULL,'100',' 支付满299元可用 ','2017-11-11 18:00:00','2017-09-05 13:57:40','2017-11-11 00:00:00',252,0,1),(87,'依诺瓷砖','upload/coupon/20170907104200553.jpg',NULL,'50',' 支付满100元可用 ','2017-09-06 10:00:00','2017-09-05 14:01:10','2017-09-06 00:00:00',251,0,1),(88,'海尔','upload/coupon/201709051402044232.jpg',NULL,'50',' 支付满399元可用 ','2017-11-11 18:00:00','2017-09-05 14:02:04','2017-11-11 00:00:00',253,0,1),(89,'圣象地板','upload/coupon/20170905140248946.jpg',NULL,'50',' 支付满399元可用 ','2017-11-11 18:00:00','2017-09-05 14:02:48','2017-11-11 00:00:00',254,0,1),(90,'安华卫浴','upload/coupon/201709051403271385.jpg',NULL,'100',' 支付满199元可用 ','2017-11-11 18:00:00','2017-09-05 14:03:27','2017-11-11 00:00:00',255,0,1),(91,'尚誉','upload/coupon/201709061039013458.jpg',NULL,'100','消费满1999元','2017-10-07 10:00:00','2017-09-06 10:39:01','2017-10-07 12:00:00',252,0,1);

#
# Structure for table "image"
#

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `image_title` varchar(255) DEFAULT NULL COMMENT '标题',
  `image_image` varchar(255) DEFAULT NULL COMMENT '图片',
  `image_show` int(11) DEFAULT NULL COMMENT '是否显示',
  `image_sort` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='广告表';

#
# Data for table "image"
#

INSERT INTO `image` VALUES (1,'版头','upload/image/201709011725528860.jpg',1,1),(3,'现场攻略','upload/image/201708251621414678.png',1,3),(4,'服务保障','upload/image/201708251622164628.png',1,4),(5,'手机端版头','upload/image/201708231534049663.jpg',1,5),(6,'手机端服务保障','upload/image/201708231805193842.png',1,6),(7,'右侧浮窗图片','upload/image/201708251613454227.jpg',1,7),(8,'底部浮窗——左图','upload/image/201708291414438709.png',1,8),(9,'底部浮窗——中图','upload/image/201708291425039900.png',1,9),(10,'底部浮窗——右图','upload/image/201708291415063490.png',1,10),(11,'手机端主会场','upload/menu/201708301438526858.jpg',1,11),(12,'PC端走马灯','upload/image//201709071558216396.gif',1,2),(13,'PC端标题背景图','upload/image/201709081735431172.png',1,12),(14,'手机端标题背景图','upload/image/201709081800055850.png',1,13);

#
# Structure for table "leaveword"
#

CREATE TABLE `leaveword` (
  `leaveword_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `leaveword_name` varchar(255) DEFAULT NULL COMMENT '姓名',
  `leaveword_tel` varchar(255) DEFAULT NULL COMMENT '电话',
  `leaveword_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '留言时间',
  `leaveword_read` int(11) DEFAULT '0' COMMENT '是否已读',
  `leaveword_source` varchar(255) DEFAULT NULL COMMENT '来源',
  PRIMARY KEY (`leaveword_id`)
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "leaveword"
#

INSERT INTO `leaveword` VALUES (49,'123','13589562312','2017-08-23 16:46:25',0,NULL),(50,'123','13589562312','2017-08-23 16:46:52',0,NULL),(51,'123','13578945612','2017-08-23 16:47:02',0,NULL),(52,'123','13578945612','2017-08-23 16:47:24',0,NULL),(53,'123','13889561234','2017-08-23 16:47:38',0,NULL),(55,'lili','13589562356','2017-08-24 14:56:18',0,NULL),(56,'li','13889562356','2017-08-24 14:57:13',0,NULL),(57,'王小二','13523569845','2017-08-24 15:55:04',0,NULL),(58,'匿名','13689562356','2017-08-29 16:05:26',0,NULL),(59,'李雷','13689562356','2017-08-29 21:36:26',0,NULL),(60,'天天','13678653675','2017-08-30 09:26:15',0,NULL),(61,'天天','13678653675','2017-08-30 09:26:26',0,NULL),(62,'天天','13678653675','2017-08-30 09:27:06',0,NULL),(63,'123','13689562356','2017-08-30 09:29:18',0,NULL),(64,'匿名','13689562356','2017-08-30 09:29:56',0,NULL),(65,'555','13689562356','2017-08-30 09:30:18',0,NULL),(66,'哈哈','13698374757','2017-08-30 09:41:46',0,NULL),(67,'nn','13638907463','2017-08-30 09:42:22',0,NULL),(68,'嘻嘻','13664583609','2017-08-30 09:44:13',0,NULL),(69,'123','13612345678','2017-08-30 11:37:09',0,NULL),(70,'匿名','13589562356','2017-08-30 16:18:47',0,NULL),(71,'匿名','13589562356','2017-08-30 16:19:21',0,NULL),(72,'莉莉','13589562356','2017-08-30 16:19:48',0,NULL),(73,'测试','13056234789','2017-08-31 13:30:49',0,NULL),(74,'123','13556235623','2017-08-31 14:09:24',0,NULL),(75,'匿名','','2017-09-02 18:49:50',0,NULL),(77,'lililili','13065239441','2017-09-02 18:59:06',0,NULL),(78,'lili','13065239441','2017-09-02 19:10:40',0,NULL),(79,'lililili','13065239441','2017-09-02 19:22:07',0,NULL),(80,'lili','13065239441','2017-09-02 19:32:19',0,NULL),(81,'匿名','','2017-09-02 19:46:03',0,NULL),(82,'匿名','13065239441','2017-09-02 19:46:17',0,NULL),(83,'匿名','','2017-09-02 19:46:26',0,NULL),(84,'匿名','13065239441','2017-09-02 19:47:34',0,NULL),(85,'匿名','13065239441','2017-09-02 19:48:37',0,NULL),(86,'匿名','13065239441','2017-09-02 20:31:18',0,NULL),(87,'123','13065239441','2017-09-03 10:32:30',0,NULL),(88,'匿名','13065239441','2017-09-03 10:33:01',0,NULL),(89,'匿名','13065239441','2017-09-03 10:48:01',0,NULL),(90,'匿名','13065239441','2017-09-03 10:48:36',0,NULL),(91,'lili','13065239441','2017-09-03 10:51:53',0,NULL),(92,'匿名','13065239441','2017-09-03 10:53:16',0,NULL),(93,'lili','13065239441','2017-09-03 10:54:08',0,NULL),(94,'匿名','13065239441','2017-09-03 11:06:11',0,NULL),(95,'123456','13689562356','2017-09-05 15:35:32',0,NULL),(96,'测试','13065239441','2017-09-12 16:03:08',0,'百度-PC端');

#
# Structure for table "leaveword_details"
#

CREATE TABLE `leaveword_details` (
  `leaveword_details_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `leaveword_details_num` int(11) DEFAULT NULL COMMENT '数量',
  PRIMARY KEY (`leaveword_details_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='留言版块细节表';

#
# Data for table "leaveword_details"
#

INSERT INTO `leaveword_details` VALUES (1,141);

#
# Structure for table "light"
#

CREATE TABLE `light` (
  `light_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `light_title` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '标题',
  `light_image` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '图片',
  `light_content` text CHARACTER SET utf8 COMMENT '内容',
  `light_sort` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`light_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC COMMENT='活动亮点';

#
# Data for table "light"
#

INSERT INTO `light` VALUES (27,'现金免单','upload/light/201708231201414085.png','当日累积消费满3000元，可砸金蛋一个，最高千元现金限时抢。',0),(28,'2倍家电礼','upload/light/201708231203577763.png','当日累积消费满500元，即可享受满就送礼品翻倍送。',0),(29,'5元夺家居','upload/light/201708231206095753.png','无需消费，5元认购千元家居',0),(32,'赢大奖','upload/light/201708231204527480.png','当日累积消费满3000元，可领抽奖券一张，下单狂抽电冰洗',0),(33,'工厂爆品','upload/light/201708231206188303.png','百余工厂爆品限时专供，建材家具低至一折起',0),(34,'签到礼','upload/light/201708231205435690.png','凭短信前500名到店领取签到礼品',0);

#
# Structure for table "log"
#

CREATE TABLE `log` (
  `Log_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `Log_name` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '用户名',
  `Log_event` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '事件',
  `Log_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '时间',
  PRIMARY KEY (`Log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2137 DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC COMMENT='系统日志';

#
# Data for table "log"
#

INSERT INTO `log` VALUES (2007,'admin','登录成功','2017-09-04 10:38:52'),(2008,'admin','登录成功','2017-09-04 10:38:52'),(2009,'admin','编辑网站基本信息成功','2017-09-04 10:39:03'),(2010,'admin','编辑网站基本信息成功','2017-09-04 11:28:29'),(2011,'admin','编辑网站基本信息成功','2017-09-04 11:42:03'),(2012,'admin','登录成功','2017-09-04 12:02:51'),(2013,'admin','编辑网站基本信息成功','2017-09-04 12:57:10'),(2014,'admin','编辑“PC端主页背景色”成功','2017-09-04 13:52:09'),(2015,'admin','编辑“PC端主页背景色”成功','2017-09-04 13:53:40'),(2016,'admin','编辑“PC端主页背景色”成功','2017-09-04 13:55:23'),(2017,'admin','编辑“PC端主页背景色”成功','2017-09-04 13:55:31'),(2018,'admin','编辑“PC端主页背景色”成功','2017-09-04 13:55:38'),(2019,'admin','登录成功','2017-09-04 14:48:13'),(2020,'admin','编辑“PC端主页背景色”成功','2017-09-04 14:48:32'),(2021,'admin','添加导航“厨房卫浴”成功','2017-09-04 15:30:24'),(2022,'admin','编辑导航“厨房卫浴”成功','2017-09-04 15:30:41'),(2023,'admin','添加导航“地板木门”成功','2017-09-04 15:30:51'),(2024,'admin','编辑导航“地板木门”成功','2017-09-04 15:30:57'),(2025,'admin','添加导航“ 家具软装”成功','2017-09-04 15:32:25'),(2026,'admin','添加导航“综合建材”成功','2017-09-04 15:32:31'),(2027,'admin','添加导航“家用电器”成功','2017-09-04 15:32:54'),(2028,'admin','登录成功','2017-09-04 15:36:28'),(2029,'admin','编辑权限“超级管理员”成功','2017-09-04 15:36:36'),(2030,'admin','添加优惠券失败','2017-09-04 15:49:17'),(2031,'admin','添加优惠券失败','2017-09-04 15:50:43'),(2032,'admin','添加优惠券“123”成功','2017-09-04 16:05:20'),(2033,'admin','添加优惠券“123”成功','2017-09-04 16:08:26'),(2034,'admin','编辑优惠券“1231613”成功','2017-09-04 16:08:53'),(2035,'admin','删除优惠券“1231613”成功','2017-09-04 16:09:45'),(2036,'admin','批量删除优惠券成功','2017-09-04 16:09:54'),(2037,'admin','添加优惠券“123456”成功','2017-09-04 17:49:31'),(2038,'admin','登录成功','2017-09-05 09:53:58'),(2039,'admin','添加优惠券“测试”成功','2017-09-05 09:56:27'),(2040,'admin','编辑优惠券“优惠卷”成功','2017-09-05 09:57:49'),(2041,'admin','登录成功','2017-09-05 10:04:25'),(2042,'admin','编辑“PC端主页背景色”成功','2017-09-05 10:39:46'),(2043,'admin','编辑优惠券“优惠卷”成功','2017-09-05 13:26:28'),(2044,'admin','编辑优惠券“优惠卷”成功','2017-09-05 13:29:43'),(2045,'admin','添加优惠券“联邦”成功','2017-09-05 13:31:29'),(2046,'admin','编辑优惠券“优惠卷”成功','2017-09-05 13:31:52'),(2047,'admin','编辑优惠券“联邦”失败','2017-09-05 13:32:06'),(2048,'admin','编辑优惠券“优惠卷”失败','2017-09-05 13:33:24'),(2049,'admin','编辑优惠券“优惠卷”失败','2017-09-05 13:33:38'),(2050,'admin','编辑优惠券“优惠卷”失败','2017-09-05 13:34:28'),(2051,'admin','编辑优惠券“优惠卷”成功','2017-09-05 13:36:08'),(2052,'admin','编辑优惠券“优惠卷”失败','2017-09-05 13:36:25'),(2053,'admin','编辑优惠券“联邦”失败','2017-09-05 13:37:40'),(2054,'admin','编辑优惠券“优惠卷”成功','2017-09-05 13:54:12'),(2055,'admin','编辑优惠券“联邦”成功','2017-09-05 13:54:54'),(2056,'admin','编辑优惠券“联邦”成功','2017-09-05 13:55:02'),(2057,'admin','添加优惠券“3D木门”成功','2017-09-05 13:56:33'),(2058,'admin','添加优惠券“朗格尔”成功','2017-09-05 13:57:40'),(2059,'admin','添加优惠券“依诺瓷砖”成功','2017-09-05 14:01:10'),(2060,'admin','添加优惠券“海尔”成功','2017-09-05 14:02:04'),(2061,'admin','添加优惠券“圣象地板”成功','2017-09-05 14:02:48'),(2062,'admin','添加优惠券“安华卫浴”成功','2017-09-05 14:03:27'),(2063,'admin','编辑“PC端优惠卷背景色”成功','2017-09-05 14:15:07'),(2064,'admin','编辑导航“优惠券”成功','2017-09-05 14:47:48'),(2065,'admin','编辑导航“优惠券”成功','2017-09-05 15:32:37'),(2066,'admin','编辑导航“优惠券”成功','2017-09-05 15:34:47'),(2067,'admin','编辑导航“活动内容”成功','2017-09-05 15:57:38'),(2068,'admin','编辑导航“品牌活动区”成功','2017-09-05 15:57:50'),(2069,'admin','登录成功','2017-09-05 16:06:36'),(2070,'admin','编辑权限“超级管理员”成功','2017-09-05 16:06:42'),(2071,'admin','添加品牌活动失败','2017-09-05 16:33:09'),(2072,'admin','添加品牌活动失败','2017-09-05 16:36:59'),(2073,'admin','编辑品牌活动“987”成功','2017-09-05 16:40:43'),(2074,'admin','编辑品牌活动“987”成功','2017-09-05 16:40:53'),(2075,'admin','编辑导航“活动内容”成功','2017-09-05 16:47:20'),(2076,'admin','添加品牌活动“123”成功','2017-09-05 17:05:20'),(2077,'admin','编辑品牌活动“123”成功','2017-09-05 17:05:39'),(2078,'admin','删除品牌活动“123”成功','2017-09-05 17:16:30'),(2079,'admin','删除品牌活动“987”成功','2017-09-05 17:16:40'),(2080,'admin','编辑导航“品牌活动区”成功','2017-09-05 17:17:06'),(2081,'admin','登录成功','2017-09-05 18:55:49'),(2082,'admin','编辑导航“品牌活动区”成功','2017-09-05 18:55:57'),(2083,'admin','登录成功','2017-09-06 09:27:44'),(2084,'admin','登录成功','2017-09-06 09:27:44'),(2085,'admin','编辑优惠券“依诺瓷砖”成功','2017-09-06 10:36:26'),(2086,'admin','添加优惠券“尚誉”成功','2017-09-06 10:39:01'),(2087,'admin','登录成功','2017-09-07 09:12:30'),(2088,'admin','编辑导航“产品展示”成功','2017-09-07 09:12:46'),(2089,'admin','编辑导航“产品展示”成功','2017-09-07 09:14:16'),(2090,'admin','编辑导航“产品展示”成功','2017-09-07 09:18:38'),(2091,'admin','编辑导航“产品展示”成功','2017-09-07 09:18:48'),(2092,'admin','编辑优惠券“依诺瓷砖”成功','2017-09-07 10:40:02'),(2093,'admin','编辑优惠券“依诺瓷砖”成功','2017-09-07 10:42:00'),(2094,'admin','添加优惠券“123”成功','2017-09-07 10:43:43'),(2095,'admin','登录成功','2017-09-07 15:47:57'),(2096,'admin','编辑“PC端走马灯”图片成功','2017-09-07 15:58:22'),(2097,'admin','编辑分会场失败','2017-09-07 16:02:32'),(2098,'admin','编辑分会场失败','2017-09-07 16:02:40'),(2099,'admin','编辑分会场失败','2017-09-07 16:03:49'),(2100,'admin','编辑分会场失败','2017-09-07 16:06:04'),(2101,'admin','编辑分会场失败','2017-09-07 16:07:04'),(2102,'admin','编辑分会场失败','2017-09-07 16:07:15'),(2103,'admin','编辑分会场失败','2017-09-07 16:07:50'),(2104,'admin','编辑分会场失败','2017-09-07 16:08:58'),(2105,'admin','编辑分会场失败','2017-09-07 16:09:46'),(2106,'admin','编辑分会场失败','2017-09-07 16:10:37'),(2107,'admin','编辑分会场失败','2017-09-07 16:11:29'),(2108,'admin','编辑“”分会场成功','2017-09-07 16:12:19'),(2109,'admin','编辑“”分会场成功','2017-09-07 16:12:43'),(2110,'admin','编辑“”分会场成功','2017-09-07 16:13:42'),(2111,'admin','编辑“”分会场成功','2017-09-07 16:14:16'),(2112,'admin','删除优惠券“123”成功','2017-09-07 16:54:12'),(2113,'admin','登录成功','2017-09-08 09:16:56'),(2114,'admin','添加品牌活动“测试一”成功','2017-09-08 09:18:18'),(2115,'admin','编辑品牌活动“测试一”成功','2017-09-08 09:18:51'),(2116,'admin','添加品牌活动“测试二”成功','2017-09-08 09:20:14'),(2117,'admin','添加品牌活动“测试三”成功','2017-09-08 09:22:09'),(2118,'admin','编辑品牌活动“测试四”成功','2017-09-08 09:24:54'),(2119,'admin','编辑品牌活动“测试五”成功','2017-09-08 09:25:21'),(2120,'admin','编辑品牌活动“测试六”成功','2017-09-08 09:25:41'),(2121,'admin','编辑品牌活动“测试七”成功','2017-09-08 09:26:16'),(2122,'admin','编辑品牌活动“测试八”成功','2017-09-08 09:26:29'),(2123,'admin','编辑品牌活动“测试九”成功','2017-09-08 09:26:44'),(2124,'admin','登录成功','2017-09-08 16:34:54'),(2125,'admin','编辑“PC端标题背景图”图片成功','2017-09-08 16:58:01'),(2126,'admin','编辑“PC端标题背景图”图片失败','2017-09-08 16:59:32'),(2127,'admin','编辑“PC端标题背景图”图片失败','2017-09-08 17:00:31'),(2128,'admin','编辑“PC端标题背景图”图片失败','2017-09-08 17:11:26'),(2129,'admin','编辑“PC端标题背景图”图片失败','2017-09-08 17:12:55'),(2130,'admin','编辑“手机端标题背景图”图片成功','2017-09-08 17:13:17'),(2131,'admin','编辑“手机端标题背景图”图片失败','2017-09-08 17:13:57'),(2132,'admin','编辑“PC端标题背景图”图片成功','2017-09-08 17:32:27'),(2133,'admin','编辑“PC端标题背景图”图片成功','2017-09-08 17:35:43'),(2134,'admin','编辑“手机端标题背景图”图片成功','2017-09-08 18:00:05'),(2135,'admin','登录成功','2017-09-12 11:43:10'),(2136,'admin','登录成功','2017-09-12 15:44:30');

#
# Structure for table "menu"
#

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `menu_title` varchar(255) DEFAULT NULL COMMENT '导航标题',
  `menu_image` varchar(255) DEFAULT NULL COMMENT 'PC端图片',
  `menu_wap_image` varchar(255) DEFAULT NULL COMMENT '手机端图片',
  `menu_link` varchar(255) DEFAULT NULL COMMENT '导航链接地址',
  `menu_level` int(11) DEFAULT NULL COMMENT '子导航的父级id',
  `menu_sort` int(11) DEFAULT NULL COMMENT '排序',
  `menu_show` int(11) DEFAULT NULL COMMENT '是否显示',
  `title` varchar(255) DEFAULT NULL COMMENT 'SEO_网页标题',
  `keywords` text COMMENT 'SEO_网页关键字',
  `description` text COMMENT 'SEO_网页描述',
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=256 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='前台导航';

#
# Data for table "menu"
#

INSERT INTO `menu` VALUES (1,'首页',NULL,NULL,'index.php',0,0,1,'香江家居工厂批发城','香江家居,香江家居工厂批发城','香江家居,香江家居工厂批发城'),(2,'优惠券',NULL,NULL,NULL,0,0,1,'优惠券','优惠券','优惠券'),(3,'产品展示','upload/menu/201708251801315872.png','upload/menu/201708301435049307.png','product.php',0,0,1,'产品展示','产品展示','产品展示'),(4,'品牌活动区',NULL,NULL,NULL,0,0,1,'品牌活动区','品牌活动区','品牌活动区'),(5,'活动内容',NULL,NULL,NULL,0,0,1,'活动内容','活动内容','活动内容'),(244,'厨房卫浴','upload/menu//201709071614162451.jpg','upload/menu//201709071614163692.jpg',NULL,3,0,1,'厨房卫浴','厨房卫浴','厨房卫浴'),(245,'地板木门','upload/menu/201708251743079685.png','upload/menu/201708241729218209.jpg',NULL,3,0,1,'地板木门','地板木门','地板木门'),(246,'家具软装','upload/menu/201708251743208372.png','upload/menu/201708241729451497.jpg',NULL,3,0,1,'家具软装','家具软装','家具软装'),(247,'综合建材','upload/menu/201708251743348435.png','upload/menu/201708241730213787.jpg',NULL,3,0,1,'综合建材','综合建材','综合建材'),(248,'厨卫家电','upload/menu/201708251754563932.png','upload/menu/20170824173033102.jpg',NULL,3,0,1,'厨卫家电','厨卫家电','厨卫家电'),(251,'厨房卫浴',NULL,NULL,NULL,2,0,1,'厨房卫浴','厨房卫浴','厨房卫浴'),(252,'地板木门',NULL,NULL,NULL,2,0,1,'地板木门','地板木门','地板木门'),(253,' 家具软装',NULL,NULL,NULL,2,0,1,' 家具软装',' 家具软装',' 家具软装'),(254,'综合建材',NULL,NULL,NULL,2,0,1,'综合建材','综合建材','综合建材'),(255,'家用电器',NULL,NULL,NULL,2,0,1,'家用电器','家用电器','家用电器');

#
# Structure for table "power"
#

CREATE TABLE `power` (
  `power_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `power_name` varchar(255) DEFAULT NULL COMMENT '权限名称',
  `power_remarks` varchar(255) DEFAULT NULL COMMENT '权限备注',
  `power_sign` int(11) DEFAULT NULL COMMENT '权限识别编号',
  `power_content` text COMMENT '权限内容',
  PRIMARY KEY (`power_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='后台权限';

#
# Data for table "power"
#

INSERT INTO `power` VALUES (1,'超级管理员','所有权限并无法删除',1,'1,2,3,4,5,20,21,75,90,80,31,40,41,50,53,70,110,100,130,140,22,120'),(2,'高级管理员','无删除管理员权限',2,'1,2,20,21,22,23,24,25,26,27,40,41,50,51,52,53,54,70,80,81,100,101,102,103,120,140,160,161'),(3,'普通管理员','无修改和删除管理员权限',3,'40,41');

#
# Structure for table "product"
#

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `product_title` varchar(255) DEFAULT NULL COMMENT '产品标题',
  `product_logo` varchar(255) DEFAULT NULL COMMENT '品牌LOGO',
  `product_logo_title` varchar(255) DEFAULT NULL COMMENT '品牌LOGO名称',
  `product_image` varchar(255) DEFAULT NULL COMMENT '封面图片',
  `product_price` varchar(255) DEFAULT NULL COMMENT '工厂批发价',
  `product_sell` varchar(255) DEFAULT NULL COMMENT '限时价',
  `product_content` text COMMENT '商品描述',
  `product_time` timestamp NULL DEFAULT NULL COMMENT '开始时间',
  `product_end` datetime DEFAULT NULL COMMENT '结束时间',
  `product_level` int(11) DEFAULT NULL COMMENT '父级id（分类）',
  `product_sort` int(11) DEFAULT NULL COMMENT '置顶',
  `product_show` int(11) DEFAULT NULL COMMENT '推荐',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='产品表';

#
# Data for table "product"
#

INSERT INTO `product` VALUES (47,'嘉利豪园 [长宁-动物园 虹井路888号]','upload/product/201708241040304212.jpg',NULL,'upload/product/201708241040306563.jpg','12.6元','13.6元','嘉利豪园 [长宁-动物园 虹井路888号]','2017-08-25 11:08:00','2017-09-02 11:09:00',244,1,1),(48,'89㎡ 简约设计复式住宅','upload/product/201708241043525207.jpg','品牌名称','upload/product/201708241043522883.jpg','123元','0.1元','俐落简洁的空间线条，刻划出高雅细致的独特品味。','2017-08-25 10:08:00','2017-09-09 11:09:00',244,1,1),(49,'客厅与餐厅形成一个四平八稳的格局，通透，互动，有很强的空间感。','upload/product/201708241139255671.jpg',NULL,'upload/product/201708241139253691.jpg','15元','13元','客厅与餐厅形成一个四平八稳的格局，通透，互动，有很强的空间感。','2017-08-24 11:08:00','2017-09-09 11:08:00',244,0,1),(50,'次卧简洁明了，床对面的电视柜嵌入衣柜结合成一个整体。','upload/product/201708301002495878.jpg',NULL,'upload/product/201708301002507807.jpg','1000元','120元','次卧简洁明了，床对面的电视柜嵌入衣柜结合成一个整体。',NULL,'2017-09-09 10:08:00',244,0,1),(51,'木皮自墙面曼延到天花板','upload/product/201708301004045508.jpg',NULL,'upload/product/201708301004047992.jpg','1500元','150元','木皮自墙面曼延到天花板',NULL,'2017-09-08 10:08:00',244,0,1),(52,'一并消弭经过的梁线','upload/product/201708301009429928.jpg',NULL,'upload/product/201708301009429412.jpg','130元','120元','一并消弭经过的梁线',NULL,'2017-08-30 10:08:00',244,0,1),(53,'透过温润的表面质感','upload/product/201708301010384967.jpg',NULL,'upload/product/201708301010384796.jpg','1500元','1400元','透过温润的表面质感',NULL,'2017-08-30 10:08:00',244,0,0),(54,'展现出自然的叶脉造型','upload/product/201708301012158015.jpg',NULL,'upload/product/201708301012155287.jpg','140元','130元','展现出自然的叶脉造型',NULL,'2017-09-09 10:08:00',245,0,0),(55,'配合各居室主题来打造','upload/product/201708301013425907.png',NULL,'upload/product/201708301013422127.jpg','1360元','1330元','配合各居室主题来打造',NULL,'2017-09-09 10:08:00',245,0,1),(56,'木皮自墙面曼延到天花板','upload/product/201708301015008231.jpg',NULL,'upload/product/201708301015009340.jpg','1200元','1100元','木皮自墙面曼延到天花板',NULL,'2017-09-09 10:08:00',245,0,1),(57,'展现出自然的叶脉造型','upload/product/201708301016236663.jpg',NULL,'upload/product/201708301016238741.jpg','120元','110元','展现出自然的叶脉造型',NULL,'2017-09-09 10:09:00',245,0,1),(58,'展现出自然的叶脉造型','upload/product/201708301017351060.jpg',NULL,'upload/product/201708301017356761.jpg','120元','110元','展现出自然的叶脉造型',NULL,'2017-09-09 10:17:00',245,0,1),(59,'透过温润的表面质感','upload/product/201708301018196803.jpg',NULL,'upload/product/201708301018198787.jpg','140元','130元','透过温润的表面质感',NULL,'2017-09-09 10:18:00',245,0,1),(60,'一并消弭经过的梁线','upload/product/201708301018559795.png',NULL,'upload/product/201708301018556414.jpg','120元','110元','一并消弭经过的梁线',NULL,'2017-09-09 10:18:00',245,0,1),(61,'刻意挑选现代风格家具和家饰','upload/product/201708301019558631.jpg',NULL,'upload/product/201708301019559601.jpg','1200元','1000元','刻意挑选现代风格家具和家饰',NULL,'2017-09-09 10:19:00',246,0,1),(62,'以金属亮面质材的摩登前卫','upload/product/201708301020305224.jpg',NULL,'upload/product/201708301020305996.jpg','1888元','1666元','以金属亮面质材的摩登前卫',NULL,'2017-09-09 10:20:00',246,0,1),(63,'平衡古典的浓郁僵化','upload/product/201708301021165513.jpg',NULL,'upload/product/201708301021169898.jpg','1588元','1388元','平衡古典的浓郁僵化',NULL,'2017-09-09 10:21:00',246,0,1),(64,'增加空间的变化性','upload/product/201708301021578782.jpg',NULL,'upload/product/201708301021574727.jpg','1288元','1188元','增加空间的变化性',NULL,'2017-09-09 10:21:00',246,0,1),(65,'墙面铺贴石皮美耐板','upload/product/201708301022341215.jpg',NULL,'upload/product/201708301022349284.jpg','1500元','1488元','墙面铺贴石皮美耐板',NULL,'2017-09-09 10:22:00',246,0,1),(66,'搭配立柱式展示层架','upload/product/201708301025249633.jpg',NULL,'upload/product/201708301025242970.jpg','1588元','1488元','搭配立柱式展示层架',NULL,'2017-09-09 10:25:00',246,0,1),(67,'东方御花园二期 [闵行-古美罗阳 龙茗路513弄','upload/product/201708301032279616.jpg',NULL,'upload/product/201708301032277603.jpg','1288元','1266元','东方御花园二期 [闵行-古美罗阳 龙茗路513弄',NULL,'2017-09-09 10:32:00',247,0,1),(68,'石材的马赛克结合灰镜饰面','upload/product/20170830103306506.jpg',NULL,'upload/product/201708301033063976.jpg','1588元','1288元','石材的马赛克结合灰镜饰面',NULL,'2017-09-09 10:33:00',247,0,1),(69,'整个电视机背景墙看起来现代感十足','upload/product/201708301034017580.jpg',NULL,'upload/product/201708301034016546.jpg','12588元','0.1元','整个电视机背景墙看起来现代感十足',NULL,'2017-09-09 10:33:00',247,0,1),(70,'强烈的视觉感','upload/product/201708301038429675.jpg',NULL,'upload/product/201708301035012345.jpg','1588元','1288元','强烈的视觉感',NULL,'2017-09-09 10:09:00',247,0,1),(71,'整个电视机背景墙看起来现代感十足','upload/product/201708301035539945.jpg',NULL,'upload/product/201708301035542524.jpg','1288元','1266元','整个电视机背景墙看起来现代感十足',NULL,'2017-09-09 10:35:00',247,0,1),(72,'光面跟糙面的对比','upload/product/20170901102501450.png',NULL,'upload/product/201708301036443212.jpg','1588元','1388元','光面跟糙面的对比',NULL,'2017-09-09 10:09:00',247,0,1),(73,'整个空间看起来非常的整洁','upload/product/201708301037383087.jpg',NULL,'upload/product/201708301037386262.jpg','1288元','1188元','整个空间看起来非常的整洁',NULL,'2017-09-09 10:37:00',248,0,1),(74,'在书桌的另外一边，一整排的书柜','upload/product/20170830103822592.png',NULL,'upload/product/201708301038227921.jpg','1258元','1266元','在书桌的另外一边，一整排的书柜',NULL,'2017-09-09 10:38:00',248,0,1),(75,'成了收藏孩子玩具的一个小小天地','upload/product/201708301039202371.jpg',NULL,'upload/product/201708301039202287.jpg','1258元','1166元','成了收藏孩子玩具的一个小小天地',NULL,'2017-09-09 10:39:00',248,0,1),(76,'次卧室的阳台，变成了一个小小的书房','upload/product/201708301040117844.jpg',NULL,'upload/product/201708301040116413.jpg','1288元','0.1元','次卧室的阳台，变成了一个小小的书房',NULL,'2017-09-09 10:40:00',248,0,1),(77,'光线，视野都是极其好的','upload/product/201708301040565090.jpg',NULL,'upload/product/20170830104056110.jpg','18888元','0.88元','光线，视野都是极其好的',NULL,'2017-09-09 10:40:00',248,0,1),(78,'黑色的墙砖与白色的橱柜柜门形成了强烈的颜色对比','upload/product/201708301041461491.png',NULL,'upload/product/201708301041461978.jpg','12666元','888元','黑色的墙砖与白色的橱柜柜门形成了强烈的颜色对比',NULL,'2017-09-09 10:41:00',248,0,1),(79,'123','upload/product/201709011011396382.png',NULL,'upload/product/201709010925006193.png','12元','0.1',NULL,NULL,'2017-11-11 18:00:00',244,1,1);

#
# Structure for table "scene"
#

CREATE TABLE `scene` (
  `scene_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `scene_title` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '标题',
  `scene_image` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '图片',
  `scene_sort` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`scene_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC COMMENT='现场热图';

#
# Data for table "scene"
#

INSERT INTO `scene` VALUES (27,'现场热图01','upload/scene/20170823120002479.jpg',0),(28,'现场热图02','upload/scene/201708231200177053.jpg',0),(32,'现场热图03','upload/scene/201708231200306817.jpg',0),(33,'现场热图04','upload/scene/201708231200459065.jpg',0);

#
# Structure for table "script"
#

CREATE TABLE `script` (
  `script_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `script_title` varchar(255) DEFAULT NULL COMMENT '标题',
  `script_content` text COMMENT '内容',
  `script_level` int(11) DEFAULT NULL COMMENT '分类',
  PRIMARY KEY (`script_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='脚本模块';

#
# Data for table "script"
#

INSERT INTO `script` VALUES (1,'例子','',1);

#
# Structure for table "user"
#

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `user_name` varchar(255) DEFAULT NULL COMMENT '用户名',
  `user_password` varchar(255) DEFAULT NULL COMMENT '用户密码',
  `user_add` varchar(255) DEFAULT NULL,
  `user_encryption` varchar(255) DEFAULT NULL,
  `user_power` int(11) DEFAULT NULL COMMENT '用户权限',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='管理员表';

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'admin','8fc7c9eddedd3d4073900993da93bd9d','&#38113;&#25846;&#28752;&#30432;','&#35507;&#20148;&#36088;&#31817;',1),(2,'123456','090ffd83bb9e2c45376b7980f2875749','&#35008;&#25474;&#24469;&#24370;','&#25024;&#25420;&#35611;&#38340;',2),(3,'123','fa2b5a428a351e9aeb62bbf5564d6180','&#34528;&#30669;&#21132;&#31606;','&#35159;&#37963;&#38969;&#22878;',3);
