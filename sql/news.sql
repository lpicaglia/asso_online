CREATE TABLE news(id_news INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
				  titre_news VARCHAR(100),
				  lib_news TEXT,
				  date_news TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
				  id_asso INT NOT NULL,
				  CONSTRAINT fk_newsAsso FOREIGN KEY(id_asso) REFERENCES association(id_asso));