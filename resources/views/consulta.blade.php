


@extends('app')

@section('content')

<script type="text/javascript" src="{{URL::asset('js/chaside.js')}}"></script>

<div class="container">

<center><b>Paciencia y conteste el test de orientación con sinceridad:</b></center>
    <br>
	
<FORM id="result">
<table border="0" cellspacing="2" cellpadding="0">
  <tr>
    <td width="550" valign="top"><p>&nbsp;</p></td>
    <td width="57" valign="top"><p><strong>S&Iacute;</strong></p></td>
    <td width="58" valign="top"><p><strong>NO</strong></p></td>  </tr>
  <tr  id="pregu1">
    <td width="550" valign="top"><p>1. &iquest;Aceptar&iacute;as trabajar escribiendo art&iacute;culos en la    secci&oacute;n econ&oacute;mica de un diario?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta1'  onClick=" agregar('intereses~c');">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta1'  onClick=" "></p></td>  </tr>
  <tr  id="pregu2">
    <td width="550" valign="top"><p>2.&iquest;Te ofrecer&iacute;as para organizar la despedida de soltero de    uno de tus amigos</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta2'  onClick=" agregar('aptitudes~c');">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta2'  onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu3">
    <td width="550" valign="top"><p>3. &iquest;Te gustar&iacute;a dirigir un proyecto de urbanizaci&oacute;n en tu    ciudad?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta3'  onClick=" agregar('intereses~a')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta3'  onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu4">
    <td width="550" valign="top"><p>4.Ante una frustraci&oacute;n siempre opones un pensamiento    positivo</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta4'  onClick=" agregar('aptitudes~s')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta4'  onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu5">
    <td width="550" valign="top"><p>5. &iquest;Te dedicar&iacute;as a socorrer a personas accidentadas o    atacadas por asaltantes?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta5'  onClick=" agregar('intereses~d')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta5'  onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu6">
    <td width="550" valign="top"><p>6. &iquest;Cuando eras peque&ntilde;o te interesaba saber c&oacute;mo estaban    construidos los juguetes?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta6'  onClick=" agregar('intereses~i')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta6'  onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu7">
    <td width="550" valign="top"><p>7. &iquest;Te interesan m&aacute;s los misterios de la naturaleza que    los secretos de la tecnolog&iacute;a?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta7'  onClick=" agregar('aptitudes~e')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta7'  onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu8">
    <td width="550" valign="top"><p>8. &iquest;Escuchas atentamente los problemas que te plantean tus    amigos?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta8'  onClick=" agregar('intereses~s')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta8'  onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu9">
    <td width="550" valign="top"><p>9. &iquest;Te ofrecer&iacute;as para explicar a tus compa&ntilde;eros un    determinado tema que ellos no entendieron?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta9'  onClick=" agregar('intereses~h')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta9'  onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu10">
    <td width="550" valign="top"><p>10. &iquest;Eres exigente y cr&iacute;tico con tu equipo de trabajo?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta10'  onClick=" agregar('aptitudes~i')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta10'  onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu11">
    <td width="550" valign="top"><p>11. &iquest;Te atrae armar rompecabezas o puzzles?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta11'  onClick=" agregar('intereses~a')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta11'  onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu12">
    <td width="550" valign="top"><p>12.&iquest;Puedes establecer la diferencia conceptual entre    macroeconom&iacute;a y microeconom&iacute;a?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta12'  onClick=" agregar('intereses~c')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta12'  onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu13">
    <td width="550" valign="top"><p>13. &iquest;Usar uniforme te hace sentir distinto, importante?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta13'  onClick=" agregar('aptitudes~d')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta13'  onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu14">
    <td width="550" valign="top"><p>14. &iquest;Participar&iacute;as como profesional en un espect&aacute;culo de    acrobacia a&eacute;rea?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta14'  onClick=" agregar('intereses~d')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta14'  onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu15">
    <td width="550" valign="top"><p>15. &iquest;Organizas bien tu dinero?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta15'  onClick=" agregar('aptitudes~c')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta15'  onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu16">
    <td width="550" valign="top"><p>16. &iquest;Convences f&aacute;cilmente a otras personas sobre la    validez de tus argumentos?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta16'  onClick=" agregar('intereses~s')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta16'  onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu17">
    <td width="550" valign="top"><p>17. &iquest;Est&aacute;s informado sobre los nuevos descubrimientos que    se est&aacute;n realizando en la teor&iacute;a del Big-Bang?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta17'  onClick=" agregar('intereses~e')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta17'  onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu18">
    <td width="550" valign="top"><p>18.&iquest;Ante una situaci&oacute;n de emergencia act&uacute;as r&aacute;pidamente?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta18'  onClick=" agregar('aptitudes~d')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta18'  onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu19">
    <td width="550" valign="top"><p>19. &iquest;Cuando tienes que resolver alg&uacute;n problema matem&aacute;tico    perseveras hasta encontrar la soluci&oacute;n?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta19'  onClick=" agregar('intereses~i')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta19' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu20">
    <td width="550" valign="top"><p>20. &iquest;Si te convocara tu club preferido para planificar,    organizar y dirigir un campo de deportes, aceptar&iacute;as?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta20'  onClick=" agregar('intereses~c')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta20'  onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu21">
    <td width="550" valign="top"><p>21. &iquest;Eres el que pone un toque de alegr&iacute;a en las fiestas?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta21'  onClick=" agregar('intereses~a')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta21'  onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu22">
    <td width="550" valign="top"><p>22. &iquest;Crees que los detalles son tan importantes como el    todo?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta22'  onClick=" agregar('aptitudes~a')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta22'  onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu23">
    <td width="550" valign="top"><p>23. &iquest;Te sentir&iacute;as a gusto trabajando en un &aacute;mbito    hospitalario?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta23'  onClick=" agregar('intereses~s')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta23' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu24">
    <td width="550" valign="top"><p>24. &iquest;Te gustar&iacute;a participar para mantener el orden ante    grandes cat&aacute;strofes?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta24'  onClick=" agregar('intereses~d')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta24' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu25">
    <td width="550" valign="top"><p>25. &iquest;Pasar&iacute;as varias horas leyendo alg&uacute;n libro de tu    inter&eacute;s?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta25'  onClick=" agregar('intereses~h')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta25' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu26">
    <td width="550" valign="top"><p>26. &iquest;Planificas detalladamente tus trabajos antes de    empezar?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta26'  onClick=" agregar('aptitudes~i')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta26' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu27">
    <td width="550" valign="top"><p>27. &iquest;Entablas una relaci&oacute;n casi personal con tu    computadora?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta27'  onClick=" agregar('intereses~i')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta27' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu28">
    <td width="550" valign="top"><p>28.&iquest;Disfrutas modelando con arcilla?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta28'  onClick=" agregar('intereses~a')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta28' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu29">
    <td width="550" valign="top"><p>29. &iquest;Ayudas habitualmente a los no videntes a cruzar la    calle?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta29'  onClick=" agregar('aptitudes~s')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta29' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu30">
    <td width="550" valign="top"><p>30. &iquest;Consideras importante que desde la escuela se fomente    la actitud cr&iacute;tica?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta30'  onClick=" agregar('aptitudes~h')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta30' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu31">
    <td width="550" valign="top"><p>31. &iquest;Aceptar&iacute;as que las mujeres formasen parte de las    fuerzas armadas bajo las mismas normas que los hombres?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta31'  onClick=" agregar('intereses~d')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta31' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu32">
    <td width="550" valign="top"><p>32. &iquest;Te gustar&iacute;a estudiar las enfermedades a trav&eacute;s del    microscopio?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta32'  onClick=" agregar('intereses~e')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta32' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu33">
    <td width="550" valign="top"><p>33. &iquest;Participar&iacute;as en una campa&ntilde;a sobre la prevenci&oacute;n del    VIH?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta33'  onClick=" agregar('intereses~s')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta33' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu34">
    <td width="550" valign="top"><p>34.&iquest;Te interesan los temas relacionados al pasado y a la    evoluci&oacute;n del hombre?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta34'  onClick=" agregar('intereses~h')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta34' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu35">
    <td width="550" valign="top"><p>35.&iquest;Te incluir&iacute;as en una investigaci&oacute;n sobre los    movimientos s&iacute;smicos?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta35'  onClick=" agregar('intereses~e')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta35' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu36">
    <td width="550" valign="top"><p>36. &iquest;Dedicas alg&uacute;n d&iacute;a de la semana a realizar ejercicio?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta36'  onClick=" agregar('intereses~a')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta36' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu37">
    <td width="550" valign="top"><p>37. &iquest;Te gusta la acci&oacute;n?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta37'  onClick=" agregar('intereses~d')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta37' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu38">
    <td width="550" valign="top"><p>38. &iquest;Te gustar&iacute;a trabajar en la NASA?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta38'  onClick=" agregar('intereses~i')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta38' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu39">
    <td width="550" valign="top"><p>39. &iquest;Te gusta m&aacute;s el trabajo manual que el intelectual?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta39'  onClick=" agregar('aptitudes~a')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta39' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu40">
    <td width="550" valign="top"><p>40. &iquest;Estar&iacute;as dispuesto a renunciar al ocio por tu    trabajo?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta40'  onClick=" agregar('aptitudes~s')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta40' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu41">
    <td width="550" valign="top"><p>41. &iquest;Participar&iacute;as en una investigaci&oacute;n sobre la violencia    en el f&uacute;tbol?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta41'  onClick=" agregar('intereses~h')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta41' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu42">
    <td width="550" valign="top"><p>42. &iquest;Te gustar&iacute;a ser becario en un laboratorio?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta42'  onClick=" agregar('intereses~e')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta42' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu43">
    <td width="550" valign="top"><p>43. &iquest;Arriesgar&iacute;as tu vida para salvar la de alguien a    quien no conoces?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta43'  onClick=" agregar('aptitudes~d')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta43' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu44">
    <td width="550" valign="top"><p>44. &iquest;Te gustar&iacute;a hacer un curso de socorrismo y primeros    auxilios?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta44'  onClick=" agregar('intereses~s')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta44' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu45">
    <td width="550" valign="top"><p>45. Cuando no consigues algo, &iquest;eres capaz de volver a    empezar hasta que lo consigues?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta45'  onClick=" agregar('intereses~a')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta45' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu46">
    <td width="550" valign="top"><p>46. &iquest;Te planificas bien tus horarios?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta46'  onClick=" agregar('aptitudes~c')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta46' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu47">
    <td width="550" valign="top"><p>47. &iquest;Te gustar&iacute;a aprender a fabricar y reparar m&aacute;quinas?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta47'  onClick=" agregar('intereses~i')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta47' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu48">
    <td width="550" valign="top"><p>48. &iquest;Te importar&iacute;a viajar y alejarte de tu familia por    motivos de trabajo?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta48'  onClick="agregar('intereses~d')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta48' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu49">
    <td width="550" valign="top"><p>49. &iquest;Te importar&iacute;a vivir y trabajar en una granja?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta49'  onClick=" agregar('intereses~e')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta49' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu50">
    <td width="550" valign="top"><p>50. &iquest;Para ti es importante compartir tus ideas y que sean    tenidas en cuenta?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta50'  onClick=" agregar('intereses~c')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta50' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu51">
    <td width="550" valign="top"><p>51.&iquest;Te resulta f&aacute;cil coordinar un grupo de trabajo?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta51'  onClick=" agregar('aptitudes~c')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta51' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu52">
    <td width="550" valign="top"><p>52. &iquest;Te gustar&iacute;a estudiar Biolog&iacute;a?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta52'  onClick=" agregar('intereses~s')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta52' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu53">
    <td width="550" valign="top"><p>53. &iquest;Te sentir&iacute;as bien desempe&ntilde;ando un puesto de director    comercial?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta53'  onClick=" agregar('intereses~c')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta53' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu54">
    <td width="550" valign="top"><p>54. &iquest;Te gustar&iacute;a participar en un proyecto de desarrollo    de tu localidad?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta54'  onClick=" agregar('intereses~i')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta54' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu55">
    <td width="550" valign="top"><p>55. &iquest;Tienes inter&eacute;s por conocer las causas de los    fen&oacute;menos, aunque no est&eacute;n relacionados con tu vida?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta55'  onClick=" agregar('aptitudes~e')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta55' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu56">
    <td width="550" valign="top"><p>56. &iquest;Alguna vez has encontrado alg&uacute;n fil&oacute;sofo o escritor    que expresara con antelaci&oacute;n lo que t&uacute; hab&iacute;as pensado?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta56'  onClick=" agregar('intereses~h')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta56' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu57">
    <td width="550" valign="top"><p>57. &iquest;Te gustar&iacute;a que te regalaran un instrumento musical?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta57'  onClick=" agregar('intereses~a')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta57' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu58">
    <td width="550" valign="top"><p>58. &iquest;Aceptar&iacute;as colaborar con el cumplimiento de las    normas en lugares p&uacute;blicos?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta58'  onClick=" agregar('intereses~d')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta58' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu59">
    <td width="550" valign="top"><p>59. &iquest;Crees que tus ideas son importantes y haces lo    posible para ponerlas en pr&aacute;ctica?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta59'  onClick=" agregar('aptitudes~i')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta59' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu60">
    <td width="550" valign="top"><p>60. &iquest;Cu&aacute;ndo se rompe un electrodom&eacute;stico, intentas    repararlo?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta60'  onClick=" agregar('intereses~i')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta60' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu61">
    <td width="550" valign="top"><p>61. &iquest;Formar&iacute;as parte de un grupo ecologista?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta61'  onClick=" agregar('intereses~e')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta61' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu62">
    <td width="550" valign="top"><p>62. &iquest;Te gustan las revistas cient&iacute;ficas relacionadas con    la salud?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta62'  onClick=" agregar('intereses~s')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta62' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu63">
    <td width="550" valign="top"><p>63. &iquest;Te parece importante preservar las ra&iacute;ces culturales    de tu pa&iacute;s?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta63'  onClick=" agregar('aptitudes~h')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta63' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu64">
    <td width="550" valign="top"><p>64. &iquest;Te gustar&iacute;a trabajar por una distribuci&oacute;n m&aacute;s justa    de la riqueza?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta64'  onClick=" agregar('intereses~c')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta64' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu65">
    <td width="550" valign="top"><p>65. &iquest;Te gustar&iacute;a realizar tareas de mantenimiento en la    tripulaci&oacute;n de un barco?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta65'  onClick=" agregar('intereses~d')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta65' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu66">
    <td width="550" valign="top"><p>66. &iquest;Est&aacute;s a favor de la compra de armamento en tu pa&iacute;s?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta66'  onClick=" agregar('aptitudes~d')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta66' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu67">
    <td width="550" valign="top"><p>67. &iquest;La libertad y la justicia son valores fundamentales    en tu vida?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta67'  onClick=" agregar('intereses~h')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta67' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu68">
    <td width="550" valign="top"><p>68. &iquest;Te gustar&iacute;a trabajar como becario en una industria de    control de calidad de la alimentaci&oacute;n?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta68'  onClick=" agregar('intereses~e')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta68' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu69">
    <td width="550" valign="top"><p>69. &iquest;Consideras que la salud p&uacute;blica debe ser prioritaria    y gratuita?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta69'  onClick=" agregar('aptitudes~s')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta69' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu70">
    <td width="550" valign="top"><p>70. &iquest;Te interesar&iacute;a investigar sobre alguna nueva vacuna?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta70'  onClick=" agregar('intereses~s')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta70' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu71">
    <td width="550" valign="top"><p>71. Si tienes que trabajar en equipo &iquest;prefieres el rol de    coordinador?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta71'  onClick=" agregar('intereses~c')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta71' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu72">
    <td width="550" valign="top"><p>72. En una discusi&oacute;n entre amigos &iquest;sueles hacer de    mediador?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta72'  onClick=" agregar('aptitudes~h')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta72' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu73">
    <td width="550" valign="top"><p>73. &iquest;Est&aacute;s de acuerdo con la formaci&oacute;n de un cuerpo de    soldados profesionales?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta73'  onClick=" agregar('intereses~d')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta73' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu74">
    <td width="550" valign="top"><p>74. &iquest;Luchar&iacute;as por una causa justa hasta las &uacute;ltimas    consecuencias?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta74'  onClick=" agregar('intereses~h')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta74' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu75">
    <td width="550" valign="top"><p>75. &iquest;Te gustar&iacute;a investigar cient&iacute;ficamente sobre cultivos    agr&iacute;colas?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta75'  onClick=" agregar('intereses~i')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta75' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu76">
    <td width="550" valign="top"><p>76. &iquest;Ser&iacute;as capaz de transformar una prenda pasada de    moda, ante un acontecimiento imprevisto?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta76'  onClick=" agregar('aptitudes~a')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta76' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu77">
    <td width="550" valign="top"><p>77. &iquest;Visitar&iacute;as un observatorio astron&oacute;mico para conocer    c&oacute;mo funciona?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta77'  onClick=" agregar('intereses~e')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta77' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu78">
    <td width="550" valign="top"><p>78. &iquest;Te gustar&iacute;a dirigir el &aacute;rea de importaci&oacute;n y    exportaci&oacute;n de una empresa?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta78'  onClick=" agregar('intereses~c')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta78' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu79">
    <td width="550" valign="top"><p>79. &iquest;Te da verg&uuml;enza entrar en un lugar nuevo con gente    desconocida?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta79'  onClick=" agregar('aptitudes~e')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta79' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu80">
    <td width="550" valign="top"><p>80. &iquest;Te gustar&iacute;a trabajar con ni&ntilde;os?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta80'  onClick=" agregar('intereses~h')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta80' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu81">
    <td width="550" valign="top"><p>81. &iquest;Podr&iacute;as dise&ntilde;ar un alfiler en una campa&ntilde;a contra el    SIDA?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta81'  onClick=" agregar('intereses~a')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta81' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu82">
    <td width="550" valign="top"><p>82. &iquest;Podr&iacute;as dirigir un grupo de teatro independiente?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta82'  onClick=" agregar('aptitudes~a')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta82' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu83">
    <td width="550" valign="top"><p>83. &iquest;Enviar&iacute;as tu curr&iacute;culum a una empresa automotriz como    gerente del &aacute;rea de producci&oacute;n?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta83'  onClick=" agregar('intereses~i')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta83' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu84">
    <td width="550" valign="top"><p>84. &iquest;Participar&iacute;as en un grupo de defensa internacional de    una fuerza armada?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta84'  onClick=" agregar('intereses~d')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta84' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu85">
    <td width="550" valign="top"><p>85. &iquest;Te pagar&iacute;as un curso trabajando en una empresa de    auditor&iacute;a?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta85'  onClick=" agregar('intereses~c')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta85' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu86">
    <td width="550" valign="top"><p>86. &iquest;Eres de los que defiendes causas perdidas?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta86'  onClick=" agregar('aptitudes~h')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta86' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu87">
    <td width="550" valign="top"><p>87. &iquest;Participar&iacute;as con tu ayuda ante una campa&ntilde;a    epid&eacute;mica?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta87'  onClick=" agregar('intereses~s')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta87' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu88">
    <td width="550" valign="top"><p>88. &iquest;Sabes que es el ADN y ARN?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta88'  onClick=" agregar('intereses~e')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta88' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu89">
    <td width="550" valign="top"><p>89. &iquest;Elegir&iacute;as un trabajo cuya principal herramienta fuera    hablar un idioma extranjero?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta89'  onClick=" agregar('intereses~h')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta89' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu90">
    <td width="550" valign="top"><p>90. &iquest;Trabajar con objetos te resulta m&aacute;s gratificante qu&eacute;    trabajar con personas?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta90'  onClick=" agregar('aptitudes~i')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta90' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu91">
    <td width="550" valign="top"><p>91. &iquest;Te resultar&iacute;a gratificante ser asesor contable en una    empresa de reconocido prestigio?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta91'  onClick=" agregar('intereses~c')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta91' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu92">
    <td width="550" valign="top"><p>92. &iquest;Te ofrecer&iacute;as para cuidar a un enfermo?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta92'  onClick=" agregar('intereses~s')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta92' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu93">
    <td width="550" valign="top"><p>93. &iquest;Te gustar&iacute;a investigar sobre los agujeros negros?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta93'  onClick="  agregar('intereses~e')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta93' onClick="  ';">&nbsp;</p></td>  </tr>
  <tr  id="pregu94">
    <td width="550" valign="top"><p>94. &iquest;Crees que es mejor trabajar individualmente que en    equipo?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta94'  onClick=" agregar('aptitudes~e')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta94' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu95">
    <td width="550" valign="top"><p>95. Dedicar&iacute;as parte de tu tiempo a trabajar en una ONG</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta95'  onClick="agregar('intereses~h')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta95' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu96">
    <td width="550" valign="top"><p>96. Cuando eliges ropa o decoras tu casa, &iquest;tienes en    cuenta los colores, los estilos,..?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta96'  onClick="agregar('intereses~a')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta96' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu97">
    <td width="550" valign="top"><p>97. &iquest;Te gustar&iacute;a dirigir una obra hidroel&eacute;ctrica?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta97'  onClick="agregar('intereses~i')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta97' onClick=" ">&nbsp;</p></td>  </tr>
  <tr  id="pregu98">
    <td width="550" valign="top"><p>98. &iquest;Sabes qu&eacute; es el PBI?</p></td>
    <td width="57" valign="top"><p><input type=radio name='pregunta98'  onClick="agregar('intereses~c')">&nbsp;</p></td>
    <td width="58" valign="top"><p><input type=radio name='pregunta98' onClick=" ">&nbsp;</p></td>  </tr>
  <tr >
    <td colspan="3" width="550" valign="top">
    <br>
  

