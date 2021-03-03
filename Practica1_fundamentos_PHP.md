# **I. Instalando Vagrant**

Es necesario disponer de Vagrant para trabajar todos sobre el mismo entorno, para
eso descargue la herramienta visitando Download Vagrant. Seleccione el sistema
operativo con el que está trabajando. Ejecute el instalador, que no requiere ninguna
configuración adicional.

1. Muestre el resultado de la instalación, en un breve resumen de recomendación,
donde indica la configuración adecuada según su necesidad

~~~
Para poder crear un entorno de php en vagrant primero es necesario descargar el programa 
lo cual podremonos descargar al visitar al sitio wed
~~~

<div>
<p style = 'text-align:center;'>
<img src="img/cap1.PNG" alt="JuveYell" width="100%">
</p>
</div>

~~~
Seleccionamos la opcion para Windows y damos cic en descragar
~~~

<div>
<p style = 'text-align:center;'>
<img src="img/cap2.PNG" alt="JuveYell" width="100%">
</p>
</div>

~~~
Una vez ya descargado el archivo simplemente lo instalamos
~~~

<div>
<p style = 'text-align:center;'>
<img src="img/cap3.PNG" alt="JuveYell" width="100%">
</p>
</div>

# **II. Usando Vagrant**

Utilizar Vagrant es bastante sencillo. La pieza más importante es el fichero VagrantFile.
Este archivo contiene el nombre de la imagen base que queremos usar y el resto de la
configuración que queremos aplicar

1. Si usará Virtual Box debe deshabilitar Hyper-V de Windows

~~~
Para poder deshabilitar Hyper-v de windows existen dos procedimientos uno es con el siguiente codigo 
Disable-WindowsOptionalFeature -Online -FeatureName Microsoft-Hyper-V-All

~~~

<div>
<p style = 'text-align:center;'>
<img src="img/cap4.PNG" alt="JuveYell" width="100%">
</p>
</div>
