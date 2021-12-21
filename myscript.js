function validasi() {
    var nama = document.getElementById("nama").value;
    var email = document.getElementById("email").value;
    var feedback = document.getElementById("feedback").value;
    if (nama != "" && email!="" && feedback !="") {
        return true;
    }else{
        alert('Isilah dengan lengkap !');
    }
}