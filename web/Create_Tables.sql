CREATE DATABASE log;

\c log

CREATE TABLE public.user
(
	id SERIAL NOT NULL PRIMARY KEY,
	firstname VARCHAR(100) NOT NULL,
	lastname VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL UNIQUE,
	loginname VARCHAR(100) NOT NULL UNIQUE,
	password VARCHAR(100) NOT NULL
);

CREATE TABLE public.review
(
	id SERIAL NOT NULL PRIMARY KEY,
	rating SMALLINT NOT NULL,
	reccomend BOOLEAN NOT NULL,
	comment TEXT NOT NULL
);

CREATE TABLE public.game
(
	id SERIAL NOT NULL PRIMARY KEY,
	gamename VARCHAR(100) NOT NULL,
	developer VARCHAR(100),
	publisher VARCHAR(100),
	releasedate DATE,
	datecompleted DATE,
	completiontime SMALLINT,
	review_id INT NOT NULL REFERENCES public.review(id)
);

CREATE TABLE public.log
(
	id SERIAL NOT NULL PRIMARY KEY,
	user_id INT NOT NULL REFERENCES public.user(id),
	game_id INT NOT NULL REFERENCES public.game(id)
);


SQL UPDATE LOG:

ALTER TABLE public.user
ADD COLUMN loginname VARCHAR(100) NOT NULL UNIQUE,
ADD COLUMN password VARCHAR(100) NOT NULL;

ALTER TABLE public.game
DROP COLUMN review_id;

ALTER TABLE public.game
ALTER COLUMN completiontime TYPE VARCHAR(100);

ALTER TABLE public.review ALTER COLUMN rating drop not null;
ALTER TABLE public.review ALTER COLUMN reccomend drop not null;
ALTER TABLE public.review ALTER COLUMN comment drop not null;

ALTER TABLE public.game
ADD COLUMN userid INTEGER;

ALTER TABLE public.game
ADD COLUMN userid INTEGER;

ALTER TABLE public.game ADD COLUMN reviewId INTEGER;

ALTER TABLE public.game
ADD CONSTRAINT reviewId FOREIGN KEY (reviewId) REFERENCES public.review (id);

ALTER TABLE public.game
ALTER COLUMN releasedate TYPE VARCHAR(100);

ALTER TABLE public.game
ALTER COLUMN datecompleted TYPE VARCHAR(100);