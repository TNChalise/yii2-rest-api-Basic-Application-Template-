BasicRestAPI
============

Basic Rest API Using Basic Template of Yii2


Assumptions:
======================
1) You have installed Yii2
2) You have created this.
CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `secret_key` varchar(255) NOT NULL COMMENT 'Key uniquely identifies a user',
  `username` varchar(255) NOT NULL,
  `user_device_id` int(11) NOT NULL COMMENT 'Devices user have',
  `email` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `registered_date` datetime NOT NULL COMMENT 'Application joined date',
  `is_active` int(1) NOT NULL,
  `last_logged_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'TIme stamp for last user logged in'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `users` (`user_id`, `secret_key`, `username`, `user_device_id`, `email`, `role_id`, `registered_date`, `is_active`, `last_logged_in`) VALUES
(1, 'xxxxx', 'TNChalise', 1, 'tnc@tnc.com', 1, '2014-12-18 00:00:00', 1, '2014-12-18 09:33:06');



