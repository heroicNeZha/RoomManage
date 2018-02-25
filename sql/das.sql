SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `das` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `das`;

CREATE TABLE `tbl_admin` (
  `admin_ID` int(16) NOT NULL COMMENT '管理员ID',
  `admin_userName` varchar(16) COLLATE utf8_bin NOT NULL COMMENT '管理员用户名',
  `admin_password` varchar(16) COLLATE utf8_bin NOT NULL COMMENT '管理员密码',
  `admin_name` varchar(6) COLLATE utf8_bin NOT NULL COMMENT '管理员姓名',
  `admin_sex` tinyint(1) NOT NULL COMMENT '管理员性别(男0女1)',
  `admin_tel` varchar(11) COLLATE utf8_bin DEFAULT NULL COMMENT '管理员电话'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='管理员表';

INSERT INTO `tbl_admin` (`admin_ID`, `admin_userName`, `admin_password`, `admin_name`, `admin_sex`, `admin_tel`) VALUES
(1, 'admin', '123456', '宿管1', 1, NULL);

CREATE TABLE `tbl_dormitory` (
  `dor_ID` int(2) NOT NULL COMMENT '楼号',
  `dor_address` varchar(16) COLLATE utf8_bin NOT NULL COMMENT '地址',
  `dor_sex` tinyint(1) NOT NULL COMMENT '性别'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `tbl_dormitory` (`dor_ID`, `dor_address`, `dor_sex`) VALUES
(1, '一号楼', 1),
(2, '二号楼', 1),
(3, '三号楼', 0),
(4, '四号楼', 0),
(5, '五号楼', 0),
(6, '六号楼', 1),
(7, '七号楼', 0),
(8, '八号楼', 0),
(9, '九号楼', 0),
(10, '十号楼', 0),
(11, '十一号楼', 1),
(12, '十二号楼', 0),
(13, '十三号楼', 0),
(14, '十四号楼', 0),
(15, '十五号楼', 0),
(16, '十六号楼', 0);

CREATE TABLE `tbl_news` (
  `news_ID` int(10) NOT NULL COMMENT '公告ID',
  `news_push_ID` varchar(16) COLLATE utf8_bin NOT NULL COMMENT '发布人ID',
  `news_title` varchar(30) COLLATE utf8_bin NOT NULL COMMENT '公告标题',
  `news_content` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '内容',
  `news_date` date NOT NULL COMMENT '发布日期'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `tbl_news` (`news_ID`, `news_push_ID`, `news_title`, `news_content`, `news_date`) VALUES
(3, 't001', '明天查寝', '11月1日全校检查寝室', '2017-10-31'),
(2, '1', '11:00熄灯', '以后每天11点熄灯', '2017-10-31');

CREATE TABLE `tbl_room` (
  `dor_ID` tinyint(2) NOT NULL COMMENT '从属楼号',
  `room_ID` int(3) NOT NULL COMMENT '寝室号',
  `room_num` tinyint(1) NOT NULL COMMENT '居住人数'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `tbl_room` (`dor_ID`, `room_ID`, `room_num`) VALUES
(2, 301, 6),
(6, 322, 6),
(6, 635, 6),
(12, 614, 5);

CREATE TABLE `tbl_score` (
  `sco_stu_ID` int(10) NOT NULL,
  `sco_score` double(2,1) NOT NULL COMMENT '成绩',
  `sco_tea_ID` char(10) COLLATE utf8_bin NOT NULL,
  `sco_dateTime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `tbl_score` (`sco_stu_ID`, `sco_score`, `sco_tea_ID`, `sco_dateTime`) VALUES
(1503050116, 4.5, 't001', '2017-10-28'),
(1503050116, 3.5, 't001', '2017-10-29'),
(1503050114, 3.5, 't001', '2017-10-29'),
(1503050114, 4.7, 't001', '2017-10-13');

CREATE TABLE `tbl_student` (
  `stu_ID` int(10) NOT NULL COMMENT '学生学号',
  `stu_userName` char(16) COLLATE utf8_bin NOT NULL COMMENT '用户名',
  `stu_password` char(16) COLLATE utf8_bin NOT NULL COMMENT '密码',
  `stu_sex` tinyint(1) NOT NULL COMMENT '性别(0男1女)',
  `stu_name` char(6) COLLATE utf8_bin NOT NULL COMMENT '学生姓名',
  `stu_state` tinyint(3) NOT NULL COMMENT '学生状态(0退宿,1在校)',
  `stu_class` char(8) COLLATE utf8_bin NOT NULL COMMENT '学生班级'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `tbl_student` (`stu_ID`, `stu_userName`, `stu_password`, `stu_sex`, `stu_name`, `stu_state`, `stu_class`) VALUES
(1503050104, '1503050104', '123456', 1, '李曦', 1, '15030501'),
(1503050114, '1503050114', '123456', 0, '信勇', 1, '15030501'),
(1503050116, '1503050116', '123456', 0, '李泽伟', 1, '15030501');

CREATE TABLE `tbl_stu_dor` (
  `stu_ID` int(10) NOT NULL,
  `dor_ID` int(2) NOT NULL,
  `room_ID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `tbl_stu_dor` (`stu_ID`, `dor_ID`, `room_ID`) VALUES
(1503050114, 12, 614),
(1503050116, 12, 614);

CREATE TABLE `tbl_teacher` (
  `tea_ID` char(10) COLLATE utf8_bin NOT NULL COMMENT '教师ID',
  `tea_userName` char(16) COLLATE utf8_bin NOT NULL COMMENT '教师用户名',
  `tea_password` char(16) COLLATE utf8_bin NOT NULL COMMENT '教师密码',
  `tea_name` char(6) COLLATE utf8_bin NOT NULL COMMENT '教师姓名',
  `tea_sex` tinyint(1) NOT NULL COMMENT '教师性别',
  `tea_tel` char(11) COLLATE utf8_bin NOT NULL COMMENT '教师电话'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `tbl_teacher` (`tea_ID`, `tea_userName`, `tea_password`, `tea_name`, `tea_sex`, `tea_tel`) VALUES
('t001', 't001', '123456', '刘老师', 1, '');

CREATE TABLE `tbl_update` (
  `upd_ID` int(16) NOT NULL,
  `upd_type` tinyint(1) NOT NULL COMMENT '0调出，1调入',
  `stu_ID` int(10) NOT NULL,
  `stu_name` varchar(16) COLLATE utf8_bin NOT NULL,
  `dor_ID` int(2) NOT NULL,
  `room_ID` int(3) NOT NULL,
  `upd_dateTime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `tbl_update` (`upd_ID`, `upd_type`, `stu_ID`, `stu_name`, `dor_ID`, `room_ID`, `upd_dateTime`) VALUES
(6, 0, 1503050116, '李泽伟', 12, 614, '2017-10-29'),
(7, 0, 1503050114, '信勇', 12, 614, '2017-10-29'),
(10, 0, 1503050104, '李曦', 6, 635, '2017-10-30'),
(11, 1, 1503050104, '李曦', 6, 635, '2017-10-31');


ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_ID`);

ALTER TABLE `tbl_dormitory`
  ADD PRIMARY KEY (`dor_ID`);

ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_ID`);

ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`dor_ID`,`room_ID`);

ALTER TABLE `tbl_score`
  ADD KEY `sco_stu_ID` (`sco_stu_ID`),
  ADD KEY `sco_tea_ID` (`sco_tea_ID`);

ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`stu_ID`);

ALTER TABLE `tbl_stu_dor`
  ADD PRIMARY KEY (`stu_ID`),
  ADD KEY `stu_ID` (`stu_ID`),
  ADD KEY `dor_ID` (`dor_ID`),
  ADD KEY `room_ID` (`room_ID`) USING BTREE,
  ADD KEY `dor_ID_2` (`dor_ID`,`room_ID`);

ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`tea_ID`);

ALTER TABLE `tbl_update`
  ADD PRIMARY KEY (`upd_ID`),
  ADD KEY `stu_ID` (`stu_ID`);


ALTER TABLE `tbl_admin`
  MODIFY `admin_ID` int(16) NOT NULL AUTO_INCREMENT COMMENT '管理员ID', AUTO_INCREMENT=2;
ALTER TABLE `tbl_dormitory`
  MODIFY `dor_ID` int(2) NOT NULL AUTO_INCREMENT COMMENT '楼号', AUTO_INCREMENT=17;
ALTER TABLE `tbl_news`
  MODIFY `news_ID` int(10) NOT NULL AUTO_INCREMENT COMMENT '公告ID', AUTO_INCREMENT=4;
ALTER TABLE `tbl_update`
  MODIFY `upd_ID` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `tbl_score`
  ADD CONSTRAINT `sco_stu_ID` FOREIGN KEY (`sco_stu_ID`) REFERENCES `tbl_student` (`stu_ID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `sco_tea_ID` FOREIGN KEY (`sco_tea_ID`) REFERENCES `tbl_teacher` (`tea_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `tbl_stu_dor`
  ADD CONSTRAINT `stu_id_dor` FOREIGN KEY (`stu_ID`) REFERENCES `tbl_student` (`stu_ID`) ON DELETE CASCADE ON UPDATE NO ACTION;

ALTER TABLE `tbl_update`
  ADD CONSTRAINT `upd_stu` FOREIGN KEY (`stu_ID`) REFERENCES `tbl_student` (`stu_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
