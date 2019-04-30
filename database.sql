--
-- PostgreSQL database dump
--

--
-- Name: admin; Type: TABLE; Schema: public; Owner: aisha
--

CREATE TABLE public.admin (
    admin_id integer NOT NULL,
    admin_name character varying(20),
    admin_email character varying(20),
    admin_userid character varying(10),
    admin_password character varying(20)
);


ALTER TABLE public.admin OWNER TO aisha;

--
-- Name: class; Type: TABLE; Schema: public; Owner: aisha
--

CREATE TABLE public.class (
    class_name character varying(20) NOT NULL
);


ALTER TABLE public.class OWNER TO aisha;

--
-- Name: department; Type: TABLE; Schema: public; Owner: aisha
--

CREATE TABLE public.department (
    department_name character varying(30) NOT NULL,
    hod_name character varying(30)
);


ALTER TABLE public.department OWNER TO aisha;

--
-- Name: division; Type: TABLE; Schema: public; Owner: aisha
--

CREATE TABLE public.division (
    division_name character varying(20) NOT NULL
);


ALTER TABLE public.division OWNER TO aisha;

--
-- Name: faculty; Type: TABLE; Schema: public; Owner: aisha
--

CREATE TABLE public.faculty (
    faculty_name character varying(50) NOT NULL,
    faculty_email character varying(50),
    faculty_contact character varying(10),
    department_name character varying(30)
);


ALTER TABLE public.faculty OWNER TO aisha;

--
-- Name: feedback; Type: TABLE; Schema: public; Owner: aisha
--

CREATE TABLE public.feedback (
    class_name character varying(50),
    division_name character varying(50),
    faculty_name character varying(50),
    reg_no character varying(30),
    rating1 integer,
    rating2 integer,
    rating3 integer,
    rating4 integer,
    rating5 integer
);


ALTER TABLE public.feedback OWNER TO aisha;

--
-- Name: hod; Type: TABLE; Schema: public; Owner: aisha
--

CREATE TABLE public.hod (
    hod_name character varying(20) NOT NULL,
    hod_email character varying(20),
    hod_contact character varying(10),
    hod_userid character varying(20),
    hod_password character varying(20)
);


ALTER TABLE public.hod OWNER TO aisha;

--
-- Name: question; Type: TABLE; Schema: public; Owner: aisha
--

CREATE TABLE public.question (
    question_id integer NOT NULL,
    questions text,
    description text
);


ALTER TABLE public.question OWNER TO aisha;

--
-- Name: semester; Type: TABLE; Schema: public; Owner: aisha
--

CREATE TABLE public.semester (
    semester_name character varying(10) NOT NULL
);


ALTER TABLE public.semester OWNER TO aisha;

--
-- Name: student; Type: TABLE; Schema: public; Owner: aisha
--

CREATE TABLE public.student (
    reg_no character varying(20) NOT NULL,
    rollno integer,
    student_name character varying(20),
    student_contact character varying(10),
    student_email character varying(20),
    status boolean
);


ALTER TABLE public.student OWNER TO aisha;

--
-- Name: student_class_division; Type: TABLE; Schema: public; Owner: aisha
--

CREATE TABLE public.student_class_division (
    reg_no character varying(20),
    class_name character varying(20),
    division_name character varying(20)
);


ALTER TABLE public.student_class_division OWNER TO aisha;

--
-- Name: subject; Type: TABLE; Schema: public; Owner: aisha
--

CREATE TABLE public.subject (
    subject_name character varying(30) NOT NULL,
    class_name character varying(10),
    faculty_name character varying(50)
);


ALTER TABLE public.subject OWNER TO aisha;

--
-- Name: teacher; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.teacher (
    tname character varying(30)
);


ALTER TABLE public.teacher OWNER TO postgres;

--
-- Data for Name: admin; Type: TABLE DATA; Schema: public; Owner: aisha
--

COPY public.admin (admin_id, admin_name, admin_email, admin_userid, admin_password) FROM stdin;
1	AishaIffat	iffatc3@gmail.com	AishaIffat	aishaiffat
\.


