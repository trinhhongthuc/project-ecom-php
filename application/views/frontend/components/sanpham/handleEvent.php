<script>
<?php    require_once("detail.php");
    require_once("Mproduct.php");
?>
alert('sdadaada')
<?php

echo '<script>alert("like numbe SSSr:")
</script>';

if(isset($_POST['btnSignUp'])) {
$result = $_POST['likeNumber'];
$id=$_POST['id'];
$myarray = array(
'like'=>100,
);
$this->Mproduct->product_update($myarray, $id);
}
?>
</script>