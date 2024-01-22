<?php
  //declaração de variáveis 
  $var;

  //impressão na tela 
  echo "Olá!";
  echo 'Olá';
  echo "Olá! \n";
  echo $var; 
  echo "$var alguma coisa \n";
  echo "$var" . PHP_EOL;
  echo "Olá! Eu sou o " . $var;

  //Operadores aritméticos
  $adicao = 5 + 5;
  $subtracao = 5 - 5;
  $multiplicacao = 5 * 5;
  $divisao = 5 / 5;
  $resto = 5 % 5;
  $ponteciacao = 5 ** 5;
  
  /*
      Operadores Lógicos: 
       || ou or  = ou (você pode utilizar dos dois tipos, mas os símbolos possuem a maior precedência)
       && ou and = E (você pode utilizar dos dois tipos, mas os símbolos possuem a maior precedência)
       
  */

  /*
      Operadores de comparação
       == = Igual 
       <= = menor ou igual
       >= = maior ou igual
       <  = menor que 
       >  = maior que 
       === = 
       !=, <> = Diferente de 
       !== = Não idêntico
       <=> = Define um inteiro (-1, 0, 1) caso o resultado da comparação for menor que, igual ou maior que, respectivamente

  */

  /*
      Operadores de incremento:
      -i  = Troca o sinal do operando 
      ++i = Pré-incremento, primeiro incrementa depois realiza a operação
      i++ = Pós-incremento, primeiro faz a operação depois incrementa
      --i = Pré-incremento, primeiro incrementa depois realiza a operação
      i-- = = Pós-incremento, primeiro faz a operação depois incrementa
  */
   
   /*
    * Operadores de atribuição:
      =  = Atribuição simples
      += = Atribuição com adição
      -= = Atribuição com subtração
      *= = Atribuição com multiplicação
      /= = Atribuição com divisão
      %= = Atribuição com resto da divisão
      .= = Atribuição com concatenação
    */
    
    // Estruturas condicionais
    $i = 0;

    if ($i == 10){
        echo "Foi executado corretamente! \n";
    }

    if ($i == 11){
        echo "Verdadeiro \n";
    }else{
        echo "Falso\n";
    }

    if ($i == 10){
        echo "Verdadeiro \n";
    }else if ($i == 14){
        echo "Verdadeiro \n";
    }else{
        echo "Falso";
    }

    $i = $i == 10 ? true : false; // Operador ternário

    echo $i;
    
    // Estruturas de repeticão
    for ($r = 0; $r <= 10; $r++){
        echo "#$r \n";
    }

    while ($r < 12){
        $r++;
        echo "#$r";
    }

    

?>