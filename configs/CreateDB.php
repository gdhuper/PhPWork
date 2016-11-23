<?php

function initializeDB()
{
    $config = require("config.php");

    $con = mysqli_connect($config['host'], $config['username'], $config['password']);


    $stmt = mysqli_prepare($con, 'DROP DATABASE IF EXISTS stories;');
    mysqli_stmt_execute($stmt);

    $stmt = mysqli_prepare($con,'CREATE DATABASE stories;' );
    mysqli_stmt_execute($stmt);

    mysqli_select_db($con,"stories");

    $stmt = mysqli_prepare($con,'DROP TABLE IF EXISTS story;');
    mysqli_stmt_execute($stmt);

    $stmt = mysqli_prepare($con,'CREATE TABLE `story` (
  `Title` text,
  `genres` text,
  `rating` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `submission_date` datetime DEFAULT NULL,
  `link` text,
  `Author` text,
  `ID` int(11) NOT NULL,
  `Comment` text,
  `numRating` int(11) DEFAULT NULL,
  `sumRatings` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;');
    mysqli_stmt_execute($stmt);

    

    $stmt = mysqli_prepare($con,"INSERT INTO `story` (`Title`, `genres`, `rating`, `views`, `submission_date`, `link`, `Author`, `ID`, `Comment`, `numRating`, `sumRatings`) VALUES
('mirat', 'Horror', NULL, NULL, NULL, NULL, 'what', 0, 'up', NULL, NULL),
(' The Daughter of Time', 'crime', 5, 25, '2008-03-01 00:00:00', 'https://en.wikipedia.org/wiki/The_Daughter_of_Time', 'mirat panchal', 1, 'Hell Island is a remote Pacific Island that no one knows about. It doesn''t feature on any map.', 1, 5),
('The Big Sleep ', 'crime', 5, 12, '2002-02-15 00:00:00', 'https://en.wikipedia.org/wiki/The_Big_Sleep_(1946_film)', 'amrit sandhu', 2, 'It was used by the Japanese during the World War II as a remote airfield but it was soon taken over by America in 1943. ', 1, 15),
('The Murder of Roger Ackroyd', 'crime', 6, 13, '2012-02-15 00:00:00', 'https://en.wikipedia.org/wiki/The_Murder_of_Roger_Ackroyd', 'gursimi judge', 3, 'Treasure does not have a rigid hierarchy. There are not designated \'directors\' from project to project; all directors also work as programmers, artists, or composers, and may work on other projects that they are not directing.', 1, 6),
('The Leper of Saint Giles', 'crime', 3, 25, '2001-02-02 00:00:00', 'https://en.wikipedia.org/wiki/The_Leper_of_Saint_Giles', 'lyz lavanette', 4, 'He left the company sometime after Sin and Punishment, but remains on good terms with the company, heading development of Gunstar Super Heroes on a contractual basis.', 1, 3),
(' The Dead of Jericho ', 'crime', 1, 14, '2000-02-13 00:00:00', 'https://en.wikipedia.org/wiki/The_Dead_of_Jericho', 'anamika banker', 5, 'Hiroshi Iuchi is a graphic designer specializing in background art. He left the company in the mid-''90s, but returned when he was offered the opportunity to assume a greater leadership role, specifically', 1, 1),
(' The Killings at Badger''s Drift', 'crime', 2, 15, '2002-03-14 00:00:00', 'https://en.wikipedia.org/wiki/The_Killings_at_Badger%27s_Drift', 'amit halani', 6, 'tsuru Yaida or Yaiman is a programmer and key creative force behind many Treasure games, and has a particular interest in scrolling action games.', 1, 2),
('The Colour of Murder ', 'crime', 2, 16, '1994-02-15 00:00:00', 'http://www.imdb.com/title/tt0641650/', 'buk lao', 7, ' He was the primary creative force behind Bangai-O and its sequels, and is frequently credited as Assistant Director on most games \n He was the primary creative force behind Bangai-O and its sequels, and is frequently credited as Assistant Director on most games \n He was the primary creative force behind Bangai-O and its sequels, and is frequently credited as Assistant Director on most games \n He was the primary creative force behind Bangai-O and its sequels, and is frequently credited as Assistant Director on most games \n He was the primary creative force behind Bangai-O and its sequels, and is frequently credited as Assistant Director on most games \n', 1, 2),
(' A Fatal Inversion', 'crime', 5, 17, '2011-02-16 00:00:00', 'https://en.wikipedia.org/wiki/A_Fatal_Inversion', 'kanan govani', 8, ' Tetsuhiko Kikuchi (credited as HAN in design roles) is an artist and character designer who had directed several Treasure games, including writing, directing, and creating much of the art for Guardian Heroes and its sequel.', 1, 5),
(' A Taste for Death ', 'crime', 6, 18, '2002-02-17 00:00:00', 'https://en.wikipedia.org/wiki/A_Taste_for_Death_(James_novel)', 'radhi kapadia', 9, 'He left the company sometime in 2007 to pursue work as an independent contractor, but returned sometime around 2010-2011 for the XBLA release of Guardian', 1, 6),
(' The Eagle Has Landed', 'crime', 7, 19, '1992-02-18 00:00:00', 'https://en.wikipedia.org/wiki/The_Eagle_Has_Landed', 'shyam parikh', 10, 'Norio Hanzawa (often credited as \'NON\') is the company''s primary music composer. Although he used to share music duties with Katsuhiko Suzuki, who was credited as \'Nazo\', ', 1, 7),
('The Lady in the Lake ', 'crime', 4, 20, '1984-02-19 00:00:00', 'https://en.wikipedia.org/wiki/The_Lady_in_the_Lake', 'jay mistry', 11, 'The wealthy retired general wants to resolve gambling debts his daughter, Carmen Sternwood (Martha Vickers), owes to bookseller Arthur Gwynn Geiger. \n', 1, 4),
(' The Murder of the Maharajah ', 'crime', 3, 21, '1980-02-20 00:00:00', 'https://en.wikipedia.org/wiki/H._R._F._Keating', 'hiral patel', 12, ' As Marlowe is leaving, General Sternwood''s older daughter, Mrs. Vivian Rutledge (Lauren Bacall), stops him. She suspects her father''s true motive for calling in a detective is to find his', 1, 3),
('Presumed Innocent ', 'crime', 4, 22, '2005-02-21 00:00:00', 'https://en.wikipedia.org/wiki/Presumed_Innocent_(film)', 'urmil bhatt', 13, ' Marlowe goes to Geiger''s rare book shop. Agnes Louzier (Sonia Darrin), Geiger''s assistant, minds the shop, which is the front for an illegal operation.', 1, 4),
(' A Fatal Inversion', 'crime', 5, 25, '2007-02-22 00:00:00', 'https://en.wikipedia.org/wiki/A_Fatal_Inversion', 'ankur solanki', 14, 'Marlowe follows Geiger to his house, where he hears a gunshot and a woman scream. Breaking in, he finds Geiger''s body and a drugged Carmen, as well as a hidden camera with an empty cartridge', 1, 5),
('Innocent Blood ', 'crime', 6, 23, '1955-02-23 00:00:00', 'https://en.wikipedia.org/wiki/Innocent_Blood_(film)', 'david parker', 15, 'Ivian comes to Marlowe''s office the next morning with scandalous pictures of Carmen she received with a blackmail demand for the negatives. Marlowe returns to Geiger''s bookstore,', 1, 6),
(' Strong Poison', 'crime', 2, 24, '1999-02-24 00:00:00', 'https://en.wikipedia.org/wiki/Strong_Poison', 'divyank kap', 16, ' He returns to Geiger''s house and finds Carmen there. She initially claims ignorance about the murder, then insists Brody killed Geiger. ', 1, 2),
('The Sun Chemist ', 'crime', 3, 26, '2002-02-25 00:00:00', 'https://en.wikipedia.org/wiki/The_Sun_Chemist', 'shakti rathord', 17, 'Marlowe follows Vivian to the apartment of Joe Brody, where he finds Brody armed, and Agnes and Vivian initially hiding. They are interrupted by Carmen, who wants her photos.', 1, 3),
(' Anatomy of a Murder', 'crime', 3, 25, '2015-02-26 00:00:00', 'https://en.wikipedia.org/wiki/Anatomy_of_a_Murder', 'aman vaid ', 18, 'Marlowe keeps the pictures and sends Vivian and Carmen home. Brody admits he was blackmailing both General Sternwood and Vivian, then he is suddenly shot and killed.\nMarlowe keeps the pictures and sends Vivian and Carmen home. Brody admits he was blackmailing both General Sternwood and Vivian, then he is suddenly shot and killed.\n', 64, 192),
('Wobble to Death', 'crime', 8, 55, '2016-02-27 00:00:00', 'https://www.amazon.com/Wobble-Death-Sergeant-Cribb-Investigation/dp/1616956593', 'soneer tilly', 19, 'He takes Lundgren back to Geiger''s house, where Lundgren has returned the body. He calls the police to the house to clear up both the Geiger and Brody murders.', 107, 333),
(' The Key to Rebecca', 'crime', 4, 17, '2008-02-28 00:00:00', 'https://en.wikipedia.org/wiki/The_Key_to_Rebecca', 'devan angra', 20, 'Marlowe chases and apprehends Carol Lundgren, Geiger''s former driver, who has killed Brody in revenge for Geiger''s death, not knowing the chauffeur killed Geiger.', 1, 4),
('Murder Must Advertise ', 'crime', 9, 62, '2003-02-20 00:00:00', 'https://en.wikipedia.org/wiki/Murder_Must_Advertise', 'novee thandi', 21, 'While driving home, Marlowe unsuccessfully presses Vivian on her connection with Mars, saying he knew the money she won and subsequent robbery were staged for Marlowe''s benefit.', 17, 55),
('The Murder of Roger Ackroyd', 'crime', 7, 41, '2004-02-28 00:00:00', 'https://en.wikipedia.org/wiki/The_Murder_of_Roger_Ackroyd', 'paxton david', 22, 'Marlowe chases and apprehends Carol Lundgren, Geiger''s former driver, who has killed Brody in revenge for Geiger''s death, not knowing the chauffeur killed Geiger.', 1, 7),
('Murder On the Orient Epress', 'crime', 5, 22, '2003-02-05 00:00:00', 'https://en.wikipedia.org/wiki/Murder_on_the_Orient_Express', 'gio vanni', 23, 'Marlowe chases and apprehends Carol Lundgren, Geiger''s former driver, who has killed Brody in revenge for Geiger''s death, not knowing the chauffeur killed Geiger.', 1, 5),
('The Ghost-Seer', 'crime', 3, 25, '2007-02-04 00:00:00', 'https://en.wikipedia.org/wiki/The_Ghost-Seer', 'hemmy tran', 24, 'He takes Lundgren back to Geiger''s house, where Lundgren has returned the body. He calls the police to the house to clear up both the Geiger and Brody murders.\n', 1, 3),
('Dead in the West', 'Horror', 6, 57, '2008-02-06 00:00:00', 'https://en.wikipedia.org/wiki/Dead_in_the_West', 'trishaal nandish', 25, 'Marlowe visits Mars'' casino, where he asks about Regan, who is supposed to have run off with Mars'' wife. Mars is evasive and tells Marlowe that Vivian is running up gambling debts. Vivian wins a big wager and then wants Marlowe to take her home\n', 2, 8),
('Dead Sea', 'Horror', 6, 55, '2013-02-04 00:00:00', 'https://en.wikipedia.org/wiki/Dead_Sea', 'josh urrera', 26, ' While driving home, Marlowe unsuccessfully presses Vivian on her connection with Mars, saying he knew the money she won and subsequent robbery were staged for Marlowe''s benefit.', 85, 426),
('Deep and Dark and Dangerous', 'Horror', 8, 85, '2014-02-06 00:00:00', 'https://en.wikipedia.org/wiki/Deep_and_Dark_and_Dangerous', 'aadit panchal', 27, ' Vivian admits to nothing. Marlowe returns home to find a flirtatious Carmen waiting for him. She admits she did not like Regan and mentions that Mars calls Vivian frequently. \n', 11, 51),
('Deep in the Darkness', 'Horror', 5, 71, '2013-02-07 00:00:00', 'https://en.wikipedia.org/wiki/Deep_in_the_Darkness', 'emily smiley', 28, 'She attempts to seduce Marlowe, who throws her out of his apartment. The next day, Vivian tells him he can stop looking for Regan; he has been found in Mexico,\n', 1, 9),
('The Ghost Hunter', 'Horror', 4, 55, '2012-02-15 00:00:00', 'https://en.wikipedia.org/wiki/The_Ghost_Hunter_(TV_series)', 'manish laxman', 29, 'Harry Jones (Cook), an associate of Brody''s who wants to marry Agnes, conveys an offer from her to reveal the location of Mars'' wife for $200.', 1, 4),
('The Ghost Pirates', 'Horror', 6, 42, '2002-02-05 00:00:00', 'https://en.wikipedia.org/wiki/The_Ghost_Pirates', 'sahil banker', 30, 'When Marlowe goes to meet Jones, Canino, a killer hired by Mars, is there attempting to find Agnes himself.\n', 1, 6),
('The Good House', 'Horror', 5, 52, '1993-02-13 00:00:00', 'https://www.amazon.com/Good-House-Novel-Ann-Leary/dp/1250043034', 'mahek kapadia', 31, 'Canino poisons Jones after he discloses Agnes'' location (which turns out to be false). Agnes telephones the office where Jones was killed while Marlowe is still there.', 1, 5),
('The Godsend', 'Horror', 4, 36, '1999-02-12 00:00:00', 'https://en.wikipedia.org/wiki/Godsend_(film)', 'avi parmar', 32, 'Agnes reveals that she has seen Mona Mars near a town called Realito behind an auto repair shop. When he gets there, Marlowe is attacked by Canino.', 1, 4),
('The House on the Borderland', 'Horror', 2, 8, '1987-02-11 00:00:00', 'https://en.wikipedia.org/wiki/The_House_on_the_Borderland', 'purav desai', 33, 'Mona angrily leaves after Marlowe tells her that Mars is a gangster and a killer. Vivian fears for Marlowe''s life and frees him, allowing him to get to his car and his gun.\nMona angrily leaves after Marlowe tells her that Mars is a gangster and a killer. Vivian fears for Marlowe''s life and frees him, allowing him to get to his car and his gun.\n', 1, 2),
('The House of Thunder', 'Horror', 5, 25, '2014-02-09 00:00:00', 'https://en.wikipedia.org/wiki/The_House_of_Thunder', 'krishna gadani', 34, ' She distracts Canino, who is shot by Marlowe. During the drive back to Geiger''s bungalow, Vivian unconvincingly tries to claim she killed Sean Regan.\n\n She distracts Canino, who is shot by Marlowe. During the drive back to Geiger''s bungalow, Vivian unconvincingly tries to claim she killed Sean Regan.\n\n', 1, 5),
('House of Reckoning', 'Horror', 8, 70, '2013-02-22 00:00:00', 'https://en.wikipedia.org/wiki/House_of_Reckoning', 'juhi patel', 35, 'When they arrive, Marlowe calls Mars and lies that he is still in Realito. They arrange to meet at Geiger''s house, giving Marlowe ten minutes to prepare.', 2, 13),
('The House of Balthus', 'Horror', 1, 5, '2011-02-21 00:00:00', 'https://en.wikipedia.org/wiki/The_House_of_Balthus', 'jinal ahir', 36, ' Mars arrives with four men, who set up an ambush outside. Mars enters and is surprised by Marlowe, who holds him at gunpoint.', 1, 1),
('The House Next', 'Horror', 3, 15, '2010-02-17 00:00:00', 'https://en.wikipedia.org/wiki/The_House_Next_Door_(film)', 'russ prewal', 37, 'Marlowe reveals he has discerned the truth: Mars has been blackmailing Vivian, claiming that her sister Carmen had killed Regan.', 1, 3),
('The House Next Door', 'Horror', 5, 55, '2009-02-06 00:00:00', 'https://en.wikipedia.org/wiki/The_House_Next_Door_(film)', 'toda loo patel', 38, 'As soon as Mars threatens Marlowe with his men outside, Marlowe retaliates by firing shots that just miss Mars, causing him to run outside,', 1, 5),
('The House of Balthus', 'Horror', 4, 36, '2008-02-18 00:00:00', 'https://en.wikipedia.org/wiki/The_House_of_Balthus', 'ankit depal', 39, 'then calls the police, telling them that Mars is the one who killed Regan. In the process, he tells them that Vivian helped him with Eddie Mars then calls the police, telling them that Mars is the one who killed Regan. In the process, he tells them that Vivian helped him with Eddie Mars\nthen calls the police, telling them that Mars is the one who killed Regan. In the process, he tells them that Vivian helped him with Eddie Mars\n', 1, 4),
('The Third Grave', 'Horror', 3, 16, '2002-02-21 00:00:00', 'https://en.wikipedia.org/wiki/The_Third_Grave', 'kaveri rangan', 40, ' The first book covers the years 982 to 990. While still a youth, Orm is abducted by a Viking party led by Krok and they sail south. They fall captive to Andalusian Muslims and serve as galley slaves for more than two years.', 1, 3),
('A Touch of Dead', 'Horror', 2, 25, '2001-02-18 00:00:00', 'https://en.wikipedia.org/wiki/A_Touch_of_Dead', 'trance kim', 41, 'later becoming members of Almanzor''s bodyguard for four years. They return to Denmark to King Harald Bluetooth''s court where Orm meets Ylva. Orm later returns to Scania with Rapp', 1, 2),
('Twilight Eyes', 'Horror', 8, 55, '2003-02-19 00:00:00', 'https://en.wikipedia.org/wiki/Twilight_Eyes', 'mister singh', 42, 'The year 1000 passes without Christ returning. In 1007, with Orm now forty-two, his brother Are returns from the east, bringing the news of a treasure (\'Bulgar gold\') ', 1, 8),
('Treasure Box', 'Horror', 3, 21, '2015-02-21 00:00:00', 'https://en.wikipedia.org/wiki/Treasure_Box', 'tara dubal', 43, 'Arm decides to travel to Kievan Rus for the gold, and together with Toke and the Finnveding chieftain Olof mans a ship. They recover the treasure and return home safely', 2, 6),
('Hell Island', 'Horror', 1, 8, '2013-02-23 00:00:00', 'https://en.wikipedia.org/wiki/Hell_Island', 'namrita sher', 44, 'From then on, Orm and Toke live in peace and plenty as good neighbours, and Svarthöfde Ormsson becomes a famous Viking, fighting for Canute the Great. The story ends with the statement that', 1, 1),
('Hell''s Bounty', 'Horror', 8, 55, '2012-02-24 00:00:00', 'https://en.wikipedia.org/wiki/Hell%27s_Bounty', 'mark stamp', 45, 'The Swedish writer Sven Stolpe reports that somebody asked author Frans G. Bengtsson \'what intentions he had with The Long Ships\', to which Bengtsson ', 8, 29),
('Hell House', 'Horror', 3, 25, '2011-02-17 00:00:00', 'https://en.wikipedia.org/wiki/Hell_house', 'tati smith', 46, 'The research for the book was based largely on Snorri Sturluson''s Heimskringla and other old Icelandic literature, but also on medieval chronicles and contemporary research, ', 1, 3),
('The House of Thunder', 'Horror', 2, 15, '1986-02-27 00:00:00', 'https://en.wikipedia.org/wiki/The_House_of_Thunder', 'nick parent', 47, ' The language of the novel is modelled on the Icelandic sagas. Early in his career, Bengtsson had held a romantic \n', 1, 2),
('The House on the Borderland', 'Horror', 1, 8, '1985-02-03 00:00:00', 'https://en.wikipedia.org/wiki/The_House_on_the_Borderland', 'phil lee', 48, 'The main characters were written as likable anti-heroes, far from the romantic view of Vikings.[2] Like the sagas, the book relies on verbs and nouns to drive the narrative', 1, 1),
('House of Reckoning', 'Horror', 3, 21, '1972-02-05 00:00:00', 'https://en.wikipedia.org/wiki/House_of_Reckoning', 'dhruv sohj', 49, 'with only a minimum of adjectives and descriptive passages. In essays, Bengtsson expresses disgust with \'psychological realism\' in the literature of his day where the thoughts and feelings', 1, 3),
('City of Heavenly Fire', 'Adventure', 5, 45, '1973-02-14 00:00:00', 'https://en.wikipedia.org/wiki/City_of_Heavenly_Fire', 'megha thak', 50, ' The 1964 British-Yugoslav film The Long Ships was very loosely based on the book, retaining little more than the title (of the English translation) and the Moorish settings. In the 1980s, there were plans for a large-scale Swedish screen adaptation. ', 1, 5),
('City of Lost Souls', 'Adventure', 6, 14, '1971-02-18 00:00:00', 'https://en.wikipedia.org/wiki/City_of_Lost_Souls_(novel)', 'hen tran', 51, 'The film was supposed to be directed by Hans Alfredson and star Stellan Skarsgård as Orm and Sverre Anker Ousdal as Toke. The project was cancelled for financial reasons,', 1, 6),
('Court of Fives', 'Adventure', 4, 23, '1981-02-17 00:00:00', 'https://en.wikipedia.org/wiki/Court_of_Fives', 'sylvi had', 52, 'The project was cancelled for financial reasons, but Alfredson''s script was reworked into radio theatre which was broadcast in 1990.[3] A comic adaptation by Charlie Christensen was published in four volumes between 2000 and 2004.', 1, 4),
('Maximum Ride', 'Adventure', 8, 56, '1982-02-16 00:00:00', 'https://en.wikipedia.org/wiki/Maximum_Ride', 'santi gib', 53, 'The film was supposed to be directed by Hans Alfredson and star Stellan Skarsgård as Orm and Sverre Anker Ousdal as Toke. The project was cancelled for financial reasons, but Alfredson''s script was reworked into radio', 11, 30),
('Montezuma''s Daughter', 'Adventure', 2, 74, '1987-02-22 00:00:00', 'https://en.wikipedia.org/wiki/Montezuma%27s_Daughter', 'raymond leon', 54, 'In May 2014, during the press conference of Swedish film company Film i Väst at the 2014 Cannes Film Festival, Danish film producer Peter Aalbæk Jensen, from Danish film company Zentropa, ', 1, 2),
('Music on the Bamboo Radio', 'Adventure', 5, 12, '1988-02-17 00:00:00', 'https://en.wikipedia.org/wiki/Music_on_the_Bamboo_Radio', 'neel shah', 55, 'Hans Petter Moland from Norway will be directing. Stellan Skarsgård has expressed interest in acting in the film if the script will be good.[6] Filming is expected to start in Västra Götaland in 2016.', 1, 5),
('The Lightning Thief', 'Adventure', 3, 25, '2005-02-14 00:00:00', 'https://en.wikipedia.org/wiki/The_Lightning_Thief', 'sam gee', 56, 'This adaptation is planned to be split into two films and also as a TV-series in four parts. Hans Petter Moland from Norway will be directing. ', 1, 3),
('The Lighthouse at the End of the World', 'Adventure', 8, 41, '2006-02-16 00:00:00', 'https://en.wikipedia.org/wiki/The_Lighthouse_at_the_End_of_the_World', 'nisa monke', 57, 'Stellan Skarsgård has expressed interest in acting in the film if the script will be good.[6] Filming is expected to start in Västra Götaland in 2016.\nStellan Skarsgård has expressed interest in acting in the film if the script will be good.[6] Filming is expected to start in Västra Götaland in 2016.', 5, 13),
('The Long Ships', 'Adventure', 7, 51, '2007-02-24 00:00:00', 'https://en.wikipedia.org/wiki/The_Long_Ships', 'niki mohebi', 58, 'The Long Ships or Red Orm (original Swedish: Röde Orm meaning Red Serpent or Red Snake) is an adventure novel by the Swedish writer Frans G. Bengtsson.', 1, 7),
('Mad White Giant', 'Adventure', 4, 63, '2013-02-18 00:00:00', 'https://en.wikipedia.org/wiki/Mad_White_Giant', 'shweta sun', 59, 'The narrative is set in the late 10th century and follows the adventures of the Viking Röde Orm - Red Serpent, - called \'Red\' for his hair and his temper', 1, 4),
('The Man Who Would Be King', 'Adventure', 8, 52, '2014-05-20 00:00:00', 'https://en.wikipedia.org/wiki/The_Man_Who_Would_Be_King', 'gaurav desai', 60, 'The book portrays the political situation of Europe in the later Viking Age, Andalusia under Almanzor, Denmark under Harald Bluetooth.', 5, 18);
");
    mysqli_stmt_execute($stmt);


$stmt = mysqli_prepare($con,'CREATE TABLE `story` (
  `Title` text,
  `genres` text,
  `rating` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `submission_date` datetime DEFAULT NULL,
  `link` text,
  `Author` text,
  `ID` int(11) NOT NULL,
  `Comment` text,
  `numRating` int(11) DEFAULT NULL,
  `sumRatings` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;');
    mysqli_stmt_execute($stmt);

    

    $stmt = mysqli_prepare($con,"CREATE TABLE `user` (`username` varchar(60) DEFAULT NULL,`id` int(11) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
    mysqli_stmt_execute($stmt);


$stmt = mysqli_prepare($con,"INSERT INTO `user` (`username`, `id`) VALUES ('miratpanchal', 1);");
    mysqli_stmt_execute($stmt);


$stmt = mysqli_prepare($con,"CREATE TABLE `user_rating` (`ratingid` int(11) NOT NULL,`user_id` int(11) DEFAULT NULL,`story_id` int(11) DEFAULT NULL,`rating` int(11) DEFAULT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
    mysqli_stmt_execute($stmt);


$stmt = mysqli_prepare($con,"INSERT INTO `user_rating` (`ratingid`, `user_id`, `story_id`, `rating`) VALUES (1, 1, 1, 4),(2, 1, 6, 5),(3, 1, 12, 2);");
    mysqli_stmt_execute($stmt);


$stmt = mysqli_prepare($con,"ALTER TABLE `story` ADD PRIMARY KEY (`ID`);");
    mysqli_stmt_execute($stmt);

$stmt = mysqli_prepare($con,"ALTER TABLE `user` ADD PRIMARY KEY (`id`);");
    mysqli_stmt_execute($stmt);

$stmt = mysqli_prepare($con,"ALTER TABLE `user_rating` ADD PRIMARY KEY (`ratingid`),ADD KEY `user_id_idx` (`user_id`),ADD KEY `story_id_idx` (`story_id`);");
    mysqli_stmt_execute($stmt);


$stmt = mysqli_prepare($con,"ALTER TABLE `user_rating` ADD CONSTRAINT `story_id` FOREIGN KEY (`story_id`) REFERENCES `story` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;");
    mysqli_stmt_execute($stmt);


   
    $stmt->close();
    $con->close();

    echo ("Database Successfully Initialized. Be sure to change check mysql login is correct.");
}

initializeDB();
