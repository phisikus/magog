--
-- PostgreSQL database dump
--

-- Dumped from database version 9.1.9
-- Dumped by pg_dump version 9.1.9
-- Started on 2013-05-24 12:44:24 CEST

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;


--
-- TOC entry 176 (class 3079 OID 11652)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 1975 (class 0 OID 0)
-- Dependencies: 176
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

--
-- TOC entry 188 (class 1255 OID 17563)
-- Dependencies: 6
-- Name: from_unixtime(integer); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION from_unixtime(integer) RETURNS timestamp with time zone
    LANGUAGE sql
    AS $_$
         SELECT to_timestamp($1) AS result$_$;


ALTER FUNCTION public.from_unixtime(integer) OWNER TO postgres;

--
-- TOC entry 189 (class 1255 OID 17564)
-- Dependencies: 6
-- Name: month(timestamp without time zone); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION month(timestamp without time zone) RETURNS integer
    LANGUAGE sql IMMUTABLE
    AS $_$ 
      SELECT EXTRACT(MONTH FROM $1)::INTEGER; 
$_$;


ALTER FUNCTION public.month(timestamp without time zone) OWNER TO postgres;

--
-- TOC entry 190 (class 1255 OID 17565)
-- Dependencies: 6
-- Name: month(timestamp with time zone); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION month(timestamp with time zone) RETURNS integer
    LANGUAGE sql STABLE
    AS $_$
      SELECT EXTRACT(MONTH FROM $1)::INTEGER;
$_$;


ALTER FUNCTION public.month(timestamp with time zone) OWNER TO postgres;

--
-- TOC entry 191 (class 1255 OID 17566)
-- Dependencies: 6
-- Name: month(date); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION month(date) RETURNS integer
    LANGUAGE sql IMMUTABLE
    AS $_$
      SELECT EXTRACT(MONTH FROM $1)::INTEGER;
$_$;


ALTER FUNCTION public.month(date) OWNER TO postgres;

--
-- TOC entry 192 (class 1255 OID 17567)
-- Dependencies: 6
-- Name: year(timestamp without time zone); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION year(timestamp without time zone) RETURNS integer
    LANGUAGE sql IMMUTABLE
    AS $_$ 
      SELECT EXTRACT(YEAR FROM $1)::INTEGER; 
$_$;


ALTER FUNCTION public.year(timestamp without time zone) OWNER TO postgres;

--
-- TOC entry 193 (class 1255 OID 17568)
-- Dependencies: 6
-- Name: year(timestamp with time zone); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION year(timestamp with time zone) RETURNS integer
    LANGUAGE sql STABLE
    AS $_$
      SELECT EXTRACT(YEAR FROM $1)::INTEGER;
$_$;


ALTER FUNCTION public.year(timestamp with time zone) OWNER TO postgres;

--
-- TOC entry 194 (class 1255 OID 17569)
-- Dependencies: 6
-- Name: year(date); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION year(date) RETURNS integer
    LANGUAGE sql IMMUTABLE
    AS $_$
      SELECT EXTRACT(YEAR FROM $1)::INTEGER;
$_$;


ALTER FUNCTION public.year(date) OWNER TO postgres;

--
-- TOC entry 161 (class 1259 OID 17570)
-- Dependencies: 6
-- Name: comments_pk_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE comments_pk_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.comments_pk_seq OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 162 (class 1259 OID 17572)
-- Dependencies: 1911 1912 6
-- Name: comments; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE comments (
    id integer DEFAULT nextval('comments_pk_seq'::regclass) NOT NULL,
    author_id integer DEFAULT nextval('comments_pk_seq'::regclass) NULL,
    author_username character varying(255) NOT NULL,
    parent_page integer NULL,
    parent_comment integer,
    content text,
    date integer NOT NULL
);


ALTER TABLE public.comments OWNER TO postgres;

--
-- TOC entry 163 (class 1259 OID 17580)
-- Dependencies: 6
-- Name: config_pk_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE config_pk_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.config_pk_seq OWNER TO postgres;

