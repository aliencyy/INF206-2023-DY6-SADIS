    @can('admin')
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <img src="{{ asset('img/Logo-SADIS.png') }}" alt="SADIS" width="30" class="start-0">  SADIS</div>
            <div class="list-group list-group-flush my-3">
                <a href="/dashboard" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                    class="fas fa-gauge-simple me-2"></i>Dashboard</a>
                <a href="/order" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa-solid fa-list me-2"></i>Orderan</a>
                <a href="/listPembayaran" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i 
                        class="fa-solid fa-receipt me-2"></i>Konfirmasi Pembayaran</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
                <a href="/listSubscriptor" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                       class="fa-solid fa-users me-2"></i>Daftar Pelanggan</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

       
    @endcan
    
    @can('user')
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <img src="{{ asset('img/Logo-SADIS.png') }}" alt="SADIS" width="30" class="start-0">  SADIS</div>
            <div class="list-group list-group-flush my-3">
                <a href="/dashboard" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-gauge-simple me-2"></i>Dashboard</a>
                <a href="/buangsampah" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i 
                    class="fas fa-wallet me-2"></i></i>Ajukan Pembuangan Sampah</a>
                <a href="/order" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-user me-2"></i>Riwayat Pembuangan  Sampah</a>
                <a href="/langganan" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i 
                    class="fas fa-gear me-2"></i></i>Subscription</a>

            </div>
        </div>
        <!-- /#sidebar-wrapper -->

       
    @endcan
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
