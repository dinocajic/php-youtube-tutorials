<?php
class Animal {
    const HAS_HEART = true;

    protected $dob;
    protected $kingdom = "Animalia";
    protected $phylum;
    protected $class;
    protected $order;
    protected $family;
    protected $genus;
    protected $species;
    protected $subspecies;

    /**
     * @return string
     */
    public function getDob(): string
    {
        return $this->dob;
    }

    /**
     * @param string $dob
     */
    public function setDob(string $dob): void
    {
        $this->dob = $dob;
    }

    /**
     * @return string
     */
    public function getKingdom(): string
    {
        return $this->kingdom;
    }

    /**
     * @return mixed
     */
    public function getPhylum()
    {
        return $this->phylum;
    }

    /**
     * @param mixed $phylum
     */
    public function setPhylum($phylum): void
    {
        $this->phylum = $phylum;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class): void
    {
        $this->class = $class;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     */
    public function setOrder($order): void
    {
        $this->order = $order;
    }

    /**
     * @return mixed
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * @param mixed $family
     */
    public function setFamily($family): void
    {
        $this->family = $family;
    }

    /**
     * @return mixed
     */
    public function getGenus()
    {
        return $this->genus;
    }

    /**
     * @param mixed $genus
     */
    public function setGenus($genus): void
    {
        $this->genus = $genus;
    }

    /**
     * @return mixed
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * @param mixed $species
     */
    public function setSpecies($species): void
    {
        $this->species = $species;
    }

    /**
     * @return mixed
     */
    public function getSubspecies()
    {
        return $this->subspecies;
    }

    /**
     * @param mixed $subspecies
     */
    public function setSubspecies($subspecies): void
    {
        $this->subspecies = $subspecies;
    }

    public function sleep(int $energy_level = 100)
    {
        if ($energy_level < 40) {
            echo "I'm sleeping";
        } else {
            echo "I don't want to sleep";
        }
    }
}