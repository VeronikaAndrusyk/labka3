<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounting extends Model
{
    use HasFactory;

    protected $table = 'accounting';
//Вказує, що ця модель пов'язана з таблицею бази даних, яка має назву 'accounting'.
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'name',
        'position',
        'salary',
        'children_count',
        'experience'
    ];
}//
//Вказує, які атрибути можуть бути масово призначені.
// У цьому випадку дозволяє масово призначати значення для атрибутів
// 'code', 'name', 'position', 'salary', 'children_count', та 'experience'.
