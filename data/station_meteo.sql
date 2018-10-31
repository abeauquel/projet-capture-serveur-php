--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.10
-- Dumped by pg_dump version 9.6.10

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

CREATE DATABASE station_meteo WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'French_Canada.1252' LC_CTYPE = 'French_Canada.1252';


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
    valeur integer,
    date integer
);


ALTER TABLE public.humidite OWNER TO postgres;

--
-- Name: humidite_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.humidite_id_seq
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

INSERT INTO public.humidite (id, valeur, date) VALUES (4, 89, 1534375121);
INSERT INTO public.humidite (id, valeur, date) VALUES (5, 55, 1155683921);


--
-- Name: humidite_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.humidite_id_seq', 1, false);


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

