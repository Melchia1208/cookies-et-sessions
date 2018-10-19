<?php require 'inc/head.php';
if (empty($_SESSION['name'])){
    header('Location: login.php');
}
?>
<section class="cookies container-fluid">
    <div class="row">

        <div class="container">
            <h1>VOTRE PANIER :</h1>
            <br>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Cookie</th>
                <th scope="col">Quantity</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <th>Pecan nuts</th>
                <td><?php echo $_SESSION['nuts']?></td>

            <tr>
                <th>Chocolate chips</th>
                <td><?php echo $_SESSION['chips']?></td>

            </tr>
            <tr>
                <th>Chocolate cookie</th>
                <td><?php echo $_SESSION['cookie']?></td>

            </tr>
            <tr>
                <th>M&M's cookies</th>
                <td><?php echo $_SESSION['MMs']?></td>

            </tr>
            </tbody>
        </table>
        </div>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
