<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('includes/css.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/clipboard.js/1.5.12/clipboard.min.js"></script>

</head>
<?php
include("includes/conexao.php");

$query = mysqli_query($conexao, "SELECT * FROM cabeludos");
?>

<body>
        <div class="row" style="width: 100%;">
            <table id="customers">
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>Votos</th>
                </tr>

                <?php
                while ($fetch = mysqli_fetch_array($query)) {
                    $idc = $fetch['id'];
                    $querys = mysqli_query($conexao, "SELECT * FROM votos WHERE id_c = '$idc' ");

                    $num = mysqli_num_rows($querys);

                    $ft = explode(",", $fetch['img']);


                ?>
                    <tr>
                        <td><img src="<?php echo $ft[0]; ?>" class="fttop"></td>
                        <td><?php echo $fetch['nome'] ?></td>
                        <td><?php echo $num; ?></td>
                    </tr>
                <?php } ?>
            </table>
    </div>
    <?php include("includes/menu.php"); ?>
</body>
<?php include('includes/js.php'); ?>

</html>