alter table application
modify submission_date datetime default now() not null;

ALTER TABLE application
MODIFY resume_id TEXT;

alter table suggestion
modify member_id int(11) null;

alter table suggestion
modify  submission_date datetime default now() not null;


alter table application
change resume_id application_resume text not null;

/*ERD updates - resume_id changed to application_resume, which is now 'text'(instead of Integer)./*