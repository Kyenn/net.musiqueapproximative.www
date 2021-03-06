<?php

require_once dirname(__FILE__).'/../lib/postGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/postGeneratorHelper.class.php';

/**
 * post actions.
 *
 * @package    musique-approximative
 * @subpackage post
 * @author     Tristan Rivoallan <tristan@rivoallan.net>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class postActions extends autoPostActions
{
  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->getObject()->contributor_id = $this->getUser()->getGuardUser()->id;
    parent::processForm($request, $form);
  }

  protected function buildQuery()
  {
    $query = parent::buildQuery();

    // Sort by descending publication date by default
    if (!$this->getRequest()->getParameter('sort'))
    {
      $query->orderBy('publish_on DESC');
    }

    // Restrict posts list for non-admin users
    if (!$this->getUser()->hasCredential('EditOthersPosts'))
    {
      $query->andWhere('contributor_id = ?', $this->getUser()->getGuardUser()->id);
    }

    return $query;
  }
}
