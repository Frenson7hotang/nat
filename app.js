// Ambil elemen yang diperlukan
const modal = document.getElementById('authentication-modal');
const openModalButton = document.getElementById('data-modal-target');
const closeModalButton = document.getElementById('close-modal');

// Fungsi untuk membuka modal
openModalButton.addEventListener('click', () => {
    modal.classList.remove('hidden');  // Menampilkan modal
});

// Fungsi untuk menutup modal
closeModalButton.addEventListener('click', () => {
    modal.classList.add('hidden');  // Menyembunyikan modal
});

//edit
// Ambil elemen yang diperlukan
const modall = document.getElementById('authentication-target');
const openModalButtonn = document.getElementById('target');
const closeModalButtonn = document.getElementById('close-target');

// Fungsi untuk membuka modal
openModalButtonn.addEventListener('click', () => {
    modall.classList.remove('hidden');  // Menampilkan modal
});

// Fungsi untuk menutup modal
closeModalButtonn.addEventListener('click', () => {
    modall.classList.add('hidden');  // Menyembunyikan modal
});