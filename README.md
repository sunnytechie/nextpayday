## Documentation

### Assignment

- Create Authentication for Admins
- Import CSV records into Database
- Read data from an API and populate the database
- Exception handling
- Create Jobs

Kindly follow the instructions below to install the laravel code
Login details after seeder
            'name' => 'admin',
            'email' => 'admin@nextpayday.co',
            'password' => Hash::make('admin123'),

            'name' => 'user',
            'email' => 'user@nextpayday.co',
            'password' => Hash::make('user123'),

### Installation guide

#### Seeder User details to login as admin or User

```bash
php artisan db:seed


#### API Sync Data to database table

php artisan app:sync-api-data 
