/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : wpa

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-05-30 19:53:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ad
-- ----------------------------
DROP TABLE IF EXISTS `ad`;
CREATE TABLE `ad` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ad_title` varchar(100) DEFAULT NULL,
  `ad_link` varchar(200) DEFAULT NULL,
  `ad_pic` varchar(200) DEFAULT '0',
  `ad_width` int(10) DEFAULT NULL,
  `ad_height` int(10) DEFAULT '0',
  `text` varchar(60) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  `is_show` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ad
-- ----------------------------
INSERT INTO `ad` VALUES ('1', '阿斯顿官方公会', '23455', '4e22def51f84e.jpg', '45', '12', '246', '1310908149', '0');
INSERT INTO `ad` VALUES ('2', '234', '124', '4e22dee17267f.jpg', '12', '12', '24', '1310908129', '0');
INSERT INTO `ad` VALUES ('3', '广告三', '', '4e22df19e15f9.jpg', '0', '0', '', '1310908185', '0');

-- ----------------------------
-- Table structure for cate
-- ----------------------------
DROP TABLE IF EXISTS `cate`;
CREATE TABLE `cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `showorder` smallint(6) NOT NULL,
  `add_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cate
-- ----------------------------
INSERT INTO `cate` VALUES ('2', '校园资讯', '2', '2015-08-01 11:00:00');
INSERT INTO `cate` VALUES ('3', '系统通知', '3', '2015-08-01 11:00:00');

-- ----------------------------
-- Table structure for feedback
-- ----------------------------
DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `tel` varchar(12) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `add_time` int(11) DEFAULT NULL,
  `feedback_reply` text,
  `reply_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of feedback
-- ----------------------------
INSERT INTO `feedback` VALUES ('1', '1111', '234676324', '46y2345@degf.com', '留言1', '　这里是建议投诉专区，您如果有什么好的建议、或者在预约家教中遇到什么问题、以及对我们工作人员服务是否满意、希望易教在哪些方面有所改进，请在这里输入！易教网感谢您的留言，我们将努力做得更好！', null, 'Ok\r\n阿斯顿飞', '1310759411');
INSERT INTO `feedback` VALUES ('2', '1111', '234676324', '46y2345@degf.com', '留言二', '请求时间 : 2011-07-13 15:46:37\r\n用户代理 : Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)\r\n', '1310543299', '可以', '1310759400');
INSERT INTO `feedback` VALUES ('3', '1111', '234676324', '46y2345@degf.com', '爱对方手机', '阿哥看见', '1310757901', '', null);

-- ----------------------------
-- Table structure for forum
-- ----------------------------
DROP TABLE IF EXISTS `forum`;
CREATE TABLE `forum` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  `order` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of forum
-- ----------------------------
INSERT INTO `forum` VALUES ('1', '社区版块一', '1464256297', '3');
INSERT INTO `forum` VALUES ('2', '社区主题一', '1310791831', '2');
INSERT INTO `forum` VALUES ('3', '教师之家', '1310379822', '3');
INSERT INTO `forum` VALUES ('4', '学生社区', '1310379833', '4');
INSERT INTO `forum` VALUES ('5', '英语沙龙', '1310379884', '5');
INSERT INTO `forum` VALUES ('6', '语文专区', '1310379926', '6');
INSERT INTO `forum` VALUES ('7', '数学专区', '1310379951', '7');

