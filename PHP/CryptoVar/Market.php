<?php
class Market {
    private int $interval;
    private array $cryptocoins;
    private float $change24h = 0;
    private array $wallets;

    /**
     * Constructor
     */
    public function __construct($interval, $cryptocoins, $wallets) {
        $this->interval = $interval;
        $this->cryptocoins = $cryptocoins;
        $this->wallets = $wallets;
    }

    /**
     * Getters
     */
    public function getInterval() {
        return $this->interval;
    }

    public function getCryptocoins() {
        return $this->cryptocoins;
    }

    public function getChange24h() {
        return $this->change24h;
    }

    public function getwallets() {
        return $this->wallets;
    }

    /**
     * Setters
     */
    public function setInterval($interval) {
        $this->interval = $interval;
    }

    public function setCryptocoins($cryptocoins) {
        $this->cryptocoins = $cryptocoins;
    }

    public function setChange24h($change24h) {
        $this->change24h = $change24h;
    }

    public function setwallets($wallets) {
        $this->wallets = $wallets;
    }

    /**
     * Functions 
     */
    public function getString($interval) {
        return "Market: \n" .
        "\tInterval: " . $interval . " \n" .
        "\tChange 24h: " . $this->change24h . "% \n" .
        "\tCryptocoins: \n" . $this->eachCoin() . "\n" .
        "\t" . $this->wallets[0] . "\n\t" . $this->wallets[1] . "\n";
    }
    
    public function eachCoin() {
        $coinList = "";
        foreach ($this->cryptocoins as $coin) {
            $coinList = $coinList . "\t" . $coin->__toString() . " \n";
        }
        return $coinList;
    }

    /**
     * To String
     */
    public function __toString() {
        $fullString = "";
        for($i = 0; $i < $this->interval; $i++) {
            $change24h = rand(-900, 800) / 100;
            $this->setChange24h($change24h);
            foreach($this->cryptocoins as $cryptocoin) {
                $cryptocoin->newChange24h($this->change24h);
                if($cryptocoin->getSymbol() == $this->wallets[0]->getCoinSymbol()){
                    $this->wallets[0]->setCoin($cryptocoin);
                    if($change24h < 0 && rand(0, 1) == 1) {
                        $fullString = $fullString . "\nBought " . $cryptocoin->getSymbol() . ".\n";
                        $this->wallets[0]->buyCoin(rand(1, $this->wallets[0]->getMaxBuy()));
                    }
                } else {
                    $this->wallets[1]->setCoin($cryptocoin);
                    if($change24h < 0 && rand(0, 1) == 1) {
                        $fullString = $fullString . "\nBought " . $cryptocoin->getSymbol() . ".\n";
                        $this->wallets[1]->buyCoin(rand(1, $this->wallets[1]->getMaxBuy()));
                    }
                }
            }
            
            $fullString = $fullString . $this->getString($i+1);
        }
        return $fullString;
    }
}