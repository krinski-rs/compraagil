--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.9
-- Dumped by pg_dump version 9.5.9

-- Started on 2017-09-29 09:29:39 -03

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 9 (class 2615 OID 38558)
-- Name: localidades; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA localidades;


ALTER SCHEMA localidades OWNER TO postgres;

--
-- TOC entry 10 (class 2615 OID 38622)
-- Name: permissoes; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA permissoes;


ALTER SCHEMA permissoes OWNER TO postgres;

--
-- TOC entry 8 (class 2615 OID 38451)
-- Name: pessoas; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA pessoas;


ALTER SCHEMA pessoas OWNER TO postgres;

--
-- TOC entry 1 (class 3079 OID 13311)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 3286 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = pessoas, pg_catalog;

--
-- TOC entry 587 (class 1247 OID 38458)
-- Name: nacionalidade_pessoa; Type: TYPE; Schema: pessoas; Owner: postgres
--

CREATE TYPE nacionalidade_pessoa AS ENUM (
    'Nacional',
    'Estrangeira'
);


ALTER TYPE nacionalidade_pessoa OWNER TO postgres;

--
-- TOC entry 590 (class 1247 OID 38464)
-- Name: sexo_pessoa; Type: TYPE; Schema: pessoas; Owner: postgres
--

CREATE TYPE sexo_pessoa AS ENUM (
    'Masculino',
    'Feminino',
    'Empresa'
);


ALTER TYPE sexo_pessoa OWNER TO postgres;

--
-- TOC entry 584 (class 1247 OID 38453)
-- Name: tipo_pessoa; Type: TYPE; Schema: pessoas; Owner: postgres
--

CREATE TYPE tipo_pessoa AS ENUM (
    'Juídica',
    'Física'
);


ALTER TYPE tipo_pessoa OWNER TO postgres;

SET search_path = localidades, pg_catalog;

--
-- TOC entry 203 (class 1259 OID 38586)
-- Name: cidade_cida_codigoid_seq; Type: SEQUENCE; Schema: localidades; Owner: postgres
--

CREATE SEQUENCE cidade_cida_codigoid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE cidade_cida_codigoid_seq OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 204 (class 1259 OID 38588)
-- Name: cidade; Type: TABLE; Schema: localidades; Owner: postgres
--

CREATE TABLE cidade (
    cida_codigoid integer DEFAULT nextval('cidade_cida_codigoid_seq'::regclass) NOT NULL,
    esta_codigoid integer NOT NULL,
    cida_nome character varying(255) NOT NULL,
    cida_codigo_discagem character varying(7)[] NOT NULL,
    cida_poligono polygon,
    cida_datacadastro timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE cidade OWNER TO postgres;

--
-- TOC entry 201 (class 1259 OID 38574)
-- Name: estado_esta_codigoid_seq; Type: SEQUENCE; Schema: localidades; Owner: postgres
--

CREATE SEQUENCE estado_esta_codigoid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE estado_esta_codigoid_seq OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 38576)
-- Name: estado; Type: TABLE; Schema: localidades; Owner: postgres
--