-- ----------------------------
-- Table structure for forum_comment
-- ----------------------------
DROP TABLE IF EXISTS `forum_comment`;
CREATE TABLE `forum_comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `reply_content` text,
  `add_time` int(11) DEFAULT NULL,
  `userid` int(10) DEFAULT '0',
  `user_type` int(10) DEFAULT '0',
  `info_id` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of forum_comment
-- ----------------------------
INSERT INTO `forum_comment` VALUES ('4', '很好很强大', null, '2', '1', '2');
INSERT INTO `forum_comment` VALUES ('6', '再发一条', null, '0', '1', '2');
INSERT INTO `forum_comment` VALUES ('7', 'go..........', null, '4', '1', '2');
INSERT INTO `forum_comment` VALUES ('8', '最后一次\r\n', null, '6', '1', '2');
INSERT INTO `forum_comment` VALUES ('9', '还来一次', null, '7', '1', '2');
INSERT INTO `forum_comment` VALUES ('10', '时间测试', '1310387782', '2', '1', '2');
INSERT INTO `forum_comment` VALUES ('11', 'sdfkhal;sdkho;', '1310388661', '2', '1', '7');
INSERT INTO `forum_comment` VALUES ('12', '沙发。。。。', '1310388724', '2', '1', '4');
INSERT INTO `forum_comment` VALUES ('15', 'h001又来回复', '1310794997', '2', '2', '4');
INSERT INTO `forum_comment` VALUES ('16', '3456', '1310962316', '12', '1', '4');
INSERT INTO `forum_comment` VALUES ('17', 'asdsda', '1464255244', '4', '2', '13');
INSERT INTO `forum_comment` VALUES ('18', 'asdasd', '1464255246', '4', '2', '13');
INSERT INTO `forum_comment` VALUES ('19', 'asdaqweqweqwe', '1464255248', '4', '2', '13');
INSERT INTO `forum_comment` VALUES ('20', '123456653', '1464255252', '4', '2', '13');

-- ----------------------------
-- Table structure for forum_post
-- ----------------------------
DROP TABLE IF EXISTS `forum_post`;
CREATE TABLE `forum_post` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `content` text,
  `add_time` int(11) DEFAULT NULL,
  `is_top` tinyint(1) DEFAULT '0',
  `is_hot` tinyint(1) DEFAULT '0',
  `is_verify` tinyint(1) DEFAULT '0',
  `userid` int(10) DEFAULT '0',
  `user_type` int(10) DEFAULT '0',
  `forum_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of forum_post
