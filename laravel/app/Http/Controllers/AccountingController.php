<?php
//Цей код є частиною контролера у фреймворку Laravel.
// Контролер визначає логіку обробки запитів, що надходять до веб-додатку
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accounting;
use Illuminate\Support\Facades\Auth;

class AccountingController extends Controller
{
    //Цей метод повертає вид create, який відображає форму для створення нового запису у базі даних.
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Валідація даних $request
//Цей метод обробляє POST-запит від форми створення, валідує дані
// та створює новий запис у базі даних для моделі 'Accounting'.
//        $accounting = new Accounting([
//            'code' => $request->code,
//            'name' => $request->name,
//            'position' => $request->position,
//            'salary' => $request->salary,
//            'children_count' => $request->children_count,
//            'experience' => $request->experience,
//        ]);
        $accounting = new Accounting();

        $accounting->code = $request->code;
        $accounting->name = $request->name;
        $accounting->position = $request->position;
        $accounting->salary = $request->salary;
        $accounting->children_count = $request->children_count;
        $accounting->experience = $request->experience;
        $accounting->creator_id = Auth::id();

        $accounting->save();


        return redirect()->route('accounting.index');
    }

    public function index()
    {//Цей метод отримує всі записи з таблиці 'accounting' і передає їх у вид index для відображення списку всіх записів.
        $accountings = Accounting::all();
        return view('index', ['accountings' => $accountings]);
    }

    public function show($id)
    {//Цей метод отримує запис за вказаним ідентифікатором ($id) з
        //// таблиці 'accounting' та передає його у вид show для відображення деталей цього запису.
        $accounting = Accounting::findOrFail($id);
        return view('show', ['accounting' => $accounting]);
    }

    public function edit($id)
    {// Цей метод отримує запис за вказаним ідентифікатором ($id) з таблиці 'accounting' та передає його у вид edit для відображення форми редагування цього запису.
        $accounting = Accounting::findOrFail($id);
        return view('edit', ['accounting' => $accounting]);
    }

    public function update(Request $request, $id)
    {// Цей метод отримує запис за вказаним ідентифікатором ($id) з таблиці 'accounting' та передає його у вид edit для відображення форми редагування цього запису.
        // Валідація даних $request

        $accounting = Accounting::findOrFail($id);

        $accounting->code = $request->code;
        $accounting->name = $request->name;
        $accounting->position = $request->position;
        $accounting->salary = $request->salary;
        $accounting->children_count = $request->children_count;
        $accounting->experience = $request->experience;

        $accounting->save();

        return redirect()->route('accounting.index');
    }

    public function destroy($id)
    {//Цей метод видаляє запис за вказаним ідентифікатором ($id) з таблиці 'accounting'.
        $accounting = Accounting::findOrFail($id);
        $accounting->delete();

        return redirect()->route('accounting.index');
    }
}
