<?php
 
namespace App\Models;

class Listing {
    public static function all(){
        return [
            ['id' => 1, 'title' => 'First listing', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'],
            ['id' => 2, 'title' => 'Second listing', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'],
            ['id' => 3, 'title' => 'Third listing', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'],
        ];
    }

    public static function find($id){
        $listings = self::all();

        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
}