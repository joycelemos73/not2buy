<?php

    class BarraLateral
    {
        public function exibirTodos(): array
        {
            $barra_lateral = [
                ['titulo' => 'Meu carrinho', 'link' => '06_carrinho.php'],
                ['titulo' => 'Atualizar dados', 'link' => '07_atualizar_dados.php'],
                ['titulo' => 'Cadastro de novos itens', 'link' => '08_new_items.php'],
                ['titulo' => 'Meus itens emprestados', 'link' => '09_meus_itens_emprestados.php'],
                ['titulo' => 'Devolução', 'link' => '10_devolucao.php'],
                ['titulo' => 'Fale Conosco', 'link' => '#'],
            ];
            return $barra_lateral;
        }
    }


?>