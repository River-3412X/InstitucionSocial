Primero se tiene que crear los roles de los 2 tipos o niveles de usuario (copiar las sig. lines en la consola de la bd)

insert into rol(idrol,rol) values(1,'Administrador');
insert into rol(idrol,rol) values(2,'Usuario');

===============================================================================================================
para crear un nuevo "recurso,elemento o funcionalidad " del sistema se tiene que hacer lo siguiente:

crear una ruta a través de un controlador y un método que se encuentre dentro del controlador, en caso de que no exista, crearlo.
-si el controlador no existe se tiene que crear haciendo herencia de la clase controlador ejemplo:

class <nombre del controladorr> extends Controlador{

}

la ruta tiene la siguiente forma: 
dominio/controlador/metodo_dentro_del_cotrolador

por lo que nos hace falta crear un método dentro de nuestro controlador


class <nombre del controladorr> extends Controlador{
    public function metodo(){

    }
}

-Si lo que queremos realizar requerirá de métodos get y post habría que indicarlos dentro del metodo para separar ambas funcionalidades. por ejemplo


class <nombre del controladorr> extends Controlador{
    public function metodo(){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            //acciones a ejecutar sobre el método get
        }
        else{
            if($_SERVER['REQUEST_METHOD']=="POST"){
                //instrucciones a ejecutar en el metodo post
            }
        }
    }
}

-para cargar una vista se tiene que hacer uso del método cargar vista que se encuentra dentro de la superclase controlador,
para acceder a dicho método se usa la pseudovariable $this. (la vista tiene que existir dentro de la carpeta vistas)

(((RECUERDA QUE PARA TODOS LOS ARCHIVOS ES IMPORTANTE QUE EL NOMBRE SE CREE CON LA PRIMERA LETRA EN MAYUSCULA Y EL RESTO EN 
MINUSCULAS, ESO PARA CUALQUIER CLASE)))

$this->cargarVista(<nombre de la vista>);

-para cargar una modelo se tiene que hacer uso del método cargar modelo que se encuentra dentro de la superclase controlador,
para acceder a dicho método se usa la pseudovariable $this. (la vista tiene que existir dentro de la carpeta modalos)

(RECUERDA QUE EL NOMBRE DE LAS CLASES MODELO Y DE LAS CLASES CONTROLADOR TIENE QUE SER EXACTAMENTE EL MISMO QUE EL NOMBRE DEL ARCHIVO
CON EL QUE SEA CREADA LA CLASE.)

la sintaxis para crear una instancia de un modelo y usar sus métodos es la siguiente:

$this->modelo=new $this->cargarModelo(<nombre del modelo>);

la variable modelo se encuentra declarada dentro de la superclase controlador, esta clase se encuenta en la carpeta librerias, justo
en la misma carpeta que se encuentra el archivo de conexión con la base de datos!.

-para hacer uso de las sesiones se utiliza el metodo verificarSesion este método se encuentra en un archivo que esta dentro de la
carpeta auxiliares, este archivo se incluye al momento que cargamos la página por lo que ya no será necesario hacer un include.
Este archivo solo tiene 2 functiones verificarSesion(); y verificarSesionLogin(); una se usa para cuando esten dentro del login
y la otro para cuando se encuentren fuera del login.

Para utilizar estas funciones se debe invocar a dicha función dentro del método get 


class <nombre del controladorr> extends Controlador{
    public function metodo(){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            //acciones a ejecutar sobre el método get
            verificarSesion() //esto hará que se verifique la sesión, en caso de que no exista la sesión el método redireccionará al usuario
        }
        else{
            if($_SERVER['REQUEST_METHOD']=="POST"){
                //instrucciones a ejecutar en el metodo post
            }
        }
    }
}

-Todas las operaciones de la base de datos se realizan dentro de las clases modelo. asi que cuando realices inserciones a la base de datos se tendrá
que crear un nuevo metodo dentro de un modelo. para ejecutar un método de un modelo primero tenemos que tener un modelo cargado en la variable modelo
o $this->modelo que es lo mismo. y para ejecutar el metodo se usa el operador flecha $this->modelo->metodo();

para crear una registro de la base de datos, se tiene que crear una instancia de la clase Base, por lo que tenemos que ejecutar lo siguiente:

$base= new Base();

una vez que se tenga creado el objeto de la base de datos, se tiene que crear la consulta ejemplo

$sql="select *from usuarios where id=:id and nombre=:nombre";

y una vez que se cree la sentencia se prepara la consulta creando los parametros correspondientes a dicha consulta.

$parametros=[
    ["etiqueta"=>"nombre de la etiqueta","valor"=>valor de la etiqueta,"parametro"=>(PDO::PARAM_STR/INT)],
];

después de esto se tiene que realizar ua llamda a un método de la base, para poder ejecutar dicha consulta. 
los métodos son solo 5, con estos métodos podrás hacer cualquier tipo de consulta y son los siguientes:

consultarRegistro($sql,$parametros) // este método solo te retornará un solo registro y si hay más tomará el primero y lo retornará

consultar($sql,$parametros); // este método te retornará todos los registros coincidientes con tu instrucción sql.

insertar($sql,$parametros) // este método te permite insertar datos  y te retorna la cantidad de filas afectadas en la consulta en entero

modificar($sql,$parametros) // este método te permite actualizar registros  y te retorna la cantidad de filas afectadas en la consulta en entero

eliminarRegistro($sql,$parametros); este método te permite eliminar datos  y te retorna la cantidad de filas afectadas en la consulta en entero
