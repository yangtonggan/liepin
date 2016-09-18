layer.layui.com

CREATE TABLE `users` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `name` char(20) NOT NULL COMMENT '用户名',
  `email` varchar(30) DEFAULT NULL COMMENT '邮箱',
  `password` char(60) NOT NULL COMMENT '密码',
  `sex` enum('w','m','x') DEFAULT 'm' COMMENT '性别',
  `uface` varchar(50) DEFAULT NULL COMMENT '头像',
  `birth` int(10) unsigned DEFAULT '0' COMMENT '生日',
  `tel` varchar(15) DEFAULT NULL COMMENT '电话',
  `addr` varchar(100) DEFAULT NULL COMMENT '地址',
  `auth` int(10) unsigned DEFAULT '1' COMMENT '权限,1为普通 用户2为超级管理员',
  `regtime` int(10) unsigned DEFAULT NULL COMMENT '注册时间',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='用户表';

INSERT INTO `users` VALUES (1,'xuanzi','568650567@qq.com','3262759031aad6e1cb8c68de43e933c7',
'w','201607040024554012.jpg',0,NULL,'上海',1,1467563095);

CREATE TABLE IF NOT EXISTS `lp_company` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL COMMENT '联系人ID',
  `city_id` int(11) NOT NULL DEFAULT '1' COMMENT '城市ID',
  `c_name` varchar(60) NOT NULL DEFAULT '' COMMENT '公司名称',
  `c_ename` varchar(30) COMMENT '简称',
  `c_phone` varchar(12) COMMENT '手机号',
  `c_email` varchar(30) COMMENT '公司邮箱',
  `c_address` varchar(60) COMMENT '公司地址',
  `c_type` varchar(50) COMMENT '所属行业',
  `c_label` varchar(100) COMMENT '标签',
  `c_logo` varchar(100) COMMENT '公司Logo',
  `c_size` varchar(25) COMMENT '公司规模',
  `c_step` varchar(20) COMMENT '公司发展阶段',
  `c_pic` varchar(255) COMMENT '公司风采多图',
  `c_site` varchar(40) COMMENT '公司主页',
  `c_time` char(10) COMMENT '注册时间',
  `c_desc` text COMMENT '公司简介',
  `c_proname` varchar(50) COMMENT '产品名称',
  `c_proimg` varchar(40) COMMENT '产品图片',
  `c_proadd` varchar(100) COMMENT '产品地址',
  `c_prodesc` varchar(255) COMMENT '产品简介',
  `c_ad` int(1) NOT NULL DEFAULT '1' COMMENT '是否投放广告1否2是',
  `c_status` int(1) NOT NULL DEFAULT '1' COMMENT '是否锁定1否2是',
  PRIMARY KEY (`c_id`),
  UNIQUE KEY `c_name` (`c_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

--
-- 转存表中的数据 `lp_company`
--

INSERT INTO `lp_company` VALUES 
(1, 1, 1, '杉德1', '杉', '312031231', '11@qq.com', '上海', '移动互联网', '扁平管理,领导好,', '14736927301821.jpg','2000人以上', '成长型','14736927301821.jpg', 'www.sand.com', '1450272273', '技术实力派，境外自由行智能搜索引擎。', 'CRM', '14736927301821.jpg', 'www.baidu.com', '＋无限供应的Lavazza咖啡 ', 1, 1),
(2, 2, 1, '杉德2', '杉', '312031231', '11@qq.com', '上海', '移动互联网', '扁平管理,领导好,', '14736927301821.jpg','2000人以上', '成长型','14736927301821.jpg', 'www.sand.com', '1450272273', '技术实力派，境外自由行智能搜索引擎。', 'CRM', '14736927301821.jpg', 'www.baidu.com', '＋无限供应的Lavazza咖啡 ', 1, 1),
(3, 3, 1, '杉德3', '杉', '312031231', '11@qq.com', '上海', '移动互联网', '扁平管理,领导好,', '14736927301821.jpg','2000人以上', '成长型','14736927301821.jpg', 'www.sand.com', '1450272273', '技术实力派，境外自由行智能搜索引擎。', 'CRM', '14736927301821.jpg', 'www.baidu.com', '＋无限供应的Lavazza咖啡 ', 1, 1),
(4, 4, 1, '杉德4', '杉', '312031231', '11@qq.com', '上海', '移动互联网', '扁平管理,领导好,', '14736927301821.jpg','2000人以上', '成长型','14736927301821.jpg', 'www.sand.com', '1450272273', '技术实力派，境外自由行智能搜索引擎。', 'CRM', '14736927301821.jpg', 'www.baidu.com', '＋无限供应的Lavazza咖啡 ', 1, 1),
(5, 5, 1, '杉德5', '杉', '312031231', '11@qq.com', '上海', '移动互联网', '扁平管理,领导好,', '14736927301821.jpg','2000人以上', '成长型','14736927301821.jpg', 'www.sand.com', '1450272273', '技术实力派，境外自由行智能搜索引擎。', 'CRM', '14736927301821.jpg', 'www.baidu.com', '＋无限供应的Lavazza咖啡 ', 1, 1),
(6, 6, 1, '杉德6', '杉', '312031231', '11@qq.com', '上海', '移动互联网', '扁平管理,领导好,', '14736927301821.jpg','2000人以上', '成长型','14736927301821.jpg', 'www.sand.com', '1450272273', '技术实力派，境外自由行智能搜索引擎。', 'CRM', '14736927301821.jpg', 'www.baidu.com', '＋无限供应的Lavazza咖啡 ', 1, 1),
(7, 7, 1, '杉德7', '杉', '312031231', '11@qq.com', '上海', '移动互联网', '扁平管理,领导好,', '14736927301821.jpg','2000人以上', '成长型','14736927301821.jpg', 'www.sand.com', '1450272273', '技术实力派，境外自由行智能搜索引擎。', 'CRM', '14736927301821.jpg', 'www.baidu.com', '＋无限供应的Lavazza咖啡 ', 1, 1),
(8, 8, 1, '杉德8', '杉', '312031231', '11@qq.com', '上海', '移动互联网', '扁平管理,领导好,', '14736927301821.jpg','2000人以上', '成长型','14736927301821.jpg', 'www.sand.com', '1450272273', '技术实力派，境外自由行智能搜索引擎。', 'CRM', '14736927301821.jpg', 'www.baidu.com', '＋无限供应的Lavazza咖啡 ', 1, 1),
(9, 9, 1, '杉德9', '杉', '312031231', '11@qq.com', '上海', '移动互联网', '扁平管理,领导好,', '14736927301821.jpg','2000人以上', '成长型','14736927301821.jpg', 'www.sand.com', '1450272273', '技术实力派，境外自由行智能搜索引擎。', 'CRM', '14736927301821.jpg', 'www.baidu.com', '＋无限供应的Lavazza咖啡 ', 1, 1),
(10, 10, 1, '杉德10', '杉', '312031231', '11@qq.com', '上海', '移动互联网', '扁平管理,领导好,', '14736927301821.jpg','2000人以上', '成长型','14736927301821.jpg', 'www.sand.com', '1450272273', '技术实力派，境外自由行智能搜索引擎。', 'CRM', '14736927301821.jpg', 'www.baidu.com', '＋无限供应的Lavazza咖啡 ', 1, 1);
