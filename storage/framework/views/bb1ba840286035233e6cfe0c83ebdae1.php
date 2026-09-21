<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routes Viewer Pro - عرض مفصل للمسارات</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --info: #3b82f6;
            --dark: #1f2937;
            --light: #f3f4f6;
            --border: #e5e7eb;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Cairo', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 1600px;
            margin: 0 auto;
        }

        /* Header */
        .header {
            background: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 24px;
        }

        .header h1 {
            font-size: 36px;
            color: var(--dark);
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .header p {
            color: #6b7280;
            font-size: 15px;
        }

        /* Stats Grid */
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 16px;
            margin-bottom: 24px;
        }

        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.07);
            text-align: center;
            transition: transform 0.2s, box-shadow 0.2s;
            border-top: 4px solid transparent;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.12);
        }

        .stat-card.primary { border-top-color: var(--primary); }
        .stat-card.success { border-top-color: var(--success); }
        .stat-card.info { border-top-color: var(--info); }
        .stat-card.warning { border-top-color: var(--warning); }
        .stat-card.danger { border-top-color: var(--danger); }

        .stat-card h3 {
            font-size: 13px;
            color: #9ca3af;
            margin-bottom: 8px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .stat-card p {
            font-size: 32px;
            font-weight: 700;
            color: var(--dark);
        }

        .stat-card.primary p { color: var(--primary); }
        .stat-card.success p { color: var(--success); }
        .stat-card.info p { color: var(--info); }
        .stat-card.warning p { color: var(--warning); }
        .stat-card.danger p { color: var(--danger); }

        /* Filters */
        .filters {
            background: white;
            padding: 24px;
            border-radius: 12px;
            margin-bottom: 24px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.07);
        }

        .filters-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
            margin-bottom: 16px;
        }

        .filter-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #4b5563;
            margin-bottom: 6px;
        }

        .filters input,
        .filters select {
            width: 100%;
            padding: 10px 14px;
            border: 2px solid var(--border);
            border-radius: 8px;
            font-size: 14px;
            font-family: inherit;
            transition: border-color 0.2s;
        }

        .filters input:focus,
        .filters select:focus {
            outline: none;
            border-color: var(--primary);
        }

        .filter-checkboxes {
            display: flex;
            gap: 24px;
            flex-wrap: wrap;
            margin-top: 16px;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            font-size: 14px;
        }

        .checkbox-label input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .filters-actions {
            display: flex;
            gap: 12px;
            margin-top: 16px;
        }

        .btn {
            padding: 10px 24px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            font-family: inherit;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: #4f46e5;
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.4);
        }

        .btn-secondary {
            background: #6b7280;
            color: white;
        }

        .btn-secondary:hover {
            background: #4b5563;
        }

        /* Route Card */
        .route-card {
            background: white;
            border-radius: 12px;
            margin-bottom: 16px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.06);
            overflow: hidden;
            transition: all 0.2s;
        }

        .route-card:hover {
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        }

        .route-header {
            padding: 20px;
            border-bottom: 1px solid var(--border);
            cursor: pointer;
            display: grid;
            grid-template-columns: auto 1fr auto;
            gap: 16px;
            align-items: center;
        }

        .route-methods {
            display: flex;
            gap: 6px;
            flex-wrap: wrap;
        }

        .method {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 700;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .method-get { background: var(--success); }
        .method-post { background: var(--info); }
        .method-put { background: var(--warning); }
        .method-delete { background: var(--danger); }
        .method-patch { background: #8b5cf6; }

        .route-uri {
            flex: 1;
        }

        .route-uri .uri {
            font-family: 'Courier New', monospace;
            font-size: 15px;
            color: var(--dark);
            font-weight: 600;
        }

        .route-uri .name {
            font-size: 12px;
            color: var(--success);
            margin-top: 4px;
        }

        .route-badges {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .badge {
            padding: 4px 12px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .badge-api { background: #dbeafe; color: #1e40af; }
        .badge-public { background: #d1fae5; color: #065f46; }
        .badge-protected { background: #fee2e2; color: #991b1b; }
        .badge-admin { background: #fef3c7; color: #92400e; }
        .badge-rate-limit { background: #e0e7ff; color: #3730a3; }

        .route-details {
            padding: 20px;
            background: #f9fafb;
            display: none;
        }

        .route-details.active {
            display: block;
        }

        .detail-section {
            margin-bottom: 20px;
        }

        .detail-section h4 {
            font-size: 13px;
            color: #6b7280;
            text-transform: uppercase;
            margin-bottom: 12px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .detail-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 16px;
        }

        .detail-item {
            background: white;
            padding: 12px;
            border-radius: 8px;
            border-right: 3px solid var(--primary);
        }

        .detail-item strong {
            display: block;
            font-size: 12px;
            color: #6b7280;
            margin-bottom: 4px;
        }

        .detail-item span {
            font-size: 14px;
            color: var(--dark);
            font-family: 'Courier New', monospace;
        }

        .middleware-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .middleware-item {
            background: #f3f4f6;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-family: 'Courier New', monospace;
            color: #374151;
        }

        .param-list {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .param-item {
            background: white;
            padding: 10px;
            border-radius: 6px;
            border-right: 2px solid var(--info);
            font-size: 13px;
        }

        .param-item .param-name {
            font-weight: 600;
            color: var(--dark);
            font-family: 'Courier New', monospace;
        }

        .param-item .param-type {
            color: var(--info);
            font-size: 11px;
            margin-right: 8px;
        }

        .param-item .param-required {
            color: var(--danger);
            font-size: 10px;
            font-weight: 600;
        }

        .expand-icon {
            transition: transform 0.3s;
            font-size: 20px;
        }

        .expand-icon.rotated {
            transform: rotate(180deg);
        }

        .no-results {
            background: white;
            padding: 60px;
            text-align: center;
            border-radius: 12px;
            color: #9ca3af;
        }

        .no-results svg {
            width: 80px;
            height: 80px;
            margin-bottom: 16px;
            opacity: 0.5;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>
                <span>🛣️</span>
                Routes Viewer Pro
            </h1>
            <p>عرض تفصيلي شامل لجميع المسارات في النظام مع المعلومات الكاملة</p>
        </div>

        <!-- Stats -->
        <div class="stats">
            <div class="stat-card primary">
                <h3>إجمالي المسارات</h3>
                <p><?php echo e($stats['total']); ?></p>
            </div>
            <div class="stat-card success">
                <h3>GET</h3>
                <p><?php echo e($stats['get']); ?></p>
            </div>
            <div class="stat-card info">
                <h3>POST</h3>
                <p><?php echo e($stats['post']); ?></p>
            </div>
            <div class="stat-card warning">
                <h3>PUT</h3>
                <p><?php echo e($stats['put']); ?></p>
            </div>
            <div class="stat-card danger">
                <h3>DELETE</h3>
                <p><?php echo e($stats['delete']); ?></p>
            </div>
            <div class="stat-card primary">
                <h3>API Routes</h3>
                <p><?php echo e($stats['api']); ?></p>
            </div>
            <div class="stat-card success">
                <h3>Web Routes</h3>
                <p><?php echo e($stats['web']); ?></p>
            </div>
            <div class="stat-card info">
                <h3>عامة</h3>
                <p><?php echo e($stats['public']); ?></p>
            </div>
            <div class="stat-card warning">
                <h3>محمية</h3>
                <p><?php echo e($stats['protected']); ?></p>
            </div>
            <div class="stat-card danger">
                <h3>Admin فقط</h3>
                <p><?php echo e($stats['admin_only']); ?></p>
            </div>
            <div class="stat-card primary">
                <h3>مع Rate Limit</h3>
                <p><?php echo e($stats['with_rate_limit']); ?></p>
            </div>
            <div class="stat-card success">
                <h3>Controllers</h3>
                <p><?php echo e($stats['unique_controllers']); ?></p>
            </div>
        </div>

        <!-- Filters -->
        <form method="GET" class="filters">
            <div class="filters-grid">
                <div class="filter-group">
                    <label>🔍 البحث</label>
                    <input 
                        type="text" 
                        name="search" 
                        placeholder="ابحث في URI, Name, Controller..." 
                        value="<?php echo e(request('search')); ?>"
                    >
                </div>

                <div class="filter-group">
                    <label>📋 HTTP Method</label>
                    <select name="method">
                        <option value="">جميع Methods</option>
                        <option value="GET" <?php echo e(request('method') == 'GET' ? 'selected' : ''); ?>>GET</option>
                        <option value="POST" <?php echo e(request('method') == 'POST' ? 'selected' : ''); ?>>POST</option>
                        <option value="PUT" <?php echo e(request('method') == 'PUT' ? 'selected' : ''); ?>>PUT</option>
                        <option value="PATCH" <?php echo e(request('method') == 'PATCH' ? 'selected' : ''); ?>>PATCH</option>
                        <option value="DELETE" <?php echo e(request('method') == 'DELETE' ? 'selected' : ''); ?>>DELETE</option>
                    </select>
                </div>
            </div>

            <div class="filter-checkboxes">
                <label class="checkbox-label">
                    <input type="checkbox" name="is_api" value="1" <?php echo e(request('is_api') ? 'checked' : ''); ?>>
                    <span>API Routes فقط</span>
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" name="is_public" value="1" <?php echo e(request('is_public') ? 'checked' : ''); ?>>
                    <span>المسارات العامة فقط</span>
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" name="requires_admin" value="1" <?php echo e(request('requires_admin') ? 'checked' : ''); ?>>
                    <span>Admin فقط</span>
                </label>
            </div>

            <div class="filters-actions">
                <button type="submit" class="btn btn-primary">🔍 فلترة</button>
                <a href="<?php echo e(route('admin.routes')); ?>" style="text-decoration: none;">
                    <button type="button" class="btn btn-secondary">🔄 إعادة تعيين</button>
                </a>
            </div>
        </form>

        <!-- Routes List -->
        <?php $__empty_1 = true; $__currentLoopData = $routes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $route): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="route-card">
            <div class="route-header" onclick="toggleDetails(this)">
                <div class="route-methods">
                    <?php $__currentLoopData = $route['methods']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="method method-<?php echo e(strtolower($method)); ?>"><?php echo e($method); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="route-uri">
                    <div class="uri"><?php echo e($route['uri']); ?></div>
                    <?php if($route['name']): ?>
                    <div class="name">📌 <?php echo e($route['name']); ?></div>
                    <?php endif; ?>
                </div>

                <div class="route-badges">
                    <?php if($route['is_api']): ?>
                    <span class="badge badge-api">API</span>
                    <?php endif; ?>

                    <?php if($route['is_public']): ?>
                    <span class="badge badge-public">عام</span>
                    <?php else: ?>
                    <span class="badge badge-protected">محمي</span>
                    <?php endif; ?>

                    <?php if($route['requires_admin']): ?>
                    <span class="badge badge-admin">Admin</span>
                    <?php endif; ?>

                    <?php if($route['rate_limit']): ?>
                    <span class="badge badge-rate-limit"><?php echo e($route['rate_limit']); ?></span>
                    <?php endif; ?>

                    <span class="expand-icon">▼</span>
                </div>
            </div>

            <div class="route-details">
                <!-- Controller & Method -->
                <div class="detail-section">
                    <h4>📁 Controller & Method</h4>
                    <div class="detail-grid">
                        <div class="detail-item">
                            <strong>Controller:</strong>
                            <span><?php echo e($route['controller'] ?? 'Closure'); ?></span>
                        </div>
                        <div class="detail-item">
                            <strong>Method:</strong>
                            <span><?php echo e($route['method'] ?? '-'); ?></span>
                        </div>
                        <div class="detail-item">
                            <strong>Action:</strong>
                            <span><?php echo e(Str::limit($route['action'], 50)); ?></span>
                        </div>
                    </div>
                </div>

                <!-- Middleware -->
                <?php if(count($route['middleware']) > 0): ?>
                <div class="detail-section">
                    <h4>🛡️ Middleware (<?php echo e(count($route['middleware'])); ?>)</h4>
                    <div class="middleware-list">
                        <?php $__currentLoopData = $route['middleware']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $middleware): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="middleware-item"><?php echo e($middleware); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Parameters -->
                <?php if(count($route['parameters']) > 0): ?>
                <div class="detail-section">
                    <h4>📝 Parameters (<?php echo e(count($route['parameters'])); ?>)</h4>
                    <div class="param-list">
                        <?php $__currentLoopData = $route['parameters']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $param): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="param-item">
                            <span class="param-type">[<?php echo e($param['type']); ?>]</span>
                            <span class="param-name"><?php echo e($param['name']); ?></span>
                            <?php if($param['required']): ?>
                            <span class="param-required">* Required</span>
                            <?php else: ?>
                            <span style="color: #6b7280; font-size: 11px;">Optional</span>
                            <?php endif; ?>
                            <?php if(isset($param['default'])): ?>
                            <span style="color: #9ca3af; font-size: 11px;"> = <?php echo e(json_encode($param['default'])); ?></span>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Documentation -->
                <?php if($route['documentation']): ?>
                <div class="detail-section">
                    <h4>📚 Documentation</h4>
                    <div class="detail-item">
                        <?php if($route['documentation']['description']): ?>
                        <strong>Description:</strong>
                        <span><?php echo e($route['documentation']['description']); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Security Info -->
                <div class="detail-section">
                    <h4>🔒 Security & Access</h4>
                    <div class="detail-grid">
                        <div class="detail-item">
                            <strong>Access Level:</strong>
                            <span>
                                <?php if($route['is_public']): ?>
                                    ✅ عام - لا يحتاج مصادقة
                                <?php else: ?>
                                    🔐 محمي - يحتاج Token
                                <?php endif; ?>
                            </span>
                        </div>
                        <div class="detail-item">
                            <strong>Required Role:</strong>
                            <span>
                                <?php if($route['requires_admin']): ?>
                                    👑 Admin فقط
                                <?php else: ?>
                                    👤 جميع المستخدمين المصادقين
                                <?php endif; ?>
                            </span>
                        </div>
                        <?php if($route['rate_limit']): ?>
                        <div class="detail-item">
                            <strong>Rate Limit:</strong>
                            <span>⏱️ <?php echo e($route['rate_limit']); ?></span>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Expected Responses -->
                <div class="detail-section">
                    <h4>📤 Expected Responses</h4>
                    <div class="detail-grid">
                        <div class="detail-item">
                            <strong>✅ Success (200/201):</strong>
                            <span>JSON with data</span>
                        </div>
                        <div class="detail-item">
                            <strong>❌ Error (400):</strong>
                            <span>Validation errors</span>
                        </div>
                        <div class="detail-item">
                            <strong>🚫 Unauthorized (401):</strong>
                            <span>Invalid or missing token</span>
                        </div>
                        <div class="detail-item">
                            <strong>🔒 Forbidden (403):</strong>
                            <span>Insufficient permissions</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="no-results">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h3>لا توجد نتائج</h3>
            <p>جرب تغيير معايير البحث</p>
        </div>
        <?php endif; ?>
    </div>

    <script>
        function toggleDetails(header) {
            const details = header.nextElementSibling;
            const icon = header.querySelector('.expand-icon');
            
            details.classList.toggle('active');
            icon.classList.toggle('rotated');
        }
    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\unihub\unihub-API\resources\views\admin\routes\index.blade.php ENDPATH**/ ?>