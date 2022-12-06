-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 05 déc. 2022 à 16:07
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `liedon`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `target_reader` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `synopsis` text NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `editor` varchar(255) DEFAULT NULL,
  `date_publication` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id`, `id_user`, `category`, `target_reader`, `title`, `author`, `synopsis`, `photo`, `editor`, `date_publication`, `status`, `date_created`) VALUES
(3, 1, 'Roman', '+18 ans', 'Tim', 'Colleen McCullough', 'Mary Horton mène une existence solitaire dans sa villa sur la plage de Sydney. Cadre dans une compagnie d&#039;extraction minière, elle n&#039;a vécu que pour réussir. Sa vie est bouleversée par sa rencontre avec le jeune Tim Melville, qui devient son jardinier. Premier roman.', '1-3-Tim.jpg', 'Archipoche', '2015', 'documentation', '2022-11-17 19:30:29'),
(4, 1, 'Roman', '+18 ans', 'Nymphéas noirs', 'Michel Bussi', 'Le jour paraît sur Giverny.\r\nDu haut de son moulin, une vieille dame veille, surveille. Le quotidien du village, les cars de touristes… Des silhouettes et des vies. Deux femmes, en particulier, se détachent : l’une, les yeux couleur nymphéa, rêve d’amour et d’évasion ; l’autre, onze ans, ne vit déjà que pour la peinture. Deux femmes qui vont se trouver au cœur d’un tourbillon orageux. Car dans le village de Monet, où chacun est une énigme, où chaque âme a son secret, des drames vont venir diluer les illusions et raviver les blessures du passé…', '1-4-Nymphéasnoirs.jpg', 'Les presses de la cité', '2011', 'documentation', '2022-11-18 12:10:20'),
(5, 2, 'Roman', '+18 ans', 'Le Garçon d&#039;à côté', 'Katrina Kittle', 'Dans la banlieue tranquille du Middle West où Sarah vit avec ses enfants, Nate et Danny, la nouvelle fait l&#039;effet d&#039;une bombe: leurs voisins, et amis, les Kendricks sont accusés de pédophilie. L&#039;horreur était sous ses yeux, et pourtant Sarah n&#039;a rien vu, rien senti... Malgré l&#039;équilibre fragile qu&#039;elle tente de maintenir au sein de sa famille depuis la mort de son mari, elle décide d&#039;accueillir Jordan, le fils des Kendricks, victime d&#039;abus. Sarah, Nate et Danny - l&#039;adulte, l&#039;adolescent et l&#039;enfant - vont devoir changer de regard, réinventer leurs rôles respectifs et leurs certitudes pour redonner à Jordan goût à la vie et l&#039;aider à grandir.', '2-5-LeGarçondàcôté.jpg', 'Phébus', '2012', 'don', '2022-11-18 14:06:28'),
(6, 2, 'Roman', '+18 ans', 'Le sel de nos larmes', 'Ruta Sepetys', 'Hiver 1945. Quatre adolescents. Quatre destinées. Chacun né dans un pays différent. Chacun traqué et hanté par sa propre guerre. Parmi les milliers de réfugiés fuyant à pied vers la côte de la mer Baltique devant l&#039;avancée des troupes soviétiques, quatre adolescents sont réunis par le destin pour affronter le froid, la faim, la peur, les bombes... Tous partagent un même but : embarquer sur le Wilhelm Gustloff, un énorme navire promesse de liberté...Ruta Sepetys révèle la plus grande tragédie de l&#039;histoire maritime, qui a fait six fois plus de victimes que le Titanic. Cette catastrophe méconnue lui inspire une vibrante histoire d&#039;amour, de courage et d&#039;amitié. Lumineux, captivant et bouleversant d&#039;humanité.', '2-6-Leseldenoslarmes.jpg', 'Gallimard Jeunesse', '2016', 'documentation', '2022-11-18 14:12:45'),
(7, 2, 'Roman', '18-35 ans', 'Avalanche Hôtel', 'Niko Tackian', 'Janvier 1980. Joshua Auberson est agent de sécurité à l’Avalanche Hôtel, sublime palace des Alpes suisses. Il enquête sur la disparition d’une jeune cliente et ne peut écarter un sentiment d’étrangeté. Quelque chose cloche autour de lui, il en est sûr. Le barman, un géant taciturne, lui demande de le suivre dans la montagne, en pleine tempête de neige. Joshua a si froid qu’il perd connaissance…\r\n… et revient à lui dans une chambre d’hôpital. Il a été pris dans une avalanche, il est resté deux jours dans le coma. Nous ne sommes pas en 1980 mais en 2018. Joshua n’est pas agent de sécurité, il est flic, et l’Avalanche Hôtel n’est plus qu’une carcasse vide depuis bien longtemps. Tout cela n’était qu’un rêve dû au coma.\r\n\r\nUn rêve, vraiment ?', '2-AvalancheHôtel63778abf5b4a3-.jpg', 'Calmann Levy', '2020', 'documentation', '2022-11-18 14:38:07'),
(8, 7, 'Roman', 'Public mâture (+18 ans)', 'Le temps de l&#039;amour', 'Colleen McCullough', 'A peine sortie de l&#039;adolescence, Elizabeth Drummond devient contre son gré l&#039;épouse d&#039;Alexander Kinross, propriétaire d&#039;une mine d&#039;or australienne en passe de devenir une multinationale. Ainsi débute cette saga familiale ayant pour cadre l&#039;Australie au tournant du XXe siècle.', '7-Letempsdelamour-637ea6274bb44.jpg', 'Archipoche', '2004', 'documentation', '2022-11-24 00:00:55'),
(9, 8, 'Roman', 'Public mâture (+18 ans)', 'L&#039;armoire des robes oubliées', 'Rikka Pulkkinen', 'Alors que sa grand-mère Elsa se meurt d’un cancer foudroyant et que tous ses proches se rassemblent pour adoucir ses derniers jours, Anna découvre que, derrière le mariage apparemment heureux de ses grands-parents, se cache un drame qui a marqué à jamais tous les membres de sa famille.  Une vieille robe trouvée par hasard, et dont elle apprend qu’elle aurait appartenu à une certaine Eeva, va réveiller le passé. Cette Eeva, dont on ne lui a jamais parlé, aurait été, dans les années 60, la nourrice de sa mère. Mais Anna ne tarde pas à comprendre qu’elle a été beaucoup plus qu’une employée et que son grand-père, peintre célèbre, l’a profondément aimée…', '8-Larmoiredesrobesoubliées-637ead7f4e467.jpg', 'Albin Michel', '2012', 'documentation', '2022-11-24 00:32:15');

-- --------------------------------------------------------

--
-- Structure de la table `book_story_tag`
--

CREATE TABLE `book_story_tag` (
  `id` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `id_story` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `borrow`
--

CREATE TABLE `borrow` (
  `id` int(11) NOT NULL,
  `id_borrower` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `date_borrowed` datetime NOT NULL,
  `date_returned` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(3, 'Nouvelles'),
(4, 'Conte'),
(5, 'Biographie'),
(6, 'Autobiographie'),
(7, 'Chronique'),
(8, 'Apologue'),
(9, 'Journal'),
(10, 'Roman'),
(11, 'Poésie'),
(12, 'Théâtre');

-- --------------------------------------------------------

--
-- Structure de la table `chapter`
--

CREATE TABLE `chapter` (
  `id` int(11) NOT NULL,
  `id_story` int(11) NOT NULL,
  `chapter_number` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_edited` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chapter`
--

INSERT INTO `chapter` (`id`, `id_story`, `chapter_number`, `title`, `content`, `date_created`, `date_edited`) VALUES
(1, 1, 1, 'Chapitre 1', 'Un texte pour mon chapitre\r\n', '2022-11-20 14:19:58', NULL),
(2, 5, 2, 'Chapitre 2', 'Un texte pour mon chapitre numéro 2', '2022-11-20 14:21:26', NULL),
(3, 5, 3, 'Chapitre 3', 'Un chapitre troisième', '2022-11-20 14:23:36', NULL),
(4, 1, 32, 'Une noouvelle', 'cgh;c', '2022-11-20 14:32:45', NULL),
(5, 5, 5, 'Cinquième essai', 'Encore un test pour l&#039;id_user\r\n', '2022-11-20 14:45:47', NULL),
(6, 7, 1, 'Chapitre 1 - Découverte', 'En se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte. Il était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine. Ses nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux. « Qu’est-ce qui m’est arrivé ?\r\n\r\n» pensa-t-il. Ce n’était pas un rêve. Sa chambre, une vraie chambre humaine, juste un peu trop petite, était là tranquille entre les quatre murs qu’il connaissait bien. Au-dessus de la table où était déballée une collection d’échantillons de tissus - Samsa était représentant de commerce - on voyait accrochée l’image qu’il avait récemment découpée dans un magazine et mise dans un joli cadre doré.\r\n\r\nElle représentait une dame munie d’une toque et d’un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure où tout son avant-bras avait disparu. Le regard de Gregor se tourna ensuite vers la fenêtre, et le temps maussade - on entendait les gouttes de pluie frapper le rebord en zinc - le rendit tout mélancolique. « Et si je redormais un peu et oubliais toutes ces sottises ?\r\n\r\n» se dit-il ; mais c’était absolument irréalisable, car il avait l’habitude de dormir sur le côté droit et, dans l’état où il était à présent, il était incapable de se mettre dans cette position. En se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte. Il était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine.\r\n\r\nSes nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux. « Qu’est-ce qui m’est arrivé ? » pensa-t-il. Ce n’était pas un rêve. Sa chambre, une vraie chambre humaine, juste un peu trop petite, était là tranquille entre les quatre murs qu’il connaissait bien. Au-dessus de la table où était déballée une collection d’échantillons de tissus - Samsa était représentant de commerce - on voyait accrochée l’image qu’il avait récemment découpée dans un magazine et mise dans un joli cadre doré.\r\n\r\nElle représentait une dame munie d’une toque et d’un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure où tout son avant-bras avait disparu. Le regard de Gregor se tourna ensuite vers la fenêtre, et le temps maussade - on entendait les gouttes de pluie frapper le rebord en zinc - le rendit tout mélancolique. « Et si je redormais un peu et oubliais toutes ces sottises ?\r\n\r\n» se dit-il ; mais c’était absolument irréalisable, car il avait l’habitude de dormir sur le côté droit et, dans l’état où il était à présent, il était incapable de se mettre dans cette position. En se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte. Il était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine.\r\n\r\nSes nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux. « Qu’est-ce qui m’est arrivé ? » pensa-t-il. Ce n’était pas un rêve. Sa chambre, une vraie chambre humaine, juste un peu trop petite, était là tranquille entre les quatre murs qu’il connaissait bien. Au-dessus de la table où était déballée une collection d’échantillons de tissus - Samsa était représentant de commerce - on voyait accrochée l’image qu’il avait récemment découpée dans un magazine et mise dans un joli cadre doré.\r\n\r\nElle représentait une dame munie d’une toque et d’un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure où tout son avant-bras avait disparu. Le regard de Gregor se tourna ensuite vers la fenêtre, et le temps maussade - on entendait les gouttes de pluie frapper le rebord en zinc - le rendit tout mélancolique. « Et si je redormais un peu et oubliais toutes ces sottises ?\r\n\r\n» se dit-il ; mais c’était absolument irréalisable, car il avait l’habitude de dormir sur le côté droit et, dans l’état où il était à présent, il était incapable de se mettre dans cette position. En se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte. Il était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine.\r\n\r\nSes nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux. « Qu’est-ce qui m’est arrivé ? » pensa-t-il. Ce n’était pas un rêve. Sa chambre, une vraie chambre humaine, juste un peu trop petite, était là tranquille entre les quatre murs qu’il connaissait bien. Au-dessus de la table où était déballée une collection d’échantillons de tissus - Samsa était représentant de commerce - on voyait accrochée l’image qu’il avait récemment découpée dans un magazine et mise dans un joli cadre doré.\r\n\r\nElle représentait une dame munie d’une toque et d’un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure où tout son avant-bras avait disparu. Le regard de Gregor se tourna ensuite vers la fenêtre, et le temps maussade - on entendait les gouttes de pluie frapper le rebord en zinc - le rendit tout mélancolique. « Et si je redormais un peu et oubliais toutes ces sottises ? » se dit-il ; mais c’était absolument irréalisable, car il avait l’habitude de dormir sur le côté droit et, dans l’état où il était à présent, il était incapable de se mettre dans cette position.\r\n\r\nEn se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte. Il était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine. Ses nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux. « Qu’est-ce qui m’est arrivé ? » pensa-t-il. Ce n’était pas un rêve.\r\n\r\nSa chambre, une vraie chambre humaine, juste un peu trop petite, était là tranquille entre les quatre murs qu’il connaissait bien. Au-dessus de la table où était déballée une collection d’échantillons de tissus - Samsa était représentant de commerce - on voyait accrochée l’image qu’il avait récemment découpée dans un magazine et mise dans un joli cadre doré. Elle représentait une dame munie d’une toque et d’un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure où tout son avant-bras avait disparu.\r\n\r\nLe regard de Gregor se tourna ensuite vers la fenêtre, et le temps maussade - on entendait les gouttes de pluie frapper le rebord en zinc - le rendit tout mélancolique. « Et si je redormais un peu et oubliais toutes ces sottises ? » se dit-il ; mais c’était absolument irréalisable, car il avait l’habitude de dormir sur le côté droit et, dans l’état où il était à présent, il était incapable de se mettre dans cette position. En se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte.\r\n\r\nIl était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine. Ses nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux. « Qu’est-ce qui m’est arrivé ? » pensa-t-il. Ce n’était pas un rêve. Sa chambre, une vraie chambre humaine, juste un peu trop petite, était là tranquille entre les quatre murs qu’il connaissait bien.\r\n\r\nAu-dessus de la table où était déballée une collection d’échantillons de tissus - Samsa était représentant de commerce - on voyait accrochée l’image qu’il avait récemment découpée dans un magazine et mise dans un joli cadre doré. Elle représentait une dame munie d’une toque et d’un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure où tout son avant-bras avait disparu. Le regard de Gregor se tourna ensuite vers la fenêtre, et le temps maussade - on entendait les gouttes de pluie frapper le rebord en zinc - le rendit tout mélancolique. « Et si je redormais un peu et oubliais toutes ces sottises ?\r\n\r\n» se dit-il ; mais c’était absolument irréalisable, car il avait l’habitude de dormir sur le côté droit et, dans l’état où il était à présent, il était incapable de se mettre dans cette position. En se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte. Il était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine. Ses nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux.\r\n\r\n« Qu’est-ce qui m’est arrivé ? » pensa-t-il. Ce n’était pas un rêve. Sa chambre, une vraie chambre humaine, juste un peu trop petite, était là tranquille entre les quatre murs qu’il connaissait bien. Au-dessus de la table où était déballée une collection d’échantillons de tissus - Samsa était représentant de commerce - on voyait accrochée l’image qu’il avait récemment découpée dans un magazine et mise dans un joli cadre doré. Elle représentait une dame munie d’une toque et d’un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure où tout son avant-bras avait disparu. Le regard de Gregor se tourna ensuite vers la fenêtre, et le temps maussade - on entendait les gouttes de pluie frapper le rebord en zinc - le rendit tout mélancolique. « Et si je redormais un peu et oubliais toutes ces sottises ? » se dit-il ; mais c’était absolument irréalisable, car il avait l’habitude de dormir sur le côté droit et, dans l’état où il était à présent, il était incapable de se mettre dans cette position. En se réveillant', '2022-11-21 18:17:59', NULL),
(7, 7, 2, 'Acceptation', 'En se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte. Il était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine. Ses nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux. « Qu’est-ce qui m’est arrivé ?\r\n\r\n» pensa-t-il. Ce n’était pas un rêve. Sa chambre, une vraie chambre humaine, juste un peu trop petite, était là tranquille entre les quatre murs qu’il connaissait bien. Au-dessus de la table où était déballée une collection d’échantillons de tissus - Samsa était représentant de commerce - on voyait accrochée l’image qu’il avait récemment découpée dans un magazine et mise dans un joli cadre doré.\r\n\r\nElle représentait une dame munie d’une toque et d’un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure où tout son avant-bras avait disparu. Le regard de Gregor se tourna ensuite vers la fenêtre, et le temps maussade - on entendait les gouttes de pluie frapper le rebord en zinc - le rendit tout mélancolique. « Et si je redormais un peu et oubliais toutes ces sottises ?\r\n\r\n» se dit-il ; mais c’était absolument irréalisable, car il avait l’habitude de dormir sur le côté droit et, dans l’état où il était à présent, il était incapable de se mettre dans cette position. En se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte. Il était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine.\r\n\r\nSes nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux. « Qu’est-ce qui m’est arrivé ? » pensa-t-il. Ce n’était pas un rêve. Sa chambre, une vraie chambre humaine, juste un peu trop petite, était là tranquille entre les quatre murs qu’il connaissait bien. Au-dessus de la table où était déballée une collection d’échantillons de tissus - Samsa était représentant de commerce - on voyait accrochée l’image qu’il avait récemment découpée dans un magazine et mise dans un joli cadre doré.\r\n\r\nElle représentait une dame munie d’une toque et d’un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure où tout son avant-bras avait disparu. Le regard de Gregor se tourna ensuite vers la fenêtre, et le temps maussade - on entendait les gouttes de pluie frapper le rebord en zinc - le rendit tout mélancolique. « Et si je redormais un peu et oubliais toutes ces sottises ?\r\n\r\n» se dit-il ; mais c’était absolument irréalisable, car il avait l’habitude de dormir sur le côté droit et, dans l’état où il était à présent, il était incapable de se mettre dans cette position. En se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte. Il était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine.\r\n\r\nSes nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux. « Qu’est-ce qui m’est arrivé ? » pensa-t-il. Ce n’était pas un rêve. Sa chambre, une vraie chambre humaine, juste un peu trop petite, était là tranquille entre les quatre murs qu’il connaissait bien. Au-dessus de la table où était déballée une collection d’échantillons de tissus - Samsa était représentant de commerce - on voyait accrochée l’image qu’il avait récemment découpée dans un magazine et mise dans un joli cadre doré.\r\n\r\nElle représentait une dame munie d’une toque et d’un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure où tout son avant-bras avait disparu. Le regard de Gregor se tourna ensuite vers la fenêtre, et le temps maussade - on entendait les gouttes de pluie frapper le rebord en zinc - le rendit tout mélancolique. « Et si je redormais un peu et oubliais toutes ces sottises ?\r\n\r\n» se dit-il ; mais c’était absolument irréalisable, car il avait l’habitude de dormir sur le côté droit et, dans l’état où il était à présent, il était incapable de se mettre dans cette position. En se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte. Il était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine.\r\n\r\nSes nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux. « Qu’est-ce qui m’est arrivé ? » pensa-t-il. Ce n’était pas un rêve. Sa chambre, une vraie chambre humaine, juste un peu trop petite, était là tranquille entre les quatre murs qu’il connaissait bien. Au-dessus de la table où était déballée une collection d’échantillons de tissus - Samsa était représentant de commerce - on voyait accrochée l’image qu’il avait récemment découpée dans un magazine et mise dans un joli cadre doré.\r\n\r\nElle représentait une dame munie d’une toque et d’un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure où tout son avant-bras avait disparu. Le regard de Gregor se tourna ensuite vers la fenêtre, et le temps maussade - on entendait les gouttes de pluie frapper le rebord en zinc - le rendit tout mélancolique. « Et si je redormais un peu et oubliais toutes ces sottises ? » se dit-il ; mais c’était absolument irréalisable, car il avait l’habitude de dormir sur le côté droit et, dans l’état où il était à présent, il était incapable de se mettre dans cette position.\r\n\r\nEn se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte. Il était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine. Ses nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux. « Qu’est-ce qui m’est arrivé ? » pensa-t-il. Ce n’était pas un rêve.\r\n\r\nSa chambre, une vraie chambre humaine, juste un peu trop petite, était là tranquille entre les quatre murs qu’il connaissait bien. Au-dessus de la table où était déballée une collection d’échantillons de tissus - Samsa était représentant de commerce - on voyait accrochée l’image qu’il avait récemment découpée dans un magazine et mise dans un joli cadre doré. Elle représentait une dame munie d’une toque et d’un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure où tout son avant-bras avait disparu.\r\n\r\nLe regard de Gregor se tourna ensuite vers la fenêtre, et le temps maussade - on entendait les gouttes de pluie frapper le rebord en zinc - le rendit tout mélancolique. « Et si je redormais un peu et oubliais toutes ces sottises ? » se dit-il ; mais c’était absolument irréalisable, car il avait l’habitude de dormir sur le côté droit et, dans l’état où il était à présent, il était incapable de se mettre dans cette position. En se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte.\r\n\r\nIl était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine. Ses nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux. « Qu’est-ce qui m’est arrivé ? » pensa-t-il. Ce n’était pas un rêve. Sa chambre, une vraie chambre humaine, juste un peu trop petite, était là tranquille entre les quatre murs qu’il connaissait bien.\r\n\r\nAu-dessus de la table où était déballée une collection d’échantillons de tissus - Samsa était représentant de commerce - on voyait accrochée l’image qu’il avait récemment découpée dans un magazine et mise dans un joli cadre doré. Elle représentait une dame munie d’une toque et d’un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure où tout son avant-bras avait disparu. Le regard de Gregor se tourna ensuite vers la fenêtre, et le temps maussade - on entendait les gouttes de pluie frapper le rebord en zinc - le rendit tout mélancolique. « Et si je redormais un peu et oubliais toutes ces sottises ?\r\n\r\n» se dit-il ; mais c’était absolument irréalisable, car il avait l’habitude de dormir sur le côté droit et, dans l’état où il était à présent, il était incapable de se mettre dans cette position. En se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte. Il était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine. Ses nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux.\r\n\r\n« Qu’est-ce qui m’est arrivé ? » pensa-t-il. Ce n’était pas un rêve. Sa chambre, une vraie chambre humaine, juste un peu trop petite, était là tranquille entre les quatre murs qu’il connaissait bien. Au-dessus de la table où était déballée une collection d’échantillons de tissus - Samsa était représentant de commerce - on voyait accrochée l’image qu’il avait récemment découpée dans un magazine et mise dans un joli cadre doré. Elle représentait une dame munie d’une toque et d’un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure où tout son avant-bras avait disparu. Le regard de Gregor se tourna ensuite vers la fenêtre, et le temps maussade - on entendait les gouttes de pluie frapper le rebord en zinc - le rendit tout mélancolique. « Et si je redormais un peu et oubliais toutes ces sottises ? » se dit-il ; mais c’était absolument irréalisable, car il avait l’habitude de dormir sur le côté droit et, dans l’état où il était à présent, il était incapable de se mettre dans cette position. En se réveillant', '2022-11-21 18:20:46', NULL),
(8, 7, 3, 'Deuil', 'En se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte. Il était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine. Ses nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux. « Qu’est-ce qui m’est arrivé ?\r\n\r\n» pensa-t-il. Ce n’était pas un rêve. Sa chambre, une vraie chambre humaine, juste un peu trop petite, était là tranquille entre les quatre murs qu’il connaissait bien. Au-dessus de la table où était déballée une collection d’échantillons de tissus - Samsa était représentant de commerce - on voyait accrochée l’image qu’il avait récemment découpée dans un magazine et mise dans un joli cadre doré.\r\n\r\nElle représentait une dame munie d’une toque et d’un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure où tout son avant-bras avait disparu. Le regard de Gregor se tourna ensuite vers la fenêtre, et le temps maussade - on entendait les gouttes de pluie frapper le rebord en zinc - le rendit tout mélancolique. « Et si je redormais un peu et oubliais toutes ces sottises ?\r\n\r\n» se dit-il ; mais c’était absolument irréalisable, car il avait l’habitude de dormir sur le côté droit et, dans l’état où il était à présent, il était incapable de se mettre dans cette position. En se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte. Il était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine.\r\n\r\nSes nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux. « Qu’est-ce qui m’est arrivé ? » pensa-t-il. Ce n’était pas un rêve. Sa chambre, une vraie chambre humaine, juste un peu trop petite, était là tranquille entre les quatre murs qu’il connaissait bien. Au-dessus de la table où était déballée une collection d’échantillons de tissus - Samsa était représentant de commerce - on voyait accrochée l’image qu’il avait récemment découpée dans un magazine et mise dans un joli cadre doré.\r\n\r\nElle représentait une dame munie d’une toque et d’un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure où tout son avant-bras avait disparu. Le regard de Gregor se tourna ensuite vers la fenêtre, et le temps maussade - on entendait les gouttes de pluie frapper le rebord en zinc - le rendit tout mélancolique. « Et si je redormais un peu et oubliais toutes ces sottises ?\r\n\r\n» se dit-il ; mais c’était absolument irréalisable, car il avait l’habitude de dormir sur le côté droit et, dans l’état où il était à présent, il était incapable de se mettre dans cette position. En se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte. Il était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine.\r\n\r\nSes nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux. « Qu’est-ce qui m’est arrivé ? » pensa-t-il. Ce n’était pas un rêve. Sa chambre, une vraie chambre humaine, juste un peu trop petite, était là tranquille entre les quatre murs qu’il connaissait bien. Au-dessus de la table où était déballée une collection d’échantillons de tissus - Samsa était représentant de commerce - on voyait accrochée l’image qu’il avait récemment découpée dans un magazine et mise dans un joli cadre doré.\r\n\r\nElle représentait une dame munie d’une toque et d’un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure où tout son avant-bras avait disparu. Le regard de Gregor se tourna ensuite vers la fenêtre, et le temps maussade - on entendait les gouttes de pluie frapper le rebord en zinc - le rendit tout mélancolique. « Et si je redormais un peu et oubliais toutes ces sottises ?\r\n\r\n» se dit-il ; mais c’était absolument irréalisable, car il avait l’habitude de dormir sur le côté droit et, dans l’état où il était à présent, il était incapable de se mettre dans cette position. En se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte. Il était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine.\r\n\r\nSes nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux. « Qu’est-ce qui m’est arrivé ? » pensa-t-il. Ce n’était pas un rêve. Sa chambre, une vraie chambre humaine, juste un peu trop petite, était là tranquille entre les quatre murs qu’il connaissait bien. Au-dessus de la table où était déballée une collection d’échantillons de tissus - Samsa était représentant de commerce - on voyait accrochée l’image qu’il avait récemment découpée dans un magazine et mise dans un joli cadre doré.\r\n\r\nElle représentait une dame munie d’une toque et d’un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure où tout son avant-bras avait disparu. Le regard de Gregor se tourna ensuite vers la fenêtre, et le temps maussade - on entendait les gouttes de pluie frapper le rebord en zinc - le rendit tout mélancolique. « Et si je redormais un peu et oubliais toutes ces sottises ? » se dit-il ; mais c’était absolument irréalisable, car il avait l’habitude de dormir sur le côté droit et, dans l’état où il était à présent, il était incapable de se mettre dans cette position.\r\n\r\nEn se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte. Il était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine. Ses nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux. « Qu’est-ce qui m’est arrivé ? » pensa-t-il. Ce n’était pas un rêve.\r\n\r\nSa chambre, une vraie chambre humaine, juste un peu trop petite, était là tranquille entre les quatre murs qu’il connaissait bien. Au-dessus de la table où était déballée une collection d’échantillons de tissus - Samsa était représentant de commerce - on voyait accrochée l’image qu’il avait récemment découpée dans un magazine et mise dans un joli cadre doré. Elle représentait une dame munie d’une toque et d’un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure où tout son avant-bras avait disparu.\r\n\r\nLe regard de Gregor se tourna ensuite vers la fenêtre, et le temps maussade - on entendait les gouttes de pluie frapper le rebord en zinc - le rendit tout mélancolique. « Et si je redormais un peu et oubliais toutes ces sottises ? » se dit-il ; mais c’était absolument irréalisable, car il avait l’habitude de dormir sur le côté droit et, dans l’état où il était à présent, il était incapable de se mettre dans cette position. En se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte.\r\n\r\nIl était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine. Ses nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux. « Qu’est-ce qui m’est arrivé ? » pensa-t-il. Ce n’était pas un rêve. Sa chambre, une vraie chambre humaine, juste un peu trop petite, était là tranquille entre les quatre murs qu’il connaissait bien.\r\n\r\nAu-dessus de la table où était déballée une collection d’échantillons de tissus - Samsa était représentant de commerce - on voyait accrochée l’image qu’il avait récemment découpée dans un magazine et mise dans un joli cadre doré. Elle représentait une dame munie d’une toque et d’un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure où tout son avant-bras avait disparu. Le regard de Gregor se tourna ensuite vers la fenêtre, et le temps maussade - on entendait les gouttes de pluie frapper le rebord en zinc - le rendit tout mélancolique. « Et si je redormais un peu et oubliais toutes ces sottises ?\r\n\r\n» se dit-il ; mais c’était absolument irréalisable, car il avait l’habitude de dormir sur le côté droit et, dans l’état où il était à présent, il était incapable de se mettre dans cette position. En se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte. Il était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine. Ses nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux.\r\n\r\n« Qu’est-ce qui m’est arrivé ? » pensa-t-il. Ce n’était pas un rêve. Sa chambre, une vraie chambre humaine, juste un peu trop petite, était là tranquille entre les quatre murs qu’il connaissait bien. Au-dessus de la table où était déballée une collection d’échantillons de tissus - Samsa était représentant de commerce - on voyait accrochée l’image qu’il avait récemment découpée dans un magazine et mise dans un joli cadre doré. Elle représentait une dame munie d’une toque et d’un boa tous les deux en fourrure et qui, assise bien droite, tendait vers le spectateur un lourd manchon de fourrure où tout son avant-bras avait disparu. Le regard de Gregor se tourna ensuite vers la fenêtre, et le temps maussade - on entendait les gouttes de pluie frapper le rebord en zinc - le rendit tout mélancolique. « Et si je redormais un peu et oubliais toutes ces sottises ? » se dit-il ; mais c’était absolument irréalisable, car il avait l’habitude de dormir sur le côté droit et, dans l’état où il était à présent, il était incapable de se mettre dans cette position. En se réveillant', '2022-11-21 18:21:07', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_commentator` int(11) NOT NULL,
  `id_story` int(11) DEFAULT NULL,
  `id_book` int(11) DEFAULT NULL,
  `id_chapter` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `id_commentator`, `id_story`, `id_book`, `id_chapter`, `comment`, `date_created`) VALUES