<center> <hr color="#FF0000" width="200"> <input type="button" value="Ver resultados" name="llamaresultado" onClick="resultados(this.parent); this.style.display='none'; recargar.style.display='';"><span style="display:none;" id="recargar">Los resultados se muestran más abajo, si no ha contestado todo el test los datos obtenidos serán incorrectos y Tendrá que recargar la página si quiere repertirlo.<br> Para repetir pulse "F5" o pinche en el botón actulizar de su navegador</span><hr color="#FF0000" width="200"></center><br>
  </td>
  </tr>
</table>
                   <p>


<table border="0" cellpadding="3">
  <tr>
    <th>ACTIVIDADES PROFESIONALES</th>
    <th>Puntuación<br>INTERESES</th>
    <th>Puntuación<br>APTITUDES</th>
  </tr>
  
  <tr>
    <TD align="right"><B>
      Profesiones Administrativas y Contables:<BR>
      Profesiones Human&iacute;sticas y Sociales:<BR>
      Actividades Art&iacute;sticas:<BR>
      Medicina y Ciencias de la Salud:<BR>
      Ingenier&iacute;a e Inform&aacute;tica:<BR>
      Defensa y Seguridad:<BR>
      Ciencias Puras, Agrarias,  Medio Ambientales:<BR>
      </B>
    </TD> 
    <tH>
    <B>
      <div id="intereses0"></div>
      <div id="intereses1"></div>
      <div id="intereses2"></div>
      <div id="intereses3"></div>
      <div id="intereses4"></div>
      <div id="intereses5"></div>
      <div id="intereses6"></div>
      </B>
    </tH> 
    <tH>    <B>
      <div id="aptitudes0"></div>
      <div id="aptitudes1"></div>
      <div id="aptitudes2"></div>
      <div id="aptitudes3"></div>
      <div id="aptitudes4"></div>
      <div id="aptitudes5"></div>
      <div id="aptitudes6"></div>
      </B>
    </tH> 
  </tr>
</table>

<b><span id="intereses"></span> <span id="interesesresult"></span></b><br>
  
        <span id="interesesresult2"></span></b>
      <b><span id="interesesresult3"></span></b>
        <b><span id="interesesresult4"></span></b>
          <b><span id="interesesresult5"></span></b>
            <b><span id="interesesresult6"></span></b>
              <b><span id="interesesresult7"></span></b>
                <b><span id="interesesresult8"></span></b>
  
  
  
<br>
    <b><span id="aptitudes"></span> <span id="aptitudesresult"></span></b><br>
    
  
    <span id="aptitudesresult2"></span></b>
      <b><span id="aptitudesresult3"></span></b>
        <b><span id="aptitudesresult4"></span></b>
          <b><span id="aptitudesresult5"></span></b>
            <b><span id="aptitudesresult6"></span></b>
              <b><span id="aptitudesresult7"></span></b>
                <b><span id="aptitudesresult8"></span></b>  
  <br>


</form>






</div>
@endsection