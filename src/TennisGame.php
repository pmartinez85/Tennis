<?php

class TennisGame
{
    protected $player1;
    protected $player2;


    public function __construct($player1, $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }


    public function points(){
        $diferencia= $this->player1->points() - $this->player2->points();

        if ($diferencia > 0){

            return "Avantatge" . $this->player1->name();

        }
        if ($diferencia == 0){
            return "Iguals";
        }
        if ($diferencia < 0){

            return "Avantatge" . $this->player2->name();

        }

        if($this->player1->points() == $this->player2->points()){

            return  $this->player1->points() . " Equals";
        }
        return  $this->player1->points() . ' - ' . $this->player2->points();

    }

    public function tie(){



    }

}