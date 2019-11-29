<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Profile;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Este comando "desabilita" a proteção do método fill($data = []); nos models
        // Model::unguard();
        /**
         * é aqui que a mágica acontece
         * $this->call('nomeDoSeed') "chama" o seed que você criou
         * 
         * A ordem deles é muito importante, pois um registro pode precisar de outro para ser criado
         * Ex.: 
         * // $this->call('UserTableSeeder'); 
         * chama a classe UserTableSeeder (database/seeds/UserTableSeeder.php)
         * 
         * // $this->call('PostsTableSeeder'); 
         * Posts tem uma FK chamada user_id, por isso ela precisa que o seed UserTableSeeder já tenha sido executado
         * 
         * Todos os seeds que você quer executar precisam estar registrados aqui.
         **/

        DB::table('users')->truncate();
        // Cria usuários admins (dados controlados)
        $this->createAdmins();
        // Cria usuários demo (dados faker)
        $this->createUsers(); 
        // Cria Profile
        $this->createProfiles(); 
    }

    private function createAdmins()
    {
        User::create([
            'name'  => 'Eduardo Capela',
            'email' => 'edufeq03@gmail.com', 
            'username'  => 'edufeq03',
            'password' => bcrypt('12345678')
        ]);
        
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('User edufeq03@gmail.com created');

        User::create([
            'name'  => 'Teste Capela',
            'email' => 'teste@gmail.com', 
            'username'  => 'testeUsername',
            'password' => bcrypt('12345678')
        ]);

        $this->command->info('User teste@gmail.com created');
    }

    private function createUsers()
    {
        $max = rand(10, 30);
        for($i=0; $i < $max; $i++):
            $this->createUser($i);
        endfor;
        $this->command->info($max . ' demo users created');
    }

    private function createUser($index)
    {   
        return User::create([
            'name'  =>'User '. $index,
            'email' => 'email' . $index . '@mail.com', 
            'username'  =>'username '. $index,
            'password' => bcrypt('12345678')
        ]);
    }

    private function createProfiles()
    {
        $max = rand(10, 30);
        for($i=0; $i < $max; $i++):
            $this->createProfile($i);
        endfor;
        $this->command->info($max . ' Profile users created');
    }

    private function createProfile($index)
    {   
        return Profile::create([
            'user_id'  => $index,
            'title' => 'title' . $index, 
            'description'  =>'description '. $index,
            'url' => 'url '. $index,
        ]);
    }
}