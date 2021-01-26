<?php
include("includes/conexao.php");
$code = $_GET['code'];

$code = str_replace('#', '', $code);
$code = str_replace(' ', '', $code);

$query = mysqli_query($conexao, "SELECT * FROM cabeludos WHERE code = '$code'");
$result1 = mysqli_fetch_array($query);

$img1 = explode(",", $result1['img']);

$cnt1 = count($img1);
?>
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

<body>
    <?php if(mysqli_num_rows($query) > 0){?>
    <div class="content">
        <div class="row">
            <div class=" cnt" ondblclick="selecionar('<?php echo $result1['id']; ?>')" id="cnt1">
                <div class="opt">
                    <h3>...</h3>
                    <div class="optm">
                        <button class="btt">Denunciar</button>
                    </div>
                </div>
                <div id="1">
                    <img src="<?php echo $img1[0]; ?>" style="visibility:visible;">
                    <?php

                    for ($i = 1; $i < $cnt1; $i++) {
                    ?>
                        <img src="<?php echo $img1[$i]; ?>" style="visibility:hidden;">
                    <?php
                    }
                    ?>
                </div>
                <div class="nome">
                    <?php echo $result1['nome']; ?>
                    <div class="idade">
                        Idade: <?php echo $result1['idade']; ?> anos<br>Sexo: <?php echo $result1['sexo']; ?>
                    </div>
                </div>
                <button class="bttleft" onclick="mudar1(0)">
                    < </button>
                        <button class="bttright" onclick="mudar1(1)">
                            >
                        </button>
                        <div class="cttinferior">
                            <div class="codt">
                                <div class="cod">
                                    #<?php echo $result1['code']; ?>
                                </div>
                            </div>
                            <div class="desc">
                                <p><?php echo $result1['descr']; ?></p>
                            </div>
                        </div>
            </div>
        </div>
    </div>
<?php }else{
    ?>
    <div class="row">
        <h4 style="color:whitesmoke;">Não há nenhum cabeludo com esse código!</h4>
    </div>
    <?php
} ?>
    <?php include("includes/menu.php"); ?>
</body>
<?php include('includes/js.php'); ?>

</html>