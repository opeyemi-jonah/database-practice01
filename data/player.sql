CREATE DATABASE Athletes;
USE Athletes;
CREATE TABLE athlete(
athleteId BINARY(16) NOT NULL,
athleteFirstname VARCHAR (30),
athleteLastname VARCHAR (39),
athleteHighSchool VARCHAR (50),
athleteCollege VARCHAR (50),
athleteHeight DECIMAL (4),
athleteWeight DECIMAL (5),
athleteWingspan DECIMAL (4),
athleteSport VARCHAR (50),
PRIMARY KEY (athleteId),
INDEX (athleteFirstname)
);

