<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Friends")
 */
class Friends
{
  /**
    * @ManyToOne(targetEntity="User")
   */
   private $d;

   private $FriendsWith

   private $SendFriendsRequest

   Private $ReceivFriendsRequest
}
