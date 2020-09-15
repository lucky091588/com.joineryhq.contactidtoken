<?php

require_once 'contactidtoken.civix.php';
// phpcs:disable
use CRM_Contactidtoken_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function contactidtoken_civicrm_config(&$config) {
  _contactidtoken_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function contactidtoken_civicrm_xmlMenu(&$files) {
  _contactidtoken_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function contactidtoken_civicrm_install() {
  _contactidtoken_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function contactidtoken_civicrm_postInstall() {
  _contactidtoken_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function contactidtoken_civicrm_uninstall() {
  _contactidtoken_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function contactidtoken_civicrm_enable() {
  _contactidtoken_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function contactidtoken_civicrm_disable() {
  _contactidtoken_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function contactidtoken_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _contactidtoken_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function contactidtoken_civicrm_managed(&$entities) {
  _contactidtoken_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function contactidtoken_civicrm_caseTypes(&$caseTypes) {
  _contactidtoken_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function contactidtoken_civicrm_angularModules(&$angularModules) {
  _contactidtoken_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function contactidtoken_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _contactidtoken_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function contactidtoken_civicrm_entityTypes(&$entityTypes) {
  _contactidtoken_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_thems().
 */
function contactidtoken_civicrm_themes(&$themes) {
  _contactidtoken_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function contactidtoken_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function contactidtoken_civicrm_navigationMenu(&$menu) {
//  _contactidtoken_civix_insert_navigation_menu($menu, 'Mailings', array(
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ));
//  _contactidtoken_civix_navigationMenu($menu);
//}

/**
 * Implements hook_civicrm_tokens().
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_tokens
 */
function contactidtoken_civicrm_tokens(&$tokens) {
  $tokens['contactid'] = [
    'contactid.nameid' => 'Contact Name and ID',
    'contactid.used' => 'All tokens used',
  ];
}

/**
 * Implements hook_civicrm__tokenValues().
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_tokenValues
 */
function contactidtoken_civicrm_tokenValues(&$values, $cids, $job = null, $tokens = [], $context = null) {
  if(isset($tokens['contactid'])) {
    $tokenUsed = '';
    foreach ($cids as $cid) {
      $contactDetails = civicrm_api3('Contact', 'get', [
        'sequential' => 1,
        'id' => $cid,
      ]);

      if (in_array('display_name', $tokens['contact'])) {
        $values[$cid]['display_name'] = "Michael Jackson";
      }

      $values[$cid]['contactid.nameid'] = $contactDetails['values'][0]['last_name'] . '+' . $cid;

      foreach ($tokens as $token => $val) {
        foreach ($val as $v) {
          if ($token == 'contactid') {
            if ($v != 'used') {
              $tokenUsed .= ucfirst($token) . ': Contact Name and ID, ';
            }
          } else {
            $tokenUsed .= ucfirst($token) . ': ' . ucwords(str_replace('_', ' ', $v)) . ', ';
          }
        }
      }

      $values[$cid]['contactid.used'] = rtrim($tokenUsed, ', ');
    }
  }
}
