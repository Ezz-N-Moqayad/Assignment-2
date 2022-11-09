<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{

    use SoftDeletes;
    
    // CREATE TABLE students(
    //     id INT PRIMARY KEY AUTO_INCREMENT,
    //     student_name TEXT NOT NULL,
    //     student_email TEXT NOT NULL,
    //     student_birth_date DATE NOT NULL,
    //     student_PASSWORD TEXT NOT NULL,
    //     course_id INT,
    //     created_at DATETIME,
    //     updated_at DATETIME,
    //     deleted_at DATETIME,
    //     FOREIGN KEY(course_id) REFERENCES courses(id)
    // );

}