--
-- TOC entry 164 (class 1259 OID 17582)
-- Dependencies: 1913 6
-- Name: config; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE config (
    id integer DEFAULT nextval('config_pk_seq'::regclass) NOT NULL,
    website character varying(255),
    module character varying(255),
    property character varying(255),
    value text
);


ALTER TABLE public.config OWNER TO postgres;

--
-- TOC entry 165 (class 1259 OID 17589)
-- Dependencies: 6
-- Name: menu_pk_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE menu_pk_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.menu_pk_seq OWNER TO postgres;

--
-- TOC entry 166 (class 1259 OID 17591)
-- Dependencies: 1914 6
-- Name: menu; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE menu (
    id integer DEFAULT nextval('menu_pk_seq'::regclass) NOT NULL,
    text character varying(255),
    parent_id integer,
    link character varying(255),
    enabled integer NOT NULL,
    visible integer NOT NULL
);


ALTER TABLE public.menu OWNER TO postgres;

--
-- TOC entry 167 (class 1259 OID 17598)
-- Dependencies: 6
-- Name: pages_pk_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE pages_pk_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pages_pk_seq OWNER TO postgres;

--
-- TOC entry 168 (class 1259 OID 17600)
-- Dependencies: 1915 6
-- Name: pages; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE pages (
    id integer DEFAULT nextval('pages_pk_seq'::regclass) NOT NULL,
    title character varying(500),
    short_title character varying(500),
    content text,
    author_id integer,
    date integer,
    mod_date integer,
    public integer,
    comments integer,
    news integer,
    categories character varying(700),
    lang character varying(10),
    parent_page integer
);


ALTER TABLE public.pages OWNER TO postgres;

--
-- TOC entry 169 (class 1259 OID 17607)
-- Dependencies: 6
-- Name: roles_pk_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE roles_pk_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.roles_pk_seq OWNER TO postgres;

--
-- TOC entry 170 (class 1259 OID 17609)
-- Dependencies: 1916 6
-- Name: roles; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE roles (
    id integer DEFAULT nextval('roles_pk_seq'::regclass) NOT NULL,
    name character varying(32),
    description character varying(255)
);


ALTER TABLE public.roles OWNER TO postgres;

--
-- TOC entry 171 (class 1259 OID 17613)
-- Dependencies: 6
-- Name: roles_users; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE roles_users (
    user_id integer NOT NULL,
    role_id integer NOT NULL
);


ALTER TABLE public.roles_users OWNER TO postgres;

--
-- TOC entry 172 (class 1259 OID 17616)
-- Dependencies: 6
-- Name: user_tokens; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE user_tokens (
    id integer NOT NULL,
    user_id integer NOT NULL,
    user_agent character varying(40),
    token character varying(32),
    created integer,
    expires integer
);


ALTER TABLE public.user_tokens OWNER TO postgres;

--
-- TOC entry 173 (class 1259 OID 17619)
-- Dependencies: 6
-- Name: user_tokens_pk_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE user_tokens_pk_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_tokens_pk_seq OWNER TO postgres;

--
-- TOC entry 174 (class 1259 OID 17621)
-- Dependencies: 6
-- Name: users_pk_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE users_pk_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_pk_seq OWNER TO postgres;

--
-- TOC entry 175 (class 1259 OID 17623)
-- Dependencies: 1917 6
-- Name: users; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE users (
    id integer DEFAULT nextval('users_pk_seq'::regclass) NOT NULL,
    email character varying(127),
    username character varying(32),
    password character varying(100),
    logins integer,
    last_login integer,
    full_name character varying(255),
    external_id integer,
    signature character varying(700),
    avatar character varying(127),
    lang character varying(10)
);


ALTER TABLE public.users OWNER TO postgres;

--
-- TOC entry 1954 (class 0 OID 17572)
-- Dependencies: 162 1968
-- Data for Name: comments; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO comments VALUES (1, 1, 'admin', 1, NULL, 'Tak, to super', 1348575681);
INSERT INTO comments VALUES (2, 1, 'admin', 1, NULL, 'No seryjnie niesamowite.', 1348575689);


--
-- TOC entry 1976 (class 0 OID 0)
-- Dependencies: 161
-- Name: comments_pk_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('comments_pk_seq', 1, false);


