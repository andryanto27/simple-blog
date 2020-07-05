<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Models\Contact;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Models\Person;

class DatabaseSeeder extends Seeder {

    const ADMIN_USERNAME    = "admin";
    const ADMIN_EMAIL       = "admin@devel.com";
    const ADMIN_PASSWORD    = "secret";

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $checkUser = User::where("id", "<>", 0)->count();
        if($checkUser == 0){
            $this->command->info('Begining installing application...');
            $this->install();
            $this->command->info('Application has been installed.');
        }else{
            $this->command->info('Application already installed.');
        }
    }

    private function install(){
        // Seed the default permissions
        $permissions = Permission::defaultPermissions();

        foreach ($permissions as $perms) {
            Permission::firstOrCreate(['name' => $perms]);
        }

        $this->command->info('Default Permissions added.');

        // Create Roles
        $roles_array = array("Admin","User");

        // add roles
        foreach ($roles_array as $role) {
            $role = Role::firstOrCreate(['name' => trim($role)]);

            if ($role->name == 'Admin') {
                // assign all permissions
                $role->syncPermissions(Permission::all());
                $this->command->info('Admin granted all the permissions');
            } else {
                // for others by default only read access
                $role->syncPermissions(Permission::where('name', 'LIKE', 'view_%')->get());
            }

            // create one user for each role
            $user = $this->createUser($role);
            if ($role->name == 'Admin') {
                $UserAdmin = User::where("id", $user->id)->first();
                if(!is_null($UserAdmin)){
                    $UserAdmin->username = self::ADMIN_USERNAME;
                    $UserAdmin->email = self::ADMIN_EMAIL;
                    $UserAdmin->password =  bcrypt(self::ADMIN_PASSWORD);
                    $UserAdmin->save();
                }
            }
        }

        $RoleUser = Role::where("name", trim("User"))->first();
        if(!is_null($RoleUser)){
            for($i = 1; $i <=98; $i++){
                $this->createUser($RoleUser);
            }
        }

        $this->command->info('Defaults roles added successfully');
        factory(Contact::class, 50)->create();
        $this->command->info('Some contacts data seeded.');
        $this->command->warn('All done :)');

        $admin = User::where("username", self::ADMIN_USERNAME)->first();
        if(!is_null($admin)){
            $this->command->info('Here is your admin details to login:');
            $this->command->warn("Username is : '".$admin->username."'");
            $this->command->warn("Email is : '".$admin->email."'");
            $this->command->warn('Password is : "'.self::ADMIN_PASSWORD.'"');
        }

    }

    /**
     * Create a user with given role
     *
     * @param $role
     */
    private function createUser($role) {
        $date = Carbon::create(rand(1980, 1999), rand(1,12), rand(1,28), 0, 0, 0);
        $faker = Faker::create();
        $user = factory(User::class)->create();
        $user->assignRole($role->name);
        $gender = rand(0, 1);
        Person::create([
            'user_id'=> $user->id,
            'first_name'=> $gender == 0 ? $faker->firstNameMale : $faker->firstNameFemale,
            'last_name'=> $faker->lastName,
            'gender'=> $gender,
            'blood_type'=> rand(0, 3),
            'marital_status'=> rand(0, 3),
            'postal_code'=> $faker->postcode,
            'fax_number'=> $faker->postcode,
            'birth_place'=> $faker->city,
            'birth_date'=> $date,
            'address'=> $faker->address,
            'about_me'=> $faker->text
        ]);
        return $user;
    }

}
