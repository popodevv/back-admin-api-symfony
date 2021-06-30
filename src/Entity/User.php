<?php

namespace App\Entity;


use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\CompanyFilter;



/**
 * @ApiResource(
 *     normalizationContext={"groups"={"user:read"}},
 *     denormalizationContext={"groups"={"user:write"}}
 * )
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * 
 * @ApiResource(attributes={"pagination_enabled"=false})
 * 
 * @ApiFilter(SearchFilter::class, properties={"email":"excat","firstname": "exact", "name":"exact", "company":"exact"})
 *
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups({"user:read", "distri:write", "price:write"})
     */
    public $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     * @Groups({"user:write", "user:read"})
     */ 
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     * @Groups({"user:write", "user:read"})
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     * @Groups({"user:write", "user:read"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=false)
     * @Groups({"user:write", "user:read"})
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=255, nullable=false)
     * @Groups({"user:write", "user:read"})
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="address1", type="string", length=255, nullable=false)
     * @Groups({"user:write", "user:read"})
     */
    private $address1;

    /**
     * @var string
     *
     * @ORM\Column(name="address2", type="string", length=255, nullable=false)
     * @Groups({"user:write", "user:read"})
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="postal", type="string", length=10, nullable=false)
     * @Groups({"user:write", "user:read"})
     */
    private $postal;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=false)
     * @Groups({"user:write", "user:read"})
     */
    private $city;

    /**
     * @var int
     *
     * @ORM\Column(name="demo", type="integer", nullable=false)
     * @Groups({"user:write", "user:read"})
     */
    private $demo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecreation", type="date", nullable=false)
     * @Groups({"user:write", "user:read"})
     */
    private $datecreation;

    /**
     * @var int
     *
     * @ORM\Column(name="adel", type="integer", nullable=false)
     * @Groups({"user:write", "user:read"})
     */
    private $adel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subdomain", type="string", length=255, nullable=true)
     * @Groups({"user:write", "user:read"})
     */
    private $subdomain;

    /**
     * @var int|null
     *
     * @ORM\Column(name="psshopid", type="integer", nullable=true)
     * @Groups({"user:write", "user:read"})
     */
    private $psshopid;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    public function setAddress1(string $address1): self
    {
        $this->address1 = $address1;

        return $this;
    }

    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    public function setAddress2(string $address2): self
    {
        $this->address2 = $address2;

        return $this;
    }

    public function getPostal(): ?string
    {
        return $this->postal;
    }

    public function setPostal(string $postal): self
    {
        $this->postal = $postal;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getDemo(): ?int
    {
        return $this->demo;
    }

    public function setDemo(int $demo): self
    {
        $this->demo = $demo;

        return $this;
    }

    public function getDatecreation(): ?\DateTimeInterface
    {
        return $this->datecreation;
    }

    public function setDatecreation(\DateTimeInterface $datecreation): self
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    public function getAdel(): ?int
    {
        return $this->adel;
    }

    public function setAdel(int $adel): self
    {
        $this->adel = $adel;

        return $this;
    }

    public function getSubdomain(): ?string
    {
        return $this->subdomain;
    }

    public function setSubdomain(?string $subdomain): self
    {
        $this->subdomain = $subdomain;

        return $this;
    }

    public function getPsshopid(): ?int
    {
        return $this->psshopid;
    }

    public function setPsshopid(?int $psshopid): self
    {
        $this->psshopid = $psshopid;

        return $this;
    }


}