--
-- Data for Name: class; Type: TABLE DATA; Schema: public; Owner: aisha
--

COPY public.class (class_name) FROM stdin;
FYBCS
SYBCS
TYBCS
MCS-I
MCS-II
\.


--
-- Data for Name: department; Type: TABLE DATA; Schema: public; Owner: aisha
--

COPY public.department (department_name, hod_name) FROM stdin;
Computer Science	Shakila Siddhavatam
Electronics	Faiz Kurne
Statistics	Hasan Shaikh
Maths	xyz
\.


--
-- Data for Name: division; Type: TABLE DATA; Schema: public; Owner: aisha
--

COPY public.division (division_name) FROM stdin;
A
B
\.


--
-- Data for Name: faculty; Type: TABLE DATA; Schema: public; Owner: aisha
--

COPY public.faculty (faculty_name, faculty_email, faculty_contact, department_name) FROM stdin;
Sana Shaikh	sana@gmail.com	9012783465	Computer Science
Alifiya Jahagirdar	alifiya@gmail.com	9980765432	Computer Science
Madhuri Modak	madhuri@gmail.com	8809437512	Computer Science
Sadiya Shaikh	sadiya@gmail.com	9976123423	Computer Science
Manisha Buddhe	manisha@gmail.com	7878544355	Computer Science
Saba Shaikh	saba@gmail.com	7874441355	Computer Science
Namita Gholap	namita@gmail.com	7232341355	Computer Science
Fatima Khan	fatima@gmail.com	7232564534	Computer Science
Priya Raut	priya@gmail.com	9090564534	Computer Science
Shehnaz Hussain	shehnaz@gmail.com	9878564534	Computer Science
Atiya Shaikh	atiya@gmail.com	9878565834	Electronics
Rabiya Sayyed	rabiya@gmail.com	9880565834	Electronics
Faiz Kurne	faiz@gmail.com	8580565834	Electronics
Kausar Shaikh	kausar@gmail.com	9980565834	Electronics
Snehal More	snehal@gmail.com	9123565834	Statistics
Deepti Joshi	deepti@gmail.com	7823565834	Statistics
\.


--
-- Data for Name: feedback; Type: TABLE DATA; Schema: public; Owner: aisha
--

COPY public.feedback (class_name, division_name, faculty_name, reg_no, rating1, rating2, rating3, rating4, rating5) FROM stdin;
TYBCS	A	Sana Shaikh	TYA01	3	4	4	4	3
TYBCS	A	Alifiya Jahagirdar	TYA01	5	4	5	4	4
TYBCS	A	Sadiya Shaikh	TYA01	3	4	4	3	4
TYBCS	A	Manisha Buddhe	TYA01	5	3	4	5	4
TYBCS	A	Namita Gholap	TYA01	4	4	5	4	4
TYBCS	A	Priya Raut	TYA01	4	4	3	4	4
TYBCS	A	Shehnaz Hussain	TYA01	3	5	3	5	2
SYBCS	A	Madhuri Modak	SYA02	4	4	3	4	3
SYBCS	A	Saba Shaikh	SYA02	4	3	4	3	4
SYBCS	A	Fatima Khan	SYA02	5	4	4	5	4
SYBCS	A	Atiya Shaikh	SYA02	4	5	4	5	3
SYBCS	A	Faiz Kurne	SYA02	4	4	4	3	4
SYBCS	A	Madhuri Modak	SYA03	3	4	5	4	4
SYBCS	A	Saba Shaikh	SYA03	4	4	4	5	4
SYBCS	A	Fatima Khan	SYA03	4	4	5	4	5
SYBCS	A	Atiya Shaikh	SYA03	4	5	4	4	4
SYBCS	A	Atiya Shaikh	SYA03	4	5	4	4	4
SYBCS	A	Faiz Kurne	SYA03	4	4	5	4	5
SYBCS	A	Madhuri Modak	SYA04	3	4	3	5	2
SYBCS	A	Saba Shaikh	SYA04	2	4	2	5	2
SYBCS	A	Fatima Khan	SYA04	3	5	3	5	3
SYBCS	A	Atiya Shaikh	SYA04	3	5	3	4	5
SYBCS	A	Faiz Kurne	SYA04	4	2	4	2	3
\.


