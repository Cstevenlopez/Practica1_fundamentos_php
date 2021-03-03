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
Seleccionamos la opcion para Windows y damos cic en descargar
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
<img src="img/cap3.PNG" alt="JuveYell" width="70%">
</p>
</div>

# **II. Usando Vagrant**

Utilizar Vagrant es bastante sencillo. La pieza más importante es el fichero VagrantFile.
Este archivo contiene el nombre de la imagen base que queremos usar y el resto de la
configuración que queremos aplicar

1. Si usará Virtual Box debe deshabilitar Hyper-V de Windows

~~~
Para poder deshabilitar Hyper-v de windows existen dos procedimientos uno es con el siguiente codigo 
Disable-WindowsOptionalFeature -Online -FeatureName Microsoft-Hyper-V-All y tambien podemos ir a las
caracteristicas de windows y desmarcar la carpeta Hyper-V
~~~

<div>
<p style = 'text-align:center;'>
<img src="img/cap4.PNG" alt="JuveYell" width="70%">
</p>
</div>


2. El siguiente ejemplo es la configuración necesaria para obtener una máquina 

~~~
En mi caso esto es lo que contiene mi fichero Vagrantfile
~~~

<div>
<p style = 'text-align:center;'>
<img src="img/cap5.PNG" alt="JuveYell" width="70%">
</p>
</div>

3. Creamos el fichero provisioner.sh con el siguiente contenido, que hará que se instalen todos esos servicios

~~~
Tengo un fichero .sh pero lo nombre otra manera en mi caso es bootstrap.sh donde contiene todos los servicios que utilizare
~~~

<div>
<p style = 'text-align:center;'>
<img src="img/cap6.PNG" alt="JuveYell" width="100%">
</p>
</div>

4. El fichero anterior se ve un poco extenso, es su tarea analizar que realiza este fichero, recuerde que debe crearlo al lado del fichero Vagrantfile

~~~
El fichero .sh  contiene algunos comandos para instalar un servidor apache el cliente my sql, librerias de php para nuestro entorno
~~~

5. Inicie la máquina virtual, ejecutando el siguiente comando en el mismo directorio que tiene su Vagrantfile

~~~
Para empezar primero es inicializar nuestro vagrant con algun fichero por ejemplo el siguiente  para eso es necesario el comando:

vagrant init
~~~

<div>
<p style = 'text-align:center;'>
<img src="img/cap7.PNG" alt="JuveYell" width="100%">
</p>
</div>


~~~
luego de eso crearemos nuestra maquina con el comando :

vagrant up

realizara todo el aprovicionamiento ejecutando todos los comandos que le indique en el archivo bootstrap.sh al ejeutar el comando 
nos ira mostrando toda la informacion al respecto
~~~

<div>
<p style = 'text-align:center;'>
<img src="img/cap8.PNG" alt="JuveYell" width="100%">
</p>
</div>

6. Para acceder a la nueva máquina virtual, ejecute el siguiente comando en el mismo directorio que su Vagrantfile

~~~
luego ejecutamos el comando :

vagrant ssh

se nos abrira una terminal dentro de la maquina virtual creada
~~~

<div>
<p style = 'text-align:center;'>
<img src="img/cap9.PNG" alt="JuveYell" width="100%">
</p>
</div>

# **III. Contestasto algunas interroganges de los ejercicios**

b. Suponga el siguiente caso: Dispongo de un formulario HTML con un elemento
de entrada para nombres y un elemento de entrada de submit, que envía estos
datos a un fichero PHP usando el método POST. Ahora, sabemos que esto
funcionaría solo para manipular un nombre a la vez, pero nosotros necesitamos
que la información este ahí luego de regresar y enviar otro nombre. Analice este
caso y brinde una solución usando PHP.

~~~
Segun mi analisis necesitaremos utilizar una variable de secion en este caso  $_SESSION que nos ayudara a
contener la informacion,Esta es una 'superglobal' o una variable automatic global. Significa simplemente 
que es una variable que está disponible en cualquier parte del script.

session_start(); lo utilizamos para inicar la secion 

Tambien crear un array que nos permita alamcenar los nombres agregados

$nombres = array();

Luego de eso realizaremos validaciones para que cuando se ingrese un primer nombre nos permita almacenar mas 
nombres  y no perder los anterior mente guardados en array con la variable $_SESSION

if(isset($_POST['nombre']))
{
    if(isset($_SESSION['nombres'])){
         $nombres = $_SESSION['nombres'];
         $nombres[] = $_POST['nombre'];
         $_SESSION['nombres'] = $nombres;
     } else {
        /* array_push($_SESSION['nombres'], $_POST['nombre']);*/
        $nombres[] = $_POST['nombre'];
        $_SESSION['nombres'] = $nombres;
         var_dump( $_SESSION['nombres']);
     }
}

Y luego imprimimos el resultado

$valores = $_SESSION["nombres"];
foreach($valores as $val)
{
    echo $val."<br>" ;
} 

~~~

# **Investigue:**

## 1. **¿Es mejor usar NGINX o APACHE y por qué?** 

En la popularidad, ambos servidores web están prácticamente empatados con un 44% de uso Apache y un 40% de uso Nginx. Sin embargo, aunque Apache es el más utilizado seguro es por su sencilles y en basea mi experiencia en la practica de wed puedo decir que es mas facil montarlo, Nginx es el que más se utiliza en páginas web con mucho tráfico, ya que su gestión de recursos es muy superior.

Pero sin embargo estos dos servidores cuentan con difernentes aspectos por ejemplo ¿quién es más rápido y quién consume menos recursos?

A la hora de elegir el servidor web que queremos utilizar debemos tener en cuenta dos factores, el primero de ellos será la velocidad y el segundo el consumo de recursos que usará.

