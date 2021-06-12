-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 06:01 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riafynse-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_companies`
--

CREATE TABLE `tbl_companies` (
  `pk_int_companies_id` int(11) NOT NULL,
  `vchr_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dec_CurrentMarketPrice` decimal(9,2) NOT NULL,
  `dec_MarketCap` decimal(9,2) NOT NULL,
  `dec_StockPE` decimal(5,2) NOT NULL,
  `dec_DividendYield` decimal(5,2) NOT NULL,
  `dec_ROCEPercent` decimal(5,2) NOT NULL,
  `dec_ROEPreviousAnnum` decimal(5,2) NOT NULL,
  `dec_DebttoEquity` decimal(5,2) NOT NULL,
  `dec_EPS` decimal(5,2) NOT NULL,
  `dec_Reserves` decimal(9,2) NOT NULL,
  `dec_Debt` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_companies`
--

INSERT INTO `tbl_companies` (`pk_int_companies_id`, `vchr_name`, `dec_CurrentMarketPrice`, `dec_MarketCap`, `dec_StockPE`, `dec_DividendYield`, `dec_ROCEPercent`, `dec_ROEPreviousAnnum`, `dec_DebttoEquity`, `dec_EPS`, `dec_Reserves`, `dec_Debt`) VALUES
(1, 'Bhansali Engg.', '158.25', '2625.46', '7.86', '0.63', '86.18', '20.21', '0.00', '20.13', '664.76', '0.00'),
(2, 'Coal India', '147.45', '90869.43', '7.13', '8.48', '73.08', '74.90', '0.13', '20.69', '30920.81', '4808.98'),
(3, 'IOL Chemicals', '617.15', '3623.01', '7.88', '0.65', '68.87', '69.54', '0.02', '78.78', '1036.08', '24.55'),
(4, 'Dolat Investment', '72.50', '1276.00', '8.70', '0.21', '59.64', '38.37', '0.31', '8.34', '346.11', '114.32'),
(5, 'NDTV', '79.80', '514.51', '7.26', '0.00', '52.92', '27.17', '0.45', '11.00', '125.88', '68.27'),
(6, 'Balmer Law. Inv.', '480.25', '1066.16', '12.57', '7.81', '49.81', '48.39', '0.00', '38.21', '153.22', '0.00'),
(7, 'Ebixcash World', '681.25', '758.09', '14.63', '0.00', '43.76', '-1.04', '0.20', '46.58', '156.64', '32.81'),
(8, 'Mangalam Organic', '706.50', '605.08', '8.79', '0.14', '43.65', '78.90', '0.00', '75.66', '180.64', '0.47'),
(9, 'INEOS Styrolut.', '1321.75', '2324.96', '8.30', '0.00', '43.41', '4.27', '0.09', '159.35', '871.19', '78.25'),
(10, 'Expleo Solutions', '620.45', '636.12', '12.61', '0.00', '39.24', '27.41', '0.00', '49.20', '191.61', '0.00'),
(11, 'Sh. Jagdamba Pol', '637.65', '558.45', '13.65', '0.04', '38.30', '34.66', '0.28', '46.71', '131.90', '37.21'),
(12, 'Godawari Power', '955.90', '3368.23', '5.28', '0.52', '37.04', '13.65', '0.42', '181.17', '2001.48', '852.45'),
(13, 'Cigniti Tech.', '422.90', '1184.97', '11.25', '0.59', '36.36', '58.18', '0.12', '37.60', '344.33', '45.67'),
(14, 'Kirl. Ferrous', '245.20', '3392.94', '11.23', '0.82', '34.58', '16.36', '0.21', '21.84', '930.20', '213.83'),
(15, 'Rites', '246.70', '5928.25', '13.67', '6.49', '34.27', '20.25', '0.01', '17.51', '2451.95', '33.48'),
(16, 'Guj.St.Petronet', '272.05', '15349.37', '9.76', '0.74', '34.25', '35.23', '0.37', '27.88', '4926.22', '2037.96'),
(17, 'Ester Industries', '143.50', '1196.70', '8.42', '1.74', '33.27', '27.52', '0.33', '17.04', '474.91', '172.54'),
(18, 'Anjani Portland', '305.10', '771.47', '9.08', '1.64', '32.69', '15.65', '0.01', '33.61', '321.02', '2.80'),
(19, 'Venky-s (India)', '2298.75', '3238.33', '12.10', '0.00', '32.05', '-3.23', '0.16', '190.06', '1090.33', '177.82'),
(20, 'Heritage Foods', '341.05', '1582.40', '10.61', '0.73', '31.70', '-25.44', '0.06', '32.16', '572.63', '35.98'),
(21, 'SIS', '393.80', '5844.57', '10.17', '0.51', '31.66', '17.09', '0.64', '24.64', '1756.61', '1164.56'),
(22, 'GTPL Hathway', '146.40', '1646.46', '8.75', '2.05', '31.53', '16.50', '0.16', '16.73', '767.67', '140.96'),
(23, 'Welspun Corp', '144.75', '3777.24', '7.02', '7.25', '29.60', '-1.53', '0.11', '20.64', '3256.75', '365.75'),
(24, 'I G Petrochems', '598.80', '1844.00', '9.78', '0.33', '29.58', '3.14', '0.15', '61.08', '791.20', '125.94'),
(25, 'Geojit Fin. Ser.', '68.00', '1621.07', '13.16', '2.21', '29.12', '9.65', '0.06', '5.17', '568.14', '36.47'),
(26, 'Sasken Technol.', '971.80', '1462.64', '12.77', '3.09', '28.84', '13.22', '0.00', '76.11', '549.50', '0.00'),
(27, 'Engineers India', '84.15', '4729.59', '13.76', '6.12', '28.78', '15.73', '0.00', '5.44', '2119.81', '3.57'),
(28, 'Petronet LNG', '236.20', '35430.00', '13.25', '5.29', '28.14', '22.26', '0.28', '17.83', '9990.19', '3218.22'),
(29, 'Saksoft', '508.40', '533.31', '11.74', '0.89', '26.35', '20.16', '0.14', '43.32', '196.24', '28.46'),
(30, 'Polyplex Corpn', '1187.20', '3726.91', '7.28', '12.38', '26.30', '8.67', '0.25', '163.04', '2996.69', '758.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_companies`
--
ALTER TABLE `tbl_companies`
  ADD PRIMARY KEY (`pk_int_companies_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_companies`
--
ALTER TABLE `tbl_companies`
  MODIFY `pk_int_companies_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