--
-- Data for Name: hod; Type: TABLE DATA; Schema: public; Owner: aisha
--

COPY public.hod (hod_name, hod_email, hod_contact, hod_userid, hod_password) FROM stdin;
Shakila Siddhavatam	shakilasid@gmail.com	9078563412	Shakila_hod	shakila
Faiz Kurne	faizk@gmail.com	9763412958	Faiz_hod	faiz
Hasan Shaikh	hasan@gmail.com	9963142958	hasan_hod	hasan
xyz	abc@gmail;.com	9863147523	xyz	xyz
\.


--
-- Data for Name: question; Type: TABLE DATA; Schema: public; Owner: aisha
--

COPY public.question (question_id, questions, description) FROM stdin;
1	Teacher Punctuality	Punctuality
2	Teachers Availability	Availability
3	Teachers subject knowledge	Knowledge
4	Teachers ability to Interact	Interactivity
5	Teachers Communication Skills	Communication Skills
\.


--
-- Data for Name: semester; Type: TABLE DATA; Schema: public; Owner: aisha
--

COPY public.semester (semester_name) FROM stdin;
I
II
III
IV
\.


--
-- Data for Name: student; Type: TABLE DATA; Schema: public; Owner: aisha
--

COPY public.student (reg_no, rollno, student_name, student_contact, student_email, status) FROM stdin;
SYA04	4	Delnaaz	8974461235	deln@gmail.com	t
FYA01	1	Neha	8756782096	neha@gmail.com	f
FYB01	1	Abhaya	7894561235	abhaya@gmail.com	f
SYA01	1	Sohel	7894447235	sohel@gmail.com	f
SYB01	1	Charlie	9444561235	charlie@gmail.com	f
TYA01	1	Siddhart	9094447235	sid@gmail.com	f
TYB01	1	Anita	9094446785	anita@gmail.com	f
MIA01	1	Aditi	8994446785	adi@igmail.com	f
MIB01	1	Sachin	9074446785	sachin@gmail.com	f
MIIA01	1	Shoaib	9074446785	sho@gmail.com	f
MIIB01	1	Asim	9887446785	sasim@gmail.com	f
FYA02	2	Misha	9908563145	misha@gmail.com	f
FYB02	2	Aishwarya	7894567235	aish@gmail.com	f
SYA02	2	Amit	7894561235	amit@gmail.com	f
SYB02	2	Preeti	9990901235	prt@gmail.com	f
TYA02	2	Anand	7894561789	anand@gmail.com	f
TYB02	2	Amrita	9894561789	amrita@gmail.com	f
MIA02	2	Saniya	7094561789	sani@gmail.com	f
MIB02	2	Faizan	8084561789	faizan@gmail.com	f
MIIA02	2	Rahil	9894561789	rah@gmail.com	f
MIIB02	2	Rehan	8894561789	rehh@gmail.com	f
FYA03	3	Shahid	9056782145	shahid@gmail.com	f
FYB03	3	Misba	9994561235	miss@gmail.com	f
SYB03	3	Shaina	7774561235	shaina@gmail.com	f
TYA03	3	Kavya	9999561235	kavya@gmail.com	f
TYB03	3	Kriti	8089561235	kri@gmail.com	f
MIA03	3	Shivani	7009561235	shivani@gmail.com	f
MIB03	3	Atique	9899561235	atique@gmail.com	f
MIIA03	3	Rayyan	8089561235	ray@gmail.com	f
MIIB03	3	Hiba	7789561235	hiba@gmail.com	f
SYA03	3	Kiran	8909561235	kiran@gmail.com	f
FYA04	4	Akshay	9145780932	akshay@gmail.com	f
FYB04	4	Karan	9909561235	karan@gmail.com	f
SYB04	4	Ira	9994578945	ira@gmail.com	f
TYA04	4	Dina	7774461235	dina@gmail.com	f
TYB04	4	Daisy	9984461235	daisy@gmail.com	f
MIA04	4	Aakash	9084461235	ak@gmail.com	f
MIB04	4	Shadab	9084461879	sha@gmail.com	f
MIIA04	4	Ashima	7764461879	ashi@gmail.com	f
MIIB04	4	Afifa	9094461879	afifa@gmail.com	f
FYA05	5	Riya	8490526791	riya@gmail.com	f
FYB05	5	Rohan	8974561235	rohan@gmail.com	f
SYA05	5	Selena	8784561235	seli@gmail.com	f
SYB05	5	Misba	9994561235	miss@gmail.com	f
TYA05	5	Sini	9084561235	sini@gmail.com	f
TYB05	5	Shifa	8797561235	shifa@gmail.com	f
MIA05	5	Satyam	9097561235	satyam@gmail.com	f
MIB05	5	Sana	8887561235	sanaaa@gmail.com	f
MIIA05	5	Sheela	9097561235	sanaaa@gmail.com	f
MIIB05	5	Safa	9098971235	safa@gmail.com	f
\.


