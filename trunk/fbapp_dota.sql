/*
Navicat MySQL Data Transfer

Source Server         : PHP Project
Source Server Version : 50148
Source Host           : localhost:3306
Source Database       : fbapp_dota

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2012-03-30 17:10:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `dota_affiliation`
-- ----------------------------
DROP TABLE IF EXISTS `dota_affiliation`;
CREATE TABLE `dota_affiliation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dota_affiliation
-- ----------------------------
INSERT INTO `dota_affiliation` VALUES ('1', 'Thiên Thần');
INSERT INTO `dota_affiliation` VALUES ('2', 'Ác Quỷ');

-- ----------------------------
-- Table structure for `dota_base`
-- ----------------------------
DROP TABLE IF EXISTS `dota_base`;
CREATE TABLE `dota_base` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dota_base
-- ----------------------------
INSERT INTO `dota_base` VALUES ('1', '(Strength)Lấy thịt đè người');
INSERT INTO `dota_base` VALUES ('2', '(Agility)Khả năng đánh lén vô hạn');
INSERT INTO `dota_base` VALUES ('3', '(Intelligence)Khả năng có hạn,thủ đoạn vô biênư');

-- ----------------------------
-- Table structure for `dota_hero`
-- ----------------------------
DROP TABLE IF EXISTS `dota_hero`;
CREATE TABLE `dota_hero` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) DEFAULT NULL,
  `realname` char(50) DEFAULT NULL,
  `gender` char(10) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `affiliation` int(11) DEFAULT NULL,
  `base` int(11) DEFAULT NULL,
  `range_attack` int(11) DEFAULT NULL,
  `hide` enum('N','Y') DEFAULT 'Y',
  `garena_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dota_hero
-- ----------------------------
INSERT INTO `dota_hero` VALUES ('4', 'Vol\'Jin', 'Witch Doctor', null, null, null, null, null, null, null, 'Y', '63');
INSERT INTO `dota_hero` VALUES ('5', 'Visage', 'Necro\'lic', null, null, null, null, null, null, null, 'Y', '113');
INSERT INTO `dota_hero` VALUES ('6', 'Rotund\'jere', 'Necrolyte', null, null, null, null, null, null, null, 'Y', '28');
INSERT INTO `dota_hero` VALUES ('7', 'Pugna', 'Oblivion', null, null, null, null, null, null, null, 'Y', '13');
INSERT INTO `dota_hero` VALUES ('8', 'Lion', 'Demon Witch', null, null, null, null, null, null, null, 'Y', '112');
INSERT INTO `dota_hero` VALUES ('9', 'Krobelus', 'Death Prophet', null, null, null, null, null, null, null, 'Y', '109');
INSERT INTO `dota_hero` VALUES ('10', 'Kel\'thuzad', 'Lich', null, null, null, null, null, null, null, 'Y', '92');
INSERT INTO `dota_hero` VALUES ('11', 'Kael', 'Invoker', null, null, null, null, null, null, null, 'Y', '118');
INSERT INTO `dota_hero` VALUES ('12', 'Jin\'zakk', 'Batrider', null, null, null, null, null, null, null, 'Y', '117');
INSERT INTO `dota_hero` VALUES ('13', 'Ish\'kafel', 'Dark Seer', null, null, null, null, null, null, null, 'Y', '93');
INSERT INTO `dota_hero` VALUES ('14', 'Eredar', 'Shadow Demon', null, null, null, null, null, null, null, 'Y', '132');
INSERT INTO `dota_hero` VALUES ('15', 'Demnok Lannik', 'Warlock', null, null, null, null, null, null, null, 'Y', '58');
INSERT INTO `dota_hero` VALUES ('16', 'Dazzle', 'Shadow Priest', null, null, null, null, null, null, null, 'Y', '77');
INSERT INTO `dota_hero` VALUES ('17', 'Darchrow', 'Enigma', null, null, null, null, null, null, null, 'Y', '98');
INSERT INTO `dota_hero` VALUES ('18', 'Atropos', 'Bane Elemental', null, null, null, null, null, null, null, 'Y', '27');
INSERT INTO `dota_hero` VALUES ('19', 'Akasha', 'Queen of Pain', null, null, null, null, null, null, null, 'Y', '82');
INSERT INTO `dota_hero` VALUES ('20', 'Viper', 'Netherdrake', null, null, null, null, null, null, null, 'Y', '84');
INSERT INTO `dota_hero` VALUES ('21', 'Terrorblade', 'Soul Keeper', null, null, null, null, null, null, null, 'Y', '110');
INSERT INTO `dota_hero` VALUES ('22', 'Strygwyr', 'Bloodseeker', null, null, null, null, null, null, null, 'Y', '35');
INSERT INTO `dota_hero` VALUES ('23', 'Nevermore', 'Shadow Fiend', null, null, null, null, null, null, null, 'Y', '91');
INSERT INTO `dota_hero` VALUES ('24', 'Mercurial', 'Spectre', null, null, null, null, null, null, null, 'Y', '50');
INSERT INTO `dota_hero` VALUES ('25', 'Meepo', 'Geomancer', null, null, null, null, null, null, null, 'Y', '74');
INSERT INTO `dota_hero` VALUES ('26', 'Medusa', 'Gorgon', null, null, null, null, null, null, null, 'Y', '72');
INSERT INTO `dota_hero` VALUES ('27', 'Darkterror', 'Faceless Void', null, null, null, null, null, null, null, 'Y', '83');
INSERT INTO `dota_hero` VALUES ('28', 'Clinkz', 'Bone Fletcher', null, null, null, null, null, null, null, 'Y', '15');
INSERT INTO `dota_hero` VALUES ('29', 'Black Arachnia', 'Broodmother', null, null, null, null, null, null, null, 'Y', '89');
INSERT INTO `dota_hero` VALUES ('30', 'Anub\'seran', 'Nerubian Weaver', null, null, null, null, null, null, null, 'Y', '32');
INSERT INTO `dota_hero` VALUES ('31', 'Pudge', 'Butcher', null, null, null, null, null, null, null, 'Y', '29');
INSERT INTO `dota_hero` VALUES ('32', 'Nessaj', 'Chaos Knight', null, null, null, null, null, null, null, 'Y', '114');
INSERT INTO `dota_hero` VALUES ('33', 'N\'aix', 'Lifestealer', null, null, null, null, null, null, null, 'Y', '122');
INSERT INTO `dota_hero` VALUES ('34', 'Mogul Khan', 'Axe-12', null, null, null, null, null, null, null, 'Y', '33');
INSERT INTO `dota_hero` VALUES ('35', 'Magnus', 'Magnataur', null, null, null, null, null, null, null, 'Y', '111');
INSERT INTO `dota_hero` VALUES ('36', 'Lucifer', 'Doom Bringer', null, null, null, null, null, null, null, 'Y', '37');
INSERT INTO `dota_hero` VALUES ('37', 'Leviathan', 'Tidehunter', null, null, null, null, null, null, null, 'Y', '25');
INSERT INTO `dota_hero` VALUES ('38', 'King Leoric', 'Skeleton King', null, null, null, null, null, null, null, 'Y', '76');
INSERT INTO `dota_hero` VALUES ('39', 'Dirge', 'Undying', null, null, null, null, null, null, null, 'Y', '95');
INSERT INTO `dota_hero` VALUES ('40', 'Crixalis', 'Sand King', null, null, null, null, null, null, null, 'Y', '14');
INSERT INTO `dota_hero` VALUES ('41', 'Barathrum', 'Spiritbreaker', null, null, null, null, null, null, null, 'Y', '123');
INSERT INTO `dota_hero` VALUES ('42', 'Banehallow', 'Lycanthrope', null, null, null, null, null, null, null, 'Y', '115');
INSERT INTO `dota_hero` VALUES ('43', 'Balanar', 'Night Stalker', null, null, null, null, null, null, null, 'Y', '75');
INSERT INTO `dota_hero` VALUES ('44', 'Azgalor', 'Pit Lord', null, null, null, null, null, null, null, 'Y', '80');
INSERT INTO `dota_hero` VALUES ('45', 'Abaddon', 'Lord of Avernus', null, null, null, null, null, null, null, 'Y', '12');
INSERT INTO `dota_hero` VALUES ('46', 'Zeus', 'Lord of Olympus', null, null, null, null, null, null, null, 'Y', '18');
INSERT INTO `dota_hero` VALUES ('47', 'Thrall', 'Disruptor', null, null, null, null, null, null, null, 'Y', '131');
INSERT INTO `dota_hero` VALUES ('48', 'Skywrath Mage', 'Dragonus', null, null, null, null, null, null, null, 'Y', '155');
INSERT INTO `dota_hero` VALUES ('49', 'Rylai Crestfall', 'Crystal Maiden', null, null, null, null, null, null, null, 'Y', '34');
INSERT INTO `dota_hero` VALUES ('50', 'Rubick', 'Grand Magus', null, null, null, null, null, null, null, 'Y', '135');
INSERT INTO `dota_hero` VALUES ('51', 'Rhasta', 'Shadow Shaman', null, null, null, null, null, null, null, 'Y', '26');
INSERT INTO `dota_hero` VALUES ('52', 'Nortrom', 'Silencer', null, null, null, null, null, null, null, 'Y', '96');
INSERT INTO `dota_hero` VALUES ('53', 'Lina Inverse', 'Slayer', null, null, null, null, null, null, null, 'Y', '69');
INSERT INTO `dota_hero` VALUES ('54', 'Furion', 'Prophet', null, null, null, null, null, null, null, 'Y', '103');
INSERT INTO `dota_hero` VALUES ('55', 'Faerie Dragon', 'Puck', null, null, null, null, null, null, null, 'Y', '62');
INSERT INTO `dota_hero` VALUES ('56', 'Chen', 'Holy Knight', null, null, null, null, null, null, null, 'Y', '108');
INSERT INTO `dota_hero` VALUES ('57', 'Boush', 'Tinker', null, null, null, null, null, null, null, 'Y', '102');
INSERT INTO `dota_hero` VALUES ('58', 'Alleria', 'Windrunner', null, null, null, null, null, null, null, 'Y', '54');
INSERT INTO `dota_hero` VALUES ('59', 'Aiushtha', 'Enchantress', null, null, null, null, null, null, null, 'Y', '21');
INSERT INTO `dota_hero` VALUES ('60', 'Yurnero', 'Juggernaut', null, null, null, null, null, null, null, 'Y', '71');
INSERT INTO `dota_hero` VALUES ('61', 'Xin', 'Ember Spirit', null, null, null, null, null, null, null, 'Y', '157');
INSERT INTO `dota_hero` VALUES ('62', 'Ulfsaar', 'Ursa Warrior', null, null, null, null, null, null, null, 'Y', '100');
INSERT INTO `dota_hero` VALUES ('63', 'Traxex', 'Drow Ranger', null, null, null, null, null, null, null, 'Y', '45');
INSERT INTO `dota_hero` VALUES ('64', 'Syllabear', 'Lone Druid', null, null, null, null, null, null, null, 'Y', '67');
INSERT INTO `dota_hero` VALUES ('65', 'Slithice', 'Naga Siren', null, null, null, null, null, null, null, 'Y', '40');
INSERT INTO `dota_hero` VALUES ('66', 'Morphling', 'Morphling', null, null, null, null, null, null, null, 'Y', '22');
INSERT INTO `dota_hero` VALUES ('67', 'Magina', 'Anti-Mage', null, null, null, null, null, null, null, 'Y', '43');
INSERT INTO `dota_hero` VALUES ('68', 'Luna Moonfang', 'Moon Rider', null, null, null, null, null, null, null, 'Y', '16');
INSERT INTO `dota_hero` VALUES ('69', 'Kardel Sharpeye', 'Dwarven Sniper', null, null, null, null, null, null, null, 'Y', '23');
INSERT INTO `dota_hero` VALUES ('70', 'Jah\'rakal', 'Troll Warlord', null, null, null, null, null, null, null, 'Y', '24');
INSERT INTO `dota_hero` VALUES ('71', 'Gondar', 'Bounty Hunter', null, null, null, null, null, null, null, 'Y', '42');
INSERT INTO `dota_hero` VALUES ('72', 'Azwraith', 'Phantom Lancer', null, null, null, null, null, null, null, 'Y', '104');
INSERT INTO `dota_hero` VALUES ('73', 'Aurel Vlaicu', 'Gyrocopter', null, null, null, null, null, null, null, 'Y', '129');
INSERT INTO `dota_hero` VALUES ('74', 'Ymir', 'Tuskarr', null, null, null, null, null, null, null, 'Y', '134');
INSERT INTO `dota_hero` VALUES ('75', 'Tiny', 'Stone Giant', null, null, null, null, null, null, null, 'Y', '105');
INSERT INTO `dota_hero` VALUES ('76', 'Sven', 'Rogue Knight', null, null, null, null, null, null, null, 'Y', '38');
INSERT INTO `dota_hero` VALUES ('77', 'Rizzrak', 'Goblin Shredder', null, null, null, null, null, null, null, 'Y', '158');
INSERT INTO `dota_hero` VALUES ('78', 'Rigwarl', 'Bristleback', null, null, null, null, null, null, null, 'Y', '39');
INSERT INTO `dota_hero` VALUES ('79', 'Rexxar', 'Beastmaster', null, null, null, null, null, null, null, 'Y', '44');
INSERT INTO `dota_hero` VALUES ('80', 'Razzil Darkbrew', 'Alchemist', null, null, null, null, null, null, null, 'Y', '48');
INSERT INTO `dota_hero` VALUES ('81', 'Knight Davion', 'Dragon Knight', null, null, null, null, null, null, null, 'Y', '49');
INSERT INTO `dota_hero` VALUES ('82', 'Io', 'Guardian Wisp', null, null, null, null, null, null, null, 'Y', '130');
INSERT INTO `dota_hero` VALUES ('83', 'Icarus', 'Phoenix', null, null, null, null, null, null, null, 'Y', '133');
INSERT INTO `dota_hero` VALUES ('84', 'Huskar', 'Sacred Warrior', null, null, null, null, null, null, null, 'Y', '55');
INSERT INTO `dota_hero` VALUES ('85', 'Admiral', 'Kunkka', null, null, null, null, null, null, null, 'Y', '66');
INSERT INTO `dota_hero` VALUES ('86', 'Rattletrap', 'Clockwerk Goblin', null, null, null, null, null, null, null, 'Y', '65');
INSERT INTO `dota_hero` VALUES ('87', 'Raigor Stonehoof', 'Earthshaker', null, null, null, null, null, null, null, 'Y', '41');
INSERT INTO `dota_hero` VALUES ('88', 'Purist Thunderwrath', 'Omniknight', null, null, null, null, null, null, null, 'Y', '47');
INSERT INTO `dota_hero` VALUES ('89', 'Mangix', 'Pandaren Brewmaster', null, null, null, null, null, null, null, 'Y', '52');
INSERT INTO `dota_hero` VALUES ('90', 'Cairne Bloodhoof', 'Tauren Chieftain', null, null, null, null, null, null, null, 'Y', '116');
INSERT INTO `dota_hero` VALUES ('91', 'Bradwarden', 'Centaur Warchief', null, null, null, null, null, null, null, 'Y', '17');
INSERT INTO `dota_hero` VALUES ('92', 'Leshrac the Malicious', 'Tormented Soul', null, null, null, null, null, null, null, 'Y', '90');
INSERT INTO `dota_hero` VALUES ('93', 'Kaldr', 'Ancient Apparition', null, null, null, null, null, null, null, 'Y', '128');
INSERT INTO `dota_hero` VALUES ('94', 'Harbinger', 'Obsidian Destroyer', null, null, null, null, null, null, null, 'Y', '70');
INSERT INTO `dota_hero` VALUES ('95', 'Slark', 'Murloc Nightcrawler', null, null, null, null, null, null, null, 'Y', '124');
INSERT INTO `dota_hero` VALUES ('96', 'Razor', 'Lightning Revenant', null, null, null, null, null, null, null, 'Y', '86');
INSERT INTO `dota_hero` VALUES ('97', 'Mortred', 'Phantom Assassin', null, null, null, null, null, null, null, 'Y', '97');
INSERT INTO `dota_hero` VALUES ('98', 'Lesale Deathbringer', 'Venomancer', null, null, null, null, null, null, null, 'Y', '106');
INSERT INTO `dota_hero` VALUES ('99', 'Anub\'arak', 'Nerubian Assassin', null, null, null, null, null, null, null, 'Y', '79');
INSERT INTO `dota_hero` VALUES ('100', 'Slardar', 'Slithereen Guard', null, null, null, null, null, null, null, 'Y', '81');
INSERT INTO `dota_hero` VALUES ('101', 'Squee Spleen and Spoon', 'Goblin Techies', null, null, null, null, null, null, null, 'Y', '107');
INSERT INTO `dota_hero` VALUES ('102', 'Raijin Thunderkeg', 'Storm Spirit', null, null, null, null, null, null, null, 'Y', '53');
INSERT INTO `dota_hero` VALUES ('103', 'Jakiro', 'Twin Head Dragon', null, null, null, null, null, null, null, 'Y', '46');
INSERT INTO `dota_hero` VALUES ('104', 'Ezalor', 'Keeper of the Light', null, null, null, null, null, null, null, 'Y', '121');
INSERT INTO `dota_hero` VALUES ('105', 'Aggron Stonebreaker', 'Ogre Magi', null, null, null, null, null, null, null, 'Y', '101');
INSERT INTO `dota_hero` VALUES ('106', 'Shendelzare Silkwood', 'Vengeful Spirit', null, null, null, null, null, null, null, 'Y', '8');
INSERT INTO `dota_hero` VALUES ('107', 'Rikimaru', 'Stealth Assassin', null, null, null, null, null, null, null, 'Y', '64');
INSERT INTO `dota_hero` VALUES ('108', 'Mirana Nightshade', 'Priestess of the Moon', null, null, null, null, null, null, null, 'Y', '51');
INSERT INTO `dota_hero` VALUES ('109', 'Lanaya', 'Templar Assassin', null, null, null, null, null, null, null, 'Y', '57');
INSERT INTO `dota_hero` VALUES ('110', 'Tresdin', 'Legion Commander', null, null, null, null, null, null, null, 'Y', '156');
INSERT INTO `dota_hero` VALUES ('111', 'Rooftrellen', 'Treant Protector', null, null, null, null, null, null, null, 'Y', '99');

-- ----------------------------
-- Table structure for `dota_range_attack`
-- ----------------------------
DROP TABLE IF EXISTS `dota_range_attack`;
CREATE TABLE `dota_range_attack` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dota_range_attack
-- ----------------------------
INSERT INTO `dota_range_attack` VALUES ('1', 'xáp lá cà');
INSERT INTO `dota_range_attack` VALUES ('2', 'bắn tỉa');
INSERT INTO `dota_range_attack` VALUES ('3', 'đánh lén');
INSERT INTO `dota_range_attack` VALUES ('4', 'sống chui,sống nhủi');
INSERT INTO `dota_range_attack` VALUES ('5', 'núp bóng người khác');
