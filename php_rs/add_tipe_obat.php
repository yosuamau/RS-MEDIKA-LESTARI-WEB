<?php
include("koneksi.php");
if (isset($_POST['save'])) {
    $add_query = mysql_query("insert into tipe_obat(nama)
	value('" . $_POST['a'] . "')");

    if ($add_query) {
        header("location:view_tipe_obat.php");
    } else {
        echo mysql_error();
    }
}
include('top.php');
?>
<form method="post">
    <table class="table table-bordered">
        <tr>
            <td>Nama</td>
            <td><input type="text" class="form-control "name="a"></td>
        </tr>

        <td><input type="submit" class="form-control "name="save"></td>
        </tr>

    </table>
</form>
<?php include('bottom.php'); ?>








