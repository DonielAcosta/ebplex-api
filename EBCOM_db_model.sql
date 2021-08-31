-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-04-2021 a las 17:13:45
-- Versión del servidor: 5.7.33-0ubuntu0.18.04.1
-- Versión de PHP: 7.3.27-9+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `EBCOM`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n1_client`
--

CREATE TABLE `n1_client` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_n1_subscriptions` int(11) NOT NULL,
  `type_identification` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `description` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n1_invoice`
--

CREATE TABLE `n1_invoice` (
  `id` int(11) NOT NULL,
  `id_subscriptions` int(11) NOT NULL,
  `n_control` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `n_reference` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `total_amount` double NOT NULL,
  `status` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n1_payments`
--

CREATE TABLE `n1_payments` (
  `id` int(11) NOT NULL,
  `id_payment_method` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `n_control` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `n_reference` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `date` date NOT NULL,
  `canceled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n1_payment_method`
--

CREATE TABLE `n1_payment_method` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n1_plans`
--

CREATE TABLE `n1_plans` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n1_subscriptions`
--

CREATE TABLE `n1_subscriptions` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `date` date NOT NULL,
  `id_n1_plans` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n2_client`
--

CREATE TABLE `n2_client` (
  `id` int(11) NOT NULL,
  `id_n2_type` int(11) NOT NULL,
  `id_n2_company` int(11) NOT NULL,
  `id_n1_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n2_company`
--

CREATE TABLE `n2_company` (
  `id` int(11) NOT NULL,
  `type_identification` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n2_contract`
--

CREATE TABLE `n2_contract` (
  `id` int(11) NOT NULL,
  `id_n2_client` int(11) NOT NULL,
  `date` date NOT NULL,
  `n_contract` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n2_data_company`
--

CREATE TABLE `n2_data_company` (
  `id` int(11) NOT NULL,
  `id_n2_company` int(11) NOT NULL,
  `business_name` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `legal_representative` varchar(60) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n2_direction`
--

CREATE TABLE `n2_direction` (
  `id` int(11) NOT NULL,
  `id_n2_company` int(11) NOT NULL,
  `id_n2_localization` int(11) NOT NULL,
  `direction` text COLLATE utf8_spanish2_ci NOT NULL,
  `house_number` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `apartment_number_tower_and_floor` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `urbanization` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `street` varchar(60) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n2_extra_attributes`
--

CREATE TABLE `n2_extra_attributes` (
  `id` int(11) NOT NULL,
  `id_installation_orders` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `value` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n2_historical_installation_order`
--

CREATE TABLE `n2_historical_installation_order` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `id_installation_status` int(11) NOT NULL,
  `id_installation_orders` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n2_installation_orders`
--

CREATE TABLE `n2_installation_orders` (
  `id` int(11) NOT NULL,
  `id_contract` int(11) NOT NULL,
  `status` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `date_ord` date NOT NULL,
  `date_end` date NOT NULL,
  `date_asig` date NOT NULL,
  `description` varchar(150) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n2_installation_status`
--

CREATE TABLE `n2_installation_status` (
  `id` int(11) NOT NULL,
  `status` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `id_installation_orders` int(11) NOT NULL,
  `id_n1_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n2_install_order_user`
--

CREATE TABLE `n2_install_order_user` (
  `Id_user` int(11) NOT NULL,
  `id_installation_order` int(11) NOT NULL,
  `manager` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n2_localization`
--

CREATE TABLE `n2_localization` (
  `id` int(11) NOT NULL,
  `type` int(30) NOT NULL,
  `name` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n2_package`
--

CREATE TABLE `n2_package` (
  `id` int(11) NOT NULL,
  `id_contract` int(11) NOT NULL,
  `id_n2_plans` int(11) NOT NULL,
  `id_n2_service` int(11) NOT NULL,
  `price` double NOT NULL,
  `qty` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n2_plans`
--

CREATE TABLE `n2_plans` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `price` double NOT NULL,
  `id_n1_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n2_service`
--

CREATE TABLE `n2_service` (
  `id` int(11) NOT NULL,
  `id_n1_client` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `price` double NOT NULL,
  `description` varchar(70) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n2_service_atributes`
--

CREATE TABLE `n2_service_atributes` (
  `id` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `value` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n2_type`
--

CREATE TABLE `n2_type` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plans_services`
--

CREATE TABLE `plans_services` (
  `id_plans` int(11) NOT NULL,
  `id_service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_user`
--

CREATE TABLE `type_user` (
  `id` int(11) NOT NULL,
  `type` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `level` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_user_data` int(11) NOT NULL,
  `id_type_user` int(11) NOT NULL,
  `email` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `identification_card` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `sex` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `n1_client`
--
ALTER TABLE `n1_client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_subscriptions` (`id_n1_subscriptions`);

--
-- Indices de la tabla `n1_invoice`
--
ALTER TABLE `n1_invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_subscriptions` (`id_subscriptions`);

--
-- Indices de la tabla `n1_payments`
--
ALTER TABLE `n1_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_payment_method` (`id_payment_method`),
  ADD KEY `id_invoice` (`id_invoice`);

--
-- Indices de la tabla `n1_payment_method`
--
ALTER TABLE `n1_payment_method`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `n1_plans`
--
ALTER TABLE `n1_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `n1_subscriptions`
--
ALTER TABLE `n1_subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_n1_plans` (`id_n1_plans`);

--
-- Indices de la tabla `n2_client`
--
ALTER TABLE `n2_client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_n2_type` (`id_n2_type`),
  ADD KEY `id_n2_company` (`id_n2_company`),
  ADD KEY `id_n1_client` (`id_n1_client`);

--
-- Indices de la tabla `n2_company`
--
ALTER TABLE `n2_company`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `n2_contract`
--
ALTER TABLE `n2_contract`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_n2_client` (`id_n2_client`);

--
-- Indices de la tabla `n2_data_company`
--
ALTER TABLE `n2_data_company`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_n2_company` (`id_n2_company`);

--
-- Indices de la tabla `n2_direction`
--
ALTER TABLE `n2_direction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_n2_company` (`id_n2_company`),
  ADD KEY `id_country` (`id_n2_localization`);

--
-- Indices de la tabla `n2_extra_attributes`
--
ALTER TABLE `n2_extra_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_installation_orders` (`id_installation_orders`);

--
-- Indices de la tabla `n2_historical_installation_order`
--
ALTER TABLE `n2_historical_installation_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_installation_status` (`id_installation_status`),
  ADD KEY `id_installation_orders` (`id_installation_orders`);

--
-- Indices de la tabla `n2_installation_orders`
--
ALTER TABLE `n2_installation_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_contract_management` (`id_contract`);

--
-- Indices de la tabla `n2_installation_status`
--
ALTER TABLE `n2_installation_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_installation_orders` (`id_installation_orders`),
  ADD KEY `id_n1_client` (`id_n1_client`);

--
-- Indices de la tabla `n2_install_order_user`
--
ALTER TABLE `n2_install_order_user`
  ADD KEY `Id_user` (`Id_user`),
  ADD KEY `id_installation_order` (`id_installation_order`);

--
-- Indices de la tabla `n2_localization`
--
ALTER TABLE `n2_localization`
  ADD PRIMARY KEY (`id`),
  ADD KEY `padre` (`padre`);

--
-- Indices de la tabla `n2_package`
--
ALTER TABLE `n2_package`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_contract` (`id_contract`),
  ADD KEY `id_n2_plans` (`id_n2_plans`),
  ADD KEY `id_n2_service` (`id_n2_service`);

--
-- Indices de la tabla `n2_plans`
--
ALTER TABLE `n2_plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_n1_client` (`id_n1_client`);

--
-- Indices de la tabla `n2_service`
--
ALTER TABLE `n2_service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_n1_client` (`id_n1_client`);

--
-- Indices de la tabla `n2_service_atributes`
--
ALTER TABLE `n2_service_atributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_service` (`id_service`);

--
-- Indices de la tabla `n2_type`
--
ALTER TABLE `n2_type`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plans_services`
--
ALTER TABLE `plans_services`
  ADD KEY `id_plans` (`id_plans`),
  ADD KEY `id_service` (`id_service`);

--
-- Indices de la tabla `type_user`
--
ALTER TABLE `type_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_data` (`id_user_data`),
  ADD KEY `id_type_user` (`id_type_user`);

--
-- Indices de la tabla `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `n1_client`
--
ALTER TABLE `n1_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `n1_invoice`
--
ALTER TABLE `n1_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `n1_payment_method`
--
ALTER TABLE `n1_payment_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `n1_subscriptions`
--
ALTER TABLE `n1_subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `n2_client`
--
ALTER TABLE `n2_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `n2_contract`
--
ALTER TABLE `n2_contract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `n2_data_company`
--
ALTER TABLE `n2_data_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `n2_extra_attributes`
--
ALTER TABLE `n2_extra_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `n2_historical_installation_order`
--
ALTER TABLE `n2_historical_installation_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `n2_installation_orders`
--
ALTER TABLE `n2_installation_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `n2_installation_status`
--
ALTER TABLE `n2_installation_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `n2_package`
--
ALTER TABLE `n2_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `n2_plans`
--
ALTER TABLE `n2_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `n2_service`
--
ALTER TABLE `n2_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `n2_type`
--
ALTER TABLE `n2_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `type_user`
--
ALTER TABLE `type_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `n1_client`
--
ALTER TABLE `n1_client`
  ADD CONSTRAINT `n1_client_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `n1_client_ibfk_3` FOREIGN KEY (`id_n1_subscriptions`) REFERENCES `n1_subscriptions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `n1_invoice`
--
ALTER TABLE `n1_invoice`
  ADD CONSTRAINT `n1_invoice_ibfk_1` FOREIGN KEY (`id_subscriptions`) REFERENCES `n1_subscriptions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `n1_payments`
--
ALTER TABLE `n1_payments`
  ADD CONSTRAINT `n1_payments_ibfk_1` FOREIGN KEY (`id_payment_method`) REFERENCES `n1_payment_method` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `n1_payments_ibfk_3` FOREIGN KEY (`id_invoice`) REFERENCES `n1_invoice` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `n1_subscriptions`
--
ALTER TABLE `n1_subscriptions`
  ADD CONSTRAINT `n1_subscriptions_ibfk_2` FOREIGN KEY (`id_n1_plans`) REFERENCES `n1_plans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `n2_client`
--
ALTER TABLE `n2_client`
  ADD CONSTRAINT `n2_client_ibfk_2` FOREIGN KEY (`id_n2_type`) REFERENCES `n2_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `n2_client_ibfk_4` FOREIGN KEY (`id_n2_company`) REFERENCES `n2_company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `n2_client_ibfk_5` FOREIGN KEY (`id_n1_client`) REFERENCES `n1_client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `n2_contract`
--
ALTER TABLE `n2_contract`
  ADD CONSTRAINT `n2_contract_ibfk_2` FOREIGN KEY (`id_n2_client`) REFERENCES `n2_client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `n2_data_company`
--
ALTER TABLE `n2_data_company`
  ADD CONSTRAINT `n2_data_company_ibfk_1` FOREIGN KEY (`id_n2_company`) REFERENCES `n2_company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `n2_direction`
--
ALTER TABLE `n2_direction`
  ADD CONSTRAINT `n2_direction_ibfk_1` FOREIGN KEY (`id_n2_company`) REFERENCES `n2_company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `n2_direction_ibfk_2` FOREIGN KEY (`id_n2_localization`) REFERENCES `n2_localization` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `n2_extra_attributes`
--
ALTER TABLE `n2_extra_attributes`
  ADD CONSTRAINT `n2_extra_attributes_ibfk_1` FOREIGN KEY (`id_installation_orders`) REFERENCES `n2_installation_orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `n2_historical_installation_order`
--
ALTER TABLE `n2_historical_installation_order`
  ADD CONSTRAINT `n2_historical_installation_order_ibfk_1` FOREIGN KEY (`id_installation_status`) REFERENCES `n2_installation_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `n2_historical_installation_order_ibfk_2` FOREIGN KEY (`id_installation_orders`) REFERENCES `n2_installation_orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `n2_installation_orders`
--
ALTER TABLE `n2_installation_orders`
  ADD CONSTRAINT `n2_installation_orders_ibfk_1` FOREIGN KEY (`id_contract`) REFERENCES `n2_contract` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `n2_installation_status`
--
ALTER TABLE `n2_installation_status`
  ADD CONSTRAINT `n2_installation_status_ibfk_1` FOREIGN KEY (`id_installation_orders`) REFERENCES `n2_installation_orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `n2_installation_status_ibfk_2` FOREIGN KEY (`id_n1_client`) REFERENCES `n1_client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `n2_install_order_user`
--
ALTER TABLE `n2_install_order_user`
  ADD CONSTRAINT `n2_install_order_user_ibfk_1` FOREIGN KEY (`Id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `n2_install_order_user_ibfk_2` FOREIGN KEY (`id_installation_order`) REFERENCES `n2_installation_orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `n2_localization`
--
ALTER TABLE `n2_localization`
  ADD CONSTRAINT `n2_localization_ibfk_1` FOREIGN KEY (`padre`) REFERENCES `n2_localization` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `n2_package`
--
ALTER TABLE `n2_package`
  ADD CONSTRAINT `n2_package_ibfk_1` FOREIGN KEY (`id_contract`) REFERENCES `n2_contract` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `n2_package_ibfk_2` FOREIGN KEY (`id_n2_plans`) REFERENCES `n2_plans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `n2_package_ibfk_3` FOREIGN KEY (`id_n2_service`) REFERENCES `n2_plans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `n2_plans`
--
ALTER TABLE `n2_plans`
  ADD CONSTRAINT `n2_plans_ibfk_1` FOREIGN KEY (`id_n1_client`) REFERENCES `n1_client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `n2_service`
--
ALTER TABLE `n2_service`
  ADD CONSTRAINT `n2_service_ibfk_1` FOREIGN KEY (`id_n1_client`) REFERENCES `n1_client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `n2_service_atributes`
--
ALTER TABLE `n2_service_atributes`
  ADD CONSTRAINT `n2_service_atributes_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `n2_service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `plans_services`
--
ALTER TABLE `plans_services`
  ADD CONSTRAINT `plans_services_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `n2_service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plans_services_ibfk_2` FOREIGN KEY (`id_plans`) REFERENCES `n2_plans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_type_user`) REFERENCES `type_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`id_user_data`) REFERENCES `user_data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
