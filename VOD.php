<?php


class VOD {
    public array $film = ["Avatar", "Le Seigneur des Anneaux", "Oblivion", "Van Helsing", "La ligne verte"];
    public float $tarif;
    public static int $nbrSuscribers;

    /**
     * @return array|string[]
     */
    public function getFilm(): array
    {
        return $this->film;
    }

    /**
     * @param array|string[] $film
     */
    public function setFilm(array $film): void
    {
        $this->film = $film;
    }

    /**
     * @return float
     */
    public function getTarif(): float
    {
        return $this->tarif;
    }

    /**
     * @param float $tarif
     */
    public function setTarif(float $tarif): void
    {
        $this->tarif = $tarif;
    }

    /**
     * @return int
     */
    public static function getNbrSuscribers(): int
    {
        return self::$nbrSuscribers;
    }

    /**
     * @param int $nbrSuscribers
     */
    public static function setNbrSuscribers(int $nbrSuscribers): void
    {
        self::$nbrSuscribers = $nbrSuscribers;
    }






}