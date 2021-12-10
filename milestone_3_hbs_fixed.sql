#create student table
CREATE TABLE student (
  net_id VARCHAR(8) NOT NULL PRIMARY KEY,
  first_name VARCHAR(50) NOT NULL,
  last_name VARCHAR(50) NOT NULL,
  standing VARCHAR(50) NOT NULL,
  email VARCHAR(255) NOT NULL,
  major VARCHAR(255) NULL,
  graduation_year YEAR NOT NULL
);


#create member table 
CREATE TABLE member (
  member_id	INTEGER	NOT NULL PRIMARY KEY  AUTO_INCREMENT,
  first_name VARCHAR(50) NOT NULL,	
  last_name	VARCHAR(50) NOT NULL,
  position VARCHAR(150),
  graduation_year YEAR NOT NULL,
  start_date DATE NOT NULL,
  end_date	 DATE,
  manager_id INTEGER NULL,
  CONSTRAINT member_fk1 FOREIGN KEY (manage_id) REFERENCES member(member_id) ON DELETE CASCADE ON UPDATE CASCADE
);

alter table member
change manage_id manager_id integer null;


#create event_student table
CREATE TABLE event_student (
	event_id INTEGER NOT NULL,
  	net_id VARCHAR(8) NOT NULL,
  	member_id INTEGER NOT NULL,
  	PRIMARY KEY (event_id, net_id, member_id),
  	CONSTRAINT event_student_fk1 FOREIGN KEY (event_id) REFERENCES event(event_id),
  	CONSTRAINT event_student_fk2 FOREIGN KEY (net_id) REFERENCES student(net_id),
  	CONSTRAINT event_student_fk3 FOREIGN KEY (member_id) REFERENCES member(member_id) 
  	ON DELETE CASCADE ON UPDATE CASCADE
);


#create suggestion table

CREATE TABLE suggestion (
  	suggestion_id	INTEGER	NOT NULL,
	net_id			INTEGER	NOT NULL,
	member_id		INTEGER	NOT NULL,
  	description		TEXT	NOT NULL,
  	PRIMARY KEY (net_id, member_id,suggestion_id),
	CONSTRAINT `suggestion_fk1` FOREIGN KEY (`net_id`) REFERENCES `student` (`net_id`) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT `suggestion_fk2` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE
 );
	
	
#create application table
CREATE TABLE application (
  application_id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  resume_id INTEGER NULL AUTO_INCREMENT,
  gpa DOUBLE(3,2) NULL,
  submission_date DATETIME NOT NULL
);


#create application member table 

CREATE TABLE application_member (
	application_id INTEGER NOT NULL, 
	member_id INTEGER NOT NULL, 
  	PRIMARY KEY (application_id, member_id),
    CONSTRAINT application_member_fk1 FOREIGN KEY (application_id) REFERENCES applications(application_id),
    CONSTRAINT application_member_fk2 FOREIGN KEY (member_id) REFERENCES member(member_id),
	); 


#create member event table

CREATE TABLE Member_Event (
	member_id INTEGER NOT NULL PRIMARY KEY, 
	event_id INTEGER NOT NULL PRIMARY KEY NOT NULL 
  	PRIMARY KEY (event_id, member_id),
	CONSTRAINT member_event_fk1 FOREIGN KEY (member_id) REFERENCES member(member_id),
    CONSTRAINT member_event_fk2 FOREIGN KEY (event_id) REFERENCES event(event_id),
     ); 



#query ideas: student/application ; event/event_student/member/student ; select members ; student/suggestion/members


#Query 1: Create query that show which students have applied to the HBS. Select only the students who applied before the due date (09-16-2021).

select *
from student s 
inner join application a on s.net_id = a.net_id
where submission_date <= 20210916; 

#Query 2: Create query that shows the attendants (include students' and HBS members' first name, last name, and net_id) that go to events 

select s. net_id, s.first_name, s.last_name, m.member_id
from event e
inner join event_student es on e.event_id = es.event_id
inner join student s on es.net_id = s.net_id
inner join member m on es.member_id = es.member_id
where name = 'Pinkorps'
GROUP by net_id asc ;


#Query 3: Create query that show all members and their position if they have any. (POTENTIALLY also show who is each person's manager)

select s1.member_id, s1.first_name, s1.last_name, s1.position, s2.manager_id, s2.first_name as manager_first_name, s2.last_name as manager_last_name
from member s1
left outer join member s2 on s1.manager_id = s2.manager_id
group by member_id;


#Query 4: Create query that shows a specific event and how many people attended the event (attendance (0))

#Query 5: Create query that shows what student (net_id) has entered suggestions. 

#views ideas: member/application  ; events/event_date ; 

#view 1 Create a view that only shows students that were accepted to the HBS to protect the privacy of those who did not.

create or replace view accepted_members as
select a.*
from application a
right outer join application_member am on a.application_id = am.application_id;

#view 2 Create a view that shows the description, first name, last name, and net id of the student who created the suggestion to visualize who made the suggestion. 

#view 3 Create a view that shows only the students applying for HBS that have a gpa above 3.25. Name this view highly_rated_applicants. 


#1 permission a - President/Vice President: have access to entire database and can make any changes necessary
GRANT all 
ON 354groupb2.*
TO Thorvald_Chazerand
WITH GRANT OPTION;
 
GRANT all 
ON 354groupb2.*
TO Ursulina_Schouthede
WITH GRANT OPTION;
#2 permission b - executives: have access to entire database and has all privileges besides create, references, and drop because only the president and vice president has the privilege to change the structure of the database
GRANT select, insert, update, delete
ON 354groupb2.*
TO Rose_Silbert;
 
GRANT select, insert, update, delete
ON 354groupb2.*
TO Marris_Berecloth;

GRANT select, insert, update, delete
ON 354groupb2.*
TO Toddy_Napton;
#3 permission c - members: have access to event table to aid when they are creating new events but cannot delete any entries or change the structure of the database
GRANT select, insert, update
ON 354groupb2.event
TO Charis_Brayshay;

GRANT select, insert, update
ON 354groupb2.event
TO Bridgette_Erricker;

GRANT select, insert, update
ON 354groupb2.event
TO Felicia_Savidge;

GRANT select, insert, update
ON 354groupb2.event
TO Coralynn_Gallard;

GRANT select, insert, update
ON 354groupb2.event
TO Joann_Bumfrey;

GRANT select, insert, update
ON 354groupb2.event
TO Tabbie_Beamish;

GRANT select, insert, update
ON 354groupb2.event
TO Jessamyn_McMackin;

GRANT select, insert, update
ON 354groupb2.event
TO Vitia_Faux;

GRANT select, insert, update
ON 354groupb2.event
TO Otho_Hopewell;

GRANT select, insert, update
ON 354groupb2.event
TO Dal_Abella;

GRANT select, insert, update
ON 354groupb2.event
TO Denice_Shilleto;

# Create trigger if the user login fail 
# Create trigger if the user do not enter the right password/user 