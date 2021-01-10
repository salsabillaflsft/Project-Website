-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 10:10 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musik`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id_artist` int(9) NOT NULL,
  `artist_name` varchar(50) DEFAULT NULL,
  `year_of_debute` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id_artist`, `artist_name`, `year_of_debute`) VALUES
(1, 'Ed_Sheeran', 2011),
(2, 'Kendrick_Lamar', 2012),
(3, 'Ariana_Grande', 2011),
(4, 'Beyonce', 2003),
(5, 'The_Weeknd', 2010),
(6, 'Drake', 2010),
(7, 'Rihanna', 2005),
(8, 'Sam_Smith', 2012),
(9, 'Kanye_West', 2004),
(10, 'Childish_Gambino', 2011),
(11, 'Adele', 2009),
(12, 'H.E.R', 2014),
(13, 'Daniel_Caesar', 2017),
(14, 'Frank_Ocean', 2011),
(15, 'Mariah_Carey', 1990),
(16, 'Khalid', 2016),
(17, 'Tyler,the_Creator', 2011),
(18, 'Bruno_Mars', 2010),
(19, 'Coldplay', 2000),
(20, 'Whitney_Houston', 1985),
(21, 'Ne-yo', 2005),
(22, 'Post_Malone', 2016),
(23, 'Taylor_Swift', 2006),
(24, 'Chance_the_Rapper', 2012),
(25, 'Billie_Eilish', 2016),
(26, 'Justin_Bieber', 2009),
(27, 'The_1975', 2013),
(28, 'Arctic_Monkeys', 2005),
(29, 'SZA', 2014),
(30, 'Tame_Impala', 2010),
(31, 'Elephant_Kind', 2014),
(32, 'Barasuara', 2015),
(33, 'Kunto_Aji', 2014),
(34, 'Yura_Yunita', 2014),
(35, 'Nadin_Amizah', 2018),
(36, '.Feast', 2014),
(37, 'Hindia', 2018),
(38, 'Tulus', 2011),
(39, 'Raisa', 2011),
(40, 'Isyana_Sarasvati', 2014),
(41, 'Glenn_Fredly', 1998),
(42, 'GAC', 2012),
(43, 'The_Overtunes', 2013),
(44, 'Hivi', 2012),
(45, 'Pamungkas', 0),
(46, 'Ardhito Pramono', 2017),
(47, 'Efek Rumah Kaca', 2007),
(48, 'Stephanie Poetri', 2015),
(49, 'NIKI', 2014),
(50, 'Rich Brian', 2016),
(51, 'Selena Gomez', 2009),
(52, 'Dua Lipa', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(2) NOT NULL,
  `genre_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_genre`, `genre_name`) VALUES
(1, 'Jazz'),
(2, 'Gospel'),
(3, 'Blues'),
(4, 'Rhythm and Blues'),
(5, 'Funk'),
(7, 'Rock'),
(8, 'Metal, hardcore'),
(9, 'Electronic'),
(10, 'Reggae'),
(11, 'Hip-hop / Rap'),
(12, 'Pop');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(10) NOT NULL,
  `id_artist` int(9) NOT NULL,
  `album` varchar(50) DEFAULT NULL,
  `single` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `id_artist`, `album`, `single`) VALUES
(2, 1, '÷ (Divide) ', 'Shape of You'),
(3, 2, 'DAMN.', 'DNA.'),
(4, 3, 'Dangerous Woman', 'Dangerous Woman'),
(5, 6, 'Views', 'One Dance'),
(6, 8, 'Nirvana - EP', 'Nirvana'),
(7, 12, 'H.E.R Vol.1 - EP', 'Focus'),
(8, 16, 'American Teen', 'Location'),
(9, 14, 'Channel Orange', 'Thinking Bout You'),
(10, 4, 'I Am... Sasha Fierce', 'Halo'),
(11, 7, 'Unapologetic', 'Diamonds'),
(12, 5, 'My Dear Melancholy,', 'Call Out My Name'),
(13, 10, 'Summer Pack', 'Childish Gambino'),
(14, 13, 'Get You - Single', 'Japanese Denim'),
(15, 15, 'The Emancipation of Mimi', 'We Belong Together'),
(16, 51, 'Lose You To Love Me - Single', 'Lose You To Love Me'),
(17, 9, 'JESUS IS KING', 'Closed on Sunday'),
(18, 52, 'Don’t Start Now - Single', 'Don’t Start Now'),
(19, 33, 'Mantra Mantra', 'Rehat'),
(20, 36, 'Beberapa Orang Memaafkan', 'Kami Belum Tentu'),
(21, 31, 'The Greatest Ever', 'Better Days'),
(22, 42, 'RESONANCE', 'Sailor'),
(23, 38, 'Monokrom', 'Monokrom'),
(24, 39, 'You - Single', 'You'),
(25, 32, 'Taifun', 'Bahas Bahasa'),
(29, 12, 'vol.3', 'Carried Away'),
(31, 3, 'Yours Truly', 'Almost Is Never Enough'),
(36, 14, 'dhl', 'dhl');

-- --------------------------------------------------------

--
-- Table structure for table `lyrics`
--

CREATE TABLE `lyrics` (
  `id_lyrics` int(9) NOT NULL,
  `id_trans` int(9) NOT NULL,
  `desc_lyrics` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lyrics`
--

