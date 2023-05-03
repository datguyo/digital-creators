-- -------------------------------------------------------------
-- TablePlus 4.5.0(396)
--
-- https://tableplus.com/
--
-- Database: postgres
-- Generation Time: 2021-12-07 14:34:52.4960
-- -------------------------------------------------------------


DROP TABLE IF EXISTS "public"."fields";
-- This script only contains the table creation statements and does not fully represent the table in the database. It's still missing: indices, triggers. Do not use it as a backup.

-- Sequence and defined type
CREATE SEQUENCE IF NOT EXISTS fields_id_seq;

-- Table Definition
CREATE TABLE "public"."fields" (
    "id" int8 NOT NULL DEFAULT nextval('fields_id_seq'::regclass),
    "name" varchar(255),
    "slug" varchar(255),
    "created_date" timestamp(0),
    "updated_date" timestamp(0),
    "created_by_id" int4,
    "updated_by_id" int4,
    "deleted_at" timestamp(0),
    PRIMARY KEY ("id")
);

DROP TABLE IF EXISTS "public"."password_resets";
-- This script only contains the table creation statements and does not fully represent the table in the database. It's still missing: indices, triggers. Do not use it as a backup.

-- Table Definition
CREATE TABLE "public"."password_resets" (
    "email" varchar(255) NOT NULL,
    "token" varchar(255) NOT NULL,
    "created_at" timestamp(0)
);

DROP TABLE IF EXISTS "public"."users";
-- This script only contains the table creation statements and does not fully represent the table in the database. It's still missing: indices, triggers. Do not use it as a backup.

-- Sequence and defined type
CREATE SEQUENCE IF NOT EXISTS users_id_seq;

-- Table Definition
CREATE TABLE "public"."users" (
    "id" int8 NOT NULL DEFAULT nextval('users_id_seq'::regclass),
    "name" varchar(255),
    "slug" varchar(255),
    "created_date" timestamp(0),
    "updated_date" timestamp(0),
    "email" varchar(255),
    "password" varchar(255),
    "position" varchar(255),
    "field_id" int4,
    "phone_number" varchar(255),
    "hour_price" float8,
    "photo" varchar(255),
    "cover" varchar(255),
    "deleted_at" timestamp(0),
    "remember_token" varchar(100),
    PRIMARY KEY ("id")
);

DROP TABLE IF EXISTS "public"."works";
-- This script only contains the table creation statements and does not fully represent the table in the database. It's still missing: indices, triggers. Do not use it as a backup.

-- Sequence and defined type
CREATE SEQUENCE IF NOT EXISTS works_id_seq;

-- Table Definition
CREATE TABLE "public"."works" (
    "id" int8 NOT NULL DEFAULT nextval('works_id_seq'::regclass),
    "name" varchar(255),
    "slug" varchar(255),
    "created_date" timestamp(0),
    "updated_date" timestamp(0),
    "created_by_id" int4,
    "updated_by_id" int4,
    "description" text,
    "photo" varchar(255),
    "deleted_at" timestamp(0),
    PRIMARY KEY ("id")
);

INSERT INTO "public"."fields" ("id", "name", "slug", "created_date", "updated_date", "created_by_id", "updated_by_id", "deleted_at") VALUES
(1, 'Web designer', 'web-designer', '2021-10-27 14:25:12', '2021-11-18 11:16:52', NULL, NULL, NULL),
(2, 'Graphic designer', 'graphic-designer', '2021-10-27 14:25:18', '2021-11-18 11:16:52', NULL, NULL, NULL),
(3, 'Product designer', 'product-designer', '2021-10-27 14:25:25', '2021-11-18 11:16:52', NULL, NULL, NULL),
(4, 'Front-end developer', 'front-end-developer', '2021-10-27 14:25:32', '2021-11-18 11:16:52', NULL, NULL, NULL),
(5, 'Back-end developer', 'back-end-developer', '2021-10-27 14:25:39', '2021-11-18 11:16:53', NULL, NULL, NULL);

