<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A simple MVC CRUD project for managing products">
    <title>MVC Product Manager</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5.3 & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        :root {
            --bg-dark: #090d16;
            --bg-surface: rgba(15, 23, 42, 0.75);
            --bg-card: rgba(23, 32, 54, 0.65);
            --border-glass: rgba(255, 255, 255, 0.08);
            --border-glow: rgba(99, 102, 241, 0.35);
            --accent-orange: #fd7e14;
            --accent-indigo: #6366f1;
            --accent-purple: #8b5cf6;
            --accent-cyan: #06b6d4;
            --accent-emerald: #10b981;
            --text-heading: #f8fafc;
            --text-body: #cbd5e1;
            --text-muted: #94a3b8;
        }

        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            background: radial-gradient(circle at 10% 10%, #1e1b4b 0%, #0f172a 45%, var(--bg-dark) 100%);
            background-attachment: fixed;
            color: var(--text-body);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6, .navbar-brand {
            font-family: 'Outfit', sans-serif;
            color: var(--text-heading);
        }

        /* Glass Navbar */
        .navbar-custom {
            background: var(--bg-surface) !important;
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--border-glass);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.35rem;
            letter-spacing: -0.5px;
            color: #fff !important;
        }

        .brand-icon {
            width: 38px;
            height: 38px;
            background: linear-gradient(135deg, #fd7e14 0%, #ec4899 100%);
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            box-shadow: 0 4px 15px rgba(253, 126, 20, 0.35);
            transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .navbar-brand:hover .brand-icon {
            transform: rotate(10deg) scale(1.08);
        }

        .nav-link {
            font-weight: 500;
            color: var(--text-muted) !important;
            padding: 0.5rem 1rem !important;
            border-radius: 10px;
            transition: all 0.25s ease;
            position: relative;
        }

        .nav-link:hover {
            color: #fff !important;
            background: rgba(255, 255, 255, 0.05);
        }

        .nav-link.active {
            color: #fff !important;
            background: linear-gradient(135deg, rgba(253, 126, 20, 0.2) 0%, rgba(99, 102, 241, 0.2) 100%);
            border: 1px solid rgba(253, 126, 20, 0.3);
            box-shadow: 0 4px 12px rgba(253, 126, 20, 0.15);
        }

        /* Ambient Glow Blobs */
        .ambient-glow-1 {
            position: fixed;
            top: -100px;
            right: -100px;
            width: 450px;
            height: 450px;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.15) 0%, transparent 70%);
            pointer-events: none;
            z-index: 0;
            filter: blur(40px);
        }

        .ambient-glow-2 {
            position: fixed;
            bottom: -150px;
            left: -100px;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(253, 126, 20, 0.12) 0%, transparent 70%);
            pointer-events: none;
            z-index: 0;
            filter: blur(50px);
        }

        /* Shared Card & Panel Aesthetics */
        .glass-panel {
            background: var(--bg-card);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid var(--border-glass);
            border-radius: 1.25rem;
            box-shadow: 0 15px 35px -5px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(255, 255, 255, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        }

        /* Primary Button Glowing Styling */
        .btn-gradient-primary {
            background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
            color: #fff;
            border: none;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.35);
            transition: all 0.3s ease;
        }

        .btn-gradient-primary:hover {
            background: linear-gradient(135deg, #4f46e5 0%, #4338ca 100%);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(99, 102, 241, 0.5);
        }

        .btn-gradient-orange {
            background: linear-gradient(135deg, #fd7e14 0%, #ea580c 100%);
            color: #fff;
            border: none;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(253, 126, 20, 0.35);
            transition: all 0.3s ease;
        }

        .btn-gradient-orange:hover {
            background: linear-gradient(135deg, #ea580c 0%, #c2410c 100%);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(253, 126, 20, 0.5);
        }

        .btn-outline-glass {
            background: rgba(255, 255, 255, 0.04);
            color: #f8fafc;
            border: 1px solid var(--border-glass);
            font-weight: 500;
            backdrop-filter: blur(8px);
            transition: all 0.3s ease;
        }

        .btn-outline-glass:hover {
            background: rgba(255, 255, 255, 0.12);
            color: #fff;
            border-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        /* Form Custom Input Styles */
        .form-control-custom {
            background: rgba(15, 23, 42, 0.8) !important;
            border: 1px solid rgba(255, 255, 255, 0.12) !important;
            color: #f8fafc !important;
            border-radius: 0.75rem !important;
            padding: 0.75rem 1rem !important;
            transition: all 0.25s ease !important;
        }

        .form-control-custom:focus {
            background: rgba(15, 23, 42, 0.95) !important;
            border-color: var(--accent-indigo) !important;
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.25) !important;
            outline: none !important;
        }

        .form-control-custom::placeholder {
            color: #64748b !important;
        }

        .input-group-text-custom {
            background: rgba(30, 41, 59, 0.8) !important;
            border: 1px solid rgba(255, 255, 255, 0.12) !important;
            border-right: none !important;
            color: var(--accent-indigo) !important;
            border-radius: 0.75rem 0 0 0.75rem !important;
        }

        .input-group .form-control-custom {
            border-radius: 0 0.75rem 0.75rem 0 !important;
        }

        /* Content Wrapper */
        .main-content {
            flex: 1 0 auto;
            position: relative;
            z-index: 1;
        }
    </style>
</head>

<body>
    <div class="ambient-glow-1"></div>
    <div class="ambient-glow-2"></div>

    <nav class="navbar navbar-expand-lg navbar-custom sticky-top py-3" data-bs-theme="dark">
        <div class="container px-4">
            <a class="navbar-brand d-flex align-items-center gap-2" href="<?php url();?>">
                <span class="brand-icon">
                    <i class="bi bi-box-seam-fill"></i>
                </span>
                <span>MVC<span style="color: var(--accent-orange);">.</span>Core</span>
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto gap-2 mt-3 mt-lg-0">
                    <a class="nav-link active" aria-current="page" href="<?php url();?>">
                        <i class="bi bi-house-door me-1.5"></i>Home
                    </a>
                    <a class="nav-link" href="<?php echo url('product');?>">
                        <i class="bi bi-grid-1x2 me-1.5"></i>Products
                    </a>
                    <a class="nav-link" href="<?php echo url('product/add')?>">
                        <i class="bi bi-plus-circle me-1.5"></i>Add Product
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="main-content">