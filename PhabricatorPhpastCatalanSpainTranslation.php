<?php

final class PhabricatorPhpastCatalanSpainTranslation
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca_ES';
  }

  protected function getTranslations() {
    return array(
      'PHPAST' => 'PHPAST',
      'Node %d: %s' => 'Node %s: %s',
      'Generate XHP AST' => 'Genera XHP AST',
      'Token %d: %s' => 'Token %s: %s',
      'XHPAST View' => 'Vista XHPAST',
      'Parse' => 'Parseja',
      'No such AST!' => 'Cap AST!',
      'Visual PHP Parser' => 'Parser PHP visual',
    );
  }

}
