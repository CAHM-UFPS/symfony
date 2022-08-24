# Prueba Symfony

### Endpoints

#### Para UsuarioController

##### GET

> /usuario/list  ---> Lista todos los usuarios registrados en la base de datos con sus propiedades originales

> /usuario/new ---> Podemos crear un usuario e insertarlo en la base de datos (también funciona con el método POST)

> /usuario/{email} ---> Podemos buscar un usuario registrado mediante su email que es una propiedad unica

##### POST

> /usuario/{id}/edit ---> Permite editar a un usuario filtrandolo por su id

> /usuario/{id} ---> Permite eliminar a un usuario filtrandolo por su id

#### Para PedidoController

#### POST

> /pedido/create ---> Permite crear un pedido y registrarlo en la base de datos mediante el email de un usuario registrado

#### GET

> /pedido/listar ---> Lista todos los pedidos registrados en la base de datos relacionando cada pedido con un id de usuario

> /pedido/{email} ---> Permite buscar un pedido filtrando por el email del usuario

#### PUT

> /pedido/editar/{id} ---> Permite editar un pedido registrado haciendo el filtrado por su respectivo id

#### DELETE

> /pedido/{id} ---> Permite eliminar un pedido haciendo el filtrado por su respectivo id

