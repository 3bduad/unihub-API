-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 أغسطس 2026 الساعة 09:11
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unihub20`
--

-- --------------------------------------------------------

--
-- بنية الجدول `academic_titles`
--

CREATE TABLE `academic_titles` (
  `title_id` int(10) UNSIGNED NOT NULL,
  `college_id` int(10) UNSIGNED NOT NULL,
  `title_name` varchar(100) NOT NULL,
  `title_code` varchar(50) NOT NULL,
  `hourly_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `assessment_methods`
--

CREATE TABLE `assessment_methods` (
  `id` int(10) UNSIGNED NOT NULL,
  `program_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(200) NOT NULL COMMENT 'مثال: اختبارات قصيرة',
  `description` text DEFAULT NULL,
  `category` enum('exam','assignment','project','presentation','participation','portfolio','other') NOT NULL DEFAULT 'exam' COMMENT 'فئة الطريقة',
  `order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `blocks`
--

CREATE TABLE `blocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `block_name` varchar(255) NOT NULL,
  `block_number` int(11) NOT NULL,
  `weight` decimal(5,2) NOT NULL DEFAULT 0.00,
  `credit_hours` decimal(5,2) DEFAULT 0.00,
  `weeks` int(11) NOT NULL DEFAULT 1,
  `type` enum('compulsory','elective') NOT NULL DEFAULT 'compulsory',
  `program_id` int(10) UNSIGNED NOT NULL,
  `level_id` int(10) UNSIGNED DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `block_relations`
--

CREATE TABLE `block_relations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `block_id` bigint(20) UNSIGNED NOT NULL,
  `related_block_id` bigint(20) UNSIGNED NOT NULL,
  `relation_type` enum('prerequisite','concurrent','next') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `buildings`
--

CREATE TABLE `buildings` (
  `building_id` int(10) UNSIGNED NOT NULL,
  `building_name` varchar(100) NOT NULL,
  `building_code` varchar(50) DEFAULT NULL,
  `floors_count` int(11) NOT NULL,
  `college_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `classrooms`
--

CREATE TABLE `classrooms` (
  `classroom_id` int(10) UNSIGNED NOT NULL,
  `classroom_name` varchar(100) NOT NULL,
  `building_id` int(10) UNSIGNED NOT NULL,
  `college_id` int(10) UNSIGNED DEFAULT NULL,
  `floor` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `latitude` decimal(10,7) NOT NULL,
  `longitude` decimal(10,7) NOT NULL,
  `allowed_distance` decimal(5,2) NOT NULL,
  `classroom_type` tinyint(4) NOT NULL,
  `windows_count` int(11) NOT NULL DEFAULT 0,
  `has_computer` tinyint(1) NOT NULL DEFAULT 0,
  `display_type` enum('none','screen','projector','smart_board') NOT NULL DEFAULT 'none',
  `notes` text DEFAULT NULL,
  `location_address` varchar(255) DEFAULT NULL,
  `remote_id` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `colleges`
--

CREATE TABLE `colleges` (
  `college_id` int(10) UNSIGNED NOT NULL,
  `college_name` varchar(100) NOT NULL,
  `college_code` varchar(20) DEFAULT NULL,
  `college_logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `colleges`
--

INSERT INTO `colleges` (`college_id`, `college_name`, `college_code`, `college_logo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'كلية الحاسوب', 'fcit', NULL, '2026-08-25 06:10:30', '2026-08-25 06:10:30', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `courses`
--

CREATE TABLE `courses` (
  `course_id` int(10) UNSIGNED NOT NULL,
  `course_name` varchar(150) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_type` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `college_id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED DEFAULT NULL,
  `program_id` int(10) UNSIGNED DEFAULT NULL,
  `level_id` int(10) UNSIGNED DEFAULT NULL,
  `semester_id` int(10) UNSIGNED DEFAULT NULL,
  `block_id` bigint(20) UNSIGNED DEFAULT NULL,
  `credit_hours` int(11) NOT NULL DEFAULT 0,
  `course_parts` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT 'أجزاء المقرر: نظري، عملي، تمارين، سريري' CHECK (json_valid(`course_parts`)),
  `weight` decimal(5,2) NOT NULL DEFAULT 0.00 COMMENT 'وزن المقرر % من مخرجات البرنامج',
  `category` enum('متطلب جامعة','متطلب كلية','متطلب تخصص إجباري','متطلب تخصص اختياري') NOT NULL DEFAULT 'متطلب تخصص إجباري',
  `teaching_language` enum('العربية','الإنجليزية','ثنائي اللغة') NOT NULL DEFAULT 'العربية',
  `notes` varchar(500) DEFAULT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'true = المقرر معتمد ومدرج رسمياً',
  `approval_date` date DEFAULT NULL COMMENT 'تاريخ اعتماد المقرر رسمياً',
  `approved_by` varchar(300) DEFAULT NULL COMMENT 'اسم الشخص الذي وافق على المقرر',
  `specification_status` enum('draft','in_progress','under_review','approved','published') NOT NULL DEFAULT 'draft' COMMENT 'حالة توصيف المقرر',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `course_assessments`
--

CREATE TABLE `course_assessments` (
  `assessment_id` int(10) UNSIGNED NOT NULL,
  `college_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED DEFAULT NULL,
  `semester_id` int(10) UNSIGNED NOT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `academic_year` varchar(20) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `week` tinyint(4) DEFAULT NULL COMMENT 'الأسبوع',
  `max_score` decimal(5,2) NOT NULL,
  `weight` int(11) NOT NULL DEFAULT 0,
  `percentage` decimal(5,2) NOT NULL DEFAULT 0.00 COMMENT 'النسبة % من إجمالي التقويم',
  `clo_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT 'مصفوفة رموز مخرجات التعلم' CHECK (json_valid(`clo_ids`)),
  `assessment_type` enum('activities','quizzes','midterm_exam','final_exam','project','presentation','practical_exam','other') NOT NULL DEFAULT 'activities' COMMENT 'نوع التقييم',
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `grade` decimal(5,2) NOT NULL DEFAULT 0.00,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `course_assignments`
--

CREATE TABLE `course_assignments` (
  `assignment_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `part` enum('نظري','عملي','تمارين','سريري') NOT NULL COMMENT 'جزء المقرر',
  `title` varchar(300) NOT NULL COMMENT 'مثال: واجب 1، مشروع نهائي',
  `description` text DEFAULT NULL,
  `week` tinyint(4) NOT NULL COMMENT 'الأسبوع (1-16)',
  `grade` decimal(5,2) NOT NULL DEFAULT 0.00 COMMENT 'الدرجة المخصصة',
  `clo_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT 'مصفوفة رموز مخرجات التعلم' CHECK (json_valid(`clo_ids`)),
  `assignment_type` enum('homework','project','presentation','quiz','other') NOT NULL DEFAULT 'homework' COMMENT 'نوع التكليف',
  `is_mandatory` tinyint(1) NOT NULL DEFAULT 1,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `course_descriptions`
--

CREATE TABLE `course_descriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `description` longtext DEFAULT NULL COMMENT 'وصف المقرر',
  `goals` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT 'أهداف المقرر' CHECK (json_valid(`goals`)),
  `word_count` int(11) NOT NULL DEFAULT 0 COMMENT 'عدد الكلمات',
  `goals_count` int(11) NOT NULL DEFAULT 0 COMMENT 'عدد الأهداف',
  `is_completed` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'هل مكتمل',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `course_learning_outcomes`
--

CREATE TABLE `course_learning_outcomes` (
  `clo_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(10) NOT NULL COMMENT 'مثال: a1, b1, c1, d1',
  `domain` enum('Knowledge','Intellectual','Professional','General') NOT NULL COMMENT 'مجال المخرج',
  `description` text NOT NULL COMMENT 'وصف مخرج التعلم',
  `weight` decimal(5,2) NOT NULL DEFAULT 0.00 COMMENT 'وزن المخرج من وزن المقرر (%)',
  `plo_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'ربط بمخرج تعلم البرنامج المناظر',
  `plo_weight` decimal(5,2) DEFAULT NULL COMMENT 'وزن PLO من وزن البرنامج (للمرجع فقط)',
  `order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `course_policies`
--

CREATE TABLE `course_policies` (
  `policy_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `policy_number` tinyint(4) NOT NULL COMMENT '1-7 ثابت، 8+ مضافة',
  `title` varchar(300) NOT NULL COMMENT 'عنوان الضابط',
  `content` text NOT NULL COMMENT 'نص الضابط التفصيلي',
  `is_fixed` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'true = الضوابط السبعة الأساسية',
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `course_prerequisites`
--

CREATE TABLE `course_prerequisites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL COMMENT 'المقرر الحالي',
  `prerequisite_course_id` int(10) UNSIGNED NOT NULL COMMENT 'المقرر المطلوب',
  `type` enum('prerequisite','corequisite') NOT NULL DEFAULT 'prerequisite' COMMENT 'prerequisite=سابق، corequisite=مصاحب',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `course_references`
--

CREATE TABLE `course_references` (
  `reference_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `type` enum('main','support','electronic') NOT NULL COMMENT 'نوع المرجع',
  `category` enum('website','journal','other') DEFAULT NULL COMMENT 'فئة المصدر الإلكتروني',
  `author` varchar(300) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `title` varchar(500) NOT NULL COMMENT 'عنوان المرجع',
  `edition` varchar(100) DEFAULT NULL,
  `publisher` varchar(300) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `url` text DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `course_topics`
--

CREATE TABLE `course_topics` (
  `topic_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `part` enum('نظري','عملي','تمارين','سريري') NOT NULL COMMENT 'جزء المقرر',
  `week` tinyint(4) NOT NULL COMMENT 'الأسبوع (1-16)',
  `unit_name` varchar(300) NOT NULL COMMENT 'مثال: مقدمة في هياكل البيانات',
  `subtopics` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT 'مصفوفة المواضيع الفرعية' CHECK (json_valid(`subtopics`)),
  `is_exam` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'true = امتحان نصفي أو نهائي',
  `exam_type` enum('midterm','final') DEFAULT NULL COMMENT 'نوع الامتحان',
  `hours` decimal(5,2) NOT NULL DEFAULT 0.00 COMMENT 'الساعات الفعلية',
  `clo_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT 'مصفوفة رموز مخرجات التعلم' CHECK (json_valid(`clo_ids`)),
  `order` int(11) NOT NULL DEFAULT 0,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `days`
--

CREATE TABLE `days` (
  `day_id` int(10) UNSIGNED NOT NULL,
  `day_name` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `days`
--

INSERT INTO `days` (`day_id`, `day_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'السبت', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(2, 'الأحد', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(3, 'الإثنين', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(4, 'الثلاثاء', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(5, 'الأربعاء', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(6, 'الخميس', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(7, 'الجمعة', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `departments`
--

CREATE TABLE `departments` (
  `department_id` int(10) UNSIGNED NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `department_code` varchar(20) DEFAULT NULL,
  `college_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `financial_cycles`
--

CREATE TABLE `financial_cycles` (
  `cycle_id` int(10) UNSIGNED NOT NULL,
  `college_id` int(10) UNSIGNED NOT NULL,
  `month_year` varchar(7) NOT NULL COMMENT 'Format: MM-YYYY',
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'draft',
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `total_payout` decimal(15,2) NOT NULL DEFAULT 0.00,
  `lecturers_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `ip_restrictions`
--

CREATE TABLE `ip_restrictions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `lecturers`
--

CREATE TABLE `lecturers` (
  `lecturer_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `college_id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `title_id` int(10) UNSIGNED DEFAULT NULL,
  `hire_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `can_teach_externally` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `lecturer_attendance`
--

CREATE TABLE `lecturer_attendance` (
  `attendance_id` int(10) UNSIGNED NOT NULL,
  `lecturer_id` int(10) UNSIGNED NOT NULL,
  `timetable_id` int(10) UNSIGNED NOT NULL,
  `attendance_date` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: غائب, 1: حاضر',
  `notification_status` tinyint(4) NOT NULL DEFAULT 0,
  `college_id` int(10) UNSIGNED NOT NULL,
  `lecture_hours` decimal(4,2) NOT NULL,
  `hourly_rate_at_attendance` decimal(10,2) DEFAULT 0.00,
  `lecture_rate_at_attendance` decimal(10,2) DEFAULT 0.00,
  `session_code` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `lecturer_group_notifications`
--

CREATE TABLE `lecturer_group_notifications` (
  `notification_id` int(10) UNSIGNED NOT NULL,
  `lecturer_user_id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message_body` text NOT NULL,
  `send_at` datetime NOT NULL DEFAULT current_timestamp(),
  `group_id` int(10) UNSIGNED NOT NULL,
  `is_sent` tinyint(1) NOT NULL DEFAULT 1,
  `is_seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `lecturer_payouts`
--

CREATE TABLE `lecturer_payouts` (
  `payout_id` int(10) UNSIGNED NOT NULL,
  `cycle_id` int(10) UNSIGNED NOT NULL,
  `lecturer_id` int(10) UNSIGNED NOT NULL,
  `total_hours` decimal(8,2) NOT NULL DEFAULT 0.00,
  `hourly_rate` decimal(10,2) NOT NULL DEFAULT 0.00,
  `base_amount` decimal(12,2) NOT NULL DEFAULT 0.00,
  `total_bonuses` decimal(12,2) NOT NULL DEFAULT 0.00,
  `total_deductions` decimal(12,2) NOT NULL DEFAULT 0.00,
  `tax_amount` decimal(12,2) NOT NULL DEFAULT 0.00,
  `net_amount` decimal(12,2) GENERATED ALWAYS AS (`base_amount` + `total_bonuses` - `total_deductions` - `tax_amount`) STORED,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `notes` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `lecture_attachments`
--

CREATE TABLE `lecture_attachments` (
  `attachment_id` int(10) UNSIGNED NOT NULL,
  `session_id` int(10) UNSIGNED NOT NULL,
  `type` enum('video','file','link') NOT NULL,
  `title` varchar(200) NOT NULL,
  `url` text NOT NULL,
  `file_size` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `lecture_sessions`
--

CREATE TABLE `lecture_sessions` (
  `session_id` int(10) UNSIGNED NOT NULL,
  `timetable_id` int(10) UNSIGNED NOT NULL,
  `lecturer_id` int(10) UNSIGNED DEFAULT NULL,
  `session_date` date NOT NULL,
  `actual_start_time` timestamp NULL DEFAULT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `actual_end_time` timestamp NULL DEFAULT NULL,
  `end_latitude` decimal(10,7) DEFAULT NULL,
  `end_longitude` decimal(10,7) DEFAULT NULL,
  `is_ended_remotely` tinyint(1) NOT NULL DEFAULT 0,
  `early_exit_reason` varchar(255) DEFAULT NULL,
  `actual_classroom_id` int(10) UNSIGNED DEFAULT NULL,
  `session_code` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_makeup` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: Basic, 1: Makeup',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `levels`
--

CREATE TABLE `levels` (
  `level_id` int(10) UNSIGNED NOT NULL,
  `level_name` varchar(50) DEFAULT NULL,
  `program_id` int(10) UNSIGNED NOT NULL,
  `level_number` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `makeup_lectures_requests`
--

CREATE TABLE `makeup_lectures_requests` (
  `request_id` int(10) UNSIGNED NOT NULL,
  `lecturer_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  `original_date` date DEFAULT NULL,
  `requested_date` date NOT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `classroom_id` int(10) UNSIGNED DEFAULT NULL,
  `reason_type` enum('sick_leave','travel','schedule_conflict','official_holiday','event','maintenance','other') NOT NULL DEFAULT 'other',
  `description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `notification_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2025_10_21_192024_create_oauth_auth_codes_table', 1),
(2, '2025_10_21_192025_create_oauth_access_tokens_table', 1),
(3, '2025_10_21_192026_create_oauth_refresh_tokens_table', 1),
(4, '2025_10_21_192027_create_oauth_clients_table', 1),
(5, '2025_10_21_192028_create_oauth_device_codes_table', 1),
(6, '2025_10_21_220233_create_password_reset_tokens_table', 1),
(7, '2025_10_22_144503_create_cache_table', 1),
(8, '2025_10_23_095837_create_settings_table', 1),
(9, '2025_10_26_182508_create_university_schema', 1),
(10, '2025_12_19_155452_drop_strict_unique_indexes_from_timetable', 1),
(11, '2025_12_29_165656_add_details_to_lecture_sessions_table', 1),
(12, '2026_01_05_172318_remove_attendance_columns_from_lecture_sessions_table', 1),
(13, '2026_01_07_154740_create_course_assessment_tables', 1),
(14, '2026_01_08_212450_create_ip_restrictions_table', 1),
(15, '2026_01_18_160543_update_makeup_lectures_requests_table', 1),
(16, '2026_01_27_150833_create_notification_reads_and_modify_excuse_image', 1),
(17, '2026_02_01_201759_create_quality_assurance_tables', 1),
(18, '2026_02_02_190151_update_qa_campaigns_structure', 1),
(19, '2026_02_02_213019_add_timetable_id_to_qa_campaigns', 1),
(20, '2026_02_11_214751_restructure_qa_campaigns', 1),
(21, '2026_02_23_021027_enhance_lecture_management_schema', 1),
(22, '2026_02_25_005743_add_time_tracking_columns', 1),
(23, '2026_02_26_024031_add_device_identifier_and_path', 1),
(24, '2026_04_08_211118_add_system_columns_to_programs_table', 1),
(25, '2026_04_09_233234_create_blocks_table', 1),
(26, '2026_04_09_233239_create_block_relations_table', 1),
(27, '2026_04_15_222411_enhance_courses_table_for_all_systems', 1),
(28, '2026_04_18_213310_remove_is_elective_from_courses', 1),
(29, '2026_04_21_215943_create_course_specification_tables', 1),
(30, '2026_04_26_184525_drop_unused_columns_from_course_descriptions', 1),
(31, '2026_08_19_000001_add_program_scope_and_audit_to_course_options', 1),
(32, '2026_08_21_000000_align_course_assessments_for_course_specifications', 1),
(33, '2026_08_21_000001_allow_course_level_question_bank', 1),
(34, '2026_08_21_000001_make_course_assessment_context_optional', 1),
(35, '2026_08_21_000002_backfill_question_course_part', 1),
(36, '2026_08_22_000000_enhance_buildings_and_classrooms_for_field_survey', 1),
(37, '2026_08_23_000001_update_student_path_for_program_variants', 1),
(38, '2026_08_23_000010_add_max_students_to_student_groups_table', 1),
(39, '2026_08_23_000020_make_student_level_nullable_for_credit_programs', 1),
(40, '2026_08_23_100000_add_path_columns_to_timetable', 1),
(41, '2026_08_23_120000_make_timetable_path_columns_nullable', 1),
(42, '2026_08_24_000001_create_session_topics_covered_table', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `notification_reads`
--

CREATE TABLE `notification_reads` (
  `read_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `notification_id` int(10) UNSIGNED NOT NULL,
  `read_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` char(80) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` char(80) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` char(36) NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` char(36) NOT NULL,
  `owner_type` varchar(255) DEFAULT NULL,
  `owner_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(255) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect_uris` text NOT NULL,
  `grant_types` text NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `owner_type`, `owner_id`, `name`, `secret`, `provider`, `redirect_uris`, `grant_types`, `revoked`, `created_at`, `updated_at`) VALUES
('01a0378a-ad26-709f-8135-ce30e3ad770d', NULL, NULL, 'UniHub API Personal Access Client', '$2y$12$qYknh7CVu1OGYAtXwqNgtubFjtLWJ7IzRYylj59Mv64DAucAnZqt6', 'users', '[]', '[\"personal_access\"]', 0, '2026-08-25 06:10:30', '2026-08-25 06:10:30');

-- --------------------------------------------------------

--
-- بنية الجدول `oauth_device_codes`
--

CREATE TABLE `oauth_device_codes` (
  `id` char(80) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` char(36) NOT NULL,
  `user_code` char(8) NOT NULL,
  `scopes` text NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `user_approved_at` datetime DEFAULT NULL,
  `last_polled_at` datetime DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` char(80) NOT NULL,
  `access_token_id` char(80) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `otp_device_verifications`
--

CREATE TABLE `otp_device_verifications` (
  `verification_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `otp_code` varchar(255) NOT NULL,
  `device_name` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  `device_identifier` varchar(255) DEFAULT NULL,
  `os_type` varchar(50) NOT NULL,
  `installation_path` varchar(255) DEFAULT NULL,
  `delivery_status` tinyint(4) NOT NULL DEFAULT 0,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `expires_at` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `outcome_assessment_method`
--

CREATE TABLE `outcome_assessment_method` (
  `id` int(10) UNSIGNED NOT NULL,
  `clo_id` int(10) UNSIGNED NOT NULL,
  `method_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `outcome_teaching_strategy`
--

CREATE TABLE `outcome_teaching_strategy` (
  `id` int(10) UNSIGNED NOT NULL,
  `clo_id` int(10) UNSIGNED NOT NULL,
  `strategy_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(100) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `payout_adjustments`
--

CREATE TABLE `payout_adjustments` (
  `adjustment_id` int(10) UNSIGNED NOT NULL,
  `payout_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(20) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `is_automatic` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `periods`
--

CREATE TABLE `periods` (
  `period_id` int(10) UNSIGNED NOT NULL,
  `college_id` int(10) UNSIGNED NOT NULL,
  `period_name` varchar(50) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `session_type` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `permissions`
--

CREATE TABLE `permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `permission_key` varchar(100) NOT NULL,
  `permission_name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `permissions`
--

INSERT INTO `permissions` (`permission_id`, `permission_key`, `permission_name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'colleges.view', 'عرض الكليات', 'عرض قائمة الكليات وتفاصيلها', '2026-08-25 06:10:13', '2026-08-25 06:10:13', NULL),
(2, 'colleges.create', 'إضافة كلية', 'إنشاء كلية جديدة وإعداد بياناتها', '2026-08-25 06:10:13', '2026-08-25 06:10:13', NULL),
(3, 'colleges.update', 'تعديل بيانات كلية', 'تعديل الاسم، الشعار، أو الكود الأكاديمي', '2026-08-25 06:10:13', '2026-08-25 06:10:13', NULL),
(4, 'colleges.delete', 'حذف كلية', 'حذف الكلية من النظام', '2026-08-25 06:10:13', '2026-08-25 06:10:13', NULL),
(5, 'users.view', 'عرض المستخدمين', 'عرض قائمة كافة المستخدمين في النظام', '2026-08-25 06:10:13', '2026-08-25 06:10:13', NULL),
(6, 'users.create', 'إضافة مستخدم', 'إنشاء حساب مستخدم جديد', '2026-08-25 06:10:13', '2026-08-25 06:10:13', NULL),
(7, 'users.update', 'تعديل بيانات مستخدم', 'تعديل البريد، الاسم، أو الهاتف', '2026-08-25 06:10:13', '2026-08-25 06:10:13', NULL),
(8, 'users.delete', 'حذف مستخدم', 'حذف حساب مستخدم نهائياً أو إيقافه', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(9, 'roles.view', 'عرض الأدوار', 'عرض قائمة أنواع المستخدمين (الأدوار)', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(10, 'roles.create', 'إضافة دور جديد', 'إنشاء مسمى وظيفي جديد', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(11, 'roles.update', 'تعديل دور', 'تعديل اسم أو كود الدور', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(12, 'roles.delete', 'حذف دور', 'حذف الدور من النظام', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(13, 'roles.assign_permissions', 'توزيع الصلاحيات (المصفوفة)', 'التحكم في مصفوفة الصلاحيات', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(14, 'roles.assign_user', 'تعيين دور لمستخدم', 'ربط الموظف بوظيفة محددة', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(15, 'security.view_policy', 'عرض سياسة الأمان', 'الاطلاع على إعدادات الأمان', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(16, 'security.manage_policy', 'تعديل سياسة الأمان', 'تغيير إعدادات كلمات المرور والحظر', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(17, 'security.manage_sessions', 'إدارة الجلسات النشطة', 'إنهاء جلسات المستخدمين', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(18, 'security.view_devices', 'عرض أجهزة المستخدمين', 'مراقبة الأجهزة المتصلة', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(19, 'security.manage_ips', 'قيود الشبكة (IP)', 'إدارة القائمة البيضاء والسوداء', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(20, 'logs.view', 'عرض سجلات النظام', 'الاطلاع على الـ Audit Logs', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(21, 'study_plan.view', 'عرض الخطة الدراسية', 'عرض الهيكل الأكاديمي والمقررات', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(22, 'study_plan.create', 'إضافة في الخطة', 'إضافة أقسام، برامج، أو مواد', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(23, 'study_plan.update', 'تعديل الخطة', 'تعديل بيانات البرامج والمقررات', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(24, 'study_plan.delete', 'حذف من الخطة', 'حذف عناصر من الهيكل الأكاديمي', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(25, 'locations.view', 'عرض القاعات والمباني', 'عرض قائمة المباني والقاعات', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(26, 'locations.create', 'إضافة قاعة/مبنى', 'إضافة مبنى جديد أو قاعة', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(27, 'locations.update', 'تعديل قاعة/مبنى', 'تعديل بيانات المباني والقاعات', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(28, 'locations.delete', 'حذف قاعة/مبنى', 'حذف المباني أو القاعات', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(29, 'academic_titles.view', 'عرض الرتب الأكاديمية', '', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(30, 'academic_titles.create', 'إضافة رتبة أكاديمية', '', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(31, 'academic_titles.update', 'تعديل رتبة أكاديمية', '', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(32, 'academic_titles.delete', 'حذف رتبة أكاديمية', '', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(33, 'staff.view', 'عرض هيئة التدريس', 'عرض قائمة المحاضرين', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(34, 'staff.create', 'إضافة عضو هيئة تدريس', 'إضافة محاضر جديد', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(35, 'staff.update', 'تعديل بيانات عضو', 'تعديل الملف الشخصي للمحاضر', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(36, 'staff.delete', 'حذف عضو هيئة تدريس', '', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(37, 'timetable.create_table', 'إنشاء جدول دراسي', 'تهيئة جدول جديد للفصل', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(38, 'timetable.view_lectures', 'عرض المحاضرات', 'عرض المحاضرات في الجدول', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(39, 'timetable.create_lecture', 'إنشاء محاضرة', 'إضافة محاضرة للجدول', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(40, 'timetable.update_lecture', 'تعديل محاضرة', 'تغيير وقت أو قاعة المحاضرة', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(41, 'timetable.delete_lecture', 'حذف محاضرة', 'إزالة محاضرة من الجدول', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(42, 'groups.view', 'عرض المجموعات', 'عرض المجموعات الطلابية', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(43, 'groups.create', 'إنشاء مجموعة', 'إنشاء مجموعة جديدة', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(44, 'students.add', 'إضافة طالب', 'تسجيل طالب في النظام', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(45, 'students.update', 'تعديل بيانات طالب', '', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(46, 'students.delete', 'حذف طالب', '', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(47, 'periods.view', 'عرض الفترات', '', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(48, 'periods.create', 'إضافة فترة', '', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(49, 'periods.update', 'تعديل فترة', '', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(50, 'periods.delete', 'حذف فترة', '', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(51, 'requests.approve_makeup', 'الموافقة على طلبات التعويض', 'قبول أو رفض طلبات المحاضرين', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(52, 'requests.rejected_makeup', ' أعادة الطلبات المرفوضة  ', 'إعادة تقديم طلبات المحاضرين المرفوضة', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(53, 'requests.view_makeup', 'عرض طلبات التعويض', 'عرض كافة طلبات المحاضرين للتعويض', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(54, 'requests.schedule_makeup', 'جدولة المحاضرة التعويضية', 'تحديد الوقت والقاعة للطلب بعد الموافقة عليه', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(55, 'reports.financial_manage', 'إدارة التقارير المالية', 'عرض وإنشاء كشوف الاستحقاق', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(56, 'reports.lecturer_attendance', 'تقرير حضور المحاضرين', 'عرض سجلات حضور الدكاترة', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(57, 'reports.student_attendance', 'تقرير حضور الطلاب', 'عرض سجلات حضور وغياب الطلاب', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(58, 'reports.semester_results', 'نتائج أعمال الفصل', 'عرض درجات ونتائج الفصل', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(59, 'reports.view_custom', 'عرض التقارير المخصصة', 'إنشاء تقارير مخصصة حسب الحاجة', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(60, 'dashboard.view_global', 'عرض لوحة التحكم العامة', 'اللوحة الرئيسية للنظام (تشمل جميع الكليات)', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL),
(61, 'dashboard.view_college', 'عرض لوحة تحكم الكلية', 'اللوحة الخاصة بإحصائيات الكلية الواحدة', '2026-08-25 06:10:14', '2026-08-25 06:10:14', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `programs`
--

CREATE TABLE `programs` (
  `program_id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `program_name` varchar(50) NOT NULL,
  `academic_system` enum('semester','credit') NOT NULL DEFAULT 'semester',
  `block_based` tinyint(1) NOT NULL DEFAULT 0,
  `total_hours` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `program_learning_outcomes`
--

CREATE TABLE `program_learning_outcomes` (
  `plo_id` int(10) UNSIGNED NOT NULL,
  `program_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(10) NOT NULL COMMENT 'مثال: A1, B1, C1, D1',
  `domain` enum('Knowledge','Intellectual','Professional','General') NOT NULL COMMENT 'مجال المخرج',
  `description` text NOT NULL COMMENT 'وصف مخرج التعلم',
  `weight` decimal(5,2) NOT NULL DEFAULT 0.00 COMMENT 'وزن المخرج من 100',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `program_option_audits`
--

CREATE TABLE `program_option_audits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `program_id` int(10) UNSIGNED NOT NULL,
  `option_type` varchar(30) NOT NULL,
  `option_id` bigint(20) UNSIGNED DEFAULT NULL,
  `action` enum('created','updated','deleted') NOT NULL,
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`details`)),
  `changed_by` int(10) UNSIGNED DEFAULT NULL,
  `changed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `qa_answers`
--

CREATE TABLE `qa_answers` (
  `answer_id` bigint(20) UNSIGNED NOT NULL,
  `submission_id` int(10) UNSIGNED NOT NULL,
  `question_id` int(10) UNSIGNED NOT NULL,
  `rating_value` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `qa_campaigns`
--

CREATE TABLE `qa_campaigns` (
  `campaign_id` int(10) UNSIGNED NOT NULL,
  `campaign_name` varchar(100) NOT NULL,
  `form_id` int(10) UNSIGNED NOT NULL,
  `academic_year` varchar(20) NOT NULL,
  `min_attendance_percentage` int(11) NOT NULL DEFAULT 0,
  `target_percentage` int(11) NOT NULL DEFAULT 80 COMMENT 'النسبة المستهدفة للنجاح',
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `qa_campaign_assignments`
--

CREATE TABLE `qa_campaign_assignments` (
  `assignment_id` bigint(20) UNSIGNED NOT NULL,
  `campaign_id` int(10) UNSIGNED NOT NULL,
  `timetable_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `qa_domains`
--

CREATE TABLE `qa_domains` (
  `domain_id` int(10) UNSIGNED NOT NULL,
  `form_id` int(10) UNSIGNED NOT NULL,
  `domain_name` varchar(100) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `qa_forms`
--

CREATE TABLE `qa_forms` (
  `form_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `target_type` enum('theory','practical','both') NOT NULL DEFAULT 'theory',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `college_id` int(10) UNSIGNED DEFAULT NULL,
  `academic_year` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `qa_questions`
--

CREATE TABLE `qa_questions` (
  `question_id` int(10) UNSIGNED NOT NULL,
  `domain_id` int(10) UNSIGNED NOT NULL,
  `question_text` text NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `qa_submissions`
--

CREATE TABLE `qa_submissions` (
  `submission_id` int(10) UNSIGNED NOT NULL,
  `campaign_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `lecturer_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `submission_date_timestamp` int(10) UNSIGNED DEFAULT NULL,
  `is_practical` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `qr_codes`
--

CREATE TABLE `qr_codes` (
  `qr_id` int(10) UNSIGNED NOT NULL,
  `timetable_id` int(10) UNSIGNED NOT NULL,
  `session_id` int(10) UNSIGNED NOT NULL,
  `qr_code_value` varchar(255) NOT NULL,
  `generated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `expires_at` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `latitude` decimal(10,7) NOT NULL,
  `longitude` decimal(10,7) NOT NULL,
  `allowed_distance` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `semesters`
--

CREATE TABLE `semesters` (
  `semester_id` int(10) UNSIGNED NOT NULL,
  `semester_name` varchar(50) NOT NULL,
  `academic_year` varchar(20) NOT NULL,
  `level_id` int(10) UNSIGNED NOT NULL,
  `term_number` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `session_topics_covered`
--

CREATE TABLE `session_topics_covered` (
  `session_id` int(10) UNSIGNED NOT NULL,
  `topic_id` int(10) UNSIGNED NOT NULL,
  `coverage_status` varchar(255) NOT NULL DEFAULT 'fully_covered',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `settings`
--

CREATE TABLE `settings` (
  `key` varchar(255) NOT NULL,
  `value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`value`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `settings`
--

INSERT INTO `settings` (`key`, `value`, `created_at`, `updated_at`) VALUES
('security.password', '{\"min_length\":8,\"require_uppercase\":true,\"require_lowercase\":true,\"require_numbers\":true,\"require_symbols\":false}', NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `students`
--

CREATE TABLE `students` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `college_id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `level_id` int(10) UNSIGNED DEFAULT NULL,
  `semester_id` int(10) UNSIGNED DEFAULT NULL,
  `block_id` bigint(20) UNSIGNED DEFAULT NULL,
  `program_id` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `student_attendance`
--

CREATE TABLE `student_attendance` (
  `attendance_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `timetable_id` int(10) UNSIGNED NOT NULL,
  `level_id` int(10) UNSIGNED NOT NULL,
  `attendance_date` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `solved` text DEFAULT NULL,
  `attendance_method` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: QR, 1: Manual, etc',
  `notification_status` tinyint(4) NOT NULL DEFAULT 0,
  `college_id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `session_code` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `student_excuse_submissions`
--

CREATE TABLE `student_excuse_submissions` (
  `submission_id` int(10) UNSIGNED NOT NULL,
  `student_user_id` int(10) UNSIGNED NOT NULL,
  `request_date` date NOT NULL,
  `reason` text NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `lecturer_user_id` int(10) UNSIGNED NOT NULL,
  `is_lecturer_notified` tinyint(1) NOT NULL DEFAULT 0,
  `response_status` tinyint(4) NOT NULL DEFAULT 0,
  `lecturer_comment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `excuse_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `student_grades`
--

CREATE TABLE `student_grades` (
  `grade_id` int(10) UNSIGNED NOT NULL,
  `assessment_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `score` decimal(5,2) NOT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `student_groups`
--

CREATE TABLE `student_groups` (
  `group_id` int(10) UNSIGNED NOT NULL,
  `college_id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `program_id` int(10) UNSIGNED DEFAULT NULL,
  `level_id` int(10) UNSIGNED DEFAULT NULL,
  `semester_id` int(10) UNSIGNED DEFAULT NULL,
  `block_id` bigint(20) UNSIGNED DEFAULT NULL,
  `group_name` varchar(100) NOT NULL,
  `max_students` int(10) UNSIGNED DEFAULT 30,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `student_group_members`
--

CREATE TABLE `student_group_members` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `teaching_strategies`
--

CREATE TABLE `teaching_strategies` (
  `id` int(10) UNSIGNED NOT NULL,
  `program_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(200) NOT NULL COMMENT 'مثال: المحاضرة التفاعلية',
  `description` text DEFAULT NULL,
  `category` enum('lecture','practical','discussion','collaboration','project_based','problem_solving','simulation','other') NOT NULL DEFAULT 'lecture' COMMENT 'فئة الاستراتيجية',
  `order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `timetable`
--

CREATE TABLE `timetable` (
  `timetable_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `lecturer_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  `level_id` int(10) UNSIGNED DEFAULT NULL,
  `semester_id` int(10) UNSIGNED DEFAULT NULL,
  `block_id` bigint(20) UNSIGNED DEFAULT NULL,
  `classroom_id` int(10) UNSIGNED NOT NULL,
  `day_id` int(10) UNSIGNED NOT NULL,
  `period_id` int(10) UNSIGNED NOT NULL,
  `lecture_type` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `academic_year` varchar(20) NOT NULL,
  `college_id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `program_id` int(10) UNSIGNED DEFAULT NULL,
  `gender_type` tinyint(4) NOT NULL DEFAULT 0,
  `lecture_hours` decimal(4,2) NOT NULL,
  `allowance_minutes` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `topic_questions`
--

CREATE TABLE `topic_questions` (
  `question_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED DEFAULT NULL,
  `part` enum('نظري','عملي','تمارين','سريري') DEFAULT NULL,
  `topic_id` int(10) UNSIGNED DEFAULT NULL,
  `subtopic` varchar(300) DEFAULT NULL COMMENT 'الموضوع الفرعي المحدد',
  `question_text` text NOT NULL COMMENT 'نص السؤال',
  `question_type` enum('MCQ','essay') NOT NULL DEFAULT 'MCQ' COMMENT 'MCQ = اختيار من متعدد، essay = مقالي',
  `difficulty_level` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=سهل، 5=صعب جداً',
  `clo_code` varchar(10) DEFAULT NULL COMMENT 'رمز مخرج التعلم (a1, b2, c1, إلخ)',
  `options` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT 'مصفوفة الخيارات (للـ MCQ)' CHECK (json_valid(`options`)),
  `correct_answer` text DEFAULT NULL COMMENT 'الإجابة الصحيحة (للمقالي)',
  `is_used_in_exam` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `usage_count` int(11) NOT NULL DEFAULT 0,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `college_id` int(10) UNSIGNED DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `academic_number` varchar(50) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `user_type_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email`, `phone`, `college_id`, `password`, `academic_number`, `gender`, `user_type_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, ' عبدالله الهاشمي ', '3bduad@gmail.com', '734637112', 1, '$2y$12$vo7D9ElGyVjbtU8I/q1H7.PFKltMnHVC5o8IrRS6A3FnA8lhqhJGu', 'ADM0001', 0, 2, '2026-08-25 06:10:30', '2026-08-25 06:10:30', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `user_activities`
--

CREATE TABLE `user_activities` (
  `activity_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `action_type` varchar(50) NOT NULL,
  `action_description` text DEFAULT NULL,
  `module_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `user_devices`
--

CREATE TABLE `user_devices` (
  `device_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `device_name` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  `device_identifier` varchar(255) DEFAULT NULL,
  `os_type` varchar(50) NOT NULL,
  `installation_path` varchar(255) DEFAULT NULL,
  `is_auto_attendance_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `registered_at` datetime NOT NULL DEFAULT current_timestamp(),
  `last_login_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `user_types`
--

CREATE TABLE `user_types` (
  `user_type_id` int(10) UNSIGNED NOT NULL,
  `user_type_name` varchar(50) NOT NULL,
  `user_type_code` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `user_types`
--

INSERT INTO `user_types` (`user_type_id`, `user_type_name`, `user_type_code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'طالب', 'student', NULL, NULL, NULL),
(2, 'مشرف عام', 'admin', NULL, NULL, NULL),
(3, 'عميد', 'dean', NULL, NULL, NULL),
(4, 'رئيس قسم', 'dept_head', NULL, NULL, NULL),
(5, 'شؤون أكاديمية', 'academic_affairs', NULL, NULL, NULL),
(6, 'كنترول', 'control', NULL, NULL, NULL),
(7, 'مدير قاعات', 'classroom_manager', NULL, NULL, NULL),
(8, 'محاضر', 'lecturer', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `user_type_permissions`
--

CREATE TABLE `user_type_permissions` (
  `user_type_id` int(10) UNSIGNED NOT NULL,
  `college_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `user_type_permissions`
--

INSERT INTO `user_type_permissions` (`user_type_id`, `college_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(2, 1, 1, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 2, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 3, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 4, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 5, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 6, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 7, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 8, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 9, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 10, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 11, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 12, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 13, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 14, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 15, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 16, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 17, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 18, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 19, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 20, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 21, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 22, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 23, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 24, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 25, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 26, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 27, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 28, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 29, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 30, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 31, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 32, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 33, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 34, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 35, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 36, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 37, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 38, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 39, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 40, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 41, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 42, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 43, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 44, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 45, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 46, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 47, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 48, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 49, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 50, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 51, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 52, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 53, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 54, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 55, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 56, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 57, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 58, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 59, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 60, '2026-08-25 06:10:30', '2026-08-25 06:10:30'),
(2, 1, 61, '2026-08-25 06:10:30', '2026-08-25 06:10:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_titles`
--
ALTER TABLE `academic_titles`
  ADD PRIMARY KEY (`title_id`),
  ADD UNIQUE KEY `academic_titles_college_id_title_code_unique` (`college_id`,`title_code`),
  ADD UNIQUE KEY `academic_titles_college_id_title_name_unique` (`college_id`,`title_name`);

--
-- Indexes for table `assessment_methods`
--
ALTER TABLE `assessment_methods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `assessment_method_program_name_unique` (`program_id`,`name`),
  ADD KEY `assessment_methods_is_active_category_index` (`is_active`,`category`),
  ADD KEY `assessment_methods_program_id_index` (`program_id`);

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blocks_program_id_foreign` (`program_id`),
  ADD KEY `blocks_level_id_foreign` (`level_id`);

--
-- Indexes for table `block_relations`
--
ALTER TABLE `block_relations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `block_relations_block_id_foreign` (`block_id`),
  ADD KEY `block_relations_related_block_id_foreign` (`related_block_id`);

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`building_id`),
  ADD KEY `buildings_building_name_index` (`building_name`),
  ADD KEY `buildings_college_id_foreign` (`college_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`classroom_id`),
  ADD UNIQUE KEY `unique_room_per_floor_per_building` (`building_id`,`floor`,`classroom_name`),
  ADD UNIQUE KEY `classrooms_remote_id_unique` (`remote_id`),
  ADD KEY `classrooms_classroom_name_index` (`classroom_name`),
  ADD KEY `classrooms_college_id_foreign` (`college_id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`college_id`),
  ADD UNIQUE KEY `colleges_college_code_unique` (`college_code`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `courses_course_code_unique` (`course_code`),
  ADD KEY `courses_college_id_foreign` (`college_id`),
  ADD KEY `courses_department_id_foreign` (`department_id`),
  ADD KEY `courses_program_id_foreign` (`program_id`),
  ADD KEY `courses_level_id_foreign` (`level_id`),
  ADD KEY `courses_semester_id_foreign` (`semester_id`),
  ADD KEY `courses_block_id_foreign` (`block_id`);

--
-- Indexes for table `course_assessments`
--
ALTER TABLE `course_assessments`
  ADD PRIMARY KEY (`assessment_id`),
  ADD KEY `course_assessments_college_id_foreign` (`college_id`),
  ADD KEY `course_assessments_group_id_foreign` (`group_id`),
  ADD KEY `course_assessments_semester_id_foreign` (`semester_id`),
  ADD KEY `course_assessments_created_by_foreign` (`created_by`),
  ADD KEY `assessment_context_index` (`course_id`,`group_id`,`academic_year`,`semester_id`);

--
-- Indexes for table `course_assignments`
--
ALTER TABLE `course_assignments`
  ADD PRIMARY KEY (`assignment_id`),
  ADD KEY `course_assignments_course_id_part_week_index` (`course_id`,`part`,`week`);

--
-- Indexes for table `course_descriptions`
--
ALTER TABLE `course_descriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_descriptions_course_id_unique` (`course_id`),
  ADD KEY `course_descriptions_is_completed_index` (`is_completed`);

--
-- Indexes for table `course_learning_outcomes`
--
ALTER TABLE `course_learning_outcomes`
  ADD PRIMARY KEY (`clo_id`),
  ADD UNIQUE KEY `course_learning_outcomes_course_id_code_unique` (`course_id`,`code`),
  ADD KEY `course_learning_outcomes_plo_id_foreign` (`plo_id`),
  ADD KEY `course_learning_outcomes_course_id_domain_index` (`course_id`,`domain`);

--
-- Indexes for table `course_policies`
--
ALTER TABLE `course_policies`
  ADD PRIMARY KEY (`policy_id`),
  ADD UNIQUE KEY `course_policies_course_id_policy_number_unique` (`course_id`,`policy_number`);

--
-- Indexes for table `course_prerequisites`
--
ALTER TABLE `course_prerequisites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_prereq_unique` (`course_id`,`prerequisite_course_id`,`type`),
  ADD KEY `course_prerequisites_prerequisite_course_id_foreign` (`prerequisite_course_id`);

--
-- Indexes for table `course_references`
--
ALTER TABLE `course_references`
  ADD PRIMARY KEY (`reference_id`),
  ADD KEY `course_references_course_id_type_index` (`course_id`,`type`);

--
-- Indexes for table `course_topics`
--
ALTER TABLE `course_topics`
  ADD PRIMARY KEY (`topic_id`),
  ADD UNIQUE KEY `course_topics_course_id_part_week_unit_name_unique` (`course_id`,`part`,`week`,`unit_name`),
  ADD KEY `course_topics_course_id_part_week_index` (`course_id`,`part`,`week`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`day_id`),
  ADD UNIQUE KEY `days_day_name_unique` (`day_name`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`),
  ADD UNIQUE KEY `departments_department_code_unique` (`department_code`),
  ADD KEY `departments_college_id_foreign` (`college_id`);

--
-- Indexes for table `financial_cycles`
--
ALTER TABLE `financial_cycles`
  ADD PRIMARY KEY (`cycle_id`),
  ADD UNIQUE KEY `financial_cycles_college_id_month_year_unique` (`college_id`,`month_year`),
  ADD KEY `financial_cycles_created_by_foreign` (`created_by`);

--
-- Indexes for table `ip_restrictions`
--
ALTER TABLE `ip_restrictions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`lecturer_id`),
  ADD UNIQUE KEY `lecturers_user_id_unique` (`user_id`),
  ADD KEY `lecturers_college_id_foreign` (`college_id`),
  ADD KEY `lecturers_department_id_foreign` (`department_id`),
  ADD KEY `lecturers_title_id_foreign` (`title_id`);

--
-- Indexes for table `lecturer_attendance`
--
ALTER TABLE `lecturer_attendance`
  ADD PRIMARY KEY (`attendance_id`),
  ADD UNIQUE KEY `unique_lecturer_session` (`lecturer_id`,`session_code`),
  ADD KEY `lecturer_attendance_timetable_id_foreign` (`timetable_id`),
  ADD KEY `lecturer_attendance_college_id_foreign` (`college_id`),
  ADD KEY `lecturer_attendance_attendance_date_index` (`attendance_date`);

--
-- Indexes for table `lecturer_group_notifications`
--
ALTER TABLE `lecturer_group_notifications`
  ADD PRIMARY KEY (`notification_id`),
  ADD UNIQUE KEY `unique_group_notification` (`lecturer_user_id`,`group_id`,`send_at`),
  ADD KEY `lecturer_group_notifications_group_id_foreign` (`group_id`);

--
-- Indexes for table `lecturer_payouts`
--
ALTER TABLE `lecturer_payouts`
  ADD PRIMARY KEY (`payout_id`),
  ADD UNIQUE KEY `lecturer_payouts_cycle_id_lecturer_id_unique` (`cycle_id`,`lecturer_id`),
  ADD KEY `lecturer_payouts_lecturer_id_foreign` (`lecturer_id`);

--
-- Indexes for table `lecture_attachments`
--
ALTER TABLE `lecture_attachments`
  ADD PRIMARY KEY (`attachment_id`),
  ADD KEY `lecture_attachments_session_id_foreign` (`session_id`);

--
-- Indexes for table `lecture_sessions`
--
ALTER TABLE `lecture_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD UNIQUE KEY `lecture_sessions_session_code_unique` (`session_code`),
  ADD KEY `lecture_sessions_timetable_id_foreign` (`timetable_id`),
  ADD KEY `lecture_sessions_actual_classroom_id_foreign` (`actual_classroom_id`),
  ADD KEY `lecture_sessions_lecturer_id_foreign` (`lecturer_id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`level_id`),
  ADD UNIQUE KEY `unique_program_level_number` (`program_id`,`level_number`);

--
-- Indexes for table `makeup_lectures_requests`
--
ALTER TABLE `makeup_lectures_requests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `makeup_lectures_requests_lecturer_id_foreign` (`lecturer_id`),
  ADD KEY `makeup_lectures_requests_course_id_foreign` (`course_id`),
  ADD KEY `makeup_lectures_requests_group_id_foreign` (`group_id`),
  ADD KEY `makeup_lectures_requests_classroom_id_foreign` (`classroom_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_reads`
--
ALTER TABLE `notification_reads`
  ADD PRIMARY KEY (`read_id`),
  ADD UNIQUE KEY `unique_user_notification` (`user_id`,`notification_id`),
  ADD KEY `fk_read_notification` (`notification_id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_owner_type_owner_id_index` (`owner_type`,`owner_id`);

--
-- Indexes for table `oauth_device_codes`
--
ALTER TABLE `oauth_device_codes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `oauth_device_codes_user_code_unique` (`user_code`),
  ADD KEY `oauth_device_codes_user_id_index` (`user_id`),
  ADD KEY `oauth_device_codes_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `otp_device_verifications`
--
ALTER TABLE `otp_device_verifications`
  ADD PRIMARY KEY (`verification_id`),
  ADD KEY `otp_device_verifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `outcome_assessment_method`
--
ALTER TABLE `outcome_assessment_method`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `outcome_assessment_method_clo_id_method_id_unique` (`clo_id`,`method_id`),
  ADD KEY `outcome_assessment_method_method_id_foreign` (`method_id`);

--
-- Indexes for table `outcome_teaching_strategy`
--
ALTER TABLE `outcome_teaching_strategy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `outcome_teaching_strategy_clo_id_strategy_id_unique` (`clo_id`,`strategy_id`),
  ADD KEY `outcome_teaching_strategy_strategy_id_foreign` (`strategy_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD KEY `password_reset_tokens_email_index` (`email`);

--
-- Indexes for table `payout_adjustments`
--
ALTER TABLE `payout_adjustments`
  ADD PRIMARY KEY (`adjustment_id`),
  ADD KEY `payout_adjustments_payout_id_foreign` (`payout_id`);

--
-- Indexes for table `periods`
--
ALTER TABLE `periods`
  ADD PRIMARY KEY (`period_id`),
  ADD KEY `periods_college_id_foreign` (`college_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`permission_id`),
  ADD UNIQUE KEY `permissions_permission_key_unique` (`permission_key`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`program_id`),
  ADD UNIQUE KEY `program_full_unique_index` (`department_id`,`program_name`,`academic_system`,`block_based`);

--
-- Indexes for table `program_learning_outcomes`
--
ALTER TABLE `program_learning_outcomes`
  ADD PRIMARY KEY (`plo_id`),
  ADD UNIQUE KEY `program_learning_outcomes_program_id_code_unique` (`program_id`,`code`),
  ADD UNIQUE KEY `unique_program_order` (`program_id`,`order`),
  ADD KEY `program_learning_outcomes_program_id_domain_index` (`program_id`,`domain`);

--
-- Indexes for table `program_option_audits`
--
ALTER TABLE `program_option_audits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_option_audits_program_id_index` (`program_id`);

--
-- Indexes for table `qa_answers`
--
ALTER TABLE `qa_answers`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `qa_answers_submission_id_foreign` (`submission_id`),
  ADD KEY `qa_answers_question_id_rating_value_index` (`question_id`,`rating_value`);

--
-- Indexes for table `qa_campaigns`
--
ALTER TABLE `qa_campaigns`
  ADD PRIMARY KEY (`campaign_id`),
  ADD KEY `qa_campaigns_form_id_foreign` (`form_id`);

--
-- Indexes for table `qa_campaign_assignments`
--
ALTER TABLE `qa_campaign_assignments`
  ADD PRIMARY KEY (`assignment_id`),
  ADD UNIQUE KEY `unique_assignment` (`campaign_id`,`timetable_id`),
  ADD KEY `qa_campaign_assignments_timetable_id_foreign` (`timetable_id`);

--
-- Indexes for table `qa_domains`
--
ALTER TABLE `qa_domains`
  ADD PRIMARY KEY (`domain_id`),
  ADD KEY `qa_domains_form_id_foreign` (`form_id`);

--
-- Indexes for table `qa_forms`
--
ALTER TABLE `qa_forms`
  ADD PRIMARY KEY (`form_id`),
  ADD KEY `qa_forms_college_id_foreign` (`college_id`);

--
-- Indexes for table `qa_questions`
--
ALTER TABLE `qa_questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `qa_questions_domain_id_foreign` (`domain_id`);

--
-- Indexes for table `qa_submissions`
--
ALTER TABLE `qa_submissions`
  ADD PRIMARY KEY (`submission_id`),
  ADD UNIQUE KEY `unique_student_evaluation` (`campaign_id`,`student_id`,`lecturer_id`,`course_id`),
  ADD KEY `qa_submissions_student_id_foreign` (`student_id`),
  ADD KEY `qa_submissions_lecturer_id_foreign` (`lecturer_id`),
  ADD KEY `qa_submissions_course_id_foreign` (`course_id`);

--
-- Indexes for table `qr_codes`
--
ALTER TABLE `qr_codes`
  ADD PRIMARY KEY (`qr_id`),
  ADD KEY `qr_codes_timetable_id_foreign` (`timetable_id`),
  ADD KEY `qr_codes_session_id_foreign` (`session_id`),
  ADD KEY `qr_codes_created_by_foreign` (`created_by`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`semester_id`),
  ADD UNIQUE KEY `unique_level_term_number` (`level_id`,`term_number`);

--
-- Indexes for table `session_topics_covered`
--
ALTER TABLE `session_topics_covered`
  ADD PRIMARY KEY (`session_id`,`topic_id`),
  ADD KEY `session_topics_covered_topic_id_foreign` (`topic_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `students_user_id_unique` (`user_id`),
  ADD KEY `students_college_id_foreign` (`college_id`),
  ADD KEY `students_department_id_foreign` (`department_id`),
  ADD KEY `students_level_id_foreign` (`level_id`),
  ADD KEY `students_semester_id_foreign` (`semester_id`),
  ADD KEY `students_block_id_foreign` (`block_id`),
  ADD KEY `students_program_id_level_id_semester_id_block_id_index` (`program_id`,`level_id`,`semester_id`,`block_id`);

--
-- Indexes for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD PRIMARY KEY (`attendance_id`),
  ADD UNIQUE KEY `unique_student_session` (`student_id`,`session_code`),
  ADD KEY `student_attendance_timetable_id_foreign` (`timetable_id`),
  ADD KEY `student_attendance_college_id_foreign` (`college_id`),
  ADD KEY `student_attendance_level_id_foreign` (`level_id`),
  ADD KEY `student_attendance_department_id_foreign` (`department_id`),
  ADD KEY `student_attendance_student_id_attendance_date_index` (`student_id`,`attendance_date`);

--
-- Indexes for table `student_excuse_submissions`
--
ALTER TABLE `student_excuse_submissions`
  ADD PRIMARY KEY (`submission_id`),
  ADD UNIQUE KEY `unique_student_course_date` (`student_user_id`,`course_id`,`request_date`),
  ADD KEY `student_excuse_submissions_course_id_foreign` (`course_id`),
  ADD KEY `student_excuse_submissions_lecturer_user_id_foreign` (`lecturer_user_id`);

--
-- Indexes for table `student_grades`
--
ALTER TABLE `student_grades`
  ADD PRIMARY KEY (`grade_id`),
  ADD UNIQUE KEY `student_grades_assessment_id_student_id_unique` (`assessment_id`,`student_id`),
  ADD KEY `student_grades_student_id_foreign` (`student_id`);

--
-- Indexes for table `student_groups`
--
ALTER TABLE `student_groups`
  ADD PRIMARY KEY (`group_id`),
  ADD UNIQUE KEY `unique_group_per_path_v2` (`college_id`,`department_id`,`program_id`,`level_id`,`semester_id`,`block_id`,`group_name`),
  ADD KEY `student_groups_department_id_foreign` (`department_id`),
  ADD KEY `student_groups_level_id_foreign` (`level_id`),
  ADD KEY `student_groups_semester_id_foreign` (`semester_id`),
  ADD KEY `student_groups_block_id_foreign` (`block_id`),
  ADD KEY `student_groups_program_id_level_id_semester_id_block_id_index` (`program_id`,`level_id`,`semester_id`,`block_id`);

--
-- Indexes for table `student_group_members`
--
ALTER TABLE `student_group_members`
  ADD PRIMARY KEY (`student_id`,`group_id`),
  ADD KEY `student_group_members_group_id_foreign` (`group_id`);

--
-- Indexes for table `teaching_strategies`
--
ALTER TABLE `teaching_strategies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teaching_strategy_program_name_unique` (`program_id`,`name`),
  ADD KEY `teaching_strategies_is_active_category_index` (`is_active`,`category`),
  ADD KEY `teaching_strategies_program_id_index` (`program_id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timetable_id`),
  ADD KEY `timetable_course_id_foreign` (`course_id`),
  ADD KEY `timetable_day_id_foreign` (`day_id`),
  ADD KEY `timetable_period_id_foreign` (`period_id`),
  ADD KEY `timetable_college_id_foreign` (`college_id`),
  ADD KEY `timetable_department_id_foreign` (`department_id`),
  ADD KEY `timetable_level_id_foreign` (`level_id`),
  ADD KEY `timetable_classroom_id_index` (`classroom_id`),
  ADD KEY `timetable_lecturer_id_index` (`lecturer_id`),
  ADD KEY `timetable_group_id_index` (`group_id`),
  ADD KEY `timetable_program_id_foreign` (`program_id`),
  ADD KEY `timetable_semester_id_foreign` (`semester_id`),
  ADD KEY `timetable_block_id_foreign` (`block_id`);

--
-- Indexes for table `topic_questions`
--
ALTER TABLE `topic_questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `topic_questions_topic_id_question_type_difficulty_level_index` (`topic_id`,`question_type`,`difficulty_level`),
  ADD KEY `topic_questions_course_id_index` (`course_id`),
  ADD KEY `topic_questions_part_index` (`part`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_academic_number_unique` (`academic_number`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD KEY `users_user_type_id_foreign` (`user_type_id`),
  ADD KEY `users_college_id_foreign` (`college_id`),
  ADD KEY `users_full_name_index` (`full_name`);

--
-- Indexes for table `user_activities`
--
ALTER TABLE `user_activities`
  ADD PRIMARY KEY (`activity_id`),
  ADD KEY `user_activities_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_devices`
--
ALTER TABLE `user_devices`
  ADD PRIMARY KEY (`device_id`),
  ADD KEY `user_devices_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`user_type_id`),
  ADD UNIQUE KEY `user_types_user_type_name_unique` (`user_type_name`),
  ADD UNIQUE KEY `user_types_user_type_code_unique` (`user_type_code`);

--
-- Indexes for table `user_type_permissions`
--
ALTER TABLE `user_type_permissions`
  ADD PRIMARY KEY (`user_type_id`,`permission_id`,`college_id`),
  ADD KEY `user_type_permissions_college_id_foreign` (`college_id`),
  ADD KEY `user_type_permissions_permission_id_foreign` (`permission_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_titles`
--
ALTER TABLE `academic_titles`
  MODIFY `title_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assessment_methods`
--
ALTER TABLE `assessment_methods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `block_relations`
--
ALTER TABLE `block_relations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `building_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `classroom_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `college_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_assessments`
--
ALTER TABLE `course_assessments`
  MODIFY `assessment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_assignments`
--
ALTER TABLE `course_assignments`
  MODIFY `assignment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_descriptions`
--
ALTER TABLE `course_descriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_learning_outcomes`
--
ALTER TABLE `course_learning_outcomes`
  MODIFY `clo_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_policies`
--
ALTER TABLE `course_policies`
  MODIFY `policy_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_prerequisites`
--
ALTER TABLE `course_prerequisites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_references`
--
ALTER TABLE `course_references`
  MODIFY `reference_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_topics`
--
ALTER TABLE `course_topics`
  MODIFY `topic_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `day_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `financial_cycles`
--
ALTER TABLE `financial_cycles`
  MODIFY `cycle_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_restrictions`
--
ALTER TABLE `ip_restrictions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `lecturer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecturer_attendance`
--
ALTER TABLE `lecturer_attendance`
  MODIFY `attendance_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecturer_group_notifications`
--
ALTER TABLE `lecturer_group_notifications`
  MODIFY `notification_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecturer_payouts`
--
ALTER TABLE `lecturer_payouts`
  MODIFY `payout_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecture_attachments`
--
ALTER TABLE `lecture_attachments`
  MODIFY `attachment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecture_sessions`
--
ALTER TABLE `lecture_sessions`
  MODIFY `session_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `level_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `makeup_lectures_requests`
--
ALTER TABLE `makeup_lectures_requests`
  MODIFY `request_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `notification_reads`
--
ALTER TABLE `notification_reads`
  MODIFY `read_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `otp_device_verifications`
--
ALTER TABLE `otp_device_verifications`
  MODIFY `verification_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `outcome_assessment_method`
--
ALTER TABLE `outcome_assessment_method`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `outcome_teaching_strategy`
--
ALTER TABLE `outcome_teaching_strategy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payout_adjustments`
--
ALTER TABLE `payout_adjustments`
  MODIFY `adjustment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `periods`
--
ALTER TABLE `periods`
  MODIFY `period_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `permission_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `program_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_learning_outcomes`
--
ALTER TABLE `program_learning_outcomes`
  MODIFY `plo_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_option_audits`
--
ALTER TABLE `program_option_audits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qa_answers`
--
ALTER TABLE `qa_answers`
  MODIFY `answer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qa_campaigns`
--
ALTER TABLE `qa_campaigns`
  MODIFY `campaign_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qa_campaign_assignments`
--
ALTER TABLE `qa_campaign_assignments`
  MODIFY `assignment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qa_domains`
--
ALTER TABLE `qa_domains`
  MODIFY `domain_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qa_forms`
--
ALTER TABLE `qa_forms`
  MODIFY `form_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qa_questions`
--
ALTER TABLE `qa_questions`
  MODIFY `question_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qa_submissions`
--
ALTER TABLE `qa_submissions`
  MODIFY `submission_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qr_codes`
--
ALTER TABLE `qr_codes`
  MODIFY `qr_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `semester_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_attendance`
--
ALTER TABLE `student_attendance`
  MODIFY `attendance_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_excuse_submissions`
--
ALTER TABLE `student_excuse_submissions`
  MODIFY `submission_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_grades`
--
ALTER TABLE `student_grades`
  MODIFY `grade_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_groups`
--
ALTER TABLE `student_groups`
  MODIFY `group_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teaching_strategies`
--
ALTER TABLE `teaching_strategies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `timetable_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topic_questions`
--
ALTER TABLE `topic_questions`
  MODIFY `question_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_activities`
--
ALTER TABLE `user_activities`
  MODIFY `activity_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_devices`
--
ALTER TABLE `user_devices`
  MODIFY `device_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `user_type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- قيود الجداول المُلقاة.
--

--
-- قيود الجداول `academic_titles`
--
ALTER TABLE `academic_titles`
  ADD CONSTRAINT `academic_titles_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`) ON DELETE CASCADE;

--
-- قيود الجداول `blocks`
--
ALTER TABLE `blocks`
  ADD CONSTRAINT `blocks_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`level_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `blocks_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`) ON DELETE CASCADE;

--
-- قيود الجداول `block_relations`
--
ALTER TABLE `block_relations`
  ADD CONSTRAINT `block_relations_block_id_foreign` FOREIGN KEY (`block_id`) REFERENCES `blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `block_relations_related_block_id_foreign` FOREIGN KEY (`related_block_id`) REFERENCES `blocks` (`id`) ON DELETE CASCADE;

--
-- قيود الجداول `buildings`
--
ALTER TABLE `buildings`
  ADD CONSTRAINT `buildings_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`) ON DELETE SET NULL;

--
-- قيود الجداول `classrooms`
--
ALTER TABLE `classrooms`
  ADD CONSTRAINT `classrooms_building_id_foreign` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`building_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `classrooms_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`) ON DELETE SET NULL;

--
-- قيود الجداول `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_block_id_foreign` FOREIGN KEY (`block_id`) REFERENCES `blocks` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `courses_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `courses_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`level_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `courses_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `courses_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`) ON DELETE CASCADE;

--
-- قيود الجداول `course_assessments`
--
ALTER TABLE `course_assessments`
  ADD CONSTRAINT `course_assessments_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_assessments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_assessments_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `lecturers` (`lecturer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_assessments_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `student_groups` (`group_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_assessments_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`) ON DELETE CASCADE;

--
-- قيود الجداول `course_assignments`
--
ALTER TABLE `course_assignments`
  ADD CONSTRAINT `course_assignments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE;

--
-- قيود الجداول `course_descriptions`
--
ALTER TABLE `course_descriptions`
  ADD CONSTRAINT `course_descriptions_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- قيود الجداول `course_learning_outcomes`
--
ALTER TABLE `course_learning_outcomes`
  ADD CONSTRAINT `course_learning_outcomes_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_learning_outcomes_plo_id_foreign` FOREIGN KEY (`plo_id`) REFERENCES `program_learning_outcomes` (`plo_id`) ON DELETE SET NULL;

--
-- قيود الجداول `course_policies`
--
ALTER TABLE `course_policies`
  ADD CONSTRAINT `course_policies_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE;

--
-- قيود الجداول `course_prerequisites`
--
ALTER TABLE `course_prerequisites`
  ADD CONSTRAINT `course_prerequisites_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_prerequisites_prerequisite_course_id_foreign` FOREIGN KEY (`prerequisite_course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE;

--
-- قيود الجداول `course_references`
--
ALTER TABLE `course_references`
  ADD CONSTRAINT `course_references_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE;

--
-- قيود الجداول `course_topics`
--
ALTER TABLE `course_topics`
  ADD CONSTRAINT `course_topics_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE;

--
-- قيود الجداول `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`) ON DELETE CASCADE;

--
-- قيود الجداول `financial_cycles`
--
ALTER TABLE `financial_cycles`
  ADD CONSTRAINT `financial_cycles_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `financial_cycles_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL;

--
-- قيود الجداول `lecturers`
--
ALTER TABLE `lecturers`
  ADD CONSTRAINT `lecturers_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lecturers_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lecturers_title_id_foreign` FOREIGN KEY (`title_id`) REFERENCES `academic_titles` (`title_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `lecturers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- قيود الجداول `lecturer_attendance`
--
ALTER TABLE `lecturer_attendance`
  ADD CONSTRAINT `lecturer_attendance_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lecturer_attendance_lecturer_id_foreign` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`lecturer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lecturer_attendance_timetable_id_foreign` FOREIGN KEY (`timetable_id`) REFERENCES `timetable` (`timetable_id`) ON DELETE CASCADE;

--
-- قيود الجداول `lecturer_group_notifications`
--
ALTER TABLE `lecturer_group_notifications`
  ADD CONSTRAINT `lecturer_group_notifications_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `student_groups` (`group_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lecturer_group_notifications_lecturer_user_id_foreign` FOREIGN KEY (`lecturer_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- قيود الجداول `lecturer_payouts`
--
ALTER TABLE `lecturer_payouts`
  ADD CONSTRAINT `lecturer_payouts_cycle_id_foreign` FOREIGN KEY (`cycle_id`) REFERENCES `financial_cycles` (`cycle_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lecturer_payouts_lecturer_id_foreign` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`lecturer_id`) ON DELETE CASCADE;

--
-- قيود الجداول `lecture_attachments`
--
ALTER TABLE `lecture_attachments`
  ADD CONSTRAINT `lecture_attachments_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `lecture_sessions` (`session_id`) ON DELETE CASCADE;

--
-- قيود الجداول `lecture_sessions`
--
ALTER TABLE `lecture_sessions`
  ADD CONSTRAINT `lecture_sessions_actual_classroom_id_foreign` FOREIGN KEY (`actual_classroom_id`) REFERENCES `classrooms` (`classroom_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `lecture_sessions_lecturer_id_foreign` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`lecturer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lecture_sessions_timetable_id_foreign` FOREIGN KEY (`timetable_id`) REFERENCES `timetable` (`timetable_id`) ON DELETE CASCADE;

--
-- قيود الجداول `levels`
--
ALTER TABLE `levels`
  ADD CONSTRAINT `levels_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`) ON DELETE CASCADE;

--
-- قيود الجداول `makeup_lectures_requests`
--
ALTER TABLE `makeup_lectures_requests`
  ADD CONSTRAINT `makeup_lectures_requests_classroom_id_foreign` FOREIGN KEY (`classroom_id`) REFERENCES `classrooms` (`classroom_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `makeup_lectures_requests_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `makeup_lectures_requests_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `student_groups` (`group_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `makeup_lectures_requests_lecturer_id_foreign` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`lecturer_id`) ON DELETE CASCADE;

--
-- قيود الجداول `notification_reads`
--
ALTER TABLE `notification_reads`
  ADD CONSTRAINT `fk_read_notification` FOREIGN KEY (`notification_id`) REFERENCES `lecturer_group_notifications` (`notification_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_read_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- قيود الجداول `otp_device_verifications`
--
ALTER TABLE `otp_device_verifications`
  ADD CONSTRAINT `otp_device_verifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- قيود الجداول `outcome_assessment_method`
--
ALTER TABLE `outcome_assessment_method`
  ADD CONSTRAINT `outcome_assessment_method_clo_id_foreign` FOREIGN KEY (`clo_id`) REFERENCES `course_learning_outcomes` (`clo_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `outcome_assessment_method_method_id_foreign` FOREIGN KEY (`method_id`) REFERENCES `assessment_methods` (`id`) ON DELETE CASCADE;

--
-- قيود الجداول `outcome_teaching_strategy`
--
ALTER TABLE `outcome_teaching_strategy`
  ADD CONSTRAINT `outcome_teaching_strategy_clo_id_foreign` FOREIGN KEY (`clo_id`) REFERENCES `course_learning_outcomes` (`clo_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `outcome_teaching_strategy_strategy_id_foreign` FOREIGN KEY (`strategy_id`) REFERENCES `teaching_strategies` (`id`) ON DELETE CASCADE;

--
-- قيود الجداول `payout_adjustments`
--
ALTER TABLE `payout_adjustments`
  ADD CONSTRAINT `payout_adjustments_payout_id_foreign` FOREIGN KEY (`payout_id`) REFERENCES `lecturer_payouts` (`payout_id`) ON DELETE CASCADE;

--
-- قيود الجداول `periods`
--
ALTER TABLE `periods`
  ADD CONSTRAINT `periods_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`) ON DELETE CASCADE;

--
-- قيود الجداول `programs`
--
ALTER TABLE `programs`
  ADD CONSTRAINT `programs_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`) ON DELETE CASCADE;

--
-- قيود الجداول `program_learning_outcomes`
--
ALTER TABLE `program_learning_outcomes`
  ADD CONSTRAINT `program_learning_outcomes_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`) ON DELETE CASCADE;

--
-- قيود الجداول `qa_answers`
--
ALTER TABLE `qa_answers`
  ADD CONSTRAINT `qa_answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `qa_questions` (`question_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `qa_answers_submission_id_foreign` FOREIGN KEY (`submission_id`) REFERENCES `qa_submissions` (`submission_id`) ON DELETE CASCADE;

--
-- قيود الجداول `qa_campaigns`
--
ALTER TABLE `qa_campaigns`
  ADD CONSTRAINT `qa_campaigns_form_id_foreign` FOREIGN KEY (`form_id`) REFERENCES `qa_forms` (`form_id`) ON DELETE CASCADE;

--
-- قيود الجداول `qa_campaign_assignments`
--
ALTER TABLE `qa_campaign_assignments`
  ADD CONSTRAINT `qa_campaign_assignments_campaign_id_foreign` FOREIGN KEY (`campaign_id`) REFERENCES `qa_campaigns` (`campaign_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `qa_campaign_assignments_timetable_id_foreign` FOREIGN KEY (`timetable_id`) REFERENCES `timetable` (`timetable_id`) ON DELETE CASCADE;

--
-- قيود الجداول `qa_domains`
--
ALTER TABLE `qa_domains`
  ADD CONSTRAINT `qa_domains_form_id_foreign` FOREIGN KEY (`form_id`) REFERENCES `qa_forms` (`form_id`) ON DELETE CASCADE;

--
-- قيود الجداول `qa_forms`
--
ALTER TABLE `qa_forms`
  ADD CONSTRAINT `qa_forms_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`) ON DELETE CASCADE;

--
-- قيود الجداول `qa_questions`
--
ALTER TABLE `qa_questions`
  ADD CONSTRAINT `qa_questions_domain_id_foreign` FOREIGN KEY (`domain_id`) REFERENCES `qa_domains` (`domain_id`) ON DELETE CASCADE;

--
-- قيود الجداول `qa_submissions`
--
ALTER TABLE `qa_submissions`
  ADD CONSTRAINT `qa_submissions_campaign_id_foreign` FOREIGN KEY (`campaign_id`) REFERENCES `qa_campaigns` (`campaign_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `qa_submissions_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `qa_submissions_lecturer_id_foreign` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`lecturer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `qa_submissions_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE;

--
-- قيود الجداول `qr_codes`
--
ALTER TABLE `qr_codes`
  ADD CONSTRAINT `qr_codes_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `lecturers` (`lecturer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `qr_codes_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `lecture_sessions` (`session_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `qr_codes_timetable_id_foreign` FOREIGN KEY (`timetable_id`) REFERENCES `timetable` (`timetable_id`) ON DELETE CASCADE;

--
-- قيود الجداول `semesters`
--
ALTER TABLE `semesters`
  ADD CONSTRAINT `semesters_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`level_id`) ON DELETE CASCADE;

--
-- قيود الجداول `session_topics_covered`
--
ALTER TABLE `session_topics_covered`
  ADD CONSTRAINT `session_topics_covered_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `lecture_sessions` (`session_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `session_topics_covered_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `course_topics` (`topic_id`) ON DELETE CASCADE;

--
-- قيود الجداول `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_block_id_foreign` FOREIGN KEY (`block_id`) REFERENCES `blocks` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `students_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `students_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `students_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`level_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `students_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `students_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- قيود الجداول `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD CONSTRAINT `student_attendance_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_attendance_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_attendance_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`level_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_attendance_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_attendance_timetable_id_foreign` FOREIGN KEY (`timetable_id`) REFERENCES `timetable` (`timetable_id`) ON DELETE CASCADE;

--
-- قيود الجداول `student_excuse_submissions`
--
ALTER TABLE `student_excuse_submissions`
  ADD CONSTRAINT `student_excuse_submissions_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_excuse_submissions_lecturer_user_id_foreign` FOREIGN KEY (`lecturer_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_excuse_submissions_student_user_id_foreign` FOREIGN KEY (`student_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- قيود الجداول `student_grades`
--
ALTER TABLE `student_grades`
  ADD CONSTRAINT `student_grades_assessment_id_foreign` FOREIGN KEY (`assessment_id`) REFERENCES `course_assessments` (`assessment_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_grades_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE;

--
-- قيود الجداول `student_groups`
--
ALTER TABLE `student_groups`
  ADD CONSTRAINT `student_groups_block_id_foreign` FOREIGN KEY (`block_id`) REFERENCES `blocks` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `student_groups_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_groups_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_groups_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`level_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_groups_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_groups_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`) ON DELETE CASCADE;

--
-- قيود الجداول `student_group_members`
--
ALTER TABLE `student_group_members`
  ADD CONSTRAINT `student_group_members_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `student_groups` (`group_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_group_members_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE;

--
-- قيود الجداول `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `timetable_block_id_foreign` FOREIGN KEY (`block_id`) REFERENCES `blocks` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `timetable_classroom_id_foreign` FOREIGN KEY (`classroom_id`) REFERENCES `classrooms` (`classroom_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `timetable_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `timetable_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `timetable_day_id_foreign` FOREIGN KEY (`day_id`) REFERENCES `days` (`day_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `timetable_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `timetable_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `student_groups` (`group_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `timetable_lecturer_id_foreign` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`lecturer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `timetable_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`level_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `timetable_period_id_foreign` FOREIGN KEY (`period_id`) REFERENCES `periods` (`period_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `timetable_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `timetable_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`) ON DELETE SET NULL;

--
-- قيود الجداول `topic_questions`
--
ALTER TABLE `topic_questions`
  ADD CONSTRAINT `topic_questions_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `course_topics` (`topic_id`) ON DELETE CASCADE;

--
-- قيود الجداول `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `users_user_type_id_foreign` FOREIGN KEY (`user_type_id`) REFERENCES `user_types` (`user_type_id`) ON DELETE CASCADE;

--
-- قيود الجداول `user_activities`
--
ALTER TABLE `user_activities`
  ADD CONSTRAINT `user_activities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- قيود الجداول `user_devices`
--
ALTER TABLE `user_devices`
  ADD CONSTRAINT `user_devices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- قيود الجداول `user_type_permissions`
--
ALTER TABLE `user_type_permissions`
  ADD CONSTRAINT `user_type_permissions_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_type_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`permission_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_type_permissions_user_type_id_foreign` FOREIGN KEY (`user_type_id`) REFERENCES `user_types` (`user_type_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
