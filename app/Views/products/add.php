<?php include(VIEWS . '/inc/header.php'); ?>

<style>
    .page-header-banner {
        background: linear-gradient(135deg, rgba(30, 41, 59, 0.8) 0%, rgba(15, 23, 42, 0.95) 100%);
        backdrop-filter: blur(12px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        padding: 3.5rem 1rem;
        margin-bottom: 3rem;
    }

    .form-glass-card {
        background: rgba(15, 23, 42, 0.7);
        backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 1.5rem;
        padding: 3rem 2.5rem;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
    }

    .form-label-custom {
        color: #f8fafc;
        font-weight: 600;
        font-size: 0.95rem;
        margin-bottom: 0.5rem;
    }

    .alert-glass-success {
        background: rgba(16, 185, 129, 0.15);
        border: 1px solid rgba(16, 185, 129, 0.3);
        color: #34d399;
        backdrop-filter: blur(10px);
        border-radius: 1rem;
        padding: 1.25rem;
    }

    .alert-glass-danger {
        background: rgba(239, 68, 68, 0.15);
        border: 1px solid rgba(239, 68, 68, 0.3);
        color: #fca5a5;
        backdrop-filter: blur(10px);
        border-radius: 1rem;
        padding: 1.25rem;
    }
</style>

<div class="page-header-banner text-center">
    <div class="container">
        <h1 class="fw-bold display-5 text-white mb-2"><i class="bi bi-plus-circle me-2 text-warning"></i>Add New Product</h1>
        <p class="text-white-50 mb-0 fs-6">Fill in the details below to add a new product to your catalog</p>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-7 col-md-9 mx-auto">

            <?php if (isset($success)): ?>
                <div class="alert alert-glass-success d-flex align-items-center justify-content-center mb-4" role="alert">
                    <i class="bi bi-check-circle-fill fs-5 me-2.5"></i>
                    <h3 class="mb-0 fs-6 fw-semibold"><?= $success ?></h3>
                </div>
            <?php endif; ?>
            <?php if (isset($error)): ?>
                <div class="alert alert-glass-danger d-flex align-items-center justify-content-center mb-4" role="alert">
                    <i class="bi bi-exclamation-triangle-fill fs-5 me-2.5"></i>
                    <h3 class="mb-0 fs-6 fw-semibold"><?= $error ?></h3>
                </div>
            <?php endif; ?>

            <div class="form-glass-card mb-5">
                <form method="POST" action="<?php url('product/store'); ?>">
                    <div class="form-group mb-4">
                        <label for="name" class="form-label form-label-custom"><i class="bi bi-tag me-1.5 text-warning"></i>Product Name</label>
                        <div class="input-group">
                            <span class="input-group-text input-group-text-custom"><i class="bi bi-card-heading"></i></span>
                            <input type="text" required name="name" class="form-control form-control-custom" id="name" placeholder="e.g. Wireless Ergonomic Mouse">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group mb-4">
                            <label for="price" class="form-label form-label-custom"><i class="bi bi-currency-dollar me-1.5 text-success"></i>Price ($)</label>
                            <div class="input-group">
                                <span class="input-group-text input-group-text-custom"><i class="bi bi-cash-stack"></i></span>
                                <input type="text" required class="form-control form-control-custom" name="price" id="price" placeholder="e.g. 49.99">
                            </div>
                        </div>

                        <div class="col-md-6 form-group mb-4">
                            <label for="qty" class="form-label form-label-custom"><i class="bi bi-boxes me-1.5 text-info"></i>Quantity</label>
                            <div class="input-group">
                                <span class="input-group-text input-group-text-custom"><i class="bi bi-layers"></i></span>
                                <input type="number" required class="form-control form-control-custom" name="qty" id="qty" placeholder="e.g. 100">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="description" class="form-label form-label-custom"><i class="bi bi-card-text me-1.5 text-primary"></i>Description</label>
                        <div class="input-group">
                            <span class="input-group-text input-group-text-custom"><i class="bi bi-text-paragraph"></i></span>
                            <input type="text" required class="form-control form-control-custom" name="description" id="description" placeholder="Short product description & features">
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-gradient-orange btn-lg w-100 py-3 rounded-3 mt-2">
                        <i class="bi bi-check2-circle me-2 fs-5"></i>Submit Product
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
<?php include(VIEWS . '/inc/footer.php'); ?>