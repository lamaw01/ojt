-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2019 at 11:22 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `branch2`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `checkvalln` (IN `id` INT(11))  BEGIN
    SELECT migratedln.migratedln_id, coreln.account_no AS coreln_account_no, mbwinln.account_no AS mbwinln_acc_no
    FROM coreln
    INNER JOIN migratedln ON migratedln.account_no = coreln.account_no
    INNER JOIN mbwinln ON migratedln.old_account_no = mbwinln.account_no
    WHERE coreln.open_date = mbwinln.open_date
    AND coreln.int_rate = mbwinln.int_rate
    AND coreln.penalty_rate = mbwinln.pen_rate
    AND coreln.loan_amount = mbwinln.principal_amt
    AND coreln.outstanding_bal = mbwinln.bal_amt
    AND coreln.overdue_principal = mbwinln.over_due_pri_amt
    AND coreln.interest_due_amount = mbwinln.int_bal_amt
    AND coreln.penalty = mbwinln.pen_bal_amt
	AND migratedln.migratedln_id = id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `checkvalsv` (IN `id` INT(11))  BEGIN
    SELECT migratedsv.migratedsv_id, coresv.account_no AS coresv_account_no, mbwinsv.account_no AS mbwinsv_acc_no
    FROM coresv
    INNER JOIN migratedsv ON migratedsv.account_no = coresv.account_no
    INNER JOIN mbwinsv ON migratedsv.old_account_no = mbwinsv.account_no
    WHERE coresv.open_date = mbwinsv.open_date
    AND coresv.current_bal = mbwinsv.bal_amt
    AND coresv.interest = mbwinsv.int_bal_amt
    AND coresv.account_name = mbwinsv.account_name
    AND migratedsv.migratedsv_id = id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `checkvaltd` (IN `id` INT(11))  BEGIN
    SELECT migratedtd.migratedtd_id, coretd.account_no AS coretd_account_no, mbwintd.account_no AS mbwintd_acc_no
    FROM coretd
    INNER JOIN migratedtd ON migratedtd.account_no = coretd.account_no
    INNER JOIN mbwintd ON migratedtd.old_account_no = mbwintd.account_no
    WHERE coretd.open_date = mbwintd.open_date
    AND coretd.principal_amount = mbwintd.bal_amt
    AND coretd.interest = mbwintd.int_bal_amt
    AND coretd.account_name = mbwintd.account_name
    AND migratedtd.migratedtd_id = id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `errln` (IN `id` INT(11))  BEGIN 

	UPDATE migratedln
	SET stat = 2
	WHERE migratedln_id = id;
        
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `errsv` (IN `id` INT(11))  BEGIN 

	UPDATE migratedsv
    SET stat = 2
	WHERE migratedsv_id = id;
        
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `errtd` (IN `id` INT(11))  BEGIN 

	UPDATE migratedtd	
    SET stat = 2
	WHERE migratedtd_id = id;
        
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `valln` (IN `id` INT(11))  BEGIN 

    IF (SELECT coreln.int_rate, coreln.penalty_rate, coreln.loan_amount, coreln.outstanding_bal, coreln.overdue_principal, coreln.interest_due_amount, coreln.penalty FROM coreln
        LEFT JOIN migratedln ON migratedln.account_no = coreln.account_no
        LEFT JOIN mbwinln ON migratedln.old_account_no = mbwinln.account_no
        WHERE coreln.int_rate = mbwinln.int_rate
        AND coreln.penalty_rate = mbwinln.pen_rate
        AND coreln.loan_amount = mbwinln.principal_amt
        AND coreln.outstanding_bal = mbwinln.bal_amt
        AND coreln.overdue_principal = mbwinln.over_due_pri_amt
        AND coreln.interest_due_amount = mbwinln.int_bal_amt
        AND coreln.penalty = mbwinln.pen_bal_amt
        AND migratedln.stat = 0
        AND migratedln.migratedln_id = id) = (SELECT mbwinln.int_rate, mbwinln.pen_rate, mbwinln.principal_amt, mbwinln.bal_amt, mbwinln.over_due_pri_amt, mbwinln.int_bal_amt, mbwinln.pen_bal_amt FROM mbwinln 
        LEFT JOIN migratedln ON migratedln.old_account_no = mbwinln.account_no
        LEFT JOIN coreln ON migratedln.account_no = coreln.account_no                           
        WHERE mbwinln.int_rate = coreln.int_rate
        AND mbwinln.pen_rate = coreln.penalty_rate
        AND mbwinln.principal_amt = coreln.loan_amount
        AND mbwinln.bal_amt = coreln.outstanding_bal
        AND mbwinln.over_due_pri_amt = coreln.overdue_principal
        AND mbwinln.int_bal_amt = coreln.interest_due_amount
        AND mbwinln.pen_bal_amt = coreln.penalty
        AND migratedln.stat = 0
        AND migratedln.migratedln_id = id)
        
        THEN

        UPDATE migratedln
        SET stat = 1
        WHERE migratedln_id = id;
        
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `valsv` (IN `id` INT(11))  BEGIN 

    IF (SELECT coresv.open_date, coresv.current_bal, coresv.interest
    FROM coresv
    INNER JOIN migratedsv ON migratedsv.account_no = coresv.account_no
    INNER JOIN mbwinsv ON migratedsv.old_account_no = mbwinsv.account_no
    WHERE coresv.open_date = mbwinsv.open_date
    AND coresv.current_bal = mbwinsv.bal_amt
    AND coresv.interest = mbwinsv.int_bal_amt
    AND migratedsv.migratedsv_id = id) = (SELECT mbwinsv.open_date, mbwinsv.bal_amt, mbwinsv.int_bal_amt
    FROM mbwinsv
    INNER JOIN migratedsv ON migratedsv.old_account_no = mbwinsv.account_no
    INNER JOIN coresv ON migratedsv.account_no = coresv.account_no
    WHERE mbwinsv.open_date = coresv.open_date
    AND mbwinsv.bal_amt = coresv.current_bal
    AND mbwinsv.int_bal_amt = coresv.interest
    AND migratedsv.migratedsv_id = id)
        
        THEN

        UPDATE migratedsv
        SET stat = 1
        WHERE migratedsv_id = id;
        
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `valtd` (IN `id` INT(11))  BEGIN 

    IF (SELECT coretd.open_date, coretd.principal_amount, coretd.interest
    FROM coretd
    INNER JOIN migratedtd ON migratedtd.account_no = coretd.account_no
    INNER JOIN mbwintd ON migratedtd.old_account_no = mbwintd.account_no
    WHERE coretd.open_date = mbwintd.open_date
    AND coretd.principal_amount = mbwintd.bal_amt
    AND coretd.interest = mbwintd.int_bal_amt
    AND migratedtd.migratedtd_id = id) = (SELECT mbwintd.open_date, mbwintd.bal_amt, mbwintd.int_bal_amt
    FROM mbwintd
    INNER JOIN migratedtd ON migratedtd.old_account_no = mbwintd.account_no
    INNER JOIN coretd ON migratedtd.account_no = coretd.account_no
    WHERE mbwintd.open_date = coretd.open_date
    AND mbwintd.bal_amt = coretd.principal_amount
    AND mbwintd.int_bal_amt = coretd.interest
    AND migratedtd.migratedtd_id = id)
        
		THEN

        UPDATE migratedtd
        SET stat = 1
        WHERE migratedtd_id = id;
        
    END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `coreln`
