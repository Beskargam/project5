<?php

class BackUser
{
    private $id;
    private $pseudo;
    private $rank;
    private $rank_id;
    private $password;

// CONSTRUCTOR
    public function __construct($value = [])
    {
        if (!empty($value)) {
            $this->hydrate($value);
        }

    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

// GETTERS
    public function id()
    {
        return $this->id;
    }

    public function pseudo()
    {
        return $this->pseudo;
    }

    public function rank()
    {
        return $this->rank;
    }

    public function rank_id()
    {
        return $this->rank_id;
    }

    public function password()
    {
        return $this->password;
    }

// SETTERS
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function setRank($rank)
    {
        $this->rank = $rank;
    }

    public function setRank_id($rank_id)
    {
        $this->rank_id = $rank_id;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}