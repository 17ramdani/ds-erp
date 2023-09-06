<style>
    .badge-notif {
        position: relative;
    }

    .badge-notif[data-badge]:after {
        content: attr(data-badge);
        position: absolute;
        top: 25px;
        right: -10px;
        font-size: .7em;
        background: #e53935;
        color: white;
        width: 18px;
        height: 18px;
        text-align: center;
        line-height: 18px;
        border-radius: 50%;
    }

    .badge-notif-pesan {
        position: relative;
    }

    .badge-notif-pesan[data-badge]:after {
        content: attr(data-badge);
        position: absolute;
        top: 25px;
        right: 5px;
        font-size: .7em;
        background: #e53935;
        color: white;
        width: 18px;
        height: 18px;
        text-align: center;
        line-height: 18px;
        border-radius: 50%;
    }
</style>
<div class="rz-navbar" uk-sticky="cls-active: rz-bg-white; top: 300; animation: uk-animation-slide-top">
    <div id="navbarLine">

    </div>
    <div id="navbarSide" class="uk-visible@l rz-bg-white">

        <nav class="" uk-navbar>
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li><a href=""><img src="{{ asset('assets/img/logo_toko.png') }}" alt=""
                                class="rz-logo"></a></li>
                </ul>
            </div>
        </nav>


    </div>

    <div id="navbarMain" class="rz-bg-white">

        <div class="uk-container">
            <nav class="" uk-navbar>
                <div class="uk-navbar-left uk-hidden@l">
                    <a href=""><img src="{{ asset('assets/img/logo_toko.png') }}" alt="icon"
                            class="rz-logo"></a>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav uk-visible@l">
                        <li>
                            <a href="#" id="notifikasi">
                                <img src="{{ asset('assets/img/bell.svg') }}" alt="icon" class="rz-logo rz-img-filter-grey">
                                <span class="badge badge-light" id="notif" data-badge="0"></span>
                            </a>


                            <div class="uk-navbar-dropdown" uk-dropdown="offset: -10">
                                <div class="uk-nav uk-navbar-dropdown-nav">
                                    <ul class="uk-list uk-text-small uk-list-divider">
                                        <li>
                                            <a href="{{ route('pesanan.notif') }}" class="uk-button uk-button-primary uk-button-small">
                                                Lihat Pesanan
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </li>
                        <li>
                            <a href="#" class="badge-notif-pesan" data-badge="0"><img
                                    src="{{ asset('assets/img/envelope.svg') }}" alt="icon"
                                    class="rz-logo-medium rz-img-filter-grey">
                            </a>
                            {{-- <div class="uk-navbar-dropdown" uk-dropdown="offset: -10">
                                <div class="uk-nav uk-navbar-dropdown-nav">
                                    <ul class="uk-list uk-text-small uk-list-divider">
                                        <li><a href="#">POB21(POBAHANBAKU 2 1 1 1 100120 22 BATIK)
                                                QTY Skrg : 0.00
                                                QTY MIN : 1.00</a></li>
                                        <li><a href="#">POC21(POCELUP 2 1 1 1 100120 22 BATIK)
                                                QTY Skrg : 0.00
                                                QTY MIN : 1.00</a></li>
                                    </ul>

                                </div>
                            </div> --}}
                        </li>
                        <li>
                            <a href="#">
                                <div><img src="https://i.pravatar.cc/40?img=12" alt="avatar"
                                        class="uk-border-circle uk-margin-small-right">{{ auth()->user()->name }}</div>
                            </a>
                            <div class="uk-navbar-dropdown" uk-dropdown="offset: -10">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Profile</a></li>
                                    <li><a onclick="logout()">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <a class="uk-navbar-toggle uk-navbar-item uk-hidden@l" data-uk-toggle data-uk-navbar-toggle-icon
                        href="#offcanvas-nav"></a>
                </div>
            </nav>
        </div>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
    // Ketika halaman dimuat, Anda dapat mengambil data dari server
    // untuk mengisi elemen dengan nilai variabel yang sesuai.

    // Misalnya, Anda dapat mengirim permintaan AJAX ke server
    // untuk mengambil variabel 'countNotif' dari respons.
    $.ajax({
        url: "{{ route('get.notif') }}", // Ganti dengan rute yang sesuai di Laravel Anda
        method: "GET",
        dataType: "json",
        success: function(data) {
            // Handle data yang diterima dari server
            if (data.countNotif !== undefined) {
                // Mengisi elemen dengan nilai variabel 'countNotif'
                $("#notif").text(data.countNotif);
            } else {
                // Data tidak valid atau tidak ada data yang diterima
                console.log('Data notifikasi tidak valid atau tidak ditemukan.');
            }
        },
        error: function(xhr, status, error) {
            // Handle kesalahan jika terjadi
            console.error("Kesalahan saat mengambil data notifikasi: " + error);
        }
    });
});

</script>


