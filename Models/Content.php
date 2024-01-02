<?php

class Content
{
  // Attributes 
  private $id;
  private $name;
  private $argument;
  private $coverPath;
  private $whereLink;
  private $platforms;

  // Constructors 
  public function __construct()
  {

  }
  public function __construct2(int $id, string $name, string $argument, string $coverPath, array $whereLink, array $platforms)
  {
    // Initialization
    $this->id = $id;
    $this->name = $name;
    $this->argument = $argument;
    $this->$coverPath = $coverPath;
    $this->whereLink = $whereLink;
    $this->platforms = $platforms;
  }
  public function __construct3(string $name, string $argument, string $coverPath, array $whereLink, array $platforms)
  {
    // Initialization
    $this->name = $name;
    $this->argument = $argument;
    $this->$coverPath = $coverPath;
    $this->whereLink = $whereLink;
    $this->platforms = $platforms;
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
  public function getArgument()
  {
    return $this->argument;
  }
  public function setArgument(string $argument)
  {
    $this->argument = $argument;

    return $this;
  }
  public function getCover()
  {
    return $this->coverPath;
  }
  public function setCover(string $coverPath)
  {
    $this->coverPath = $coverPath;

    return $this;
  }
  public function getWhereLink()
  {
    return $this->whereLink;
  }
  public function setWhereLink(array $whereLink)
  {
    $this->whereLink = $whereLink;

    return $this;
  }
  public function getPlatforms()
  {
    return $this->platforms;
  }
  public function setPlatforms(array $platforms)
  {
    $this->platforms = $platforms;

    return $this;
  }
}

?>