-- ----------------------------
INSERT INTO `forum_post` VALUES ('1', '社区帖子一', '社区帖子一内容', '35', '1', '0', '1', '1', '0', '1');
INSERT INTO `forum_post` VALUES ('2', '社区帖子二', '社区帖子二内容', '123456', '0', '0', '1', '9', '1', '1');
INSERT INTO `forum_post` VALUES ('3', '主题帖子一', '主题帖子一内容', '1245', '1', '1', '0', '3', '0', '2');
INSERT INTO `forum_post` VALUES ('4', 'test', 'aestj', '0', '1', '1', '0', '2', '1', '2');
INSERT INTO `forum_post` VALUES ('6', '孩子就不好多说话', '父母对孩子的教育，何尝想过方法和技巧，以为全心全意为他们考虑，就会获得孩子的认同，非也！他们有几个真正能懂父母的心，他们只不过把父母当做危险时的保护神，开心时的伙伴，生气时的出气筒罢了，因为他们只是孩子！\r\n教育是一门艺术，每一个父母，当你们在埋怨教师教育方法不好时，你是否想过，你才是他最早、', '1310388563', '1', '0', '0', '1', '2', '1');
INSERT INTO `forum_post` VALUES ('7', '父母对孩子的教育', '第三个秘决是注意孩子的反应与态度。现代父母由于工作忙碌，在和孩子说话时，常常会急着表示自己的意见和指示，期望孩子乖乖照自己的话做，最好不要有意见。所以，往往没有很仔细地把孩子的话听完，也忽略了孩子的反应。但是和孩子说话时，如果不了解他们的想法及立场，而让孩子感觉与父母沟通会令他不舒服，他们自然而然会避免接触，凡事不愿意向父母透露，亲子间的代沟必然越来越深。 \r\n\r\n第四个秘决是体会孩子感受。当孩子在外面受了委屈，与好朋友或心爱的宠物分离时，他细腻的小心灵会难过半天。假如这个时候孩子向父母哭诉，父母却只是一味地告诉他“没关系，坚强一点”“这没什么好难过的”“你真没用，还敢哭”，会让孩子觉得父母一点都不能体会他的感受。若父母能以同情和理解的态度对待孩子，适时安抚他、给予些亲情慰藉，相信会有截然不同的效果。 \r\n\r\n第五个秘决是了解孩子的发展有度。明白孩子的发展程度相当重要，因为如果父母尽说些孩子无法理解的话，或提出一些孩子达不到的要求，相信不但孩子觉得辛苦，压力大，亲子间对话也势必难以搭得上线。 \r\n\r\n第六个秘决是回答孩子的问话。孩子提出问题时，应先了解其真正含意，并针对孩子的需要做回答。例如孩子问：“妈妈，你要不要去买菜？”这个问题的真正意义其实是：“妈妈，我想跟你一起去买菜。”假如你知道孩子的真正目的，就可以说；“要啊！你要不要一起去？”孩子听了必定会很高兴。 此外，对于孩子所提的知识性问题，父母也要慎重回答，或带着孩子一起寻找答案。这样，孩子以后不论碰到什么问题，都会主动向父母询问。 \r\n\r\n第七个秘决是避免用“我命令你......”，“我警告你......”，“你最好赶快......”，“你真答”，“你太让我失望了”等带有指挥、命令、警告、威胁、责备、谩骂、拒绝等负面意义的说话语气。 \r\n\r\n第八个秘决是经常变换新鲜的话题，引起孩子的兴趣。例如：“你猜猜看今天我发生的什么事？”“你知不知道为什么小孩子最喜欢恐龙？”“如果有一天，太空人真的来到地球......”等话题，相信会比“今天过得好不好？”“快乐不快乐？”更吸引孩子。 \r\n\r\n第九个秘决是充实孩子的生活经验。亲子对话的题材，往往来自生活之中，因此培养孩子一颗敏锐好奇的心是很重要的。父母可以带领孩子观察身边的各种事物，如一花一草一木，路上车子的颜色、造型、品牌，街上行人的穿着打扮，说话内容（百货橱窗、林林总总）都可以成为谈话的素材。善用你的巧思去开发吧！\r\n\r\n', '1310388640', '0', '0', '0', '2', '1', '1');
INSERT INTO `forum_post` VALUES ('8', '特哦阿斯顿飞', '如粪土', '1310442964', '1', '0', '1', '0', '0', '4');
INSERT INTO `forum_post` VALUES ('10', 'BBS', 'ok', '1310793442', '0', '1', '1', '0', '0', '5');
INSERT INTO `forum_post` VALUES ('13', 'asdasd112312312312', '3123123123', '1464255237', '1', '0', '0', '4', '2', '1');
INSERT INTO `forum_post` VALUES ('14', '社区帖子一', '社区帖子一内容', '35', '1', '0', '1', '1', '0', '1');
INSERT INTO `forum_post` VALUES ('15', '社区帖子二', '社区帖子二内容', '123456', '0', '0', '1', '9', '1', '1');
INSERT INTO `forum_post` VALUES ('16', '主题帖子一', '主题帖子一内容', '1245', '1', '1', '0', '3', '0', '2');
INSERT INTO `forum_post` VALUES ('17', 'test', 'aestj', '0', '1', '1', '0', '2', '1', '2');
INSERT INTO `forum_post` VALUES ('18', '孩子就不好多说话', '父母对孩子的教育，何尝想过方法和技巧，以为全心全意为他们考虑，就会获得孩子的认同，非也！他们有几个真正能懂父母的心，他们只不过把父母当做危险时的保护神，开心时的伙伴，生气时的出气筒罢了，因为他们只是孩子！\r\n教育是一门艺术，每一个父母，当你们在埋怨教师教育方法不好时，你是否想过，你才是他最早、', '1310388563', '1', '0', '0', '1', '2', '1');
INSERT INTO `forum_post` VALUES ('19', '父母对孩子的教育', '第三个秘决是注意孩子的反应与态度。现代父母由于工作忙碌，在和孩子说话时，常常会急着表示自己的意见和指示，期望孩子乖乖照自己的话做，最好不要有意见。所以，往往没有很仔细地把孩子的话听完，也忽略了孩子的反应。但是和孩子说话时，如果不了解他们的想法及立场，而让孩子感觉与父母沟通会令他不舒服，他们自然而然会避免接触，凡事不愿意向父母透露，亲子间的代沟必然越来越深。 \r\n\r\n第四个秘决是体会孩子感受。当孩子在外面受了委屈，与好朋友或心爱的宠物分离时，他细腻的小心灵会难过半天。假如这个时候孩子向父母哭诉，父母却只是一味地告诉他“没关系，坚强一点”“这没什么好难过的”“你真没用，还敢哭”，会让孩子觉得父母一点都不能体会他的感受。若父母能以同情和理解的态度对待孩子，适时安抚他、给予些亲情慰藉，相信会有截然不同的效果。 \r\n\r\n第五个秘决是了解孩子的发展有度。明白孩子的发展程度相当重要，因为如果父母尽说些孩子无法理解的话，或提出一些孩子达不到的要求，相信不但孩子觉得辛苦，压力大，亲子间对话也势必难以搭得上线。 \r\n\r\n第六个秘决是回答孩子的问话。孩子提出问题时，应先了解其真正含意，并针对孩子的需要做回答。例如孩子问：“妈妈，你要不要去买菜？”这个问题的真正意义其实是：“妈妈，我想跟你一起去买菜。”假如你知道孩子的真正目的，就可以说；“要啊！你要不要一起去？”孩子听了必定会很高兴。 此外，对于孩子所提的知识性问题，父母也要慎重回答，或带着孩子一起寻找答案。这样，孩子以后不论碰到什么问题，都会主动向父母询问。 \r\n\r\n第七个秘决是避免用“我命令你......”，“我警告你......”，“你最好赶快......”，“你真答”，“你太让我失望了”等带有指挥、命令、警告、威胁、责备、谩骂、拒绝等负面意义的说话语气。 \r\n\r\n第八个秘决是经常变换新鲜的话题，引起孩子的兴趣。例如：“你猜猜看今天我发生的什么事？”“你知不知道为什么小孩子最喜欢恐龙？”“如果有一天，太空人真的来到地球......”等话题，相信会比“今天过得好不好？”“快乐不快乐？”更吸引孩子。 \r\n\r\n第九个秘决是充实孩子的生活经验。亲子对话的题材，往往来自生活之中，因此培养孩子一颗敏锐好奇的心是很重要的。父母可以带领孩子观察身边的各种事物，如一花一草一木，路上车子的颜色、造型、品牌，街上行人的穿着打扮，说话内容（百货橱窗、林林总总）都可以成为谈话的素材。善用你的巧思去开发吧！\r\n\r\n', '1310388640', '0', '0', '0', '2', '1', '1');
INSERT INTO `forum_post` VALUES ('20', '特哦阿斯顿飞', '如粪土', '1310442964', '1', '0', '1', '0', '0', '4');
INSERT INTO `forum_post` VALUES ('21', 'BBS', 'ok', '1310793442', '1', '1', '1', '0', '0', '5');
INSERT INTO `forum_post` VALUES ('22', 'asdasd112312312312', '3123123123', '1464255237', '1', '0', '0', '4', '2', '1');
INSERT INTO `forum_post` VALUES ('23', '社区帖子一', '社区帖子一内容', '35', '1', '0', '1', '1', '0', '1');
INSERT INTO `forum_post` VALUES ('24', '社区帖子二', '社区帖子二内容', '123456', '0', '0', '1', '9', '1', '1');
INSERT INTO `forum_post` VALUES ('25', '主题帖子一', '主题帖子一内容', '1245', '1', '1', '0', '3', '0', '2');
INSERT INTO `forum_post` VALUES ('26', 'test', 'aestj', '0', '1', '1', '0', '2', '1', '2');
INSERT INTO `forum_post` VALUES ('27', '孩子就不好多说话', '父母对孩子的教育，何尝想过方法和技巧，以为全心全意为他们考虑，就会获得孩子的认同，非也！他们有几个真正能懂父母的心，他们只不过把父母当做危险时的保护神，开心时的伙伴，生气时的出气筒罢了，因为他们只是孩子！\r\n教育是一门艺术，每一个父母，当你们在埋怨教师教育方法不好时，你是否想过，你才是他最早、', '1310388563', '1', '0', '0', '1', '2', '1');
INSERT INTO `forum_post` VALUES ('28', '父母对孩子的教育', '第三个秘决是注意孩子的反应与态度。现代父母由于工作忙碌，在和孩子说话时，常常会急着表示自己的意见和指示，期望孩子乖乖照自己的话做，最好不要有意见。所以，往往没有很仔细地把孩子的话听完，也忽略了孩子的反应。但是和孩子说话时，如果不了解他们的想法及立场，而让孩子感觉与父母沟通会令他不舒服，他们自然而然会避免接触，凡事不愿意向父母透露，亲子间的代沟必然越来越深。 \r\n\r\n第四个秘决是体会孩子感受。当孩子在外面受了委屈，与好朋友或心爱的宠物分离时，他细腻的小心灵会难过半天。假如这个时候孩子向父母哭诉，父母却只是一味地告诉他“没关系，坚强一点”“这没什么好难过的”“你真没用，还敢哭”，会让孩子觉得父母一点都不能体会他的感受。若父母能以同情和理解的态度对待孩子，适时安抚他、给予些亲情慰藉，相信会有截然不同的效果。 \r\n\r\n第五个秘决是了解孩子的发展有度。明白孩子的发展程度相当重要，因为如果父母尽说些孩子无法理解的话，或提出一些孩子达不到的要求，相信不但孩子觉得辛苦，压力大，亲子间对话也势必难以搭得上线。 \r\n\r\n第六个秘决是回答孩子的问话。孩子提出问题时，应先了解其真正含意，并针对孩子的需要做回答。例如孩子问：“妈妈，你要不要去买菜？”这个问题的真正意义其实是：“妈妈，我想跟你一起去买菜。”假如你知道孩子的真正目的，就可以说；“要啊！你要不要一起去？”孩子听了必定会很高兴。 此外，对于孩子所提的知识性问题，父母也要慎重回答，或带着孩子一起寻找答案。这样，孩子以后不论碰到什么问题，都会主动向父母询问。 \r\n\r\n第七个秘决是避免用“我命令你......”，“我警告你......”，“你最好赶快......”，“你真答”，“你太让我失望了”等带有指挥、命令、警告、威胁、责备、谩骂、拒绝等负面意义的说话语气。 \r\n\r\n第八个秘决是经常变换新鲜的话题，引起孩子的兴趣。例如：“你猜猜看今天我发生的什么事？”“你知不知道为什么小孩子最喜欢恐龙？”“如果有一天，太空人真的来到地球......”等话题，相信会比“今天过得好不好？”“快乐不快乐？”更吸引孩子。 \r\n\r\n第九个秘决是充实孩子的生活经验。亲子对话的题材，往往来自生活之中，因此培养孩子一颗敏锐好奇的心是很重要的。父母可以带领孩子观察身边的各种事物，如一花一草一木，路上车子的颜色、造型、品牌，街上行人的穿着打扮，说话内容（百货橱窗、林林总总）都可以成为谈话的素材。善用你的巧思去开发吧！\r\n\r\n', '1310388640', '0', '0', '0', '2', '1', '1');
INSERT INTO `forum_post` VALUES ('29', '特哦阿斯顿飞', '如粪土', '1310442964', '1', '0', '1', '0', '0', '4');
INSERT INTO `forum_post` VALUES ('30', 'BBS', 'ok', '1310793442', '1', '1', '1', '0', '0', '5');
INSERT INTO `forum_post` VALUES ('31', 'asdasd112312312312', '3123123123', '1464255237', '1', '0', '0', '4', '2', '1');
INSERT INTO `forum_post` VALUES ('32', '社区帖子一', '社区帖子一内容', '35', '1', '0', '1', '1', '0', '1');
INSERT INTO `forum_post` VALUES ('33', '社区帖子二', '社区帖子二内容', '123456', '0', '0', '1', '9', '1', '1');
INSERT INTO `forum_post` VALUES ('34', '主题帖子一', '主题帖子一内容', '1245', '1', '1', '0', '3', '0', '2');
INSERT INTO `forum_post` VALUES ('35', 'test', 'aestj', '0', '1', '1', '0', '2', '1', '2');
INSERT INTO `forum_post` VALUES ('36', '孩子就不好多说话', '父母对孩子的教育，何尝想过方法和技巧，以为全心全意为他们考虑，就会获得孩子的认同，非也！他们有几个真正能懂父母的心，他们只不过把父母当做危险时的保护神，开心时的伙伴，生气时的出气筒罢了，因为他们只是孩子！\r\n教育是一门艺术，每一个父母，当你们在埋怨教师教育方法不好时，你是否想过，你才是他最早、', '1310388563', '1', '0', '0', '1', '2', '1');
INSERT INTO `forum_post` VALUES ('37', '父母对孩子的教育', '第三个秘决是注意孩子的反应与态度。现代父母由于工作忙碌，在和孩子说话时，常常会急着表示自己的意见和指示，期望孩子乖乖照自己的话做，最好不要有意见。所以，往往没有很仔细地把孩子的话听完，也忽略了孩子的反应。但是和孩子说话时，如果不了解他们的想法及立场，而让孩子感觉与父母沟通会令他不舒服，他们自然而然会避免接触，凡事不愿意向父母透露，亲子间的代沟必然越来越深。 \r\n\r\n第四个秘决是体会孩子感受。当孩子在外面受了委屈，与好朋友或心爱的宠物分离时，他细腻的小心灵会难过半天。假如这个时候孩子向父母哭诉，父母却只是一味地告诉他“没关系，坚强一点”“这没什么好难过的”“你真没用，还敢哭”，会让孩子觉得父母一点都不能体会他的感受。若父母能以同情和理解的态度对待孩子，适时安抚他、给予些亲情慰藉，相信会有截然不同的效果。 \r\n\r\n第五个秘决是了解孩子的发展有度。明白孩子的发展程度相当重要，因为如果父母尽说些孩子无法理解的话，或提出一些孩子达不到的要求，相信不但孩子觉得辛苦，压力大，亲子间对话也势必难以搭得上线。 \r\n\r\n第六个秘决是回答孩子的问话。孩子提出问题时，应先了解其真正含意，并针对孩子的需要做回答。例如孩子问：“妈妈，你要不要去买菜？”这个问题的真正意义其实是：“妈妈，我想跟你一起去买菜。”假如你知道孩子的真正目的，就可以说；“要啊！你要不要一起去？”孩子听了必定会很高兴。 此外，对于孩子所提的知识性问题，父母也要慎重回答，或带着孩子一起寻找答案。这样，孩子以后不论碰到什么问题，都会主动向父母询问。 \r\n\r\n第七个秘决是避免用“我命令你......”，“我警告你......”，“你最好赶快......”，“你真答”，“你太让我失望了”等带有指挥、命令、警告、威胁、责备、谩骂、拒绝等负面意义的说话语气。 \r\n\r\n第八个秘决是经常变换新鲜的话题，引起孩子的兴趣。例如：“你猜猜看今天我发生的什么事？”“你知不知道为什么小孩子最喜欢恐龙？”“如果有一天，太空人真的来到地球......”等话题，相信会比“今天过得好不好？”“快乐不快乐？”更吸引孩子。 \r\n\r\n第九个秘决是充实孩子的生活经验。亲子对话的题材，往往来自生活之中，因此培养孩子一颗敏锐好奇的心是很重要的。父母可以带领孩子观察身边的各种事物，如一花一草一木，路上车子的颜色、造型、品牌，街上行人的穿着打扮，说话内容（百货橱窗、林林总总）都可以成为谈话的素材。善用你的巧思去开发吧！\r\n\r\n', '1310388640', '0', '0', '0', '2', '1', '1');
INSERT INTO `forum_post` VALUES ('38', '', '', null, '0', '0', '1', '0', '0', '1');

