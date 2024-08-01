create database ktlk_coursework;
use ktlk_coursework;

CREATE TABLE user (
    user_id INT PRIMARY KEY NOT NULL auto_increment,
    firstname VARCHAR(50),
    lastname VARCHAR(50),
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);

CREATE TABLE score (
    score_id INT PRIMARY KEY NOT NULL auto_increment,
    user_id INT NOT NULL,
    happiness INT,
    anxiety INT,
    workloadmanagement INT,
    date DATE,
    FOREIGN KEY (user_id) REFERENCES user(user_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

select * from score;

insert into score(user_id, happiness, anxiety, workloadmanagement, date) Values(
1, 1,1,1,'2024-08-01');

DELIMITER //

CREATE PROCEDURE checkExists (
    IN user_id INT,
    IN date DATE
)
BEGIN
    SELECT * FROM score
    WHERE user_id = user_id
      AND date = date;
END //

DELIMITER ;

CALL checkExists(1,'2024-08-01');

INSERT INTO score(user_id, happiness, anxiety, workloadmanagemnt, date) VALUES (
?,?,?,?, curdate());

select * from score;	
delete from score where date = curdate();

CALL checkExists(1,'2024-08-1');

SELECT * FROM score WHERE user_id = 1 AND date = '2024-08-01';