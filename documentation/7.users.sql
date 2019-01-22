-- Adminer 4.7.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `avatar` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '../avatar/source.gif',
  `login` varchar(25) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `nom` varchar(25) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(25) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'email@email.com',
  `telephone` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT '0000000000',
  `addresse` text COLLATE utf8_bin NOT NULL,
  `biographie` longtext COLLATE utf8_bin NOT NULL,
  `dateco` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `users` (`id`, `avatar`, `login`, `password`, `nom`, `prenom`, `email`, `telephone`, `addresse`, `biographie`, `dateco`) VALUES
(1,	'../avatar/source.gif',	'Aproviste',	'$2y$10$RoriG8hR1N1i8jkzOWCjP.L0B8iYOqXXwk7yQLXU0KxNlBJFazSBq',	'Proviste',	'Alain',	'email@email.com',	'0000000000',	'',	'Dumque ibi diu moratur commeatus opperiens, quorum translationem ex Aquitania verni imbres solito crebriores prohibebant auctique torrentes, Herculanus advenit protector domesticus, Hermogenis ex magistro equitum filius, apud Constantinopolim, ut supra rettulimus, populari quondam turbela discerpti. quo verissime referente quae Gallus egerat, damnis super praeteritis maerens et futurorum timore suspensus angorem animi quam diu potuit emendabat.\r\n\r\nHae duae provinciae bello quondam piratico catervis mixtae praedonum a Servilio pro consule missae sub iugum factae sunt vectigales. et hae quidem regiones velut in prominenti terrarum lingua positae ob orbe eoo monte Amano disparantur.\r\n\r\nNisi mihi Phaedrum, inquam, tu mentitum aut Zenonem putas, quorum utrumque audivi, cum mihi nihil sane praeter sedulitatem probarent, omnes mihi Epicuri sententiae satis notae sunt. atque eos, quos nominavi, cum Attico nostro frequenter audivi, cum miraretur ille quidem utrumque, Phaedrum autem etiam amaret, cotidieque inter nos ea, quae audiebamus, conferebamus, neque erat umquam controversia, quid ego intellegerem, sed quid probarem.\r\n\r\nUtque aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontium caedibus fecit victoriam luctuosam.\r\n\r\nNec sane haec sola pernicies orientem diversis cladibus adfligebat. Namque et Isauri, quibus est usitatum saepe pacari saepeque inopinis excursibus cuncta miscere, ex latrociniis occultis et raris, alente inpunitate adulescentem in peius audaciam ad bella gravia proruperunt, diu quidem perduelles spiritus inrequietis motibus erigentes, hac tamen indignitate perciti vehementer, ut iactitabant, quod eorum capiti quidam consortes apud Iconium Pisidiae oppidum in amphitheatrali spectaculo feris praedatricibus obiecti sunt praeter morem.\r\n\r\nIam in altera philosophiae parte. quae est quaerendi ac disserendi, quae logikh dicitur, iste vester plane, ut mihi quidem videtur, inermis ac nudus est. tollit definitiones, nihil de dividendo ac partiendo docet, non quo modo efficiatur concludaturque ratio tradit, non qua via captiosa solvantur ambigua distinguantur ostendit; iudicia rerum in sensibus ponit, quibus si semel aliquid falsi pro vero probatum sit, sublatum esse omne iudicium veri et falsi putat.\r\n\r\nEt prima post Osdroenam quam, ut dictum est, ab hac descriptione discrevimus, Commagena, nunc Euphratensis, clementer adsurgit, Hierapoli, vetere Nino et Samosata civitatibus amplis inlustris.\r\n\r\nOportunum est, ut arbitror, explanare nunc causam, quae ad exitium praecipitem Aginatium inpulit iam inde a priscis maioribus nobilem, ut locuta est pertinacior fama. nec enim super hoc ulla documentorum rata est fides.\r\n\r\nCum saepe multa, tum memini domi in hemicyclio sedentem, ut solebat, cum et ego essem una et pauci admodum familiares, in eum sermonem illum incidere qui tum forte multis erat in ore. Meministi enim profecto, Attice, et eo magis, quod P. Sulpicio utebare multum, cum is tribunus plebis capitali odio a Q. Pompeio, qui tum erat consul, dissideret, quocum coniunctissime et amantissime vixerat, quanta esset hominum vel admiratio vel querella.\r\n\r\nSed laeditur hic coetuum magnificus splendor levitate paucorum incondita, ubi nati sunt non reputantium, sed tamquam indulta licentia vitiis ad errores lapsorum ac lasciviam. ut enim Simonides lyricus docet, beate perfecta ratione vieturo ante alia patriam esse convenit gloriosam.',	'2018-12-18 10:57:09'),
(2,	'../avatar/logo.png',	'Jouzi',	'$2y$10$z93fC03EAu94oTiQTQGThuMRNI67j2IkAb/T7yjOUMpxo4WHu0nz.',	'Ouzi',	'Jacques',	'email@email.com',	'0000000000',	'',	'Cette biographie de Mr Jaccuzzi est totalement inutile, il ne fait que buller.',	'2018-12-17 11:10:49'),
(3,	'../avatar/logo.png',	'Pochon',	'$2y$10$CDz94dmz3z4MAlBw7d1XOe9XtZLbzqt0TB2CF21XcX8I99htFS08C',	'Ochon',	'Paul',	'email@email.com',	'0000000000',	'',	'text random / Lorem Ipsum',	'2018-12-17 11:10:49'),
(4,	'../avatar/valentin.png',	'valentin',	'$2y$10$1jtXfbi9FjJ0GwHjqlBarOsGlQ668KxrrlCuXNt..XKIMOPVP2NAW',	'Dubrulle',	'Valentin',	'valentin@dubrulle.ovh',	'06 82 12 35 83',	'5, Impasse du Mont de Sienne\r\n50510 CERENCES',	'Etudie ardemment a la MOS',	'2018-12-18 13:05:11'),
(6,	'../avatar/source.gif',	'test',	'$2y$10$IxArQLJnbcGIYKfEmxSXP.juXLn5QcofGZFKES/OTUbeMCEEcbAym',	'test',	'test',	'test@test.fr',	'01 11 11 11 11',	'test',	'test',	'2018-12-18 10:57:45');

-- 2018-12-18 13:21:09
