<?php
// Função para verificar aceitação do desafio 1
function verificarAceitacao($nome, $sexo, $idade)
{
   //código aqui
   if ($sexo == "feminino") {
      if ($idade < 25) {
         return " $nome voce foi aceita";
      } else {
         return "$nome voce nao tem idade superior a 25";
      }
   } else {
      return " $nome voce nao é mulher";
   }
}

// Função para ordenar números do desafio 2
function ordenarNumeros($num1, $num2, $num3)
{
   //código aqui
   $tiosam = array($num1, $num2, $num3);
   rsort($tiosam);
   return implode(",", $tiosam);
}

// Função para calcular média do desafio 3
function calcularMediaAluno($nota1, $nota2, $nota3)
{
   //código aqui
   $media = ($nota1 + $nota2 + $nota3) / 3;
   
   if ($media >= 7) {
      return "media $media, aprovado";
   } else {
      return " media $media, reprovado";
   }
}

//Calcular a média das notas de um aluno. Se a média for maior ou igual a 7, imprimir "Aprovado"; caso contrário, imprimir "Reprovado".