# test1912
----create database:

create table patient( PatientID int NOT NULL AUTO_INCREMENT,
     FirstName CHAR(50) NOT NULL,
                      LastName CHAR(50) NOT NULL, 
                     DateOfBirth date, Gender char(6), PhoneNumber char(10), Email char(30), Height int, Weight int, BloodGroup char(3), CreateOn date , ModifiedOn date, 
     PRIMARY KEY (PatientID)
);
-----insert data:
insert into patient(FirstName, LastName, DateOfBirth, Gender, PhoneNumber, Email, Height, Weight, BloodGroup, CreateOn, ModifiedOn)
VALUES
('bob', 'ross', '2000-1-12', 'male', '0123433789', 'dat@mail.com', 179, 52, 'B', CURRENT_DATE, CURRENT_DATE),
('trang', 'nguyen', '1990-12-12', 'female', '0333456789', 'dat@mail.com', 169, 52, 'B', CURRENT_DATE, CURRENT_DATE),
('dong', 'le', '2000-4-4', 'female', '0123458899', 'dat@mail.com', 180, 52, 'O', CURRENT_DATE, CURRENT_DATE),
('chau', 'nguyen', '2000-5-6', 'male', '0223336789', 'dat@mail.com', 169, 51, 'B', CURRENT_DATE, CURRENT_DATE),
('hong', 'tran', '2000-5-3', 'female', '0223456789', 'dat@mail.com', 169, 52, 'A', CURRENT_DATE, CURRENT_DATE),
('travitt', 'scot', '2000-13-12', 'male', '0133456789', 'dat@mail.com', 169, 52, 'O', CURRENT_DATE, CURRENT_DATE),
('ba', 'ly', '2001-12-3', 'male', '0123556789', 'dat@mail.com', 169, 52, 'A', CURRENT_DATE, CURRENT_DATE),
('bin', 'nguyen', '2000-12-1', 'female', '0123446789', 'dat@mail.com', 169, 52, 'O', CURRENT_DATE, CURRENT_DATE);
