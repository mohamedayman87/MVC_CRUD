<?php include(VIEWS.'inc/header.php');?>

<style>
    .hero-section {
        padding: 5rem 1rem 6rem;
        position: relative;
        overflow: hidden;
        text-align: center;
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1.25rem;
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(10px);
        border-radius: 50rem;
        font-size: 0.875rem;
        font-weight: 500;
        color: #f8fafc;
        margin-bottom: 1.75rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    .pulse-dot {
        width: 8px;
        height: 8px;
        background-color: var(--accent-orange);
        border-radius: 50%;
        box-shadow: 0 0 10px var(--accent-orange);
        animation: pulseAnimation 2s infinite;
    }

    @keyframes pulseAnimation {
        0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(253, 126, 20, 0.7); }
        70% { transform: scale(1); box-shadow: 0 0 0 8px rgba(253, 126, 20, 0); }
        100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(253, 126, 20, 0); }
    }

    .gradient-title {
        font-size: clamp(2.5rem, 5vw, 4.25rem);
        font-weight: 800;
        letter-spacing: -1.5px;
        line-height: 1.15;
        background: linear-gradient(135deg, #ffffff 0%, #cbd5e1 50%, var(--accent-orange) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 1.25rem;
    }

    .hero-lead {
        font-size: 1.2rem;
        max-width: 680px;
        margin: 0 auto 1.5rem;
        color: #94a3b8;
        line-height: 1.6;
    }

    .feature-card-modern {
        background: rgba(15, 23, 42, 0.6);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 1.25rem;
        padding: 2.25rem 1.75rem;
        transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    .feature-card-modern::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, transparent, var(--card-accent, var(--accent-indigo)), transparent);
        opacity: 0;
        transition: opacity 0.35s ease;
    }

    .feature-card-modern:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.5), 0 0 30px rgba(99, 102, 241, 0.15);
        border-color: rgba(99, 102, 241, 0.3);
    }

    .feature-card-modern:hover::before {
        opacity: 1;
    }

    .feature-icon-wrapper {
        width: 64px;
        height: 64px;
        border-radius: 1rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.75rem;
        margin-bottom: 1.25rem;
        transition: transform 0.3s ease;
    }

    .feature-card-modern:hover .feature-icon-wrapper {
        transform: scale(1.1) rotate(-5deg);
    }

    .icon-indigo {
        background: rgba(99, 102, 241, 0.12);
        color: #818cf8;
        border: 1px solid rgba(99, 102, 241, 0.25);
    }

    .icon-purple {
        background: rgba(139, 92, 246, 0.12);
        color: #a78bfa;
        border: 1px solid rgba(139, 92, 246, 0.25);
    }

    .icon-orange {
        background: rgba(253, 126, 20, 0.12);
        color: #ff9238;
        border: 1px solid rgba(253, 126, 20, 0.25);
    }

    .cta-glass-banner {
        background: linear-gradient(135deg, rgba(30, 41, 59, 0.7) 0%, rgba(15, 23, 42, 0.9) 100%);
        backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 1.75rem;
        padding: 3.5rem 2rem;
        position: relative;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
    }
</style>

<div class="hero-section">
    <div class="container">
        <div class="hero-badge">
            <span class="pulse-dot"></span>
            <span><i class="bi bi-mortarboard me-1.5 text-warning"></i>A learning project</span>
        </div>
        <h1 class="gradient-title">Learn PHP MVC</h1>
        <p class="hero-lead">
            This is a simple hero unit, a simple jumbotron-style component for calling
            extra attention to a feature.
        </p>
        <p class="text-white-50 mb-4 fs-6">
            It uses utility classes for typography and spacing to space content out
            within the larger container.
        </p>
        <div class="d-flex justify-content-center gap-3">
            <a class="btn btn-gradient-orange btn-lg px-4 py-3 rounded-3" href="<?php echo url('product')?>" role="button">
                <i class="bi bi-box-seam me-2"></i>Show Products
            </a>
        </div>
    </div>
</div>

<div class="container my-5 py-4">
    <div class="row text-center mb-5">
        <div class="col-md-8 mx-auto">
            <h2 class="fw-bold display-6 mb-3 text-white">Built the MVC Way</h2>
            <p class="text-white-50 lead fs-6">A clean separation of concerns makes this project easy to read, extend, and maintain.</p>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="feature-card-modern h-100 text-center" style="--card-accent: #6366f1;">
                <div class="feature-icon-wrapper icon-indigo mx-auto">
                    <i class="bi bi-diagram-3"></i>
                </div>
                <h4 class="fw-semibold text-white mb-2">Models</h4>
                <p class="text-white-50 mb-0 fs-6">Handle data and business logic, talking directly to the database layer.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card-modern h-100 text-center" style="--card-accent: #8b5cf6;">
                <div class="feature-icon-wrapper icon-purple mx-auto">
                    <i class="bi bi-easel"></i>
                </div>
                <h4 class="fw-semibold text-white mb-2">Views</h4>
                <p class="text-white-50 mb-0 fs-6">Render the HTML your users see, kept free of business logic.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card-modern h-100 text-center" style="--card-accent: #fd7e14;">
                <div class="feature-icon-wrapper icon-orange mx-auto">
                    <i class="bi bi-signpost-split"></i>
                </div>
                <h4 class="fw-semibold text-white mb-2">Controllers</h4>
                <p class="text-white-50 mb-0 fs-6">Route requests, coordinate models and views, and return a response.</p>
            </div>
        </div>
    </div>
</div>

<div class="container my-5 pb-5">
    <div class="cta-glass-banner text-center">
        <h3 class="fw-bold display-6 text-white mb-3">Ready to see it in action?</h3>
        <p class="text-white-50 mb-4 max-w-xl mx-auto fs-6">Head over to the products page to see full CRUD in action &mdash; create, read, update, and delete.</p>
        <a class="btn btn-gradient-primary btn-lg px-4 py-3 rounded-3" href="<?php echo url('product')?>" role="button">
            <i class="bi bi-arrow-right-circle me-2"></i>Go to Products
        </a>
    </div>
</div>

<?php include(VIEWS.'inc/footer.php');?>