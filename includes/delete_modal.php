<?php
function includeDeleteModal() {
?>
<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
            <div class="sm:flex sm:items-start">
                <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                    <i class="fas fa-exclamation-triangle text-red-600"></i>
                </div>
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                        Konfirmasi Penghapusan
                    </h3>
                    <div class="mt-2">
                        <p class="text-sm text-gray-500" id="deleteConfirmationText">
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                <form id="deleteForm" method="GET" class="inline">
                    <input type="hidden" name="delete" id="deleteId">
                    <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Hapus
                    </button>
                </form>
                <button type="button" onclick="hideDeleteConfirmation()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">
                    Batal
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function showDeleteConfirmation(id, name, type) {
    document.getElementById('deleteModal').classList.remove('hidden');
    document.getElementById('deleteId').value = id;
    let message = '';
    switch(type) {
        case 'pegawai':
            message = `Apakah Anda yakin ingin menghapus pegawai "${name}"?`;
            break;
        case 'departemen':
            message = `Apakah Anda yakin ingin menghapus departemen "${name}"?`;
            break;
        case 'jabatan':
            message = `Apakah Anda yakin ingin menghapus jabatan "${name}"?`;
            break;
        case 'gaji':
            message = `Apakah Anda yakin ingin menghapus data gaji untuk "${name}"?`;
            break;
        case 'absensi':
            message = `Apakah Anda yakin ingin menghapus data absensi untuk "${name}"?`;
            break;
        default:
            message = `Apakah Anda yakin ingin menghapus "${name}"?`;
    }
    document.getElementById('deleteConfirmationText').textContent = message;
}

function hideDeleteConfirmation() {
    document.getElementById('deleteModal').classList.add('hidden');
}
</script>
<?php
}
?>
