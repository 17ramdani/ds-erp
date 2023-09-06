<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Data Pesanan</h2>
        <table id="modal-table">
            <thead>
                <tr>
                    <th>No SO</th>
                    <th>Tgl Pesanan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pesanan as $item)
                <tr>
                    <td>{{ $item->nomor }}</td>
                    <td>{{ date_format(date_create($item->tanggal_pesanan), 'd-M-y') }}</td>
                    <td>
                        @if ($item->status_pesanan_id == 1 || $item->status_pesanan_id == 2)
                        <a href="{{ route('draft.detail', $item->id) }}">Detail</a>
                        @else
                        <a href="{{ route('pesanan.detail', $item->id) }}">Detail</a>
                        @endif
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

<script>
    function openModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "block";
    }

    function closeModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }

    var lihatPesananButton = document.getElementById("lihatPesananButton");
    lihatPesananButton.addEventListener("click", openModal);

    var closeModalButton = document.querySelector(".close");
    closeModalButton.addEventListener("click", closeModal);
</script>
