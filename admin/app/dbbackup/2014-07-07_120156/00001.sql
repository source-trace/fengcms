DROP TABLE IF EXISTS `f_base`;
CREATE TABLE `f_base` (
  `name` varchar(255) default NULL COMMENT '网站名称',
  `title` varchar(255) default NULL COMMENT '网站标题',
  `domran` varchar(255) default NULL COMMENT '网站域名',
  `copyright` text COMMENT '网站版权',
  `key` varchar(255) default NULL COMMENT '网站关键词',
  `description` varchar(255) default NULL COMMENT '网站描述',
  `template` varchar(255) default NULL COMMENT '模板',
  `time` varchar(15) default NULL COMMENT '修改时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='网站基本';
insert into `f_base`(`name`,`title`,`domran`,`copyright`,`key`,`description`,`template`,`time`) values('FengCms','FengCms 打造最简单的网站内容管理系统','www.fengcms.com','Copyright 20013-2015 Powered by FengCms.COM，地方网络工作室 All Rights Reserved.<br />地方网络工作室 版权所有 未经许可严禁复制或建立镜像 <br />版本号：FengCms Beta 1.0','测试,文章系统,文章','我的站描述','/index.html','1383976418');
DROP TABLE IF EXISTS `f_manage`;
CREATE TABLE `f_manage` (
  `id` int(11) NOT NULL auto_increment,
  `admin` varchar(255) default NULL COMMENT '用户名',
  `password` varchar(32) default NULL COMMENT '密码',
  `datetime` datetime default NULL COMMENT '登录时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='管理员';
insert into `f_manage`(`id`,`admin`,`password`,`datetime`) values('1','admin','c56d0e9a7ccec67b4ea131655038d604','2013-09-27 15:57:35');
DROP TABLE IF EXISTS `f_module`;
CREATE TABLE `f_module` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) default NULL COMMENT '名称',
  `project` varchar(30) default NULL COMMENT '数据表名',
  `type` int(2) default '1' COMMENT '类型（0系统、1字定义）',
  `item` varchar(50) default NULL COMMENT '项目',
  `unit` varchar(10) default NULL COMMENT '单位',
  `description` varchar(255) default NULL COMMENT '描述',
  `recover` int(1) default '0' COMMENT '回收站（0未启用，1启用）',
  `search` int(1) default '0' COMMENT '搜索（0未启用，1已启用）',
  `status` int(1) default '1' COMMENT '状态（-1未开启，0已开启，1系统）',
  `time` int(11) default NULL COMMENT '时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='模型';
insert into `f_module`(`id`,`name`,`project`,`type`,`item`,`unit`,`description`,`recover`,`search`,`status`,`time`) values('1','单页系统','single','0','单页','页','-','0','0','1','1383190188');
insert into `f_module`(`id`,`name`,`project`,`type`,`item`,`unit`,`description`,`recover`,`search`,`status`,`time`) values('2','关键词管理','tags','0','关键词','条','系统自带关键词','0','0','1','1382423598');
insert into `f_module`(`id`,`name`,`project`,`type`,`item`,`unit`,`description`,`recover`,`search`,`status`,`time`) values('3','作者管理','author','0','作者','条','系统自带作者','0','0','1','1382423598');
insert into `f_module`(`id`,`name`,`project`,`type`,`item`,`unit`,`description`,`recover`,`search`,`status`,`time`) values('4','编辑管理','inputer','0','编辑','条','系统自带编辑','0','0','1','1382423598');
insert into `f_module`(`id`,`name`,`project`,`type`,`item`,`unit`,`description`,`recover`,`search`,`status`,`time`) values('5','来源管理','origin','0','来源','条','系统自带来源','0','0','1','1382423598');
insert into `f_module`(`id`,`name`,`project`,`type`,`item`,`unit`,`description`,`recover`,`search`,`status`,`time`) values('6','友情链接','friend','0','链接','条','-','0','0','1','1383891991');
insert into `f_module`(`id`,`name`,`project`,`type`,`item`,`unit`,`description`,`recover`,`search`,`status`,`time`) values('7','文章系统','article','1','文章','篇','-','1','1','1','1384154903');
DROP TABLE IF EXISTS `f_module_field`;
CREATE TABLE `f_module_field` (
  `id` int(11) NOT NULL auto_increment,
  `module_id` int(11) default NULL COMMENT '模块ID',
  `sort` int(11) default '0' COMMENT '排序',
  `name` varchar(50) default NULL COMMENT '名称',
  `aliases` varchar(50) default NULL COMMENT '别名',
  `type` int(11) default NULL COMMENT '类型',
  `defaults` varchar(255) default NULL COMMENT '默认',
  `must` int(1) default '0' COMMENT '是否为必填',
  `length` varchar(50) default '0-255' COMMENT '限制长度',
  `enable` int(1) default '0' COMMENT '后台是否启用',
  `search` int(1) default '0' COMMENT '是否启用检索（0不启用，1启用）',
  `nullmsg` varchar(100) default NULL COMMENT '为空提示',
  `errormsg` varchar(100) default NULL COMMENT '格式错误提示',
  `time` int(11) default NULL COMMENT '操作时间',
  `status` int(1) default '1' COMMENT '是否启用',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='字段';
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('1','1','1','title','标题','1',NULL,'1','0-255','1','1',NULL,NULL,'1383190405','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('2','1','2','classid','栏目','2',NULL,'0','0-255','1','0',NULL,NULL,'1383190405','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('3','1','3','tags','关键词','4',NULL,'0','0-255','0','0',NULL,NULL,'1383190405','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('4','1','4','content','内容','9',NULL,'1','0-255','0','0',NULL,NULL,'1383190405','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('5','1','5','template','模板','11',NULL,'0','0-255','0','0',NULL,NULL,'1383190405','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('6','1','6','date','日期','12',NULL,'0','0-255','0','0',NULL,NULL,'1383190405','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('7','1','7','status','状态','15','1','0','1-1','1','0',NULL,NULL,'1383190405','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('8','1','8','html','地址','16',NULL,'0','0-255','0','0',NULL,NULL,'1383190405','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('9','2','1','name','名称','17',NULL,'1','2-50','1','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('10','2','2','hits','热度','14','1','0','0-255','0','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('11','2','3','time','时间','13',NULL,'0','0-255','0','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('12','2','4','status','状态','15','1','0','1-1','0','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('13','3','1','name','名称','17',NULL,'1','2-30','1','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('14','3','2','url','链接','24','http://','0',NULL,'1','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('15','3','3','hits','热度','14',NULL,'0','0-255','0','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('16','3','4','time','时间','13',NULL,'0','0-255','0','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('17','3','5','status','状态','15','1','0','1-1','0','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('18','4','1','name','名称','17',NULL,'1','2-30','1','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('19','4','2','url','链接','24','http://','0',NULL,'1','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('20','4','3','hits','热度','14',NULL,'0','0-255','0','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('21','4','4','time','时间','13',NULL,'0','0-255','0','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('22','4','5','status','状态','15','1','0','1-1','0','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('23','5','1','name','名称','17',NULL,'1','2-30','1','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('24','5','2','url','链接','24','http://','0',NULL,'1','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('25','5','3','hits','热度','14',NULL,'0','0-255','0','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('26','5','4','time','时间','13',NULL,'0','0-255','0','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('27','5','5','status','状态','15','1','0','1-1','0','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('28','6','1','name','名称','17',NULL,'1','1-255','1','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('29','6','2','url','地址','24','http://','1','1-255','1','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('30','6','3','time','时间','13','1','0','1-1','1','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('31','6','4','status','状态','15','1','1','1-255','0','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('32','7','1','title','标题','1',NULL,'1','1-255','1','1',NULL,NULL,'1384589297','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('33','7','9','info','导读','8',NULL,'0','0-255','0','0',NULL,NULL,'1384589297','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('34','7','10','content','内容','9',NULL,'0','0-255','0','0',NULL,NULL,'1384589297','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('35','7','11','img','图片','10',NULL,'0','0-255','0','0',NULL,NULL,'1384589297','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('36','7','12','time','时间','13',NULL,'0','0-255','0','0',NULL,NULL,'1384589297','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('37','7','13','status','状态','15','1','0','1-1','1','0',NULL,NULL,'1384589297','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('38','7','14','html','地址','16',NULL,'0','6-50','0','0',NULL,NULL,'1384589297','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('39','7','2','classid','栏目','2',NULL,'0','0-255','1','0',NULL,NULL,'1384589297','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('40','7','3','attrib','属性','3',NULL,'0','0-255','1','0',NULL,NULL,'1384589297','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('41','7','4','tags','关键词','4',NULL,'0','0-255','0','0',NULL,NULL,'1384589297','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('42','7','5','author','作者','5',NULL,'0','0-255','0','0',NULL,NULL,'1384589297','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('43','7','6','inputer','编辑','6',NULL,'0','0-255','1','0',NULL,NULL,'1384589297','0');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('44','7','7','origin','来源','7',NULL,'0','0-255','0','0',NULL,NULL,'1384589297','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('45','7','15','template','模板','11',NULL,'0','0-255','0','0',NULL,NULL,'1384589297','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('46','7','16','date','日期','12',NULL,'0','0-255','1','0',NULL,NULL,'1384589297','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('53','7','8','hits','热度','14',NULL,'0','0-255','0','0',NULL,NULL,'1384589297','1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('54','1','9','time','时间','13',NULL,'0','0-255','0','0',NULL,NULL,NULL,'1');
insert into `f_module_field`(`id`,`module_id`,`sort`,`name`,`aliases`,`type`,`defaults`,`must`,`length`,`enable`,`search`,`nullmsg`,`errormsg`,`time`,`status`) values('55','1','4','img','图片','10',NULL,'0','0-255','0','0',NULL,NULL,'1384589297','1');
DROP TABLE IF EXISTS `f_module_field_type`;
CREATE TABLE `f_module_field_type` (
  `id` int(11) NOT NULL auto_increment,
  `f` int(1) default '1' COMMENT '分类',
  `name` varchar(50) default NULL COMMENT '名称',
  `class` varchar(50) default NULL COMMENT '类型',
  `verification` varchar(10) default NULL COMMENT '验证方法',
  `quote` varchar(255) default NULL COMMENT '引用',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='字段类型';
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('1','0','标题','title','*','title.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('2','0','栏目','classid',NULL,'classify.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('3','0','属性','attrib',NULL,'attrib.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('4','0','关键词','tags','*','tags.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('5','0','作者','author','s','author.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('6','0','编辑','inputer','s','inputer.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('7','0','来源','origin','s','origin.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('8','0','导读','info','*','info.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('9','0','内容','content','*','content.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('10','0','图片','img','*','img.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('11','0','模板','template','*','template.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('12','0','日期','date',NULL,'date.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('13','0','时间','time','time','time.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('14','0','热度','hits','*','hits.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('15','0','状态','hidden','*','status.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('16','0','html','hidden','*','hidden.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('17','1','万能文本框','text','*','text_w.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('18','1','数字文本框','text','n','text_n.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('19','1','字符串文本框','text','s','text_s.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('20','1','中文文本框','text','z','text_z.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('21','1','邮政编码文本框','text','p','text_p.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('22','1','手机文本框','text','m','text_m.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('23','1','email文本框','text','e','text_e.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('24','1','url文本框','text','url','text_url.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('25','1','文本域','textarea','*','textarea.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('26','1','编辑器','htmledit','*','htmledit.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('27','1','隐藏域','hidden','*','hidden.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('28','1','图片','pic','*','pic.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('29','1','批量图片','batchpic','*','batchpic.html');
insert into `f_module_field_type`(`id`,`f`,`name`,`class`,`verification`,`quote`) values('30','1','上传文件','upfile','*','upfile.html');
