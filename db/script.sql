CREATE TABLE USER_INFO (
 ID SERIAL,
 USERNAME TEXT NOT NULL UNIQUE,
 FIRST TEXT NOT NULL,
 LAST TEXT NOT NULL,
 PRIMARY KEY(ID, USERNAME)
);

CREATE TABLE EVENT (
 USERNAME TEXT REFERENCES USER_INFO(USERNAME),
 TITLE TEXT NOT NULL UNIQUE,
 START_DATE DATE NOT NULL,
 END_DATE DATE NOT NULL,
 START_TIME TIME NOT NULL,
 END_TIME TIME NOT NULL,
 LOCATION TEXT NOT NULL,
 PRIMARY KEY(TITLE)
);

ALTER TABLE "USER" ADD UNIQUE (USERNAME);

ALTER TABLE EVENT DROP CONSTRAINT EVENT_USERNAME_FKEY;

ALTER TABLE EVENT ADD CONSTRAINT FK1 FOREIGN KEY (USERNAME) REFERENCES USER_INFO (USERNAME);