--
-- Data for Name: student_class_division; Type: TABLE DATA; Schema: public; Owner: aisha
--

COPY public.student_class_division (reg_no, class_name, division_name) FROM stdin;
FYA01	FYBCS	A
FYA02	FYBCS	A
FYA03	FYBCS	A
FYA04	FYBCS	A
FYA05	FYBCS	A
FYB01	FYBCS	B
FYB02	FYBCS	B
FYB03	FYBCS	B
FYB04	FYBCS	B
FYB05	FYBCS	B
SYA01	SYBCS	A
SYA02	SYBCS	A
SYA03	SYBCS	A
SYA04	SYBCS	A
SYA05	SYBCS	A
SYB01	SYBCS	B
SYB02	SYBCS	B
SYB03	SYBCS	B
SYB04	SYBCS	B
SYB05	SYBCS	B
TYA01	TYBCS	A
TYA02	TYBCS	A
TYA03	TYBCS	A
TYA04	TYBCS	A
TYA05	TYBCS	A
TYB01	TYBCS	B
TYB02	TYBCS	B
TYB03	TYBCS	B
TYB04	TYBCS	B
TYB05	TYBCS	B
MIA01	MCS-I	A
MIA02	MCS-I	A
MIA03	MCS-I	A
MIA04	MCS-I	A
MIA05	MCS-I	A
MIB01	MCS-I	B
MIB02	MCS-I	B
MIB03	MCS-I	B
MIB04	MCS-I	B
MIB05	MCS-I	B
MIIA01	MCS-II	A
MIIA02	MCS-II	A
MIIA03	MCS-II	A
MIIA04	MCS-II	A
MIIA05	MCS-II	A
MIIB01	MCS-II	B
MIIB02	MCS-II	B
MIIB03	MCS-II	B
MIIB04	MCS-II	B
MIIB05	MCS-II	B
FYA01	FYBCS	A
FYA02	FYBCS	A
FYA03	FYBCS	A
FYA04	FYBCS	A
FYA05	FYBCS	A
FYB01	FYBCS	B
FYB02	FYBCS	B
FYB03	FYBCS	B
FYB04	FYBCS	B
FYB05	FYBCS	B
SYA01	SYBCS	A
SYA02	SYBCS	A
SYA03	SYBCS	A
SYA04	SYBCS	A
SYA05	SYBCS	A
SYB01	SYBCS	B
SYB02	SYBCS	B
SYB03	SYBCS	B
SYB04	SYBCS	B
SYB05	SYBCS	B
TYA01	TYBCS	A
TYA02	TYBCS	A
TYA03	TYBCS	A
TYA04	TYBCS	A
TYA05	TYBCS	A
TYB01	TYBCS	B
TYB02	TYBCS	B
TYB03	TYBCS	B
TYB04	TYBCS	B
TYB05	TYBCS	B
MIA01	MCS-I	A
MIA02	MCS-I	A
MIA03	MCS-I	A
MIA04	MCS-I	A
MIA05	MCS-I	A
MIB01	MCS-I	B
MIB02	MCS-I	B
MIB03	MCS-I	B
MIB04	MCS-I	B
MIB05	MCS-I	B
MIIA01	MCS-II	A
MIIA02	MCS-II	A
MIIA03	MCS-II	A
MIIA04	MCS-II	A
MIIA05	MCS-II	A
MIIB01	MCS-II	B
MIIB02	MCS-II	B
MIIB03	MCS-II	B
MIIB04	MCS-II	B
MIIB05	MCS-II	B
\.