CREATE TABLE estado (
    esta_codigoid integer DEFAULT nextval('estado_esta_codigoid_seq'::regclass) NOT NULL,
    pais_codigoid integer NOT NULL,
    esta_nome character varying(255) NOT NULL,
    esta_acronimo character varying(5) NOT NULL,
    esta_codigo_discagem character varying(7)[] NOT NULL,
    esta_poligono polygon,
    esta_datacadastro timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE estado OWNER TO postgres;

--
-- TOC entry 205 (class 1259 OID 38598)
-- Name: localidade_loca_codigoid_seq; Type: SEQUENCE; Schema: localidades; Owner: postgres
--

CREATE SEQUENCE localidade_loca_codigoid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE localidade_loca_codigoid_seq OWNER TO postgres;

--
-- TOC entry 206 (class 1259 OID 38600)
-- Name: localidade; Type: TABLE; Schema: localidades; Owner: postgres
--

CREATE TABLE localidade (
    loca_codigoid integer DEFAULT nextval('localidade_loca_codigoid_seq'::regclass) NOT NULL,
    cida_codigoid integer NOT NULL,
    cida_cnl_acronimo character varying(5) DEFAULT NULL::character varying,
    loca_cnl_codigo integer,
    cida_cnl_acronimo_local character varying(5) DEFAULT NULL::character varying,
    loca_cnl_codigo_local integer,
    loca_cnl_codigo_local2 integer,
    loca_poligono polygon,
    loca_datacadastro timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE localidade OWNER TO postgres;

--
-- TOC entry 199 (class 1259 OID 38559)
-- Name: pais_pais_codigoid_seq; Type: SEQUENCE; Schema: localidades; Owner: postgres
--

CREATE SEQUENCE pais_pais_codigoid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE pais_pais_codigoid_seq OWNER TO postgres;

--
-- TOC entry 200 (class 1259 OID 38561)
-- Name: pais; Type: TABLE; Schema: localidades; Owner: postgres
--

CREATE TABLE pais (
    pais_codigoid integer DEFAULT nextval('pais_pais_codigoid_seq'::regclass) NOT NULL,
    pais_nome character varying(255) NOT NULL,
    pais_acronimo character varying(5) NOT NULL,
    pais_acesso_ddi boolean DEFAULT true NOT NULL,
    pais_codigo_discagem character varying(7)[] NOT NULL,
    pais_ativo boolean DEFAULT true NOT NULL,
    pais_removido boolean DEFAULT false NOT NULL,
    pais_poligono polygon,
    pais_datacadastro timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE pais OWNER TO postgres;

SET search_path = permissoes, pg_catalog;

--
-- TOC entry 210 (class 1259 OID 38625)
-- Name: grupo_grup_codigoid_seq; Type: SEQUENCE; Schema: permissoes; Owner: postgres
--

CREATE SEQUENCE grupo_grup_codigoid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE grupo_grup_codigoid_seq OWNER TO postgres;

--
-- TOC entry 211 (class 1259 OID 38627)
-- Name: grupo; Type: TABLE; Schema: permissoes; Owner: postgres
--

CREATE TABLE grupo (
    grup_codigoid integer DEFAULT nextval('grupo_grup_codigoid_seq'::regclass) NOT NULL,
    grup_nome character varying(50) NOT NULL,
    grup_descricao text NOT NULL,
    grup_datacadastro timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE grupo OWNER TO postgres;

--
-- TOC entry 214 (class 1259 OID 38649)
-- Name: grupo_permissao; Type: TABLE; Schema: permissoes; Owner: postgres
--

CREATE TABLE grupo_permissao (
    perm_codigoid integer NOT NULL,
    grup_codigoid integer NOT NULL,
    grupperm_valor integer NOT NULL,
    grupperm_datacadastro timestamp without time zone DEFAULT now() NOT NULL,
    CONSTRAINT check_grupo_permissao_valor CHECK (((grupperm_valor >= 1) AND (grupperm_valor <= 15)))
);


ALTER TABLE grupo_permissao OWNER TO postgres;

--
-- TOC entry 212 (class 1259 OID 38637)
-- Name: permissao_perm_codigoid_seq; Type: SEQUENCE; Schema: permissoes; Owner: postgres
--

CREATE SEQUENCE permissao_perm_codigoid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE permissao_perm_codigoid_seq OWNER TO postgres;

--
-- TOC entry 213 (class 1259 OID 38639)
-- Name: permissao; Type: TABLE; Schema: permissoes; Owner: postgres
--

CREATE TABLE permissao (
    perm_codigoid integer DEFAULT nextval('permissao_perm_codigoid_seq'::regclass) NOT NULL,
    perm_nome character varying(50) NOT NULL,
    perm_descricao text NOT NULL,
    perm_datacadastro timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE permissao OWNER TO postgres;

--
-- TOC entry 209 (class 1259 OID 38623)
-- Name: usuario_id_seq; Type: SEQUENCE; Schema: permissoes; Owner: postgres
--

CREATE SEQUENCE usuario_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE usuario_id_seq OWNER TO postgres;

--
-- TOC entry 217 (class 1259 OID 38668)
-- Name: usuario; Type: TABLE; Schema: permissoes; Owner: postgres
--

CREATE TABLE usuario (
    id integer DEFAULT nextval('usuario_id_seq'::regclass) NOT NULL,
    username character varying(50) NOT NULL,
    password character varying(64) NOT NULL,
    salt character varying(64) NOT NULL,
    ativo boolean DEFAULT true NOT NULL,
    removido boolean DEFAULT false NOT NULL,
    data_cadastro timestamp(0) without time zone DEFAULT now() NOT NULL
);


ALTER TABLE usuario OWNER TO postgres;

--
-- TOC entry 216 (class 1259 OID 38663)
-- Name: usuario_grupo; Type: TABLE; Schema: permissoes; Owner: postgres
--

CREATE TABLE usuario_grupo (
    usua_codigoid integer NOT NULL,
    grup_codigoid integer NOT NULL,
    usuagrup_datacadastro timestamp without time zone NOT NULL
);


ALTER TABLE usuario_grupo OWNER TO postgres;

--
-- TOC entry 215 (class 1259 OID 38656)
-- Name: usuario_permissao; Type: TABLE; Schema: permissoes; Owner: postgres
--

CREATE TABLE usuario_permissao (
    usua_codigoid integer NOT NULL,
    perm_codigoid integer NOT NULL,
    usuaperm_valor integer NOT NULL,
    usuaperm_datacadastro timestamp without time zone DEFAULT now() NOT NULL,
    CONSTRAINT check_usuario_permissao_valor CHECK (((usuaperm_valor >= 1) AND (usuaperm_valor <= 15)))
);


ALTER TABLE usuario_permissao OWNER TO postgres;

SET search_path = pessoas, pg_catalog;

--
-- TOC entry 192 (class 1259 OID 38510)
-- Name: documento_docu_codigoid_seq; Type: SEQUENCE; Schema: pessoas; Owner: postgres
--

CREATE SEQUENCE documento_docu_codigoid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE documento_docu_codigoid_seq OWNER TO postgres;

--
-- TOC entry 193 (class 1259 OID 38512)
-- Name: documento; Type: TABLE; Schema: pessoas; Owner: postgres
--

CREATE TABLE documento (
    docu_codigoid integer DEFAULT nextval('documento_docu_codigoid_seq'::regclass) NOT NULL,
    pess_codigoid integer NOT NULL,
    tipodocu_codigoid integer NOT NULL,
    docu_ativo boolean DEFAULT true NOT NULL,
    docu_removido boolean DEFAULT false NOT NULL,
    docu_datacadastro timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE documento OWNER TO postgres;

--
-- TOC entry 197 (class 1259 OID 38543)
-- Name: endereco_ende_codigoid_seq; Type: SEQUENCE; Schema: pessoas; Owner: postgres
--

CREATE SEQUENCE endereco_ende_codigoid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE endereco_ende_codigoid_seq OWNER TO postgres;

--
-- TOC entry 198 (class 1259 OID 38545)
-- Name: endereco; Type: TABLE; Schema: pessoas; Owner: postgres
--

CREATE TABLE endereco (
    ende_codigoid integer DEFAULT nextval('endereco_ende_codigoid_seq'::regclass) NOT NULL,
    pess_codigoid integer NOT NULL,
    cida_codigoid integer NOT NULL,
    tipoende_codigoid integer NOT NULL,
    ende_numero character varying(10) NOT NULL,
    ende_logradouro character varying(255) NOT NULL,
    ende_complemento character varying(255) DEFAULT NULL::character varying,
    ende_ativo boolean DEFAULT true NOT NULL,
    ende_removido boolean DEFAULT false NOT NULL,
    ende_ponto point,
    ende_datacadastro timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE endereco OWNER TO postgres;

--
-- TOC entry 186 (class 1259 OID 38471)
-- Name: pessoa_pess_codigoid_seq; Type: SEQUENCE; Schema: pessoas; Owner: postgres
--

CREATE SEQUENCE pessoa_pess_codigoid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE pessoa_pess_codigoid_seq OWNER TO postgres;

--
-- TOC entry 187 (class 1259 OID 38473)
-- Name: pessoa; Type: TABLE; Schema: pessoas; Owner: postgres
--

CREATE TABLE pessoa (
    pess_codigoid integer DEFAULT nextval('pessoa_pess_codigoid_seq'::regclass) NOT NULL,
    segm_codigoid integer,
    pess_tipo tipo_pessoa NOT NULL,
    pess_sexo sexo_pessoa NOT NULL,
    pess_nacionalidade nacionalidade_pessoa NOT NULL,
    pess_nome character varying(255) NOT NULL,
    pess_dataaniversario date NOT NULL,
    pess_ativo boolean DEFAULT true NOT NULL,
    pess_removido boolean DEFAULT false NOT NULL,
    pess_datacadastro timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE pessoa OWNER TO postgres;

--
-- TOC entry 196 (class 1259 OID 38534)
-- Name: pessoa_2_pessoa; Type: TABLE; Schema: pessoas; Owner: postgres
--

CREATE TABLE pessoa_2_pessoa (
    pess_mandatario integer NOT NULL,
    pess_subordinado integer NOT NULL,
    tiporela_codigoid integer NOT NULL,
    pess2pess_ativo boolean DEFAULT true NOT NULL,
    pess2pess_removido boolean DEFAULT false NOT NULL,
    pess2pess_datacadastro timestamp without time zone DEFAULT now() NOT NULL,
    CONSTRAINT pess2pess_not_equals CHECK ((pess_mandatario <> pess_subordinado))
);


ALTER TABLE pessoa_2_pessoa OWNER TO postgres;

--
-- TOC entry 188 (class 1259 OID 38482)
-- Name: segmento_segm_codigoid_seq; Type: SEQUENCE; Schema: pessoas; Owner: postgres
--

CREATE SEQUENCE segmento_segm_codigoid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE segmento_segm_codigoid_seq OWNER TO postgres;

--
-- TOC entry 189 (class 1259 OID 38484)
-- Name: segmento; Type: TABLE; Schema: pessoas; Owner: postgres
--

CREATE TABLE segmento (
    segm_codigoid integer DEFAULT nextval('segmento_segm_codigoid_seq'::regclass) NOT NULL,
    segm_nome character varying(255) NOT NULL,
    segm_descricao text,
    segm_ativo boolean DEFAULT true NOT NULL,
    segm_removido boolean DEFAULT false NOT NULL,
    segm_datacadastro timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE segmento OWNER TO postgres;

--
-- TOC entry 190 (class 1259 OID 38496)
-- Name: tipo_documento_tipodocu_codigoid_seq; Type: SEQUENCE; Schema: pessoas; Owner: postgres
--

CREATE SEQUENCE tipo_documento_tipodocu_codigoid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tipo_documento_tipodocu_codigoid_seq OWNER TO postgres;

--
-- TOC entry 191 (class 1259 OID 38498)
-- Name: tipo_documento; Type: TABLE; Schema: pessoas; Owner: postgres
--

CREATE TABLE tipo_documento (
    tipodocu_codigoid integer DEFAULT nextval('tipo_documento_tipodocu_codigoid_seq'::regclass) NOT NULL,
    pess_tipo tipo_pessoa NOT NULL,
    tipodocu_nome character varying(255) NOT NULL,
    tipodocu_descricao text,
    tipodocu_ativo boolean DEFAULT true NOT NULL,
    tipodocu_removido boolean DEFAULT false NOT NULL,
    tipodocu_datacadastro timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE tipo_documento OWNER TO postgres;

--
-- TOC entry 207 (class 1259 OID 38612)
-- Name: tipo_endereco_tipoende_codigoid_seq; Type: SEQUENCE; Schema: pessoas; Owner: postgres
--

CREATE SEQUENCE tipo_endereco_tipoende_codigoid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tipo_endereco_tipoende_codigoid_seq OWNER TO postgres;

--
-- TOC entry 208 (class 1259 OID 38614)
-- Name: tipo_endereco; Type: TABLE; Schema: pessoas; Owner: postgres
--

CREATE TABLE tipo_endereco (
    tipoende_codigoid integer DEFAULT nextval('tipo_endereco_tipoende_codigoid_seq'::regclass) NOT NULL,
    pess_tipo tipo_pessoa NOT NULL,
    tipoende_nome character varying(255) NOT NULL,
    tipoende_ativo boolean DEFAULT true NOT NULL,
    tipoende_removido boolean DEFAULT false NOT NULL
);


ALTER TABLE tipo_endereco OWNER TO postgres;

--
-- TOC entry 194 (class 1259 OID 38523)
-- Name: tipo_relacionamento_tiporela_codigoid_seq; Type: SEQUENCE; Schema: pessoas; Owner: postgres
--

CREATE SEQUENCE tipo_relacionamento_tiporela_codigoid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tipo_relacionamento_tiporela_codigoid_seq OWNER TO postgres;

--
-- TOC entry 195 (class 1259 OID 38525)
-- Name: tipo_relacionamento; Type: TABLE; Schema: pessoas; Owner: postgres
--

CREATE TABLE tipo_relacionamento (
    tiporela_codigoid integer DEFAULT nextval('tipo_relacionamento_tiporela_codigoid_seq'::regclass) NOT NULL,
    pess_tipo tipo_pessoa NOT NULL,
    tiporela_nome character varying(255) NOT NULL,
    tiporela_ativo boolean DEFAULT true NOT NULL,
    tiporela_removido boolean DEFAULT false NOT NULL,
    tiporela_datacadastro timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE tipo_relacionamento OWNER TO postgres;

SET search_path = localidades, pg_catalog;

--
-- TOC entry 3130 (class 2606 OID 38597)
-- Name: cida_codigoid; Type: CONSTRAINT; Schema: localidades; Owner: postgres
--

ALTER TABLE ONLY cidade
    ADD CONSTRAINT cida_codigoid PRIMARY KEY (cida_codigoid);


--
-- TOC entry 3128 (class 2606 OID 38585)
-- Name: esta_codigoid; Type: CONSTRAINT; Schema: localidades; Owner: postgres
--

ALTER TABLE ONLY estado
    ADD CONSTRAINT esta_codigoid PRIMARY KEY (esta_codigoid);


--
-- TOC entry 3132 (class 2606 OID 38611)
-- Name: loca_codigoid; Type: CONSTRAINT; Schema: localidades; Owner: postgres
--

ALTER TABLE ONLY localidade
    ADD CONSTRAINT loca_codigoid PRIMARY KEY (loca_codigoid);


--
-- TOC entry 3126 (class 2606 OID 38573)
-- Name: pais_codigoid; Type: CONSTRAINT; Schema: localidades; Owner: postgres
--

ALTER TABLE ONLY pais
    ADD CONSTRAINT pais_codigoid PRIMARY KEY (pais_codigoid);


SET search_path = permissoes, pg_catalog;

--
-- TOC entry 3136 (class 2606 OID 38636)
-- Name: grup_codigoid; Type: CONSTRAINT; Schema: permissoes; Owner: postgres
--

ALTER TABLE ONLY grupo
    ADD CONSTRAINT grup_codigoid PRIMARY KEY (grup_codigoid);


--
-- TOC entry 3140 (class 2606 OID 38655)
-- Name: grupperm_codigoid; Type: CONSTRAINT; Schema: permissoes; Owner: postgres
--

ALTER TABLE ONLY grupo_permissao
    ADD CONSTRAINT grupperm_codigoid PRIMARY KEY (grup_codigoid, perm_codigoid);


--
-- TOC entry 3138 (class 2606 OID 38648)
-- Name: perm_codigoid; Type: CONSTRAINT; Schema: permissoes; Owner: postgres
--

ALTER TABLE ONLY permissao
    ADD CONSTRAINT perm_codigoid PRIMARY KEY (perm_codigoid);


--
-- TOC entry 3146 (class 2606 OID 38676)
-- Name: usua_codigoid; Type: CONSTRAINT; Schema: permissoes; Owner: postgres
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT usua_codigoid PRIMARY KEY (id);


--
-- TOC entry 3144 (class 2606 OID 38667)
-- Name: usuagrup_codigoid; Type: CONSTRAINT; Schema: permissoes; Owner: postgres
--

ALTER TABLE ONLY usuario_grupo
    ADD CONSTRAINT usuagrup_codigoid PRIMARY KEY (usua_codigoid, grup_codigoid);


--
-- TOC entry 3142 (class 2606 OID 38662)
-- Name: usuaperm_codigoid; Type: CONSTRAINT; Schema: permissoes; Owner: postgres
--

ALTER TABLE ONLY usuario_permissao
    ADD CONSTRAINT usuaperm_codigoid PRIMARY KEY (usua_codigoid, perm_codigoid);


SET search_path = pessoas, pg_catalog;

--
-- TOC entry 3116 (class 2606 OID 38520)
-- Name: docu_codigoid; Type: CONSTRAINT; Schema: pessoas; Owner: postgres
--

ALTER TABLE ONLY documento
    ADD CONSTRAINT docu_codigoid PRIMARY KEY (docu_codigoid);


--
-- TOC entry 3124 (class 2606 OID 38557)
-- Name: ende_codigoid; Type: CONSTRAINT; Schema: pessoas; Owner: postgres
--

ALTER TABLE ONLY endereco
    ADD CONSTRAINT ende_codigoid PRIMARY KEY (ende_codigoid);


--
-- TOC entry 3122 (class 2606 OID 38542)
-- Name: pess2pess_codigoid; Type: CONSTRAINT; Schema: pessoas; Owner: postgres
--

ALTER TABLE ONLY pessoa_2_pessoa
    ADD CONSTRAINT pess2pess_codigoid PRIMARY KEY (pess_mandatario, pess_subordinado, tiporela_codigoid);


--
-- TOC entry 3110 (class 2606 OID 38481)
-- Name: pess_codigoid; Type: CONSTRAINT; Schema: pessoas; Owner: postgres
--

ALTER TABLE ONLY pessoa
    ADD CONSTRAINT pess_codigoid PRIMARY KEY (pess_codigoid);


--
-- TOC entry 3112 (class 2606 OID 38495)
-- Name: segm_codigoid; Type: CONSTRAINT; Schema: pessoas; Owner: postgres
--

ALTER TABLE ONLY segmento
    ADD CONSTRAINT segm_codigoid PRIMARY KEY (segm_codigoid);


--
-- TOC entry 3114 (class 2606 OID 38509)
-- Name: tipodocu_codigoid; Type: CONSTRAINT; Schema: pessoas; Owner: postgres
--

ALTER TABLE ONLY tipo_documento
    ADD CONSTRAINT tipodocu_codigoid PRIMARY KEY (tipodocu_codigoid);


--
-- TOC entry 3118 (class 2606 OID 38522)
-- Name: tipodocu_unique; Type: CONSTRAINT; Schema: pessoas; Owner: postgres
--

ALTER TABLE ONLY documento
    ADD CONSTRAINT tipodocu_unique UNIQUE (pess_codigoid, tipodocu_codigoid);


--
-- TOC entry 3134 (class 2606 OID 38621)
-- Name: tipoende_codigoid; Type: CONSTRAINT; Schema: pessoas; Owner: postgres
--

ALTER TABLE ONLY tipo_endereco
    ADD CONSTRAINT tipoende_codigoid PRIMARY KEY (tipoende_codigoid);


--
-- TOC entry 3120 (class 2606 OID 38533)
-- Name: tiporela_codigoid; Type: CONSTRAINT; Schema: pessoas; Owner: postgres
--

ALTER TABLE ONLY tipo_relacionamento
    ADD CONSTRAINT tiporela_codigoid PRIMARY KEY (tiporela_codigoid);


SET search_path = localidades, pg_catalog;

--
-- TOC entry 3158 (class 2606 OID 38732)
-- Name: cida_codigoid; Type: FK CONSTRAINT; Schema: localidades; Owner: postgres
--

ALTER TABLE ONLY localidade
    ADD CONSTRAINT cida_codigoid FOREIGN KEY (cida_codigoid) REFERENCES cidade(cida_codigoid) MATCH FULL;


--
-- TOC entry 3157 (class 2606 OID 38727)
-- Name: esta_codigoid; Type: FK CONSTRAINT; Schema: localidades; Owner: postgres
--

ALTER TABLE ONLY cidade
    ADD CONSTRAINT esta_codigoid FOREIGN KEY (esta_codigoid) REFERENCES estado(esta_codigoid) MATCH FULL;


--
-- TOC entry 3156 (class 2606 OID 38722)
-- Name: pais_codigoid; Type: FK CONSTRAINT; Schema: localidades; Owner: postgres
--

ALTER TABLE ONLY estado
    ADD CONSTRAINT pais_codigoid FOREIGN KEY (pais_codigoid) REFERENCES pais(pais_codigoid) MATCH FULL;


SET search_path = permissoes, pg_catalog;

--
-- TOC entry 3159 (class 2606 OID 38737)
-- Name: grup_codigoid; Type: FK CONSTRAINT; Schema: permissoes; Owner: postgres
--

ALTER TABLE ONLY grupo_permissao
    ADD CONSTRAINT grup_codigoid FOREIGN KEY (grup_codigoid) REFERENCES grupo(grup_codigoid) MATCH FULL;


--
-- TOC entry 3164 (class 2606 OID 38762)
-- Name: grup_codigoid; Type: FK CONSTRAINT; Schema: permissoes; Owner: postgres
--

ALTER TABLE ONLY usuario_grupo
    ADD CONSTRAINT grup_codigoid FOREIGN KEY (grup_codigoid) REFERENCES grupo(grup_codigoid) MATCH FULL;


--
-- TOC entry 3160 (class 2606 OID 38742)
-- Name: perm_codigoid; Type: FK CONSTRAINT; Schema: permissoes; Owner: postgres
--

ALTER TABLE ONLY grupo_permissao
    ADD CONSTRAINT perm_codigoid FOREIGN KEY (perm_codigoid) REFERENCES permissao(perm_codigoid) MATCH FULL;


--
-- TOC entry 3162 (class 2606 OID 38752)
-- Name: perm_codigoid; Type: FK CONSTRAINT; Schema: permissoes; Owner: postgres
--

ALTER TABLE ONLY usuario_permissao
    ADD CONSTRAINT perm_codigoid FOREIGN KEY (perm_codigoid) REFERENCES permissao(perm_codigoid) MATCH FULL;


--
-- TOC entry 3161 (class 2606 OID 38747)
-- Name: usua_codigoid; Type: FK CONSTRAINT; Schema: permissoes; Owner: postgres
--

ALTER TABLE ONLY usuario_permissao
    ADD CONSTRAINT usua_codigoid FOREIGN KEY (usua_codigoid) REFERENCES usuario(id) MATCH FULL;


--
-- TOC entry 3163 (class 2606 OID 38757)
-- Name: usua_codigoid; Type: FK CONSTRAINT; Schema: permissoes; Owner: postgres
--

ALTER TABLE ONLY usuario_grupo
    ADD CONSTRAINT usua_codigoid FOREIGN KEY (usua_codigoid) REFERENCES usuario(id) MATCH FULL;


SET search_path = pessoas, pg_catalog;

--
-- TOC entry 3154 (class 2606 OID 38712)
-- Name: cida_codigoid; Type: FK CONSTRAINT; Schema: pessoas; Owner: postgres
--

ALTER TABLE ONLY endereco
    ADD CONSTRAINT cida_codigoid FOREIGN KEY (cida_codigoid) REFERENCES localidades.cidade(cida_codigoid) MATCH FULL;


--
-- TOC entry 3148 (class 2606 OID 38682)
-- Name: pess_codigoid; Type: FK CONSTRAINT; Schema: pessoas; Owner: postgres
--

ALTER TABLE ONLY documento
    ADD CONSTRAINT pess_codigoid FOREIGN KEY (pess_codigoid) REFERENCES pessoa(pess_codigoid) MATCH FULL;


--
-- TOC entry 3153 (class 2606 OID 38707)
-- Name: pess_codigoid; Type: FK CONSTRAINT; Schema: pessoas; Owner: postgres
--

ALTER TABLE ONLY endereco
    ADD CONSTRAINT pess_codigoid FOREIGN KEY (pess_codigoid) REFERENCES pessoa(pess_codigoid) MATCH FULL;


--
-- TOC entry 3150 (class 2606 OID 38692)
-- Name: pess_mandatario; Type: FK CONSTRAINT; Schema: pessoas; Owner: postgres
--

ALTER TABLE ONLY pessoa_2_pessoa
    ADD CONSTRAINT pess_mandatario FOREIGN KEY (pess_mandatario) REFERENCES pessoa(pess_codigoid) MATCH FULL;


--
-- TOC entry 3151 (class 2606 OID 38697)
-- Name: pess_subordinado; Type: FK CONSTRAINT; Schema: pessoas; Owner: postgres
--

ALTER TABLE ONLY pessoa_2_pessoa
    ADD CONSTRAINT pess_subordinado FOREIGN KEY (pess_subordinado) REFERENCES pessoa(pess_codigoid) MATCH FULL;


--
-- TOC entry 3147 (class 2606 OID 38677)
-- Name: segm_codigoid; Type: FK CONSTRAINT; Schema: pessoas; Owner: postgres
--

ALTER TABLE ONLY pessoa
    ADD CONSTRAINT segm_codigoid FOREIGN KEY (segm_codigoid) REFERENCES segmento(segm_codigoid) MATCH FULL;


--
-- TOC entry 3149 (class 2606 OID 38687)
-- Name: tipodocu_codigoid; Type: FK CONSTRAINT; Schema: pessoas; Owner: postgres
--

ALTER TABLE ONLY documento
    ADD CONSTRAINT tipodocu_codigoid FOREIGN KEY (tipodocu_codigoid) REFERENCES tipo_documento(tipodocu_codigoid) MATCH FULL;


--
-- TOC entry 3155 (class 2606 OID 38717)
-- Name: tipoende_codigoid; Type: FK CONSTRAINT; Schema: pessoas; Owner: postgres
--

ALTER TABLE ONLY endereco
    ADD CONSTRAINT tipoende_codigoid FOREIGN KEY (tipoende_codigoid) REFERENCES tipo_endereco(tipoende_codigoid) MATCH FULL;


--
-- TOC entry 3152 (class 2606 OID 38702)
-- Name: tiporela_codigoid; Type: FK CONSTRAINT; Schema: pessoas; Owner: postgres
--

ALTER TABLE ONLY pessoa_2_pessoa
    ADD CONSTRAINT tiporela_codigoid FOREIGN KEY (tiporela_codigoid) REFERENCES tipo_relacionamento(tiporela_codigoid) MATCH FULL;


--
-- TOC entry 3285 (class 0 OID 0)
-- Dependencies: 6
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2017-09-29 09:29:39 -03

--
-- PostgreSQL database dump complete
--

