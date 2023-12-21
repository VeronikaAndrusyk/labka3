<?php

use Illuminate\Database\Migrations\Migration;//імпортує клас Migration для використання міграцій.
use Illuminate\Database\Schema\Blueprint;//імпортує клас Blueprint для визначення структури таблиці.
use Illuminate\Support\Facades\Schema;//імпортує фасад Schema для взаємодії з схемою бази даних.
use Illuminate\Support\Facades\DB;// імпортує фасад DB для взаємодії з базою даних.

class CreateAccountingTable extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        //Метод up викликається при виконанні міграції і відповідає за визначення структури таблиці 'accounting'.
        //Метод up() містить логіку для створення таблиці 'accounting' з наступними колонками:
    {
        Schema::create('accounting', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('position');
            $table->decimal('salary', 10, 2);
            $table->integer('children_count');
            $table->integer('experience');
            $table->timestamps();

        });

        // Додавання тестових даних
        //метод DB::table('accounting')->insert(...) для додавання тестових даних у таблицю.
        DB::table('accounting')->insert([
            [
                //Тестові дані вставляються в таблицю 'accounting' за допомогою методу insert.
                // Кожен набір даних є асоціативним масивом, що представляє рядок у таблиці.
                'code' => '4681',
                'name' => 'John Dot',
                'position' => 'Accountant',
                'salary' => 20000.00,
                'children_count' => 2,
                'experience' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => '3451',
                'name' => 'John Doe',
                'position' => 'Accountant',
                'salary' => 50000.00,
                'children_count' => 6,
                'experience' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'code' => '9231',
                'name' => 'John Doe',
                'position' => 'Accountant',
                'salary' => 30000.00,
                'children_count' => 1,
                'experience' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'code' => '2351',
                'name' => 'John Doe',
                'position' => 'Accountant',
                'salary' => 70000.00,
                'children_count' => 3,
                'experience' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'code' => '4561',
                'name' => 'John Doe',
                'position' => 'Accountant',
                'salary' => 80000.00,
                'children_count' => 7,
                'experience' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],


        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
        //Метод down викликається при відкаті міграції. Він відповідає за відміну змін, внесених методом up.
        //Метод down() видаляє таблицю 'accounting' у випадку відкату міграції.
    {
        Schema::dropIfExists('accounting');
    }

};
//DB::table('accounting')->insert(...) є частиною фасаду Laravel DB,
// який дозволяє взаємодіяти з базою даних без прямого використання
// моделей Eloquent. У цьому випадку, вказана команда виконує вставку
// нових рядків в таблицю 'accounting' у базі даних. Кожен вставлений
// рядок містить асоціативний масив зі значеннями для кожної колонки у
// таблиці



//DB::table('accounting')->insert(...) є частиною Будівника Запитів
// Бази Даних Laravel і забезпечує зручний спосіб взаємодії з базою
// даних без прямого використання моделей Eloquent. У цьому контексті
// ця команда вставляє рядки в таблицю 'accounting'.
