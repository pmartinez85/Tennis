<?php

namespace spec;

use Player;
use TennisGame;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TennisGameSpec extends ObjectBehavior{

    function let()
    {
        $this->player1 = new Player(0, "Maria");
        $this->player2 = new Player(0, "Pepe");
        $this->beConstructedWith($this->player1, $this->player2);

    }

    function it_is_initalizable(){

        $this->ShouldHaveType(TennisGame::class);

    }

    function it_score_0_iguals(){
        $this->player->winpoint();
        $this->score()->shouldReturn('0', 'Equals');
    }

    function it_score_15_0(){
        $this->player->winpoint();
        $this->score()->shouldReturn('15 - 0');
    }

    function it_score_0_15(){
        $this->player->winpoint();
        $this->score()->shouldReturn('0 - 15');
    }
    function it_score_30_0(){
        $this->player->winpoint();
        $this->score()->shouldReturn('30 - 0');
    }

    function it_score_0_30(){
        $this->player->winpoint();
        $this->score()->shouldReturn('0 - 30');
    }
    function it_score_40_0(){
        $this->player->winpoint();
        $this->score()->shouldReturn('40 - 0');
    }

    function it_score_0_40(){
        $this->player->winpoint();
        $this->score()->shouldReturn('0 - 40');
    }

    function it_score_15_15(){
        $this->player->winpoint();
        $this->score()->shouldReturn('15', 'Equals');
    }
    function it_score_30_30(){
        $this->player->winpoint();
        $this->score()->shouldReturn('30', 'Equals');
    }
    function it_score_40_40(){
        $this->player->winpoint();
        $this->score()->shouldReturn('40', 'Equals');
    }

    function it_score_30_15(){
        $this->player->winpoint();
        $this->score()->shouldReturn('30 - 15');
    }

    function it_score_15_30(){
        $this->player->winpint();
        $this->score()->shouldReturn('15 - 30');
    }
    function it_score_40_15(){
        $this->player->winpint();
        $this->score()->shouldReturn('40 - 15');
    }

    function it_score_15_40(){
        $this->player->winpint();
        $this->score()->shouldReturn('15 - 40');
    }

}
