-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2019 at 10:40 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ojt_empty`
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `correctAllData` ()  BEGIN

	UPDATE coreln
    	SET account_no = replace(account_no, '-','');
        
	UPDATE coresv
    	SET account_no = replace(account_no, '-','');
        
	UPDATE coretd
    	SET account_no = replace(account_no, '-','');
        
        
        
	UPDATE mbwinln SET grantedamtorig = grantedamtorig / 100 WHERE correct = 0;
    UPDATE mbwinln SET grantedamt = grantedamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET principal_amt = principal_amt / 100 WHERE correct = 0;
    UPDATE mbwinln SET bal_amt = bal_amt / 100 WHERE correct = 0;
    UPDATE mbwinln SET fixamt = fixamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET acrintamt = acrintamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET cumintpdamt = cumintpdamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET cumnorintamt = cumnorintamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET cumtaxpdamt = cumtaxpdamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET acrpenamt = acrpenamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET cumpenpdamt = cumpenpdamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET cumpripdamt = cumpripdamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET over_due_pri_amt = over_due_pri_amt / 100 WHERE correct = 0;
    UPDATE mbwinln SET acrintoduepriamt = acrintoduepriamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET odueintamt = odueintamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET int_bal_amt = int_bal_amt / 100 WHERE correct = 0;
    UPDATE mbwinln SET pen_bal_amt = pen_bal_amt / 100 WHERE correct = 0;
    UPDATE mbwinln SET correct = 1 WHERE correct = 0;


	UPDATE mbwinsv SET bal_amt = bal_amt / 100 WHERE correct = 0;
    UPDATE mbwinsv SET acrbintamt = acrbintamt / 100 WHERE correct = 0;
    UPDATE mbwinsv SET cumintpdamt = cumintpdamt / 100 WHERE correct = 0;
    UPDATE mbwinsv SET cumtaxwamt = cumtaxwamt / 100 WHERE correct = 0;
    UPDATE mbwinsv SET int_bal_amt = int_bal_amt / 100 WHERE correct = 0;
    UPDATE mbwinsv SET minperbalamt = minperbalamt / 100 WHERE correct = 0;
	UPDATE mbwinsv SET correct = 1 WHERE correct = 0;


	UPDATE mbwintd SET bal_amt = bal_amt / 100 WHERE correct = 0;
    UPDATE mbwintd SET minperbalamt = minperbalamt / 100 WHERE correct = 0;
    UPDATE mbwintd SET int_bal_amt = int_bal_amt / 100 WHERE correct = 0;
	UPDATE mbwintd SET correct = 1 WHERE correct = 0;
        
        
        
	UPDATE migratedln SET loan_amount = loan_amount / 100 WHERE correct = 0;
    UPDATE migratedln SET interest_balance_amount = interest_balance_amount / 100 WHERE correct = 0;
    UPDATE migratedln SET overdue_principal_amount = overdue_principal_amount / 100 WHERE correct = 0;
    UPDATE migratedln SET overdue_interest_amount = overdue_interest_amount / 100 WHERE correct = 0;
    UPDATE migratedln SET penalty_balance_amount = penalty_balance_amount / 100 WHERE correct = 0;
    UPDATE migratedln SET correct = 1 WHERE correct = 0;
    UPDATE migratedln SET account_no = replace(account_no, "'",'') WHERE CHAR_LENGTH(account_no) = 20;
    UPDATE migratedln SET account_no = replace(account_no, "'",0) WHERE CHAR_LENGTH(account_no) = 19 AND (SELECT LEFT(account_no, 1)) = "'";
        


    UPDATE migratedsv SET current_balance = current_balance / 100 WHERE correct = 0;
    UPDATE migratedsv SET available_balance = available_balance / 100 WHERE correct = 0;
    UPDATE migratedsv SET interest_bal = interest_bal / 100 WHERE correct = 0;
    UPDATE migratedsv SET correct = 1 WHERE correct = 0;
    UPDATE migratedsv SET account_no = replace(account_no, "'",'') WHERE CHAR_LENGTH(account_no) = 20;
    UPDATE migratedsv SET account_no = replace(account_no, "'",0) WHERE CHAR_LENGTH(account_no) = 19 AND (SELECT LEFT(account_no, 1)) = "'";
    
    
    	
	UPDATE migratedtd SET current_balance = current_balance / 100 WHERE correct = 0;
    UPDATE migratedtd SET available_balance = available_balance / 100 WHERE correct = 0;
    UPDATE migratedtd SET interest_bal = interest_bal / 100 WHERE correct = 0;
    UPDATE migratedtd SET correct = 1 WHERE correct = 0;
    UPDATE migratedtd SET account_no = replace(account_no, "'",'') WHERE CHAR_LENGTH(account_no) = 20;
    UPDATE migratedtd SET account_no = replace(account_no, "'",0) WHERE CHAR_LENGTH(account_no) = 19 AND (SELECT LEFT(account_no, 1)) = "'";
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `correctCoreData` ()  BEGIN
	UPDATE coreln
    	SET account_no = replace(account_no, '-','');
	UPDATE coresv
    	SET account_no = replace(account_no, '-','');
	UPDATE coretd
    	SET account_no = replace(account_no, '-','');
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `correctMbwinData` ()  BEGIN

	UPDATE mbwinln SET grantedamtorig = grantedamtorig / 100 WHERE correct = 0;
    UPDATE mbwinln SET grantedamt = grantedamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET principal_amt = principal_amt / 100 WHERE correct = 0;
    UPDATE mbwinln SET bal_amt = bal_amt / 100 WHERE correct = 0;
    UPDATE mbwinln SET fixamt = fixamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET acrintamt = acrintamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET cumintpdamt = cumintpdamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET cumnorintamt = cumnorintamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET cumtaxpdamt = cumtaxpdamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET acrpenamt = acrpenamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET cumpenpdamt = cumpenpdamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET cumpripdamt = cumpripdamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET over_due_pri_amt = over_due_pri_amt / 100 WHERE correct = 0;
    UPDATE mbwinln SET acrintoduepriamt = acrintoduepriamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET odueintamt = odueintamt / 100 WHERE correct = 0;
    UPDATE mbwinln SET int_bal_amt = int_bal_amt / 100 WHERE correct = 0;
    UPDATE mbwinln SET pen_bal_amt = pen_bal_amt / 100 WHERE correct = 0;
    UPDATE mbwinln SET correct = 1 WHERE correct = 0;



	UPDATE mbwinsv SET bal_amt = bal_amt / 100 WHERE correct = 0;
    UPDATE mbwinsv SET acrbintamt = acrbintamt / 100 WHERE correct = 0;
    UPDATE mbwinsv SET cumintpdamt = cumintpdamt / 100 WHERE correct = 0;
    UPDATE mbwinsv SET cumtaxwamt = cumtaxwamt / 100 WHERE correct = 0;
    UPDATE mbwinsv SET int_bal_amt = int_bal_amt / 100 WHERE correct = 0;
    UPDATE mbwinsv SET minperbalamt = minperbalamt / 100 WHERE correct = 0;
	UPDATE mbwinsv SET correct = 1 WHERE correct = 0;



	UPDATE mbwintd SET bal_amt = bal_amt / 100 WHERE correct = 0;
    UPDATE mbwintd SET minperbalamt = minperbalamt / 100 WHERE correct = 0;
    UPDATE mbwintd SET int_bal_amt = int_bal_amt / 100 WHERE correct = 0;
	UPDATE mbwintd SET correct = 1 WHERE correct = 0;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `correctMigratedData` ()  BEGIN

    UPDATE migratedln SET loan_amount = loan_amount / 100 WHERE correct = 0;
    UPDATE migratedln SET interest_balance_amount = interest_balance_amount / 100 WHERE correct = 0;
    UPDATE migratedln SET overdue_principal_amount = overdue_principal_amount / 100 WHERE correct = 0;
    UPDATE migratedln SET overdue_interest_amount = overdue_interest_amount / 100 WHERE correct = 0;
    UPDATE migratedln SET penalty_balance_amount = penalty_balance_amount / 100 WHERE correct = 0;
    UPDATE migratedln SET correct = 1 WHERE correct = 0;
    UPDATE migratedln SET account_no = replace(account_no, "'",'') WHERE CHAR_LENGTH(account_no) = 20;
    UPDATE migratedln SET account_no = replace(account_no, "'",0) WHERE CHAR_LENGTH(account_no) = 19 AND (SELECT LEFT(account_no, 1)) = "'";
        


    UPDATE migratedsv SET current_balance = current_balance / 100 WHERE correct = 0;
    UPDATE migratedsv SET available_balance = available_balance / 100 WHERE correct = 0;
    UPDATE migratedsv SET interest_bal = interest_bal / 100 WHERE correct = 0;
    UPDATE migratedsv SET correct = 1 WHERE correct = 0;
    UPDATE migratedsv SET account_no = replace(account_no, "'",'') WHERE CHAR_LENGTH(account_no) = 20;
    UPDATE migratedsv SET account_no = replace(account_no, "'",0) WHERE CHAR_LENGTH(account_no) = 19 AND (SELECT LEFT(account_no, 1)) = "'";
    
    
    	
	UPDATE migratedtd SET current_balance = current_balance / 100 WHERE correct = 0;
    UPDATE migratedtd SET available_balance = available_balance / 100 WHERE correct = 0;
    UPDATE migratedtd SET interest_bal = interest_bal / 100 WHERE correct = 0;
    UPDATE migratedtd SET correct = 1 WHERE correct = 0;
    UPDATE migratedtd SET account_no = replace(account_no, "'",'') WHERE CHAR_LENGTH(account_no) = 20;
    UPDATE migratedtd SET account_no = replace(account_no, "'",0) WHERE CHAR_LENGTH(account_no) = 19 AND (SELECT LEFT(account_no, 1)) = "'";
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllInquire` ()  BEGIN
	TRUNCATE TABLE inquireln;
    TRUNCATE TABLE inquiresv;
    TRUNCATE TABLE inquiretd;    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAllReports` ()  BEGIN
	TRUNCATE TABLE errorln;
    TRUNCATE TABLE errorsv;
    TRUNCATE TABLE errortd;
    TRUNCATE TABLE validateln;
    TRUNCATE TABLE validatesv;
    TRUNCATE TABLE validatetd;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteCoreLoan` ()  BEGIN
	TRUNCATE TABLE coreln;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteCoreSavings` ()  BEGIN
	TRUNCATE TABLE coresv;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteCoreTimeDeposit` ()  BEGIN
	TRUNCATE TABLE coretd;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteMbwinLoan` ()  BEGIN
	TRUNCATE TABLE mbwinln;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteMbwinSavings` ()  BEGIN
	TRUNCATE TABLE mbwinsv;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteMbwinTimeDeposit` ()  BEGIN
	TRUNCATE TABLE mbwintd;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteMigratedLoan` ()  BEGIN
	TRUNCATE TABLE migratedln;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteMigratedSavings` ()  BEGIN
	TRUNCATE TABLE migratedsv;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteMigratedTimeDeposit` ()  BEGIN
	TRUNCATE TABLE migratedtd;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eraseAllData` ()  BEGIN
	TRUNCATE TABLE coreln;
    TRUNCATE TABLE coresv;
    TRUNCATE TABLE coretd;
    TRUNCATE TABLE errorln;
    TRUNCATE TABLE errorsv;
    TRUNCATE TABLE errortd;
    TRUNCATE TABLE inquireln;
    TRUNCATE TABLE inquiresv;
    TRUNCATE TABLE inquiretd;
    TRUNCATE TABLE mbwinln;
    TRUNCATE TABLE mbwinsv;
    TRUNCATE TABLE mbwintd;
    TRUNCATE TABLE migratedln;
    TRUNCATE TABLE migratedsv;
    TRUNCATE TABLE migratedtd;
    TRUNCATE TABLE validateln;
    TRUNCATE TABLE validatesv;
    TRUNCATE TABLE validatetd;
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
	UPDATE migratedln
	SET stat = 1
	WHERE migratedln_id = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `valsv` (IN `id` INT(11))  BEGIN 
	UPDATE migratedsv
	SET stat = 1
	WHERE migratedsv_id = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `valtd` (IN `id` INT(11))  BEGIN 
	UPDATE migratedtd
	SET stat = 1
	WHERE migratedtd_id = id;
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
  `open_date` varchar(30) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `coresv`
--

CREATE TABLE `coresv` (
  `coresv_id` int(11) NOT NULL,
  `account_no` varchar(60) NOT NULL,
  `product_code` int(30) NOT NULL,
  `open_date` varchar(30) NOT NULL,
  `current_bal` decimal(20,2) NOT NULL,
  `available_bal` decimal(20,2) NOT NULL,
  `interest` decimal(20,2) NOT NULL,
  `customer_no` int(30) NOT NULL,
  `customer_name` varchar(60) NOT NULL,
  `account_name` varchar(60) CHARACTER SET utf8 NOT NULL,
  `account_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coretd`
--

CREATE TABLE `coretd` (
  `coretd_id` int(11) NOT NULL,
  `account_no` varchar(60) NOT NULL,
  `product_code` int(30) NOT NULL,
  `open_date` varchar(30) NOT NULL,
  `issue_amount` decimal(20,2) NOT NULL,
  `principal_amount` decimal(20,2) NOT NULL,
  `interest` decimal(20,2) NOT NULL,
  `customer_no` int(30) NOT NULL,
  `customer_name` varchar(60) NOT NULL,
  `account_name` varchar(60) CHARACTER SET utf8 NOT NULL,
  `account_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `stat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inquiresv`
