# DOCUMENTACION

## 1. ¿Es mejor usar NGINX o APACHE y por qué?

Después de revisar los beneficios y las limitaciones de Apache y Nginx, puedes tener una mejor idea de qué servidor se adapta mejor a tus necesidades. Sin embargo, muchos usuarios encuentran que es posible aprovechar los puntos fuertes de cada servidor usándolos juntos.

La configuración convencional para esta asociación es colocar a Nginx delante de Apache como un proxy inverso. Esto permitirá que Nginx maneje todas las solicitudes de los clientes. Esto aprovecha la velocidad de procesamiento rápido de Nginx y la capacidad de manejar un gran número de conexiones simultáneamente.

Para el contenido estático, en el que Nginx se destaca, los archivos se entregarán rápida y directamente al cliente. Para el contenido dinámico, por ejemplo, los archivos PHP, Nginx enviará la solicitud a Apache, que luego puede procesar los resultados y devolver la página representada. Nginx puede pasar el contenido de nuevo al cliente.

## 2. ¿Por qué debemos usar MVC?

MVC es un patrón de diseño enfocado a separar las responsabilidades dentro de nuestra aplicación y es muy utilizado en la web por su enfoque y las ventajas que ofrece con respecto a algunas otras formas o patrones de desarrollo de aplicaciones web.

## 3. ¿Para qué se usan los arreglos $_SESSION[ ]  y $_SERVER[ ]?

$_SESSION es un array especial utilizado para guardar información a través de los requests que un usuario hace durante su visita a un sitio web o aplicación. La información guardada en una sesión puede llamarse en cualquier momento mientras la sesión esté abierta.

$_SERVER: Es una matriz que contiene información tal como cabeceras, rutas y ubicaciones de scripts. Las entradas de esta matriz son creadas por el servidor web.

## 4. ¿Cuando usamos Polimorfismo?

Polimorfismo se refiere a la propiedad por la que es posible enviar mensajes sintácticamente iguales a objetos de tipos distintos. El único requisito que deben cumplir los objetos que se utilizan de manera polimórfica es saber responder al mensaje que se les envía.

## Ventajas de PDO frente a mysqli

La principal ventaja que tiene PDO, sobre MySQLi, es la habilidad de poderte conectar a 12 diferentes bases de datos, a diferencia de MySQLi que sólo tiene soporte para una, MySQL.