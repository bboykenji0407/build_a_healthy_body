<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Body extends Model
{
    protected $fillable = [
        'height',
        'weight',
        'body_fat_percentage',
        'skeletal_muscle_percentage',
        'body_image',
    ];

    public static $rules = [
        'height' => ['required', 'integer', 'regex:/\d{1,3}/'],
        'weight' => ['required', 'integer', 'regex:/\d{1,3}/'],
        'body_fat_percentage'  => ['required', 'integer', 'regex:/\d{1,2}/'],
        'skeletal_muscle_percentage'  => ['required', 'integer', 'regex:/\d{1,2}/'],
    ];

    public static $massage = [
        'height.required' => '身長を入力してください',
        'height.max' => '身長の入力は３桁までです',
        'height.regex' => '身長は半角数字で入力してください',
        'weight.required' => '体重を入力してください',
        'weight.max' => '体重の入力は３桁までです',
        'weight.regex' => '体重は半角数字で入力してください',
        'body_fat_percentage.required' => '体脂肪の入力は２桁までです',
        'body_fat_percentage.max' => '体脂肪の入力は２桁までです',
        'body_fat_percentage.regex' => '体脂肪は半角数字で入力してください',
        'skeletal_muscle_percentage.required'=>  '骨格筋率を入力してください',
        'skeletal_muscle_percentage.max'=>  '骨格筋率の入力は２桁までです',
        'skeletal_muscle_percentage.regex'=>  '骨格筋率は半角数字で入力してください',
    ];
}
