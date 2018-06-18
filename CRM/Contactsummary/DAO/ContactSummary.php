<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2018
 *
 * Generated from org.civicrm.contactsummary/xml/schema/CRM/Contactsummary/ContactSummary.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:6d58c6fbc9c42404de125bb41ae95b14)
 */

/**
 * Database access object for the ContactSummary entity.
 */
class CRM_Contactsummary_DAO_ContactSummary extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_contact_summary';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = TRUE;

  /**
   * Unique ContactSummary ID
   *
   * @var int unsigned
   */
  public $id;

  /**
   * Name of this layout.
   *
   * @var string
   */
  public $label;

  /**
   * The type of contacts this layout applies to.
   *
   * @var string
   */
  public $contact_type;

  /**
   * The contacts subtypes this layout applies to.
   *
   * @var string
   */
  public $contact_sub_type;

  /**
   * Show layout to users belonging to these groups.
   *
   * @var string
   */
  public $groups;

  /**
   * @var int
   */
  public $weight;

  /**
   * Contains json encoded layout blocks.
   *
   * @var longtext
   */
  public $data;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_contact_summary';
    parent::__construct();
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => 'Unique ContactSummary ID',
          'required' => TRUE,
          'table_name' => 'civicrm_contact_summary',
          'entity' => 'ContactSummary',
          'bao' => 'CRM_Contactsummary_DAO_ContactSummary',
          'localizable' => 0,
        ],
        'label' => [
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Label'),
          'description' => 'Name of this layout.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_contact_summary',
          'entity' => 'ContactSummary',
          'bao' => 'CRM_Contactsummary_DAO_ContactSummary',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'contact_type' => [
          'name' => 'contact_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Contact Type'),
          'description' => 'The type of contacts this layout applies to.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_contact_summary',
          'entity' => 'ContactSummary',
          'bao' => 'CRM_Contactsummary_DAO_ContactSummary',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_SEPARATOR_BOOKEND,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_contact_type',
            'keyColumn' => 'name',
            'labelColumn' => 'label',
            'condition' => 'parent_id IS NULL',
          ]
        ],
        'contact_sub_type' => [
          'name' => 'contact_sub_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Contact Subtype'),
          'description' => 'The contacts subtypes this layout applies to.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_contact_summary',
          'entity' => 'ContactSummary',
          'bao' => 'CRM_Contactsummary_DAO_ContactSummary',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_SEPARATOR_BOOKEND,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_contact_type',
            'keyColumn' => 'name',
            'labelColumn' => 'label',
            'condition' => 'parent_id IS NOT NULL',
          ]
        ],
        'groups' => [
          'name' => 'groups',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Groups'),
          'description' => 'Show layout to users belonging to these groups.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_contact_summary',
          'entity' => 'ContactSummary',
          'bao' => 'CRM_Contactsummary_DAO_ContactSummary',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_SEPARATOR_BOOKEND,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_group',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          ]
        ],
        'weight' => [
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Order'),
          'table_name' => 'civicrm_contact_summary',
          'entity' => 'ContactSummary',
          'bao' => 'CRM_Contactsummary_DAO_ContactSummary',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'data' => [
          'name' => 'data',
          'type' => CRM_Utils_Type::T_LONGTEXT,
          'title' => ts('Data'),
          'description' => 'Contains json encoded layout blocks.',
          'table_name' => 'civicrm_contact_summary',
          'entity' => 'ContactSummary',
          'bao' => 'CRM_Contactsummary_DAO_ContactSummary',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_JSON,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'contact_summary', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'contact_summary', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
