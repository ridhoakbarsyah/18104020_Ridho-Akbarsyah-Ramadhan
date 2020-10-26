function tampil() {
    alert('Hallo!');
}

let warna = document.getElementById('warna');

warna.addEventListener('change', (event) =>{
    document.body.style.backgroundColor = warna.value;
});

let nama = window.prompt("Masukan nama anda!");
alert('Halo ' + nama);