--
-- Data for Name: subject; Type: TABLE DATA; Schema: public; Owner: aisha
--

COPY public.subject (subject_name, class_name, faculty_name) FROM stdin;
C Programming	FYBCS	Sana Shaikh
Applied Algebra	SYBCS	Madhuri Modak
TCS	TYBCS	Alifiya Jahagirdar
Networking	TYBCS	Namita Gholap
Research	MCS-I	Alifiya Jahagirdar
Database Management	FYBCS	Sana Shaikh
Discrete Mathematics	FYBCS	Madhuri Modak
Algebra and Calculus	FYBCS	Saba Shaikh
Digital Electronics	FYBCS	Rabiya Sayyed
Analog Electronics	FYBCS	Atiya Shaikh
Statistics-I	FYBCS	Snehal More
Statistics-II	FYBCS	Deepti Joshi
RDBMS	SYBCS	Fatima Khan
Numerical Methods	SYBCS	Saba Shaikh
Analog System	SYBCS	Atiya Shaikh
Digital System	SYBCS	Faiz Kurne
System Programming	TYBCS	Sana Shaikh
Java	TYBCS	Sadiya Shaikh
Internet Programming	TYBCS	Manisha Buddhe
OOSE	TYBCS	Priya Raut
Computer Networks	TYBCS	Shehnaz Hussain
Principles of PL	MCS-I	Priya Raut
Distributed Database	MCS-I	Alifiya Jahagirdar
Design and Analysis	MCS-I	Sadiya Shaikh
Software Metrics	MCS-II	Sana Shaikh
Mobile Computing	MCS-II	Alifiya Jahagirdar
ISS	MCS-II	Manisha Buddhe
\.


--
-- Data for Name: teacher; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.teacher (tname) FROM stdin;
\.


--
-- Name: admin admin_pkey; Type: CONSTRAINT; Schema: public; Owner: aisha
--

ALTER TABLE ONLY public.admin
    ADD CONSTRAINT admin_pkey PRIMARY KEY (admin_id);


--
-- Name: class class_pkey; Type: CONSTRAINT; Schema: public; Owner: aisha
--

ALTER TABLE ONLY public.class
    ADD CONSTRAINT class_pkey PRIMARY KEY (class_name);


--
-- Name: department department_pkey; Type: CONSTRAINT; Schema: public; Owner: aisha
--

ALTER TABLE ONLY public.department
    ADD CONSTRAINT department_pkey PRIMARY KEY (department_name);


--
-- Name: division division_pkey; Type: CONSTRAINT; Schema: public; Owner: aisha
--

ALTER TABLE ONLY public.division
    ADD CONSTRAINT division_pkey PRIMARY KEY (division_name);


--
-- Name: faculty faculty_pkey; Type: CONSTRAINT; Schema: public; Owner: aisha
--

ALTER TABLE ONLY public.faculty
    ADD CONSTRAINT faculty_pkey PRIMARY KEY (faculty_name);


--
-- Name: hod hod_pkey; Type: CONSTRAINT; Schema: public; Owner: aisha
--

ALTER TABLE ONLY public.hod
    ADD CONSTRAINT hod_pkey PRIMARY KEY (hod_name);


--
-- Name: question question_pkey; Type: CONSTRAINT; Schema: public; Owner: aisha
--

ALTER TABLE ONLY public.question
    ADD CONSTRAINT question_pkey PRIMARY KEY (question_id);


--
-- Name: semester semester_pkey; Type: CONSTRAINT; Schema: public; Owner: aisha
--

ALTER TABLE ONLY public.semester
    ADD CONSTRAINT semester_pkey PRIMARY KEY (semester_name);


--
-- Name: student student_pkey; Type: CONSTRAINT; Schema: public; Owner: aisha
--

