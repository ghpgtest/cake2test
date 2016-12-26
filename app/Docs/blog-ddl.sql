/* まず、posts テーブルを作成します: */
CREATE TABLE posts (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50),
    body TEXT,
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
);

/* それから、テスト用に記事をいくつか入れておきます: */
INSERT INTO posts (title,body,created) VALUES ('タイトル1', 'これは、記事1の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル2', 'これは、記事2の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル3', 'これは、記事3の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル4', 'これは、記事4の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル5', 'これは、記事5の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル6', 'これは、記事6の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル7', 'これは、記事7の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル8', 'これは、記事8の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル9', 'これは、記事9の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル10', 'これは、記事10の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル11', 'これは、記事11の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル12', 'これは、記事12の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル13', 'これは、記事13の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル14', 'これは、記事14の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル15', 'これは、記事15の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル16', 'これは、記事16の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル17', 'これは、記事17の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル18', 'これは、記事18の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル19', 'これは、記事19の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル20', 'これは、記事20の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル21', 'これは、記事21の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル22', 'これは、記事22の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル23', 'これは、記事23の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル24', 'これは、記事24の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル25', 'これは、記事25の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル26', 'これは、記事26の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル27', 'これは、記事27の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル28', 'これは、記事28の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル29', 'これは、記事29の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル30', 'これは、記事30の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル31', 'これは、記事31の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル32', 'これは、記事32の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル33', 'これは、記事33の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル34', 'これは、記事34の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル35', 'これは、記事35の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル36', 'これは、記事36の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル37', 'これは、記事37の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル38', 'これは、記事38の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル39', 'これは、記事39の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル40', 'これは、記事40の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル41', 'これは、記事41の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル42', 'これは、記事42の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル43', 'これは、記事43の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル44', 'これは、記事44の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル45', 'これは、記事45の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル46', 'これは、記事46の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル47', 'これは、記事47の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル48', 'これは、記事48の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル49', 'これは、記事49の本文です。', NOW());
INSERT INTO posts (title,body,created) VALUES ('タイトル50', 'これは、記事50の本文です。', NOW());
