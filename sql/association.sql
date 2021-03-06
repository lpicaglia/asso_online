CREATE TABLE association(id_asso INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
				   		 nom_asso VARCHAR(50) NOT NULL UNIQUE,
				   		 mail_asso VARCHAR(50) NOT NULL,
				   		 mdp_asso CHAR(32) NOT NULL,
				   		 crea_cpt_asso DATETIME NOT NULL,
				   		 maj_cpt_asso DATETIME,
				   		 adr_asso VARCHAR(100),
				   		 cplt_adr_asso VARCHAR(50),
				   		 cp_asso INT(5),
				   		 ville_asso VARCHAR(50),
				   		 tel_asso VARCHAR(10),
				   		 descr_asso VARCHAR(500),
				   		 logo_asso VARCHAR(50),
				   		 fb_asso VARCHAR(100),
				   		 twt_asso VARCHAR(100),
				   		 link_asso VARCHAR(100),
				   		 id_theme INT NOT NULL,
						 CONSTRAINT fk_assoTheme FOREIGN KEY(id_theme) REFERENCES theme(id_theme));