INSERT INTO "public"."users" ("id", "name", "slug", "created_date", "updated_date", "email", "password", "position", "field_id", "phone_number", "hour_price", "photo", "cover", "deleted_at", "remember_token") VALUES
(1, 'Marie James', 'marie-james', '2021-10-27 14:44:31', '2021-11-18 11:16:51', 'marie-james@ycode.com', '$2y$10$1AuQb92q3kPW7YT9GyEPYuTr4ggdXLyInWA2iQ4Zvsd0KwHyOl7me', 'Product designer', 3, '323-726-9450', 18, 'sFDgoR5zTnVh9aIRlw2YK0I4GPtR4gcH4qMw2d0X.jpg', '9Wb0cWc8HMV05Gzi3sP1eO9um7ZuKIHuZh77qZW0.jpg', NULL, NULL),
(2, 'Frank Bennett', 'frank-bennett', '2021-10-27 14:41:07', '2021-11-18 11:16:51', 'frank-bennet@ycode.com', '$2y$10$e/1G3uJqmGzBF64H3rMnn.00kClK75H.pudX6o9jf608MAKtymoZe', 'Web designer', 1, '414-870-1085', 20, 'zyqrZsP2MXiTMm1Y2SOVRR6yoqNGCRuhDArlbEs0.jpg', '0Xz2CxQM17FgFsL3vzald3QX6z4l7IBIvG3vl4mp.jpg', NULL, NULL),
(3, 'Roy Scott', 'roy-scott', '2021-10-27 14:42:04', '2021-11-18 11:16:51', 'roy-scott@ycode.com', '$2y$10$11S/Jq7fFdVIgAHvYgv6oO2EPjOtgcLuSDWSHNZVibFI1QU9JK1aa', 'Developer', 4, '231-299-5197', 25, '5CFO8UA8dggNuC0D7RTEPnsTktz1m1COOi7CVPAc.jpg', 'wdQFzQx7w7qd4LWN6Zb6hjhF277hoD33cKZGKOW2.jpg', NULL, NULL),
(4, 'Samuel Johnson', 'samuel-johnson', '2021-10-27 14:42:42', '2021-11-18 11:16:51', 'samuel-johnson@ycode.com', '$2y$10$yHZtDdN6xVKDU7u6lAJdDenrQZXYkYFL2tiXehex3nsAfncq2mW4.', 'Developer', 5, '260-894-1533', 30, 'gVtwRCQwFA9flfKvWk80Njll0rtUfTBEmpjKu8tG.jpg', 'xLQNUpwh4VuBUYrbHCstMElMu08Q2lLtyFn3SGYN.jpg', NULL, NULL),
(5, 'Joshua Harris', 'joshua-harris', '2021-10-27 14:43:19', '2021-11-18 11:16:51', 'joshua-harris@ycode.com', '$2y$10$iXBaBWU9CKaQBo.6AZMBh.KqMhPwfF0eNSKSA5/G5zVwneorXOIRy', 'Product designer', 3, '530-838-9580', 30, 'MDUUwMD5spyDU2WVVuszVmLqBn7npqXSgUkuRJmr.jpg', 'FlX5at4omB5rPVFGUyUNk5VK85l4sXxud1StdqZD.jpg', NULL, NULL),
(6, 'Charles Turner', 'charles-turner', '2021-10-27 14:43:50', '2021-11-18 11:16:51', 'charles-turner@ycode.com', '$2y$10$xEkQAQE.UOje7bNRmnydseGGS9oQpUCzKyTwZKpL0ky4HW5M8aUbS', 'Web designer', 1, '256-475-4555', 20, 'xoq3EZVyleOrKiY9KIfDLRu9qzv3D2y0R3ni4E64.jpg', 'AGMSkn3JIyv2KDidm64Jc9C4F9eWMxKzd9U9PCtk.jpg', NULL, NULL);

INSERT INTO "public"."works" ("id", "name", "slug", "created_date", "updated_date", "created_by_id", "updated_by_id", "description", "photo", "deleted_at") VALUES
(1, 'iOS app design', 'ios-app-design', '2021-10-27 13:20:17', '2021-11-18 11:16:53', 2, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '61DMbUNv6T1JrDO6lL5uh0zmimLk411SFsyn0KWW.jpg', NULL),
(2, 'Fitness tracker mobile app', 'fitness-tracker-mobile-app', '2021-10-29 17:18:31', '2021-11-18 11:16:53', 3, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '4JsPUuUqiH6pDJqkiikgXTg1dgoiYFPcEejVxdht.jpg', NULL),
(3, 'Almeria Neobank — Dashboard', 'almeria-neobank-dashboard', '2021-10-29 17:22:54', '2021-11-18 11:16:53', 4, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'oeEAbRRXQNbTxjDz0PaxTRhbsoOmux2muodQt6mG.jpg', NULL),
(4, 'Logo design', 'logo-design', '2021-10-29 17:24:23', '2021-11-18 11:16:53', 5, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'QvTP9aVUsJFHKuAC04QRo8RNAjfhznTAjVEdmw2J.jpg', NULL),
(5, 'MUCHACHO 2.O Menus', 'muchacho-2o-menus', '2021-10-29 17:25:32', '2021-11-18 11:16:53', 5, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'pIjfZvoK54i4wzBhsRUqzc8bncuCZzIF0tllfK57.jpg', NULL),
(6, 'Elemental Architecture Landing page', 'elemental-architecture-landing-page', '2021-10-29 17:27:16', '2021-11-18 11:16:53', 6, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'YZkkQe75A6uJb3Ritm61stezLbLvQ74MnlKlStXF.jpg', NULL),
(7, 'Yacht Hiring Website Design', 'yacht-hiring-website-design', '2021-10-29 17:27:48', '2021-11-18 11:16:53', 6, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ZAsRKFL0ufyYPNUthvvuyM1QCiWSgjhuQNt2Di1F.jpg', NULL),
(8, 'Beauty Product Landing Page', 'beauty-product-landing-page', '2021-10-29 17:30:23', '2021-11-18 11:16:53', 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'CauKPiP9aCxtfJ72vBP8VWQ4qBmJwhCjmDl8d4em.jpg', NULL);

