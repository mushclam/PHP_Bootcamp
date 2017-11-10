-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 17-11-09 20:34
-- 서버 버전: 5.7.19
-- PHP 버전: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `php_bootcamp`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `comm_1`
--

CREATE TABLE `comm_1` (
  `id` tinyint(4) NOT NULL,
  `comname` char(20) NOT NULL,
  `comcont` text NOT NULL,
  `posted_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `comm_1`
--

INSERT INTO `comm_1` (`id`, `comname`, `comcont`, `posted_id`) VALUES
(1, 'hyesungson', '계속 참다보니...요즘은 술없인 잠을 잘수가 없어요....ㅠㅠ', 1),
(2, 'ss_u.n18', '와', 1),
(3, 'hansaenggag9139', '맞아요~~', 1),
(4, 'suuhyun2', '와...', 1),
(5, 'taekgu_', '아...진짜공감', 1),
(6, 'nandaeun', '와 소름돋았어요, 완전 공감!', 1);

-- --------------------------------------------------------

--
-- 테이블 구조 `comm_2`
--

CREATE TABLE `comm_2` (
  `id` tinyint(4) NOT NULL,
  `comname` char(20) NOT NULL,
  `comcont` text NOT NULL,
  `posted_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `comm_2`
--

INSERT INTO `comm_2` (`id`, `comname`, `comcont`, `posted_id`) VALUES
(1, 'khj_ngj', '저희도 먼저 말걸어주셔서 엄청 감사했어요 ㅎㅎㅎ. 응 그라 시집 제가 구매한 첫 시집이네요! 눈에 마음에 잘 새기고 있습니당~', 2),
(2, 'coolcatanice', '@khj_ngj 앗앗앗 정말요? 오마이갓 첫시집이시라니...먼가 부끄러워지네요 모쪼록 마음에 위안이 되는 글이길 바랄게요^^감사합니다', 2),
(3, 'hh.dal', '너무 감사했습니다! 작가님 덕분에 즐겁게 참여했어요~~', 2),
(4, 'coolcatanice', '@hh.dal 제가 좀 부산스럽고 어수선쟁이라 사고안난게 다행이에요..꼭 어딘가 부서지고 질질흘리고 다녀서 ㅋㅋㅋ', 2),
(5, '0320cherry', '예쁘당.....!!!!!^♡♡♡^', 2),
(6, 'konglalala', '감사합니다!', 2);

-- --------------------------------------------------------

--
-- 테이블 구조 `comm_3`
--

CREATE TABLE `comm_3` (
  `id` tinyint(4) NOT NULL,
  `comname` char(20) NOT NULL,
  `comcont` text NOT NULL,
  `posted_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `comm_3`
--

INSERT INTO `comm_3` (`id`, `comname`, `comcont`, `posted_id`) VALUES
(1, 'hosongsong', '와우 포스팅 감사합니다요 ㅎㅎㅎ', 3),
(2, 'coolcatanice', '@hosongsong 출근중이신가봐요~~오늘도 화이팅하시길 바랍니다! 저도 꼰대세대이긴하지만 너희때는 어떠니?라고 묻는 사람이 될게요^^~~~', 3),
(3, 'ryuhowoo', '감사합니다', 3);

-- --------------------------------------------------------

--
-- 테이블 구조 `comm_4`
--

CREATE TABLE `comm_4` (
  `id` tinyint(4) NOT NULL,
  `comname` char(20) NOT NULL,
  `comcont` text NOT NULL,
  `posted_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `posted`
--

CREATE TABLE `posted` (
  `id` tinyint(4) NOT NULL,
  `urid` tinyint(4) NOT NULL,
  `user_id` tinyint(4) NOT NULL,
  `contopic` tinytext NOT NULL,
  `likenum` int(11) NOT NULL,
  `mt` text NOT NULL,
  `commid` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `posted`
--

INSERT INTO `posted` (`id`, `urid`, `user_id`, `contopic`, `likenum`, `mt`, `commid`, `date`) VALUES
(1, 1, 1, 'img/us5.jpg', 24045, '', 1, '2017-11-06 12:00:00'),
(2, 2, 2, 'img/us2.jpg', 57, '#이봄 @konglalala', 2, '2017-11-06 07:00:00'),
(3, 2, 2, 'img/us3.jpg', 59, '#회사부적응퇴사불가능 #호송 #호송송 #류호우 @hosongsong #류호우 @ryuhowoo', 3, '2017-11-05 12:00:00'),
(4, 3, 3, 'img/us4.jpg', 193, '[입고 안내] 매거진 <부엌>을 발행하는 로우프레스에서 1년에 2번, 다양한 도시와 사람들을 통해 지속 가능한 삶에 대해 탐구하는 로컬 다큐멘터리 매거진을 만들었습니다. <나우 매거진> 창간호의 주제는', 4, '2017-11-03 12:00:00');

-- --------------------------------------------------------

--
-- 테이블 구조 `user`
--

CREATE TABLE `user` (
  `id` tinyint(4) NOT NULL,
  `uricon` tinytext NOT NULL,
  `urname` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `user`
--

INSERT INTO `user` (`id`, `uricon`, `urname`) VALUES
(1, 'img/up4.jpg', 'type4graphic'),
(2, 'img/up2.jpg', 'coolcatanice'),
(3, 'img/up3.jpg', 'thanksbooks');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `comm_1`
--
ALTER TABLE `comm_1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comm_1_posted1_idx` (`posted_id`);

--
-- 테이블의 인덱스 `comm_2`
--
ALTER TABLE `comm_2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comm_1_posted1_idx` (`posted_id`);

--
-- 테이블의 인덱스 `comm_3`
--
ALTER TABLE `comm_3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comm_1_posted1_idx` (`posted_id`);

--
-- 테이블의 인덱스 `comm_4`
--
ALTER TABLE `comm_4`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comm_1_posted1_idx` (`posted_id`);

--
-- 테이블의 인덱스 `posted`
--
ALTER TABLE `posted`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_posted_user1_idx` (`user_id`);

--
-- 테이블의 인덱스 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `comm_1`
--
ALTER TABLE `comm_1`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 테이블의 AUTO_INCREMENT `comm_2`
--
ALTER TABLE `comm_2`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 테이블의 AUTO_INCREMENT `comm_3`
--
ALTER TABLE `comm_3`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 테이블의 AUTO_INCREMENT `comm_4`
--
ALTER TABLE `comm_4`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `posted`
--
ALTER TABLE `posted`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 테이블의 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 덤프된 테이블의 제약사항
--

--
-- 테이블의 제약사항 `comm_1`
--
ALTER TABLE `comm_1`
  ADD CONSTRAINT `fk_comm_1_posted1` FOREIGN KEY (`posted_id`) REFERENCES `posted` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- 테이블의 제약사항 `comm_2`
--
ALTER TABLE `comm_2`
  ADD CONSTRAINT `fk_comm_1_posted10` FOREIGN KEY (`posted_id`) REFERENCES `posted` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- 테이블의 제약사항 `comm_3`
--
ALTER TABLE `comm_3`
  ADD CONSTRAINT `fk_comm_1_posted11` FOREIGN KEY (`posted_id`) REFERENCES `posted` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- 테이블의 제약사항 `comm_4`
--
ALTER TABLE `comm_4`
  ADD CONSTRAINT `fk_comm_1_posted12` FOREIGN KEY (`posted_id`) REFERENCES `posted` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- 테이블의 제약사항 `posted`
--
ALTER TABLE `posted`
  ADD CONSTRAINT `fk_posted_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
