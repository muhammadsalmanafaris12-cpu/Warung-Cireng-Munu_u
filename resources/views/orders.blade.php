<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pesanan Masuk - Warung Cireng Munu'u</title>
    <link rel="icon" href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhYU9LwFCCN7cc2xMeJ5q9cIkhSYFgmjkm2Dmc-1eDWLlMw5xBDxnu-oArZq2mdBRyctcylOtc6H8CzoOi_-XJ1lQY6AYJRJiz75g-cLxBFPOhT91ClqY5bGYZkJ1MWgVaZt7l46Ffdz3FLbx4db2OxpcJU6xisJJu0mVN-hvPhcGSI8-ES7fdqR_smi1Dv/s1024/Gemini_Generated_Image_9c4jmm9c4jmm9c4j.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Poppins', sans-serif; 
            background-color: #f8f9fa; 
        }
        .navbar { 
            background-color: #ffc107 !important; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .page-header {
            background: linear-gradient(135deg, #ffc107 0%, #ffdb58 100%);
            color: #333;
            padding: 2rem 0;
            margin-bottom: 2rem;
            box-shadow: 0 4px 15px rgba(255,193,7,0.3);
        }

        .orders-container {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        .order-card {
            border: 1px solid #e9ecef;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            background: #fff;
            transition: all 0.3s;
        }
        .order-card:hover {
            border-color: #ffc107;
            box-shadow: 0 4px 12px rgba(255,193,7,0.15);
        }
        .order-id {
            font-weight: 700;
            color: #ffc107;
            font-size: 1.1rem;
        }
        .order-info {
            font-size: 0.9rem;
            color: #666;
        }
        .order-info strong {
            color: #333;
        }

        .action-btn {
            padding: 0.4rem 1rem;
            font-size: 0.85rem;
            border-radius: 6px;
            font-weight: 600;
        }
        .search-box {
            position: relative;
            margin-bottom: 1rem;
        }
        .search-box input {
            padding-left: 2.5rem;
            border-radius: 25px;
            border: 2px solid #dee2e6;
        }
        .search-box input:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 0.2rem rgba(220,53,69,0.15);
        }
        .search-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }
        .empty-state {
            text-align: center;
            padding: 3rem 1rem;
            color: #999;
        }
        .empty-state-icon {
            font-size: 4rem;
            margin-bottom: 1rem;
        }
        .order-time {
            font-size: 0.8rem;
            color: #999;
        }
        .price-highlight {
            font-size: 1.3rem;
            font-weight: 700;
            color: #ffc107;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #f5f5dc !important;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}" style="color: #333 !important;"> Cireng Munu'u - Admin</a>
            <div class="ms-auto">
                <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary btn-sm me-2">📊 Dashboard</a>
                <a href="{{ route('cireng.index') }}" class="btn btn-outline-secondary btn-sm me-2">✏️ Edit Menu</a>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-warning btn-sm">🚪 Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="page-header">
        <div class="container">
            <h1 class="display-5 fw-bold">📦 Pesanan Masuk</h1>
            <p class="lead mb-0">Kelola dan pantau semua pesanan pelanggan real-time</p>
        </div>
    </div>

    <div class="container">

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>✅ Berhasil!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>❌ Error!</strong> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- ORDERS CONTAINER -->
        <div class="orders-container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="mb-0">📋 Daftar Pesanan</h4>
                <div class="search-box" style="width: 300px;">
                    <span class="search-icon">🔍</span>
                    <input type="text" id="searchInput" class="form-control" placeholder="Cari nama pelanggan atau produk...">
                </div>
            </div>

            <div id="ordersContainer">
                @forelse($orders as $index => $order)
                    <div class="order-card">
                        <div class="row align-items-center">
                            <div class="col-md-1">
                                <div class="text-center">
                                    <h3 class="mb-0" style="color: #ffc107; font-weight: 700;">{{ $index + 1 }}</h3>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="order-info">
                                    <p class="mb-1"><strong>👤 Pelanggan:</strong> {{ $order->nama_pelanggan }}</p>
                                    <p class="mb-1"><strong>🍽️ Produk:</strong> {{ $order->nama_produk }} <span class="badge bg-secondary">{{ $order->quantity }}x</span></p>
                                    @if($order->nomor_wa)
                                        <p class="mb-1"><strong>📱 WhatsApp:</strong> {{ $order->nomor_wa }}</p>
                                    @endif
                                    @if($order->pesan_tambahan)
                                        <p class="mb-1"><strong>📝 Alamat Pengiriman:</strong> <em>{{ $order->pesan_tambahan }}</em></p>
                                    @endif
                                    <p class="order-time mb-0">📅 {{ $order->created_at->format('d M Y, H:i') }} WIB</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                <div class="price-highlight mb-3">Rp {{ number_format($order->total_harga, 0, ',', '.') }}</div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="empty-state">
                        <div class="empty-state-icon">📭</div>
                        <h5>Belum Ada Pesanan</h5>
                        <p class="text-muted">Pesanan dari pelanggan akan muncul di sini</p>
                    </div>
                @endforelse
            </div>
        </div>

    </div>

    <footer class="bg-dark text-white py-4 mt-5 text-center">
        <div class="container">
            <p class="mb-0">&copy; 2026 Warung Cireng Munu'u - Sistem Pesanan</p>
            <p class="text-secondary mt-2">Renyah & Gurih! 🔥</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Search functionality
        const searchInput = document.getElementById('searchInput');
        const orderCards = document.querySelectorAll('.order-card');
        
        searchInput.addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            
            orderCards.forEach(card => {
                const text = card.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
            
            checkEmpty();
        });

        // Check if empty
        function checkEmpty() {
            const visibleCards = Array.from(orderCards).filter(card => card.style.display !== 'none');
            const container = document.getElementById('ordersContainer');
            
            if (visibleCards.length === 0 && !container.querySelector('.empty-state')) {
                container.innerHTML = `
                    <div class="empty-state">
                        <div class="empty-state-icon">🔍</div>
                        <h5>Tidak Ada Hasil</h5>
                        <p class="text-muted">Tidak ada pesanan yang sesuai dengan pencarian Anda</p>
                    </div>
                `;
            }
        }

        // Prevent going back after logout
        (function() {
            if (window.history && window.history.pushState) {
                window.history.pushState('forward', null, '');
                window.addEventListener('popstate', function() {
                    window.location.href = "{{ route('orders.index') }}";
                });
            }
        })();
    </script>
</body>
</html>
