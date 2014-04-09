<?php
 
class DatabaseSeeder extends Seeder {
 
    public function run()
    {
        Eloquent::unguard();
                
        DB::table('users')->delete();
        User::create(array(
            'email'	=> 'loizeauanthony@gmail.com',
            'name'	=> 'Birdy',
            'password'	=> Hash::make('g1r2o3u4m5f6')
        ));        
        
	DB::table('articlecategories')->delete();
	ArticleCategory::create(array(	    
            'name'  => 'projets',
        ));
	
        DB::table('articles')->delete();
        Article::create(array(
            'title'	    => 'First post',
            'slug'	    => 'first-post',
	    'category_id'   => 1,
            'user_id'	    => 1,
            'body'	    => 'Ut enim ad minim veniam',
        ));
 
        DB::table('pages')->delete();
        Page::create(array(
            'title'   => 'Qui sommes nous',
            'slug'    => 'qui-sommes-nous',
	    'rank'	=> 2,
            'body'    => 'Lorem ipsum dolor sit amet'
        ));
	Page::create(array(
            'title'	=> 'Acceuil',
            'slug'	=> 'acceuil',
	    'rank'	=> 1,
            'body'	=> 'Lorem ipsum dolor sit amet'
        ));
    }
 
}