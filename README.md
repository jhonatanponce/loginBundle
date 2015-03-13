Tutorial: mini-backend de usuarios con Doctrine
========================

Uno de los aspectos más importantes en el desarrollo de cualquier aplicación es la Seguridad de acceso, para ello Symfony 2 dispone de una moderna librería que se encarga de las validaciones de acceso y seguridad.
Una de las opciones más tentadoras es utilizar Doctrine como proveedor de los Usuarios, con el cual podamos crear Roles y Usuarios desde CRUD’s elaborados por el mismo framework y crear nuestro propio esquema de seguridad, debo resaltar que existen muchos Bundles prefabricados como el FOSUserBundle que facilitan enormemente ésta tarea, pero si quieres profundizar puedes seguir el siguiente tutorial para conocer a fondo como se hace desde 0 con Doctrine .

Paso 1: Crea las entidades básicas
----------------------------------------------------------------------------

Antes de empezar debemos de definir las entidades básicas para ser utilizadas como proveedor de usuarios y roles en Sf2, dichas entidades User y Role deben de implementar las interfaces Symfony\Component\Security\Core\User\UserInterface y Symfony\Component\Security\Core\Role\RoleInterface respectivamente, así que añade estas 2 entidades a tu directorio “loginbundle/src/Test/LoginBundle/Entity;”:

### User.php:

```


<?php
namespace Test\LoginBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name=”admin_user”)
*/
class User implements UserInterface
{
/**
* @var integer
*
* @ORM\Column(name=”id”, type=”integer”, nullable=false)
* @ORM\Id
* @ORM\GeneratedValue(strategy=”IDENTITY”)
*/
private $id;
 
/**
* @var string
*
* @ORM\Column(name=”username”, type=”string”, length=255, nullable=true)
*/
protected $username;
 
/**
* @var string
*
* @ORM\Column(name=”password”, type=”string”, length=255, nullable=true)
*/
protected $password;
 
/**
* @var string
*
* @ORM\Column(name=”salt”, type=”string”, length=255, nullable=true)
*/
protected $salt;
 
/**
* se utilizó user_roles para no hacer conflicto al aplicar ->toArray en getRoles()
* @ORM\ManyToMany(targetEntity=”Role”)
* @ORM\JoinTable(name=”user_role”,
*     joinColumns={@ORM\JoinColumn(name=”user_id”, referencedColumnName=”id”)},
*     inverseJoinColumns={@ORM\JoinColumn(name=”role_id”, referencedColumnName=”id”)}
* )
*/
protected $user_roles;
 
public function __construct()
{
	$this->user_roles = new ArrayCollection();
}
 
/**
* Get id
*
* @return integer
*/
public function getId()
{
	return $this->id;
}
 
/**
* Set username
*
* @param string $username
*/
public function setUsername($username)
{
	$this->username = $username;
}
 
/**
* Get username
*
* @return string
*/
public function getUsername()
{
	return $this->username;
}
 
/**
* Set password
*
* @param string $password
*/
public function setPassword($password)
{
	$this->password = $password;
}
 
/**
* Get password
*
* @return string
*/
public function getPassword()
{
	return $this->password;
}
 
/**
* Set salt
*
* @param string $salt
*/
public function setSalt($salt)
{
	$this->salt = $salt;
}
 
/**
* Get salt
*
* @return string
*/
public function getSalt()
{
	return $this->salt;
}
 
/**
* Add user_roles
*
* @param Test\LoginBundle\Entity\Role $userRoles
*/
public function addRole(\Test\LoginBundle\Entity\Role $userRoles)
{
	$this->user_roles[] = $userRoles;
}
 
public function setUserRoles($roles) {
	$this->user_roles = $roles;
}
 
/**
* Get user_roles
*
* @return Doctrine\Common\Collections\Collection
*/
public function getUserRoles()
{
	return $this->user_roles;
}
 
/**
* Get roles
*
* @return Doctrine\Common\Collections\Collection
*/
public function getRoles()
{
	//return $this->user_roles->toArray(); //IMPORTANTE: el mecanismo de seguridad de Sf2 requiere ésto como un array
	$roles = array();
	foreach ($this->user_roles as $role) {
	$roles[] = $role->getRole();
}
 
	return $roles;
}
 
/**
* Compares this user to another to determine if they are the same.
*
* @param UserInterface $user The user
* @return boolean True if equal, false othwerwise.
*/
public function equals(UserInterface $user) {
	return md5($this->getUsername()) == md5($user->getUsername());
	 
}
 
/**
* Erases the user credentials.
*/
public function eraseCredentials() {
	 
}
}

```