--

CREATE TABLE `coreln` (
  `coreln_id` int(11) NOT NULL,
  `account_no` varchar(60) NOT NULL,
  `product_code` int(30) NOT NULL,
  `open_date` date NOT NULL,
  `int_rate` int(30) NOT NULL,
  `penalty_rate` int(30) NOT NULL,
  `loan_amount` decimal(20,2) NOT NULL,
  `outstanding_bal` decimal(20,2) NOT NULL,
  `overdue_principal` decimal(20,2) NOT NULL,
  `interest_due_amount` decimal(20,2) NOT NULL,
  `pri_paid` int(30) NOT NULL,
  `penalty` decimal(20,2) NOT NULL,
  `customer_no` int(30) NOT NULL,
  `customer_name` varchar(60) NOT NULL,
  `account_name` varchar(60) CHARACTER SET utf8 NOT NULL,
  `account_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `coreln`
--
DELIMITER $$
CREATE TRIGGER `delln` AFTER INSERT ON `coreln` FOR EACH ROW BEGIN
	UPDATE coreln 
	SET account_no = replace(account_no, '-','');
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertErrln` AFTER UPDATE ON `coreln` FOR EACH ROW BEGIN
        INSERT INTO errorln(account_no, int_rate, penalty_rate, loan_amount, outstanding_bal, overdue_principal, interest_due_amount, penalty)
        VALUES(OLD.account_no, OLD.int_rate, OLD.penalty_rate, OLD.loan_amount, OLD.outstanding_bal, OLD.overdue_principal, OLD.interest_due_amount, OLD.penalty);

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `coresv`
--

CREATE TABLE `coresv` (
  `coresv_id` int(11) NOT NULL,
  `account_no` varchar(60) NOT NULL,
  `product_code` int(30) NOT NULL,
  `open_date` date NOT NULL,
  `current_bal` decimal(20,2) NOT NULL,
  `available_bal` decimal(20,2) NOT NULL,
  `interest` decimal(20,2) NOT NULL,
  `customer_no` int(30) NOT NULL,
  `customer_name` varchar(60) NOT NULL,
  `account_name` varchar(60) CHARACTER SET utf8 NOT NULL,
  `account_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `coresv`
--
DELIMITER $$
CREATE TRIGGER `delsv` AFTER INSERT ON `coresv` FOR EACH ROW BEGIN
	UPDATE coresv
	SET account_no = replace(account_no, '-','');
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertErrsv` AFTER UPDATE ON `coresv` FOR EACH ROW BEGIN

    	INSERT INTO errorsv(account_no, open_date, current_bal, interest)
        VALUES(OLD.account_no, OLD.open_date, OLD.current_bal, OLD.interest);
    
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `coretd`
--

CREATE TABLE `coretd` (
  `coretd_id` int(11) NOT NULL,
  `account_no` varchar(60) NOT NULL,
  `product_code` int(30) NOT NULL,
  `open_date` date NOT NULL,
  `issue_amount` decimal(20,2) NOT NULL,
  `principal_amount` decimal(20,2) NOT NULL,
  `interest` decimal(20,2) NOT NULL,
  `customer_no` int(30) NOT NULL,
  `customer_name` varchar(60) NOT NULL,
  `account_name` varchar(60) CHARACTER SET utf8 NOT NULL,
  `account_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `coretd`
--
DELIMITER $$
CREATE TRIGGER `deltd` AFTER INSERT ON `coretd` FOR EACH ROW BEGIN
	UPDATE coretd
	SET account_no = replace(account_no, '-','');
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertErrtd` AFTER UPDATE ON `coretd` FOR EACH ROW BEGIN

    	INSERT INTO errortd(account_no, open_date, principal_amount, interest)
        VALUES(OLD.account_no, OLD.open_date, OLD.principal_amount, OLD.interest);
    
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `errorln`
--

CREATE TABLE `errorln` (
  `errorln_id` int(11) NOT NULL,
  `coreln_id` varchar(60) NOT NULL,
  `mbwinln_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `errorln`
--
DELIMITER $$
CREATE TRIGGER `errorinquireln` AFTER INSERT ON `errorln` FOR EACH ROW BEGIN
	INSERT INTO inquireln(account_no, old_account_no, stat)
    VALUES(NEW.coreln_id, NEW.mbwinln_id, 'Error');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `errorsv`
--

CREATE TABLE `errorsv` (
  `errorsv_id` int(11) NOT NULL,
  `coresv_id` varchar(60) NOT NULL,
  `mbwinsv_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `errorsv`
--
DELIMITER $$
CREATE TRIGGER `errorinquiresv` AFTER INSERT ON `errorsv` FOR EACH ROW BEGIN
	INSERT INTO inquiresv(account_no, old_account_no, stat)
    VALUES(NEW.coresv_id, NEW.mbwinsv_id, 'Error');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `errortd`
--

CREATE TABLE `errortd` (
  `errortd_id` int(11) NOT NULL,
  `coretd_id` varchar(60) NOT NULL,
  `mbwintd_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `errortd`
--
DELIMITER $$
CREATE TRIGGER `errorinquiretd` AFTER INSERT ON `errortd` FOR EACH ROW BEGIN
	INSERT INTO inquiretd(account_no, old_account_no, stat)
    VALUES(NEW.coretd_id, NEW.mbwintd_id, 'Error');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `inquireln`
--

CREATE TABLE `inquireln` (
  `inquireln_id` int(11) NOT NULL,
  `account_no` varchar(60) NOT NULL,
  `old_account_no` varchar(30) NOT NULL,
  `stat` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inquiresv`
--

CREATE TABLE `inquiresv` (
  `inquiresv_id` int(11) NOT NULL,
  `account_no` varchar(60) NOT NULL,
  `old_account_no` varchar(30) NOT NULL,
  `stat` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inquiretd`
--

CREATE TABLE `inquiretd` (
  `inquiretd_id` int(11) NOT NULL,
  `account_no` varchar(60) NOT NULL,
  `old_account_no` varchar(30) NOT NULL,
  `stat` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mbwinln`
--

CREATE TABLE `mbwinln` (
  `mbwinln_id` int(11) NOT NULL,
  `account_no` varchar(30) NOT NULL,
  `check_digit` int(30) NOT NULL,
  `prtype` int(30) NOT NULL,
  `apptype` int(30) NOT NULL,
  `open_date` date NOT NULL,
  `pen_rate` int(30) NOT NULL,
  `grantedamtorig` decimal(20,2) NOT NULL,
  `grantedamt` decimal(20,2) NOT NULL,
  `principal_amt` decimal(20,2) NOT NULL,
  `bal_amt` decimal(20,2) NOT NULL,
  `int_rate` int(30) NOT NULL,
  `fixamt` decimal(20,2) NOT NULL,
  `matdate` date NOT NULL,
  `acrintamt` decimal(20,2) NOT NULL,
  `cumintpdamt` decimal(20,2) NOT NULL,
  `cumnorintamt` decimal(20,2) NOT NULL,
  `cumtaxpdamt` decimal(20,2) NOT NULL,
  `acrpenamt` decimal(20,2) NOT NULL,
  `cumpenpdamt` decimal(20,2) NOT NULL,
  `inteffdate` date NOT NULL,
  `cumpripdamt` decimal(20,2) NOT NULL,
  `over_due_pri_amt` decimal(20,2) NOT NULL,
  `acrintoduepriamt` decimal(20,2) NOT NULL,
  `odueintamt` decimal(20,2) NOT NULL,
  `int_bal_amt` decimal(20,2) NOT NULL,
  `pen_bal_amt` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mbwinsv`
--

CREATE TABLE `mbwinsv` (
  `mbwinsv_id` int(11) NOT NULL,
  `account_no` varchar(30) NOT NULL,
  `check_digit` int(30) NOT NULL,
  `prtype` int(30) NOT NULL,
  `apptype` int(30) NOT NULL,
  `account_name` varchar(60) NOT NULL,
  `aliasname` varchar(60) NOT NULL,
  `accstatus` int(30) NOT NULL,
  `open_date` date NOT NULL,
  `bal_amt` decimal(20,2) NOT NULL,
  `intrate` int(30) NOT NULL,
  `inteffdate` date NOT NULL,
  `acrbintamt` decimal(20,2) NOT NULL,
  `cumintpdamt` decimal(20,2) NOT NULL,
  `cumtaxwamt` decimal(20,2) NOT NULL,
  `int_bal_amt` decimal(20,2) NOT NULL,
  `minperbalamt` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mbwintd`
--

CREATE TABLE `mbwintd` (
  `mbwintd_id` int(11) NOT NULL,
  `account_no` varchar(30) NOT NULL,
  `check_digit` int(30) NOT NULL,
  `prtype` int(30) NOT NULL,
  `apptype` int(30) NOT NULL,
  `account_name` varchar(60) NOT NULL,
  `open_date` date NOT NULL,
  `matdate` date NOT NULL,
  `term` int(30) NOT NULL,
  `bal_amt` decimal(20,2) NOT NULL,
  `intrate` decimal(20,2) NOT NULL,
  `minperbalamt` decimal(20,2) NOT NULL,
  `int_bal_amt` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migratedln`
--

CREATE TABLE `migratedln` (
  `migratedln_id` int(11) NOT NULL,
  `account_no` varchar(60) NOT NULL,
  `old_account_no` varchar(30) NOT NULL,
  `check_digit` int(30) NOT NULL,
  `account_id` int(30) NOT NULL,
  `product_type` int(30) NOT NULL,
  `product_code` int(30) NOT NULL,
  `branch` int(30) NOT NULL,
  `loan_amount` decimal(20,2) NOT NULL,
  `date_open` date NOT NULL,
  `disbursement_date` date NOT NULL,
  `maturity_date` date NOT NULL,
  `statusid` int(30) NOT NULL,
  `statusdesc` varchar(30) NOT NULL,
  `old_customer_id` int(30) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `interest_balance_amount` decimal(20,2) NOT NULL,
  `overdue_principal_amount` decimal(20,2) NOT NULL,
  `overdue_interest_amount` decimal(20,2) NOT NULL,
  `penalty_balance_amount` decimal(20,2) NOT NULL,
  `principal_frequency` int(30) NOT NULL,
  `stat` int(30) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `migratedln`
--
DELIMITER $$
CREATE TRIGGER `insertloan` AFTER UPDATE ON `migratedln` FOR EACH ROW BEGIN
	
    IF NEW.stat = 1 THEN
    
        INSERT INTO validateln(coreln_id, mbwinln_id)
        VALUES(OLD.account_no, OLD.old_account_no);

	ELSEIF NEW.stat = 2 THEN
    
        INSERT INTO errorln(coreln_id, mbwinln_id)
        VALUES(OLD.account_no, OLD.old_account_no);
    
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateln` AFTER INSERT ON `migratedln` FOR EACH ROW BEGIN
	UPDATE migratedln 
    SET account_no = replace(account_no, "'",0);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `migratedsv`
--

CREATE TABLE `migratedsv` (
  `migratedsv_id` int(11) NOT NULL,
  `account_no` varchar(60) NOT NULL,
  `old_account_no` varchar(30) NOT NULL,
  `check_digit` int(30) NOT NULL,
  `account_id` int(30) NOT NULL,
  `product_type` int(30) NOT NULL,
  `product_code` int(30) NOT NULL,
  `branch` int(30) NOT NULL,
  `date_open` date NOT NULL,
  `current_balace` decimal(20,2) NOT NULL,
  `available_balance` decimal(20,2) NOT NULL,
  `statusdesc` varchar(30) NOT NULL,
  `old_alternate_customer` int(30) NOT NULL,
  `new_alternate_customer` int(30) NOT NULL,
  `ownershir_type` varchar(30) NOT NULL,
  `old_customer_id` int(30) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `intrest_bal` decimal(20,2) NOT NULL,
  `date_last_transaction` date NOT NULL,
  `old_passbook_no` int(30) NOT NULL,
  `new_passbook_no` int(30) NOT NULL,
  `maturity_date` date NOT NULL,
  `effective_interest_rate` int(30) NOT NULL,
  `term_in_days` int(30) NOT NULL,
  `stat` int(30) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `migratedsv`
--
DELIMITER $$
CREATE TRIGGER `insertsavings` AFTER UPDATE ON `migratedsv` FOR EACH ROW BEGIN
	
    IF NEW.stat = 1 THEN
    
        INSERT INTO validatesv(coresv_id, mbwinsv_id)
        VALUES(OLD.account_no, OLD.old_account_no);

	ELSEIF NEW.stat = 2 THEN
    
        INSERT INTO errorsv(coresv_id, mbwinsv_id)
        VALUES(OLD.account_no, OLD.old_account_no);
    
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updatesv` AFTER INSERT ON `migratedsv` FOR EACH ROW BEGIN
	UPDATE migratedsv
    SET account_no = replace(account_no, "'",0);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `migratedtd`
--

CREATE TABLE `migratedtd` (
  `migratedtd_id` int(11) NOT NULL,
  `account_no` varchar(60) NOT NULL,
  `old_account_no` varchar(30) NOT NULL,
  `check_digit` int(30) NOT NULL,
  `account_id` int(30) NOT NULL,
  `product_type` int(30) NOT NULL,
  `product_code` int(30) NOT NULL,
  `branch` int(30) NOT NULL,
  `date_open` date NOT NULL,
  `current_balance` decimal(20,2) NOT NULL,
  `available_balance` decimal(20,2) NOT NULL,
  `statusdesc` varchar(30) NOT NULL,
  `old_alternate_customer` int(30) NOT NULL,
  `new_alternate_customer` int(30) NOT NULL,
  `ownership_type` varchar(30) NOT NULL,
  `old_customer_id` int(30) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `interest_bal` decimal(20,2) NOT NULL,
  `date_last_transaction` date NOT NULL,
  `old_passbook_no` int(30) NOT NULL,
  `new_passbook_no` int(30) NOT NULL,
  `maturity_date` date NOT NULL,
  `effective_interest_rate` decimal(20,2) NOT NULL,
  `term_in_days` int(30) NOT NULL,
  `stat` int(30) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `migratedtd`
--
DELIMITER $$
CREATE TRIGGER `inserttimedeposit` AFTER UPDATE ON `migratedtd` FOR EACH ROW BEGIN
	
    IF NEW.stat = 1 THEN
    
        INSERT INTO validatetd(coretd_id, mbwintd_id)
        VALUES(OLD.account_no, OLD.old_account_no);

	ELSEIF NEW.stat = 2 THEN
    
        INSERT INTO errortd(coretd_id, mbwintd_id)
        VALUES(OLD.account_no, OLD.old_account_no);
    
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `user_level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_fname`, `user_lname`, `user_name`, `user_password`, `confirm_password`, `user_level`) VALUES
(7, 'Janrey', 'Dumaog', 'dumaog.janrey@gmail.com', '202cb962ac59075b964b07152d234b70', 'lamaw01', 1),
(8, 'Kenneth', 'Sanchez', 'janreylamaw@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 2),
(9, 'Jerry Paul', 'Daya', 'janreydota@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '12345', 3),
(17, 'Janrey', 'Dumaog', 'janrey', 'eb99b909fb8c2ee0f46e71521d707674', 'lamaw01', 1),
(18, 'Kenneth', 'Sanchez', 'kenneth', '202cb962ac59075b964b07152d234b70', '123', 2),
(19, 'Jerry', 'Daya', 'daya', '202cb962ac59075b964b07152d234b70', '123', 3),
(20, 'ji', 'ura', 'jiura35', '92daa86ad43a42f28f4bf58e94667c95', '098', 2);

-- --------------------------------------------------------

--
-- Table structure for table `validateln`
--

CREATE TABLE `validateln` (
  `validateln_id` int(11) NOT NULL,
  `coreln_id` varchar(60) NOT NULL,
  `mbwinln_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `validateln`
--
DELIMITER $$
CREATE TRIGGER `valinquireln` AFTER INSERT ON `validateln` FOR EACH ROW BEGIN
	INSERT INTO inquireln(account_no, old_account_no, stat)
    VALUES(NEW.coreln_id, NEW.mbwinln_id, 'Validated');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `validatesv`
--

CREATE TABLE `validatesv` (
  `validatesv_id` int(11) NOT NULL,
  `coresv_id` varchar(60) NOT NULL,
  `mbwinsv_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `validatesv`
--
DELIMITER $$
CREATE TRIGGER `valinquiresv` AFTER INSERT ON `validatesv` FOR EACH ROW BEGIN
	INSERT INTO inquiresv(account_no, old_account_no, stat)
    VALUES(NEW.coresv_id, NEW.mbwinsv_id, 'Validated');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `validatetd`
--

CREATE TABLE `validatetd` (
  `validatetd_id` int(11) NOT NULL,
  `coretd_id` varchar(60) NOT NULL,
  `mbwintd_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `validatetd`
--
DELIMITER $$
CREATE TRIGGER `valinquiretd` AFTER INSERT ON `validatetd` FOR EACH ROW BEGIN
	INSERT INTO inquiretd(account_no, old_account_no, stat)
    VALUES(NEW.coretd_id, NEW.mbwintd_id, 'Validated');
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coreln`
--
ALTER TABLE `coreln`
  ADD PRIMARY KEY (`coreln_id`);

--
-- Indexes for table `coresv`
--
ALTER TABLE `coresv`
  ADD PRIMARY KEY (`coresv_id`);

--
-- Indexes for table `coretd`
--
ALTER TABLE `coretd`
  ADD PRIMARY KEY (`coretd_id`);

--
-- Indexes for table `errorln`
--
ALTER TABLE `errorln`
  ADD PRIMARY KEY (`errorln_id`);

--
-- Indexes for table `errorsv`
--
ALTER TABLE `errorsv`
  ADD PRIMARY KEY (`errorsv_id`);

--
-- Indexes for table `errortd`
--
ALTER TABLE `errortd`
  ADD PRIMARY KEY (`errortd_id`);

--
-- Indexes for table `inquireln`
--
ALTER TABLE `inquireln`
  ADD PRIMARY KEY (`inquireln_id`);

--
-- Indexes for table `inquiresv`
--
ALTER TABLE `inquiresv`
  ADD PRIMARY KEY (`inquiresv_id`);

--
-- Indexes for table `inquiretd`
--
ALTER TABLE `inquiretd`
  ADD PRIMARY KEY (`inquiretd_id`);

--
-- Indexes for table `mbwinln`
--
ALTER TABLE `mbwinln`
  ADD PRIMARY KEY (`mbwinln_id`);

--
-- Indexes for table `mbwinsv`
--
ALTER TABLE `mbwinsv`
  ADD PRIMARY KEY (`mbwinsv_id`);

--
-- Indexes for table `mbwintd`
--
ALTER TABLE `mbwintd`
  ADD PRIMARY KEY (`mbwintd_id`);

--
-- Indexes for table `migratedln`
--
ALTER TABLE `migratedln`
  ADD PRIMARY KEY (`migratedln_id`);

--
-- Indexes for table `migratedsv`
--
ALTER TABLE `migratedsv`
  ADD PRIMARY KEY (`migratedsv_id`);

--
-- Indexes for table `migratedtd`
--
ALTER TABLE `migratedtd`
  ADD PRIMARY KEY (`migratedtd_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_name`);

--
-- Indexes for table `validateln`
--
ALTER TABLE `validateln`
  ADD PRIMARY KEY (`validateln_id`);

--
-- Indexes for table `validatesv`
--
ALTER TABLE `validatesv`
  ADD PRIMARY KEY (`validatesv_id`);

--
-- Indexes for table `validatetd`
--
ALTER TABLE `validatetd`
  ADD PRIMARY KEY (`validatetd_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coreln`
--
ALTER TABLE `coreln`
  MODIFY `coreln_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coresv`
--
ALTER TABLE `coresv`
  MODIFY `coresv_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coretd`
--
ALTER TABLE `coretd`
  MODIFY `coretd_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `errorln`
--
ALTER TABLE `errorln`
  MODIFY `errorln_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `errorsv`
--
ALTER TABLE `errorsv`
  MODIFY `errorsv_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `errortd`
--
ALTER TABLE `errortd`
  MODIFY `errortd_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inquireln`
--
ALTER TABLE `inquireln`
  MODIFY `inquireln_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inquiresv`
--
ALTER TABLE `inquiresv`
  MODIFY `inquiresv_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inquiretd`
--
ALTER TABLE `inquiretd`
  MODIFY `inquiretd_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mbwinln`
--
ALTER TABLE `mbwinln`
  MODIFY `mbwinln_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mbwinsv`
--
ALTER TABLE `mbwinsv`
  MODIFY `mbwinsv_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mbwintd`
--
ALTER TABLE `mbwintd`
  MODIFY `mbwintd_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migratedln`
--
ALTER TABLE `migratedln`
  MODIFY `migratedln_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migratedsv`
--
ALTER TABLE `migratedsv`
  MODIFY `migratedsv_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migratedtd`
--
ALTER TABLE `migratedtd`
  MODIFY `migratedtd_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `validateln`
--
ALTER TABLE `validateln`
  MODIFY `validateln_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `validatesv`
--
ALTER TABLE `validatesv`
  MODIFY `validatesv_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `validatetd`
--
ALTER TABLE `validatetd`
  MODIFY `validatetd_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
