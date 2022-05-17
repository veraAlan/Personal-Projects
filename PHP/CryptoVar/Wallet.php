<?php
class Wallet {
    private $USD;
    private $ARS;
    private $coinSymbol;
    private $amount;
    private $coin;

    /**
     * Constructor
     * @param object $coin
     * @param float $amount
     */
    public function __construct($coin, $amount, $maxBuy) {
        $this->coin = $coin;
        $this->coinSymbol = $coin->getSymbol();
        $this->amount = $amount;
        $this->USD = $coin->getPriceUSD();
        $this->ARS = $coin->getPriceARS();
        $this->maxBuy = $maxBuy;
    }

    /**
     * Getters
     */
    public function getUSD() {
        return $this->USD;
    }

    public function getARS() {
        return $this->ARS;
    }

    public function getCoinSymbol() {
        return $this->coinSymbol;
    }

    public function getamount() {
        return $this->amount;
    }

    public function getCoin() {
        return $this->coin;
    }

    public function getMaxBuy() {
        return $this->maxBuy;
    }

    /**
     * Setters
     */
    public function setUSD($USD) {
        $this->USD = $USD;
    }

    public function setARS($ARS) {
        $this->ARS = $ARS;
    }

    public function setCoinSymbol($coinSymbol) {
        $this->coinSymbol = $coinSymbol;
    }

    public function setamount($amount) {
        $this->amount = $amount;
    }

    public function setCoin($coin) {
        $this->coin = $coin;
    }

    public function setMaxBuy($maxBuy) {
        $this->maxBuy = $maxBuy;
    }

    /**
     * Functions 
     */
    public function buyCoin($USD) {
        $this->setamount($this->getamount() + $this->coin->buySellUSD($USD));
    }

    public function sellCoin($USD) {
        $this->setamount($this->getamount() - $this->coin->buySellUSD($USD));
    }

    public function getCoinValue() {
        $coinValue = number_format($this->getamount() * $this->coin->getPriceUSD(), '2', '.', ' ');
        return $coinValue;
    }

    public function getCoinFloat() {
        $coinValue = $this->getamount() * $this->coin->getPriceUSD();
        return $coinValue;
    }

    public function getCoinValueARS() {
        $coinValue = number_format($this->getamount() * $this->coin->getPriceARS(), '2', '.', ' ');
        return $coinValue;
    }
    

    /**
     * __toString
     */
    public function __toString() {
        return "Wallet: " . $this->getamount() . " " . $this->getCoinSymbol() . " - $" . $this->getCoinValue() . " USD - $" . $this->getCoinValueARS() . " ARS\n";
    }
}