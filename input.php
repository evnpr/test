<form action="login.php" method="POST">
Nama Produk : <input type="text" name="username" /><br>
Jumlah Barang : <select name="jumlah">
<?php
for($i=0; $i<10; $i++){
?>

<option value="<?php echo $i ?>"><?php echo $i ?></option>

<?php
    }
?>

</select><br>
<input type="submit" value="submit" />
</form>