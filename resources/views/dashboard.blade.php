<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penjualan - Warung Cireng Munu'u</title>
    <link rel="icon" href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhYU9LwFCCN7cc2xMeJ5q9cIkhSYFgmjkm2Dmc-1eDWLlMw5xBDxnu-oArZq2mdBRyctcylOtc6H8CzoOi_-XJ1lQY6AYJRJiz75g-cLxBFPOhT91ClqY5bGYZkJ1MWgVaZt7l46Ffdz3FLbx4db2OxpcJU6xisJJu0mVN-hvPhcGSI8-ES7fdqR_smi1Dv/s1024/Gemini_Generated_Image_9c4jmm9c4jmm9c4j.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
        .bg-cream { background-color: #f5f5dc !important; }
        .text-dark-cream { color: #333 !important; }
        .navbar { background-color: #f5f5dc !important; }
        .page-header {
            background: linear-gradient(135deg, #ffc107 0%, #ffdb58 100%);
            color: #333;
            padding: 1.5rem 0;
            margin-bottom: 2rem;
        }
        .info-box {
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.08);
            border-left: 4px solid;
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        .info-box.info-box-success { border-left-color: #28a745; }
        .info-box.info-box-primary { border-left-color: #0dcaf0; }
        .info-box.info-box-warning { border-left-color: #ffc107; }
        .info-box.info-box-danger { border-left-color: #dc3545; }
        .info-box-icon {
            font-size: 2.5rem;
            margin-right: 1rem;
            width: 80px;
            text-align: center;
        }
        .info-box-content {
            flex: 1;
        }
        .info-box-text {
            font-size: 0.9rem;
            color: #666;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
        .info-box-number {
            font-size: 1.8rem;
            font-weight: 700;
            color: #333;
        }
        .product-list {
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.08);
            margin-bottom: 1.5rem;
        }
        .product-list h5 {
            color: #333;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .product-item {
            padding: 0.75rem 0;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.9rem;
        }
        .product-item:last-child {
            border-bottom: none;
        }
        .product-number {
            color: #666;
            font-weight: 500;
        }
        .table-orders {
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.08);
        }
        .table-orders h5 {
            color: #333;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .table-orders table {
            font-size: 0.85rem;
        }
        .badge-success { background-color: #28a745 !important; }
        .badge-warning { background-color: #ffc107 !important; color: #333 !important; }
        .badge-danger { background-color: #dc3545 !important; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #f5f5dc !important;">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}" style="color: #333 !important;"> Cireng Munu'u - Admin</a>
            <div class="ms-auto">
                <a href="{{ route('cireng.index') }}" class="btn btn-outline-secondary btn-sm me-2">✏️ Edit Menu</a>
                <a href="{{ route('menu') }}" class="btn btn-outline-secondary btn-sm me-2">Lihat Menu</a>
                <a href="/" class="btn btn-outline-secondary btn-sm me-2">Home</a>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-warning btn-sm">🚪 Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="page-header">
        <div class="container-fluid">
            <h4 class="mb-0 fw-bold">📊 Dashboard Penjualan</h4>
        </div>
    </div>

    <div class="container-fluid">
        <!-- STAT CARDS -->
        <div class="row mb-3">
            <div class="col-md-4 mb-3">
                <div class="info-box info-box-success">
                    <div class="info-box-icon">💰</div>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Pendapatan</span>
                        <span class="info-box-number">Rp {{ number_format(\App\Models\Order::sum('total_harga'), 0, ',', '.') }}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="info-box info-box-primary">
                    <div class="info-box-icon">📦</div>
                    <div class="info-box-content">
                        <span class="info-box-text">Produk Terjual</span>
                        <span class="info-box-number">{{ $totalProdukTerjual ?? 0 }}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="info-box info-box-warning">
                    <div class="info-box-icon">🛒</div>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Pesanan</span>
                        <span class="info-box-number">{{ $totalOrders ?? 0 }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- MAIN CONTENT -->
        <div class="row">
            <div class="col-md-4">
                <!-- PRODUK FAVORIS -->
                <div class="product-list">
                    <h5>🌟 Produk Terlaris</h5>
                    @forelse($topProducts as $index => $product)
                        <div class="product-item">
                            <span>{{ $index + 1 }}. {{ $product->nama_produk }}</span>
                            <span class="product-number">{{ $product->total_qty }}x</span>
                        </div>
                    @empty
                        <div class="alert alert-info text-center mb-0" role="alert">
                            <small>Belum ada produk terjual</small>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- DAFTAR PESANAN -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="table-orders">
                    <h5>📋 Daftar Pesanan Terbaru</h5>
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Produk</th>
                                    <th>Qty</th>
                                    <th>Total Harga</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($orders as $index => $order)
                                    <tr>
                                        <td><strong>#{{ $index + 1 }}</strong></td>
                                        <td>{{ $order->nama_pelanggan }}</td>
                                        <td>{{ $order->nama_produk }}</td>
                                        <td><span class="badge bg-info">{{ $order->quantity }}x</span></td>
                                        <td>Rp {{ number_format($order->total_harga, 0, ',', '.') }}</td>
                                        <td><small>{{ $order->created_at->format('d/m/Y H:i') }}</small></td>
                                        <td>
                                            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Yakin hapus pesanan ini?')" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">🗑️</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center text-muted">
                                            <p>📭 Belum ada pesanan</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer class="bg-cream py-3 mt-5 text-center">
        <div class="container-fluid">
            <p class="mb-0 text-dark-cream">&copy; Warung Cireng Munu'u - Dashboard</p>
            <p class="text-secondary mt-1">Renyah & Gurih! 🔥</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
