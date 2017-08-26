CREATE DATABASE `dblogin_sf` ;
CREATE TABLE `dblogin_sf`.`users_sf` (
   `user_id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
   `user_name` VARCHAR( 255 ) NOT NULL ,
   `user_pass` VARCHAR( 255 ) NOT NULL ,
   `user_status` VARCHAR( 255 ) NOT NULL ,
    UNIQUE (`user_name`)
) ENGINE = MYISAM ;



INSERT INTO `users_sf` (`user_id`, `user_name`, `user_pass`, `user_status`) VALUES
(1, 'shweta', '123', 'stu'),
(2, 'anju', '456', 'stu'),
(3, 'ankita', '789', 'stu'),
(4, 'akash', '321', 'stu'),
(5, 'omar', '654', 'stu'),
(6, 'nilay', '987', 'stu'),
(7, 'atul', '234', 'stu'),
(8, 'abhinav', '123', 'prof'),
(9, 'ashutosh', '456', 'prof'),
(10, 'rishit', '789', 'prof'),
(11, 'dipramit', '321', 'prof'),
(12, 'paras', '654', 'prof');



ALTER TABLE `users_sf`
  ADD PRIMARY KEY (`user_id`);




