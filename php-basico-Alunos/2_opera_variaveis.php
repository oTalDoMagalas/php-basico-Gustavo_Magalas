<!-- USANDO A FUNÇÃO GET -->
 <!-- GET: método HTML padrão, a requisição é enviado como uma string anexado a URL -->

 <!-- Esse programa recebe dois valores pela URL usando o médoto GET -->

 <?php
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    // verifica se os valores foram passados corretamente
    if(isset($numero1) && isset($numero2)){

        // converter para inteiros 
        $numero1 = (int)$numero1;
        $numero2 = (int)$numero2;

        // SOMAR
        $soma = $numero1 + $numero2;
        // SUBTRAIR
        $subtraçao = $numero1 - $numero2;

        // MULTIPLICAR
        $multiplicaçao = $numero1 * $numero2;

       // DIVIDIR
       $divisao = $numero1 / $numero2;
       
        //Exibir resultados
        echo "A soma é $soma <br>";
        echo "A subtração é $subtraçao <br>";
        echo "A multiplicação é $multiplicaçao <br>";
        echo "A divisão é $divisao <br>";
        

    } else{
        echo "ATENÇÃO! Por favor, Forneça os valores de numero1 e numero2 pela URL.";
    }
 ?>