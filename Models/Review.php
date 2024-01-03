<?php

class Review
{
  // Attrubutes
  private $id;
  private $body;
  private $date;
  private $hour;

  // Constructors
  public function __construct()
  {

  }
  public function __construct2($id, $body, $date, $hour)
  {
    $this->id = $id;
    $this->body = $body;
    $this->date = $date;
    $this->hour = $hour;
  }
  public function __construct3($body, $date, $hour)
  {
    $this->body = $body;
    $this->date = $date;
    $this->hour = $hour;
  }

  // Getters and Setters
  public function getId()
  {
    return $this->id;
  }
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }
  public function getBody()
  {
    return $this->body;
  }
  public function setBody($body)
  {
    $this->body = $body;

    return $this;
  }
  public function getDate()
  {
    return $this->date;
  }
  public function setDate($date)
  {
    $this->date = $date;

    return $this;
  }
  public function getHour()
  {
    return $this->hour;
  } 
  public function setHour($hour)
  {
    $this->hour = $hour;

    return $this;
  }
}

?>