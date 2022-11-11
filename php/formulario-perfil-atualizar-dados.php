<?php

    echo "Nome: " . $_POST["nomecompleto"] . "<br>";
    echo "Endereço: " . $_POST["endereco"] . "<br>";
    echo "Telefone: " . $_POST["telefone"] . "<br>";
    echo "Email: " . $_POST["email"] . "<br>";
    echo "Cartão de Crédito: " . $_POST["cartao_credito"] . "<br>";


//    $conn = mysqli_connect("localhost", "root", "", "atp");
//
//    var_dump($conn);
//
////    $id = $_POST['id'];
//    $nomecompleto = $_POST['nomecompleto'];
//    $endereco = $_POST['endereco'];
//    $telefone = $_POST['telefone'];
//    $email = $_POST['email'];
//    $cartao_credito = $_POST['cartao_credito'];
//
//
//    $sql = "INSERT INTO atualizar_dados (nomecompleto, endereco, telefone, email, cartao_credito)
//            VALUES
//                ('$nomecompleto', '$endereco', '$telefone', '$email', '$cartao_credito')";
//
//    $res = mysqli_query($conn, $sql);
//
//    if ($res) {
//        header("Location: 07_atualizar_dados.php");
//    }
//    else {
//        echo "ERRO AO INSERIR!";
//    }
?>