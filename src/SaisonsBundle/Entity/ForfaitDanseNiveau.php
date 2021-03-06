<?php

namespace SaisonsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ForfaitDanseNiveau
 *
 * @ORM\Table(name="forfait_danse_niveau")
 * @ORM\Entity(repositoryClass="SaisonsBundle\Repository\ForfaitDanseNiveauRepository")
 */
class ForfaitDanseNiveau
{   
	/**
     * @var \Danse
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Danse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDanse", referencedColumnName="id")
     * })
     */
    private $idDanse;

    /**
     * @var \Forfait
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Forfait")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idForfait", referencedColumnName="id")
     * })
     */
    private $idForfait;

    /**
     * @var \NiveauDanse
     *
     * @ORM\ManyToOne(targetEntity="NiveauDanse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idNiveau", referencedColumnName="id")
     * })
     */
    private $idNiveau;
	


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    

    /**
     * Set idDanse
     *
     * @param \SaisonsBundle\Entity\Danse $idDanse
     * @return ForfaitDanseNiveau
     */
    public function setIdDanse(\SaisonsBundle\Entity\Danse $idDanse)
    {
        $this->idDanse = $idDanse;

        return $this;
    }

    /**
     * Get idDanse
     *
     * @return \SaisonsBundle\Entity\Danse 
     */
    public function getIdDanse()
    {
        return $this->idDanse;
    }

    /**
     * Set idForfait
     *
     * @param \SaisonsBundle\Entity\Forfait $idForfait
     * @return ForfaitDanseNiveau
     */
    public function setIdForfait(\SaisonsBundle\Entity\Forfait $idForfait)
    {
        $this->idForfait = $idForfait;

        return $this;
    }

    /**
     * Get idForfait
     *
     * @return \SaisonsBundle\Entity\Forfait 
     */
    public function getIdForfait()
    {
        return $this->idForfait;
    }

    /**
     * Set idNiveau
     *
     * @param \SaisonsBundle\Entity\NiveauDanse $idNiveau
     * @return ForfaitDanseNiveau
     */
    public function setIdNiveau(\SaisonsBundle\Entity\NiveauDanse $idNiveau = null)
    {
        $this->idNiveau = $idNiveau;

        return $this;
    }

    /**
     * Get idNiveau
     *
     * @return \SaisonsBundle\Entity\NiveauDanse 
     */
    public function getIdNiveau()
    {
        return $this->idNiveau;
    }
}
