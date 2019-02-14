CREATE DATABASE log;

\c log

CREATE TABLE public.user
(
	id SERIAL NOT NULL PRIMARY KEY,
	firstname VARCHAR(100) NOT NULL,
	lastname VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL UNIQUE
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