INSERT INTO `lyrics` (`id_lyrics`, `id_trans`, `desc_lyrics`) VALUES
(1, 125, '[Verse 1]\r\nI will leave my heart at the door\r\nI won\'t say a word\r\nThey\'ve all been said before, you know\r\nSo why don\'t we just play pretend\r\nLike we\'re not scared of what is coming next\r\nOr scared of having nothing left?\r\n\r\n[Pre-Chorus]\r\nLook, don\'t get me wrong\r\nI know there is no tomorrow\r\nAll I ask is\r\n\r\n[Chorus]\r\nIf this is my last night with you\r\nHold me like I\'m more than just a friend\r\nGive me a memory I can use\r\nTake me by the hand while we do\r\nWhat lovers do\r\nIt matters how this ends\r\n\'Cause what if I never love again?\r\n\r\n[Verse 2]\r\nI don\'t need your honesty\r\nIt\'s already in your eyes\r\nAnd I\'m sure my eyes, they speak for me\r\nNo one knows me like you do\r\nAnd since you\'re the only one that mattered\r\nTell me, who do I run to?\r\n\r\n[Pre-Chorus]\r\nLook, don\'t get me wrong\r\nI know there is no tomorrow\r\nAll I ask is\r\n\r\n[Chorus]\r\nIf this is my last night with you\r\nHold me like I\'m more than just a friend\r\nGive me a memory I can use\r\nTake me by the hand while we do\r\nWhat lovers do\r\nIt matters how this ends\r\n\'Cause what if I never love again?\r\n\r\n[Bridge]\r\nLet this be our lesson in love\r\nLet this be the way we remember us\r\nI don\'t want to be cruel or vicious\r\nAnd I ain\'t asking for forgiveness\r\nAll I ask is\r\n\r\n[Chorus]\r\nIf this is my last night with you\r\nHold me like I\'m more than just a friend\r\nGive me a memory I can use\r\nTake me by the hand while we do\r\nWhat lovers do\r\nIt matters how this ends\r\n\'Cause what if I never love again?'),
(2, 128, '[Verse 1]\r\nThe club isn\'t the best place to find a lover\r\nSo the bar is where I go\r\nMe and my friends at the table doing shots\r\nDrinking fast and then we talk slow\r\nAnd you come over and start up a conversation with just me\r\nAnd trust me I\'ll give it a chance now\r\nTake my hand, stop, put Van the Man on the jukebox\r\nAnd then we start to dance, and now I\'m singing like\r\n\r\n[Pre-Chorus]\r\nGirl, you know I want your love\r\nYour love was handmade for somebody like me\r\nCome on now, follow my lead\r\nI may be crazy, don\'t mind me\r\nSay, boy, let\'s not talk too much\r\nGrab on my waist and put that body on me\r\nCome on now, follow my lead\r\nCome, come on now, follow my lead\r\n\r\n[Chorus]\r\nI\'m in love with the shape of you\r\nWe push and pull like a magnet do\r\nAlthough my heart is falling too\r\nI\'m in love with your body\r\nAnd last night you were in my room\r\nAnd now my bed sheets smell like you\r\nEvery day discovering something brand new\r\nI\'m in love with your body\r\nOh—I—oh—I—oh—I—oh—I\r\nI\'m in love with your body\r\nOh—I—oh—I—oh—I—oh—I\r\nI\'m in love with your body\r\nOh—I—oh—I—oh—I—oh—I\r\nI\'m in love with your body\r\nEvery day discovering something brand new\r\nI\'m in love with the shape of you\r\n\r\n[Verse 2]\r\nOne week in we let the story begin\r\nWe\'re going out on our first date\r\nYou and me are thrifty, so go all you can eat\r\nFill up your bag and I fill up a plate\r\nWe talk for hours and hours about the sweet and the sour\r\nAnd how your family is doing okay\r\nLeave and get in a taxi, then kiss in the backseat\r\nTell the driver make the radio play, and I\'m singing like\r\n\r\n[Pre-Chorus]\r\nGirl, you know I want your love\r\nYour love was handmade for somebody like me\r\nCome on now, follow my lead\r\nI may be crazy, don\'t mind me\r\nSay, boy, let\'s not talk too much\r\nGrab on my waist and put that body on me\r\nCome on now, follow my lead\r\nCome, come on now, follow my lead\r\n\r\n[Chorus]\r\nI\'m in love with the shape of you\r\nWe push and pull like a magnet do\r\nAlthough my heart is falling too\r\nI\'m in love with your body\r\nAnd last night you were in my room\r\nAnd now my bed sheets smell like you\r\nEvery day discovering something brand new\r\nI\'m in love with your body\r\nOh—I—oh—I—oh—I—oh—I\r\nI\'m in love with your body\r\nOh—I—oh—I—oh—I—oh—I\r\nI\'m in love with your body\r\nOh—I—oh—I—oh—I—oh—I\r\nI\'m in love with your body\r\nEvery day discovering something brand new\r\nI\'m in love with the shape of you\r\n\r\n[Bridge]\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\n\r\n[Chorus]\r\nI\'m in love with the shape of you\r\nWe push and pull like a magnet do\r\nAlthough my heart is falling too\r\nI\'m in love with your body\r\nLast night you were in my room\r\nAnd now my bed sheets smell like you\r\nEvery day discovering something brand new\r\nI\'m in love with your body\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nI\'m in love with your body\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nI\'m in love with your body\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nI\'m in love with your body\r\nEvery day discovering something brand new\r\nI\'m in love with the shape of you'),
(3, 114, 'I got, I got, I got, I got—\r\nLoyalty, got royalty inside my DNA\r\nCocaine quarter piece, got war and peace inside my DNA\r\nI got power, poison, pain and joy inside my DNA\r\nI got hustle though, ambition flow inside my DNA\r\nI was born like this, since one like this, immaculate conception\r\nI transform like this, perform like this, was Yeshua new weapon\r\nI don\'t contemplate, I meditate, then off your fucking head\r\nThis that put-the-kids-to-bed\r\nThis that I got, I got, I got, I got—\r\nRealness, I just kill shit ’cause it\'s in my DNA\r\nI got millions, I got riches buildin\' in my DNA\r\nI got dark, I got evil, that rot inside my DNA\r\nI got off, I got troublesome heart inside my DNA\r\nI just win again, then win again like Wimbledon, I serve\r\nYeah, that’s him again, the sound that engine in is like a bird\r\nYou see fireworks and Corvette tire skrrt the boulevard\r\nI know how you work, I know just who you are\r\nSee, you\'s a, you\'s a, you\'s a—\r\nBitch, your hormones prolly switch inside your DNA\r\nProblem is, all that sucker shit inside your DNA\r\nDaddy prolly snitched, heritage inside your DNA\r\nBackbone don\'t exist, born outside a jellyfish, I gauge\r\nSee, my pedigree most definitely don\'t tolerate the front\r\nShit I\'ve been through prolly offend you, this is Paula\'s oldest son\r\nI know murder, conviction\r\nBurners, boosters, burglars, ballers, dead, redemption\r\nScholars, fathers dead with kids and\r\nI wish I was fed forgiveness\r\nYeah, yeah, yeah, yeah, soldier’s DNA (Soldier’s DNA)\r\nBorn inside the beast, my expertise checked out in second grade\r\nWhen I was 9, on cell, motel, we didn\'t have nowhere to stay\r\nAt 29, I’ve done so well, hit cartwheel in my estate\r\nAnd I\'m gon\' shine like I\'m supposed to, antisocial extrovert\r\nAnd excellent mean the extra work\r\nAnd absentness what the fuck you heard\r\nAnd pessimists never struck my nerve\r\nAnd Nazareth gon’ plead his case\r\nThe reason my power\'s here on earth\r\nSalute the truth, when the prophet say\r\n \r\n[Bridge: Kendrick Lamar & Geraldo Rivera]\r\nI got loyalty, got royalty inside my DNA\r\nThis is why I say that hip hop has done more damage to young African Americans than racism in recent years\r\nI got loyalty, got royalty inside my DNA\r\nI live a better life, I\'m rollin\' several dice, fuck your life\r\nI got loyalty, got royalty inside my DNA\r\nI live a be-, fuck your life\r\n5, 4, 3, 2, 1\r\nThis is my heritage, all I\'m inheritin\'\r\nMoney and power, the maker of marriages\r\n \r\n[Verse 2]\r\nTell me somethin\'\r\nYou mothafuckas can\'t tell me nothin\'\r\nI\'d rather die than to listen to you\r\nMy DNA not for imitation\r\nYour DNA an abomination\r\nThis how it is when you in the Matrix\r\nDodgin\' bullets, reapin\' what you sow\r\nAnd stackin\' up the footage, livin\' on the go\r\nAnd sleepin\' in a villa\r\nSippin\' from a Grammy, walkin\' in the buildin\'\r\nDiamond in the ceilin\', marble on the floors\r\nBeach inside the window, peekin\' out the window\r\nBaby in the pool, godfather goals\r\nOnly Lord knows I\'ve been goin\' hammer\r\nDodgin\' paparazzi, freakin\' through the cameras\r\nEat at Four Daughters, Brock wearin\' sandals\r\nYoga on a Monday, stretchin\' to Nirvana\r\nWatchin\' all the snakes, curvin\' all the fakes\r\nPhone never on, I don\'t conversate\r\nI don\'t compromise, I just penetrate\r\nSex, money, murder—these are the breaks\r\nThese are the times, level number 9\r\nLook up in the sky, 10 is on the way\r\nSentence on the way, killings on the way\r\nMotherfucker, I got winners on the way\r\nYou ain\'t shit without a body on your belt\r\nYou ain\'t shit without a ticket on your plate\r\nYou ain\'t sick enough to pull it on yourself\r\nYou ain\'t rich enough to hit the lot and skate\r\nTell me when destruction gonna be my fate\r\nGonna be your fate, gonna be our faith\r\nPeace to the world, let it rotate\r\nSex, money, murder—our DNA\r\n'),
(4, 127, '[Verse 1]\r\nDon\'t need permission\r\nMade my decision to test my limits\r\n\'Cause it\'s my business, God as my witness\r\nStart what I finished\r\nDon\'t need no hold up\r\nTaking control of this kind of moment\r\nI\'m locked and loaded\r\nCompletely focused, my mind is open\r\n\r\n[Pre-Chorus]\r\nAll that you got\r\nSkin to skin, oh my God\r\nDon\'t you stop, boy\r\n\r\n[Chorus]\r\nSomethin\' \'bout you makes me feel like a dangerous woman\r\nSomethin\' \'bout, somethin\' \'bout, somethin\' \'bout you\r\nMakes me wanna do things that I shouldn\'t\r\nSomethin\' \'bout, somethin\' \'bout, somethin\' \'bout\r\n\r\n[Verse 2]\r\nNothing to prove and I\'m bulletproof and\r\nKnow what I\'m doing\r\nThe way we\'re movin\'\r\nLike introducing us to a new thing\r\nI wanna savor, save it for later\r\nThe taste, the flavor, \'cause I\'m a taker, \'cause I\'m a giver\r\nIt\'s only nature, I live for danger\r\n\r\n[Pre-Chorus]\r\nAll that you got\r\nSkin to skin, oh my God\r\nDon\'t ya stop, boy\r\n\r\n[Chorus]\r\nSomethin\' \'bout you makes me feel like a dangerous woman\r\nSomethin\' \'bout, somethin\' \'bout, somethin\' \'bout you\r\nMakes me wanna do things that I shouldn\'t\r\nSomethin\' \'bout, somethin\' \'bout, somethin\' \'bout you\r\n\r\n[Post-Chorus]\r\nAll girls wanna be like that\r\nBad girls underneath, like that\r\nYou know how I\'m feeling inside\r\nSomethin\' \'bout, somethin\' \'bout\r\nAll girls wanna be like that\r\nBad girls underneath, like that\r\nYou know how I\'m feeling inside\r\nSomethin\' \'bout, somethin\' \'bout\r\n\r\n[Bridge]\r\n(Hmm-hmm) (Ooh-ooh)\r\n\r\n[Chorus]\r\nSomethin\' \'bout you makes me feel like a dangerous woman\r\nSomethin\' \'bout, somethin\' \'bout, somethin\' \'bout you\r\nMakes me wanna do things that I shouldn\'t\r\nSomethin\' \'bout, somethin\' \'bout, somethin\' \'bout you\r\n\r\n[Post-Chorus]\r\nAll girls wanna be like that\r\nBad girls underneath like that\r\nYou know how I\'m feeling inside\r\nSomethin\' \'bout, somethin\' \'bout\r\nAll girls wanna be like that\r\nBad girls underneath like that\r\nYou know how I\'m feeling inside\r\nSomethin\' \'bout, somethin\' \'bout\r\n\r\n[Outro]\r\nYeah, there\'s somethin\' \'bout you boy\r\nYeah, there\'s somethin\' \'bout you boy\r\nYeah, there\'s somethin\' \'bout you boy\r\nYeah, there\'s somethin\' \'bout you boy\r\n(Somethin\' \'bout, somethin\' \'bout, somethin\' \'bout you)\r\nYeah, there\'s somethin\' \'bout you boy\r\nYeah, there\'s somethin\' \'bout you boy\r\nYeah, there\'s somethin\' \'bout you boy\r\nYeah, there\'s somethin\' \'bout you boy\r\n(Somethin\' \'bout, somethin\' \'bout, somethin\' \'bout you)'),
(5, 111, 'abcdefghsahfasiagwg'),
(6, 115, '[Verse 1]\r\nWe found each other\r\nI helped you out of a broken place\r\nYou gave me comfort\r\nBut falling for you was my mistake\r\n\r\n[Pre-Chorus]\r\nI put you on top, I put you on top\r\nI claimed you so proud and openly\r\nAnd when times were rough, when times were rough\r\nI made sure I held you close to me\r\n\r\n[Chorus]\r\nSo call out my name (call out my name)\r\nCall out my name when I kiss you so gently\r\nI want you to stay (want you to stay)\r\nI want you to stay even though you don\'t want me\r\nGirl, why can\'t you wait? (why can\'t you wait, baby?)\r\nGirl, why can\'t you wait \'til I fall out of love?\r\nWon\'t you call out my name? (call out my name)\r\nGirl, call out my name, and I\'ll be on my way and\r\nI\'ll be on my—\r\n\r\n[Verse 2]\r\nI said I didn\'t feel nothing, baby, but I lied\r\nI almost cut a piece of myself for your life\r\nGuess I was just another pit stop\r\n\'Til you made up your mind\r\nYou just wasted my time\r\n\r\n[Pre-Chorus]\r\nYou were on top, I put you on top\r\nI claimed you so proud and openly, babe\r\nAnd when times were rough, when times were rough\r\nI made sure I held you close to me\r\n\r\n[Chorus]\r\nSo call out my name (call out my name, baby)\r\nSo call out my name when I kiss you so gently (ohh)\r\nI want you to stay (I want you to stay)\r\nI want you to stay even though you don\'t want me\r\nGirl, why can\'t you wait? (girl, why can\'t you wait \'til I?)\r\nGirl, why can\'t you wait \'til I fall out of loving?\r\nBabe, call out my name (say call out my name, baby)\r\nJust call out my name and I\'ll be on my way\r\nGirl, I\'ll be on my—\r\n\r\n[Outro]\r\nOn my way, on my way\r\nOn my way, on my way, ooh\r\nOn my way, on my way, on my way\r\nOn my way, on my way, on my way\r\n(On my)\r\n'),
(7, 131, '[Intro: Kyla]\r\nBaby, I like your style\r\n\r\n[Verse 1: Drake]\r\nGrips on your waist, front way, back way\r\nYou know that I don\'t play\r\nStreets not safe but I never run away\r\nEven when I\'m away\r\nOti, oti\r\nThere\'s never much love when we go OT\r\nI pray to make it back in one piece\r\nI pray, I pray\r\n\r\n[Chorus: Drake]\r\nThat\'s why I need a one dance\r\nGot a Hennessy in my hand\r\nOne more time \'fore I go\r\nHigher powers taking a hold on me\r\nI need a one dance\r\nGot a Hennessy in my hand\r\nOne more time \'fore I go\r\nHigher powers taking a hold on me\r\n\r\n[Refrain: Kyla]\r\nBaby, I like your style\r\n\r\n[Verse 2: Drake]\r\nStrength and guidance\r\nAll that I\'m wishing for my friends\r\nNobody makes it from my ends\r\nI had to bust up the silence\r\nYou know you gotta stick by me\r\nSoon as you see the text, reply me\r\nI don\'t wanna spend time fighting\r\nWe\'ve got no time\r\n\r\n[Chorus: Drake]\r\nAnd that\'s why I need a one dance\r\nGot a Hennessy in my hand\r\nOne more time \'fore I go\r\nHigher powers taking a hold on me\r\nI need a one dance\r\nGot a Hennessy in my hand\r\nOne more time \'fore I go\r\nHigher powers taking a hold on me\r\n\r\n[Bridge: Wizkid]\r\nGot a pretty girl and she love me long time\r\nWine it, wine it, very long time\r\nOh yeah, very long time\r\nBack up, back up, back up and wine it\r\nBack up, back up and wine it, girl\r\nBack up, back up, back up and wine it\r\nOh yeah, very long time\r\nBack, up, back up and wine it, girl\r\n\r\n[Refrain: Kyla & Wizkid]\r\nTell me\r\nI need to know, where do you wanna go?\r\nCause if you\'re down, I\'ll take it slow\r\nMake you lose control\r\nWhere, where, where\r\nWhere, where, where, where\r\nOh yeah, very long time\r\nWhere, where, where\r\nBack, up, back up and wine it, girl\r\nWhere, where, where, where\r\nCause if you\'re down\r\nBack up, back up and\r\nCause if you\'re down\r\nBack up, back up and\r\nCause if you\'re down\r\nBack up, back up and\r\n\r\n[Chorus: Drake]\r\nI need a one dance\r\nGot a Hennessy in my hand\r\nOne more time \'fore I go\r\nHigher powers taking a hold on me\r\nI need a one dance\r\nGot a Hennessy in my hand\r\nOne more time \'fore I go\r\nHigher powers taking a hold on me'),
(8, 129, '[Intro]\r\nShine bright like a diamond\r\nShine bright like a diamond\r\n\r\n[Verse 1]\r\nFind light in the beautiful sea\r\nI choose to be happy\r\nYou and I, you and I\r\nWe\'re like diamonds in the sky\r\nYou\'re a shooting star I see\r\nA vision of ecstasy\r\nWhen you hold me, I\'m alive\r\nWe\'re like diamonds in the sky\r\n\r\n[Pre-Chorus]\r\nI knew that we\'d become one right away\r\nOh, right away\r\nAt first sight, I felt the energy of sun rays\r\nI saw the life inside your eyes\r\n\r\n[Chorus]\r\nSo shine bright, tonight\r\nYou and I\r\nWe\'re beautiful, like diamonds in the sky\r\nEye to eye\r\nSo alive\r\nWe\'re beautiful, like diamonds in the sky\r\n\r\n[Post-Chorus]\r\nShine bright like a diamond (Woah)\r\nShine bright like a diamond (Woah)\r\nShinin\' bright like a diamond\r\nWe\'re beautiful, like diamonds in the sky\r\nShine bright like a diamond (Woah)\r\nShine bright like a diamond (Woah)\r\nShinin\' bright like a diamond\r\nWe\'re beautiful, like diamonds in the sky\r\n\r\n[Verse 2]\r\nPalms rise to the universe\r\nAs we moonshine and molly\r\nFeel the warmth, we\'ll never die\r\nWe\'re like diamonds in the sky\r\nYou\'re a shooting star I see\r\nA vision of ecstasy\r\nWhen you hold me, I\'m alive\r\nWe\'re like diamonds in the sky\r\n\r\n[Pre-Chorus]\r\nAt first sight I felt the energy of sun rays\r\nI saw the life inside your eyes\r\n\r\n[Chorus]\r\nSo shine bright, tonight\r\nYou and I\r\nWe\'re beautiful, like diamonds in the sky\r\nEye to eye\r\nSo alive\r\nWe\'re beautiful, like diamonds in the sky\r\n\r\n[Post-Chorus]\r\nShine bright like a diamond (Woah)\r\nShine bright like a diamond (Woah)\r\nShinin\' bright like a diamond\r\nWe\'re beautiful, like diamonds in the sky\r\nShine bright like a diamond (Woah)\r\nShine bright like a diamond (Woah)\r\nShinin\' bright like a diamond\r\nWe\'re beautiful, like diamonds in the sky\r\n\r\n[Bridge]\r\nShine bright like a diamond\r\nShine bright like a diamond\r\nShine bright like a diamond\r\n\r\n[Chorus]\r\nSo shine bright, tonight\r\nYou and I\r\nWe\'re beautiful, like diamonds in the sky\r\nEye to eye\r\nSo alive\r\nWe\'re beautiful, like diamonds in the sky\r\n\r\n[Outro]\r\nShine bright like a diamond (Woah)\r\nShine bright like a diamond (Woah)\r\nShine bright like a diamond\r\nOh-oh, yeah\r\nShine bright like a diamond (Woah)\r\nShine bright like a diamond (Woah)\r\nShine bright like a diamond\r\nShine bright like a diamond'),
(9, 130, '[Verse 1]\r\nOh baby, oh baby, oh\r\nWe both know the truth\r\nIf it were the real me and you\r\nThis wouldn\'t be the right thing to do\r\nNow the room is all hazy\r\nWe\'re too lost in the fumes\r\nI feel like it\'s just me and you\r\nYeah we got nothing to lose\r\n \r\n[Pre-Chorus]\r\nIt\'s too late to run away from it all\r\nIt\'s too late to get away from it all\r\nI\'m done with running so\r\nI give in to you\r\n \r\n[Chorus]\r\nThis moment has caused a reaction\r\nResulting in a reattachment\r\nWill you take me to nirvana?\r\nI don\'t think this will last\r\nBut you\'re here in my arms\r\n \r\n[Verse 2]\r\nOh baby, oh baby, oh\r\nWe both feel the same\r\nI\'m not gonna give you my name\r\nAnd I don\'t think you want that to change\r\nWe\'re in this together\r\nWe don\'t know who we are\r\nEven if it\'s moving too fast\r\nMaybe we should take it too far\r\n \r\n[Pre-Chorus]\r\nIt\'s too late to run away from it all\r\nIt\'s too late to get away from it all\r\nI\'m done with running so\r\nI give in to you\r\n \r\n[Chorus]\r\nThis moment has caused a reaction\r\nResulting in a reattachment\r\nWill you take me to nirvana?\r\nI don\'t think this will last\r\nBut you\'re here in my arms\r\n \r\n[Half Chorus]\r\nWill you take me to nirvana?\r\nI don\'t think this will last\r\nCause you\'re here in my arms\r\nWill you take me to nirvana?\r\nI don\'t think this will last\r\nCause you\'re here in my arms'),
(10, 112, '[Pre-Chorus]\r\nYou feel like summertime\r\nYou took this heart of mine\r\nYoull be my valentine in the summer, in the summer\r\nYou are my only one\r\nJust dancin having fun\r\nOut in the shinin sun of the summer, of the summer\r\n\r\n[Chorus]\r\nDo love me, do love me, do\r\nDo love me, do love me, do (yeah)\r\nI love you\r\nDo love me, do love me, do\r\nDo love me, do love me, do (ohh)\r\nPut no one else above you\r\nDo love me, do love me, do\r\nDo love me, do love me, do (yeah)\r\nI need you\r\nDo love me, do love me, do\r\nDo love me, do love me, do (ohh)\r\nOh!\r\nDo love me, do love me, do\r\nDo love me, do love me, do\r\nI love you\r\nDo love me, do love me, do\r\nDo love me, do love me, do\r\nPut no one else above you\r\nDo love me, do love me, do (ohh)\r\nDo love me, do love me, do\r\nI need you\r\nDo love me, do love me, do\r\nDo love me, do love me, do\r\nHoo, oh!\r\n[Verse]\r\nIs it summertime magic\r\nThat makes me wanna dance all night long?\r\nIts your summertime magic\r\nMake me feel this way\r\nGot me bood up\r\nGirl, oh youre my world (baby!)\r\nBaby girl (woo, ah!) my whole world, hoo, oh!\r\n\r\n[Pre-Chorus]\r\nYou feel like summertime (oh, yes you do)\r\nYou took this heart of mine (you know you did)\r\nYoull be my Valentine (Valentine)\r\nIn the summer (in the summer)\r\nIn the summer\r\n\r\n[Chorus]\r\n(Do love me, do love me, do)\r\n(Do love me, do love me, do)\r\nI love you\r\n(Do love me, do love me, do)\r\n(Do love me, do love me, do)\r\nPut no one else above you\r\n(Do love me, do love me, do)\r\n(Do love me, do love me, do)\r\nYour style, your braids, your eyes\r\n(Do love me, do love me, do)\r\n(Do love me, do love me, do)\r\nSo summertime\r\n(Do love me, do love me, do)\r\n(Do love me, do love me, do)\r\nAll I wanna do is let you shine\r\n(Do love me, do love me, do)\r\n(Do love me, do love me, do)\r\nI love you\r\n(Do love me, do love me, do)\r\n(Do love me, do love me, do)\r\nPut no one else above you\r\n(Do love me, do love me, do)\r\n(Do love me, do love me, do)\r\n\r\n[Outro]\r\nIts your summertime\r\nIts your summertime magic'),
(11, 120, '[Chorus]\r\nMe (Me, me, me)\r\nCan you focus on me? (Me, me)\r\nBaby, can you focus on me? (Focus on me)\r\nBabe\r\n\r\n[Verse 1]\r\nHands in the soap (Soap)\r\nHave the faucets running\r\nAnd I keep looking at you\r\n(Looking at you, looking at you)\r\nStuck on your phone\r\nAnd youre stuck in your zone\r\nYou dont have a clue\r\n\r\n[Pre-Chorus]\r\nBut I dont wanna give up (Give up, give up)\r\nBaby, I just want you to get up (Get up, get up)\r\nLately, Ive been a little fed up (Fed up, fed up)\r\nWish you would just focus on\r\n\r\n[Chorus]\r\nMe\r\nCan you focus on me?\r\nBaby, can you focus on me?\r\nMe, me\r\nCan you focus on me?\r\nBaby, can you focus on me?\r\n\r\n[Verse 2]\r\nLazy and broke? (Broke)\r\nNo, he get this money\r\nSo I guess I cant complain\r\nBut I feel alone even when were alone\r\nAnd that dont cost a thing\r\n\r\n[Pre-Chorus]\r\nBut I dont wanna give up\r\nBaby, I just want you to get up\r\nLately, Ive been a little fed up (A little fed up, yeah)\r\nWish you would just focus on\r\n\r\n[Chorus]\r\nMe\r\nCan you focus on me? (Ooh, yeah)\r\nBaby, can you focus on me?\r\nMe, me\r\nCan you focus on me?\r\nBaby, can you focus on me?\r\n\r\n[Outro]\r\nBaby, baby, focus\r\nCant you see?\r\nI just wanna love you, baby\r\nLook me in my eyes, ooh'),
(12, 122, '[Verse 1]\r\nI don\'t stand in line, I don\'t pay for clubs, fuck that, yeah\r\nBut I wait for you\r\nI don\'t like to drink, I don\'t like to think, fuck that, oh-ooo-oh\r\nBut I ponder you\r\nI\'m bending it over\r\nYou\'re my four leaf clover\r\nI\'m so in love, so in love\r\nThere\'s no one above up above\r\nForever\'s a long time, yes\r\n\r\n[Chorus]\r\nMy blue jeans\r\nWill last me all-\r\nMy life, oh yes\r\nSo should we\r\nI\'m spending all this time, ooh\r\n\r\n[Verse 2]\r\nMet you at the shop, Sun was getting hot, I\'m lonely, yeah\r\nI\'m in the city on my own (city on my own)\r\nNever would\'ve thought you\'d be the one, I got a homie\r\nBut that\'s the way it goes\r\nI\'m reaching Nirvana (reaching Nirvana)\r\nGoodbye sweet Rwanda\r\nHigh school was never for me\r\nI say let it be, let it be\r\nForever\'s a long time\r\n\r\n[Chorus]\r\nMy blue jeans\r\nWill last me all\r\nMy life\r\nSo should we\r\nI\'m spending all this time\r\n\r\n[Outro]\r\nYou don\'t even know me\r\nYou don\'t even know me\r\nI\'m hanging from the tree\r\nI\'m hanging from the tree'),
(13, 124, '[Chorus]\r\nSend me your location, let\'s\r\nFocus on communicating\r\n\'Cause I just need the time and place to come through (place to come through)\r\nSend me your location\r\nLet\'s ride the vibrations\r\nI don\'t need nothing else but you\r\n(do not need nothing else but you)\r\n\r\n[Verse 1]\r\nAt times I wonder why I fool with you\r\nBut this is new to me, this is new to you\r\nInitially, I didn\'t wanna fall for you\r\nGather my attention it was all for you, so don\'t\r\nTake advantage, don\'t leave my heart damaged\r\nI understand that things go a little bit better when you plan it... oh, so won\'t\r\n\r\n[Chorus]\r\nSend me your location, let\'s\r\nFocus on communicating\r\n\'Cause I just need the time and place to come through\r\nSend me your location\r\nLet\'s ride the vibrations\r\nI don\'t need nothing else but you\r\n(I don\'t need nothing else but you)\r\n\r\n[Verse 2]\r\nI don\'t wanna fall in love off of subtweets, so\r\nLet\'s get personal\r\nI got a lot of cool spots that we can go\r\nTell me what\'s the move and I got you\r\nI\'m only acting like this \'cause I like you\r\nJust give me the vibe to slide in\r\nOh, I might make you mine by the night, and\r\n\r\n[Chorus]\r\nSend me your location, let\'s\r\nFocus on communicating\r\n\'Cause I just need the time and place to come through (place to come through)\r\nSend me your location\r\nLet\'s ride the vibrations\r\nI don\'t need nothing else but you\r\n(I don\'t need nothing else but you)\r\n[Outro]\r\nRide, ride, ride, come and vibe with me tonight\r\nI don\'t need nothing else but you\r\n(I don\'t need nothing else but you)\r\nRide, ride, ride, come and vibe with me tonight\r\nI don\'t need nothing else but you\r\nNothing else but you\r\nDo, do, do, do, do, do\r\nOh, oh, mmm, mmm, mmm, mmm\r\nOh, oh, oh\r\nOh, oh, oh, mmm, mmm, mmm\r\nDo, do, do, do, do, do, do, do\r\nDo, do, do, do, do, do, do\r\nI don\'t need nothing else but you'),
(14, 113, '[Intro]\r\nOoh, oh oh\r\nSweet love, yeah\r\n\r\n[Verse 1]\r\nI didn\'t mean it when I said I didn\'t love you so\r\nI should have held on tight, I never should have let you go\r\nI didn\'t know nothing, I was stupid\r\nI was foolish, I was lying to myself\r\nI couldn’t have fathomed I would ever be without your love\r\nNever imagined I\'d be sitting here beside myself\r\n\'Cause I didn’t know you, \'cause I didn’t know me\r\nBut I thought I knew everything\r\nI never felt\r\n\r\n[Pre-Chorus 1]\r\nThe feeling that I’m feeling now that I don’t hear your voice\r\nOr have your touch and kiss your lips ‘cause I don’t have a choice\r\nOh, what I wouldn’t give to have you lying by my side\r\nRight here, ’cause baby\r\n\r\n[Chorus]\r\nWhen you left, I lost a part of me\r\nIt\'s still so hard to believe\r\nCome back, baby, please\r\n‘Cause we belong together\r\nWho else am I gonna lean on when times get rough?\r\nWho’s gonna talk to me on the phone \'til the sun comes up?\r\nWho’s gonna take your place? There ain\'t nobody better\r\nOh, baby baby, we belong together\r\n\r\n[Verse 2]\r\nI can\'t sleep at night, when you are on my mind\r\nBobby Womack\'s on the radio\r\nSinging to me, \"If you think you\'re lonely now\"\r\nWait a minute, this is too deep (Too deep)\r\nI gotta change the station\r\nSo I turn the dial tryin\' to catch a break\r\nAnd then I hear Babyface\r\n\"I only think of you\"\r\nAnd it\'s breaking my heart\r\nI\'m tryna keep it together, but I\'m falling apart\r\n[Pre-Chorus 2]\r\nI\'m feeling all out of my element\r\nThrowing things, cryin\' tryin\'\r\nTo figure out where the hell I went wrong\r\nThe pain reflected in this song\r\nAin\'t even half of what I\'m feeling inside\r\nI need you, need you back in my life, baby\r\n\r\n[Chorus]\r\nWhen you left, I lost a part of me\r\nIt\'s still so hard to believe\r\nCome back, baby, please\r\n‘Cause we belong together\r\nWho else am I gonna lean on when times get rough?\r\nWho’s gonna talk to me on the phone \'til the sun comes up?\r\nWho’s gonna take your place? There ain\'t nobody better\r\nOh, baby baby, we belong together\r\n\r\n[Outro]\r\nBaby, when you left, I lost a part of me\r\nIt\'s still so hard to believe\r\nCome back, baby, please\r\n‘Cause we belong together\r\nWho am I gonna lean on when times get rough?\r\nWho’s gonna talk to me \'til the sun comes up?\r\nWho’s gonna take your place? There ain\'t nobody better\r\nOh, baby baby, we belong together\r\n'),
(15, 123, '[Verse 1]\r\nA tornado flew around my room before you came\r\nExcuse the mess it made, it usually doesn\'t rain in\r\nSouthern California, much like Arizona\r\nMy eyes don\'t shed tears, but boy, they pour when\r\n\r\n[Pre-Chorus]\r\nI\'m thinkin\' \'bout you, ooh no, no, no\r\nI\'ve been thinkin\' bout you, you know, know, know\r\nI\'ve been thinkin\' bout you, do you think about me still?\r\nDo ya, do ya?\r\n\r\n[Chorus]\r\nOr do you not think so far ahead?\r\n\'Cause I been thinkin\' bout forever, ooh\r\nOr do you not think so far ahead?\r\n\'Cause I been thinkin\' bout forever, ooh\r\n\r\n[Verse 2]\r\nNo, I don\'t like you, I just thought you were cool enough to kick it\r\nGot a beach house I could sell you in Idaho\r\nSince you think I don\'t love you, I just thought you were cute\r\nThat\'s why I kissed you\r\nGot a fighter jet, I don\'t get to fly it though, I\'m lying down\r\n\r\n[Pre-Chorus]\r\nThinkin\' \'bout you, ooh no, no, no\r\nI\'ve been thinkin\' bout you, you know, know, know\r\nI\'ve been thinkin\' bout you, do you think about me still?\r\nDo ya, do ya?\r\n\r\n[Chorus]\r\nOr do you not think so far ahead?\r\n\'Cause I been thinkin\' bout forever, ooh\r\nOr do you not think so far ahead?\r\n\'Cause I been thinkin\' bout forever, ooh\r\n\r\n[Bridge]\r\nYes, of course, I remember, how could I forget (How could I forget?) how you feel? (How you feel)\r\nYou know you were my first time, a new feel\r\nIt won\'t ever get old, not in my soul, not in my spirit, keep it alive\r\nWe\'ll go down this road \'til it turns from color to black and white\r\n\r\n[Chorus]\r\nOr do you not think so far ahead?\r\n\'Cause I been thinkin\' bout forever, ooh\r\nOr do you not think so far ahead?\r\n\'Cause I been thinkin\' bout forever, ooh'),
(16, 118, '[Verse 1]\r\nYou promised the world and I fell for it\r\nI put you first and you adored?it\r\nSet?fires to my?forest\r\nAnd you let it burn\r\nSang off-key?in my chorus\r\nCause it wasn\'t yours\r\nI saw the signs and I ignored it\r\nRose-colored glasses all distorted\r\nSet fire to my purpose\r\nAnd I let it burn\r\nYou got off on the hurting\r\nWhen it wasn\'t yours, yeah\r\n\r\n[Pre-Chorus]\r\nWe\'d always go into it blindly\r\nI needed to lose you to find me\r\nThis dancing was killing me softly\r\nI needed to hate you to love me, yeah\r\n\r\n[Chorus]\r\nTo love, love, yeah\r\nTo love, love, yeah\r\nTo love, yeah\r\nI needed to lose you to love me, yeah\r\nTo love, love, yeah\r\nTo love, love, yeah\r\nTo love, yeah\r\nI needed to lose you to love me\r\n\r\n[Verse 2]\r\nI gave my all and they all know it\r\nThen you tore me down and now it\'s showing\r\nIn two months, you replaced us\r\nLike it was easy\r\nMade me think I deserved it\r\nIn the thick of healing, yeah\r\n\r\n[Pre-Chorus]\r\nWe\'d always go into it blindly\r\nI needed to lose you to find me\r\nThis dancing was killing me softly\r\nI needed to hate you to love me, yeah\r\n\r\n[Chorus]\r\nTo love, love, yeah\r\nTo love, love, yeah\r\nTo love, yeah\r\nI needed to lose you to love me, yeah\r\nTo love, love, yeah\r\nTo love, love, yeah\r\nTo love, yeah\r\nI needed to lose you to love me\r\n\r\n[Bridge]\r\nYou promised the world and I fell for it\r\nI put you first and you adored it\r\nSet fires to my forest\r\nAnd you let it burn\r\nSang off-key in my chorus\r\n\r\n[Chorus]\r\nTo love, love, yeah\r\nTo love, love, yeah\r\nTo love, yeah\r\nI needed to hate you to love me, yeah\r\nTo love, love, yeah\r\nTo love, love, yeah\r\nTo love, yeah\r\nI needed to lose you to love me\r\nTo love, love, yeah\r\nTo love, love, yeah\r\nTo love, yeah\r\n\r\n[Outro]\r\nAnd now the chapter is closed and done\r\nTo love, love, yeah\r\nTo love, love, yeah\r\nTo love, yeah\r\nAnd now it\'s goodbye, it\'s goodbye for us'),
(17, 119, '[Chorus]\r\nClosed on Sunday, you\'re my Chick-fil-A\r\nClosed on Sunday, you my Chick-fil-A\r\nHold the selfies, put the?\'Gram?away\r\nGet your family,?y\'all hold hands and pray\r\nWhen you?got daughters, always keep \'em safe\r\nWatch out for vipers, don\'t let them indoctrinate\r\nClosed on Sunday, you my Chick-fil-A\r\nYou\'re my number one, with the lemonade\r\nRaise our sons, train them in the faith\r\nThrough temptations, make sure they\'re wide awake\r\nFollow Jesus, listen and obey\r\nNo more livin\' for the culture, we nobody\'s slave\r\n\r\n[Verse]\r\nStand up for my home\r\nEven if I take this walk alone\r\nI bow down to the King upon the throne\r\nMy life is His, I\'m no longer my own\r\nI pray to God that He\'ll strengthen my hand\r\nThey will think twice steppin\' onto my land\r\nI draw the line, it\'s written in the sand\r\nTry me and you will see that I ain\'t playin\'\r\nNow, back up off my family, move your hands\r\nI got my weapons in the spirit\'s land\r\nI, Jezebel don\'t even stand a chance\r\nJezebel don\'t even stand a chance\r\n\r\n[Outro: A$AP Bari]\r\nChick-fil-A'),
(18, 116, '[Intro]\r\nIf you don\'t wanna see me\r\n\r\n[Verse 1]\r\nDid a full 180, crazy\r\nThinking \'bout the way I was\r\nDid the heartbreak change me? Maybe\r\nBut look at where I ended up\r\nI\'m all good already\r\nSo moved on, it\'s scary\r\nI\'m not where you left me at all, so\r\n\r\n[Pre-Chorus]\r\nIf you don\'t wanna see me dancing with somebody\r\nIf you wanna believe that anything could stop me\r\n\r\n[Chorus]\r\nDon\'t show up, don\'t come out\r\nDon\'t start caring about me now\r\nWalk away, you know how\r\nDon\'t start caring about me now\r\n\r\n[Verse 2]\r\nAren\'t you the guy who tried to\r\nHurt me with the word \"goodbye\"?\r\nThough it took some time to survive you\r\nI\'m better on the other side\r\nI\'m all good already\r\nSo moved on, it\'s scary\r\nI\'m not where you left me at all, so\r\n\r\n[Pre-Chorus]\r\nIf you don\'t wanna see me dancing with somebody\r\nIf you wanna believe that anything could stop me\r\n(Don\'t, don\'t, don\'t)\r\n\r\n[Chorus]\r\nDon\'t show up, don\'t come out\r\nDon\'t start caring about me now\r\nWalk away, you know how\r\nDon\'t start caring about me now (\'Bout me now, \'bout me)\r\n\r\n[Bridge]\r\nUp, up\r\nDon\'t come out, out, out\r\nDon\'t show up, up, up\r\nDon\'t start now (Oh)\r\nUp, up\r\nDon\'t come out, out\r\nI\'m not where you left me at all, so\r\n\r\n[Pre-Chorus]\r\nIf you don\'t wanna see me dancing with somebody\r\nIf you wanna believe that anything could stop me\r\n\r\n[Chorus]\r\nDon\'t show up (Don\'t show up), don\'t come out (Don\'t come out)\r\nDon\'t start caring about me now (\'Bout me now)\r\nWalk away (Walk away), you know how (You know how)\r\nDon\'t start caring about me now (So)\r\n\r\n[Outro]\r\nUp, up\r\nDon\'t come out, out, out\r\nDon\'t show up, up, up\r\nWalk away, walk away (So)\r\nUp, up\r\nDon\'t come out, out, out\r\nDon\'t show up, up, up\r\nWalk away, walk away, oh'),
(19, 121, '[Verse 1: Iga, Asteriska & Puti]\r\nO! Itu tak kau lihat tak kau ragu\r\nPeluh dan peluru hujam memburu\r\nBahasamu bahas bahasanya\r\nLihat kau bicara dengan siapa\r\n\r\n[Verse 2: Iga, Asteriska & Puti]\r\nLidah kian berlari tanpa henti\r\nTanpa disadari tak ada arti\r\nBahasamu bahas bahasanya\r\nLihat kau bicara dengan siapa\r\n\r\n[Chorus]\r\nMakna–makna dalam aksara\r\nMakna mana yang kita bela\r\nMakna–makna dalam aksara\r\nMakna mana yang kita bela\r\n\r\n[Bridge: Iga, Asteriska & Puti]\r\nItu tak kau lihat tak kau ragu\r\nPeluh dan peluru hujam memburu\r\nBahasamu bahas bahasanya\r\nLihat kau bicara dengan siapa\r\n\r\n[Chorus]\r\nMakna–makna dalam aksara\r\nMakna mana yang kita bela\r\nMakna–makna dalam aksara\r\nMakna mana yang kita bela\r\n\r\n[Outro: Asteriska]\r\nBerlabuh lelahku\r\nDi kelambu jiwamu\r\nBerlabuh lelahku\r\nDi kelambu jiwamu\r\nBerlabuh lelahku\r\nDi kelambu jiwamu'),
(20, 126, 'yayay huhu lalala'),
(21, 117, '[Verse 1]\r\nStare out the window\r\nOh, why am I so\r\nJaded and waiting for some kinda miracle? Yeah\r\nLove doesn\'t live here\r\nAnd I\'ve cried enough tears\r\nSorry if I can\'t imagine that you care, oh\r\n\r\n[Chorus]\r\nPlease\r\nI never saw it coming\r\nYou wanna take me away\r\nSo please\r\nDon\'t let it be for nothing\r\nBefore we get carried away, yeah\r\n\r\n[Verse 2]\r\nAin\'t my fault I\'m guarded\r\nI\'m good, I\'ve been okay\r\nFronting, I don\'t wanna be loved anyway\r\nAnd that\'s why I do as I say\r\n\'Cause I had a bad case\r\nLosing a game I never wanted to play, oh\r\n\r\n[Chorus]\r\nPlease\r\nI never saw it coming\r\nYou wanna take me away\r\nSo please\r\nDon\'t let it be for nothing\r\nBefore we get carried away, yeah\r\n\r\n[Bridge]\r\nBefore we cross the line\r\nI, I don\'t wanna take my chances if this ain\'t it, oh no\r\nIf you\'re not sure, then let me go, ooh\r\n\r\n[Chorus]\r\nPlease\r\nI never saw it coming\r\nYou wanna take me away\r\nSo please\r\nDon\'t let it be for nothing\r\nBefore we get carried away\r\nBefore we get carried away, yeah');

