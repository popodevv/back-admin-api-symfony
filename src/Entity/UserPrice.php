<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserPriceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use App\Entity\User;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 *
 * @ORM\Table(name="user_price")
 * @ORM\Entity
 * 
 * 
 *  * @ApiResource(
 *     normalizationContext={"groups"={"price:read"}},
 *     denormalizationContext={"groups"={"price:write"}}
 * )
 * 
 *  *     subresourceOperations={
 *          "api_users_price_get_subresource"= {
 *              "method"="GET",
 *              "normalization_context"={"groups"={"getPriceForIndex"}}
 *          }
 *      }
 * 
 * 
 */
class UserPrice
{
     /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups({"price:read"})
     */
    private $id;

    /**
     * @var float|null
     *
     * @ORM\Column(name="coef_beads", type="float", precision=10, scale=0, nullable=true, options={"default"="2.8"})
     * @Groups({"price:write", "price:read"})
     */
    private $coefBeads = 2.8;

    /**
     * @var float|null
     *
     * @ORM\Column(name="coef_bracelet", type="float", precision=10, scale=0, nullable=true, options={"default"="2.5"})
     * @Groups({"price:write", "price:read"})
     */
    private $coefBracelet = 2.5;

    /**
     * @var float
     *
     * @ORM\Column(name="coef_components", type="float", precision=10, scale=0, nullable=false, options={"default"="2.8"})
     * @Groups({"price:write", "price:read"})
     */
    private $coefComponents = 2.8;

    /**
     * @var int
     *
     * @ORM\Column(name="display_price", type="integer", nullable=false, options={"default"="1"})
     * @Groups({"price:write", "price:read"})
     */
    private $displayPrice = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="display_price_by_model", type="integer", nullable=false)
     * @Groups({"price:write", "price:read"})
     */
    private $displayPriceByModel = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="price_model_1", type="float", precision=10, scale=0, nullable=false)
     * @Groups({"price:write", "price:read"})
     */
    private $priceModel1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="price_model_2", type="float", precision=10, scale=0, nullable=false)
     * @Groups({"price:write", "price:read"})
     */
    private $priceModel2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="price_model_3", type="float", precision=10, scale=0, nullable=false)
     * @Groups({"price:write", "price:read"})
     */
    private $priceModel3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="price_model_4", type="float", precision=10, scale=0, nullable=false)
     * @Groups({"price:write", "price:read"})
     */
    private $priceModel4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="price_model_5", type="float", precision=10, scale=0, nullable=false)
     * @Groups({"price:write", "price:read"})
     */
    private $priceModel5 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="price_model_6", type="float", precision=10, scale=0, nullable=false)
     * @Groups({"price:write", "price:read"})
     */
    private $priceModel6 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="price_model_10", type="float", precision=10, scale=0, nullable=false)
     * @Groups({"price:write", "price:read"})
     */
    private $priceModel10 = '0';

    /**
     *
     * @ORM\ManyToOne(targetEntity="User" )
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     * 
     * @Groups({"user:read", "user:write", "price:write", "price:read"})
     * @ApiSubresource
     * 
     */
    private $idUser;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getCoefBeads(): ?float
    {
        return $this->coefBeads;
    }

    public function setCoefBeads(?float $coefBeads): self
    {
        $this->coefBeads = $coefBeads;

        return $this;
    }

    public function getCoefBracelet(): ?float
    {
        return $this->coefBracelet;
    }

    public function setCoefBracelet(?float $coefBracelet): self
    {
        $this->coefBracelet = $coefBracelet;

        return $this;
    }

    public function getCoefComponents(): ?float
    {
        return $this->coefComponents;
    }

    public function setCoefComponents(float $coefComponents): self
    {
        $this->coefComponents = $coefComponents;

        return $this;
    }

    public function getDisplayPrice(): ?int
    {
        return $this->displayPrice;
    }

    public function setDisplayPrice(int $displayPrice): self
    {
        $this->displayPrice = $displayPrice;

        return $this;
    }

    public function getDisplayPriceByModel(): ?int
    {
        return $this->displayPriceByModel;
    }

    public function setDisplayPriceByModel(int $displayPriceByModel): self
    {
        $this->displayPriceByModel = $displayPriceByModel;

        return $this;
    }

    public function getPriceModel1(): ?float
    {
        return $this->priceModel1;
    }

    public function setPriceModel1(float $priceModel1): self
    {
        $this->priceModel1 = $priceModel1;

        return $this;
    }

    public function getPriceModel2(): ?float
    {
        return $this->priceModel2;
    }

    public function setPriceModel2(float $priceModel2): self
    {
        $this->priceModel2 = $priceModel2;

        return $this;
    }

    public function getPriceModel3(): ?float
    {
        return $this->priceModel3;
    }

    public function setPriceModel3(float $priceModel3): self
    {
        $this->priceModel3 = $priceModel3;

        return $this;
    }

    public function getPriceModel4(): ?float
    {
        return $this->priceModel4;
    }

    public function setPriceModel4(float $priceModel4): self
    {
        $this->priceModel4 = $priceModel4;

        return $this;
    }

    public function getPriceModel5(): ?float
    {
        return $this->priceModel5;
    }

    public function setPriceModel5(float $priceModel5): self
    {
        $this->priceModel5 = $priceModel5;

        return $this;
    }

    public function getPriceModel6(): ?float
    {
        return $this->priceModel6;
    }

    public function setPriceModel6(float $priceModel6): self
    {
        $this->priceModel6 = $priceModel6;

        return $this;
    }

    public function getPriceModel10(): ?float
    {
        return $this->priceModel10;
    }

    public function setPriceModel10(float $priceModel10): self
    {
        $this->priceModel10 = $priceModel10;

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
