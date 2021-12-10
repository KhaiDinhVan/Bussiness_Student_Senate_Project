#Query 4: Create query that shows a specific event and how many people attended the event 

select name, sponsorship, description, event_date, count(net_id) as attendance
from event e
inner join event_student es on e.event_id = es.event_id
group by e.event_id
order by attendance desc;


#Query 5: Create query that shows what student (net_id) has entered suggestions and how many suggestions the student made. 

select s.net_id, first_name, last_name, count(suggestion_id) as number_of_suggestions
from student s
inner join suggestion su on s.net_id = su.net_id
group by net_id
order by number_of_suggestions desc;


#view 2 Create a view that shows the description, first name, last name, and net id of the student who created the suggestion to visualize who made the suggestion. 

create or replace view student_suggestion as 
select s.net_id, first_name, last_name, description
from student s
inner join suggestion su on s.net_id = su.net_id
group by suggestion_id;


#view 3 Create a view that shows only the students applying for HBS that have a gpa at or above a 3.25. Name this view highly_rated_applicants. 

create or replace view highly_rated_applicants as 
select s.net_id, first_name, last_name, major, graduation_year, resume_id, gpa, submission_date
from student s 
inner join application a on s.net_id = a.net_id
where gpa >= '3.25';


#2b.Procedure to add new members
# This is important because new member is a constant process that the member has to do. So a procedure would help the member to save time and prevent him from have error from rewriting the Insert SQL
DROP PROCEDURE IF EXISTS new_member;

DELIMITER $$
CREATE PROCEDURE new_member(IN vMemberID integer, IN vFirstName VARCHAR(50), IN vLastName VARCHAR(50), IN vPosition varchar(150), IN vGraduationYear year(4), IN vStartDate date)
BEGIN
  INSERT INTO member (member_id, first_name, last_name, position, graduation_year, start_date)
  VALUES (vMemberID, vFirstNAme, vLastName, vPosition, vGraduationYear, vStartDate);
  
END$$
DELIMITER ;

CALL new_member(21, 'John', 'Smith', 'member', 2024, 20211124);

#. Create Trigger that check whether the event with the date exist when member input event. Display the error if the event already exists.
# This is to make sure the member do not create duplicate events since people can sign up to the wrong event. 

#. Create Trigger that check whether the student submit the application pass the deadline or not. If student submit application that pass the deadline, give an error that said "the submitation date has pass" 
#This is to make sure that non of the application pass the dealine can be submited and let the student know. 

#. Funtion to return what a particular student's current academic standing (grade level) is within the Heider College of Business. 
#this funtion will help HBS see what its member's grade levels are which can influence what grade levels they need to recruit for for each given year.


#. Function to return a member's position for any particular member (if they have one).
#this will help the president  see who their vice presidents are and delegate duties to these vice presidents.

#Client introduction
#Overview of ERD We are interested in finding how many events the student attend

#modify application table modify submition_date datetime default now


  VALUES (vMemberID, vFirstNAme, vLastName, vPosition, vGraduationYear, vStartDate);
  
END$$
DELIMITER ;

CALL new_member(21, 'John', 'Smith', 'member', 2024, 20211124);

#Query for insert into a application form
#Insert net_id First name, last name, email, standing, major (o), graduation year 
#Insert gpa (o), submission_date,  resume 

INSERT INTO student
VALUES ('kki12345', "kiki" ,"iyes","Junior","kiki1234@gmail.com",NULL,"2023");

INSERT INTO application (net_id, resume_id, gpa, submission_date)
VALUES ("kki12345", 2, 3.8, CURRENT_TIMESTAMP);