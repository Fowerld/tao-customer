<?php

namespace App\Entity;

/**
 * Class Entity
 *
 * @Entity
 * @Table(name="customer")
 */
class Entity
{
    /**
     * @var string
     *
     * @Column(type="string")
     */
    protected $login;

    /**
     * @var string
     *
     * @Column(type="string")
     */
    protected $password;

    /**
     * @var string
     *
     * @Column(type="string")
     */
    protected $title;

    /**
     * @var string
     *
     * @Column(type="string")
     */
    protected $lastname;

    /**
     * @var string
     *
     * @Column(type="string")
     */
    protected $firstname;

    /**
     * @var string
     *
     * @Column(type="string")
     */
    protected $gender;

    /**
     * @var string
     *
     * @Column(type="string")
     */
    protected $email;

    /**
     * @var string
     *
     * @Column(type="string")
     */
    protected $picture;

    /**
     * @var string $address
     *
     * @Column(type="string")
     */
    protected $address;

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     *
     * @return Entity
     */
    public function setLogin(string $login): Entity
    {
        $this->login = $login;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return Entity
     */
    public function setPassword(string $password): Entity
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Entity
     */
    public function setTitle(string $title): Entity
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     *
     * @return Entity
     */
    public function setLastname(string $lastname): Entity
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     *
     * @return Entity
     */
    public function setFirstname(string $firstname): Entity
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     *
     * @return Entity
     */
    public function setGender(string $gender): Entity
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return Entity
     */
    public function setEmail(string $email): Entity
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getPicture(): string
    {
        return $this->picture;
    }

    /**
     * @param string $picture
     *
     * @return Entity
     */
    public function setPicture(string $picture): Entity
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     *
     * @return Entity
     */
    public function setAddress(string $address): Entity
    {
        $this->address = $address;

        return $this;
    }
}
