-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 22 Octobre 2018 à 19:24
-- Version du serveur :  10.0.36-MariaDB-0ubuntu0.16.04.1
-- Version de PHP :  7.2.11-2+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `art_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'bonjour',
  `online` tinyint(1) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL DEFAULT '1',
  `previous_id` int(10) UNSIGNED DEFAULT NULL,
  `next_id` int(10) UNSIGNED DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sous-titre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `created_at`, `updated_at`, `slug`, `online`, `category_id`, `previous_id`, `next_id`, `image`, `subtitle`) VALUES
(18, 'De gros rochers ont ete decouverts recemment !', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in porttitor nisi, mattis dictum elit. Mauris viverra sodales augue sit amet varius. Nunc non nunc consequat, feugiat dolor laoreet, fermentum arcu. Morbi eu enim\r\n \r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in porttitor nisi, mattis dictum elit. Mauris viverra sodales augue sit amet varius. Nunc non nunc consequat, feugiat dolor laoreet, fermentum arcu. Morbi eu enim', '2018-10-17 16:58:19', '2018-10-19 16:44:55', 'de-gros-rochers-ont-ete-decouverts-recement', 1, 1, NULL, 20, 'article/image/1ecsCCjtZmxcALkOB4MSiP9j2AqrxrLowLduSsC1.jpeg', 'Les illuminatis sont sûrement derrière tout ça!'),
(20, 'De gros rochers ont été découverts !', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in porttitor nisi, mattis dictum elit. Mauris viverra sodales augue sit amet varius. Nunc non nunc consequat, feugiat dolor laoreet, fermentum arcu. Morbi eu enim suscipit, interdum odio ut, porttitor dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc finibus nisl tellus, id sollicitudin arcu euismod sit amet. Duis malesuada neque ac dui rhoncus pretium. Praesent malesuada, dui vitae faucibus convallis, tellus sem dictum nisi, a mattis tortor quam id erat. Cras pretium sapien in neque mattis imperdiet. Sed tempus nibh sed vulputate faucibus. Duis vehicula velit pretium leo varius, eget feugiat quam varius. Donec quis arcu rutrum massa maximus blandit. Donec vehicula ac orci sit amet bibendum.\r\n\r\nUt nec turpis vitae magna gravida tempor ut aliquam quam. Sed quis ligula fermentum, convallis nibh et, varius tortor. Cras commodo euismod augue blandit laoreet. Aenean non elit venenatis neque sollicitudin accumsan. Nulla molestie vulputate sapien nec pretium. Suspendisse ultrices, risus a porttitor mollis, ligula mauris egestas urna, egestas condimentum leo dui id ex. Curabitur erat arcu, condimentum a gravida in, rhoncus et metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris aliquet congue magna, ac vestibulum metus iaculis lacinia. Morbi euismod lobortis ex, eu sollicitudin orci varius eget. Quisque blandit lobortis lacus, et imperdiet tellus lobortis ac. Ut malesuada egestas ligula, in lacinia odio. Nullam lacus nibh, rhoncus a consequat non, luctus ac diam.\r\n\r\nAliquam fringilla diam id lobortis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut felis mi, consequat id ex ut, aliquet sollicitudin mi. Phasellus porta sodales augue, sed elementum augue consequat mollis. Morbi eget velit tempor, suscipit turpis in, dignissim ipsum. Ut nec arcu venenatis felis malesuada mattis. Cras a porttitor ante.\r\n\r\nMaecenas interdum nunc id rutrum finibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi at tincidunt metus. Donec non fermentum turpis, sit amet eleifend turpis. Proin vel feugiat arcu. Nunc sed vestibulum lacus. Pellentesque vulputate dolor tortor. Aenean lobortis commodo malesuada. Praesent sagittis eleifend sollicitudin. Quisque tempor porta eros imperdiet mollis. Ut auctor auctor tortor, eget interdum libero feugiat at. Nullam sapien nisi, ultrices non porta quis, posuere vitae arcu. Sed dapibus, ligula sed aliquet iaculis, libero nisl euismod purus, sed tincidunt libero odio ac erat.', '2018-10-18 08:58:35', '2018-10-20 11:36:39', 'de-gros-rochers-ont-ete-decouverts', 1, 2, 18, 22, 'article/image/yAc4MwS0bVlrlmoWApT0pudM7MSmXAqonRculoWH.jpeg', 'sous-titre'),
(22, 'Bonjour2', 'qsdfqdfqsdf', '2018-10-18 11:08:53', '2018-10-20 11:34:16', 'bonjour2', 0, 1, 20, NULL, 'article/image/Og92j9j657IlTSOZpi5FXgmEg1X6C7kENo2zyZ88.jpeg', 'sous-titre');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`, `description`) VALUES
(1, 'Photographie', 'photo', '2018-10-17 09:17:50', '2018-10-17 09:17:50', NULL),
(2, 'Illustration', 'illustration', '2018-10-17 09:18:39', '2018-10-19 07:50:58', NULL),
(3, 'Concept Design', 'concept', '2018-10-17 09:19:15', '2018-10-19 07:52:18', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `article_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `username`, `content`, `created_at`, `updated_at`, `article_id`) VALUES
(1, 'qsdf', 'qsdfq', '2018-10-19 17:23:44', '2018-10-19 17:23:44', 18),
(2, 'Skitak', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in porttitor nisi, mattis dictum elit. Mauris viverra sodales augue sit amet varius. Nunc non nunc consequat, feugiat dolor laoreet, fermentum arcu. Morbi eu enim Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2018-10-19 17:24:02', '2018-10-19 17:24:02', 18),
(3, 'Quelqu\'un', 'Bonjour, très bon article !', '2018-10-20 08:56:05', '2018-10-20 08:56:05', 18);

-- --------------------------------------------------------

--
-- Structure de la table `galeries`
--

CREATE TABLE `galeries` (
  `id` int(10) UNSIGNED NOT NULL,
  `online` tinyint(4) NOT NULL DEFAULT '0',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new galery',
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `subcategory_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `front_post_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `galeries`
--

INSERT INTO `galeries` (`id`, `online`, `title`, `slug`, `description`, `subcategory_id`, `created_at`, `updated_at`, `front_post_id`) VALUES
(2, 0, 'Québec', 'quebec', 'qsdfqdfqsdf', 5, '2018-10-19 12:36:42', '2018-10-19 12:36:42', NULL),
(3, 0, 'Montréal', 'montreal', 'qsdfqdfqsdf', 5, '2018-10-19 12:37:03', '2018-10-19 12:42:29', NULL),
(4, 1, 'Inktober', 'inktober', 'Toutes mes illustrations pour Inktober', 7, '2018-10-20 14:28:46', '2018-10-20 14:28:46', NULL),
(5, 1, 'Aquarelle', 'aquarelle', 'Mes illustrations à l\'aquarelle', 8, '2018-10-20 14:38:46', '2018-10-20 14:38:46', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_16_134011_create_articles_table', 1),
(4, '2018_10_16_151924_add_slug_to__article', 2),
(5, '2018_10_17_110449_create_categories_table', 3),
(6, '2018_10_17_123457_create_comments_table', 4),
(7, '2018_10_17_131134_article_add_chain', 5),
(8, '2018_10_17_133952_remove_fk', 6),
(9, '2018_10_17_140118_add_defaults', 7),
(10, '2018_10_17_140247_add_foreign', 8),
(11, '2018_10_17_153310_rename_article_previous', 9),
(13, '2018_10_17_162855_remove_previous_id', 10),
(14, '2018_10_17_170651_change_fk_next', 11),
(15, '2018_10_17_171310_add_next_previous', 11),
(17, '2018_10_18_104901_add_file_name_article', 12),
(18, '2018_10_18_132546_add_subtitle_article', 13),
(25, '2018_10_19_095341_create_subcategories_table', 14),
(26, '2018_10_19_115155_create_posts_table', 14),
(27, '2018_10_19_115620_add_fk_subposts_comments', 14),
(28, '2018_10_19_123517_create_galeries_table', 15),
(29, '2018_10_19_123818_add_fk_galeries_posts', 16),
(30, '2018_10_19_124522_add_description_categories', 17),
(31, '2018_10_19_145125_add_on_delete_posts_sub', 18);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `galery_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `name`, `description`, `galery_id`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 2, 'galeries/0d3yK6V9n9Zrwuogn6Jjv9fCtE15dUlFakJNXp79.jpeg', '2018-10-20 13:52:36', '2018-10-20 13:52:36'),
(2, NULL, NULL, 2, 'galeries/nv22JagJtnPZ35z4TZrmDEj9ohKNc7qygf7zKZUK.jpeg', '2018-10-20 13:52:36', '2018-10-20 13:52:36'),
(3, NULL, NULL, 2, 'galeries/omYkVfvHQTNkCYqbSn9lHiRlQD7x7R0JAbeaEusk.jpeg', '2018-10-20 13:52:36', '2018-10-20 13:52:36'),
(4, NULL, NULL, 2, 'galeries/dxv3jSfQTPqkzfNcantO0hot8zq2yZ3LrRdVAcxo.jpeg', '2018-10-20 13:52:36', '2018-10-20 13:52:36'),
(5, NULL, NULL, 2, 'galeries/4YcwJwOY8c84RX13DtnUP6OCkBd11N8Xzq0GVv3W.jpeg', '2018-10-20 14:26:25', '2018-10-20 14:26:25'),
(6, NULL, NULL, 2, 'galeries/DXWScNPPmOnvJuhkZAEowPXEwG04M8u8zS0CtRqN.jpeg', '2018-10-20 14:26:25', '2018-10-20 14:26:25'),
(7, NULL, NULL, 4, 'galeries/v3YQjcPPOHYhmBwCLYdfgdjFFvbgKasN7fVwfd3u.jpeg', '2018-10-20 14:28:46', '2018-10-20 14:28:46'),
(8, NULL, NULL, 4, 'galeries/w2o1FKN9pSHP7r1ow7mzJvHZgpdqfgoNYgHUH1N9.jpeg', '2018-10-20 14:28:46', '2018-10-20 14:28:46'),
(9, NULL, NULL, 4, 'galeries/8hjNI4XtNMWRI0DNTVkdnymgetWhi0MBo45oby96.jpeg', '2018-10-20 14:28:46', '2018-10-20 14:28:46'),
(10, NULL, NULL, 5, 'galeries/I06zhwXCmlmnSEsL0h9if1FJDo6Vz1RcyUpw3XKc.jpeg', '2018-10-20 14:38:46', '2018-10-20 14:38:46'),
(11, NULL, NULL, 5, 'galeries/SjwWdnCMnkxeNGvow6TrvYLMyzqDoSQ6u2xEji8j.jpeg', '2018-10-20 14:38:46', '2018-10-20 14:38:46'),
(12, NULL, NULL, 5, 'galeries/AQpX5doJOFtTgy88BnI98gXzwRWOTYOgzqQ2Rebd.jpeg', '2018-10-20 14:38:46', '2018-10-20 14:38:46'),
(13, NULL, NULL, 5, 'galeries/ADkTiO0cFuEPhBC6K3bYFVfOVzFHnxqghvPE2GkQ.jpeg', '2018-10-20 14:38:46', '2018-10-20 14:38:46'),
(14, NULL, NULL, 5, 'galeries/HPSZ7XF5RlKRUQdG3g32zOg8Fkjlqah7Gijh3W6w.jpeg', '2018-10-20 14:38:46', '2018-10-20 14:38:46'),
(15, NULL, NULL, 5, 'galeries/VixIJNGDSyZKDAtAUPZXjEuBj4TG0udP0tJzmmDS.jpeg', '2018-10-20 14:38:46', '2018-10-20 14:38:47'),
(16, NULL, NULL, 5, 'galeries/iHsmMl3gycDAN6RzwUyx5DsZJWRqTPynBlMpGzVf.jpeg', '2018-10-20 14:38:47', '2018-10-20 14:38:47');

