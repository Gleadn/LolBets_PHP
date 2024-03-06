<?php

namespace App\Validator;

class Tester {
    //$data['Matchs','Team1Winning','Team1GameWin','Team2Winning','Team2GameWin']
    public function dataValidation($data, $match) {
        if ($this->matchIdStatus($match)) {
            $this->errorPrinter('1');
            return false;
        } else if ($this->amountOfGame($data, $match)) {
            $this->errorPrinter('2');
            return false;
        } else if ($this->teamWinning($data)) {
            $this->errorPrinter('3');
            return false;
        } else if ($this->teamWinningGame($data, $match)) {
            $this->errorPrinter('4');
            return false;
        } else if ($this->teamLoosingGame($data, $match)) {
            $this->errorPrinter('5');
            return false;
        }
        return true;
    }

    public function errorPrinter($code) {
        switch ($code) {
            case '1':
                echo 'Le match n\'existe pas ou son statut n\'est pas "Not Started".';
                break;
            case '2':
                echo 'Le nombre de partie(s) totale(s) n\'est pas correct.';
                break;
            case '3':
                echo 'Le résultat des deux équipes doit être opposé.';
                break;
            case '4':
                echo 'Le nombre de partie(s) gagnée(s) par l\'équipe gagnante n\'est pas valide.';
                break;
            case '5':
                echo 'Le nombre de partie(s) gagnée(s) par l\'équipe perdante n\'est pas valide.';
                break;
        }
    }

    public function matchIdStatus($match) {
        if (!$match || $match->getStatus() !== 'Not Started') {
            return true;
        }
        return false;
    }

    public function amountOfGame($data, $match) {
        $bo = $match->getBo();
        if ($data['Team1GameWin'] + $data['Team2GameWin'] > $bo) {
            return true;
        }
        return false;
    }

    public function teamWinning($data) {
        if ($data['Team1Winning'] === $data['Team2Winning']) {
            return true;
        }
        return false;
    }

    public function teamWinningGame($data, $match) {
        if ($data['Team1Winning'] === true) {
            if ($data['Team1GameWin'] != ceil($match->getBo()/2)) {
                return true;
            }
        } else if ($data['Team2Winning'] === true) {
            if ($data['Team2GameWin'] != ceil($match->getBo()/2)) {
                return true;
            }
        }
        return false;
    }

    public function teamLoosingGame($data, $match) {
        if ($data['Team1Winning'] === false) {
            if ($data['Team1GameWin'] === ceil($match->getBo()/2) -1) {
                return true;
            }
        } else if ($data['Team2Winning'] === false) {
            if ($data['Team2GameWin'] === ceil($match->getBo()/2) -1) {
                return true;
            }
        }
        return false;
    }
}