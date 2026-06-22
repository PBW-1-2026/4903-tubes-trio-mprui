function accTiket(id) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "proses_admin.php?id=" + encodeURIComponent(id), true);
    
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var baris = document.getElementById("baris-" + id);
            if (baris) {
                baris.style.display = "none";
            }
        }
    };
    
    xhr.send();
}