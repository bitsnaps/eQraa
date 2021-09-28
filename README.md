# eQraa - Enrollment System
This is a fork from [Ximple Enrollment System](https://github.com/ximplextech/ximple-enrollment).

  This project was created to enhance the existing Edusec Enrollment System which opted to make their software cloud-based and was not movement for about a year.

# INTRODUCTION
  eQraa Enrollment has a suite of selective modules specifically tailored to the requirements of education industry. eQraa Enrollment is engineered and designed considering wide range of management functions within the university or school. With the use of eQraa Enrollment, staff can be more accountable as it helps to know the performance of each department in just few seconds. Almost all departments within education industry (e. g. admission, administration, time table, etc) can be synchronized and accessed. eQraa Enrollment helps to assign the responsibilities to employee staff and can reduce time wastage and can speed up the administrative functions. Core functions like admissions, students’ attendance in short entire range of university or school functions can be well performed by eQraa Enrollment.

## Purpose
  eQraa Enrollment will help school administration manage enrollment and automates some tedious manual process that comes along with it.

## Scope
  eQraa Enrollment will have College Management, Student Information, Employee Management, Course Management, Fees Management, Class Scheduling, Grades Management, and Online Payment.

# FEATURES
- Student Information System
	* Detailed student (current, formal, detained, alumni members) profile with photo and documents i.e. LC, mark sheets etc
	* Student login details
	* Extracting entire information to different formats e.g. excel, pdf
	* Highly customizable & search driven report for a student information

- Employee Information System
	* Entire employee (teaching / non – teaching) profile with photo and documents e. g. ID proof, driving license
	* Employee login details
	* Extracting information to different formats e. g. excel, pdf
	* Highly customizable & search driven report for a employee information
	* Grades
	* Class Schedules

- Course Management
	* Create and manage courses being offered
	* Map courses to a degree and assign subjects to a course
	* Define syllabus, books and other information relevant to a course
	* Students enrolment to a course
	* Faculty Feedback
	* Manage assignments and assessment
	* Communication tools including chat, discussion board

- Fees Management
	* Create and manage fee types, frequency, late fees, waiver, concession, scholarship, installments. Generate individual student fee-card.
	* Manage student payments and receipts. Track cheque return from the bank
Generate reports pertaining to fees collections, late payments, special fees, cheque return, and student outstanding amount.
	* Payment related reminders and alert messages on a daily, weekly, monthly, quarterly bases for groups or individuals
	* Online payment forms for authorized banks to collect fees on behalf of institution
	* Real time updates of fees collected and payment status
	* Ability to link this module to your existing accounting system for seamless integration with your accounts department.

- Dashboard
	* News, notifications and messages
	* Events Calendar
	* User specific graphical charts

- Subjects Management
	* Create and manage subjects, courses, and school years.

- Class Scheduling Management
	* Ability to create schedules from the list of Subjects, Classrooms, and Professors.

- Grading System (Not yet done)
	* Online grade submission.
	* Grades can be viewed by Professors and Students.

- Online Payment (Not yet done)
	* Can easily pay school fees online for a hassle-free transactions.

# SYSTEM REQUIREMENTS

* A web server with PHP 5.4.0 or later
* MySQL 5.1.0 or later

# INSTALLATION


1. Move/Upload eQraa-Enrollment to the web directory of your choice.
2. Create a new single MySQL database for eQraa-Enrollment to store all its tables.
3. Import eQraa-Enrollment database into `applicationPath/database`. If you wish you install sample data please upload `eQraa-enrollment-sample-db.sql` other wise upload `eQraa-enrollment-empty-db.sql`.
4. Go to` applicationPath/config` and rename file `db-sample.php` to `db.php`
5. Edit the file `applicationPath/config/db.php` with real data, for example:

    ```php
    return [
     'class' => 'yii\db\Connection',
     'dsn' => 'mysql:host=localhost;dbname=eqraadb',
     'username' => 'root',
     'password' => '',
     'charset' => 'utf8',
    ];`
	```
6. Next, you will be redirected to welcome/login page. If you upload sample-database wii be redirect login page other wise redirect welcome page and then setting up eQraa-Enrollment, creating an admin user account and institute setup etc.
7. You are now ready to use eQraa.
