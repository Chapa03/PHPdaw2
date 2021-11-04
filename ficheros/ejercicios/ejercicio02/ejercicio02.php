<!-- Crear un programa que lea el contenido del fichero 
y lo muestre en un cuadro de texto (grande) no editable. -->
<h3>Fichero /ejercicio01/articulo.txt</h3>
<textarea disabled="disabled" rows="20" cols="40"><?= file_get_contents('../ejercicio01/articulo.txt');?></textarea>