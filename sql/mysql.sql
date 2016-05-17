# Pi Engine schema
# http://pialog.org
# Author: Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
# --------------------------------------------------------

# ------------------------------------------------------
# Search
# >>>>

# Search log
CREATE TABLE `{log}` (
  `id`   INT(10) UNSIGNED NOT NULL    AUTO_INCREMENT,
  `term` VARCHAR(255)     NOT NULL    DEFAULT '',
  `uid`  INT(10) UNSIGNED NOT NULL    DEFAULT '0',
  `ip`   CHAR(15)         NOT NULL    DEFAULT '',
  `time` INT(10) UNSIGNED NOT NULL    DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `term` (`term`)
);

# Search auto complete
CREATE TABLE `{dictionary}` (
  `id`     INT(10) UNSIGNED NOT NULL    AUTO_INCREMENT,
  `term`   VARCHAR(255)     NOT NULL    DEFAULT '',
  `weight` INT(10) UNSIGNED NOT NULL    DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `weight` (`weight`),
  KEY `term` (`term`)
);
