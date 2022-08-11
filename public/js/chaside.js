alert("Esto es una prueba");


INTERESES_c=0;
INTERESES_h=0;
INTERESES_a=0;
INTERESES_s=0;
INTERESES_i=0;
INTERESES_d=0;
INTERESES_e=0;
APTITUDES_c=0;
APTITUDES_h=0;
APTITUDES_a=0;
APTITUDES_s=0;
APTITUDES_i=0;
APTITUDES_d=0;
APTITUDES_e=0;

	  
function agregar(variable) {

	fragmentoTexto = variable.split('~');
	fragmentoTexto[0];// intereses-aptitudes
	fragmentoTexto[1];// chaside
	
	if (fragmentoTexto[0]=='intereses') {
		if(fragmentoTexto[1]=='c')  INTERESES_c++;
		if (fragmentoTexto[1]=='h') INTERESES_h++;
		if (fragmentoTexto[1]=='a') INTERESES_a++;
		if (fragmentoTexto[1]=='s') INTERESES_s++;
		if (fragmentoTexto[1]=='i') INTERESES_i++;
		if (fragmentoTexto[1]=='d') INTERESES_d++;
		if (fragmentoTexto[1]=='e') INTERESES_e++;
	}
	
	if (fragmentoTexto[0]== 'aptitudes') {
		if(fragmentoTexto[1]=='c')	APTITUDES_c++;
		if (fragmentoTexto[1]=='h')	APTITUDES_h++;
		if (fragmentoTexto[1]=='a')	APTITUDES_a++;
		if (fragmentoTexto[1]=='s')	APTITUDES_s++;
		if (fragmentoTexto[1]=='i')	APTITUDES_i++;
		if (fragmentoTexto[1]=='d')	APTITUDES_d++;
		if (fragmentoTexto[1]=='e')	APTITUDES_e++;
	}
	 //alert(fragmentoTexto[0]+fragmentoTexto[1]);
 
 }
 
 