### Role.php:

```


<?php
 
namespace Test\LoginBundle\Entity;
 
use Symfony\Component\Security\Core\Role\RoleInterface;
use Doctrine\ORM\Mapping as ORM;
 
/**
* @ORM\Entity
* @ORM\Table(name=”admin_roles”)
*/
class Role implements RoleInterface
{
/**
* @var integer
*
* @ORM\Column(name=”id”, type=”integer”, nullable=false)
* @ORM\Id
* @ORM\GeneratedValue(strategy=”AUTO”)
*/
protected $id;
 
/**
* @var string
*
* @ORM\Column(name=”nombre”, type=”string”, length=255, nullable=true)
*/
protected $name;
 
/**
* Get id
*
* @return integer
*/
public function getId()
{
	return $this->id;
}
 
/**
* Set name
*
* @param string $name
*/
public function setName($name)
{
	$this->name = $name;
}
 
/**
* Get name
*
* @return string
*/
public function getName()
{
	return $this->name;
}
 
public function getRole() {
	return $this->getName();
}
 
public function __toString() {
	return $this->getRole();
}
}

```
Una vez creadas nuestras entidades, accedemos a la consola de Symfony2 y generamos las tablas en Base de Datos:
```

	$ app/console doctrine:schema:update –force
```
Paso 2: Generando los CRUD’s
----------------------------------------------------------------------------

Una vez creadas las entidades en DB, procedemos a crear los CRUD’s desde la consola de symfony:
```

	$ app/console doctrine:generate:crud
```
Seguimos los pasos colocando TestLoginBundle:Role, luego nos solicita si deseamos crear las opciones de escritura, le decimos “yes” (sí), formato del CRUD: annotation, y finalmente en el Routes prefix colocamos /admin/role, este paso es importante porque a la ruta le asignamos el prefijo /admin para que nos permita empatar luego con el access_control, confirmamos y aparecerá el mensaje “You can now start using the generated code!”

Procedemos a aplicar lo mismo pero en este caso con TestLoginBundle:User y en Routes prefix colocamos /admin/user

Ahora añadiremos las rutas a nuestro archivo de rutas (loginbundle/src/Test/LoginBundle/Resources/Config/routing.yml),
```

	TestAnnotations:
		resource: “@TestLoginBundle/Controller/”
		prefix:   /
		type:     annotation
```
	
porque al crearlas como Anotaciones las mismas no se añaden automáticamente:

De ésta forma añadiremos todas las rutas definidas por anotaciones del directorio Controller, ésta técnica forma parte del SensioFrameworkExtraBundle y nos permite definir las rutas directamente en nuestros controladores. si utilizas la Versión estándar de Symfony2 este Bundle viene por defecto.

Ya con esto podemos acceder a nuestros crud’s desde localhost/loginbundle/web/app_dev.php/admin/user, pero aún debemos modificar ciertos aspectos en el controlador User para codificar el hash de contraseña.

Primero añadiremos la siguiente función en el controlador de usuarios:

Luego modificamos las funciones de las acciones correspondientes a create y update, añadiendo la llamada al la función anterior para establecer el hash de la contraseña con el algoritmo SHA512:

