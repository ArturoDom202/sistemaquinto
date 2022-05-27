<?php
	class bd{	
		function abc($sqlg,$cnn)
		{		
					require($cnn);
		
					if (!mysqli_query($link,$sqlg)) {
					  echo("Descripción del Error: " . mysqli_error($link));
					}else{
					  echo "Los datos han sigo guardados satisfactoriamente";
					  mysqli_close($link);						
					}		
		}
		
		function combo($sql, $cnn, $id, $des, $No){
                    require($cnn);
                    $consulta=mysqli_query($link,$sql);
                        
                    while ($valores = mysqli_fetch_array($consulta)){
						if($valores[$id]<>$No){
                         	echo '<option value='.$valores[$id].'>'.$valores[$des].'</option>';
						}
                    }    		
		}
		

		function numRegistros($sql,$cnn)   //Devuelve el numero de Filas encontradas, producto de una consulta.
		{		
			require($cnn);	
			$consultita=mysqli_query($link,$sql);
			$numero_filas = mysqli_num_rows($consultita);
			
			if($numero_filas>0){
				$cantidad_filas = $numero_filas; 	
			}else{
				$cantidad_filas = 0;
			}
				
			mysqli_close($link);
			return $cantidad_filas;
		}		

}	
?>