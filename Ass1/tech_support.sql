-- Create the database
DROP DATABASE IF EXISTS tech_support;
CREATE DATABASE tech_support;
USE tech_support; -- MySQL command

CREATE TABLE products (
    productCode varchar(10) NOT NULL,
    name varchar(50) NOT NULL,
    version decimal(18, 1) NOT NULL,
    releaseDate datetime NOT NULL,
    PRIMARY KEY (productCode)
);

INSERT INTO products VALUES 
('DRAFT10', 'Draft Manager 1.0', 1.0, '2012-03-01'), 
('DRAFT20', 'Draft Manager 2.0', 2.0, '2014-08-15'),
('LEAG10', 'League Scheduler 1.0', 1.0, '2011-06-01'), 
('LEAGD10', 'League Scheduler Deluxe 1.0', 1.0, '2011-09-01'),
('TEAM10', 'Team Manager Version 1.0', 1.0, '2012-06-01'), 
('TRNY10', 'Tournament Master Version 1.0', 1.0, '2011-01-01'), 
('TRNY20', 'Tournament Master Version 2.0', 2.0, '2013-03-15');

CREATE TABLE technicians (
    techID int NOT NULL AUTO_INCREMENT,
    firstName varchar(50) NOT NULL,
    lastName varchar(50) NOT NULL,
    email varchar(50) NOT NULL UNIQUE,
    phone varchar(20) NOT NULL,
    password varchar(20) NOT NULL,
    PRIMARY KEY (techID)
);

INSERT INTO technicians VALUES 
(11, 'Alison', 'Diaz', 'alison@sportspro.com', '800-555-0443', 'sesame'), 
(12, 'Jason', 'Lee', 'jason@sportspro.com', '800-555-0444', 'sesame'),
(13, 'Andrew', 'Wilson', 'awilson@sportspro.com', '800-555-0449', 'sesame'), 
(14, 'Gunter', 'Wendt', 'gunter@sportspro.com', '800-555-0400', 'sesame'), 
(15, 'Gina', 'Fiori', 'gfiori@sportspro.com', '800-555-0459', 'sesame');

CREATE TABLE customers (
    customerID int NOT NULL AUTO_INCREMENT,
    firstName varchar(50) NOT NULL,
    lastName varchar(50) NOT NULL,
    phone varchar(20) NOT NULL,
    email varchar(50) NOT NULL UNIQUE,
    password varchar(20) NOT NULL,
    PRIMARY KEY (customerID)
);

