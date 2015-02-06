/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50534
Source Host           : localhost:3306
Source Database       : e-educator

Target Server Type    : MYSQL
Target Server Version : 50534
File Encoding         : 65001

Date: 2014-01-27 14:20:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `comments`
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foreign_model` varchar(100) NOT NULL,
  `foreign_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `author_ip` varchar(20) DEFAULT NULL,
  `author_name` varchar(100) NOT NULL,
  `author_email` varchar(100) NOT NULL,
  `author_website` varchar(200) DEFAULT NULL,
  `content` text NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_comments_foreign_data` (`foreign_id`,`foreign_model`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of comments
-- ----------------------------


-- ----------------------------
-- Table structure for `courses`
-- ----------------------------
DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of courses
-- ----------------------------
INSERT INTO `courses` VALUES ('1', 'ITT550');
INSERT INTO `courses` VALUES ('2', 'ITS470');

-- ----------------------------
-- Table structure for `coursewares`
-- ----------------------------
DROP TABLE IF EXISTS `coursewares`;
CREATE TABLE `coursewares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foreign_model` varchar(100) NOT NULL,
  `foreign_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reply` text NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_comments_foreign_data` (`foreign_id`,`foreign_model`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of coursewares
-- ----------------------------

-- ----------------------------
-- Table structure for `faculties`
-- ----------------------------
DROP TABLE IF EXISTS `faculties`;
CREATE TABLE `faculties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of faculties
-- ----------------------------
INSERT INTO `faculties` VALUES ('1', 'FSKM');
INSERT INTO `faculties` VALUES ('2', 'FSPU');

-- ----------------------------
-- Table structure for `fcategories`
-- ----------------------------
DROP TABLE IF EXISTS `fcategories`;
CREATE TABLE `fcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fcategories
-- ----------------------------
INSERT INTO `fcategories` VALUES ('1', 'Study');

-- ----------------------------
-- Table structure for `groups`
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of groups
-- ----------------------------

-- ----------------------------
-- Table structure for `lecturers`
-- ----------------------------
DROP TABLE IF EXISTS `lecturers`;
CREATE TABLE `lecturers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `picture` varchar(200) DEFAULT NULL,
  `bio` text,
  `group_id` int(11) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `program_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of lecturers
-- ----------------------------
s


-- ----------------------------
-- Table structure for `lecturers_courses`
-- ----------------------------
DROP TABLE IF EXISTS `lecturers_courses`;
CREATE TABLE `lecturers_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lecturer_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of lecturers_courses
-- ----------------------------


-- ----------------------------
-- Table structure for `messages`
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `lecturer_id` int(11) DEFAULT NULL,
  `header` varchar(200) DEFAULT NULL,
  `body` text,
  `priority` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of messages
-- ----------------------------

-- ----------------------------
-- Table structure for `notifications`
-- ----------------------------
DROP TABLE IF EXISTS `notifications`;
CREATE TABLE `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  `target` varchar(200) DEFAULT NULL,
  `is_read` mediumint(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of notifications
-- ----------------------------


-- ----------------------------
-- Table structure for `posts`
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foreign_model` varchar(100) NOT NULL,
  `foreign_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reply` text NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_comments_foreign_data` (`foreign_id`,`foreign_model`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of posts
-- ----------------------------


-- ----------------------------
-- Table structure for `profiles`
-- ----------------------------
DROP TABLE IF EXISTS `profiles`;
CREATE TABLE `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `picture` varchar(200) DEFAULT NULL,
  `bio` text,
  `group_id` int(11) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `program_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of profiles
-- ----------------------------
INSERT INTO `profiles` VALUES ('13', 'Admin', 'admin@admin.com', '/files/picture/default.jpg', null, null, null, null, '9', '1', '2013-12-09 09:20:00');


-- ----------------------------
-- Table structure for `profiles_courses`
-- ----------------------------
DROP TABLE IF EXISTS `profiles_courses`;
CREATE TABLE `profiles_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of profiles_courses
-- ----------------------------


-- ----------------------------
-- Table structure for `profiles_lecturers`
-- ----------------------------
DROP TABLE IF EXISTS `profiles_lecturers`;
CREATE TABLE `profiles_lecturers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_id` int(11) DEFAULT NULL,
  `lecturer_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of profiles_lecturers
-- ----------------------------


-- ----------------------------
-- Table structure for `programs`
-- ----------------------------
DROP TABLE IF EXISTS `programs`;
CREATE TABLE `programs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of programs
-- ----------------------------
INSERT INTO `programs` VALUES ('1', 'Netcentric');
INSERT INTO `programs` VALUES ('2', 'Network');
INSERT INTO `programs` VALUES ('3', 'Multimedia');

-- ----------------------------
-- Table structure for `ratings`
-- ----------------------------
DROP TABLE IF EXISTS `ratings`;
CREATE TABLE `ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foreign_model` varchar(100) NOT NULL,
  `foreign_id` int(11) NOT NULL,
  `author_ip` varchar(20) DEFAULT NULL,
  `rating` float NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_ratings_foreign_data` (`foreign_id`,`foreign_model`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ratings
-- ----------------------------


-- ----------------------------
-- Table structure for `roles`
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'Admin', '2013-11-29 10:17:16');
INSERT INTO `roles` VALUES ('2', 'Student', '2013-11-29 10:17:30');
INSERT INTO `roles` VALUES ('3', 'Lecturer', '2013-11-29 10:18:11');

-- ----------------------------
-- Table structure for `topics`
-- ----------------------------
DROP TABLE IF EXISTS `topics`;
CREATE TABLE `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(200) DEFAULT NULL,
  `description` text,
  `date` date DEFAULT NULL,
  `program_id` int(11) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `attachment` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of topics
-- ----------------------------


-- ----------------------------
-- Table structure for `topics_courses`
-- ----------------------------
DROP TABLE IF EXISTS `topics_courses`;
CREATE TABLE `topics_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of topics_courses
-- ----------------------------


-- ----------------------------
-- Table structure for `topics_fcategories`
-- ----------------------------
DROP TABLE IF EXISTS `topics_fcategories`;
CREATE TABLE `topics_fcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) DEFAULT NULL,
  `fcategory_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of topics_fcategories
-- ----------------------------


-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fullName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------

INSERT INTO `users` VALUES ('9', 'admin', '1fd811d903c8ce71e7fb98cf6d980cfbffd2e920', 'Admin', 'admin@admin.com', '1', '2013-12-09 09:19:12');


-- ----------------------------
-- Table structure for `vcategories`
-- ----------------------------
DROP TABLE IF EXISTS `vcategories`;
CREATE TABLE `vcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of vcategories
-- ----------------------------
INSERT INTO `vcategories` VALUES ('1', 'Video');

-- ----------------------------
-- Table structure for `videos`
-- ----------------------------
DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `description` text,
  `date` date DEFAULT NULL,
  `filename` varchar(200) DEFAULT NULL,
  `thumb` varchar(200) DEFAULT NULL,
  `extension` varchar(200) DEFAULT NULL,
  `mimeType` varchar(200) DEFAULT NULL,
  `filesize` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `courseware` varchar(200) DEFAULT NULL,
  `comware` text,
  `markby` varchar(200) DEFAULT NULL,
  `visibility` varchar(200) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `lecturer_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `program_id` int(11) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of videos
-- ----------------------------


-- ----------------------------
-- Table structure for `videos_courses`
-- ----------------------------
DROP TABLE IF EXISTS `videos_courses`;
CREATE TABLE `videos_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of videos_courses
-- ----------------------------


-- ----------------------------
-- Table structure for `videos_vcategories`
-- ----------------------------
DROP TABLE IF EXISTS `videos_vcategories`;
CREATE TABLE `videos_vcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_id` int(11) DEFAULT NULL,
  `vcategory_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of videos_vcategories
-- ----------------------------
