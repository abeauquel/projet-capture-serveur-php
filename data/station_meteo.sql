--
-- PostgreSQL database dump
--

-- Dumped from database version 10.5 (Ubuntu 10.5-0ubuntu0.18.04)
-- Dumped by pg_dump version 10.5 (Ubuntu 10.5-0ubuntu0.18.04)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

DROP DATABASE IF EXISTS station_meteo;
--
-- Name: station_meteo; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE station_meteo WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'fr_FR.UTF-8' LC_CTYPE = 'fr_FR.UTF-8';


ALTER DATABASE station_meteo OWNER TO postgres;

\connect station_meteo

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: humidite; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.humidite (
    id integer NOT NULL,
    valeur double precision,
    date bigint
);


ALTER TABLE public.humidite OWNER TO postgres;

--
-- Name: humidite_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.humidite_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.humidite_id_seq OWNER TO postgres;

--
-- Name: humidite_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.humidite_id_seq OWNED BY public.humidite.id;


--
-- Name: humidite id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.humidite ALTER COLUMN id SET DEFAULT nextval('public.humidite_id_seq'::regclass);


--
-- Data for Name: humidite; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.humidite (id, valeur, date) VALUES (3, 30, 1534395121);
INSERT INTO public.humidite (id, valeur, date) VALUES (4, 50.6000000000000014, 2654945445);
INSERT INTO public.humidite (id, valeur, date) VALUES (6, 80.5600000000000023, 1534371121);
INSERT INTO public.humidite (id, valeur, date) VALUES (1, 80, 1534375199);
INSERT INTO public.humidite (id, valeur, date) VALUES (2, 20, 1544385121);
INSERT INTO public.humidite (id, valeur, date) VALUES (13, 10, 1534375121);
INSERT INTO public.humidite (id, valeur, date) VALUES (14, 20, 1534375121);
INSERT INTO public.humidite (id, valeur, date) VALUES (15, 50, 1534375121);
INSERT INTO public.humidite (id, valeur, date) VALUES (12, 2, 1534375121);
INSERT INTO public.humidite (id, valeur, date) VALUES (7, 22, 1236547895);
INSERT INTO public.humidite (id, valeur, date) VALUES (8, 45, 1536985236);
INSERT INTO public.humidite (id, valeur, date) VALUES (9, 45, 1534520136);
INSERT INTO public.humidite (id, valeur, date) VALUES (10, 25, 1532475694);
INSERT INTO public.humidite (id, valeur, date) VALUES (11, 67, 1524316985);


--
-- Name: humidite_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.humidite_id_seq', 15, true);


--
-- Name: humidite humidite_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.humidite
    ADD CONSTRAINT humidite_pkey PRIMARY KEY (id);


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: postgres
--

GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

