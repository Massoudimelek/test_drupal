<?php

namespace Drupal\derniers_articles;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a derniers articles entity type.
 */
interface DerniersArticlesInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

  /**
   * Gets the derniers articles title.
   *
   * @return string
   *   Title of the derniers articles.
   */
  public function getTitle();

  /**
   * Sets the derniers articles title.
   *
   * @param string $title
   *   The derniers articles title.
   *
   * @return \Drupal\derniers_articles\DerniersArticlesInterface
   *   The called derniers articles entity.
   */
  public function setTitle($title);

  /**
   * Gets the derniers articles creation timestamp.
   *
   * @return int
   *   Creation timestamp of the derniers articles.
   */
  public function getCreatedTime();

  /**
   * Sets the derniers articles creation timestamp.
   *
   * @param int $timestamp
   *   The derniers articles creation timestamp.
   *
   * @return \Drupal\derniers_articles\DerniersArticlesInterface
   *   The called derniers articles entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the derniers articles status.
   *
   * @return bool
   *   TRUE if the derniers articles is enabled, FALSE otherwise.
   */
  public function isEnabled();

  /**
   * Sets the derniers articles status.
   *
   * @param bool $status
   *   TRUE to enable this derniers articles, FALSE to disable.
   *
   * @return \Drupal\derniers_articles\DerniersArticlesInterface
   *   The called derniers articles entity.
   */
  public function setStatus($status);

}