--
-- TOC entry 1956 (class 0 OID 17582)
-- Dependencies: 164 1968
-- Data for Name: config; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO config VALUES (5, NULL, 'template', 'default', 'default');
INSERT INTO config VALUES (6, NULL, 'page', 'homepage', '1');
INSERT INTO config VALUES (7, NULL, 'page', 'title', 'Przykładowa Strona');
INSERT INTO config VALUES (1, NULL, 'language', 'default', 'pl');


--
-- TOC entry 1977 (class 0 OID 0)
-- Dependencies: 163
-- Name: config_pk_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('config_pk_seq', 1, true);


--
-- TOC entry 1958 (class 0 OID 17591)
-- Dependencies: 166 1968
-- Data for Name: menu; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO menu VALUES (14, 'Menu główne', NULL, '', 1, 1);
INSERT INTO menu VALUES (15, 'Archiwum', 14, '/~phisikus/magog/index.php/show/news/1=0=0', 1, 1);
INSERT INTO menu VALUES (16, 'Strona główna', 14, '/~phisikus/magog/index.php/show/page/1', 1, 1);


--
-- TOC entry 1978 (class 0 OID 0)
-- Dependencies: 165
-- Name: menu_pk_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('menu_pk_seq', 1, false);


--
-- TOC entry 1960 (class 0 OID 17600)
-- Dependencies: 168 1968
-- Data for Name: pages; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO pages VALUES (2, 'Pierwszy News', 'pierwszy-news', '<p>Oto jest pierwsza <span style="color: #888888;">informacja<span style="color: #ff0000;">&nbsp;<span style="font-size: medium;">zapisana jako news</span></span></span></p>', 1, 1348575732, 1348575732, 1, 0, 1, '', 'en', NULL);
INSERT INTO pages VALUES (3, 'Drugi news', 'drugi-news', '<p>Oto jest drugi news na stronie - tym razem komentowalny.</p>', 1, 1348575813, 1369352312, 1, 1, 1, '', 'en', NULL);
INSERT INTO pages VALUES (1, 'Witaj!', 'witaj', '<p>Witaj w systemie <strong>MAGOG</strong>! Jest to system zarządzania treścią posiadający następujące funkcje:</p>
<p><span style="text-decoration: underline;">Zarządzania treścią:</span></p>
<ul>
<li>Artykuły (strona statyczna / news)</li>
<li>Komentarze (możliwość moderacji i wyłączenia możliwości komentowania dla r&oacute;żnych stron)</li>
<li>Edytowalne, wielopoziomowe menu</li>
<li>Strona gł&oacute;wna z możliwością wyboru (strona statyczna / archiwum news&oacute;w)</li>
<li>Możliwość wyboru szablonu</li>
</ul>
<p><span style="text-decoration: underline;">Zarządzania użytkownikami</span></p>
<ul>
<li>System użytkownik&oacute;w\n
<ul>
<li>Dane osobowe</li>
<li>Możliwość wyboru języka panelu (en/pl)</li>
<li>Awatar</li>
</ul>
</li>
<li>Grupy uprawnień
<ul>
<li>Domyślne grupy:</li>
<ul>
<li>administratorzy</li>
<li>moderatorzy (komentarze)</li>
<li>redaktorzy (atykuły)</li>
<li>czytelnicy</li>
</ul>
<li>Możliwość edycji grup, przydzielania członk&oacute;w</li>
<li>Każda z grup ma nazwę i opis </li>
</ul>
</li>
</ul>', 1, 1342608942, 1369352384, 1, 1, 0, '', 'en', NULL);
INSERT INTO pages VALUES (4, 'Trzeci', 'trzeci', 'Elo elo :D', 1, 1348575813, 1369352312, 1, 1, 1, '', 'en', 1);


--
-- TOC entry 1979 (class 0 OID 0)
-- Dependencies: 167
-- Name: pages_pk_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('pages_pk_seq', 3, true);


--
-- TOC entry 1962 (class 0 OID 17609)
-- Dependencies: 170 1968
-- Data for Name: roles; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO roles VALUES (1, 'admin', 'Konto z uprawnieniami administratora.');
INSERT INTO roles VALUES (2, 'redaktor', 'Konto redaktora artykułów.');
INSERT INTO roles VALUES (3, 'moderator', 'Konto moderatora.');
INSERT INTO roles VALUES (4, 'czytelnik', 'Konto czytelnika.');
INSERT INTO roles VALUES (5, 'login', 'Uprawnienia do logowania.');


--
-- TOC entry 1980 (class 0 OID 0)
-- Dependencies: 169
-- Name: roles_pk_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('roles_pk_seq', 5, true);


--
-- TOC entry 1963 (class 0 OID 17613)
-- Dependencies: 171 1968
-- Data for Name: roles_users; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO roles_users VALUES (1, 1);
INSERT INTO roles_users VALUES (1, 2);
INSERT INTO roles_users VALUES (1, 3);
INSERT INTO roles_users VALUES (1, 4);
INSERT INTO roles_users VALUES (1, 5);


--
-- TOC entry 1964 (class 0 OID 17616)
-- Dependencies: 172 1968
-- Data for Name: user_tokens; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 1981 (class 0 OID 0)
-- Dependencies: 173
-- Name: user_tokens_pk_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('user_tokens_pk_seq', 1, false);


--
-- TOC entry 1967 (class 0 OID 17623)
-- Dependencies: 175 1968
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO users VALUES (1, 'admin@admin.eu', 'admin', 'd98860cb08fd1ad0075f55ff23b13c6fb0994de598df70b423a019ffea6d4296', 31, 1369351866, NULL, 0, NULL, NULL, 'en');


--
-- TOC entry 1982 (class 0 OID 0)
-- Dependencies: 174
-- Name: users_pk_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('users_pk_seq', 1, true);


--
-- TOC entry 1919 (class 2606 OID 17631)
-- Dependencies: 162 162 1969
-- Name: comments_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY comments
    ADD CONSTRAINT comments_pk PRIMARY KEY (id);


--
-- TOC entry 1924 (class 2606 OID 17633)
-- Dependencies: 164 164 1969
-- Name: config_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY config
    ADD CONSTRAINT config_pk PRIMARY KEY (id);


--
-- TOC entry 1928 (class 2606 OID 17635)
-- Dependencies: 166 166 1969
-- Name: menu_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY menu
    ADD CONSTRAINT menu_pk PRIMARY KEY (id);


--
-- TOC entry 1932 (class 2606 OID 17637)
-- Dependencies: 168 168 1969
-- Name: pages_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY pages
    ADD CONSTRAINT pages_pk PRIMARY KEY (id);


--
-- TOC entry 1934 (class 2606 OID 17639)
-- Dependencies: 170 170 1969
-- Name: roles_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY roles
    ADD CONSTRAINT roles_pk PRIMARY KEY (id);


--
-- TOC entry 1939 (class 2606 OID 17641)
-- Dependencies: 171 171 171 1969
-- Name: roles_users_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY roles_users
    ADD CONSTRAINT roles_users_pk PRIMARY KEY (user_id, role_id);


--
-- TOC entry 1941 (class 2606 OID 17643)
-- Dependencies: 172 172 1969
-- Name: user_tokens_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY user_tokens
    ADD CONSTRAINT user_tokens_pk PRIMARY KEY (id);


--
-- TOC entry 1943 (class 2606 OID 17645)
-- Dependencies: 175 175 1969
-- Name: users_pl; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pl PRIMARY KEY (id);


--
-- TOC entry 1920 (class 1259 OID 17646)
-- Dependencies: 162 1969
-- Name: fki_comments_comments_fk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_comments_comments_fk ON comments USING btree (parent_comment);


--
-- TOC entry 1921 (class 1259 OID 17647)
-- Dependencies: 162 1969
-- Name: fki_comments_pages_fk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_comments_pages_fk ON comments USING btree (parent_page);


--
-- TOC entry 1922 (class 1259 OID 17648)
-- Dependencies: 162 1969
-- Name: fki_comments_users_fk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_comments_users_fk ON comments USING btree (author_id);


--
-- TOC entry 1925 (class 1259 OID 17649)
-- Dependencies: 166 1969
-- Name: fki_menu_menu; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_menu_menu ON menu USING btree (parent_id);


--
-- TOC entry 1926 (class 1259 OID 17650)
-- Dependencies: 166 1969
-- Name: fki_menu_menu_fk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_menu_menu_fk ON menu USING btree (parent_id);


--
-- TOC entry 1929 (class 1259 OID 17701)
-- Dependencies: 168 1969
-- Name: fki_pages_pages_fk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_pages_pages_fk ON pages USING btree (parent_page);


--
-- TOC entry 1930 (class 1259 OID 17651)
-- Dependencies: 168 1969
-- Name: fki_pages_users_fk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_pages_users_fk ON pages USING btree (author_id);


--
-- TOC entry 1935 (class 1259 OID 17652)
-- Dependencies: 171 1969
-- Name: fki_roles_users_fk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_roles_users_fk ON roles_users USING btree (user_id);


--
-- TOC entry 1936 (class 1259 OID 17653)
-- Dependencies: 171 1969
-- Name: fki_roles_users_roles_fk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_roles_users_roles_fk ON roles_users USING btree (role_id);


--
-- TOC entry 1937 (class 1259 OID 17654)
-- Dependencies: 171 1969
-- Name: fki_roles_users_user_fk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_roles_users_user_fk ON roles_users USING btree (user_id);


--
-- TOC entry 1944 (class 2606 OID 17655)
-- Dependencies: 162 1918 162 1969
-- Name: comments_comments_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY comments
    ADD CONSTRAINT comments_comments_fk FOREIGN KEY (parent_comment) REFERENCES comments(id) ON DELETE SET NULL;


--
-- TOC entry 1945 (class 2606 OID 17660)
-- Dependencies: 168 1931 162 1969
-- Name: comments_pages_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY comments
    ADD CONSTRAINT comments_pages_fk FOREIGN KEY (parent_page) REFERENCES pages(id) ON DELETE CASCADE;


--
-- TOC entry 1946 (class 2606 OID 17665)
-- Dependencies: 162 1942 175 1969
-- Name: comments_users_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY comments
    ADD CONSTRAINT comments_users_fk FOREIGN KEY (author_id) REFERENCES users(id) ON DELETE SET NULL;


--
-- TOC entry 1947 (class 2606 OID 17670)
-- Dependencies: 1927 166 166 1969
-- Name: menu_menu; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY menu
    ADD CONSTRAINT menu_menu FOREIGN KEY (parent_id) REFERENCES menu(id) ON DELETE CASCADE;


--
-- TOC entry 1949 (class 2606 OID 17696)
-- Dependencies: 168 168 1931 1969
-- Name: pages_pages_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY pages
    ADD CONSTRAINT pages_pages_fk FOREIGN KEY (parent_page) REFERENCES pages(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 1948 (class 2606 OID 17675)
-- Dependencies: 168 1931 168 1969
-- Name: pages_users_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY pages
    ADD CONSTRAINT pages_users_fk FOREIGN KEY (author_id) REFERENCES pages(id) ON DELETE SET NULL;


--
-- TOC entry 1950 (class 2606 OID 17680)
-- Dependencies: 170 1933 171 1969
-- Name: roles_users_roles_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY roles_users
    ADD CONSTRAINT roles_users_roles_fk FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE CASCADE;


--
-- TOC entry 1951 (class 2606 OID 17685)
-- Dependencies: 1942 175 171 1969
-- Name: roles_users_user_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY roles_users
    ADD CONSTRAINT roles_users_user_fk FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE;


--
-- TOC entry 1952 (class 2606 OID 17690)
-- Dependencies: 175 1942 172 1969
-- Name: user_tokens_users_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY user_tokens
    ADD CONSTRAINT user_tokens_users_fk FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE;


--
-- TOC entry 1974 (class 0 OID 0)
-- Dependencies: 6
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO magog;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2013-05-24 12:44:24 CEST

--
-- PostgreSQL database dump complete
--

