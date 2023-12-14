-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2023 at 07:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banaterra`
--

-- --------------------------------------------------------

--
-- Table structure for table `autori`
--

CREATE TABLE `autori` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `b_date` date NOT NULL,
  `d_date` date NOT NULL,
  `about` text NOT NULL,
  `active` int(11) NOT NULL,
  `cnt` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `autori`
--

INSERT INTO `autori` (`id`, `name`, `lang_id`, `b_date`, `d_date`, `about`, `active`, `cnt`) VALUES
(1, 'Gustave Flaubert', 77, '1821-12-12', '1880-05-08', '(12 decembrie 1821, Rouen, Franța – 8 mai 1880, Croisset, Canteleu, Normandia Superioară, Franța) romancier și dramaturg francez, cunoscut mai ales datorită romanului Madame Bovary (Doamna Bovary) operă capitală pentru literatura secolului al XIX-lea.', 1, 3),
(2, 'Felix Aderca', 77, '1891-03-26', '1962-12-12', 'Froim Zelig Adercu (26 martie 1891, Puiești⁠, județul Tutova, România – 12 decembrie 1962, București⁠, Republica Populară Română) prozator, romancier, poet, dramaturg, estetician, eseist și critic literar român, de origine evreiască, considerat ca un reprezentant al modernismului literar în cadrul literaturii române.', 1, 0),
(3, 'Aleksandr Herzen', 77, '1812-04-06', '1870-01-21', 'Aleksandr Ivanovici Herzen (6 aprilie 1812 - 21 ianuarie 1870) prozator, filozof și democrat-revoluționar rus.', 1, 2),
(4, ' Samuel Johnson', 77, '1709-09-18', '1784-12-13', 'numit adesea Dr. Johnson (18 septembrie 1709 - 13 decembrie 1784), scriitor englez care a adus contribuții durabile în calitate de poet, dramaturg, eseist, moralist, critic, biograf, editor și lexicograf.', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lang`
--

