<?php

class User
{
  // Atributes 
  private $id;
  private $name;
  private $surename;
  private $email;
  private $password;

  // Constructors 
  public function __construct()
  {

  }
  public function __construct2(int $id, string $name, string $surename, string $email, string $password)
  {
    $this->id = $id;
    $this->name = $name;
    $this->surename = $surename;
    $this->email = $email;
    $this->password = $password;
  }
  public function __construct3(string $name, string $surename, string $email, string $password)
  {
    $this->name = $name;
    $this->surename = $surename;
    $this->email = $email;
    $this->password = $password;
  }

  // Getters and Setters 
  public function getId()
  {
    return $this->id;
  }
  public function setId(int $id)
  {
    $this->id = $id;

    return $this;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setName(string $name)
  {
    $this->name = $name;

    return $this;
  }
  public function getSurename()
  {
    return $this->surename;
  }
  public function setSurename(string $surename)
  {
    $this->surename = $surename;

    return $this;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setEmail(string $email)
  {
    $this->email = $email;

    return $this;
  }
  public function getPassword()
  {
    return $this->password;
  }
  public function setPassword(string $password)
  {
    $this->password = $password;

    return $this;
  }


}

?>