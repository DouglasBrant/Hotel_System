<?php

use App\Models\Contato;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/index', [App\Http\Controllers\IndexController::class, 'index'])->name('principal');

//Route planos
Route::get('/planos', [App\Http\Controllers\PlanosController::class, 'planos'])->name('planos');

//Route overflow
Route::get('/overview', [App\Http\Controllers\OverviewController::class, 'overview'])->name('overview');

//Route portfolio
Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'portfolio'])->name('portfolio');

//Route sobre
Route::get('/sobre', [App\Http\Controllers\SobreController::class, 'sobre'])->name('sobre');

//ROUTE CONTATO
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('contato');
Route::post('/enviar-contato', function (Request $request) {
    //criando  o Contato 
    Contato::create([
        'nome' => $request->nome,
        'email' => $request->email,
        'numero' => $request->telefone,
        'mensagem' => $request->mensagem,

    ]);
    echo "Menssagem enviada com sucesso";
});

//Busca informação
Route::get('/enviar-contato/{id}', function ($id) {

    $Contato = Contato::find($id);
    return view('site.contatover', ['Contato' => $Contato]);
});
// Excluir reserva
Route::get('exluir-contato/{id}', function (Request $request, $id) {

    $Contato = Contato::find($id);
    $Contato->delete();

    echo "Produto excluido com sucesso";
});


//Route Reserva
Route::get('/reserva', [App\Http\Controllers\ReservaController::class, 'reserva'])->name('reserva');
Route::post('/confirma reserva', function (Request $request) {
    Reserva::create([
        'Email' => $request->Email,
        'Endereco' => $request->Endereço,
        'Cidade' => $request->Cidade,
        'Cep' => $request->Cep,
        'Cpf' => $request->Cpf,
        'DataEntrada' => $request->DataEntrada,
        'DataSaida' => $request->DataSaida,
        'Premium' => $request->Premium,
        'Luxo' => $request->Luxo,
        'Master' => $request->Master,
        'CafeDaManha' => $request->CafeDaManha,
        'Lazer' => $request->Lazer,
        'Itinerarios' => $request->Itinerarios,
        'Frigobar' => $request->Frigobar,
        'FormaDePagamento' => $request->FormaDePagamento,
    ]);
    echo "Reserva realizada com sucesso";
});

//Busca informação
Route::get('/enviar-reserva/{id}', function ($id) {

    $reserva = Reserva::find($id);
    return view('site.reservaver', ['reserva' => $reserva]);
});

// Excluir reserva
Route::get('exluir-reserva/{id}', function (Request $request, $id) {

    $reserva = Reserva::find($id);
    $reserva->delete();

    echo "Produto excluido com sucesso";
});

//middleware
Route::middleware(['admin'])->group(function () {

    Route::get('admin', function () {
        return view('sistema.dashboard');
    });
});

Route::middleware(['cliente'])->group(function () {

    Route::get('cliente', function () {
        return view('site.index');
    });
});

Route::middleware(['funcionario'])->group(function () {

    Route::get('funcionario', function () {
        dd('você é um funcionario');
    });
});
