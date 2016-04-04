<?php

/**
 * Contains static methods for vsite update 7030.
 */
class update extends AbstractUpdate {

  /**
   * @inheritdoc
   */
  public static function Query($id = NULL) {
    $query = self::getBaseQuery();

    if ($id) {
      $query->propertyCondition('nid', $id, '>=');
    }

    return $query;
  }

  /**
   * @inheritdoc
   */
  public static function Iterator($entity) {
    self::assignRoles($entity, self::$nobelRoles, array('access content overview', 'administer files', 'administer comments'));
  }
}
