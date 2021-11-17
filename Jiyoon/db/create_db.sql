create database team05;
use team05;

create table restaurant(
  rest_id int not null AUTO_INCREMENT,
  name varchar(100),
  location varchar(100),
  country varchar(100),
  avg_price float,
  avg_rating float, 
  menu varchar(100),
  review_count int(100),
  primary key(rest_id)
);
insert into restaurant values(NULL,"Yaa Mohaideen Briyani","Pallavaram","Chinese",25.0,4.3, "SpringRoll Dimsum ", 1500);
insert into restaurant values(NULL,"Sukkubhai Biriyani","Alandur","Korean",50.0,4.4, "Japche Bulgogi ", 3059);
insert into restaurant values(NULL,"SS Hyderabad Biryani","Kodambakkam","Chinese",25.0,4.3, "Dumplings Wontons ", 1361);
insert into restaurant values(NULL,"KFC","Perambur","Korean",25.0,4.0, "Bulgogi Tteokbokki ", 1101);
insert into restaurant values(NULL,"Tasty Kitchen","Perambur","Dessert",22.5,4.2, "brownies donut ", 617);
insert into restaurant values(NULL,"Dine N Fun","Medavakkam","Chinese",22.5,4.1, "SpringRoll Dumplings ", 567);
insert into restaurant values(NULL,"Cafe Arabica","Anna Nagar East","Japanese",40.0,4.3, "Omuraisu Udon ", 668);
insert into restaurant values(NULL,"Savoury Sea Shell","Anna Nagar East","Japanese",70.0,4.2, "Ramen Sushi ", 2564);
insert into restaurant values(NULL,"Sangeetha Veg Restaurant","T. Nagar","Dessert",40.0,4.4, "pancakes donut ", 1578);
insert into restaurant values(NULL,"McDonald's","Velachery","Chinese",25.0,3.9, "Dimsum Dumplings ", 743);
insert into restaurant values(NULL,"Kovai Alankar Vilas","Anna Nagar East","Japanese",35.0,4.4, "Donburi Ramen ", 961);
insert into restaurant values(NULL,"Hotel Al Buhari","Vadapalani","Chinese",17.5,4.0, "SpringRoll SpringRoll ", 982);
insert into restaurant values(NULL,"Dindigul Thalappakatti","Porur","Western",45.0,4.3, "Hamburger Steak ", 770);
insert into restaurant values(NULL,"Hotel Paramount","Kilpauk","Chinese",25.0,4.3, "Dimsum Dumplings ", 1266);
insert into restaurant values(NULL,"Arab Street","Ashok Nagar","Western",40.0,4.1, "Steak Pizza ", 1363);
insert into restaurant values(NULL,"Abid's","Chetpet","Dessert",60.0,4.2, "brownies pancakes ", 742);
insert into restaurant values(NULL,"Malabar Biriyani Center","Aminijikarai","Japanese",22.5,4.1, "Tempura Omuraisu ", 660);
insert into restaurant values(NULL,"Velidis","Ramapuram","Korean",25.0,4.2, "Bulgogi Bibimbap ", 802);
insert into restaurant values(NULL,"Mami Tiffen Stall","Mylapore","Japanese",20.0,4.3, "Udon Omuraisu ", 578);
insert into restaurant values(NULL,"Supriya Andhra Restaurant","Thuraipakkam","Western",32.5,4.2, "Pizza Hamburger ", 1992);
insert into restaurant values(NULL,"Eating Circles","Alwarpet","Korean",12.5,4.7, "Bulgogi Tteokbokki ", 782);
insert into restaurant values(NULL,"Salem RR Briyani Unavagam","Velachery","Western",27.5,4.2, "Sandwich Salad ", 1180);
insert into restaurant values(NULL,"V4 Midnight Dhabba","Mogappair","Dessert",27.5,4.3, "cookie pancakes ", 1139);
insert into restaurant values(NULL,"Bakya Veg Restaurant","West Mambalam","Dessert",20.0,4.2, "waffles waffles ", 457);
insert into restaurant values(NULL,"Midnight Madness","Adyar","Korean",22.5,4.1, "Bulgogi Bulgogi ", 625);
insert into restaurant values(NULL,"Hotel Crescent","Nungambakkam","Chinese",25.0,4.3, "Dumplings Dumplings ", 1030);
insert into restaurant values(NULL,"Zaitoon","Royapettah","Chinese",45.0,4.1, "Dimsum Wontons ", 1118);
insert into restaurant values(NULL,"Nithya Amirtham","Mylapore","Korean",25.0,4.2, "Japche Tteokbokki ", 403);
insert into restaurant values(NULL,"Shri Balaajee Bhavan","Chromepet","Japanese",15.0,4.3, "Omuraisu Udon ", 602);
insert into restaurant values(NULL,"Kakada Ramprasad","Kilpauk","Japanese",22.5,4.3, "Udon Ramen ", 455);
insert into restaurant values(NULL,"Rasavid","Velachery","Japanese",40.0,3.9, "Udon Sushi ", 350);
insert into restaurant values(NULL,"Buhari","Chromepet","Japanese",40.0,3.5, "Udon Omuraisu ", 646);
insert into restaurant values(NULL,"Domino's Pizza","Kolathur","Korean",20.0,4.0, "Bulgogi Japche ", 429);
insert into restaurant values(NULL,"Shree Mithai","Chetpet","Japanese",15.0,4.6, "Omuraisu Tempura ", 1085);
insert into restaurant values(NULL,"New Andhra Meals Hotel","Valasaravakkam","Dessert",30.0,3.9, "donut pancakes ", 704);
insert into restaurant values(NULL,"Punjabi Nation","Guindy","Japanese",35.0,4.0, "Tempura Donburi ", 712);
insert into restaurant values(NULL,"Krishna's Dosa Kadai","Mogappair","Western",17.5,4.2, "Hamburger Hamburger ", 692);
insert into restaurant values(NULL,"Al Sham","Potheri","Korean",37.5,3.9, "Bibimbap Bibimbap ", 601);
insert into restaurant values(NULL,"Orange Wok","Nungambakkam","Western",50.0,4.2, "Salad Steak ", 774);
insert into restaurant values(NULL,"Ghuma Ghumalu","Navallur","Western",25.0,4.2, "Steak Pizza ", 1059);
insert into restaurant values(NULL,"KPS Ambur Biriyani","Mogappair","Chinese",12.5,3.6, "Dumplings Dumplings ", 409);
insert into restaurant values(NULL,"Pedreno's","Mylapore","Dessert",60.0,4.3, "waffles brownies ", 946);
insert into restaurant values(NULL,"Madras Biryani","Perambur","Western",20.0,4.0, "Steak Salad ", 559);
insert into restaurant values(NULL,"Palmshore","Egmore","Chinese",50.0,4.4, "Dimsum SpringRoll ", 2162);
insert into restaurant values(NULL,"Hotel Sri Vairam","Porur","Western",15.0,4.0, "Pizza Sandwich ", 523);
insert into restaurant values(NULL,"Sea Emperor","Madipakkam","Korean",45.0,3.8, "Japche Japche ", 602);
insert into restaurant values(NULL,"Andhikkadai","Velachery","Chinese",10.0,4.6, "SpringRoll Wontons ", 908);
insert into restaurant values(NULL,"Paradise Biryani","Thiruvanmiyur","Western",45.0,4.2, "Pizza Salad ", 1082);
insert into restaurant values(NULL,"A2B - Adyar Ananda Bhavan","Velachery","Japanese",30.0,3.6, "Sushi Udon ", 565);
insert into restaurant values(NULL,"Copper Kitchen","Saligramam","Chinese",50.0,4.2, "Dimsum SpringRoll ", 2275);
insert into restaurant values(NULL,"Fazari","Chromepet","Chinese",37.5,4.2, "Dimsum Wontons ", 1288);
insert into restaurant values(NULL,"Guntur Gongura","Sholinganallur","Chinese",25.0,4.1, "SpringRoll Dumplings ", 2449);
insert into restaurant values(NULL,"Andhra Ruchulu","Porur","Western",15.0,4.1, "Sandwich Sandwich ", 835);
insert into restaurant values(NULL,"Brownie Heaven","Royapettah","Dessert",17.5,4.9, "pancakes cookie ", 842);
insert into restaurant values(NULL,"Hotel Junior Kuppanna","T. Nagar","Dessert",35.0,4.3, "brownies donut ", 1009);
insert into restaurant values(NULL,"Mezze","Alwarpet","Korean",35.0,4.7, "Tteokbokki Tteokbokki ", 1152);
insert into restaurant values(NULL,"Pantry d'or","Anna Nagar East","Western",37.5,4.4, "Sandwich Pizza ", 2485);
insert into restaurant values(NULL,"Maggevala - Curly Cravings","Kilpauk","Western",20.0,4.0, "Sandwich Salad ", 731);
insert into restaurant values(NULL,"Amadora Gourmet Ice Cream & Sorbet","Nungambakkam","Western",25.0,4.8, "Hamburger Steak ", 1516);
insert into restaurant values(NULL,"Eatza Pizza","Nungambakkam","Japanese",30.0,3.7, "Donburi Omuraisu ", 1135);
insert into restaurant values(NULL,"Samco","Velachery","Chinese",40.0,4.3, "SpringRoll Dimsum ", 1078);
insert into restaurant values(NULL,"Sree Akshayam","Anna Nagar East","Western",35.0,4.3, "Salad Sandwich ", 1225);
insert into restaurant values(NULL,"Biriyani Palace","Porur","Chinese",30.0,4.0, "SpringRoll Dumplings ", 849);
insert into restaurant values(NULL,"Pumpkin Tales","Alwarpet","Korean",90.0,4.5, "Bulgogi Bulgogi ", 768);
insert into restaurant values(NULL,"Sandy's Chocolate Laboratory","Nungambakkam","Japanese",70.0,4.5, "Ramen Tempura ", 2252);
insert into restaurant values(NULL,"Hotel Saravana Bhavan","Perungudi","Chinese",27.5,2.7, "Dumplings SpringRoll ", 854);
insert into restaurant values(NULL,"Little Italy","Besant Nagar","Chinese",75.0,4.7, "Dumplings Dimsum ", 1349);
insert into restaurant values(NULL,"Ciclo Cafe","Kotturpuram","Japanese",55.0,4.3, "Ramen Tempura ", 1943);
insert into restaurant values(NULL,"Big Bang Theory - Bar & Kitchen","Kodambakkam","Western",80.0,4.1, "Sandwich Salad ", 1262);
insert into restaurant values(NULL,"Onesta","Semmancheri","Chinese",30.0,4.4, "Dumplings Dumplings ", 5407);
insert into restaurant values(NULL,"Fusilli Reasons","Kilpauk","Chinese",20.0,4.7, "Dimsum Dimsum ", 3042);
insert into restaurant values(NULL,"Food @ Finger","Royapuram","Japanese",35.0,4.1, "Tempura Ramen ", 1096);
insert into restaurant values(NULL,"Shri Rajasthani Dhaba","Anna Nagar West","Western",25.0,4.5, "Sandwich Hamburger ", 983);
insert into restaurant values(NULL,"Lucky Da Punjabi Dhabba","Perungudi","Japanese",45.0,4.3, "Udon Sushi ", 771);
insert into restaurant values(NULL,"Al-Najeeb Nawab Of Kebab","Kilpauk","Dessert",25.0,4.1, "cupcake donut ", 345);
insert into restaurant values(NULL,"Skewered","Valasaravakkam","Korean",20.0,4.3, "Japche Bulgogi ", 585);

