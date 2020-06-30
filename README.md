# adopets
## json para logar usuario (post)
http://www.aptabrasil.com.br/adopets/public/login
{
    "email":"teste@teste.com.br",
    "password":"1"
}

## json para deslogar usuario (post)
http://www.aptabrasil.com.br/adopets/public/logout

## json para cadastrar usuario (post)
http://www.aptabrasil.com.br/adopets/public/usuario/add
{
    "name" : "Teste",
    "email":"teste@teste.com.br",
    "password":"1"
}

## json para cadastrar produto (post)
http://www.aptabrasil.com.br/adopets/public/product/add
{
    "name" : "produto 1",
    "description":"uso externo",
    "category":"diversos",
    "price":"10.00",
    "quantity":"1"
}
## json para alterar produto (post)
http://www.aptabrasil.com.br/adopets/public/product/edit
{
    "uuid" : "f62c6e9a-bae3-11ea-84c3-641c676df926",
    "name" : "produto 2",
    "description":"uso externo",
    "category":"diversos",
    "price":"10.00",
    "quantity":"1"
}

### Listar produtos pelo nome (get)
http://www.aptabrasil.com.br/adopets/public/product/listName/{noem do produto}

### Listar produtos pela descricao (get)
http://www.aptabrasil.com.br/adopets/public/product/listDescription/{descricao}

### Listar produtos pela categoria (get)
http://www.aptabrasil.com.br/adopets/public/product/listCategory/{categoria}