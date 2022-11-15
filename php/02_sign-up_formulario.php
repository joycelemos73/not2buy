<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        include "includes/conecta.php";

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //Se ID estiver vazio, então é INSERT
        if (empty($id)) {

            //Monta o SQL para inserir os dados do formulário do MySQL
            $sql = "INSERT INTO usuarios (nome, endereco, cpf, email, senha)
                                VALUES 
                                ('$nome', '$endereco', '$cpf', '$email', '$senha')";

            //Envia código do SQL para o MySQL
            $res = mysqli_query($conn, $sql);

            //Se inseriu com sucesso
            if($res) {
                header("Location: 04_pagina_inicial_logada.php");
            } else{
                echo "ERRO AO INSERIR!";
            }
        } else {
            $sql = "UPDATE usuarios SET
                        nome  = '$nome',
                        endereco = '$endereco',
                        cpf = '$cpf',
                        email = '$email',
                        senha = '$senha'
                    WHERE id = $id";
            //Envia código do SQL para o MySQL
            $res = mysqli_query($conn, $sql);

            //Se atualizou com sucesso
            if($res) {
                header("Location: 08_new_items.php");
            } else {
                echo "ERRO AO INSERIR!";
            }
        }

    }



?>