<?php

echo "==== Exemplo de estrutura de dados em PHP (Pilha) ====\n\n";

echo "Pilha Simples: \n";

$pilha = [];

function adicionarNaPilha($elemento) {
    global $pilha;
    array_push($pilha, $elemento);
}

function removerDaPilha(){
    global $pilha;
    if (empty($pilha)) {
        return "A pilha está vazia!";
    }
    return array_pop($pilha);
}

function topoDaPilha(){
    global $pilha;
    if (empty($pilha)) {
        return "A pilha está vazia!";
    }
    return end($pilha);
}

function mostrarPilha(){
    global $pilha;
    if (empty($pilha)) {
        return "A pilha está vazia!";
    }
    print_r($pilha);
}

while (true) {
    echo "\nMenu:\n";
    echo "1 - Adicionar ação\n";
    echo "2 - Desfazer ação\n";
    echo "3 - Mostrar histórico\n";
    echo "4 - Mostrar última ação\n";
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