--

CREATE TABLE `inquiresv` (
  `inquiresv_id` int(11) NOT NULL,
  `account_no` varchar(60) NOT NULL,
  `old_account_no` varchar(30) NOT NULL,
  `stat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inquiretd`
--

CREATE TABLE `inquiretd` (
  `inquiretd_id` int(11) NOT NULL,
  `account_no` varchar(60) NOT NULL,
  `old_account_no` varchar(30) NOT NULL,
  `stat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mbwinln`
--

CREATE TABLE `mbwinln` (
  `mbwinln_id` int(11) NOT NULL,
  `correct` int(5) NOT NULL DEFAULT '0',
  `account_no` varchar(30) NOT NULL,
  `check_digit` int(30) NOT NULL,
  `prtype` int(30) NOT NULL,
  `apptype` int(30) NOT NULL,
  `open_date` varchar(30) NOT NULL,
  `pen_rate` int(30) NOT NULL,
  `grantedamtorig` decimal(20,2) NOT NULL,
  `grantedamt` decimal(20,2) NOT NULL,
  `principal_amt` decimal(20,2) NOT NULL,
  `bal_amt` decimal(20,2) NOT NULL,
  `int_rate` int(30) NOT NULL,
  `fixamt` decimal(20,2) NOT NULL,
  `matdate` varchar(30) NOT NULL,
  `acrintamt` decimal(20,2) NOT NULL,
  `cumintpdamt` decimal(20,2) NOT NULL,
  `cumnorintamt` decimal(20,2) NOT NULL,
  `cumtaxpdamt` decimal(20,2) NOT NULL,
  `acrpenamt` decimal(20,2) NOT NULL,
  `cumpenpdamt` decimal(20,2) NOT NULL,
  `inteffdate` varchar(30) NOT NULL,
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
  `correct` int(5) NOT NULL DEFAULT '0',
  `account_no` varchar(30) NOT NULL,
  `check_digit` int(30) NOT NULL,
  `prtype` int(30) NOT NULL,
  `apptype` int(30) NOT NULL,
  `account_name` varchar(60) NOT NULL,
  `aliasname` varchar(60) NOT NULL,
  `accstatus` int(30) NOT NULL,
  `open_date` varchar(30) NOT NULL,
  `bal_amt` decimal(20,2) NOT NULL,
  `intrate` int(30) NOT NULL,
  `inteffdate` varchar(30) NOT NULL,
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
  `correct` int(5) NOT NULL DEFAULT '0',
  `account_no` varchar(30) NOT NULL,
  `check_digit` int(30) NOT NULL,
  `prtype` int(30) NOT NULL,
  `apptype` int(30) NOT NULL,
  `account_name` varchar(60) NOT NULL,
  `open_date` varchar(30) NOT NULL,
  `matdate` varchar(30) NOT NULL,
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
  `stat` int(30) NOT NULL DEFAULT '0',
  `correct` int(5) NOT NULL DEFAULT '0',
  `account_no` varchar(60) NOT NULL,
  `old_account_no` varchar(30) NOT NULL,
  `check_digit` int(30) NOT NULL,
  `account_id` int(30) NOT NULL,
  `product_type` int(30) NOT NULL,
  `product_code` int(30) NOT NULL,
  `branch` int(30) NOT NULL,
  `loan_amount` decimal(20,2) NOT NULL,
  `date_open` varchar(30) NOT NULL,
  `disbursement_date` varchar(30) NOT NULL,
  `maturity_date` varchar(30) NOT NULL,
  `statusid` int(30) NOT NULL,
  `statusdesc` varchar(30) NOT NULL,
  `old_customer_id` int(30) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `interest_balance_amount` decimal(20,2) NOT NULL,
  `overdue_principal_amount` decimal(20,2) NOT NULL,
  `overdue_interest_amount` decimal(20,2) NOT NULL,
  `penalty_balance_amount` decimal(20,2) NOT NULL,
  `principal_frequency` int(30) NOT NULL
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

-- --------------------------------------------------------

--
-- Table structure for table `migratedsv`
--

CREATE TABLE `migratedsv` (
  `migratedsv_id` int(11) NOT NULL,
  `stat` int(30) NOT NULL DEFAULT '0',
  `correct` int(5) NOT NULL DEFAULT '0',
  `account_no` varchar(60) NOT NULL,
  `old_account_no` varchar(30) NOT NULL,
  `check_digit` int(30) NOT NULL,
  `account_id` int(30) NOT NULL,
  `product_type` int(30) NOT NULL,
  `product_code` int(30) NOT NULL,
  `branch` int(30) NOT NULL,
  `date_open` varchar(30) NOT NULL,
  `current_balance` decimal(20,2) NOT NULL,
  `available_balance` decimal(20,2) NOT NULL,
  `statusdesc` varchar(30) NOT NULL,
  `old_alternate_customer` int(30) NOT NULL,
  `new_alternate_customer` int(30) NOT NULL,
  `ownership_type` varchar(30) NOT NULL,
  `old_customer_id` int(30) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `interest_bal` decimal(20,2) NOT NULL,
  `date_last_transaction` varchar(30) NOT NULL,
  `old_passbook_no` int(30) NOT NULL,
  `new_passbook_no` int(30) NOT NULL,
  `maturity_date` varchar(30) NOT NULL,
  `effective_interest_rate` decimal(20,2) NOT NULL,
  `term_in_days` int(30) NOT NULL
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

-- --------------------------------------------------------

--
-- Table structure for table `migratedtd`
--

CREATE TABLE `migratedtd` (
  `migratedtd_id` int(11) NOT NULL,
  `stat` int(30) NOT NULL DEFAULT '0',
  `correct` int(5) NOT NULL DEFAULT '0',
  `account_no` varchar(60) NOT NULL,
  `old_account_no` varchar(30) NOT NULL,
  `check_digit` int(30) NOT NULL,
  `account_id` int(30) NOT NULL,
  `product_type` int(30) NOT NULL,
  `product_code` int(30) NOT NULL,
  `branch` int(30) NOT NULL,
  `date_open` varchar(30) NOT NULL,
  `current_balance` decimal(20,2) NOT NULL,
  `available_balance` decimal(20,2) NOT NULL,
  `statusdesc` varchar(30) NOT NULL,
  `old_alternate_customer` int(30) NOT NULL,
  `new_alternate_customer` int(30) NOT NULL,
  `ownership_type` varchar(30) NOT NULL,
  `old_customer_id` int(30) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `interest_bal` decimal(20,2) NOT NULL,
  `date_last_transaction` varchar(30) NOT NULL,
  `old_passbook_no` int(30) NOT NULL,
  `new_passbook_no` int(30) NOT NULL,
  `maturity_date` varchar(30) NOT NULL,
  `effective_interest_rate` decimal(20,2) NOT NULL,
  `term_in_days` int(30) NOT NULL
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
  `user_level` int(3) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_fname`, `user_lname`, `user_name`, `user_password`, `confirm_password`, `user_level`, `date_created`) VALUES
(21, 'tech', 'staff', 'tech', 'd9f9133fb120cd6096870bc2b496805b', 'tech', 2, '2019-06-04 07:38:37'),
(22, 'coop', 'staff', 'coop', '0b5cb0ec5f538ad96aec1269bec93c9c', 'coop', 3, '2019-06-04 07:38:37'),
(24, 'admin', 'staff', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, '2019-06-04 07:38:37'),
(25, 'Janrey', 'Dumaog', 'janrey', 'eb99b909fb8c2ee0f46e71521d707674', 'lamaw01', 1, '2019-06-04 07:38:37');

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
  ADD PRIMARY KEY (`coreln_id`),
  ADD KEY `account_no` (`account_no`);

--
-- Indexes for table `coresv`
--
ALTER TABLE `coresv`
  ADD PRIMARY KEY (`coresv_id`),
  ADD KEY `account_no` (`account_no`);

--
-- Indexes for table `coretd`
--
ALTER TABLE `coretd`
  ADD PRIMARY KEY (`coretd_id`),
  ADD KEY `account_no` (`account_no`);

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
  ADD PRIMARY KEY (`mbwinln_id`),
  ADD KEY `account_no` (`account_no`);

--
-- Indexes for table `mbwinsv`
--
ALTER TABLE `mbwinsv`
  ADD PRIMARY KEY (`mbwinsv_id`),
  ADD KEY `account_no` (`account_no`);

--
-- Indexes for table `mbwintd`
--
ALTER TABLE `mbwintd`
  ADD PRIMARY KEY (`mbwintd_id`),
  ADD KEY `account_no` (`account_no`);

--
-- Indexes for table `migratedln`
--
ALTER TABLE `migratedln`
  ADD PRIMARY KEY (`migratedln_id`),
  ADD KEY `account_no` (`account_no`),
  ADD KEY `old_account_no` (`old_account_no`);

--
-- Indexes for table `migratedsv`
--
ALTER TABLE `migratedsv`
  ADD PRIMARY KEY (`migratedsv_id`),
  ADD KEY `account_no` (`account_no`),
  ADD KEY `old_account_no` (`old_account_no`);

--
-- Indexes for table `migratedtd`
--
ALTER TABLE `migratedtd`
  ADD PRIMARY KEY (`migratedtd_id`),
  ADD KEY `account_no` (`account_no`),
  ADD KEY `old_account_no` (`old_account_no`);

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
