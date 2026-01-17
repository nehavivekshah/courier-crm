-- Courier CRM Complete Database Schema
-- Generated based on UI Prototype Requirements

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------
-- Table: carriers
-- --------------------------------------------------------
CREATE TABLE `carriers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `prefix` varchar(10) DEFAULT NULL,
  `logo_path` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table: centers
-- --------------------------------------------------------
CREATE TABLE `centers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table: zones
-- --------------------------------------------------------
CREATE TABLE `zones` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table: rate_card
-- --------------------------------------------------------
CREATE TABLE `rate_card` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `carrier_id` bigint(20) UNSIGNED NOT NULL,
  `zone_id` bigint(20) UNSIGNED NOT NULL,
  `mode` enum('Surface','Air','Cargo') NOT NULL,
  `parcel_type` enum('Document','Others') NOT NULL,
  `weight_from` decimal(10,2) NOT NULL,
  `weight_to` decimal(10,2) NOT NULL,
  `base_rate` decimal(10,2) NOT NULL,
  `additional_weight_rate` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`carrier_id`) REFERENCES `carriers`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`zone_id`) REFERENCES `zones`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table: clients
-- --------------------------------------------------------
CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `fuel_charge_percent` decimal(5,2) DEFAULT 0.00,
  `fcv_charge_percent` decimal(5,2) DEFAULT 0.00,
  `partial_value_percent` decimal(5,2) DEFAULT 0.00,
  `gst_type` enum('GST','Non-GST') NOT NULL DEFAULT 'GST',
  `gst_number` varchar(20) DEFAULT NULL,
  `default_carrier_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`default_carrier_id`) REFERENCES `carriers`(`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table: receivers
-- --------------------------------------------------------
CREATE TABLE `receivers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) UNSIGNED DEFAULT NULL, -- Optional: Link to a specific client if pre-saved
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT 'India',
  `pincode` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`client_id`) REFERENCES `clients`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table: bookings
-- --------------------------------------------------------
CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `booking_number` varchar(50) NOT NULL UNIQUE,
  `booking_date` date NOT NULL,
  `booking_type` enum('Surface','Air','Cargo') NOT NULL,
  `customer_mode` enum('Account','Cash') NOT NULL,
  
  -- Sender Details (Unified for Cash/Account)
  `client_id` bigint(20) UNSIGNED DEFAULT NULL, -- NULL if Cash Mode
  `sender_name` varchar(255) NOT NULL,
  `sender_phone` varchar(20) NOT NULL,
  `sender_proof_type` varchar(50) DEFAULT NULL,
  `sender_id_number` varchar(50) DEFAULT NULL,
  
  -- Receiver Details
  `receiver_name` varchar(255) NOT NULL,
  `receiver_phone` varchar(20) NOT NULL,
  `receiver_address` text NOT NULL,
  `receiver_city` varchar(100) NOT NULL,
  `receiver_state` varchar(100) DEFAULT NULL,
  `receiver_country` varchar(100) DEFAULT 'India',
  `receiver_pincode` varchar(10) NOT NULL,
  
  -- Logistics Info
  `carrier_id` bigint(20) UNSIGNED NOT NULL,
  `package_type` varchar(100) NOT NULL,
  `weight` decimal(10,2) NOT NULL,
  `boxes` int(11) NOT NULL DEFAULT 1,
  `additional_details` text DEFAULT NULL,
  
  -- Billing Info
  `gross_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `fuel_surcharge` decimal(10,2) NOT NULL DEFAULT 0.00,
  `insurance_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `doc_charge` decimal(10,2) NOT NULL DEFAULT 0.00,
  `oda_charge` decimal(10,2) NOT NULL DEFAULT 0.00,
  `other_charges` decimal(10,2) NOT NULL DEFAULT 0.00,
  `sub_total` decimal(10,2) NOT NULL DEFAULT 0.00,
  `apply_gst` tinyint(1) NOT NULL DEFAULT 1,
  `cgst` decimal(10,2) NOT NULL DEFAULT 0.00,
  `sgst` decimal(10,2) NOT NULL DEFAULT 0.00,
  `igst` decimal(10,2) NOT NULL DEFAULT 0.00,
  `net_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  
  `status` enum('Pending','In-Transit','Delivered','Cancelled') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`client_id`) REFERENCES `clients`(`id`) ON DELETE SET NULL,
  FOREIGN KEY (`carrier_id`) REFERENCES `carriers`(`id`) ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table: logistics_inwards
-- --------------------------------------------------------
CREATE TABLE `logistics_inwards` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `received_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `center_id` bigint(20) UNSIGNED NOT NULL,
  `remarks` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`booking_id`) REFERENCES `bookings`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`center_id`) REFERENCES `centers`(`id`) ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table: financial_transactions
-- --------------------------------------------------------
CREATE TABLE `financial_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `transaction_date` date NOT NULL,
  `type` enum('Income','Expense') NOT NULL,
  `category` varchar(100) NOT NULL, -- Operational, Asset Sale, Commission, rent, etc.
  `source_destination` varchar(255) NOT NULL, -- Client name or Vendor name
  `amount` decimal(15,2) NOT NULL,
  `payment_mode` enum('Cash','Bank Transfer','UPI','Cheque') NOT NULL,
  `reference_no` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `booking_id` bigint(20) UNSIGNED DEFAULT NULL, -- Link to booking if applicable
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`booking_id`) REFERENCES `bookings`(`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table: support_tickets
-- --------------------------------------------------------
CREATE TABLE `support_tickets` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` enum('Complaint','Enquiry') NOT NULL,
  `client_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` enum('Open','In-Progress','Resolved','Closed') NOT NULL DEFAULT 'Open',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`client_id`) REFERENCES `clients`(`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table: system_config
-- --------------------------------------------------------
CREATE TABLE `system_config` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(100) NOT NULL UNIQUE,
  `value` text DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Initial Data (Seed)
-- --------------------------------------------------------

INSERT INTO `carriers` (`name`, `prefix`, `status`) VALUES
('DTDC', 'D', 'Active'),
('Trackon', 'T', 'Active'),
('Professional', 'P', 'Active');

INSERT INTO `zones` (`name`, `description`) VALUES
('Zone A', 'Local Metro'),
('Zone B', 'Regional'),
('Zone C', 'National');

INSERT INTO `system_config` (`key`, `value`, `description`) VALUES
('gst_percent', '18', 'Standard GST rate'),
('fuel_surcharge_default', '10', 'Default fuel surcharge percentage'),
('currency', 'INR', 'Base currency symbol');

COMMIT;
