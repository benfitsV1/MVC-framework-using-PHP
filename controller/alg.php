<?php

class alg {

    public function sort() {

        $this->title = "Sorting Algorithms";

        $names = [ 
            "Selection Sort", 
            "Insertion Sort", 
            "Bubble Sort", 
            "Merge Sort"
        ];

        $this->params = [ 
            "sort_names"=> $names 
        ];
    }


    public function bigo() {

        $this->title = "Asymptotic Complexity";

        $items = [
            "O(1)" => "Constant",
            "O(log n)" => "Logarithmic",
            "O(n)" => "Linear",
            "O(n2)" => "Quadratic",
        ];

        $this->params = [ 
            "bigo"=> $items 
        ];
    }
}
