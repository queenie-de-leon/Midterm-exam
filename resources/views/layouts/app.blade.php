<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Inventory TPS')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #000000ff;
            --primary-hover: #d35ad1ff;
            --secondary-color: #10b981;
            --secondary-hover: #059669;
            --accent-color: #a546a4ff;
            --danger-color: #ef4444;
            --danger-hover: #dc2626;
            --info-color: #3b82f6;
            --light-bg: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            --dark-bg: #000000ff;
            --sidebar-bg: linear-gradient(180deg, #000000ff 0%, #0f172a 100%);
            --card-bg: rgba(255, 255, 255, 0.95);
            --btn-radius: 12px;
            --card-radius: 16px;
            --shadow-sm: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-md: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --shadow-glow: 0 0 0 1px rgba(99, 102, 241, 0.05), 0 1px 3px rgba(99, 102, 241, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--light-bg);
            min-height: 100vh;
            padding-top: 80px;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                radial-gradient(circle at 20% 20%, rgba(99, 102, 241, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(16, 185, 129, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 60%, rgba(245, 158, 11, 0.05) 0%, transparent 50%);
            z-index: -1;
            pointer-events: none;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-hover)) !important;
            height: 80px;
            box-shadow: var(--shadow-lg);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            padding: 0 1rem;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.75rem;
            color: var(--btn-radius) /* fix below */;
            color: var(--logo-color, #ffffff) !important;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }


        .navbar-brand:hover {
            transform: translateY(-1px);    
            filter: brightness(1.1);
        }

        .navbar-brand i {
            margin-right: 12px;
            font-size: 1.5rem;
            background: linear-gradient(45deg, #a546a4ff, #a546a4ff);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 80px;
            left: 0;
            width: 280px;
            height: calc(100vh - 80px);
            background: var(--sidebar-bg);
            color: #000000ff;
            padding: 2rem 0;
            overflow-y: auto;
            border-right: 1px solid var(--border-light);
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            padding: 0.75rem 1.5rem;
            margin: 0.25rem 1rem;
            color: #ffffffff;
            text-decoration: none;
            border-radius: var(--btn-radius);
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .sidebar-link i {
            margin-right: 1rem;
            font-size: 1.1rem;
        }

        .sidebar-link:hover {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-hover));
            color: white !important;
            transform: translateX(8px) scale(1.02);
        }

        .sidebar-link.active {
            background: linear-gradient(135deg, var(--accent-color), #a546a4ff);
            color: white !important;
            font-weight: 600;
            transform: translateX(4px);
        }

        /* Content Area */
        .content-area {
            margin-left: 280px;
            padding: 2.5rem;
            min-height: calc(100vh - 80px);
        }

        /* Cards */
        .card {
            border: none;
            border-radius: var(--card-radius);
            box-shadow: var(--shadow-md);
            background: linear-gradient(135deg, var(--accent-color), #a546a4ff);
            transition: all 0.3s ease;
            margin-bottom: 2rem;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .card-header {
            background: linear-gradient(135deg, var(--accent-color), #a546a4ff);
            color: #ffffff;
            border-bottom: none;
            font-weight: 600;
            padding: 1.25rem 1.5rem;
        }

        .card-body {
            padding: 1.5rem;

        }

        /* Buttons */
        .btn {
            border-radius: var(--btn-radius);
            padding: 0.6rem 1.2rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-hover));
            color: #ffffff;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--primary-hover), var(--primary-color));
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: linear-gradient(135deg, var(--secondary-color), var(--secondary-hover));
            color: #ffffff;
        }

        .btn-secondary:hover {
            background: linear-gradient(135deg, var(--secondary-hover), var(--secondary-color));
            transform: translateY(-2px);
        }

        .btn-danger {
            background: linear-gradient(135deg, var(--danger-color), var(--danger-hover));
            color: #ffffff;
        }

        .btn-danger:hover {
            background: linear-gradient(135deg, var(--danger-hover), var(--danger-color));
            transform: translateY(-2px);
        }

        /* Tables */
        .table {
            border-radius: var(--card-radius);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            background: var(--card-bg);
        }

        .table thead th {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-hover));
            color: #000000ff;
            border-bottom: none;
            font-weight: 600;
            padding: 0.75rem;
        }

        .table tbody tr {
            transition: all 0.3s ease;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .table tbody tr:hover {
            background: rgba(0,0,0,0.03);
        }

        .table td, .table th {
            padding: 0.5rem;
            vertical-align: middle;
        }

        /* Small scrollable table containers */
        .table-container-small {
            max-height: 240px;
            overflow-y: auto;
        }

        /* Alerts */
        .alert {
            border-radius: var(--card-radius);
            padding: 0.75rem 1.25rem;
            margin-bottom: 1.5rem;
        }

        .alert-success {
            background-color: #d1fae5;
            color: #065f46;
        }

        .alert-danger {
            background-color: #fee2e2;
            color: #991b1b;
        }

        footer {
            margin-top: 30px;
            text-align: center;
            color: #6b7280;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                left: -100%;
                transition: left 0.3s ease;
            }
            .sidebar.show {
                left: 0;
            }
            .content-area {
                margin-left: 0;
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('dashboard.index') }}">
                <i class="fas fa-cube"></i> Product Inventory
            </a>
        </div>
    </nav>

    <div class="sidebar" id="sidebarMenu">
        <a href="{{ route('dashboard.index') }}" class="sidebar-link {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
            <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
        <a href="{{ route('products.index') }}" class="sidebar-link {{ request()->is('products*') ? 'active' : '' }}">
            <i class="fas fa-box"></i> Products
        </a>
        <a href="{{ route('categories.index') }}" class="sidebar-link {{ request()->is('categories*') ? 'active' : '' }}">
            <i class="fas fa-tags"></i> Categories
        </a>
        <a href="{{ route('transactions.index') }}" class="sidebar-link {{ request()->is('transactions*') ? 'active' : '' }}">
            <i class="fas fa-exchange-alt"></i> Transactions
        </a>
        <a href="{{ route('reports.index') }}" class="sidebar-link {{ request()->is('reports*') ? 'active' : '' }}">
            <i class="fas fa-chart-line"></i> Reports
        </a>
    </div>

    <div class="content-area">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @yield('content')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
