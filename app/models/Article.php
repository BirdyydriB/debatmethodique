<?php 
 
class Article extends Eloquent {
 
    protected $table = 'articles';
 
    public function author()
    {
        return $this->belongsTo('User');
    }
    
    public function category()
    {
	return $this->belongsTo('ArticleCategory');
    }
 
}