```


// loginbundle/src/Test/LoginBundle/Controller/UserController.php

//funcion createAction:
public function createAction(Request $request)
{
	$entity = new User();
	$form = $this->createCreateForm($entity);
	$form->handleRequest($request);

	if ($form->isValid()) {

		//establecemos la contraseña: --------------------------
		$this->setSecurePassword($entity);

		$em = $this->getDoctrine()->getManager();
		$em->persist($entity);
		$em->flush();

		return $this->redirect($this->generateUrl('admin_user_show', array('id' => $entity->getId())));
	}

	return array(
	'entity' => $entity,
	'form'   => $form->createView(),
	);
} 

//...

//funcion updateAction:
public function updateAction(Request $request, $id)
{
	$em = $this->getDoctrine()->getManager();

	$entity = $em->getRepository('TestLoginBundle:User')->find($id);

	//obtiene la contraseña actual -----------------------
	$current_pass = $entity->getPassword();

	if (!$entity) {
		throw $this->createNotFoundException('Unable to find User entity.');
	}

	$deleteForm = $this->createDeleteForm($id);
	$editForm = $this->createEditForm($entity);
	$editForm->handleRequest($request);

	if ($editForm->isValid()) {
		//evalua si la contraseña fue modificada: ------------------------
		if ($current_pass != $entity->getPassword()) {
			$this->setSecurePassword($entity);
		}
		$em->persist($entity);
		$em->flush();

		return $this->redirect($this->generateUrl('admin_user_edit', array('id' => $id)));
	}

	return array(
	'entity'      => $entity,
	'edit_form'   => $editForm->createView(),
	'delete_form' => $deleteForm->createView(),
	);
} 
```

Luego dentro de este mismo controlado UserController.php agregas la función setSecurePassword:private

```

private function setSecurePassword(&$entity) 
{
	$entity->setSalt(md5(time()));
	$encoder = new \Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder('sha512', true, 10);
	$password = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
	$entity->setPassword($password);
}
```

Por último sólo nos queda eliminar del formulario (src/Test/LoginBundle/Form/UserType.php) el campo salt el cual no debe ser modificado por el usuario:

```

	
<?php
// loginbundle/src/Test/LoginBundle/Form/UserType.php
namespace Test\loginBundle\Form;
// funcion buildform:
public function buildForm(FormBuilderInterface $builder, array $options)
{
	$builder
	->add('username')
	->add('password')
	//->add('salt') //No necesitamos que salt sea mostrado ---------------
	->add('user_roles')
	;
}
```

Ahora puedes proceder a registrar usuarios y roles, es muy importante que al menos crees los roles “ROLE_ADMIN” y “ROLE_USER” y dos usuarios (uno con un rol diferente) antes de que procedas en aplicar el esquema de seguridad, de lo contrario no tendrás usuario con que loguearte .

Paso 3: Creando el esquema de seguridad
----------------------------------------------------------------------------

Ahora procedemos a sobreescribir nuestro esquema de seguridad (loginBundle/app/config/security.yml), recomiendo que antes de hacerlo guardes una copia del security.yml.
```

# loginBundle /app/config/security.yml
security:
    encoders:
        Test\LoginBundle\Entity\User:
            algorithm: sha512
            encode-as-base64: true
            iterations: 10

    providers:
        user_db:
            entity: { class: Test\LoginBundle\Entity\User, property: username }

    firewalls:
        dev:
            pattern:  ^/(_(profiler|wdt)|css|images|js)/
            security: false

        login:
            pattern:  ^/admin/login$
            security: false

        secured_area:
            pattern:    ^/admin/
#            http_basic:
#                realm: "Introduzca Usuario y Contraseña"
            form_login:
                login_path: /admin/login
                check_path: /admin/login_check
            logout:
                invalidate_session: false
                path: /admin/logout
                target: /

    access_control:
      - { path: ^/admin, roles: ROLE_ADMIN }
```

Como puedes apreciar en “encoders” se ha definido un codificador especifico para la entidad User, utilizando el algoritmo SHA512, además codificandolo en Base64 con 10 iteracciones, tal cual se apreció en la función setSecurePassword del controlador.