-- --------------------------------------------------------

--
-- Structure de la table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Sub',
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sub-category',
  `online` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `front_post_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `description`, `slug`, `online`, `created_at`, `updated_at`, `front_post_id`, `category_id`) VALUES
(5, 'Canada', 'Chicoutimi, Québec city, Montréal', 'canada', 1, '2018-10-19 03:13:11', '2018-10-19 03:13:11', NULL, 1),
(6, 'Urbex', 'Paris et sa banlieue', 'urbex', 1, '2018-10-19 03:13:12', '2018-10-19 03:13:12', NULL, 1),
(7, 'Encre', 'Dessin à l\'encre ', 'ink', 1, '2018-10-02 22:00:00', '2018-10-21 22:00:00', NULL, 2),
(8, 'Aquarelle', 'Peinture à l\'aquarelle ', 'aquarel', 1, '2018-10-04 22:00:00', '2018-10-15 22:00:00', NULL, 2),
(11, 'monstres et creatures', NULL, 'monstres', 1, '2018-10-10 22:00:00', '2018-10-19 22:00:00', NULL, 3),
(12, 'Environnements', NULL, 'environments', 1, '2018-10-18 22:00:00', '2018-10-18 22:00:00', NULL, 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bastien Bouquin', 'bastienbouquin@gmail.com', NULL, '$2y$10$ewvj3IhJK6A8kcUQyrlgwelU8Z9ZgB8jrpxpdd1IfVDIxwH1ng8gi', '8kgJxFnot8g4uVzQSV60ChUJ7VHWwz9uU6Iepp6fS0XO5KuhI5bP8LkStQmi', '2018-10-16 13:52:42', '2018-10-16 13:52:42');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_title_unique` (`title`),
  ADD KEY `articles_category_id_index` (`category_id`),
  ADD KEY `articles_previous_id_foreign` (`previous_id`),
  ADD KEY `articles_next_id_foreign` (`next_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_article_id_foreign` (`article_id`);

--
-- Index pour la table `galeries`
--
ALTER TABLE `galeries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galeries_front_post_id_foreign` (`front_post_id`),
  ADD KEY `galeries_subcategory_id_foreign` (`subcategory_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_galery_id_foreign` (`galery_id`);

--
-- Index pour la table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subcategories_slug_unique` (`slug`),
  ADD KEY `subcategories_front_post_id_foreign` (`front_post_id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `galeries`
--
ALTER TABLE `galeries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_next_id_foreign` FOREIGN KEY (`next_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `articles_previous_id_foreign` FOREIGN KEY (`previous_id`) REFERENCES `articles` (`id`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `galeries`
--
ALTER TABLE `galeries`
  ADD CONSTRAINT `galeries_front_post_id_foreign` FOREIGN KEY (`front_post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `galeries_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_galery_id_foreign` FOREIGN KEY (`galery_id`) REFERENCES `galeries` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subcategories_front_post_id_foreign` FOREIGN KEY (`front_post_id`) REFERENCES `posts` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
