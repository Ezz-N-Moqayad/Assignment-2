<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{

    use SoftDeletes;
    
    // CREATE TABLE teachers(
    //     id INT PRIMARY KEY AUTO_INCREMENT,
    //     teacher_name TEXT NOT NULL,
    //     teacher_email TEXT NOT NULL,
    //     teacher_birth_date DATE NOT NULL,
    //     teacher_PASSWORD TEXT NOT NULL,
    //     created_at DATETIME,
    //     updated_at DATETIME,
    //     deleted_at DATETIME
    // );

}
