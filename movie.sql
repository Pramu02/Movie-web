

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `moviename` varchar(150) NOT NULL,
  `moviedescription` varchar(10) NOT NULL,
 `movietime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


 INSERT INTO `movie` (`id`, `moviename`, `moviedescription`, `movietime`) VALUES
     (101, 'Chandigarh kare Ashique', '(PG)', 'Runtime: 1hrs 56min'),
    (105, 'Ethernal', '(U)', 'Runtime: 2hrs 37min'),
     (109, 'Antim', '(U)', 'Runtime: 2hrs 22min'),
     (113, 'Encanto', '(UA)', 'Runtime: 1hrs 39min'),
     (117, 'Sooryavanshi', '(U)', 'Runtime: 2hrs 25min'),
     (121, 'Tadap', '(PG))', 'Runtime: 2hrs 10min');

CREATE TABLE `schedulemovie` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `movieID` int(11) NOT NULL,
 `time` varchar(100) NOT NULL,
 `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `seat`(
  `id` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `number` Varchar(11),
  `row` int (5),
  `column` int (5)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `seat`(`id`,`number`,`row`,`column`)    VALUES
  (1,'J',1,1),(2,'J',1,2),(3,'J',1,3),(4,'J',1,4),(5,'J',1,5),(6,'J',1,6),(7,'J',1,7),(8,'J',1,8),(9,'J',1,9),(10,'J',1,10),(11,'J',1,11),(12,'J',1,12),(13,'J',1,13),(14,'J',1,14),(15,'J',1,15),
  (1,'I',2,1),(2,'I',1,2),(3,'I',1,3),(4,'I',1,4),(5,'I',1,5),(6,'J',1,6),(7,'J',1,7),(8,'J',1,8),(9,'J',1,9),(10,'J',1,10),(11,'J',1,11),(12,'J',1,12),(13,'J',1,13),(14,'J',1,14),(15,'J',1,15),
  (1,'H',3,1),(2,'H',1,2),(3,'H',1,3),(4,'H',1,4),(5,'H',1,5),(6,'J',1,6),(7,'J',1,7),(8,'J',1,8),(9,'J',1,9),(10,'J',1,10),(11,'J',1,11),(12,'J',1,12),(13,'J',1,13),(14,'J',1,14),(15,'J',1,15),
  (1,'G',4,1),(2,'G',1,2),(3,'G',1,3),(4,'G',1,4),(5,'G',1,5),(6,'G',1,6),(7,'J',1,7),(8,'J',1,8),(9,'J',1,9),(10,'J',1,10),(11,'J',1,11),(12,'J',1,12),(13,'J',1,13),(14,'J',1,14),(15,'J',1,15),
  (1,'F',5,1),(2,'F',1,2),(3,'F',1,3),(4,'F',1,4),(5,'F',1,5),(6,'F',1,6),(7,'J',1,7),(8,'J',1,8),(9,'J',1,9),(10,'J',1,10),(11,'J',1,11),(12,'J',1,12),(13,'J',1,13),(14,'J',1,14),(15,'J',1,15),
  (1,'E',6,1),(2,'E',1,2),(3,'E',1,3),(4,'E',1,4),(5,'E',1,5),(6,'E',1,6),(7,'J',1,7),(8,'J',1,8),(9,'J',1,9),(10,'J',1,10),(11,'J',1,11),(12,'J',1,12),(13,'J',1,13),(14,'J',1,14),(15,'J',1,15),
  (1,'D',7,1),(2,'D',1,2),(3,'D',1,3),(4,'D',1,4),(5,'D',1,5),(6,'D',1,6),(7,'J',1,7),(8,'J',1,8),(9,'J',1,9),(10,'J',1,10),(11,'J',1,11),(12,'J',1,12),(13,'J',1,13),(14,'J',1,14),(15,'J',1,15),
  (1,'C',8,1),(2,'C',1,2),(3,'C',1,3),(4,'C',1,4),(5,'C',1,5),(6,'C',1,6),(7,'J',1,7),(8,'J',1,8),(9,'J',1,9),(10,'J',1,10),(11,'J',1,11),(12,'J',1,12),(13,'J',1,13),(14,'J',1,14),(15,'J',1,15),
  (1,'B',9,1),(2,'B',1,2),(3,'B',1,3),(4,'B',1,4),(5,'B',1,5),(6,'B',1,6),(7,'J',1,7),(8,'J',1,8),(9,'J',1,9),(10,'J',1,10),(11,'J',1,11),(12,'J',1,12),(13,'J',1,13),(14,'J',1,14),(15,'J',1,15),
  (1,'A',10,1),(2,'A',1,2),(3,'A',1,3),(4,'A',1,4),(5,'A',1,5),(6,'A',1,6),(7,'J',1,7),(8,'J',1,8),(9,'J',1,9),(10,'J',1,10),(11,'J',1,11),(12,'J',1,12),(13,'J',1,13),(14,'J',1,14),(15,'J',1,15),
  

CREATE TABLE `reservation`(
  `id` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `scheduledmovie` int(11),
  `seatnum` int(5),
  `customerId` int(11),
  `haspaidTicket` int(5) 
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `customer`(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(150),
  `name` varchar(150)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

    


ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE `schedulemovie` ADD CONSTRAINT
 `movieID`FOREIGN KEY (`id`) REFERENCES `movie`(`id`);

 ALTER TABLE `reservation` ADD CONSTRAINT
 `scheduledmovie`FOREIGN KEY (`id`) REFERENCES `schedulemovie`(`id`);

 ALTER TABLE `reservation` ADD CONSTRAINT
 `seatnum`FOREIGN KEY (`id`) REFERENCES `seat`(`id`);

 ALTER TABLE `reservation` ADD CONSTRAINT
 `customerID`FOREIGN KEY (`id`) REFERENCES `customer`(`id`);