<?php
 class MyYear {
    // classの中身を書き換える
    public $year;
    
    public function __construct($year) {
        $this->year = $year;
    } 
    
    public function getMyYear() {
        return $this->year;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
    }
    
    public function isLeap() {
        if ($this->year%400 == 0) {
            return true; 
        } else if ($this->year%100 == 0) {
            return false;
        } else if ($this->year%4 == 0) {
            return true;
        } else {
            return false;
        }
    }
}

// いろんな値を入れて実行して正常に動いているかテストしてみて下さい
$year = new MyYear(2018);
echo "Is " . $year->getMyYear() . " a leap year? : ";
var_export($year->isLeap());