-- ----------------------------
-- Table structure for friend_link
-- ----------------------------
DROP TABLE IF EXISTS `friend_link`;
CREATE TABLE `friend_link` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `web_name` varchar(100) DEFAULT NULL,
  `website` varchar(120) DEFAULT NULL,
  `inside_page` varchar(120) DEFAULT NULL,
  `web_logo` varchar(120) DEFAULT NULL,
  `show_type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of friend_link
-- ----------------------------
INSERT INTO `friend_link` VALUES ('1', '国防部', 'http://123.com', '321.com', '123456', '345阿斯顿');
INSERT INTO `friend_link` VALUES ('2', '教育部', 'http://www.edu.com', 'sdgf', 'sdgh', 'wafgh');

-- ----------------------------
-- Table structure for map
-- ----------------------------
DROP TABLE IF EXISTS `map`;
CREATE TABLE `map` (
  `map_key` varchar(255) CHARACTER SET utf8 NOT NULL,
  `map_value` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`map_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of map
-- ----------------------------
INSERT INTO `map` VALUES ('apk_code', '30');
INSERT INTO `map` VALUES ('apk_name', '长大校园通');
INSERT INTO `map` VALUES ('apk_update_log', '1.长大校园通4.0\r\n2.功能不用多说\r\n3.界面不用多说');
INSERT INTO `map` VALUES ('apk_version', 'V4.0');

