CREATE DATABASE heroes;

USE heroes;

CREATE TABLE heroes(
	id INT NOT NULL,
	name VARCHAR(200) NOT NULL,
	realname VARCHAR(200)  NOT NULL,
	rating INT NOT NULL,
	teamaffiliation VARCHAR(100) NOT NULL);
	
INSERT INTO heroes (id, name, realname, rating, teamaffiliation)
			VALUES(1, 'Captain America', 'Steve Roger', 3, 'Avengers'), 
				  (2, 'Batman', 'Bruce Wayne', 5, 'Justice League');
				  (2, 'Mulher Maravilha', 'Linda Karter', 5, 'DC');
				  
ALTER TABLE heroes
	ADD PRIMARY KEY(id);
	
ALTER TABLE heroes
	MODIFY id INT NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
	