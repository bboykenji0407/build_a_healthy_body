<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


<!-- 機能
・ユーザー登録機能 ユーザーネーム、年齢、趣味、配偶者、子供（人数）、各ユーザーのプロフィール管理
・身体情報登録機能、身長、体重、体脂肪率、骨格筋率の登録→編集可能
・筋トレ内容の登録、カレンダーにデイリーで筋トレを実施した箇所と内容を登録、行わなかった日は言い訳を書く！
・栄養管理カレンダー、その日のおおよその摂取カロリーを記録 -->

# アプリ名 筋肉は嘘をつかない
# アプリケーション概要 自分磨き用筋トレ管理ツール

### 画面詳細は.dioに記載 ### 


# Usersテーブル

|  column    |  type  |    option   | 外部キー |
|------------|--------|-------------|
| id         | bigint(20)    | null: false | PRIMARY
| username   | varchar(100)     | null: false |
| email      | varchar(255)     | unique: true, null: false |
| password   | varchar(100)     | null: false |
| age        | integer    | null: false | (年齢)
| spouse     | integer    | null: false | (配偶者) id管理 [0 => 有, 1 => 無]
| hobby      | string     | null: false | (趣味) 
| children   | integer    | null: false | (子供) id管理 [0 => 0人, 1 => 1人, 2 => 2人, 3 => 3人, 4 => それ以上]

### - hasOne :bodies
### - hasOne :training
### - hasOne :calories


# Bodiesテーブル

|  column    |  type  |    option   | 外部キー |
|------------|--------|-------------|
| id         | bigint(20)  | null: false | PRIMARY
| user_id    | bigint(20)     | null: false | FK
| height     | integer     | null: false |
| weight     | integer     | unique: true, null: false |
| body_fat_percentage | integer     | null: false |
| skeletal_muscle_percentage | integer    | null: false |
| body_image | string | null: true | 

**自撮りした画像も登録したい

### - belongsTo :users


# Trainingテーブル

|  column    |  type  |    option   | 外部キー |
|------------|--------|-------------|
| id    | bigint(20)  | null: false | PRIMARY
| user_id    | bigint(20) | null: false | FK
| training   | text   | null: false |  
| excuse     | text   |  null: true | (言い訳)
| datetime   | text   | null: false |  

カレンダー機能も入れたい。
### - belongsTo :users


# Caloriesテーブル

|  column    |  type  |    option   | 外部キー |
|------------|--------|-------------|
| id         | bigint(20)  | null: false | PRIMARY
| user_id    | bigint(20) | null: false | FK
| Calorie    | text | null: false |

### - belongsTo :users


