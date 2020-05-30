--------------------------------------------------
AUTHORIZATION SYSTEM HERE for two user
Redirect after login


1. create model and database table for user and role

in users table add this

   $table->integer('role_id')->default(2);

in roles table add this

   $table->string('name');
   $table->string('slug');

add relation to role model

 public function users(){
        return $this->hasMany('App\User');
    }

2. use seed for users and role

2. create dashboard controller for admin and author in admin and author folder

3. create admin and author middleware 

4. register middleware in kernel.php at routemiddleware

   'admin' => AdminMiddleware::class,
   'author' => AuthorMiddleware::class,

5. admin middleware chnage 

6. author middleware change

7. redirectIfAuthenticated middleware change

8. Login redirect controller change

9. Register Controller change


---------------------------------------------------------
