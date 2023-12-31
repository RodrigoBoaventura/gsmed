PGDMP         .    
            {            gsmed    15.4    15.4 +    (           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            )           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            *           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            +           1262    16629    gsmed    DATABASE     |   CREATE DATABASE gsmed WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Portuguese_Brazil.1252';
    DROP DATABASE gsmed;
                postgres    false            �            1259    16631    especialidades    TABLE     �   CREATE TABLE public.especialidades (
    id integer NOT NULL,
    nome character varying(45),
    descricao character varying(45),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 "   DROP TABLE public.especialidades;
       public         heap    postgres    false            �            1259    16630    especialidades_id_seq    SEQUENCE     �   CREATE SEQUENCE public.especialidades_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.especialidades_id_seq;
       public          postgres    false    215            ,           0    0    especialidades_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.especialidades_id_seq OWNED BY public.especialidades.id;
          public          postgres    false    214            �            1259    16638    medicos    TABLE     �  CREATE TABLE public.medicos (
    id integer NOT NULL,
    nome character varying(45),
    crm character varying(45),
    telefone character varying(45),
    email character varying(45),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    dt_cadastro timestamp(0) without time zone DEFAULT '2023-09-04 23:59:02'::timestamp without time zone NOT NULL
);
    DROP TABLE public.medicos;
       public         heap    postgres    false            �            1259    16645    medicos_especialidades    TABLE     �   CREATE TABLE public.medicos_especialidades (
    id integer NOT NULL,
    especialidades_id integer,
    medicos_id integer,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.medicos_especialidades;
       public         heap    postgres    false            �            1259    16644    medicos_especialidades_id_seq    SEQUENCE     �   CREATE SEQUENCE public.medicos_especialidades_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.medicos_especialidades_id_seq;
       public          postgres    false    219            -           0    0    medicos_especialidades_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.medicos_especialidades_id_seq OWNED BY public.medicos_especialidades.id;
          public          postgres    false    218            �            1259    16637    medicos_id_seq    SEQUENCE     �   CREATE SEQUENCE public.medicos_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.medicos_id_seq;
       public          postgres    false    217            .           0    0    medicos_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.medicos_id_seq OWNED BY public.medicos.id;
          public          postgres    false    216            �            1259    16662 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            �            1259    16661    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    221            /           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    220            �            1259    16669    personal_access_tokens    TABLE     �  CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.personal_access_tokens;
       public         heap    postgres    false            �            1259    16668    personal_access_tokens_id_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.personal_access_tokens_id_seq;
       public          postgres    false    223            0           0    0    personal_access_tokens_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;
          public          postgres    false    222            y           2604    16634    especialidades id    DEFAULT     v   ALTER TABLE ONLY public.especialidades ALTER COLUMN id SET DEFAULT nextval('public.especialidades_id_seq'::regclass);
 @   ALTER TABLE public.especialidades ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    214    215    215            z           2604    16641 
   medicos id    DEFAULT     h   ALTER TABLE ONLY public.medicos ALTER COLUMN id SET DEFAULT nextval('public.medicos_id_seq'::regclass);
 9   ALTER TABLE public.medicos ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    217    217            |           2604    16648    medicos_especialidades id    DEFAULT     �   ALTER TABLE ONLY public.medicos_especialidades ALTER COLUMN id SET DEFAULT nextval('public.medicos_especialidades_id_seq'::regclass);
 H   ALTER TABLE public.medicos_especialidades ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    219    218    219            }           2604    16665    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    220    221    221            ~           2604    16672    personal_access_tokens id    DEFAULT     �   ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);
 H   ALTER TABLE public.personal_access_tokens ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    222    223    223                      0    16631    especialidades 
   TABLE DATA           U   COPY public.especialidades (id, nome, descricao, created_at, updated_at) FROM stdin;
    public          postgres    false    215   p5                 0    16638    medicos 
   TABLE DATA           f   COPY public.medicos (id, nome, crm, telefone, email, created_at, updated_at, dt_cadastro) FROM stdin;
    public          postgres    false    217   6       !          0    16645    medicos_especialidades 
   TABLE DATA           k   COPY public.medicos_especialidades (id, especialidades_id, medicos_id, created_at, updated_at) FROM stdin;
    public          postgres    false    219   f6       #          0    16662 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    221   �6       %          0    16669    personal_access_tokens 
   TABLE DATA           �   COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at) FROM stdin;
    public          postgres    false    223   q7       1           0    0    especialidades_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.especialidades_id_seq', 6, true);
          public          postgres    false    214            2           0    0    medicos_especialidades_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.medicos_especialidades_id_seq', 19, true);
          public          postgres    false    218            3           0    0    medicos_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.medicos_id_seq', 19, true);
          public          postgres    false    216            4           0    0    migrations_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.migrations_id_seq', 8, true);
          public          postgres    false    220            5           0    0    personal_access_tokens_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);
          public          postgres    false    222            �           2606    16636 "   especialidades especialidades_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.especialidades
    ADD CONSTRAINT especialidades_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.especialidades DROP CONSTRAINT especialidades_pkey;
       public            postgres    false    215            �           2606    16650 2   medicos_especialidades medicos_especialidades_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.medicos_especialidades
    ADD CONSTRAINT medicos_especialidades_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.medicos_especialidades DROP CONSTRAINT medicos_especialidades_pkey;
       public            postgres    false    219            �           2606    16643    medicos medicos_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.medicos
    ADD CONSTRAINT medicos_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.medicos DROP CONSTRAINT medicos_pkey;
       public            postgres    false    217            �           2606    16667    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    221            �           2606    16676 2   personal_access_tokens personal_access_tokens_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_pkey;
       public            postgres    false    223            �           2606    16679 :   personal_access_tokens personal_access_tokens_token_unique 
   CONSTRAINT     v   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);
 d   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_token_unique;
       public            postgres    false    223            �           1259    16677 8   personal_access_tokens_tokenable_type_tokenable_id_index    INDEX     �   CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);
 L   DROP INDEX public.personal_access_tokens_tokenable_type_tokenable_id_index;
       public            postgres    false    223    223            �           2606    16651 D   medicos_especialidades medicos_especialidades_especialidades_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.medicos_especialidades
    ADD CONSTRAINT medicos_especialidades_especialidades_id_fkey FOREIGN KEY (especialidades_id) REFERENCES public.especialidades(id);
 n   ALTER TABLE ONLY public.medicos_especialidades DROP CONSTRAINT medicos_especialidades_especialidades_id_fkey;
       public          postgres    false    3200    219    215            �           2606    16656 =   medicos_especialidades medicos_especialidades_medicos_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.medicos_especialidades
    ADD CONSTRAINT medicos_especialidades_medicos_id_fkey FOREIGN KEY (medicos_id) REFERENCES public.medicos(id);
 g   ALTER TABLE ONLY public.medicos_especialidades DROP CONSTRAINT medicos_especialidades_medicos_id_fkey;
       public          postgres    false    219    217    3202               �   x�e�1�0��99E.P��.��ŸQ	��1p�^�B)����a0����`�g����%k��sy����A��P/t��!��9a���W�gW���Qh�!���õ�k�����e# �?��>��.���W6�         T   x�3���O)�L��442626Q�&��)�9���鹉�9z����FFƺ���
��VF�V���L���L-���b���� ���      !   $   x�34�4�4���".CNS$�%�	����� ȖC      #   �   x����j�0�ϫ�)�l��]
B�u0u���l	YB��t��0�Ahf6��1c8�*Myӽ�U2KZ+��k?��a�:I�qf���紦&�?��t�,�,1rK��&�v��1�rJ�7jB���n��%�/L�0�v����p�����n���'D��Ucl$Jm{�P�ϲ���rx�N	�5���9�/j�� x�]�      %      x������ � �     