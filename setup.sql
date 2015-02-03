--CREATE TABLE posts
--(
--	id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
--	title VARCHAR(128),
--	text TEXT,
--	PRIMARY KEY(id)
--);

CREATE TABLE pages
(
	id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
	title VARCHAR(128),
	body TEXT,
	url VARCHAR(128) UNIQUE,
	published BOOL,
	PRIMARY KEY(id)
);
CREATE TABLE files
(
	id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
	title VARCHAR(128),
	body BLOB,
	url VARCHAR(128) UNIQUE,
	published BOOL,
	PRIMARY KEY(id)
);
CREATE TABLE top_menu
(
	id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
	title VARCHAR(128),
	url VARCHAR(128),
	published BOOL,
	PRIMARY KEY(id)
);
CREATE TABLE regions
(
	region VARCHAR(128) UNIQUE,
	title VARCHAR(128),
	body TEXT,
	published BOOL,
	PRIMARY KEY(region)
);
CREATE TABLE styles
(
	name VARCHAR(128) UNIQUE,
	body TEXT,
	published BOOL,
	PRIMARY KEY(name)
);