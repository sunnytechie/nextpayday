## Documentation

### Assignment

- Create Authentication
- Import CSV records into Database
- Read data from an API and populate the database
- Exception handling
- Create Jobs

<p>Login details after seeder</p>

            'name' => 'admin',
            'email' => 'admin@nextpayday.co',
            'password' => Hash::make('admin123'),

            'name' => 'user',
            'email' => 'user@nextpayday.co',
            'password' => Hash::make('user123'),

### Installation guide

#### Seeder User details to login as admin or User

#### API Sync Data to database table


```bash
composer update

php artisan migrate

php artisan db:seed

php artisan app:sync-api-data 
