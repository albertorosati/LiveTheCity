-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2019 alle 14:32
-- Versione del server: 5.6.33-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_livethecity`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `autisti`
--

CREATE TABLE IF NOT EXISTS `autisti` (
  `id_autista` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id_user` int(11) DEFAULT NULL,
  `posti_disponibili` int(11) NOT NULL,
  PRIMARY KEY (`id_autista`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `citta`
--

CREATE TABLE IF NOT EXISTS `citta` (
  `id_citta` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `cap` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_citta`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dump dei dati per la tabella `citta`
--

INSERT INTO `citta` (`id_citta`, `nome`, `cap`) VALUES
(1, 'Reggio Emilia', 42121),
(2, 'Reggio Emilia', 42122),
(3, 'Reggio Emilia', 42123),
(4, 'Modena', 41030),
(5, 'Parma', 43041),
(6, 'Bologna', 40010),
(7, 'Reggio Emilia', 42124);

-- --------------------------------------------------------

--
-- Struttura della tabella `eventi`
--

CREATE TABLE IF NOT EXISTS `eventi` (
  `id_evento` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `luogo` text NOT NULL,
  `descrizione` text NOT NULL,
  `num_partecipanti_max` int(11) DEFAULT NULL,
  `num_aperto` tinyint(1) NOT NULL,
  `data` date NOT NULL,
  `esigenze` text,
  PRIMARY KEY (`id_evento`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dump dei dati per la tabella `eventi`
--

INSERT INTO `eventi` (`id_evento`, `nome`, `luogo`, `descrizione`, `num_partecipanti_max`, `num_aperto`, `data`, `esigenze`) VALUES
(1, 'sagra porcetto', 'Bologna', 'Carne e vino a volontà! accorrete numerosi', 100, 0, '2019-03-26', 'sedie e tavoli'),
(2, 'triathlon', 'Milano', 'In mare, in bici, e di corsa! con il triathlon non si scherza.', 1000000, 1, '2019-03-30', 'non c''è bisogno di nulla'),
(3, 'Presentazione Aspirapolveri ultimo modello', 'Reggio Emilia', 'Con il super aspiratore 2000, non esiste sporco che riesca a resistere!', 50, 0, '2019-04-10', 'non c''è bisogno di nulla');

-- --------------------------------------------------------

--
-- Struttura della tabella `eventi_users`
--

CREATE TABLE IF NOT EXISTS `eventi_users` (
  `fk_id_evento` int(11) DEFAULT NULL,
  `fk_id_user` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `eventi_users`
--

INSERT INTO `eventi_users` (`fk_id_evento`, `fk_id_user`) VALUES
(1, 1),
(1, 4),
(2, 3),
(2, 4);

-- --------------------------------------------------------

--
-- Struttura della tabella `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `link_foto` varchar(1000) NOT NULL,
  PRIMARY KEY (`link_foto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `offerte`
--

CREATE TABLE IF NOT EXISTS `offerte` (
  `id_offerta` int(11) NOT NULL AUTO_INCREMENT,
  `descrizione` text,
  `fascia` varchar(15) NOT NULL,
  `fk_id_user` int(11) DEFAULT NULL,
  `privacy` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_offerta`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dump dei dati per la tabella `offerte`
--

INSERT INTO `offerte` (`id_offerta`, `descrizione`, `fascia`, `fk_id_user`, `privacy`) VALUES
(1, 'Offro compagnia ad anziani soli tutti i mercoledì, per ulteriori informazioni contattatemi', 'mattina', 3, 0),
(3, 'Offro ripetizioni di storia per ragazzi delle superiori', 'pomeriggio', 1, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `passeggeri`
--

CREATE TABLE IF NOT EXISTS `passeggeri` (
  `id_passeggero` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_passeggero`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dump dei dati per la tabella `passeggeri`
--

INSERT INTO `passeggeri` (`id_passeggero`, `fk_id_user`) VALUES
(1, 1),
(2, 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id_user` int(11) DEFAULT NULL,
  `testo` text NOT NULL,
  `orario` time DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dump dei dati per la tabella `post`
--

INSERT INTO `post` (`id_post`, `fk_id_user`, `testo`, `orario`, `data`) VALUES
(40, 5, 'Ciao', '12:32:48', '2019-03-24');

-- --------------------------------------------------------

--
-- Struttura della tabella `quartieri`
--

CREATE TABLE IF NOT EXISTS `quartieri` (
  `id_quartiere` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `fk_id_citta` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_quartiere`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dump dei dati per la tabella `quartieri`
--

INSERT INTO `quartieri` (`id_quartiere`, `nome`, `fk_id_citta`) VALUES
(1, 'Mancasale', 1),
(2, 'Rosta Nuova', 2),
(5, 'Pieve Modolena', 7);

-- --------------------------------------------------------

--
-- Struttura della tabella `richieste`
--

CREATE TABLE IF NOT EXISTS `richieste` (
  `id_richiesta` int(11) NOT NULL AUTO_INCREMENT,
  `descrizione` text NOT NULL,
  `fascia` varchar(15) NOT NULL,
  `fk_id_user` int(11) DEFAULT NULL,
  `privacy` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_richiesta`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dump dei dati per la tabella `richieste`
--

INSERT INTO `richieste` (`id_richiesta`, `descrizione`, `fascia`, `fk_id_user`, `privacy`) VALUES
(1, 'Cerco disperatamente una persona per dare ripetizioni di matematica a mio figlio', 'pomeriggio', 4, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `profile_pic` varchar(20) NOT NULL DEFAULT 'default',
  `data_nascita` date NOT NULL,
  `fk_id_quartiere` int(11) DEFAULT NULL,
  `professione` text NOT NULL,
  `skills` text NOT NULL,
  `tipo` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id_user`, `name`, `surname`, `email`, `password`, `profile_pic`, `data_nascita`, `fk_id_quartiere`, `professione`, `skills`, `tipo`) VALUES
(1, 'Michele', 'Iftimie', 'michele@gmail.com', 'f106e246ecdab88cb2262780f60079651aeaa6a3c8f5b1e75fc2ab0582cd3f67', '81', '1999-07-02', 1, 'Ingegnere informatico', 'Team Working;Java;C++', 0),
(2, 'Iulian', 'Prodan', 'Iulian@gmail.com', 'a56f3dbc3053cc78282ebb4360025187945043453f94099157496b76530a404d', 'default', '1994-07-28', 5, 'Informatico', '', 0),
(3, 'Alberto', 'Rosati', 'Alberto@gmail.com', 'ff3b0b79d587d7c2307093c3a41073c21fec14b6dff3ef52879f3408a4251ac6', 'default', '1999-09-07', 2, 'Grafico e designer ', 'Corso Avanzato Photoshop;Conoscenze basilari in HTML;Diploma Al Liceo Artistico', 0),
(4, 'Giorgio', 'Mocci', 'Giorgio@gmail.com', '586acb3c6bac489308c0938f762da702573a714dfdf3a729dcb40758b4c363ae', 'default', '1999-04-01', 2, 'Insegnante', 'Laurea in Lettere Classiche;Certificato Inglese B2;Patentino Europeo PC', 0),
(5, 'Rossana', 'Iftmie', 'rossana@gmail.com', '079f72b26e2a033f43dbf2b8abd52a2cd5def18c5ec76fb984b7d695dfd3387b', 'girl', '2006-01-01', 1, 'studentessa', 'giocare', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `viaggi`
--

CREATE TABLE IF NOT EXISTS `viaggi` (
  `id_viaggio` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id_passeggero` int(11) DEFAULT NULL,
  `fk_id_autista` int(11) DEFAULT NULL,
  `indirizzo_partenza` text NOT NULL,
  `indirizzo_arrivo` text NOT NULL,
  `partenza` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `arrivo` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_viaggio`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
