<?php
class Cryptocoin {
    private $name;
    private $symbol;
    private $priceUSD;
    private const ARS_USD = 198;

    /**
     * Constructor
     */
    public function __construct($name, $symbol, $priceUSD) {
        $this->name = $name;
        $this->symbol = $symbol;
        $this->priceUSD = $priceUSD;
    }

    /**
     * Getters
     */
    public function getName() {
        return $this->name;
    }

    public function getSymbol() {
        return $this->symbol;
    }

    public function getPriceUSD() {
        return $this->priceUSD;
    }

    public function getPriceARS() {
        return $this->priceUSD * self::ARS_USD;
    }

    /**
     * Setters
     */
    public function setName($name) {
        $this->name = $name;
    }

    public function setSymbol($symbol) {
        $this->symbol = $symbol;
    }

    public function setPriceUSD($priceUSD) {
        $this->priceUSD = $priceUSD;
    }

    /**
     * Functions 
     */
    public function newChange24h($change24h) {
        $price = $this->getPriceUSD();
        $price *= 1 + ($change24h / 100);
        $this->setPriceUSD($price);
    }

    public function buySellUSD($USD) {
        $price = 1 / $this->getPriceUSD();
        $amount = $USD * $price;
        return $amount;
    }

    /**
     * toString
     */
    public function __toString() {
        return $this->name . " (" . $this->symbol . ") - $" . number_format($this->priceUSD, '2', '.', ' ') . " USD - $" . number_format($this->getPriceARS(), '2', '.', ' ') . " ARS";
    }
}