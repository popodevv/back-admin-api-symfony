<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use ApiPlatform\Core\Annotation\ApiProperty;

use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\CompanyFilter;

use ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterExtension;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterEagerLoadingExtension;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension;


use App\Entity\User;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 *
 * @ORM\Table(name="distributor", indexes={@ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 * 
 *     @ApiResource(
 *     normalizationContext={"groups"={"distri:read"}},
 *     denormalizationContext={"groups"={"distri:write"}}
 *     )
 * 
 *     subresourceOperations={
 *          "api_users_distributors_get_subresource"= {
 *              "method"="GET",
 *              "normalization_context"={"groups"={"getDistributorsForIndex"}}
 *          }
 *      }
 * 
 * @ApiFilter(SearchFilter::class, properties={"idUser":"excat","company":"exact"})
 * 
 */
class Distributor
{
    /**
     *
     * @ORM\Column(name="id_distributor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups({"distri:read"})
     * 
     */
    private $idDistributor;

    /**
     *
     * @ORM\Column(name="company", type="string", length=255, nullable=false)
     * @Groups({"distri:write", "distri:read"})
     */
    private $company;

    /**
     *
     * @ORM\Column(name="adress1", type="string", length=255, nullable=false)
     * @Groups({"distri:write", "distri:read"})
     */
   
    private $adress1;

    /**
     *
     * @ORM\Column(name="adress2", type="string", length=255, nullable=true)
     * @Groups({"distri:write", "distri:read"})
     */
    private $adress2;

    /**
     *
     * @ORM\Column(name="postal", type="string", length=255, nullable=false)
     * @Groups({"distri:write", "distri:read"})
     */
    private $postal;

    /**
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=false)
     * @Groups({"distri:write", "distri:read"})
     */
    private $city;

    /**
     *
     * @ORM\Column(name="facebook", type="string", length=255, nullable=true)
     * @Groups({"distri:write", "distri:read"})
     */
    private $facebook;

    /**
     *
     * @ORM\Column(name="website", type="string", length=255, nullable=true)
     * @Groups({"distri:write", "distri:read"})
     */
    private $website;

    /**
     *
     * @ORM\Column(name="phone", type="string", length=50, nullable=true)
     * @Groups({"distri:write", "distri:read"})
     */
    private $phone;

    /**
     *
     * @ORM\Column(name="gps_lat", type="float", precision=10, scale=0, nullable=false)
     * @Groups({"distri:write", "distri:read"})
     */
    private $gpsLat = '0';

    /**
     *
     * @ORM\Column(name="gps_long", type="float", precision=10, scale=0, nullable=false)
     * @Groups({"distri:write", "distri:read"})
     */
    private $gpsLong = '0';

    /**
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id", nullable=false)
     * })
     * @Groups({"user:read", "user:write", "distri:read", "distri:write"})
     * @ApiSubresource
     * 
     */
    private $idUser;


    public function getIdDistributor(): ?int
    {
        return $this->idDistributor;
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

    public function getAdress1(): ?string
    {
        return $this->adress1;
    }

    public function setAdress1(string $adress1): self
    {
        $this->adress1 = $adress1;

        return $this;
    }

    public function getAdress2(): ?string
    {
        return $this->adress2;
    }

    public function setAdress2(?string $adress2): self
    {
        $this->adress2 = $adress2;

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

    public function getFacebook(): ?string
    {
        return $this->facebook;
    }

    public function setFacebook(?string $facebook): self
    {
        $this->facebook = $facebook;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getGpsLat(): ?float
    {
        return $this->gpsLat;
    }

    public function setGpsLat(float $gpsLat): self
    {
        $this->gpsLat = $gpsLat;

        return $this;
    }

    public function getGpsLong(): ?float
    {
        return $this->gpsLong;
    }

    public function setGpsLong(float $gpsLong): self
    {
        $this->gpsLong = $gpsLong;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    public function setIdUser(?User $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }


}