CREATE TABLE `lang` (
  `lang_id` tinyint(3) UNSIGNED NOT NULL,
  `code` char(3) NOT NULL,
  `name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `native` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `lang`
--

INSERT INTO `lang` (`lang_id`, `code`, `name`, `native`, `active`) VALUES
(1, 'af', 'Afrikaans', 'Afrikaans', 0),
(2, 'sq', 'Albanian', 'shqip', 0),
(3, 'am', 'Amharic', 'አማርኛ', 0),
(4, 'ar', 'Arabic', 'العربية', 1),
(5, 'an', 'Aragonese', 'aragonés', 0),
(6, 'hy', 'Armenian', 'հայերեն', 1),
(7, 'ast', 'Asturian', 'asturianu', 0),
(8, 'az', 'Azerbaijani', 'azərbaycan dili', 0),
(9, 'eu', 'Basque', 'euskara', 0),
(10, 'be', 'Belarusian', 'беларуская', 0),
(11, 'bn', 'Bengali', 'বাংলা', 0),
(12, 'bs', 'Bosnian', 'bosanski', 0),
(13, 'br', 'Breton', 'brezhoneg', 0),
(14, 'bg', 'Bulgarian', 'български', 0),
(15, 'ca', 'Catalan', 'català', 0),
(17, 'zh', 'Chinese', '中文', 0),
(18, 'co', 'Corsican', 'Corsican', 0),
(19, 'hr', 'Croatian', 'hrvatski', 0),
(20, 'cs', 'Czech', 'čeština', 0),
(21, 'da', 'Danish', 'dansk', 0),
(22, 'nl', 'Dutch', 'Nederlands', 0),
(23, 'en', 'English', 'English', 1),
(24, 'eo', 'Esperanto', 'esperanto', 0),
(25, 'et', 'Estonian', 'eesti', 0),
(26, 'fo', 'Faroese', 'føroyskt', 0),
(27, 'fil', 'Filipino', 'Filipino', 0),
(28, 'fi', 'Finnish', 'suomi', 0),
(29, 'fr', 'French', 'français', 1),
(30, 'gl', 'Galician', 'galego', 0),
(31, 'ka', 'Georgian', 'ქართული', 0),
(32, 'de', 'German', 'Deutsch', 0),
(33, 'el', 'Greek', 'Ελληνικά', 0),
(34, 'gn', 'Guarani', 'Guarani', 0),
(35, 'gu', 'Gujarati', 'ગુજરાતી', 0),
(36, 'ha', 'Hausa', 'Hausa', 0),
(37, 'haw', 'Hawaiian', 'ʻŌlelo Hawaiʻi', 0),
(38, 'he', 'Hebrew', 'עברית', 0),
(39, 'hi', 'Hindi', 'हिन्दी', 0),
(40, 'hu', 'Hungarian', 'magyar', 1),
(41, 'is', 'Icelandic', 'íslenska', 0),
(42, 'id', 'Indonesian', 'Indonesia', 0),
(43, 'ia', 'Interlingua', 'Interlingua', 0),
(44, 'ga', 'Irish', 'Gaeilge', 0),
(45, 'it', 'Italian', 'italiano', 0),
(46, 'ja', 'Japanese', '日本語', 0),
(47, 'kn', 'Kannada', 'ಕನ್ನಡ', 0),
(48, 'kk', 'Kazakh', 'қазақ тілі', 0),
(49, 'km', 'Khmer', 'ខ្មែរ', 0),
(50, 'ko', 'Korean', '한국어', 0),
(51, 'ku', 'Kurdish', 'Kurdî', 0),
(52, 'ky', 'Kyrgyz', 'кыргызча', 0),
(53, 'lo', 'Lao', 'ລາວ', 0),
(54, 'la', 'Latin', 'Latin', 0),
(55, 'lv', 'Latvian', 'latviešu', 0),
(56, 'ln', 'Lingala', 'lingála', 0),
(57, 'lt', 'Lithuanian', 'lietuvių', 0),
(58, 'mk', 'Macedonian', 'македонски', 0),
(59, 'ms', 'Malay', 'Bahasa Melayu', 0),
(60, 'ml', 'Malayalam', 'മലയാളം', 0),
(61, 'mt', 'Maltese', 'Malti', 0),
(62, 'mr', 'Marathi', 'मराठी', 0),
(63, 'mn', 'Mongolian', 'монгол', 0),
(64, 'ne', 'Nepali', 'नेपाली', 0),
(65, 'no', 'Norwegian', 'norsk', 0),
(68, 'oc', 'Occitan', 'Occitan', 0),
(69, 'or', 'Oriya', 'ଓଡ଼ିଆ', 0),
(70, 'om', 'Oromo', 'Oromoo', 0),
(71, 'ps', 'Pashto', 'پښتو', 0),
(72, 'fa', 'Persian', 'فارسی', 0),
(73, 'pl', 'Polish', 'polski', 0),
(74, 'pt', 'Portuguese', 'português', 0),
(75, 'pa', 'Punjabi', 'ਪੰਜਾਬੀ', 0),
(76, 'qu', 'Quechua', 'Quechua', 0),
(77, 'ro', 'Romanian', 'română', 1),
(78, 'rm', 'Romansh', 'rumantsch', 0),
(79, 'ru', 'Russian', 'русский', 0),
(80, 'gd', 'Scottish Gaelic', 'Scottish Gaelic', 0),
(81, 'sr', 'Serbian', 'српски', 0),
(82, 'sh', 'Serbo-Croatian', 'Srpskohrvatski', 0),
(83, 'sn', 'Shona', 'chiShona', 0),
(84, 'sd', 'Sindhi', 'Sindhi', 0),
(85, 'si', 'Sinhala', 'සිංහල', 0),
(86, 'sk', 'Slovak', 'slovenčina', 0),
(87, 'sl', 'Slovenian', 'slovenščina', 0),
(88, 'so', 'Somali', 'Soomaali', 0),
(89, 'st', 'Southern Sotho', 'Southern Sotho', 0),
(90, 'es', 'Spanish', 'español', 0),
(91, 'su', 'Sundanese', 'Sundanese', 0),
(92, 'sw', 'Swahili', 'Kiswahili', 0),
(93, 'sv', 'Swedish', 'svenska', 0),
(94, 'tg', 'Tajik', 'тоҷикӣ', 0),
(95, 'ta', 'Tamil', 'தமிழ்', 0),
(96, 'tt', 'Tatar', 'Tatar', 0),
(97, 'te', 'Telugu', 'తెలుగు', 0),
(98, 'th', 'Thai', 'ไทย', 0),
(99, 'ti', 'Tigrinya', 'ትግርኛ', 0),
(100, 'to', 'Tongan', 'lea fakatonga', 0),
(101, 'tr', 'Turkish', 'Türkçe', 0),
(102, 'tk', 'Turkmen', 'Turkmen', 0),
(103, 'tw', 'Twi', 'Twi', 0),
(104, 'uk', 'Ukrainian', 'українська', 0),
(105, 'ur', 'Urdu', 'اردو', 0),
(106, 'ug', 'Uyghur', 'Uyghur', 0),
(107, 'uz', 'Uzbek', 'o‘zbek', 0),
(108, 'vi', 'Vietnamese', 'Tiếng Việt', 0),
(109, 'wa', 'Walloon', 'wa', 0),
(110, 'cy', 'Welsh', 'Cymraeg', 0),
(112, 'xh', 'Xhosa', 'Xhosa', 0),
(113, 'yi', 'Yiddish', 'Yiddish', 0),
(114, 'yo', 'Yoruba', 'Èdè Yorùbá', 0),
(115, 'zu', 'Zulu', 'isiZulu', 0),
(116, 'rom', 'Romani', 'Rromani ćhib', 0);

-- --------------------------------------------------------

--
-- Table structure for table `longeviv`
--

CREATE TABLE `longeviv` (
  `longeviv_id` int(10) UNSIGNED NOT NULL,
  `type` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `det` text NOT NULL,
  `age` decimal(6,1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `longeviv`
--

INSERT INTO `longeviv` (`longeviv_id`, `type`, `name`, `det`, `age`) VALUES
(1, 1, 'Jeanne Calment', 'Female', 122.5),
(2, 1, 'Jiroemon Kimura', 'Male', 116.0),
(3, 2, 'Mere mortal', 'Homo sapiens', 120.0),
(4, 2, 'Nahor', 'Homo sapiens', 148.0),
(5, 2, 'Abraham', 'Homo sapiens', 175.0),
(6, 2, 'Terah', 'Homo sapiens', 205.0),
(7, 2, 'Serug', 'Homo sapiens', 230.0),
(8, 2, 'Peleg', 'Homo sapiens', 239.0),
(9, 2, 'Reu', 'Homo sapiens', 239.0),
(10, 2, 'Enoch', 'Homo sapiens', 365.0),
(11, 2, 'Shelah', 'Homo sapiens', 433.0),
(12, 2, 'Arphaxad', 'Homo sapiens', 438.0),
(13, 2, 'Eber', 'Homo sapiens', 464.0),
(14, 2, 'Shem', 'Homo sapiens', 600.0),
(15, 2, 'Lamech', 'Homo sapiens', 777.0),
(16, 2, 'Mahalalel', 'Homo sapiens', 895.0),
(17, 2, 'Enosh', 'Homo sapiens', 905.0),
(18, 2, 'Kenan', 'Homo sapiens', 910.0),
(19, 2, 'Seth', 'Homo sapiens', 912.0),
(20, 2, 'Adam', 'Homo sapiens', 930.0),
(21, 2, 'Noah', 'Homo sapiens', 950.0),
(22, 2, 'Jared', 'Homo sapiens', 962.0),
(23, 2, 'Methuselah', 'Homo sapiens', 969.0),
(24, 3, 'Cocky Bennett', 'Sulphur-crested cockatoo (Cacatua galerita)', 120.0),
(25, 3, 'Eastern box turtle ', 'Terrapene carolina', 135.0),
(26, 3, 'Timothy', 'Greek tortoise (Testudo graeca)', 165.0),
(27, 3, 'Herriet', 'Galápagos giant tortoise (Chelonoidis niger)', 175.0),
(28, 3, 'Tu\'i Malila', 'Radiated tortoise (Astrochelys radiata)', 188.0),
(29, 3, 'Jonathan', 'Seychelles giant tortoise (Aldabrachelys gigantea hololissa)', 190.0),
(30, 3, 'Rougheye rockfish ', 'Sebastes aleutianus', 200.0),
(31, 3, 'Red sea urchin ', 'Strongylocentrotus franciscanus', 200.0),
(32, 3, 'Adwaita', 'Aldabra giant tortoise (Aldabrachelys gigantea)', 255.0),
(33, 3, 'Greenland shark ', 'Somniosus microcephalus', 400.0),
(34, 3, 'Ocean quahog clam', 'Arctica islandica', 500.0),
(35, 4, 'Italus', 'Heldreich\'s pine (Pinus heldreichii)', 1200.0),
(36, 4, 'Algarrobo Abuelo', 'Algarrobo (Prosopis chilensis)', 1200.0),
(37, 4, 'Te Matua Ngahere', 'Kauri (Agathis australis)', 1300.0),
(38, 4, 'Aubépines', 'Common hawthorn (Crataegus monogyna)', 1500.0),
(39, 4, 'Jardine Juniper', 'Rocky Mountain juniper (Juniperus scopulorum)', 1500.0),
(40, 4, 'FL117', 'Northern whitecedar (Thuja occidentalis)', 1650.0),
(41, 4, 'RCR 1', 'Foxtail pine (Pinus balfouriana)', 1650.0),
(42, 4, 'Granit oak', 'Pedunculate oak (Quercus robur)', 1670.0),
(43, 4, 'KET 3996', 'Limber pine (Pinus flexilis)', 1700.0),
(44, 4, 'Kongeegen', 'Pedunculate oak (Quercus robur)', 1750.0),
(45, 4, 'Stelmužė Oak', 'Pedunculate oak (Quercus robur)', 1750.0),
(46, 4, 'Tāne Mahuta \"God of the Forest\"', 'Kauri (Agathis australis)', 1800.0),
(47, 4, 'Miles Juniper', 'Sierra juniper (Juniperus grandis)', 1800.0),
(48, 4, 'Jōmon Sugi', 'Sugi (Cryptomeria japonica)', 1800.0),
(49, 4, 'Methuselah', 'Coast redwood (Sequoia sempervirens)', 1800.0),
(50, 4, 'Araucaria Madre', 'Araucaria araucana', 1800.0),
(51, 4, 'Koca Katran', 'Lebanon cedar (Cedrus libani)', 2000.0),
(52, 4, 'Lady Liberty', 'Bald cypress (Taxodium distichum)', 2000.0),
(53, 4, 'Tnjri', 'Oriental plane (Platanus orientalis)', 2000.0),
(54, 4, 'Stara Maslina', 'European olive tree (Olea europea)', 2000.0),
(55, 4, 'The Pechanga Great Oak Tree', 'Coast live oak (Quercus agrifolia)', 2000.0),
(56, 4, 'Tejo Milenario', 'Yew (Taxus baccata)', 2000.0),
(57, 4, 'Houkisugi at Nakagawa', 'Japanese cedar (Cryptomeria japonica)', 2000.0),
(58, 4, 'BBL 2', 'Foxtail pine (Pinus balfouriana)', 2100.0),
(59, 4, 'Oliveira de Santa Luzia', 'European olive tree (Olea europea)', 2200.0),
(60, 4, 'Bennett Juniper', 'Sierra juniper (Juniperus grandis) ', 2200.0),
(61, 4, 'Jaya Sri Maha Bodhi', 'Sacred fig (Ficus religiosa)', 2300.0),
(62, 4, 'Kayano Ōsugi', 'Japanese cedar (Cryptomeria japonica)', 2300.0),
(63, 4, 'Panke Baobab', 'African baobab (Adansonia digitata)', 2400.0),
(64, 4, 'CB-90-11', 'Rocky Mountain bristlecone pine (Pinus aristata) ', 2450.0),
(65, 4, 'Mother of the Forest', 'Giant sequoia (Sequoiadendron giganteum)', 2500.0),
(66, 4, 'Sarv Zibad ', 'Mediterranean cypress (Cupressus sempervirens)', 2500.0),
(67, 4, 'Ulleungdo Hyangnamu', 'Chinese juniper (Juniperus chinensis)', 2500.0),
(68, 4, 'BLK227', 'Bald cypress (Taxodium distichum)', 2600.0),
(69, 4, 'Scofield Juniper', 'Sierra juniper (Juniperus grandis) ', 2650.0),
(70, 4, 'General Sherman', 'Giant sequoia (Sequoiadendron giganteum)', 2700.0),
(71, 4, 'Oliveira de Santa Iria de Azóia', 'European olive tree (Olea europea)', 2850.0),
(72, 4, 'Elia Vouvon', 'European olive tree (Olea europea)', 3000.0),
(73, 4, 'Castagnu dê Centu Cavaddi', 'Sweet chestnut (Castanea sativa)', 3000.0),
(74, 4, 'Great Camphor of Takeo', 'Camphor Tree (Cinnamomum camphora)', 3000.0),
(75, 4, 'Fortingall Yew', 'Common yew (Taxus baccata)', 3000.0),
(76, 4, 'Alishan Sacred Tree', 'Formosan cypress (Chamaecyparis formosensis)', 3000.0),
(77, 4, 'S\'Ozzastru', 'European olive tree (Olea europea)', 3000.0),
(78, 4, 'Patriarca da Floresta', 'Jequitibá-rosa (Cariniana legalis)', 3000.0),
(79, 4, 'Raintree', 'Great Basin bristlecone pine (Pinus longaeva)', 3000.0),
(80, 4, 'The President', 'Giant sequoia (Sequoiadendron giganteum)', 3200.0),
(81, 4, 'Oliveira do Mouchão', 'European olive tree (Olea europea)', 3350.0),
(82, 4, 'The Senator', 'Pond cypress (Taxodium ascendens)', 3500.0),
(83, 4, 'Ballyconnell Yew ', 'Yew (Taxus baccata)', 4000.0),
(84, 4, 'Gümeli Porsuğu', 'Yew (Taxus baccata)', 4100.0),
(85, 4, 'Llangernyw Yew', 'Common yew (Taxus baccata)', 4500.0),
(86, 4, 'Sarv-e Abarkuh', 'Mediterranean cypress (Cupressus sempervirens)', 4500.0),
(87, 4, 'Prometheus', 'Great Basin bristlecone pine (Pinus longaeva)', 4900.0),
(88, 4, 'Alerce Milenario', 'Patagonian cypress (Fitzroya cupressoides)', 5450.0),
(89, 4, 'Sisters Olive Trees of Noah', 'Olive (Olea europaea)', 6000.0),
(90, 4, 'Jōmon Sugi', 'Japanese cedar (Cryptomeria japonica)', 6000.0),
(91, 4, 'Mongarlowe mallee ', 'Mongarlowe mallee (Eucalyptus recurva)', 8000.0),
(92, 4, 'Old Tjikko', 'Norway spruce (Picea abies)', 9500.0),
(93, 4, 'Old Rasmus', 'Norway spruce (Picea abies)', 9500.0),
(94, 4, 'Pando', 'Quaking aspen (Populus tremuloides)', 10000.0),
(95, 4, 'King Clone', 'Creosote bush (Larrea tridentata)', 11000.0),
(96, 4, 'Jurupa Oak', 'Palmer oak (Quercus palmeri)', 13000.0);

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `quote` text NOT NULL,
  `tag_ids` int(11) NOT NULL,
  `aut_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quote_dep` int(11) NOT NULL DEFAULT 0,
  `active` tinyint(3) NOT NULL DEFAULT 1,
  `req_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `quote`, `tag_ids`, `aut_id`, `lang_id`, `user_id`, `quote_dep`, `active`, `req_id`) VALUES