(26, 7, NULL, 4, NULL, 'Salut', '2022-11-29 15:34:45'),
(27, 7, 0, 5, 0, 'Un petit test sur le livre &quot;Le garçon d&#039;à côté&quot;.', '2022-11-29 17:22:11'),
(28, 7, 0, 5, 0, 'Un deuxième', '2022-11-29 17:24:45'),
(29, 7, 0, 9, 0, 'Emouvant !', '2022-11-29 18:23:08'),
(30, 7, 0, 9, 0, 'Vraiment !', '2022-11-29 18:53:52'),
(31, 7, 1, 0, 0, 'Good', '2022-11-29 19:44:33'),
(32, 7, 0, 0, 1, 'un texte particulièrement bien élaboré', '2022-11-29 20:02:43'),
(33, 6, 0, 6, 0, 'Voici mon commentaire\r\n', '2022-12-01 20:32:52'),
(34, 6, 0, 6, 0, 'Deuxieme commentaire', '2022-12-01 21:11:46'),
(35, 6, 0, 6, 0, 'ugiés fuyant à pied vers la côte de la mer Baltique devant l&#039;avancée des troupes soviétiques, quatre adolescents sont réunis par le destin pour affronter le froid, la faim, la peur, les bombes... Tous partagent un même but : embarquer sur le Wilhelm Gustloff, un énorme navire promesse de liberté...Ruta Sepetys révèle la plus grande tragédie de l&#039;histoire maritime, qui a fait six fois plus de victimes que le Titanic. Cette catastrophe méconnue lui inspire une vibrante histoire d&#039;amour, de courage et d&#039;amitié. Lumineux, captivant et bouleversant d&#039;humanité.', '2022-12-01 22:27:58'),
(36, 7, 1, 0, 0, 'Incredibile !!!', '2022-12-02 18:19:14');