INSERT INTO customers VALUES 
(1002, 'Kelly', 'Irvin', '(07) 55578950', 'kelly@example.com', 'sesame'),
(1004, 'Kenzie', 'Quinn', '(07) 55578725', 'kenzie@jobtrak.com', 'sesame'),
(1006, 'Anton', 'Mauro', '(07) 55576670', 'amauro@yahoo.org', 'sesame'),
(1008, 'Kaitlyn', 'Anthoni', '(07) 55576081', 'kanthoni@pge.com', 'sesame'),
(1010, 'Kendall', 'Mayte', '(07) 55579999', 'kmayte@fresno.ca.gov', 'sesame'),
(1012, 'Marvin', 'Quintin', '(07) 55579586', 'marvin@expedata.com', 'sesame'),
(1015, 'Gonzalo', 'Keeton', '(07) 55573647', '', 'sesame'),
(1016, 'Derek', 'Chaddick', '(07) 55573005', 'dChaddick@fresnophoto.com', 'sesame'),
(1017, 'Malia', 'Marques', '(07) 55578834', 'malia@gmail.com', 'sesame'),
(1018, 'Emily', 'Evan', '(07) 55574435', 'Emily@MicroCenter.com', 'sesame'),
(1019, 'Alexandro', 'Alexis', '(07) 55572993', 'alal@yaleindustries.com', 'sesame'),
(1023, 'Ingrid', 'Neil', '(07) 55579742', 'Ingrid@richadvertizing.com', 'sesame'),
(1026, 'Eileen', 'Lawrence', '(07) 55579558', 'eLawrence@ecomm.com', 'sesame'),
(1027, 'Marjorie', 'Essence', '(07) 55578110', 'messence@hotmail.com', 'sesame'),
(1029, 'Trentin', 'Camron', '(07) 55574426', 'tCamron@ibm.com', 'sesame'),
(1030, 'Demetrius', 'Hunter', '(07) 55571534', 'demetrius@termite.com', 'sesame'),
(1033, 'Thalia', 'Neftaly', '(07) 55574800', 'tneftaly@venture.com', 'sesame'),
(1034, 'Harley', 'Myles', '(07) 55571494', 'harley@cprinting.com', 'sesame'),
(1037, 'Gideon', 'Paris', '(07) 55574322', 'gideon@opamp.com', 'sesame'),
(1038, 'Jayda', 'Maxwell', '(07) 55570057', 'jmaxwell@ccredit.com', 'sesame'),
(1040, 'Kristofer', 'Gerald', '(07) 55576041', 'kgerald@naylorpub.com', 'sesame'),
(1045, 'Priscilla', 'Smith', '(07) 55571669', 'psmith@example.com', 'sesame'),
(1047, 'Brian', 'Griffin', '(07) 55579000', 'bgriffin@azteklabel.com', 'sesame'),
(1049, 'Kaylea', 'Cheyenne', '(07) 55570765', 'kaylea@yahoo.com', 'sesame'),
(1050, 'Kayle', 'Misael', '(07) 55575811', 'misael@qualityeducation.com', 'sesame'),
(1051, 'Clarence', 'Maeve', '(07) 55578700', 'cmaeve@springhouse.com', 'sesame'),
(1054, 'Jovon', 'Walker', '(07) 55572732', 'jovon@ama.org', 'sesame'),
(1056, 'Nashalie', 'Angelica', '(07) 55570037', 'nangelica@aba.org', 'sesame'),
(1063, 'Leroy', 'Aryn', '(07) 54770331', 'laryn@gmail.com', 'sesame'),
(1065, 'Anne', 'Braydon', '(07) 55577900', 'anne@gmail.com', 'sesame'),
(1066, 'Leah', 'Colton', '(07) 55574442', 'lcolton@fresnobee.com', 'sesame'),
(1067, 'Cesar', 'Arodondo', '(07) 55573700', 'arododo@drc.com', 'sesame'),
(1068, 'Rachael', 'Danielson', '(07) 55571704', 'rdanielson@eop.com', 'sesame'),
(1070, 'Salina', 'Edgardo', '(07) 55577070', 'sadgardo@rpc.com', 'sesame'),
(1071, 'Daniel', 'Bradlee', '(07) 55577222', 'dbradlee@simondirect.com', 'sesame'),
(1074, 'Quentin', 'Warren', '(07) 55573112', 'quentin@valprint.com', 'sesame'),
(1080, 'Jillian', 'Clifford', '(07) 55571957', 'jillian@champion.com', 'sesame'),
(1081, 'Angel', 'Lloyd', '(07) 55570700', 'alloyd@cw.com', 'sesame'),
(1083, 'Jeanette', 'Helena', '(07) 55573043', 'jhelena@eds.com', 'sesame'),
(1086, 'Luciano', 'Destin', '(07) 55577009', 'ldestin@mwp.com', 'sesame'),
(1089, 'Kyra', 'Francis', '(07) 55578300', 'kyra@abbey.com', 'sesame'),
(1094, 'Lance', 'Potter', '(07) 55570584', 'lpotter@bis.com', 'sesame'),
(1098, 'Vance', 'Smith', '(07) 55578737', 'vsmith@example.com', 'sesame'),
(1100, 'Thom', 'Aaronsen', '(07) 55578484', 'taaronsen@dgm.com', 'sesame'),
(1112, 'Harold', 'Spivak', '(07) 55572770', 'harold@propane.com', 'sesame'),
(1113, 'Rachael', 'Bluzinski', '(07) 55577600', 'rachael@unocal.com', 'sesame'),
(1114, 'Reba', 'Hernandez', '(07) 55570600', 'rhernandez@yesmed.com', 'sesame'),
(1116, 'Jaime', 'Ronaldsen', '(07) 55578625', 'jronaldsen@zylka.com', 'sesame'),
(1117, 'Violet', 'Beauregard', '(07) 55570855', 'vbeauregard@ups.com', 'sesame'),
(1118, 'Charlie', 'Bucket', '(07) 55574091', 'cbucket@yahoo.com', 'sesame');


CREATE TABLE registrations (
    customerID int NOT NULL,
    productCode varchar(10) NOT NULL,
    registrationDate datetime NOT NULL,
    PRIMARY KEY (customerID, productCode)
);

