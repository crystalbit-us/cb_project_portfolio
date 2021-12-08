<?php

namespace Drupal\cb_project_portfolio\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for cb_project_portfolio routes.
 */
class CbProjectPortfolioController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
