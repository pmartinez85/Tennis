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


    public function score(){
        if($this->tie()){
            return $this->resolveTie();
        }
        if ($this->player1->score() == $this->player2->score()){
            return $this->player1->score() ." iguals";
        }
        return $this->player1->score()." - ".$this->player2->score();
    }
    protected function resolveTie(){
        $diferencia= $this->player1->points() - $this->player2->points();
        if ($diferencia==0){
            return "Iguals";
        }
        $playerwins = $this->player1;
        if ($diferencia<0) {
            $playerwins = $this->player2;
        }
        if ($diferencia == 2) {
            return $this->player1->name() . " guanya";
        }
        if ($diferencia == -2) {
            return $this->player2->name() . " guanya";
        }
        return $this->scoreAvantatge($playerwins);
    }
    /**
     * @return bool
     */
    public function tie()
    {
        return $this->player1->points() > 3 || $this->player2->points() > 3;
    }
    /**
     * @return string
     */
    protected function scoreAvantatge($player)
    {
        return "Avantatge " . $player->name();
    }
}