INSERT INTO registrations VALUES 
(1002, 'LEAG10', '2012-11-01'), 
(1004, 'DRAFT10', '2013-01-11'), 
(1004, 'LEAG10', '2011-09-19'), 
(1004, 'TRNY10', '2013-01-13'), 
(1006, 'TRNY10', '2013-11-18'), 
(1008, 'DRAFT10', '2012-08-03'), 
(1008, 'LEAG10', '2011-10-29'), 
(1008, 'TEAM10', '2013-03-01'), 
(1008, 'TRNY10', '2011-04-02'), 
(1010, 'LEAG10', '2012-01-29'), 
(1012, 'DRAFT10', '2012-03-19'), 
(1015, 'TRNY10', '2011-05-19'), 
(1016, 'TEAM10', '2013-02-14'), 
(1017, 'TRNY10', '2013-05-09'), 
(1018, 'TEAM10', '2012-06-03'), 
(1018, 'TRNY10', '2011-12-25'), 
(1019, 'TRNY20', '2013-06-20'), 
(1023, 'LEAGD10', '2012-05-12'), 
(1026, 'LEAG10', '2012-01-02'), 
(1027, 'LEAGD10', '2012-03-14'), 
(1029, 'LEAGD10', '2013-10-18'), 
(1029, 'TEAM10', '2013-03-28'), 
(1030, 'LEAG10', '2012-01-04'), 
(1033, 'DRAFT10', '2012-07-20'), 
(1034, 'DRAFT10', '2012-03-20'), 
(1034, 'LEAGD10', '2013-02-21'), 
(1034, 'TEAM10', '2013-02-22'), 
(1037, 'LEAGD10', '2012-03-10'), 
(1038, 'LEAG10', '2012-01-03'), 
(1038, 'TRNY10', '2011-04-03'), 
(1040, 'TRNY10', '2011-04-07'), 
(1045, 'LEAGD10', '2012-01-14'), 
(1047, 'LEAGD10', '2012-02-14'), 
(1047, 'TEAM10', '2012-10-27'), 
(1047, 'TRNY20', '2014-02-27'), 
(1049, 'DRAFT10', '2013-01-11'), 
(1049, 'LEAGD10', '2012-07-12'), 
(1049, 'TRNY10', '2013-09-21'), 
(1049, 'TRNY20', '2013-07-12'), 
(1050, 'LEAGD10', '2012-08-24'), 
(1051, 'TEAM10', '2013-03-18'), 
(1054, 'DRAFT10', '2012-07-07'), 
(1054, 'TRNY20', '2013-05-09'), 
(1056, 'TRNY20', '2013-07-06'), 
(1063, 'LEAG10', '2012-01-02'), 
(1063, 'TEAM10', '2013-11-05'), 
(1065, 'LEAG10', '2012-01-21'), 
(1065, 'LEAGD10', '2012-07-04'), 
(1065, 'TEAM10', '2013-03-14'), 
(1066, 'LEAGD10', '2011-12-22'), 
(1066, 'TEAM10', '2012-10-01'), 
(1066, 'TRNY10', '2011-06-22'), 
(1067, 'LEAGD10', '2013-01-04'), 
(1068, 'DRAFT10', '2012-03-03'), 
(1070, 'DRAFT10', '2012-07-28'), 
(1070, 'LEAGD10', '2012-06-09'), 
(1070, 'TEAM10', '2012-07-29'), 
(1070, 'TRNY20', '2013-09-13'), 
(1071, 'TRNY10', '2011-10-15'), 
(1074, 'LEAG10', '2011-11-02'), 
(1080, 'DRAFT10', '2013-01-24'), 
(1080, 'LEAGD10', '2012-01-05'), 
(1080, 'TRNY10', '2013-05-29'), 
(1081, 'LEAGD10', '2012-02-09'), 
(1083, 'LEAG10', '2011-11-07'), 
(1083, 'LEAGD10', '2012-03-27'), 
(1083, 'TEAM10', '2013-05-26'), 
(1086, 'LEAG10', '2012-05-01'), 
(1089, 'LEAG10', '2013-10-12'), 
(1089, 'LEAGD10', '2012-10-10'), 
(1089, 'TRNY10', '2011-06-03'), 
(1094, 'TEAM10', '2014-01-08'), 
(1097, 'TRNY20', '2013-09-18'), 
(1098, 'LEAG10', '2011-12-03'), 
(1098, 'TRNY10', '2011-04-11'), 
(1100, 'LEAG10', '2011-08-07'), 
(1112, 'DRAFT10', '2012-09-27'), 
(1112, 'TRNY10', '2011-11-12'), 
(1112, 'TRNY20', '2013-12-13'), 
(1113, 'LEAGD10', '2012-02-18'), 
(1114, 'TRNY10', '2013-07-06'), 
(1116, 'DRAFT10', '2012-06-09'), 
(1117, 'DRAFT10', '2013-05-06'), 
(1117, 'TRNY10', '2011-03-04'), 
(1117, 'TRNY20', '2013-08-22'), 
(1118, 'DRAFT10', '2012-11-23');

