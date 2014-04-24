<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>



    <form action="#" method="post" enctype="multipart/form-data">
		<H1>ASPECTO GENERAL</H1>
<p>&nbsp;</p>
<table style="border: 1px solid #000;" cellspacing="0" cellpadding="1" >
  <tr>
    
    <td  style="border: 1px solid #000;" width="311" valign="center" align="center" bgcolor="E9E9E9"><p><strong>ELEMENTO</strong></p></td>
    <td  style="border: 1px solid #000;" width="117" valign="center" align="center" bgcolor="E9E9E9"><p><strong>EVALUACIÓN</strong></p></td>
  </tr>
  <tr>
    
    <td align="center" style="border: 1px solid #000;" width="311" valign="top"><p><strong>Asistencia y Puntualidad: </strong>(Realiza las actividades dentro de los limites establecidos en el horario de trabajo) </p></td>
    <td align="center" style="border: 1px solid #000;" width="117" valign="center"><p><input type="number" name="cat1" min="1" step="0.1" max="7" value="0" /></p></td>
  </tr>
  <tr>
    <td align="center" style="border: 1px solid #000;" width="311" valign="top"><p><strong>Comportamiento: </strong>(Actitud y grado de aceptación que el estudiante asume frente a diversas instrucciones, hechos y órdenes impartidas por su supervisor) </p></td>
    <td align="center" style="border: 1px solid #000;" width="117" valign="top"><input type="number" name="cat2" min="1" step="0.1" max="7" value="0" /></p></td>
  </tr>
  <tr>
    <td align="center" style="border: 1px solid #000;" width="311" valign="top"><p><strong>Responsabilidad: </strong>(Forma como el estudiante cumple las diversas actividades o tareas que le son encomendadas.) </p></td>
    <td align="center" style="border: 1px solid #000;" width="117" valign="top"><input type="number" name="cat3" min="1" step="0.1" max="7" value="0" /></td>
  </tr>
  <tr>
    <td align="center" style="border: 1px solid #000;" width="311" valign="top"><p><strong>Capacidad: </strong>(Aptitud para comprender 
	y ejecutar las órdenes e iniciativa para actuar y resolver situaciones en forma independiente) </p></td>
    <td align="center" style="border: 1px solid #000;" width="117" valign="top"><input type="number" name="cat4" min="1" step="0.1" max="7" value="0" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<H1>ASPECTO TECNICO</H1>
<p>&nbsp;</p>
<table style="border: 1px solid #000;" cellspacing="0" cellpadding="0">
  <tr>
    <td style="border: 1px solid #000;" width="373" valign="top" bgcolor="E9E9E9"><p><strong>ELEMENTO</strong></p></td>
    <td style="border: 1px solid #000;" width="118" valign="top" bgcolor="E9E9E9"><p><strong>EVALUACIÓN</strong></p></td>
  </tr>
  <tr>
    <td style="border: 1px solid #000;" width="373" valign="top"><p><strong>C</strong><strong>alidad  del     trabajo  </strong>(Realiza  las     tareas  en  forma    adecuada, según se le exige) </p></td>
    <td style="border: 1px solid #000;" width="118" valign="top"><input type="number" name="cat5" min="1" step="0.1" max="7" value="0" /></td>
  </tr>
  <tr>
    <td style="border: 1px solid #000;" width="373" valign="top"><p><strong>Estructuración de    actividades     </strong>(Organiza adecuadamente las actividades que se le encomiendan) </p></td>
    <td style="border: 1px solid #000;" width="118" valign="top"><input type="number" name="cat6" min="1" step="0.1" max="7" value="0" /></td>
  </tr>
  <tr>
    <td style="border: 1px solid #000;" width="373" valign="top"><p><strong>A</strong><strong>plicación de conocimientos  y habilidades </strong>(Demuestra     conocimientos y habilidades  en la realización de las actividades encomendadas) </p></td>
    <td style="border: 1px solid #000;" width="118" valign="top"><input type="number" name="cat7" min="1" step="0.1" max="7" value="0" /></td>
  </tr>
  <tr>
    <td style="border: 1px solid #000;" width="373" valign="top"><p><strong>Innovación y    creatividad </strong>(Demuestra autonomía y capacidad para resolver problemas y/o proponer alternativas novedosas) </p></td>
    <td style="border: 1px solid #000;" width="118" valign="top"><input type="number" name="cat8" min="1" step="0.1" max="7" value="0" /></td>
  </tr>
  <tr>
    <td style="border: 1px solid #000;" width="373" valign="top"><p><strong>Producto </strong>(Genera  informes,  software,     modelos,  etc., según el proyecto desarrollado, con la calidad requerida) </p></td>
    <td style="border: 1px solid #000;" width="118" valign="top"><input type="number" name="cat9" min="1" step="0.1" max="7" value="0" /></td>
  </tr>
</table>
<center>
<table border="0">
<tr>
  	<td align="center"><input type=submit border=0 value="Enviar"></td><td><input type=reset border=0 value="Limpiar"></td>
</tr>
</table>
</center>
<p>&nbsp;</p>
    </form>



