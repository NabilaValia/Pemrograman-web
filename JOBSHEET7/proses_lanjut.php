<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi (AJAX)</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi (AJAX)</h1>

    <form id="formValidasi" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color:red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color:red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <script>
    $(document).ready(function() {
        $("#formValidasi").submit(function(event) {
            event.preventDefault(); // Mencegah reload halaman

            var nama = $("#nama").val();
            var email = $("#email").val();
            var valid = true;

            // Validasi Nama
            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            } else {
                $("#nama-error").text("");
            }

            // Validasi Email
            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else {
                $("#email-error").text("");
            }

            // Jika valid, kirim dengan AJAX
            if (valid) {
                $.ajax({
                    url: "proses_validasi.php",
                    method: "POST",
                    data: { nama: nama, email: email },
                    success: function(response) {
                        alert("Respon dari server:\n" + response);
                    }
                });
            }
        });
    });
    </script>
</body>
</html>