CREATE TABLE incidents(
    incidentID int NOT NULL AUTO_INCREMENT,
    customerID int NOT NULL,
    productCode varchar(10) NOT NULL,
    techID int NULL,
    dateOpened datetime NOT NULL,
    dateClosed datetime NULL,
    title varchar(50) NOT NULL,
    description varchar(2000) NOT NULL,
    PRIMARY KEY (incidentID) 
);

INSERT INTO incidents VALUES 
(27, 1010, 'LEAG10', 11, '2014-06-05', '2010-06-06', 'Could not install', 'Media appears to be bad.'), 
(28, 1117, 'TRNY20', 11, '2014-06-14', NULL, 'Error importing data', 'Received error message 415 while trying to import data from previous version.'), 
(29, 1116, 'DRAFT10', 13, '2014-06-20', NULL, 'Could not install', 'Setup failed with code 104.'), 
(30, 1010, 'TEAM10', 14, '2014-06-21', '2010-06-24', 'Error launching program', 'Program fails with error code 510, unable to open database.'), 
(31, 1010, 'TRNY20', 14, '2014-06-21', NULL, 'Unable to activate product', 'Customer''s product activation key does not work.'), 
(32, 1056, 'TRNY20', 12, '2014-06-24', NULL, 'Product activation error', 'Customer could not activate product because of an invalid product activation code.'), 
(34, 1018, 'DRAFT10', 13, '2014-07-02', '2010-07-04', 'Error launching program', 'Program fails with error code 340: Database exceeds size limit.'), 
(36, 1065, 'LEAG10', NULL, '2014-07-04', NULL, 'Error adding data', 'Received error message 201 when trying to add records: database must be reorganized.'), 
(42, 1097, 'TRNY20', NULL, '2014-07-08', NULL, 'Unable to import data', 'Import command not available for importing data from previous version.'), 
(44, 1063, 'LEAG10', NULL, '2014-07-09', NULL, 'Installation error', 'Error during installation: cmd.exe not found.'), 
(45, 1089, 'LEAGD10', NULL, '2014-07-09', NULL, 'Problem upgrading from League Scheduler 1.0', 'Program fails with error 303 when trying to install upgrade.'), 
(46, 1016, 'TEAM10', NULL, '2014-07-09', NULL, 'Unable to restore data from backup', 'Error 405 encountered while restoring backup: File not found.'), 
(47, 1034, 'DRAFT10', NULL, '2014-07-09', NULL, 'Can''t activate product', 'Product activation code invalid.'), 
(48, 1049, 'TRNY20', NULL, '2014-07-09', NULL, 'Unable to print brackets', 'Program doesn''t recognize printer.'), 
(49, 1083, 'LEAGD10', NULL, '2014-07-10', NULL, 'Can''t start application', 'Error 521 on startup: database must be reorganized.'), 
(50, 1116, 'DRAFT10', NULL, '2014-07-10', NULL, 'Error during data file backup', 'Program abends with error 228 during database backup'), 
(51, 1067, 'LEAGD10', NULL, '2014-07-10', NULL, 'Error when adding new records', 'Received error 340: database exceeds size limit.'), 
(52, 1066, 'TEAM10', NULL, '2014-07-11', NULL, 'Installation problem', 'Customer states that the setup program failed with code 203 during configuration.');

CREATE TABLE administrators (
  username    VARCHAR(40)    NOT NULL     UNIQUE,
  password    VARCHAR(40)    NOT NULL,
  PRIMARY KEY (username)
);

INSERT INTO administrators VALUES
('admin', 'sesame'),
('joel', 'sesame');


-- Create a user named ts_user
GRANT SELECT, INSERT, UPDATE, DELETE
ON *
TO ts_user@localhost
IDENTIFIED BY 'pa55word';
