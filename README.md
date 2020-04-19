# Implementando Auth com interface ui

1. Instalar pacote no laravel

    composer require laravel/ui

2. Gerar as views

    php artisan ui vue --auth

3. Rodar NPM

    npm install && npm run dev

4. Configurar o DB

5. Rodar migrate

    php artisan migrate

Já esta funcionando o pacote de Auth

## Route Model Binding

1. Criar tabela, model, controller e rota

2. Dentro do controller

    function index(Product $item)
    {
        return $item->all();
    }

3.  Dentro da rota

    Route::get('/{item:status}', 'Binding@index');

Funciona para passar escondido os parametros para o banco de dados.