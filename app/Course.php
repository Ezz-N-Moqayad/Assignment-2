<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{

    use SoftDeletes;

    // CREATE TABLE courses(
    //     id INT PRIMARY KEY AUTO_INCREMENT,
    //     course_name TEXT NOT NULL,
    //     course_number INT NOT NULL,
    //     course_credit INT(1) NOT NULL,
    //     teacher_id INT,
    //     created_at DATETIME,
    //     updated_at DATETIME,
    //     deleted_at DATETIME,
    //     FOREIGN KEY(teacher_id) REFERENCES teachers(id)
    // );

}
