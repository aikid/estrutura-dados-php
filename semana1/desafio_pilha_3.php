<?php

echo "==== Exemplo de estrutura de dados em PHP (Pilha) ====\n\n";

echo "Fila de Atendimento: \n";

$fila = [];

function adicionarNaFila($elemento) {
    global $fila;
    array_push($fila, $elemento);
}

function removerDaFila(){
    global $fila;
    if (empty($fila)) {
        return "A fila está vazia!";
    }
    return array_pop($fila);
}

function topoDaFila(){
    global $fila;
    if (empty($fila)) {
        return "A fila está vazia!";
    }
    return end($fila);
}

function mostrarFila(){
    global $fila;
    if (empty($fila)) {
        return "A fila está vazia!";
    }
    print_r($fila);
}

while (true) {
    echo "\nMenu:\n";
    echo "1 - Gerar nova senha\n";
    echo "2 - Chamar próxima senha\n";
    echo "3 - Ver fila de senhas\n";
    echo "4 - Ver próxima senha\n";
    echo "0 - Sair\n";
    echo "Escolha uma opção: ";

    $opcao = trim(fgets(STDIN));

    switch ($opcao) {
        case '1':
            echo "Descreva a ação: ";
            $acao = trim(fgets(STDIN));
            adicionarNaPilha($acao);
            echo "Ação '$acao' adicionada à pilha.\n";
            break;

        case '2':
            $removida = removerDaPilha();
            echo "Ação '$removida' removida da pilha.\n";
            break;

        case '3':
            echo "Histórico de ações:\n";
            mostrarPilha();
            break;

        case '4':
            echo "Última ação: " . topoDaPilha() . "\n";
            break;

        case '0':
            echo "Saindo...\n";
            exit;

        default:
            echo "Opção inválida!\n";
    }
}