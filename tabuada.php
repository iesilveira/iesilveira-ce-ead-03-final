<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>
      Tabuada gerada!
    </title>
    <link rel='stylesheet'
          type='text/css'
          href='estiloSaida.css'>
    <?php    
      //Obtendo valores do formulário dinamicamente
      foreach ($_POST as $chave => $valor)
        $$chave = $valor;    
    ?>
  </head>
  <style>
	th {
	 background-color : <?php 
	$limite = 6;
	$characters = '0123456789abcdef';
    $cor = '';
    for ($i = 0; $i < $limite; $i++) {
        $cor .= $characters[mt_rand(0, strlen($characters))];
    }
	echo "#". $cor;?>;
	}
  
  </style>
  
  <body>
    <?php      
      //Montando a(s) tabela(s)
      for ($i = $tabuadaInicio; $i <= $tabuadaFim; $i++) {
        
        echo "<table border='1' style= 'display:inline-table; margin : 5px;'>".
             "  <caption>Mult. do " . $i . "</caption>" .
             "  <thead>" .
             "  <tr>" .
             "    <th>Fórmula</th>" .
             "    <th>Valor</th>" .
             "  </tr>" .             
             "  </thead>" .
             "  <tbody>" ;
             
        for ($j = $numeroInicio; $j <= $numeroFim; $j++) {
          
          echo "<tr>" . 
               "  <td>" . $i . " x " . $j . "</td>" .
               "  <td>" . ($i * $j) . "</td>" .
               "</tr>";          
        } 
		    echo "  </tbody>" .
             " </table>";
      }
	  
	  echo "<hr>";
	  
	  for ($i = $tabuadaInicio; $i <= $tabuadaFim; $i++) {
        
        echo "<table border='1' style= 'display:inline-table; margin : 5px;'>".
             "  <caption>Soma do " . $i . "</caption>" .
             "  <thead>" .
             "  <tr>" .
             "    <th>Fórmula</th>" .
             "    <th>Valor</th>" .
             "  </tr>" .             
             "  </thead>" .
             "  <tbody>" ;
             
        for ($j = $numeroInicio; $j <= $numeroFim; $j++) {
          
          echo "<tr>" . 
               "  <td>" . $i . " + " . $j . "</td>" .
               "  <td>" . ($i + $j) . "</td>" .
               "</tr>";          
        } 
		    echo "  </tbody>" .
             " </table>";
      }
	  
	  echo "<hr>";
	  
	  for ($i = $tabuadaInicio; $i <= $tabuadaFim; $i++) {
        
        echo "<table border='1' style= 'display:inline-table; margin : 5px;'>".
             "  <caption>Subtração do " . $i . "</caption>" .
             "  <thead>" .
             "  <tr>" .
             "    <th>Fórmula</th>" .
             "    <th>Valor</th>" .
             "  </tr>" .             
             "  </thead>" .
             "  <tbody>" ;
             
        for ($j = $numeroInicio; $j <= $numeroFim; $j++) {
          
          echo "<tr>" . 
               "  <td>" . $i . " - " . $j . "</td>" .
               "  <td>" . ($i - $j) . "</td>" .
               "</tr>";          
        } 
		    echo "  </tbody>" .
             " </table>";
      }
	  
	  echo "<hr>";
	  
	  for ($i = $tabuadaInicio; $i <= $tabuadaFim; $i++) {
        
        echo "<table border='1' style= 'display:inline-table; margin : 5px;'>".
             "  <caption>Divisão do " . $i . "</caption>" .
             "  <thead>" .
             "  <tr>" .
             "    <th>Fórmula</th>" .
             "    <th>Valor</th>" .
             "  </tr>" .             
             "  </thead>" .
             "  <tbody>" ;
			 
             
        for ($j = $numeroInicio; $j <= $numeroFim; $j++) {
          
			if ($j == "0"){
		  
			echo 
				"<tr>" . 
					   "  <td>" . $i . " / " . $j . "</td>" .
					   "  <td> N/A </td>" .
				"</tr>";
				
			}
			else{
				
				echo 
				"<tr>" . 
					   "  <td>" . $i . " / " . $j . "</td>" .
					   "  <td>" . round($i / $j) . "</td>" .
				"</tr>";
			}
			
      }
			echo "  </tbody>" .
			" </table>";
	  }
	  
	  echo "<hr>";
      
    ?>
  </body>
</html>