DROP TABLE IF EXISTS user;
CREATE TABLE user (
    user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    pwd VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO user (username, pwd) VALUES ('olivia63', 'zS8D1xf');
INSERT INTO user (username, pwd) VALUES ('emma37', 'GGtualZ');
INSERT INTO user (username, pwd) VALUES ('ava08', 'H9MPp1e');
INSERT INTO user (username, pwd) VALUES ('charlotte08', 'GtcXWHd');
INSERT INTO user (username, pwd) VALUES ('sophia03', 'CbmsWKj');
INSERT INTO user (username, pwd) VALUES ('amelia31', 'mvKlmZa');
INSERT INTO user (username, pwd) VALUES ('isabella93', 'kw9KOfK');
INSERT INTO user (username, pwd) VALUES ('mia78', 'Z0NDjhw');
INSERT INTO user (username, pwd) VALUES ('evelyn55', 'YgmWTwI');
INSERT INTO user (username, pwd) VALUES ('harper76', '3pmzee8');
INSERT INTO user (username, pwd) VALUES ('camila99', 'fffvphj');
INSERT INTO user (username, pwd) VALUES ('gianna14', 'w7XNJZE');
INSERT INTO user (username, pwd) VALUES ('abigail74', 'MNM4e8N');
INSERT INTO user (username, pwd) VALUES ('luna77', 'rYQeHzN');
INSERT INTO user (username, pwd) VALUES ('ella06', '1bZS4GD');
INSERT INTO user (username, pwd) VALUES ('elizabeth40', 'pFVMpex');
INSERT INTO user (username, pwd) VALUES ('sofia80', '7oWje6I');
INSERT INTO user (username, pwd) VALUES ('emily54', 'cIUxsfW');
INSERT INTO user (username, pwd) VALUES ('avery73', '6oOu6ai');
INSERT INTO user (username, pwd) VALUES ('mila71', 'qCz7Uu0');
INSERT INTO user (username, pwd) VALUES ('scarlett71', '6RTXi7n');
INSERT INTO user (username, pwd) VALUES ('eleanor68', '2aioo99');
INSERT INTO user (username, pwd) VALUES ('madison40', 'DXjbiSp');
INSERT INTO user (username, pwd) VALUES ('layla06', '64NNHLs');
INSERT INTO user (username, pwd) VALUES ('penelope57', '20vCxaR');
INSERT INTO user (username, pwd) VALUES ('aria53', 'bL0bXuk');
INSERT INTO user (username, pwd) VALUES ('chloe38', 'Nrz0sjW');
INSERT INTO user (username, pwd) VALUES ('grace67', 'MLLCmTT');
INSERT INTO user (username, pwd) VALUES ('ellie68', 'a3NPyWN');
INSERT INTO user (username, pwd) VALUES ('nora68', 'ypBgFdR');
INSERT INTO user (username, pwd) VALUES ('hazel84', '4M3gE50');
INSERT INTO user (username, pwd) VALUES ('zoey85', 'dQVvdhO');
INSERT INTO user (username, pwd) VALUES ('riley02', 'BK5kP4H');
INSERT INTO user (username, pwd) VALUES ('victoria49', '');
INSERT INTO user (username, pwd) VALUES ('lily75', 'tZM39O7');
INSERT INTO user (username, pwd) VALUES ('aurora77', 'NknoV1s');
INSERT INTO user (username, pwd) VALUES ('violet52', 'GedS7QO');
INSERT INTO user (username, pwd) VALUES ('nova61', 'eXpr1fb');
INSERT INTO user (username, pwd) VALUES ('hannah44', '7auMceS');
INSERT INTO user (username, pwd) VALUES ('emilia86', 'ljoJZqF');
INSERT INTO user (username, pwd) VALUES ('zoe15', '4b1s2Rc');
INSERT INTO user (username, pwd) VALUES ('stella35', 'n9zepqt');
INSERT INTO user (username, pwd) VALUES ('everly53', 'UUMoojB');
INSERT INTO user (username, pwd) VALUES ('isla74', 'kFU4ouM');
INSERT INTO user (username, pwd) VALUES ('leah12', 'd8eBbKY');
INSERT INTO user (username, pwd) VALUES ('lillian28', 'Kzgga4Q');
INSERT INTO user (username, pwd) VALUES ('addison56', 'N6Rpxra');
INSERT INTO user (username, pwd) VALUES ('willow61', 'uWaiVlP');
INSERT INTO user (username, pwd) VALUES ('lucy00', 'NNcBsdl');
INSERT INTO user (username, pwd) VALUES ('paisley56', '9EaJieG');
INSERT INTO user (username, pwd) VALUES ('natalie68', 'HPKor3Y');
INSERT INTO user (username, pwd) VALUES ('naomi88', 'ivVjPqa');
INSERT INTO user (username, pwd) VALUES ('eliana60', 'gfRgKTv');
INSERT INTO user (username, pwd) VALUES ('brooklyn62', 'qu1Eaw6');
INSERT INTO user (username, pwd) VALUES ('elena17', 'pKqSGz6');
INSERT INTO user (username, pwd) VALUES ('aubrey77', 'tX4QFci');
INSERT INTO user (username, pwd) VALUES ('claire01', 'c91cpNd');
INSERT INTO user (username, pwd) VALUES ('ivy79', 'atUKFHG');
INSERT INTO user (username, pwd) VALUES ('kinsley18', 'K9PU0oX');
INSERT INTO user (username, pwd) VALUES ('audrey69', '6D6xbjT');
INSERT INTO user (username, pwd) VALUES ('maya33', 'BJl7pTU');
INSERT INTO user (username, pwd) VALUES ('genesis64', 'nZL4gJm');
INSERT INTO user (username, pwd) VALUES ('skylar39', 'HGSsnnW');
INSERT INTO user (username, pwd) VALUES ('bella60', 'LTKJkJJ');
INSERT INTO user (username, pwd) VALUES ('aaliyah30', 'sjCYYHk');
INSERT INTO user (username, pwd) VALUES ('madelyn30', 'Qp8FH8c');
INSERT INTO user (username, pwd) VALUES ('savannah88', 'cuB46oB');
INSERT INTO user (username, pwd) VALUES ('anna64', '6hNKAAa');
INSERT INTO user (username, pwd) VALUES ('delilah84', 'AXiTwhY');
INSERT INTO user (username, pwd) VALUES ('serenity26', '4NLVJG0');
INSERT INTO user (username, pwd) VALUES ('caroline41', '8qf2nNs');
INSERT INTO user (username, pwd) VALUES ('kennedy48', 'fRBPxWZ');
INSERT INTO user (username, pwd) VALUES ('valentina01', 'fDS963C');
INSERT INTO user (username, pwd) VALUES ('ruby80', 'OsJioMP');
INSERT INTO user (username, pwd) VALUES ('sophie65', 'XFeGoSx');
INSERT INTO user (username, pwd) VALUES ('alice92', 'aY6SPQo');
INSERT INTO user (username, pwd) VALUES ('gabriella39', 'mTLj7vJ');
INSERT INTO user (username, pwd) VALUES ('sadie70', 'zmO4Scu');
INSERT INTO user (username, pwd) VALUES ('ariana38', 'Bllrtju');
INSERT INTO user (username, pwd) VALUES ('allison90', 'n1l6FSO');
INSERT INTO user (username, pwd) VALUES ('hailey10', 'cewjNrL');
INSERT INTO user (username, pwd) VALUES ('autumn34', '9D2iJDk');
INSERT INTO user (username, pwd) VALUES ('nevaeh66', 'aCppVbm');
INSERT INTO user (username, pwd) VALUES ('natalia36', 'AVV1Qdl');
INSERT INTO user (username, pwd) VALUES ('quinn49', 'mAKu6qA');
INSERT INTO user (username, pwd) VALUES ('josephine69', 'LSlr5ZD');
INSERT INTO user (username, pwd) VALUES ('sarah97', 'HcDxGbh');
INSERT INTO user (username, pwd) VALUES ('cora05', 'LCwdihW');
INSERT INTO user (username, pwd) VALUES ('emery45', 'yO0y0Ah');
INSERT INTO user (username, pwd) VALUES ('samantha68', 'Cj6ncV3');
INSERT INTO user (username, pwd) VALUES ('piper42', 'jHbHWJh');
INSERT INTO user (username, pwd) VALUES ('leilani06', '0VdAE3X');
INSERT INTO user (username, pwd) VALUES ('eva11', 'hsC5SqN');
INSERT INTO user (username, pwd) VALUES ('everleigh12', 'ou7l0La');
INSERT INTO user (username, pwd) VALUES ('madeline63', 'Z7nW0Zr');
INSERT INTO user (username, pwd) VALUES ('lydia75', 'qIY2mVU');
INSERT INTO user (username, pwd) VALUES ('jade20', 'XU4UZRF');
INSERT INTO user (username, pwd) VALUES ('peyton22', 'Lsu3jNo');
INSERT INTO user (username, pwd) VALUES ('brielle14', 'ZuXLxqj');
INSERT INTO user (username, pwd) VALUES ('adeline21', 'KNeGqfG');
INSERT INTO user (username, pwd) VALUES ('vivian33', 'EecyLd0');
INSERT INTO user (username, pwd) VALUES ('rylee47', 'g00oleq');
INSERT INTO user (username, pwd) VALUES ('clara59', '0V0guiT');
INSERT INTO user (username, pwd) VALUES ('raelynn70', 'yOSe3ne');
INSERT INTO user (username, pwd) VALUES ('melanie52', 'FmczBgz');
INSERT INTO user (username, pwd) VALUES ('melody51', 'Z3kPSN8');
INSERT INTO user (username, pwd) VALUES ('julia15', '9DxTa6X');
INSERT INTO user (username, pwd) VALUES ('athena73', 'IInqDQt');
INSERT INTO user (username, pwd) VALUES ('maria43', 'iX32JG5');
INSERT INTO user (username, pwd) VALUES ('liliana44', 'ipCwjxK');
INSERT INTO user (username, pwd) VALUES ('hadley64', '8RoaWX0');
INSERT INTO user (username, pwd) VALUES ('arya98', '1O1IYtD');
INSERT INTO user (username, pwd) VALUES ('rose33', '4fQ6XeT');
INSERT INTO user (username, pwd) VALUES ('reagan63', 'vpzIqvq');
INSERT INTO user (username, pwd) VALUES ('eliza84', '7Va6S3F');
INSERT INTO user (username, pwd) VALUES ('adalynn55', 'P6svGjm');
INSERT INTO user (username, pwd) VALUES ('kaylee64', 'fzRMsJd');
INSERT INTO user (username, pwd) VALUES ('lyla96', 'HHLVN9G');
INSERT INTO user (username, pwd) VALUES ('mackenzie91', 'In44HMA');
INSERT INTO user (username, pwd) VALUES ('alaia43', 'gjytq7F');
INSERT INTO user (username, pwd) VALUES ('isabelle59', 'QvYCF20');
INSERT INTO user (username, pwd) VALUES ('charlie72', 'PHtDatp');
INSERT INTO user (username, pwd) VALUES ('arianna73', 'fD9OfEz');
INSERT INTO user (username, pwd) VALUES ('mary91', 'wUv23cA');
INSERT INTO user (username, pwd) VALUES ('remi44', 'ht7oX3k');
INSERT INTO user (username, pwd) VALUES ('margaret44', 'VQ4f0qa');
INSERT INTO user (username, pwd) VALUES ('iris69', 'fTFVTit');
INSERT INTO user (username, pwd) VALUES ('parker15', 'w1xPiwf');
INSERT INTO user (username, pwd) VALUES ('ximena39', 'oprTcJR');
INSERT INTO user (username, pwd) VALUES ('eden24', 'xmjFrXs');
INSERT INTO user (username, pwd) VALUES ('ayla85', 'df57UnZ');
INSERT INTO user (username, pwd) VALUES ('kylie82', 'qhBSBsK');
INSERT INTO user (username, pwd) VALUES ('elliana65', 'rhgv3jq');
INSERT INTO user (username, pwd) VALUES ('josie73', 'LYATd1Z');
INSERT INTO user (username, pwd) VALUES ('katherine40', 'UH0tkU3');
INSERT INTO user (username, pwd) VALUES ('faith71', 'LlBVdjs');
INSERT INTO user (username, pwd) VALUES ('alexandra16', 'eNfgh6Y');
INSERT INTO user (username, pwd) VALUES ('eloise88', 'NSXp3vp');
INSERT INTO user (username, pwd) VALUES ('adalyn17', 'ac71LFq');
INSERT INTO user (username, pwd) VALUES ('amaya35', 'yCywA0m');
INSERT INTO user (username, pwd) VALUES ('jasmine16', '4l0a9gR');
INSERT INTO user (username, pwd) VALUES ('amara20', '7qeIcG4');
INSERT INTO user (username, pwd) VALUES ('daisy06', 'xL61BwI');
INSERT INTO user (username, pwd) VALUES ('reese35', 'L7jYpX9');
INSERT INTO user (username, pwd) VALUES ('valerie08', 'gU8dBMv');
INSERT INTO user (username, pwd) VALUES ('brianna43', 'HK6moFQ');
INSERT INTO user (username, pwd) VALUES ('cecilia66', 'RQ4WLPh');
INSERT INTO user (username, pwd) VALUES ('andrea42', '3kW5rF6');
INSERT INTO user (username, pwd) VALUES ('summer21', 'HvQqbmI');
INSERT INTO user (username, pwd) VALUES ('ryleigh39', 'm2iTTFN');

CREATE TABLE award(
    award_id int(11) AUTO_INCREMENT,
    award_name varchar(128) NOT NULL,
    rest_id int(11) NOT NULL,
    award_by varchar(100) NOT NULL,
    award_for varchar(255), 
    award_year int(10), 
    PRIMARY KEY(award_id),
    foreign key (rest_id) REFERENCES restaurant (rest_id)
);

INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Service Award', 2, 'KFCT', 'Good taste in 90% of dishes. Especially their main course is delicious', 2021);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Service Award', 33, 'New York Times', 'All the dishes were incredibly flavorful and there was so much variety.', 2010);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Service Award', 42, 'The Post', 'Customers always say that this place is clean and tidy', 2020);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Service Award', 22, 'KFCT', 'Good taste in 90% of dishes. Especially their main course is delicious', 2021);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Taste Award', 12, 'New York Times', "I'm in love with this place- they make a perfect sidecar as well as martinis.", 2019);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Taste Award', 1, 'The Post', "Overall a pricey restaurant but food was very worth it.", 2017);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Taste Award', 2, 'KFCT', 'Pays attention to each customer all the time.', 2013);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Taste Award', 54, 'KFCT', 'Good taste in 90% of dishes. Especially their main course is delicious', 2012);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Taste Award', 43, 'New York Times', "I'm in love with this place- they make a perfect sidecar as well as martinis.", 2011);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Rating Award', 46, 'The Post', 'Not the best but definitely good. Plates are plentiful and the views are fantastic. Very touristy but for a reason', 2007);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Rating Award', 68, 'New York Times', 'Customers always say that this place is clean and tidy', 2008);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Rating Award', 74, 'KFCT', 'All the dishes were incredibly flavorful and there was so much variety.', 2006);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Rating Award', 45, 'The Post', 'Customers always say that this place is clean and tidy', 2010);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Rating Award', 24, 'New York Times', 'Not the best but definitely good. Plates are plentiful and the views are fantastic. Very touristy but for a reason', 2009);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Service Award', 22, 'KFCT', 'Good taste in 90% of dishes. Especially their main course is delicious', 2021);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Service Award', 12, 'New York Times', 'All the dishes were incredibly flavorful and there was so much variety.', 2010);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Service Award', 55, 'The Post', 'Customers always say that this place is clean and tidy', 2020);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Service Award', 59, 'KFCT', 'Good taste in 90% of dishes. Especially their main course is delicious', 2021);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Taste Award', 40, 'New York Times', "I'm in love with this place- they make a perfect sidecar as well as martinis.", 2019);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Taste Award', 84, 'The Post', "Overall a pricey restaurant but food was very worth it.", 2017);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Taste Award', 86, 'KFCT', 'Pays attention to each customer all the time.', 2013);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Taste Award', 76, 'KFCT', 'Good taste in 90% of dishes. Especially their main course is delicious', 2012);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Taste Award', 66, 'New York Times', "I'm in love with this place- they make a perfect sidecar as well as martinis.", 2011);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Rating Award', 63, 'The Post', 'Not the best but definitely good. Plates are plentiful and the views are fantastic. Very touristy but for a reason', 2007);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Rating Award', 39, 'New York Times', 'Customers always say that this place is clean and tidy', 2008);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Rating Award', 35, 'KFCT', 'All the dishes were incredibly flavorful and there was so much variety.', 2006);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Rating Award', 9, 'The Post', 'Customers always say that this place is clean and tidy', 2010);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Rating Award', 23, 'New York Times', 'Not the best but definitely good. Plates are plentiful and the views are fantastic. Very touristy but for a reason', 2009);

