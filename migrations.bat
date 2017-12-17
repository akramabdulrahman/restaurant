
php artisan migrate:fresh
@echo off

GOTO EndComment
		 this bat file represents all the procedures that i've done
		 first go to the create_users_table migration and add these lines
		 "
		    $table->string('facebook_id');
            $table->string('facebook_token');
            $table->string('address');
            $table->string('mobile');
            $table->string('locale');
		 "
:EndComment
@echo on


php artisan make:migration:schema create_menus_table --schema="name:string,img:string"
php artisan make:migration:schema create_jobs_table --schema="name:string"
php artisan make:migration:schema create_statuses_table --schema="name:string"
php artisan make:migration:schema create_items_table --schema="name:string,price:decimal,description:longText:nullable,menu_id:integer:unsigned:foreign"
php artisan make:migration:schema create_services_table --schema="name:string,criteria:string"
php artisan make:migration:schema create_customers_table --schema="user_id:integer:unsigned:foreign,is_waiter:boolean,last_check_in:timestamp"
php artisan make:migration:schema create_employees_table --schema="user_id:integer:unsigned:foreign,job_id:integer:unsigned:foreign,check_in:time,checkout:time,salary:decimal"
php artisan make:migration:schema create_attendances_table --schema="user_id:integer:unsigned:foreign,check_in:time,checkout:time"
php artisan make:migration:schema create_orders_table --schema="is_internal:boolean,status_id:integer:unsigned:foreign,price_before_services:decimal,price_after_services:decimal,expected_finish:timestamp,finished_at:timestamp"
php artisan make:migration:schema create_payments_table --schema="user_id:integer:unsigned:foreign,payment:decimal,order_id:integer:unsigned:foreign"
php artisan make:migration:schema create_translations_table --schema="translation:string,translatable:morphs"
php artisan make:migration:schema create_logs_table --schema="user_id:integer:unsigned:foreign,order_id:integer:unsigned:foreign,updated_prop:string,old:string,new:string"


php artisan make:migration:pivot items orders
php artisan make:migration:pivot orders services
php artisan make:migration:pivot orders users

@echo off

GOTO EndCommentSecond
        you dont see the employee_order table that we were going to use in order to
        because it doesnt matter


		now we make the models , i used the https://github.com/laracasts/Laravel-5-Generators-Extended to express the schema here
		for you to check and correct if possible before the initial migrating process
		these commands will create migration files with models foreach table . its kinda nice , i recommend that you use it


		how to install the package is using this command
        composer require laracasts/generators --dev
:EndCommentSecond
@echo on



@echo off

GOTO EndCommentThird
      goto the "create_item_order_pivot_table" migration and then  rename the class to "CreateItemOrderPivotTable"
      goto the "create_order_service_pivot_table" migration and then  rename the class to "CreateOrderServicePivotTable"
      goto the "create_order_user_pivot_table" migration and then  rename the class to "CreateOrderUserPivotTable"
      
      call this command to test your migrations and convert them to sql tables in the database you specified at the .env file
      
      php artisan migrate
:EndCommentThird
@echo on