<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            "name"=> "Jesus",
            "email"=> "jesus@jesus.com",
            "password"=>bcrypt("123456"),

        ];
        if(User::Where('email',"=",$dados['email'])->count()){
            $usuario = User::Where('email',"=",$dados['email'])->first();
            $usuario->update($dados);
            echo("Usuario alterado !");
        }else{
            User::create($dados);
            echo("Usuario criado !");
        }
    }
}