create table review(
  review_id int not null AUTO_INCREMENT,
  user_id int not null,
  rest_id int not null,
  content varchar(255), 
  primary key(review_id),
  foreign key(user_id) references user (user_id)
);


CREATE TABLE log(
    usersId int(11),
    usersUid varchar(128) NOT NULL,
    ontime timestamp NOT NULL,
    command varchar(500) NOT NULL,
    PRIMARY KEY(usersUid, ontime),
    foreign key (usersId) REFERENCES users (usersId)
);

INSERT INTO log(usersId,usersUid,  ontime, command) VALUES (2, "user1", now(), "insert into hallyu values('Songpa','Go-Kart','kpop','BTS V', 36, 4.1)");
INSERT INTO log(usersId,usersUid,  ontime, command) VALUES (2, "user1", now() - interval 2 day, "update food set insta = 324 where name = 'La Seina'");
INSERT INTO log(usersId,usersUid,  ontime, command) VALUES (2, "user1", now() - interval 3 day, "insert into food values('Gangnam','Kwonsooksoo', 'korean', 49, 5, 5, 4.5)");
INSERT INTO log(usersId,usersUid,  ontime, command) VALUES (2, "user1", now() - interval 4 day, "delete from hallyu where name = 'Deoksugung'");
INSERT INTO log(usersId,usersUid,  ontime, command) VALUES (1, "admin", now() - interval 1 day, "insert into hallyu values('Songpa','Go-Kart','kpop','BTS V', 36, 4.1)");
INSERT INTO log(usersId,usersUid,  ontime, command) VALUES (1, "admin", now(), "update food set insta = 324 where name = 'La Seina'");