-- --------------------------------------------------------

--
-- Structure de la table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_story` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `library`
--

INSERT INTO `library` (`id`, `id_user`, `id_story`) VALUES
(4, 2, 4),
(5, 2, 5),
(10, 2, 1),
(12, 7, 1),
(13, 7, 4),
(14, 7, 5),
(17, 6, 4),
(18, 7, 6),
(19, 7, 8);

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `id_liker` int(11) NOT NULL,
  `id_story` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `id_chapter` int(11) NOT NULL,
  `likes` tinyint(1) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`id`, `id_liker`, `id_story`, `id_book`, `id_chapter`, `likes`, `date_created`) VALUES
(1, 7, 0, 4, 0, 1, '2022-11-29 16:51:36'),
(2, 7, 0, 3, 0, 1, '2022-11-29 17:13:22'),
(3, 7, 0, 5, 0, 1, '2022-11-29 17:13:28'),
(4, 7, 0, 6, 0, 0, '2022-11-29 17:44:39'),
(5, 7, 0, 9, 0, 0, '2022-11-29 18:52:03'),
(6, 7, 0, 1, 0, 1, '2022-11-29 19:38:41'),
(7, 7, 1, 0, 0, 0, '2022-11-29 19:40:00'),
(8, 7, 0, 0, 1, 0, '2022-11-29 20:02:06'),
(9, 6, 0, 6, 0, 1, '2022-12-01 20:21:42');

-- --------------------------------------------------------

--
-- Structure de la table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `id_reporter` int(11) NOT NULL,
  `id_reported` int(11) DEFAULT NULL,
  `id_book` int(11) DEFAULT NULL,
  `id_story` int(11) DEFAULT NULL,
  `id_chapter` int(11) DEFAULT NULL,
  `reason` varchar(255) NOT NULL,
  `fixed` tinyint(1) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `story`
--

CREATE TABLE `story` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `target_reader` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `synopsis` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `story`
--

INSERT INTO `story` (`id`, `id_user`, `target_reader`, `category`, `title`, `synopsis`, `photo`, `status`, `language`, `date_created`) VALUES
(1, 2, '35-70 ans', 'Poésie', 'Olivier', 'Regardez mon oliveraie !', '1--Olivier.jpg', 'Brouillon', 'Français', '2022-11-19 01:28:06'),
(4, 1, '12-18 ans', 'Nouvelles', 'Bellissimo Canyon', 'Waouw Incredibile !', '1--BellissimoCanyon.jpg', 'Brouillon', 'Français', '2022-11-19 02:21:16'),
(5, 6, '12-18 ans', 'Roman', 'Nymphéa', 'OUAOE', '6-Nymphéa-637910db9f109.jpg', '', 'Français', '2022-11-19 18:22:35'),
(6, 7, 'Public mâture (+18 ans)', 'Nouvelles', 'Métamorphose', 'Un homme se réveille dans a chambre avec l&#039;aspect physique d&#039;un cafard', '7-Métamorphose-637baf0b8af5e.jpg', '', 'Français', '2022-11-21 18:02:03'),
(7, 7, 'Public mâture (+18 ans)', 'Nouvelles', 'Métamorphose', 'Un homme se réveille dans a chambre avec l&#039;aspect physique d&#039;un cafard', '7-Métamorphose-637bafdde2856.jpg', '', 'Français', '2022-11-21 18:05:33'),
(8, 13, 'Jeûne adulte (18-25 ans)', 'Journal', 'Journal', 'Journal de mes quelques jours', '13-Journal-638387de27457.jpg', '', 'Français', '2022-11-27 16:53:02');

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `target_reader`
--

CREATE TABLE `target_reader` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `target_reader`
--

INSERT INTO `target_reader` (`id`, `title`) VALUES
(16, 'Enfants (5-12 ans)'),
(17, 'Adolescents (12-18 ans)'),
(18, 'Jeûne adulte (18-25 ans)'),
(22, 'Public mâture (+18 ans)'),
(23, '+25 ans'),
(24, 'Tout public');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `roles` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `photo_profile` varchar(255) DEFAULT NULL,
  `photo_banner` varchar(255) DEFAULT NULL,
  `way` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `gender` enum('h','f','autre') NOT NULL DEFAULT 'autre',
  `date_registration` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `roles`, `lastname`, `firstname`, `pseudo`, `email`, `password`, `birthday`, `photo_profile`, `photo_banner`, `way`, `address`, `city`, `postal_code`, `country`, `gender`, `date_registration`) VALUES
(1, 'ROLE_ADMIN', 'Vaillant', 'Dounia', 'Una', 'dounia.vaillant@gmail.com', '$2y$10$Cy/yzXFYlSirtG1hsC6AsOFDAwj3EvfOXRek.oB/vO7DNU3YTN6Pa', '2002-02-08', '7-profile-211116-637b98e8d34cb.jpg', '7-banner-22111645-637cee994fa3f.jpg', '10', 'rue Hemet', 'Aubervilliers', 93300, 'France', 'f', '2022-11-21 14:51:46'),
(2, 'ROLE_MODO', 'Doe', 'John', 'jd', 'jd@gmail.com', '$2y$10$RX/wHE5rbLGElBD1rwuZWeODwDGof2Ffb1VWHTTLHzyyh6sQNHjIW', '2014-03-03', '2-profile-221114-637ccbeb9f740.jpg', '2-banner-22111423-637ccd3452bbd.jpg', '10', 'rue Albert Camus', 'Aubervilliers', 93300, 'France', 'h', '2022-11-11 14:37:30'),
(6, 'ROLE_USER', 'Lock', 'Elizabeth', 'Lizzie', 'll@gmail.com', '$2y$10$P069otcWB4QRfGvZxTiTd.b8AWe8FE3fGOL2OqmxxRltEo/j4NOmW', '1976-08-14', NULL, NULL, '18', 'rue du Fossé des Tanneurs', 'Strasbourg', 67000, 'France', 'f', '2022-11-19 17:55:44'),
(8, 'ROLE_USER', 'Morgan', 'William Henry', 'WilliamHenryMorgan', 'whm@gmail.com', '$2y$10$Cy/yzXFYlSirtG1hsC6AsOFDAwj3EvfOXRek.oB/vO7DNU3YTN6Pa', '2012-02-09', '8-profile-202223112236-637e925273cb6.jpg', '', '11', 'route de Lyon', 'Paris', 75012, 'France', 'h', '2022-11-22 13:17:26'),
(10, 'ROLE_ADMIN', 'test', 'test', 'test', 'test2@gmail.com', '$2y$10$Cy/yzXFYlSirtG1hsC6AsOFDAwj3EvfOXRek.oB/vO7DNU3YTN6Pa', '2000-02-09', '10-profile-202223112237-637e92871d5a3.jpg', '10-banner-202223112237-637e92871cec4.jpg', '12', 'test', 'test', 93000, 'France', 'h', '2022-11-22 13:17:26'),
(12, 'ROLE_USER', 'Donovan', 'Stephen', 'stephenDonovan', 'sd@gmail.com', '$2y$10$YOuT4oePa3VqSF5Uy9l08uxdYlCeQ/tueWMiTeyjYnVe6n9Tm4H.G', '1976-08-07', 'photoProfileDefault.png', NULL, '10', 'rue Hemet', 'Aubervilliers', 93300, 'France', 'h', '2022-11-27 14:07:40'),
(13, 'ROLE_USER', 'Horton', 'Mary', 'maryHorton', 'mh@gmail.com', '$2y$10$FI.5jqvyRXq.YWQSZU91o..qtUDmXpCc2Msodj/PdC8zokPzfh9z.', '1963-12-09', '13-profile-271115-6383703641cd0.jpg', '13-banner-27111512-6383703641574.jpg', '5', 'cours Jean Jaures', 'Saint-Pierre-Du-Perray', 91280, 'France', 'f', '2022-11-27 15:05:17');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `book_story_tag`
--
ALTER TABLE `book_story_tag`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `target_reader`
--
ALTER TABLE `target_reader`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `book_story_tag`
--
ALTER TABLE `book_story_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `story`
--
ALTER TABLE `story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `target_reader`
--
ALTER TABLE `target_reader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
