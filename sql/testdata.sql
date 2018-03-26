--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: gender; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE gender (
    id integer NOT NULL,
    gender_id integer NOT NULL,
    name text NOT NULL,
    disable integer DEFAULT 0 NOT NULL
);


ALTER TABLE public.gender OWNER TO postgres;

--
-- Name: gender_master_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE gender_master_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.gender_master_id_seq OWNER TO postgres;

--
-- Name: gender_master_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE gender_master_id_seq OWNED BY gender.id;


--
-- Name: researches; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE researches (
    id integer NOT NULL,
    create_user_id integer NOT NULL,
    name text NOT NULL,
    update_date timestamp without time zone DEFAULT now() NOT NULL,
    created_date timestamp without time zone DEFAULT now() NOT NULL,
    reword integer NOT NULL,
    disable integer DEFAULT 0 NOT NULL
);


ALTER TABLE public.researches OWNER TO postgres;

--
-- Name: researches_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE researches_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.researches_id_seq OWNER TO postgres;

--
-- Name: researches_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE researches_id_seq OWNED BY researches.id;


--
-- Name: rewords; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE rewords (
    id integer NOT NULL,
    research_id integer NOT NULL,
    user_id integer NOT NULL,
    paied_date timestamp without time zone NOT NULL,
    update_date timestamp without time zone DEFAULT now() NOT NULL,
    created_date timestamp without time zone DEFAULT now() NOT NULL,
    disable integer DEFAULT 0 NOT NULL
);


ALTER TABLE public.rewords OWNER TO postgres;

--
-- Name: rewords_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE rewords_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.rewords_id_seq OWNER TO postgres;

--
-- Name: rewords_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE rewords_id_seq OWNED BY rewords.id;


--
-- Name: user_types; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE user_types (
    id integer NOT NULL,
    name text NOT NULL,
    update_date timestamp without time zone DEFAULT now() NOT NULL,
    created_date timestamp without time zone DEFAULT now() NOT NULL,
    disable integer DEFAULT 0 NOT NULL,
    user_type_id integer NOT NULL
);


ALTER TABLE public.user_types OWNER TO postgres;

--
-- Name: user_typs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE user_typs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_typs_id_seq OWNER TO postgres;

--
-- Name: user_typs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE user_typs_id_seq OWNED BY user_types.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE users (
    id integer NOT NULL,
    last_name text NOT NULL,
    first_name text NOT NULL,
    gender text,
    birth_date date,
    login_id text NOT NULL,
    password text NOT NULL,
    update_date timestamp without time zone DEFAULT now() NOT NULL,
    created_date timestamp without time zone DEFAULT now() NOT NULL,
    user_type_id integer NOT NULL,
    disable integer DEFAULT 0 NOT NULL
);


