<?php

class Movie extends Content
{
  // Attributes
  private $sitesToWatch;
  private $linksToSites;
  private $franchise;

  // Constructors
  public function __construct()
  {

  }
  public function __construct2(int $id, string $name, string $argument, string $coverPath, array $whereLink, array $platforms, array $sitesToWatch, array $linksToSites, string $franchise)
  {
    parent::__construct2($id, $name, $argument, $coverPath, $whereLink, $platforms);

    $this->sitesToWatch = $sitesToWatch;
    $this->linksToSites = $linksToSites;
    $this->franchise = $franchise;
  }
  public function __construct3(string $name, string $argument, string $coverPath, array $whereLink, array $platforms, array $sitesToWatch, array $linksToSites, string $franchise)
  {
    parent::__construct3($name, $argument, $coverPath, $whereLink, $platforms);

    $this->sitesToBuy = $sitesToWatch;
    $this->linksToSites = $linksToSites;
    $this->franchise = $franchise;
  }
  public function __construct4(string $name, string $argument, string $coverPath, array $whereLink, array $platforms, array $sitesToWatch, array $linksToSites)
  {
    parent::__construct3($name, $argument, $coverPath, $whereLink, $platforms);

    $this->sitesToBuy = $sitesToWatch;
    $this->linksToSites = $linksToSites;
    $this->franchise = null;
  }

  // Getters and Setters
  public function getSitesToWatch()
  {
    return $this->sitesToWatch;
  }
  public function setSitesToWatch($sitesToWatch)
  {
    $this->sitesToWatch = $sitesToWatch;

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
  public function getFranchise()
  {
    return $this->franchise;
  }
  public function setFranchise($franchise)
  {
    $this->franchise = $franchise;

    return $this;
  }
}

?>