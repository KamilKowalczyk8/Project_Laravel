<?php

namespace App\QueryFilters;

use Cerbero\QueryFilters\QueryFilters;

/**
 * Filter records based on query parameters.
 *
 */
class ActorFilters extends QueryFilters
{
    /**
     * Filter records based on the query parameter "won_oscar"
     * 
     *
      @return void
     */
    
        public function title($pharse)
        {
        $this->query->where('title','like' ,'%' .$pharse. '%');
        }
    

    /**
     * Filter records based on the query parameter "acting"
     * 
     @param mixed $bool
      @return void
     */
    //public function acting($bool)
   //{
        // $this->query
   // }

    /**
     * Filter records based on the query parameter "acted-in"
     * 
      @param mixed $year
      @return void
     */
    //public function actedIn($year)
    //{
        // $this->query
    //}
}
