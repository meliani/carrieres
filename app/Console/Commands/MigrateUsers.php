<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MigrateUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:migrate-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // get users from users model an insert them into students table
        // id from users is the as students id

        $users = \App\Models\User::all();

        foreach ($users as $user) {
            $student = \App\Models\Profile\Student::firstOrNew(['id' => $user->id]);
            $student->id = $user->id;
            $student->name = $user->name;
            $student->email = $user->email;
            $student->password = $user->password;
            $student->save();
        }

    }
}