(1, 'Morala artei stă chiar în frumusețea ei.', 1, 1, 77, 2, 0, 1, 0),
(3, 'Aș muri de râs de cum un om îl judecă pe altul, dacă această priveliște nu mi-ar provoca milă.', 0, 1, 77, 2, 0, 1, 0),
(4, 'Ca să ai talent, trebuie să fii sigur că-l poți stăpâni.', 0, 1, 77, 2, 0, 1, 0),
(5, 'Morala artei stă chiar în frumusețea ei. Modificare', 1, 1, 77, 2, 0, 0, 0),
(6, 'Morala artei stă chiar în frumusețea ei.', 1, 1, 77, 2, 0, 0, 0),
(7, 'E ușor de spus că singurul vinovat de soartă omului e el însuși, dar cum poți aprecia și cântări partea de vină a omului și cea a mediului în care trăiește?', 1, 3, 77, 2, 0, 1, 0),
(8, 'test', 1, 2, 77, 3, 0, 0, 0),
(9, 'Consider că starea poporului a cărui tânără generație nu are tinerețe e o mare nenorocire; noi am înțeles deja că o singură tinerețe nu este de ajuns pentru aceasta.', 0, 3, 77, 2, 0, 1, 0),
(10, 'Ce altceva este istoria omenirii, dacă nu o povestire lungă despre idei nerealizate și sperante neîmplinite?', 0, 4, 77, 2, 0, 1, 0),
(16, 'What else is human history but a long story of unrealized ideas and unfulfilled hopes?', 0, 4, 23, 2, 10, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `action_type` varchar(10) NOT NULL,
  `modify_type` varchar(20) NOT NULL,
  `old_id` int(11) NOT NULL,
  `new_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `status`, `action_type`, `modify_type`, `old_id`, `new_id`, `user_id`) VALUES
(1, 'online', 'add', 'quotes', 0, 1, 2),
(2, 'online', 'add', 'autori', 0, 2, 2),
(3, 'online', 'add', 'quotes', 0, 3, 2),
(4, 'online', 'add', 'quotes', 0, 4, 2),
(5, 'online', 'edit', 'quotes', 1, 5, 2),
(6, 'online', 'edit', 'quotes', 1, 6, 2),
(7, 'online', 'add', 'autori', 0, 3, 2),
(8, 'online', 'add', 'quotes', 3, 7, 2),
(9, 'denied', 'add', 'quotes', 2, 8, 3),
(10, 'online', 'add', 'quotes', 0, 9, 2),
(11, 'online', 'add', 'autori', 0, 4, 2),
(12, 'online', 'add', 'quotes', 0, 10, 2),
(13, 'online', 'edit', 'quotes', 10, 11, 2),
(14, 'online', 'translate', 'quotes', 0, 12, 2),
(15, 'online', 'translate', 'quotes', 0, 13, 2),
(16, 'online', 'translate', 'quotes', 0, 14, 2),
(17, 'online', 'translate', 'quotes', 0, 15, 2),
(18, 'online', 'translate', 'quotes', 0, 16, 2);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `edit` int(11) NOT NULL,
  `plus` int(11) NOT NULL,
  `del` int(11) NOT NULL,
  `lang` int(11) NOT NULL,
  `tag` int(11) NOT NULL,
  `auth` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `edit`, `plus`, `del`, `lang`, `tag`, `auth`) VALUES
(1, 'test', 1, 0, 0, 77, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `req_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `name`, `active`, `req_id`) VALUES
(1, 'Artă, literatură, estetică', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `gender` tinyint(3) NOT NULL,
  `active` tinyint(3) NOT NULL DEFAULT 1,
  `b_date` date NOT NULL,
  `lang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `role`, `gender`, `active`, `b_date`, `lang_id`) VALUES
(1, 'test@test.com', '$2y$10$ZHkZbRgXu2GySiw1utVlZuDAqvELZOVwCbEtXfE29/BH0mo0KDK9S', 1, 0, 1, '2023-11-02', 4),
(2, 'teste@test.com', '$2y$10$0CRzpRY9UxngmIFD1tlGsuRQhvdvjcUGTkscme1/sHXpB9xe8Ikgq', 0, 1, 1, '2023-11-02', 77),
(3, 'matei@test.com', '$2y$10$Lgt2dQfHUJQ3f8jRGjpuLOhwgj.Avsy22Aj2B/Q.uz9rSO.pLs0hG', 1, 1, 1, '2005-06-18', 77);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autori`
--
ALTER TABLE `autori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`lang_id`);

--
-- Indexes for table `longeviv`
--
ALTER TABLE `longeviv`
  ADD PRIMARY KEY (`longeviv_id`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autori`
--
ALTER TABLE `autori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lang`
--
ALTER TABLE `lang`
  MODIFY `lang_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `longeviv`
--
ALTER TABLE `longeviv`
  MODIFY `longeviv_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
