<?php

namespace ROGER\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Utilisateurs
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ROGER\UserBundle\Entity\UtilisateursRepository")
 */
class Utilisateurs extends BaseUser
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;
}
