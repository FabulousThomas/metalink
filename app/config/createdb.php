<?php

createUsers();
createNfts();
createSales();
createOrders();
// createOrderItems();
// createAdmins();

function createUsers()
{
   global $conn;
   $conn->query('CREATE TABLE IF NOT EXISTS `users` (
      `user_id` INT(11) NOT NULL AUTO_INCREMENT,
      `user_fname` VARCHAR(100) NOT NULL,
      `user_name` VARCHAR(100) NOT NULL UNIQUE KEY,
      `user_email` VARCHAR(100) NOT NULL UNIQUE KEY,
      `user_access` TINYINT NOT NULL DEFAULT "0",
      `user_password` VARCHAR(100) NOT NULL,
      `user_image` VARCHAR(255) NULL,
      `user_bio` VARCHAR(1000) NULL,
      PRIMARY KEY (`user_id`)) ENGINE = InnoDB');
}

function createNfts()
{
   global $conn;
   $conn->query('CREATE TABLE IF NOT EXISTS `nfts` (
         `nft_id` INT NOT NULL AUTO_INCREMENT,
         `user_id` INT NOT NULL,
         `nft_name` VARCHAR(100) NOT NULL,
         `nft_price` decimal(6,2) NOT NULL,
         `nft_image` VARCHAR(255) NOT NULL,
         `user_name` VARCHAR(255) NOT NULL,
         `user_fname` VARCHAR(255) NOT NULL,
         `nft_tag` VARCHAR(255) NOT NULL,
         `nft_category` VARCHAR(100) NULL,
         `nft_description` VARCHAR(1000) NULL,
         `user_image` VARCHAR(255) NULL,
         `user_bio` VARCHAR(1000) NULL,
         PRIMARY KEY (`nft_id`)) ENGINE = InnoDB');
}

function createSales()
{
   global $conn;
   $conn->query('CREATE TABLE IF NOT EXISTS `sales` (
         `id` INT NOT NULL AUTO_INCREMENT,
         `nft_id` INT NOT NULL,
         `user_id` INT NOT NULL,
         `seller_id` INT NOT NULL,
         `user_name` VARCHAR(255) NOT NULL,
         `user_fname` VARCHAR(255) NOT NULL,
         `user_image` VARCHAR(255) NOT NULL,
         `nft_image` VARCHAR(255) NOT NULL,
         `nft_price` decimal(6,2) NOT NULL,
         `nft_name` VARCHAR(255) NOT NULL,
         `status` VARCHAR(255) NOT NULL,
         `s_status` VARCHAR(255) NOT NULL,
         `b_status` VARCHAR(255) NOT NULL,
         `trnx_id` VARCHAR(255) NOT NULL,
         `nft_description` TEXT NOT NULL,
         `created_at` datetime NOT NULL DEFAULT current_timestamp(),
         PRIMARY KEY (`id`)) ENGINE = InnoDB');
}

function createAdmins()
{
   global $conn;
   $conn->query('CREATE TABLE IF NOT EXISTS admins (
      `user_id` INT(11) NOT NULL AUTO_INCREMENT,
      `user_name` VARCHAR(100) NOT NULL,
      `user_email` VARCHAR(100) NOT NULL UNIQUE KEY,
      `user_password` VARCHAR(100) NOT NULL,
      PRIMARY KEY (`user_id`)) ENGINE = InnoDB');
}

function createPayments()
{
   global $conn;
   $conn->query('CREATE TABLE IF NOT EXISTS `payments` (
         `payment_id` INT(11) NOT NULL AUTO_INCREMENT,
         `order_id` INT(11) NOT NULL,
         `user_id` INT(11) NOT NULL,
         `transaction_id` VARCHAR(250) NOT NULL,
         `payment_date` datetime NOT NULL DEFAULT current_timestamp(),
         PRIMARY KEY (`payment_id`)) ENGINE = InnoDB');
}

function createOrderss()
{
   global $conn;
   $conn->query('CREATE TABLE IF NOT EXISTS `orders` (
      `order_id` INT(11) NOT NULL,
      `order_cost` decimal(6,2) NOT NULL,
      `order_status` VARCHAR(100) NOT NULL DEFAULT "on_hold",
      `user_id` INT(11) NOT NULL,
      `user_phone` INT(11) NOT NULL,
      `user_email` VARCHAR(255) NOT NULL,
      `user_city` VARCHAR(255) NOT NULL,
      `user_address` VARCHAR(255) NOT NULL,
      `order_date` datetime NOT NULL DEFAULT current_timestamp(),
      PRIMARY KEY (`order_id`)) ENGINE = InnoDB');
}

function createOrders()
{
   global $conn;
   $conn->query("CREATE TABLE IF NOT EXISTS `orders` (
      `id` INT NOT NULL AUTO_INCREMENT ,
      `nft_id` INT NOT NULL ,
      `order_id` INT NOT NULL ,
      `user_id` INT NOT NULL ,
      `nft_name` VARCHAR(255) NOT NULL ,
      `nft_price` decimal(6,2) NOT NULL ,
      `nft_tag` VARCHAR(255) NOT NULL ,
      `nft_status` INT NOT NULL DEFAULT '1' ,
      `status` VARCHAR(255) NOT NULL ,
      `owner` VARCHAR(255) NOT NULL ,
      `user_name` VARCHAR(255) NOT NULL ,
      `user_fname` VARCHAR(255) NOT NULL ,
      `nft_description` TEXT NOT NULL ,
      `created_at` TIMESTAMP NOT NULL ,
      PRIMARY KEY (`id`)) ENGINE = InnoDB");
}