ALTER TABLE `circle_admin` ADD `address` TINYTEXT NULL AFTER `phone`;



DROP TABLE IF EXISTS `sms_settings`;
CREATE TABLE IF NOT EXISTS `sms_settings` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `service_id` varchar(20) NOT NULL,
  `entity_id` varchar(50) NOT NULL,
  `token` text NOT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_settings`
--

INSERT INTO `sms_settings` (`id`, `username`, `password`, `service_id`, `entity_id`, `token`, `updated_date`) VALUES
(1, 'trafficmankkd', 'CbrdmKKD#123', '10067', '1401599340000045936', '\"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1bmlxdWVfbmFtZSI6IjEwMDY3IDEiLCJuYmYiOjE2NDcwNjAzNjMsImV4cCI6MTY3ODU5NjM2MywiaWF0IjoxNjQ3MDYwMzYzLCJpc3MiOiJodHRwczovL2J1bGtzbXMuYnNubC5pbjo1MDEwIiwiYXVkIjoiMTAwNjcgMSJ9.FQ4-sSQo8Hc2YhWI_l9SZxGAGKOnGaVTN4l0YjFcQ1w\"', '2022-03-12 04:46:07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
