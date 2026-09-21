# 📚 UniHub API - Complete Documentation

> Laravel REST API for University Management System

**Last Updated:** 2026-08-18 07:06:32

---

## 📖 Table of Contents

1. [Quick Start](#quick-start)
2. [API Documentation](#api-documentation)
3. [Controllers Reference](#controllers-reference)
4. [Models & Database](#models--database)
5. [Authentication](#authentication)
6. [Common Errors](#common-errors)

---

## 🚀 Quick Start

### Installation

```bash
# Clone repository
git clone [repository-url]
cd unihub-API

# Install dependencies
composer install

# Setup environment
cp .env.example .env
php artisan key:generate

# Configure database in .env
# DB_DATABASE=unihub20
# DB_USERNAME=root
# DB_PASSWORD=

# Run migrations
php artisan migrate --seed

# Start development server
php artisan serve
```

### Base URL

```
http://192.168.8.105/unihub-api/api/v1
```

---

## 📡 API Documentation

**Complete API Reference:** [docs/API_ROUTES_DETAILED.md](docs/API_ROUTES_DETAILED.md)

This file contains:
- ✅ All API endpoints
- ✅ HTTP methods (GET, POST, PUT, DELETE)
- ✅ Request body examples (JSON)
- ✅ Success response examples
- ✅ Error response examples
- ✅ Required middleware
- ✅ Authentication requirements

### Quick Example: Login

```bash
POST /api/v1/auth/login
Content-Type: application/json

{
    "email": "user@example.com",
    "password": "password123"
}
```

---

## 🎮 Controllers Reference

**Complete Controllers Guide:** [docs/CONTROLLERS_DETAILED.md](docs/CONTROLLERS_DETAILED.md)

This file contains:
- ✅ All controller classes
- ✅ Every public method with description
- ✅ Method parameters and return types
- ✅ Which routes use each method
- ✅ Purpose of each function

---

## 📦 Models & Database

**Complete Models Reference:** [docs/MODELS_DETAILED.md](docs/MODELS_DETAILED.md)

This file contains:
- ✅ All Eloquent models
- ✅ Database table mappings
- ✅ Fillable and hidden fields
- ✅ Type casts
- ✅ Relationships (hasMany, belongsTo, etc.)
- ✅ Query scopes
- ✅ Usage examples

---

## 🔐 Authentication

This API uses **Laravel Sanctum** for authentication.

### Getting Access Token

```bash
POST /api/v1/auth/login
```

### Using Token

```bash
Authorization: Bearer YOUR_TOKEN_HERE
```

---

## ⚠️ Common Errors

| Status Code | Meaning |
|-------------|----------|
| 200 | Success |
| 401 | Unauthorized (invalid/missing token) |
| 403 | Forbidden (no permission) |
| 404 | Not Found |
| 422 | Validation Error |
| 500 | Server Error |

---

## 📊 Project Statistics

- **Total Routes:** 316
- **API Routes:** 297
- **Controllers:** 59
- **Models:** 62

---

*📝 Documentation auto-generated with full details*




```
unihub-API
├─ .dockerignore
├─ .env
├─ .env.example
├─ .phpunit.result.cache
├─ app
│  ├─ Console
│  │  └─ Commands
│  │     └─ AutoCloseSessions.php
│  ├─ Http
│  │  ├─ Controllers
│  │  │  ├─ Admin
│  │  │  │  └─ RoutesController.php
│  │  │  ├─ Api
│  │  │  │  └─ V1
│  │  │  │     ├─ AcademicTitlesController.php
│  │  │  │     ├─ Admin
│  │  │  │     │  ├─ IpRestrictionController.php
│  │  │  │     │  ├─ SettingsController.php
│  │  │  │     │  └─ SystemController.php
│  │  │  │     ├─ AssessmentMethodController.php
│  │  │  │     ├─ AuthController.php
│  │  │  │     ├─ AuthPasswordController.php
│  │  │  │     ├─ BlockController.php
│  │  │  │     ├─ BuildingsController.php
│  │  │  │     ├─ ClassroomsController.php
│  │  │  │     ├─ CollegesController.php
│  │  │  │     ├─ CourseAssessmentController.php
│  │  │  │     ├─ CourseAssignmentController.php
│  │  │  │     ├─ CourseDescriptionController.php
│  │  │  │     ├─ CourseLearningOutcomeController.php
│  │  │  │     ├─ CourseOutcomeMappingController.php
│  │  │  │     ├─ CoursePolicyController.php
│  │  │  │     ├─ CourseReferenceController.php
│  │  │  │     ├─ CoursesController.php
│  │  │  │     ├─ CourseTopicController.php
│  │  │  │     ├─ DashboardController.php
│  │  │  │     ├─ DaysController.php
│  │  │  │     ├─ DepartmentsController.php
│  │  │  │     ├─ FinancialController.php
│  │  │  │     ├─ LectureAttachmentsController.php
│  │  │  │     ├─ Lecturer
│  │  │  │     ├─ LecturerAttendanceController.php
│  │  │  │     ├─ LecturerGradebookController.php
│  │  │  │     ├─ LecturersController.php
│  │  │  │     ├─ LectureSessionController.php
│  │  │  │     ├─ LevelsController.php
│  │  │  │     ├─ LookupsController.php
│  │  │  │     ├─ MakeupLecturesController.php
│  │  │  │     ├─ NotificationsController.php
│  │  │  │     ├─ PeriodsController.php
│  │  │  │     ├─ ProgramLearningOutcomeController.php
│  │  │  │     ├─ ProgramOptionAuditController.php
│  │  │  │     ├─ ProgramsController.php
│  │  │  │     ├─ QA
│  │  │  │     │  ├─ Admin
│  │  │  │     │  │  ├─ QaCampaignsController.php
│  │  │  │     │  │  └─ QaManagerController.php
│  │  │  │     │  ├─ Reports
│  │  │  │     │  │  ├─ CourseExecutionReportController.php
│  │  │  │     │  │  └─ QaAnalysisController.php
│  │  │  │     │  └─ Student
│  │  │  │     │     └─ QaEvaluationController.php
│  │  │  │     ├─ QrCodesController.php
│  │  │  │     ├─ QualityAssuranceController.php
│  │  │  │     ├─ ReportsController.php
│  │  │  │     ├─ SemestersController.php
│  │  │  │     ├─ StudentAttendanceController.php
│  │  │  │     ├─ StudentExcusesController.php
│  │  │  │     ├─ StudentGroupsController.php
│  │  │  │     ├─ StudentsController.php
│  │  │  │     ├─ SyncController.php
│  │  │  │     ├─ TeachingStrategyController.php
│  │  │  │     ├─ TimetableController.php
│  │  │  │     ├─ TopicQuestionController.php
│  │  │  │     ├─ UniversityReportController.php
│  │  │  │     ├─ UserDevicesController.php
│  │  │  │     ├─ UsersController.php
│  │  │  │     ├─ UserTypeController.php
│  │  │  │     └─ UserTypePermissionController.php
│  │  │  └─ Controller.php
│  │  ├─ Middleware
│  │  │  ├─ CheckIpRestrictions.php
│  │  │  ├─ CheckUserType.php
│  │  │  ├─ HasPermission.php
│  │  │  └─ LogUserActivity.php
│  │  ├─ Requests
│  │  │  ├─ Auth
│  │  │  │  ├─ ForgotPasswordRequest.php
│  │  │  │  ├─ LoginRequest.php
│  │  │  │  └─ ResetPasswordRequest.php
│  │  │  └─ V1
│  │  │     ├─ AcademicTitle
│  │  │     │  ├─ StoreAcademicTitleRequest.php
│  │  │     │  └─ UpdateAcademicTitleRequest.php
│  │  │     ├─ AppVersion
│  │  │     │  ├─ StoreAppVersionRequest.php
│  │  │     │  └─ UpdateAppVersionRequest.php
│  │  │     ├─ Attendance
│  │  │     │  └─ ScanAttendanceRequest.php
│  │  │     ├─ Building
│  │  │     │  ├─ StoreBuildingRequest.php
│  │  │     │  └─ UpdateBuildingRequest.php
│  │  │     ├─ Classroom
│  │  │     │  ├─ StoreClassroomRequest.php
│  │  │     │  └─ UpdateClassroomRequest.php
│  │  │     ├─ College
│  │  │     │  ├─ StoreCollegeRequest.php
│  │  │     │  └─ UpdateCollegeRequest.php
│  │  │     ├─ Course
│  │  │     │  ├─ StoreCourseRequest.php
│  │  │     │  └─ UpdateCourseRequest.php
│  │  │     ├─ Day
│  │  │     │  ├─ StoreDayRequest.php
│  │  │     │  └─ UpdateDayRequest.php
│  │  │     ├─ Department
│  │  │     │  ├─ StoreDepartmentRequest.php
│  │  │     │  └─ UpdateDepartmentRequest.php
│  │  │     ├─ Device
│  │  │     │  └─ VerifyOtpRequest.php
│  │  │     ├─ Excuse
│  │  │     │  └─ StoreExcuseRequest.php
│  │  │     ├─ LectureSession
│  │  │     │  ├─ StoreLectureSessionRequest.php
│  │  │     │  └─ UpdateLectureSessionRequest.php
│  │  │     ├─ Level
│  │  │     │  ├─ StoreLevelRequest.php
│  │  │     │  └─ UpdateLevelRequest.php
│  │  │     ├─ MakeupLecture
│  │  │     │  ├─ ReviewMakeupLectureRequest.php
│  │  │     │  ├─ ScheduleMakeupLectureRequest.php
│  │  │     │  └─ StoreMakeupLectureRequest.php
│  │  │     ├─ Notification
│  │  │     │  └─ StoreNotificationRequest.php
│  │  │     ├─ Period
│  │  │     │  ├─ StorePeriodRequest.php
│  │  │     │  └─ UpdatePeriodRequest.php
│  │  │     ├─ Program
│  │  │     │  ├─ StoreProgramRequest.php
│  │  │     │  └─ UpdateProgramRequest.php
│  │  │     ├─ QrCode
│  │  │     │  └─ StoreQrCodeRequest.php
│  │  │     ├─ QRRefreshOption
│  │  │     │  ├─ StoreQRRefreshOptionRequest.php
│  │  │     │  └─ UpdateQRRefreshOptionRequest.php
│  │  │     ├─ Semester
│  │  │     │  ├─ StoreSemesterRequest.php
│  │  │     │  └─ UpdateSemesterRequest.php
│  │  │     ├─ StoreUserRequest.php
│  │  │     ├─ StudentGroup
│  │  │     │  ├─ StoreStudentGroupRequest.php
│  │  │     │  └─ UpdateStudentGroupRequest.php
│  │  │     ├─ Timetable
│  │  │     │  ├─ StoreTimetableRequest.php
│  │  │     │  └─ UpdateTimetableRequest.php
│  │  │     ├─ UpdateUserRequest.php
│  │  │     └─ UserType
│  │  │        ├─ StoreUserTypeRequest.php
│  │  │        └─ UpdateUserTypeRequest.php
│  │  └─ Resources
│  │     └─ V1
│  │        └─ UserResource.php
│  ├─ Jobs
│  │  └─ TimetableImportJob.php
│  ├─ Models
│  │  ├─ AcademicTitle.php
│  │  ├─ AppVersion.php
│  │  ├─ AssessmentMethod.php
│  │  ├─ Block.php
│  │  ├─ BlockRelation.php
│  │  ├─ Building.php
│  │  ├─ Classroom.php
│  │  ├─ College.php
│  │  ├─ Course.php
│  │  ├─ CourseAssessment.php
│  │  ├─ CourseAssignment.php
│  │  ├─ CourseDescription.php
│  │  ├─ CourseLearningOutcome.php
│  │  ├─ CoursePolicy.php
│  │  ├─ CoursePrerequisite.php
│  │  ├─ CourseReference.php
│  │  ├─ CourseTopic.php
│  │  ├─ Day.php
│  │  ├─ Department.php
│  │  ├─ DepartmentProgram.php
│  │  ├─ FinancialCycle.php
│  │  ├─ IpRestriction.php
│  │  ├─ LearningOutcome.php
│  │  ├─ LectureAttachment.php
│  │  ├─ Lecturer.php
│  │  ├─ LecturerAttendance.php
│  │  ├─ LecturerGroupNotification.php
│  │  ├─ LecturerPayout.php
│  │  ├─ LectureSession.php
│  │  ├─ Level.php
│  │  ├─ MakeupLecturesRequest.php
│  │  ├─ OtpDeviceVerification.php
│  │  ├─ PayoutAdjustment.php
│  │  ├─ Period.php
│  │  ├─ Permission.php
│  │  ├─ Program.php
│  │  ├─ ProgramLearningOutcome.php
│  │  ├─ ProgramOptionAudit.php
│  │  ├─ QA
│  │  │  ├─ QaAnswer.php
│  │  │  ├─ QaCampaign.php
│  │  │  ├─ QaCampaignAssignment.php
│  │  │  ├─ QaDomain.php
│  │  │  ├─ QaForm.php
│  │  │  ├─ QaQuestion.php
│  │  │  └─ QaSubmission.php
│  │  ├─ QaQuestion.php
│  │  ├─ QaQuestionOption.php
│  │  ├─ QrCode.php
│  │  ├─ Semester.php
│  │  ├─ Student.php
│  │  ├─ StudentAttendance.php
│  │  ├─ StudentExcuseSubmission.php
│  │  ├─ StudentGrade.php
│  │  ├─ StudentGroup.php
│  │  ├─ StudentGroupMember.php
│  │  ├─ TeachingStrategy.php
│  │  ├─ Timetable.php
│  │  ├─ TopicQuestion.php
│  │  ├─ User.php
│  │  ├─ UserActivity.php
│  │  ├─ UserDevice.php
│  │  ├─ UserType.php
│  │  └─ UserTypePermission.php
│  ├─ Notifications
│  │  ├─ ResetPasswordNotification.php
│  │  └─ SendOtpNotification.php
│  ├─ Policies
│  │  └─ UserDevicePolicy.php
│  ├─ Providers
│  │  └─ AppServiceProvider.php
│  ├─ Rules
│  │  └─ UniqueGroupInPath.php
│  └─ Services
│     ├─ ConflictDetector.php
│     └─ ScheduleResolver.php
├─ artisan
├─ bootstrap
│  ├─ app.php
│  ├─ cache
│  │  ├─ config.php
│  │  ├─ packages.php
│  │  ├─ routes-v7.php
│  │  └─ services.php
│  └─ providers.php
├─ composer.json
├─ composer.lock
├─ config
│  ├─ app.php
│  ├─ auth.php
│  ├─ cache.php
│  ├─ cors.php
│  ├─ database.php
│  ├─ filesystems.php
│  ├─ logging.php
│  ├─ mail.php
│  ├─ passport.php
│  ├─ queue.php
│  ├─ services.php
│  └─ session.php
├─ database
│  ├─ database.sqlite
│  ├─ factories
│  │  └─ UserFactory.php
│  ├─ migrations
│  │  ├─ 2025_10_21_192024_create_oauth_auth_codes_table.php
│  │  ├─ 2025_10_21_192025_create_oauth_access_tokens_table.php
│  │  ├─ 2025_10_21_192026_create_oauth_refresh_tokens_table.php
│  │  ├─ 2025_10_21_192027_create_oauth_clients_table.php
│  │  ├─ 2025_10_21_192028_create_oauth_device_codes_table.php
│  │  ├─ 2025_10_21_220233_create_password_reset_tokens_table.php
│  │  ├─ 2025_10_22_144503_create_cache_table.php
│  │  ├─ 2025_10_23_095837_create_settings_table.php
│  │  ├─ 2025_10_26_182508_create_university_schema.php
│  │  ├─ 2025_12_19_155452_drop_strict_unique_indexes_from_timetable.php
│  │  ├─ 2025_12_29_165656_add_details_to_lecture_sessions_table.php
│  │  ├─ 2026_01_05_172318_remove_attendance_columns_from_lecture_sessions_table.php
│  │  ├─ 2026_01_07_154740_create_course_assessment_tables.php
│  │  ├─ 2026_01_08_212450_create_ip_restrictions_table.php
│  │  ├─ 2026_01_18_160543_update_makeup_lectures_requests_table.php
│  │  ├─ 2026_01_27_150833_create_notification_reads_and_modify_excuse_image.php
│  │  ├─ 2026_02_01_201759_create_quality_assurance_tables.php
│  │  ├─ 2026_02_02_190151_update_qa_campaigns_structure.php
│  │  ├─ 2026_02_02_213019_add_timetable_id_to_qa_campaigns.php
│  │  ├─ 2026_02_11_214751_restructure_qa_campaigns.php
│  │  ├─ 2026_02_23_021027_enhance_lecture_management_schema.php
│  │  ├─ 2026_02_25_005743_add_time_tracking_columns.php
│  │  ├─ 2026_02_26_024031_add_device_identifier_and_path.php
│  │  ├─ 2026_04_08_211118_add_system_columns_to_programs_table.php
│  │  ├─ 2026_04_09_233234_create_blocks_table.php
│  │  ├─ 2026_04_09_233239_create_block_relations_table.php
│  │  ├─ 2026_04_15_222411_enhance_courses_table_for_all_systems.php
│  │  ├─ 2026_04_18_213310_remove_is_elective_from_courses.php
│  │  ├─ 2026_04_21_215943_create_course_specification_tables.php
│  │  ├─ 2026_04_26_184525_drop_unused_columns_from_course_descriptions.php
│  │  ├─ 2026_08_19_000001_add_program_scope_and_audit_to_course_options.php
│  │  ├─ 2026_08_21_000000_align_course_assessments_for_course_specifications.php
│  │  ├─ 2026_08_21_000001_allow_course_level_question_bank.php
│  │  ├─ 2026_08_21_000001_make_course_assessment_context_optional.php
│  │  ├─ 2026_08_21_000002_backfill_question_course_part.php
│  │  ├─ 2026_08_22_000000_enhance_buildings_and_classrooms_for_field_survey.php
│  │  ├─ 2026_08_23_000001_update_student_path_for_program_variants.php
│  │  ├─ 2026_08_23_000010_add_max_students_to_student_groups_table.php
│  │  ├─ 2026_08_23_000020_make_student_level_nullable_for_credit_programs.php
│  │  ├─ 2026_08_23_100000_add_path_columns_to_timetable.php
│  │  ├─ 2026_08_23_120000_make_timetable_path_columns_nullable.php
│  │  └─ 2026_08_24_000001_create_session_topics_covered_table.php
│  ├─ seeders
│  │  ├─ DatabaseSeeder.php
│  │  ├─ DaysSeeder.php
│  │  ├─ InitialCollegeSeeder.php
│  │  ├─ PermissionsSeeder.php
│  │  ├─ SettingsSeeder.php
│  │  └─ UserTypesSeeder.php
│  └─ sql
│     └─ unihub20.sql
├─ Dockerfile
├─ docs
│  ├─ API_DOCUMENTATION.md
│  ├─ API_DOCUMENTATION_FIXED.md
│  ├─ generate_docs.py
│  ├─ parse_routes.py
│  └─ routes_parsed.json
├─ INSTALLATION_GUIDE.md
├─ package-lock.json
├─ package.json
├─ public
│  ├─ .htaccess
│  ├─ favicon.ico
│  ├─ index.php
│  ├─ logo.png
│  └─ storage
│     ├─ colleges
│     └─ lecture_files
├─ README.md
├─ render-start.sh
├─ resources
│  ├─ css
│  │  └─ app.css
│  ├─ js
│  │  ├─ app.js
│  │  └─ bootstrap.js
│  └─ views
│     ├─ admin
│     │  └─ routes
│     │     └─ index.blade.php
│     p
├─ routes
│  ├─ api.php
│  ├─ console.php
│  └─ web.php
├─ storage
│  ├─ app
│  │  ├─ private
│  │  │  └─ imports
│  │  └─ public
│  │     ├─ colleges
│  │     └─ lecture_files
│  ├─ framework
│  │  ├─ cache
│  │  │  └─ data
│  │  ├─ sessions
│  │  │  ├─ 1FbJqoEV5kLLBlt8q35gECRBzNtXhUXXdbiPxtpy
│  │  │  ├─ 1xQdeHuOEvC4sclGsVpVzvbs9c5uOuftjqguMyvh
│  │  │  ├─ 6Rhi1NjYLZRVlWXRxv1JY6ZVemRHXGz7pt4sPM2E
│  │  │  ├─ 7ZaAWbfmXSad0H4XtNHLS7tY3RPTlsxyQPnmpnqb
│  │  │  ├─ 8AuOhGBrRV13OtV2SkZKFVskRx4LsyPpUevBpQmd
│  │  │  ├─ AfpizfKrAwSj8yeIp70B9dvzf8ts8IeeVAAYS1Qy
│  │  │  ├─ B0BzEcZNI5sBZKfkzdT8LIUJTsdwtKg5ceOEgZzo
│  │  │  ├─ beizv5mUw6rSC6EQTDJ7gAPYA2vuCPuZ35IZebeW
│  │  │  ├─ DXFgeYUccI9x9ey3AjIauC3B3Eyo1pgcqafvTtlA
│  │  │  ├─ Eeks0h55115YVoNH61URBK8wqkAzUOfqCC1TBWEg
│  │  │  ├─ Gnn3AjWvwVSl1uf2Y4av5GSmVcxotQLfiQFquVM6
│  │  │  ├─ INKxQnYiAMA1dDOmyg8ufvgCaptl4rOWKQLvnKC9
│  │  │  ├─ ja8YCU9qiNhx06HZziU7FbT2HdTtCtMmrEt84HjY
│  │  │  ├─ jdGmoRt2IkgV757vlOZADUAOC19Y4jYudJXwCHAH
│  │  │  ├─ Jn9yx8v7JudUsxEE3h2w3ZcqRszSym5S8buLrmgF
│  │  │  ├─ kuzv5q0eBHNKIS4VOHrlMuq9Tlwe9bMZPgsDAbVI
│  │  │  ├─ lYXxoTvatS9Wdx69w2eKGUu0yRWi0WZfApYGRvVQ
│  │  │  ├─ mBj3FnBks2qXuSEyd37ZFkbGKQgbrYvFkY5mHW4n
│  │  │  ├─ mQYGIt1zxxQQ1vvcuqgMEKFu8NJCX5xq98Y8GxJi
│  │  │  ├─ NIuhFTshjUDTUnChATNKzy8ikibW1SMiXEHf1v5b
│  │  │  ├─ oyoyIvV0C5y1Ay0rI3GcfLKgAqZwph7NK6c2gdVs
│  │  │  ├─ Q1ASHPF1uaAhBtnM5CFRkV7SArXENXBAus95BnMC
│  │  │  ├─ QygfiLJrN8dHXsQduwvlzlHJjkAvzlT95nXGr7Pl
│  │  │  ├─ smmx4BmhNGXWmECrDAN5Algajh4cLIGQjGPVjQDJ
│  │  │  ├─ UsbQn9VRrqWvYo0Zpb7sM9RTgVqxY49oxpYwUiVn
│  │  │  ├─ W9RSeMoOm8noR40aCsfIVzeEKQX7mo01G58jP3A5
│  │  │  ├─ X4yhGnKGD8AoTW5EAe1qRtZXJKVXujGjN83cbTEH
│  │  │  ├─ XvlVtqoDZ3H0XrvxeaMHElKl7wS0x0FsROSujftO
│  │  │  └─ ZSYbtkzGYwghjjdFlnduWoJyNq15nI8JXbosz0CZ
│  │  ├─ testing
│  │  └─ views
│  │     ├─ 10c6b6e3f14f393ad5e26cd5440ebf37.php
│  │     ├─ 119b1f01b04343b4965faeb8b39e5e79.php
│  │     ├─ 1242ae89d4cf4a5746fe61b4c2e5ce1b.php
│  │     ├─ 1575c544dc7358ff84995dd86f2f8a6b.php
│  │     ├─ 1933e41b0b774070e042cd34dd025cea.php
│  │     ├─ 19ceafb63ba38f5abcf387224bb5d7c9.php
│  │     ├─ 1aec0f8241fdc7086c7198b2e77301d7.php
│  │     ├─ 1e41331a8189f381e7009b0e0105e010.php
│  │     ├─ 1fb948e864ab0b0d8b4c276a89190399.php
│  │     ├─ 2996e30a699670a4aabe5784cfbd151a.php
│  │     ├─ 2d202fb9e7e14705c55fe7bc8b2093d0.php
│  │     ├─ 3638dfc03ab870f31eec1d49e23f0e9c.php
│  │     ├─ 3ca55e4a49ade9f278d774e3406604d6.php
│  │     ├─ 3db2de9d984248a27f241be366b74ab2.php
│  │     ├─ 411acf664b311a8a582575713f5cc25d.php
│  │     ├─ 46654273c74e85125a2213d692f3846c.php
│  │     ├─ 4821db30a4f4891f6021b6a13f291357.php
│  │     ├─ 499040a8426be034538cc58fc3caacbe.php
│  │     ├─ 4a910e932aa13003c89fb134ddb27bb5.php
│  │     ├─ 542b206c6119c4a325b1e83d54f37a46.php
│  │     ├─ 5477eeddbe14ad7e9a7925a2e2ffaead.php
│  │     ├─ 59c84a759b1377e392036c449fc9aa48.php
│  │     ├─ 5aef0c6da982b2729923a78179fc46cd.php
│  │     ├─ 6099d91c5495bda34b888af7fd730036.php
│  │     ├─ 60bd7b7fed819f0ec184b209d518368a.php
│  │     ├─ 637bab6463aad6ae192c7c24e2cc957d.php
│  │     ├─ 63ab3ef3259b148588ee07e467a7d43d.php
│  │     ├─ 63b7930bf45c2357caf4da313b1911b2.php
│  │     ├─ 6a3e1339ce56a7976c3b6bed18dda41f.php
│  │     ├─ 6b9fe322d129561897123ce354184aec.php
│  │     ├─ 6de07d26d3be09ee4f2b600b37cabec5.php
│  │     ├─ 6f2e6a18da650398a7df5d85bb163d8a.php
│  │     ├─ 70fd1788db11e9186c4c20baa48a5849.php
│  │     ├─ 74fee4eb47194885ae1889cd12b11581.php
│  │     ├─ 776589c4eaa49b939e11a93513a199f8.php
│  │     ├─ 788b7d660a1b91f2c346eaa81fbdfba3.php
│  │     ├─ 81c8a9970a0909b9418d6a5751cf9d05.php
│  │     ├─ 820815eba683341cd4eb68df68fc5cc0.php
│  │     ├─ 8238716a9d633c8ae35b9f56ad4fd069.php
│  │     ├─ 83adc364e9be9d11c67f1ccc8520b60b.php
│  │     ├─ 8d3f10b7177f228e81686da5e4d68283.php
│  │     ├─ 917fea6fb5bf1b80cce3b57ffa6bab33.php
│  │     ├─ 926f89cebfecfa94578858514b216a8e.php
│  │     ├─ 94f74de1198815ca94cdcec2a5680eec.php
│  │     ├─ 96159d3def55b0623ee4a0ee16d08337.php
│  │     ├─ 993059b935584d33b060e01b927c8210.php
│  │     ├─ 9e854f54609446bf8ee02796cb9e7552.php
│  │     ├─ a13980d9e1cc70d99c2333af60567166.php
│  │     ├─ a5ca59a1a36d2d5ceced6b3b36374cb9.php
│  │     ├─ b7e0627183f331818fea5ccfc92191d1.php
│  │     ├─ bb1ba840286035233e6cfe0c83ebdae1.php
│  │     ├─ c68385e93be72f875f2fbfd692acb66b.php
│  │     ├─ c90be4a9fe8d53ba2124fee546498574.php
│  │     ├─ cab76132ee25e63055b13d7083a9abfd.php
│  │     ├─ cccc1ac38c0baec9b3cee8f4dec81947.php
│  │     ├─ d7d7f011a557e5744211ddfbc2ddda58.php
│  │     ├─ d855e5694fad76d06660ce0779e33fb0.php
│  │     ├─ d8abaceefa96c3d6c4fff308c29bd115.php
│  │     ├─ d9e8c35e6e9f251dcf3378268c4c24ce.php
│  │     ├─ db84ab2a9b2210db98371dcbc8c83749.php
│  │     ├─ ecd5b581679cd85e74bdf2bcb74511b7.php
│  │     ├─ f17607d6c4d9555110fc502495931deb.php
│  │     ├─ fa1879c3cdfba0443b3a466e72824c81.php
│  │     ├─ fa8e56240f624b7e48a9bd4ed6770a7a.php
│  │     └─ fca4ad83ddaa312d6847bdae65bbdca4.php
│  ├─ logs
│  │  └─ laravel.log
│  ├─ oauth-private.key
│  └─ oauth-public.key
├─ vendor
│  ├─ autoload.php
│  ├─ bin
│  │  ├─ carbon
│  │  ├─ carbon.bat
│  │  ├─ generate-defuse-key
│  │  ├─ generate-defuse-key.bat
│  │  ├─ patch-type-declarations
│  │  ├─ patch-type-declarations.bat
│  │  ├─ php-parse
│  │  ├─ php-parse.bat
│  │  ├─ psysh
│  │  ├─ psysh.bat
│  │  ├─ var-dump-server
│  │  └─ var-dump-server.bat
│  ├─ brick
│  │  └─ math
│  │     ├─ CHANGELOG.md
│  │     ├─ composer.json
│  │     ├─ LICENSE
│  │     ├─ phpstan.neon
│  │     └─ src
│  │        ├─ BigDecimal.php
│  │        ├─ BigInteger.php
│  │        ├─ BigNumber.php
│  │        ├─ BigRational.php
│  │        ├─ Exception
│  │        │  ├─ DivisionByZeroException.php
│  │        │  ├─ IntegerOverflowException.php
│  │        │  ├─ MathException.php
│  │        │  ├─ NegativeNumberException.php
│  │        │  ├─ NumberFormatException.php
│  │        │  └─ RoundingNecessaryException.php
│  │        ├─ Internal
│  │        │  ├─ Calculator
│  │        │  │  ├─ BcMathCalculator.php
│  │        │  │  ├─ GmpCalculator.php
│  │        │  │  └─ NativeCalculator.php
│  │        │  ├─ Calculator.php
│  │        │  └─ CalculatorRegistry.php
│  │        └─ RoundingMode.php
│  ├─ carbonphp
│  │  └─ carbon-doctrine-types
│  │     ├─ composer.json
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     └─ src
│  │        └─ Carbon
│  │           └─ Doctrine
│  │              ├─ CarbonDoctrineType.php
│  │              ├─ CarbonImmutableType.php
│  │              ├─ CarbonType.php
│  │              ├─ CarbonTypeConverter.php
│  │              ├─ DateTimeDefaultPrecision.php
│  │              ├─ DateTimeImmutableType.php
│  │              └─ DateTimeType.php
│  ├─ composer
│  │  ├─ autoload_classmap.php
│  │  ├─ autoload_files.php
│  │  ├─ autoload_namespaces.php
│  │  ├─ autoload_psr4.php
│  │  ├─ autoload_real.php
│  │  ├─ autoload_static.php
│  │  ├─ ClassLoader.php
│  │  ├─ installed.json
│  │  ├─ installed.php
│  │  ├─ InstalledVersions.php
│  │  ├─ LICENSE
│  │  ├─ pcre
│  │  │  ├─ composer.json
│  │  │  ├─ extension.neon
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     ├─ MatchAllResult.php
│  │  │     ├─ MatchAllStrictGroupsResult.php
│  │  │     ├─ MatchAllWithOffsetsResult.php
│  │  │     ├─ MatchResult.php
│  │  │     ├─ MatchStrictGroupsResult.php
│  │  │     ├─ MatchWithOffsetsResult.php
│  │  │     ├─ PcreException.php
│  │  │     ├─ PHPStan
│  │  │     │  ├─ InvalidRegexPatternRule.php
│  │  │     │  ├─ PregMatchFlags.php
│  │  │     │  ├─ PregMatchParameterOutTypeExtension.php
│  │  │     │  ├─ PregMatchTypeSpecifyingExtension.php
│  │  │     │  ├─ PregReplaceCallbackClosureTypeExtension.php
│  │  │     │  └─ UnsafeStrictGroupsCallRule.php
│  │  │     ├─ Preg.php
│  │  │     ├─ Regex.php
│  │  │     ├─ ReplaceResult.php
│  │  │     └─ UnexpectedNullMatchException.php
│  │  └─ platform_check.php
│  ├─ defuse
│  │  └─ php-encryption
│  │     ├─ bin
│  │     │  └─ generate-defuse-key
│  │     ├─ composer.json
│  │     ├─ dist
│  │     │  ├─ box.json
│  │     │  ├─ Makefile
│  │     │  ├─ phar-testing-autoload.php
│  │     │  ├─ signingkey-new.asc
│  │     │  ├─ signingkey-new.asc.sig
│  │     │  └─ signingkey.asc
│  │     ├─ docs
│  │     │  ├─ classes
│  │     │  │  ├─ Crypto.md
│  │     │  │  ├─ File.md
│  │     │  │  ├─ Key.md
│  │     │  │  └─ KeyProtectedByPassword.md
│  │     │  ├─ CryptoDetails.md
│  │     │  ├─ FAQ.md
│  │     │  ├─ InstallingAndVerifying.md
│  │     │  ├─ InternalDeveloperDocs.md
│  │     │  ├─ Tutorial.md
│  │     │  └─ UpgradingFromV1.2.md
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     └─ src
│  │        ├─ Core.php
│  │        ├─ Crypto.php
│  │        ├─ DerivedKeys.php
│  │        ├─ Encoding.php
│  │        ├─ Exception
│  │        │  ├─ BadFormatException.php
│  │        │  ├─ CryptoException.php
│  │        │  ├─ EnvironmentIsBrokenException.php
│  │        │  ├─ IOException.php
│  │        │  └─ WrongKeyOrModifiedCiphertextException.php
│  │        ├─ File.php
│  │        ├─ Key.php
│  │        ├─ KeyOrPassword.php
│  │        ├─ KeyProtectedByPassword.php
│  │        └─ RuntimeTests.php
│  ├─ dflydev
│  │  └─ dot-access-data
│  │     ├─ CHANGELOG.md
│  │     ├─ composer.json
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     └─ src
│  │        ├─ Data.php
│  │        ├─ DataInterface.php
│  │        ├─ Exception
│  │        │  ├─ DataException.php
│  │        │  ├─ InvalidPathException.php
│  │        │  └─ MissingPathException.php
│  │        └─ Util.php
│  ├─ doctrine
│  │  ├─ dbal
│  │  │  ├─ composer.json
│  │  │  ├─ CONTRIBUTING.md
│  │  │  ├─ LICENSE
│  │  │  ├─ phpstan-baseline.neon
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     ├─ ArrayParameters
│  │  │     │  ├─ Exception
│  │  │     │  │  ├─ MissingNamedParameter.php
│  │  │     │  │  └─ MissingPositionalParameter.php
│  │  │     │  └─ Exception.php
│  │  │     ├─ ArrayParameterType.php
│  │  │     ├─ Cache
│  │  │     │  ├─ ArrayResult.php
│  │  │     │  ├─ CacheException.php
│  │  │     │  ├─ Exception
│  │  │     │  │  ├─ NoCacheKey.php
│  │  │     │  │  └─ NoResultDriverConfigured.php
│  │  │     │  └─ QueryCacheProfile.php
│  │  │     ├─ ColumnCase.php
│  │  │     ├─ Configuration.php
│  │  │     ├─ Connection
│  │  │     │  └─ StaticServerVersionProvider.php
│  │  │     ├─ Connection.php
│  │  │     ├─ ConnectionException.php
│  │  │     ├─ Connections
│  │  │     │  └─ PrimaryReadReplicaConnection.php
│  │  │     ├─ Driver
│  │  │     │  ├─ AbstractDB2Driver.php
│  │  │     │  ├─ AbstractException.php
│  │  │     │  ├─ AbstractMySQLDriver.php
│  │  │     │  ├─ AbstractOracleDriver
│  │  │     │  │  └─ EasyConnectString.php
│  │  │     │  ├─ AbstractOracleDriver.php
│  │  │     │  ├─ AbstractPostgreSQLDriver.php
│  │  │     │  ├─ AbstractSQLiteDriver
│  │  │     │  │  └─ Middleware
│  │  │     │  │     └─ EnableForeignKeys.php
│  │  │     │  ├─ AbstractSQLiteDriver.php
│  │  │     │  ├─ AbstractSQLServerDriver
│  │  │     │  │  └─ Exception
│  │  │     │  │     └─ PortWithoutHost.php
│  │  │     │  ├─ AbstractSQLServerDriver.php
│  │  │     │  ├─ API
│  │  │     │  │  ├─ ExceptionConverter.php
│  │  │     │  │  ├─ IBMDB2
│  │  │     │  │  │  └─ ExceptionConverter.php
│  │  │     │  │  ├─ MySQL
│  │  │     │  │  │  └─ ExceptionConverter.php
│  │  │     │  │  ├─ OCI
│  │  │     │  │  │  └─ ExceptionConverter.php
│  │  │     │  │  ├─ PostgreSQL
│  │  │     │  │  │  └─ ExceptionConverter.php
│  │  │     │  │  ├─ SQLite
│  │  │     │  │  │  └─ ExceptionConverter.php
│  │  │     │  │  └─ SQLSrv
│  │  │     │  │     └─ ExceptionConverter.php
│  │  │     │  ├─ Connection.php
│  │  │     │  ├─ Exception
│  │  │     │  │  ├─ IdentityColumnsNotSupported.php
│  │  │     │  │  └─ NoIdentityValue.php
│  │  │     │  ├─ Exception.php
│  │  │     │  ├─ FetchUtils.php
│  │  │     │  ├─ IBMDB2
│  │  │     │  │  ├─ Connection.php
│  │  │     │  │  ├─ DataSourceName.php
│  │  │     │  │  ├─ Driver.php
│  │  │     │  │  ├─ Exception
│  │  │     │  │  │  ├─ CannotCopyStreamToStream.php
│  │  │     │  │  │  ├─ CannotCreateTemporaryFile.php
│  │  │     │  │  │  ├─ ConnectionError.php
│  │  │     │  │  │  ├─ ConnectionFailed.php
│  │  │     │  │  │  ├─ Factory.php
│  │  │     │  │  │  ├─ PrepareFailed.php
│  │  │     │  │  │  └─ StatementError.php
│  │  │     │  │  ├─ Result.php
│  │  │     │  │  └─ Statement.php
│  │  │     │  ├─ Middleware
│  │  │     │  │  ├─ AbstractConnectionMiddleware.php
│  │  │     │  │  ├─ AbstractDriverMiddleware.php
│  │  │     │  │  ├─ AbstractResultMiddleware.php
│  │  │     │  │  └─ AbstractStatementMiddleware.php
│  │  │     │  ├─ Middleware.php
│  │  │     │  ├─ Mysqli
│  │  │     │  │  ├─ Connection.php
│  │  │     │  │  ├─ Driver.php
│  │  │     │  │  ├─ Exception
│  │  │     │  │  │  ├─ ConnectionError.php
│  │  │     │  │  │  ├─ ConnectionFailed.php
│  │  │     │  │  │  ├─ FailedReadingStreamOffset.php
│  │  │     │  │  │  ├─ HostRequired.php
│  │  │     │  │  │  ├─ InvalidCharset.php
│  │  │     │  │  │  ├─ InvalidOption.php
│  │  │     │  │  │  ├─ NonStreamResourceUsedAsLargeObject.php
│  │  │     │  │  │  └─ StatementError.php
│  │  │     │  │  ├─ Initializer
│  │  │     │  │  │  ├─ Charset.php
│  │  │     │  │  │  ├─ Options.php
│  │  │     │  │  │  └─ Secure.php
│  │  │     │  │  ├─ Initializer.php
│  │  │     │  │  ├─ Result.php
│  │  │     │  │  └─ Statement.php
│  │  │     │  ├─ OCI8
│  │  │     │  │  ├─ Connection.php
│  │  │     │  │  ├─ ConvertPositionalToNamedPlaceholders.php
│  │  │     │  │  ├─ Driver.php
│  │  │     │  │  ├─ Exception
│  │  │     │  │  │  ├─ ConnectionFailed.php
│  │  │     │  │  │  ├─ Error.php
│  │  │     │  │  │  ├─ InvalidConfiguration.php
│  │  │     │  │  │  ├─ NonTerminatedStringLiteral.php
│  │  │     │  │  │  └─ UnknownParameterIndex.php
│  │  │     │  │  ├─ ExecutionMode.php
│  │  │     │  │  ├─ Middleware
│  │  │     │  │  │  └─ InitializeSession.php
│  │  │     │  │  ├─ Result.php
│  │  │     │  │  └─ Statement.php
│  │  │     │  ├─ PDO
│  │  │     │  │  ├─ Connection.php
│  │  │     │  │  ├─ Exception
│  │  │     │  │  │  └─ InvalidConfiguration.php
│  │  │     │  │  ├─ Exception.php
│  │  │     │  │  ├─ MySQL
│  │  │     │  │  │  └─ Driver.php
│  │  │     │  │  ├─ OCI
│  │  │     │  │  │  └─ Driver.php
│  │  │     │  │  ├─ PDOConnect.php
│  │  │     │  │  ├─ PgSQL
│  │  │     │  │  │  └─ Driver.php
│  │  │     │  │  ├─ Result.php
│  │  │     │  │  ├─ SQLite
│  │  │     │  │  │  └─ Driver.php
│  │  │     │  │  ├─ SQLSrv
│  │  │     │  │  │  ├─ Connection.php
│  │  │     │  │  │  ├─ Driver.php
│  │  │     │  │  │  └─ Statement.php
│  │  │     │  │  └─ Statement.php
│  │  │     │  ├─ PgSQL
│  │  │     │  │  ├─ Connection.php
│  │  │     │  │  ├─ ConvertParameters.php
│  │  │     │  │  ├─ Driver.php
│  │  │     │  │  ├─ Exception
│  │  │     │  │  │  ├─ UnexpectedValue.php
│  │  │     │  │  │  └─ UnknownParameter.php
│  │  │     │  │  ├─ Exception.php
│  │  │     │  │  ├─ Result.php
│  │  │     │  │  └─ Statement.php
│  │  │     │  ├─ Result.php
│  │  │     │  ├─ SQLite3
│  │  │     │  │  ├─ Connection.php
│  │  │     │  │  ├─ Driver.php
│  │  │     │  │  ├─ Exception.php
│  │  │     │  │  ├─ Result.php
│  │  │     │  │  └─ Statement.php
│  │  │     │  ├─ SQLSrv
│  │  │     │  │  ├─ Connection.php
│  │  │     │  │  ├─ Driver.php
│  │  │     │  │  ├─ Exception
│  │  │     │  │  │  └─ Error.php
│  │  │     │  │  ├─ Result.php
│  │  │     │  │  └─ Statement.php
│  │  │     │  └─ Statement.php
│  │  │     ├─ Driver.php
│  │  │     ├─ DriverManager.php
│  │  │     ├─ Exception
│  │  │     │  ├─ CommitFailedRollbackOnly.php
│  │  │     │  ├─ ConnectionException.php
│  │  │     │  ├─ ConnectionLost.php
│  │  │     │  ├─ ConstraintViolationException.php
│  │  │     │  ├─ DatabaseDoesNotExist.php
│  │  │     │  ├─ DatabaseObjectExistsException.php
│  │  │     │  ├─ DatabaseObjectNotFoundException.php
│  │  │     │  ├─ DatabaseRequired.php
│  │  │     │  ├─ DeadlockException.php
│  │  │     │  ├─ DriverException.php
│  │  │     │  ├─ DriverRequired.php
│  │  │     │  ├─ ForeignKeyConstraintViolationException.php
│  │  │     │  ├─ InvalidArgumentException.php
│  │  │     │  ├─ InvalidColumnDeclaration.php
│  │  │     │  ├─ InvalidColumnIndex.php
│  │  │     │  ├─ InvalidColumnType
│  │  │     │  │  ├─ ColumnLengthRequired.php
│  │  │     │  │  ├─ ColumnPrecisionRequired.php
│  │  │     │  │  ├─ ColumnScaleRequired.php
│  │  │     │  │  └─ ColumnValuesRequired.php
│  │  │     │  ├─ InvalidColumnType.php
│  │  │     │  ├─ InvalidDriverClass.php
│  │  │     │  ├─ InvalidFieldNameException.php
│  │  │     │  ├─ InvalidWrapperClass.php
│  │  │     │  ├─ LockWaitTimeoutException.php
│  │  │     │  ├─ MalformedDsnException.php
│  │  │     │  ├─ NoActiveTransaction.php
│  │  │     │  ├─ NoKeyValue.php
│  │  │     │  ├─ NonUniqueFieldNameException.php
│  │  │     │  ├─ NotNullConstraintViolationException.php
│  │  │     │  ├─ ParseError.php
│  │  │     │  ├─ ReadOnlyException.php
│  │  │     │  ├─ RetryableException.php
│  │  │     │  ├─ SavepointsNotSupported.php
│  │  │     │  ├─ SchemaDoesNotExist.php
│  │  │     │  ├─ ServerException.php
│  │  │     │  ├─ SyntaxErrorException.php
│  │  │     │  ├─ TableExistsException.php
│  │  │     │  ├─ TableNotFoundException.php
│  │  │     │  ├─ TransactionRolledBack.php
│  │  │     │  ├─ UniqueConstraintViolationException.php
│  │  │     │  └─ UnknownDriver.php
│  │  │     ├─ Exception.php
│  │  │     ├─ ExpandArrayParameters.php
│  │  │     ├─ LockMode.php
│  │  │     ├─ Logging
│  │  │     │  ├─ Connection.php
│  │  │     │  ├─ Driver.php
│  │  │     │  ├─ Middleware.php
│  │  │     │  └─ Statement.php
│  │  │     ├─ ParameterType.php
│  │  │     ├─ Platforms
│  │  │     │  ├─ AbstractMySQLPlatform.php
│  │  │     │  ├─ AbstractPlatform.php
│  │  │     │  ├─ DateIntervalUnit.php
│  │  │     │  ├─ Db2
│  │  │     │  │  └─ Db2MetadataProvider.php
│  │  │     │  ├─ DB2Platform.php
│  │  │     │  ├─ Exception
│  │  │     │  │  ├─ InvalidPlatformVersion.php
│  │  │     │  │  ├─ NoColumnsSpecifiedForTable.php
│  │  │     │  │  ├─ NotSupported.php
│  │  │     │  │  └─ PlatformException.php
│  │  │     │  ├─ Keywords
│  │  │     │  │  ├─ DB2Keywords.php
│  │  │     │  │  ├─ KeywordList.php
│  │  │     │  │  ├─ MariaDB117Keywords.php
│  │  │     │  │  ├─ MariaDBKeywords.php
│  │  │     │  │  ├─ MySQL80Keywords.php
│  │  │     │  │  ├─ MySQL84Keywords.php
│  │  │     │  │  ├─ MySQLKeywords.php
│  │  │     │  │  ├─ OracleKeywords.php
│  │  │     │  │  ├─ PostgreSQLKeywords.php
│  │  │     │  │  ├─ SQLiteKeywords.php
│  │  │     │  │  └─ SQLServerKeywords.php
│  │  │     │  ├─ MariaDB1010Platform.php
│  │  │     │  ├─ MariaDB1052Platform.php
│  │  │     │  ├─ MariaDB1060Platform.php
│  │  │     │  ├─ MariaDB110700Platform.php
│  │  │     │  ├─ MariaDBPlatform.php
│  │  │     │  ├─ MySQL
│  │  │     │  │  ├─ CharsetMetadataProvider
│  │  │     │  │  │  ├─ CachingCharsetMetadataProvider.php
│  │  │     │  │  │  └─ ConnectionCharsetMetadataProvider.php
│  │  │     │  │  ├─ CharsetMetadataProvider.php
│  │  │     │  │  ├─ CollationMetadataProvider
│  │  │     │  │  │  ├─ CachingCollationMetadataProvider.php
│  │  │     │  │  │  └─ ConnectionCollationMetadataProvider.php
│  │  │     │  │  ├─ CollationMetadataProvider.php
│  │  │     │  │  ├─ Comparator.php
│  │  │     │  │  ├─ DefaultTableOptions.php
│  │  │     │  │  └─ MySQLMetadataProvider.php
│  │  │     │  ├─ MySQL80Platform.php
│  │  │     │  ├─ MySQL84Platform.php
│  │  │     │  ├─ MySQLPlatform.php
│  │  │     │  ├─ Oracle
│  │  │     │  │  └─ OracleMetadataProvider.php
│  │  │     │  ├─ OraclePlatform.php
│  │  │     │  ├─ PostgreSQL
│  │  │     │  │  └─ PostgreSQLMetadataProvider.php
│  │  │     │  ├─ PostgreSQL120Platform.php
│  │  │     │  ├─ PostgreSQLPlatform.php
│  │  │     │  ├─ SQLite
│  │  │     │  │  ├─ Comparator.php
│  │  │     │  │  ├─ SQLiteMetadataProvider
│  │  │     │  │  │  └─ ForeignKeyConstraintDetails.php
│  │  │     │  │  └─ SQLiteMetadataProvider.php
│  │  │     │  ├─ SQLitePlatform.php
│  │  │     │  ├─ SQLServer
│  │  │     │  │  ├─ Comparator.php
│  │  │     │  │  ├─ SQL
│  │  │     │  │  │  └─ Builder
│  │  │     │  │  │     └─ SQLServerSelectSQLBuilder.php
│  │  │     │  │  └─ SQLServerMetadataProvider.php
│  │  │     │  ├─ SQLServerPlatform.php
│  │  │     │  └─ TrimMode.php
│  │  │     ├─ Portability
│  │  │     │  ├─ Connection.php
│  │  │     │  ├─ Converter.php
│  │  │     │  ├─ Driver.php
│  │  │     │  ├─ Middleware.php
│  │  │     │  ├─ OptimizeFlags.php
│  │  │     │  ├─ Result.php
│  │  │     │  └─ Statement.php
│  │  │     ├─ Query
│  │  │     │  ├─ CommonTableExpression.php
│  │  │     │  ├─ Exception
│  │  │     │  │  ├─ NonUniqueAlias.php
│  │  │     │  │  └─ UnknownAlias.php
│  │  │     │  ├─ Expression
│  │  │     │  │  ├─ CompositeExpression.php
│  │  │     │  │  └─ ExpressionBuilder.php
│  │  │     │  ├─ ForUpdate
│  │  │     │  │  └─ ConflictResolutionMode.php
│  │  │     │  ├─ ForUpdate.php
│  │  │     │  ├─ From.php
│  │  │     │  ├─ Join.php
│  │  │     │  ├─ Limit.php
│  │  │     │  ├─ QueryBuilder.php
│  │  │     │  ├─ QueryException.php
│  │  │     │  ├─ QueryType.php
│  │  │     │  ├─ SelectQuery.php
│  │  │     │  ├─ Union.php
│  │  │     │  ├─ UnionQuery.php
│  │  │     │  └─ UnionType.php
│  │  │     ├─ Query.php
│  │  │     ├─ Result.php
│  │  │     ├─ Schema
│  │  │     │  ├─ AbstractAsset.php
│  │  │     │  ├─ AbstractNamedObject.php
│  │  │     │  ├─ AbstractOptionallyNamedObject.php
│  │  │     │  ├─ AbstractSchemaManager.php
│  │  │     │  ├─ Collections
│  │  │     │  │  ├─ Exception
│  │  │     │  │  │  ├─ ObjectAlreadyExists.php
│  │  │     │  │  │  └─ ObjectDoesNotExist.php
│  │  │     │  │  ├─ Exception.php
│  │  │     │  │  ├─ ObjectSet.php
│  │  │     │  │  ├─ OptionallyUnqualifiedNamedObjectSet.php
│  │  │     │  │  └─ UnqualifiedNamedObjectSet.php
│  │  │     │  ├─ Column.php
│  │  │     │  ├─ ColumnDiff.php
│  │  │     │  ├─ ColumnEditor.php
│  │  │     │  ├─ Comparator.php
│  │  │     │  ├─ ComparatorConfig.php
│  │  │     │  ├─ DB2SchemaManager.php
│  │  │     │  ├─ DefaultExpression
│  │  │     │  │  ├─ CurrentDate.php
│  │  │     │  │  ├─ CurrentTime.php
│  │  │     │  │  └─ CurrentTimestamp.php
│  │  │     │  ├─ DefaultExpression.php
│  │  │     │  ├─ DefaultSchemaManagerFactory.php
│  │  │     │  ├─ Exception
│  │  │     │  │  ├─ ColumnAlreadyExists.php
│  │  │     │  │  ├─ ColumnDoesNotExist.php
│  │  │     │  │  ├─ ForeignKeyDoesNotExist.php
│  │  │     │  │  ├─ IncomparableNames.php
│  │  │     │  │  ├─ IndexAlreadyExists.php
│  │  │     │  │  ├─ IndexDoesNotExist.php
│  │  │     │  │  ├─ IndexNameInvalid.php
│  │  │     │  │  ├─ InvalidColumnDefinition.php
│  │  │     │  │  ├─ InvalidForeignKeyConstraintDefinition.php
│  │  │     │  │  ├─ InvalidIdentifier.php
│  │  │     │  │  ├─ InvalidIndexDefinition.php
│  │  │     │  │  ├─ InvalidName.php
│  │  │     │  │  ├─ InvalidPrimaryKeyConstraintDefinition.php
│  │  │     │  │  ├─ InvalidSequenceDefinition.php
│  │  │     │  │  ├─ InvalidState.php
│  │  │     │  │  ├─ InvalidTableDefinition.php
│  │  │     │  │  ├─ InvalidTableModification.php
│  │  │     │  │  ├─ InvalidTableName.php
│  │  │     │  │  ├─ InvalidUniqueConstraintDefinition.php
│  │  │     │  │  ├─ InvalidViewDefinition.php
│  │  │     │  │  ├─ NamespaceAlreadyExists.php
│  │  │     │  │  ├─ NotImplemented.php
│  │  │     │  │  ├─ PrimaryKeyAlreadyExists.php
│  │  │     │  │  ├─ SequenceAlreadyExists.php
│  │  │     │  │  ├─ SequenceDoesNotExist.php
│  │  │     │  │  ├─ TableAlreadyExists.php
│  │  │     │  │  ├─ TableDoesNotExist.php
│  │  │     │  │  ├─ UniqueConstraintDoesNotExist.php
│  │  │     │  │  ├─ UnknownColumnOption.php
│  │  │     │  │  ├─ UnsupportedName.php
│  │  │     │  │  └─ UnsupportedSchema.php
│  │  │     │  ├─ ForeignKeyConstraint
│  │  │     │  │  ├─ Deferrability.php
│  │  │     │  │  ├─ MatchType.php
│  │  │     │  │  └─ ReferentialAction.php
│  │  │     │  ├─ ForeignKeyConstraint.php
│  │  │     │  ├─ ForeignKeyConstraintEditor.php
│  │  │     │  ├─ Identifier.php
│  │  │     │  ├─ Index
│  │  │     │  │  ├─ IndexedColumn.php
│  │  │     │  │  └─ IndexType.php
│  │  │     │  ├─ Index.php
│  │  │     │  ├─ IndexEditor.php
│  │  │     │  ├─ Introspection
│  │  │     │  │  ├─ IntrospectingSchemaProvider.php
│  │  │     │  │  └─ MetadataProcessor
│  │  │     │  │     ├─ ForeignKeyConstraintColumnMetadataProcessor.php
│  │  │     │  │     ├─ IndexColumnMetadataProcessor.php
│  │  │     │  │     ├─ PrimaryKeyConstraintColumnMetadataProcessor.php
│  │  │     │  │     ├─ SequenceMetadataProcessor.php
│  │  │     │  │     └─ ViewMetadataProcessor.php
│  │  │     │  ├─ Metadata
│  │  │     │  │  ├─ DatabaseMetadataRow.php
│  │  │     │  │  ├─ ForeignKeyConstraintColumnMetadataRow.php
│  │  │     │  │  ├─ IndexColumnMetadataRow.php
│  │  │     │  │  ├─ MetadataProvider.php
│  │  │     │  │  ├─ PrimaryKeyConstraintColumnRow.php
│  │  │     │  │  ├─ SchemaMetadataRow.php
│  │  │     │  │  ├─ SequenceMetadataRow.php
│  │  │     │  │  ├─ TableColumnMetadataRow.php
│  │  │     │  │  ├─ TableMetadataRow.php
│  │  │     │  │  └─ ViewMetadataRow.php
│  │  │     │  ├─ MySQLSchemaManager.php
│  │  │     │  ├─ Name
│  │  │     │  │  ├─ GenericName.php
│  │  │     │  │  ├─ Identifier.php
│  │  │     │  │  ├─ OptionallyQualifiedName.php
│  │  │     │  │  ├─ Parser
│  │  │     │  │  │  ├─ Exception
│  │  │     │  │  │  │  ├─ ExpectedDot.php
│  │  │     │  │  │  │  ├─ ExpectedNextIdentifier.php
│  │  │     │  │  │  │  ├─ InvalidName.php
│  │  │     │  │  │  │  └─ UnableToParseIdentifier.php
│  │  │     │  │  │  ├─ Exception.php
│  │  │     │  │  │  ├─ GenericNameParser.php
│  │  │     │  │  │  ├─ OptionallyQualifiedNameParser.php
│  │  │     │  │  │  └─ UnqualifiedNameParser.php
│  │  │     │  │  ├─ Parser.php
│  │  │     │  │  ├─ Parsers.php
│  │  │     │  │  ├─ UnqualifiedName.php
│  │  │     │  │  └─ UnquotedIdentifierFolding.php
│  │  │     │  ├─ Name.php
│  │  │     │  ├─ NamedObject.php
│  │  │     │  ├─ OptionallyNamedObject.php
│  │  │     │  ├─ OracleSchemaManager.php
│  │  │     │  ├─ PostgreSQLSchemaManager.php
│  │  │     │  ├─ PrimaryKeyConstraint.php
│  │  │     │  ├─ PrimaryKeyConstraintEditor.php
│  │  │     │  ├─ Schema.php
│  │  │     │  ├─ SchemaConfig.php
│  │  │     │  ├─ SchemaDiff.php
│  │  │     │  ├─ SchemaException.php
│  │  │     │  ├─ SchemaManagerFactory.php
│  │  │     │  ├─ SchemaProvider.php
│  │  │     │  ├─ Sequence.php
│  │  │     │  ├─ SequenceEditor.php
│  │  │     │  ├─ SQLiteSchemaManager.php
│  │  │     │  ├─ SQLServerSchemaManager.php
│  │  │     │  ├─ Table.php
│  │  │     │  ├─ TableConfiguration.php
│  │  │     │  ├─ TableDiff.php
│  │  │     │  ├─ TableEditor.php
│  │  │     │  ├─ UniqueConstraint.php
│  │  │     │  ├─ UniqueConstraintEditor.php
│  │  │     │  ├─ View.php
│  │  │     │  └─ ViewEditor.php
│  │  │     ├─ ServerVersionProvider.php
│  │  │     ├─ SQL
│  │  │     │  ├─ Builder
│  │  │     │  │  ├─ CreateSchemaObjectsSQLBuilder.php
│  │  │     │  │  ├─ DefaultSelectSQLBuilder.php
│  │  │     │  │  ├─ DefaultUnionSQLBuilder.php
│  │  │     │  │  ├─ DropSchemaObjectsSQLBuilder.php
│  │  │     │  │  ├─ SelectSQLBuilder.php
│  │  │     │  │  ├─ UnionSQLBuilder.php
│  │  │     │  │  └─ WithSQLBuilder.php
│  │  │     │  ├─ Parser
│  │  │     │  │  ├─ Exception
│  │  │     │  │  │  └─ RegularExpressionError.php
│  │  │     │  │  ├─ Exception.php
│  │  │     │  │  └─ Visitor.php
│  │  │     │  └─ Parser.php
│  │  │     ├─ Statement.php
│  │  │     ├─ Tools
│  │  │     │  ├─ Console
│  │  │     │  │  ├─ Command
│  │  │     │  │  │  └─ RunSqlCommand.php
│  │  │     │  │  ├─ ConnectionNotFound.php
│  │  │     │  │  ├─ ConnectionProvider
│  │  │     │  │  │  └─ SingleConnectionProvider.php
│  │  │     │  │  └─ ConnectionProvider.php
│  │  │     │  └─ DsnParser.php
│  │  │     ├─ TransactionIsolationLevel.php
│  │  │     └─ Types
│  │  │        ├─ AsciiStringType.php
│  │  │        ├─ BigIntType.php
│  │  │        ├─ BinaryType.php
│  │  │        ├─ BlobType.php
│  │  │        ├─ BooleanType.php
│  │  │        ├─ ConversionException.php
│  │  │        ├─ DateImmutableType.php
│  │  │        ├─ DateIntervalType.php
│  │  │        ├─ DateTimeImmutableType.php
│  │  │        ├─ DateTimeType.php
│  │  │        ├─ DateTimeTzImmutableType.php
│  │  │        ├─ DateTimeTzType.php
│  │  │        ├─ DateType.php
│  │  │        ├─ DecimalType.php
│  │  │        ├─ EnumType.php
│  │  │        ├─ Exception
│  │  │        │  ├─ InvalidFormat.php
│  │  │        │  ├─ InvalidType.php
│  │  │        │  ├─ SerializationFailed.php
│  │  │        │  ├─ TypeAlreadyRegistered.php
│  │  │        │  ├─ TypeArgumentCountError.php
│  │  │        │  ├─ TypeNotFound.php
│  │  │        │  ├─ TypeNotRegistered.php
│  │  │        │  ├─ TypesAlreadyExists.php
│  │  │        │  ├─ TypesException.php
│  │  │        │  ├─ UnknownColumnType.php
│  │  │        │  └─ ValueNotConvertible.php
│  │  │        ├─ FloatType.php
│  │  │        ├─ GuidType.php
│  │  │        ├─ IntegerType.php
│  │  │        ├─ JsonbObjectType.php
│  │  │        ├─ JsonbType.php
│  │  │        ├─ JsonObjectType.php
│  │  │        ├─ JsonType.php
│  │  │        ├─ JsonTypeConvert.php
│  │  │        ├─ NumberType.php
│  │  │        ├─ PhpDateMappingType.php
│  │  │        ├─ PhpDateTimeMappingType.php
│  │  │        ├─ PhpIntegerMappingType.php
│  │  │        ├─ PhpTimeMappingType.php
│  │  │        ├─ SimpleArrayType.php
│  │  │        ├─ SmallFloatType.php
│  │  │        ├─ SmallIntType.php
│  │  │        ├─ StringType.php
│  │  │        ├─ TextType.php
│  │  │        ├─ TimeImmutableType.php
│  │  │        ├─ TimeType.php
│  │  │        ├─ Type.php
│  │  │        ├─ TypeRegistry.php
│  │  │        ├─ Types.php
│  │  │        ├─ VarDateTimeImmutableType.php
│  │  │        └─ VarDateTimeType.php
│  │  ├─ deprecations
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     ├─ Deprecation.php
│  │  │     └─ PHPUnit
│  │  │        └─ VerifyDeprecations.php
│  │  ├─ inflector
│  │  │  ├─ composer.json
│  │  │  ├─ docs
│  │  │  │  └─ en
│  │  │  │     └─ index.rst
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     ├─ CachedWordInflector.php
│  │  │     ├─ GenericLanguageInflectorFactory.php
│  │  │     ├─ Inflector.php
│  │  │     ├─ InflectorFactory.php
│  │  │     ├─ Language.php
│  │  │     ├─ LanguageInflectorFactory.php
│  │  │     ├─ NoopWordInflector.php
│  │  │     ├─ Rules
│  │  │     │  ├─ English
│  │  │     │  │  ├─ Inflectible.php
│  │  │     │  │  ├─ InflectorFactory.php
│  │  │     │  │  ├─ Rules.php
│  │  │     │  │  └─ Uninflected.php
│  │  │     │  ├─ Esperanto
│  │  │     │  │  ├─ Inflectible.php
│  │  │     │  │  ├─ InflectorFactory.php
│  │  │     │  │  ├─ Rules.php
│  │  │     │  │  └─ Uninflected.php
│  │  │     │  ├─ French
│  │  │     │  │  ├─ Inflectible.php
│  │  │     │  │  ├─ InflectorFactory.php
│  │  │     │  │  ├─ Rules.php
│  │  │     │  │  └─ Uninflected.php
│  │  │     │  ├─ Italian
│  │  │     │  │  ├─ Inflectible.php
│  │  │     │  │  ├─ InflectorFactory.php
│  │  │     │  │  ├─ Rules.php
│  │  │     │  │  └─ Uninflected.php
│  │  │     │  ├─ NorwegianBokmal
│  │  │     │  │  ├─ Inflectible.php
│  │  │     │  │  ├─ InflectorFactory.php
│  │  │     │  │  ├─ Rules.php
│  │  │     │  │  └─ Uninflected.php
│  │  │     │  ├─ Pattern.php
│  │  │     │  ├─ Patterns.php
│  │  │     │  ├─ Portuguese
│  │  │     │  │  ├─ Inflectible.php
│  │  │     │  │  ├─ InflectorFactory.php
│  │  │     │  │  ├─ Rules.php
│  │  │     │  │  └─ Uninflected.php
│  │  │     │  ├─ Ruleset.php
│  │  │     │  ├─ Spanish
│  │  │     │  │  ├─ Inflectible.php
│  │  │     │  │  ├─ InflectorFactory.php
│  │  │     │  │  ├─ Rules.php
│  │  │     │  │  └─ Uninflected.php
│  │  │     │  ├─ Substitution.php
│  │  │     │  ├─ Substitutions.php
│  │  │     │  ├─ Transformation.php
│  │  │     │  ├─ Transformations.php
│  │  │     │  ├─ Turkish
│  │  │     │  │  ├─ Inflectible.php
│  │  │     │  │  ├─ InflectorFactory.php
│  │  │     │  │  ├─ Rules.php
│  │  │     │  │  └─ Uninflected.php
│  │  │     │  └─ Word.php
│  │  │     ├─ RulesetInflector.php
│  │  │     └─ WordInflector.php
│  │  └─ lexer
│  │     ├─ composer.json
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ src
│  │     │  ├─ AbstractLexer.php
│  │     │  └─ Token.php
│  │     └─ UPGRADE.md
│  ├─ dragonmantank
│  │  └─ cron-expression
│  │     ├─ CHANGELOG.md
│  │     ├─ composer.json
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     └─ src
│  │        └─ Cron
│  │           ├─ AbstractField.php
│  │           ├─ CronExpression.php
│  │           ├─ DayOfMonthField.php
│  │           ├─ DayOfWeekField.php
│  │           ├─ FieldFactory.php
│  │           ├─ FieldFactoryInterface.php
│  │           ├─ FieldInterface.php
│  │           ├─ HoursField.php
│  │           ├─ MinutesField.php
│  │           └─ MonthField.php
│  ├─ egulias
│  │  └─ email-validator
│  │     ├─ composer.json
│  │     ├─ CONTRIBUTING.md
│  │     ├─ LICENSE
│  │     └─ src
│  │        ├─ EmailLexer.php
│  │        ├─ EmailParser.php
│  │        ├─ EmailValidator.php
│  │        ├─ MessageIDParser.php
│  │        ├─ Parser
│  │        │  ├─ Comment.php
│  │        │  ├─ CommentStrategy
│  │        │  │  ├─ CommentStrategy.php
│  │        │  │  ├─ DomainComment.php
│  │        │  │  └─ LocalComment.php
│  │        │  ├─ DomainLiteral.php
│  │        │  ├─ DomainPart.php
│  │        │  ├─ DoubleQuote.php
│  │        │  ├─ FoldingWhiteSpace.php
│  │        │  ├─ IDLeftPart.php
│  │        │  ├─ IDRightPart.php
│  │        │  ├─ LocalPart.php
│  │        │  └─ PartParser.php
│  │        ├─ Parser.php
│  │        ├─ Result
│  │        │  ├─ InvalidEmail.php
│  │        │  ├─ MultipleErrors.php
│  │        │  ├─ Reason
│  │        │  │  ├─ AtextAfterCFWS.php
│  │        │  │  ├─ CharNotAllowed.php
│  │        │  │  ├─ CommaInDomain.php
│  │        │  │  ├─ CommentsInIDRight.php
│  │        │  │  ├─ ConsecutiveAt.php
│  │        │  │  ├─ ConsecutiveDot.php
│  │        │  │  ├─ CRLFAtTheEnd.php
│  │        │  │  ├─ CRLFX2.php
│  │        │  │  ├─ CRNoLF.php
│  │        │  │  ├─ DetailedReason.php
│  │        │  │  ├─ DomainAcceptsNoMail.php
│  │        │  │  ├─ DomainHyphened.php
│  │        │  │  ├─ DomainTooLong.php
│  │        │  │  ├─ DotAtEnd.php
│  │        │  │  ├─ DotAtStart.php
│  │        │  │  ├─ EmptyReason.php
│  │        │  │  ├─ ExceptionFound.php
│  │        │  │  ├─ ExpectingATEXT.php
│  │        │  │  ├─ ExpectingCTEXT.php
│  │        │  │  ├─ ExpectingDomainLiteralClose.php
│  │        │  │  ├─ ExpectingDTEXT.php
│  │        │  │  ├─ LabelTooLong.php
│  │        │  │  ├─ LocalOrReservedDomain.php
│  │        │  │  ├─ NoDNSRecord.php
│  │        │  │  ├─ NoDomainPart.php
│  │        │  │  ├─ NoLocalPart.php
│  │        │  │  ├─ Reason.php
│  │        │  │  ├─ RFCWarnings.php
│  │        │  │  ├─ SpoofEmail.php
│  │        │  │  ├─ UnableToGetDNSRecord.php
│  │        │  │  ├─ UnclosedComment.php
│  │        │  │  ├─ UnclosedQuotedString.php
│  │        │  │  ├─ UnOpenedComment.php
│  │        │  │  └─ UnusualElements.php
│  │        │  ├─ Result.php
│  │        │  ├─ SpoofEmail.php
│  │        │  └─ ValidEmail.php
│  │        ├─ Validation
│  │        │  ├─ DNSCheckValidation.php
│  │        │  ├─ DNSGetRecordWrapper.php
│  │        │  ├─ DNSRecords.php
│  │        │  ├─ EmailValidation.php
│  │        │  ├─ Exception
│  │        │  │  └─ EmptyValidationList.php
│  │        │  ├─ Extra
│  │        │  │  └─ SpoofCheckValidation.php
│  │        │  ├─ MessageIDValidation.php
│  │        │  ├─ MultipleValidationWithAnd.php
│  │        │  ├─ NoRFCWarningsValidation.php
│  │        │  └─ RFCValidation.php
│  │        └─ Warning
│  │           ├─ AddressLiteral.php
│  │           ├─ CFWSNearAt.php
│  │           ├─ CFWSWithFWS.php
│  │           ├─ Comment.php
│  │           ├─ DeprecatedComment.php
│  │           ├─ DomainLiteral.php
│  │           ├─ EmailTooLong.php
│  │           ├─ IPV6BadChar.php
│  │           ├─ IPV6ColonEnd.php
│  │           ├─ IPV6ColonStart.php
│  │           ├─ IPV6Deprecated.php
│  │           ├─ IPV6DoubleColon.php
│  │           ├─ IPV6GroupCount.php
│  │           ├─ IPV6MaxGroups.php
│  │           ├─ LocalTooLong.php
│  │           ├─ NoDNSMXRecord.php
│  │           ├─ ObsoleteDTEXT.php
│  │           ├─ QuotedPart.php
│  │           ├─ QuotedString.php
│  │           ├─ TLD.php
│  │           └─ Warning.php
│  ├─ firebase
│  │  └─ php-jwt
│  │     ├─ CHANGELOG.md
│  │     ├─ composer.json
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     └─ src
│  │        ├─ BeforeValidException.php
│  │        ├─ CachedKeySet.php
│  │        ├─ ExpiredException.php
│  │        ├─ JWK.php
│  │        ├─ JWT.php
│  │        ├─ JWTExceptionWithPayloadInterface.php
│  │        ├─ Key.php
│  │        └─ SignatureInvalidException.php
│  ├─ fruitcake
│  │  └─ php-cors
│  │     ├─ composer.json
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     └─ src
│  │        ├─ CorsService.php
│  │        └─ Exceptions
│  │           └─ InvalidOptionException.php
│  ├─ geniusts
│  │  └─ hijri-dates
│  │     ├─ composer.json
│  │     ├─ LICENSE
│  │     ├─ readme.md
│  │     └─ src
│  │        ├─ Converter.php
│  │        ├─ Date.php
│  │        ├─ Hijri.php
│  │        └─ Translations
│  │           ├─ Arabic.php
│  │           ├─ English.php
│  │           ├─ Indonesian.php
│  │           ├─ Malay.php
│  │           ├─ Persian.php
│  │           ├─ Russian.php
│  │           └─ TranslationInterface.php
│  ├─ graham-campbell
│  │  └─ result-type
│  │     ├─ composer.json
│  │     ├─ LICENSE
│  │     └─ src
│  │        ├─ Error.php
│  │        ├─ Result.php
│  │        └─ Success.php
│  ├─ guzzlehttp
│  │  ├─ guzzle
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ package-lock.json
│  │  │  ├─ README.md
│  │  │  ├─ src
│  │  │  │  ├─ BodySummarizer.php
│  │  │  │  ├─ BodySummarizerInterface.php
│  │  │  │  ├─ Client.php
│  │  │  │  ├─ ClientInterface.php
│  │  │  │  ├─ ClientTrait.php
│  │  │  │  ├─ Cookie
│  │  │  │  │  ├─ CookieJar.php
│  │  │  │  │  ├─ CookieJarInterface.php
│  │  │  │  │  ├─ FileCookieJar.php
│  │  │  │  │  ├─ SessionCookieJar.php
│  │  │  │  │  └─ SetCookie.php
│  │  │  │  ├─ Exception
│  │  │  │  │  ├─ BadResponseException.php
│  │  │  │  │  ├─ ClientException.php
│  │  │  │  │  ├─ ConnectException.php
│  │  │  │  │  ├─ GuzzleException.php
│  │  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  │  ├─ RequestException.php
│  │  │  │  │  ├─ ServerException.php
│  │  │  │  │  ├─ TooManyRedirectsException.php
│  │  │  │  │  └─ TransferException.php
│  │  │  │  ├─ functions.php
│  │  │  │  ├─ functions_include.php
│  │  │  │  ├─ Handler
│  │  │  │  │  ├─ CurlFactory.php
│  │  │  │  │  ├─ CurlFactoryInterface.php
│  │  │  │  │  ├─ CurlHandler.php
│  │  │  │  │  ├─ CurlMultiHandler.php
│  │  │  │  │  ├─ EasyHandle.php
│  │  │  │  │  ├─ HeaderProcessor.php
│  │  │  │  │  ├─ MockHandler.php
│  │  │  │  │  ├─ Proxy.php
│  │  │  │  │  └─ StreamHandler.php
│  │  │  │  ├─ HandlerStack.php
│  │  │  │  ├─ MessageFormatter.php
│  │  │  │  ├─ MessageFormatterInterface.php
│  │  │  │  ├─ Middleware.php
│  │  │  │  ├─ Pool.php
│  │  │  │  ├─ PrepareBodyMiddleware.php
│  │  │  │  ├─ RedirectMiddleware.php
│  │  │  │  ├─ RequestOptions.php
│  │  │  │  ├─ RetryMiddleware.php
│  │  │  │  ├─ TransferStats.php
│  │  │  │  └─ Utils.php
│  │  │  └─ UPGRADING.md
│  │  ├─ promises
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     ├─ AggregateException.php
│  │  │     ├─ CancellationException.php
│  │  │     ├─ Coroutine.php
│  │  │     ├─ Create.php
│  │  │     ├─ Each.php
│  │  │     ├─ EachPromise.php
│  │  │     ├─ FulfilledPromise.php
│  │  │     ├─ Is.php
│  │  │     ├─ Promise.php
│  │  │     ├─ PromiseInterface.php
│  │  │     ├─ PromisorInterface.php
│  │  │     ├─ RejectedPromise.php
│  │  │     ├─ RejectionException.php
│  │  │     ├─ TaskQueue.php
│  │  │     ├─ TaskQueueInterface.php
│  │  │     └─ Utils.php
│  │  ├─ psr7
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     ├─ AppendStream.php
│  │  │     ├─ BufferStream.php
│  │  │     ├─ CachingStream.php
│  │  │     ├─ DroppingStream.php
│  │  │     ├─ Exception
│  │  │     │  └─ MalformedUriException.php
│  │  │     ├─ FnStream.php
│  │  │     ├─ Header.php
│  │  │     ├─ HttpFactory.php
│  │  │     ├─ InflateStream.php
│  │  │     ├─ LazyOpenStream.php
│  │  │     ├─ LimitStream.php
│  │  │     ├─ Message.php
│  │  │     ├─ MessageTrait.php
│  │  │     ├─ MimeType.php
│  │  │     ├─ MultipartStream.php
│  │  │     ├─ NoSeekStream.php
│  │  │     ├─ PumpStream.php
│  │  │     ├─ Query.php
│  │  │     ├─ Request.php
│  │  │     ├─ Response.php
│  │  │     ├─ Rfc7230.php
│  │  │     ├─ ServerRequest.php
│  │  │     ├─ Stream.php
│  │  │     ├─ StreamDecoratorTrait.php
│  │  │     ├─ StreamWrapper.php
│  │  │     ├─ UploadedFile.php
│  │  │     ├─ Uri.php
│  │  │     ├─ UriComparator.php
│  │  │     ├─ UriNormalizer.php
│  │  │     ├─ UriResolver.php
│  │  │     └─ Utils.php
│  │  └─ uri-template
│  │     ├─ CHANGELOG.md
│  │     ├─ composer.json
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     └─ src
│  │        └─ UriTemplate.php
│  ├─ laravel
│  │  ├─ framework
│  │  │  ├─ composer.json
│  │  │  ├─ config
│  │  │  │  ├─ app.php
│  │  │  │  ├─ auth.php
│  │  │  │  ├─ broadcasting.php
│  │  │  │  ├─ cache.php
│  │  │  │  ├─ concurrency.php
│  │  │  │  ├─ cors.php
│  │  │  │  ├─ database.php
│  │  │  │  ├─ filesystems.php
│  │  │  │  ├─ hashing.php
│  │  │  │  ├─ logging.php
│  │  │  │  ├─ mail.php
│  │  │  │  ├─ queue.php
│  │  │  │  ├─ services.php
│  │  │  │  ├─ session.php
│  │  │  │  └─ view.php
│  │  │  ├─ config-stubs
│  │  │  │  └─ app.php
│  │  │  ├─ LICENSE.md
│  │  │  ├─ pint.json
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     └─ Illuminate
│  │  │        ├─ Auth
│  │  │        │  ├─ Access
│  │  │        │  │  ├─ AuthorizationException.php
│  │  │        │  │  ├─ Events
│  │  │        │  │  │  └─ GateEvaluated.php
│  │  │        │  │  ├─ Gate.php
│  │  │        │  │  ├─ HandlesAuthorization.php
│  │  │        │  │  └─ Response.php
│  │  │        │  ├─ Authenticatable.php
│  │  │        │  ├─ AuthenticationException.php
│  │  │        │  ├─ AuthManager.php
│  │  │        │  ├─ AuthServiceProvider.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ ClearResetsCommand.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     └─ make
│  │  │        │  │        └─ views
│  │  │        │  │           └─ layouts
│  │  │        │  │              └─ app.stub
│  │  │        │  ├─ CreatesUserProviders.php
│  │  │        │  ├─ DatabaseUserProvider.php
│  │  │        │  ├─ EloquentUserProvider.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ Attempting.php
│  │  │        │  │  ├─ Authenticated.php
│  │  │        │  │  ├─ CurrentDeviceLogout.php
│  │  │        │  │  ├─ Failed.php
│  │  │        │  │  ├─ Lockout.php
│  │  │        │  │  ├─ Login.php
│  │  │        │  │  ├─ Logout.php
│  │  │        │  │  ├─ OtherDeviceLogout.php
│  │  │        │  │  ├─ PasswordReset.php
│  │  │        │  │  ├─ PasswordResetLinkSent.php
│  │  │        │  │  ├─ Registered.php
│  │  │        │  │  ├─ Validated.php
│  │  │        │  │  └─ Verified.php
│  │  │        │  ├─ GenericUser.php
│  │  │        │  ├─ GuardHelpers.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Listeners
│  │  │        │  │  └─ SendEmailVerificationNotification.php
│  │  │        │  ├─ Middleware
│  │  │        │  │  ├─ Authenticate.php
│  │  │        │  │  ├─ AuthenticateWithBasicAuth.php
│  │  │        │  │  ├─ Authorize.php
│  │  │        │  │  ├─ EnsureEmailIsVerified.php
│  │  │        │  │  ├─ RedirectIfAuthenticated.php
│  │  │        │  │  └─ RequirePassword.php
│  │  │        │  ├─ MustVerifyEmail.php
│  │  │        │  ├─ Notifications
│  │  │        │  │  ├─ ResetPassword.php
│  │  │        │  │  └─ VerifyEmail.php
│  │  │        │  ├─ Passwords
│  │  │        │  │  ├─ CacheTokenRepository.php
│  │  │        │  │  ├─ CanResetPassword.php
│  │  │        │  │  ├─ DatabaseTokenRepository.php
│  │  │        │  │  ├─ PasswordBroker.php
│  │  │        │  │  ├─ PasswordBrokerManager.php
│  │  │        │  │  ├─ PasswordResetServiceProvider.php
│  │  │        │  │  └─ TokenRepositoryInterface.php
│  │  │        │  ├─ Recaller.php
│  │  │        │  ├─ RequestGuard.php
│  │  │        │  ├─ SessionGuard.php
│  │  │        │  └─ TokenGuard.php
│  │  │        ├─ Broadcasting
│  │  │        │  ├─ AnonymousEvent.php
│  │  │        │  ├─ BroadcastController.php
│  │  │        │  ├─ Broadcasters
│  │  │        │  │  ├─ AblyBroadcaster.php
│  │  │        │  │  ├─ Broadcaster.php
│  │  │        │  │  ├─ LogBroadcaster.php
│  │  │        │  │  ├─ NullBroadcaster.php
│  │  │        │  │  ├─ PusherBroadcaster.php
│  │  │        │  │  ├─ RedisBroadcaster.php
│  │  │        │  │  └─ UsePusherChannelConventions.php
│  │  │        │  ├─ BroadcastEvent.php
│  │  │        │  ├─ BroadcastException.php
│  │  │        │  ├─ BroadcastManager.php
│  │  │        │  ├─ BroadcastServiceProvider.php
│  │  │        │  ├─ Channel.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ EncryptedPrivateChannel.php
│  │  │        │  ├─ FakePendingBroadcast.php
│  │  │        │  ├─ InteractsWithBroadcasting.php
│  │  │        │  ├─ InteractsWithSockets.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ PendingBroadcast.php
│  │  │        │  ├─ PresenceChannel.php
│  │  │        │  ├─ PrivateChannel.php
│  │  │        │  └─ UniqueBroadcastEvent.php
│  │  │        ├─ Bus
│  │  │        │  ├─ Batch.php
│  │  │        │  ├─ Batchable.php
│  │  │        │  ├─ BatchFactory.php
│  │  │        │  ├─ BatchRepository.php
│  │  │        │  ├─ BusServiceProvider.php
│  │  │        │  ├─ ChainedBatch.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ DatabaseBatchRepository.php
│  │  │        │  ├─ Dispatcher.php
│  │  │        │  ├─ DynamoBatchRepository.php
│  │  │        │  ├─ Events
│  │  │        │  │  └─ BatchDispatched.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ PendingBatch.php
│  │  │        │  ├─ PrunableBatchRepository.php
│  │  │        │  ├─ Queueable.php
│  │  │        │  ├─ UniqueLock.php
│  │  │        │  └─ UpdatedBatchJobCounts.php
│  │  │        ├─ Cache
│  │  │        │  ├─ ApcStore.php
│  │  │        │  ├─ ApcWrapper.php
│  │  │        │  ├─ ArrayLock.php
│  │  │        │  ├─ ArrayStore.php
│  │  │        │  ├─ CacheLock.php
│  │  │        │  ├─ CacheManager.php
│  │  │        │  ├─ CacheServiceProvider.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ CacheTableCommand.php
│  │  │        │  │  ├─ ClearCommand.php
│  │  │        │  │  ├─ ForgetCommand.php
│  │  │        │  │  ├─ PruneStaleTagsCommand.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     └─ cache.stub
│  │  │        │  ├─ DatabaseLock.php
│  │  │        │  ├─ DatabaseStore.php
│  │  │        │  ├─ DynamoDbLock.php
│  │  │        │  ├─ DynamoDbStore.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ CacheEvent.php
│  │  │        │  │  ├─ CacheFailedOver.php
│  │  │        │  │  ├─ CacheFlushed.php
│  │  │        │  │  ├─ CacheFlushFailed.php
│  │  │        │  │  ├─ CacheFlushing.php
│  │  │        │  │  ├─ CacheHit.php
│  │  │        │  │  ├─ CacheMissed.php
│  │  │        │  │  ├─ ForgettingKey.php
│  │  │        │  │  ├─ KeyForgetFailed.php
│  │  │        │  │  ├─ KeyForgotten.php
│  │  │        │  │  ├─ KeyWriteFailed.php
│  │  │        │  │  ├─ KeyWritten.php
│  │  │        │  │  ├─ RetrievingKey.php
│  │  │        │  │  ├─ RetrievingManyKeys.php
│  │  │        │  │  ├─ WritingKey.php
│  │  │        │  │  └─ WritingManyKeys.php
│  │  │        │  ├─ FailoverStore.php
│  │  │        │  ├─ FileLock.php
│  │  │        │  ├─ FileStore.php
│  │  │        │  ├─ HasCacheLock.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Lock.php
│  │  │        │  ├─ LuaScripts.php
│  │  │        │  ├─ MemcachedConnector.php
│  │  │        │  ├─ MemcachedLock.php
│  │  │        │  ├─ MemcachedStore.php
│  │  │        │  ├─ MemoizedStore.php
│  │  │        │  ├─ NoLock.php
│  │  │        │  ├─ NullStore.php
│  │  │        │  ├─ PhpRedisLock.php
│  │  │        │  ├─ RateLimiter.php
│  │  │        │  ├─ RateLimiting
│  │  │        │  │  ├─ GlobalLimit.php
│  │  │        │  │  ├─ Limit.php
│  │  │        │  │  └─ Unlimited.php
│  │  │        │  ├─ RedisLock.php
│  │  │        │  ├─ RedisStore.php
│  │  │        │  ├─ RedisTaggedCache.php
│  │  │        │  ├─ RedisTagSet.php
│  │  │        │  ├─ Repository.php
│  │  │        │  ├─ RetrievesMultipleKeys.php
│  │  │        │  ├─ SessionStore.php
│  │  │        │  ├─ TaggableStore.php
│  │  │        │  ├─ TaggedCache.php
│  │  │        │  └─ TagSet.php
│  │  │        ├─ Collections
│  │  │        │  ├─ Arr.php
│  │  │        │  ├─ Collection.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Enumerable.php
│  │  │        │  ├─ functions.php
│  │  │        │  ├─ helpers.php
│  │  │        │  ├─ HigherOrderCollectionProxy.php
│  │  │        │  ├─ ItemNotFoundException.php
│  │  │        │  ├─ LazyCollection.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ MultipleItemsFoundException.php
│  │  │        │  └─ Traits
│  │  │        │     ├─ EnumeratesValues.php
│  │  │        │     └─ TransformsToResourceCollection.php
│  │  │        ├─ Concurrency
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ ConcurrencyManager.php
│  │  │        │  ├─ ConcurrencyServiceProvider.php
│  │  │        │  ├─ Console
│  │  │        │  │  └─ InvokeSerializedClosureCommand.php
│  │  │        │  ├─ ForkDriver.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ ProcessDriver.php
│  │  │        │  └─ SyncDriver.php
│  │  │        ├─ Conditionable
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ HigherOrderWhenProxy.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  └─ Traits
│  │  │        │     └─ Conditionable.php
│  │  │        ├─ Config
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ LICENSE.md
│  │  │        │  └─ Repository.php
│  │  │        ├─ Console
│  │  │        │  ├─ Application.php
│  │  │        │  ├─ BufferedConsoleOutput.php
│  │  │        │  ├─ CacheCommandMutex.php
│  │  │        │  ├─ Command.php
│  │  │        │  ├─ CommandMutex.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Concerns
│  │  │        │  │  ├─ CallsCommands.php
│  │  │        │  │  ├─ ConfiguresPrompts.php
│  │  │        │  │  ├─ CreatesMatchingTest.php
│  │  │        │  │  ├─ HasParameters.php
│  │  │        │  │  ├─ InteractsWithIO.php
│  │  │        │  │  ├─ InteractsWithSignals.php
│  │  │        │  │  └─ PromptsForMissingInput.php
│  │  │        │  ├─ ConfirmableTrait.php
│  │  │        │  ├─ ContainerCommandLoader.php
│  │  │        │  ├─ Contracts
│  │  │        │  │  └─ NewLineAware.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ ArtisanStarting.php
│  │  │        │  │  ├─ CommandFinished.php
│  │  │        │  │  ├─ CommandStarting.php
│  │  │        │  │  ├─ ScheduledBackgroundTaskFinished.php
│  │  │        │  │  ├─ ScheduledTaskFailed.php
│  │  │        │  │  ├─ ScheduledTaskFinished.php
│  │  │        │  │  ├─ ScheduledTaskSkipped.php
│  │  │        │  │  └─ ScheduledTaskStarting.php
│  │  │        │  ├─ GeneratorCommand.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ ManuallyFailedException.php
│  │  │        │  ├─ MigrationGeneratorCommand.php
│  │  │        │  ├─ OutputStyle.php
│  │  │        │  ├─ Parser.php
│  │  │        │  ├─ Prohibitable.php
│  │  │        │  ├─ PromptValidationException.php
│  │  │        │  ├─ QuestionHelper.php
│  │  │        │  ├─ resources
│  │  │        │  │  └─ views
│  │  │        │  │     └─ components
│  │  │        │  │        ├─ alert.php
│  │  │        │  │        ├─ bullet-list.php
│  │  │        │  │        ├─ line.php
│  │  │        │  │        └─ two-column-detail.php
│  │  │        │  ├─ Scheduling
│  │  │        │  │  ├─ CacheAware.php
│  │  │        │  │  ├─ CacheEventMutex.php
│  │  │        │  │  ├─ CacheSchedulingMutex.php
│  │  │        │  │  ├─ CallbackEvent.php
│  │  │        │  │  ├─ CommandBuilder.php
│  │  │        │  │  ├─ Event.php
│  │  │        │  │  ├─ EventMutex.php
│  │  │        │  │  ├─ ManagesAttributes.php
│  │  │        │  │  ├─ ManagesFrequencies.php
│  │  │        │  │  ├─ PendingEventAttributes.php
│  │  │        │  │  ├─ Schedule.php
│  │  │        │  │  ├─ ScheduleClearCacheCommand.php
│  │  │        │  │  ├─ ScheduleFinishCommand.php
│  │  │        │  │  ├─ ScheduleInterruptCommand.php
│  │  │        │  │  ├─ ScheduleListCommand.php
│  │  │        │  │  ├─ ScheduleRunCommand.php
│  │  │        │  │  ├─ ScheduleTestCommand.php
│  │  │        │  │  ├─ ScheduleWorkCommand.php
│  │  │        │  │  └─ SchedulingMutex.php
│  │  │        │  ├─ Signals.php
│  │  │        │  └─ View
│  │  │        │     ├─ Components
│  │  │        │     │  ├─ Alert.php
│  │  │        │     │  ├─ Ask.php
│  │  │        │     │  ├─ AskWithCompletion.php
│  │  │        │     │  ├─ BulletList.php
│  │  │        │     │  ├─ Choice.php
│  │  │        │     │  ├─ Component.php
│  │  │        │     │  ├─ Confirm.php
│  │  │        │     │  ├─ Error.php
│  │  │        │     │  ├─ Factory.php
│  │  │        │     │  ├─ Info.php
│  │  │        │     │  ├─ Line.php
│  │  │        │     │  ├─ Mutators
│  │  │        │     │  │  ├─ EnsureDynamicContentIsHighlighted.php
│  │  │        │     │  │  ├─ EnsureNoPunctuation.php
│  │  │        │     │  │  ├─ EnsurePunctuation.php
│  │  │        │     │  │  └─ EnsureRelativePaths.php
│  │  │        │     │  ├─ Secret.php
│  │  │        │     │  ├─ Success.php
│  │  │        │     │  ├─ Task.php
│  │  │        │     │  ├─ TwoColumnDetail.php
│  │  │        │     │  └─ Warn.php
│  │  │        │     └─ TaskResult.php
│  │  │        ├─ Container
│  │  │        │  ├─ Attributes
│  │  │        │  │  ├─ Auth.php
│  │  │        │  │  ├─ Authenticated.php
│  │  │        │  │  ├─ Bind.php
│  │  │        │  │  ├─ Cache.php
│  │  │        │  │  ├─ Config.php
│  │  │        │  │  ├─ Context.php
│  │  │        │  │  ├─ CurrentUser.php
│  │  │        │  │  ├─ Database.php
│  │  │        │  │  ├─ DB.php
│  │  │        │  │  ├─ Give.php
│  │  │        │  │  ├─ Log.php
│  │  │        │  │  ├─ RouteParameter.php
│  │  │        │  │  ├─ Scoped.php
│  │  │        │  │  ├─ Singleton.php
│  │  │        │  │  ├─ Storage.php
│  │  │        │  │  └─ Tag.php
│  │  │        │  ├─ BoundMethod.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Container.php
│  │  │        │  ├─ ContextualBindingBuilder.php
│  │  │        │  ├─ EntryNotFoundException.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ RewindableGenerator.php
│  │  │        │  └─ Util.php
│  │  │        ├─ Contracts
│  │  │        │  ├─ Auth
│  │  │        │  │  ├─ Access
│  │  │        │  │  │  ├─ Authorizable.php
│  │  │        │  │  │  └─ Gate.php
│  │  │        │  │  ├─ Authenticatable.php
│  │  │        │  │  ├─ CanResetPassword.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ Guard.php
│  │  │        │  │  ├─ Middleware
│  │  │        │  │  │  └─ AuthenticatesRequests.php
│  │  │        │  │  ├─ MustVerifyEmail.php
│  │  │        │  │  ├─ PasswordBroker.php
│  │  │        │  │  ├─ PasswordBrokerFactory.php
│  │  │        │  │  ├─ StatefulGuard.php
│  │  │        │  │  ├─ SupportsBasicAuth.php
│  │  │        │  │  └─ UserProvider.php
│  │  │        │  ├─ Broadcasting
│  │  │        │  │  ├─ Broadcaster.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ HasBroadcastChannel.php
│  │  │        │  │  ├─ ShouldBeUnique.php
│  │  │        │  │  ├─ ShouldBroadcast.php
│  │  │        │  │  ├─ ShouldBroadcastNow.php
│  │  │        │  │  └─ ShouldRescue.php
│  │  │        │  ├─ Bus
│  │  │        │  │  ├─ Dispatcher.php
│  │  │        │  │  └─ QueueingDispatcher.php
│  │  │        │  ├─ Cache
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ Lock.php
│  │  │        │  │  ├─ LockProvider.php
│  │  │        │  │  ├─ LockTimeoutException.php
│  │  │        │  │  ├─ Repository.php
│  │  │        │  │  └─ Store.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Concurrency
│  │  │        │  │  └─ Driver.php
│  │  │        │  ├─ Config
│  │  │        │  │  └─ Repository.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ Application.php
│  │  │        │  │  ├─ Isolatable.php
│  │  │        │  │  ├─ Kernel.php
│  │  │        │  │  └─ PromptsForMissingInput.php
│  │  │        │  ├─ Container
│  │  │        │  │  ├─ BindingResolutionException.php
│  │  │        │  │  ├─ CircularDependencyException.php
│  │  │        │  │  ├─ Container.php
│  │  │        │  │  ├─ ContextualAttribute.php
│  │  │        │  │  ├─ ContextualBindingBuilder.php
│  │  │        │  │  └─ SelfBuilding.php
│  │  │        │  ├─ Cookie
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  └─ QueueingFactory.php
│  │  │        │  ├─ Database
│  │  │        │  │  ├─ ConcurrencyErrorDetector.php
│  │  │        │  │  ├─ Eloquent
│  │  │        │  │  │  ├─ Builder.php
│  │  │        │  │  │  ├─ Castable.php
│  │  │        │  │  │  ├─ CastsAttributes.php
│  │  │        │  │  │  ├─ CastsInboundAttributes.php
│  │  │        │  │  │  ├─ ComparesCastableAttributes.php
│  │  │        │  │  │  ├─ DeviatesCastableAttributes.php
│  │  │        │  │  │  ├─ SerializesCastableAttributes.php
│  │  │        │  │  │  └─ SupportsPartialRelations.php
│  │  │        │  │  ├─ Events
│  │  │        │  │  │  └─ MigrationEvent.php
│  │  │        │  │  ├─ LostConnectionDetector.php
│  │  │        │  │  ├─ ModelIdentifier.php
│  │  │        │  │  └─ Query
│  │  │        │  │     ├─ Builder.php
│  │  │        │  │     ├─ ConditionExpression.php
│  │  │        │  │     └─ Expression.php
│  │  │        │  ├─ Debug
│  │  │        │  │  ├─ ExceptionHandler.php
│  │  │        │  │  └─ ShouldntReport.php
│  │  │        │  ├─ Encryption
│  │  │        │  │  ├─ DecryptException.php
│  │  │        │  │  ├─ Encrypter.php
│  │  │        │  │  ├─ EncryptException.php
│  │  │        │  │  └─ StringEncrypter.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ Dispatcher.php
│  │  │        │  │  ├─ ShouldDispatchAfterCommit.php
│  │  │        │  │  └─ ShouldHandleEventsAfterCommit.php
│  │  │        │  ├─ Filesystem
│  │  │        │  │  ├─ Cloud.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ FileNotFoundException.php
│  │  │        │  │  ├─ Filesystem.php
│  │  │        │  │  └─ LockTimeoutException.php
│  │  │        │  ├─ Foundation
│  │  │        │  │  ├─ Application.php
│  │  │        │  │  ├─ CachesConfiguration.php
│  │  │        │  │  ├─ CachesRoutes.php
│  │  │        │  │  ├─ ExceptionRenderer.php
│  │  │        │  │  └─ MaintenanceMode.php
│  │  │        │  ├─ Hashing
│  │  │        │  │  └─ Hasher.php
│  │  │        │  ├─ Http
│  │  │        │  │  └─ Kernel.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Log
│  │  │        │  │  └─ ContextLogProcessor.php
│  │  │        │  ├─ Mail
│  │  │        │  │  ├─ Attachable.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ Mailable.php
│  │  │        │  │  ├─ Mailer.php
│  │  │        │  │  └─ MailQueue.php
│  │  │        │  ├─ Notifications
│  │  │        │  │  ├─ Dispatcher.php
│  │  │        │  │  └─ Factory.php
│  │  │        │  ├─ Pagination
│  │  │        │  │  ├─ CursorPaginator.php
│  │  │        │  │  ├─ LengthAwarePaginator.php
│  │  │        │  │  └─ Paginator.php
│  │  │        │  ├─ Pipeline
│  │  │        │  │  ├─ Hub.php
│  │  │        │  │  └─ Pipeline.php
│  │  │        │  ├─ Process
│  │  │        │  │  ├─ InvokedProcess.php
│  │  │        │  │  └─ ProcessResult.php
│  │  │        │  ├─ Queue
│  │  │        │  │  ├─ ClearableQueue.php
│  │  │        │  │  ├─ EntityNotFoundException.php
│  │  │        │  │  ├─ EntityResolver.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ Job.php
│  │  │        │  │  ├─ Monitor.php
│  │  │        │  │  ├─ Queue.php
│  │  │        │  │  ├─ QueueableCollection.php
│  │  │        │  │  ├─ QueueableEntity.php
│  │  │        │  │  ├─ ShouldBeEncrypted.php
│  │  │        │  │  ├─ ShouldBeUnique.php
│  │  │        │  │  ├─ ShouldBeUniqueUntilProcessing.php
│  │  │        │  │  ├─ ShouldQueue.php
│  │  │        │  │  └─ ShouldQueueAfterCommit.php
│  │  │        │  ├─ Redis
│  │  │        │  │  ├─ Connection.php
│  │  │        │  │  ├─ Connector.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  └─ LimiterTimeoutException.php
│  │  │        │  ├─ Routing
│  │  │        │  │  ├─ BindingRegistrar.php
│  │  │        │  │  ├─ Registrar.php
│  │  │        │  │  ├─ ResponseFactory.php
│  │  │        │  │  ├─ UrlGenerator.php
│  │  │        │  │  └─ UrlRoutable.php
│  │  │        │  ├─ Session
│  │  │        │  │  ├─ Middleware
│  │  │        │  │  │  └─ AuthenticatesSessions.php
│  │  │        │  │  └─ Session.php
│  │  │        │  ├─ Support
│  │  │        │  │  ├─ Arrayable.php
│  │  │        │  │  ├─ CanBeEscapedWhenCastToString.php
│  │  │        │  │  ├─ DeferrableProvider.php
│  │  │        │  │  ├─ DeferringDisplayableValue.php
│  │  │        │  │  ├─ HasOnceHash.php
│  │  │        │  │  ├─ Htmlable.php
│  │  │        │  │  ├─ Jsonable.php
│  │  │        │  │  ├─ MessageBag.php
│  │  │        │  │  ├─ MessageProvider.php
│  │  │        │  │  ├─ Renderable.php
│  │  │        │  │  ├─ Responsable.php
│  │  │        │  │  └─ ValidatedData.php
│  │  │        │  ├─ Translation
│  │  │        │  │  ├─ HasLocalePreference.php
│  │  │        │  │  ├─ Loader.php
│  │  │        │  │  └─ Translator.php
│  │  │        │  ├─ Validation
│  │  │        │  │  ├─ CompilableRules.php
│  │  │        │  │  ├─ DataAwareRule.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ ImplicitRule.php
│  │  │        │  │  ├─ InvokableRule.php
│  │  │        │  │  ├─ Rule.php
│  │  │        │  │  ├─ UncompromisedVerifier.php
│  │  │        │  │  ├─ ValidatesWhenResolved.php
│  │  │        │  │  ├─ ValidationRule.php
│  │  │        │  │  ├─ Validator.php
│  │  │        │  │  └─ ValidatorAwareRule.php
│  │  │        │  └─ View
│  │  │        │     ├─ Engine.php
│  │  │        │     ├─ Factory.php
│  │  │        │     ├─ View.php
│  │  │        │     └─ ViewCompilationException.php
│  │  │        ├─ Cookie
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ CookieJar.php
│  │  │        │  ├─ CookieServiceProvider.php
│  │  │        │  ├─ CookieValuePrefix.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  └─ Middleware
│  │  │        │     ├─ AddQueuedCookiesToResponse.php
│  │  │        │     └─ EncryptCookies.php
│  │  │        ├─ Database
│  │  │        │  ├─ Capsule
│  │  │        │  │  └─ Manager.php
│  │  │        │  ├─ ClassMorphViolationException.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Concerns
│  │  │        │  │  ├─ BuildsQueries.php
│  │  │        │  │  ├─ BuildsWhereDateClauses.php
│  │  │        │  │  ├─ CompilesJsonPaths.php
│  │  │        │  │  ├─ ExplainsQueries.php
│  │  │        │  │  ├─ ManagesTransactions.php
│  │  │        │  │  └─ ParsesSearchPath.php
│  │  │        │  ├─ ConcurrencyErrorDetector.php
│  │  │        │  ├─ ConfigurationUrlParser.php
│  │  │        │  ├─ Connection.php
│  │  │        │  ├─ ConnectionInterface.php
│  │  │        │  ├─ ConnectionResolver.php
│  │  │        │  ├─ ConnectionResolverInterface.php
│  │  │        │  ├─ Connectors
│  │  │        │  │  ├─ ConnectionFactory.php
│  │  │        │  │  ├─ Connector.php
│  │  │        │  │  ├─ ConnectorInterface.php
│  │  │        │  │  ├─ MariaDbConnector.php
│  │  │        │  │  ├─ MySqlConnector.php
│  │  │        │  │  ├─ PostgresConnector.php
│  │  │        │  │  ├─ SQLiteConnector.php
│  │  │        │  │  └─ SqlServerConnector.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ DatabaseInspectionCommand.php
│  │  │        │  │  ├─ DbCommand.php
│  │  │        │  │  ├─ DumpCommand.php
│  │  │        │  │  ├─ Factories
│  │  │        │  │  │  ├─ FactoryMakeCommand.php
│  │  │        │  │  │  └─ stubs
│  │  │        │  │  │     └─ factory.stub
│  │  │        │  │  ├─ Migrations
│  │  │        │  │  │  ├─ BaseCommand.php
│  │  │        │  │  │  ├─ FreshCommand.php
│  │  │        │  │  │  ├─ InstallCommand.php
│  │  │        │  │  │  ├─ MigrateCommand.php
│  │  │        │  │  │  ├─ MigrateMakeCommand.php
│  │  │        │  │  │  ├─ RefreshCommand.php
│  │  │        │  │  │  ├─ ResetCommand.php
│  │  │        │  │  │  ├─ RollbackCommand.php
│  │  │        │  │  │  ├─ StatusCommand.php
│  │  │        │  │  │  └─ TableGuesser.php
│  │  │        │  │  ├─ MonitorCommand.php
│  │  │        │  │  ├─ PruneCommand.php
│  │  │        │  │  ├─ Seeds
│  │  │        │  │  │  ├─ SeedCommand.php
│  │  │        │  │  │  ├─ SeederMakeCommand.php
│  │  │        │  │  │  ├─ stubs
│  │  │        │  │  │  │  └─ seeder.stub
│  │  │        │  │  │  └─ WithoutModelEvents.php
│  │  │        │  │  ├─ ShowCommand.php
│  │  │        │  │  ├─ ShowModelCommand.php
│  │  │        │  │  ├─ TableCommand.php
│  │  │        │  │  └─ WipeCommand.php
│  │  │        │  ├─ DatabaseManager.php
│  │  │        │  ├─ DatabaseServiceProvider.php
│  │  │        │  ├─ DatabaseTransactionRecord.php
│  │  │        │  ├─ DatabaseTransactionsManager.php
│  │  │        │  ├─ DeadlockException.php
│  │  │        │  ├─ DetectsConcurrencyErrors.php
│  │  │        │  ├─ DetectsLostConnections.php
│  │  │        │  ├─ Eloquent
│  │  │        │  │  ├─ Attributes
│  │  │        │  │  │  ├─ Boot.php
│  │  │        │  │  │  ├─ CollectedBy.php
│  │  │        │  │  │  ├─ Initialize.php
│  │  │        │  │  │  ├─ ObservedBy.php
│  │  │        │  │  │  ├─ Scope.php
│  │  │        │  │  │  ├─ ScopedBy.php
│  │  │        │  │  │  ├─ UseEloquentBuilder.php
│  │  │        │  │  │  ├─ UseFactory.php
│  │  │        │  │  │  ├─ UsePolicy.php
│  │  │        │  │  │  ├─ UseResource.php
│  │  │        │  │  │  └─ UseResourceCollection.php
│  │  │        │  │  ├─ BroadcastableModelEventOccurred.php
│  │  │        │  │  ├─ BroadcastsEvents.php
│  │  │        │  │  ├─ BroadcastsEventsAfterCommit.php
│  │  │        │  │  ├─ Builder.php
│  │  │        │  │  ├─ Casts
│  │  │        │  │  │  ├─ ArrayObject.php
│  │  │        │  │  │  ├─ AsArrayObject.php
│  │  │        │  │  │  ├─ AsCollection.php
│  │  │        │  │  │  ├─ AsEncryptedArrayObject.php
│  │  │        │  │  │  ├─ AsEncryptedCollection.php
│  │  │        │  │  │  ├─ AsEnumArrayObject.php
│  │  │        │  │  │  ├─ AsEnumCollection.php
│  │  │        │  │  │  ├─ AsFluent.php
│  │  │        │  │  │  ├─ AsHtmlString.php
│  │  │        │  │  │  ├─ AsStringable.php
│  │  │        │  │  │  ├─ AsUri.php
│  │  │        │  │  │  ├─ Attribute.php
│  │  │        │  │  │  └─ Json.php
│  │  │        │  │  ├─ Collection.php
│  │  │        │  │  ├─ Concerns
│  │  │        │  │  │  ├─ GuardsAttributes.php
│  │  │        │  │  │  ├─ HasAttributes.php
│  │  │        │  │  │  ├─ HasEvents.php
│  │  │        │  │  │  ├─ HasGlobalScopes.php
│  │  │        │  │  │  ├─ HasRelationships.php
│  │  │        │  │  │  ├─ HasTimestamps.php
│  │  │        │  │  │  ├─ HasUlids.php
│  │  │        │  │  │  ├─ HasUniqueIds.php
│  │  │        │  │  │  ├─ HasUniqueStringIds.php
│  │  │        │  │  │  ├─ HasUuids.php
│  │  │        │  │  │  ├─ HasVersion4Uuids.php
│  │  │        │  │  │  ├─ HidesAttributes.php
│  │  │        │  │  │  ├─ PreventsCircularRecursion.php
│  │  │        │  │  │  ├─ QueriesRelationships.php
│  │  │        │  │  │  └─ TransformsToResource.php
│  │  │        │  │  ├─ Factories
│  │  │        │  │  │  ├─ BelongsToManyRelationship.php
│  │  │        │  │  │  ├─ BelongsToRelationship.php
│  │  │        │  │  │  ├─ CrossJoinSequence.php
│  │  │        │  │  │  ├─ Factory.php
│  │  │        │  │  │  ├─ HasFactory.php
│  │  │        │  │  │  ├─ Relationship.php
│  │  │        │  │  │  └─ Sequence.php
│  │  │        │  │  ├─ HasBuilder.php
│  │  │        │  │  ├─ HasCollection.php
│  │  │        │  │  ├─ HigherOrderBuilderProxy.php
│  │  │        │  │  ├─ InvalidCastException.php
│  │  │        │  │  ├─ JsonEncodingException.php
│  │  │        │  │  ├─ MassAssignmentException.php
│  │  │        │  │  ├─ MassPrunable.php
│  │  │        │  │  ├─ MissingAttributeException.php
│  │  │        │  │  ├─ Model.php
│  │  │        │  │  ├─ ModelInspector.php
│  │  │        │  │  ├─ ModelNotFoundException.php
│  │  │        │  │  ├─ PendingHasThroughRelationship.php
│  │  │        │  │  ├─ Prunable.php
│  │  │        │  │  ├─ QueueEntityResolver.php
│  │  │        │  │  ├─ RelationNotFoundException.php
│  │  │        │  │  ├─ Relations
│  │  │        │  │  │  ├─ BelongsTo.php
│  │  │        │  │  │  ├─ BelongsToMany.php
│  │  │        │  │  │  ├─ Concerns
│  │  │        │  │  │  │  ├─ AsPivot.php
│  │  │        │  │  │  │  ├─ CanBeOneOfMany.php
│  │  │        │  │  │  │  ├─ ComparesRelatedModels.php
│  │  │        │  │  │  │  ├─ InteractsWithDictionary.php
│  │  │        │  │  │  │  ├─ InteractsWithPivotTable.php
│  │  │        │  │  │  │  ├─ SupportsDefaultModels.php
│  │  │        │  │  │  │  └─ SupportsInverseRelations.php
│  │  │        │  │  │  ├─ HasMany.php
│  │  │        │  │  │  ├─ HasManyThrough.php
│  │  │        │  │  │  ├─ HasOne.php
│  │  │        │  │  │  ├─ HasOneOrMany.php
│  │  │        │  │  │  ├─ HasOneOrManyThrough.php
│  │  │        │  │  │  ├─ HasOneThrough.php
│  │  │        │  │  │  ├─ MorphMany.php
│  │  │        │  │  │  ├─ MorphOne.php
│  │  │        │  │  │  ├─ MorphOneOrMany.php
│  │  │        │  │  │  ├─ MorphPivot.php
│  │  │        │  │  │  ├─ MorphTo.php
│  │  │        │  │  │  ├─ MorphToMany.php
│  │  │        │  │  │  ├─ Pivot.php
│  │  │        │  │  │  └─ Relation.php
│  │  │        │  │  ├─ Scope.php
│  │  │        │  │  ├─ SoftDeletes.php
│  │  │        │  │  └─ SoftDeletingScope.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ ConnectionEstablished.php
│  │  │        │  │  ├─ ConnectionEvent.php
│  │  │        │  │  ├─ DatabaseBusy.php
│  │  │        │  │  ├─ DatabaseRefreshed.php
│  │  │        │  │  ├─ MigrationEnded.php
│  │  │        │  │  ├─ MigrationEvent.php
│  │  │        │  │  ├─ MigrationsEnded.php
│  │  │        │  │  ├─ MigrationsEvent.php
│  │  │        │  │  ├─ MigrationsPruned.php
│  │  │        │  │  ├─ MigrationsStarted.php
│  │  │        │  │  ├─ MigrationStarted.php
│  │  │        │  │  ├─ ModelPruningFinished.php
│  │  │        │  │  ├─ ModelPruningStarting.php
│  │  │        │  │  ├─ ModelsPruned.php
│  │  │        │  │  ├─ NoPendingMigrations.php
│  │  │        │  │  ├─ QueryExecuted.php
│  │  │        │  │  ├─ SchemaDumped.php
│  │  │        │  │  ├─ SchemaLoaded.php
│  │  │        │  │  ├─ StatementPrepared.php
│  │  │        │  │  ├─ TransactionBeginning.php
│  │  │        │  │  ├─ TransactionCommitted.php
│  │  │        │  │  ├─ TransactionCommitting.php
│  │  │        │  │  └─ TransactionRolledBack.php
│  │  │        │  ├─ Grammar.php
│  │  │        │  ├─ LazyLoadingViolationException.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ LostConnectionDetector.php
│  │  │        │  ├─ LostConnectionException.php
│  │  │        │  ├─ MariaDbConnection.php
│  │  │        │  ├─ Migrations
│  │  │        │  │  ├─ DatabaseMigrationRepository.php
│  │  │        │  │  ├─ Migration.php
│  │  │        │  │  ├─ MigrationCreator.php
│  │  │        │  │  ├─ MigrationRepositoryInterface.php
│  │  │        │  │  ├─ MigrationResult.php
│  │  │        │  │  ├─ Migrator.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     ├─ migration.create.stub
│  │  │        │  │     ├─ migration.stub
│  │  │        │  │     └─ migration.update.stub
│  │  │        │  ├─ MigrationServiceProvider.php
│  │  │        │  ├─ MultipleColumnsSelectedException.php
│  │  │        │  ├─ MultipleRecordsFoundException.php
│  │  │        │  ├─ MySqlConnection.php
│  │  │        │  ├─ PostgresConnection.php
│  │  │        │  ├─ Query
│  │  │        │  │  ├─ Builder.php
│  │  │        │  │  ├─ Expression.php
│  │  │        │  │  ├─ Grammars
│  │  │        │  │  │  ├─ Grammar.php
│  │  │        │  │  │  ├─ MariaDbGrammar.php
│  │  │        │  │  │  ├─ MySqlGrammar.php
│  │  │        │  │  │  ├─ PostgresGrammar.php
│  │  │        │  │  │  ├─ SQLiteGrammar.php
│  │  │        │  │  │  └─ SqlServerGrammar.php
│  │  │        │  │  ├─ IndexHint.php
│  │  │        │  │  ├─ JoinClause.php
│  │  │        │  │  ├─ JoinLateralClause.php
│  │  │        │  │  └─ Processors
│  │  │        │  │     ├─ MariaDbProcessor.php
│  │  │        │  │     ├─ MySqlProcessor.php
│  │  │        │  │     ├─ PostgresProcessor.php
│  │  │        │  │     ├─ Processor.php
│  │  │        │  │     ├─ SQLiteProcessor.php
│  │  │        │  │     └─ SqlServerProcessor.php
│  │  │        │  ├─ QueryException.php
│  │  │        │  ├─ README.md
│  │  │        │  ├─ RecordNotFoundException.php
│  │  │        │  ├─ RecordsNotFoundException.php
│  │  │        │  ├─ Schema
│  │  │        │  │  ├─ Blueprint.php
│  │  │        │  │  ├─ BlueprintState.php
│  │  │        │  │  ├─ Builder.php
│  │  │        │  │  ├─ ColumnDefinition.php
│  │  │        │  │  ├─ ForeignIdColumnDefinition.php
│  │  │        │  │  ├─ ForeignKeyDefinition.php
│  │  │        │  │  ├─ Grammars
│  │  │        │  │  │  ├─ Grammar.php
│  │  │        │  │  │  ├─ MariaDbGrammar.php
│  │  │        │  │  │  ├─ MySqlGrammar.php
│  │  │        │  │  │  ├─ PostgresGrammar.php
│  │  │        │  │  │  ├─ SQLiteGrammar.php
│  │  │        │  │  │  └─ SqlServerGrammar.php
│  │  │        │  │  ├─ IndexDefinition.php
│  │  │        │  │  ├─ MariaDbBuilder.php
│  │  │        │  │  ├─ MariaDbSchemaState.php
│  │  │        │  │  ├─ MySqlBuilder.php
│  │  │        │  │  ├─ MySqlSchemaState.php
│  │  │        │  │  ├─ PostgresBuilder.php
│  │  │        │  │  ├─ PostgresSchemaState.php
│  │  │        │  │  ├─ SchemaState.php
│  │  │        │  │  ├─ SQLiteBuilder.php
│  │  │        │  │  ├─ SqliteSchemaState.php
│  │  │        │  │  └─ SqlServerBuilder.php
│  │  │        │  ├─ Seeder.php
│  │  │        │  ├─ SQLiteConnection.php
│  │  │        │  ├─ SQLiteDatabaseDoesNotExistException.php
│  │  │        │  ├─ SqlServerConnection.php
│  │  │        │  └─ UniqueConstraintViolationException.php
│  │  │        ├─ Encryption
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Encrypter.php
│  │  │        │  ├─ EncryptionServiceProvider.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  └─ MissingAppKeyException.php
│  │  │        ├─ Events
│  │  │        │  ├─ CallQueuedListener.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Dispatcher.php
│  │  │        │  ├─ EventServiceProvider.php
│  │  │        │  ├─ functions.php
│  │  │        │  ├─ InvokeQueuedClosure.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ NullDispatcher.php
│  │  │        │  └─ QueuedClosure.php
│  │  │        ├─ Filesystem
│  │  │        │  ├─ AwsS3V3Adapter.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Filesystem.php
│  │  │        │  ├─ FilesystemAdapter.php
│  │  │        │  ├─ FilesystemManager.php
│  │  │        │  ├─ FilesystemServiceProvider.php
│  │  │        │  ├─ functions.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ LocalFilesystemAdapter.php
│  │  │        │  ├─ LockableFile.php
│  │  │        │  └─ ServeFile.php
│  │  │        ├─ Foundation
│  │  │        │  ├─ AliasLoader.php
│  │  │        │  ├─ Application.php
│  │  │        │  ├─ Auth
│  │  │        │  │  ├─ Access
│  │  │        │  │  │  ├─ Authorizable.php
│  │  │        │  │  │  └─ AuthorizesRequests.php
│  │  │        │  │  ├─ EmailVerificationRequest.php
│  │  │        │  │  └─ User.php
│  │  │        │  ├─ Bootstrap
│  │  │        │  │  ├─ BootProviders.php
│  │  │        │  │  ├─ HandleExceptions.php
│  │  │        │  │  ├─ LoadConfiguration.php
│  │  │        │  │  ├─ LoadEnvironmentVariables.php
│  │  │        │  │  ├─ RegisterFacades.php
│  │  │        │  │  ├─ RegisterProviders.php
│  │  │        │  │  └─ SetRequestForConsole.php
│  │  │        │  ├─ Bus
│  │  │        │  │  ├─ Dispatchable.php
│  │  │        │  │  ├─ DispatchesJobs.php
│  │  │        │  │  ├─ PendingChain.php
│  │  │        │  │  ├─ PendingClosureDispatch.php
│  │  │        │  │  └─ PendingDispatch.php
│  │  │        │  ├─ CacheBasedMaintenanceMode.php
│  │  │        │  ├─ Cloud.php
│  │  │        │  ├─ ComposerScripts.php
│  │  │        │  ├─ Concerns
│  │  │        │  │  └─ ResolvesDumpSource.php
│  │  │        │  ├─ Configuration
│  │  │        │  │  ├─ ApplicationBuilder.php
│  │  │        │  │  ├─ Exceptions.php
│  │  │        │  │  └─ Middleware.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ AboutCommand.php
│  │  │        │  │  ├─ ApiInstallCommand.php
│  │  │        │  │  ├─ BroadcastingInstallCommand.php
│  │  │        │  │  ├─ CastMakeCommand.php
│  │  │        │  │  ├─ ChannelListCommand.php
│  │  │        │  │  ├─ ChannelMakeCommand.php
│  │  │        │  │  ├─ ClassMakeCommand.php
│  │  │        │  │  ├─ ClearCompiledCommand.php
│  │  │        │  │  ├─ CliDumper.php
│  │  │        │  │  ├─ ClosureCommand.php
│  │  │        │  │  ├─ ComponentMakeCommand.php
│  │  │        │  │  ├─ ConfigCacheCommand.php
│  │  │        │  │  ├─ ConfigClearCommand.php
│  │  │        │  │  ├─ ConfigMakeCommand.php
│  │  │        │  │  ├─ ConfigPublishCommand.php
│  │  │        │  │  ├─ ConfigShowCommand.php
│  │  │        │  │  ├─ ConsoleMakeCommand.php
│  │  │        │  │  ├─ DocsCommand.php
│  │  │        │  │  ├─ DownCommand.php
│  │  │        │  │  ├─ EnumMakeCommand.php
│  │  │        │  │  ├─ EnvironmentCommand.php
│  │  │        │  │  ├─ EnvironmentDecryptCommand.php
│  │  │        │  │  ├─ EnvironmentEncryptCommand.php
│  │  │        │  │  ├─ EventCacheCommand.php
│  │  │        │  │  ├─ EventClearCommand.php
│  │  │        │  │  ├─ EventGenerateCommand.php
│  │  │        │  │  ├─ EventListCommand.php
│  │  │        │  │  ├─ EventMakeCommand.php
│  │  │        │  │  ├─ ExceptionMakeCommand.php
│  │  │        │  │  ├─ InteractsWithComposerPackages.php
│  │  │        │  │  ├─ InterfaceMakeCommand.php
│  │  │        │  │  ├─ JobMakeCommand.php
│  │  │        │  │  ├─ JobMiddlewareMakeCommand.php
│  │  │        │  │  ├─ Kernel.php
│  │  │        │  │  ├─ KeyGenerateCommand.php
│  │  │        │  │  ├─ LangPublishCommand.php
│  │  │        │  │  ├─ ListenerMakeCommand.php
│  │  │        │  │  ├─ MailMakeCommand.php
│  │  │        │  │  ├─ ModelMakeCommand.php
│  │  │        │  │  ├─ NotificationMakeCommand.php
│  │  │        │  │  ├─ ObserverMakeCommand.php
│  │  │        │  │  ├─ OptimizeClearCommand.php
│  │  │        │  │  ├─ OptimizeCommand.php
│  │  │        │  │  ├─ PackageDiscoverCommand.php
│  │  │        │  │  ├─ PolicyMakeCommand.php
│  │  │        │  │  ├─ ProviderMakeCommand.php
│  │  │        │  │  ├─ QueuedCommand.php
│  │  │        │  │  ├─ RequestMakeCommand.php
│  │  │        │  │  ├─ ResourceMakeCommand.php
│  │  │        │  │  ├─ RouteCacheCommand.php
│  │  │        │  │  ├─ RouteClearCommand.php
│  │  │        │  │  ├─ RouteListCommand.php
│  │  │        │  │  ├─ RuleMakeCommand.php
│  │  │        │  │  ├─ ScopeMakeCommand.php
│  │  │        │  │  ├─ ServeCommand.php
│  │  │        │  │  ├─ StorageLinkCommand.php
│  │  │        │  │  ├─ StorageUnlinkCommand.php
│  │  │        │  │  ├─ StubPublishCommand.php
│  │  │        │  │  ├─ stubs
│  │  │        │  │  │  ├─ api-routes.stub
│  │  │        │  │  │  ├─ broadcasting-routes.stub
│  │  │        │  │  │  ├─ cast.inbound.stub
│  │  │        │  │  │  ├─ cast.stub
│  │  │        │  │  │  ├─ channel.stub
│  │  │        │  │  │  ├─ class.invokable.stub
│  │  │        │  │  │  ├─ class.stub
│  │  │        │  │  │  ├─ config.stub
│  │  │        │  │  │  ├─ console.stub
│  │  │        │  │  │  ├─ echo-bootstrap-js.stub
│  │  │        │  │  │  ├─ echo-js-ably.stub
│  │  │        │  │  │  ├─ echo-js-pusher.stub
│  │  │        │  │  │  ├─ echo-js-reverb.stub
│  │  │        │  │  │  ├─ enum.backed.stub
│  │  │        │  │  │  ├─ enum.stub
│  │  │        │  │  │  ├─ event.stub
│  │  │        │  │  │  ├─ exception-render-report.stub
│  │  │        │  │  │  ├─ exception-render.stub
│  │  │        │  │  │  ├─ exception-report.stub
│  │  │        │  │  │  ├─ exception.stub
│  │  │        │  │  │  ├─ interface.stub
│  │  │        │  │  │  ├─ job.batched.queued.stub
│  │  │        │  │  │  ├─ job.middleware.stub
│  │  │        │  │  │  ├─ job.queued.stub
│  │  │        │  │  │  ├─ job.stub
│  │  │        │  │  │  ├─ listener.queued.stub
│  │  │        │  │  │  ├─ listener.stub
│  │  │        │  │  │  ├─ listener.typed.queued.stub
│  │  │        │  │  │  ├─ listener.typed.stub
│  │  │        │  │  │  ├─ mail.stub
│  │  │        │  │  │  ├─ maintenance-mode.stub
│  │  │        │  │  │  ├─ markdown-mail.stub
│  │  │        │  │  │  ├─ markdown-notification.stub
│  │  │        │  │  │  ├─ markdown.stub
│  │  │        │  │  │  ├─ model.morph-pivot.stub
│  │  │        │  │  │  ├─ model.pivot.stub
│  │  │        │  │  │  ├─ model.stub
│  │  │        │  │  │  ├─ notification.stub
│  │  │        │  │  │  ├─ observer.plain.stub
│  │  │        │  │  │  ├─ observer.stub
│  │  │        │  │  │  ├─ pest.stub
│  │  │        │  │  │  ├─ pest.unit.stub
│  │  │        │  │  │  ├─ policy.plain.stub
│  │  │        │  │  │  ├─ policy.stub
│  │  │        │  │  │  ├─ provider.stub
│  │  │        │  │  │  ├─ request.stub
│  │  │        │  │  │  ├─ resource-collection.stub
│  │  │        │  │  │  ├─ resource.stub
│  │  │        │  │  │  ├─ routes.stub
│  │  │        │  │  │  ├─ rule.implicit.stub
│  │  │        │  │  │  ├─ rule.stub
│  │  │        │  │  │  ├─ scope.stub
│  │  │        │  │  │  ├─ test.stub
│  │  │        │  │  │  ├─ test.unit.stub
│  │  │        │  │  │  ├─ trait.stub
│  │  │        │  │  │  ├─ view-component.stub
│  │  │        │  │  │  ├─ view-mail.stub
│  │  │        │  │  │  ├─ view.pest.stub
│  │  │        │  │  │  ├─ view.stub
│  │  │        │  │  │  └─ view.test.stub
│  │  │        │  │  ├─ TestMakeCommand.php
│  │  │        │  │  ├─ TraitMakeCommand.php
│  │  │        │  │  ├─ UpCommand.php
│  │  │        │  │  ├─ VendorPublishCommand.php
│  │  │        │  │  ├─ ViewCacheCommand.php
│  │  │        │  │  ├─ ViewClearCommand.php
│  │  │        │  │  └─ ViewMakeCommand.php
│  │  │        │  ├─ EnvironmentDetector.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ DiagnosingHealth.php
│  │  │        │  │  ├─ DiscoverEvents.php
│  │  │        │  │  ├─ Dispatchable.php
│  │  │        │  │  ├─ LocaleUpdated.php
│  │  │        │  │  ├─ MaintenanceModeDisabled.php
│  │  │        │  │  ├─ MaintenanceModeEnabled.php
│  │  │        │  │  ├─ PublishingStubs.php
│  │  │        │  │  ├─ Terminating.php
│  │  │        │  │  └─ VendorTagPublished.php
│  │  │        │  ├─ Exceptions
│  │  │        │  │  ├─ Handler.php
│  │  │        │  │  ├─ RegisterErrorViewPaths.php
│  │  │        │  │  ├─ Renderer
│  │  │        │  │  │  ├─ Exception.php
│  │  │        │  │  │  ├─ Frame.php
│  │  │        │  │  │  ├─ Listener.php
│  │  │        │  │  │  ├─ Mappers
│  │  │        │  │  │  │  └─ BladeMapper.php
│  │  │        │  │  │  └─ Renderer.php
│  │  │        │  │  ├─ ReportableHandler.php
│  │  │        │  │  ├─ views
│  │  │        │  │  │  ├─ 401.blade.php
│  │  │        │  │  │  ├─ 402.blade.php
│  │  │        │  │  │  ├─ 403.blade.php
│  │  │        │  │  │  ├─ 404.blade.php
│  │  │        │  │  │  ├─ 419.blade.php
│  │  │        │  │  │  ├─ 429.blade.php
│  │  │        │  │  │  ├─ 500.blade.php
│  │  │        │  │  │  ├─ 503.blade.php
│  │  │        │  │  │  ├─ layout.blade.php
│  │  │        │  │  │  └─ minimal.blade.php
│  │  │        │  │  └─ Whoops
│  │  │        │  │     ├─ WhoopsExceptionRenderer.php
│  │  │        │  │     └─ WhoopsHandler.php
│  │  │        │  ├─ FileBasedMaintenanceMode.php
│  │  │        │  ├─ helpers.php
│  │  │        │  ├─ Http
│  │  │        │  │  ├─ Events
│  │  │        │  │  │  └─ RequestHandled.php
│  │  │        │  │  ├─ FormRequest.php
│  │  │        │  │  ├─ HtmlDumper.php
│  │  │        │  │  ├─ Kernel.php
│  │  │        │  │  ├─ MaintenanceModeBypassCookie.php
│  │  │        │  │  └─ Middleware
│  │  │        │  │     ├─ CheckForMaintenanceMode.php
│  │  │        │  │     ├─ Concerns
│  │  │        │  │     │  └─ ExcludesPaths.php
│  │  │        │  │     ├─ ConvertEmptyStringsToNull.php
│  │  │        │  │     ├─ HandlePrecognitiveRequests.php
│  │  │        │  │     ├─ InvokeDeferredCallbacks.php
│  │  │        │  │     ├─ PreventRequestsDuringMaintenance.php
│  │  │        │  │     ├─ TransformsRequest.php
│  │  │        │  │     ├─ TrimStrings.php
│  │  │        │  │     ├─ ValidateCsrfToken.php
│  │  │        │  │     ├─ ValidatePostSize.php
│  │  │        │  │     └─ VerifyCsrfToken.php
│  │  │        │  ├─ Inspiring.php
│  │  │        │  ├─ MaintenanceModeManager.php
│  │  │        │  ├─ Mix.php
│  │  │        │  ├─ MixFileNotFoundException.php
│  │  │        │  ├─ MixManifestNotFoundException.php
│  │  │        │  ├─ PackageManifest.php
│  │  │        │  ├─ Precognition.php
│  │  │        │  ├─ ProviderRepository.php
│  │  │        │  ├─ Providers
│  │  │        │  │  ├─ ArtisanServiceProvider.php
│  │  │        │  │  ├─ ComposerServiceProvider.php
│  │  │        │  │  ├─ ConsoleSupportServiceProvider.php
│  │  │        │  │  ├─ FormRequestServiceProvider.php
│  │  │        │  │  └─ FoundationServiceProvider.php
│  │  │        │  ├─ Queue
│  │  │        │  │  ├─ InteractsWithUniqueJobs.php
│  │  │        │  │  └─ Queueable.php
│  │  │        │  ├─ resources
│  │  │        │  │  ├─ exceptions
│  │  │        │  │  │  └─ renderer
│  │  │        │  │  │     ├─ components
│  │  │        │  │  │     │  ├─ badge.blade.php
│  │  │        │  │  │     │  ├─ empty-state.blade.php
│  │  │        │  │  │     │  ├─ file-with-line.blade.php
│  │  │        │  │  │     │  ├─ formatted-source.blade.php
│  │  │        │  │  │     │  ├─ frame-code.blade.php
│  │  │        │  │  │     │  ├─ frame.blade.php
│  │  │        │  │  │     │  ├─ header.blade.php
│  │  │        │  │  │     │  ├─ http-method.blade.php
│  │  │        │  │  │     │  ├─ icons
│  │  │        │  │  │     │  │  ├─ alert.blade.php
│  │  │        │  │  │     │  │  ├─ check.blade.php
│  │  │        │  │  │     │  │  ├─ chevron-left.blade.php
│  │  │        │  │  │     │  │  ├─ chevron-right.blade.php
│  │  │        │  │  │     │  │  ├─ chevrons-down-up.blade.php
│  │  │        │  │  │     │  │  ├─ chevrons-left.blade.php
│  │  │        │  │  │     │  │  ├─ chevrons-right.blade.php
│  │  │        │  │  │     │  │  ├─ chevrons-up-down.blade.php
│  │  │        │  │  │     │  │  ├─ copy.blade.php
│  │  │        │  │  │     │  │  ├─ database.blade.php
│  │  │        │  │  │     │  │  ├─ folder-open.blade.php
│  │  │        │  │  │     │  │  ├─ folder.blade.php
│  │  │        │  │  │     │  │  ├─ globe.blade.php
│  │  │        │  │  │     │  │  ├─ info.blade.php
│  │  │        │  │  │     │  │  └─ laravel-ascii.blade.php
│  │  │        │  │  │     │  ├─ laravel-ascii-spotlight.blade.php
│  │  │        │  │  │     │  ├─ layout.blade.php
│  │  │        │  │  │     │  ├─ query.blade.php
│  │  │        │  │  │     │  ├─ request-body.blade.php
│  │  │        │  │  │     │  ├─ request-header.blade.php
│  │  │        │  │  │     │  ├─ request-url.blade.php
│  │  │        │  │  │     │  ├─ routing-parameter.blade.php
│  │  │        │  │  │     │  ├─ routing.blade.php
│  │  │        │  │  │     │  ├─ section-container.blade.php
│  │  │        │  │  │     │  ├─ separator.blade.php
│  │  │        │  │  │     │  ├─ syntax-highlight.blade.php
│  │  │        │  │  │     │  ├─ topbar.blade.php
│  │  │        │  │  │     │  ├─ trace.blade.php
│  │  │        │  │  │     │  ├─ vendor-frame.blade.php
│  │  │        │  │  │     │  └─ vendor-frames.blade.php
│  │  │        │  │  │     ├─ dist
│  │  │        │  │  │     │  ├─ scripts.js
│  │  │        │  │  │     │  └─ styles.css
│  │  │        │  │  │     ├─ markdown.blade.php
│  │  │        │  │  │     ├─ package-lock.json
│  │  │        │  │  │     ├─ package.json
│  │  │        │  │  │     ├─ scripts.js
│  │  │        │  │  │     ├─ show.blade.php
│  │  │        │  │  │     ├─ styles.css
│  │  │        │  │  │     └─ vite.config.js
│  │  │        │  │  ├─ health-up.blade.php
│  │  │        │  │  └─ server.php
│  │  │        │  ├─ Routing
│  │  │        │  │  ├─ PrecognitionCallableDispatcher.php
│  │  │        │  │  └─ PrecognitionControllerDispatcher.php
│  │  │        │  ├─ stubs
│  │  │        │  │  └─ facade.stub
│  │  │        │  ├─ Support
│  │  │        │  │  └─ Providers
│  │  │        │  │     ├─ AuthServiceProvider.php
│  │  │        │  │     ├─ EventServiceProvider.php
│  │  │        │  │     └─ RouteServiceProvider.php
│  │  │        │  ├─ Testing
│  │  │        │  │  ├─ Concerns
│  │  │        │  │  │  ├─ InteractsWithAuthentication.php
│  │  │        │  │  │  ├─ InteractsWithConsole.php
│  │  │        │  │  │  ├─ InteractsWithContainer.php
│  │  │        │  │  │  ├─ InteractsWithDatabase.php
│  │  │        │  │  │  ├─ InteractsWithDeprecationHandling.php
│  │  │        │  │  │  ├─ InteractsWithExceptionHandling.php
│  │  │        │  │  │  ├─ InteractsWithRedis.php
│  │  │        │  │  │  ├─ InteractsWithSession.php
│  │  │        │  │  │  ├─ InteractsWithTestCaseLifecycle.php
│  │  │        │  │  │  ├─ InteractsWithTime.php
│  │  │        │  │  │  ├─ InteractsWithViews.php
│  │  │        │  │  │  ├─ MakesHttpRequests.php
│  │  │        │  │  │  └─ WithoutExceptionHandlingHandler.php
│  │  │        │  │  ├─ DatabaseMigrations.php
│  │  │        │  │  ├─ DatabaseTransactions.php
│  │  │        │  │  ├─ DatabaseTransactionsManager.php
│  │  │        │  │  ├─ DatabaseTruncation.php
│  │  │        │  │  ├─ LazilyRefreshDatabase.php
│  │  │        │  │  ├─ RefreshDatabase.php
│  │  │        │  │  ├─ RefreshDatabaseState.php
│  │  │        │  │  ├─ TestCase.php
│  │  │        │  │  ├─ Traits
│  │  │        │  │  │  └─ CanConfigureMigrationCommands.php
│  │  │        │  │  ├─ WithConsoleEvents.php
│  │  │        │  │  ├─ WithFaker.php
│  │  │        │  │  ├─ WithoutMiddleware.php
│  │  │        │  │  └─ Wormhole.php
│  │  │        │  ├─ Validation
│  │  │        │  │  └─ ValidatesRequests.php
│  │  │        │  ├─ Vite.php
│  │  │        │  ├─ ViteException.php
│  │  │        │  └─ ViteManifestNotFoundException.php
│  │  │        ├─ Hashing
│  │  │        │  ├─ AbstractHasher.php
│  │  │        │  ├─ Argon2IdHasher.php
│  │  │        │  ├─ ArgonHasher.php
│  │  │        │  ├─ BcryptHasher.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ HashManager.php
│  │  │        │  ├─ HashServiceProvider.php
│  │  │        │  └─ LICENSE.md
│  │  │        ├─ Http
│  │  │        │  ├─ Client
│  │  │        │  │  ├─ Batch.php
│  │  │        │  │  ├─ BatchInProgressException.php
│  │  │        │  │  ├─ Concerns
│  │  │        │  │  │  └─ DeterminesStatusCode.php
│  │  │        │  │  ├─ ConnectionException.php
│  │  │        │  │  ├─ Events
│  │  │        │  │  │  ├─ ConnectionFailed.php
│  │  │        │  │  │  ├─ RequestSending.php
│  │  │        │  │  │  └─ ResponseReceived.php
│  │  │        │  │  ├─ Factory.php
│  │  │        │  │  ├─ HttpClientException.php
│  │  │        │  │  ├─ PendingRequest.php
│  │  │        │  │  ├─ Pool.php
│  │  │        │  │  ├─ Request.php
│  │  │        │  │  ├─ RequestException.php
│  │  │        │  │  ├─ Response.php
│  │  │        │  │  ├─ ResponseSequence.php
│  │  │        │  │  └─ StrayRequestException.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Concerns
│  │  │        │  │  ├─ CanBePrecognitive.php
│  │  │        │  │  ├─ InteractsWithContentTypes.php
│  │  │        │  │  ├─ InteractsWithFlashData.php
│  │  │        │  │  └─ InteractsWithInput.php
│  │  │        │  ├─ Exceptions
│  │  │        │  │  ├─ HttpResponseException.php
│  │  │        │  │  ├─ MalformedUrlException.php
│  │  │        │  │  ├─ PostTooLargeException.php
│  │  │        │  │  └─ ThrottleRequestsException.php
│  │  │        │  ├─ File.php
│  │  │        │  ├─ FileHelpers.php
│  │  │        │  ├─ JsonResponse.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Middleware
│  │  │        │  │  ├─ AddLinkHeadersForPreloadedAssets.php
│  │  │        │  │  ├─ CheckResponseForModifications.php
│  │  │        │  │  ├─ FrameGuard.php
│  │  │        │  │  ├─ HandleCors.php
│  │  │        │  │  ├─ SetCacheHeaders.php
│  │  │        │  │  ├─ TrustHosts.php
│  │  │        │  │  ├─ TrustProxies.php
│  │  │        │  │  ├─ ValidatePathEncoding.php
│  │  │        │  │  └─ ValidatePostSize.php
│  │  │        │  ├─ RedirectResponse.php
│  │  │        │  ├─ Request.php
│  │  │        │  ├─ Resources
│  │  │        │  │  ├─ CollectsResources.php
│  │  │        │  │  ├─ ConditionallyLoadsAttributes.php
│  │  │        │  │  ├─ DelegatesToResource.php
│  │  │        │  │  ├─ Json
│  │  │        │  │  │  ├─ AnonymousResourceCollection.php
│  │  │        │  │  │  ├─ JsonResource.php
│  │  │        │  │  │  ├─ PaginatedResourceResponse.php
│  │  │        │  │  │  ├─ ResourceCollection.php
│  │  │        │  │  │  └─ ResourceResponse.php
│  │  │        │  │  ├─ MergeValue.php
│  │  │        │  │  ├─ MissingValue.php
│  │  │        │  │  └─ PotentiallyMissing.php
│  │  │        │  ├─ Response.php
│  │  │        │  ├─ ResponseTrait.php
│  │  │        │  ├─ StreamedEvent.php
│  │  │        │  ├─ Testing
│  │  │        │  │  ├─ File.php
│  │  │        │  │  ├─ FileFactory.php
│  │  │        │  │  └─ MimeType.php
│  │  │        │  └─ UploadedFile.php
│  │  │        ├─ JsonSchema
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ JsonSchema.php
│  │  │        │  ├─ JsonSchemaTypeFactory.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Serializer.php
│  │  │        │  └─ Types
│  │  │        │     ├─ ArrayType.php
│  │  │        │     ├─ BooleanType.php
│  │  │        │     ├─ IntegerType.php
│  │  │        │     ├─ NumberType.php
│  │  │        │     ├─ ObjectType.php
│  │  │        │     ├─ StringType.php
│  │  │        │     └─ Type.php
│  │  │        ├─ Log
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Context
│  │  │        │  │  ├─ ContextLogProcessor.php
│  │  │        │  │  ├─ ContextServiceProvider.php
│  │  │        │  │  ├─ Events
│  │  │        │  │  │  ├─ ContextDehydrating.php
│  │  │        │  │  │  └─ ContextHydrated.php
│  │  │        │  │  └─ Repository.php
│  │  │        │  ├─ Events
│  │  │        │  │  └─ MessageLogged.php
│  │  │        │  ├─ functions.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Logger.php
│  │  │        │  ├─ LogManager.php
│  │  │        │  ├─ LogServiceProvider.php
│  │  │        │  └─ ParsesLogConfiguration.php
│  │  │        ├─ Macroable
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ LICENSE.md
│  │  │        │  └─ Traits
│  │  │        │     └─ Macroable.php
│  │  │        ├─ Mail
│  │  │        │  ├─ Attachment.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ MessageSending.php
│  │  │        │  │  └─ MessageSent.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Mailable.php
│  │  │        │  ├─ Mailables
│  │  │        │  │  ├─ Address.php
│  │  │        │  │  ├─ Attachment.php
│  │  │        │  │  ├─ Content.php
│  │  │        │  │  ├─ Envelope.php
│  │  │        │  │  └─ Headers.php
│  │  │        │  ├─ Mailer.php
│  │  │        │  ├─ MailManager.php
│  │  │        │  ├─ MailServiceProvider.php
│  │  │        │  ├─ Markdown.php
│  │  │        │  ├─ Message.php
│  │  │        │  ├─ PendingMail.php
│  │  │        │  ├─ resources
│  │  │        │  │  └─ views
│  │  │        │  │     ├─ html
│  │  │        │  │     │  ├─ button.blade.php
│  │  │        │  │     │  ├─ footer.blade.php
│  │  │        │  │     │  ├─ header.blade.php
│  │  │        │  │     │  ├─ layout.blade.php
│  │  │        │  │     │  ├─ message.blade.php
│  │  │        │  │     │  ├─ panel.blade.php
│  │  │        │  │     │  ├─ subcopy.blade.php
│  │  │        │  │     │  ├─ table.blade.php
│  │  │        │  │     │  └─ themes
│  │  │        │  │     │     └─ default.css
│  │  │        │  │     └─ text
│  │  │        │  │        ├─ button.blade.php
│  │  │        │  │        ├─ footer.blade.php
│  │  │        │  │        ├─ header.blade.php
│  │  │        │  │        ├─ layout.blade.php
│  │  │        │  │        ├─ message.blade.php
│  │  │        │  │        ├─ panel.blade.php
│  │  │        │  │        ├─ subcopy.blade.php
│  │  │        │  │        └─ table.blade.php
│  │  │        │  ├─ SendQueuedMailable.php
│  │  │        │  ├─ SentMessage.php
│  │  │        │  ├─ TextMessage.php
│  │  │        │  └─ Transport
│  │  │        │     ├─ ArrayTransport.php
│  │  │        │     ├─ LogTransport.php
│  │  │        │     ├─ ResendTransport.php
│  │  │        │     ├─ SesTransport.php
│  │  │        │     └─ SesV2Transport.php
│  │  │        ├─ Notifications
│  │  │        │  ├─ Action.php
│  │  │        │  ├─ AnonymousNotifiable.php
│  │  │        │  ├─ ChannelManager.php
│  │  │        │  ├─ Channels
│  │  │        │  │  ├─ BroadcastChannel.php
│  │  │        │  │  ├─ DatabaseChannel.php
│  │  │        │  │  └─ MailChannel.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ NotificationTableCommand.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     └─ notifications.stub
│  │  │        │  ├─ DatabaseNotification.php
│  │  │        │  ├─ DatabaseNotificationCollection.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ BroadcastNotificationCreated.php
│  │  │        │  │  ├─ NotificationFailed.php
│  │  │        │  │  ├─ NotificationSending.php
│  │  │        │  │  └─ NotificationSent.php
│  │  │        │  ├─ HasDatabaseNotifications.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Messages
│  │  │        │  │  ├─ BroadcastMessage.php
│  │  │        │  │  ├─ DatabaseMessage.php
│  │  │        │  │  ├─ MailMessage.php
│  │  │        │  │  └─ SimpleMessage.php
│  │  │        │  ├─ Notifiable.php
│  │  │        │  ├─ Notification.php
│  │  │        │  ├─ NotificationSender.php
│  │  │        │  ├─ NotificationServiceProvider.php
│  │  │        │  ├─ resources
│  │  │        │  │  └─ views
│  │  │        │  │     └─ email.blade.php
│  │  │        │  ├─ RoutesNotifications.php
│  │  │        │  └─ SendQueuedNotifications.php
│  │  │        ├─ Pagination
│  │  │        │  ├─ AbstractCursorPaginator.php
│  │  │        │  ├─ AbstractPaginator.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Cursor.php
│  │  │        │  ├─ CursorPaginator.php
│  │  │        │  ├─ LengthAwarePaginator.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ PaginationServiceProvider.php
│  │  │        │  ├─ PaginationState.php
│  │  │        │  ├─ Paginator.php
│  │  │        │  ├─ resources
│  │  │        │  │  └─ views
│  │  │        │  │     ├─ bootstrap-4.blade.php
│  │  │        │  │     ├─ bootstrap-5.blade.php
│  │  │        │  │     ├─ default.blade.php
│  │  │        │  │     ├─ semantic-ui.blade.php
│  │  │        │  │     ├─ simple-bootstrap-4.blade.php
│  │  │        │  │     ├─ simple-bootstrap-5.blade.php
│  │  │        │  │     ├─ simple-default.blade.php
│  │  │        │  │     ├─ simple-tailwind.blade.php
│  │  │        │  │     └─ tailwind.blade.php
│  │  │        │  └─ UrlWindow.php
│  │  │        ├─ Pipeline
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Hub.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Pipeline.php
│  │  │        │  └─ PipelineServiceProvider.php
│  │  │        ├─ Process
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Exceptions
│  │  │        │  │  ├─ ProcessFailedException.php
│  │  │        │  │  └─ ProcessTimedOutException.php
│  │  │        │  ├─ Factory.php
│  │  │        │  ├─ FakeInvokedProcess.php
│  │  │        │  ├─ FakeProcessDescription.php
│  │  │        │  ├─ FakeProcessResult.php
│  │  │        │  ├─ FakeProcessSequence.php
│  │  │        │  ├─ InvokedProcess.php
│  │  │        │  ├─ InvokedProcessPool.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ PendingProcess.php
│  │  │        │  ├─ Pipe.php
│  │  │        │  ├─ Pool.php
│  │  │        │  ├─ ProcessPoolResults.php
│  │  │        │  └─ ProcessResult.php
│  │  │        ├─ Queue
│  │  │        │  ├─ Attributes
│  │  │        │  │  ├─ DeleteWhenMissingModels.php
│  │  │        │  │  └─ WithoutRelations.php
│  │  │        │  ├─ BeanstalkdQueue.php
│  │  │        │  ├─ CallQueuedClosure.php
│  │  │        │  ├─ CallQueuedHandler.php
│  │  │        │  ├─ Capsule
│  │  │        │  │  └─ Manager.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Connectors
│  │  │        │  │  ├─ BeanstalkdConnector.php
│  │  │        │  │  ├─ ConnectorInterface.php
│  │  │        │  │  ├─ DatabaseConnector.php
│  │  │        │  │  ├─ DeferredConnector.php
│  │  │        │  │  ├─ FailoverConnector.php
│  │  │        │  │  ├─ NullConnector.php
│  │  │        │  │  ├─ RedisConnector.php
│  │  │        │  │  ├─ SqsConnector.php
│  │  │        │  │  └─ SyncConnector.php
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ BatchesTableCommand.php
│  │  │        │  │  ├─ ClearCommand.php
│  │  │        │  │  ├─ FailedTableCommand.php
│  │  │        │  │  ├─ FlushFailedCommand.php
│  │  │        │  │  ├─ ForgetFailedCommand.php
│  │  │        │  │  ├─ ListenCommand.php
│  │  │        │  │  ├─ ListFailedCommand.php
│  │  │        │  │  ├─ MonitorCommand.php
│  │  │        │  │  ├─ PruneBatchesCommand.php
│  │  │        │  │  ├─ PruneFailedJobsCommand.php
│  │  │        │  │  ├─ RestartCommand.php
│  │  │        │  │  ├─ RetryBatchCommand.php
│  │  │        │  │  ├─ RetryCommand.php
│  │  │        │  │  ├─ stubs
│  │  │        │  │  │  ├─ batches.stub
│  │  │        │  │  │  ├─ failed_jobs.stub
│  │  │        │  │  │  └─ jobs.stub
│  │  │        │  │  ├─ TableCommand.php
│  │  │        │  │  └─ WorkCommand.php
│  │  │        │  ├─ DatabaseQueue.php
│  │  │        │  ├─ DeferredQueue.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ JobAttempted.php
│  │  │        │  │  ├─ JobExceptionOccurred.php
│  │  │        │  │  ├─ JobFailed.php
│  │  │        │  │  ├─ JobPopped.php
│  │  │        │  │  ├─ JobPopping.php
│  │  │        │  │  ├─ JobProcessed.php
│  │  │        │  │  ├─ JobProcessing.php
│  │  │        │  │  ├─ JobQueued.php
│  │  │        │  │  ├─ JobQueueing.php
│  │  │        │  │  ├─ JobReleasedAfterException.php
│  │  │        │  │  ├─ JobRetryRequested.php
│  │  │        │  │  ├─ JobTimedOut.php
│  │  │        │  │  ├─ Looping.php
│  │  │        │  │  ├─ QueueBusy.php
│  │  │        │  │  ├─ QueueFailedOver.php
│  │  │        │  │  ├─ WorkerStarting.php
│  │  │        │  │  └─ WorkerStopping.php
│  │  │        │  ├─ Failed
│  │  │        │  │  ├─ CountableFailedJobProvider.php
│  │  │        │  │  ├─ DatabaseFailedJobProvider.php
│  │  │        │  │  ├─ DatabaseUuidFailedJobProvider.php
│  │  │        │  │  ├─ DynamoDbFailedJobProvider.php
│  │  │        │  │  ├─ FailedJobProviderInterface.php
│  │  │        │  │  ├─ FileFailedJobProvider.php
│  │  │        │  │  ├─ NullFailedJobProvider.php
│  │  │        │  │  └─ PrunableFailedJobProvider.php
│  │  │        │  ├─ FailoverQueue.php
│  │  │        │  ├─ InteractsWithQueue.php
│  │  │        │  ├─ InvalidPayloadException.php
│  │  │        │  ├─ Jobs
│  │  │        │  │  ├─ BeanstalkdJob.php
│  │  │        │  │  ├─ DatabaseJob.php
│  │  │        │  │  ├─ DatabaseJobRecord.php
│  │  │        │  │  ├─ FakeJob.php
│  │  │        │  │  ├─ Job.php
│  │  │        │  │  ├─ JobName.php
│  │  │        │  │  ├─ RedisJob.php
│  │  │        │  │  ├─ SqsJob.php
│  │  │        │  │  └─ SyncJob.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Listener.php
│  │  │        │  ├─ ListenerOptions.php
│  │  │        │  ├─ LuaScripts.php
│  │  │        │  ├─ ManuallyFailedException.php
│  │  │        │  ├─ MaxAttemptsExceededException.php
│  │  │        │  ├─ Middleware
│  │  │        │  │  ├─ FailOnException.php
│  │  │        │  │  ├─ RateLimited.php
│  │  │        │  │  ├─ RateLimitedWithRedis.php
│  │  │        │  │  ├─ Skip.php
│  │  │        │  │  ├─ SkipIfBatchCancelled.php
│  │  │        │  │  ├─ ThrottlesExceptions.php
│  │  │        │  │  ├─ ThrottlesExceptionsWithRedis.php
│  │  │        │  │  └─ WithoutOverlapping.php
│  │  │        │  ├─ NullQueue.php
│  │  │        │  ├─ Queue.php
│  │  │        │  ├─ QueueManager.php
│  │  │        │  ├─ QueueServiceProvider.php
│  │  │        │  ├─ README.md
│  │  │        │  ├─ RedisQueue.php
│  │  │        │  ├─ SerializesAndRestoresModelIdentifiers.php
│  │  │        │  ├─ SerializesModels.php
│  │  │        │  ├─ SqsQueue.php
│  │  │        │  ├─ SyncQueue.php
│  │  │        │  ├─ TimeoutExceededException.php
│  │  │        │  ├─ Worker.php
│  │  │        │  └─ WorkerOptions.php
│  │  │        ├─ Redis
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Connections
│  │  │        │  │  ├─ Connection.php
│  │  │        │  │  ├─ PacksPhpRedisValues.php
│  │  │        │  │  ├─ PhpRedisClusterConnection.php
│  │  │        │  │  ├─ PhpRedisConnection.php
│  │  │        │  │  ├─ PredisClusterConnection.php
│  │  │        │  │  └─ PredisConnection.php
│  │  │        │  ├─ Connectors
│  │  │        │  │  ├─ PhpRedisConnector.php
│  │  │        │  │  └─ PredisConnector.php
│  │  │        │  ├─ Events
│  │  │        │  │  └─ CommandExecuted.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Limiters
│  │  │        │  │  ├─ ConcurrencyLimiter.php
│  │  │        │  │  ├─ ConcurrencyLimiterBuilder.php
│  │  │        │  │  ├─ DurationLimiter.php
│  │  │        │  │  └─ DurationLimiterBuilder.php
│  │  │        │  ├─ RedisManager.php
│  │  │        │  └─ RedisServiceProvider.php
│  │  │        ├─ Routing
│  │  │        │  ├─ AbstractRouteCollection.php
│  │  │        │  ├─ CallableDispatcher.php
│  │  │        │  ├─ CompiledRouteCollection.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ ControllerMakeCommand.php
│  │  │        │  │  ├─ MiddlewareMakeCommand.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     ├─ controller.api.stub
│  │  │        │  │     ├─ controller.invokable.stub
│  │  │        │  │     ├─ controller.model.api.stub
│  │  │        │  │     ├─ controller.model.stub
│  │  │        │  │     ├─ controller.nested.api.stub
│  │  │        │  │     ├─ controller.nested.singleton.api.stub
│  │  │        │  │     ├─ controller.nested.singleton.stub
│  │  │        │  │     ├─ controller.nested.stub
│  │  │        │  │     ├─ controller.plain.stub
│  │  │        │  │     ├─ controller.singleton.api.stub
│  │  │        │  │     ├─ controller.singleton.stub
│  │  │        │  │     ├─ controller.stub
│  │  │        │  │     └─ middleware.stub
│  │  │        │  ├─ Contracts
│  │  │        │  │  ├─ CallableDispatcher.php
│  │  │        │  │  └─ ControllerDispatcher.php
│  │  │        │  ├─ Controller.php
│  │  │        │  ├─ ControllerDispatcher.php
│  │  │        │  ├─ ControllerMiddlewareOptions.php
│  │  │        │  ├─ Controllers
│  │  │        │  │  ├─ HasMiddleware.php
│  │  │        │  │  └─ Middleware.php
│  │  │        │  ├─ CreatesRegularExpressionRouteConstraints.php
│  │  │        │  ├─ Events
│  │  │        │  │  ├─ PreparingResponse.php
│  │  │        │  │  ├─ ResponsePrepared.php
│  │  │        │  │  ├─ RouteMatched.php
│  │  │        │  │  └─ Routing.php
│  │  │        │  ├─ Exceptions
│  │  │        │  │  ├─ BackedEnumCaseNotFoundException.php
│  │  │        │  │  ├─ InvalidSignatureException.php
│  │  │        │  │  ├─ MissingRateLimiterException.php
│  │  │        │  │  ├─ StreamedResponseException.php
│  │  │        │  │  └─ UrlGenerationException.php
│  │  │        │  ├─ FiltersControllerMiddleware.php
│  │  │        │  ├─ ImplicitRouteBinding.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Matching
│  │  │        │  │  ├─ HostValidator.php
│  │  │        │  │  ├─ MethodValidator.php
│  │  │        │  │  ├─ SchemeValidator.php
│  │  │        │  │  ├─ UriValidator.php
│  │  │        │  │  └─ ValidatorInterface.php
│  │  │        │  ├─ Middleware
│  │  │        │  │  ├─ SubstituteBindings.php
│  │  │        │  │  ├─ ThrottleRequests.php
│  │  │        │  │  ├─ ThrottleRequestsWithRedis.php
│  │  │        │  │  └─ ValidateSignature.php
│  │  │        │  ├─ MiddlewareNameResolver.php
│  │  │        │  ├─ PendingResourceRegistration.php
│  │  │        │  ├─ PendingSingletonResourceRegistration.php
│  │  │        │  ├─ Pipeline.php
│  │  │        │  ├─ RedirectController.php
│  │  │        │  ├─ Redirector.php
│  │  │        │  ├─ ResolvesRouteDependencies.php
│  │  │        │  ├─ ResourceRegistrar.php
│  │  │        │  ├─ ResponseFactory.php
│  │  │        │  ├─ Route.php
│  │  │        │  ├─ RouteAction.php
│  │  │        │  ├─ RouteBinding.php
│  │  │        │  ├─ RouteCollection.php
│  │  │        │  ├─ RouteCollectionInterface.php
│  │  │        │  ├─ RouteDependencyResolverTrait.php
│  │  │        │  ├─ RouteFileRegistrar.php
│  │  │        │  ├─ RouteGroup.php
│  │  │        │  ├─ RouteParameterBinder.php
│  │  │        │  ├─ Router.php
│  │  │        │  ├─ RouteRegistrar.php
│  │  │        │  ├─ RouteSignatureParameters.php
│  │  │        │  ├─ RouteUri.php
│  │  │        │  ├─ RouteUrlGenerator.php
│  │  │        │  ├─ RoutingServiceProvider.php
│  │  │        │  ├─ SortedMiddleware.php
│  │  │        │  ├─ UrlGenerator.php
│  │  │        │  └─ ViewController.php
│  │  │        ├─ Session
│  │  │        │  ├─ ArraySessionHandler.php
│  │  │        │  ├─ CacheBasedSessionHandler.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Console
│  │  │        │  │  ├─ SessionTableCommand.php
│  │  │        │  │  └─ stubs
│  │  │        │  │     └─ database.stub
│  │  │        │  ├─ CookieSessionHandler.php
│  │  │        │  ├─ DatabaseSessionHandler.php
│  │  │        │  ├─ EncryptedStore.php
│  │  │        │  ├─ ExistenceAwareInterface.php
│  │  │        │  ├─ FileSessionHandler.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Middleware
│  │  │        │  │  ├─ AuthenticateSession.php
│  │  │        │  │  └─ StartSession.php
│  │  │        │  ├─ NullSessionHandler.php
│  │  │        │  ├─ SessionManager.php
│  │  │        │  ├─ SessionServiceProvider.php
│  │  │        │  ├─ Store.php
│  │  │        │  ├─ SymfonySessionDecorator.php
│  │  │        │  └─ TokenMismatchException.php
│  │  │        ├─ Support
│  │  │        │  ├─ AggregateServiceProvider.php
│  │  │        │  ├─ Benchmark.php
│  │  │        │  ├─ Carbon.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Composer.php
│  │  │        │  ├─ ConfigurationUrlParser.php
│  │  │        │  ├─ DateFactory.php
│  │  │        │  ├─ DefaultProviders.php
│  │  │        │  ├─ Defer
│  │  │        │  │  ├─ DeferredCallback.php
│  │  │        │  │  └─ DeferredCallbackCollection.php
│  │  │        │  ├─ EncodedHtmlString.php
│  │  │        │  ├─ Env.php
│  │  │        │  ├─ Exceptions
│  │  │        │  │  └─ MathException.php
│  │  │        │  ├─ Facades
│  │  │        │  │  ├─ App.php
│  │  │        │  │  ├─ Artisan.php
│  │  │        │  │  ├─ Auth.php
│  │  │        │  │  ├─ Blade.php
│  │  │        │  │  ├─ Broadcast.php
│  │  │        │  │  ├─ Bus.php
│  │  │        │  │  ├─ Cache.php
│  │  │        │  │  ├─ Concurrency.php
│  │  │        │  │  ├─ Config.php
│  │  │        │  │  ├─ Context.php
│  │  │        │  │  ├─ Cookie.php
│  │  │        │  │  ├─ Crypt.php
│  │  │        │  │  ├─ Date.php
│  │  │        │  │  ├─ DB.php
│  │  │        │  │  ├─ Event.php
│  │  │        │  │  ├─ Exceptions.php
│  │  │        │  │  ├─ Facade.php
│  │  │        │  │  ├─ File.php
│  │  │        │  │  ├─ Gate.php
│  │  │        │  │  ├─ Hash.php
│  │  │        │  │  ├─ Http.php
│  │  │        │  │  ├─ Lang.php
│  │  │        │  │  ├─ Log.php
│  │  │        │  │  ├─ Mail.php
│  │  │        │  │  ├─ MaintenanceMode.php
│  │  │        │  │  ├─ Notification.php
│  │  │        │  │  ├─ ParallelTesting.php
│  │  │        │  │  ├─ Password.php
│  │  │        │  │  ├─ Pipeline.php
│  │  │        │  │  ├─ Process.php
│  │  │        │  │  ├─ Queue.php
│  │  │        │  │  ├─ RateLimiter.php
│  │  │        │  │  ├─ Redirect.php
│  │  │        │  │  ├─ Redis.php
│  │  │        │  │  ├─ Request.php
│  │  │        │  │  ├─ Response.php
│  │  │        │  │  ├─ Route.php
│  │  │        │  │  ├─ Schedule.php
│  │  │        │  │  ├─ Schema.php
│  │  │        │  │  ├─ Session.php
│  │  │        │  │  ├─ Storage.php
│  │  │        │  │  ├─ URL.php
│  │  │        │  │  ├─ Validator.php
│  │  │        │  │  ├─ View.php
│  │  │        │  │  └─ Vite.php
│  │  │        │  ├─ Fluent.php
│  │  │        │  ├─ functions.php
│  │  │        │  ├─ helpers.php
│  │  │        │  ├─ HigherOrderTapProxy.php
│  │  │        │  ├─ HtmlString.php
│  │  │        │  ├─ InteractsWithTime.php
│  │  │        │  ├─ Js.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ Lottery.php
│  │  │        │  ├─ Manager.php
│  │  │        │  ├─ MessageBag.php
│  │  │        │  ├─ MultipleInstanceManager.php
│  │  │        │  ├─ NamespacedItemResolver.php
│  │  │        │  ├─ Number.php
│  │  │        │  ├─ Once.php
│  │  │        │  ├─ Onceable.php
│  │  │        │  ├─ Optional.php
│  │  │        │  ├─ Pluralizer.php
│  │  │        │  ├─ ProcessUtils.php
│  │  │        │  ├─ Reflector.php
│  │  │        │  ├─ ServiceProvider.php
│  │  │        │  ├─ Sleep.php
│  │  │        │  ├─ Str.php
│  │  │        │  ├─ Stringable.php
│  │  │        │  ├─ Testing
│  │  │        │  │  └─ Fakes
│  │  │        │  │     ├─ BatchFake.php
│  │  │        │  │     ├─ BatchRepositoryFake.php
│  │  │        │  │     ├─ BusFake.php
│  │  │        │  │     ├─ ChainedBatchTruthTest.php
│  │  │        │  │     ├─ EventFake.php
│  │  │        │  │     ├─ ExceptionHandlerFake.php
│  │  │        │  │     ├─ Fake.php
│  │  │        │  │     ├─ MailFake.php
│  │  │        │  │     ├─ NotificationFake.php
│  │  │        │  │     ├─ PendingBatchFake.php
│  │  │        │  │     ├─ PendingChainFake.php
│  │  │        │  │     ├─ PendingMailFake.php
│  │  │        │  │     └─ QueueFake.php
│  │  │        │  ├─ Timebox.php
│  │  │        │  ├─ Traits
│  │  │        │  │  ├─ CapsuleManagerTrait.php
│  │  │        │  │  ├─ Dumpable.php
│  │  │        │  │  ├─ ForwardsCalls.php
│  │  │        │  │  ├─ InteractsWithData.php
│  │  │        │  │  ├─ Localizable.php
│  │  │        │  │  ├─ ReflectsClosures.php
│  │  │        │  │  └─ Tappable.php
│  │  │        │  ├─ Uri.php
│  │  │        │  ├─ UriQueryString.php
│  │  │        │  ├─ ValidatedInput.php
│  │  │        │  └─ ViewErrorBag.php
│  │  │        ├─ Testing
│  │  │        │  ├─ Assert.php
│  │  │        │  ├─ AssertableJsonString.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Concerns
│  │  │        │  │  ├─ AssertsStatusCodes.php
│  │  │        │  │  ├─ RunsInParallel.php
│  │  │        │  │  └─ TestDatabases.php
│  │  │        │  ├─ Constraints
│  │  │        │  │  ├─ ArraySubset.php
│  │  │        │  │  ├─ CountInDatabase.php
│  │  │        │  │  ├─ HasInDatabase.php
│  │  │        │  │  ├─ NotSoftDeletedInDatabase.php
│  │  │        │  │  ├─ SeeInOrder.php
│  │  │        │  │  └─ SoftDeletedInDatabase.php
│  │  │        │  ├─ Exceptions
│  │  │        │  │  └─ InvalidArgumentException.php
│  │  │        │  ├─ Fluent
│  │  │        │  │  ├─ AssertableJson.php
│  │  │        │  │  └─ Concerns
│  │  │        │  │     ├─ Debugging.php
│  │  │        │  │     ├─ Has.php
│  │  │        │  │     ├─ Interaction.php
│  │  │        │  │     └─ Matching.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ LoggedExceptionCollection.php
│  │  │        │  ├─ ParallelConsoleOutput.php
│  │  │        │  ├─ ParallelRunner.php
│  │  │        │  ├─ ParallelTesting.php
│  │  │        │  ├─ ParallelTestingServiceProvider.php
│  │  │        │  ├─ PendingCommand.php
│  │  │        │  ├─ TestComponent.php
│  │  │        │  ├─ TestResponse.php
│  │  │        │  ├─ TestResponseAssert.php
│  │  │        │  └─ TestView.php
│  │  │        ├─ Translation
│  │  │        │  ├─ ArrayLoader.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ CreatesPotentiallyTranslatedStrings.php
│  │  │        │  ├─ FileLoader.php
│  │  │        │  ├─ lang
│  │  │        │  │  └─ en
│  │  │        │  │     ├─ auth.php
│  │  │        │  │     ├─ pagination.php
│  │  │        │  │     ├─ passwords.php
│  │  │        │  │     └─ validation.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ MessageSelector.php
│  │  │        │  ├─ PotentiallyTranslatedString.php
│  │  │        │  ├─ TranslationServiceProvider.php
│  │  │        │  └─ Translator.php
│  │  │        ├─ Validation
│  │  │        │  ├─ ClosureValidationRule.php
│  │  │        │  ├─ composer.json
│  │  │        │  ├─ Concerns
│  │  │        │  │  ├─ FilterEmailValidation.php
│  │  │        │  │  ├─ FormatsMessages.php
│  │  │        │  │  ├─ ReplacesAttributes.php
│  │  │        │  │  └─ ValidatesAttributes.php
│  │  │        │  ├─ ConditionalRules.php
│  │  │        │  ├─ DatabasePresenceVerifier.php
│  │  │        │  ├─ DatabasePresenceVerifierInterface.php
│  │  │        │  ├─ Factory.php
│  │  │        │  ├─ InvokableValidationRule.php
│  │  │        │  ├─ LICENSE.md
│  │  │        │  ├─ NestedRules.php
│  │  │        │  ├─ NotPwnedVerifier.php
│  │  │        │  ├─ PresenceVerifierInterface.php
│  │  │        │  ├─ Rule.php
│  │  │        │  ├─ Rules
│  │  │        │  │  ├─ AnyOf.php
│  │  │        │  │  ├─ ArrayRule.php
│  │  │        │  │  ├─ Can.php
│  │  │        │  │  ├─ Contains.php
│  │  │        │  │  ├─ DatabaseRule.php
│  │  │        │  │  ├─ Date.php
│  │  │        │  │  ├─ Dimensions.php
│  │  │        │  │  ├─ DoesntContain.php
│  │  │        │  │  ├─ Email.php
│  │  │        │  │  ├─ Enum.php
│  │  │        │  │  ├─ ExcludeIf.php
│  │  │        │  │  ├─ Exists.php
│  │  │        │  │  ├─ File.php
│  │  │        │  │  ├─ ImageFile.php
│  │  │        │  │  ├─ In.php
│  │  │        │  │  ├─ NotIn.php
│  │  │        │  │  ├─ Numeric.php
│  │  │        │  │  ├─ Password.php
│  │  │        │  │  ├─ ProhibitedIf.php
│  │  │        │  │  ├─ RequiredIf.php
│  │  │        │  │  └─ Unique.php
│  │  │        │  ├─ UnauthorizedException.php
│  │  │        │  ├─ ValidatesWhenResolvedTrait.php
│  │  │        │  ├─ ValidationData.php
│  │  │        │  ├─ ValidationException.php
│  │  │        │  ├─ ValidationRuleParser.php
│  │  │        │  ├─ ValidationServiceProvider.php
│  │  │        │  └─ Validator.php
│  │  │        └─ View
│  │  │           ├─ AnonymousComponent.php
│  │  │           ├─ AppendableAttributeValue.php
│  │  │           ├─ Compilers
│  │  │           │  ├─ BladeCompiler.php
│  │  │           │  ├─ Compiler.php
│  │  │           │  ├─ CompilerInterface.php
│  │  │           │  ├─ ComponentTagCompiler.php
│  │  │           │  └─ Concerns
│  │  │           │     ├─ CompilesAuthorizations.php
│  │  │           │     ├─ CompilesClasses.php
│  │  │           │     ├─ CompilesComments.php
│  │  │           │     ├─ CompilesComponents.php
│  │  │           │     ├─ CompilesConditionals.php
│  │  │           │     ├─ CompilesContexts.php
│  │  │           │     ├─ CompilesEchos.php
│  │  │           │     ├─ CompilesErrors.php
│  │  │           │     ├─ CompilesFragments.php
│  │  │           │     ├─ CompilesHelpers.php
│  │  │           │     ├─ CompilesIncludes.php
│  │  │           │     ├─ CompilesInjections.php
│  │  │           │     ├─ CompilesJs.php
│  │  │           │     ├─ CompilesJson.php
│  │  │           │     ├─ CompilesLayouts.php
│  │  │           │     ├─ CompilesLoops.php
│  │  │           │     ├─ CompilesRawPhp.php
│  │  │           │     ├─ CompilesSessions.php
│  │  │           │     ├─ CompilesStacks.php
│  │  │           │     ├─ CompilesStyles.php
│  │  │           │     ├─ CompilesTranslations.php
│  │  │           │     └─ CompilesUseStatements.php
│  │  │           ├─ Component.php
│  │  │           ├─ ComponentAttributeBag.php
│  │  │           ├─ ComponentSlot.php
│  │  │           ├─ composer.json
│  │  │           ├─ Concerns
│  │  │           │  ├─ ManagesComponents.php
│  │  │           │  ├─ ManagesEvents.php
│  │  │           │  ├─ ManagesFragments.php
│  │  │           │  ├─ ManagesLayouts.php
│  │  │           │  ├─ ManagesLoops.php
│  │  │           │  ├─ ManagesStacks.php
│  │  │           │  └─ ManagesTranslations.php
│  │  │           ├─ DynamicComponent.php
│  │  │           ├─ Engines
│  │  │           │  ├─ CompilerEngine.php
│  │  │           │  ├─ Engine.php
│  │  │           │  ├─ EngineResolver.php
│  │  │           │  ├─ FileEngine.php
│  │  │           │  └─ PhpEngine.php
│  │  │           ├─ Factory.php
│  │  │           ├─ FileViewFinder.php
│  │  │           ├─ InvokableComponentVariable.php
│  │  │           ├─ LICENSE.md
│  │  │           ├─ Middleware
│  │  │           │  └─ ShareErrorsFromSession.php
│  │  │           ├─ View.php
│  │  │           ├─ ViewException.php
│  │  │           ├─ ViewFinderInterface.php
│  │  │           ├─ ViewName.php
│  │  │           └─ ViewServiceProvider.php
│  │  ├─ passport
│  │  │  ├─ composer.json
│  │  │  ├─ config
│  │  │  │  └─ passport.php
│  │  │  ├─ database
│  │  │  │  ├─ factories
│  │  │  │  │  └─ ClientFactory.php
│  │  │  │  └─ migrations
│  │  │  │     ├─ 2016_06_01_000001_create_oauth_auth_codes_table.php
│  │  │  │     ├─ 2016_06_01_000002_create_oauth_access_tokens_table.php
│  │  │  │     ├─ 2016_06_01_000003_create_oauth_refresh_tokens_table.php
│  │  │  │     ├─ 2016_06_01_000004_create_oauth_clients_table.php
│  │  │  │     └─ 2024_06_01_000001_create_oauth_device_codes_table.php
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  ├─ routes
│  │  │  │  └─ web.php
│  │  │  ├─ src
│  │  │  │  ├─ AccessToken.php
│  │  │  │  ├─ ApiTokenCookieFactory.php
│  │  │  │  ├─ AuthCode.php
│  │  │  │  ├─ Bridge
│  │  │  │  │  ├─ AccessToken.php
│  │  │  │  │  ├─ AccessTokenRepository.php
│  │  │  │  │  ├─ AuthCode.php
│  │  │  │  │  ├─ AuthCodeRepository.php
│  │  │  │  │  ├─ Client.php
│  │  │  │  │  ├─ ClientRepository.php
│  │  │  │  │  ├─ DeviceCode.php
│  │  │  │  │  ├─ DeviceCodeRepository.php
│  │  │  │  │  ├─ PersonalAccessBearerTokenResponse.php
│  │  │  │  │  ├─ PersonalAccessGrant.php
│  │  │  │  │  ├─ RefreshToken.php
│  │  │  │  │  ├─ RefreshTokenRepository.php
│  │  │  │  │  ├─ Scope.php
│  │  │  │  │  ├─ ScopeRepository.php
│  │  │  │  │  ├─ User.php
│  │  │  │  │  └─ UserRepository.php
│  │  │  │  ├─ Client.php
│  │  │  │  ├─ ClientRepository.php
│  │  │  │  ├─ Console
│  │  │  │  │  ├─ ClientCommand.php
│  │  │  │  │  ├─ HashCommand.php
│  │  │  │  │  ├─ InstallCommand.php
│  │  │  │  │  ├─ KeysCommand.php
│  │  │  │  │  └─ PurgeCommand.php
│  │  │  │  ├─ Contracts
│  │  │  │  │  ├─ ApprovedDeviceAuthorizationResponse.php
│  │  │  │  │  ├─ AuthorizationViewResponse.php
│  │  │  │  │  ├─ DeniedDeviceAuthorizationResponse.php
│  │  │  │  │  ├─ DeviceAuthorizationViewResponse.php
│  │  │  │  │  ├─ DeviceUserCodeViewResponse.php
│  │  │  │  │  ├─ OAuthenticatable.php
│  │  │  │  │  └─ ScopeAuthorizable.php
│  │  │  │  ├─ DeviceCode.php
│  │  │  │  ├─ Events
│  │  │  │  │  ├─ AccessTokenCreated.php
│  │  │  │  │  ├─ AccessTokenRevoked.php
│  │  │  │  │  └─ RefreshTokenCreated.php
│  │  │  │  ├─ Exceptions
│  │  │  │  │  ├─ AuthenticationException.php
│  │  │  │  │  ├─ InvalidAuthTokenException.php
│  │  │  │  │  ├─ MissingScopeException.php
│  │  │  │  │  └─ OAuthServerException.php
│  │  │  │  ├─ Guards
│  │  │  │  │  └─ TokenGuard.php
│  │  │  │  ├─ HasApiTokens.php
│  │  │  │  ├─ Http
│  │  │  │  │  ├─ Controllers
│  │  │  │  │  │  ├─ AccessTokenController.php
│  │  │  │  │  │  ├─ ApproveAuthorizationController.php
│  │  │  │  │  │  ├─ ApproveDeviceAuthorizationController.php
│  │  │  │  │  │  ├─ AuthorizationController.php
│  │  │  │  │  │  ├─ AuthorizedAccessTokenController.php
│  │  │  │  │  │  ├─ ClientController.php
│  │  │  │  │  │  ├─ ConvertsPsrResponses.php
│  │  │  │  │  │  ├─ DenyAuthorizationController.php
│  │  │  │  │  │  ├─ DenyDeviceAuthorizationController.php
│  │  │  │  │  │  ├─ DeviceAuthorizationController.php
│  │  │  │  │  │  ├─ DeviceCodeController.php
│  │  │  │  │  │  ├─ DeviceUserCodeController.php
│  │  │  │  │  │  ├─ HandlesOAuthErrors.php
│  │  │  │  │  │  ├─ PersonalAccessTokenController.php
│  │  │  │  │  │  ├─ RetrievesAuthRequestFromSession.php
│  │  │  │  │  │  ├─ RetrievesDeviceCodeFromSession.php
│  │  │  │  │  │  ├─ ScopeController.php
│  │  │  │  │  │  └─ TransientTokenController.php
│  │  │  │  │  ├─ Middleware
│  │  │  │  │  │  ├─ CheckToken.php
│  │  │  │  │  │  ├─ CheckTokenForAnyScope.php
│  │  │  │  │  │  ├─ CreateFreshApiToken.php
│  │  │  │  │  │  ├─ EnsureClientIsResourceOwner.php
│  │  │  │  │  │  └─ ValidateToken.php
│  │  │  │  │  ├─ Responses
│  │  │  │  │  │  ├─ ApprovedDeviceAuthorizationResponse.php
│  │  │  │  │  │  ├─ DeniedDeviceAuthorizationResponse.php
│  │  │  │  │  │  └─ SimpleViewResponse.php
│  │  │  │  │  └─ Rules
│  │  │  │  │     ├─ RedirectRule.php
│  │  │  │  │     └─ UriRule.php
│  │  │  │  ├─ Passport.php
│  │  │  │  ├─ PassportServiceProvider.php
│  │  │  │  ├─ PassportUserProvider.php
│  │  │  │  ├─ PersonalAccessTokenFactory.php
│  │  │  │  ├─ PersonalAccessTokenResult.php
│  │  │  │  ├─ RefreshToken.php
│  │  │  │  ├─ ResolvesInheritedScopes.php
│  │  │  │  ├─ Scope.php
│  │  │  │  ├─ Token.php
│  │  │  │  ├─ TokenRepository.php
│  │  │  │  └─ TransientToken.php
│  │  │  ├─ testbench.yaml
│  │  │  ├─ UPGRADE.md
│  │  │  └─ workbench
│  │  │     ├─ app
│  │  │     │  └─ Models
│  │  │     │     └─ User.php
│  │  │     └─ database
│  │  │        └─ factories
│  │  │           └─ UserFactory.php
│  │  ├─ prompts
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE.md
│  │  │  ├─ phpunit.xml
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     ├─ Clear.php
│  │  │     ├─ Concerns
│  │  │     │  ├─ Colors.php
│  │  │     │  ├─ Cursor.php
│  │  │     │  ├─ Erase.php
│  │  │     │  ├─ Events.php
│  │  │     │  ├─ FakesInputOutput.php
│  │  │     │  ├─ Fallback.php
│  │  │     │  ├─ Interactivity.php
│  │  │     │  ├─ Scrolling.php
│  │  │     │  ├─ Termwind.php
│  │  │     │  ├─ Themes.php
│  │  │     │  ├─ Truncation.php
│  │  │     │  └─ TypedValue.php
│  │  │     ├─ ConfirmPrompt.php
│  │  │     ├─ Exceptions
│  │  │     │  ├─ FormRevertedException.php
│  │  │     │  └─ NonInteractiveValidationException.php
│  │  │     ├─ FormBuilder.php
│  │  │     ├─ FormStep.php
│  │  │     ├─ helpers.php
│  │  │     ├─ Key.php
│  │  │     ├─ MultiSearchPrompt.php
│  │  │     ├─ MultiSelectPrompt.php
│  │  │     ├─ Note.php
│  │  │     ├─ Output
│  │  │     │  ├─ BufferedConsoleOutput.php
│  │  │     │  └─ ConsoleOutput.php
│  │  │     ├─ PasswordPrompt.php
│  │  │     ├─ PausePrompt.php
│  │  │     ├─ Progress.php
│  │  │     ├─ Prompt.php
│  │  │     ├─ SearchPrompt.php
│  │  │     ├─ SelectPrompt.php
│  │  │     ├─ Spinner.php
│  │  │     ├─ SuggestPrompt.php
│  │  │     ├─ Support
│  │  │     │  ├─ Result.php
│  │  │     │  └─ Utils.php
│  │  │     ├─ Table.php
│  │  │     ├─ Terminal.php
│  │  │     ├─ TextareaPrompt.php
│  │  │     ├─ TextPrompt.php
│  │  │     └─ Themes
│  │  │        ├─ Contracts
│  │  │        │  └─ Scrolling.php
│  │  │        └─ Default
│  │  │           ├─ ClearRenderer.php
│  │  │           ├─ Concerns
│  │  │           │  ├─ DrawsBoxes.php
│  │  │           │  ├─ DrawsScrollbars.php
│  │  │           │  └─ InteractsWithStrings.php
│  │  │           ├─ ConfirmPromptRenderer.php
│  │  │           ├─ MultiSearchPromptRenderer.php
│  │  │           ├─ MultiSelectPromptRenderer.php
│  │  │           ├─ NoteRenderer.php
│  │  │           ├─ PasswordPromptRenderer.php
│  │  │           ├─ PausePromptRenderer.php
│  │  │           ├─ ProgressRenderer.php
│  │  │           ├─ Renderer.php
│  │  │           ├─ SearchPromptRenderer.php
│  │  │           ├─ SelectPromptRenderer.php
│  │  │           ├─ SpinnerRenderer.php
│  │  │           ├─ SuggestPromptRenderer.php
│  │  │           ├─ TableRenderer.php
│  │  │           ├─ TextareaPromptRenderer.php
│  │  │           └─ TextPromptRenderer.php
│  │  ├─ serializable-closure
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     ├─ Contracts
│  │  │     │  ├─ Serializable.php
│  │  │     │  └─ Signer.php
│  │  │     ├─ Exceptions
│  │  │     │  ├─ InvalidSignatureException.php
│  │  │     │  ├─ MissingSecretKeyException.php
│  │  │     │  └─ PhpVersionNotSupportedException.php
│  │  │     ├─ SerializableClosure.php
│  │  │     ├─ Serializers
│  │  │     │  ├─ Native.php
│  │  │     │  └─ Signed.php
│  │  │     ├─ Signers
│  │  │     │  └─ Hmac.php
│  │  │     ├─ Support
│  │  │     │  ├─ ClosureScope.php
│  │  │     │  ├─ ClosureStream.php
│  │  │     │  ├─ ReflectionClosure.php
│  │  │     │  └─ SelfReference.php
│  │  │     └─ UnsignedSerializableClosure.php
│  │  └─ tinker
│  │     ├─ composer.json
│  │     ├─ config
│  │     │  └─ tinker.php
│  │     ├─ LICENSE.md
│  │     ├─ README.md
│  │     └─ src
│  │        ├─ ClassAliasAutoloader.php
│  │        ├─ Console
│  │        │  └─ TinkerCommand.php
│  │        ├─ TinkerCaster.php
│  │        └─ TinkerServiceProvider.php
│  ├─ lcobucci
│  │  ├─ clock
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  └─ src
│  │  │     ├─ Clock.php
│  │  │     ├─ FrozenClock.php
│  │  │     └─ SystemClock.php
│  │  └─ jwt
│  │     ├─ composer.json
│  │     ├─ LICENSE
│  │     └─ src
│  │        ├─ Builder.php
│  │        ├─ ClaimsFormatter.php
│  │        ├─ Configuration.php
│  │        ├─ Decoder.php
│  │        ├─ Encoder.php
│  │        ├─ Encoding
│  │        │  ├─ CannotDecodeContent.php
│  │        │  ├─ CannotEncodeContent.php
│  │        │  ├─ ChainedFormatter.php
│  │        │  ├─ JoseEncoder.php
│  │        │  ├─ MicrosecondBasedDateConversion.php
│  │        │  ├─ UnifyAudience.php
│  │        │  └─ UnixTimestampDates.php
│  │        ├─ Exception.php
│  │        ├─ JwtFacade.php
│  │        ├─ Parser.php
│  │        ├─ Signer
│  │        │  ├─ Blake2b.php
│  │        │  ├─ CannotSignPayload.php
│  │        │  ├─ Ecdsa
│  │        │  │  ├─ ConversionFailed.php
│  │        │  │  ├─ MultibyteStringConverter.php
│  │        │  │  ├─ Sha256.php
│  │        │  │  ├─ Sha384.php
│  │        │  │  ├─ Sha512.php
│  │        │  │  └─ SignatureConverter.php
│  │        │  ├─ Ecdsa.php
│  │        │  ├─ Eddsa.php
│  │        │  ├─ Hmac
│  │        │  │  ├─ Sha256.php
│  │        │  │  ├─ Sha384.php
│  │        │  │  └─ Sha512.php
│  │        │  ├─ Hmac.php
│  │        │  ├─ InvalidKeyProvided.php
│  │        │  ├─ Key
│  │        │  │  ├─ FileCouldNotBeRead.php
│  │        │  │  └─ InMemory.php
│  │        │  ├─ Key.php
│  │        │  ├─ OpenSSL.php
│  │        │  ├─ Rsa
│  │        │  │  ├─ Sha256.php
│  │        │  │  ├─ Sha384.php
│  │        │  │  └─ Sha512.php
│  │        │  └─ Rsa.php
│  │        ├─ Signer.php
│  │        ├─ SodiumBase64Polyfill.php
│  │        ├─ Token
│  │        │  ├─ Builder.php
│  │        │  ├─ DataSet.php
│  │        │  ├─ InvalidTokenStructure.php
│  │        │  ├─ Parser.php
│  │        │  ├─ Plain.php
│  │        │  ├─ RegisteredClaimGiven.php
│  │        │  ├─ RegisteredClaims.php
│  │        │  ├─ Signature.php
│  │        │  └─ UnsupportedHeaderFound.php
│  │        ├─ Token.php
│  │        ├─ UnencryptedToken.php
│  │        ├─ Validation
│  │        │  ├─ Constraint
│  │        │  │  ├─ CannotValidateARegisteredClaim.php
│  │        │  │  ├─ HasClaim.php
│  │        │  │  ├─ HasClaimWithValue.php
│  │        │  │  ├─ IdentifiedBy.php
│  │        │  │  ├─ IssuedBy.php
│  │        │  │  ├─ LeewayCannotBeNegative.php
│  │        │  │  ├─ LooseValidAt.php
│  │        │  │  ├─ PermittedFor.php
│  │        │  │  ├─ RelatedTo.php
│  │        │  │  ├─ SignedWith.php
│  │        │  │  ├─ SignedWithOneInSet.php
│  │        │  │  ├─ SignedWithUntilDate.php
│  │        │  │  └─ StrictValidAt.php
│  │        │  ├─ Constraint.php
│  │        │  ├─ ConstraintViolation.php
│  │        │  ├─ NoConstraintsGiven.php
│  │        │  ├─ RequiredConstraintsViolated.php
│  │        │  ├─ SignedWith.php
│  │        │  ├─ ValidAt.php
│  │        │  └─ Validator.php
│  │        └─ Validator.php
│  ├─ league
│  │  ├─ commonmark
│  │  │  ├─ .phpstorm.meta.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     ├─ CommonMarkConverter.php
│  │  │     ├─ ConverterInterface.php
│  │  │     ├─ Delimiter
│  │  │     │  ├─ Bracket.php
│  │  │     │  ├─ Delimiter.php
│  │  │     │  ├─ DelimiterInterface.php
│  │  │     │  ├─ DelimiterParser.php
│  │  │     │  ├─ DelimiterStack.php
│  │  │     │  └─ Processor
│  │  │     │     ├─ CacheableDelimiterProcessorInterface.php
│  │  │     │     ├─ DelimiterProcessorCollection.php
│  │  │     │     ├─ DelimiterProcessorCollectionInterface.php
│  │  │     │     ├─ DelimiterProcessorInterface.php
│  │  │     │     └─ StaggeredDelimiterProcessor.php
│  │  │     ├─ Environment
│  │  │     │  ├─ Environment.php
│  │  │     │  ├─ EnvironmentAwareInterface.php
│  │  │     │  ├─ EnvironmentBuilderInterface.php
│  │  │     │  └─ EnvironmentInterface.php
│  │  │     ├─ Event
│  │  │     │  ├─ AbstractEvent.php
│  │  │     │  ├─ DocumentParsedEvent.php
│  │  │     │  ├─ DocumentPreParsedEvent.php
│  │  │     │  ├─ DocumentPreRenderEvent.php
│  │  │     │  ├─ DocumentRenderedEvent.php
│  │  │     │  └─ ListenerData.php
│  │  │     ├─ Exception
│  │  │     │  ├─ AlreadyInitializedException.php
│  │  │     │  ├─ CommonMarkException.php
│  │  │     │  ├─ InvalidArgumentException.php
│  │  │     │  ├─ IOException.php
│  │  │     │  ├─ LogicException.php
│  │  │     │  ├─ MissingDependencyException.php
│  │  │     │  └─ UnexpectedEncodingException.php
│  │  │     ├─ Extension
│  │  │     │  ├─ Attributes
│  │  │     │  │  ├─ AttributesExtension.php
│  │  │     │  │  ├─ Event
│  │  │     │  │  │  └─ AttributesListener.php
│  │  │     │  │  ├─ Node
│  │  │     │  │  │  ├─ Attributes.php
│  │  │     │  │  │  └─ AttributesInline.php
│  │  │     │  │  ├─ Parser
│  │  │     │  │  │  ├─ AttributesBlockContinueParser.php
│  │  │     │  │  │  ├─ AttributesBlockStartParser.php
│  │  │     │  │  │  └─ AttributesInlineParser.php
│  │  │     │  │  └─ Util
│  │  │     │  │     └─ AttributesHelper.php
│  │  │     │  ├─ Autolink
│  │  │     │  │  ├─ AutolinkExtension.php
│  │  │     │  │  ├─ EmailAutolinkParser.php
│  │  │     │  │  └─ UrlAutolinkParser.php
│  │  │     │  ├─ CommonMark
│  │  │     │  │  ├─ CommonMarkCoreExtension.php
│  │  │     │  │  ├─ Delimiter
│  │  │     │  │  │  └─ Processor
│  │  │     │  │  │     └─ EmphasisDelimiterProcessor.php
│  │  │     │  │  ├─ Node
│  │  │     │  │  │  ├─ Block
│  │  │     │  │  │  │  ├─ BlockQuote.php
│  │  │     │  │  │  │  ├─ FencedCode.php
│  │  │     │  │  │  │  ├─ Heading.php
│  │  │     │  │  │  │  ├─ HtmlBlock.php
│  │  │     │  │  │  │  ├─ IndentedCode.php
│  │  │     │  │  │  │  ├─ ListBlock.php
│  │  │     │  │  │  │  ├─ ListData.php
│  │  │     │  │  │  │  ├─ ListItem.php
│  │  │     │  │  │  │  └─ ThematicBreak.php
│  │  │     │  │  │  └─ Inline
│  │  │     │  │  │     ├─ AbstractWebResource.php
│  │  │     │  │  │     ├─ Code.php
│  │  │     │  │  │     ├─ Emphasis.php
│  │  │     │  │  │     ├─ HtmlInline.php
│  │  │     │  │  │     ├─ Image.php
│  │  │     │  │  │     ├─ Link.php
│  │  │     │  │  │     └─ Strong.php
│  │  │     │  │  ├─ Parser
│  │  │     │  │  │  ├─ Block
│  │  │     │  │  │  │  ├─ BlockQuoteParser.php
│  │  │     │  │  │  │  ├─ BlockQuoteStartParser.php
│  │  │     │  │  │  │  ├─ FencedCodeParser.php
│  │  │     │  │  │  │  ├─ FencedCodeStartParser.php
│  │  │     │  │  │  │  ├─ HeadingParser.php
│  │  │     │  │  │  │  ├─ HeadingStartParser.php
│  │  │     │  │  │  │  ├─ HtmlBlockParser.php
│  │  │     │  │  │  │  ├─ HtmlBlockStartParser.php
│  │  │     │  │  │  │  ├─ IndentedCodeParser.php
│  │  │     │  │  │  │  ├─ IndentedCodeStartParser.php
│  │  │     │  │  │  │  ├─ ListBlockParser.php
│  │  │     │  │  │  │  ├─ ListBlockStartParser.php
│  │  │     │  │  │  │  ├─ ListItemParser.php
│  │  │     │  │  │  │  ├─ ThematicBreakParser.php
│  │  │     │  │  │  │  └─ ThematicBreakStartParser.php
│  │  │     │  │  │  └─ Inline
│  │  │     │  │  │     ├─ AutolinkParser.php
│  │  │     │  │  │     ├─ BacktickParser.php
│  │  │     │  │  │     ├─ BangParser.php
│  │  │     │  │  │     ├─ CloseBracketParser.php
│  │  │     │  │  │     ├─ EntityParser.php
│  │  │     │  │  │     ├─ EscapableParser.php
│  │  │     │  │  │     ├─ HtmlInlineParser.php
│  │  │     │  │  │     └─ OpenBracketParser.php
│  │  │     │  │  └─ Renderer
│  │  │     │  │     ├─ Block
│  │  │     │  │     │  ├─ BlockQuoteRenderer.php
│  │  │     │  │     │  ├─ FencedCodeRenderer.php
│  │  │     │  │     │  ├─ HeadingRenderer.php
│  │  │     │  │     │  ├─ HtmlBlockRenderer.php
│  │  │     │  │     │  ├─ IndentedCodeRenderer.php
│  │  │     │  │     │  ├─ ListBlockRenderer.php
│  │  │     │  │     │  ├─ ListItemRenderer.php
│  │  │     │  │     │  └─ ThematicBreakRenderer.php
│  │  │     │  │     └─ Inline
│  │  │     │  │        ├─ CodeRenderer.php
│  │  │     │  │        ├─ EmphasisRenderer.php
│  │  │     │  │        ├─ HtmlInlineRenderer.php
│  │  │     │  │        ├─ ImageRenderer.php
│  │  │     │  │        ├─ LinkRenderer.php
│  │  │     │  │        └─ StrongRenderer.php
│  │  │     │  ├─ ConfigurableExtensionInterface.php
│  │  │     │  ├─ DefaultAttributes
│  │  │     │  │  ├─ ApplyDefaultAttributesProcessor.php
│  │  │     │  │  └─ DefaultAttributesExtension.php
│  │  │     │  ├─ DescriptionList
│  │  │     │  │  ├─ DescriptionListExtension.php
│  │  │     │  │  ├─ Event
│  │  │     │  │  │  ├─ ConsecutiveDescriptionListMerger.php
│  │  │     │  │  │  └─ LooseDescriptionHandler.php
│  │  │     │  │  ├─ Node
│  │  │     │  │  │  ├─ Description.php
│  │  │     │  │  │  ├─ DescriptionList.php
│  │  │     │  │  │  └─ DescriptionTerm.php
│  │  │     │  │  ├─ Parser
│  │  │     │  │  │  ├─ DescriptionContinueParser.php
│  │  │     │  │  │  ├─ DescriptionListContinueParser.php
│  │  │     │  │  │  ├─ DescriptionStartParser.php
│  │  │     │  │  │  └─ DescriptionTermContinueParser.php
│  │  │     │  │  └─ Renderer
│  │  │     │  │     ├─ DescriptionListRenderer.php
│  │  │     │  │     ├─ DescriptionRenderer.php
│  │  │     │  │     └─ DescriptionTermRenderer.php
│  │  │     │  ├─ DisallowedRawHtml
│  │  │     │  │  ├─ DisallowedRawHtmlExtension.php
│  │  │     │  │  └─ DisallowedRawHtmlRenderer.php
│  │  │     │  ├─ Embed
│  │  │     │  │  ├─ Bridge
│  │  │     │  │  │  └─ OscaroteroEmbedAdapter.php
│  │  │     │  │  ├─ DomainFilteringAdapter.php
│  │  │     │  │  ├─ Embed.php
│  │  │     │  │  ├─ EmbedAdapterInterface.php
│  │  │     │  │  ├─ EmbedExtension.php
│  │  │     │  │  ├─ EmbedParser.php
│  │  │     │  │  ├─ EmbedProcessor.php
│  │  │     │  │  ├─ EmbedRenderer.php
│  │  │     │  │  └─ EmbedStartParser.php
│  │  │     │  ├─ ExtensionInterface.php
│  │  │     │  ├─ ExternalLink
│  │  │     │  │  ├─ ExternalLinkExtension.php
│  │  │     │  │  └─ ExternalLinkProcessor.php
│  │  │     │  ├─ Footnote
│  │  │     │  │  ├─ Event
│  │  │     │  │  │  ├─ AnonymousFootnotesListener.php
│  │  │     │  │  │  ├─ FixOrphanedFootnotesAndRefsListener.php
│  │  │     │  │  │  ├─ GatherFootnotesListener.php
│  │  │     │  │  │  └─ NumberFootnotesListener.php
│  │  │     │  │  ├─ FootnoteExtension.php
│  │  │     │  │  ├─ Node
│  │  │     │  │  │  ├─ Footnote.php
│  │  │     │  │  │  ├─ FootnoteBackref.php
│  │  │     │  │  │  ├─ FootnoteContainer.php
│  │  │     │  │  │  └─ FootnoteRef.php
│  │  │     │  │  ├─ Parser
│  │  │     │  │  │  ├─ AnonymousFootnoteRefParser.php
│  │  │     │  │  │  ├─ FootnoteParser.php
│  │  │     │  │  │  ├─ FootnoteRefParser.php
│  │  │     │  │  │  └─ FootnoteStartParser.php
│  │  │     │  │  └─ Renderer
│  │  │     │  │     ├─ FootnoteBackrefRenderer.php
│  │  │     │  │     ├─ FootnoteContainerRenderer.php
│  │  │     │  │     ├─ FootnoteRefRenderer.php
│  │  │     │  │     └─ FootnoteRenderer.php
│  │  │     │  ├─ FrontMatter
│  │  │     │  │  ├─ Data
│  │  │     │  │  │  ├─ FrontMatterDataParserInterface.php
│  │  │     │  │  │  ├─ LibYamlFrontMatterParser.php
│  │  │     │  │  │  └─ SymfonyYamlFrontMatterParser.php
│  │  │     │  │  ├─ Exception
│  │  │     │  │  │  └─ InvalidFrontMatterException.php
│  │  │     │  │  ├─ FrontMatterExtension.php
│  │  │     │  │  ├─ FrontMatterParser.php
│  │  │     │  │  ├─ FrontMatterParserInterface.php
│  │  │     │  │  ├─ FrontMatterProviderInterface.php
│  │  │     │  │  ├─ Input
│  │  │     │  │  │  └─ MarkdownInputWithFrontMatter.php
│  │  │     │  │  ├─ Listener
│  │  │     │  │  │  ├─ FrontMatterPostRenderListener.php
│  │  │     │  │  │  └─ FrontMatterPreParser.php
│  │  │     │  │  └─ Output
│  │  │     │  │     └─ RenderedContentWithFrontMatter.php
│  │  │     │  ├─ GithubFlavoredMarkdownExtension.php
│  │  │     │  ├─ HeadingPermalink
│  │  │     │  │  ├─ HeadingPermalink.php
│  │  │     │  │  ├─ HeadingPermalinkExtension.php
│  │  │     │  │  ├─ HeadingPermalinkProcessor.php
│  │  │     │  │  └─ HeadingPermalinkRenderer.php
│  │  │     │  ├─ InlinesOnly
│  │  │     │  │  ├─ ChildRenderer.php
│  │  │     │  │  └─ InlinesOnlyExtension.php
│  │  │     │  ├─ Mention
│  │  │     │  │  ├─ Generator
│  │  │     │  │  │  ├─ CallbackGenerator.php
│  │  │     │  │  │  ├─ MentionGeneratorInterface.php
│  │  │     │  │  │  └─ StringTemplateLinkGenerator.php
│  │  │     │  │  ├─ Mention.php
│  │  │     │  │  ├─ MentionExtension.php
│  │  │     │  │  └─ MentionParser.php
│  │  │     │  ├─ SmartPunct
│  │  │     │  │  ├─ DashParser.php
│  │  │     │  │  ├─ EllipsesParser.php
│  │  │     │  │  ├─ Quote.php
│  │  │     │  │  ├─ QuoteParser.php
│  │  │     │  │  ├─ QuoteProcessor.php
│  │  │     │  │  ├─ ReplaceUnpairedQuotesListener.php
│  │  │     │  │  └─ SmartPunctExtension.php
│  │  │     │  ├─ Strikethrough
│  │  │     │  │  ├─ Strikethrough.php
│  │  │     │  │  ├─ StrikethroughDelimiterProcessor.php
│  │  │     │  │  ├─ StrikethroughExtension.php
│  │  │     │  │  └─ StrikethroughRenderer.php
│  │  │     │  ├─ Table
│  │  │     │  │  ├─ Table.php
│  │  │     │  │  ├─ TableCell.php
│  │  │     │  │  ├─ TableCellRenderer.php
│  │  │     │  │  ├─ TableExtension.php
│  │  │     │  │  ├─ TableParser.php
│  │  │     │  │  ├─ TableRenderer.php
│  │  │     │  │  ├─ TableRow.php
│  │  │     │  │  ├─ TableRowRenderer.php
│  │  │     │  │  ├─ TableSection.php
│  │  │     │  │  ├─ TableSectionRenderer.php
│  │  │     │  │  └─ TableStartParser.php
│  │  │     │  ├─ TableOfContents
│  │  │     │  │  ├─ Node
│  │  │     │  │  │  ├─ TableOfContents.php
│  │  │     │  │  │  └─ TableOfContentsPlaceholder.php
│  │  │     │  │  ├─ Normalizer
│  │  │     │  │  │  ├─ AsIsNormalizerStrategy.php
│  │  │     │  │  │  ├─ FlatNormalizerStrategy.php
│  │  │     │  │  │  ├─ NormalizerStrategyInterface.php
│  │  │     │  │  │  └─ RelativeNormalizerStrategy.php
│  │  │     │  │  ├─ TableOfContentsBuilder.php
│  │  │     │  │  ├─ TableOfContentsExtension.php
│  │  │     │  │  ├─ TableOfContentsGenerator.php
│  │  │     │  │  ├─ TableOfContentsGeneratorInterface.php
│  │  │     │  │  ├─ TableOfContentsPlaceholderParser.php
│  │  │     │  │  ├─ TableOfContentsPlaceholderRenderer.php
│  │  │     │  │  └─ TableOfContentsRenderer.php
│  │  │     │  └─ TaskList
│  │  │     │     ├─ TaskListExtension.php
│  │  │     │     ├─ TaskListItemMarker.php
│  │  │     │     ├─ TaskListItemMarkerParser.php
│  │  │     │     └─ TaskListItemMarkerRenderer.php
│  │  │     ├─ GithubFlavoredMarkdownConverter.php
│  │  │     ├─ Input
│  │  │     │  ├─ MarkdownInput.php
│  │  │     │  └─ MarkdownInputInterface.php
│  │  │     ├─ MarkdownConverter.php
│  │  │     ├─ MarkdownConverterInterface.php
│  │  │     ├─ Node
│  │  │     │  ├─ Block
│  │  │     │  │  ├─ AbstractBlock.php
│  │  │     │  │  ├─ Document.php
│  │  │     │  │  ├─ Paragraph.php
│  │  │     │  │  └─ TightBlockInterface.php
│  │  │     │  ├─ Inline
│  │  │     │  │  ├─ AbstractInline.php
│  │  │     │  │  ├─ AbstractStringContainer.php
│  │  │     │  │  ├─ AdjacentTextMerger.php
│  │  │     │  │  ├─ DelimitedInterface.php
│  │  │     │  │  ├─ Newline.php
│  │  │     │  │  └─ Text.php
│  │  │     │  ├─ Node.php
│  │  │     │  ├─ NodeIterator.php
│  │  │     │  ├─ NodeWalker.php
│  │  │     │  ├─ NodeWalkerEvent.php
│  │  │     │  ├─ Query
│  │  │     │  │  ├─ AndExpr.php
│  │  │     │  │  ├─ ExpressionInterface.php
│  │  │     │  │  └─ OrExpr.php
│  │  │     │  ├─ Query.php
│  │  │     │  ├─ RawMarkupContainerInterface.php
│  │  │     │  ├─ StringContainerHelper.php
│  │  │     │  └─ StringContainerInterface.php
│  │  │     ├─ Normalizer
│  │  │     │  ├─ SlugNormalizer.php
│  │  │     │  ├─ TextNormalizer.php
│  │  │     │  ├─ TextNormalizerInterface.php
│  │  │     │  ├─ UniqueSlugNormalizer.php
│  │  │     │  └─ UniqueSlugNormalizerInterface.php
│  │  │     ├─ Output
│  │  │     │  ├─ RenderedContent.php
│  │  │     │  └─ RenderedContentInterface.php
│  │  │     ├─ Parser
│  │  │     │  ├─ Block
│  │  │     │  │  ├─ AbstractBlockContinueParser.php
│  │  │     │  │  ├─ BlockContinue.php
│  │  │     │  │  ├─ BlockContinueParserInterface.php
│  │  │     │  │  ├─ BlockContinueParserWithInlinesInterface.php
│  │  │     │  │  ├─ BlockStart.php
│  │  │     │  │  ├─ BlockStartParserInterface.php
│  │  │     │  │  ├─ DocumentBlockParser.php
│  │  │     │  │  ├─ ParagraphParser.php
│  │  │     │  │  └─ SkipLinesStartingWithLettersParser.php
│  │  │     │  ├─ Cursor.php
│  │  │     │  ├─ CursorState.php
│  │  │     │  ├─ Inline
│  │  │     │  │  ├─ InlineParserInterface.php
│  │  │     │  │  ├─ InlineParserMatch.php
│  │  │     │  │  └─ NewlineParser.php
│  │  │     │  ├─ InlineParserContext.php
│  │  │     │  ├─ InlineParserEngine.php
│  │  │     │  ├─ InlineParserEngineInterface.php
│  │  │     │  ├─ MarkdownParser.php
│  │  │     │  ├─ MarkdownParserInterface.php
│  │  │     │  ├─ MarkdownParserState.php
│  │  │     │  ├─ MarkdownParserStateInterface.php
│  │  │     │  └─ ParserLogicException.php
│  │  │     ├─ Reference
│  │  │     │  ├─ MemoryLimitedReferenceMap.php
│  │  │     │  ├─ Reference.php
│  │  │     │  ├─ ReferenceableInterface.php
│  │  │     │  ├─ ReferenceInterface.php
│  │  │     │  ├─ ReferenceMap.php
│  │  │     │  ├─ ReferenceMapInterface.php
│  │  │     │  └─ ReferenceParser.php
│  │  │     ├─ Renderer
│  │  │     │  ├─ Block
│  │  │     │  │  ├─ DocumentRenderer.php
│  │  │     │  │  └─ ParagraphRenderer.php
│  │  │     │  ├─ ChildNodeRendererInterface.php
│  │  │     │  ├─ DocumentRendererInterface.php
│  │  │     │  ├─ HtmlDecorator.php
│  │  │     │  ├─ HtmlRenderer.php
│  │  │     │  ├─ Inline
│  │  │     │  │  ├─ NewlineRenderer.php
│  │  │     │  │  └─ TextRenderer.php
│  │  │     │  ├─ MarkdownRendererInterface.php
│  │  │     │  ├─ NodeRendererInterface.php
│  │  │     │  └─ NoMatchingRendererException.php
│  │  │     ├─ Util
│  │  │     │  ├─ ArrayCollection.php
│  │  │     │  ├─ Html5EntityDecoder.php
│  │  │     │  ├─ HtmlElement.php
│  │  │     │  ├─ HtmlFilter.php
│  │  │     │  ├─ LinkParserHelper.php
│  │  │     │  ├─ PrioritizedList.php
│  │  │     │  ├─ RegexHelper.php
│  │  │     │  ├─ SpecReader.php
│  │  │     │  ├─ UrlEncoder.php
│  │  │     │  └─ Xml.php
│  │  │     └─ Xml
│  │  │        ├─ FallbackNodeXmlRenderer.php
│  │  │        ├─ MarkdownToXmlConverter.php
│  │  │        ├─ XmlNodeRendererInterface.php
│  │  │        └─ XmlRenderer.php
│  │  ├─ config
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE.md
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     ├─ Configuration.php
│  │  │     ├─ ConfigurationAwareInterface.php
│  │  │     ├─ ConfigurationBuilderInterface.php
│  │  │     ├─ ConfigurationInterface.php
│  │  │     ├─ ConfigurationProviderInterface.php
│  │  │     ├─ Exception
│  │  │     │  ├─ ConfigurationExceptionInterface.php
│  │  │     │  ├─ InvalidConfigurationException.php
│  │  │     │  ├─ UnknownOptionException.php
│  │  │     │  └─ ValidationException.php
│  │  │     ├─ MutableConfigurationInterface.php
│  │  │     ├─ ReadOnlyConfiguration.php
│  │  │     └─ SchemaBuilderInterface.php
│  │  ├─ event
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  └─ src
│  │  │     ├─ BufferedEventDispatcher.php
│  │  │     ├─ EventDispatcher.php
│  │  │     ├─ EventDispatcherAware.php
│  │  │     ├─ EventDispatcherAwareBehavior.php
│  │  │     ├─ EventDispatchingListenerRegistry.php
│  │  │     ├─ EventGenerator.php
│  │  │     ├─ EventGeneratorBehavior.php
│  │  │     ├─ HasEventName.php
│  │  │     ├─ Listener.php
│  │  │     ├─ ListenerPriority.php
│  │  │     ├─ ListenerRegistry.php
│  │  │     ├─ ListenerSubscriber.php
│  │  │     ├─ OneTimeListener.php
│  │  │     ├─ PrioritizedListenerRegistry.php
│  │  │     ├─ PrioritizedListenersForEvent.php
│  │  │     └─ UnableToSubscribeListener.php
│  │  ├─ flysystem
│  │  │  ├─ composer.json
│  │  │  ├─ INFO.md
│  │  │  ├─ LICENSE
│  │  │  ├─ readme.md
│  │  │  └─ src
│  │  │     ├─ CalculateChecksumFromStream.php
│  │  │     ├─ ChecksumAlgoIsNotSupported.php
│  │  │     ├─ ChecksumProvider.php
│  │  │     ├─ Config.php
│  │  │     ├─ CorruptedPathDetected.php
│  │  │     ├─ DecoratedAdapter.php
│  │  │     ├─ DirectoryAttributes.php
│  │  │     ├─ DirectoryListing.php
│  │  │     ├─ FileAttributes.php
│  │  │     ├─ Filesystem.php
│  │  │     ├─ FilesystemAdapter.php
│  │  │     ├─ FilesystemException.php
│  │  │     ├─ FilesystemOperationFailed.php
│  │  │     ├─ FilesystemOperator.php
│  │  │     ├─ FilesystemReader.php
│  │  │     ├─ FilesystemWriter.php
│  │  │     ├─ InvalidStreamProvided.php
│  │  │     ├─ InvalidVisibilityProvided.php
│  │  │     ├─ MountManager.php
│  │  │     ├─ PathNormalizer.php
│  │  │     ├─ PathPrefixer.php
│  │  │     ├─ PathTraversalDetected.php
│  │  │     ├─ PortableVisibilityGuard.php
│  │  │     ├─ ProxyArrayAccessToProperties.php
│  │  │     ├─ ResolveIdenticalPathConflict.php
│  │  │     ├─ StorageAttributes.php
│  │  │     ├─ SymbolicLinkEncountered.php
│  │  │     ├─ UnableToCheckDirectoryExistence.php
│  │  │     ├─ UnableToCheckExistence.php
│  │  │     ├─ UnableToCheckFileExistence.php
│  │  │     ├─ UnableToCopyFile.php
│  │  │     ├─ UnableToCreateDirectory.php
│  │  │     ├─ UnableToDeleteDirectory.php
│  │  │     ├─ UnableToDeleteFile.php
│  │  │     ├─ UnableToGeneratePublicUrl.php
│  │  │     ├─ UnableToGenerateTemporaryUrl.php
│  │  │     ├─ UnableToListContents.php
│  │  │     ├─ UnableToMountFilesystem.php
│  │  │     ├─ UnableToMoveFile.php
│  │  │     ├─ UnableToProvideChecksum.php
│  │  │     ├─ UnableToReadFile.php
│  │  │     ├─ UnableToResolveFilesystemMount.php
│  │  │     ├─ UnableToRetrieveMetadata.php
│  │  │     ├─ UnableToSetVisibility.php
│  │  │     ├─ UnableToWriteFile.php
│  │  │     ├─ UnixVisibility
│  │  │     │  ├─ PortableVisibilityConverter.php
│  │  │     │  └─ VisibilityConverter.php
│  │  │     ├─ UnreadableFileEncountered.php
│  │  │     ├─ UrlGeneration
│  │  │     │  ├─ ChainedPublicUrlGenerator.php
│  │  │     │  ├─ PrefixPublicUrlGenerator.php
│  │  │     │  ├─ PublicUrlGenerator.php
│  │  │     │  ├─ ShardedPrefixPublicUrlGenerator.php
│  │  │     │  └─ TemporaryUrlGenerator.php
│  │  │     ├─ Visibility.php
│  │  │     └─ WhitespacePathNormalizer.php
│  │  ├─ flysystem-local
│  │  │  ├─ composer.json
│  │  │  ├─ FallbackMimeTypeDetector.php
│  │  │  ├─ LICENSE
│  │  │  └─ LocalFilesystemAdapter.php
│  │  ├─ mime-type-detection
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  └─ src
│  │  │     ├─ EmptyExtensionToMimeTypeMap.php
│  │  │     ├─ ExtensionLookup.php
│  │  │     ├─ ExtensionMimeTypeDetector.php
│  │  │     ├─ ExtensionToMimeTypeMap.php
│  │  │     ├─ FinfoMimeTypeDetector.php
│  │  │     ├─ GeneratedExtensionToMimeTypeMap.php
│  │  │     ├─ MimeTypeDetector.php
│  │  │     └─ OverridingExtensionToMimeTypeMap.php
│  │  ├─ oauth2-server
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ phpcs.xml.dist
│  │  │  ├─ phpstan.neon.dist
│  │  │  └─ src
│  │  │     ├─ AuthorizationServer.php
│  │  │     ├─ AuthorizationValidators
│  │  │     │  ├─ AuthorizationValidatorInterface.php
│  │  │     │  └─ BearerTokenValidator.php
│  │  │     ├─ CodeChallengeVerifiers
│  │  │     │  ├─ CodeChallengeVerifierInterface.php
│  │  │     │  ├─ PlainVerifier.php
│  │  │     │  └─ S256Verifier.php
│  │  │     ├─ CryptKey.php
│  │  │     ├─ CryptKeyInterface.php
│  │  │     ├─ CryptTrait.php
│  │  │     ├─ Entities
│  │  │     │  ├─ AccessTokenEntityInterface.php
│  │  │     │  ├─ AuthCodeEntityInterface.php
│  │  │     │  ├─ ClientEntityInterface.php
│  │  │     │  ├─ DeviceCodeEntityInterface.php
│  │  │     │  ├─ RefreshTokenEntityInterface.php
│  │  │     │  ├─ ScopeEntityInterface.php
│  │  │     │  ├─ TokenInterface.php
│  │  │     │  ├─ Traits
│  │  │     │  │  ├─ AccessTokenTrait.php
│  │  │     │  │  ├─ AuthCodeTrait.php
│  │  │     │  │  ├─ ClientTrait.php
│  │  │     │  │  ├─ DeviceCodeTrait.php
│  │  │     │  │  ├─ EntityTrait.php
│  │  │     │  │  ├─ RefreshTokenTrait.php
│  │  │     │  │  ├─ ScopeTrait.php
│  │  │     │  │  └─ TokenEntityTrait.php
│  │  │     │  └─ UserEntityInterface.php
│  │  │     ├─ EventEmitting
│  │  │     │  ├─ AbstractEvent.php
│  │  │     │  ├─ EmitterAwareInterface.php
│  │  │     │  ├─ EmitterAwarePolyfill.php
│  │  │     │  └─ EventEmitter.php
│  │  │     ├─ Exception
│  │  │     │  ├─ OAuthServerException.php
│  │  │     │  └─ UniqueTokenIdentifierConstraintViolationException.php
│  │  │     ├─ Grant
│  │  │     │  ├─ AbstractAuthorizeGrant.php
│  │  │     │  ├─ AbstractGrant.php
│  │  │     │  ├─ AuthCodeGrant.php
│  │  │     │  ├─ ClientCredentialsGrant.php
│  │  │     │  ├─ DeviceCodeGrant.php
│  │  │     │  ├─ GrantTypeInterface.php
│  │  │     │  ├─ ImplicitGrant.php
│  │  │     │  ├─ PasswordGrant.php
│  │  │     │  └─ RefreshTokenGrant.php
│  │  │     ├─ Middleware
│  │  │     │  ├─ AuthorizationServerMiddleware.php
│  │  │     │  └─ ResourceServerMiddleware.php
│  │  │     ├─ RedirectUriValidators
│  │  │     │  ├─ RedirectUriValidator.php
│  │  │     │  └─ RedirectUriValidatorInterface.php
│  │  │     ├─ Repositories
│  │  │     │  ├─ AccessTokenRepositoryInterface.php
│  │  │     │  ├─ AuthCodeRepositoryInterface.php
│  │  │     │  ├─ ClientRepositoryInterface.php
│  │  │     │  ├─ DeviceCodeRepositoryInterface.php
│  │  │     │  ├─ RefreshTokenRepositoryInterface.php
│  │  │     │  ├─ RepositoryInterface.php
│  │  │     │  ├─ ScopeRepositoryInterface.php
│  │  │     │  └─ UserRepositoryInterface.php
│  │  │     ├─ RequestAccessTokenEvent.php
│  │  │     ├─ RequestEvent.php
│  │  │     ├─ RequestRefreshTokenEvent.php
│  │  │     ├─ RequestTypes
│  │  │     │  ├─ AuthorizationRequest.php
│  │  │     │  └─ AuthorizationRequestInterface.php
│  │  │     ├─ ResourceServer.php
│  │  │     └─ ResponseTypes
│  │  │        ├─ AbstractResponseType.php
│  │  │        ├─ BearerTokenResponse.php
│  │  │        ├─ DeviceCodeResponse.php
│  │  │        ├─ RedirectResponse.php
│  │  │        └─ ResponseTypeInterface.php
│  │  ├─ uri
│  │  │  ├─ BaseUri.php
│  │  │  ├─ composer.json
│  │  │  ├─ Http.php
│  │  │  ├─ HttpFactory.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Uri.php
│  │  │  ├─ UriInfo.php
│  │  │  ├─ UriResolver.php
│  │  │  ├─ UriTemplate
│  │  │  │  ├─ Expression.php
│  │  │  │  ├─ Operator.php
│  │  │  │  ├─ Template.php
│  │  │  │  ├─ TemplateCanNotBeExpanded.php
│  │  │  │  ├─ VariableBag.php
│  │  │  │  └─ VarSpecifier.php
│  │  │  └─ UriTemplate.php
│  │  └─ uri-interfaces
│  │     ├─ composer.json
│  │     ├─ Contracts
│  │     │  ├─ AuthorityInterface.php
│  │     │  ├─ DataPathInterface.php
│  │     │  ├─ DomainHostInterface.php
│  │     │  ├─ FragmentInterface.php
│  │     │  ├─ HostInterface.php
│  │     │  ├─ IpHostInterface.php
│  │     │  ├─ PathInterface.php
│  │     │  ├─ PortInterface.php
│  │     │  ├─ QueryInterface.php
│  │     │  ├─ SegmentedPathInterface.php
│  │     │  ├─ UriAccess.php
│  │     │  ├─ UriComponentInterface.php
│  │     │  ├─ UriException.php
│  │     │  ├─ UriInterface.php
│  │     │  └─ UserInfoInterface.php
│  │     ├─ Encoder.php
│  │     ├─ Exceptions
│  │     │  ├─ ConversionFailed.php
│  │     │  ├─ MissingFeature.php
│  │     │  ├─ OffsetOutOfBounds.php
│  │     │  └─ SyntaxError.php
│  │     ├─ FeatureDetection.php
│  │     ├─ Idna
│  │     │  ├─ Converter.php
│  │     │  ├─ Error.php
│  │     │  ├─ Option.php
│  │     │  └─ Result.php
│  │     ├─ IPv4
│  │     │  ├─ BCMathCalculator.php
│  │     │  ├─ Calculator.php
│  │     │  ├─ Converter.php
│  │     │  ├─ GMPCalculator.php
│  │     │  └─ NativeCalculator.php
│  │     ├─ IPv6
│  │     │  └─ Converter.php
│  │     ├─ KeyValuePair
│  │     │  └─ Converter.php
│  │     ├─ LICENSE
│  │     ├─ QueryString.php
│  │     └─ UriString.php
│  ├─ maatwebsite
│  │  └─ excel
│  │     ├─ .travis.yml
│  │     ├─ composer.json
│  │     ├─ docs
│  │     │  ├─ blade
│  │     │  │  ├─ load-view.md
│  │     │  │  ├─ styling.md
│  │     │  │  └─ vars.md
│  │     │  ├─ blade.md
│  │     │  ├─ borders.md
│  │     │  ├─ changelog
│  │     │  │  └─ version-1.md
│  │     │  ├─ changelog.md
│  │     │  ├─ export
│  │     │  │  ├─ array.md
│  │     │  │  ├─ autofilter.md
│  │     │  │  ├─ autosize.md
│  │     │  │  ├─ call.md
│  │     │  │  ├─ cells.md
│  │     │  │  ├─ export.md
│  │     │  │  ├─ format.md
│  │     │  │  ├─ freeze.md
│  │     │  │  ├─ merge.md
│  │     │  │  ├─ rows.md
│  │     │  │  ├─ sheet-styling.md
│  │     │  │  ├─ sheets.md
│  │     │  │  ├─ simple.md
│  │     │  │  ├─ sizing.md
│  │     │  │  └─ store.md
│  │     │  ├─ export.md
│  │     │  ├─ formats.md
│  │     │  ├─ getting-started
│  │     │  │  ├─ config.md
│  │     │  │  ├─ contributing.md
│  │     │  │  ├─ installation.md
│  │     │  │  ├─ license.md
│  │     │  │  └─ requirements.md
│  │     │  ├─ getting-started.md
│  │     │  ├─ import
│  │     │  │  ├─ basics.md
│  │     │  │  ├─ batch.md
│  │     │  │  ├─ cache.md
│  │     │  │  ├─ calculation.md
│  │     │  │  ├─ config.md
│  │     │  │  ├─ dates.md
│  │     │  │  ├─ extra.md
│  │     │  │  ├─ results.md
│  │     │  │  └─ select.md
│  │     │  ├─ import.md
│  │     │  ├─ merge.md
│  │     │  ├─ reference-guide
│  │     │  │  ├─ borders.md
│  │     │  │  ├─ closures.md
│  │     │  │  ├─ css-styles.md
│  │     │  │  ├─ file-properties.md
│  │     │  │  ├─ formatting.md
│  │     │  │  └─ sheet-properties.md
│  │     │  └─ reference-guide.md
│  │     ├─ LICENSE
│  │     ├─ phpunit.xml
│  │     ├─ provides.json
│  │     ├─ README.md
│  │     ├─ src
│  │     │  ├─ config
│  │     │  │  ├─ cache.php
│  │     │  │  ├─ config.php
│  │     │  │  ├─ csv.php
│  │     │  │  ├─ export.php
│  │     │  │  ├─ import.php
│  │     │  │  └─ views.php
│  │     │  └─ Maatwebsite
│  │     │     └─ Excel
│  │     │        ├─ Classes
│  │     │        │  ├─ Cache.php
│  │     │        │  ├─ FormatIdentifier.php
│  │     │        │  ├─ LaravelExcelWorksheet.php
│  │     │        │  └─ PHPExcel.php
│  │     │        ├─ Collections
│  │     │        │  ├─ CellCollection.php
│  │     │        │  ├─ ExcelCollection.php
│  │     │        │  ├─ RowCollection.php
│  │     │        │  └─ SheetCollection.php
│  │     │        ├─ Excel.php
│  │     │        ├─ ExcelServiceProvider.php
│  │     │        ├─ Exceptions
│  │     │        │  └─ LaravelExcelException.php
│  │     │        ├─ Facades
│  │     │        │  └─ Excel.php
│  │     │        ├─ Parsers
│  │     │        │  ├─ CssParser.php
│  │     │        │  ├─ ExcelParser.php
│  │     │        │  └─ ViewParser.php
│  │     │        ├─ Readers
│  │     │        │  ├─ Batch.php
│  │     │        │  ├─ ConfigReader.php
│  │     │        │  ├─ HtmlReader.php
│  │     │        │  └─ LaravelExcelReader.php
│  │     │        └─ Writers
│  │     │           ├─ CellWriter.php
│  │     │           └─ LaravelExcelWriter.php
│  │     └─ tests
│  │        ├─ Excel
│  │        │  ├─ ExcelTestCase.php
│  │        │  └─ ExcelTester.php
│  │        ├─ Readers
│  │        │  ├─ ChineseXlsReaderTest.php
│  │        │  ├─ CsvReaderTest.php
│  │        │  ├─ files
│  │        │  │  ├─ chinese.xls
│  │        │  │  ├─ multiple.xls
│  │        │  │  ├─ test.csv
│  │        │  │  ├─ test.xls
│  │        │  │  └─ test.xlsx
│  │        │  ├─ MultipleSheetsXlsReaderTest.php
│  │        │  ├─ ReaderTest.php
│  │        │  ├─ traits
│  │        │  │  ├─ ImportTrait.php
│  │        │  │  └─ SingleImportTestingTrait.php
│  │        │  ├─ XlsReaderTest.php
│  │        │  └─ XlsxReaderTest.php
│  │        ├─ TestCase.php
│  │        ├─ TestConfig.php
│  │        ├─ TestServiceProvider.php
│  │        └─ Writers
│  │           └─ ExcelWriterTest.php
│  ├─ maennchen
│  │  └─ zipstream-php
│  │     ├─ .editorconfig
│  │     ├─ .phive
│  │     │  └─ phars.xml
│  │     ├─ .php-cs-fixer.dist.php
│  │     ├─ .phpdoc
│  │     │  └─ template
│  │     │     └─ base.html.twig
│  │     ├─ .tool-versions
│  │     ├─ composer.json
│  │     ├─ guides
│  │     │  ├─ ContentLength.rst
│  │     │  ├─ FlySystem.rst
│  │     │  ├─ index.rst
│  │     │  ├─ Nginx.rst
│  │     │  ├─ Options.rst
│  │     │  ├─ PSR7Streams.rst
│  │     │  ├─ StreamOutput.rst
│  │     │  ├─ Symfony.rst
│  │     │  └─ Varnish.rst
│  │     ├─ LICENSE
│  │     ├─ phpdoc.dist.xml
│  │     ├─ phpunit.xml.dist
│  │     ├─ psalm.xml
│  │     ├─ README.md
│  │     ├─ src
│  │     │  ├─ CentralDirectoryFileHeader.php
│  │     │  ├─ CompressionMethod.php
│  │     │  ├─ DataDescriptor.php
│  │     │  ├─ EndOfCentralDirectory.php
│  │     │  ├─ Exception
│  │     │  │  ├─ DosTimeOverflowException.php
│  │     │  │  ├─ FileNotFoundException.php
│  │     │  │  ├─ FileNotReadableException.php
│  │     │  │  ├─ FileSizeIncorrectException.php
│  │     │  │  ├─ OverflowException.php
│  │     │  │  ├─ ResourceActionException.php
│  │     │  │  ├─ SimulationFileUnknownException.php
│  │     │  │  ├─ StreamNotReadableException.php
│  │     │  │  └─ StreamNotSeekableException.php
│  │     │  ├─ Exception.php
│  │     │  ├─ File.php
│  │     │  ├─ GeneralPurposeBitFlag.php
│  │     │  ├─ LocalFileHeader.php
│  │     │  ├─ OperationMode.php
│  │     │  ├─ PackField.php
│  │     │  ├─ Time.php
│  │     │  ├─ Version.php
│  │     │  ├─ Zip64
│  │     │  │  ├─ DataDescriptor.php
│  │     │  │  ├─ EndOfCentralDirectory.php
│  │     │  │  ├─ EndOfCentralDirectoryLocator.php
│  │     │  │  └─ ExtendedInformationExtraField.php
│  │     │  ├─ ZipStream.php
│  │     │  └─ Zs
│  │     │     └─ ExtendedInformationExtraField.php
│  │     └─ test
│  │        ├─ Assertions.php
│  │        ├─ bootstrap.php
│  │        ├─ CentralDirectoryFileHeaderTest.php
│  │        ├─ DataDescriptorTest.php
│  │        ├─ EndlessCycleStream.php
│  │        ├─ EndOfCentralDirectoryTest.php
│  │        ├─ FaultInjectionResource.php
│  │        ├─ LocalFileHeaderTest.php
│  │        ├─ PackFieldTest.php
│  │        ├─ ResourceStream.php
│  │        ├─ Tempfile.php
│  │        ├─ TimeTest.php
│  │        ├─ Util.php
│  │        ├─ Zip64
│  │        │  ├─ DataDescriptorTest.php
│  │        │  ├─ EndOfCentralDirectoryLocatorTest.php
│  │        │  ├─ EndOfCentralDirectoryTest.php
│  │        │  └─ ExtendedInformationExtraFieldTest.php
│  │        ├─ ZipStreamTest.php
│  │        └─ Zs
│  │           └─ ExtendedInformationExtraFieldTest.php
│  ├─ markbaker
│  │  ├─ complex
│  │  │  ├─ classes
│  │  │  │  └─ src
│  │  │  │     ├─ Complex.php
│  │  │  │     ├─ Exception.php
│  │  │  │     ├─ Functions.php
│  │  │  │     └─ Operations.php
│  │  │  ├─ composer.json
│  │  │  ├─ examples
│  │  │  │  ├─ complexTest.php
│  │  │  │  ├─ testFunctions.php
│  │  │  │  └─ testOperations.php
│  │  │  ├─ license.md
│  │  │  └─ README.md
│  │  └─ matrix
│  │     ├─ buildPhar.php
│  │     ├─ classes
│  │     │  └─ src
│  │     │     ├─ Builder.php
│  │     │     ├─ Decomposition
│  │     │     │  ├─ Decomposition.php
│  │     │     │  ├─ LU.php
│  │     │     │  └─ QR.php
│  │     │     ├─ Div0Exception.php
│  │     │     ├─ Exception.php
│  │     │     ├─ Functions.php
│  │     │     ├─ Matrix.php
│  │     │     ├─ Operations.php
│  │     │     └─ Operators
│  │     │        ├─ Addition.php
│  │     │        ├─ DirectSum.php
│  │     │        ├─ Division.php
│  │     │        ├─ Multiplication.php
│  │     │        ├─ Operator.php
│  │     │        └─ Subtraction.php
│  │     ├─ composer.json
│  │     ├─ examples
│  │     │  └─ test.php
│  │     ├─ infection.json.dist
│  │     ├─ license.md
│  │     ├─ phpstan.neon
│  │     └─ README.md
│  ├─ monolog
│  │  └─ monolog
│  │     ├─ CHANGELOG.md
│  │     ├─ composer.json
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     └─ src
│  │        └─ Monolog
│  │           ├─ Attribute
│  │           │  ├─ AsMonologProcessor.php
│  │           │  └─ WithMonologChannel.php
│  │           ├─ DateTimeImmutable.php
│  │           ├─ ErrorHandler.php
│  │           ├─ Formatter
│  │           │  ├─ ChromePHPFormatter.php
│  │           │  ├─ ElasticaFormatter.php
│  │           │  ├─ ElasticsearchFormatter.php
│  │           │  ├─ FlowdockFormatter.php
│  │           │  ├─ FluentdFormatter.php
│  │           │  ├─ FormatterInterface.php
│  │           │  ├─ GelfMessageFormatter.php
│  │           │  ├─ GoogleCloudLoggingFormatter.php
│  │           │  ├─ HtmlFormatter.php
│  │           │  ├─ JsonFormatter.php
│  │           │  ├─ LineFormatter.php
│  │           │  ├─ LogglyFormatter.php
│  │           │  ├─ LogmaticFormatter.php
│  │           │  ├─ LogstashFormatter.php
│  │           │  ├─ MongoDBFormatter.php
│  │           │  ├─ NormalizerFormatter.php
│  │           │  ├─ ScalarFormatter.php
│  │           │  ├─ SyslogFormatter.php
│  │           │  └─ WildfireFormatter.php
│  │           ├─ Handler
│  │           │  ├─ AbstractHandler.php
│  │           │  ├─ AbstractProcessingHandler.php
│  │           │  ├─ AbstractSyslogHandler.php
│  │           │  ├─ AmqpHandler.php
│  │           │  ├─ BrowserConsoleHandler.php
│  │           │  ├─ BufferHandler.php
│  │           │  ├─ ChromePHPHandler.php
│  │           │  ├─ CouchDBHandler.php
│  │           │  ├─ CubeHandler.php
│  │           │  ├─ Curl
│  │           │  │  └─ Util.php
│  │           │  ├─ DeduplicationHandler.php
│  │           │  ├─ DoctrineCouchDBHandler.php
│  │           │  ├─ DynamoDbHandler.php
│  │           │  ├─ ElasticaHandler.php
│  │           │  ├─ ElasticsearchHandler.php
│  │           │  ├─ ErrorLogHandler.php
│  │           │  ├─ FallbackGroupHandler.php
│  │           │  ├─ FilterHandler.php
│  │           │  ├─ FingersCrossed
│  │           │  │  ├─ ActivationStrategyInterface.php
│  │           │  │  ├─ ChannelLevelActivationStrategy.php
│  │           │  │  └─ ErrorLevelActivationStrategy.php
│  │           │  ├─ FingersCrossedHandler.php
│  │           │  ├─ FirePHPHandler.php
│  │           │  ├─ FleepHookHandler.php
│  │           │  ├─ FlowdockHandler.php
│  │           │  ├─ FormattableHandlerInterface.php
│  │           │  ├─ FormattableHandlerTrait.php
│  │           │  ├─ GelfHandler.php
│  │           │  ├─ GroupHandler.php
│  │           │  ├─ Handler.php
│  │           │  ├─ HandlerInterface.php
│  │           │  ├─ HandlerWrapper.php
│  │           │  ├─ IFTTTHandler.php
│  │           │  ├─ InsightOpsHandler.php
│  │           │  ├─ LogEntriesHandler.php
│  │           │  ├─ LogglyHandler.php
│  │           │  ├─ LogmaticHandler.php
│  │           │  ├─ MailHandler.php
│  │           │  ├─ MandrillHandler.php
│  │           │  ├─ MissingExtensionException.php
│  │           │  ├─ MongoDBHandler.php
│  │           │  ├─ NativeMailerHandler.php
│  │           │  ├─ NewRelicHandler.php
│  │           │  ├─ NoopHandler.php
│  │           │  ├─ NullHandler.php
│  │           │  ├─ OverflowHandler.php
│  │           │  ├─ PHPConsoleHandler.php
│  │           │  ├─ ProcessableHandlerInterface.php
│  │           │  ├─ ProcessableHandlerTrait.php
│  │           │  ├─ ProcessHandler.php
│  │           │  ├─ PsrHandler.php
│  │           │  ├─ PushoverHandler.php
│  │           │  ├─ RedisHandler.php
│  │           │  ├─ RedisPubSubHandler.php
│  │           │  ├─ RollbarHandler.php
│  │           │  ├─ RotatingFileHandler.php
│  │           │  ├─ SamplingHandler.php
│  │           │  ├─ SendGridHandler.php
│  │           │  ├─ Slack
│  │           │  │  └─ SlackRecord.php
│  │           │  ├─ SlackHandler.php
│  │           │  ├─ SlackWebhookHandler.php
│  │           │  ├─ SocketHandler.php
│  │           │  ├─ SqsHandler.php
│  │           │  ├─ StreamHandler.php
│  │           │  ├─ SymfonyMailerHandler.php
│  │           │  ├─ SyslogHandler.php
│  │           │  ├─ SyslogUdp
│  │           │  │  └─ UdpSocket.php
│  │           │  ├─ SyslogUdpHandler.php
│  │           │  ├─ TelegramBotHandler.php
│  │           │  ├─ TestHandler.php
│  │           │  ├─ WebRequestRecognizerTrait.php
│  │           │  ├─ WhatFailureGroupHandler.php
│  │           │  └─ ZendMonitorHandler.php
│  │           ├─ JsonSerializableDateTimeImmutable.php
│  │           ├─ Level.php
│  │           ├─ Logger.php
│  │           ├─ LogRecord.php
│  │           ├─ Processor
│  │           │  ├─ ClosureContextProcessor.php
│  │           │  ├─ GitProcessor.php
│  │           │  ├─ HostnameProcessor.php
│  │           │  ├─ IntrospectionProcessor.php
│  │           │  ├─ LoadAverageProcessor.php
│  │           │  ├─ MemoryPeakUsageProcessor.php
│  │           │  ├─ MemoryProcessor.php
│  │           │  ├─ MemoryUsageProcessor.php
│  │           │  ├─ MercurialProcessor.php
│  │           │  ├─ ProcessIdProcessor.php
│  │           │  ├─ ProcessorInterface.php
│  │           │  ├─ PsrLogMessageProcessor.php
│  │           │  ├─ TagProcessor.php
│  │           │  ├─ UidProcessor.php
│  │           │  └─ WebProcessor.php
│  │           ├─ Registry.php
│  │           ├─ ResettableInterface.php
│  │           ├─ SignalHandler.php
│  │           ├─ Test
│  │           │  ├─ MonologTestCase.php
│  │           │  └─ TestCase.php
│  │           └─ Utils.php
│  ├─ nesbot
│  │  └─ carbon
│  │     ├─ .phpstorm.meta.php
│  │     ├─ bin
│  │     │  ├─ carbon
│  │     │  └─ carbon.bat
│  │     ├─ composer.json
│  │     ├─ extension.neon
│  │     ├─ lazy
│  │     │  └─ Carbon
│  │     │     ├─ MessageFormatter
│  │     │     │  ├─ MessageFormatterMapperStrongType.php
│  │     │     │  └─ MessageFormatterMapperWeakType.php
│  │     │     ├─ ProtectedDatePeriod.php
│  │     │     ├─ TranslatorStrongType.php
│  │     │     ├─ TranslatorWeakType.php
│  │     │     └─ UnprotectedDatePeriod.php
│  │     ├─ LICENSE
│  │     ├─ readme.md
│  │     ├─ sponsors.php
│  │     └─ src
│  │        └─ Carbon
│  │           ├─ AbstractTranslator.php
│  │           ├─ Callback.php
│  │           ├─ Carbon.php
│  │           ├─ CarbonConverterInterface.php
│  │           ├─ CarbonImmutable.php
│  │           ├─ CarbonInterface.php
│  │           ├─ CarbonInterval.php
│  │           ├─ CarbonPeriod.php
│  │           ├─ CarbonPeriodImmutable.php
│  │           ├─ CarbonTimeZone.php
│  │           ├─ Cli
│  │           │  └─ Invoker.php
│  │           ├─ Exceptions
│  │           │  ├─ BadComparisonUnitException.php
│  │           │  ├─ BadFluentConstructorException.php
│  │           │  ├─ BadFluentSetterException.php
│  │           │  ├─ BadMethodCallException.php
│  │           │  ├─ EndLessPeriodException.php
│  │           │  ├─ Exception.php
│  │           │  ├─ ImmutableException.php
│  │           │  ├─ InvalidArgumentException.php
│  │           │  ├─ InvalidCastException.php
│  │           │  ├─ InvalidDateException.php
│  │           │  ├─ InvalidFormatException.php
│  │           │  ├─ InvalidIntervalException.php
│  │           │  ├─ InvalidPeriodDateException.php
│  │           │  ├─ InvalidPeriodParameterException.php
│  │           │  ├─ InvalidTimeZoneException.php
│  │           │  ├─ InvalidTypeException.php
│  │           │  ├─ NotACarbonClassException.php
│  │           │  ├─ NotAPeriodException.php
│  │           │  ├─ NotLocaleAwareException.php
│  │           │  ├─ OutOfRangeException.php
│  │           │  ├─ ParseErrorException.php
│  │           │  ├─ RuntimeException.php
│  │           │  ├─ UnitException.php
│  │           │  ├─ UnitNotConfiguredException.php
│  │           │  ├─ UnknownGetterException.php
│  │           │  ├─ UnknownMethodException.php
│  │           │  ├─ UnknownSetterException.php
│  │           │  ├─ UnknownUnitException.php
│  │           │  ├─ UnreachableException.php
│  │           │  └─ UnsupportedUnitException.php
│  │           ├─ Factory.php
│  │           ├─ FactoryImmutable.php
│  │           ├─ Lang
│  │           │  ├─ aa.php
│  │           │  ├─ aa_DJ.php
│  │           │  ├─ aa_ER.php
│  │           │  ├─ aa_ER@saaho.php
│  │           │  ├─ aa_ET.php
│  │           │  ├─ af.php
│  │           │  ├─ af_NA.php
│  │           │  ├─ af_ZA.php
│  │           │  ├─ agq.php
│  │           │  ├─ agr.php
│  │           │  ├─ agr_PE.php
│  │           │  ├─ ak.php
│  │           │  ├─ ak_GH.php
│  │           │  ├─ am.php
│  │           │  ├─ am_ET.php
│  │           │  ├─ an.php
│  │           │  ├─ anp.php
│  │           │  ├─ anp_IN.php
│  │           │  ├─ an_ES.php
│  │           │  ├─ ar.php
│  │           │  ├─ ar_AE.php
│  │           │  ├─ ar_BH.php
│  │           │  ├─ ar_DJ.php
│  │           │  ├─ ar_DZ.php
│  │           │  ├─ ar_EG.php
│  │           │  ├─ ar_EH.php
│  │           │  ├─ ar_ER.php
│  │           │  ├─ ar_IL.php
│  │           │  ├─ ar_IN.php
│  │           │  ├─ ar_IQ.php
│  │           │  ├─ ar_JO.php
│  │           │  ├─ ar_KM.php
│  │           │  ├─ ar_KW.php
│  │           │  ├─ ar_LB.php
│  │           │  ├─ ar_LY.php
│  │           │  ├─ ar_MA.php
│  │           │  ├─ ar_MR.php
│  │           │  ├─ ar_OM.php
│  │           │  ├─ ar_PS.php
│  │           │  ├─ ar_QA.php
│  │           │  ├─ ar_SA.php
│  │           │  ├─ ar_SD.php
│  │           │  ├─ ar_Shakl.php
│  │           │  ├─ ar_SO.php
│  │           │  ├─ ar_SS.php
│  │           │  ├─ ar_SY.php
│  │           │  ├─ ar_TD.php
│  │           │  ├─ ar_TN.php
│  │           │  ├─ ar_YE.php
│  │           │  ├─ as.php
│  │           │  ├─ asa.php
│  │           │  ├─ ast.php
│  │           │  ├─ ast_ES.php
│  │           │  ├─ as_IN.php
│  │           │  ├─ ayc.php
│  │           │  ├─ ayc_PE.php
│  │           │  ├─ az.php
│  │           │  ├─ az_AZ.php
│  │           │  ├─ az_Cyrl.php
│  │           │  ├─ az_IR.php
│  │           │  ├─ az_Latn.php
│  │           │  ├─ bas.php
│  │           │  ├─ be.php
│  │           │  ├─ bem.php
│  │           │  ├─ bem_ZM.php
│  │           │  ├─ ber.php
│  │           │  ├─ ber_DZ.php
│  │           │  ├─ ber_MA.php
│  │           │  ├─ bez.php
│  │           │  ├─ be_BY.php
│  │           │  ├─ be_BY@latin.php
│  │           │  ├─ bg.php
│  │           │  ├─ bg_BG.php
│  │           │  ├─ bhb.php
│  │           │  ├─ bhb_IN.php
│  │           │  ├─ bho.php
│  │           │  ├─ bho_IN.php
│  │           │  ├─ bi.php
│  │           │  ├─ bi_VU.php
│  │           │  ├─ bm.php
│  │           │  ├─ bn.php
│  │           │  ├─ bn_BD.php
│  │           │  ├─ bn_IN.php
│  │           │  ├─ bo.php
│  │           │  ├─ bo_CN.php
│  │           │  ├─ bo_IN.php
│  │           │  ├─ br.php
│  │           │  ├─ brx.php
│  │           │  ├─ brx_IN.php
│  │           │  ├─ br_FR.php
│  │           │  ├─ bs.php
│  │           │  ├─ bs_BA.php
│  │           │  ├─ bs_Cyrl.php
│  │           │  ├─ bs_Latn.php
│  │           │  ├─ byn.php
│  │           │  ├─ byn_ER.php
│  │           │  ├─ ca.php
│  │           │  ├─ ca_AD.php
│  │           │  ├─ ca_ES.php
│  │           │  ├─ ca_ES_Valencia.php
│  │           │  ├─ ca_FR.php
│  │           │  ├─ ca_IT.php
│  │           │  ├─ ccp.php
│  │           │  ├─ ccp_IN.php
│  │           │  ├─ ce.php
│  │           │  ├─ ce_RU.php
│  │           │  ├─ cgg.php
│  │           │  ├─ chr.php
│  │           │  ├─ chr_US.php
│  │           │  ├─ ckb.php
│  │           │  ├─ cmn.php
│  │           │  ├─ cmn_TW.php
│  │           │  ├─ crh.php
│  │           │  ├─ crh_UA.php
│  │           │  ├─ cs.php
│  │           │  ├─ csb.php
│  │           │  ├─ csb_PL.php
│  │           │  ├─ cs_CZ.php
│  │           │  ├─ cu.php
│  │           │  ├─ cv.php
│  │           │  ├─ cv_RU.php
│  │           │  ├─ cy.php
│  │           │  ├─ cy_GB.php
│  │           │  ├─ da.php
│  │           │  ├─ dav.php
│  │           │  ├─ da_DK.php
│  │           │  ├─ da_GL.php
│  │           │  ├─ de.php
│  │           │  ├─ de_AT.php
│  │           │  ├─ de_BE.php
│  │           │  ├─ de_CH.php
│  │           │  ├─ de_DE.php
│  │           │  ├─ de_IT.php
│  │           │  ├─ de_LI.php
│  │           │  ├─ de_LU.php
│  │           │  ├─ dje.php
│  │           │  ├─ doi.php
│  │           │  ├─ doi_IN.php
│  │           │  ├─ dsb.php
│  │           │  ├─ dsb_DE.php
│  │           │  ├─ dua.php
│  │           │  ├─ dv.php
│  │           │  ├─ dv_MV.php
│  │           │  ├─ dyo.php
│  │           │  ├─ dz.php
│  │           │  ├─ dz_BT.php
│  │           │  ├─ ebu.php
│  │           │  ├─ ee.php
│  │           │  ├─ ee_TG.php
│  │           │  ├─ el.php
│  │           │  ├─ el_CY.php
│  │           │  ├─ el_GR.php
│  │           │  ├─ en.php
│  │           │  ├─ en_001.php
│  │           │  ├─ en_150.php
│  │           │  ├─ en_AG.php
│  │           │  ├─ en_AI.php
│  │           │  ├─ en_AS.php
│  │           │  ├─ en_AT.php
│  │           │  ├─ en_AU.php
│  │           │  ├─ en_BB.php
│  │           │  ├─ en_BE.php
│  │           │  ├─ en_BI.php
│  │           │  ├─ en_BM.php
│  │           │  ├─ en_BS.php
│  │           │  ├─ en_BW.php
│  │           │  ├─ en_BZ.php
│  │           │  ├─ en_CA.php
│  │           │  ├─ en_CC.php
│  │           │  ├─ en_CH.php
│  │           │  ├─ en_CK.php
│  │           │  ├─ en_CM.php
│  │           │  ├─ en_CX.php
│  │           │  ├─ en_CY.php
│  │           │  ├─ en_DE.php
│  │           │  ├─ en_DG.php
│  │           │  ├─ en_DK.php
│  │           │  ├─ en_DM.php
│  │           │  ├─ en_ER.php
│  │           │  ├─ en_FI.php
│  │           │  ├─ en_FJ.php
│  │           │  ├─ en_FK.php
│  │           │  ├─ en_FM.php
│  │           │  ├─ en_GB.php
│  │           │  ├─ en_GD.php
│  │           │  ├─ en_GG.php
│  │           │  ├─ en_GH.php
│  │           │  ├─ en_GI.php
│  │           │  ├─ en_GM.php
│  │           │  ├─ en_GU.php
│  │           │  ├─ en_GY.php
│  │           │  ├─ en_HK.php
│  │           │  ├─ en_IE.php
│  │           │  ├─ en_IL.php
│  │           │  ├─ en_IM.php
│  │           │  ├─ en_IN.php
│  │           │  ├─ en_IO.php
│  │           │  ├─ en_ISO.php
│  │           │  ├─ en_JE.php
│  │           │  ├─ en_JM.php
│  │           │  ├─ en_KE.php
│  │           │  ├─ en_KI.php
│  │           │  ├─ en_KN.php
│  │           │  ├─ en_KY.php
│  │           │  ├─ en_LC.php
│  │           │  ├─ en_LR.php
│  │           │  ├─ en_LS.php
│  │           │  ├─ en_MG.php
│  │           │  ├─ en_MH.php
│  │           │  ├─ en_MO.php
│  │           │  ├─ en_MP.php
│  │           │  ├─ en_MS.php
│  │           │  ├─ en_MT.php
│  │           │  ├─ en_MU.php
│  │           │  ├─ en_MW.php
│  │           │  ├─ en_MY.php
│  │           │  ├─ en_NA.php
│  │           │  ├─ en_NF.php
│  │           │  ├─ en_NG.php
│  │           │  ├─ en_NL.php
│  │           │  ├─ en_NR.php
│  │           │  ├─ en_NU.php
│  │           │  ├─ en_NZ.php
│  │           │  ├─ en_PG.php
│  │           │  ├─ en_PH.php
│  │           │  ├─ en_PK.php
│  │           │  ├─ en_PN.php
│  │           │  ├─ en_PR.php
│  │           │  ├─ en_PW.php
│  │           │  ├─ en_RW.php
│  │           │  ├─ en_SB.php
│  │           │  ├─ en_SC.php
│  │           │  ├─ en_SD.php
│  │           │  ├─ en_SE.php
│  │           │  ├─ en_SG.php
│  │           │  ├─ en_SH.php
│  │           │  ├─ en_SI.php
│  │           │  ├─ en_SL.php
│  │           │  ├─ en_SS.php
│  │           │  ├─ en_SX.php
│  │           │  ├─ en_SZ.php
│  │           │  ├─ en_TC.php
│  │           │  ├─ en_TK.php
│  │           │  ├─ en_TO.php
│  │           │  ├─ en_TT.php
│  │           │  ├─ en_TV.php
│  │           │  ├─ en_TZ.php
│  │           │  ├─ en_UG.php
│  │           │  ├─ en_UM.php
│  │           │  ├─ en_US.php
│  │           │  ├─ en_US_Posix.php
│  │           │  ├─ en_VC.php
│  │           │  ├─ en_VG.php
│  │           │  ├─ en_VI.php
│  │           │  ├─ en_VU.php
│  │           │  ├─ en_WS.php
│  │           │  ├─ en_ZA.php
│  │           │  ├─ en_ZM.php
│  │           │  ├─ en_ZW.php
│  │           │  ├─ eo.php
│  │           │  ├─ es.php
│  │           │  ├─ es_419.php
│  │           │  ├─ es_AR.php
│  │           │  ├─ es_BO.php
│  │           │  ├─ es_BR.php
│  │           │  ├─ es_BZ.php
│  │           │  ├─ es_CL.php
│  │           │  ├─ es_CO.php
│  │           │  ├─ es_CR.php
│  │           │  ├─ es_CU.php
│  │           │  ├─ es_DO.php
│  │           │  ├─ es_EA.php
│  │           │  ├─ es_EC.php
│  │           │  ├─ es_ES.php
│  │           │  ├─ es_GQ.php
│  │           │  ├─ es_GT.php
│  │           │  ├─ es_HN.php
│  │           │  ├─ es_IC.php
│  │           │  ├─ es_MX.php
│  │           │  ├─ es_NI.php
│  │           │  ├─ es_PA.php
│  │           │  ├─ es_PE.php
│  │           │  ├─ es_PH.php
│  │           │  ├─ es_PR.php
│  │           │  ├─ es_PY.php
│  │           │  ├─ es_SV.php
│  │           │  ├─ es_US.php
│  │           │  ├─ es_UY.php
│  │           │  ├─ es_VE.php
│  │           │  ├─ et.php
│  │           │  ├─ et_EE.php
│  │           │  ├─ eu.php
│  │           │  ├─ eu_ES.php
│  │           │  ├─ ewo.php
│  │           │  ├─ fa.php
│  │           │  ├─ fa_AF.php
│  │           │  ├─ fa_IR.php
│  │           │  ├─ ff.php
│  │           │  ├─ ff_CM.php
│  │           │  ├─ ff_GN.php
│  │           │  ├─ ff_MR.php
│  │           │  ├─ ff_SN.php
│  │           │  ├─ fi.php
│  │           │  ├─ fil.php
│  │           │  ├─ fil_PH.php
│  │           │  ├─ fi_FI.php
│  │           │  ├─ fo.php
│  │           │  ├─ fo_DK.php
│  │           │  ├─ fo_FO.php
│  │           │  ├─ fr.php
│  │           │  ├─ fr_BE.php
│  │           │  ├─ fr_BF.php
│  │           │  ├─ fr_BI.php
│  │           │  ├─ fr_BJ.php
│  │           │  ├─ fr_BL.php
│  │           │  ├─ fr_CA.php
│  │           │  ├─ fr_CD.php
│  │           │  ├─ fr_CF.php
│  │           │  ├─ fr_CG.php
│  │           │  ├─ fr_CH.php
│  │           │  ├─ fr_CI.php
│  │           │  ├─ fr_CM.php
│  │           │  ├─ fr_DJ.php
│  │           │  ├─ fr_DZ.php
│  │           │  ├─ fr_FR.php
│  │           │  ├─ fr_GA.php
│  │           │  ├─ fr_GF.php
│  │           │  ├─ fr_GN.php
│  │           │  ├─ fr_GP.php
│  │           │  ├─ fr_GQ.php
│  │           │  ├─ fr_HT.php
│  │           │  ├─ fr_KM.php
│  │           │  ├─ fr_LU.php
│  │           │  ├─ fr_MA.php
│  │           │  ├─ fr_MC.php
│  │           │  ├─ fr_MF.php
│  │           │  ├─ fr_MG.php
│  │           │  ├─ fr_ML.php
│  │           │  ├─ fr_MQ.php
│  │           │  ├─ fr_MR.php
│  │           │  ├─ fr_MU.php
│  │           │  ├─ fr_NC.php
│  │           │  ├─ fr_NE.php
│  │           │  ├─ fr_PF.php
│  │           │  ├─ fr_PM.php
│  │           │  ├─ fr_RE.php
│  │           │  ├─ fr_RW.php
│  │           │  ├─ fr_SC.php
│  │           │  ├─ fr_SN.php
│  │           │  ├─ fr_SY.php
│  │           │  ├─ fr_TD.php
│  │           │  ├─ fr_TG.php
│  │           │  ├─ fr_TN.php
│  │           │  ├─ fr_VU.php
│  │           │  ├─ fr_WF.php
│  │           │  ├─ fr_YT.php
│  │           │  ├─ fur.php
│  │           │  ├─ fur_IT.php
│  │           │  ├─ fy.php
│  │           │  ├─ fy_DE.php
│  │           │  ├─ fy_NL.php
│  │           │  ├─ ga.php
│  │           │  ├─ ga_IE.php
│  │           │  ├─ gd.php
│  │           │  ├─ gd_GB.php
│  │           │  ├─ gez.php
│  │           │  ├─ gez_ER.php
│  │           │  ├─ gez_ET.php
│  │           │  ├─ gl.php
│  │           │  ├─ gl_ES.php
│  │           │  ├─ gom.php
│  │           │  ├─ gom_Latn.php
│  │           │  ├─ gsw.php
│  │           │  ├─ gsw_CH.php
│  │           │  ├─ gsw_FR.php
│  │           │  ├─ gsw_LI.php
│  │           │  ├─ gu.php
│  │           │  ├─ guz.php
│  │           │  ├─ gu_IN.php
│  │           │  ├─ gv.php
│  │           │  ├─ gv_GB.php
│  │           │  ├─ ha.php
│  │           │  ├─ hak.php
│  │           │  ├─ hak_TW.php
│  │           │  ├─ haw.php
│  │           │  ├─ ha_GH.php
│  │           │  ├─ ha_NE.php
│  │           │  ├─ ha_NG.php
│  │           │  ├─ he.php
│  │           │  ├─ he_IL.php
│  │           │  ├─ hi.php
│  │           │  ├─ hif.php
│  │           │  ├─ hif_FJ.php
│  │           │  ├─ hi_IN.php
│  │           │  ├─ hne.php
│  │           │  ├─ hne_IN.php
│  │           │  ├─ hr.php
│  │           │  ├─ hr_BA.php
│  │           │  ├─ hr_HR.php
│  │           │  ├─ hsb.php
│  │           │  ├─ hsb_DE.php
│  │           │  ├─ ht.php
│  │           │  ├─ ht_HT.php
│  │           │  ├─ hu.php
│  │           │  ├─ hu_HU.php
│  │           │  ├─ hy.php
│  │           │  ├─ hy_AM.php
│  │           │  ├─ i18n.php
│  │           │  ├─ ia.php
│  │           │  ├─ ia_FR.php
│  │           │  ├─ id.php
│  │           │  ├─ id_ID.php
│  │           │  ├─ ig.php
│  │           │  ├─ ig_NG.php
│  │           │  ├─ ii.php
│  │           │  ├─ ik.php
│  │           │  ├─ ik_CA.php
│  │           │  ├─ in.php
│  │           │  ├─ is.php
│  │           │  ├─ is_IS.php
│  │           │  ├─ it.php
│  │           │  ├─ it_CH.php
│  │           │  ├─ it_IT.php
│  │           │  ├─ it_SM.php
│  │           │  ├─ it_VA.php
│  │           │  ├─ iu.php
│  │           │  ├─ iu_CA.php
│  │           │  ├─ iw.php
│  │           │  ├─ ja.php
│  │           │  ├─ ja_JP.php
│  │           │  ├─ jgo.php
│  │           │  ├─ jmc.php
│  │           │  ├─ jv.php
│  │           │  ├─ ka.php
│  │           │  ├─ kab.php
│  │           │  ├─ kab_DZ.php
│  │           │  ├─ kam.php
│  │           │  ├─ ka_GE.php
│  │           │  ├─ kde.php
│  │           │  ├─ kea.php
│  │           │  ├─ khq.php
│  │           │  ├─ ki.php
│  │           │  ├─ kk.php
│  │           │  ├─ kkj.php
│  │           │  ├─ kk_KZ.php
│  │           │  ├─ kl.php
│  │           │  ├─ kln.php
│  │           │  ├─ kl_GL.php
│  │           │  ├─ km.php
│  │           │  ├─ km_KH.php
│  │           │  ├─ kn.php
│  │           │  ├─ kn_IN.php
│  │           │  ├─ ko.php
│  │           │  ├─ kok.php
│  │           │  ├─ kok_IN.php
│  │           │  ├─ ko_KP.php
│  │           │  ├─ ko_KR.php
│  │           │  ├─ ks.php
│  │           │  ├─ ksb.php
│  │           │  ├─ ksf.php
│  │           │  ├─ ksh.php
│  │           │  ├─ ks_IN.php
│  │           │  ├─ ks_IN@devanagari.php
│  │           │  ├─ ku.php
│  │           │  ├─ ku_TR.php
│  │           │  ├─ kw.php
│  │           │  ├─ kw_GB.php
│  │           │  ├─ ky.php
│  │           │  ├─ ky_KG.php
│  │           │  ├─ lag.php
│  │           │  ├─ lb.php
│  │           │  ├─ lb_LU.php
│  │           │  ├─ lg.php
│  │           │  ├─ lg_UG.php
│  │           │  ├─ li.php
│  │           │  ├─ lij.php
│  │           │  ├─ lij_IT.php
│  │           │  ├─ li_NL.php
│  │           │  ├─ lkt.php
│  │           │  ├─ ln.php
│  │           │  ├─ ln_AO.php
│  │           │  ├─ ln_CD.php
│  │           │  ├─ ln_CF.php
│  │           │  ├─ ln_CG.php
│  │           │  ├─ lo.php
│  │           │  ├─ lo_LA.php
│  │           │  ├─ lrc.php
│  │           │  ├─ lrc_IQ.php
│  │           │  ├─ lt.php
│  │           │  ├─ lt_LT.php
│  │           │  ├─ lu.php
│  │           │  ├─ luo.php
│  │           │  ├─ luy.php
│  │           │  ├─ lv.php
│  │           │  ├─ lv_LV.php
│  │           │  ├─ lzh.php
│  │           │  ├─ lzh_TW.php
│  │           │  ├─ mag.php
│  │           │  ├─ mag_IN.php
│  │           │  ├─ mai.php
│  │           │  ├─ mai_IN.php
│  │           │  ├─ mas.php
│  │           │  ├─ mas_TZ.php
│  │           │  ├─ mer.php
│  │           │  ├─ mfe.php
│  │           │  ├─ mfe_MU.php
│  │           │  ├─ mg.php
│  │           │  ├─ mgh.php
│  │           │  ├─ mgo.php
│  │           │  ├─ mg_MG.php
│  │           │  ├─ mhr.php
│  │           │  ├─ mhr_RU.php
│  │           │  ├─ mi.php
│  │           │  ├─ miq.php
│  │           │  ├─ miq_NI.php
│  │           │  ├─ mi_NZ.php
│  │           │  ├─ mjw.php
│  │           │  ├─ mjw_IN.php
│  │           │  ├─ mk.php
│  │           │  ├─ mk_MK.php
│  │           │  ├─ ml.php
│  │           │  ├─ ml_IN.php
│  │           │  ├─ mn.php
│  │           │  ├─ mni.php
│  │           │  ├─ mni_IN.php
│  │           │  ├─ mn_MN.php
│  │           │  ├─ mo.php
│  │           │  ├─ mr.php
│  │           │  ├─ mr_IN.php
│  │           │  ├─ ms.php
│  │           │  ├─ ms_BN.php
│  │           │  ├─ ms_MY.php
│  │           │  ├─ ms_SG.php
│  │           │  ├─ mt.php
│  │           │  ├─ mt_MT.php
│  │           │  ├─ mua.php
│  │           │  ├─ my.php
│  │           │  ├─ my_MM.php
│  │           │  ├─ mzn.php
│  │           │  ├─ nan.php
│  │           │  ├─ nan_TW.php
│  │           │  ├─ nan_TW@latin.php
│  │           │  ├─ naq.php
│  │           │  ├─ nb.php
│  │           │  ├─ nb_NO.php
│  │           │  ├─ nb_SJ.php
│  │           │  ├─ nd.php
│  │           │  ├─ nds.php
│  │           │  ├─ nds_DE.php
│  │           │  ├─ nds_NL.php
│  │           │  ├─ ne.php
│  │           │  ├─ ne_IN.php
│  │           │  ├─ ne_NP.php
│  │           │  ├─ nhn.php
│  │           │  ├─ nhn_MX.php
│  │           │  ├─ niu.php
│  │           │  ├─ niu_NU.php
│  │           │  ├─ nl.php
│  │           │  ├─ nl_AW.php
│  │           │  ├─ nl_BE.php
│  │           │  ├─ nl_BQ.php
│  │           │  ├─ nl_CW.php
│  │           │  ├─ nl_NL.php
│  │           │  ├─ nl_SR.php
│  │           │  ├─ nl_SX.php
│  │           │  ├─ nmg.php
│  │           │  ├─ nn.php
│  │           │  ├─ nnh.php
│  │           │  ├─ nn_NO.php
│  │           │  ├─ no.php
│  │           │  ├─ nr.php
│  │           │  ├─ nr_ZA.php
│  │           │  ├─ nso.php
│  │           │  ├─ nso_ZA.php
│  │           │  ├─ nus.php
│  │           │  ├─ nyn.php
│  │           │  ├─ oc.php
│  │           │  ├─ oc_FR.php
│  │           │  ├─ om.php
│  │           │  ├─ om_ET.php
│  │           │  ├─ om_KE.php
│  │           │  ├─ or.php
│  │           │  ├─ or_IN.php
│  │           │  ├─ os.php
│  │           │  ├─ os_RU.php
│  │           │  ├─ pa.php
│  │           │  ├─ pap.php
│  │           │  ├─ pap_AW.php
│  │           │  ├─ pap_CW.php
│  │           │  ├─ pa_Arab.php
│  │           │  ├─ pa_Guru.php
│  │           │  ├─ pa_IN.php
│  │           │  ├─ pa_PK.php
│  │           │  ├─ pl.php
│  │           │  ├─ pl_PL.php
│  │           │  ├─ prg.php
│  │           │  ├─ ps.php
│  │           │  ├─ ps_AF.php
│  │           │  ├─ pt.php
│  │           │  ├─ pt_AO.php
│  │           │  ├─ pt_BR.php
│  │           │  ├─ pt_CH.php
│  │           │  ├─ pt_CV.php
│  │           │  ├─ pt_GQ.php
│  │           │  ├─ pt_GW.php
│  │           │  ├─ pt_LU.php
│  │           │  ├─ pt_MO.php
│  │           │  ├─ pt_MZ.php
│  │           │  ├─ pt_PT.php
│  │           │  ├─ pt_ST.php
│  │           │  ├─ pt_TL.php
│  │           │  ├─ qu.php
│  │           │  ├─ quz.php
│  │           │  ├─ quz_PE.php
│  │           │  ├─ qu_BO.php
│  │           │  ├─ qu_EC.php
│  │           │  ├─ raj.php
│  │           │  ├─ raj_IN.php
│  │           │  ├─ rm.php
│  │           │  ├─ rn.php
│  │           │  ├─ ro.php
│  │           │  ├─ rof.php
│  │           │  ├─ ro_MD.php
│  │           │  ├─ ro_RO.php
│  │           │  ├─ ru.php
│  │           │  ├─ ru_BY.php
│  │           │  ├─ ru_KG.php
│  │           │  ├─ ru_KZ.php
│  │           │  ├─ ru_MD.php
│  │           │  ├─ ru_RU.php
│  │           │  ├─ ru_UA.php
│  │           │  ├─ rw.php
│  │           │  ├─ rwk.php
│  │           │  ├─ rw_RW.php
│  │           │  ├─ sa.php
│  │           │  ├─ sah.php
│  │           │  ├─ sah_RU.php
│  │           │  ├─ saq.php
│  │           │  ├─ sat.php
│  │           │  ├─ sat_IN.php
│  │           │  ├─ sa_IN.php
│  │           │  ├─ sbp.php
│  │           │  ├─ sc.php
│  │           │  ├─ sc_IT.php
│  │           │  ├─ sd.php
│  │           │  ├─ sd_IN.php
│  │           │  ├─ sd_IN@devanagari.php
│  │           │  ├─ se.php
│  │           │  ├─ seh.php
│  │           │  ├─ ses.php
│  │           │  ├─ se_FI.php
│  │           │  ├─ se_NO.php
│  │           │  ├─ se_SE.php
│  │           │  ├─ sg.php
│  │           │  ├─ sgs.php
│  │           │  ├─ sgs_LT.php
│  │           │  ├─ sh.php
│  │           │  ├─ shi.php
│  │           │  ├─ shi_Latn.php
│  │           │  ├─ shi_Tfng.php
│  │           │  ├─ shn.php
│  │           │  ├─ shn_MM.php
│  │           │  ├─ shs.php
│  │           │  ├─ shs_CA.php
│  │           │  ├─ si.php
│  │           │  ├─ sid.php
│  │           │  ├─ sid_ET.php
│  │           │  ├─ si_LK.php
│  │           │  ├─ sk.php
│  │           │  ├─ sk_SK.php
│  │           │  ├─ sl.php
│  │           │  ├─ sl_SI.php
│  │           │  ├─ sm.php
│  │           │  ├─ smn.php
│  │           │  ├─ sm_WS.php
│  │           │  ├─ sn.php
│  │           │  ├─ so.php
│  │           │  ├─ so_DJ.php
│  │           │  ├─ so_ET.php
│  │           │  ├─ so_KE.php
│  │           │  ├─ so_SO.php
│  │           │  ├─ sq.php
│  │           │  ├─ sq_AL.php
│  │           │  ├─ sq_MK.php
│  │           │  ├─ sq_XK.php
│  │           │  ├─ sr.php
│  │           │  ├─ sr_Cyrl.php
│  │           │  ├─ sr_Cyrl_BA.php
│  │           │  ├─ sr_Cyrl_ME.php
│  │           │  ├─ sr_Cyrl_XK.php
│  │           │  ├─ sr_Latn.php
│  │           │  ├─ sr_Latn_BA.php
│  │           │  ├─ sr_Latn_ME.php
│  │           │  ├─ sr_Latn_XK.php
│  │           │  ├─ sr_ME.php
│  │           │  ├─ sr_RS.php
│  │           │  ├─ sr_RS@latin.php
│  │           │  ├─ ss.php
│  │           │  ├─ ss_ZA.php
│  │           │  ├─ st.php
│  │           │  ├─ st_ZA.php
│  │           │  ├─ sv.php
│  │           │  ├─ sv_AX.php
│  │           │  ├─ sv_FI.php
│  │           │  ├─ sv_SE.php
│  │           │  ├─ sw.php
│  │           │  ├─ sw_CD.php
│  │           │  ├─ sw_KE.php
│  │           │  ├─ sw_TZ.php
│  │           │  ├─ sw_UG.php
│  │           │  ├─ szl.php
│  │           │  ├─ szl_PL.php
│  │           │  ├─ ta.php
│  │           │  ├─ ta_IN.php
│  │           │  ├─ ta_LK.php
│  │           │  ├─ ta_MY.php
│  │           │  ├─ ta_SG.php
│  │           │  ├─ tcy.php
│  │           │  ├─ tcy_IN.php
│  │           │  ├─ te.php
│  │           │  ├─ teo.php
│  │           │  ├─ teo_KE.php
│  │           │  ├─ tet.php
│  │           │  ├─ te_IN.php
│  │           │  ├─ tg.php
│  │           │  ├─ tg_TJ.php
│  │           │  ├─ th.php
│  │           │  ├─ the.php
│  │           │  ├─ the_NP.php
│  │           │  ├─ th_TH.php
│  │           │  ├─ ti.php
│  │           │  ├─ tig.php
│  │           │  ├─ tig_ER.php
│  │           │  ├─ ti_ER.php
│  │           │  ├─ ti_ET.php
│  │           │  ├─ tk.php
│  │           │  ├─ tk_TM.php
│  │           │  ├─ tl.php
│  │           │  ├─ tlh.php
│  │           │  ├─ tl_PH.php
│  │           │  ├─ tn.php
│  │           │  ├─ tn_ZA.php
│  │           │  ├─ to.php
│  │           │  ├─ to_TO.php
│  │           │  ├─ tpi.php
│  │           │  ├─ tpi_PG.php
│  │           │  ├─ tr.php
│  │           │  ├─ tr_CY.php
│  │           │  ├─ tr_TR.php
│  │           │  ├─ ts.php
│  │           │  ├─ ts_ZA.php
│  │           │  ├─ tt.php
│  │           │  ├─ tt_RU.php
│  │           │  ├─ tt_RU@iqtelif.php
│  │           │  ├─ twq.php
│  │           │  ├─ tzl.php
│  │           │  ├─ tzm.php
│  │           │  ├─ tzm_Latn.php
│  │           │  ├─ ug.php
│  │           │  ├─ ug_CN.php
│  │           │  ├─ uk.php
│  │           │  ├─ uk_UA.php
│  │           │  ├─ unm.php
│  │           │  ├─ unm_US.php
│  │           │  ├─ ur.php
│  │           │  ├─ ur_IN.php
│  │           │  ├─ ur_PK.php
│  │           │  ├─ uz.php
│  │           │  ├─ uz_Arab.php
│  │           │  ├─ uz_Cyrl.php
│  │           │  ├─ uz_Latn.php
│  │           │  ├─ uz_UZ.php
│  │           │  ├─ uz_UZ@cyrillic.php
│  │           │  ├─ vai.php
│  │           │  ├─ vai_Latn.php
│  │           │  ├─ vai_Vaii.php
│  │           │  ├─ ve.php
│  │           │  ├─ ve_ZA.php
│  │           │  ├─ vi.php
│  │           │  ├─ vi_VN.php
│  │           │  ├─ vo.php
│  │           │  ├─ vun.php
│  │           │  ├─ wa.php
│  │           │  ├─ wae.php
│  │           │  ├─ wae_CH.php
│  │           │  ├─ wal.php
│  │           │  ├─ wal_ET.php
│  │           │  ├─ wa_BE.php
│  │           │  ├─ wo.php
│  │           │  ├─ wo_SN.php
│  │           │  ├─ xh.php
│  │           │  ├─ xh_ZA.php
│  │           │  ├─ xog.php
│  │           │  ├─ yav.php
│  │           │  ├─ yi.php
│  │           │  ├─ yi_US.php
│  │           │  ├─ yo.php
│  │           │  ├─ yo_BJ.php
│  │           │  ├─ yo_NG.php
│  │           │  ├─ yue.php
│  │           │  ├─ yue_Hans.php
│  │           │  ├─ yue_Hant.php
│  │           │  ├─ yue_HK.php
│  │           │  ├─ yuw.php
│  │           │  ├─ yuw_PG.php
│  │           │  ├─ zgh.php
│  │           │  ├─ zh.php
│  │           │  ├─ zh_CN.php
│  │           │  ├─ zh_Hans.php
│  │           │  ├─ zh_Hans_HK.php
│  │           │  ├─ zh_Hans_MO.php
│  │           │  ├─ zh_Hans_SG.php
│  │           │  ├─ zh_Hant.php
│  │           │  ├─ zh_Hant_HK.php
│  │           │  ├─ zh_Hant_MO.php
│  │           │  ├─ zh_Hant_TW.php
│  │           │  ├─ zh_HK.php
│  │           │  ├─ zh_MO.php
│  │           │  ├─ zh_SG.php
│  │           │  ├─ zh_TW.php
│  │           │  ├─ zh_YUE.php
│  │           │  ├─ zu.php
│  │           │  └─ zu_ZA.php
│  │           ├─ Language.php
│  │           ├─ Laravel
│  │           │  └─ ServiceProvider.php
│  │           ├─ List
│  │           │  ├─ languages.php
│  │           │  └─ regions.php
│  │           ├─ MessageFormatter
│  │           │  └─ MessageFormatterMapper.php
│  │           ├─ Month.php
│  │           ├─ PHPStan
│  │           │  ├─ MacroExtension.php
│  │           │  └─ MacroMethodReflection.php
│  │           ├─ Traits
│  │           │  ├─ Boundaries.php
│  │           │  ├─ Cast.php
│  │           │  ├─ Comparison.php
│  │           │  ├─ Converter.php
│  │           │  ├─ Creator.php
│  │           │  ├─ Date.php
│  │           │  ├─ DeprecatedPeriodProperties.php
│  │           │  ├─ Difference.php
│  │           │  ├─ IntervalRounding.php
│  │           │  ├─ IntervalStep.php
│  │           │  ├─ LocalFactory.php
│  │           │  ├─ Localization.php
│  │           │  ├─ Macro.php
│  │           │  ├─ MagicParameter.php
│  │           │  ├─ Mixin.php
│  │           │  ├─ Modifiers.php
│  │           │  ├─ Mutability.php
│  │           │  ├─ ObjectInitialisation.php
│  │           │  ├─ Options.php
│  │           │  ├─ Rounding.php
│  │           │  ├─ Serialization.php
│  │           │  ├─ StaticLocalization.php
│  │           │  ├─ StaticOptions.php
│  │           │  ├─ Test.php
│  │           │  ├─ Timestamp.php
│  │           │  ├─ ToStringFormat.php
│  │           │  ├─ Units.php
│  │           │  └─ Week.php
│  │           ├─ Translator.php
│  │           ├─ TranslatorImmutable.php
│  │           ├─ TranslatorStrongTypeInterface.php
│  │           ├─ Unit.php
│  │           ├─ WeekDay.php
│  │           └─ WrapperClock.php
│  ├─ nette
│  │  ├─ schema
│  │  │  ├─ composer.json
│  │  │  ├─ license.md
│  │  │  ├─ readme.md
│  │  │  └─ src
│  │  │     └─ Schema
│  │  │        ├─ Context.php
│  │  │        ├─ DynamicParameter.php
│  │  │        ├─ Elements
│  │  │        │  ├─ AnyOf.php
│  │  │        │  ├─ Base.php
│  │  │        │  ├─ Structure.php
│  │  │        │  └─ Type.php
│  │  │        ├─ Expect.php
│  │  │        ├─ Helpers.php
│  │  │        ├─ Message.php
│  │  │        ├─ Processor.php
│  │  │        ├─ Schema.php
│  │  │        └─ ValidationException.php
│  │  └─ utils
│  │     ├─ .phpstorm.meta.php
│  │     ├─ composer.json
│  │     ├─ license.md
│  │     ├─ readme.md
│  │     └─ src
│  │        ├─ compatibility.php
│  │        ├─ exceptions.php
│  │        ├─ HtmlStringable.php
│  │        ├─ Iterators
│  │        │  ├─ CachingIterator.php
│  │        │  └─ Mapper.php
│  │        ├─ SmartObject.php
│  │        ├─ StaticClass.php
│  │        ├─ Translator.php
│  │        └─ Utils
│  │           ├─ ArrayHash.php
│  │           ├─ ArrayList.php
│  │           ├─ Arrays.php
│  │           ├─ Callback.php
│  │           ├─ DateTime.php
│  │           ├─ exceptions.php
│  │           ├─ FileInfo.php
│  │           ├─ FileSystem.php
│  │           ├─ Finder.php
│  │           ├─ Floats.php
│  │           ├─ Helpers.php
│  │           ├─ Html.php
│  │           ├─ Image.php
│  │           ├─ ImageColor.php
│  │           ├─ ImageType.php
│  │           ├─ Iterables.php
│  │           ├─ Json.php
│  │           ├─ ObjectHelpers.php
│  │           ├─ Paginator.php
│  │           ├─ Random.php
│  │           ├─ Reflection.php
│  │           ├─ ReflectionMethod.php
│  │           ├─ Strings.php
│  │           ├─ Type.php
│  │           └─ Validators.php
│  ├─ nikic
│  │  └─ php-parser
│  │     ├─ bin
│  │     │  └─ php-parse
│  │     ├─ composer.json
│  │     ├─ lib
│  │     │  └─ PhpParser
│  │     │     ├─ Builder
│  │     │     │  ├─ ClassConst.php
│  │     │     │  ├─ Class_.php
│  │     │     │  ├─ Declaration.php
│  │     │     │  ├─ EnumCase.php
│  │     │     │  ├─ Enum_.php
│  │     │     │  ├─ FunctionLike.php
│  │     │     │  ├─ Function_.php
│  │     │     │  ├─ Interface_.php
│  │     │     │  ├─ Method.php
│  │     │     │  ├─ Namespace_.php
│  │     │     │  ├─ Param.php
│  │     │     │  ├─ Property.php
│  │     │     │  ├─ TraitUse.php
│  │     │     │  ├─ TraitUseAdaptation.php
│  │     │     │  ├─ Trait_.php
│  │     │     │  └─ Use_.php
│  │     │     ├─ Builder.php
│  │     │     ├─ BuilderFactory.php
│  │     │     ├─ BuilderHelpers.php
│  │     │     ├─ Comment
│  │     │     │  └─ Doc.php
│  │     │     ├─ Comment.php
│  │     │     ├─ compatibility_tokens.php
│  │     │     ├─ ConstExprEvaluationException.php
│  │     │     ├─ ConstExprEvaluator.php
│  │     │     ├─ Error.php
│  │     │     ├─ ErrorHandler
│  │     │     │  ├─ Collecting.php
│  │     │     │  └─ Throwing.php
│  │     │     ├─ ErrorHandler.php
│  │     │     ├─ Internal
│  │     │     │  ├─ DiffElem.php
│  │     │     │  ├─ Differ.php
│  │     │     │  ├─ PrintableNewAnonClassNode.php
│  │     │     │  ├─ TokenPolyfill.php
│  │     │     │  └─ TokenStream.php
│  │     │     ├─ JsonDecoder.php
│  │     │     ├─ Lexer
│  │     │     │  ├─ Emulative.php
│  │     │     │  └─ TokenEmulator
│  │     │     │     ├─ AsymmetricVisibilityTokenEmulator.php
│  │     │     │     ├─ AttributeEmulator.php
│  │     │     │     ├─ EnumTokenEmulator.php
│  │     │     │     ├─ ExplicitOctalEmulator.php
│  │     │     │     ├─ KeywordEmulator.php
│  │     │     │     ├─ MatchTokenEmulator.php
│  │     │     │     ├─ NullsafeTokenEmulator.php
│  │     │     │     ├─ PipeOperatorEmulator.php
│  │     │     │     ├─ PropertyTokenEmulator.php
│  │     │     │     ├─ ReadonlyFunctionTokenEmulator.php
│  │     │     │     ├─ ReadonlyTokenEmulator.php
│  │     │     │     ├─ ReverseEmulator.php
│  │     │     │     ├─ TokenEmulator.php
│  │     │     │     └─ VoidCastEmulator.php
│  │     │     ├─ Lexer.php
│  │     │     ├─ Modifiers.php
│  │     │     ├─ NameContext.php
│  │     │     ├─ Node
│  │     │     │  ├─ Arg.php
│  │     │     │  ├─ ArrayItem.php
│  │     │     │  ├─ Attribute.php
│  │     │     │  ├─ AttributeGroup.php
│  │     │     │  ├─ ClosureUse.php
│  │     │     │  ├─ ComplexType.php
│  │     │     │  ├─ Const_.php
│  │     │     │  ├─ DeclareItem.php
│  │     │     │  ├─ Expr
│  │     │     │  │  ├─ ArrayDimFetch.php
│  │     │     │  │  ├─ ArrayItem.php
│  │     │     │  │  ├─ Array_.php
│  │     │     │  │  ├─ ArrowFunction.php
│  │     │     │  │  ├─ Assign.php
│  │     │     │  │  ├─ AssignOp
│  │     │     │  │  │  ├─ BitwiseAnd.php
│  │     │     │  │  │  ├─ BitwiseOr.php
│  │     │     │  │  │  ├─ BitwiseXor.php
│  │     │     │  │  │  ├─ Coalesce.php
│  │     │     │  │  │  ├─ Concat.php
│  │     │     │  │  │  ├─ Div.php
│  │     │     │  │  │  ├─ Minus.php
│  │     │     │  │  │  ├─ Mod.php
│  │     │     │  │  │  ├─ Mul.php
│  │     │     │  │  │  ├─ Plus.php
│  │     │     │  │  │  ├─ Pow.php
│  │     │     │  │  │  ├─ ShiftLeft.php
│  │     │     │  │  │  └─ ShiftRight.php
│  │     │     │  │  ├─ AssignOp.php
│  │     │     │  │  ├─ AssignRef.php
│  │     │     │  │  ├─ BinaryOp
│  │     │     │  │  │  ├─ BitwiseAnd.php
│  │     │     │  │  │  ├─ BitwiseOr.php
│  │     │     │  │  │  ├─ BitwiseXor.php
│  │     │     │  │  │  ├─ BooleanAnd.php
│  │     │     │  │  │  ├─ BooleanOr.php
│  │     │     │  │  │  ├─ Coalesce.php
│  │     │     │  │  │  ├─ Concat.php
│  │     │     │  │  │  ├─ Div.php
│  │     │     │  │  │  ├─ Equal.php
│  │     │     │  │  │  ├─ Greater.php
│  │     │     │  │  │  ├─ GreaterOrEqual.php
│  │     │     │  │  │  ├─ Identical.php
│  │     │     │  │  │  ├─ LogicalAnd.php
│  │     │     │  │  │  ├─ LogicalOr.php
│  │     │     │  │  │  ├─ LogicalXor.php
│  │     │     │  │  │  ├─ Minus.php
│  │     │     │  │  │  ├─ Mod.php
│  │     │     │  │  │  ├─ Mul.php
│  │     │     │  │  │  ├─ NotEqual.php
│  │     │     │  │  │  ├─ NotIdentical.php
│  │     │     │  │  │  ├─ Pipe.php
│  │     │     │  │  │  ├─ Plus.php
│  │     │     │  │  │  ├─ Pow.php
│  │     │     │  │  │  ├─ ShiftLeft.php
│  │     │     │  │  │  ├─ ShiftRight.php
│  │     │     │  │  │  ├─ Smaller.php
│  │     │     │  │  │  ├─ SmallerOrEqual.php
│  │     │     │  │  │  └─ Spaceship.php
│  │     │     │  │  ├─ BinaryOp.php
│  │     │     │  │  ├─ BitwiseNot.php
│  │     │     │  │  ├─ BooleanNot.php
│  │     │     │  │  ├─ CallLike.php
│  │     │     │  │  ├─ Cast
│  │     │     │  │  │  ├─ Array_.php
│  │     │     │  │  │  ├─ Bool_.php
│  │     │     │  │  │  ├─ Double.php
│  │     │     │  │  │  ├─ Int_.php
│  │     │     │  │  │  ├─ Object_.php
│  │     │     │  │  │  ├─ String_.php
│  │     │     │  │  │  ├─ Unset_.php
│  │     │     │  │  │  └─ Void_.php
│  │     │     │  │  ├─ Cast.php
│  │     │     │  │  ├─ ClassConstFetch.php
│  │     │     │  │  ├─ Clone_.php
│  │     │     │  │  ├─ Closure.php
│  │     │     │  │  ├─ ClosureUse.php
│  │     │     │  │  ├─ ConstFetch.php
│  │     │     │  │  ├─ Empty_.php
│  │     │     │  │  ├─ Error.php
│  │     │     │  │  ├─ ErrorSuppress.php
│  │     │     │  │  ├─ Eval_.php
│  │     │     │  │  ├─ Exit_.php
│  │     │     │  │  ├─ FuncCall.php
│  │     │     │  │  ├─ Include_.php
│  │     │     │  │  ├─ Instanceof_.php
│  │     │     │  │  ├─ Isset_.php
│  │     │     │  │  ├─ List_.php
│  │     │     │  │  ├─ Match_.php
│  │     │     │  │  ├─ MethodCall.php
│  │     │     │  │  ├─ New_.php
│  │     │     │  │  ├─ NullsafeMethodCall.php
│  │     │     │  │  ├─ NullsafePropertyFetch.php
│  │     │     │  │  ├─ PostDec.php
│  │     │     │  │  ├─ PostInc.php
│  │     │     │  │  ├─ PreDec.php
│  │     │     │  │  ├─ PreInc.php
│  │     │     │  │  ├─ Print_.php
│  │     │     │  │  ├─ PropertyFetch.php
│  │     │     │  │  ├─ ShellExec.php
│  │     │     │  │  ├─ StaticCall.php
│  │     │     │  │  ├─ StaticPropertyFetch.php
│  │     │     │  │  ├─ Ternary.php
│  │     │     │  │  ├─ Throw_.php
│  │     │     │  │  ├─ UnaryMinus.php
│  │     │     │  │  ├─ UnaryPlus.php
│  │     │     │  │  ├─ Variable.php
│  │     │     │  │  ├─ YieldFrom.php
│  │     │     │  │  └─ Yield_.php
│  │     │     │  ├─ Expr.php
│  │     │     │  ├─ FunctionLike.php
│  │     │     │  ├─ Identifier.php
│  │     │     │  ├─ InterpolatedStringPart.php
│  │     │     │  ├─ IntersectionType.php
│  │     │     │  ├─ MatchArm.php
│  │     │     │  ├─ Name
│  │     │     │  │  ├─ FullyQualified.php
│  │     │     │  │  └─ Relative.php
│  │     │     │  ├─ Name.php
│  │     │     │  ├─ NullableType.php
│  │     │     │  ├─ Param.php
│  │     │     │  ├─ PropertyHook.php
│  │     │     │  ├─ PropertyItem.php
│  │     │     │  ├─ Scalar
│  │     │     │  │  ├─ DNumber.php
│  │     │     │  │  ├─ Encapsed.php
│  │     │     │  │  ├─ EncapsedStringPart.php
│  │     │     │  │  ├─ Float_.php
│  │     │     │  │  ├─ InterpolatedString.php
│  │     │     │  │  ├─ Int_.php
│  │     │     │  │  ├─ LNumber.php
│  │     │     │  │  ├─ MagicConst
│  │     │     │  │  │  ├─ Class_.php
│  │     │     │  │  │  ├─ Dir.php
│  │     │     │  │  │  ├─ File.php
│  │     │     │  │  │  ├─ Function_.php
│  │     │     │  │  │  ├─ Line.php
│  │     │     │  │  │  ├─ Method.php
│  │     │     │  │  │  ├─ Namespace_.php
│  │     │     │  │  │  ├─ Property.php
│  │     │     │  │  │  └─ Trait_.php
│  │     │     │  │  ├─ MagicConst.php
│  │     │     │  │  └─ String_.php
│  │     │     │  ├─ Scalar.php
│  │     │     │  ├─ StaticVar.php
│  │     │     │  ├─ Stmt
│  │     │     │  │  ├─ Block.php
│  │     │     │  │  ├─ Break_.php
│  │     │     │  │  ├─ Case_.php
│  │     │     │  │  ├─ Catch_.php
│  │     │     │  │  ├─ ClassConst.php
│  │     │     │  │  ├─ ClassLike.php
│  │     │     │  │  ├─ ClassMethod.php
│  │     │     │  │  ├─ Class_.php
│  │     │     │  │  ├─ Const_.php
│  │     │     │  │  ├─ Continue_.php
│  │     │     │  │  ├─ DeclareDeclare.php
│  │     │     │  │  ├─ Declare_.php
│  │     │     │  │  ├─ Do_.php
│  │     │     │  │  ├─ Echo_.php
│  │     │     │  │  ├─ ElseIf_.php
│  │     │     │  │  ├─ Else_.php
│  │     │     │  │  ├─ EnumCase.php
│  │     │     │  │  ├─ Enum_.php
│  │     │     │  │  ├─ Expression.php
│  │     │     │  │  ├─ Finally_.php
│  │     │     │  │  ├─ Foreach_.php
│  │     │     │  │  ├─ For_.php
│  │     │     │  │  ├─ Function_.php
│  │     │     │  │  ├─ Global_.php
│  │     │     │  │  ├─ Goto_.php
│  │     │     │  │  ├─ GroupUse.php
│  │     │     │  │  ├─ HaltCompiler.php
│  │     │     │  │  ├─ If_.php
│  │     │     │  │  ├─ InlineHTML.php
│  │     │     │  │  ├─ Interface_.php
│  │     │     │  │  ├─ Label.php
│  │     │     │  │  ├─ Namespace_.php
│  │     │     │  │  ├─ Nop.php
│  │     │     │  │  ├─ Property.php
│  │     │     │  │  ├─ PropertyProperty.php
│  │     │     │  │  ├─ Return_.php
│  │     │     │  │  ├─ StaticVar.php
│  │     │     │  │  ├─ Static_.php
│  │     │     │  │  ├─ Switch_.php
│  │     │     │  │  ├─ TraitUse.php
│  │     │     │  │  ├─ TraitUseAdaptation
│  │     │     │  │  │  ├─ Alias.php
│  │     │     │  │  │  └─ Precedence.php
│  │     │     │  │  ├─ TraitUseAdaptation.php
│  │     │     │  │  ├─ Trait_.php
│  │     │     │  │  ├─ TryCatch.php
│  │     │     │  │  ├─ Unset_.php
│  │     │     │  │  ├─ UseUse.php
│  │     │     │  │  ├─ Use_.php
│  │     │     │  │  └─ While_.php
│  │     │     │  ├─ Stmt.php
│  │     │     │  ├─ UnionType.php
│  │     │     │  ├─ UseItem.php
│  │     │     │  ├─ VariadicPlaceholder.php
│  │     │     │  └─ VarLikeIdentifier.php
│  │     │     ├─ Node.php
│  │     │     ├─ NodeAbstract.php
│  │     │     ├─ NodeDumper.php
│  │     │     ├─ NodeFinder.php
│  │     │     ├─ NodeTraverser.php
│  │     │     ├─ NodeTraverserInterface.php
│  │     │     ├─ NodeVisitor
│  │     │     │  ├─ CloningVisitor.php
│  │     │     │  ├─ CommentAnnotatingVisitor.php
│  │     │     │  ├─ FindingVisitor.php
│  │     │     │  ├─ FirstFindingVisitor.php
│  │     │     │  ├─ NameResolver.php
│  │     │     │  ├─ NodeConnectingVisitor.php
│  │     │     │  └─ ParentConnectingVisitor.php
│  │     │     ├─ NodeVisitor.php
│  │     │     ├─ NodeVisitorAbstract.php
│  │     │     ├─ Parser
│  │     │     │  ├─ Php7.php
│  │     │     │  └─ Php8.php
│  │     │     ├─ Parser.php
│  │     │     ├─ ParserAbstract.php
│  │     │     ├─ ParserFactory.php
│  │     │     ├─ PhpVersion.php
│  │     │     ├─ PrettyPrinter
│  │     │     │  └─ Standard.php
│  │     │     ├─ PrettyPrinter.php
│  │     │     ├─ PrettyPrinterAbstract.php
│  │     │     └─ Token.php
│  │     ├─ LICENSE
│  │     └─ README.md
│  ├─ nunomaduro
│  │  └─ termwind
│  │     ├─ composer.json
│  │     ├─ LICENSE.md
│  │     ├─ playground.php
│  │     └─ src
│  │        ├─ Actions
│  │        │  └─ StyleToMethod.php
│  │        ├─ Components
│  │        │  ├─ Anchor.php
│  │        │  ├─ BreakLine.php
│  │        │  ├─ Dd.php
│  │        │  ├─ Div.php
│  │        │  ├─ Dl.php
│  │        │  ├─ Dt.php
│  │        │  ├─ Element.php
│  │        │  ├─ Hr.php
│  │        │  ├─ Li.php
│  │        │  ├─ Ol.php
│  │        │  ├─ Paragraph.php
│  │        │  ├─ Raw.php
│  │        │  ├─ Span.php
│  │        │  └─ Ul.php
│  │        ├─ Enums
│  │        │  └─ Color.php
│  │        ├─ Exceptions
│  │        │  ├─ ColorNotFound.php
│  │        │  ├─ InvalidChild.php
│  │        │  ├─ InvalidColor.php
│  │        │  ├─ InvalidStyle.php
│  │        │  └─ StyleNotFound.php
│  │        ├─ Functions.php
│  │        ├─ Helpers
│  │        │  └─ QuestionHelper.php
│  │        ├─ Html
│  │        │  ├─ CodeRenderer.php
│  │        │  ├─ InheritStyles.php
│  │        │  ├─ PreRenderer.php
│  │        │  └─ TableRenderer.php
│  │        ├─ HtmlRenderer.php
│  │        ├─ Laravel
│  │        │  └─ TermwindServiceProvider.php
│  │        ├─ Question.php
│  │        ├─ Repositories
│  │        │  └─ Styles.php
│  │        ├─ Terminal.php
│  │        ├─ Termwind.php
│  │        └─ ValueObjects
│  │           ├─ Node.php
│  │           ├─ Style.php
│  │           └─ Styles.php
│  ├─ paragonie
│  │  ├─ constant_time_encoding
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE.txt
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     ├─ Base32.php
│  │  │     ├─ Base32Hex.php
│  │  │     ├─ Base64.php
│  │  │     ├─ Base64DotSlash.php
│  │  │     ├─ Base64DotSlashOrdered.php
│  │  │     ├─ Base64UrlSafe.php
│  │  │     ├─ Binary.php
│  │  │     ├─ EncoderInterface.php
│  │  │     ├─ Encoding.php
│  │  │     ├─ Hex.php
│  │  │     └─ RFC4648.php
│  │  └─ random_compat
│  │     ├─ build-phar.sh
│  │     ├─ composer.json
│  │     ├─ dist
│  │     │  ├─ random_compat.phar.pubkey
│  │     │  └─ random_compat.phar.pubkey.asc
│  │     ├─ lib
│  │     │  └─ random.php
│  │     ├─ LICENSE
│  │     ├─ other
│  │     │  └─ build_phar.php
│  │     ├─ psalm-autoload.php
│  │     └─ psalm.xml
│  ├─ php-http
│  │  └─ discovery
│  │     ├─ .php-cs-fixer.php
│  │     ├─ CHANGELOG.md
│  │     ├─ composer.json
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     └─ src
│  │        ├─ ClassDiscovery.php
│  │        ├─ Composer
│  │        │  └─ Plugin.php
│  │        ├─ Exception
│  │        │  ├─ ClassInstantiationFailedException.php
│  │        │  ├─ DiscoveryFailedException.php
│  │        │  ├─ NoCandidateFoundException.php
│  │        │  ├─ NotFoundException.php
│  │        │  ├─ PuliUnavailableException.php
│  │        │  └─ StrategyUnavailableException.php
│  │        ├─ Exception.php
│  │        ├─ HttpAsyncClientDiscovery.php
│  │        ├─ HttpClientDiscovery.php
│  │        ├─ MessageFactoryDiscovery.php
│  │        ├─ NotFoundException.php
│  │        ├─ Psr17Factory.php
│  │        ├─ Psr17FactoryDiscovery.php
│  │        ├─ Psr18Client.php
│  │        ├─ Psr18ClientDiscovery.php
│  │        ├─ Strategy
│  │        │  ├─ CommonClassesStrategy.php
│  │        │  ├─ CommonPsr17ClassesStrategy.php
│  │        │  ├─ DiscoveryStrategy.php
│  │        │  ├─ MockClientStrategy.php
│  │        │  └─ PuliBetaStrategy.php
│  │        ├─ StreamFactoryDiscovery.php
│  │        └─ UriFactoryDiscovery.php
│  ├─ phpoffice
│  │  ├─ math
│  │  │  ├─ .php-cs-fixer.dist.php
│  │  │  ├─ composer.json
│  │  │  ├─ docs
│  │  │  │  ├─ assets
│  │  │  │  │  └─ mathjax.js
│  │  │  │  ├─ changes
│  │  │  │  │  ├─ 0.1.0.md
│  │  │  │  │  ├─ 0.2.0.md
│  │  │  │  │  └─ 0.3.0.md
│  │  │  │  ├─ credits.md
│  │  │  │  ├─ index.md
│  │  │  │  ├─ install.md
│  │  │  │  └─ usage
│  │  │  │     ├─ elements
│  │  │  │     │  ├─ fraction.md
│  │  │  │     │  ├─ identifier.md
│  │  │  │     │  ├─ numeric.md
│  │  │  │     │  ├─ operator.md
│  │  │  │     │  ├─ row.md
│  │  │  │     │  ├─ semantics.md
│  │  │  │     │  └─ superscript.md
│  │  │  │     ├─ readers.md
│  │  │  │     └─ writers.md
│  │  │  ├─ LICENSE
│  │  │  ├─ mkdocs.yml
│  │  │  ├─ phpstan.neon.dist
│  │  │  ├─ phpunit.xml.dist
│  │  │  ├─ README.md
│  │  │  ├─ roave-bc-check.yaml
│  │  │  ├─ src
│  │  │  │  └─ Math
│  │  │  │     ├─ Element
│  │  │  │     │  ├─ AbstractElement.php
│  │  │  │     │  ├─ AbstractGroupElement.php
│  │  │  │     │  ├─ Fraction.php
│  │  │  │     │  ├─ Identifier.php
│  │  │  │     │  ├─ Numeric.php
│  │  │  │     │  ├─ Operator.php
│  │  │  │     │  ├─ Row.php
│  │  │  │     │  ├─ Semantics.php
│  │  │  │     │  └─ Superscript.php
│  │  │  │     ├─ Exception
│  │  │  │     │  ├─ InvalidInputException.php
│  │  │  │     │  ├─ MathException.php
│  │  │  │     │  ├─ NotImplementedException.php
│  │  │  │     │  └─ SecurityException.php
│  │  │  │     ├─ Math.php
│  │  │  │     ├─ Reader
│  │  │  │     │  ├─ MathML.php
│  │  │  │     │  ├─ OfficeMathML.php
│  │  │  │     │  ├─ ReaderInterface.php
│  │  │  │     │  └─ Security
│  │  │  │     │     └─ XmlScanner.php
│  │  │  │     └─ Writer
│  │  │  │        ├─ MathML.php
│  │  │  │        ├─ OfficeMathML.php
│  │  │  │        └─ WriterInterface.php
│  │  │  └─ tests
│  │  │     ├─ Math
│  │  │     │  ├─ Element
│  │  │     │  │  ├─ AbstractGroupElementTest.php
│  │  │     │  │  ├─ FractionTest.php
│  │  │     │  │  ├─ IdentifierTest.php
│  │  │     │  │  ├─ NumericTest.php
│  │  │     │  │  ├─ OperatorTest.php
│  │  │     │  │  ├─ SemanticsTest.php
│  │  │     │  │  └─ SuperscriptTest.php
│  │  │     │  ├─ Reader
│  │  │     │  │  ├─ MathMLTest.php
│  │  │     │  │  └─ OfficeMathMLTest.php
│  │  │     │  └─ Writer
│  │  │     │     ├─ MathMLTest.php
│  │  │     │     ├─ OfficeMathMLTest.php
│  │  │     │     └─ WriterTestCase.php
│  │  │     └─ resources
│  │  │        └─ schema
│  │  │           └─ mathml3
│  │  │              ├─ mathml3-common.xsd
│  │  │              ├─ mathml3-content.xsd
│  │  │              ├─ mathml3-presentation.xsd
│  │  │              ├─ mathml3-strict-content.xsd
│  │  │              └─ mathml3.xsd
│  │  ├─ phpexcel
│  │  │  ├─ .travis.yml
│  │  │  ├─ changelog.txt
│  │  │  ├─ Classes
│  │  │  │  ├─ PHPExcel
│  │  │  │  │  ├─ Autoloader.php
│  │  │  │  │  ├─ CachedObjectStorage
│  │  │  │  │  │  ├─ APC.php
│  │  │  │  │  │  ├─ CacheBase.php
│  │  │  │  │  │  ├─ DiscISAM.php
│  │  │  │  │  │  ├─ ICache.php
│  │  │  │  │  │  ├─ Igbinary.php
│  │  │  │  │  │  ├─ Memcache.php
│  │  │  │  │  │  ├─ Memory.php
│  │  │  │  │  │  ├─ MemoryGZip.php
│  │  │  │  │  │  ├─ MemorySerialized.php
│  │  │  │  │  │  ├─ PHPTemp.php
│  │  │  │  │  │  ├─ SQLite.php
│  │  │  │  │  │  ├─ SQLite3.php
│  │  │  │  │  │  └─ Wincache.php
│  │  │  │  │  ├─ CachedObjectStorageFactory.php
│  │  │  │  │  ├─ CalcEngine
│  │  │  │  │  │  ├─ CyclicReferenceStack.php
│  │  │  │  │  │  └─ Logger.php
│  │  │  │  │  ├─ Calculation
│  │  │  │  │  │  ├─ Database.php
│  │  │  │  │  │  ├─ DateTime.php
│  │  │  │  │  │  ├─ Engineering.php
│  │  │  │  │  │  ├─ Exception.php
│  │  │  │  │  │  ├─ ExceptionHandler.php
│  │  │  │  │  │  ├─ Financial.php
│  │  │  │  │  │  ├─ FormulaParser.php
│  │  │  │  │  │  ├─ FormulaToken.php
│  │  │  │  │  │  ├─ Function.php
│  │  │  │  │  │  ├─ functionlist.txt
│  │  │  │  │  │  ├─ Functions.php
│  │  │  │  │  │  ├─ Logical.php
│  │  │  │  │  │  ├─ LookupRef.php
│  │  │  │  │  │  ├─ MathTrig.php
│  │  │  │  │  │  ├─ Statistical.php
│  │  │  │  │  │  ├─ TextData.php
│  │  │  │  │  │  └─ Token
│  │  │  │  │  │     └─ Stack.php
│  │  │  │  │  ├─ Calculation.php
│  │  │  │  │  ├─ Cell
│  │  │  │  │  │  ├─ AdvancedValueBinder.php
│  │  │  │  │  │  ├─ DataType.php
│  │  │  │  │  │  ├─ DataValidation.php
│  │  │  │  │  │  ├─ DefaultValueBinder.php
│  │  │  │  │  │  ├─ Hyperlink.php
│  │  │  │  │  │  └─ IValueBinder.php
│  │  │  │  │  ├─ Cell.php
│  │  │  │  │  ├─ Chart
│  │  │  │  │  │  ├─ Axis.php
│  │  │  │  │  │  ├─ DataSeries.php
│  │  │  │  │  │  ├─ DataSeriesValues.php
│  │  │  │  │  │  ├─ Exception.php
│  │  │  │  │  │  ├─ GridLines.php
│  │  │  │  │  │  ├─ Layout.php
│  │  │  │  │  │  ├─ Legend.php
│  │  │  │  │  │  ├─ PlotArea.php
│  │  │  │  │  │  ├─ Properties.php
│  │  │  │  │  │  ├─ Renderer
│  │  │  │  │  │  │  ├─ jpgraph.php
│  │  │  │  │  │  │  └─ PHP Charting Libraries.txt
│  │  │  │  │  │  └─ Title.php
│  │  │  │  │  ├─ Chart.php
│  │  │  │  │  ├─ Comment.php
│  │  │  │  │  ├─ DocumentProperties.php
│  │  │  │  │  ├─ DocumentSecurity.php
│  │  │  │  │  ├─ Exception.php
│  │  │  │  │  ├─ HashTable.php
│  │  │  │  │  ├─ Helper
│  │  │  │  │  │  └─ HTML.php
│  │  │  │  │  ├─ IComparable.php
│  │  │  │  │  ├─ IOFactory.php
│  │  │  │  │  ├─ locale
│  │  │  │  │  │  ├─ bg
│  │  │  │  │  │  │  └─ config
│  │  │  │  │  │  ├─ cs
│  │  │  │  │  │  │  ├─ config
│  │  │  │  │  │  │  └─ functions
│  │  │  │  │  │  ├─ da
│  │  │  │  │  │  │  ├─ config
│  │  │  │  │  │  │  └─ functions
│  │  │  │  │  │  ├─ de
│  │  │  │  │  │  │  ├─ config
│  │  │  │  │  │  │  └─ functions
│  │  │  │  │  │  ├─ en
│  │  │  │  │  │  │  └─ uk
│  │  │  │  │  │  │     └─ config
│  │  │  │  │  │  ├─ es
│  │  │  │  │  │  │  ├─ config
│  │  │  │  │  │  │  └─ functions
│  │  │  │  │  │  ├─ fi
│  │  │  │  │  │  │  ├─ config
│  │  │  │  │  │  │  └─ functions
│  │  │  │  │  │  ├─ fr
│  │  │  │  │  │  │  ├─ config
│  │  │  │  │  │  │  └─ functions
│  │  │  │  │  │  ├─ hu
│  │  │  │  │  │  │  ├─ config
│  │  │  │  │  │  │  └─ functions
│  │  │  │  │  │  ├─ it
│  │  │  │  │  │  │  ├─ config
│  │  │  │  │  │  │  └─ functions
│  │  │  │  │  │  ├─ nl
│  │  │  │  │  │  │  ├─ config
│  │  │  │  │  │  │  └─ functions
│  │  │  │  │  │  ├─ no
│  │  │  │  │  │  │  ├─ config
│  │  │  │  │  │  │  └─ functions
│  │  │  │  │  │  ├─ pl
│  │  │  │  │  │  │  ├─ config
│  │  │  │  │  │  │  └─ functions
│  │  │  │  │  │  ├─ pt
│  │  │  │  │  │  │  ├─ br
│  │  │  │  │  │  │  │  ├─ config
│  │  │  │  │  │  │  │  └─ functions
│  │  │  │  │  │  │  ├─ config
│  │  │  │  │  │  │  └─ functions
│  │  │  │  │  │  ├─ ru
│  │  │  │  │  │  │  ├─ config
│  │  │  │  │  │  │  └─ functions
│  │  │  │  │  │  ├─ sv
│  │  │  │  │  │  │  ├─ config
│  │  │  │  │  │  │  └─ functions
│  │  │  │  │  │  └─ tr
│  │  │  │  │  │     ├─ config
│  │  │  │  │  │     └─ functions
│  │  │  │  │  ├─ NamedRange.php
│  │  │  │  │  ├─ Reader
│  │  │  │  │  │  ├─ Abstract.php
│  │  │  │  │  │  ├─ CSV.php
│  │  │  │  │  │  ├─ DefaultReadFilter.php
│  │  │  │  │  │  ├─ Excel2003XML.php
│  │  │  │  │  │  ├─ Excel2007
│  │  │  │  │  │  │  ├─ Chart.php
│  │  │  │  │  │  │  └─ Theme.php
│  │  │  │  │  │  ├─ Excel2007.php
│  │  │  │  │  │  ├─ Excel5
│  │  │  │  │  │  │  ├─ Escher.php
│  │  │  │  │  │  │  ├─ MD5.php
│  │  │  │  │  │  │  └─ RC4.php
│  │  │  │  │  │  ├─ Excel5.php
│  │  │  │  │  │  ├─ Exception.php
│  │  │  │  │  │  ├─ Gnumeric.php
│  │  │  │  │  │  ├─ HTML.php
│  │  │  │  │  │  ├─ IReader.php
│  │  │  │  │  │  ├─ IReadFilter.php
│  │  │  │  │  │  ├─ OOCalc.php
│  │  │  │  │  │  └─ SYLK.php
│  │  │  │  │  ├─ ReferenceHelper.php
│  │  │  │  │  ├─ RichText
│  │  │  │  │  │  ├─ ITextElement.php
│  │  │  │  │  │  ├─ Run.php
│  │  │  │  │  │  └─ TextElement.php
│  │  │  │  │  ├─ RichText.php
│  │  │  │  │  ├─ Settings.php
│  │  │  │  │  ├─ Shared
│  │  │  │  │  │  ├─ CodePage.php
│  │  │  │  │  │  ├─ Date.php
│  │  │  │  │  │  ├─ Drawing.php
│  │  │  │  │  │  ├─ Escher
│  │  │  │  │  │  │  ├─ DgContainer
│  │  │  │  │  │  │  │  ├─ SpgrContainer
│  │  │  │  │  │  │  │  │  └─ SpContainer.php
│  │  │  │  │  │  │  │  └─ SpgrContainer.php
│  │  │  │  │  │  │  ├─ DgContainer.php
│  │  │  │  │  │  │  ├─ DggContainer
│  │  │  │  │  │  │  │  ├─ BstoreContainer
│  │  │  │  │  │  │  │  │  ├─ BSE
│  │  │  │  │  │  │  │  │  │  └─ Blip.php
│  │  │  │  │  │  │  │  │  └─ BSE.php
│  │  │  │  │  │  │  │  └─ BstoreContainer.php
│  │  │  │  │  │  │  └─ DggContainer.php
│  │  │  │  │  │  ├─ Escher.php
│  │  │  │  │  │  ├─ Excel5.php
│  │  │  │  │  │  ├─ File.php
│  │  │  │  │  │  ├─ Font.php
│  │  │  │  │  │  ├─ JAMA
│  │  │  │  │  │  │  ├─ CHANGELOG.TXT
│  │  │  │  │  │  │  ├─ CholeskyDecomposition.php
│  │  │  │  │  │  │  ├─ EigenvalueDecomposition.php
│  │  │  │  │  │  │  ├─ LUDecomposition.php
│  │  │  │  │  │  │  ├─ Matrix.php
│  │  │  │  │  │  │  ├─ QRDecomposition.php
│  │  │  │  │  │  │  ├─ SingularValueDecomposition.php
│  │  │  │  │  │  │  └─ utils
│  │  │  │  │  │  │     ├─ Error.php
│  │  │  │  │  │  │     └─ Maths.php
│  │  │  │  │  │  ├─ OLE
│  │  │  │  │  │  │  ├─ ChainedBlockStream.php
│  │  │  │  │  │  │  ├─ PPS
│  │  │  │  │  │  │  │  ├─ File.php
│  │  │  │  │  │  │  │  └─ Root.php
│  │  │  │  │  │  │  └─ PPS.php
│  │  │  │  │  │  ├─ OLE.php
│  │  │  │  │  │  ├─ OLERead.php
│  │  │  │  │  │  ├─ PasswordHasher.php
│  │  │  │  │  │  ├─ PCLZip
│  │  │  │  │  │  │  ├─ gnu-lgpl.txt
│  │  │  │  │  │  │  ├─ pclzip.lib.php
│  │  │  │  │  │  │  └─ readme.txt
│  │  │  │  │  │  ├─ String.php
│  │  │  │  │  │  ├─ TimeZone.php
│  │  │  │  │  │  ├─ trend
│  │  │  │  │  │  │  ├─ bestFitClass.php
│  │  │  │  │  │  │  ├─ exponentialBestFitClass.php
│  │  │  │  │  │  │  ├─ linearBestFitClass.php
│  │  │  │  │  │  │  ├─ logarithmicBestFitClass.php
│  │  │  │  │  │  │  ├─ polynomialBestFitClass.php
│  │  │  │  │  │  │  ├─ powerBestFitClass.php
│  │  │  │  │  │  │  └─ trendClass.php
│  │  │  │  │  │  ├─ XMLWriter.php
│  │  │  │  │  │  ├─ ZipArchive.php
│  │  │  │  │  │  └─ ZipStreamWrapper.php
│  │  │  │  │  ├─ Style
│  │  │  │  │  │  ├─ Alignment.php
│  │  │  │  │  │  ├─ Border.php
│  │  │  │  │  │  ├─ Borders.php
│  │  │  │  │  │  ├─ Color.php
│  │  │  │  │  │  ├─ Conditional.php
│  │  │  │  │  │  ├─ Fill.php
│  │  │  │  │  │  ├─ Font.php
│  │  │  │  │  │  ├─ NumberFormat.php
│  │  │  │  │  │  ├─ Protection.php
│  │  │  │  │  │  └─ Supervisor.php
│  │  │  │  │  ├─ Style.php
│  │  │  │  │  ├─ Worksheet
│  │  │  │  │  │  ├─ AutoFilter
│  │  │  │  │  │  │  ├─ Column
│  │  │  │  │  │  │  │  └─ Rule.php
│  │  │  │  │  │  │  └─ Column.php
│  │  │  │  │  │  ├─ AutoFilter.php
│  │  │  │  │  │  ├─ BaseDrawing.php
│  │  │  │  │  │  ├─ CellIterator.php
│  │  │  │  │  │  ├─ Column.php
│  │  │  │  │  │  ├─ ColumnCellIterator.php
│  │  │  │  │  │  ├─ ColumnDimension.php
│  │  │  │  │  │  ├─ ColumnIterator.php
│  │  │  │  │  │  ├─ Drawing
│  │  │  │  │  │  │  └─ Shadow.php
│  │  │  │  │  │  ├─ Drawing.php
│  │  │  │  │  │  ├─ HeaderFooter.php
│  │  │  │  │  │  ├─ HeaderFooterDrawing.php
│  │  │  │  │  │  ├─ MemoryDrawing.php
│  │  │  │  │  │  ├─ PageMargins.php
│  │  │  │  │  │  ├─ PageSetup.php
│  │  │  │  │  │  ├─ Protection.php
│  │  │  │  │  │  ├─ Row.php
│  │  │  │  │  │  ├─ RowCellIterator.php
│  │  │  │  │  │  ├─ RowDimension.php
│  │  │  │  │  │  ├─ RowIterator.php
│  │  │  │  │  │  └─ SheetView.php
│  │  │  │  │  ├─ Worksheet.php
│  │  │  │  │  ├─ WorksheetIterator.php
│  │  │  │  │  └─ Writer
│  │  │  │  │     ├─ Abstract.php
│  │  │  │  │     ├─ CSV.php
│  │  │  │  │     ├─ Excel2007
│  │  │  │  │     │  ├─ Chart.php
│  │  │  │  │     │  ├─ Comments.php
│  │  │  │  │     │  ├─ ContentTypes.php
│  │  │  │  │     │  ├─ DocProps.php
│  │  │  │  │     │  ├─ Drawing.php
│  │  │  │  │     │  ├─ Rels.php
│  │  │  │  │     │  ├─ RelsRibbon.php
│  │  │  │  │     │  ├─ RelsVBA.php
│  │  │  │  │     │  ├─ StringTable.php
│  │  │  │  │     │  ├─ Style.php
│  │  │  │  │     │  ├─ Theme.php
│  │  │  │  │     │  ├─ Workbook.php
│  │  │  │  │     │  ├─ Worksheet.php
│  │  │  │  │     │  └─ WriterPart.php
│  │  │  │  │     ├─ Excel2007.php
│  │  │  │  │     ├─ Excel5
│  │  │  │  │     │  ├─ BIFFwriter.php
│  │  │  │  │     │  ├─ Escher.php
│  │  │  │  │     │  ├─ Font.php
│  │  │  │  │     │  ├─ Parser.php
│  │  │  │  │     │  ├─ Workbook.php
│  │  │  │  │     │  ├─ Worksheet.php
│  │  │  │  │     │  └─ Xf.php
│  │  │  │  │     ├─ Excel5.php
│  │  │  │  │     ├─ Exception.php
│  │  │  │  │     ├─ HTML.php
│  │  │  │  │     ├─ IWriter.php
│  │  │  │  │     ├─ OpenDocument
│  │  │  │  │     │  ├─ Cell
│  │  │  │  │     │  │  └─ Comment.php
│  │  │  │  │     │  ├─ Content.php
│  │  │  │  │     │  ├─ Meta.php
│  │  │  │  │     │  ├─ MetaInf.php
│  │  │  │  │     │  ├─ Mimetype.php
│  │  │  │  │     │  ├─ Settings.php
│  │  │  │  │     │  ├─ Styles.php
│  │  │  │  │     │  ├─ Thumbnails.php
│  │  │  │  │     │  └─ WriterPart.php
│  │  │  │  │     ├─ OpenDocument.php
│  │  │  │  │     ├─ PDF
│  │  │  │  │     │  ├─ Core.php
│  │  │  │  │     │  ├─ DomPDF.php
│  │  │  │  │     │  ├─ mPDF.php
│  │  │  │  │     │  └─ tcPDF.php
│  │  │  │  │     └─ PDF.php
│  │  │  │  └─ PHPExcel.php
│  │  │  ├─ composer.json
│  │  │  ├─ Examples
│  │  │  │  ├─ 01pharSimple.php
│  │  │  │  ├─ 01simple-download-ods.php
│  │  │  │  ├─ 01simple-download-pdf.php
│  │  │  │  ├─ 01simple-download-xls.php
│  │  │  │  ├─ 01simple-download-xlsx.php
│  │  │  │  ├─ 01simple.php
│  │  │  │  ├─ 01simplePCLZip.php
│  │  │  │  ├─ 02types-xls.php
│  │  │  │  ├─ 02types.php
│  │  │  │  ├─ 03formulas.php
│  │  │  │  ├─ 04printing.php
│  │  │  │  ├─ 05featuredemo.inc.php
│  │  │  │  ├─ 05featuredemo.php
│  │  │  │  ├─ 06largescale-with-cellcaching-sqlite.php
│  │  │  │  ├─ 06largescale-with-cellcaching-sqlite3.php
│  │  │  │  ├─ 06largescale-with-cellcaching.php
│  │  │  │  ├─ 06largescale-xls.php
│  │  │  │  ├─ 06largescale.php
│  │  │  │  ├─ 07reader.php
│  │  │  │  ├─ 07readerPCLZip.php
│  │  │  │  ├─ 08conditionalformatting.php
│  │  │  │  ├─ 08conditionalformatting2.php
│  │  │  │  ├─ 09pagebreaks.php
│  │  │  │  ├─ 10autofilter-selection-1.php
│  │  │  │  ├─ 10autofilter-selection-2.php
│  │  │  │  ├─ 10autofilter-selection-display.php
│  │  │  │  ├─ 10autofilter.php
│  │  │  │  ├─ 11documentsecurity-xls.php
│  │  │  │  ├─ 11documentsecurity.php
│  │  │  │  ├─ 12cellProtection.php
│  │  │  │  ├─ 13calculation.php
│  │  │  │  ├─ 14excel5.php
│  │  │  │  ├─ 15datavalidation-xls.php
│  │  │  │  ├─ 15datavalidation.php
│  │  │  │  ├─ 16csv.php
│  │  │  │  ├─ 17html.php
│  │  │  │  ├─ 18extendedcalculation.php
│  │  │  │  ├─ 19namedrange.php
│  │  │  │  ├─ 20readexcel5.php
│  │  │  │  ├─ 21pdf.php
│  │  │  │  ├─ 22heavilyformatted.php
│  │  │  │  ├─ 23sharedstyles.php
│  │  │  │  ├─ 24readfilter.php
│  │  │  │  ├─ 25inmemoryimage.php
│  │  │  │  ├─ 26utf8.php
│  │  │  │  ├─ 27imagesexcel5.php
│  │  │  │  ├─ 28iterator.php
│  │  │  │  ├─ 29advancedvaluebinder.php
│  │  │  │  ├─ 30template.php
│  │  │  │  ├─ 31docproperties_write-xls.php
│  │  │  │  ├─ 31docproperties_write.php
│  │  │  │  ├─ 32chartreadwrite.php
│  │  │  │  ├─ 33chartcreate-area.php
│  │  │  │  ├─ 33chartcreate-bar-stacked.php
│  │  │  │  ├─ 33chartcreate-bar.php
│  │  │  │  ├─ 33chartcreate-column-2.php
│  │  │  │  ├─ 33chartcreate-column.php
│  │  │  │  ├─ 33chartcreate-composite.php
│  │  │  │  ├─ 33chartcreate-line.php
│  │  │  │  ├─ 33chartcreate-multiple-charts.php
│  │  │  │  ├─ 33chartcreate-pie.php
│  │  │  │  ├─ 33chartcreate-radar.php
│  │  │  │  ├─ 33chartcreate-scatter.php
│  │  │  │  ├─ 33chartcreate-stock.php
│  │  │  │  ├─ 34chartupdate.php
│  │  │  │  ├─ 35chartrender.php
│  │  │  │  ├─ 36chartreadwriteHTML.php
│  │  │  │  ├─ 36chartreadwritePDF.php
│  │  │  │  ├─ 37page_layout_view.php
│  │  │  │  ├─ 38cloneWorksheet.php
│  │  │  │  ├─ 39dropdown.php
│  │  │  │  ├─ 40duplicateStyle.php
│  │  │  │  ├─ 41password.php
│  │  │  │  ├─ 42richText.php
│  │  │  │  ├─ data
│  │  │  │  │  └─ continents
│  │  │  │  │     ├─ Africa.txt
│  │  │  │  │     ├─ Asia.txt
│  │  │  │  │     ├─ Europe.txt
│  │  │  │  │     ├─ North America.txt
│  │  │  │  │     ├─ Oceania.txt
│  │  │  │  │     └─ South America.txt
│  │  │  │  ├─ Excel2003XMLReader.php
│  │  │  │  ├─ Excel2003XMLTest.xml
│  │  │  │  ├─ GnumericReader.php
│  │  │  │  ├─ GnumericTest.gnumeric
│  │  │  │  ├─ images
│  │  │  │  │  ├─ officelogo.jpg
│  │  │  │  │  ├─ paid.png
│  │  │  │  │  ├─ phpexcel_logo.gif
│  │  │  │  │  └─ termsconditions.jpg
│  │  │  │  ├─ OOCalcReader.php
│  │  │  │  ├─ OOCalcReaderPCLZip.php
│  │  │  │  ├─ OOCalcTest.ods
│  │  │  │  ├─ Quadratic.php
│  │  │  │  ├─ Quadratic.xlsx
│  │  │  │  ├─ Quadratic2.php
│  │  │  │  ├─ runall.php
│  │  │  │  ├─ SylkReader.php
│  │  │  │  ├─ SylkTest.slk
│  │  │  │  ├─ templates
│  │  │  │  │  ├─ 26template.xlsx
│  │  │  │  │  ├─ 27template.xls
│  │  │  │  │  ├─ 30template.xls
│  │  │  │  │  ├─ 31docproperties.xls
│  │  │  │  │  ├─ 31docproperties.xlsx
│  │  │  │  │  ├─ 32chartreadwrite.xlsx
│  │  │  │  │  ├─ 32complexChartreadwrite.xlsx
│  │  │  │  │  ├─ 32readwriteAreaChart1.xlsx
│  │  │  │  │  ├─ 32readwriteAreaChart2.xlsx
│  │  │  │  │  ├─ 32readwriteAreaChart3.xlsx
│  │  │  │  │  ├─ 32readwriteAreaChart3D1.xlsx
│  │  │  │  │  ├─ 32readwriteAreaPercentageChart1.xlsx
│  │  │  │  │  ├─ 32readwriteAreaPercentageChart2.xlsx
│  │  │  │  │  ├─ 32readwriteAreaPercentageChart3D1.xlsx
│  │  │  │  │  ├─ 32readwriteAreaStackedChart1.xlsx
│  │  │  │  │  ├─ 32readwriteAreaStackedChart2.xlsx
│  │  │  │  │  ├─ 32readwriteAreaStackedChart3D1.xlsx
│  │  │  │  │  ├─ 32readwriteBarChart1.xlsx
│  │  │  │  │  ├─ 32readwriteBarChart2.xlsx
│  │  │  │  │  ├─ 32readwriteBarChart3.xlsx
│  │  │  │  │  ├─ 32readwriteBarChart3D1.xlsx
│  │  │  │  │  ├─ 32readwriteBarPercentageChart1.xlsx
│  │  │  │  │  ├─ 32readwriteBarPercentageChart2.xlsx
│  │  │  │  │  ├─ 32readwriteBarPercentageChart3D1.xlsx
│  │  │  │  │  ├─ 32readwriteBarStackedChart1.xlsx
│  │  │  │  │  ├─ 32readwriteBarStackedChart2.xlsx
│  │  │  │  │  ├─ 32readwriteBarStackedChart3D1.xlsx
│  │  │  │  │  ├─ 32readwriteBubbleChart1.xlsx
│  │  │  │  │  ├─ 32readwriteBubbleChart3D1.xlsx
│  │  │  │  │  ├─ 32readwriteChartWithImages1.xlsx
│  │  │  │  │  ├─ 32readwriteColumnChart1.xlsx
│  │  │  │  │  ├─ 32readwriteColumnChart2.xlsx
│  │  │  │  │  ├─ 32readwriteColumnChart3.xlsx
│  │  │  │  │  ├─ 32readwriteColumnChart3D1.xlsx
│  │  │  │  │  ├─ 32readwriteColumnChart4.xlsx
│  │  │  │  │  ├─ 32readwriteColumnPercentageChart1.xlsx
│  │  │  │  │  ├─ 32readwriteColumnPercentageChart2.xlsx
│  │  │  │  │  ├─ 32readwriteColumnPercentageChart3D1.xlsx
│  │  │  │  │  ├─ 32readwriteColumnStackedChart1.xlsx
│  │  │  │  │  ├─ 32readwriteColumnStackedChart2.xlsx
│  │  │  │  │  ├─ 32readwriteColumnStackedChart3D1.xlsx
│  │  │  │  │  ├─ 32readwriteDonutChart1.xlsx
│  │  │  │  │  ├─ 32readwriteDonutChart2.xlsx
│  │  │  │  │  ├─ 32readwriteDonutChart3.xlsx
│  │  │  │  │  ├─ 32readwriteDonutChart4.xlsx
│  │  │  │  │  ├─ 32readwriteDonutChartExploded1.xlsx
│  │  │  │  │  ├─ 32readwriteDonutChartMultiseries1.xlsx
│  │  │  │  │  ├─ 32readwriteLineChart1.xlsx
│  │  │  │  │  ├─ 32readwriteLineChart2.xlsx
│  │  │  │  │  ├─ 32readwriteLineChart3.xlsx
│  │  │  │  │  ├─ 32readwriteLineChart3D1.xlsx
│  │  │  │  │  ├─ 32readwriteLineChartNoPointMarkers1.xlsx
│  │  │  │  │  ├─ 32readwriteLinePercentageChart1.xlsx
│  │  │  │  │  ├─ 32readwriteLinePercentageChart2.xlsx
│  │  │  │  │  ├─ 32readwriteLineStackedChart1.xlsx
│  │  │  │  │  ├─ 32readwriteLineStackedChart2.xlsx
│  │  │  │  │  ├─ 32readwritePieChart1.xlsx
│  │  │  │  │  ├─ 32readwritePieChart2.xlsx
│  │  │  │  │  ├─ 32readwritePieChart3.xlsx
│  │  │  │  │  ├─ 32readwritePieChart3D1.xlsx
│  │  │  │  │  ├─ 32readwritePieChart4.xlsx
│  │  │  │  │  ├─ 32readwritePieChartExploded1.xlsx
│  │  │  │  │  ├─ 32readwritePieChartExploded3D1.xlsx
│  │  │  │  │  ├─ 32readwriteRadarChart1.xlsx
│  │  │  │  │  ├─ 32readwriteRadarChart2.xlsx
│  │  │  │  │  ├─ 32readwriteRadarChart3.xlsx
│  │  │  │  │  ├─ 32readwriteScatterChart1.xlsx
│  │  │  │  │  ├─ 32readwriteScatterChart2.xlsx
│  │  │  │  │  ├─ 32readwriteScatterChart3.xlsx
│  │  │  │  │  ├─ 32readwriteScatterChart4.xlsx
│  │  │  │  │  ├─ 32readwriteScatterChart5.xlsx
│  │  │  │  │  ├─ 32readwriteStockChart1.xlsx
│  │  │  │  │  ├─ 32readwriteStockChart2.xlsx
│  │  │  │  │  ├─ 32readwriteStockChart3.xlsx
│  │  │  │  │  ├─ 32readwriteStockChart4.xlsx
│  │  │  │  │  ├─ 32readwriteSurfaceChart1.xlsx
│  │  │  │  │  ├─ 32readwriteSurfaceChart2.xlsx
│  │  │  │  │  ├─ 32readwriteSurfaceChart3.xlsx
│  │  │  │  │  ├─ 32readwriteSurfaceChart4.xlsx
│  │  │  │  │  └─ 36writeLineChart1.xlsx
│  │  │  │  ├─ XMLReader.php
│  │  │  │  └─ XMLTest.xml
│  │  │  ├─ install.txt
│  │  │  ├─ license.md
│  │  │  └─ unitTests
│  │  │     ├─ bootstrap.php
│  │  │     ├─ Classes
│  │  │     │  └─ PHPExcel
│  │  │     │     ├─ AutoloaderTest.php
│  │  │     │     ├─ Calculation
│  │  │     │     │  ├─ DateTimeTest.php
│  │  │     │     │  ├─ EngineeringTest.php
│  │  │     │     │  ├─ FinancialTest.php
│  │  │     │     │  ├─ FunctionsTest.php
│  │  │     │     │  ├─ LogicalTest.php
│  │  │     │     │  ├─ LookupRefTest.php
│  │  │     │     │  ├─ MathTrigTest.php
│  │  │     │     │  └─ TextDataTest.php
│  │  │     │     ├─ CalculationTest.php
│  │  │     │     ├─ Cell
│  │  │     │     │  ├─ AdvancedValueBinderTest.php
│  │  │     │     │  ├─ DataTypeTest.php
│  │  │     │     │  ├─ DefaultValueBinderTest.php
│  │  │     │     │  └─ HyperlinkTest.php
│  │  │     │     ├─ CellTest.php
│  │  │     │     ├─ Chart
│  │  │     │     │  ├─ DataSeriesValuesTest.php
│  │  │     │     │  ├─ LayoutTest.php
│  │  │     │     │  └─ LegendTest.php
│  │  │     │     ├─ Reader
│  │  │     │     │  └─ XEEValidatorTest.php
│  │  │     │     ├─ ReferenceHelperTest.php
│  │  │     │     ├─ Shared
│  │  │     │     │  ├─ CodePageTest.php
│  │  │     │     │  ├─ DateTest.php
│  │  │     │     │  ├─ FileTest.php
│  │  │     │     │  ├─ FontTest.php
│  │  │     │     │  ├─ PasswordHasherTest.php
│  │  │     │     │  ├─ StringTest.php
│  │  │     │     │  └─ TimeZoneTest.php
│  │  │     │     ├─ Style
│  │  │     │     │  ├─ ColorTest.php
│  │  │     │     │  └─ NumberFormatTest.php
│  │  │     │     └─ Worksheet
│  │  │     │        ├─ AutoFilter
│  │  │     │        │  ├─ Column
│  │  │     │        │  │  └─ RuleTest.php
│  │  │     │        │  └─ ColumnTest.php
│  │  │     │        ├─ AutoFilterTest.php
│  │  │     │        ├─ CellCollectionTest.php
│  │  │     │        ├─ ColumnCellIteratorTest.php
│  │  │     │        ├─ ColumnIteratorTest.php
│  │  │     │        ├─ RowCellIteratorTest.php
│  │  │     │        ├─ RowIteratorTest.php
│  │  │     │        ├─ WorksheetColumnTest.php
│  │  │     │        └─ WorksheetRowTest.php
│  │  │     ├─ custom
│  │  │     │  ├─ Complex.php
│  │  │     │  └─ complexAssert.php
│  │  │     ├─ phpunit-cc.xml
│  │  │     ├─ phpunit.xml
│  │  │     ├─ rawTestData
│  │  │     │  ├─ Calculation
│  │  │     │  │  ├─ DateTime
│  │  │     │  │  │  ├─ DATE.data
│  │  │     │  │  │  ├─ DATEDIF.data
│  │  │     │  │  │  ├─ DATEVALUE.data
│  │  │     │  │  │  ├─ DAY.data
│  │  │     │  │  │  ├─ DAYS360.data
│  │  │     │  │  │  ├─ EDATE.data
│  │  │     │  │  │  ├─ EOMONTH.data
│  │  │     │  │  │  ├─ HOUR.data
│  │  │     │  │  │  ├─ MINUTE.data
│  │  │     │  │  │  ├─ MONTH.data
│  │  │     │  │  │  ├─ NETWORKDAYS.data
│  │  │     │  │  │  ├─ SECOND.data
│  │  │     │  │  │  ├─ TIME.data
│  │  │     │  │  │  ├─ TIMEVALUE.data
│  │  │     │  │  │  ├─ WEEKDAY.data
│  │  │     │  │  │  ├─ WEEKNUM.data
│  │  │     │  │  │  ├─ WORKDAY.data
│  │  │     │  │  │  ├─ YEAR.data
│  │  │     │  │  │  └─ YEARFRAC.data
│  │  │     │  │  ├─ Engineering
│  │  │     │  │  │  ├─ BESSELI.data
│  │  │     │  │  │  ├─ BESSELJ.data
│  │  │     │  │  │  ├─ BESSELK.data
│  │  │     │  │  │  ├─ BESSELY.data
│  │  │     │  │  │  ├─ BIN2DEC.data
│  │  │     │  │  │  ├─ BIN2HEX.data
│  │  │     │  │  │  ├─ BIN2OCT.data
│  │  │     │  │  │  ├─ COMPLEX.data
│  │  │     │  │  │  ├─ CONVERTUOM.data
│  │  │     │  │  │  ├─ DEC2BIN.data
│  │  │     │  │  │  ├─ DEC2HEX.data
│  │  │     │  │  │  ├─ DEC2OCT.data
│  │  │     │  │  │  ├─ DELTA.data
│  │  │     │  │  │  ├─ ERF.data
│  │  │     │  │  │  ├─ ERFC.data
│  │  │     │  │  │  ├─ GESTEP.data
│  │  │     │  │  │  ├─ HEX2BIN.data
│  │  │     │  │  │  ├─ HEX2DEC.data
│  │  │     │  │  │  ├─ HEX2OCT.data
│  │  │     │  │  │  ├─ IMABS.data
│  │  │     │  │  │  ├─ IMAGINARY.data
│  │  │     │  │  │  ├─ IMARGUMENT.data
│  │  │     │  │  │  ├─ IMCONJUGATE.data
│  │  │     │  │  │  ├─ IMCOS.data
│  │  │     │  │  │  ├─ IMDIV.data
│  │  │     │  │  │  ├─ IMEXP.data
│  │  │     │  │  │  ├─ IMLN.data
│  │  │     │  │  │  ├─ IMLOG10.data
│  │  │     │  │  │  ├─ IMLOG2.data
│  │  │     │  │  │  ├─ IMPOWER.data
│  │  │     │  │  │  ├─ IMPRODUCT.data
│  │  │     │  │  │  ├─ IMREAL.data
│  │  │     │  │  │  ├─ IMSIN.data
│  │  │     │  │  │  ├─ IMSQRT.data
│  │  │     │  │  │  ├─ IMSUB.data
│  │  │     │  │  │  ├─ IMSUM.data
│  │  │     │  │  │  ├─ OCT2BIN.data
│  │  │     │  │  │  ├─ OCT2DEC.data
│  │  │     │  │  │  └─ OCT2HEX.data
│  │  │     │  │  ├─ Financial
│  │  │     │  │  │  ├─ ACCRINT.data
│  │  │     │  │  │  ├─ ACCRINTM.data
│  │  │     │  │  │  ├─ AMORDEGRC.data
│  │  │     │  │  │  ├─ AMORLINC.data
│  │  │     │  │  │  ├─ COUPDAYBS.data
│  │  │     │  │  │  ├─ COUPDAYS.data
│  │  │     │  │  │  ├─ COUPDAYSNC.data
│  │  │     │  │  │  ├─ COUPNCD.data
│  │  │     │  │  │  ├─ COUPNUM.data
│  │  │     │  │  │  ├─ COUPPCD.data
│  │  │     │  │  │  ├─ CUMIPMT.data
│  │  │     │  │  │  ├─ CUMPRINC.data
│  │  │     │  │  │  ├─ DB.data
│  │  │     │  │  │  ├─ DDB.data
│  │  │     │  │  │  ├─ DISC.data
│  │  │     │  │  │  ├─ DOLLARDE.data
│  │  │     │  │  │  ├─ DOLLARFR.data
│  │  │     │  │  │  ├─ EFFECT.data
│  │  │     │  │  │  ├─ FV.data
│  │  │     │  │  │  ├─ FVSCHEDULE.data
│  │  │     │  │  │  ├─ INTRATE.data
│  │  │     │  │  │  ├─ IPMT.data
│  │  │     │  │  │  ├─ IRR.data
│  │  │     │  │  │  ├─ ISPMT.data
│  │  │     │  │  │  ├─ MIRR.data
│  │  │     │  │  │  ├─ NOMINAL.data
│  │  │     │  │  │  ├─ NPER.data
│  │  │     │  │  │  ├─ NPV.data
│  │  │     │  │  │  ├─ PRICE.data
│  │  │     │  │  │  ├─ RATE.data
│  │  │     │  │  │  └─ XIRR.data
│  │  │     │  │  ├─ Functions
│  │  │     │  │  │  ├─ ERROR_TYPE.data
│  │  │     │  │  │  ├─ IS_BLANK.data
│  │  │     │  │  │  ├─ IS_ERR.data
│  │  │     │  │  │  ├─ IS_ERROR.data
│  │  │     │  │  │  ├─ IS_EVEN.data
│  │  │     │  │  │  ├─ IS_LOGICAL.data
│  │  │     │  │  │  ├─ IS_NA.data
│  │  │     │  │  │  ├─ IS_NONTEXT.data
│  │  │     │  │  │  ├─ IS_NUMBER.data
│  │  │     │  │  │  ├─ IS_ODD.data
│  │  │     │  │  │  ├─ IS_TEXT.data
│  │  │     │  │  │  ├─ N.data
│  │  │     │  │  │  └─ TYPE.data
│  │  │     │  │  ├─ Logical
│  │  │     │  │  │  ├─ AND.data
│  │  │     │  │  │  ├─ IF.data
│  │  │     │  │  │  ├─ IFERROR.data
│  │  │     │  │  │  ├─ NOT.data
│  │  │     │  │  │  └─ OR.data
│  │  │     │  │  ├─ LookupRef
│  │  │     │  │  │  ├─ HLOOKUP.data
│  │  │     │  │  │  └─ VLOOKUP.data
│  │  │     │  │  ├─ MathTrig
│  │  │     │  │  │  ├─ ATAN2.data
│  │  │     │  │  │  ├─ CEILING.data
│  │  │     │  │  │  ├─ COMBIN.data
│  │  │     │  │  │  ├─ EVEN.data
│  │  │     │  │  │  ├─ FACT.data
│  │  │     │  │  │  ├─ FACTDOUBLE.data
│  │  │     │  │  │  ├─ FLOOR.data
│  │  │     │  │  │  ├─ GCD.data
│  │  │     │  │  │  ├─ INT.data
│  │  │     │  │  │  ├─ LCM.data
│  │  │     │  │  │  ├─ LOG.data
│  │  │     │  │  │  ├─ MDETERM.data
│  │  │     │  │  │  ├─ MINVERSE.data
│  │  │     │  │  │  ├─ MMULT.data
│  │  │     │  │  │  ├─ MOD.data
│  │  │     │  │  │  ├─ MROUND.data
│  │  │     │  │  │  ├─ MULTINOMIAL.data
│  │  │     │  │  │  ├─ ODD.data
│  │  │     │  │  │  ├─ POWER.data
│  │  │     │  │  │  ├─ PRODUCT.data
│  │  │     │  │  │  ├─ QUOTIENT.data
│  │  │     │  │  │  ├─ ROMAN.data
│  │  │     │  │  │  ├─ ROUNDDOWN.data
│  │  │     │  │  │  ├─ ROUNDUP.data
│  │  │     │  │  │  ├─ SERIESSUM.data
│  │  │     │  │  │  ├─ SIGN.data
│  │  │     │  │  │  ├─ SQRTPI.data
│  │  │     │  │  │  ├─ SUMSQ.data
│  │  │     │  │  │  └─ TRUNC.data
│  │  │     │  │  └─ TextData
│  │  │     │  │     ├─ CHAR.data
│  │  │     │  │     ├─ CLEAN.data
│  │  │     │  │     ├─ CODE.data
│  │  │     │  │     ├─ CONCATENATE.data
│  │  │     │  │     ├─ DOLLAR.data
│  │  │     │  │     ├─ FIND.data
│  │  │     │  │     ├─ FIXED.data
│  │  │     │  │     ├─ LEFT.data
│  │  │     │  │     ├─ LEN.data
│  │  │     │  │     ├─ LOWER.data
│  │  │     │  │     ├─ MID.data
│  │  │     │  │     ├─ PROPER.data
│  │  │     │  │     ├─ REPLACE.data
│  │  │     │  │     ├─ RIGHT.data
│  │  │     │  │     ├─ SEARCH.data
│  │  │     │  │     ├─ SUBSTITUTE.data
│  │  │     │  │     ├─ T.data
│  │  │     │  │     ├─ TEXT.data
│  │  │     │  │     ├─ TRIM.data
│  │  │     │  │     ├─ UPPER.data
│  │  │     │  │     └─ VALUE.data
│  │  │     │  ├─ CalculationBinaryComparisonOperation.data
│  │  │     │  ├─ Cell
│  │  │     │  │  └─ DefaultValueBinder.data
│  │  │     │  ├─ CellAbsoluteCoordinate.data
│  │  │     │  ├─ CellAbsoluteReference.data
│  │  │     │  ├─ CellBuildRange.data
│  │  │     │  ├─ CellCoordinates.data
│  │  │     │  ├─ CellExtractAllCellReferencesInRange.data
│  │  │     │  ├─ CellGetRangeBoundaries.data
│  │  │     │  ├─ CellRangeBoundaries.data
│  │  │     │  ├─ CellRangeDimension.data
│  │  │     │  ├─ CellSplitRange.data
│  │  │     │  ├─ ColumnIndex.data
│  │  │     │  ├─ ColumnString.data
│  │  │     │  ├─ Reader
│  │  │     │  │  ├─ XEETestInvalidUTF-16.xml
│  │  │     │  │  ├─ XEETestInvalidUTF-16BE.xml
│  │  │     │  │  ├─ XEETestInvalidUTF-16LE.xml
│  │  │     │  │  ├─ XEETestInvalidUTF-8.xml
│  │  │     │  │  ├─ XEETestValidUTF-16.xml
│  │  │     │  │  ├─ XEETestValidUTF-16BE.xml
│  │  │     │  │  ├─ XEETestValidUTF-16LE.xml
│  │  │     │  │  └─ XEETestValidUTF-8.xml
│  │  │     │  ├─ Shared
│  │  │     │  │  ├─ CentimeterSizeToPixels.data
│  │  │     │  │  ├─ CodePage.data
│  │  │     │  │  ├─ DateTimeExcelToPHP1900.data
│  │  │     │  │  ├─ DateTimeExcelToPHP1900Timezone.data
│  │  │     │  │  ├─ DateTimeExcelToPHP1904.data
│  │  │     │  │  ├─ DateTimeFormatCodes.data
│  │  │     │  │  ├─ DateTimeFormattedPHPToExcel1900.data
│  │  │     │  │  ├─ DateTimePHPToExcel1900.data
│  │  │     │  │  ├─ DateTimePHPToExcel1904.data
│  │  │     │  │  ├─ FontSizeToPixels.data
│  │  │     │  │  ├─ InchSizeToPixels.data
│  │  │     │  │  └─ PasswordHashes.data
│  │  │     │  └─ Style
│  │  │     │     ├─ ColorChangeBrightness.data
│  │  │     │     ├─ ColorGetBlue.data
│  │  │     │     ├─ ColorGetGreen.data
│  │  │     │     ├─ ColorGetRed.data
│  │  │     │     └─ NumberFormat.data
│  │  │     └─ testDataFileIterator.php
│  │  ├─ phpspreadsheet
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ composer.json
│  │  │  ├─ CONTRIBUTING.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     └─ PhpSpreadsheet
│  │  │        ├─ Calculation
│  │  │        │  ├─ ArrayEnabled.php
│  │  │        │  ├─ BinaryComparison.php
│  │  │        │  ├─ Calculation.php
│  │  │        │  ├─ CalculationBase.php
│  │  │        │  ├─ CalculationLocale.php
│  │  │        │  ├─ Category.php
│  │  │        │  ├─ Database
│  │  │        │  │  ├─ DatabaseAbstract.php
│  │  │        │  │  ├─ DAverage.php
│  │  │        │  │  ├─ DCount.php
│  │  │        │  │  ├─ DCountA.php
│  │  │        │  │  ├─ DGet.php
│  │  │        │  │  ├─ DMax.php
│  │  │        │  │  ├─ DMin.php
│  │  │        │  │  ├─ DProduct.php
│  │  │        │  │  ├─ DStDev.php
│  │  │        │  │  ├─ DStDevP.php
│  │  │        │  │  ├─ DSum.php
│  │  │        │  │  ├─ DVar.php
│  │  │        │  │  └─ DVarP.php
│  │  │        │  ├─ DateTimeExcel
│  │  │        │  │  ├─ Constants.php
│  │  │        │  │  ├─ Current.php
│  │  │        │  │  ├─ Date.php
│  │  │        │  │  ├─ DateParts.php
│  │  │        │  │  ├─ DateValue.php
│  │  │        │  │  ├─ Days.php
│  │  │        │  │  ├─ Days360.php
│  │  │        │  │  ├─ Difference.php
│  │  │        │  │  ├─ Helpers.php
│  │  │        │  │  ├─ Month.php
│  │  │        │  │  ├─ NetworkDays.php
│  │  │        │  │  ├─ Time.php
│  │  │        │  │  ├─ TimeParts.php
│  │  │        │  │  ├─ TimeValue.php
│  │  │        │  │  ├─ Week.php
│  │  │        │  │  ├─ WorkDay.php
│  │  │        │  │  └─ YearFrac.php
│  │  │        │  ├─ Engine
│  │  │        │  │  ├─ ArrayArgumentHelper.php
│  │  │        │  │  ├─ ArrayArgumentProcessor.php
│  │  │        │  │  ├─ BranchPruner.php
│  │  │        │  │  ├─ CyclicReferenceStack.php
│  │  │        │  │  ├─ FormattedNumber.php
│  │  │        │  │  ├─ Logger.php
│  │  │        │  │  └─ Operands
│  │  │        │  │     ├─ Operand.php
│  │  │        │  │     └─ StructuredReference.php
│  │  │        │  ├─ Engineering
│  │  │        │  │  ├─ BesselI.php
│  │  │        │  │  ├─ BesselJ.php
│  │  │        │  │  ├─ BesselK.php
│  │  │        │  │  ├─ BesselY.php
│  │  │        │  │  ├─ BitWise.php
│  │  │        │  │  ├─ Compare.php
│  │  │        │  │  ├─ Complex.php
│  │  │        │  │  ├─ ComplexFunctions.php
│  │  │        │  │  ├─ ComplexOperations.php
│  │  │        │  │  ├─ Constants.php
│  │  │        │  │  ├─ ConvertBase.php
│  │  │        │  │  ├─ ConvertBinary.php
│  │  │        │  │  ├─ ConvertDecimal.php
│  │  │        │  │  ├─ ConvertHex.php
│  │  │        │  │  ├─ ConvertOctal.php
│  │  │        │  │  ├─ ConvertUOM.php
│  │  │        │  │  ├─ EngineeringValidations.php
│  │  │        │  │  ├─ Erf.php
│  │  │        │  │  └─ ErfC.php
│  │  │        │  ├─ Exception.php
│  │  │        │  ├─ ExceptionHandler.php
│  │  │        │  ├─ Financial
│  │  │        │  │  ├─ Amortization.php
│  │  │        │  │  ├─ CashFlow
│  │  │        │  │  │  ├─ CashFlowValidations.php
│  │  │        │  │  │  ├─ Constant
│  │  │        │  │  │  │  ├─ Periodic
│  │  │        │  │  │  │  │  ├─ Cumulative.php
│  │  │        │  │  │  │  │  ├─ Interest.php
│  │  │        │  │  │  │  │  ├─ InterestAndPrincipal.php
│  │  │        │  │  │  │  │  └─ Payments.php
│  │  │        │  │  │  │  └─ Periodic.php
│  │  │        │  │  │  ├─ Single.php
│  │  │        │  │  │  └─ Variable
│  │  │        │  │  │     ├─ NonPeriodic.php
│  │  │        │  │  │     └─ Periodic.php
│  │  │        │  │  ├─ Constants.php
│  │  │        │  │  ├─ Coupons.php
│  │  │        │  │  ├─ Depreciation.php
│  │  │        │  │  ├─ Dollar.php
│  │  │        │  │  ├─ FinancialValidations.php
│  │  │        │  │  ├─ Helpers.php
│  │  │        │  │  ├─ InterestRate.php
│  │  │        │  │  ├─ Securities
│  │  │        │  │  │  ├─ AccruedInterest.php
│  │  │        │  │  │  ├─ Price.php
│  │  │        │  │  │  ├─ Rates.php
│  │  │        │  │  │  ├─ SecurityValidations.php
│  │  │        │  │  │  └─ Yields.php
│  │  │        │  │  └─ TreasuryBill.php
│  │  │        │  ├─ FormulaParser.php
│  │  │        │  ├─ FormulaToken.php
│  │  │        │  ├─ FunctionArray.php
│  │  │        │  ├─ Functions.php
│  │  │        │  ├─ Information
│  │  │        │  │  ├─ ErrorValue.php
│  │  │        │  │  ├─ ExcelError.php
│  │  │        │  │  └─ Value.php
│  │  │        │  ├─ Internal
│  │  │        │  │  ├─ ExcelArrayPseudoFunctions.php
│  │  │        │  │  ├─ MakeMatrix.php
│  │  │        │  │  └─ WildcardMatch.php
│  │  │        │  ├─ locale
│  │  │        │  │  ├─ bg
│  │  │        │  │  │  ├─ config
│  │  │        │  │  │  └─ functions
│  │  │        │  │  ├─ cs
│  │  │        │  │  │  ├─ config
│  │  │        │  │  │  └─ functions
│  │  │        │  │  ├─ da
│  │  │        │  │  │  ├─ config
│  │  │        │  │  │  └─ functions
│  │  │        │  │  ├─ de
│  │  │        │  │  │  ├─ config
│  │  │        │  │  │  └─ functions
│  │  │        │  │  ├─ en
│  │  │        │  │  │  └─ uk
│  │  │        │  │  │     └─ config
│  │  │        │  │  ├─ es
│  │  │        │  │  │  ├─ config
│  │  │        │  │  │  └─ functions
│  │  │        │  │  ├─ fi
│  │  │        │  │  │  ├─ config
│  │  │        │  │  │  └─ functions
│  │  │        │  │  ├─ fr
│  │  │        │  │  │  ├─ config
│  │  │        │  │  │  └─ functions
│  │  │        │  │  ├─ hu
│  │  │        │  │  │  ├─ config
│  │  │        │  │  │  └─ functions
│  │  │        │  │  ├─ it
│  │  │        │  │  │  ├─ config
│  │  │        │  │  │  └─ functions
│  │  │        │  │  ├─ nb
│  │  │        │  │  │  ├─ config
│  │  │        │  │  │  └─ functions
│  │  │        │  │  ├─ nl
│  │  │        │  │  │  ├─ config
│  │  │        │  │  │  └─ functions
│  │  │        │  │  ├─ pl
│  │  │        │  │  │  ├─ config
│  │  │        │  │  │  └─ functions
│  │  │        │  │  ├─ pt
│  │  │        │  │  │  ├─ br
│  │  │        │  │  │  │  ├─ config
│  │  │        │  │  │  │  └─ functions
│  │  │        │  │  │  ├─ config
│  │  │        │  │  │  └─ functions
│  │  │        │  │  ├─ ru
│  │  │        │  │  │  ├─ config
│  │  │        │  │  │  └─ functions
│  │  │        │  │  ├─ sv
│  │  │        │  │  │  ├─ config
│  │  │        │  │  │  └─ functions
│  │  │        │  │  ├─ tr
│  │  │        │  │  │  ├─ config
│  │  │        │  │  │  └─ functions
│  │  │        │  │  └─ Translations.xlsx
│  │  │        │  ├─ Logical
│  │  │        │  │  ├─ Boolean.php
│  │  │        │  │  ├─ Conditional.php
│  │  │        │  │  └─ Operations.php
│  │  │        │  ├─ LookupRef
│  │  │        │  │  ├─ Address.php
│  │  │        │  │  ├─ ChooseRowsEtc.php
│  │  │        │  │  ├─ ExcelMatch.php
│  │  │        │  │  ├─ Filter.php
│  │  │        │  │  ├─ Formula.php
│  │  │        │  │  ├─ Helpers.php
│  │  │        │  │  ├─ HLookup.php
│  │  │        │  │  ├─ Hstack.php
│  │  │        │  │  ├─ Hyperlink.php
│  │  │        │  │  ├─ Indirect.php
│  │  │        │  │  ├─ Lookup.php
│  │  │        │  │  ├─ LookupBase.php
│  │  │        │  │  ├─ LookupRefValidations.php
│  │  │        │  │  ├─ Matrix.php
│  │  │        │  │  ├─ Offset.php
│  │  │        │  │  ├─ RowColumnInformation.php
│  │  │        │  │  ├─ Selection.php
│  │  │        │  │  ├─ Sort.php
│  │  │        │  │  ├─ TorowTocol.php
│  │  │        │  │  ├─ Unique.php
│  │  │        │  │  ├─ VLookup.php
│  │  │        │  │  └─ Vstack.php
│  │  │        │  ├─ MathTrig
│  │  │        │  │  ├─ Absolute.php
│  │  │        │  │  ├─ Angle.php
│  │  │        │  │  ├─ Arabic.php
│  │  │        │  │  ├─ Base.php
│  │  │        │  │  ├─ Ceiling.php
│  │  │        │  │  ├─ Combinations.php
│  │  │        │  │  ├─ Exp.php
│  │  │        │  │  ├─ Factorial.php
│  │  │        │  │  ├─ Floor.php
│  │  │        │  │  ├─ Gcd.php
│  │  │        │  │  ├─ Helpers.php
│  │  │        │  │  ├─ IntClass.php
│  │  │        │  │  ├─ Lcm.php
│  │  │        │  │  ├─ Logarithms.php
│  │  │        │  │  ├─ MatrixFunctions.php
│  │  │        │  │  ├─ Operations.php
│  │  │        │  │  ├─ Random.php
│  │  │        │  │  ├─ Roman.php
│  │  │        │  │  ├─ Round.php
│  │  │        │  │  ├─ SeriesSum.php
│  │  │        │  │  ├─ Sign.php
│  │  │        │  │  ├─ Sqrt.php
│  │  │        │  │  ├─ Subtotal.php
│  │  │        │  │  ├─ Sum.php
│  │  │        │  │  ├─ SumSquares.php
│  │  │        │  │  ├─ Trig
│  │  │        │  │  │  ├─ Cosecant.php
│  │  │        │  │  │  ├─ Cosine.php
│  │  │        │  │  │  ├─ Cotangent.php
│  │  │        │  │  │  ├─ Secant.php
│  │  │        │  │  │  ├─ Sine.php
│  │  │        │  │  │  └─ Tangent.php
│  │  │        │  │  └─ Trunc.php
│  │  │        │  ├─ Statistical
│  │  │        │  │  ├─ AggregateBase.php
│  │  │        │  │  ├─ Averages
│  │  │        │  │  │  └─ Mean.php
│  │  │        │  │  ├─ Averages.php
│  │  │        │  │  ├─ Conditional.php
│  │  │        │  │  ├─ Confidence.php
│  │  │        │  │  ├─ Counts.php
│  │  │        │  │  ├─ Deviations.php
│  │  │        │  │  ├─ Distributions
│  │  │        │  │  │  ├─ Beta.php
│  │  │        │  │  │  ├─ Binomial.php
│  │  │        │  │  │  ├─ ChiSquared.php
│  │  │        │  │  │  ├─ DistributionValidations.php
│  │  │        │  │  │  ├─ Exponential.php
│  │  │        │  │  │  ├─ F.php
│  │  │        │  │  │  ├─ Fisher.php
│  │  │        │  │  │  ├─ Gamma.php
│  │  │        │  │  │  ├─ GammaBase.php
│  │  │        │  │  │  ├─ HyperGeometric.php
│  │  │        │  │  │  ├─ LogNormal.php
│  │  │        │  │  │  ├─ NewtonRaphson.php
│  │  │        │  │  │  ├─ Normal.php
│  │  │        │  │  │  ├─ Poisson.php
│  │  │        │  │  │  ├─ StandardNormal.php
│  │  │        │  │  │  ├─ StudentT.php
│  │  │        │  │  │  └─ Weibull.php
│  │  │        │  │  ├─ Maximum.php
│  │  │        │  │  ├─ MaxMinBase.php
│  │  │        │  │  ├─ Minimum.php
│  │  │        │  │  ├─ Percentiles.php
│  │  │        │  │  ├─ Permutations.php
│  │  │        │  │  ├─ Size.php
│  │  │        │  │  ├─ StandardDeviations.php
│  │  │        │  │  ├─ Standardize.php
│  │  │        │  │  ├─ StatisticalValidations.php
│  │  │        │  │  ├─ Trends.php
│  │  │        │  │  ├─ VarianceBase.php
│  │  │        │  │  └─ Variances.php
│  │  │        │  ├─ TextData
│  │  │        │  │  ├─ CaseConvert.php
│  │  │        │  │  ├─ CharacterConvert.php
│  │  │        │  │  ├─ Concatenate.php
│  │  │        │  │  ├─ Extract.php
│  │  │        │  │  ├─ Format.php
│  │  │        │  │  ├─ Helpers.php
│  │  │        │  │  ├─ Replace.php
│  │  │        │  │  ├─ Search.php
│  │  │        │  │  ├─ Text.php
│  │  │        │  │  └─ Trim.php
│  │  │        │  ├─ Token
│  │  │        │  │  └─ Stack.php
│  │  │        │  └─ Web
│  │  │        │     └─ Service.php
│  │  │        ├─ Cell
│  │  │        │  ├─ AddressHelper.php
│  │  │        │  ├─ AddressRange.php
│  │  │        │  ├─ AdvancedValueBinder.php
│  │  │        │  ├─ Cell.php
│  │  │        │  ├─ CellAddress.php
│  │  │        │  ├─ CellRange.php
│  │  │        │  ├─ ColumnRange.php
│  │  │        │  ├─ Coordinate.php
│  │  │        │  ├─ DataType.php
│  │  │        │  ├─ DataValidation.php
│  │  │        │  ├─ DataValidator.php
│  │  │        │  ├─ DefaultValueBinder.php
│  │  │        │  ├─ Hyperlink.php
│  │  │        │  ├─ IgnoredErrors.php
│  │  │        │  ├─ IValueBinder.php
│  │  │        │  ├─ RowRange.php
│  │  │        │  └─ StringValueBinder.php
│  │  │        ├─ CellReferenceHelper.php
│  │  │        ├─ Chart
│  │  │        │  ├─ Axis.php
│  │  │        │  ├─ AxisText.php
│  │  │        │  ├─ Chart.php
│  │  │        │  ├─ ChartColor.php
│  │  │        │  ├─ DataSeries.php
│  │  │        │  ├─ DataSeriesValues.php
│  │  │        │  ├─ Exception.php
│  │  │        │  ├─ GridLines.php
│  │  │        │  ├─ Layout.php
│  │  │        │  ├─ Legend.php
│  │  │        │  ├─ PlotArea.php
│  │  │        │  ├─ Properties.php
│  │  │        │  ├─ Renderer
│  │  │        │  │  ├─ IRenderer.php
│  │  │        │  │  ├─ JpGraph.php
│  │  │        │  │  ├─ JpGraphRendererBase.php
│  │  │        │  │  ├─ MtJpGraphRenderer.php
│  │  │        │  │  └─ PHP Charting Libraries.txt
│  │  │        │  ├─ Title.php
│  │  │        │  └─ TrendLine.php
│  │  │        ├─ Collection
│  │  │        │  ├─ Cells.php
│  │  │        │  ├─ CellsFactory.php
│  │  │        │  └─ Memory
│  │  │        │     ├─ SimpleCache1.php
│  │  │        │     └─ SimpleCache3.php
│  │  │        ├─ Comment.php
│  │  │        ├─ DefinedName.php
│  │  │        ├─ Document
│  │  │        │  ├─ Properties.php
│  │  │        │  └─ Security.php
│  │  │        ├─ Exception.php
│  │  │        ├─ HashTable.php
│  │  │        ├─ Helper
│  │  │        │  ├─ Dimension.php
│  │  │        │  ├─ Downloader.php
│  │  │        │  ├─ Handler.php
│  │  │        │  ├─ Html.php
│  │  │        │  ├─ Sample.php
│  │  │        │  ├─ Size.php
│  │  │        │  └─ TextGrid.php
│  │  │        ├─ IComparable.php
│  │  │        ├─ IOFactory.php
│  │  │        ├─ NamedFormula.php
│  │  │        ├─ NamedRange.php
│  │  │        ├─ Reader
│  │  │        │  ├─ BaseReader.php
│  │  │        │  ├─ Csv
│  │  │        │  │  └─ Delimiter.php
│  │  │        │  ├─ Csv.php
│  │  │        │  ├─ DefaultReadFilter.php
│  │  │        │  ├─ Exception.php
│  │  │        │  ├─ Gnumeric
│  │  │        │  │  ├─ PageSetup.php
│  │  │        │  │  ├─ Properties.php
│  │  │        │  │  └─ Styles.php
│  │  │        │  ├─ Gnumeric.php
│  │  │        │  ├─ Html.php
│  │  │        │  ├─ IReader.php
│  │  │        │  ├─ IReadFilter.php
│  │  │        │  ├─ Ods
│  │  │        │  │  ├─ AutoFilter.php
│  │  │        │  │  ├─ BaseLoader.php
│  │  │        │  │  ├─ DefinedNames.php
│  │  │        │  │  ├─ FormulaTranslator.php
│  │  │        │  │  ├─ PageSettings.php
│  │  │        │  │  └─ Properties.php
│  │  │        │  ├─ Ods.php
│  │  │        │  ├─ Security
│  │  │        │  │  └─ XmlScanner.php
│  │  │        │  ├─ Slk.php
│  │  │        │  ├─ Xls
│  │  │        │  │  ├─ Biff5.php
│  │  │        │  │  ├─ Biff8.php
│  │  │        │  │  ├─ Color
│  │  │        │  │  │  ├─ BIFF5.php
│  │  │        │  │  │  ├─ BIFF8.php
│  │  │        │  │  │  └─ BuiltIn.php
│  │  │        │  │  ├─ Color.php
│  │  │        │  │  ├─ ConditionalFormatting.php
│  │  │        │  │  ├─ DataValidationHelper.php
│  │  │        │  │  ├─ ErrorCode.php
│  │  │        │  │  ├─ Escher.php
│  │  │        │  │  ├─ ListFunctions.php
│  │  │        │  │  ├─ LoadSpreadsheet.php
│  │  │        │  │  ├─ Mappings.php
│  │  │        │  │  ├─ MD5.php
│  │  │        │  │  ├─ RC4.php
│  │  │        │  │  └─ Style
│  │  │        │  │     ├─ Border.php
│  │  │        │  │     ├─ CellAlignment.php
│  │  │        │  │     ├─ CellFont.php
│  │  │        │  │     └─ FillPattern.php
│  │  │        │  ├─ Xls.php
│  │  │        │  ├─ XlsBase.php
│  │  │        │  ├─ Xlsx
│  │  │        │  │  ├─ AutoFilter.php
│  │  │        │  │  ├─ BaseParserClass.php
│  │  │        │  │  ├─ Chart.php
│  │  │        │  │  ├─ ColumnAndRowAttributes.php
│  │  │        │  │  ├─ ConditionalStyles.php
│  │  │        │  │  ├─ DataValidations.php
│  │  │        │  │  ├─ Hyperlinks.php
│  │  │        │  │  ├─ Namespaces.php
│  │  │        │  │  ├─ PageSetup.php
│  │  │        │  │  ├─ Properties.php
│  │  │        │  │  ├─ SharedFormula.php
│  │  │        │  │  ├─ SheetViewOptions.php
│  │  │        │  │  ├─ SheetViews.php
│  │  │        │  │  ├─ Styles.php
│  │  │        │  │  ├─ TableReader.php
│  │  │        │  │  ├─ Theme.php
│  │  │        │  │  └─ WorkbookView.php
│  │  │        │  ├─ Xlsx.php
│  │  │        │  ├─ Xml
│  │  │        │  │  ├─ DataValidations.php
│  │  │        │  │  ├─ PageSettings.php
│  │  │        │  │  ├─ Properties.php
│  │  │        │  │  ├─ Style
│  │  │        │  │  │  ├─ Alignment.php
│  │  │        │  │  │  ├─ Border.php
│  │  │        │  │  │  ├─ Fill.php
│  │  │        │  │  │  ├─ Font.php
│  │  │        │  │  │  ├─ NumberFormat.php
│  │  │        │  │  │  └─ StyleBase.php
│  │  │        │  │  └─ Style.php
│  │  │        │  └─ Xml.php
│  │  │        ├─ ReferenceHelper.php
│  │  │        ├─ RichText
│  │  │        │  ├─ ITextElement.php
│  │  │        │  ├─ RichText.php
│  │  │        │  ├─ Run.php
│  │  │        │  └─ TextElement.php
│  │  │        ├─ Settings.php
│  │  │        ├─ Shared
│  │  │        │  ├─ CodePage.php
│  │  │        │  ├─ Date.php
│  │  │        │  ├─ Drawing.php
│  │  │        │  ├─ Escher
│  │  │        │  │  ├─ DgContainer
│  │  │        │  │  │  ├─ SpgrContainer
│  │  │        │  │  │  │  └─ SpContainer.php
│  │  │        │  │  │  └─ SpgrContainer.php
│  │  │        │  │  ├─ DgContainer.php
│  │  │        │  │  ├─ DggContainer
│  │  │        │  │  │  ├─ BstoreContainer
│  │  │        │  │  │  │  ├─ BSE
│  │  │        │  │  │  │  │  └─ Blip.php
│  │  │        │  │  │  │  └─ BSE.php
│  │  │        │  │  │  └─ BstoreContainer.php
│  │  │        │  │  └─ DggContainer.php
│  │  │        │  ├─ Escher.php
│  │  │        │  ├─ File.php
│  │  │        │  ├─ Font.php
│  │  │        │  ├─ IntOrFloat.php
│  │  │        │  ├─ OLE
│  │  │        │  │  ├─ ChainedBlockStream.php
│  │  │        │  │  ├─ PPS
│  │  │        │  │  │  ├─ File.php
│  │  │        │  │  │  └─ Root.php
│  │  │        │  │  └─ PPS.php
│  │  │        │  ├─ OLE.php
│  │  │        │  ├─ OLERead.php
│  │  │        │  ├─ PasswordHasher.php
│  │  │        │  ├─ StringHelper.php
│  │  │        │  ├─ TimeZone.php
│  │  │        │  ├─ Trend
│  │  │        │  │  ├─ BestFit.php
│  │  │        │  │  ├─ ExponentialBestFit.php
│  │  │        │  │  ├─ LinearBestFit.php
│  │  │        │  │  ├─ LogarithmicBestFit.php
│  │  │        │  │  ├─ PolynomialBestFit.php
│  │  │        │  │  ├─ PowerBestFit.php
│  │  │        │  │  └─ Trend.php
│  │  │        │  ├─ Xls.php
│  │  │        │  └─ XMLWriter.php
│  │  │        ├─ Spreadsheet.php
│  │  │        ├─ Style
│  │  │        │  ├─ Alignment.php
│  │  │        │  ├─ Border.php
│  │  │        │  ├─ Borders.php
│  │  │        │  ├─ Color.php
│  │  │        │  ├─ Conditional.php
│  │  │        │  ├─ ConditionalFormatting
│  │  │        │  │  ├─ CellMatcher.php
│  │  │        │  │  ├─ CellStyleAssessor.php
│  │  │        │  │  ├─ ConditionalColorScale.php
│  │  │        │  │  ├─ ConditionalDataBar.php
│  │  │        │  │  ├─ ConditionalDataBarExtension.php
│  │  │        │  │  ├─ ConditionalFormattingRuleExtension.php
│  │  │        │  │  ├─ ConditionalFormatValueObject.php
│  │  │        │  │  ├─ ConditionalIconSet.php
│  │  │        │  │  ├─ IconSetValues.php
│  │  │        │  │  ├─ StyleMerger.php
│  │  │        │  │  ├─ Wizard
│  │  │        │  │  │  ├─ Blanks.php
│  │  │        │  │  │  ├─ CellValue.php
│  │  │        │  │  │  ├─ DateValue.php
│  │  │        │  │  │  ├─ Duplicates.php
│  │  │        │  │  │  ├─ Errors.php
│  │  │        │  │  │  ├─ Expression.php
│  │  │        │  │  │  ├─ TextValue.php
│  │  │        │  │  │  ├─ WizardAbstract.php
│  │  │        │  │  │  └─ WizardInterface.php
│  │  │        │  │  └─ Wizard.php
│  │  │        │  ├─ Fill.php
│  │  │        │  ├─ Font.php
│  │  │        │  ├─ NumberFormat
│  │  │        │  │  ├─ BaseFormatter.php
│  │  │        │  │  ├─ DateFormatter.php
│  │  │        │  │  ├─ Formatter.php
│  │  │        │  │  ├─ FractionFormatter.php
│  │  │        │  │  ├─ NumberFormatter.php
│  │  │        │  │  ├─ PercentageFormatter.php
│  │  │        │  │  └─ Wizard
│  │  │        │  │     ├─ Accounting.php
│  │  │        │  │     ├─ Currency.php
│  │  │        │  │     ├─ CurrencyBase.php
│  │  │        │  │     ├─ CurrencyNegative.php
│  │  │        │  │     ├─ Date.php
│  │  │        │  │     ├─ DateTime.php
│  │  │        │  │     ├─ DateTimeWizard.php
│  │  │        │  │     ├─ Duration.php
│  │  │        │  │     ├─ Locale.php
│  │  │        │  │     ├─ Number.php
│  │  │        │  │     ├─ NumberBase.php
│  │  │        │  │     ├─ Percentage.php
│  │  │        │  │     ├─ Scientific.php
│  │  │        │  │     ├─ Time.php
│  │  │        │  │     └─ Wizard.php
│  │  │        │  ├─ NumberFormat.php
│  │  │        │  ├─ Protection.php
│  │  │        │  ├─ RgbTint.php
│  │  │        │  ├─ Style.php
│  │  │        │  └─ Supervisor.php
│  │  │        ├─ Theme.php
│  │  │        ├─ Worksheet
│  │  │        │  ├─ AutoFilter
│  │  │        │  │  ├─ Column
│  │  │        │  │  │  └─ Rule.php
│  │  │        │  │  └─ Column.php
│  │  │        │  ├─ AutoFilter.php
│  │  │        │  ├─ AutoFit.php
│  │  │        │  ├─ BaseDrawing.php
│  │  │        │  ├─ CellIterator.php
│  │  │        │  ├─ Column.php
│  │  │        │  ├─ ColumnCellIterator.php
│  │  │        │  ├─ ColumnDimension.php
│  │  │        │  ├─ ColumnIterator.php
│  │  │        │  ├─ Dimension.php
│  │  │        │  ├─ Drawing
│  │  │        │  │  └─ Shadow.php
│  │  │        │  ├─ Drawing.php
│  │  │        │  ├─ HeaderFooter.php
│  │  │        │  ├─ HeaderFooterDrawing.php
│  │  │        │  ├─ Iterator.php
│  │  │        │  ├─ MemoryDrawing.php
│  │  │        │  ├─ PageBreak.php
│  │  │        │  ├─ PageMargins.php
│  │  │        │  ├─ PageSetup.php
│  │  │        │  ├─ Pane.php
│  │  │        │  ├─ ProtectedRange.php
│  │  │        │  ├─ Protection.php
│  │  │        │  ├─ Row.php
│  │  │        │  ├─ RowCellIterator.php
│  │  │        │  ├─ RowDimension.php
│  │  │        │  ├─ RowIterator.php
│  │  │        │  ├─ SheetView.php
│  │  │        │  ├─ Table
│  │  │        │  │  ├─ Column.php
│  │  │        │  │  ├─ TableDxfsStyle.php
│  │  │        │  │  └─ TableStyle.php
│  │  │        │  ├─ Table.php
│  │  │        │  ├─ Validations.php
│  │  │        │  └─ Worksheet.php
│  │  │        └─ Writer
│  │  │           ├─ BaseWriter.php
│  │  │           ├─ Csv.php
│  │  │           ├─ Exception.php
│  │  │           ├─ Html.php
│  │  │           ├─ IWriter.php
│  │  │           ├─ Ods
│  │  │           │  ├─ AutoFilters.php
│  │  │           │  ├─ Cell
│  │  │           │  │  ├─ Comment.php
│  │  │           │  │  └─ Style.php
│  │  │           │  ├─ Content.php
│  │  │           │  ├─ Formula.php
│  │  │           │  ├─ Meta.php
│  │  │           │  ├─ MetaInf.php
│  │  │           │  ├─ Mimetype.php
│  │  │           │  ├─ NamedExpressions.php
│  │  │           │  ├─ Settings.php
│  │  │           │  ├─ Styles.php
│  │  │           │  ├─ Thumbnails.php
│  │  │           │  └─ WriterPart.php
│  │  │           ├─ Ods.php
│  │  │           ├─ Pdf
│  │  │           │  ├─ Dompdf.php
│  │  │           │  ├─ Mpdf.php
│  │  │           │  ├─ Tcpdf.php
│  │  │           │  └─ TcpdfNoDie.php
│  │  │           ├─ Pdf.php
│  │  │           ├─ Xls
│  │  │           │  ├─ BIFFwriter.php
│  │  │           │  ├─ CellDataValidation.php
│  │  │           │  ├─ ConditionalHelper.php
│  │  │           │  ├─ ErrorCode.php
│  │  │           │  ├─ Escher.php
│  │  │           │  ├─ Font.php
│  │  │           │  ├─ Parser.php
│  │  │           │  ├─ Style
│  │  │           │  │  ├─ CellAlignment.php
│  │  │           │  │  ├─ CellBorder.php
│  │  │           │  │  └─ CellFill.php
│  │  │           │  ├─ Workbook.php
│  │  │           │  ├─ Worksheet.php
│  │  │           │  └─ Xf.php
│  │  │           ├─ Xls.php
│  │  │           ├─ Xlsx
│  │  │           │  ├─ AutoFilter.php
│  │  │           │  ├─ Chart.php
│  │  │           │  ├─ Comments.php
│  │  │           │  ├─ ContentTypes.php
│  │  │           │  ├─ DefinedNames.php
│  │  │           │  ├─ DocProps.php
│  │  │           │  ├─ Drawing.php
│  │  │           │  ├─ FunctionPrefix.php
│  │  │           │  ├─ Metadata.php
│  │  │           │  ├─ Rels.php
│  │  │           │  ├─ RelsRibbon.php
│  │  │           │  ├─ RelsVBA.php
│  │  │           │  ├─ StringTable.php
│  │  │           │  ├─ Style.php
│  │  │           │  ├─ Table.php
│  │  │           │  ├─ Theme.php
│  │  │           │  ├─ Workbook.php
│  │  │           │  ├─ Worksheet.php
│  │  │           │  └─ WriterPart.php
│  │  │           ├─ Xlsx.php
│  │  │           ├─ ZipStream0.php
│  │  │           ├─ ZipStream2.php
│  │  │           └─ ZipStream3.php
│  │  └─ phpword
│  │     ├─ .php-cs-fixer.dist.php
│  │     ├─ composer.json
│  │     ├─ CONTRIBUTING.md
│  │     ├─ COPYING
│  │     ├─ COPYING.LESSER
│  │     ├─ LICENSE
│  │     ├─ mkdocs.yml
│  │     ├─ phpstan-baseline.neon
│  │     ├─ phpstan.neon.dist
│  │     ├─ phpword.ini.dist
│  │     ├─ README.md
│  │     └─ src
│  │        └─ PhpWord
│  │           ├─ Autoloader.php
│  │           ├─ Collection
│  │           │  ├─ AbstractCollection.php
│  │           │  ├─ Bookmarks.php
│  │           │  ├─ Charts.php
│  │           │  ├─ Comments.php
│  │           │  ├─ Endnotes.php
│  │           │  ├─ Footnotes.php
│  │           │  └─ Titles.php
│  │           ├─ ComplexType
│  │           │  ├─ FootnoteProperties.php
│  │           │  ├─ ProofState.php
│  │           │  ├─ RubyProperties.php
│  │           │  ├─ TblWidth.php
│  │           │  └─ TrackChangesView.php
│  │           ├─ Element
│  │           │  ├─ AbstractContainer.php
│  │           │  ├─ AbstractElement.php
│  │           │  ├─ Bookmark.php
│  │           │  ├─ Cell.php
│  │           │  ├─ Chart.php
│  │           │  ├─ CheckBox.php
│  │           │  ├─ Comment.php
│  │           │  ├─ Endnote.php
│  │           │  ├─ Field.php
│  │           │  ├─ Footer.php
│  │           │  ├─ Footnote.php
│  │           │  ├─ FormField.php
│  │           │  ├─ Formula.php
│  │           │  ├─ Header.php
│  │           │  ├─ Image.php
│  │           │  ├─ Line.php
│  │           │  ├─ Link.php
│  │           │  ├─ ListItem.php
│  │           │  ├─ ListItemRun.php
│  │           │  ├─ OLEObject.php
│  │           │  ├─ PageBreak.php
│  │           │  ├─ PreserveText.php
│  │           │  ├─ Row.php
│  │           │  ├─ Ruby.php
│  │           │  ├─ SDT.php
│  │           │  ├─ Section.php
│  │           │  ├─ Shape.php
│  │           │  ├─ Table.php
│  │           │  ├─ Text.php
│  │           │  ├─ TextBox.php
│  │           │  ├─ TextBreak.php
│  │           │  ├─ TextRun.php
│  │           │  ├─ Title.php
│  │           │  ├─ TOC.php
│  │           │  └─ TrackChange.php
│  │           ├─ Escaper
│  │           │  ├─ AbstractEscaper.php
│  │           │  ├─ EscaperInterface.php
│  │           │  ├─ RegExp.php
│  │           │  ├─ Rtf.php
│  │           │  └─ Xml.php
│  │           ├─ Exception
│  │           │  ├─ CopyFileException.php
│  │           │  ├─ CreateTemporaryFileException.php
│  │           │  ├─ Exception.php
│  │           │  ├─ InvalidImageException.php
│  │           │  ├─ InvalidObjectException.php
│  │           │  ├─ InvalidStyleException.php
│  │           │  └─ UnsupportedImageTypeException.php
│  │           ├─ IOFactory.php
│  │           ├─ Media.php
│  │           ├─ Metadata
│  │           │  ├─ Compatibility.php
│  │           │  ├─ DocInfo.php
│  │           │  ├─ Protection.php
│  │           │  └─ Settings.php
│  │           ├─ PhpWord.php
│  │           ├─ Reader
│  │           │  ├─ AbstractReader.php
│  │           │  ├─ HTML.php
│  │           │  ├─ MsDoc.php
│  │           │  ├─ ODText
│  │           │  │  ├─ AbstractPart.php
│  │           │  │  ├─ Content.php
│  │           │  │  └─ Meta.php
│  │           │  ├─ ODText.php
│  │           │  ├─ ReaderInterface.php
│  │           │  ├─ RTF
│  │           │  │  └─ Document.php
│  │           │  ├─ RTF.php
│  │           │  ├─ Word2007
│  │           │  │  ├─ AbstractPart.php
│  │           │  │  ├─ Comments.php
│  │           │  │  ├─ DocPropsApp.php
│  │           │  │  ├─ DocPropsCore.php
│  │           │  │  ├─ DocPropsCustom.php
│  │           │  │  ├─ Document.php
│  │           │  │  ├─ Endnotes.php
│  │           │  │  ├─ Footnotes.php
│  │           │  │  ├─ Numbering.php
│  │           │  │  ├─ Settings.php
│  │           │  │  └─ Styles.php
│  │           │  └─ Word2007.php
│  │           ├─ resources
│  │           │  ├─ doc.png
│  │           │  ├─ ppt.png
│  │           │  └─ xls.png
│  │           ├─ Settings.php
│  │           ├─ Shared
│  │           │  ├─ AbstractEnum.php
│  │           │  ├─ Converter.php
│  │           │  ├─ Css.php
│  │           │  ├─ Drawing.php
│  │           │  ├─ Html.php
│  │           │  ├─ Microsoft
│  │           │  │  └─ PasswordEncoder.php
│  │           │  ├─ OLERead.php
│  │           │  ├─ PCLZip
│  │           │  │  └─ pclzip.lib.php
│  │           │  ├─ Text.php
│  │           │  ├─ Validate.php
│  │           │  ├─ XMLReader.php
│  │           │  ├─ XMLWriter.php
│  │           │  └─ ZipArchive.php
│  │           ├─ SimpleType
│  │           │  ├─ Border.php
│  │           │  ├─ DocProtect.php
│  │           │  ├─ Jc.php
│  │           │  ├─ JcTable.php
│  │           │  ├─ LineSpacingRule.php
│  │           │  ├─ NumberFormat.php
│  │           │  ├─ TblWidth.php
│  │           │  ├─ TextAlignment.php
│  │           │  ├─ VerticalJc.php
│  │           │  └─ Zoom.php
│  │           ├─ Style
│  │           │  ├─ AbstractStyle.php
│  │           │  ├─ Border.php
│  │           │  ├─ Cell.php
│  │           │  ├─ Chart.php
│  │           │  ├─ Extrusion.php
│  │           │  ├─ Fill.php
│  │           │  ├─ Font.php
│  │           │  ├─ Frame.php
│  │           │  ├─ Image.php
│  │           │  ├─ Indentation.php
│  │           │  ├─ Language.php
│  │           │  ├─ Line.php
│  │           │  ├─ LineNumbering.php
│  │           │  ├─ ListItem.php
│  │           │  ├─ Numbering.php
│  │           │  ├─ NumberingLevel.php
│  │           │  ├─ Outline.php
│  │           │  ├─ Paper.php
│  │           │  ├─ Paragraph.php
│  │           │  ├─ Row.php
│  │           │  ├─ Section.php
│  │           │  ├─ Shading.php
│  │           │  ├─ Shadow.php
│  │           │  ├─ Shape.php
│  │           │  ├─ Spacing.php
│  │           │  ├─ Tab.php
│  │           │  ├─ Table.php
│  │           │  ├─ TablePosition.php
│  │           │  ├─ TextBox.php
│  │           │  └─ TOC.php
│  │           ├─ Style.php
│  │           ├─ TemplateProcessor.php
│  │           └─ Writer
│  │              ├─ AbstractWriter.php
│  │              ├─ EPub3
│  │              │  ├─ Element
│  │              │  │  ├─ AbstractElement.php
│  │              │  │  ├─ Image.php
│  │              │  │  └─ Text.php
│  │              │  ├─ Part
│  │              │  │  ├─ AbstractPart.php
│  │              │  │  ├─ Content.php
│  │              │  │  ├─ ContentXhtml.php
│  │              │  │  ├─ Manifest.php
│  │              │  │  ├─ Meta.php
│  │              │  │  ├─ Mimetype.php
│  │              │  │  └─ Nav.php
│  │              │  ├─ Part.php
│  │              │  └─ Style
│  │              │     ├─ AbstractStyle.php
│  │              │     ├─ Font.php
│  │              │     ├─ Paragraph.php
│  │              │     └─ Table.php
│  │              ├─ EPub3.php
│  │              ├─ HTML
│  │              │  ├─ Element
│  │              │  │  ├─ AbstractElement.php
│  │              │  │  ├─ Bookmark.php
│  │              │  │  ├─ Container.php
│  │              │  │  ├─ Endnote.php
│  │              │  │  ├─ Footnote.php
│  │              │  │  ├─ Image.php
│  │              │  │  ├─ Link.php
│  │              │  │  ├─ ListItem.php
│  │              │  │  ├─ ListItemRun.php
│  │              │  │  ├─ PageBreak.php
│  │              │  │  ├─ Ruby.php
│  │              │  │  ├─ Table.php
│  │              │  │  ├─ Text.php
│  │              │  │  ├─ TextBreak.php
│  │              │  │  ├─ TextRun.php
│  │              │  │  └─ Title.php
│  │              │  ├─ Part
│  │              │  │  ├─ AbstractPart.php
│  │              │  │  ├─ Body.php
│  │              │  │  └─ Head.php
│  │              │  └─ Style
│  │              │     ├─ AbstractStyle.php
│  │              │     ├─ Font.php
│  │              │     ├─ Generic.php
│  │              │     ├─ Image.php
│  │              │     ├─ Paragraph.php
│  │              │     └─ Table.php
│  │              ├─ HTML.php
│  │              ├─ ODText
│  │              │  ├─ Element
│  │              │  │  ├─ AbstractElement.php
│  │              │  │  ├─ Container.php
│  │              │  │  ├─ Field.php
│  │              │  │  ├─ Formula.php
│  │              │  │  ├─ Image.php
│  │              │  │  ├─ Link.php
│  │              │  │  ├─ ListItemRun.php
│  │              │  │  ├─ PageBreak.php
│  │              │  │  ├─ Ruby.php
│  │              │  │  ├─ Table.php
│  │              │  │  ├─ Text.php
│  │              │  │  ├─ TextBreak.php
│  │              │  │  ├─ TextRun.php
│  │              │  │  └─ Title.php
│  │              │  ├─ Part
│  │              │  │  ├─ AbstractPart.php
│  │              │  │  ├─ Content.php
│  │              │  │  ├─ Manifest.php
│  │              │  │  ├─ Meta.php
│  │              │  │  ├─ Mimetype.php
│  │              │  │  └─ Styles.php
│  │              │  └─ Style
│  │              │     ├─ AbstractStyle.php
│  │              │     ├─ Font.php
│  │              │     ├─ Image.php
│  │              │     ├─ Numbering.php
│  │              │     ├─ Paragraph.php
│  │              │     ├─ Section.php
│  │              │     └─ Table.php
│  │              ├─ ODText.php
│  │              ├─ PDF
│  │              │  ├─ AbstractRenderer.php
│  │              │  ├─ DomPDF.php
│  │              │  ├─ MPDF.php
│  │              │  └─ TCPDF.php
│  │              ├─ PDF.php
│  │              ├─ RTF
│  │              │  ├─ Element
│  │              │  │  ├─ AbstractElement.php
│  │              │  │  ├─ Container.php
│  │              │  │  ├─ Field.php
│  │              │  │  ├─ Image.php
│  │              │  │  ├─ Link.php
│  │              │  │  ├─ ListItem.php
│  │              │  │  ├─ PageBreak.php
│  │              │  │  ├─ Ruby.php
│  │              │  │  ├─ Table.php
│  │              │  │  ├─ Text.php
│  │              │  │  ├─ TextBreak.php
│  │              │  │  ├─ TextRun.php
│  │              │  │  └─ Title.php
│  │              │  ├─ Part
│  │              │  │  ├─ AbstractPart.php
│  │              │  │  ├─ Document.php
│  │              │  │  └─ Header.php
│  │              │  └─ Style
│  │              │     ├─ AbstractStyle.php
│  │              │     ├─ Border.php
│  │              │     ├─ Font.php
│  │              │     ├─ Indentation.php
│  │              │     ├─ Paragraph.php
│  │              │     ├─ Section.php
│  │              │     └─ Tab.php
│  │              ├─ RTF.php
│  │              ├─ Word2007
│  │              │  ├─ Element
│  │              │  │  ├─ AbstractElement.php
│  │              │  │  ├─ Bookmark.php
│  │              │  │  ├─ Chart.php
│  │              │  │  ├─ CheckBox.php
│  │              │  │  ├─ Container.php
│  │              │  │  ├─ Endnote.php
│  │              │  │  ├─ Field.php
│  │              │  │  ├─ Footnote.php
│  │              │  │  ├─ FormField.php
│  │              │  │  ├─ Formula.php
│  │              │  │  ├─ Image.php
│  │              │  │  ├─ Line.php
│  │              │  │  ├─ Link.php
│  │              │  │  ├─ ListItem.php
│  │              │  │  ├─ ListItemRun.php
│  │              │  │  ├─ OLEObject.php
│  │              │  │  ├─ PageBreak.php
│  │              │  │  ├─ ParagraphAlignment.php
│  │              │  │  ├─ PreserveText.php
│  │              │  │  ├─ Ruby.php
│  │              │  │  ├─ SDT.php
│  │              │  │  ├─ Shape.php
│  │              │  │  ├─ Table.php
│  │              │  │  ├─ TableAlignment.php
│  │              │  │  ├─ Text.php
│  │              │  │  ├─ TextBox.php
│  │              │  │  ├─ TextBreak.php
│  │              │  │  ├─ TextRun.php
│  │              │  │  ├─ Title.php
│  │              │  │  └─ TOC.php
│  │              │  ├─ Part
│  │              │  │  ├─ AbstractPart.php
│  │              │  │  ├─ Chart.php
│  │              │  │  ├─ Comments.php
│  │              │  │  ├─ ContentTypes.php
│  │              │  │  ├─ DocPropsApp.php
│  │              │  │  ├─ DocPropsCore.php
│  │              │  │  ├─ DocPropsCustom.php
│  │              │  │  ├─ Document.php
│  │              │  │  ├─ Endnotes.php
│  │              │  │  ├─ FontTable.php
│  │              │  │  ├─ Footer.php
│  │              │  │  ├─ Footnotes.php
│  │              │  │  ├─ Header.php
│  │              │  │  ├─ Numbering.php
│  │              │  │  ├─ Rels.php
│  │              │  │  ├─ RelsDocument.php
│  │              │  │  ├─ RelsPart.php
│  │              │  │  ├─ Settings.php
│  │              │  │  ├─ Styles.php
│  │              │  │  ├─ Theme.php
│  │              │  │  └─ WebSettings.php
│  │              │  └─ Style
│  │              │     ├─ AbstractStyle.php
│  │              │     ├─ Cell.php
│  │              │     ├─ Extrusion.php
│  │              │     ├─ Fill.php
│  │              │     ├─ Font.php
│  │              │     ├─ Frame.php
│  │              │     ├─ Image.php
│  │              │     ├─ Indentation.php
│  │              │     ├─ Line.php
│  │              │     ├─ LineNumbering.php
│  │              │     ├─ MarginBorder.php
│  │              │     ├─ Outline.php
│  │              │     ├─ Paragraph.php
│  │              │     ├─ Row.php
│  │              │     ├─ Section.php
│  │              │     ├─ Shading.php
│  │              │     ├─ Shadow.php
│  │              │     ├─ Shape.php
│  │              │     ├─ Spacing.php
│  │              │     ├─ Tab.php
│  │              │     ├─ Table.php
│  │              │     ├─ TablePosition.php
│  │              │     └─ TextBox.php
│  │              ├─ Word2007.php
│  │              ├─ WriterInterface.php
│  │              └─ WriterPartInterface.php
│  ├─ phpoption
│  │  └─ phpoption
│  │     ├─ composer.json
│  │     ├─ LICENSE
│  │     └─ src
│  │        └─ PhpOption
│  │           ├─ LazyOption.php
│  │           ├─ None.php
│  │           ├─ Option.php
│  │           └─ Some.php
│  ├─ phpseclib
│  │  └─ phpseclib
│  │     ├─ AUTHORS
│  │     ├─ BACKERS.md
│  │     ├─ composer.json
│  │     ├─ LICENSE
│  │     ├─ phpseclib
│  │     │  ├─ bootstrap.php
│  │     │  ├─ Common
│  │     │  │  └─ Functions
│  │     │  │     └─ Strings.php
│  │     │  ├─ Crypt
│  │     │  │  ├─ AES.php
│  │     │  │  ├─ Blowfish.php
│  │     │  │  ├─ ChaCha20.php
│  │     │  │  ├─ Common
│  │     │  │  │  ├─ AsymmetricKey.php
│  │     │  │  │  ├─ BlockCipher.php
│  │     │  │  │  ├─ Formats
│  │     │  │  │  │  ├─ Keys
│  │     │  │  │  │  │  ├─ JWK.php
│  │     │  │  │  │  │  ├─ OpenSSH.php
│  │     │  │  │  │  │  ├─ PKCS.php
│  │     │  │  │  │  │  ├─ PKCS1.php
│  │     │  │  │  │  │  ├─ PKCS8.php
│  │     │  │  │  │  │  └─ PuTTY.php
│  │     │  │  │  │  └─ Signature
│  │     │  │  │  │     └─ Raw.php
│  │     │  │  │  ├─ PrivateKey.php
│  │     │  │  │  ├─ PublicKey.php
│  │     │  │  │  ├─ StreamCipher.php
│  │     │  │  │  ├─ SymmetricKey.php
│  │     │  │  │  └─ Traits
│  │     │  │  │     ├─ Fingerprint.php
│  │     │  │  │     └─ PasswordProtected.php
│  │     │  │  ├─ DES.php
│  │     │  │  ├─ DH
│  │     │  │  │  ├─ Formats
│  │     │  │  │  │  └─ Keys
│  │     │  │  │  │     ├─ PKCS1.php
│  │     │  │  │  │     └─ PKCS8.php
│  │     │  │  │  ├─ Parameters.php
│  │     │  │  │  ├─ PrivateKey.php
│  │     │  │  │  └─ PublicKey.php
│  │     │  │  ├─ DH.php
│  │     │  │  ├─ DSA
│  │     │  │  │  ├─ Formats
│  │     │  │  │  │  ├─ Keys
│  │     │  │  │  │  │  ├─ OpenSSH.php
│  │     │  │  │  │  │  ├─ PKCS1.php
│  │     │  │  │  │  │  ├─ PKCS8.php
│  │     │  │  │  │  │  ├─ PuTTY.php
│  │     │  │  │  │  │  ├─ Raw.php
│  │     │  │  │  │  │  └─ XML.php
│  │     │  │  │  │  └─ Signature
│  │     │  │  │  │     ├─ ASN1.php
│  │     │  │  │  │     ├─ Raw.php
│  │     │  │  │  │     └─ SSH2.php
│  │     │  │  │  ├─ Parameters.php
│  │     │  │  │  ├─ PrivateKey.php
│  │     │  │  │  └─ PublicKey.php
│  │     │  │  ├─ DSA.php
│  │     │  │  ├─ EC
│  │     │  │  │  ├─ BaseCurves
│  │     │  │  │  │  ├─ Base.php
│  │     │  │  │  │  ├─ Binary.php
│  │     │  │  │  │  ├─ KoblitzPrime.php
│  │     │  │  │  │  ├─ Montgomery.php
│  │     │  │  │  │  ├─ Prime.php
│  │     │  │  │  │  └─ TwistedEdwards.php
│  │     │  │  │  ├─ Curves
│  │     │  │  │  │  ├─ brainpoolP160r1.php
│  │     │  │  │  │  ├─ brainpoolP160t1.php
│  │     │  │  │  │  ├─ brainpoolP192r1.php
│  │     │  │  │  │  ├─ brainpoolP192t1.php
│  │     │  │  │  │  ├─ brainpoolP224r1.php
│  │     │  │  │  │  ├─ brainpoolP224t1.php
│  │     │  │  │  │  ├─ brainpoolP256r1.php
│  │     │  │  │  │  ├─ brainpoolP256t1.php
│  │     │  │  │  │  ├─ brainpoolP320r1.php
│  │     │  │  │  │  ├─ brainpoolP320t1.php
│  │     │  │  │  │  ├─ brainpoolP384r1.php
│  │     │  │  │  │  ├─ brainpoolP384t1.php
│  │     │  │  │  │  ├─ brainpoolP512r1.php
│  │     │  │  │  │  ├─ brainpoolP512t1.php
│  │     │  │  │  │  ├─ Curve25519.php
│  │     │  │  │  │  ├─ Curve448.php
│  │     │  │  │  │  ├─ Ed25519.php
│  │     │  │  │  │  ├─ Ed448.php
│  │     │  │  │  │  ├─ nistb233.php
│  │     │  │  │  │  ├─ nistb409.php
│  │     │  │  │  │  ├─ nistk163.php
│  │     │  │  │  │  ├─ nistk233.php
│  │     │  │  │  │  ├─ nistk283.php
│  │     │  │  │  │  ├─ nistk409.php
│  │     │  │  │  │  ├─ nistp192.php
│  │     │  │  │  │  ├─ nistp224.php
│  │     │  │  │  │  ├─ nistp256.php
│  │     │  │  │  │  ├─ nistp384.php
│  │     │  │  │  │  ├─ nistp521.php
│  │     │  │  │  │  ├─ nistt571.php
│  │     │  │  │  │  ├─ prime192v1.php
│  │     │  │  │  │  ├─ prime192v2.php
│  │     │  │  │  │  ├─ prime192v3.php
│  │     │  │  │  │  ├─ prime239v1.php
│  │     │  │  │  │  ├─ prime239v2.php
│  │     │  │  │  │  ├─ prime239v3.php
│  │     │  │  │  │  ├─ prime256v1.php
│  │     │  │  │  │  ├─ secp112r1.php
│  │     │  │  │  │  ├─ secp112r2.php
│  │     │  │  │  │  ├─ secp128r1.php
│  │     │  │  │  │  ├─ secp128r2.php
│  │     │  │  │  │  ├─ secp160k1.php
│  │     │  │  │  │  ├─ secp160r1.php
│  │     │  │  │  │  ├─ secp160r2.php
│  │     │  │  │  │  ├─ secp192k1.php
│  │     │  │  │  │  ├─ secp192r1.php
│  │     │  │  │  │  ├─ secp224k1.php
│  │     │  │  │  │  ├─ secp224r1.php
│  │     │  │  │  │  ├─ secp256k1.php
│  │     │  │  │  │  ├─ secp256r1.php
│  │     │  │  │  │  ├─ secp384r1.php
│  │     │  │  │  │  ├─ secp521r1.php
│  │     │  │  │  │  ├─ sect113r1.php
│  │     │  │  │  │  ├─ sect113r2.php
│  │     │  │  │  │  ├─ sect131r1.php
│  │     │  │  │  │  ├─ sect131r2.php
│  │     │  │  │  │  ├─ sect163k1.php
│  │     │  │  │  │  ├─ sect163r1.php
│  │     │  │  │  │  ├─ sect163r2.php
│  │     │  │  │  │  ├─ sect193r1.php
│  │     │  │  │  │  ├─ sect193r2.php
│  │     │  │  │  │  ├─ sect233k1.php
│  │     │  │  │  │  ├─ sect233r1.php
│  │     │  │  │  │  ├─ sect239k1.php
│  │     │  │  │  │  ├─ sect283k1.php
│  │     │  │  │  │  ├─ sect283r1.php
│  │     │  │  │  │  ├─ sect409k1.php
│  │     │  │  │  │  ├─ sect409r1.php
│  │     │  │  │  │  ├─ sect571k1.php
│  │     │  │  │  │  └─ sect571r1.php
│  │     │  │  │  ├─ Formats
│  │     │  │  │  │  ├─ Keys
│  │     │  │  │  │  │  ├─ Common.php
│  │     │  │  │  │  │  ├─ JWK.php
│  │     │  │  │  │  │  ├─ libsodium.php
│  │     │  │  │  │  │  ├─ MontgomeryPrivate.php
│  │     │  │  │  │  │  ├─ MontgomeryPublic.php
│  │     │  │  │  │  │  ├─ OpenSSH.php
│  │     │  │  │  │  │  ├─ PKCS1.php
│  │     │  │  │  │  │  ├─ PKCS8.php
│  │     │  │  │  │  │  ├─ PuTTY.php
│  │     │  │  │  │  │  └─ XML.php
│  │     │  │  │  │  └─ Signature
│  │     │  │  │  │     ├─ ASN1.php
│  │     │  │  │  │     ├─ IEEE.php
│  │     │  │  │  │     ├─ Raw.php
│  │     │  │  │  │     └─ SSH2.php
│  │     │  │  │  ├─ Parameters.php
│  │     │  │  │  ├─ PrivateKey.php
│  │     │  │  │  └─ PublicKey.php
│  │     │  │  ├─ EC.php
│  │     │  │  ├─ Hash.php
│  │     │  │  ├─ PublicKeyLoader.php
│  │     │  │  ├─ Random.php
│  │     │  │  ├─ RC2.php
│  │     │  │  ├─ RC4.php
│  │     │  │  ├─ Rijndael.php
│  │     │  │  ├─ RSA
│  │     │  │  │  ├─ Formats
│  │     │  │  │  │  └─ Keys
│  │     │  │  │  │     ├─ JWK.php
│  │     │  │  │  │     ├─ MSBLOB.php
│  │     │  │  │  │     ├─ OpenSSH.php
│  │     │  │  │  │     ├─ PKCS1.php
│  │     │  │  │  │     ├─ PKCS8.php
│  │     │  │  │  │     ├─ PSS.php
│  │     │  │  │  │     ├─ PuTTY.php
│  │     │  │  │  │     ├─ Raw.php
│  │     │  │  │  │     └─ XML.php
│  │     │  │  │  ├─ PrivateKey.php
│  │     │  │  │  └─ PublicKey.php
│  │     │  │  ├─ RSA.php
│  │     │  │  ├─ Salsa20.php
│  │     │  │  ├─ TripleDES.php
│  │     │  │  └─ Twofish.php
│  │     │  ├─ Exception
│  │     │  │  ├─ BadConfigurationException.php
│  │     │  │  ├─ BadDecryptionException.php
│  │     │  │  ├─ BadModeException.php
│  │     │  │  ├─ ConnectionClosedException.php
│  │     │  │  ├─ FileNotFoundException.php
│  │     │  │  ├─ InconsistentSetupException.php
│  │     │  │  ├─ InsufficientSetupException.php
│  │     │  │  ├─ InvalidPacketLengthException.php
│  │     │  │  ├─ NoKeyLoadedException.php
│  │     │  │  ├─ NoSupportedAlgorithmsException.php
│  │     │  │  ├─ TimeoutException.php
│  │     │  │  ├─ UnableToConnectException.php
│  │     │  │  ├─ UnsupportedAlgorithmException.php
│  │     │  │  ├─ UnsupportedCurveException.php
│  │     │  │  ├─ UnsupportedFormatException.php
│  │     │  │  └─ UnsupportedOperationException.php
│  │     │  ├─ File
│  │     │  │  ├─ ANSI.php
│  │     │  │  ├─ ASN1
│  │     │  │  │  ├─ Element.php
│  │     │  │  │  └─ Maps
│  │     │  │  │     ├─ AccessDescription.php
│  │     │  │  │     ├─ AdministrationDomainName.php
│  │     │  │  │     ├─ AlgorithmIdentifier.php
│  │     │  │  │     ├─ AnotherName.php
│  │     │  │  │     ├─ Attribute.php
│  │     │  │  │     ├─ Attributes.php
│  │     │  │  │     ├─ AttributeType.php
│  │     │  │  │     ├─ AttributeTypeAndValue.php
│  │     │  │  │     ├─ AttributeValue.php
│  │     │  │  │     ├─ AuthorityInfoAccessSyntax.php
│  │     │  │  │     ├─ AuthorityKeyIdentifier.php
│  │     │  │  │     ├─ BaseDistance.php
│  │     │  │  │     ├─ BasicConstraints.php
│  │     │  │  │     ├─ BuiltInDomainDefinedAttribute.php
│  │     │  │  │     ├─ BuiltInDomainDefinedAttributes.php
│  │     │  │  │     ├─ BuiltInStandardAttributes.php
│  │     │  │  │     ├─ Certificate.php
│  │     │  │  │     ├─ CertificateIssuer.php
│  │     │  │  │     ├─ CertificateList.php
│  │     │  │  │     ├─ CertificatePolicies.php
│  │     │  │  │     ├─ CertificateSerialNumber.php
│  │     │  │  │     ├─ CertificationRequest.php
│  │     │  │  │     ├─ CertificationRequestInfo.php
│  │     │  │  │     ├─ CertPolicyId.php
│  │     │  │  │     ├─ Characteristic_two.php
│  │     │  │  │     ├─ CountryName.php
│  │     │  │  │     ├─ CPSuri.php
│  │     │  │  │     ├─ CRLDistributionPoints.php
│  │     │  │  │     ├─ CRLNumber.php
│  │     │  │  │     ├─ CRLReason.php
│  │     │  │  │     ├─ Curve.php
│  │     │  │  │     ├─ DHParameter.php
│  │     │  │  │     ├─ DigestInfo.php
│  │     │  │  │     ├─ DirectoryString.php
│  │     │  │  │     ├─ DisplayText.php
│  │     │  │  │     ├─ DistributionPoint.php
│  │     │  │  │     ├─ DistributionPointName.php
│  │     │  │  │     ├─ DSAParams.php
│  │     │  │  │     ├─ DSAPrivateKey.php
│  │     │  │  │     ├─ DSAPublicKey.php
│  │     │  │  │     ├─ DssSigValue.php
│  │     │  │  │     ├─ EcdsaSigValue.php
│  │     │  │  │     ├─ ECParameters.php
│  │     │  │  │     ├─ ECPoint.php
│  │     │  │  │     ├─ ECPrivateKey.php
│  │     │  │  │     ├─ EDIPartyName.php
│  │     │  │  │     ├─ EncryptedData.php
│  │     │  │  │     ├─ EncryptedPrivateKeyInfo.php
│  │     │  │  │     ├─ Extension.php
│  │     │  │  │     ├─ ExtensionAttribute.php
│  │     │  │  │     ├─ ExtensionAttributes.php
│  │     │  │  │     ├─ Extensions.php
│  │     │  │  │     ├─ ExtKeyUsageSyntax.php
│  │     │  │  │     ├─ FieldElement.php
│  │     │  │  │     ├─ FieldID.php
│  │     │  │  │     ├─ GeneralName.php
│  │     │  │  │     ├─ GeneralNames.php
│  │     │  │  │     ├─ GeneralSubtree.php
│  │     │  │  │     ├─ GeneralSubtrees.php
│  │     │  │  │     ├─ HashAlgorithm.php
│  │     │  │  │     ├─ HoldInstructionCode.php
│  │     │  │  │     ├─ InvalidityDate.php
│  │     │  │  │     ├─ IssuerAltName.php
│  │     │  │  │     ├─ IssuingDistributionPoint.php
│  │     │  │  │     ├─ KeyIdentifier.php
│  │     │  │  │     ├─ KeyPurposeId.php
│  │     │  │  │     ├─ KeyUsage.php
│  │     │  │  │     ├─ MaskGenAlgorithm.php
│  │     │  │  │     ├─ Name.php
│  │     │  │  │     ├─ NameConstraints.php
│  │     │  │  │     ├─ netscape_ca_policy_url.php
│  │     │  │  │     ├─ netscape_cert_type.php
│  │     │  │  │     ├─ netscape_comment.php
│  │     │  │  │     ├─ NetworkAddress.php
│  │     │  │  │     ├─ NoticeReference.php
│  │     │  │  │     ├─ NumericUserIdentifier.php
│  │     │  │  │     ├─ OneAsymmetricKey.php
│  │     │  │  │     ├─ ORAddress.php
│  │     │  │  │     ├─ OrganizationalUnitNames.php
│  │     │  │  │     ├─ OrganizationName.php
│  │     │  │  │     ├─ OtherPrimeInfo.php
│  │     │  │  │     ├─ OtherPrimeInfos.php
│  │     │  │  │     ├─ PBEParameter.php
│  │     │  │  │     ├─ PBES2params.php
│  │     │  │  │     ├─ PBKDF2params.php
│  │     │  │  │     ├─ PBMAC1params.php
│  │     │  │  │     ├─ Pentanomial.php
│  │     │  │  │     ├─ PersonalName.php
│  │     │  │  │     ├─ PKCS9String.php
│  │     │  │  │     ├─ PolicyInformation.php
│  │     │  │  │     ├─ PolicyMappings.php
│  │     │  │  │     ├─ PolicyQualifierId.php
│  │     │  │  │     ├─ PolicyQualifierInfo.php
│  │     │  │  │     ├─ PostalAddress.php
│  │     │  │  │     ├─ Prime_p.php
│  │     │  │  │     ├─ PrivateDomainName.php
│  │     │  │  │     ├─ PrivateKey.php
│  │     │  │  │     ├─ PrivateKeyInfo.php
│  │     │  │  │     ├─ PrivateKeyUsagePeriod.php
│  │     │  │  │     ├─ PublicKey.php
│  │     │  │  │     ├─ PublicKeyAndChallenge.php
│  │     │  │  │     ├─ PublicKeyInfo.php
│  │     │  │  │     ├─ RC2CBCParameter.php
│  │     │  │  │     ├─ RDNSequence.php
│  │     │  │  │     ├─ ReasonFlags.php
│  │     │  │  │     ├─ RelativeDistinguishedName.php
│  │     │  │  │     ├─ RevokedCertificate.php
│  │     │  │  │     ├─ RSAPrivateKey.php
│  │     │  │  │     ├─ RSAPublicKey.php
│  │     │  │  │     ├─ RSASSA_PSS_params.php
│  │     │  │  │     ├─ SignedPublicKeyAndChallenge.php
│  │     │  │  │     ├─ SpecifiedECDomain.php
│  │     │  │  │     ├─ SubjectAltName.php
│  │     │  │  │     ├─ SubjectDirectoryAttributes.php
│  │     │  │  │     ├─ SubjectInfoAccessSyntax.php
│  │     │  │  │     ├─ SubjectPublicKeyInfo.php
│  │     │  │  │     ├─ TBSCertificate.php
│  │     │  │  │     ├─ TBSCertList.php
│  │     │  │  │     ├─ TerminalIdentifier.php
│  │     │  │  │     ├─ Time.php
│  │     │  │  │     ├─ Trinomial.php
│  │     │  │  │     ├─ UniqueIdentifier.php
│  │     │  │  │     ├─ UserNotice.php
│  │     │  │  │     └─ Validity.php
│  │     │  │  ├─ ASN1.php
│  │     │  │  └─ X509.php
│  │     │  ├─ Math
│  │     │  │  ├─ BigInteger
│  │     │  │  │  └─ Engines
│  │     │  │  │     ├─ BCMath
│  │     │  │  │     │  ├─ Base.php
│  │     │  │  │     │  ├─ BuiltIn.php
│  │     │  │  │     │  ├─ DefaultEngine.php
│  │     │  │  │     │  ├─ OpenSSL.php
│  │     │  │  │     │  └─ Reductions
│  │     │  │  │     │     ├─ Barrett.php
│  │     │  │  │     │     └─ EvalBarrett.php
│  │     │  │  │     ├─ BCMath.php
│  │     │  │  │     ├─ Engine.php
│  │     │  │  │     ├─ GMP
│  │     │  │  │     │  └─ DefaultEngine.php
│  │     │  │  │     ├─ GMP.php
│  │     │  │  │     ├─ OpenSSL.php
│  │     │  │  │     ├─ PHP
│  │     │  │  │     │  ├─ Base.php
│  │     │  │  │     │  ├─ DefaultEngine.php
│  │     │  │  │     │  ├─ Montgomery.php
│  │     │  │  │     │  ├─ OpenSSL.php
│  │     │  │  │     │  └─ Reductions
│  │     │  │  │     │     ├─ Barrett.php
│  │     │  │  │     │     ├─ Classic.php
│  │     │  │  │     │     ├─ EvalBarrett.php
│  │     │  │  │     │     ├─ Montgomery.php
│  │     │  │  │     │     ├─ MontgomeryMult.php
│  │     │  │  │     │     └─ PowerOfTwo.php
│  │     │  │  │     ├─ PHP.php
│  │     │  │  │     ├─ PHP32.php
│  │     │  │  │     └─ PHP64.php
│  │     │  │  ├─ BigInteger.php
│  │     │  │  ├─ BinaryField
│  │     │  │  │  └─ Integer.php
│  │     │  │  ├─ BinaryField.php
│  │     │  │  ├─ Common
│  │     │  │  │  ├─ FiniteField
│  │     │  │  │  │  └─ Integer.php
│  │     │  │  │  └─ FiniteField.php
│  │     │  │  ├─ PrimeField
│  │     │  │  │  └─ Integer.php
│  │     │  │  └─ PrimeField.php
│  │     │  ├─ Net
│  │     │  │  ├─ SFTP
│  │     │  │  │  └─ Stream.php
│  │     │  │  ├─ SFTP.php
│  │     │  │  └─ SSH2.php
│  │     │  ├─ openssl.cnf
│  │     │  └─ System
│  │     │     └─ SSH
│  │     │        ├─ Agent
│  │     │        │  └─ Identity.php
│  │     │        ├─ Agent.php
│  │     │        └─ Common
│  │     │           └─ Traits
│  │     │              └─ ReadBytes.php
│  │     └─ README.md
│  ├─ psr
│  │  ├─ cache
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE.txt
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     ├─ CacheException.php
│  │  │     ├─ CacheItemInterface.php
│  │  │     ├─ CacheItemPoolInterface.php
│  │  │     └─ InvalidArgumentException.php
│  │  ├─ clock
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     └─ ClockInterface.php
│  │  ├─ container
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     ├─ ContainerExceptionInterface.php
│  │  │     ├─ ContainerInterface.php
│  │  │     └─ NotFoundExceptionInterface.php
│  │  ├─ event-dispatcher
│  │  │  ├─ .editorconfig
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     ├─ EventDispatcherInterface.php
│  │  │     ├─ ListenerProviderInterface.php
│  │  │     └─ StoppableEventInterface.php
│  │  ├─ http-client
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     ├─ ClientExceptionInterface.php
│  │  │     ├─ ClientInterface.php
│  │  │     ├─ NetworkExceptionInterface.php
│  │  │     └─ RequestExceptionInterface.php
│  │  ├─ http-factory
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     ├─ RequestFactoryInterface.php
│  │  │     ├─ ResponseFactoryInterface.php
│  │  │     ├─ ServerRequestFactoryInterface.php
│  │  │     ├─ StreamFactoryInterface.php
│  │  │     ├─ UploadedFileFactoryInterface.php
│  │  │     └─ UriFactoryInterface.php
│  │  ├─ http-message
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ composer.json
│  │  │  ├─ docs
│  │  │  │  ├─ PSR7-Interfaces.md
│  │  │  │  └─ PSR7-Usage.md
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     ├─ MessageInterface.php
│  │  │     ├─ RequestInterface.php
│  │  │     ├─ ResponseInterface.php
│  │  │     ├─ ServerRequestInterface.php
│  │  │     ├─ StreamInterface.php
│  │  │     ├─ UploadedFileInterface.php
│  │  │     └─ UriInterface.php
│  │  ├─ http-server-handler
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     └─ RequestHandlerInterface.php
│  │  ├─ http-server-middleware
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     └─ MiddlewareInterface.php
│  │  ├─ log
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ src
│  │  │     ├─ AbstractLogger.php
│  │  │     ├─ InvalidArgumentException.php
│  │  │     ├─ LoggerAwareInterface.php
│  │  │     ├─ LoggerAwareTrait.php
│  │  │     ├─ LoggerInterface.php
│  │  │     ├─ LoggerTrait.php
│  │  │     ├─ LogLevel.php
│  │  │     └─ NullLogger.php
│  │  └─ simple-cache
│  │     ├─ .editorconfig
│  │     ├─ composer.json
│  │     ├─ LICENSE.md
│  │     ├─ README.md
│  │     └─ src
│  │        ├─ CacheException.php
│  │        ├─ CacheInterface.php
│  │        └─ InvalidArgumentException.php
│  ├─ psy
│  │  └─ psysh
│  │     ├─ bin
│  │     │  └─ psysh
│  │     ├─ composer.json
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     └─ src
│  │        ├─ CodeCleaner
│  │        │  ├─ AbstractClassPass.php
│  │        │  ├─ AssignThisVariablePass.php
│  │        │  ├─ CalledClassPass.php
│  │        │  ├─ CallTimePassByReferencePass.php
│  │        │  ├─ CodeCleanerPass.php
│  │        │  ├─ EmptyArrayDimFetchPass.php
│  │        │  ├─ ExitPass.php
│  │        │  ├─ FinalClassPass.php
│  │        │  ├─ FunctionContextPass.php
│  │        │  ├─ FunctionReturnInWriteContextPass.php
│  │        │  ├─ ImplicitReturnPass.php
│  │        │  ├─ ImplicitUsePass.php
│  │        │  ├─ IssetPass.php
│  │        │  ├─ LabelContextPass.php
│  │        │  ├─ LeavePsyshAlonePass.php
│  │        │  ├─ ListPass.php
│  │        │  ├─ LoopContextPass.php
│  │        │  ├─ MagicConstantsPass.php
│  │        │  ├─ NamespaceAwarePass.php
│  │        │  ├─ NamespacePass.php
│  │        │  ├─ NoReturnValue.php
│  │        │  ├─ PassableByReferencePass.php
│  │        │  ├─ RequirePass.php
│  │        │  ├─ ReturnTypePass.php
│  │        │  ├─ StrictTypesPass.php
│  │        │  ├─ UseStatementPass.php
│  │        │  ├─ ValidClassNamePass.php
│  │        │  ├─ ValidConstructorPass.php
│  │        │  └─ ValidFunctionNamePass.php
│  │        ├─ CodeCleaner.php
│  │        ├─ CodeCleanerAware.php
│  │        ├─ Command
│  │        │  ├─ BufferCommand.php
│  │        │  ├─ ClearCommand.php
│  │        │  ├─ CodeArgumentParser.php
│  │        │  ├─ Command.php
│  │        │  ├─ DocCommand.php
│  │        │  ├─ DumpCommand.php
│  │        │  ├─ EditCommand.php
│  │        │  ├─ ExitCommand.php
│  │        │  ├─ HelpCommand.php
│  │        │  ├─ HistoryCommand.php
│  │        │  ├─ ListCommand
│  │        │  │  ├─ ClassConstantEnumerator.php
│  │        │  │  ├─ ClassEnumerator.php
│  │        │  │  ├─ ConstantEnumerator.php
│  │        │  │  ├─ Enumerator.php
│  │        │  │  ├─ FunctionEnumerator.php
│  │        │  │  ├─ GlobalVariableEnumerator.php
│  │        │  │  ├─ MethodEnumerator.php
│  │        │  │  ├─ PropertyEnumerator.php
│  │        │  │  └─ VariableEnumerator.php
│  │        │  ├─ ListCommand.php
│  │        │  ├─ ParseCommand.php
│  │        │  ├─ PsyVersionCommand.php
│  │        │  ├─ ReflectingCommand.php
│  │        │  ├─ ShowCommand.php
│  │        │  ├─ SudoCommand.php
│  │        │  ├─ ThrowUpCommand.php
│  │        │  ├─ TimeitCommand
│  │        │  │  └─ TimeitVisitor.php
│  │        │  ├─ TimeitCommand.php
│  │        │  ├─ TraceCommand.php
│  │        │  ├─ WhereamiCommand.php
│  │        │  └─ WtfCommand.php
│  │        ├─ ConfigPaths.php
│  │        ├─ Configuration.php
│  │        ├─ Context.php
│  │        ├─ ContextAware.php
│  │        ├─ EnvInterface.php
│  │        ├─ Exception
│  │        │  ├─ BreakException.php
│  │        │  ├─ DeprecatedException.php
│  │        │  ├─ ErrorException.php
│  │        │  ├─ Exception.php
│  │        │  ├─ FatalErrorException.php
│  │        │  ├─ InterruptException.php
│  │        │  ├─ ParseErrorException.php
│  │        │  ├─ RuntimeException.php
│  │        │  ├─ ThrowUpException.php
│  │        │  └─ UnexpectedTargetException.php
│  │        ├─ ExecutionClosure.php
│  │        ├─ ExecutionLoop
│  │        │  ├─ AbstractListener.php
│  │        │  ├─ Listener.php
│  │        │  ├─ ProcessForker.php
│  │        │  ├─ RunkitReloader.php
│  │        │  └─ SignalHandler.php
│  │        ├─ ExecutionLoopClosure.php
│  │        ├─ Formatter
│  │        │  ├─ CodeFormatter.php
│  │        │  ├─ DocblockFormatter.php
│  │        │  ├─ ReflectorFormatter.php
│  │        │  ├─ SignatureFormatter.php
│  │        │  └─ TraceFormatter.php
│  │        ├─ functions.php
│  │        ├─ Input
│  │        │  ├─ CodeArgument.php
│  │        │  ├─ FilterOptions.php
│  │        │  ├─ ShellInput.php
│  │        │  └─ SilentInput.php
│  │        ├─ Output
│  │        │  ├─ OutputPager.php
│  │        │  ├─ PassthruPager.php
│  │        │  ├─ ProcOutputPager.php
│  │        │  ├─ ShellOutput.php
│  │        │  └─ Theme.php
│  │        ├─ ParserFactory.php
│  │        ├─ Readline
│  │        │  ├─ GNUReadline.php
│  │        │  ├─ Hoa
│  │        │  │  ├─ Autocompleter.php
│  │        │  │  ├─ AutocompleterAggregate.php
│  │        │  │  ├─ AutocompleterPath.php
│  │        │  │  ├─ AutocompleterWord.php
│  │        │  │  ├─ Console.php
│  │        │  │  ├─ ConsoleCursor.php
│  │        │  │  ├─ ConsoleException.php
│  │        │  │  ├─ ConsoleInput.php
│  │        │  │  ├─ ConsoleOutput.php
│  │        │  │  ├─ ConsoleProcessus.php
│  │        │  │  ├─ ConsoleTput.php
│  │        │  │  ├─ ConsoleWindow.php
│  │        │  │  ├─ Event.php
│  │        │  │  ├─ EventBucket.php
│  │        │  │  ├─ EventException.php
│  │        │  │  ├─ EventListenable.php
│  │        │  │  ├─ EventListener.php
│  │        │  │  ├─ EventListens.php
│  │        │  │  ├─ EventSource.php
│  │        │  │  ├─ Exception.php
│  │        │  │  ├─ ExceptionIdle.php
│  │        │  │  ├─ File.php
│  │        │  │  ├─ FileDirectory.php
│  │        │  │  ├─ FileDoesNotExistException.php
│  │        │  │  ├─ FileException.php
│  │        │  │  ├─ FileFinder.php
│  │        │  │  ├─ FileGeneric.php
│  │        │  │  ├─ FileLink.php
│  │        │  │  ├─ FileLinkRead.php
│  │        │  │  ├─ FileLinkReadWrite.php
│  │        │  │  ├─ FileRead.php
│  │        │  │  ├─ FileReadWrite.php
│  │        │  │  ├─ IStream.php
│  │        │  │  ├─ IteratorFileSystem.php
│  │        │  │  ├─ IteratorRecursiveDirectory.php
│  │        │  │  ├─ IteratorSplFileInfo.php
│  │        │  │  ├─ Protocol.php
│  │        │  │  ├─ ProtocolException.php
│  │        │  │  ├─ ProtocolNode.php
│  │        │  │  ├─ ProtocolNodeLibrary.php
│  │        │  │  ├─ ProtocolWrapper.php
│  │        │  │  ├─ Readline.php
│  │        │  │  ├─ Stream.php
│  │        │  │  ├─ StreamBufferable.php
│  │        │  │  ├─ StreamContext.php
│  │        │  │  ├─ StreamException.php
│  │        │  │  ├─ StreamIn.php
│  │        │  │  ├─ StreamLockable.php
│  │        │  │  ├─ StreamOut.php
│  │        │  │  ├─ StreamPathable.php
│  │        │  │  ├─ StreamPointable.php
│  │        │  │  ├─ StreamStatable.php
│  │        │  │  ├─ StreamTouchable.php
│  │        │  │  ├─ Terminfo
│  │        │  │  │  ├─ 77
│  │        │  │  │  │  └─ windows-ansi
│  │        │  │  │  └─ 78
│  │        │  │  │     ├─ xterm
│  │        │  │  │     └─ xterm-256color
│  │        │  │  ├─ Ustring.php
│  │        │  │  └─ Xcallable.php
│  │        │  ├─ Libedit.php
│  │        │  ├─ Readline.php
│  │        │  ├─ Transient.php
│  │        │  └─ Userland.php
│  │        ├─ Reflection
│  │        │  ├─ ReflectionConstant.php
│  │        │  ├─ ReflectionLanguageConstruct.php
│  │        │  ├─ ReflectionLanguageConstructParameter.php
│  │        │  └─ ReflectionNamespace.php
│  │        ├─ Shell.php
│  │        ├─ Sudo
│  │        │  └─ SudoVisitor.php
│  │        ├─ Sudo.php
│  │        ├─ SuperglobalsEnv.php
│  │        ├─ SystemEnv.php
│  │        ├─ TabCompletion
│  │        │  ├─ AutoCompleter.php
│  │        │  ├─ AutoloadWarmer
│  │        │  │  ├─ AutoloadWarmerInterface.php
│  │        │  │  └─ ComposerAutoloadWarmer.php
│  │        │  └─ Matcher
│  │        │     ├─ AbstractContextAwareMatcher.php
│  │        │     ├─ AbstractDefaultParametersMatcher.php
│  │        │     ├─ AbstractMatcher.php
│  │        │     ├─ ClassAttributesMatcher.php
│  │        │     ├─ ClassMethodDefaultParametersMatcher.php
│  │        │     ├─ ClassMethodsMatcher.php
│  │        │     ├─ ClassNamesMatcher.php
│  │        │     ├─ CommandsMatcher.php
│  │        │     ├─ ConstantsMatcher.php
│  │        │     ├─ FunctionDefaultParametersMatcher.php
│  │        │     ├─ FunctionsMatcher.php
│  │        │     ├─ KeywordsMatcher.php
│  │        │     ├─ MongoClientMatcher.php
│  │        │     ├─ MongoDatabaseMatcher.php
│  │        │     ├─ ObjectAttributesMatcher.php
│  │        │     ├─ ObjectMethodDefaultParametersMatcher.php
│  │        │     ├─ ObjectMethodsMatcher.php
│  │        │     └─ VariablesMatcher.php
│  │        ├─ Util
│  │        │  ├─ DependencyChecker.php
│  │        │  ├─ Docblock.php
│  │        │  ├─ Json.php
│  │        │  ├─ Mirror.php
│  │        │  └─ Str.php
│  │        ├─ VarDumper
│  │        │  ├─ Cloner.php
│  │        │  ├─ Dumper.php
│  │        │  ├─ Presenter.php
│  │        │  └─ PresenterAware.php
│  │        └─ VersionUpdater
│  │           ├─ Checker.php
│  │           ├─ Downloader
│  │           │  ├─ CurlDownloader.php
│  │           │  ├─ Factory.php
│  │           │  └─ FileDownloader.php
│  │           ├─ Downloader.php
│  │           ├─ GitHubChecker.php
│  │           ├─ Installer.php
│  │           ├─ IntervalChecker.php
│  │           ├─ NoopChecker.php
│  │           └─ SelfUpdate.php
│  ├─ ralouphie
│  │  └─ getallheaders
│  │     ├─ composer.json
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     └─ src
│  │        └─ getallheaders.php
│  ├─ ramsey
│  │  ├─ collection
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ SECURITY.md
│  │  │  └─ src
│  │  │     ├─ AbstractArray.php
│  │  │     ├─ AbstractCollection.php
│  │  │     ├─ AbstractSet.php
│  │  │     ├─ ArrayInterface.php
│  │  │     ├─ Collection.php
│  │  │     ├─ CollectionInterface.php
│  │  │     ├─ DoubleEndedQueue.php
│  │  │     ├─ DoubleEndedQueueInterface.php
│  │  │     ├─ Exception
│  │  │     │  ├─ CollectionException.php
│  │  │     │  ├─ CollectionMismatchException.php
│  │  │     │  ├─ InvalidArgumentException.php
│  │  │     │  ├─ InvalidPropertyOrMethod.php
│  │  │     │  ├─ NoSuchElementException.php
│  │  │     │  ├─ OutOfBoundsException.php
│  │  │     │  └─ UnsupportedOperationException.php
│  │  │     ├─ GenericArray.php
│  │  │     ├─ Map
│  │  │     │  ├─ AbstractMap.php
│  │  │     │  ├─ AbstractTypedMap.php
│  │  │     │  ├─ AssociativeArrayMap.php
│  │  │     │  ├─ MapInterface.php
│  │  │     │  ├─ NamedParameterMap.php
│  │  │     │  ├─ TypedMap.php
│  │  │     │  └─ TypedMapInterface.php
│  │  │     ├─ Queue.php
│  │  │     ├─ QueueInterface.php
│  │  │     ├─ Set.php
│  │  │     ├─ Sort.php
│  │  │     └─ Tool
│  │  │        ├─ TypeTrait.php
│  │  │        ├─ ValueExtractorTrait.php
│  │  │        └─ ValueToStringTrait.php
│  │  └─ uuid
│  │     ├─ composer.json
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     └─ src
│  │        ├─ BinaryUtils.php
│  │        ├─ Builder
│  │        │  ├─ BuilderCollection.php
│  │        │  ├─ DefaultUuidBuilder.php
│  │        │  ├─ DegradedUuidBuilder.php
│  │        │  ├─ FallbackBuilder.php
│  │        │  └─ UuidBuilderInterface.php
│  │        ├─ Codec
│  │        │  ├─ CodecInterface.php
│  │        │  ├─ GuidStringCodec.php
│  │        │  ├─ OrderedTimeCodec.php
│  │        │  ├─ StringCodec.php
│  │        │  ├─ TimestampFirstCombCodec.php
│  │        │  └─ TimestampLastCombCodec.php
│  │        ├─ Converter
│  │        │  ├─ Number
│  │        │  │  ├─ BigNumberConverter.php
│  │        │  │  ├─ DegradedNumberConverter.php
│  │        │  │  └─ GenericNumberConverter.php
│  │        │  ├─ NumberConverterInterface.php
│  │        │  ├─ Time
│  │        │  │  ├─ BigNumberTimeConverter.php
│  │        │  │  ├─ DegradedTimeConverter.php
│  │        │  │  ├─ GenericTimeConverter.php
│  │        │  │  ├─ PhpTimeConverter.php
│  │        │  │  └─ UnixTimeConverter.php
│  │        │  └─ TimeConverterInterface.php
│  │        ├─ DegradedUuid.php
│  │        ├─ DeprecatedUuidInterface.php
│  │        ├─ DeprecatedUuidMethodsTrait.php
│  │        ├─ Exception
│  │        │  ├─ BuilderNotFoundException.php
│  │        │  ├─ DateTimeException.php
│  │        │  ├─ DceSecurityException.php
│  │        │  ├─ InvalidArgumentException.php
│  │        │  ├─ InvalidBytesException.php
│  │        │  ├─ InvalidUuidStringException.php
│  │        │  ├─ NameException.php
│  │        │  ├─ NodeException.php
│  │        │  ├─ RandomSourceException.php
│  │        │  ├─ TimeSourceException.php
│  │        │  ├─ UnableToBuildUuidException.php
│  │        │  ├─ UnsupportedOperationException.php
│  │        │  └─ UuidExceptionInterface.php
│  │        ├─ FeatureSet.php
│  │        ├─ Fields
│  │        │  ├─ FieldsInterface.php
│  │        │  └─ SerializableFieldsTrait.php
│  │        ├─ functions.php
│  │        ├─ Generator
│  │        │  ├─ CombGenerator.php
│  │        │  ├─ DceSecurityGenerator.php
│  │        │  ├─ DceSecurityGeneratorInterface.php
│  │        │  ├─ DefaultNameGenerator.php
│  │        │  ├─ DefaultTimeGenerator.php
│  │        │  ├─ NameGeneratorFactory.php
│  │        │  ├─ NameGeneratorInterface.php
│  │        │  ├─ PeclUuidNameGenerator.php
│  │        │  ├─ PeclUuidRandomGenerator.php
│  │        │  ├─ PeclUuidTimeGenerator.php
│  │        │  ├─ RandomBytesGenerator.php
│  │        │  ├─ RandomGeneratorFactory.php
│  │        │  ├─ RandomGeneratorInterface.php
│  │        │  ├─ RandomLibAdapter.php
│  │        │  ├─ TimeGeneratorFactory.php
│  │        │  ├─ TimeGeneratorInterface.php
│  │        │  └─ UnixTimeGenerator.php
│  │        ├─ Guid
│  │        │  ├─ Fields.php
│  │        │  ├─ Guid.php
│  │        │  └─ GuidBuilder.php
│  │        ├─ Lazy
│  │        │  └─ LazyUuidFromString.php
│  │        ├─ Math
│  │        │  ├─ BrickMathCalculator.php
│  │        │  ├─ CalculatorInterface.php
│  │        │  └─ RoundingMode.php
│  │        ├─ Nonstandard
│  │        │  ├─ Fields.php
│  │        │  ├─ Uuid.php
│  │        │  ├─ UuidBuilder.php
│  │        │  └─ UuidV6.php
│  │        ├─ Provider
│  │        │  ├─ Dce
│  │        │  │  └─ SystemDceSecurityProvider.php
│  │        │  ├─ DceSecurityProviderInterface.php
│  │        │  ├─ Node
│  │        │  │  ├─ FallbackNodeProvider.php
│  │        │  │  ├─ NodeProviderCollection.php
│  │        │  │  ├─ RandomNodeProvider.php
│  │        │  │  ├─ StaticNodeProvider.php
│  │        │  │  └─ SystemNodeProvider.php
│  │        │  ├─ NodeProviderInterface.php
│  │        │  ├─ Time
│  │        │  │  ├─ FixedTimeProvider.php
│  │        │  │  └─ SystemTimeProvider.php
│  │        │  └─ TimeProviderInterface.php
│  │        ├─ Rfc4122
│  │        │  ├─ Fields.php
│  │        │  ├─ FieldsInterface.php
│  │        │  ├─ MaxTrait.php
│  │        │  ├─ MaxUuid.php
│  │        │  ├─ NilTrait.php
│  │        │  ├─ NilUuid.php
│  │        │  ├─ TimeTrait.php
│  │        │  ├─ UuidBuilder.php
│  │        │  ├─ UuidInterface.php
│  │        │  ├─ UuidV1.php
│  │        │  ├─ UuidV2.php
│  │        │  ├─ UuidV3.php
│  │        │  ├─ UuidV4.php
│  │        │  ├─ UuidV5.php
│  │        │  ├─ UuidV6.php
│  │        │  ├─ UuidV7.php
│  │        │  ├─ UuidV8.php
│  │        │  ├─ Validator.php
│  │        │  ├─ VariantTrait.php
│  │        │  └─ VersionTrait.php
│  │        ├─ Type
│  │        │  ├─ Decimal.php
│  │        │  ├─ Hexadecimal.php
│  │        │  ├─ Integer.php
│  │        │  ├─ NumberInterface.php
│  │        │  ├─ Time.php
│  │        │  └─ TypeInterface.php
│  │        ├─ Uuid.php
│  │        ├─ UuidFactory.php
│  │        ├─ UuidFactoryInterface.php
│  │        ├─ UuidInterface.php
│  │        └─ Validator
│  │           ├─ GenericValidator.php
│  │           └─ ValidatorInterface.php
│  ├─ smalot
│  │  └─ pdfparser
│  │     ├─ .php-cs-fixer.php
│  │     ├─ alt_autoload.php-dist
│  │     ├─ composer.json
│  │     ├─ CONTRIBUTING.md
│  │     ├─ doc
│  │     │  ├─ CustomConfig.md
│  │     │  ├─ Developer.md
│  │     │  └─ Usage.md
│  │     ├─ LICENSE.txt
│  │     ├─ Makefile
│  │     ├─ phpunit-windows.xml
│  │     ├─ README.md
│  │     └─ src
│  │        └─ Smalot
│  │           └─ PdfParser
│  │              ├─ Config.php
│  │              ├─ Document.php
│  │              ├─ Element
│  │              │  ├─ ElementArray.php
│  │              │  ├─ ElementBoolean.php
│  │              │  ├─ ElementDate.php
│  │              │  ├─ ElementHexa.php
│  │              │  ├─ ElementMissing.php
│  │              │  ├─ ElementName.php
│  │              │  ├─ ElementNull.php
│  │              │  ├─ ElementNumeric.php
│  │              │  ├─ ElementString.php
│  │              │  ├─ ElementStruct.php
│  │              │  └─ ElementXRef.php
│  │              ├─ Element.php
│  │              ├─ Encoding
│  │              │  ├─ AbstractEncoding.php
│  │              │  ├─ EncodingLocator.php
│  │              │  ├─ ISOLatin1Encoding.php
│  │              │  ├─ ISOLatin9Encoding.php
│  │              │  ├─ MacRomanEncoding.php
│  │              │  ├─ PDFDocEncoding.php
│  │              │  ├─ PostScriptGlyphs.php
│  │              │  ├─ StandardEncoding.php
│  │              │  └─ WinAnsiEncoding.php
│  │              ├─ Encoding.php
│  │              ├─ Exception
│  │              │  ├─ EmptyPdfException.php
│  │              │  ├─ EncodingNotFoundException.php
│  │              │  ├─ InvalidDictionaryObjectException.php
│  │              │  ├─ MissingCatalogException.php
│  │              │  ├─ MissingPdfHeaderException.php
│  │              │  └─ NotImplementedException.php
│  │              ├─ Font
│  │              │  ├─ FontCIDFontType0.php
│  │              │  ├─ FontCIDFontType2.php
│  │              │  ├─ FontTrueType.php
│  │              │  ├─ FontType0.php
│  │              │  ├─ FontType1.php
│  │              │  └─ FontType3.php
│  │              ├─ Font.php
│  │              ├─ Header.php
│  │              ├─ Page.php
│  │              ├─ Pages.php
│  │              ├─ Parser.php
│  │              ├─ PDFObject.php
│  │              ├─ RawData
│  │              │  ├─ FilterHelper.php
│  │              │  └─ RawDataParser.php
│  │              └─ XObject
│  │                 ├─ Form.php
│  │                 └─ Image.php
│  ├─ spatie
│  │  └─ pdf-to-text
│  │     ├─ composer.json
│  │     ├─ LICENSE.md
│  │     ├─ README.md
│  │     └─ src
│  │        ├─ Exceptions
│  │        │  ├─ BinaryNotFoundException.php
│  │        │  ├─ CouldNotExtractText.php
│  │        │  └─ PdfNotFound.php
│  │        └─ Pdf.php
│  ├─ symfony
│  │  ├─ clock
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Clock.php
│  │  │  ├─ ClockAwareTrait.php
│  │  │  ├─ ClockInterface.php
│  │  │  ├─ composer.json
│  │  │  ├─ DatePoint.php
│  │  │  ├─ LICENSE
│  │  │  ├─ MockClock.php
│  │  │  ├─ MonotonicClock.php
│  │  │  ├─ NativeClock.php
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  └─ now.php
│  │  │  └─ Test
│  │  │     └─ ClockSensitiveTrait.php
│  │  ├─ console
│  │  │  ├─ Application.php
│  │  │  ├─ Attribute
│  │  │  │  ├─ Argument.php
│  │  │  │  ├─ AsCommand.php
│  │  │  │  └─ Option.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ CI
│  │  │  │  └─ GithubActionReporter.php
│  │  │  ├─ Color.php
│  │  │  ├─ Command
│  │  │  │  ├─ Command.php
│  │  │  │  ├─ CompleteCommand.php
│  │  │  │  ├─ DumpCompletionCommand.php
│  │  │  │  ├─ HelpCommand.php
│  │  │  │  ├─ InvokableCommand.php
│  │  │  │  ├─ LazyCommand.php
│  │  │  │  ├─ ListCommand.php
│  │  │  │  ├─ LockableTrait.php
│  │  │  │  ├─ SignalableCommandInterface.php
│  │  │  │  └─ TraceableCommand.php
│  │  │  ├─ CommandLoader
│  │  │  │  ├─ CommandLoaderInterface.php
│  │  │  │  ├─ ContainerCommandLoader.php
│  │  │  │  └─ FactoryCommandLoader.php
│  │  │  ├─ Completion
│  │  │  │  ├─ CompletionInput.php
│  │  │  │  ├─ CompletionSuggestions.php
│  │  │  │  ├─ Output
│  │  │  │  │  ├─ BashCompletionOutput.php
│  │  │  │  │  ├─ CompletionOutputInterface.php
│  │  │  │  │  ├─ FishCompletionOutput.php
│  │  │  │  │  └─ ZshCompletionOutput.php
│  │  │  │  └─ Suggestion.php
│  │  │  ├─ composer.json
│  │  │  ├─ ConsoleEvents.php
│  │  │  ├─ Cursor.php
│  │  │  ├─ DataCollector
│  │  │  │  └─ CommandDataCollector.php
│  │  │  ├─ Debug
│  │  │  │  └─ CliRequest.php
│  │  │  ├─ DependencyInjection
│  │  │  │  └─ AddConsoleCommandPass.php
│  │  │  ├─ Descriptor
│  │  │  │  ├─ ApplicationDescription.php
│  │  │  │  ├─ Descriptor.php
│  │  │  │  ├─ DescriptorInterface.php
│  │  │  │  ├─ JsonDescriptor.php
│  │  │  │  ├─ MarkdownDescriptor.php
│  │  │  │  ├─ ReStructuredTextDescriptor.php
│  │  │  │  ├─ TextDescriptor.php
│  │  │  │  └─ XmlDescriptor.php
│  │  │  ├─ Event
│  │  │  │  ├─ ConsoleAlarmEvent.php
│  │  │  │  ├─ ConsoleCommandEvent.php
│  │  │  │  ├─ ConsoleErrorEvent.php
│  │  │  │  ├─ ConsoleEvent.php
│  │  │  │  ├─ ConsoleSignalEvent.php
│  │  │  │  └─ ConsoleTerminateEvent.php
│  │  │  ├─ EventListener
│  │  │  │  └─ ErrorListener.php
│  │  │  ├─ Exception
│  │  │  │  ├─ CommandNotFoundException.php
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  ├─ InvalidOptionException.php
│  │  │  │  ├─ LogicException.php
│  │  │  │  ├─ MissingInputException.php
│  │  │  │  ├─ NamespaceNotFoundException.php
│  │  │  │  ├─ RunCommandFailedException.php
│  │  │  │  └─ RuntimeException.php
│  │  │  ├─ Formatter
│  │  │  │  ├─ NullOutputFormatter.php
│  │  │  │  ├─ NullOutputFormatterStyle.php
│  │  │  │  ├─ OutputFormatter.php
│  │  │  │  ├─ OutputFormatterInterface.php
│  │  │  │  ├─ OutputFormatterStyle.php
│  │  │  │  ├─ OutputFormatterStyleInterface.php
│  │  │  │  ├─ OutputFormatterStyleStack.php
│  │  │  │  └─ WrappableOutputFormatterInterface.php
│  │  │  ├─ Helper
│  │  │  │  ├─ DebugFormatterHelper.php
│  │  │  │  ├─ DescriptorHelper.php
│  │  │  │  ├─ Dumper.php
│  │  │  │  ├─ FormatterHelper.php
│  │  │  │  ├─ Helper.php
│  │  │  │  ├─ HelperInterface.php
│  │  │  │  ├─ HelperSet.php
│  │  │  │  ├─ InputAwareHelper.php
│  │  │  │  ├─ OutputWrapper.php
│  │  │  │  ├─ ProcessHelper.php
│  │  │  │  ├─ ProgressBar.php
│  │  │  │  ├─ ProgressIndicator.php
│  │  │  │  ├─ QuestionHelper.php
│  │  │  │  ├─ SymfonyQuestionHelper.php
│  │  │  │  ├─ Table.php
│  │  │  │  ├─ TableCell.php
│  │  │  │  ├─ TableCellStyle.php
│  │  │  │  ├─ TableRows.php
│  │  │  │  ├─ TableSeparator.php
│  │  │  │  ├─ TableStyle.php
│  │  │  │  ├─ TreeHelper.php
│  │  │  │  ├─ TreeNode.php
│  │  │  │  └─ TreeStyle.php
│  │  │  ├─ Input
│  │  │  │  ├─ ArgvInput.php
│  │  │  │  ├─ ArrayInput.php
│  │  │  │  ├─ Input.php
│  │  │  │  ├─ InputArgument.php
│  │  │  │  ├─ InputAwareInterface.php
│  │  │  │  ├─ InputDefinition.php
│  │  │  │  ├─ InputInterface.php
│  │  │  │  ├─ InputOption.php
│  │  │  │  ├─ StreamableInputInterface.php
│  │  │  │  └─ StringInput.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Logger
│  │  │  │  └─ ConsoleLogger.php
│  │  │  ├─ Messenger
│  │  │  │  ├─ RunCommandContext.php
│  │  │  │  ├─ RunCommandMessage.php
│  │  │  │  └─ RunCommandMessageHandler.php
│  │  │  ├─ Output
│  │  │  │  ├─ AnsiColorMode.php
│  │  │  │  ├─ BufferedOutput.php
│  │  │  │  ├─ ConsoleOutput.php
│  │  │  │  ├─ ConsoleOutputInterface.php
│  │  │  │  ├─ ConsoleSectionOutput.php
│  │  │  │  ├─ NullOutput.php
│  │  │  │  ├─ Output.php
│  │  │  │  ├─ OutputInterface.php
│  │  │  │  ├─ StreamOutput.php
│  │  │  │  └─ TrimmedBufferOutput.php
│  │  │  ├─ Question
│  │  │  │  ├─ ChoiceQuestion.php
│  │  │  │  ├─ ConfirmationQuestion.php
│  │  │  │  └─ Question.php
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  ├─ bin
│  │  │  │  │  └─ hiddeninput.exe
│  │  │  │  ├─ completion.bash
│  │  │  │  ├─ completion.fish
│  │  │  │  └─ completion.zsh
│  │  │  ├─ SignalRegistry
│  │  │  │  ├─ SignalMap.php
│  │  │  │  └─ SignalRegistry.php
│  │  │  ├─ SingleCommandApplication.php
│  │  │  ├─ Style
│  │  │  │  ├─ OutputStyle.php
│  │  │  │  ├─ StyleInterface.php
│  │  │  │  └─ SymfonyStyle.php
│  │  │  ├─ Terminal.php
│  │  │  └─ Tester
│  │  │     ├─ ApplicationTester.php
│  │  │     ├─ CommandCompletionTester.php
│  │  │     ├─ CommandTester.php
│  │  │     ├─ Constraint
│  │  │     │  └─ CommandIsSuccessful.php
│  │  │     └─ TesterTrait.php
│  │  ├─ css-selector
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ composer.json
│  │  │  ├─ CssSelectorConverter.php
│  │  │  ├─ Exception
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ ExpressionErrorException.php
│  │  │  │  ├─ InternalErrorException.php
│  │  │  │  ├─ ParseException.php
│  │  │  │  └─ SyntaxErrorException.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Node
│  │  │  │  ├─ AbstractNode.php
│  │  │  │  ├─ AttributeNode.php
│  │  │  │  ├─ ClassNode.php
│  │  │  │  ├─ CombinedSelectorNode.php
│  │  │  │  ├─ ElementNode.php
│  │  │  │  ├─ FunctionNode.php
│  │  │  │  ├─ HashNode.php
│  │  │  │  ├─ MatchingNode.php
│  │  │  │  ├─ NegationNode.php
│  │  │  │  ├─ NodeInterface.php
│  │  │  │  ├─ PseudoNode.php
│  │  │  │  ├─ SelectorNode.php
│  │  │  │  ├─ Specificity.php
│  │  │  │  └─ SpecificityAdjustmentNode.php
│  │  │  ├─ Parser
│  │  │  │  ├─ Handler
│  │  │  │  │  ├─ CommentHandler.php
│  │  │  │  │  ├─ HandlerInterface.php
│  │  │  │  │  ├─ HashHandler.php
│  │  │  │  │  ├─ IdentifierHandler.php
│  │  │  │  │  ├─ NumberHandler.php
│  │  │  │  │  ├─ StringHandler.php
│  │  │  │  │  └─ WhitespaceHandler.php
│  │  │  │  ├─ Parser.php
│  │  │  │  ├─ ParserInterface.php
│  │  │  │  ├─ Reader.php
│  │  │  │  ├─ Shortcut
│  │  │  │  │  ├─ ClassParser.php
│  │  │  │  │  ├─ ElementParser.php
│  │  │  │  │  ├─ EmptyStringParser.php
│  │  │  │  │  └─ HashParser.php
│  │  │  │  ├─ Token.php
│  │  │  │  ├─ Tokenizer
│  │  │  │  │  ├─ Tokenizer.php
│  │  │  │  │  ├─ TokenizerEscaping.php
│  │  │  │  │  └─ TokenizerPatterns.php
│  │  │  │  └─ TokenStream.php
│  │  │  ├─ README.md
│  │  │  └─ XPath
│  │  │     ├─ Extension
│  │  │     │  ├─ AbstractExtension.php
│  │  │     │  ├─ AttributeMatchingExtension.php
│  │  │     │  ├─ CombinationExtension.php
│  │  │     │  ├─ ExtensionInterface.php
│  │  │     │  ├─ FunctionExtension.php
│  │  │     │  ├─ HtmlExtension.php
│  │  │     │  ├─ NodeExtension.php
│  │  │     │  └─ PseudoClassExtension.php
│  │  │     ├─ Translator.php
│  │  │     ├─ TranslatorInterface.php
│  │  │     └─ XPathExpr.php
│  │  ├─ deprecation-contracts
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ composer.json
│  │  │  ├─ function.php
│  │  │  ├─ LICENSE
│  │  │  └─ README.md
│  │  ├─ error-handler
│  │  │  ├─ BufferingLogger.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Command
│  │  │  │  └─ ErrorDumpCommand.php
│  │  │  ├─ composer.json
│  │  │  ├─ Debug.php
│  │  │  ├─ DebugClassLoader.php
│  │  │  ├─ Error
│  │  │  │  ├─ ClassNotFoundError.php
│  │  │  │  ├─ FatalError.php
│  │  │  │  ├─ OutOfMemoryError.php
│  │  │  │  ├─ UndefinedFunctionError.php
│  │  │  │  └─ UndefinedMethodError.php
│  │  │  ├─ ErrorEnhancer
│  │  │  │  ├─ ClassNotFoundErrorEnhancer.php
│  │  │  │  ├─ ErrorEnhancerInterface.php
│  │  │  │  ├─ UndefinedFunctionErrorEnhancer.php
│  │  │  │  └─ UndefinedMethodErrorEnhancer.php
│  │  │  ├─ ErrorHandler.php
│  │  │  ├─ ErrorRenderer
│  │  │  │  ├─ CliErrorRenderer.php
│  │  │  │  ├─ ErrorRendererInterface.php
│  │  │  │  ├─ FileLinkFormatter.php
│  │  │  │  ├─ HtmlErrorRenderer.php
│  │  │  │  └─ SerializerErrorRenderer.php
│  │  │  ├─ Exception
│  │  │  │  ├─ FlattenException.php
│  │  │  │  └─ SilencedErrorContext.php
│  │  │  ├─ Internal
│  │  │  │  └─ TentativeTypes.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  ├─ assets
│  │  │  │  │  ├─ css
│  │  │  │  │  │  ├─ error.css
│  │  │  │  │  │  ├─ exception.css
│  │  │  │  │  │  └─ exception_full.css
│  │  │  │  │  ├─ images
│  │  │  │  │  │  ├─ chevron-right.svg
│  │  │  │  │  │  ├─ favicon.png.base64
│  │  │  │  │  │  ├─ icon-book.svg
│  │  │  │  │  │  ├─ icon-copy.svg
│  │  │  │  │  │  ├─ icon-minus-square-o.svg
│  │  │  │  │  │  ├─ icon-minus-square.svg
│  │  │  │  │  │  ├─ icon-plus-square-o.svg
│  │  │  │  │  │  ├─ icon-plus-square.svg
│  │  │  │  │  │  ├─ icon-support.svg
│  │  │  │  │  │  ├─ symfony-ghost.svg.php
│  │  │  │  │  │  └─ symfony-logo.svg
│  │  │  │  │  └─ js
│  │  │  │  │     └─ exception.js
│  │  │  │  ├─ bin
│  │  │  │  │  ├─ extract-tentative-return-types.php
│  │  │  │  │  └─ patch-type-declarations
│  │  │  │  └─ views
│  │  │  │     ├─ error.html.php
│  │  │  │     ├─ exception.html.php
│  │  │  │     ├─ exception_full.html.php
│  │  │  │     ├─ logs.html.php
│  │  │  │     ├─ trace.html.php
│  │  │  │     ├─ traces.html.php
│  │  │  │     └─ traces_text.html.php
│  │  │  └─ ThrowableUtils.php
│  │  ├─ event-dispatcher
│  │  │  ├─ Attribute
│  │  │  │  └─ AsEventListener.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ composer.json
│  │  │  ├─ Debug
│  │  │  │  ├─ TraceableEventDispatcher.php
│  │  │  │  └─ WrappedListener.php
│  │  │  ├─ DependencyInjection
│  │  │  │  ├─ AddEventAliasesPass.php
│  │  │  │  └─ RegisterListenersPass.php
│  │  │  ├─ EventDispatcher.php
│  │  │  ├─ EventDispatcherInterface.php
│  │  │  ├─ EventSubscriberInterface.php
│  │  │  ├─ GenericEvent.php
│  │  │  ├─ ImmutableEventDispatcher.php
│  │  │  ├─ LICENSE
│  │  │  └─ README.md
│  │  ├─ event-dispatcher-contracts
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ composer.json
│  │  │  ├─ Event.php
│  │  │  ├─ EventDispatcherInterface.php
│  │  │  ├─ LICENSE
│  │  │  └─ README.md
│  │  ├─ finder
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Comparator
│  │  │  │  ├─ Comparator.php
│  │  │  │  ├─ DateComparator.php
│  │  │  │  └─ NumberComparator.php
│  │  │  ├─ composer.json
│  │  │  ├─ Exception
│  │  │  │  ├─ AccessDeniedException.php
│  │  │  │  └─ DirectoryNotFoundException.php
│  │  │  ├─ Finder.php
│  │  │  ├─ Gitignore.php
│  │  │  ├─ Glob.php
│  │  │  ├─ Iterator
│  │  │  │  ├─ CustomFilterIterator.php
│  │  │  │  ├─ DateRangeFilterIterator.php
│  │  │  │  ├─ DepthRangeFilterIterator.php
│  │  │  │  ├─ ExcludeDirectoryFilterIterator.php
│  │  │  │  ├─ FilecontentFilterIterator.php
│  │  │  │  ├─ FilenameFilterIterator.php
│  │  │  │  ├─ FileTypeFilterIterator.php
│  │  │  │  ├─ LazyIterator.php
│  │  │  │  ├─ MultiplePcreFilterIterator.php
│  │  │  │  ├─ PathFilterIterator.php
│  │  │  │  ├─ RecursiveDirectoryIterator.php
│  │  │  │  ├─ SizeRangeFilterIterator.php
│  │  │  │  ├─ SortableIterator.php
│  │  │  │  └─ VcsIgnoredFilterIterator.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ SplFileInfo.php
│  │  ├─ http-foundation
│  │  │  ├─ AcceptHeader.php
│  │  │  ├─ AcceptHeaderItem.php
│  │  │  ├─ BinaryFileResponse.php
│  │  │  ├─ ChainRequestMatcher.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ composer.json
│  │  │  ├─ Cookie.php
│  │  │  ├─ EventStreamResponse.php
│  │  │  ├─ Exception
│  │  │  │  ├─ BadRequestException.php
│  │  │  │  ├─ ConflictingHeadersException.php
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ ExpiredSignedUriException.php
│  │  │  │  ├─ JsonException.php
│  │  │  │  ├─ LogicException.php
│  │  │  │  ├─ RequestExceptionInterface.php
│  │  │  │  ├─ SessionNotFoundException.php
│  │  │  │  ├─ SignedUriException.php
│  │  │  │  ├─ SuspiciousOperationException.php
│  │  │  │  ├─ UnexpectedValueException.php
│  │  │  │  ├─ UnsignedUriException.php
│  │  │  │  └─ UnverifiedSignedUriException.php
│  │  │  ├─ File
│  │  │  │  ├─ Exception
│  │  │  │  │  ├─ AccessDeniedException.php
│  │  │  │  │  ├─ CannotWriteFileException.php
│  │  │  │  │  ├─ ExtensionFileException.php
│  │  │  │  │  ├─ FileException.php
│  │  │  │  │  ├─ FileNotFoundException.php
│  │  │  │  │  ├─ FormSizeFileException.php
│  │  │  │  │  ├─ IniSizeFileException.php
│  │  │  │  │  ├─ NoFileException.php
│  │  │  │  │  ├─ NoTmpDirFileException.php
│  │  │  │  │  ├─ PartialFileException.php
│  │  │  │  │  ├─ UnexpectedTypeException.php
│  │  │  │  │  └─ UploadException.php
│  │  │  │  ├─ File.php
│  │  │  │  ├─ Stream.php
│  │  │  │  └─ UploadedFile.php
│  │  │  ├─ FileBag.php
│  │  │  ├─ HeaderBag.php
│  │  │  ├─ HeaderUtils.php
│  │  │  ├─ InputBag.php
│  │  │  ├─ IpUtils.php
│  │  │  ├─ JsonResponse.php
│  │  │  ├─ LICENSE
│  │  │  ├─ ParameterBag.php
│  │  │  ├─ RateLimiter
│  │  │  │  ├─ AbstractRequestRateLimiter.php
│  │  │  │  ├─ PeekableRequestRateLimiterInterface.php
│  │  │  │  └─ RequestRateLimiterInterface.php
│  │  │  ├─ README.md
│  │  │  ├─ RedirectResponse.php
│  │  │  ├─ Request.php
│  │  │  ├─ RequestMatcher
│  │  │  │  ├─ AttributesRequestMatcher.php
│  │  │  │  ├─ ExpressionRequestMatcher.php
│  │  │  │  ├─ HeaderRequestMatcher.php
│  │  │  │  ├─ HostRequestMatcher.php
│  │  │  │  ├─ IpsRequestMatcher.php
│  │  │  │  ├─ IsJsonRequestMatcher.php
│  │  │  │  ├─ MethodRequestMatcher.php
│  │  │  │  ├─ PathRequestMatcher.php
│  │  │  │  ├─ PortRequestMatcher.php
│  │  │  │  ├─ QueryParameterRequestMatcher.php
│  │  │  │  └─ SchemeRequestMatcher.php
│  │  │  ├─ RequestMatcherInterface.php
│  │  │  ├─ RequestStack.php
│  │  │  ├─ Response.php
│  │  │  ├─ ResponseHeaderBag.php
│  │  │  ├─ ServerBag.php
│  │  │  ├─ ServerEvent.php
│  │  │  ├─ Session
│  │  │  │  ├─ Attribute
│  │  │  │  │  ├─ AttributeBag.php
│  │  │  │  │  └─ AttributeBagInterface.php
│  │  │  │  ├─ Flash
│  │  │  │  │  ├─ AutoExpireFlashBag.php
│  │  │  │  │  ├─ FlashBag.php
│  │  │  │  │  └─ FlashBagInterface.php
│  │  │  │  ├─ FlashBagAwareSessionInterface.php
│  │  │  │  ├─ Session.php
│  │  │  │  ├─ SessionBagInterface.php
│  │  │  │  ├─ SessionBagProxy.php
│  │  │  │  ├─ SessionFactory.php
│  │  │  │  ├─ SessionFactoryInterface.php
│  │  │  │  ├─ SessionInterface.php
│  │  │  │  ├─ SessionUtils.php
│  │  │  │  └─ Storage
│  │  │  │     ├─ Handler
│  │  │  │     │  ├─ AbstractSessionHandler.php
│  │  │  │     │  ├─ IdentityMarshaller.php
│  │  │  │     │  ├─ MarshallingSessionHandler.php
│  │  │  │     │  ├─ MemcachedSessionHandler.php
│  │  │  │     │  ├─ MigratingSessionHandler.php
│  │  │  │     │  ├─ MongoDbSessionHandler.php
│  │  │  │     │  ├─ NativeFileSessionHandler.php
│  │  │  │     │  ├─ NullSessionHandler.php
│  │  │  │     │  ├─ PdoSessionHandler.php
│  │  │  │     │  ├─ RedisSessionHandler.php
│  │  │  │     │  ├─ SessionHandlerFactory.php
│  │  │  │     │  └─ StrictSessionHandler.php
│  │  │  │     ├─ MetadataBag.php
│  │  │  │     ├─ MockArraySessionStorage.php
│  │  │  │     ├─ MockFileSessionStorage.php
│  │  │  │     ├─ MockFileSessionStorageFactory.php
│  │  │  │     ├─ NativeSessionStorage.php
│  │  │  │     ├─ NativeSessionStorageFactory.php
│  │  │  │     ├─ PhpBridgeSessionStorage.php
│  │  │  │     ├─ PhpBridgeSessionStorageFactory.php
│  │  │  │     ├─ Proxy
│  │  │  │     │  ├─ AbstractProxy.php
│  │  │  │     │  └─ SessionHandlerProxy.php
│  │  │  │     ├─ SessionStorageFactoryInterface.php
│  │  │  │     └─ SessionStorageInterface.php
│  │  │  ├─ StreamedJsonResponse.php
│  │  │  ├─ StreamedResponse.php
│  │  │  ├─ Test
│  │  │  │  └─ Constraint
│  │  │  │     ├─ RequestAttributeValueSame.php
│  │  │  │     ├─ ResponseCookieValueSame.php
│  │  │  │     ├─ ResponseFormatSame.php
│  │  │  │     ├─ ResponseHasCookie.php
│  │  │  │     ├─ ResponseHasHeader.php
│  │  │  │     ├─ ResponseHeaderLocationSame.php
│  │  │  │     ├─ ResponseHeaderSame.php
│  │  │  │     ├─ ResponseIsRedirected.php
│  │  │  │     ├─ ResponseIsSuccessful.php
│  │  │  │     ├─ ResponseIsUnprocessable.php
│  │  │  │     └─ ResponseStatusCodeSame.php
│  │  │  ├─ UriSigner.php
│  │  │  └─ UrlHelper.php
│  │  ├─ http-kernel
│  │  │  ├─ Attribute
│  │  │  │  ├─ AsController.php
│  │  │  │  ├─ AsTargetedValueResolver.php
│  │  │  │  ├─ Cache.php
│  │  │  │  ├─ MapDateTime.php
│  │  │  │  ├─ MapQueryParameter.php
│  │  │  │  ├─ MapQueryString.php
│  │  │  │  ├─ MapRequestPayload.php
│  │  │  │  ├─ MapUploadedFile.php
│  │  │  │  ├─ ValueResolver.php
│  │  │  │  ├─ WithHttpStatus.php
│  │  │  │  └─ WithLogLevel.php
│  │  │  ├─ Bundle
│  │  │  │  ├─ AbstractBundle.php
│  │  │  │  ├─ Bundle.php
│  │  │  │  ├─ BundleExtension.php
│  │  │  │  └─ BundleInterface.php
│  │  │  ├─ CacheClearer
│  │  │  │  ├─ CacheClearerInterface.php
│  │  │  │  ├─ ChainCacheClearer.php
│  │  │  │  └─ Psr6CacheClearer.php
│  │  │  ├─ CacheWarmer
│  │  │  │  ├─ CacheWarmer.php
│  │  │  │  ├─ CacheWarmerAggregate.php
│  │  │  │  ├─ CacheWarmerInterface.php
│  │  │  │  └─ WarmableInterface.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ composer.json
│  │  │  ├─ Config
│  │  │  │  └─ FileLocator.php
│  │  │  ├─ Controller
│  │  │  │  ├─ ArgumentResolver
│  │  │  │  │  ├─ BackedEnumValueResolver.php
│  │  │  │  │  ├─ DateTimeValueResolver.php
│  │  │  │  │  ├─ DefaultValueResolver.php
│  │  │  │  │  ├─ NotTaggedControllerValueResolver.php
│  │  │  │  │  ├─ QueryParameterValueResolver.php
│  │  │  │  │  ├─ RequestAttributeValueResolver.php
│  │  │  │  │  ├─ RequestPayloadValueResolver.php
│  │  │  │  │  ├─ RequestValueResolver.php
│  │  │  │  │  ├─ ServiceValueResolver.php
│  │  │  │  │  ├─ SessionValueResolver.php
│  │  │  │  │  ├─ TraceableValueResolver.php
│  │  │  │  │  ├─ UidValueResolver.php
│  │  │  │  │  └─ VariadicValueResolver.php
│  │  │  │  ├─ ArgumentResolver.php
│  │  │  │  ├─ ArgumentResolverInterface.php
│  │  │  │  ├─ ContainerControllerResolver.php
│  │  │  │  ├─ ControllerReference.php
│  │  │  │  ├─ ControllerResolver.php
│  │  │  │  ├─ ControllerResolverInterface.php
│  │  │  │  ├─ ErrorController.php
│  │  │  │  ├─ TraceableArgumentResolver.php
│  │  │  │  ├─ TraceableControllerResolver.php
│  │  │  │  └─ ValueResolverInterface.php
│  │  │  ├─ ControllerMetadata
│  │  │  │  ├─ ArgumentMetadata.php
│  │  │  │  ├─ ArgumentMetadataFactory.php
│  │  │  │  └─ ArgumentMetadataFactoryInterface.php
│  │  │  ├─ DataCollector
│  │  │  │  ├─ AjaxDataCollector.php
│  │  │  │  ├─ ConfigDataCollector.php
│  │  │  │  ├─ DataCollector.php
│  │  │  │  ├─ DataCollectorInterface.php
│  │  │  │  ├─ DumpDataCollector.php
│  │  │  │  ├─ EventDataCollector.php
│  │  │  │  ├─ ExceptionDataCollector.php
│  │  │  │  ├─ LateDataCollectorInterface.php
│  │  │  │  ├─ LoggerDataCollector.php
│  │  │  │  ├─ MemoryDataCollector.php
│  │  │  │  ├─ RequestDataCollector.php
│  │  │  │  ├─ RouterDataCollector.php
│  │  │  │  └─ TimeDataCollector.php
│  │  │  ├─ Debug
│  │  │  │  ├─ ErrorHandlerConfigurator.php
│  │  │  │  ├─ TraceableEventDispatcher.php
│  │  │  │  └─ VirtualRequestStack.php
│  │  │  ├─ DependencyInjection
│  │  │  │  ├─ AddAnnotatedClassesToCachePass.php
│  │  │  │  ├─ ConfigurableExtension.php
│  │  │  │  ├─ ControllerArgumentValueResolverPass.php
│  │  │  │  ├─ Extension.php
│  │  │  │  ├─ FragmentRendererPass.php
│  │  │  │  ├─ LazyLoadingFragmentHandler.php
│  │  │  │  ├─ LoggerPass.php
│  │  │  │  ├─ MergeExtensionConfigurationPass.php
│  │  │  │  ├─ RegisterControllerArgumentLocatorsPass.php
│  │  │  │  ├─ RegisterLocaleAwareServicesPass.php
│  │  │  │  ├─ RemoveEmptyControllerArgumentLocatorsPass.php
│  │  │  │  ├─ ResettableServicePass.php
│  │  │  │  ├─ ServicesResetter.php
│  │  │  │  └─ ServicesResetterInterface.php
│  │  │  ├─ Event
│  │  │  │  ├─ ControllerArgumentsEvent.php
│  │  │  │  ├─ ControllerEvent.php
│  │  │  │  ├─ ExceptionEvent.php
│  │  │  │  ├─ FinishRequestEvent.php
│  │  │  │  ├─ KernelEvent.php
│  │  │  │  ├─ RequestEvent.php
│  │  │  │  ├─ ResponseEvent.php
│  │  │  │  ├─ TerminateEvent.php
│  │  │  │  └─ ViewEvent.php
│  │  │  ├─ EventListener
│  │  │  │  ├─ AbstractSessionListener.php
│  │  │  │  ├─ AddRequestFormatsListener.php
│  │  │  │  ├─ CacheAttributeListener.php
│  │  │  │  ├─ DebugHandlersListener.php
│  │  │  │  ├─ DisallowRobotsIndexingListener.php
│  │  │  │  ├─ DumpListener.php
│  │  │  │  ├─ ErrorListener.php
│  │  │  │  ├─ FragmentListener.php
│  │  │  │  ├─ LocaleAwareListener.php
│  │  │  │  ├─ LocaleListener.php
│  │  │  │  ├─ ProfilerListener.php
│  │  │  │  ├─ ResponseListener.php
│  │  │  │  ├─ RouterListener.php
│  │  │  │  ├─ SessionListener.php
│  │  │  │  ├─ SurrogateListener.php
│  │  │  │  └─ ValidateRequestListener.php
│  │  │  ├─ Exception
│  │  │  │  ├─ AccessDeniedHttpException.php
│  │  │  │  ├─ BadRequestHttpException.php
│  │  │  │  ├─ ConflictHttpException.php
│  │  │  │  ├─ ControllerDoesNotReturnResponseException.php
│  │  │  │  ├─ GoneHttpException.php
│  │  │  │  ├─ HttpException.php
│  │  │  │  ├─ HttpExceptionInterface.php
│  │  │  │  ├─ InvalidMetadataException.php
│  │  │  │  ├─ LengthRequiredHttpException.php
│  │  │  │  ├─ LockedHttpException.php
│  │  │  │  ├─ MethodNotAllowedHttpException.php
│  │  │  │  ├─ NearMissValueResolverException.php
│  │  │  │  ├─ NotAcceptableHttpException.php
│  │  │  │  ├─ NotFoundHttpException.php
│  │  │  │  ├─ PreconditionFailedHttpException.php
│  │  │  │  ├─ PreconditionRequiredHttpException.php
│  │  │  │  ├─ ResolverNotFoundException.php
│  │  │  │  ├─ ServiceUnavailableHttpException.php
│  │  │  │  ├─ TooManyRequestsHttpException.php
│  │  │  │  ├─ UnauthorizedHttpException.php
│  │  │  │  ├─ UnexpectedSessionUsageException.php
│  │  │  │  ├─ UnprocessableEntityHttpException.php
│  │  │  │  └─ UnsupportedMediaTypeHttpException.php
│  │  │  ├─ Fragment
│  │  │  │  ├─ AbstractSurrogateFragmentRenderer.php
│  │  │  │  ├─ EsiFragmentRenderer.php
│  │  │  │  ├─ FragmentHandler.php
│  │  │  │  ├─ FragmentRendererInterface.php
│  │  │  │  ├─ FragmentUriGenerator.php
│  │  │  │  ├─ FragmentUriGeneratorInterface.php
│  │  │  │  ├─ HIncludeFragmentRenderer.php
│  │  │  │  ├─ InlineFragmentRenderer.php
│  │  │  │  ├─ RoutableFragmentRenderer.php
│  │  │  │  └─ SsiFragmentRenderer.php
│  │  │  ├─ HttpCache
│  │  │  │  ├─ AbstractSurrogate.php
│  │  │  │  ├─ CacheWasLockedException.php
│  │  │  │  ├─ Esi.php
│  │  │  │  ├─ HttpCache.php
│  │  │  │  ├─ ResponseCacheStrategy.php
│  │  │  │  ├─ ResponseCacheStrategyInterface.php
│  │  │  │  ├─ Ssi.php
│  │  │  │  ├─ Store.php
│  │  │  │  ├─ StoreInterface.php
│  │  │  │  ├─ SubRequestHandler.php
│  │  │  │  └─ SurrogateInterface.php
│  │  │  ├─ HttpClientKernel.php
│  │  │  ├─ HttpKernel.php
│  │  │  ├─ HttpKernelBrowser.php
│  │  │  ├─ HttpKernelInterface.php
│  │  │  ├─ Kernel.php
│  │  │  ├─ KernelEvents.php
│  │  │  ├─ KernelInterface.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Log
│  │  │  │  ├─ DebugLoggerConfigurator.php
│  │  │  │  ├─ DebugLoggerInterface.php
│  │  │  │  └─ Logger.php
│  │  │  ├─ Profiler
│  │  │  │  ├─ FileProfilerStorage.php
│  │  │  │  ├─ Profile.php
│  │  │  │  ├─ Profiler.php
│  │  │  │  ├─ ProfilerStateChecker.php
│  │  │  │  └─ ProfilerStorageInterface.php
│  │  │  ├─ README.md
│  │  │  ├─ RebootableInterface.php
│  │  │  ├─ Resources
│  │  │  │  └─ welcome.html.php
│  │  │  └─ TerminableInterface.php
│  │  ├─ mailer
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Command
│  │  │  │  └─ MailerTestCommand.php
│  │  │  ├─ composer.json
│  │  │  ├─ DataCollector
│  │  │  │  └─ MessageDataCollector.php
│  │  │  ├─ DelayedEnvelope.php
│  │  │  ├─ Envelope.php
│  │  │  ├─ Event
│  │  │  │  ├─ FailedMessageEvent.php
│  │  │  │  ├─ MessageEvent.php
│  │  │  │  ├─ MessageEvents.php
│  │  │  │  └─ SentMessageEvent.php
│  │  │  ├─ EventListener
│  │  │  │  ├─ DkimSignedMessageListener.php
│  │  │  │  ├─ EnvelopeListener.php
│  │  │  │  ├─ MessageListener.php
│  │  │  │  ├─ MessageLoggerListener.php
│  │  │  │  ├─ MessengerTransportListener.php
│  │  │  │  ├─ SmimeCertificateRepositoryInterface.php
│  │  │  │  ├─ SmimeEncryptedMessageListener.php
│  │  │  │  └─ SmimeSignedMessageListener.php
│  │  │  ├─ Exception
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ HttpTransportException.php
│  │  │  │  ├─ IncompleteDsnException.php
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  ├─ LogicException.php
│  │  │  │  ├─ RuntimeException.php
│  │  │  │  ├─ TransportException.php
│  │  │  │  ├─ TransportExceptionInterface.php
│  │  │  │  ├─ UnexpectedResponseException.php
│  │  │  │  └─ UnsupportedSchemeException.php
│  │  │  ├─ Header
│  │  │  │  ├─ MetadataHeader.php
│  │  │  │  └─ TagHeader.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Mailer.php
│  │  │  ├─ MailerInterface.php
│  │  │  ├─ Messenger
│  │  │  │  ├─ MessageHandler.php
│  │  │  │  └─ SendEmailMessage.php
│  │  │  ├─ README.md
│  │  │  ├─ SentMessage.php
│  │  │  ├─ Test
│  │  │  │  ├─ AbstractTransportFactoryTestCase.php
│  │  │  │  ├─ Constraint
│  │  │  │  │  ├─ EmailCount.php
│  │  │  │  │  └─ EmailIsQueued.php
│  │  │  │  ├─ IncompleteDsnTestTrait.php
│  │  │  │  └─ TransportFactoryTestCase.php
│  │  │  ├─ Transport
│  │  │  │  ├─ AbstractApiTransport.php
│  │  │  │  ├─ AbstractHttpTransport.php
│  │  │  │  ├─ AbstractTransport.php
│  │  │  │  ├─ AbstractTransportFactory.php
│  │  │  │  ├─ Dsn.php
│  │  │  │  ├─ FailoverTransport.php
│  │  │  │  ├─ NativeTransportFactory.php
│  │  │  │  ├─ NullTransport.php
│  │  │  │  ├─ NullTransportFactory.php
│  │  │  │  ├─ RoundRobinTransport.php
│  │  │  │  ├─ SendmailTransport.php
│  │  │  │  ├─ SendmailTransportFactory.php
│  │  │  │  ├─ Smtp
│  │  │  │  │  ├─ Auth
│  │  │  │  │  │  ├─ AuthenticatorInterface.php
│  │  │  │  │  │  ├─ CramMd5Authenticator.php
│  │  │  │  │  │  ├─ LoginAuthenticator.php
│  │  │  │  │  │  ├─ PlainAuthenticator.php
│  │  │  │  │  │  └─ XOAuth2Authenticator.php
│  │  │  │  │  ├─ EsmtpTransport.php
│  │  │  │  │  ├─ EsmtpTransportFactory.php
│  │  │  │  │  ├─ SmtpTransport.php
│  │  │  │  │  └─ Stream
│  │  │  │  │     ├─ AbstractStream.php
│  │  │  │  │     ├─ ProcessStream.php
│  │  │  │  │     └─ SocketStream.php
│  │  │  │  ├─ TransportFactoryInterface.php
│  │  │  │  ├─ TransportInterface.php
│  │  │  │  └─ Transports.php
│  │  │  └─ Transport.php
│  │  ├─ mime
│  │  │  ├─ Address.php
│  │  │  ├─ BodyRendererInterface.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ CharacterStream.php
│  │  │  ├─ composer.json
│  │  │  ├─ Crypto
│  │  │  │  ├─ DkimOptions.php
│  │  │  │  ├─ DkimSigner.php
│  │  │  │  ├─ SMime.php
│  │  │  │  ├─ SMimeEncrypter.php
│  │  │  │  └─ SMimeSigner.php
│  │  │  ├─ DependencyInjection
│  │  │  │  └─ AddMimeTypeGuesserPass.php
│  │  │  ├─ DraftEmail.php
│  │  │  ├─ Email.php
│  │  │  ├─ Encoder
│  │  │  │  ├─ AddressEncoderInterface.php
│  │  │  │  ├─ Base64ContentEncoder.php
│  │  │  │  ├─ Base64Encoder.php
│  │  │  │  ├─ Base64MimeHeaderEncoder.php
│  │  │  │  ├─ ContentEncoderInterface.php
│  │  │  │  ├─ EightBitContentEncoder.php
│  │  │  │  ├─ EncoderInterface.php
│  │  │  │  ├─ IdnAddressEncoder.php
│  │  │  │  ├─ MimeHeaderEncoderInterface.php
│  │  │  │  ├─ QpContentEncoder.php
│  │  │  │  ├─ QpEncoder.php
│  │  │  │  ├─ QpMimeHeaderEncoder.php
│  │  │  │  └─ Rfc2231Encoder.php
│  │  │  ├─ Exception
│  │  │  │  ├─ AddressEncoderException.php
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  ├─ LogicException.php
│  │  │  │  ├─ RfcComplianceException.php
│  │  │  │  └─ RuntimeException.php
│  │  │  ├─ FileBinaryMimeTypeGuesser.php
│  │  │  ├─ FileinfoMimeTypeGuesser.php
│  │  │  ├─ Header
│  │  │  │  ├─ AbstractHeader.php
│  │  │  │  ├─ DateHeader.php
│  │  │  │  ├─ HeaderInterface.php
│  │  │  │  ├─ Headers.php
│  │  │  │  ├─ IdentificationHeader.php
│  │  │  │  ├─ MailboxHeader.php
│  │  │  │  ├─ MailboxListHeader.php
│  │  │  │  ├─ ParameterizedHeader.php
│  │  │  │  ├─ PathHeader.php
│  │  │  │  └─ UnstructuredHeader.php
│  │  │  ├─ HtmlToTextConverter
│  │  │  │  ├─ DefaultHtmlToTextConverter.php
│  │  │  │  ├─ HtmlToTextConverterInterface.php
│  │  │  │  └─ LeagueHtmlToMarkdownConverter.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Message.php
│  │  │  ├─ MessageConverter.php
│  │  │  ├─ MimeTypeGuesserInterface.php
│  │  │  ├─ MimeTypes.php
│  │  │  ├─ MimeTypesInterface.php
│  │  │  ├─ Part
│  │  │  │  ├─ AbstractMultipartPart.php
│  │  │  │  ├─ AbstractPart.php
│  │  │  │  ├─ DataPart.php
│  │  │  │  ├─ File.php
│  │  │  │  ├─ MessagePart.php
│  │  │  │  ├─ Multipart
│  │  │  │  │  ├─ AlternativePart.php
│  │  │  │  │  ├─ DigestPart.php
│  │  │  │  │  ├─ FormDataPart.php
│  │  │  │  │  ├─ MixedPart.php
│  │  │  │  │  └─ RelatedPart.php
│  │  │  │  ├─ SMimePart.php
│  │  │  │  └─ TextPart.php
│  │  │  ├─ RawMessage.php
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  └─ bin
│  │  │  └─ Test
│  │  │     └─ Constraint
│  │  │        ├─ EmailAddressContains.php
│  │  │        ├─ EmailAttachmentCount.php
│  │  │        ├─ EmailHasHeader.php
│  │  │        ├─ EmailHeaderSame.php
│  │  │        ├─ EmailHtmlBodyContains.php
│  │  │        ├─ EmailSubjectContains.php
│  │  │        └─ EmailTextBodyContains.php
│  │  ├─ polyfill-ctype
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap80.php
│  │  │  ├─ composer.json
│  │  │  ├─ Ctype.php
│  │  │  ├─ LICENSE
│  │  │  └─ README.md
│  │  ├─ polyfill-intl-grapheme
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap80.php
│  │  │  ├─ composer.json
│  │  │  ├─ Grapheme.php
│  │  │  ├─ LICENSE
│  │  │  └─ README.md
│  │  ├─ polyfill-intl-idn
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap80.php
│  │  │  ├─ composer.json
│  │  │  ├─ Idn.php
│  │  │  ├─ Info.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ Resources
│  │  │     └─ unidata
│  │  │        ├─ deviation.php
│  │  │        ├─ disallowed.php
│  │  │        ├─ DisallowedRanges.php
│  │  │        ├─ disallowed_STD3_mapped.php
│  │  │        ├─ disallowed_STD3_valid.php
│  │  │        ├─ ignored.php
│  │  │        ├─ mapped.php
│  │  │        ├─ Regex.php
│  │  │        └─ virama.php
│  │  ├─ polyfill-intl-normalizer
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap80.php
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ Normalizer.php
│  │  │  ├─ README.md
│  │  │  └─ Resources
│  │  │     ├─ stubs
│  │  │     │  └─ Normalizer.php
│  │  │     └─ unidata
│  │  │        ├─ canonicalComposition.php
│  │  │        ├─ canonicalDecomposition.php
│  │  │        ├─ combiningClass.php
│  │  │        └─ compatibilityDecomposition.php
│  │  ├─ polyfill-mbstring
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap80.php
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ Mbstring.php
│  │  │  ├─ README.md
│  │  │  └─ Resources
│  │  │     └─ unidata
│  │  │        ├─ caseFolding.php
│  │  │        ├─ lowerCase.php
│  │  │        ├─ titleCaseRegexp.php
│  │  │        └─ upperCase.php
│  │  ├─ polyfill-php80
│  │  │  ├─ bootstrap.php
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ Php80.php
│  │  │  ├─ PhpToken.php
│  │  │  ├─ README.md
│  │  │  └─ Resources
│  │  │     └─ stubs
│  │  │        ├─ Attribute.php
│  │  │        ├─ PhpToken.php
│  │  │        ├─ Stringable.php
│  │  │        ├─ UnhandledMatchError.php
│  │  │        └─ ValueError.php
│  │  ├─ polyfill-php83
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap81.php
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ Php83.php
│  │  │  ├─ README.md
│  │  │  └─ Resources
│  │  │     └─ stubs
│  │  │        ├─ DateError.php
│  │  │        ├─ DateException.php
│  │  │        ├─ DateInvalidOperationException.php
│  │  │        ├─ DateInvalidTimeZoneException.php
│  │  │        ├─ DateMalformedIntervalStringException.php
│  │  │        ├─ DateMalformedPeriodStringException.php
│  │  │        ├─ DateMalformedStringException.php
│  │  │        ├─ DateObjectError.php
│  │  │        ├─ DateRangeError.php
│  │  │        ├─ Override.php
│  │  │        └─ SQLite3Exception.php
│  │  ├─ polyfill-php84
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap82.php
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ Php84.php
│  │  │  ├─ README.md
│  │  │  └─ Resources
│  │  │     └─ stubs
│  │  │        ├─ Deprecated.php
│  │  │        └─ ReflectionConstant.php
│  │  ├─ polyfill-php85
│  │  │  ├─ bootstrap.php
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ Php85.php
│  │  │  ├─ README.md
│  │  │  └─ Resources
│  │  │     └─ stubs
│  │  │        └─ NoDiscard.php
│  │  ├─ polyfill-uuid
│  │  │  ├─ bootstrap.php
│  │  │  ├─ bootstrap80.php
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  └─ Uuid.php
│  │  ├─ process
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ composer.json
│  │  │  ├─ Exception
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  ├─ LogicException.php
│  │  │  │  ├─ ProcessFailedException.php
│  │  │  │  ├─ ProcessSignaledException.php
│  │  │  │  ├─ ProcessStartFailedException.php
│  │  │  │  ├─ ProcessTimedOutException.php
│  │  │  │  ├─ RunProcessFailedException.php
│  │  │  │  └─ RuntimeException.php
│  │  │  ├─ ExecutableFinder.php
│  │  │  ├─ InputStream.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Messenger
│  │  │  │  ├─ RunProcessContext.php
│  │  │  │  ├─ RunProcessMessage.php
│  │  │  │  └─ RunProcessMessageHandler.php
│  │  │  ├─ PhpExecutableFinder.php
│  │  │  ├─ PhpProcess.php
│  │  │  ├─ PhpSubprocess.php
│  │  │  ├─ Pipes
│  │  │  │  ├─ AbstractPipes.php
│  │  │  │  ├─ PipesInterface.php
│  │  │  │  ├─ UnixPipes.php
│  │  │  │  └─ WindowsPipes.php
│  │  │  ├─ Process.php
│  │  │  ├─ ProcessUtils.php
│  │  │  └─ README.md
│  │  ├─ psr-http-message-bridge
│  │  │  ├─ ArgumentValueResolver
│  │  │  │  └─ PsrServerRequestResolver.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ composer.json
│  │  │  ├─ EventListener
│  │  │  │  └─ PsrResponseListener.php
│  │  │  ├─ Factory
│  │  │  │  ├─ HttpFoundationFactory.php
│  │  │  │  ├─ PsrHttpFactory.php
│  │  │  │  └─ UploadedFile.php
│  │  │  ├─ HttpFoundationFactoryInterface.php
│  │  │  ├─ HttpMessageFactoryInterface.php
│  │  │  ├─ LICENSE
│  │  │  └─ README.md
│  │  ├─ routing
│  │  │  ├─ Alias.php
│  │  │  ├─ Annotation
│  │  │  │  └─ Route.php
│  │  │  ├─ Attribute
│  │  │  │  ├─ DeprecatedAlias.php
│  │  │  │  └─ Route.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ CompiledRoute.php
│  │  │  ├─ composer.json
│  │  │  ├─ DependencyInjection
│  │  │  │  ├─ AddExpressionLanguageProvidersPass.php
│  │  │  │  └─ RoutingResolverPass.php
│  │  │  ├─ Exception
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  ├─ InvalidParameterException.php
│  │  │  │  ├─ LogicException.php
│  │  │  │  ├─ MethodNotAllowedException.php
│  │  │  │  ├─ MissingMandatoryParametersException.php
│  │  │  │  ├─ NoConfigurationException.php
│  │  │  │  ├─ ResourceNotFoundException.php
│  │  │  │  ├─ RouteCircularReferenceException.php
│  │  │  │  ├─ RouteNotFoundException.php
│  │  │  │  └─ RuntimeException.php
│  │  │  ├─ Generator
│  │  │  │  ├─ CompiledUrlGenerator.php
│  │  │  │  ├─ ConfigurableRequirementsInterface.php
│  │  │  │  ├─ Dumper
│  │  │  │  │  ├─ CompiledUrlGeneratorDumper.php
│  │  │  │  │  ├─ GeneratorDumper.php
│  │  │  │  │  └─ GeneratorDumperInterface.php
│  │  │  │  ├─ UrlGenerator.php
│  │  │  │  └─ UrlGeneratorInterface.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Loader
│  │  │  │  ├─ AttributeClassLoader.php
│  │  │  │  ├─ AttributeDirectoryLoader.php
│  │  │  │  ├─ AttributeFileLoader.php
│  │  │  │  ├─ ClosureLoader.php
│  │  │  │  ├─ Configurator
│  │  │  │  │  ├─ AliasConfigurator.php
│  │  │  │  │  ├─ CollectionConfigurator.php
│  │  │  │  │  ├─ ImportConfigurator.php
│  │  │  │  │  ├─ RouteConfigurator.php
│  │  │  │  │  ├─ RoutingConfigurator.php
│  │  │  │  │  └─ Traits
│  │  │  │  │     ├─ AddTrait.php
│  │  │  │  │     ├─ HostTrait.php
│  │  │  │  │     ├─ LocalizedRouteTrait.php
│  │  │  │  │     ├─ PrefixTrait.php
│  │  │  │  │     └─ RouteTrait.php
│  │  │  │  ├─ ContainerLoader.php
│  │  │  │  ├─ DirectoryLoader.php
│  │  │  │  ├─ GlobFileLoader.php
│  │  │  │  ├─ ObjectLoader.php
│  │  │  │  ├─ PhpFileLoader.php
│  │  │  │  ├─ Psr4DirectoryLoader.php
│  │  │  │  ├─ schema
│  │  │  │  │  └─ routing
│  │  │  │  │     └─ routing-1.0.xsd
│  │  │  │  ├─ XmlFileLoader.php
│  │  │  │  └─ YamlFileLoader.php
│  │  │  ├─ Matcher
│  │  │  │  ├─ CompiledUrlMatcher.php
│  │  │  │  ├─ Dumper
│  │  │  │  │  ├─ CompiledUrlMatcherDumper.php
│  │  │  │  │  ├─ CompiledUrlMatcherTrait.php
│  │  │  │  │  ├─ MatcherDumper.php
│  │  │  │  │  ├─ MatcherDumperInterface.php
│  │  │  │  │  └─ StaticPrefixCollection.php
│  │  │  │  ├─ ExpressionLanguageProvider.php
│  │  │  │  ├─ RedirectableUrlMatcher.php
│  │  │  │  ├─ RedirectableUrlMatcherInterface.php
│  │  │  │  ├─ RequestMatcherInterface.php
│  │  │  │  ├─ TraceableUrlMatcher.php
│  │  │  │  ├─ UrlMatcher.php
│  │  │  │  └─ UrlMatcherInterface.php
│  │  │  ├─ README.md
│  │  │  ├─ RequestContext.php
│  │  │  ├─ RequestContextAwareInterface.php
│  │  │  ├─ Requirement
│  │  │  │  ├─ EnumRequirement.php
│  │  │  │  └─ Requirement.php
│  │  │  ├─ Route.php
│  │  │  ├─ RouteCollection.php
│  │  │  ├─ RouteCompiler.php
│  │  │  ├─ RouteCompilerInterface.php
│  │  │  ├─ Router.php
│  │  │  └─ RouterInterface.php
│  │  ├─ service-contracts
│  │  │  ├─ Attribute
│  │  │  │  ├─ Required.php
│  │  │  │  └─ SubscribedService.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ ResetInterface.php
│  │  │  ├─ ServiceCollectionInterface.php
│  │  │  ├─ ServiceLocatorTrait.php
│  │  │  ├─ ServiceMethodsSubscriberTrait.php
│  │  │  ├─ ServiceProviderInterface.php
│  │  │  ├─ ServiceSubscriberInterface.php
│  │  │  ├─ ServiceSubscriberTrait.php
│  │  │  └─ Test
│  │  │     ├─ ServiceLocatorTest.php
│  │  │     └─ ServiceLocatorTestCase.php
│  │  ├─ string
│  │  │  ├─ AbstractString.php
│  │  │  ├─ AbstractUnicodeString.php
│  │  │  ├─ ByteString.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ CodePointString.php
│  │  │  ├─ composer.json
│  │  │  ├─ Exception
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  └─ RuntimeException.php
│  │  │  ├─ Inflector
│  │  │  │  ├─ EnglishInflector.php
│  │  │  │  ├─ FrenchInflector.php
│  │  │  │  ├─ InflectorInterface.php
│  │  │  │  └─ SpanishInflector.php
│  │  │  ├─ LazyString.php
│  │  │  ├─ LICENSE
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  ├─ bin
│  │  │  │  ├─ data
│  │  │  │  │  ├─ wcswidth_table_wide.php
│  │  │  │  │  └─ wcswidth_table_zero.php
│  │  │  │  └─ functions.php
│  │  │  ├─ Slugger
│  │  │  │  ├─ AsciiSlugger.php
│  │  │  │  └─ SluggerInterface.php
│  │  │  ├─ TruncateMode.php
│  │  │  └─ UnicodeString.php
│  │  ├─ translation
│  │  │  ├─ Catalogue
│  │  │  │  ├─ AbstractOperation.php
│  │  │  │  ├─ MergeOperation.php
│  │  │  │  ├─ OperationInterface.php
│  │  │  │  └─ TargetOperation.php
│  │  │  ├─ CatalogueMetadataAwareInterface.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Command
│  │  │  │  ├─ TranslationLintCommand.php
│  │  │  │  ├─ TranslationPullCommand.php
│  │  │  │  ├─ TranslationPushCommand.php
│  │  │  │  ├─ TranslationTrait.php
│  │  │  │  └─ XliffLintCommand.php
│  │  │  ├─ composer.json
│  │  │  ├─ DataCollector
│  │  │  │  └─ TranslationDataCollector.php
│  │  │  ├─ DataCollectorTranslator.php
│  │  │  ├─ DependencyInjection
│  │  │  │  ├─ DataCollectorTranslatorPass.php
│  │  │  │  ├─ LoggingTranslatorPass.php
│  │  │  │  ├─ TranslationDumperPass.php
│  │  │  │  ├─ TranslationExtractorPass.php
│  │  │  │  ├─ TranslatorPass.php
│  │  │  │  └─ TranslatorPathsPass.php
│  │  │  ├─ Dumper
│  │  │  │  ├─ CsvFileDumper.php
│  │  │  │  ├─ DumperInterface.php
│  │  │  │  ├─ FileDumper.php
│  │  │  │  ├─ IcuResFileDumper.php
│  │  │  │  ├─ IniFileDumper.php
│  │  │  │  ├─ JsonFileDumper.php
│  │  │  │  ├─ MoFileDumper.php
│  │  │  │  ├─ PhpFileDumper.php
│  │  │  │  ├─ PoFileDumper.php
│  │  │  │  ├─ QtFileDumper.php
│  │  │  │  ├─ XliffFileDumper.php
│  │  │  │  └─ YamlFileDumper.php
│  │  │  ├─ Exception
│  │  │  │  ├─ ExceptionInterface.php
│  │  │  │  ├─ IncompleteDsnException.php
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  ├─ InvalidResourceException.php
│  │  │  │  ├─ LogicException.php
│  │  │  │  ├─ MissingRequiredOptionException.php
│  │  │  │  ├─ NotFoundResourceException.php
│  │  │  │  ├─ ProviderException.php
│  │  │  │  ├─ ProviderExceptionInterface.php
│  │  │  │  ├─ RuntimeException.php
│  │  │  │  └─ UnsupportedSchemeException.php
│  │  │  ├─ Extractor
│  │  │  │  ├─ AbstractFileExtractor.php
│  │  │  │  ├─ ChainExtractor.php
│  │  │  │  ├─ ExtractorInterface.php
│  │  │  │  ├─ PhpAstExtractor.php
│  │  │  │  └─ Visitor
│  │  │  │     ├─ AbstractVisitor.php
│  │  │  │     ├─ ConstraintVisitor.php
│  │  │  │     ├─ TranslatableMessageVisitor.php
│  │  │  │     └─ TransMethodVisitor.php
│  │  │  ├─ Formatter
│  │  │  │  ├─ IntlFormatter.php
│  │  │  │  ├─ IntlFormatterInterface.php
│  │  │  │  ├─ MessageFormatter.php
│  │  │  │  └─ MessageFormatterInterface.php
│  │  │  ├─ IdentityTranslator.php
│  │  │  ├─ LICENSE
│  │  │  ├─ Loader
│  │  │  │  ├─ ArrayLoader.php
│  │  │  │  ├─ CsvFileLoader.php
│  │  │  │  ├─ FileLoader.php
│  │  │  │  ├─ IcuDatFileLoader.php
│  │  │  │  ├─ IcuResFileLoader.php
│  │  │  │  ├─ IniFileLoader.php
│  │  │  │  ├─ JsonFileLoader.php
│  │  │  │  ├─ LoaderInterface.php
│  │  │  │  ├─ MoFileLoader.php
│  │  │  │  ├─ PhpFileLoader.php
│  │  │  │  ├─ PoFileLoader.php
│  │  │  │  ├─ QtFileLoader.php
│  │  │  │  ├─ XliffFileLoader.php
│  │  │  │  └─ YamlFileLoader.php
│  │  │  ├─ LocaleSwitcher.php
│  │  │  ├─ LoggingTranslator.php
│  │  │  ├─ MessageCatalogue.php
│  │  │  ├─ MessageCatalogueInterface.php
│  │  │  ├─ MetadataAwareInterface.php
│  │  │  ├─ Provider
│  │  │  │  ├─ AbstractProviderFactory.php
│  │  │  │  ├─ Dsn.php
│  │  │  │  ├─ FilteringProvider.php
│  │  │  │  ├─ NullProvider.php
│  │  │  │  ├─ NullProviderFactory.php
│  │  │  │  ├─ ProviderFactoryInterface.php
│  │  │  │  ├─ ProviderInterface.php
│  │  │  │  ├─ TranslationProviderCollection.php
│  │  │  │  └─ TranslationProviderCollectionFactory.php
│  │  │  ├─ PseudoLocalizationTranslator.php
│  │  │  ├─ Reader
│  │  │  │  ├─ TranslationReader.php
│  │  │  │  └─ TranslationReaderInterface.php
│  │  │  ├─ README.md
│  │  │  ├─ Resources
│  │  │  │  ├─ bin
│  │  │  │  │  └─ translation-status.php
│  │  │  │  ├─ data
│  │  │  │  │  └─ parents.json
│  │  │  │  ├─ functions.php
│  │  │  │  └─ schemas
│  │  │  │     ├─ xliff-core-1.2-transitional.xsd
│  │  │  │     ├─ xliff-core-2.0.xsd
│  │  │  │     └─ xml.xsd
│  │  │  ├─ Test
│  │  │  │  ├─ AbstractProviderFactoryTestCase.php
│  │  │  │  ├─ IncompleteDsnTestTrait.php
│  │  │  │  ├─ ProviderFactoryTestCase.php
│  │  │  │  └─ ProviderTestCase.php
│  │  │  ├─ TranslatableMessage.php
│  │  │  ├─ Translator.php
│  │  │  ├─ TranslatorBag.php
│  │  │  ├─ TranslatorBagInterface.php
│  │  │  ├─ Util
│  │  │  │  ├─ ArrayConverter.php
│  │  │  │  └─ XliffUtils.php
│  │  │  └─ Writer
│  │  │     ├─ TranslationWriter.php
│  │  │     └─ TranslationWriterInterface.php
│  │  ├─ translation-contracts
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ composer.json
│  │  │  ├─ LICENSE
│  │  │  ├─ LocaleAwareInterface.php
│  │  │  ├─ README.md
│  │  │  ├─ Test
│  │  │  │  └─ TranslatorTest.php
│  │  │  ├─ TranslatableInterface.php
│  │  │  ├─ TranslatorInterface.php
│  │  │  └─ TranslatorTrait.php
│  │  ├─ uid
│  │  │  ├─ AbstractUid.php
│  │  │  ├─ BinaryUtil.php
│  │  │  ├─ CHANGELOG.md
│  │  │  ├─ Command
│  │  │  │  ├─ GenerateUlidCommand.php
│  │  │  │  ├─ GenerateUuidCommand.php
│  │  │  │  ├─ InspectUlidCommand.php
│  │  │  │  └─ InspectUuidCommand.php
│  │  │  ├─ composer.json
│  │  │  ├─ Exception
│  │  │  │  ├─ InvalidArgumentException.php
│  │  │  │  └─ LogicException.php
│  │  │  ├─ Factory
│  │  │  │  ├─ NameBasedUuidFactory.php
│  │  │  │  ├─ RandomBasedUuidFactory.php
│  │  │  │  ├─ TimeBasedUuidFactory.php
│  │  │  │  ├─ UlidFactory.php
│  │  │  │  └─ UuidFactory.php
│  │  │  ├─ HashableInterface.php
│  │  │  ├─ LICENSE
│  │  │  ├─ MaxUlid.php
│  │  │  ├─ MaxUuid.php
│  │  │  ├─ NilUlid.php
│  │  │  ├─ NilUuid.php
│  │  │  ├─ README.md
│  │  │  ├─ TimeBasedUidInterface.php
│  │  │  ├─ Ulid.php
│  │  │  ├─ Uuid.php
│  │  │  ├─ UuidV1.php
│  │  │  ├─ UuidV3.php
│  │  │  ├─ UuidV4.php
│  │  │  ├─ UuidV5.php
│  │  │  ├─ UuidV6.php
│  │  │  ├─ UuidV7.php
│  │  │  └─ UuidV8.php
│  │  └─ var-dumper
│  │     ├─ Caster
│  │     │  ├─ AddressInfoCaster.php
│  │     │  ├─ AmqpCaster.php
│  │     │  ├─ ArgsStub.php
│  │     │  ├─ Caster.php
│  │     │  ├─ ClassStub.php
│  │     │  ├─ ConstStub.php
│  │     │  ├─ CurlCaster.php
│  │     │  ├─ CutArrayStub.php
│  │     │  ├─ CutStub.php
│  │     │  ├─ DateCaster.php
│  │     │  ├─ DoctrineCaster.php
│  │     │  ├─ DOMCaster.php
│  │     │  ├─ DsCaster.php
│  │     │  ├─ DsPairStub.php
│  │     │  ├─ EnumStub.php
│  │     │  ├─ ExceptionCaster.php
│  │     │  ├─ FFICaster.php
│  │     │  ├─ FiberCaster.php
│  │     │  ├─ FrameStub.php
│  │     │  ├─ GdCaster.php
│  │     │  ├─ GmpCaster.php
│  │     │  ├─ ImagineCaster.php
│  │     │  ├─ ImgStub.php
│  │     │  ├─ IntlCaster.php
│  │     │  ├─ LinkStub.php
│  │     │  ├─ MemcachedCaster.php
│  │     │  ├─ MysqliCaster.php
│  │     │  ├─ OpenSSLCaster.php
│  │     │  ├─ PdoCaster.php
│  │     │  ├─ PgSqlCaster.php
│  │     │  ├─ ProxyManagerCaster.php
│  │     │  ├─ RdKafkaCaster.php
│  │     │  ├─ RedisCaster.php
│  │     │  ├─ ReflectionCaster.php
│  │     │  ├─ ResourceCaster.php
│  │     │  ├─ ScalarStub.php
│  │     │  ├─ SocketCaster.php
│  │     │  ├─ SplCaster.php
│  │     │  ├─ SqliteCaster.php
│  │     │  ├─ StubCaster.php
│  │     │  ├─ SymfonyCaster.php
│  │     │  ├─ TraceStub.php
│  │     │  ├─ UninitializedStub.php
│  │     │  ├─ UuidCaster.php
│  │     │  ├─ VirtualStub.php
│  │     │  ├─ XmlReaderCaster.php
│  │     │  └─ XmlResourceCaster.php
│  │     ├─ CHANGELOG.md
│  │     ├─ Cloner
│  │     │  ├─ AbstractCloner.php
│  │     │  ├─ ClonerInterface.php
│  │     │  ├─ Cursor.php
│  │     │  ├─ Data.php
│  │     │  ├─ DumperInterface.php
│  │     │  ├─ Stub.php
│  │     │  └─ VarCloner.php
│  │     ├─ Command
│  │     │  ├─ Descriptor
│  │     │  │  ├─ CliDescriptor.php
│  │     │  │  ├─ DumpDescriptorInterface.php
│  │     │  │  └─ HtmlDescriptor.php
│  │     │  └─ ServerDumpCommand.php
│  │     ├─ composer.json
│  │     ├─ Dumper
│  │     │  ├─ AbstractDumper.php
│  │     │  ├─ CliDumper.php
│  │     │  ├─ ContextProvider
│  │     │  │  ├─ CliContextProvider.php
│  │     │  │  ├─ ContextProviderInterface.php
│  │     │  │  ├─ RequestContextProvider.php
│  │     │  │  └─ SourceContextProvider.php
│  │     │  ├─ ContextualizedDumper.php
│  │     │  ├─ DataDumperInterface.php
│  │     │  ├─ HtmlDumper.php
│  │     │  └─ ServerDumper.php
│  │     ├─ Exception
│  │     │  └─ ThrowingCasterException.php
│  │     ├─ LICENSE
│  │     ├─ README.md
│  │     ├─ Resources
│  │     │  ├─ bin
│  │     │  │  └─ var-dump-server
│  │     │  ├─ css
│  │     │  │  └─ htmlDescriptor.css
│  │     │  ├─ functions
│  │     │  │  └─ dump.php
│  │     │  └─ js
│  │     │     └─ htmlDescriptor.js
│  │     ├─ Server
│  │     │  ├─ Connection.php
│  │     │  └─ DumpServer.php
│  │     ├─ Test
│  │     │  └─ VarDumperTestTrait.php
│  │     └─ VarDumper.php
│  ├─ tijsverkoyen
│  │  └─ css-to-inline-styles
│  │     ├─ composer.json
│  │     ├─ LICENSE.md
│  │     └─ src
│  │        ├─ Css
│  │        │  ├─ Processor.php
│  │        │  ├─ Property
│  │        │  │  ├─ Processor.php
│  │        │  │  └─ Property.php
│  │        │  └─ Rule
│  │        │     ├─ Processor.php
│  │        │     └─ Rule.php
│  │        └─ CssToInlineStyles.php
│  ├─ vlucas
│  │  └─ phpdotenv
│  │     ├─ composer.json
│  │     ├─ LICENSE
│  │     └─ src
│  │        ├─ Dotenv.php
│  │        ├─ Exception
│  │        │  ├─ ExceptionInterface.php
│  │        │  ├─ InvalidEncodingException.php
│  │        │  ├─ InvalidFileException.php
│  │        │  ├─ InvalidPathException.php
│  │        │  └─ ValidationException.php
│  │        ├─ Loader
│  │        │  ├─ Loader.php
│  │        │  ├─ LoaderInterface.php
│  │        │  └─ Resolver.php
│  │        ├─ Parser
│  │        │  ├─ Entry.php
│  │        │  ├─ EntryParser.php
│  │        │  ├─ Lexer.php
│  │        │  ├─ Lines.php
│  │        │  ├─ Parser.php
│  │        │  ├─ ParserInterface.php
│  │        │  └─ Value.php
│  │        ├─ Repository
│  │        │  ├─ Adapter
│  │        │  │  ├─ AdapterInterface.php
│  │        │  │  ├─ ApacheAdapter.php
│  │        │  │  ├─ ArrayAdapter.php
│  │        │  │  ├─ EnvConstAdapter.php
│  │        │  │  ├─ GuardedWriter.php
│  │        │  │  ├─ ImmutableWriter.php
│  │        │  │  ├─ MultiReader.php
│  │        │  │  ├─ MultiWriter.php
│  │        │  │  ├─ PutenvAdapter.php
│  │        │  │  ├─ ReaderInterface.php
│  │        │  │  ├─ ReplacingWriter.php
│  │        │  │  ├─ ServerConstAdapter.php
│  │        │  │  └─ WriterInterface.php
│  │        │  ├─ AdapterRepository.php
│  │        │  ├─ RepositoryBuilder.php
│  │        │  └─ RepositoryInterface.php
│  │        ├─ Store
│  │        │  ├─ File
│  │        │  │  ├─ Paths.php
│  │        │  │  └─ Reader.php
│  │        │  ├─ FileStore.php
│  │        │  ├─ StoreBuilder.php
│  │        │  ├─ StoreInterface.php
│  │        │  └─ StringStore.php
│  │        ├─ Util
│  │        │  ├─ Regex.php
│  │        │  └─ Str.php
│  │        └─ Validator.php

│  └─ webmozart
│     └─ assert
│        ├─ .php-cs-fixer.php
│        ├─ CHANGELOG.md
│        ├─ composer.json
│        ├─ LICENSE
│        ├─ README.md
│        ├─ src
│        │  ├─ Assert.php
│        │  ├─ InvalidArgumentException.php
│        │  └─ Mixin.php
│        └─ tools
│           ├─ php-cs-fixer
│           │  ├─ composer.json
│           │  └─ composer.lock
│           ├─ phpunit
│           │  ├─ composer.json
│           │  └─ composer.lock
│           ├─ psalm
│           │  ├─ composer.json
│           │  └─ composer.lock
│           └─ roave-bc-check
│              ├─ composer.json
│              └─ composer.lock
└─ vite.config.js

```

