function index() {
    document.location='index.php';
}

function login() {
    document.location='login.php';
}

function logout() {
    document.location='logout.php';
}

function register() {
    document.location='registrasi.php';
}

function list_peserta() {
    document.location='list_peserta.php';
}

function input_peserta() {
    document.location='form_input_peserta.php';
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#profile').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}

$("#profile_input").change(function() {
    readURL(this);
});