-- ----------------------------
-- Table structure for member_admin
-- ----------------------------
DROP TABLE IF EXISTS `member_admin`;
CREATE TABLE `member_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) DEFAULT NULL,
  `password` varchar(68) DEFAULT NULL,
  `sex` varchar(2) DEFAULT NULL,
  `age` varchar(4) DEFAULT NULL,
  `birthday` varchar(20) DEFAULT NULL,
  `mobilephone` varchar(12) DEFAULT NULL,
  `telephone` varchar(12) DEFAULT NULL,
  `qq` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  `login_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of member_admin
-- ----------------------------
INSERT INTO `member_admin` VALUES ('1', '123', '123', '男', '13', '1995-02-03', '110', '120', '1234567', 'ksdfgh@110.com', '123456', '654321');
INSERT INTO `member_admin` VALUES ('2', 'h001', '123', '男', '12', '1988-04-21', '654321', '123456', '111', '123@123.com', '1310636065', null);
INSERT INTO `member_admin` VALUES ('3', 'h002', '123', '男', '23', '1960-07-15', '123455', '123456', '4562', '123@123.com', '1310636343', null);
INSERT INTO `member_admin` VALUES ('4', 'qweqwe', '12345678', '男', '123', '12312', '123', '123', '12312', '12313@qq.com', '1464255192', null);

