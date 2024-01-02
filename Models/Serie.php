<?php

class Serie extends Content
{
  // Attributes
  private $sitesToWatch;
  private $linksToSites;
  private $seasons;

  // Constructors
  public function __construct()
  {

  }
  public function __construct2(int $id, string $name, string $argument, string $coverPath, array $whereLink, array $platforms, array $sitesToWatch, array $linksToSites, int $seasons)
  {
    parent::__construct2($id, $name, $argument, $coverPath, $whereLink, $platforms);

    $this->sitesToWatch = $sitesToWatch;
    $this->linksToSites = $linksToSites;
    $this->seasons = $seasons;
  }
  public function __construct3(string $name, string $argument, string $coverPath, array $whereLink, array $platforms, array $sitesToWatch, array $linksToSites, int $seasons)
  {
    parent::__construct3($name, $argument, $coverPath, $whereLink, $platforms);

    $this->sitesToBuy = $sitesToWatch;
    $this->linksToSites = $linksToSites;
    $this->seasons = $seasons;
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
  public function getSeasons()
  {
    return $this->seasons;
  }
  public function setSeasons($seasons)
  {
    $this->seasons = $seasons;

    return $this;
  }
}

?>