ALTER TABLE public.users OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY gender ALTER COLUMN id SET DEFAULT nextval('gender_master_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY researches ALTER COLUMN id SET DEFAULT nextval('researches_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY rewords ALTER COLUMN id SET DEFAULT nextval('rewords_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY user_types ALTER COLUMN id SET DEFAULT nextval('user_typs_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- Data for Name: gender; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY gender (id, gender_id, name, disable) FROM stdin;
1	1	男	0
2	2	女	0
\.


--
-- Name: gender_master_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('gender_master_id_seq', 2, true);


--
-- Data for Name: researches; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY researches (id, create_user_id, name, update_date, created_date, reword, disable) FROM stdin;
12	1	調査１（山田）	2018-03-26 11:45:42.701796	2018-03-26 11:45:42.701796	1000	0
13	1	調査２（山田）	2018-03-26 11:46:25.112531	2018-03-26 11:46:25.112531	3000	0
14	6	調査２（秋山）	2018-03-26 11:47:20.39294	2018-03-26 11:47:20.39294	200	0
15	6	調査１（秋山）	2018-03-26 11:47:38.317834	2018-03-26 11:47:38.317834	350	0
16	6	調査３（秋山）	2018-03-26 11:47:51.810943	2018-03-26 11:47:51.810943	500	0
17	6	調査４（秋山）	2018-03-26 11:48:10.030744	2018-03-26 11:48:10.030744	40000	0
18	5	調査A（原）	2018-03-26 11:54:25.976925	2018-03-26 11:54:25.976925	50000	0
\.


--
-- Name: researches_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('researches_id_seq', 18, true);


--
-- Data for Name: rewords; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY rewords (id, research_id, user_id, paied_date, update_date, created_date, disable) FROM stdin;
31	12	7	2018-03-03 11:52:10	2018-03-26 11:52:10.57452	2018-03-26 11:52:10.57452	0
32	16	7	2018-03-03 11:52:16	2018-03-26 11:52:16.26479	2018-03-26 11:52:16.26479	0
33	15	7	2018-03-03 11:52:17	2018-03-26 11:52:17.75911	2018-03-26 11:52:17.75911	0
34	14	2	2018-03-03 11:52:31	2018-03-26 11:52:31.372417	2018-03-26 11:52:31.372417	0
35	13	2	2018-03-03 11:52:32	2018-03-26 11:52:32.347366	2018-03-26 11:52:32.347366	0
36	12	2	2018-03-03 11:52:33	2018-03-26 11:52:33.467085	2018-03-26 11:52:33.467085	0
37	12	5	2018-03-03 11:53:49	2018-03-26 11:53:49.094573	2018-03-26 11:53:49.094573	0
38	14	5	2018-03-03 11:53:52	2018-03-26 11:53:52.454513	2018-03-26 11:53:52.454513	0
\.


--
-- Name: rewords_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('rewords_id_seq', 38, true);


--
-- Data for Name: user_types; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY user_types (id, name, update_date, created_date, disable, user_type_id) FROM stdin;
1	admin	2018-03-18 22:55:44.032753	2018-03-18 22:55:44.032753	0	1
2	client	2018-03-18 22:55:48.319094	2018-03-18 22:55:48.319094	0	2
3	monitor	2018-03-18 22:55:59.028052	2018-03-18 22:55:59.028052	0	3
\.


--
-- Name: user_typs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('user_typs_id_seq', 3, true);


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY users (id, last_name, first_name, gender, birth_date, login_id, password, update_date, created_date, user_type_id, disable) FROM stdin;
1	山田(C)	太郎	1	1980-03-12	id	pass	2018-03-16 16:10:45.578582	2018-03-16 16:10:45.578582	2	0
2	加藤(M)	太郎	1	1987-02-11	monitor_id2	monitor_pass2	2018-03-16 16:11:14.649406	2018-03-16 16:11:14.649406	3	0
5	原(A)	二郎	1	1988-11-17	admin_id	admin_pass	2018-03-20 12:35:22.663018	2018-03-20 12:35:22.663018	1	0
6	秋山(C)	花子	2	1990-06-12	id2	pass2	2018-03-20 14:00:27.82218	2018-03-20 14:00:27.82218	2	0
7	前田(M)	ゆう子	2	1977-09-10	monitor_id1	monitor_pass1	2018-03-20 14:00:54.802268	2018-03-20 14:00:54.802268	3	0
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('users_id_seq', 7, true);


--
-- Name: researches_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY researches
    ADD CONSTRAINT researches_pkey PRIMARY KEY (id);


--
-- Name: rewords_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY rewords
    ADD CONSTRAINT rewords_pkey PRIMARY KEY (id);


--
-- Name: unique_gender_id; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY gender
    ADD CONSTRAINT unique_gender_id UNIQUE (gender_id);


--
-- Name: unique_name_create_user_id; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY researches
    ADD CONSTRAINT unique_name_create_user_id UNIQUE (create_user_id, name);


--
-- Name: user_types_user_type_id_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY user_types
    ADD CONSTRAINT user_types_user_type_id_key UNIQUE (user_type_id);


--
-- Name: user_typs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY user_types
    ADD CONSTRAINT user_typs_pkey PRIMARY KEY (id);


--
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: researches_create_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY researches
    ADD CONSTRAINT researches_create_user_id_fkey FOREIGN KEY (create_user_id) REFERENCES users(id);


--
-- Name: researches_create_user_id_fkey1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY researches
    ADD CONSTRAINT researches_create_user_id_fkey1 FOREIGN KEY (create_user_id) REFERENCES users(id);


--
-- Name: rewords_research_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY rewords
    ADD CONSTRAINT rewords_research_id_fkey FOREIGN KEY (research_id) REFERENCES researches(id);


--
-- Name: rewords_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY rewords
    ADD CONSTRAINT rewords_user_id_fkey FOREIGN KEY (user_id) REFERENCES users(id);


--
-- Name: users_user_type_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_user_type_id_fkey FOREIGN KEY (user_type_id) REFERENCES user_types(id);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

