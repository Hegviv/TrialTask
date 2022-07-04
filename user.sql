
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--

CREATE TABLE `advertisements` (
  `ID` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `advertisements` (`ID`, `userid`, `title`) VALUES
(1, 1, 'ad1'),
(2, 1, 'ad2'),
(3, 2, 'ad3');



CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `users` (`ID`, `name`) VALUES
(1, 'somebody1'),
(2, 'somebody2\n');


ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `userid` (`userid`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `advertisements`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


ALTER TABLE `advertisements`
  ADD CONSTRAINT `advertisements_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`ID`);
COMMIT;
