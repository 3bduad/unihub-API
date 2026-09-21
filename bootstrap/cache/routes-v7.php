<?php

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/oauth/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/authorize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.authorize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.deny',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/device' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.device',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/device/code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.device.code',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token.refresh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/device/authorize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.device.authorizations.authorize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.device.authorizations.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'passport.device.authorizations.deny',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/debug/password-algo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fjkRT0E8KCL1zBrY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/security/policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gSkXrPQhlJcycey9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IPsP4vVsmpfDetEq',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/sync/bulk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zHyGRdSKRPCZyiaN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j06IsWz11MUurKSH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/verify-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fCFIJhWx8CH4jvAx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AKxCdqCDDpJQfwjk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zdrCppE2DLTzcBzO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/me' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4Sna20IaYk7DzT4Z',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vDpBTUb9LTlpTJdB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VPSUtklumSFGSjSH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/lookups/user-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RhxUAFhTKdzHmSv8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/lookups/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ApszG0mcR40Z6p1v',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/lookups/colleges' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0tyF2TXaPfNDTD8s',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/lookups/academic-years' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cWj2NuQlpnu54Ibj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/colleges' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'colleges.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'colleges.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/departments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'departments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'departments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/programs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'programs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'programs.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/levels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'levels.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'levels.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/semesters' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'semesters.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'semesters.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'courses.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'courses.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/buildings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'buildings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'buildings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/blocks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blocks.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'blocks.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/classrooms/availability' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a7HpGRXHjJWRRp1i',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/classrooms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'classrooms.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'classrooms.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/periods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'periods.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'periods.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/days' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'days.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'days.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/academic-titles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'academic-titles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'academic-titles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/dashboard/university-overview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j8RuW8JtHcZKkMQK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-types.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/lecturers/import-csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rCnXh9reKTQ95AEN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/lecturers/financial-dues' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vnxhLhuIPlWLRRrt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/lecturers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lecturers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'lecturers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/lecturer/my-courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0PNZ6uzYHE2gUcN0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/lecturer/gradebook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fzUPdcefaVzF3odi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/lecturer/assessments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oqSKyssh1vOQtop8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/lecturer/grades/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E3nj4W7u6oJjSzB4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/students' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'students.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/student-groups/upsert-and-attach' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ODgeyWJYeLA4FwPg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/student-groups/students/bulk-move' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2ilS9DJUilfa7yqe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/student-groups/import-csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oQHUUJdQCA7xYNHZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/student-groups/import-external' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jW8Skj9oBaSvv2Sl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/student-groups' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'student-groups.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'student-groups.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/timetable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'timetable.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'timetable.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/lecture-sessions/bulk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CAqfFi1a3njcB2g2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/lecture-sessions/start' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W5StZPWyNCWuhFmg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/schedulable-lectures' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9ItjCEvoXWWiWWcI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/lecture-sessions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lecture-sessions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'lecture-sessions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/qr-codes/start-session' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sJUvD2AVlnDe97s0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/attendance/students/scan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QM64BJnPMAk3V1Nx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/attendance/students/manual' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jMHrP74ACb3OaqqD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/attendance/scan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gADOBXAhwvXgmncl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/student-attendance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'student-attendance.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'student-attendance.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/attendance/lecturers/check-in' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TzESMxR5AiJqWOwD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/lecturer-attendance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lecturer-attendance.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'lecturer-attendance.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/attendance/finalize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sessions.finalize',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/makeup-lectures' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NeuTuXRVTlNLRAES',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/student-excuses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q8H30CHRPg5L0m2C',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o1SxRZ0HYmlvxvaM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O3grhwaZwmGFM5pt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/devices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kLp4qhFsqrID5LaL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/sessions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hpsDq5ySygDM0MRX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/sessions/revoke' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J3TnEsFoTAbkos3s',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/audit-logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sipAvsWHIhEYmwfZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/ip-restrictions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ip-restrictions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ip-restrictions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/devices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ss0fAIIg1srvdT04',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/qa/student/pending' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BfcMWu64PreRVJ4e',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/qa/student/submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UCgR9OrurMd3YcBk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/program-learning-outcomes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j5SnGuwSiOihsAFw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/teaching-strategies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teaching-strategies.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'teaching-strategies.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/assessment-methods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'assessment-methods.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'assessment-methods.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/program-option-audits' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::662Ueb2pjLErWA9R',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/qa/forms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mdJEbOmItlf58pQn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::udQCqyZAWrvGIcc8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/qa/campaigns/create-meta' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9xCds89yglyZbYHN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/qa/campaigns/year-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wKr2afl7ffWrQBOq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/qa/campaigns' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NipchY3b2JXUXiuV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4N2SIGl5DxlDVLLr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/qa/reports/campaign-summary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EH2YV53SwUfVu77A',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/qa/reports/campaign-timetables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::heGGIbOfGTO6Fwxd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/qa/reports/execution/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dYAL0cV4ppUr5GdU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/qa/reports/execution/filters-meta' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2RFnzef8S1XQG8MS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/qa/outcomes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gJ5wh20XRjmqveyb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/qa/topics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6mQ3ZrsbmpCKZn9m',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/qa/questions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V0LKNCgw9LgVph2X',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/attachments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HnUbKSIUJCSQlbSh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/reports/university-comprehensive' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::My7VOslZNwOsVSp6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/up' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IODnrrnF2S3ObSYH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JCSy5PsPBZM68yDi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/check-url' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x5dS9thFTrj7gsEa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dev/routes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dev.routes',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dev/routes/json' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dev.routes.json',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/routes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.routes',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/routes/json' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.routes.json',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/api/v1/(?|user(?|s/([^/]++)(?|(*:38))|\\-types/([^/]++)(?|(*:65)|/permissions(?|(*:87)|/bulk\\-assign(*:107))))|c(?|o(?|lleges/([^/]++)(?|(*:144)|/(?|dashboard(*:165)|reports(?|(*:183)|/(?|course\\-groups(*:209)|group\\-(?|students\\-attendance(*:247)|grades(*:261))|qa\\-(?|performance(*:288)|detail(?|s(*:306)|ed(*:316)))|detailed(*:334)|builder(*:349)|lecturer/([^/]++)(*:374)))|makeup\\-requests(*:400)|financial/(?|cycle(?|(*:429)|s/([^/]++)/status(*:454))|generate(*:471)|payouts/([^/]++)/adjustments(*:507))))|urses/([^/]++)(?|(*:535)|/(?|description(?|(*:561))|goals(*:575)|learning\\-outcomes(?|/(?|stats(*:613)|domain/(Knowledge|Intellectual|Professional|General)(*:673)|([^/]++)(?|(*:692)))|(*:702))|topics(?|(*:720)|/(?|([^/]++)(?|(*:743))|by\\-part/(نظري|عملي|تمارين|سريري)(*:804)|stats(*:817)))|ass(?|ignments(?|(*:844)|/(?|([^/]++)(?|(*:867))|by\\-part/(نظري|عملي|تمارين|سريري)(*:928)|total\\-grade(*:948)))|essments(?|(*:969)|/(?|([^/]++)(?|(*:992))|b(?|y\\-type/([^/]++)(*:1021)|alance\\-check(*:1043))|stats(*:1058))))|references(?|(*:1083)|/(?|([^/]++)(?|(*:1107))|by\\-type/(main|support|electronic)(*:1151)|stats(*:1165)))|policies(?|(*:1187)|/(?|([^/]++)(?|(*:1211))|fixed\\-(?|template(*:1239)|only(*:1252))|additional\\-only(*:1278)))|q(?|uestion\\-bank(?|(*:1309)|/([^/]++)(?|(*:1330)))|a\\-data(*:1348))|outcome\\-mappings(?|(*:1378)|/([^/]++)(*:1396)))))|lassrooms/([^/]++)(?|(*:1430)))|d(?|e(?|partments/([^/]++)(?|(*:1470))|vices/([^/]++)(?|/(?|enable\\-auto\\-attendance(*:1525)|disable\\-auto\\-attendance(*:1559))|(*:1569)))|ays/([^/]++)(?|(*:1595)))|p(?|rogram(?|s/([^/]++)(?|(*:1632))|\\-learning\\-outcomes/([^/]++)(?|(*:1674)|/([^/]++)(*:1692)|(*:1701)))|eriods/([^/]++)(?|(*:1730)))|le(?|vels/([^/]++)(?|(*:1762))|cture(?|r(?|s/([^/]++)(?|(*:1797))|/assessments/([^/]++)(*:1828)|\\-attendance/([^/]++)(?|(*:1861)))|\\-sessions/([^/]++)(?|(*:1894))))|s(?|e(?|mesters/([^/]++)(?|(*:1933))|ssions/([^/]++)/(?|finish(*:1968)|attachments(*:1988)))|tudent\\-(?|groups/([^/]++)(?|/(?|move(*:2036)|students(?|(*:2056)|(*:2065)))|(*:2076))|attendance/([^/]++)(?|(*:2108))|excuses/([^/]++)/(?|approve\\-by\\-(?|head(*:2158)|lecturer(*:2175))|status(*:2191))))|b(?|uildings/([^/]++)(?|(*:2227))|locks/([^/]++)(?|(*:2254)))|a(?|cademic\\-titles/([^/]++)(?|(*:2296))|dmin/(?|ip\\-restrictions/([^/]++)(*:2339)|devices/([^/]++)(?|/(?|enable\\-auto\\-attendance(*:2395)|disable\\-auto\\-attendance(*:2429)|toggle\\-attendance(*:2456))|(*:2466)))|ssessment\\-methods/(?|([^/]++)(?|(*:2510))|by\\-category/([^/]++)(*:2541)|active\\-only(*:2562))|ttachments/([^/]++)(?|(*:2594)))|groups/([^/]++)/students(*:2629)|t(?|imetable/([^/]++)(?|(*:2662)|/topics\\-status(*:2686))|opics/([^/]++)/questions(?|(*:2723)|/(?|([^/]++)(?|(*:2747))|by\\-type/(MCQ|essay)(*:2777)|used\\-in\\-exams(*:2801)|stats(*:2815)))|eaching\\-strategies/(?|([^/]++)(?|(*:2860))|by\\-category/([^/]++)(*:2891)|active\\-only(*:2912)))|q(?|r\\-codes/([^/]++)/(?|refresh(*:2955)|e(?|nd(*:2970)|xtend(*:2984)))|a/(?|student/form/([^/]++)(*:3021)|forms/([^/]++)(?|(*:3047))|campaigns/([^/]++)(?|(*:3078))|reports/execution/details/([^/]++)(*:3122)|outcomes/([^/]++)(?|(*:3151))|topics/([^/]++)(?|(*:3179))|questions/([^/]++)(?|(*:3210))))|makeup\\-lectures/([^/]++)/(?|review(?|(*:3260)|(*:3269))|approve(*:3286)|schedule(*:3303))|notifications/([^/]++)(?|(*:3338)))|/storage/(.*)(*:3362))/?$}sDu',
    ),
    3 => 
    array (
      38 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      65 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-types.update',
          ),
          1 => 
          array (
            0 => 'user_type',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user-types.destroy',
          ),
          1 => 
          array (
            0 => 'user_type',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      87 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0msOjMUEokdJbTwV',
          ),
          1 => 
          array (
            0 => 'userTypeId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zYkC1oJq1q43Y1qr',
          ),
          1 => 
          array (
            0 => 'userType',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      144 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'colleges.show',
          ),
          1 => 
          array (
            0 => 'college',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'colleges.update',
          ),
          1 => 
          array (
            0 => 'college',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'colleges.destroy',
          ),
          1 => 
          array (
            0 => 'college',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      165 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3mOCwXMA99iPr3Gz',
          ),
          1 => 
          array (
            0 => 'college',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      183 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tzuPeKQ8Glr6fCjv',
          ),
          1 => 
          array (
            0 => 'college',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      209 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8DAdAbfIQiu5dTOV',
          ),
          1 => 
          array (
            0 => 'college',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c2DVGMHqEyF0eds8',
          ),
          1 => 
          array (
            0 => 'college',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      261 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PJ2AYGwXAUUSv4ro',
          ),
          1 => 
          array (
            0 => 'college',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      288 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QSXTZNXBtDPZbihZ',
          ),
          1 => 
          array (
            0 => 'college',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      306 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kiAcpcVF5qw9oNCk',
          ),
          1 => 
          array (
            0 => 'college',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      316 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z7nLx2IX3cB6VEFk',
          ),
          1 => 
          array (
            0 => 'college',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      334 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dHPrzuFJv3BX7rk0',
          ),
          1 => 
          array (
            0 => 'college',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      349 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GWS4xlBmT8pr7e7C',
          ),
          1 => 
          array (
            0 => 'college',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      374 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dfxoFjcJwOiVEhFn',
          ),
          1 => 
          array (
            0 => 'college',
            1 => 'lecturer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      400 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OsH2q05hivv47DVP',
          ),
          1 => 
          array (
            0 => 'college',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      429 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JTZTBrMdihL2p4qR',
          ),
          1 => 
          array (
            0 => 'college',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      454 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zgpicBK4Cei6TUIW',
          ),
          1 => 
          array (
            0 => 'college',
            1 => 'cycle',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      471 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TpTiPpbA0SupUOl6',
          ),
          1 => 
          array (
            0 => 'college',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      507 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PDilG9phs9LoaPe9',
          ),
          1 => 
          array (
            0 => 'college',
            1 => 'payout',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      535 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'courses.show',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'courses.update',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'courses.destroy',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      561 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'description.show',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'description.update',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      575 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'goals.update',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      613 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'learning-outcomes.stats',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      673 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'learning-outcomes.by-domain',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'domain',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      692 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'learning-outcomes.show',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'clo_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'learning-outcomes.update',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'clo_id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'learning-outcomes.destroy',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'clo_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      702 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'learning-outcomes.index',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'learning-outcomes.store',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      720 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topics.index',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'topics.store',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      743 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topics.show',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'topic_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'topics.update',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'topic_id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'topics.destroy',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'topic_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      804 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topics.by-part',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'part',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      817 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topics.stats',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      844 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'assignments.index',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'assignments.store',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      867 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'assignments.show',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'assignment_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'assignments.update',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'assignment_id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'assignments.destroy',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'assignment_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      928 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'assignments.by-part',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'part',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      948 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'assignments.total-grade',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      969 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'assessments.index',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'assessments.store',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      992 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'assessments.show',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'assessment_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'assessments.update',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'assessment_id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'assessments.destroy',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'assessment_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1021 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'assessments.by-type',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'assessment_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1043 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'assessments.balance-check',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1058 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'assessments.stats',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1083 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'references.index',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'references.store',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'references.show',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'reference_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'references.update',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'reference_id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'references.destroy',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'reference_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1151 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'references.by-type',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1165 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'references.stats',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'policies.index',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'policies.store',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1211 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'policies.show',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'policy_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'policies.update',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'policy_id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'policies.destroy',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'policy_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1239 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'policies.fixed-template',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1252 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'policies.fixed-only',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1278 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'policies.additional-only',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GeZ8aqdzUCHXeBoo',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2Pj2NikAHAA6EZNH',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KRtZQc2ScLF689aM',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'question_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PNoLgL8mLY1ht8og',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'question_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1348 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6TZFo4kJY7Im0Y6G',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1378 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V1O4T3D9jbWqb6P2',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GjPPq0Ka35CdeWii',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1396 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8YGx4AfUs2tWly6x',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'clo_code',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1430 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'classrooms.show',
          ),
          1 => 
          array (
            0 => 'classroom',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'classrooms.update',
          ),
          1 => 
          array (
            0 => 'classroom',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'classrooms.destroy',
          ),
          1 => 
          array (
            0 => 'classroom',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1470 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'departments.show',
          ),
          1 => 
          array (
            0 => 'department',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'departments.update',
          ),
          1 => 
          array (
            0 => 'department',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'departments.destroy',
          ),
          1 => 
          array (
            0 => 'department',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1525 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jPMGZVVd1DQ8r4sA',
          ),
          1 => 
          array (
            0 => 'device',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1559 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8YJjMIF0SLhUIloY',
          ),
          1 => 
          array (
            0 => 'device',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1569 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tgHFm9caMLa8tBjL',
          ),
          1 => 
          array (
            0 => 'device',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1595 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'days.show',
          ),
          1 => 
          array (
            0 => 'day',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'days.update',
          ),
          1 => 
          array (
            0 => 'day',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'days.destroy',
          ),
          1 => 
          array (
            0 => 'day',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1632 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'programs.show',
          ),
          1 => 
          array (
            0 => 'program',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'programs.update',
          ),
          1 => 
          array (
            0 => 'program',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'programs.destroy',
          ),
          1 => 
          array (
            0 => 'program',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1674 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7Cuf4fwDD7I5NR4J',
          ),
          1 => 
          array (
            0 => 'programId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1692 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LAMyozq0GXK65coB',
          ),
          1 => 
          array (
            0 => 'programId',
            1 => 'ploId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CFOC66pn90P7kXwP',
          ),
          1 => 
          array (
            0 => 'ploId',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WF76bT4h6EezedxD',
          ),
          1 => 
          array (
            0 => 'ploId',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1730 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'periods.show',
          ),
          1 => 
          array (
            0 => 'period',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'periods.update',
          ),
          1 => 
          array (
            0 => 'period',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'periods.destroy',
          ),
          1 => 
          array (
            0 => 'period',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1762 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'levels.show',
          ),
          1 => 
          array (
            0 => 'level',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'levels.update',
          ),
          1 => 
          array (
            0 => 'level',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'levels.destroy',
          ),
          1 => 
          array (
            0 => 'level',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1797 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lecturers.show',
          ),
          1 => 
          array (
            0 => 'lecturer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'lecturers.update',
          ),
          1 => 
          array (
            0 => 'lecturer',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'lecturers.destroy',
          ),
          1 => 
          array (
            0 => 'lecturer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1828 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0M3gZ9NittRmYc4T',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1861 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lecturer-attendance.show',
          ),
          1 => 
          array (
            0 => 'lecturer_attendance',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'lecturer-attendance.update',
          ),
          1 => 
          array (
            0 => 'lecturer_attendance',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'lecturer-attendance.destroy',
          ),
          1 => 
          array (
            0 => 'lecturer_attendance',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1894 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lecture-sessions.show',
          ),
          1 => 
          array (
            0 => 'lecture_session',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'lecture-sessions.update',
          ),
          1 => 
          array (
            0 => 'lecture_session',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'lecture-sessions.destroy',
          ),
          1 => 
          array (
            0 => 'lecture_session',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1933 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'semesters.show',
          ),
          1 => 
          array (
            0 => 'semester',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'semesters.update',
          ),
          1 => 
          array (
            0 => 'semester',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'semesters.destroy',
          ),
          1 => 
          array (
            0 => 'semester',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1968 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CuKfVzfVKgo3kVF4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1988 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mo8N5kC7xovytFSf',
          ),
          1 => 
          array (
            0 => 'sessionId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2036 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pk7oj0gwe4y2ggkx',
          ),
          1 => 
          array (
            0 => 'group',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2056 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZYqy75Me1OUPr8vy',
          ),
          1 => 
          array (
            0 => 'group',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2065 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZWj4jsiifJEramSl',
          ),
          1 => 
          array (
            0 => 'student_group',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2076 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'student-groups.show',
          ),
          1 => 
          array (
            0 => 'student_group',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'student-groups.update',
          ),
          1 => 
          array (
            0 => 'student_group',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'student-groups.destroy',
          ),
          1 => 
          array (
            0 => 'student_group',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2108 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'student-attendance.show',
          ),
          1 => 
          array (
            0 => 'student_attendance',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'student-attendance.update',
          ),
          1 => 
          array (
            0 => 'student_attendance',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'student-attendance.destroy',
          ),
          1 => 
          array (
            0 => 'student_attendance',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2158 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bgA7iPImtYKn2Rmm',
          ),
          1 => 
          array (
            0 => 'excuse',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h7ckGVIFqyZo20zn',
          ),
          1 => 
          array (
            0 => 'excuse',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2191 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xxFVbUvDrgVgGI7y',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2227 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'buildings.show',
          ),
          1 => 
          array (
            0 => 'building',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'buildings.update',
          ),
          1 => 
          array (
            0 => 'building',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'buildings.destroy',
          ),
          1 => 
          array (
            0 => 'building',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2254 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blocks.show',
          ),
          1 => 
          array (
            0 => 'block',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'blocks.update',
          ),
          1 => 
          array (
            0 => 'block',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'blocks.destroy',
          ),
          1 => 
          array (
            0 => 'block',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'academic-titles.show',
          ),
          1 => 
          array (
            0 => 'academic_title',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'academic-titles.update',
          ),
          1 => 
          array (
            0 => 'academic_title',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'academic-titles.destroy',
          ),
          1 => 
          array (
            0 => 'academic_title',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2339 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ip-restrictions.destroy',
          ),
          1 => 
          array (
            0 => 'ip_restriction',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2395 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zptw7cwBUJWnRsjE',
          ),
          1 => 
          array (
            0 => 'device',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2429 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eCpprKUNzfk8YcFM',
          ),
          1 => 
          array (
            0 => 'device',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2456 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VzLXs6JEDNPjnnhL',
          ),
          1 => 
          array (
            0 => 'device',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2466 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C1AsLsynXUDgVWVO',
          ),
          1 => 
          array (
            0 => 'device',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2510 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'assessment-methods.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'assessment-methods.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'assessment-methods.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2541 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'assessment-methods.by-category',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2562 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'assessment-methods.active-only',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2594 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AhMFR52WTA99KFeZ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gCL9Pjc4kuS7jbTa',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2629 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RP6gdiPDuvKK8Euh',
          ),
          1 => 
          array (
            0 => 'studentGroup',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2662 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'timetable.show',
          ),
          1 => 
          array (
            0 => 'timetable',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'timetable.update',
          ),
          1 => 
          array (
            0 => 'timetable',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'timetable.destroy',
          ),
          1 => 
          array (
            0 => 'timetable',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2686 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PH2O5Mq62TRBZ5xd',
          ),
          1 => 
          array (
            0 => 'timetable',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'questions.index',
          ),
          1 => 
          array (
            0 => 'topic_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'questions.store',
          ),
          1 => 
          array (
            0 => 'topic_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2747 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'questions.show',
          ),
          1 => 
          array (
            0 => 'topic_id',
            1 => 'question_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'questions.update',
          ),
          1 => 
          array (
            0 => 'topic_id',
            1 => 'question_id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'questions.destroy',
          ),
          1 => 
          array (
            0 => 'topic_id',
            1 => 'question_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2777 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'questions.by-type',
          ),
          1 => 
          array (
            0 => 'topic_id',
            1 => 'question_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2801 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'questions.used-in-exams',
          ),
          1 => 
          array (
            0 => 'topic_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2815 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'questions.stats',
          ),
          1 => 
          array (
            0 => 'topic_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2860 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teaching-strategies.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'teaching-strategies.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'teaching-strategies.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2891 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teaching-strategies.by-category',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2912 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teaching-strategies.active-only',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2955 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Gk73Uc2YI0ekwok6',
          ),
          1 => 
          array (
            0 => 'qrCode',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2970 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LmIJu2Q8QJcaiZSD',
          ),
          1 => 
          array (
            0 => 'qrCode',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2984 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::37Hf646Wadr7oIxC',
          ),
          1 => 
          array (
            0 => 'qrCode',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3021 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vPh4edQNa9luI45J',
          ),
          1 => 
          array (
            0 => 'campaign',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3047 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::auPrLbaboplHmEn8',
          ),
          1 => 
          array (
            0 => 'form',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0pcNFIq0V7svgstG',
          ),
          1 => 
          array (
            0 => 'form',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Vh9aSxtaODHOfQLg',
          ),
          1 => 
          array (
            0 => 'form',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3078 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nJ4jPJy4yq9UdyVT',
          ),
          1 => 
          array (
            0 => 'campaign',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PcJcD3NTCl9vqk3C',
          ),
          1 => 
          array (
            0 => 'campaign',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3122 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t7INJI4gREMHdpQK',
          ),
          1 => 
          array (
            0 => 'timetable',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3151 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m7R9kiVa6lY4rDh9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PHKV6igIbGSSnSnE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3179 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RSBw8L9AMdabD5BC',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::upWIdu9Z1CKiG8xn',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3210 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4VGtJyH2s996OymJ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IJhYdPUgi7N2aeh5',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3260 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::udqHHGGdlM0AXmWA',
          ),
          1 => 
          array (
            0 => 'makeupLecture',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3269 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PI4bMkNn5vd1uk2H',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3286 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Gcy6ojE9Iq8vQLpW',
          ),
          1 => 
          array (
            0 => 'makeupLecture',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3303 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DCcMaiHipyUCVmae',
          ),
          1 => 
          array (
            0 => 'makeupLecture',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3338 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QSXc4tpNruQdtL68',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kgMeRI9xSPHEaeP9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3362 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storage.local',
          ),
          1 => 
          array (
            0 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'passport.token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token',
      'action' => 
      array (
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'as' => 'passport.token',
        'middleware' => 'throttle',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.authorize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'as' => 'passport.authorizations.authorize',
        'middleware' => 'web',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.device' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/device',
      'action' => 
      array (
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\DeviceUserCodeController@__invoke',
        'as' => 'passport.device',
        'middleware' => 'web',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\DeviceUserCodeController',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.device.code' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/device/code',
      'action' => 
      array (
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\DeviceCodeController@__invoke',
        'as' => 'passport.device.code',
        'middleware' => 'throttle',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\DeviceCodeController',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.token.refresh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'as' => 'passport.token.refresh',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'as' => 'passport.authorizations.approve',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.deny' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'as' => 'passport.authorizations.deny',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.device.authorizations.authorize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/device/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\DeviceAuthorizationController@__invoke',
        'as' => 'passport.device.authorizations.authorize',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\DeviceAuthorizationController',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.device.authorizations.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/device/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ApproveDeviceAuthorizationController@__invoke',
        'as' => 'passport.device.authorizations.approve',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ApproveDeviceAuthorizationController',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.device.authorizations.deny' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/device/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\DenyDeviceAuthorizationController@__invoke',
        'as' => 'passport.device.authorizations.deny',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\DenyDeviceAuthorizationController',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fjkRT0E8KCL1zBrY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/debug/password-algo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:383:"function () {

    $u = \\App\\Models\\User::first();

    if (!$u) return \'no user\';

    $hash = $u->password;

    if (\\str_starts_with($hash, \'$2y$\') || \\str_starts_with($hash, \'$2b$\') || \\str_starts_with($hash, \'$2a$\')) return \'bcrypt\';

    if (\\str_starts_with($hash, \'$argon2id$\') || \\str_starts_with($hash, \'$argon2i$\')) return \'argon2\';

    return \'unknown\';

}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007070000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::fjkRT0E8KCL1zBrY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gSkXrPQhlJcycey9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/security/policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SettingsController@getPolicy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SettingsController@getPolicy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::gSkXrPQhlJcycey9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zHyGRdSKRPCZyiaN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/sync/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SyncController@bulkSync',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SyncController@bulkSync',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::zHyGRdSKRPCZyiaN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j06IsWz11MUurKSH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:login',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@login',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::j06IsWz11MUurKSH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fCFIJhWx8CH4jvAx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/verify-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@verifyOtp',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@verifyOtp',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::fCFIJhWx8CH4jvAx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AKxCdqCDDpJQfwjk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthPasswordController@forgot',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthPasswordController@forgot',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::AKxCdqCDDpJQfwjk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zdrCppE2DLTzcBzO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:reset',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthPasswordController@reset',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::zdrCppE2DLTzcBzO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4Sna20IaYk7DzT4Z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/auth/me',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@me',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@me',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::4Sna20IaYk7DzT4Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vDpBTUb9LTlpTJdB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@logout',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::vDpBTUb9LTlpTJdB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VPSUtklumSFGSjSH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@changePassword',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::VPSUtklumSFGSjSH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RhxUAFhTKdzHmSv8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/lookups/user-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LookupsController@userTypes',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LookupsController@userTypes',
        'namespace' => NULL,
        'prefix' => 'api/v1/lookups',
        'where' => 
        array (
        ),
        'as' => 'generated::RhxUAFhTKdzHmSv8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ApszG0mcR40Z6p1v' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/lookups/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LookupsController@permissions',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LookupsController@permissions',
        'namespace' => NULL,
        'prefix' => 'api/v1/lookups',
        'where' => 
        array (
        ),
        'as' => 'generated::ApszG0mcR40Z6p1v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0tyF2TXaPfNDTD8s' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/lookups/colleges',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LookupsController@colleges',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LookupsController@colleges',
        'namespace' => NULL,
        'prefix' => 'api/v1/lookups',
        'where' => 
        array (
        ),
        'as' => 'generated::0tyF2TXaPfNDTD8s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cWj2NuQlpnu54Ibj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/lookups/academic-years',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LookupsController@academicYears',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LookupsController@academicYears',
        'namespace' => NULL,
        'prefix' => 'api/v1/lookups',
        'where' => 
        array (
        ),
        'as' => 'generated::cWj2NuQlpnu54Ibj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'users.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UsersController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UsersController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'users.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UsersController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UsersController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'users.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UsersController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UsersController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'users.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UsersController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UsersController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'users.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UsersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UsersController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'colleges.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/colleges',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'colleges.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CollegesController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CollegesController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'colleges.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/colleges',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'colleges.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CollegesController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CollegesController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'colleges.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/colleges/{college}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'colleges.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CollegesController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CollegesController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'colleges.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/colleges/{college}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'colleges.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CollegesController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CollegesController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'colleges.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/colleges/{college}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'colleges.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CollegesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CollegesController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'departments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/departments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'departments.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DepartmentsController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DepartmentsController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'departments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/departments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'departments.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DepartmentsController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DepartmentsController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'departments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/departments/{department}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'departments.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DepartmentsController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DepartmentsController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'departments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/departments/{department}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'departments.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DepartmentsController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DepartmentsController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'departments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/departments/{department}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'departments.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DepartmentsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DepartmentsController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'programs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/programs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'programs.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ProgramsController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ProgramsController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'programs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/programs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'programs.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ProgramsController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ProgramsController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'programs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/programs/{program}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'programs.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ProgramsController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ProgramsController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'programs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/programs/{program}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'programs.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ProgramsController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ProgramsController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'programs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/programs/{program}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'programs.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ProgramsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ProgramsController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'levels.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/levels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'levels.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LevelsController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LevelsController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'levels.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/levels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'levels.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LevelsController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LevelsController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'levels.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/levels/{level}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'levels.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LevelsController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LevelsController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'levels.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/levels/{level}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'levels.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LevelsController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LevelsController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'levels.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/levels/{level}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'levels.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LevelsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LevelsController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'semesters.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/semesters',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'semesters.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SemestersController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SemestersController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'semesters.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/semesters',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'semesters.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SemestersController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SemestersController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'semesters.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/semesters/{semester}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'semesters.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SemestersController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SemestersController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'semesters.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/semesters/{semester}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'semesters.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SemestersController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SemestersController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'semesters.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/semesters/{semester}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'semesters.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SemestersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SemestersController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'courses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'courses.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CoursesController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CoursesController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'courses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'courses.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CoursesController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CoursesController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'courses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'courses.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CoursesController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CoursesController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'courses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/courses/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'courses.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CoursesController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CoursesController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'courses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/courses/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'courses.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CoursesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CoursesController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buildings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/buildings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'buildings.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\BuildingsController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\BuildingsController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buildings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/buildings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'buildings.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\BuildingsController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\BuildingsController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buildings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/buildings/{building}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'buildings.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\BuildingsController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\BuildingsController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buildings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/buildings/{building}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'buildings.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\BuildingsController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\BuildingsController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buildings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/buildings/{building}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'buildings.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\BuildingsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\BuildingsController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blocks.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/blocks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'blocks.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\BlockController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\BlockController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blocks.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/blocks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'blocks.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\BlockController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\BlockController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blocks.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/blocks/{block}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'blocks.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\BlockController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\BlockController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blocks.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/blocks/{block}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'blocks.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\BlockController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\BlockController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blocks.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/blocks/{block}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'blocks.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\BlockController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\BlockController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a7HpGRXHjJWRRp1i' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/classrooms/availability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ClassroomsController@checkAvailability',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ClassroomsController@checkAvailability',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::a7HpGRXHjJWRRp1i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'classrooms.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/classrooms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'classrooms.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ClassroomsController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ClassroomsController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'classrooms.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/classrooms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'classrooms.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ClassroomsController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ClassroomsController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'classrooms.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/classrooms/{classroom}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'classrooms.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ClassroomsController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ClassroomsController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'classrooms.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/classrooms/{classroom}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'classrooms.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ClassroomsController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ClassroomsController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'classrooms.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/classrooms/{classroom}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'classrooms.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ClassroomsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ClassroomsController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'periods.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/periods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'periods.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PeriodsController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PeriodsController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'periods.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/periods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'periods.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PeriodsController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PeriodsController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'periods.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/periods/{period}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'periods.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PeriodsController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PeriodsController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'periods.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/periods/{period}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'periods.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PeriodsController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PeriodsController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'periods.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/periods/{period}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'periods.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PeriodsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PeriodsController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'days.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/days',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'days.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DaysController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DaysController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'days.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/days',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'days.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DaysController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DaysController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'days.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/days/{day}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'days.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DaysController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DaysController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'days.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/days/{day}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'days.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DaysController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DaysController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'days.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/days/{day}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'days.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DaysController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DaysController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'academic-titles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/academic-titles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'academic-titles.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AcademicTitlesController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AcademicTitlesController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'academic-titles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/academic-titles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'academic-titles.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AcademicTitlesController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AcademicTitlesController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'academic-titles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/academic-titles/{academic_title}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'academic-titles.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AcademicTitlesController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AcademicTitlesController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'academic-titles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/academic-titles/{academic_title}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'academic-titles.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AcademicTitlesController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AcademicTitlesController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'academic-titles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/academic-titles/{academic_title}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'academic-titles.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AcademicTitlesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AcademicTitlesController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3mOCwXMA99iPr3Gz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/colleges/{college}/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@dashboard',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@dashboard',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::3mOCwXMA99iPr3Gz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j8RuW8JtHcZKkMQK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/dashboard/university-overview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DashboardController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::j8RuW8JtHcZKkMQK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tzuPeKQ8Glr6fCjv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/colleges/{college}/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::tzuPeKQ8Glr6fCjv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8DAdAbfIQiu5dTOV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/colleges/{college}/reports/course-groups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@getCourseGroups',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@getCourseGroups',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::8DAdAbfIQiu5dTOV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c2DVGMHqEyF0eds8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/colleges/{college}/reports/group-students-attendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@getGroupStudentsAttendance',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@getGroupStudentsAttendance',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::c2DVGMHqEyF0eds8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PJ2AYGwXAUUSv4ro' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/colleges/{college}/reports/group-grades',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@getGroupGradesReport',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@getGroupGradesReport',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::PJ2AYGwXAUUSv4ro',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QSXTZNXBtDPZbihZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/colleges/{college}/reports/qa-performance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@getQAPerformanceReport',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@getQAPerformanceReport',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::QSXTZNXBtDPZbihZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kiAcpcVF5qw9oNCk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/colleges/{college}/reports/qa-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@getQACourseDetails',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@getQACourseDetails',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::kiAcpcVF5qw9oNCk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z7nLx2IX3cB6VEFk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/colleges/{college}/reports/qa-detailed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@getQADetailedReport',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@getQADetailedReport',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::z7nLx2IX3cB6VEFk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dHPrzuFJv3BX7rk0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/colleges/{college}/reports/detailed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@detailedReport',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@detailedReport',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::dHPrzuFJv3BX7rk0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GWS4xlBmT8pr7e7C' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/colleges/{college}/reports/builder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@customBuilder',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@customBuilder',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::GWS4xlBmT8pr7e7C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dfxoFjcJwOiVEhFn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/colleges/{college}/reports/lecturer/{lecturer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@lecturerDetails',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ReportsController@lecturerDetails',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::dfxoFjcJwOiVEhFn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user-types.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'user-types.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserTypeController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserTypeController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user-types.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/user-types/{user_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'user-types.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserTypeController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserTypeController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user-types.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user-types/{user_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'user-types.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserTypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserTypeController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0msOjMUEokdJbTwV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user-types/{userTypeId}/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserTypePermissionController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserTypePermissionController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::0msOjMUEokdJbTwV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zYkC1oJq1q43Y1qr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user-types/{userType}/permissions/bulk-assign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserTypePermissionController@bulkAssign',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserTypePermissionController@bulkAssign',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::zYkC1oJq1q43Y1qr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rCnXh9reKTQ95AEN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/lecturers/import-csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LecturersController@importCsv',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LecturersController@importCsv',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::rCnXh9reKTQ95AEN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vnxhLhuIPlWLRRrt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/lecturers/financial-dues',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LecturersController@getFinancialDues',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LecturersController@getFinancialDues',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::vnxhLhuIPlWLRRrt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lecturers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/lecturers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'lecturers.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LecturersController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LecturersController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lecturers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/lecturers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'lecturers.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LecturersController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LecturersController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lecturers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/lecturers/{lecturer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'lecturers.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LecturersController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LecturersController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lecturers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/lecturers/{lecturer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'lecturers.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LecturersController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LecturersController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lecturers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/lecturers/{lecturer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'lecturers.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LecturersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LecturersController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0PNZ6uzYHE2gUcN0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/lecturer/my-courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LecturerGradebookController@getMyCourses',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LecturerGradebookController@getMyCourses',
        'namespace' => NULL,
        'prefix' => 'api/v1/lecturer',
        'where' => 
        array (
        ),
        'as' => 'generated::0PNZ6uzYHE2gUcN0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fzUPdcefaVzF3odi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/lecturer/gradebook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LecturerGradebookController@getGradebookData',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LecturerGradebookController@getGradebookData',
        'namespace' => NULL,
        'prefix' => 'api/v1/lecturer',
        'where' => 
        array (
        ),
        'as' => 'generated::fzUPdcefaVzF3odi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oqSKyssh1vOQtop8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/lecturer/assessments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LecturerGradebookController@addAssessmentColumn',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LecturerGradebookController@addAssessmentColumn',
        'namespace' => NULL,
        'prefix' => 'api/v1/lecturer',
        'where' => 
        array (
        ),
        'as' => 'generated::oqSKyssh1vOQtop8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0M3gZ9NittRmYc4T' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/lecturer/assessments/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LecturerGradebookController@deleteAssessmentColumn',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LecturerGradebookController@deleteAssessmentColumn',
        'namespace' => NULL,
        'prefix' => 'api/v1/lecturer',
        'where' => 
        array (
        ),
        'as' => 'generated::0M3gZ9NittRmYc4T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E3nj4W7u6oJjSzB4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/lecturer/grades/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LecturerGradebookController@updateStudentGrade',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LecturerGradebookController@updateStudentGrade',
        'namespace' => NULL,
        'prefix' => 'api/v1/lecturer',
        'where' => 
        array (
        ),
        'as' => 'generated::E3nj4W7u6oJjSzB4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'students.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/students',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'students.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentsController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentsController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ODgeyWJYeLA4FwPg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/student-groups/upsert-and-attach',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@upsertAndAttach',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@upsertAndAttach',
        'namespace' => NULL,
        'prefix' => 'api/v1/student-groups',
        'where' => 
        array (
        ),
        'as' => 'generated::ODgeyWJYeLA4FwPg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2ilS9DJUilfa7yqe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/student-groups/students/bulk-move',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@bulkMoveStudents',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@bulkMoveStudents',
        'namespace' => NULL,
        'prefix' => 'api/v1/student-groups',
        'where' => 
        array (
        ),
        'as' => 'generated::2ilS9DJUilfa7yqe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pk7oj0gwe4y2ggkx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/student-groups/{group}/move',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@moveGroupPath',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@moveGroupPath',
        'namespace' => NULL,
        'prefix' => 'api/v1/student-groups',
        'where' => 
        array (
        ),
        'as' => 'generated::pk7oj0gwe4y2ggkx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oQHUUJdQCA7xYNHZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/student-groups/import-csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@importCsv',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@importCsv',
        'namespace' => NULL,
        'prefix' => 'api/v1/student-groups',
        'where' => 
        array (
        ),
        'as' => 'generated::oQHUUJdQCA7xYNHZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jW8Skj9oBaSvv2Sl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/student-groups/import-external',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@importExternal',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@importExternal',
        'namespace' => NULL,
        'prefix' => 'api/v1/student-groups',
        'where' => 
        array (
        ),
        'as' => 'generated::jW8Skj9oBaSvv2Sl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZYqy75Me1OUPr8vy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/student-groups/{group}/students',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@detachStudent',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@detachStudent',
        'namespace' => NULL,
        'prefix' => 'api/v1/student-groups',
        'where' => 
        array (
        ),
        'as' => 'generated::ZYqy75Me1OUPr8vy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZWj4jsiifJEramSl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/student-groups/{student_group}/students',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@students',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@students',
        'namespace' => NULL,
        'prefix' => 'api/v1/student-groups',
        'where' => 
        array (
        ),
        'as' => 'generated::ZWj4jsiifJEramSl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RP6gdiPDuvKK8Euh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/groups/{studentGroup}/students',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@students',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@students',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::RP6gdiPDuvKK8Euh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student-groups.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/student-groups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'student-groups.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student-groups.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/student-groups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'student-groups.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student-groups.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/student-groups/{student_group}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'student-groups.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student-groups.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/student-groups/{student_group}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'student-groups.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student-groups.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/student-groups/{student_group}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'student-groups.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentGroupsController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'timetable.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/timetable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'timetable.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TimetableController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TimetableController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'timetable.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/timetable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'timetable.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TimetableController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TimetableController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'timetable.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/timetable/{timetable}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'timetable.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TimetableController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TimetableController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'timetable.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/timetable/{timetable}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'timetable.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TimetableController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TimetableController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'timetable.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/timetable/{timetable}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'timetable.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TimetableController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TimetableController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CAqfFi1a3njcB2g2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/lecture-sessions/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LectureSessionController@storeBulk',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LectureSessionController@storeBulk',
        'namespace' => NULL,
        'prefix' => 'api/v1/lecture-sessions',
        'where' => 
        array (
        ),
        'as' => 'generated::CAqfFi1a3njcB2g2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W5StZPWyNCWuhFmg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/lecture-sessions/start',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LectureSessionController@startSession',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LectureSessionController@startSession',
        'namespace' => NULL,
        'prefix' => 'api/v1/lecture-sessions',
        'where' => 
        array (
        ),
        'as' => 'generated::W5StZPWyNCWuhFmg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9ItjCEvoXWWiWWcI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/schedulable-lectures',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LectureSessionController@getSchedulableLectures',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LectureSessionController@getSchedulableLectures',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::9ItjCEvoXWWiWWcI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lecture-sessions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/lecture-sessions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'lecture-sessions.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LectureSessionController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LectureSessionController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lecture-sessions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/lecture-sessions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'lecture-sessions.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LectureSessionController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LectureSessionController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lecture-sessions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/lecture-sessions/{lecture_session}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'lecture-sessions.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LectureSessionController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LectureSessionController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lecture-sessions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/lecture-sessions/{lecture_session}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'lecture-sessions.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LectureSessionController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LectureSessionController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lecture-sessions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/lecture-sessions/{lecture_session}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'lecture-sessions.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LectureSessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LectureSessionController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CuKfVzfVKgo3kVF4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/sessions/{id}/finish',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LectureSessionController@finishLecture',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LectureSessionController@finishLecture',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::CuKfVzfVKgo3kVF4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sJUvD2AVlnDe97s0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/qr-codes/start-session',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QrCodesController@startSession',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QrCodesController@startSession',
        'namespace' => NULL,
        'prefix' => 'api/v1/qr-codes',
        'where' => 
        array (
        ),
        'as' => 'generated::sJUvD2AVlnDe97s0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Gk73Uc2YI0ekwok6' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/v1/qr-codes/{qrCode}/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QrCodesController@refresh',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QrCodesController@refresh',
        'namespace' => NULL,
        'prefix' => 'api/v1/qr-codes',
        'where' => 
        array (
        ),
        'as' => 'generated::Gk73Uc2YI0ekwok6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LmIJu2Q8QJcaiZSD' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/v1/qr-codes/{qrCode}/end',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QrCodesController@endSession',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QrCodesController@endSession',
        'namespace' => NULL,
        'prefix' => 'api/v1/qr-codes',
        'where' => 
        array (
        ),
        'as' => 'generated::LmIJu2Q8QJcaiZSD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::37Hf646Wadr7oIxC' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/v1/qr-codes/{qrCode}/extend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QrCodesController@extendDuration',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QrCodesController@extendDuration',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::37Hf646Wadr7oIxC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QM64BJnPMAk3V1Nx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/attendance/students/scan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentAttendanceController@scan',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentAttendanceController@scan',
        'namespace' => NULL,
        'prefix' => 'api/v1/attendance/students',
        'where' => 
        array (
        ),
        'as' => 'generated::QM64BJnPMAk3V1Nx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jMHrP74ACb3OaqqD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/attendance/students/manual',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentAttendanceController@manualEntry',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentAttendanceController@manualEntry',
        'namespace' => NULL,
        'prefix' => 'api/v1/attendance/students',
        'where' => 
        array (
        ),
        'as' => 'generated::jMHrP74ACb3OaqqD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gADOBXAhwvXgmncl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/attendance/scan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentAttendanceController@scan',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentAttendanceController@scan',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::gADOBXAhwvXgmncl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student-attendance.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/student-attendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'student-attendance.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentAttendanceController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentAttendanceController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student-attendance.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/student-attendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'student-attendance.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentAttendanceController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentAttendanceController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student-attendance.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/student-attendance/{student_attendance}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'student-attendance.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentAttendanceController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentAttendanceController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student-attendance.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/student-attendance/{student_attendance}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'student-attendance.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentAttendanceController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentAttendanceController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student-attendance.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/student-attendance/{student_attendance}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'student-attendance.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentAttendanceController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentAttendanceController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TzESMxR5AiJqWOwD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/attendance/lecturers/check-in',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LecturerAttendanceController@checkIn',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LecturerAttendanceController@checkIn',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::TzESMxR5AiJqWOwD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lecturer-attendance.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/lecturer-attendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'lecturer-attendance.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LecturerAttendanceController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LecturerAttendanceController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sessions.finalize' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/attendance/finalize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LecturerAttendanceController@finalizeSession',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LecturerAttendanceController@finalizeSession',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'sessions.finalize',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lecturer-attendance.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/lecturer-attendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'lecturer-attendance.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LecturerAttendanceController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LecturerAttendanceController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lecturer-attendance.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/lecturer-attendance/{lecturer_attendance}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'lecturer-attendance.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LecturerAttendanceController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LecturerAttendanceController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lecturer-attendance.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/lecturer-attendance/{lecturer_attendance}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'lecturer-attendance.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LecturerAttendanceController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LecturerAttendanceController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lecturer-attendance.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/lecturer-attendance/{lecturer_attendance}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'lecturer-attendance.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LecturerAttendanceController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LecturerAttendanceController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NeuTuXRVTlNLRAES' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/makeup-lectures',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MakeupLecturesController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MakeupLecturesController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/makeup-lectures',
        'where' => 
        array (
        ),
        'as' => 'generated::NeuTuXRVTlNLRAES',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::udqHHGGdlM0AXmWA' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/makeup-lectures/{makeupLecture}/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MakeupLecturesController@approve',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MakeupLecturesController@approve',
        'namespace' => NULL,
        'prefix' => 'api/v1/makeup-lectures',
        'where' => 
        array (
        ),
        'as' => 'generated::udqHHGGdlM0AXmWA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Gcy6ojE9Iq8vQLpW' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/makeup-lectures/{makeupLecture}/approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MakeupLecturesController@approve',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MakeupLecturesController@approve',
        'namespace' => NULL,
        'prefix' => 'api/v1/makeup-lectures',
        'where' => 
        array (
        ),
        'as' => 'generated::Gcy6ojE9Iq8vQLpW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DCcMaiHipyUCVmae' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/makeup-lectures/{makeupLecture}/schedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MakeupLecturesController@schedule',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MakeupLecturesController@schedule',
        'namespace' => NULL,
        'prefix' => 'api/v1/makeup-lectures',
        'where' => 
        array (
        ),
        'as' => 'generated::DCcMaiHipyUCVmae',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OsH2q05hivv47DVP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/colleges/{college}/makeup-requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MakeupLecturesController@indexByCollege',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MakeupLecturesController@indexByCollege',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::OsH2q05hivv47DVP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PI4bMkNn5vd1uk2H' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/makeup-lectures/{id}/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MakeupLecturesController@approve',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MakeupLecturesController@approve',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::PI4bMkNn5vd1uk2H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q8H30CHRPg5L0m2C' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/student-excuses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentExcusesController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentExcusesController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/student-excuses',
        'where' => 
        array (
        ),
        'as' => 'generated::q8H30CHRPg5L0m2C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bgA7iPImtYKn2Rmm' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/student-excuses/{excuse}/approve-by-head',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentExcusesController@approveByHead',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentExcusesController@approveByHead',
        'namespace' => NULL,
        'prefix' => 'api/v1/student-excuses',
        'where' => 
        array (
        ),
        'as' => 'generated::bgA7iPImtYKn2Rmm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h7ckGVIFqyZo20zn' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/student-excuses/{excuse}/approve-by-lecturer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentExcusesController@approveByLecturer',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentExcusesController@approveByLecturer',
        'namespace' => NULL,
        'prefix' => 'api/v1/student-excuses',
        'where' => 
        array (
        ),
        'as' => 'generated::h7ckGVIFqyZo20zn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xxFVbUvDrgVgGI7y' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/student-excuses/{id}/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StudentExcusesController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StudentExcusesController@updateStatus',
        'namespace' => NULL,
        'prefix' => 'api/v1/student-excuses',
        'where' => 
        array (
        ),
        'as' => 'generated::xxFVbUvDrgVgGI7y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o1SxRZ0HYmlvxvaM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::o1SxRZ0HYmlvxvaM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O3grhwaZwmGFM5pt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::O3grhwaZwmGFM5pt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QSXc4tpNruQdtL68' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/notifications/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::QSXc4tpNruQdtL68',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kgMeRI9xSPHEaeP9' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/notifications/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::kgMeRI9xSPHEaeP9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kLp4qhFsqrID5LaL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/devices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserDevicesController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserDevicesController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/devices',
        'where' => 
        array (
        ),
        'as' => 'generated::kLp4qhFsqrID5LaL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jPMGZVVd1DQ8r4sA' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/devices/{device}/enable-auto-attendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserDevicesController@enableAutoAttendance',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserDevicesController@enableAutoAttendance',
        'namespace' => NULL,
        'prefix' => 'api/v1/devices',
        'where' => 
        array (
        ),
        'as' => 'generated::jPMGZVVd1DQ8r4sA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8YJjMIF0SLhUIloY' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/devices/{device}/disable-auto-attendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserDevicesController@disableAutoAttendance',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserDevicesController@disableAutoAttendance',
        'namespace' => NULL,
        'prefix' => 'api/v1/devices',
        'where' => 
        array (
        ),
        'as' => 'generated::8YJjMIF0SLhUIloY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tgHFm9caMLa8tBjL' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/devices/{device}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserDevicesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserDevicesController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/devices',
        'where' => 
        array (
        ),
        'as' => 'generated::tgHFm9caMLa8tBjL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hpsDq5ySygDM0MRX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/sessions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SystemController@sessions',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SystemController@sessions',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::hpsDq5ySygDM0MRX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J3TnEsFoTAbkos3s' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/sessions/revoke',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SystemController@revokeSession',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SystemController@revokeSession',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::J3TnEsFoTAbkos3s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sipAvsWHIhEYmwfZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/audit-logs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SystemController@auditLogs',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SystemController@auditLogs',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::sipAvsWHIhEYmwfZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IPsP4vVsmpfDetEq' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/admin/security/policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SettingsController@updatePolicy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\SettingsController@updatePolicy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::IPsP4vVsmpfDetEq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ip-restrictions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/ip-restrictions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'ip-restrictions.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\IpRestrictionController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\IpRestrictionController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ip-restrictions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/ip-restrictions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'ip-restrictions.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\IpRestrictionController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\IpRestrictionController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ip-restrictions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/ip-restrictions/{ip_restriction}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'ip-restrictions.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\IpRestrictionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Admin\\IpRestrictionController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ss0fAIIg1srvdT04' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/devices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
          4 => 'auth:api',
          5 => 'activity:admin',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserDevicesController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserDevicesController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin/devices',
        'where' => 
        array (
        ),
        'as' => 'generated::ss0fAIIg1srvdT04',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zptw7cwBUJWnRsjE' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/admin/devices/{device}/enable-auto-attendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
          4 => 'auth:api',
          5 => 'activity:admin',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserDevicesController@enableAutoAttendance',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserDevicesController@enableAutoAttendance',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin/devices',
        'where' => 
        array (
        ),
        'as' => 'generated::Zptw7cwBUJWnRsjE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eCpprKUNzfk8YcFM' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/admin/devices/{device}/disable-auto-attendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
          4 => 'auth:api',
          5 => 'activity:admin',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserDevicesController@disableAutoAttendance',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserDevicesController@disableAutoAttendance',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin/devices',
        'where' => 
        array (
        ),
        'as' => 'generated::eCpprKUNzfk8YcFM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C1AsLsynXUDgVWVO' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/admin/devices/{device}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
          4 => 'auth:api',
          5 => 'activity:admin',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserDevicesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserDevicesController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin/devices',
        'where' => 
        array (
        ),
        'as' => 'generated::C1AsLsynXUDgVWVO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VzLXs6JEDNPjnnhL' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/admin/devices/{device}/toggle-attendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
          4 => 'auth:api',
          5 => 'activity:admin',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserDevicesController@toggleAutoAttendance',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserDevicesController@toggleAutoAttendance',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin/devices',
        'where' => 
        array (
        ),
        'as' => 'generated::VzLXs6JEDNPjnnhL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BfcMWu64PreRVJ4e' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/qa/student/pending',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Student\\QaEvaluationController@getPendingEvaluations',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Student\\QaEvaluationController@getPendingEvaluations',
        'namespace' => NULL,
        'prefix' => 'api/v1/qa/student',
        'where' => 
        array (
        ),
        'as' => 'generated::BfcMWu64PreRVJ4e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UCgR9OrurMd3YcBk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/qa/student/submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Student\\QaEvaluationController@submitEvaluation',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Student\\QaEvaluationController@submitEvaluation',
        'namespace' => NULL,
        'prefix' => 'api/v1/qa/student',
        'where' => 
        array (
        ),
        'as' => 'generated::UCgR9OrurMd3YcBk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vPh4edQNa9luI45J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/qa/student/form/{campaign}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Student\\QaEvaluationController@getEvaluationForm',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Student\\QaEvaluationController@getEvaluationForm',
        'namespace' => NULL,
        'prefix' => 'api/v1/qa/student',
        'where' => 
        array (
        ),
        'as' => 'generated::vPh4edQNa9luI45J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7Cuf4fwDD7I5NR4J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/program-learning-outcomes/{programId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ProgramLearningOutcomeController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ProgramLearningOutcomeController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/program-learning-outcomes',
        'where' => 
        array (
        ),
        'as' => 'generated::7Cuf4fwDD7I5NR4J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j5SnGuwSiOihsAFw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/program-learning-outcomes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ProgramLearningOutcomeController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ProgramLearningOutcomeController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/program-learning-outcomes',
        'where' => 
        array (
        ),
        'as' => 'generated::j5SnGuwSiOihsAFw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LAMyozq0GXK65coB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/program-learning-outcomes/{programId}/{ploId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ProgramLearningOutcomeController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ProgramLearningOutcomeController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/program-learning-outcomes',
        'where' => 
        array (
        ),
        'as' => 'generated::LAMyozq0GXK65coB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CFOC66pn90P7kXwP' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/program-learning-outcomes/{ploId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ProgramLearningOutcomeController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ProgramLearningOutcomeController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/program-learning-outcomes',
        'where' => 
        array (
        ),
        'as' => 'generated::CFOC66pn90P7kXwP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WF76bT4h6EezedxD' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/program-learning-outcomes/{ploId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ProgramLearningOutcomeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ProgramLearningOutcomeController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/program-learning-outcomes',
        'where' => 
        array (
        ),
        'as' => 'generated::WF76bT4h6EezedxD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'description.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/description',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseDescriptionController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseDescriptionController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
        'as' => 'description.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'description.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/courses/{course_id}/description',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseDescriptionController@updateDescription',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseDescriptionController@updateDescription',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
        'as' => 'description.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'goals.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/courses/{course_id}/goals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseDescriptionController@updateGoals',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseDescriptionController@updateGoals',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
        'as' => 'goals.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'learning-outcomes.stats' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/learning-outcomes/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseLearningOutcomeController@stats',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseLearningOutcomeController@stats',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
        'as' => 'learning-outcomes.stats',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'learning-outcomes.by-domain' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/learning-outcomes/domain/{domain}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseLearningOutcomeController@byDomain',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseLearningOutcomeController@byDomain',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
        'as' => 'learning-outcomes.by-domain',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'domain' => 'Knowledge|Intellectual|Professional|General',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'learning-outcomes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/learning-outcomes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'learning-outcomes.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseLearningOutcomeController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseLearningOutcomeController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'learning-outcomes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/courses/{course_id}/learning-outcomes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'learning-outcomes.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseLearningOutcomeController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseLearningOutcomeController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'learning-outcomes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/learning-outcomes/{clo_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'learning-outcomes.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseLearningOutcomeController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseLearningOutcomeController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'learning-outcomes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/courses/{course_id}/learning-outcomes/{clo_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'learning-outcomes.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseLearningOutcomeController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseLearningOutcomeController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'learning-outcomes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/courses/{course_id}/learning-outcomes/{clo_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'learning-outcomes.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseLearningOutcomeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseLearningOutcomeController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topics.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/topics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'topics.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseTopicController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseTopicController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topics.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/courses/{course_id}/topics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'topics.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseTopicController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseTopicController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topics.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/topics/{topic_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'topics.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseTopicController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseTopicController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topics.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/courses/{course_id}/topics/{topic_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'topics.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseTopicController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseTopicController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topics.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/courses/{course_id}/topics/{topic_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'topics.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseTopicController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseTopicController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topics.by-part' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/topics/by-part/{part}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseTopicController@byPart',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseTopicController@byPart',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
        'as' => 'topics.by-part',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'part' => 'نظري|عملي|تمارين|سريري',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topics.stats' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/topics/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseTopicController@stats',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseTopicController@stats',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
        'as' => 'topics.stats',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assignments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/assignments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'assignments.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssignmentController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssignmentController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assignments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/courses/{course_id}/assignments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'assignments.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssignmentController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssignmentController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assignments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/assignments/{assignment_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'assignments.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssignmentController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssignmentController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assignments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/courses/{course_id}/assignments/{assignment_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'assignments.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssignmentController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssignmentController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assignments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/courses/{course_id}/assignments/{assignment_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'assignments.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssignmentController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssignmentController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assignments.by-part' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/assignments/by-part/{part}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssignmentController@byPart',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssignmentController@byPart',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
        'as' => 'assignments.by-part',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'part' => 'نظري|عملي|تمارين|سريري',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assignments.total-grade' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/assignments/total-grade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssignmentController@totalGrade',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssignmentController@totalGrade',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
        'as' => 'assignments.total-grade',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assessments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/assessments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'assessments.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssessmentController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssessmentController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assessments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/courses/{course_id}/assessments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'assessments.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssessmentController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssessmentController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assessments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/assessments/{assessment_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'assessments.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssessmentController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssessmentController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assessments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/courses/{course_id}/assessments/{assessment_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'assessments.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssessmentController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssessmentController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assessments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/courses/{course_id}/assessments/{assessment_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'assessments.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssessmentController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssessmentController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assessments.by-type' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/assessments/by-type/{assessment_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssessmentController@byType',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssessmentController@byType',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
        'as' => 'assessments.by-type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assessments.stats' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/assessments/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssessmentController@stats',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssessmentController@stats',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
        'as' => 'assessments.stats',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assessments.balance-check' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/assessments/balance-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssessmentController@balanceCheck',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseAssessmentController@balanceCheck',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
        'as' => 'assessments.balance-check',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'references.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/references',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'references.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseReferenceController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseReferenceController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'references.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/courses/{course_id}/references',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'references.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseReferenceController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseReferenceController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'references.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/references/{reference_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'references.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseReferenceController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseReferenceController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'references.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/courses/{course_id}/references/{reference_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'references.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseReferenceController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseReferenceController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'references.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/courses/{course_id}/references/{reference_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'references.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseReferenceController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseReferenceController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'references.by-type' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/references/by-type/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseReferenceController@byType',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseReferenceController@byType',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
        'as' => 'references.by-type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'type' => 'main|support|electronic',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'references.stats' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/references/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseReferenceController@stats',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseReferenceController@stats',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
        'as' => 'references.stats',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'policies.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/policies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'policies.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CoursePolicyController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CoursePolicyController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'policies.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/courses/{course_id}/policies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'policies.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CoursePolicyController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CoursePolicyController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'policies.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/policies/{policy_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'policies.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CoursePolicyController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CoursePolicyController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'policies.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/courses/{course_id}/policies/{policy_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'policies.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CoursePolicyController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CoursePolicyController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'policies.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/courses/{course_id}/policies/{policy_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'policies.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CoursePolicyController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CoursePolicyController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'policies.fixed-template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/policies/fixed-template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CoursePolicyController@fixedTemplate',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CoursePolicyController@fixedTemplate',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
        'as' => 'policies.fixed-template',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'policies.fixed-only' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/policies/fixed-only',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CoursePolicyController@fixedOnly',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CoursePolicyController@fixedOnly',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
        'as' => 'policies.fixed-only',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'policies.additional-only' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/policies/additional-only',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CoursePolicyController@additionalOnly',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CoursePolicyController@additionalOnly',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}',
        'where' => 
        array (
        ),
        'as' => 'policies.additional-only',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'questions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/topics/{topic_id}/questions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'questions.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/topics/{topic_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'questions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/topics/{topic_id}/questions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'questions.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/topics/{topic_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'questions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/topics/{topic_id}/questions/{question_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'questions.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/topics/{topic_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'questions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/topics/{topic_id}/questions/{question_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'questions.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/topics/{topic_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'questions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/topics/{topic_id}/questions/{question_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'questions.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/topics/{topic_id}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'questions.by-type' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/topics/{topic_id}/questions/by-type/{question_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@byType',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@byType',
        'namespace' => NULL,
        'prefix' => 'api/v1/topics/{topic_id}',
        'where' => 
        array (
        ),
        'as' => 'questions.by-type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'question_type' => 'MCQ|essay',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'questions.used-in-exams' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/topics/{topic_id}/questions/used-in-exams',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@usedInExams',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@usedInExams',
        'namespace' => NULL,
        'prefix' => 'api/v1/topics/{topic_id}',
        'where' => 
        array (
        ),
        'as' => 'questions.used-in-exams',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'questions.stats' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/topics/{topic_id}/questions/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@stats',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@stats',
        'namespace' => NULL,
        'prefix' => 'api/v1/topics/{topic_id}',
        'where' => 
        array (
        ),
        'as' => 'questions.stats',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GeZ8aqdzUCHXeBoo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/question-bank',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@courseBank',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@courseBank',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}/question-bank',
        'where' => 
        array (
        ),
        'as' => 'generated::GeZ8aqdzUCHXeBoo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2Pj2NikAHAA6EZNH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/courses/{course_id}/question-bank',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@storeCourseBank',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@storeCourseBank',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}/question-bank',
        'where' => 
        array (
        ),
        'as' => 'generated::2Pj2NikAHAA6EZNH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KRtZQc2ScLF689aM' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/courses/{course_id}/question-bank/{question_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@updateCourseBank',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@updateCourseBank',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}/question-bank',
        'where' => 
        array (
        ),
        'as' => 'generated::KRtZQc2ScLF689aM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PNoLgL8mLY1ht8og' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/courses/{course_id}/question-bank/{question_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@destroyCourseBank',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TopicQuestionController@destroyCourseBank',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}/question-bank',
        'where' => 
        array (
        ),
        'as' => 'generated::PNoLgL8mLY1ht8og',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teaching-strategies.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/teaching-strategies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'teaching-strategies.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TeachingStrategyController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TeachingStrategyController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teaching-strategies.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/teaching-strategies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'teaching-strategies.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TeachingStrategyController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TeachingStrategyController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teaching-strategies.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/teaching-strategies/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'teaching-strategies.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TeachingStrategyController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TeachingStrategyController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teaching-strategies.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/teaching-strategies/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'teaching-strategies.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TeachingStrategyController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TeachingStrategyController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teaching-strategies.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/teaching-strategies/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'teaching-strategies.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TeachingStrategyController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TeachingStrategyController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teaching-strategies.by-category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/teaching-strategies/by-category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TeachingStrategyController@byCategory',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TeachingStrategyController@byCategory',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'teaching-strategies.by-category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teaching-strategies.active-only' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/teaching-strategies/active-only',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TeachingStrategyController@activeOnly',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TeachingStrategyController@activeOnly',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'teaching-strategies.active-only',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assessment-methods.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/assessment-methods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'assessment-methods.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AssessmentMethodController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AssessmentMethodController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assessment-methods.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/assessment-methods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'assessment-methods.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AssessmentMethodController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AssessmentMethodController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assessment-methods.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/assessment-methods/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'assessment-methods.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AssessmentMethodController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AssessmentMethodController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assessment-methods.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/assessment-methods/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'assessment-methods.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AssessmentMethodController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AssessmentMethodController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assessment-methods.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/assessment-methods/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'as' => 'assessment-methods.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AssessmentMethodController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AssessmentMethodController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assessment-methods.by-category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/assessment-methods/by-category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AssessmentMethodController@byCategory',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AssessmentMethodController@byCategory',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'assessment-methods.by-category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assessment-methods.active-only' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/assessment-methods/active-only',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AssessmentMethodController@activeOnly',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AssessmentMethodController@activeOnly',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'assessment-methods.active-only',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::662Ueb2pjLErWA9R' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/program-option-audits',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ProgramOptionAuditController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ProgramOptionAuditController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::662Ueb2pjLErWA9R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V1O4T3D9jbWqb6P2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course_id}/outcome-mappings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseOutcomeMappingController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseOutcomeMappingController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}/outcome-mappings',
        'where' => 
        array (
        ),
        'as' => 'generated::V1O4T3D9jbWqb6P2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GjPPq0Ka35CdeWii' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/courses/{course_id}/outcome-mappings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseOutcomeMappingController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseOutcomeMappingController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}/outcome-mappings',
        'where' => 
        array (
        ),
        'as' => 'generated::GjPPq0Ka35CdeWii',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8YGx4AfUs2tWly6x' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/courses/{course_id}/outcome-mappings/{clo_code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'activity:admin',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CourseOutcomeMappingController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CourseOutcomeMappingController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/courses/{course_id}/outcome-mappings',
        'where' => 
        array (
        ),
        'as' => 'generated::8YGx4AfUs2tWly6x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JTZTBrMdihL2p4qR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/colleges/{college}/financial/cycle',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\FinancialController@getCycleByMonth',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\FinancialController@getCycleByMonth',
        'namespace' => NULL,
        'prefix' => 'api/v1/colleges/{college}/financial',
        'where' => 
        array (
        ),
        'as' => 'generated::JTZTBrMdihL2p4qR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TpTiPpbA0SupUOl6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/colleges/{college}/financial/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\FinancialController@generateCycle',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\FinancialController@generateCycle',
        'namespace' => NULL,
        'prefix' => 'api/v1/colleges/{college}/financial',
        'where' => 
        array (
        ),
        'as' => 'generated::TpTiPpbA0SupUOl6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PDilG9phs9LoaPe9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/colleges/{college}/financial/payouts/{payout}/adjustments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\FinancialController@addAdjustment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\FinancialController@addAdjustment',
        'namespace' => NULL,
        'prefix' => 'api/v1/colleges/{college}/financial',
        'where' => 
        array (
        ),
        'as' => 'generated::PDilG9phs9LoaPe9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zgpicBK4Cei6TUIW' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/colleges/{college}/financial/cycles/{cycle}/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\FinancialController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\FinancialController@updateStatus',
        'namespace' => NULL,
        'prefix' => 'api/v1/colleges/{college}/financial',
        'where' => 
        array (
        ),
        'as' => 'generated::zgpicBK4Cei6TUIW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mdJEbOmItlf58pQn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/qa/forms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaManagerController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaManagerController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/qa',
        'where' => 
        array (
        ),
        'as' => 'generated::mdJEbOmItlf58pQn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::udQCqyZAWrvGIcc8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/qa/forms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaManagerController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaManagerController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/qa',
        'where' => 
        array (
        ),
        'as' => 'generated::udQCqyZAWrvGIcc8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::auPrLbaboplHmEn8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/qa/forms/{form}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaManagerController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaManagerController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/qa',
        'where' => 
        array (
        ),
        'as' => 'generated::auPrLbaboplHmEn8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0pcNFIq0V7svgstG' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/qa/forms/{form}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaManagerController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaManagerController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/qa',
        'where' => 
        array (
        ),
        'as' => 'generated::0pcNFIq0V7svgstG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vh9aSxtaODHOfQLg' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/qa/forms/{form}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaManagerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaManagerController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/qa',
        'where' => 
        array (
        ),
        'as' => 'generated::Vh9aSxtaODHOfQLg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9xCds89yglyZbYHN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/qa/campaigns/create-meta',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaCampaignsController@getCreationMeta',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaCampaignsController@getCreationMeta',
        'namespace' => NULL,
        'prefix' => 'api/v1/qa',
        'where' => 
        array (
        ),
        'as' => 'generated::9xCds89yglyZbYHN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wKr2afl7ffWrQBOq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/qa/campaigns/year-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaCampaignsController@getYearDetails',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaCampaignsController@getYearDetails',
        'namespace' => NULL,
        'prefix' => 'api/v1/qa',
        'where' => 
        array (
        ),
        'as' => 'generated::wKr2afl7ffWrQBOq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NipchY3b2JXUXiuV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/qa/campaigns',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaCampaignsController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaCampaignsController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/qa',
        'where' => 
        array (
        ),
        'as' => 'generated::NipchY3b2JXUXiuV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4N2SIGl5DxlDVLLr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/qa/campaigns',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaCampaignsController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaCampaignsController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1/qa',
        'where' => 
        array (
        ),
        'as' => 'generated::4N2SIGl5DxlDVLLr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nJ4jPJy4yq9UdyVT' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/qa/campaigns/{campaign}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaCampaignsController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaCampaignsController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/qa',
        'where' => 
        array (
        ),
        'as' => 'generated::nJ4jPJy4yq9UdyVT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PcJcD3NTCl9vqk3C' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/qa/campaigns/{campaign}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaCampaignsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Admin\\QaCampaignsController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/qa',
        'where' => 
        array (
        ),
        'as' => 'generated::PcJcD3NTCl9vqk3C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EH2YV53SwUfVu77A' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/qa/reports/campaign-summary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Reports\\QaAnalysisController@getCampaignSummary',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Reports\\QaAnalysisController@getCampaignSummary',
        'namespace' => NULL,
        'prefix' => 'api/v1/qa',
        'where' => 
        array (
        ),
        'as' => 'generated::EH2YV53SwUfVu77A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::heGGIbOfGTO6Fwxd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/qa/reports/campaign-timetables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Reports\\QaAnalysisController@getCampaignTimetables',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Reports\\QaAnalysisController@getCampaignTimetables',
        'namespace' => NULL,
        'prefix' => 'api/v1/qa',
        'where' => 
        array (
        ),
        'as' => 'generated::heGGIbOfGTO6Fwxd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dYAL0cV4ppUr5GdU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/qa/reports/execution/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Reports\\CourseExecutionReportController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Reports\\CourseExecutionReportController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/qa/reports',
        'where' => 
        array (
        ),
        'as' => 'generated::dYAL0cV4ppUr5GdU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t7INJI4gREMHdpQK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/qa/reports/execution/details/{timetable}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Reports\\CourseExecutionReportController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Reports\\CourseExecutionReportController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/qa/reports',
        'where' => 
        array (
        ),
        'as' => 'generated::t7INJI4gREMHdpQK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2RFnzef8S1XQG8MS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/qa/reports/execution/filters-meta',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Reports\\CourseExecutionReportController@getFiltersMeta',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QA\\Reports\\CourseExecutionReportController@getFiltersMeta',
        'namespace' => NULL,
        'prefix' => 'api/v1/qa/reports',
        'where' => 
        array (
        ),
        'as' => 'generated::2RFnzef8S1XQG8MS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6TZFo4kJY7Im0Y6G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/courses/{course}/qa-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QualityAssuranceController@getCourseQaData',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QualityAssuranceController@getCourseQaData',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::6TZFo4kJY7Im0Y6G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PH2O5Mq62TRBZ5xd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/timetable/{timetable}/topics-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TimetableController@getTopicsStatus',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TimetableController@getTopicsStatus',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::PH2O5Mq62TRBZ5xd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gJ5wh20XRjmqveyb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/qa/outcomes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QualityAssuranceController@storeOutcome',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QualityAssuranceController@storeOutcome',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::gJ5wh20XRjmqveyb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m7R9kiVa6lY4rDh9' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/qa/outcomes/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QualityAssuranceController@updateOutcome',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QualityAssuranceController@updateOutcome',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::m7R9kiVa6lY4rDh9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PHKV6igIbGSSnSnE' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/qa/outcomes/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QualityAssuranceController@destroyOutcome',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QualityAssuranceController@destroyOutcome',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::PHKV6igIbGSSnSnE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6mQ3ZrsbmpCKZn9m' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/qa/topics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QualityAssuranceController@storeTopic',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QualityAssuranceController@storeTopic',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::6mQ3ZrsbmpCKZn9m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RSBw8L9AMdabD5BC' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/qa/topics/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QualityAssuranceController@updateTopic',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QualityAssuranceController@updateTopic',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::RSBw8L9AMdabD5BC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::upWIdu9Z1CKiG8xn' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/qa/topics/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QualityAssuranceController@destroyTopic',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QualityAssuranceController@destroyTopic',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::upWIdu9Z1CKiG8xn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V0LKNCgw9LgVph2X' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/qa/questions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QualityAssuranceController@storeQuestion',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QualityAssuranceController@storeQuestion',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::V0LKNCgw9LgVph2X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4VGtJyH2s996OymJ' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/qa/questions/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QualityAssuranceController@updateQuestion',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QualityAssuranceController@updateQuestion',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::4VGtJyH2s996OymJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IJhYdPUgi7N2aeh5' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/qa/questions/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\QualityAssuranceController@destroyQuestion',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\QualityAssuranceController@destroyQuestion',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::IJhYdPUgi7N2aeh5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mo8N5kC7xovytFSf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/sessions/{sessionId}/attachments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LectureAttachmentsController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LectureAttachmentsController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::mo8N5kC7xovytFSf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HnUbKSIUJCSQlbSh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/attachments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LectureAttachmentsController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LectureAttachmentsController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::HnUbKSIUJCSQlbSh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AhMFR52WTA99KFeZ' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/attachments/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LectureAttachmentsController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LectureAttachmentsController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::AhMFR52WTA99KFeZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gCL9Pjc4kuS7jbTa' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/attachments/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LectureAttachmentsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LectureAttachmentsController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::gCL9Pjc4kuS7jbTa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::My7VOslZNwOsVSp6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/reports/university-comprehensive',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UniversityReportController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UniversityReportController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::My7VOslZNwOsVSp6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IODnrrnF2S3ObSYH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'up',
      'action' => 
      array (
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:838:"function () {
                    $exception = null;

                    try {
                        \\Illuminate\\Support\\Facades\\Event::dispatch(new \\Illuminate\\Foundation\\Events\\DiagnosingHealth);
                    } catch (\\Throwable $e) {
                        if (app()->hasDebugModeEnabled()) {
                            throw $e;
                        }

                        report($e);

                        $exception = $e->getMessage();
                    }

                    return response(\\Illuminate\\Support\\Facades\\View::file(\'C:\\\\xampp\\\\htdocs\\\\unihub\\\\unihub-API\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Foundation\\\\Configuration\'.\'/../resources/health-up.blade.php\', [
                        \'exception\' => $exception,
                    ]), status: $exception ? 500 : 200);
                }";s:5:"scope";s:54:"Illuminate\\Foundation\\Configuration\\ApplicationBuilder";s:4:"this";N;s:4:"self";s:32:"000000000000070b0000000000000000";}}',
        'as' => 'generated::IODnrrnF2S3ObSYH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JCSy5PsPBZM68yDi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000083f0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JCSy5PsPBZM68yDi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x5dS9thFTrj7gsEa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'check-url',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:60:"function () {
    return \\asset(\'storage/colleges/1.png\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008410000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::x5dS9thFTrj7gsEa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dev.routes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dev/routes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RoutesController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoutesController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dev.routes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dev.routes.json' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dev/routes/json',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RoutesController@json',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoutesController@json',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dev.routes.json',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.routes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/routes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RoutesController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoutesController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.routes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.routes.json' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/routes/json',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RoutesController@json',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoutesController@json',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.routes.json',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storage.local' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'storage/{path}',
      'action' => 
      array (
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:3:{s:4:"disk";s:5:"local";s:6:"config";a:5:{s:6:"driver";s:5:"local";s:4:"root";s:53:"C:\\xampp\\htdocs\\unihub\\unihub-API\\storage\\app/private";s:5:"serve";b:1;s:5:"throw";b:0;s:6:"report";b:0;}s:12:"isProduction";b:0;}s:8:"function";s:323:"function (\\Illuminate\\Http\\Request $request, string $path) use ($disk, $config, $isProduction) {
                    return (new \\Illuminate\\Filesystem\\ServeFile(
                        $disk,
                        $config,
                        $isProduction
                    ))($request, $path);
                }";s:5:"scope";s:47:"Illuminate\\Filesystem\\FilesystemServiceProvider";s:4:"this";N;s:4:"self";s:32:"00000000000008450000000000000000";}}',
        'as' => 'storage.local',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