-- ----------------------------
-- Table structure for member_user
-- ----------------------------
DROP TABLE IF EXISTS `member_user`;
CREATE TABLE `member_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(68) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `mobile` varchar(12) DEFAULT NULL,
  `qq` varchar(15) DEFAULT NULL,
  `auth` int(1) DEFAULT '1',
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of member_user
-- ----------------------------
INSERT INTO `member_user` VALUES ('1', 'admin', 'admin', '123@123.com', '123456789', '34567', '0', '1310965430');
INSERT INTO `member_user` VALUES ('2', 'm001', 'm001', '123@123.com', '110', '120', '1', '1310965677');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) DEFAULT NULL,
  `content` text NOT NULL,
  `summary` varchar(200) DEFAULT NULL,
  `image` varchar(256) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `add_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('3', '发士大夫', '士大夫', '阿斯蒂芬', './Uploads/2016-05-27/57483d0b5b1d7.jpg', '1', '2016-05-27 20:26:51');
INSERT INTO `news` VALUES ('4', '发士大夫', '士大夫', '阿斯蒂芬', './Uploads/2016-05-27/57483d0b5b1d7.jpg', '1', '2016-05-27 20:26:51');
INSERT INTO `news` VALUES ('5', '发士大夫', '士大夫', '阿斯蒂芬', './Uploads/2016-05-27/57483d0b5b1d7.jpg', '1', '2016-05-27 20:26:51');
INSERT INTO `news` VALUES ('6', '发士大夫', '士大夫', '阿斯蒂芬', './Uploads/2016-05-27/57483d0b5b1d7.jpg', '1', '2016-05-27 20:26:51');
INSERT INTO `news` VALUES ('7', '发士大夫', '士大夫', '阿斯蒂芬', './Uploads/2016-05-27/57483d0b5b1d7.jpg', '1', '2016-05-27 20:26:51');
INSERT INTO `news` VALUES ('8', '发士大夫', '士大夫', '阿斯蒂芬', './Uploads/2016-05-27/57483d0b5b1d7.jpg', '1', '2016-05-27 20:26:51');
INSERT INTO `news` VALUES ('9', '发士大夫', '士大夫', '阿斯蒂芬', './Uploads/2016-05-27/57483d0b5b1d7.jpg', '1', '2016-05-27 20:26:51');
INSERT INTO `news` VALUES ('10', '长大校园通发布了', '', '长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了', './Uploads/2016-05-29/574ae08522caa.jpg', '2', '2016-05-29 20:28:53');
INSERT INTO `news` VALUES ('11', '长大校园通发布了', '', '长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了长大校园通发布了', './Uploads/2016-05-29/574ae08522caa.jpg', '2', '2016-05-29 20:28:53');
