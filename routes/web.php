<?php

use App\Http\Controllers\ProdutoController;

Route::resource('produtos', ProdutoController::class);

Route::get('/test-db', function () {
    try {
        \DB::connection()->getPdo();
        $database = \DB::getDatabaseName();
        return "Conexão bem-sucedida! Banco de dados: " . $database;
    } catch (\Exception $e) {
        return "Erro ao conectar: " . $e->getMessage();
    }
});