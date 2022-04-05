# Laravel-Books-API

A simple application where you can log in and out and play with a CRUD of books as an API.

*Remember to duplicate the .env with your database settings.*

Routes: 

#### Login - POST
```angular2html
    http://localhost/login
    
    in json {
        "email":"example@gmail.com",
        "password":"123123123"
    }
```

#### Register - POST
```angular2html
    http://localhost/register
    
    in json {
        "name":"Example"
        "email":"example@gmail.com",
        "password":"123123123"
    }
```

#### List all books - GET
```angular2html
    http://localhost/api/livro/create
```

#### Register Books - POST
```angular2html
    http://localhost/api/livro

    in json {
        "isnb":"Example isnb"
        "titulo":"Example titulo"
        "resumo":"Example resumo"
        data_publi:"2022"
    }
```

#### Change Books - PUT
```angular2html
    http://localhost/api/livro/{id}

    in json {
        "isnb":"Example isnb"
        "titulo":"Example titulo"
        "resumo":"Example resumo"
        data_publi:"2022"
    }
```

#### Change Books - DELETE
```angular2html
    http://localhost/api/livro/{id}
```
