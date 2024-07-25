-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2024 at 09:53 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_projet_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_accueil` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_accueil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_detail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `nom`, `description_accueil`, `description_detail`, `image_accueil`, `image_detail`, `alt`) VALUES
(1, 'Les Simpson', 'Créée par Matt Groening (qui a nommé les personnages d\'après les membres de sa propre famille, à l\'exception de Bart), Les Simpson a été diffusée la première fois à Noël, en 1989, puis a été programmée de façon régulière dès janvier 1990.', 'La série met en scène la vie quotidienne des Simpson, caricatures de la famille américaine moyenne. Ceux-ci doivent souvent faire face à des aventures parodiant le style de vie américain. Les membres de la famille, tous jaunes de peau, sont Homer, Marge, Bart, Lisa et Maggie.\r\nLa série a alors connu un énorme succès, les téléspectateurs et les critiques s\'étant accordés à dire qu\'elle était le portrait le plus réaliste et le plus drôle de la famille américaine de base. Les Simpson habitent dans un joli pavillon à Springfield. \r\nIl y a d\'abord Homer, le père de famille accro aux donuts, spécialiste des mauvais conseils et des catastrophes en tous genres, notamment sur son lieu de travail, la centrale nucléaire de la ville. \r\nSa femme, Marge, est quant à elle une mère et une épouse totalement dévouée à sa famille qui arbore une coiffure bleue particulièrement imposante. \r\nLeur fils ainé de 10 ans, Bart, n\'en fait qu\'à sa tête. Véritable cancre, il enchaîne les bêtises au grand désespoir de sa sœur cadette Lisa, 8 ans, enfant surdouée, philosophe dans l\'âme et saxophoniste aguerrie. \r\nEnfin, la petite Maggy supporte sa famille en silence, manifestant ses émotions uniquement grâce aux bruits qu\'elle fait avec sa tétine.', 'https://www.lessimpson.fr/wp-content/uploads/les-simpson-accueil.webp', 'https://media.gqmagazine.fr/photos/5e1c237d12476000080b41ff/16:9/w_3840,h_2160,c_limit/los%20simpson%20error%20capitulo.jpg', 'Photo d\'illustration des Simpson.'),
(2, 'South Park', 'South Park est une série d\'animation américaine pour adultes créée et écrite par Trey Parker et Matt Stone, diffusée depuis le 13 août 1997 sur Comedy Central.', 'La série met en scène les aventures de quatre enfants d\'école primaire : Stan Marsh, Kyle Broflovski, Eric Cartman et Kenny McCormick, tous les quatre agés de 9 ans et qui vivent à South Park, petite ville du Colorado de 4 388 habitants.\r\nDes phénomènes surnaturels ou des événements politiques motivent un grand nombre de leurs aventures.\r\nSon humour se veut absurde, parodique, sarcastique, graveleux et scatologique, et elle est souvent une critique et une satire de la société américaine. Mais c\'est bien son ton très provocateur et ses dialogues souvent grossiers qui la distinguent dans le paysage audiovisuel. Depuis ses débuts, ses auteurs bénéficient d\'une très grande liberté assez rare pour une série sur le câble américain.', 'https://fr.web.img5.acsta.net/pictures/14/03/24/12/46/257044.jpg', 'https://media.ouest-france.fr/v1/pictures/MjAxOTA5OGQwZmZjOWYwZjYwNDc5NWNiZThhOTM5YjZlZmQyM2Q?width=1260&height=708&focuspoint=51%2C93&cropresize=1&client_id=bpeditorial&sign=893eefa69b515f66933a5d48b19ea2dfa19ec084dc6ec9336c3197b3b5310eaf', 'Photo d\'illustration de South Park.'),
(3, 'Rick and Morty', 'Rick et Morty est une série d\'animation pour adultes américaine créée par Justin Roiland et Dan Harmon, diffusée depuis le 2 décembre 2013 sur Cartoon Network, dans la tranche fin de soirée Adult Swim.', 'Rick est un vieil homme déséquilibré et alcoolique, mais doué scientifiquement, qui a récemment renoué avec sa famille. \r\nIl passe le plus clair de son temps à entraîner son petit-fils Morty dans des aventures extraordinaires, dangereuses, à travers l\'Espace et dans des univers parallèles. \r\nAjouté à la vie de famille déjà instable de Morty, ces événements n\'amènent qu\'un surcroît de stress pour Morty, à la maison et au collège.', 'https://fr.web.img6.acsta.net/pictures/18/10/31/17/34/2348073.jpg', 'https://blogscdn.thehut.net/wp-content/uploads/sites/499/2018/09/24160403/rick-and-morty.jpeg', 'Photo d\'illustration de Rick & Morty.'),
(43, 'Olive et Tom', 'Olive et Tom est une série télévisée d\'animation japonaise en 128 épisodes de 22 minutes, créée en 1983 d\'après le manga Captain Tsubasa de Yôichi Takahashi.\r\n\"\"', 'C\'est l\'histoire d\'un jeune garçon du nom d\'Olivier Atton, qui est fan de foot et excellent joueur. \r\nUn jour, il rencontre Roberto Sedinho, un joueur mondialement connu ayant joué pour le Brésil. \r\nRoberto commence à entraîner Olivier et abandonne sa prestigieuse carrière.\r\nBien qu\'assez petit Olivier possède d\'énormes qualités de dribble, est très rapide et souvent décisif, rêve de remporter le championnat national et de partir avec Roberto au Brésil comme ce dernier le lui a promis.\r\nIl rencontre et affronte tous les meilleurs joueurs du pays, avec lesquels il se lie d\'amitié, tels que Thomas Price (Genzô Wakabayashi), Ben Becker (Tarō Misaki) ou encore Bruce Harper (Ryō Ishizaki).\"\"', 'https://www.mangas.fr/upload/media/mediawan-1996-05563-image-810x1080-cover-fr-fr-oliveettomchampionsdefoot-635feb6b383c2.jpeg', 'https://cdn-uploads.gameblog.fr/img/news/512150_6598115f93d12.jpg?ver=1', 'Photo d\'illustration Olive et Tom');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
