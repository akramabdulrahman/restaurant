php artisan migrate:fresh

@echo off

GOTO EndComment
		register the policies of the app
		    *customer policy
		    *waiter policy
		    *cashier policy
		    *chef policy
		    *delivery policy
:EndComment
@echo on


GOTO EndCommentsecond
		this command will run a seeder that will get all roles into the database
:EndCommentsecond
@echo on
php artisan db:seed --class="RolesSeeder"



