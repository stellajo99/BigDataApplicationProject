USE team05;
DROP TABLE IF EXISTS filter;
CREATE TABLE filter (
    filter_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    category VARCHAR(11) NOT NULL,
    lowerPrice INT(11) NOT NULL,
    upperPrice INT(11) NOT NULL,
);