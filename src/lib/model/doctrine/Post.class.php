<?php

/**
 * Post
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    musique-approximative
 * @subpackage model
 * @author     Tristan Rivoallan <tristan@rivoallan.net>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
class Post extends BasePost
{
  public function getContributorDisplayName()
  {
    return $this->getSfGuardUser()->getDisplayName();
  }
}