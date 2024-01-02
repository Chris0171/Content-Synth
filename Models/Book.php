<?php

class Book extends Content
{
  // Attributes
  private $sitesToBuy;
  private $linksToSites;

  // Constructors
  public function __construct()
  {

  }
  public function __construct2(int $id, string $name, string $argument, string $coverPath, array $whereLink, array $platforms, array $sitesToBuy, array $linksToSites)
  {
    parent::__construct2($id, $name, $argument, $coverPath, $whereLink, $platforms);

    $this->sitesToBuy = $sitesToBuy;
    $this->linksToSites = $linksToSites;
  }
  public function __construct3(string $name, string $argument, string $coverPath, array $whereLink, array $platforms, array $sitesToBuy, array $linksToSites)
  {
    parent::__construct3($name, $argument, $coverPath, $whereLink, $platforms);

    $this->sitesToBuy = $sitesToBuy;
    $this->linksToSites = $linksToSites;
  }
  
  // Getters and Setters
  public function getSitesToBuy()
  {
    return $this->sitesToBuy;
  }
  public function setSitesToBuy($sitesToBuy)
  {
    $this->sitesToBuy = $sitesToBuy;

    return $this;
  }
  public function getLinksToSites()
  {
    return $this->linksToSites;
  }
  public function setLinksToSites($linksToSites)
  {
    $this->linksToSites = $linksToSites;

    return $this;
  }
}

?>