-- --------------------------------------------------------

--
-- Table structure for table `pencarian`
--

CREATE TABLE `pencarian` (
  `id_user` int(11) NOT NULL,
  `id_song` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `id_song` int(9) NOT NULL,
  `id_jenis` int(10) NOT NULL,
  `id_genre` int(2) NOT NULL,
  `id_lyrics` int(9) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `chart` int(2) DEFAULT NULL,
  `release_date` varchar(20) DEFAULT NULL,
  `writter` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`id_song`, `id_jenis`, `id_genre`, `id_lyrics`, `title`, `chart`, `release_date`, `writter`) VALUES
(2, 2, 12, 2, 'Shape Of You', 4, 'January 6, 2017', 'Lisa “Left Eye” Lopes, Tameka “Tiny” Harris, Kandi, Kevin “She’kspere” Briggs, Ed Sheeran & Johnny McDaid'),
(3, 3, 11, 3, 'DNA.', 8, 'April 14, 2017', 'Kendrick Lamar & Mike WiLL Made-It'),
(4, 4, 12, 4, 'Dangerous Woman', 5, 'May 20, 2016', 'Max Martin, Ross Golan & Johan Carlsson'),
(5, 10, 4, 5, 'Halo', 2, 'February 20, 2009', 'E. Kidd Bogart, Ryan Tedder & Beyoncé\r\n'),
(6, 5, 11, 7, 'One Dance', 6, 'April 5, 2016', 'Logan Sama, China Black, Drake, DJ Maphorisa, Crazy Cousinz, Kyla, Wizkid, 40 & Nineteen85'),
(7, 6, 12, 9, 'Nirvana', 7, ' January 1, 2013', 'A. K. Paul, Sam Smith, Jimmy Napes & Craze & Hoax'),
(8, 7, 4, 11, 'Focus', 9, 'September 8, 2016', 'H.E.R., DJ Camper & Justin Love'),
(9, 8, 4, 13, 'Location', 10, 'April 30, 2016', 'Smash David, Alfredo Gonzalez, Tunji Ige, Syk Sense & Khalid'),
(10, 13, 4, 10, 'Summertime Magic', 1, 'July 11, 2018', 'Childish Gambino & Ludwig Göransson\r\n'),
(11, 11, 12, 8, 'Diamonds', 13, 'September 27, 2012', 'StarGate, benny blanco & Sia'),
(12, 9, 4, 15, 'Thinkin Bout You', 12, ' April 17, 2012', 'Frank Ocean & Shea Taylor'),
(13, 12, 11, 6, 'Call Out My Name', 15, 'March 30, 2018', 'Frank Dukes, Nicolas Jaar & The Weeknd'),
(14, 15, 4, 14, 'We Belong Together', 3, 'March 29, 2005', 'Darnell Bristol, Babyface, Sidney DeWayne, Patrick Moten, Sandra Sully, Mariah Carey, Manuel Seal, Jermaine Dupri & Bobby Womack'),
(15, 14, 4, 12, 'Japannese Denim', 14, 'October 19, 2016', 'Daniel Caesar'),
(16, 16, 12, 16, 'Lose You To Love Me', 16, 'October 23, 2019', 'Robin Fredriksson, Mattias Larsson, Selena Gomez, Julia Michaels & Justin Tranter'),
(17, 17, 11, 17, 'Closed On SUnday', 17, 'October 25, 2019', '\r\nVictory Boyd, A$AP Bari, Ab-Liva, Timbaland, Timothy Mosley, Pusha T, No Malice, Federico Vindver, Chango Farias Gómez, Brian “All Day” Miller, Angel López & Kanye West'),
(18, 18, 12, 18, 'Don\'t Start Now', 18, 'October 31, 2019', 'Emily Warren, Ian Kirkpatrick, Caroline Ailin & Dua Lipa'),
(19, 22, 12, 20, 'Sailor', 19, 'March 30, 2018', 'Harry Sommerdahl & GAC (Gamaliél Audrey Cantika)'),
(21, 25, 7, 19, 'Bahas Bahasa', 21, 'September 15, 2015', 'Iga Massardi ');

