<?php

    class Calc {
        private $operator;
        private $num1;
        private $num2;

        // required bvariables when the Calc class is intantiated
        public function __construct(string $operator, float $num1, float $num2)
        {
            $this->operator = $operator;
            $this->num1 = $num1;
            $this->num2 = $num2;
        }

        public function calculate() {
            switch ($this->operator) {
                case 'add':
                    # code...
                    $answer = $this->num1 + $this->num2;
                    return $answer;
                    break;
                
                case 'sub':
                    # code...
                    $answer = $this->num1 - $this->num2;
                    return $answer;
                break;	
                    
                case 'mul':
                    # code...
                    $answer = $this->num1 * $this->num2;
                    return $answer;
                break;
                        
                case 'div':
                    # code...
                    $answer = $this->num1 / $this->num2;
                    return $answer;
                break;
                
                default:
                    # code...
                    break;
            }
        }
    }


?>