En cuanto a la velocidad, la verdad es que los dos son servidores muy rápidos, sobre todo en webs y plataformas con pocos usuarios simultáneos. Sin embargo, cuando el número de usuarios aumenta sí que notamos que a Apache le empieza a costar trabajar con tantos usuarios al mismo tiempo, mientras que Nginx se comporta mucho más rápido cuando tenemos mucho tráfico.

En cuanto al uso de recursos, el resultado es casi el mismo. Mientras que la página web es sencilla y no tiene muchos usuarios ambos servidores consumen una cantidad muy limitada de recursos, sin embargo, cuando la web es ya muy grande la cosa ya cambia, y mientras que los recursos de Apache se disparan, los de Nginx se mantienen lineales.

Otro aspecto seria ¿cual es más fácil de configurar?

Si estamos acostumbrados a usar uno de los dos servidores seguramente conozcamos todos sus ficheros de configuración y no nos suponga ningún misterio. Sin embargo, para un usuario nuevo, Apache es, de lejos, mucho más sencillo de configurar y poner en marcha. Apache, además, es un servidor web infinitamente más flexible que Nginx gracias a las .htaccess tools y a los más de 60 módulos diferentes que podemos encontrar.

Sin embargo, aunque Apache puede ganar en facilidad y flexibilidad, no podemos cerrar este apartado sin mencionar uno de los puntos fuertes de Nginx, y es que este servidor es mucho más intuitivo al trabajar con varios hostings, estando todos ellos separados y en directorios independientes.

Otro aspecto seria ¿quién es más seguro?

Otro aspecto fundamental de un servidor web es la seguridad. En esta ocasión, ambos servidores empatan, ya que ambos se toman muy en serio la seguridad de sus aplicaciones, cuentan con medidas de seguridad para mitigar, por ejemplo, ataques DDoS, malware y Phishing, y publican periódicamente informes de seguridad y actualizaciones de mantenimiento.

Entonces, ¿Es mejor usar NGINX o APACHE?

No podemos decir que un servidor sea mejor que otro ya que cada uno tiene sus fortalezas y sus debilidades. Mientras que si vamos a montar una página web muy grande que contará con muchos usuarios diarios la mejor opción es usar Nginx por sus mejoras de rendimiento, si queremos algo sencillo y flexible, Apache será un servidor mucho más apropiado, sobre todo para los usuarios sin muchos conocimientos.

Ambos servidores van a funcionar bien y van a mantener nuestra web segura. Ahora es ya cuestión de cada uno que elija el que mejor se adapte a sus necesidades. La web está repleta de artículos, manuales y guías para configurar tanto Apache como Nginx, por lo que, si tenemos cualquier problema, seguro que encontramos fácilmente su solución.

## 2. **¿Por qué debemos usar MVC?**

Por que nos proporciona distintas ventajas:

1. Separación clara de dónde tiene que ir cada tipo de lógica, facilitando el mantenimiento y la escalabilidad de nuestra aplicación.

2. Sencillez para crear distintas representaciones de los mismos datos.

3. Facilidad para la realización de pruebas unitarias de los componentes, así como de aplicar desarrollo guiado por pruebas.

4. Reutilización de los componentes.

5. Recomendable para el diseño de aplicaciones web compatibles con grandes equipos de desarrolladores y diseñadores web que necesitan gran control sobre el  comportamiento de la aplicación.


## 3. **¿Para qué se usan los arreglos $_SESSION[] y $_SERVER[]?**

$_SESSION[] Es un array asociativo que contiene variables de sesión disponibles para el script actual.

Nota:

Esta es una 'superglobal' o una variable automatic global. Significa simplemente que es una variable que está disponible en cualquier parte del script. No hace falta hacer global $variable; para acceder a la misma desde funciones o métodos.

session_start() - Iniciar una nueva sesión o reanudar la existente


$_SERVER[] es una matriz/array asociativa que contiene información sobre cabeceras, rutas y ubicaciones de scripts suministrada por el servidor (pero hay que tener en cuenta que no todos los servidores suministran todos los datos).

## 4. **¿Cuándo usamos polimorfismo?**

Cuando hablamos de polimorfismo nos referimos a una capacidad o virtud que tienen los métodos, donde por ejemplo un mismo método puede tener diferentes comportamientos y dar diferentes resultados.

El concepto de polimorfismo trata precisamente de que una misma cosa termina comportándose de diferentes maneras. toma en cuenta que otros lenguajes podrían tener diferentes método o maneras de implementación.

## 5. **Ventajas de PDO frente a mysqli**

## **Soporte de bases de datos:**

Mientras que MySQLi solo soporta bases de datos MySQL, PDO tiene una lista más extensa. Para ver los drivers que soporta actualmente PDO solo hay que ejecutar la siguiente línea de código:

var_dump( PDO::getAvailableDrivers() ); 

## **Parámetros con nombre:**

Una gran ventaja en el uso de PDO es que, a la hora de ejecutar sentencias preparadas, los parametros pueden llevar un nombre. Veamos un ejemplo:

$params = array(
	':username'	=>	'username',
	':email'	=>	'email'
);
$stmt = $PDO->prepare( 'SELECT * FROM users WHERE username = :username AND email = :email' );
$stmt->execute( $params );
Con MySQLi tendremos que utilizar ?.

$stmt = $MySQLi->prepare( 'SELECT * FROM users WHERE username = ? AND email = ?' );
$stmt->bind_param( 'ss', 'username', 'email' );
Esta es claramente una desventaja, ya que utilizando la segunda opción deberemos mantener el orden de los parámetros en todo momento.
 
## **Conclución**

Claramente PDO tiene muchas ventajas por la variedad de funciones que ofrece frente a su competidor.