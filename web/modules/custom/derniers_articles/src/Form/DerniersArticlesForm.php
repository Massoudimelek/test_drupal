<?php

namespace Drupal\derniers_articles\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the derniers articles entity edit forms.
 */
class DerniersArticlesForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {

    $entity = $this->getEntity();
    $result = $entity->save();
    $link = $entity->toLink($this->t('View'))->toRenderable();

    $message_arguments = ['%label' => $this->entity->label()];
    $logger_arguments = $message_arguments + ['link' => render($link)];

    if ($result == SAVED_NEW) {
      $this->messenger()->addStatus($this->t('New derniers articles %label has been created.', $message_arguments));
      $this->logger('derniers_articles')->notice('Created new derniers articles %label', $logger_arguments);
    }
    else {
      $this->messenger()->addStatus($this->t('The derniers articles %label has been updated.', $message_arguments));
      $this->logger('derniers_articles')->notice('Updated new derniers articles %label.', $logger_arguments);
    }

    $form_state->setRedirect('entity.derniers_articles.canonical', ['derniers_articles' => $entity->id()]);
  }

}
