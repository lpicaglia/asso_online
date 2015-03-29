CREATE TABLE theme(id_theme INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
				   lib_theme VARCHAR(200) NOT NULL,
				   id_domaine INT NOT NULL,
				   CONSTRAINT fk_themeDomaine FOREIGN KEY(id_domaine) REFERENCES domaine(id_domaine));

INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (1, "associations à caractère politique général", 1);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (2, "soutien, financement de partis et de campagnes électorales", 1);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (3, "action politique locale", 1);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (4, "action politique globale", 1);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (5, "activités citoyennes européennes", 1);    

INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (6, "associations philanthropiques", 2);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (7, "amicales laïques", 2);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (8, "clubs de réflexion", 2);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (9, "organisation de conférences", 2);

INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (10, "défense de la paix", 3);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (11, "défense des droits des enfants", 3);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (12, "défense des libertés publiques et des droits de l'Homme", 3);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (13, "défense des droits des femmes, condition féminine", 3);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (14, "défense de droits de personnes homosexuelles", 3);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (15, "défense des droits des personnes en situation de handicap", 3);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (16, "défense de droits de personnes rapatriées", 3);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (17, "défense de droits de personnes étrangères ou immigrées, de personnes réfugiées", 3);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (18, "association pour la défense de droits de minorités", 3);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (19, "lutte contre les discriminations", 3);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (20, "activités civiques, information civique", 3);    
        
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (21, "médiation, prévention", 4);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (22, "contrôle judiciaire, associations de personnels de justice", 4);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (23, "accès aux droits dans les tribunaux, assistance juridique", 4);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (24, "défense des droits des victimes", 4);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (25, "maisons du droit, accès au droit", 4);    

INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (26, "presse, édition", 5);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (27, "radios privées", 5);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (28, "audiovisuel", 5);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (29, "réseaux internet", 5);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (30, "autres supports de communication", 5);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (31, "auditeurs, consommateurs d'outils d'information et de communication", 5);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (32, "professionnels de l'information et de communication", 5);    
    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (33, "bibliothèques, ludothèques, discothèques, vidéothèques", 6);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (34, "expression écrite, littérature, poésie", 6);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (35, "arts graphiques, bandes dessinées, peinture, sculpture, architecture", 6);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (36, "photographie, cinéma (dont ciné-clubs)", 6);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (37, "chant choral, musique", 6);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (38, "danse", 6);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (39, "folklore", 6);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (40, "théâtre, marionnettes, cirque, spectacles de variété", 6);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (41, "artisanat, travaux manuels, bricolage, expositions", 6);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (42, "promotion de l'art et des artistes", 6);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (43, "loisirs scientifiques et techniques", 6);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (44, "langues, dialectes, patois", 6);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (45, "arts de la rue", 6);    

INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (46, "aéroclubs", 7);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (47, "modélisme", 7);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (48, "bridge, jeux de cartes, échecs, dames, jeux de société", 7);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (49, "billard, quilles", 7);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (50, "clubs de collectionneurs sauf collectionneurs de véhicules, modélisme, philatélie, numismatique", 7);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (51, "collectionneurs de véhicules, clubs amateurs de voitures anciennes", 7);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (52, "cercles privés, fan clubs", 7);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (53, "activités festives (soirées.)", 7);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (54, "élevages canins, clubs de chiens de défense", 7);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (55, "animaux familiers, colombophilie, aquariophilie", 7);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (56, "gastronomie, oenologie, confréries, gourmets", 7);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (57, "jardinage, jardins ouvriers, floralies", 7);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (58, "échanges locaux, réseaux d'échanges", 7);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (59, "centres de loisirs, clubs de loisirs multiples", 7);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (60, "relaxation, sophrologie", 7);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (61, "radioamateurs", 7);

INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (62, "maisons de jeunes, foyers, clubs de jeunes", 8);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (63, "maisons de la culture, office municipal,centres culturels", 8);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (64, "loisirs pour personnes en situation de handicap", 8);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (65, "associations socio-éducatives, scoutisme", 8);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (66, "centres aérés, colonies de vacances", 8);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (67, "mouvements éducatifs de jeunesse et d'éducation populaire", 8);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (68, "comités des fêtes", 8);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (69, "foyers ruraux", 8);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (70, "clubs troisième âge", 8);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (71, "majorettes, twirlings, carnavals, défilés", 8);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (72, "jumelages, échanges culturels, organisation d'échanges linguistiques, échanges culturels au plan international", 8);

INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (73, "collections d'objets, de documents, bibliothèques spécialisées pour la sauvegarde et l'entretien du patrimoine", 9);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (74, "musées, collections historiques", 9);        
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (75, "associations, sociétés savantes pour des études historiques, histoire du patrimoine", 9);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (76, "sociétés, clubs de généalogie", 9);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (77, "commémorations, entretien de monuments et sites historiques, souvenir militaire", 9);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (78, "comités de défense du patrimoine", 9);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (79, "construction de monuments (sauf lieux de culte)", 9);     

INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (80, "arbitrage", 10);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (81, "associations multisports locales", 10);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (82, "associations multisports scolaires ou universitaires", 10);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (83, "associations multisports d'entreprise", 10);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (84, "handisport", 10);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (85, "athlétisme (triathlon, pentathlon, footing, jogging)", 10);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (86, "aviron, canoë-kayak (aviron, rafting, canoë-kayak, joutes)", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (87, "badminton (badminton, squash, pelote basque)", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (88, "boules (pétanque, boules)", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (89, "bowling", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (90, "danse sportive (danse sportive, hip hop, claquettes)", 10);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (91, "équitation (équitation, hippisme, courses camarguaise, landaise)", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (92, "escalade, montagne (escalade, spéléologie, via ferrata, canyonisme, alpinisme)", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (93, "escrime (escrime)", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (94, "basket-ball", 10);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (95, "handball", 10);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (96, "football (football, futsal)", 10);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (97, "rugby (rugby à 13, à 15)", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (98, "volley ball (volley, beach volley)", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (99, "autres sports collectifs (baseball, hockey sur gazon, hockey sur glace, football américain)", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (100, "hockey sur glace, sports de glace", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (101, "nautisme, glisse sur eau (ski nautique, surf, char à voile)", 10);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (102, "golf", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (103, "gymnastique (gymnastique, gymnastique d.entretien, éducation physique, yoga), aérobic", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (104, "haltérophilie", 10);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (105, "marche sportive (randonnée pédestre, raid, trekking, course orientation)", 10);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (106, "musculation (culturisme, musculation)", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (107, "natation - baignade (natation, plongée)", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (108, "roller - skate", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (109, "sports aériens (avion, planeur, ULM, parachutisme)", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (110, "judo", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (111, "sports de combat (boxe, kick box, boxe thaï, lutte)", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (112, "autres arts martiaux (karaté, aïkido, taekwondo)", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (113, "sports de neige (ski alpin, ski de fond, snowboard) sports de montagne", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (114, "sports mécaniques (sport automobile, moto, trial)", 10);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (115, "tennis (tennis, longue paume)", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (116, "tennis de table (tennis de table, ping-pong)", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (117, "tir (tir à l'arc, tir à balle, ball-trap), javelot", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (118, "cyclisme (cyclisme, vélo, VTT, y compris course d'orientation à vélo, cyclotourisme)", 10);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (119, "voile (voile, dériveur, planche à voile)", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (120, "gestion d'équipements sportifs, organisation de rencontres sportives, organisation de championnats, clubs de supporters", 10);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (121, "associations pour la promotion du sport, médailles, mérite sportif", 10);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (122, "activités de plein air (dont saut à l'élastique)", 10);    

INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (123, "chasse", 11); 
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (124, "pêche", 11); 

INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (125, "organisation de professions (hors caractère syndical)", 12);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (126, "association du personnel d'une entreprise (hors caractère syndical)", 12); 
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (127, "groupements d'entraide et de solidarité", 12);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (128, "amicale de personnes originaires d'un même pays (hors défense des droits des étrangers), d'une même région du monde", 12);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (129, "amicale de personnes originaires d'une même région", 12);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (130, "associations féminines pour l'entraide et la solidarité (hors défense de droits fondamentaux)", 12);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (131, "associations de personnes homosexuelles pour l'entraide et la solidarité (hors défense de droits fondamentaux)", 12);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (132, "associations de personnes en situation de handicap pour l'entraide et la solidarité (hors défense de droits fondamentaux)", 12);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (133, "associations de classe d'âge", 12);    
    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (134, "parents d'élèves", 13);               
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (135, "organisation de professions enseignantes, amicales de personnel", 13);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (136, "associations périscolaires, coopération scolaire, aide à l'enseignement", 13);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (137, "oeuvres sociales en faveur des élèves, .uvres en faveur des pupilles de la nation", 13);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (138, "organisme de gestion d'établissement d'enseignement général et technique", 13);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (139, "organisme de gestion d'établissement d'enseignement supérieur", 13);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (140, "établissement de formation professionnelle, de formation continue", 13);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (141, "centre d'enseignement et de formation", 13);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (142, "associations d'étudiants, d'élèves", 13);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (143, "amicales, associations d'anciens étudiants, d'anciens élèves", 13);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (144, "amicales, associations du personnel d'établissements scolaires ou universitaires", 13);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (145, "organisation, financement de voyages d'études, d'échanges, pour scolaires ou universitaires", 13);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (146, "études et formatons linguistiques", 13);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (147, "promotion de titres, de diplômes", 13);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (148, "apprentissage", 13);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (149, "maisons familiales rurales", 13);

INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (150, "recherche sur l'éducation et la formation", 14);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (151, "recherche sur la culture", 14); 
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (152, "recherche sur la vie sociale et politique", 14);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (153, "recherche sur l'environnement et le climat", 14);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (154, "association de recherches scientifiques, sciences physiques, sciences humaines", 14);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (155, "autres associations de recherche", 14);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (156, "diffusion de savoirs, sociétés savantes, sociétés académiques", 14);    
    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (157, "cliniques, centres médicaux, hôpitaux, sanatoriums, établissements de rééducation, maisons de convalescence", 15);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (158, "hôpitaux psychiatriques, soins ambulatoires en santé mentale", 15);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (159, "dispensaires, soins infirmiers, services paramédicaux, services de garde", 15);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (160, "services médicaux d'urgence", 15);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (161, "centres de réadaptation", 15);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (162, "accompagnement, aide aux malades", 15);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (163, "don de sang, don d'organe", 15);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (164, "gestion de matériel médical", 15);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (165, "hygiène diététique", 15);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (166, "accueil, information pour contraception et avortement", 15);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (167, "médecine du travail", 15);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (168, "dépistage, prévention du sida", 15);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (169, "éducation sanitaire, prévention générale", 15);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (170, "prévention de maladies, dépistage de maladies (autres que le sida)", 15);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (171, "association de personnes malades, ou anciens malades", 15);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (172, "homéopathie, médecines douces", 15);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (173, "organisation des professions médicales, organisation des professions paramédicales", 15);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (174, "organisation de congrès médicaux", 15);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (175, "recherche médicale", 15);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (176, "financement de la recherche médicale", 15);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (177, "médecine animale, vétérinaire", 15);    
       
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (178, "accueil et protection de la petite enfance", 16);  
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (179, "établissements et services pour adolescents en difficulté", 16);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (180, "établissements et services pour enfants handicapés, établissements et services pour adultes handicapés, y compris les CAT (centres d'aide par le travail)", 16);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (181, "établissements et services pour adultes en difficulté, CHRS (centres d'hébergement et de réadaptation sociale)", 16);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (182, "prévention et lutte contre l'alcoolisme, le tabagisme, la toxicomanie", 16);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (183, "aide aux accidentés du travail", 16);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (184, "aide aux victimes de maladies professionnelles", 16);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (185, "aide sociale aux personnes en situation de handicap", 16);    
 
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (186, "aide et conseils aux familles", 17);   
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (187, "associations familiales, services sociaux pour les familles", 17);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (188, "centres sociaux, foyers de jeunes travailleurs, centres d'études et d'action sociale", 17);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (189, "lutte contre le surendettement", 17);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (190, "lutte contre l'illettrisme", 17);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (191, "aide à l'insertion des jeunes", 17);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (192, "groupements de chômeurs, aide aux chômeurs", 17);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (193, "aide aux réfugiés et aux immigrés (hors défense de droits fondamentaux)", 17);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (194, "aide aux victimes de calamités naturelles, de catastrophes naturelles", 17);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (195, "aide aux victimes de violences conjugales", 17);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (196, "aide aux victimes de violences faites aux enfants", 17);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (197, "aide aux personnes en danger, solitude, désespoir, soutien psychologique et moral", 17);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (198, "lutte contre la violence routière", 17);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (199, "lutte contre diverses formes de violence", 17);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (200, "foyers socio-éducatifs", 17);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (201, "réinsertion des délinquants", 17);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (202, "soutien aux détenus, reclassement des détenus", 17);    
  
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (203, "secours financiers et autres services aux personnes en difficulté", 18);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (204, "secours en nature, distribution de nourriture et de vêtements", 18);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (205, "associations caritatives à but multiple", 18);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (206, "associations caritatives intervenant au plan international", 18);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (207, "développement du bénévolat", 18);    
     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (208, "crèches, garderies, haltes garderies", 19);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (209, "aide à domicile", 19);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (210, "services aux personnes âgées (téléalarme)", 19);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (211, "foyers pour personnes âgées, maisons de retraite, maisons de retraite médicalisées", 19);    

INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (212, "cantines, restaurants d'entreprises", 20);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (213, "centres de gestion, centres juridiques, audits", 20);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (214, "gestion financière, gestion immobilière", 20);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (215, "études techniques", 20);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (216, "groupement d'achat, groupement d'entreprises", 20);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (217, "amicales de commerçants, organisation de foires", 20);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (218, "chambres de commerce, chambres économiques", 20);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (219, "association à but commercial, développement économique", 20);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (220, "transports", 20);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (221, "caisses de retraite, de prévoyance, de pensions", 20);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (222, "caisses de congés payés, caisses de secours", 20);    

INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (223, "usagers de services publics", 21);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (224, "mouvements de consommateurs", 21);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (225, "association de défense des contribuables", 21);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (226, "association d'actionnaires, d'épargnants", 21);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (227, "groupements de salariés à caractère syndical", 21);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (228, "groupements professionnels", 21);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (229, "associations de défense d'intérêts des retraités ou des personnes âgées", 21);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (230, "associations d'exploitants agricoles, élevage, horticulture, aviculture, apiculture, viticulture, viniculture", 21);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (231, "associations d'intérêts maritimes, marins", 21);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (232, "associations pour la représentation d'artisans, de commerçants", 21);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (233, "unions patronales", 21);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (234, "association de représentation de professions libérales", 21);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (235, "représentation d'intérêts économiques sectoriels", 21);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (236, "représentation d'intérêts régionaux et locaux", 21);    

INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (237, "pollutions, assainissement", 22);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (238, "ressources naturelles", 22);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (239, "espaces naturels", 22);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (240, "protection de sites naturels", 22);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (241, "préservation de la faune sauvage", 22);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (242, "protection des animaux", 22);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (243, "préservation de la flore sauvage", 22);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (244, "comités de défense, comités de sauvegarde", 22);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (245, "mouvements écologiques", 22);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (246, "défense et amélioration du cadre de vie", 22);     
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (247, "actions de sensibilisation et d'éducation à l'environnement et au développement durable", 22);    

INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (248, "comité, défense d'un emploi", 23);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (249, "entreprises d'insertion, associations intermédiaires, régies de quartier", 23);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (250, "comités de défense et d'animation de quartier, association locale ou municipale", 23);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (251, "groupement d'employeurs", 23);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (252, "aide à la création d'activités économiques individuelles", 23);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (253, "promotion d'initiatives de développement durable", 23);    
                    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (254, "aide au logement", 24);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (255, "associations et comités de locataires, de propriétaires, comités de logement", 24);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (256, "réhabilitation et construction de logements", 24);    

INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (257, "auberges de jeunesse, organisation de voyages", 25);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (258, "maisons et villages de vacances", 25);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (259, "gîtes ruraux, camping, caravaning, naturisme", 25); 
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (260, "syndicats d'initiative, offices de tourisme, salons du tourisme", 25);    
    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (261, "amicale de sapeurs pompiers", 26); 
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (262, "sauvetage, secourisme, protection civile", 26);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (263, "prévention, formation, cours de secourisme", 26);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (264, "sécurité routière", 26);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (265, "sauvetage en mer", 26);    
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (266, "sécurité et sauvetage en montagne", 26);    

INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (267, "anciens combattants", 27);
INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (268, "associations de militaires, amicales, associations de conscrits", 27);

INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (269, "activités religieuses, spirituelles ou philosophiques", 28);

INSERT INTO theme(id_theme, lib_theme, id_domaine) VALUES (270, "domaines divers, domaines de nomenclature sitadele à reclasser", 29);