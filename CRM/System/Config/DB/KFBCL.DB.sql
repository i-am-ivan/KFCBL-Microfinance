# KFCBL Database Schema ----------------------------------------------------------------------------------------------------------------------------
## Only for fresh install puposes only
## -------------------------------------------------------------------------------------------------------------------------------------------------
## Drop and remove all database named 'KFCBL'
DROP DATABASE IF EXISTS `KFCBL`;

## CREATE database `KFBCL`
CREATE DATABASE `KFCBL` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

## USE DB
USE `KFCBL`;

## Create DB Administrator
CREATE USER 'kfbcl_admin'@'localhost' IDENTIFIED BY '.&26Mni@APwD';
GRANT SELECT, INSERT, UPDATE, DELETE ON kfbcl.* TO 'kfbcl_admin'@'localhost';
FLUSH PRIVILEGES;

## CREATE Parent tables
-- Users table (parent)
CREATE TABLE `Users` (
    `UserID` INT PRIMARY KEY AUTO_INCREMENT,
    `FirstName` VARCHAR(50) NOT NULL,
    `LastName` VARCHAR(50) NOT NULL,
    `Gender` ENUM('Male', 'Female', 'Other') NOT NULL,
    `Email` VARCHAR(100) UNIQUE NOT NULL,
    `Phone` VARCHAR(20) UNIQUE NOT NULL,
    `DoB` DATE,
    `JoinedOn` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `NationalID` VARCHAR(50) UNIQUE NOT NULL,
    `RoleID` VARCHAR(50),
    `Status` ENUM('Active','Suspended','De-Activated'),
    INDEX `idx_email` (`Email`),
    INDEX `idx_role` (`RoleID`),
    INDEX `idx_phone` (`Phone`)
);

CREATE TABLE `UserLogins`(
	`UserLogID` INT PRIMARY KEY AUTO_INCREMENT,
    `UserID` INT NOT NULL,
    `SessionID` VARCHAR(255),
    `Email` VARCHAR(100) UNIQUE NOT NULL,
    `Password` VARCHAR(255) NOT NULL,
	`LoggedDate` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `LogoutDate` DATETIME,
    `Status` ENUM('Active','Suspended','De-Activated'),
    `LoginStatus` ENUM('Success', 'Failed', 'Password_Change_Pending') DEFAULT 'Success',
    FOREIGN KEY (`UserID`) REFERENCES `Users`(`UserID`) ON DELETE CASCADE
);

-- Roles table (parent)
CREATE TABLE `Roles` (
    `RoleID` VARCHAR(255) PRIMARY KEY NOT NULL,
    `RoleName` VARCHAR(100) NOT NULL UNIQUE,
    `Description` TEXT,
    `CreatedOn` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `CreatedBy` INT,
    `Status` ENUM('Active', 'Inactive', 'Deleted') DEFAULT 'Active',
    `UpdatedAt` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX `idx_status` (`Status`)
);

-- RolePrivileges table
CREATE TABLE `RolePrivileges` (
    `PrivilegeID` INT PRIMARY KEY AUTO_INCREMENT,
    `RoleID` VARCHAR(255) NOT NULL,
    `BodabodaCreate` BOOLEAN DEFAULT FALSE,
    `BodabodaRead` BOOLEAN DEFAULT FALSE,
    `BodabodaUpdate` BOOLEAN DEFAULT FALSE,
    `BodabodaDelete` BOOLEAN DEFAULT FALSE,
    `LoansCreate` BOOLEAN DEFAULT FALSE,
    `LoansRead` BOOLEAN DEFAULT FALSE,
    `LoansUpdate` BOOLEAN DEFAULT FALSE,
    `LoansDelete` BOOLEAN DEFAULT FALSE,
    `LandsCreate` BOOLEAN DEFAULT FALSE,
    `LandsRead` BOOLEAN DEFAULT FALSE,
    `LandsUpdate` BOOLEAN DEFAULT FALSE,
    `LandsDelete` BOOLEAN DEFAULT FALSE,
    `CreatedAt` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `UpdatedAt` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `CreatedBy` INT NOT NULL,
    FOREIGN KEY (`RoleID`) REFERENCES `Roles`(`RoleID`) ON DELETE CASCADE,
    INDEX `idx_role` (`RoleID`)
);

## Child Tables
-- LoginLogs table (child of Users)
CREATE TABLE `LoginLogs` (
    `LogID` INT PRIMARY KEY AUTO_INCREMENT,
    `UserID` INT NOT NULL,
    `LoggedDate` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `LogoutDate` DATETIME,
    `IPAddress` VARCHAR(45),
    `UserAgent` TEXT,
    `LoginStatus` ENUM('Success', 'Failed', '2FA_Pending') DEFAULT 'Success',
    `FailureReason` VARCHAR(255),
    `SessionID` VARCHAR(255),
    `CreatedAt` DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`UserID`) REFERENCES `Users`(`UserID`) ON DELETE CASCADE,
    INDEX `idx_user_login` (`UserID`, `LoggedDate`),
    INDEX `idx_log_date` (`LoggedDate`),
    INDEX `idx_session` (`SessionID`)
);

-- PasswordResetTokens table
CREATE TABLE `PasswordResetTokens` (
    `TokenID` INT PRIMARY KEY AUTO_INCREMENT,
    `UserID` INT NOT NULL,
    `Token` VARCHAR(255) UNIQUE NOT NULL,
    `CreatedAt` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `ExpiresAt` DATETIME NOT NULL,
    `IsUsed` BOOLEAN DEFAULT FALSE,
    `UsedAt` DATETIME,
    `IPAddress` VARCHAR(45),
    `UserAgent` TEXT,
    FOREIGN KEY (`UserID`) REFERENCES `Users`(`UserID`) ON DELETE CASCADE,
    INDEX `idx_token` (`Token`),
    INDEX `idx_user_token` (`UserID`, `Token`),
    INDEX `idx_expiry` (`ExpiresAt`)
);

-- UserActivityLogs table
CREATE TABLE `UserActivityLogs` (
    `ActivityID` INT PRIMARY KEY AUTO_INCREMENT,
    `UserID` INT NOT NULL,
    `ActivityType` VARCHAR(100) NOT NULL,
    `Description` TEXT,
    `IPAddress` VARCHAR(45),
    `UserAgent` TEXT,
    `PerformedAt` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `AffectedRecordID` VARCHAR(100),
    `AffectedTable` VARCHAR(100),
    `OldValues` JSON,
    `NewValues` JSON,
    FOREIGN KEY (`UserID`) REFERENCES `Users`(`UserID`) ON DELETE CASCADE,
    INDEX `idx_user_activity` (`UserID`, `PerformedAt`),
    INDEX `idx_activity_type` (`ActivityType`)
);

-- UserSessions table
CREATE TABLE `UserSessions` (
    `SessionID` VARCHAR(255) PRIMARY KEY,
    `UserID` INT NOT NULL,
    `LoginLogID` INT,
    `CreatedAt` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `LastActivity` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `ExpiresAt` DATETIME NOT NULL,
    `IsActive` BOOLEAN DEFAULT TRUE,
    `IPAddress` VARCHAR(45),
    `UserAgent` TEXT,
    FOREIGN KEY (`UserID`) REFERENCES `Users`(`UserID`) ON DELETE CASCADE,
    FOREIGN KEY (`LoginLogID`) REFERENCES `LoginLogs`(`LogID`) ON DELETE SET NULL,
    INDEX `idx_user_session` (`UserID`, `IsActive`),
    INDEX `idx_expiry` (`ExpiresAt`)
);

## Reports


## Stored Procedures


## Triggers