-- --------------------------------------------------------

--
-- Table structure for table `translation`
--

CREATE TABLE `translation` (
  `id_trans` int(9) NOT NULL,
  `about` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `translation`
--

INSERT INTO `translation` (`id_trans`, `about`) VALUES
(111, 'One of Bey’s most vocally demanding and optimistic works, “Halo” comes off as a centerpiece in the I Am… disc of Beyoncé’s third studio album. Equipped with emotional vocalizations and angelic overtones, the song remains one of Bey’s most magnificent and impressive songs. The intimate power ballad took home Best Female Pop Vocal Performance at the 52nd Grammy Awards, and has converted over 3 million digital units thus far.\r\n\r\n“Halo” was originally written by E. Kidd Bogart & OneRepublic’s Ryan Tedder, a day after Tedder had surgery on a broken Achilles\' tendon, causing the cancellation of the band’s tour. The pair drew inspiration from Ray LaMontagne’s “Shelter”. “Halo” was released simultaneously with “Diva” on January 20, 2009.\r\n\r\nThe song drew critical praise, but also many comparisons and a few controversies. According to Bogart, the song was written specifically with Beyoncé in mind; however, it was tentatively offered to Simon Cowell for his client Leona Lewis before Bey had recorded it. Similarities between “Halo” and Kelly Clarkson’s “Already Gone” – also composed by Ryan Tedder – sparked gossip that he had used the same tune for both songs.\r\n\r\n“Halo” was one of 2009’s best-selling singles, and was the #1 song of the 2000s in Brazil. The music video, directed by Phillip Andelman, featured actor Michael Ealy as Bey’s love interest (he originally turned down the role in the video for “Irreplaceable”.) An alternative version surfaced in 2010; this includes omitted scenes with Ealy on the run from police officers before Bey finds him dead.'),
(112, 'On the morning of July 11, 2018, Childish Gambino dropped two new summer-related songs. The “Summertime Magic” and “Feels Like Summer” were released on Spotify as well as Apple Music with the title Summer Pack.\r\n\r\nThe tracks arrived ahead of Donald Glover’s headline set at London’s Lovebox festival on Saturday, July 14. It’s the first new music from Glover since the viral-smash “This Is America.”\r\n\r\nThe duo of songs perfectly and bluntly represents the essence of summer in a dream.'),
(113, '“We Belong Together” is the second single from Mariah Carey’s notable 2005 comeback album The Emancipation of Mimi.\r\n\r\nThe track was #1 on the Billboard charts for 14 weeks, which is the second-longest running #1 song in US chart history, behind Mariah Carey and Boyz II Men’s “One Sweet Day” (16 weeks).\r\n\r\nThe video clip shows Mariah Carey during a wedding with a young man played by Prison Break star Wentworth Miller.\r\n\r\nWhat have the artists said about the song?\r\nMariah Carey on the song’s success:\r\n\r\nI had a great feeling about it when we finished writing the song, and I was flying back from Atlanta at some crazy hour of the morning… But we were listening to it on the plane ride on the way home, and even from the demo version, I really felt something very special.\"'),
(114, 'On “DNA.,” Kendrick adopts multiple viewpoints, celebrating, critiquing, and exploring his black heritage and culture. In the music video, Kendrick and Kansas City actor, Don Cheadle appear to trade bars/argue using the lyrics to this song.\r\n\r\nIn the same video clip, Lamar appears dressed in a traditional Kung Fu uniform. In an interview with Pitchfork, Don Cheadle confirmed that he’s the inspiration for Kung Fu Kenny. Cheadle portrayed a Chinese speaking martial artist named Kung-Fu Kenny in Rush Hour 2.\r\n\r\nThe music video also contains snippets from “Hood Politics,” a song off of the 2015 Grammy award winning album To Pimp A Butterfly.\r\n\r\nThis song samples a different segment of the same Fox News clip to the previous song, “BLOOD.”\r\n\r\nAt the beginning of the video, one can hear “YAH.” (the next song on the album), and the ending of “BLOOD.” (the previous song on the album). It is the snippet from Geraldo Rivera criticizing Kendrick’s lyrics to “Alright.”\r\n\r\nThe song debuted at #4 on Billboard Hot 100 after the first week of tracking dated 05.06.17. Lamar appeared in the top 10 twice besides charting all 14 songs off the album on the chart with “Humble” topping the chart that week.\r\n\r\nIn the music video we learn that “DNA.” stands for “Dead Nigger Association.”'),
(115, 'Sampling his Oscar-nominated “Earned It” over a slow piano-driven beat from producer Frank Dukes (who collaborated with The Weeknd on his previous effort Starboy), Abel details his struggles to let go of a past relationship.\r\n\r\nAbel explains that, although he is aware that his last lover didn’t put as much effort into the relationship as he did (“wasted my time”), he still wishes deep down that she would need him as much as he still needs her.'),
(116, '“Don’t Start Now” is the lead single from Dua Lipa’s second studio album, her second release of 2019, following “Swan Song” in January. The disco-inspired track kick starts Dua’s new era, first alluded to when a blonde-haired Dua took to social media on October 23, posting a snippet of the track, with the caption “Miss me?”\r\n\r\nShe went on to announce the song on October 24, 2019, posting another snippet of the track, before revealing its album art. Less than 24 hours prior to its release, one lucky fan was given a preview of the track on BBC Radio 1. Hours later, a Snapchat filter which features a snippet of the song was released to the public alongside a tweet with information on the song and music video’s worldwide premiere.\r\n\r\nEd Millet of TaP Management, whom Dua is managed by, described the track as “more upbeat and dance-y” in an interview with Variety (October 2019).\r\n\r\nAfter the release of the song, Dua previewed a snippet of the music video via a trailer hours before the official music video was released.'),
(117, '[unreviewed]'),
(118, 'After four years of releasing droplet singles, Selena Gomez released “Lose You To Love Me,” a self-love anthem featuring melancholic lyrics about discovering her true self through the difficult process of losing a lover.\r\n\r\nThe song is the lead single from her upcoming highly anticipated third studio album, and has been seemingly confirmed to be about her rocky relationship with ex-boyfriend Justin Bieber.\r\n\r\nA music video was released alongside the song. The music video was shot completely on an iPhone for Apple’s “Shot on iPhone” campaign; these words and the Apple logo can be seen in a promotional video posted by Apple.\r\n\r\nThe cover art for the track and release date were shared by Selena on Twitter on October 18, 2019. More hype for the release of the song began to build when a credible insider on the music forum ATRL made a cryptic comment “2.2.22.23” on a popular discussion forum about Selena’s music. Many fans immediately pieced together the information and theorized that on either the 22nd or 23rd of October, “Lose You to Love Me” would be released with a music video and another single. As it turned out, Selena released her second single, “Look At Her Now,” the following day.'),
(119, 'Kanye West continues with the gospel theme of the album, naming “Closed on Sunday” after an important concept in Christianity. While Saturday is technically the Sabbath in Judaism, Sunday is considered to be a holy day of rest for most Christians. In the Bible, there are numerous passages that specifically state the significance of resting one day out of the week. In Exodus 20:8-11, it is listed as the third commandment:\r\n\r\nRemember the sabbath day, to keep it holy. Six days shalt thou labour, and do all thy work: But the seventh day is the sabbath of the LORD thy God: in it thou shalt not do any work, thou, nor thy son, nor thy daughter, thy manservant, nor thy maidservant, nor thy cattle, nor thy stranger that is within thy gates: For in six days the LORD made heaven and earth, the sea, and all that in them is, and rested the seventh day: wherefore the LORD blessed the sabbath day, and hallowed it.\r\n\r\nIn the chorus, Kanye alludes to the famous, Christian-owned fast food chain, Chick-fil-A, and discusses the way their stores are closed on this day. The outro is spoken by A$AP Bari, who is also known as Young Lord. He confirmed the vocal feature and thanked Ye for putting him on the track via his Instagram story.'),
(120, 'This song has undertones of desperation as H.E.R is trying to get her partner’s affection and attention. She is on the cusp of walking out and giving up on the relationship, but there is still a deep sense of love that she cannot let go of. She desperately begs for her partner’s attention, but he is too focused on other things.'),
(121, 'What have the artists said about the song?\r\nBahas Bahasa itu seperti gambaran hubungan sosial manusia saat ini. Seperti cara berkomunikasi kita yang selalu mengalami metamorfosis dari zaman ke zaman. Dari yang dulu cuma bisa surat-menyurat, sekarang semuanya bisa dengan cepat berkomunikasi lewat texting free app. Sedikit banyak, proses itu pasti mengubah sikap, budaya juga esensi kita dalam berkomunikasi. Bagi kami, komunikasi tatap muka selalu punya kedekatan sendiri. – Iga Massardi dalam wawancara Gadis'),
(122, 'The main idea of “Japanese Denim” is the comparison of Daniel’s feeling of everlasting love to a pair of jeans that last a lifetime.\r\n\r\nThe song was released as the B-side to the hit single “Get You.” It was first released as an acoustic demo on Daniel’s 2015 live EP Acoustic Break.'),
(123, '“Thinkin Bout You” is the first single on channel ORANGE. Frank originally wrote it for Bridget Kelly but after his reference track leaked he recorded a higher-quality version and put it out.\r\n\r\nFrank tries to act tough when reflecting back on a past relationship, but ultimately reveals he still has strong feelings for his ex-lover, and wonders if they have been able to move on or feel the same way he does.\r\n\r\nThe track was performed on Saturday Night Live, and was also nominated for record of the year in the 2012 Grammys.'),
(124, 'Khalid described “Location” in an interview with Pigeons and Planes:\r\n\r\n‘Location’ is a story of young love. The kind of love that you would travel all over the country to find. It’s just a story of searching for something that we all want in life no matter who we are and that’s a real genuine lover, but it doesn’t come easy.\r\n\r\nThe track reached a wider audience after Kylie Jenner featured it in her Snapchat story on May 27th, 2016—Khalid appreciated the boost.\r\n\r\nI first got inspired to write “Location” when I heard the loop of the beat. I was like, “Yo, run that back.” And then after that it kind of just reminded me of this digital, cellphone-type text or ringtone. After that, the words just wrote themselves. It was just like, “Send me your location,” and it was super catchy, so I started rolling with it. I took it back to El Paso. It reminded me of this girl I was talking to, and I wanted to impress her, so I just finished the song there.'),
(125, '“All I Ask” is a song by British singer-songwriter Adele, written about a potentially final escapade in a failing relationship. It was written in collaboration with Bruno Mars, Brody Brown and Philip Lawrence for her third album, 25.\r\n\r\nThe song received a relatively large amount of promo for a non-single: it was first performed live as a part of Adele: Live in New York City, and next in the Carpool Karaoke segment on The Late Late Show with James Corden.\r\n\r\nHowever, some fans of Adele began associating a ‘curse’ with this song after its next promo spot, the 58th Grammy Awards. During Adele’s “All I Ask” performance there (which itself was a surprise, she had been expected to perform her then-latest single, “When We Were Young”), the piano microphones fell from their mounts and onto the strings, creating a loud clanging noise perceivable to the audience and multiple times louder yet in Adele’s earpiece. She bravely sung on, later consoling herself with some cheeseburgers and a redo performance on Ellen.\r\nContinuing the supposed curse, two months later, during a tour stop in Birmingham, UK, all of the arena’s speakers simultaneously stopped working during a performance of this same song. This time, Adele’s earpiece remained normal, though, so she didn’t realize the issue until afterward.\r\n\r\nCoincidentally or not, Adele dropped “All I Ask” from her tour setlist on July 16, 2016, and has not performed it since.'),
(126, 'Sailor is GAC’s third single after the release of their highly anticipated sophomore album Stronger in 2015.\r\n\r\nThe song tells a story of venturing into a new relationship by using the comparison of stepping on a boat, ready to sail and experience the ocean together.'),
(127, 'On “Dangerous Woman\"—a slow, edgy, pop-rock, R&B track—Grande revels in the excitement and power she feels when she’s with her man.\r\n\r\nIn an Instagram post, Grande revealed the title comes from Egyptian feminist writer Nawal El Saadawi’s 1975 novel Woman at Point Zero:\r\n\r\nThey said, “You are a savage and dangerous woman.” I am speaking the truth. And the truth is savage and dangerous.\r\n\r\nIn an interview with Billboard, Ariana explained that:\r\n\r\nTo me, a dangerous woman is someone who’s not afraid to take a stand, be herself and to be honest.\r\n\r\nIn February 2016, Grande retitled her album to “Dangerous Woman” from the original “Moonlight,” saying that it “represents more accurately where I’m at now.”'),
(128, 'Ed Sheeran released “Shape of You” together with “Castle On The Hill.” The two songs were the first releases from his third album, ÷ (Divide), following in the mathematical footsteps of his + (Plus) and x (Multiply) albums.\r\n\r\n“Shape Of You” is based around a tropical house-inspired lead melody and dancehall beat. A rhythm is given by xylophones, guitars, and percussions. The style and rhythm have been noted as close to the recent Sia success, “Cheap Thrills”, which has caused some controversy. Ed has denied receiving inspiration from the track. Just like “Cheap Thrills”, however, “Shape of You” was written with the intention of it being recorded by Rihanna, but Sheeran later decided to keep it for himself.\r\n\r\nIn the song, Sheeran sings about meeting someone at a bar and falling in love with her; a love distinct from those in much of his previous work as it’s more focused on the physical than the emotional.\r\n\r\nSheeran had teased the song through a tweet that he had posted on January 5, 2017. The video had a colon that would then merge into a human body, referencing the “body”-inspiration of the song.\r\n\r\nAs of August 29, 2017, “Shape Of You” set a Billboard record, spending 33 straight weeks in the Top 10 of the Hot 100 chart.\r\n\r\nOn September 22, 2017, the track became the most streamed song of all time on the Spotify plaform at 1.318 billion plays. Sheeran passed Drake who previously held the record with “One Dance.”\r\n\r\nThe song won a Grammy Best Pop Solo Performance at the 2018 Grammys held on January 28, 2018.\r\n\r\nOn January 24th, 2019, “Shape Of You” was certified Diamond by the RIAA, selling over ten million units.'),
(129, '“Diamonds” was released as the lead single from Rihanna’s seventh studio album, Unapologetic. It became her twelfth number-one in the US.\r\n\r\nThe song was written by Sia, who wrote the chart topping hit in just 14 minutes.\r\n\r\nWe’re sitting there trying to make records, and we finally just said, ‘Let’s just do something we like. Let’s make a hip-hop record with some really cool chords on it… It didn’t sound Rihanna at all. We were more thinking of making a record that sounds like Kanye. Let’s make a record with a dope beat. So we did. Then Sia heard the track and instantly gravitated towards it. We weren’t even thinking of putting a pop song on it, but she wrote this amazing song.“\r\n––Benny Blanco (Producer)\r\n\r\nI literally punched him in the arm. I thought Benny was playing a trick on me, [Rihanna] could’ve done it her own way, but I think she really genuinely liked the way it was.“\r\n––Sia'),
(130, 'Nirvana is the second song on Sam Smith’s Debut EP, Nirvana, and is also the second most popular song on the album after Latch.\r\n\r\nThe mood of this song is more positive than many of the sadder songs in Sam’s repetoire. This is a story of a temporary attraction, yet he seems to feel positive about it. The later songs on the ‘In the Lonely Hour’ collection are full of pain and loneliness, as if Sam fell into a trough of depression before climbing out again. It’s good to know that, despite being a sensitive and emotional man, he is resilient.\r\n\r\nThe acoustic version of the song is almost as popular as the original, just short of 13 million hits; for many the more subtle and compelling one. The minimal backing instrumentals — guitar, piano and cello —work perfectly to feed into the thoughful, emotional mood.'),
(131, '“One Dance” is an R&B song with dancehall and Afrobeats inflections, featuring a slowed down sample of the vocals and chord stabs from a 2008 UK Funky house anthem, Kyla’s “Do You Mind,” produced by Crazy Cousinz.\r\n\r\n“One Dance” also features Nigerian singer Wizkid—he and Drake teamed up in 2015 to remix his track “Ojuelegba.”\r\n\r\nSpotify released their list of most-streamed songs of summer 2016—“One Dance” took the number one spot on the US and Global charts. On October 17, 2016, “One Dance” became the number one streamed song in the streaming service’s history.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `password`) VALUES
(1, 'salsabillaflsft', 'salsabillafilsa@gmail.com', '0143c1e8e97da861c623ff508a441c54'),
(2, 'admin', 'admin@gmail.com', '210cf7aa5e2682c9c9d4511f88fe2789'),
(3, 'aaaa', 'aaa@gmail.com', '74b87337454200d4d33f80c4663dc5e5'),
(4, 'aaa bbb', 'aabb@gmail.com', '5e394281dfac81c1e7dddcaf4d35d1f6'),
(5, 'yesyualeon', 'yesyua@gmail.com', 'ad198e6bd437e4434f015e367ace1580'),
(6, 'hayadieni', 'haya@gmail.com', '2865c93d2a085d7806ff2eb690186839'),
(7, 'coba', 'coba@gmail.com', '1621a5dc746d5d19665ed742b2ef9736'),
(8, 'kriptografi', 'kripto@gmail.com', '522799b7166a45c074b769b5e5b07459');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id_artist`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`),
  ADD KEY `fk_id_artist` (`id_artist`);

--
-- Indexes for table `lyrics`
--
ALTER TABLE `lyrics`
  ADD PRIMARY KEY (`id_lyrics`),
  ADD KEY `fk_id_trans` (`id_trans`);

--
-- Indexes for table `pencarian`
--
ALTER TABLE `pencarian`
  ADD KEY `fk_id_user` (`id_user`),
  ADD KEY `fk_id_song5` (`id_song`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id_song`),
  ADD KEY `fk_id_genre` (`id_genre`),
  ADD KEY `fk_id_lyrics` (`id_lyrics`),
  ADD KEY `fk_id_jenis` (`id_jenis`);

--
-- Indexes for table `translation`
--
ALTER TABLE `translation`
  ADD PRIMARY KEY (`id_trans`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id_artist` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jenis`
--
ALTER TABLE `jenis`
  ADD CONSTRAINT `fk_id_artist` FOREIGN KEY (`id_artist`) REFERENCES `artist` (`id_artist`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lyrics`
--
ALTER TABLE `lyrics`
  ADD CONSTRAINT `fk_id_trans` FOREIGN KEY (`id_trans`) REFERENCES `translation` (`id_trans`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pencarian`
--
ALTER TABLE `pencarian`
  ADD CONSTRAINT `fk_id_song5` FOREIGN KEY (`id_song`) REFERENCES `song` (`id_song`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `fk_id_genre` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_jenis` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_lyrics` FOREIGN KEY (`id_lyrics`) REFERENCES `lyrics` (`id_lyrics`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
