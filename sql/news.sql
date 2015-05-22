CREATE TABLE news(id_news INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
				  titre_news VARCHAR(100),
				  lib_news TEXT,
				  id_asso INT NOT NULL,
				  date_news TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
				  maj_news TIMESTAMP,
				  CONSTRAINT fk_newsAsso FOREIGN KEY(id_asso) REFERENCES association(id_asso));