ALTER TABLE ONLY public.student
    ADD CONSTRAINT student_pkey PRIMARY KEY (reg_no);


--
-- Name: subject subject_pkey; Type: CONSTRAINT; Schema: public; Owner: aisha
--

ALTER TABLE ONLY public.subject
    ADD CONSTRAINT subject_pkey PRIMARY KEY (subject_name);


--
-- Name: department department_hod_name_fkey; Type: FK CONSTRAINT; Schema: public; Owner: aisha
--

ALTER TABLE ONLY public.department
    ADD CONSTRAINT department_hod_name_fkey FOREIGN KEY (hod_name) REFERENCES public.hod(hod_name);


--
-- Name: faculty faculty_department_name_fkey; Type: FK CONSTRAINT; Schema: public; Owner: aisha
--

ALTER TABLE ONLY public.faculty
    ADD CONSTRAINT faculty_department_name_fkey FOREIGN KEY (department_name) REFERENCES public.department(department_name);


--
-- Name: feedback feedback_class_name_fkey; Type: FK CONSTRAINT; Schema: public; Owner: aisha
--

ALTER TABLE ONLY public.feedback
    ADD CONSTRAINT feedback_class_name_fkey FOREIGN KEY (class_name) REFERENCES public.class(class_name);


--
-- Name: feedback feedback_division_name_fkey; Type: FK CONSTRAINT; Schema: public; Owner: aisha
--

ALTER TABLE ONLY public.feedback
    ADD CONSTRAINT feedback_division_name_fkey FOREIGN KEY (division_name) REFERENCES public.division(division_name);


--
-- Name: feedback feedback_faculty_name_fkey; Type: FK CONSTRAINT; Schema: public; Owner: aisha
--

ALTER TABLE ONLY public.feedback
    ADD CONSTRAINT feedback_faculty_name_fkey FOREIGN KEY (faculty_name) REFERENCES public.faculty(faculty_name);


--
-- Name: feedback feedback_reg_no_fkey; Type: FK CONSTRAINT; Schema: public; Owner: aisha
--

ALTER TABLE ONLY public.feedback
    ADD CONSTRAINT feedback_reg_no_fkey FOREIGN KEY (reg_no) REFERENCES public.student(reg_no);


--
-- Name: student_class_division student_class_division_class_name_fkey; Type: FK CONSTRAINT; Schema: public; Owner: aisha
--

ALTER TABLE ONLY public.student_class_division
    ADD CONSTRAINT student_class_division_class_name_fkey FOREIGN KEY (class_name) REFERENCES public.class(class_name);


--
-- Name: student_class_division student_class_division_division_name_fkey; Type: FK CONSTRAINT; Schema: public; Owner: aisha
--

ALTER TABLE ONLY public.student_class_division
    ADD CONSTRAINT student_class_division_division_name_fkey FOREIGN KEY (division_name) REFERENCES public.division(division_name);


--
-- Name: student_class_division student_class_division_reg_no_fkey; Type: FK CONSTRAINT; Schema: public; Owner: aisha
--

ALTER TABLE ONLY public.student_class_division
    ADD CONSTRAINT student_class_division_reg_no_fkey FOREIGN KEY (reg_no) REFERENCES public.student(reg_no);


--
-- Name: subject subject_class_name_fkey; Type: FK CONSTRAINT; Schema: public; Owner: aisha
--

ALTER TABLE ONLY public.subject
    ADD CONSTRAINT subject_class_name_fkey FOREIGN KEY (class_name) REFERENCES public.class(class_name);


--
-- Name: subject subject_faculty_name_fkey; Type: FK CONSTRAINT; Schema: public; Owner: aisha
--

ALTER TABLE ONLY public.subject
    ADD CONSTRAINT subject_faculty_name_fkey FOREIGN KEY (faculty_name) REFERENCES public.faculty(faculty_name);


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: postgres
--

GRANT USAGE ON SCHEMA public TO aisha;


--
-- Name: TABLE teacher; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT ON TABLE public.teacher TO aisha;


--
-- PostgreSQL database dump complete
--

