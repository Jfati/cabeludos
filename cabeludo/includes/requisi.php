<?php

include("conexao.php");

if($_POST['si'] == "curt"){
    $id = $_POST['id'];
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';

    echo $ipaddress;


        $querys = mysqli_query($conexao, "INSERT INTO votos(ip, id_c) VALUES ('$ipaddress', '$id')");
        if($querys){
            echo 'foi';
        }
    
}



if ($_POST['si'] == "recar") {
    $sql1 = "SELECT * FROM cabeludos ORDER BY RAND() LIMIT 1";
    $query1 = mysqli_query($conexao, $sql1);
    $result1 = mysqli_fetch_array($query1);
    $idp = $result1['id'];

    $sql2 = "SELECT * FROM cabeludos WHERE id != '$idp' ORDER BY RAND() LIMIT 1";
    $query2 = mysqli_query($conexao, $sql2);
    $result2 = mysqli_fetch_array($query2);

    $img1 = explode(",", $result1['img']);
    $img2 = explode(",", $result2['img']);

    $cnt1 = count($img1);
    $cnt2 = count($img2)
?>

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
    <div class="cnt" ondblclick="selecionar('<?php echo $result2['id']; ?>')" id="cnt2">
        <div class="opt">
            <h3>...</h3>
            <div class="optm">
                <button class="btt">Denunciar</button>
            </div>
        </div>
        <div id="2">
            <img src="<?php echo $img2[0]; ?>" style="visibility:visible;">
            <?php

            for ($i = 1; $i < $cnt2; $i++) {
            ?>
                <img src="<?php echo $img2[$i]; ?>" style="visibility:hidden;">
            <?php
            }
            ?>
        </div>
        <div class="nome">
            <?php echo $result2['nome']; ?>
            <div class="idade">
                Idade: <?php echo $result2['idade']; ?> anos<br>Sexo: <?php echo $result2['sexo']; ?>
            </div>
        </div>
        <button class="bttleft" onclick="mudar2(0)">
            < </button>
                <button class="bttright" onclick="mudar2(1)">
                    >
                </button>
                <div class="cttinferior">
                    <div class="codt">
                        <div class="cod">
                            #<?php echo $result2['code']; ?>
                        </div>
                    </div>
                    <div class="desc">
                        <p><?php echo $result2['descr']; ?> </p>
                    </div>
                </div>
    </div>

<?php }
