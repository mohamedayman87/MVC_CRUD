<?php include(VIEWS . '/inc/header.php'); ?>

<style>
    .page-header-banner {
        background: linear-gradient(135deg, rgba(30, 41, 59, 0.8) 0%, rgba(15, 23, 42, 0.95) 100%);
        backdrop-filter: blur(12px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        padding: 3.5rem 1rem;
        margin-bottom: 3rem;
        position: relative;
    }

    .products-table-card {
        background: rgba(15, 23, 42, 0.7);
        backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 1.25rem;
        overflow: hidden;
        box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.5);
    }

    .custom-table {
        color: var(--text-body);
        margin-bottom: 0;
    }

    .custom-table thead tr {
        background: rgba(30, 41, 59, 0.9);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .custom-table th {
        color: #f8fafc;
        font-family: 'Outfit', sans-serif;
        font-weight: 600;
        font-size: 0.9rem;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        padding: 1.2rem 1.25rem;
        border: none;
    }

    .custom-table tbody tr {
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        transition: all 0.2s ease;
    }

    .custom-table tbody tr:hover {
        background: rgba(255, 255, 255, 0.03);
    }

    .custom-table td {
        padding: 1.1rem 1.25rem;
        vertical-align: middle;
        border: none;
    }

    .id-badge {
        font-family: monospace;
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: #94a3b8;
        padding: 0.25rem 0.6rem;
        border-radius: 8px;
        font-size: 0.85rem;
    }

    .product-avatar {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: rgba(99, 102, 241, 0.12);
        color: #818cf8;
        border: 1px solid rgba(99, 102, 241, 0.2);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
    }

    .price-pill {
        background: rgba(16, 185, 129, 0.12);
        color: #34d399;
        border: 1px solid rgba(16, 185, 129, 0.25);
        padding: 0.4rem 0.85rem;
        border-radius: 50rem;
        font-weight: 700;
        font-size: 0.95rem;
        display: inline-block;
    }

    .desc-tag {
        background: rgba(6, 182, 212, 0.1);
        color: #38bdf8;
        border: 1px solid rgba(6, 182, 212, 0.2);
        padding: 0.35rem 0.75rem;
        border-radius: 8px;
        font-size: 0.875rem;
        font-weight: 400;
        max-width: 280px;
        display: inline-block;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .btn-action-edit {
        background: rgba(99, 102, 241, 0.12);
        color: #a5b4fc;
        border: 1px solid rgba(99, 102, 241, 0.25);
        width: 36px;
        height: 36px;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s ease;
    }

    .btn-action-edit:hover {
        background: #6366f1;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(99, 102, 241, 0.4);
    }

    .btn-action-delete {
        background: rgba(239, 68, 68, 0.12);
        color: #fca5a5;
        border: 1px solid rgba(239, 68, 68, 0.25);
        width: 36px;
        height: 36px;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s ease;
    }

    .btn-action-delete:hover {
        background: #ef4444;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(239, 68, 68, 0.4);
    }
</style>

<div class="page-header-banner text-center">
  <div class="container">
    <h1 class="fw-bold display-5 text-white mb-2"><i class="bi bi-box-seam me-2 text-warning"></i>Products</h1>
    <p class="text-white-50 mb-0 fs-6">Browse, edit, and manage your product catalog</p>
  </div>
</div>

<div class="container my-5">
  <div class="row">
    <div class="col-12 col-lg-11 mx-auto">

      <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 mb-4">
        <div class="d-flex align-items-center gap-3">
          <h2 class="h3 mb-0 text-white fw-bold">All Products</h2>
          <span class="badge rounded-pill bg-dark border border-secondary text-info px-3 py-2 fw-medium">
            <i class="bi bi-stack me-1"></i><?= count($products) ?> total
          </span>
        </div>
        <a href="/product/add" class="btn btn-gradient-orange px-4 py-2.5 rounded-3 d-inline-flex align-items-center gap-2">
          <i class="bi bi-plus-circle-fill"></i>Add Product
        </a>
      </div>

      <div class="products-table-card">
        <div class="table-responsive">
          <table class="table custom-table align-middle">
            <thead>
              <tr>
                <th scope="col" style="width: 70px;">#</th>
                <th scope="col"><i class="bi bi-tag me-1.5 text-indigo"></i>Name</th>
                <th scope="col"><i class="bi bi-card-text me-1.5 text-cyan"></i>Description</th>
                <th scope="col" class="text-end"><i class="bi bi-currency-dollar me-1.5 text-emerald"></i>Price</th>
                <th scope="col" class="text-end" style="width: 140px;">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php if (empty($products)): ?>
                <tr>
                  <td colspan="5" class="text-center text-muted py-5">
                    <div class="py-4">
                      <i class="bi bi-inbox fs-1 d-block mb-3 text-white-50"></i>
                      <p class="fs-5 text-white-50 mb-3">No products found in catalog.</p>
                      <a href="/product/add" class="btn btn-sm btn-gradient-primary px-4 py-2 rounded-3">
                        <i class="bi bi-plus-lg me-1"></i>Add your first product
                      </a>
                    </div>
                  </td>
                </tr>
              <?php else: ?>
                <?php foreach ($products as $i => $product): ?>
                  <tr>
                    <th scope="row"><span class="id-badge">#<?= $product['id'] ?></span></th>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <div class="product-avatar">
                          <i class="bi bi-box"></i>
                        </div>
                        <span class="fw-semibold text-gray fs-6"><?= htmlspecialchars($product['name']) ?></span>
                      </div>
                    </td>
                    <td>
                      <?php if (!empty($product['description'])): ?>
                        <span class="desc-tag">
                          <?= htmlspecialchars($product['description']) ?>
                        </span>
                      <?php else: ?>
                        <span class="text-white-50">&mdash;</span>
                      <?php endif; ?>
                    </td>
                    <td class="text-end">
                      <?php if (isset($product['price'])): ?>
                        <span class="price-pill">
                          EGP<?= number_format($product['price'], 2) ?>
                        </span>
                      <?php else: ?>
                        <span class="text-white-50">&mdash;</span>
                      <?php endif; ?>
                    </td>
                    <td class="text-end">
                      <div class="d-inline-flex gap-2">
                        <a href="/product/edit/<?= (int) ($product['id'] ?? 0) ?>"
                          class="btn-action-edit" title="Edit Product">
                          <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="/product/delete/<?= (int) ($product['id'] ?? 0) ?>" 
                          class="btn-action-delete"
                          onclick="return confirm('Delete this product?');" title="Delete Product">
                          <i class="bi bi-trash3"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
</div>

<?php include(VIEWS . '/inc/footer.php'); ?>