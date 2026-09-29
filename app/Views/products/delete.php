<?php include(VIEWS . '/inc/header.php'); ?>

<style>
    .delete-success-card {
        background: rgba(15, 23, 42, 0.7);
        backdrop-filter: blur(16px);
        border: 1px solid rgba(16, 185, 129, 0.25);
        border-radius: 1.5rem;
        padding: 3.5rem 2rem;
        box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.5), 0 0 30px rgba(16, 185, 129, 0.15);
    }

    .check-icon-wrapper {
        width: 80px;
        height: 80px;
        background: rgba(16, 185, 129, 0.15);
        color: #34d399;
        border: 1px solid rgba(16, 185, 129, 0.3);
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 2.75rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 0 25px rgba(16, 185, 129, 0.25);
        animation: scaleIn 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    @keyframes scaleIn {
        0% { transform: scale(0); opacity: 0; }
        100% { transform: scale(1); opacity: 1; }
    }
</style>

<div class="container my-5 py-5">
    <div class="row">
        <div class="col-lg-5 col-md-7 mx-auto text-center">

            <div class="delete-success-card d-flex flex-column align-items-center">
                <div class="check-icon-wrapper">
                    <i class="bi bi-check-circle-fill"></i>
                </div>
                <h3 class="fs-4 fw-bold text-white mb-2">Deleted Successfully</h3>
                <p class="text-white-50 mb-4 fs-6">Product Deleted Successfully !!</p>

                <a href="<?=url("product")?>" class="btn btn-outline-glass px-4 py-2.5 rounded-3 d-inline-flex align-items-center gap-2">
                    <i class="bi bi-arrow-left"></i>Go Back
                </a>
            </div>

        </div>
    </div>
</div>
<?php include(VIEWS . '/inc/footer.php'); ?>