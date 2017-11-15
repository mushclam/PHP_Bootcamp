INSERT INTO `user` (`nickname`) VALUES
('hyesungson'),
('ss_u.n18'),
('hansaenggag9139'),
('suuhyun2'),
('taekgu_'),
('nandaeun'),
('khj_ngj'),
('hh.dal'),
('0320cherry'),
('konglalala'),
('hosongsong'),
('ryuhowoo');

SELECT iduser, nickname FROM mydb.user ORDER BY iduser;

INSERT INTO `comment` (`post_idpost`, `user_iduser`, `content`, `date`) VALUES
(1, 4, '계속 참다보니...요즘은 술없인 잠을 잘수가 없어요....ㅠㅠ', now()),
(1, 5, '와', now()),
(1, 6, '맞아요~~', now()),
(1, 7, '와...', now()),
(1, 8, '아...진짜공감', now()),
(1, 9, '와 소름돋았어요, 완전 공감!', now()),
(2, 10, '저희도 먼저 말걸어주셔서 엄청 감사했어요 ㅎㅎㅎ. 응 그라 시집 제가 구매한 첫 시집이네요! 눈에 마음에 잘 새기고 있습니당~', now()),
(2, 2, '@khj_ngj 앗앗앗 정말요? 오마이갓 첫시집이시라니...먼가 부끄러워지네요 모쪼록 마음에 위안이 되는 글이길 바랄게요^^감사합니다', now()),
(2, 11, '너무 감사했습니다! 작가님 덕분에 즐겁게 참여했어요~~', now()),
(2, 2, '@hh.dal 제가 좀 부산스럽고 어수선쟁이라 사고안난게 다행이에요..꼭 어딘가 부서지고 질질흘리고 다녀서 ㅋㅋㅋ', now()),
(2, 12, '예쁘당.....!!!!!^♡♡♡^', now()),
(2, 13, '감사합니다!', now()),
(3, 14, '와우 포스팅 감사합니다요 ㅎㅎㅎ', now()),
(3, 2, '@hosongsong 출근중이신가봐요~~오늘도 화이팅하시길 바랍니다! 저도 꼰대세대이긴하지만 너희때는 어떠니?라고 묻는 사람이 될게요^^~~~', now()),
(3, 15, '감사합니다', now());

SELECT * FROM mydb.comment;

INSERT INTO `like` (`post_idpost`, `user_iduser`, `date`, `click`) VALUES
(1, 1, now(), 1),
(1, 2, now(), 1),
(1, 3, now(), 1),
(1, 4, now(), 1),
(1, 5, now(), 1),
(1, 6, now(), 1),
(1, 7, now(), 1),
(1, 8, now(), 1),
(1, 9, now(), 1),
(1, 10, now(), 1),
(1, 11, now(), 1),
(1, 12, now(), 1),
(1, 13, now(), 1),
(1, 14, now(), 1),
(1, 15, now(), 1),
(2, 1, now(), 1),
(2, 2, now(), 1),
(2, 3, now(), 1),
(2, 4, now(), 1),
(2, 5, now(), 1),
(2, 6, now(), 1),
(2, 7, now(), 1),
(2, 8, now(), 1),
(2, 9, now(), 1),
(2, 10, now(), 1),
(2, 11, now(), 1),
(2, 12, now(), 1),
(2, 13, now(), 1),
(3, 1, now(), 1),
(3, 2, now(), 1),
(3, 3, now(), 1),
(3, 4, now(), 1),
(3, 5, now(), 1),
(3, 6, now(), 1),
(3, 7, now(), 1),
(4, 1, now(), 1),
(4, 2, now(), 1),
(4, 3, now(), 1);

SELECT * FROM `user`;
SELECT p.`idpost`, u.`icon`, u.`nickname`, p.`picture`, p.`content`, p.`date` FROM `post` AS p LEFT JOIN `user` AS u ON p.user_iduser = u.iduser;

SELECT u.nickname, c.post_idpost, c.content FROM `comment` AS c LEFT JOIN `user` AS u ON c.user_iduser=u.iduser WHERE c.post_idpost=1;

SELECT COUNT(*) FROM `like` WHERE post_idpost=1;