En “providers” se estableció nuestra entidad User de Doctrine, especificando el campo correspondiente al username, es cual es el mismo username en nuestra entidad.

En “firewalls” se ha añadido la nueva regla (o firewall) login desde la cual se aplica el parametro security: false lo que permite acceder a la misma sin autenticarse, de lo contrario el formulario de login nunca lo podremos visializar.

Además en “secured_area” se ha eliminado anonymous, se ha establecido “form_login” donde definimos la ruta para el login del sistema, y se definió una ruta personalizada para el “log_out“, donde en “target” podemos definir el path hacia donde redirigir cuando los usuarios cierren sesión.

Para culminar sólo necesitamos crear el controlador y vista para nuestro login, por lo que debes de crear el archivo SecurityController.php en el directorio (loginBundle/src/MDW/BlogBundle/Controller):

SecurityController.php
```


<?php
// loginBundle/src/Test/LoginBundle/Controller/SecurityController.php
namespace Test\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;

/**
* Security controller.
*
* @Route("/admin")
*/
class SecurityController extends Controller
{
	/**
	* Definimos las rutas para el login:
	* @Route("/login", name="login")
	* @Route("/login_check", name="login_check")
	*/
	public function loginAction()
	{
		$request = $this->getRequest();
		$session = $request->getSession();
		// obtiene el error de inicio de sesión si lo hay
		if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
			$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
		} else {
			$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
		}
		return $this->render('TestLoginBundle:Security:login.html.twig', array(
		// el último nombre de usuario ingresado por el usuario
		'last_username' => $session->get(SecurityContext::LAST_USERNAME),
		'error'         => $error,
		));
	}

	/**
     * Definimos las rutas para el logout:
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
        
    }
}
```

Ahora crea el directorio “Security” dentro de (loginBundle/src/MDW/BlogBundle/Resources/views) y procede a crear el archivo de vista:

login.html.twig

```

{# loginbundle/src/Test/loginBundle/Resources/views/Security/login.html.twig #}
{% if error %}
<div>{{ error.message }}</div>
 
{% endif %}
<form action=”{{ path(‘login_check’) }}” method=”post”><label for=”username”>Username:</label>
<input id=”username” type=”text” name=”_username” value=”{{ last_username }}” />
<label for=”password”>Password:</label>
<input id=”password” type=”password” name=”_password” />
 
<input type=”submit” name=”login” />
</form>
```

Y con ello ya puedes intentar acceder a localhost/loginBundle/web/admin/user y probar el sistema de seguridad de Symfony2 (vaciar la caché en el caso de entrar al entorno de producción), si creaste previamente 2 usuarios, intenta acceder con el usuario que no tiene el rol “ROLE_ADMIN” y verás como te niega el acceso, en cambio si pruebas con un usuario con dicho rol, puedes entrar perfectamente.

Resumen Final

En esta ocasión apreciamos el complejo sistema de seguridad de Symfony2, en donde unfirewall verifica si el usuario está o no logueado, y un access control vigila que dicho usuario no pueda acceder a contenido del cual no se le ha dado acceso, también conocimos que se pueden definir providers diferentes para contener a nuestros usuarios y encoderspara personalizar el HASH de la contraseña.

Además interactuamos con dicho sistema a través de un “rápido” tutorial que nos permitió resolver las inquietudes más directas en cuanto a creación de un básico RBAC (Role-based Access Control), reitero que no es la única forma de hacerlo y que existen muchos Bundles Prefabricados como el FOSUserBundle que nos facilita enormemente ésta tarea, pero si no se conoce debidamente la base puede resultar una verdadera caja negra el usar un Bundle sin el previo conocimiento de como Symfony2 implementa tales mecanismos.

```

Usuario Administrador: admin
Password Usuario Administrador: uprueba1
Usuario: user
Password Usuario: uprueba2
```