function resultados() {

	vectorintereses=new Array(INTERESES_c,INTERESES_h,INTERESES_a,INTERESES_s,INTERESES_i,INTERESES_d,INTERESES_e);
	//vectorintereses=new Array(1,4,7,28,9,2,7);
	letrasintereses=new Array('C','H','A','S','I','D','E');
	var maximointereses=vectorintereses[0];
	iNumeroMayor = vectorintereses[0];
	iPosicion = 0;
		for (var x=0;x<vectorintereses.length;x++){
			
			if (x==0)intereses0.innerHTML = letrasintereses[x]+': '+vectorintereses[x]+'<br>';		
			if (x==1)intereses1.innerHTML = letrasintereses[x]+': '+vectorintereses[x]+'<br>';
			if (x==2)intereses2.innerHTML = letrasintereses[x]+': '+vectorintereses[x]+'<br>';
			if (x==3)intereses3.innerHTML = letrasintereses[x]+': '+vectorintereses[x]+'<br>';
			if (x==4)intereses4.innerHTML = letrasintereses[x]+': '+vectorintereses[x]+'<br>';
			if (x==5)intereses5.innerHTML = letrasintereses[x]+': '+vectorintereses[x]+'<br>';
			if (x==6)intereses6.innerHTML = letrasintereses[x]+': '+vectorintereses[x]+'<br>';
				
			if (vectorintereses[x]>iNumeroMayor){ iNumeroMayor = vectorintereses[x];   iPosicion = x;} 
		}	
	//	document.write(iNumeroMayor+': '+iPosicion+'<br>');
	//document.write('Su puntaución en intereses ha sido: '+iNumeroMayor+' y LA LETRA MAYOR fue: '+letrasintereses[iPosicion]+'<br>');	
		
	
	//vectoraptitudes=new Array(1,4,7,28,9,2,7);
	vectoraptitudes=new Array(APTITUDES_c,APTITUDES_h,APTITUDES_a,APTITUDES_s,APTITUDES_i,APTITUDES_d,APTITUDES_e);
	letrasaptitudes=new Array('C','H','A','S','I','D','E');
	var maximoaptitudes=vectoraptitudes[0];
	aNumeroMayor = vectoraptitudes[0];
	aPosicion = 0;
		for (var y=0;y<vectoraptitudes.length;y++){
		
			if (y==0)aptitudes0.innerHTML = letrasaptitudes[y]+': '+vectoraptitudes[y]+'<br>';
			if (y==1)aptitudes1.innerHTML = letrasaptitudes[y]+': '+vectoraptitudes[y]+'<br>';
			if (y==2)aptitudes2.innerHTML = letrasaptitudes[y]+': '+vectoraptitudes[y]+'<br>';
			if (y==3)aptitudes3.innerHTML = letrasaptitudes[y]+': '+vectoraptitudes[y]+'<br>';
			if (y==4)aptitudes4.innerHTML = letrasaptitudes[y]+': '+vectoraptitudes[y]+'<br>';
			if (y==5)aptitudes5.innerHTML = letrasaptitudes[y]+': '+vectoraptitudes[y]+'<br>';
			if (y==6)aptitudes6.innerHTML = letrasaptitudes[y]+': '+vectoraptitudes[y]+'<br>';																																		
	
	
			if (vectoraptitudes[y]>aNumeroMayor){ aNumeroMayor = vectoraptitudes[y];   aPosicion = y;} 
		}	
		//document.write(aNumeroMayor+': '+aPosicion+'<br>');
	//document.write('Su puntaución en aptitudes ha sido: '+aNumeroMayor+' y LA LETRA MAYOR fue: '+letrasaptitudes[aPosicion]+'<br>');
	
	
	
	
	
	
	
	//cacho nuevo para repetidos
	
	//intereses
			var imayoresrepetidos='';
			var itextorepetido='';			
			irepetido=0;
			for (var z=0;z<vectorintereses.length;z++){
			
			if (z==0)intereses0.innerHTML = letrasintereses[z]+': '+vectorintereses[z]+'<br>';		
			if (z==1)intereses1.innerHTML = letrasintereses[z]+': '+vectorintereses[z]+'<br>';
			if (z==2)intereses2.innerHTML = letrasintereses[z]+': '+vectorintereses[z]+'<br>';
			if (z==3)intereses3.innerHTML = letrasintereses[z]+': '+vectorintereses[z]+'<br>';
			if (z==4)intereses4.innerHTML = letrasintereses[z]+': '+vectorintereses[z]+'<br>';
			if (z==5)intereses5.innerHTML = letrasintereses[z]+': '+vectorintereses[z]+'<br>';
			if (z==6)intereses6.innerHTML = letrasintereses[z]+': '+vectorintereses[z]+'<br>';
						
				if (vectorintereses[z]>=iNumeroMayor){ 
					irepetido++;
					if (irepetido>0){
						imayoresrepetidos =imayoresrepetidos+ 'y' +iNumeroMayor;   iPosicion = z;
						
						itextorepetido =itextorepetido+ 'y' +letrasintereses[z];  
						//alert(vectorintereses[z]+' '+iNumeroMayor);
					}
				} 
				if (letrasintereses[iPosicion] == 'C') interesesresult2.innerHTML = '<b> - Profesiones Administrativas y Contables.</b><br>';
				else if (letrasintereses[iPosicion] == 'H') interesesresult3.innerHTML = '<b> - Profesiones Humanísticas y Sociales.</b><br>';
				else if (letrasintereses[iPosicion] == 'A') interesesresult4.innerHTML = '<b> - Actividades Art&iacute;sticas.</b><br>';
				else if (letrasintereses[iPosicion] == 'S') interesesresult5.innerHTML = '<b> - Medicina y Ciencias de la Salud.</b><br>';
				else if (letrasintereses[iPosicion] == 'I') interesesresult6.innerHTML = '<b> - Ingenier&iacute;a e Inform&aacute;tica.</b><br>';
				else if (letrasintereses[iPosicion] == 'D') interesesresult7.innerHTML = '<b> - Defensa y Seguridad.</b><br>';
				else if (letrasintereses[iPosicion] == 'E') interesesresult8.innerHTML = '<b> - Ciencias Puras, Agrarias,  Medio Ambientales.<br>';
					
			}	//alert(imayoresrepetidos+' = '+itextorepetido);
			
			
			//aptitudes
			
			
			var amayoresrepetidos='';
			var atextorepetido='';			
			arepetido=0;
			for (var a=0;a<vectoraptitudes.length;a++){
			
			if (a==0)aptitudes0.innerHTML = letrasaptitudes[a]+': '+vectoraptitudes[a]+'<br>';		
			if (a==1)aptitudes1.innerHTML = letrasaptitudes[a]+': '+vectoraptitudes[a]+'<br>';
			if (a==2)aptitudes2.innerHTML = letrasaptitudes[a]+': '+vectoraptitudes[a]+'<br>';
			if (a==3)aptitudes3.innerHTML = letrasaptitudes[a]+': '+vectoraptitudes[a]+'<br>';
			if (a==4)aptitudes4.innerHTML = letrasaptitudes[a]+': '+vectoraptitudes[a]+'<br>';
			if (a==5)aptitudes5.innerHTML = letrasaptitudes[a]+': '+vectoraptitudes[a]+'<br>';
			if (a==6)aptitudes6.innerHTML = letrasaptitudes[a]+': '+vectoraptitudes[a]+'<br>';
						
				if (vectoraptitudes[a]>=aNumeroMayor){ 
					arepetido++;
					if (arepetido>0){
						amayoresrepetidos =amayoresrepetidos+ 'y' +aNumeroMayor;   aPosicion = a;
						
						atextorepetido =atextorepetido+ 'y' +letrasaptitudes[a];  
						//alert(vectorintereses[z]+' '+iNumeroMayor);
					}
				} 
				if (letrasaptitudes[aPosicion] == 'C') aptitudesresult2.innerHTML = '<b> - Profesiones Administrativas y Contables.</b><br>';
				else if (letrasaptitudes[aPosicion] == 'H') aptitudesresult3.innerHTML = '<b> - Profesiones Humanísticas y Sociales.</b><br>';
				else if (letrasaptitudes[aPosicion] == 'A') aptitudesresult4.innerHTML = '<b> - Actividades Art&iacute;sticas.</b><br>';
				else if (letrasaptitudes[aPosicion] == 'S') aptitudesresult5.innerHTML = '<b> - Medicina y Ciencias de la Salud.</b><br>';
				else if (letrasaptitudes[aPosicion] == 'I') aptitudesresult6.innerHTML = '<b> - Ingenier&iacute;a e Inform&aacute;tica.</b><br>';
				else if (letrasaptitudes[aPosicion] == 'D')aptitudesresult7.innerHTML = '<b> - Defensa y Seguridad.</b><br>';
				else if (letrasintereses[aPosicion] == 'E') aptitudesresult8.innerHTML = '<b>  - Ciencias Puras, Agrarias,  Medio Ambientales.<br>';
					
			}	//alert(imayoresrepetidos+' = '+itextorepetido);
			
			
			
			
		
	//fin cacho nuevo	
	
	
	
	
	
	
	
	
	
	
	
	
	
	if 	(aNumeroMayor==0 || iNumeroMayor==0) alert("Tiene que rellenar el cuestionario completamente");
		
		intereses.innerHTML = '<br><b>Interpretación de resultados: <br><br> * Con una puntuación de '+iNumeroMayor+' sobre 10 posibles SUS INTERESES están orientados hacia actividades: </b> ';
		aptitudes.innerHTML = '<b> * Con una puntuación de '+aNumeroMayor+' sobre 4 posibles, SUS APTITUDES están orientadas hacia actividades: </b> ';
	
	/*//INTERESES
		if (letrasintereses[iPosicion] == 'C') interesesresult.innerHTML = '<b>Profesiones Administrativas y Contables.</b>';
		else if (letrasintereses[iPosicion] == 'H') interesesresult.innerHTML = '<b>Profesiones Humanísticas y Sociales.</b>';
		else if (letrasintereses[iPosicion] == 'A') interesesresult.innerHTML = '<b>Actividades Art&iacute;sticas.</b>';
		else if (letrasintereses[iPosicion] == 'S') interesesresult.innerHTML = '<b>Medicina y Ciencias de la Salud.</b>';
		else if (letrasintereses[iPosicion] == 'I') interesesresult.innerHTML = '<b>Ingenier&iacute;a e Inform&aacute;tica.</b>';
		else if (letrasintereses[iPosicion] == 'D') interesesresult.innerHTML = '<b>Defensa y Seguridad.</b>';
		else if (letrasintereses[iPosicion] == 'E') interesesresult.innerHTML = '<b>Ciencias Puras, Agrarias,  Medio Ambientales.</b>';
		
	//APTITUDES
	
		if (letrasaptitudes[aPosicion] == 'C') aptitudesresult.innerHTML = '<b>Profesiones Administrativas y Contables</b>';
		else if (letrasaptitudes[aPosicion] == 'H') aptitudesresult.innerHTML = '<b>Profesiones Humanísticas y Sociales.</b>';
		else if (letrasaptitudes[aPosicion] == 'A') aptitudesresult.innerHTML = '<b>Actividades Art&iacute;sticas.</b>';
		else if (letrasaptitudes[aPosicion] == 'S') aptitudesresult.innerHTML = '<b>Medicina y Ciencias de la Salud.</b>';
		else if (letrasaptitudes[aPosicion] == 'I') aptitudesresult.innerHTML = '<b>Ingenier&iacute;a e Inform&aacute;tica.</b>';
		else if (letrasaptitudes[aPosicion] == 'D') aptitudesresult.innerHTML = '<b>Defensa y Seguridad.</b>';
		else if (letrasaptitudes[aPosicion] == 'E') aptitudesresult.innerHTML = '<b>Ciencias Puras, Agrarias,  Medio Ambientales.</b>';	*/
	
}
	
