<?php
namespace App;
class Card {
  // déclaration d'une propriété
  public $test = "test avec autoload";
  private $question;
  private $answer;
  private $date;

  function __construct($question, $answer) {
    $this->question = $question;
    $this->answer = $answer;
    $this->date = new \DateTime();
  }

  // déclaration des méthodes
  public function getQuestion() {
    return $this->question;
  }
  public function getAnswer() {
    return $this->answer;
  }
  public function getDate() {
    return $this->date;
  }
}