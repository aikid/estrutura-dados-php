<?php 
echo "==== Exemplo de estrutura de dados em PHP (Desafio Pilha) ====\n\n";

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

function verificarBalanceamento($expressao){
   echo "Verificando balanceamento da expressão: $expressao\n";
   exit;
}

while (true) {
    echo "\nDigite uma expressão matemática (ou '0' para encerrar): ";
    $opcao = trim(fgets(STDIN));
    switch ($opcao) {
        case '0':
            echo "Saindo...\n";
        exit;
        default:
            verificarBalanceamento($opcao);
        break;
    }
}