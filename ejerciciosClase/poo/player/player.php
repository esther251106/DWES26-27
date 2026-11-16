<?php
class Player
{
    private $name;
    private $cumple;
    private $dorsal;
    private $posicion;
    private $goals;
    private $matches;
    private $minutes;
    private $yellowCards;
    private $redCards;

    public function __construct($name, $cumple, $dorsal, $posicion, $goals, $matches, $minutes, $yellowCards, $redCards)
    {
        $this->name = $name;
        $this->cumple = $cumple;
        $this->dorsal = $dorsal;
        $this->posicion = $posicion;
        $this->goals = 0;
        $this->matches = 0;
        $this->minutes = 0;
        $this->yellowCards = 0;
        $this->redCards = 0;
    }

    //getters
    public function getName()
    {
        return $this->name;
    }
    public function getCumple()
    {
        return $this->cumple;
    }
    public function getDorsal()
    {
        return $this->dorsal;
    }
    public function getPosicion()
    {
        return $this->posicion;
    }
    public function getGoals()
    {
        return $this->goals;
    }
    public function getMatches()
    {
        return $this->matches;
    }
    public function getMinutes()
    {
        return $this->minutes;
    }
    public function getYellowCards()
    {
        return $this->yellowCards;
    }
    public function getRedCards()
    {
        return $this->redCards;
    }

    public function Age()
    {
        $birthDate = new DateTime($this->cumple);
        $today = new DateTime();
        $age = $today->diff($birthDate)->y;
        return $age;
    }

    public function Score()
    {
        $this->goals++;
    }

    public function AddCard(int $color)
    {
        if ($color == 1) {
            $this->yellowCards++;
        } elseif ($color == 2) {
            $this->redCards++;
        }
    }

    public function PlayMinutes(int $minutes)
    {
        $this->minutes += $minutes;
        $this->matches++;
    }

    //mostrar datos
    public function render()
    {
        echo  $this->name . " | " . $this->Age() . " | " . $this->dorsal . " | " . $this->posicion . " | " .
            $this->goals . " | " . $this->matches . " | " . $this->minutes . " | " . $this->yellowCards . " | " .
            $this->redCards;
    }
}

class Team {
    private $name;
    private $players;
    private $matches;
    private $won;
    private $lost;
    private $scoreGoals;
    private $concededGoals;

    public function __construct($name) {
        $this->name = $name;
        $this->players = [];
        $this->matches = 0;
        $this->won = 0;
        $this->lost = 0;
        $this->scoreGoals = 0;
        $this->concededGoals = 0;
    }

    public function getName() {  
        return $this->name; 
    }

    public function addPlayer(Player $player) {
        $this->players[] = $player;
    }

    public function matchResult($goalsFor, $goalsAgainst) {
        $this->matches++;
        $this->scoreGoals += $goalsFor;
        $this->concededGoals += $goalsAgainst;

        if ($goalsFor > $goalsAgainst) {
            $this->won++;
        } elseif ($goalsFor < $goalsAgainst) {
            $this->lost++;
        }
    }

    public function render() {
        echo "Team: ". $this->name . "<br>" . 
        " Partidos:" . $this->matches . "<br>" . 
        " Ganados: " . $this->won . " <br> " . 
        " Perdidos: " . $this->lost . "<br>" . 
        " Goles a favor: " . $this->scoreGoals . " <br> " .
        " Goles en contra: " . $this->concededGoals . "<br>" .
        "Players: ";
        /*foreach ($this->players as $player) {
            $player->render();
        }*/
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player</title>
</head>

<body>
    <?php 
    echo "<h2> EQUIPOS </h2>";
    $team = new Team("FC Barcelona");
    $team->addPlayer(new Player("Lionel Messi", "1987-06-24", 10, "Delantero", 0, 0, 0, 0, 0));
    $team->matchResult(2, 1);
    $team->render();
    ?>

    <?php
    $player = new Player("Lionel Messi", "1987-06-24", 10, "Delantero", 0, 0, 0, 0, 0);
    echo "<p><strong> Player  Edad  Dorsal  Posición  Goles  Partidos  Min  CardY  CardR </strong></p>";
    $player->PlayMinutes(90);
    $player->AddCard(1);
    $player->render();
    ?>
</body>

</html>