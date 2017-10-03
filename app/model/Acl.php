<?php
namespace App\Model;

use Nette\Security\Permission;
/**
 * Description of Acl
 *
 * @author Michal Kašparec
 */
class Acl extends Permission {
	
	const ACL_TABLE = 'users_acl';
  const PRIVILEGES_TABLE = 'users_privileges';
  const RESOURCES_TABLE = 'users_resources';
  const ROLES_TABLE = 'users_roles';
	
	/** @var Nette\Database\Context */
	private $database;
	
	/**
	 * 
	 * @param \Nette\Database\Context $database
	 */
  public function __construct(\Nette\Database\Context $database) {
		$this->database = $database;

    $roles = $this->getRoles();
    foreach ($roles as $role)
      $this->addRole ($role['name'], $role['parent_key']);

    foreach ($this->getResources() as $resource)
      $this->addResource ($resource['name'], $resource['parent_key']);

    foreach ($this->getRulees() as $rule)
      $this->{$rule->access ? 'allow' : 'deny'}($rule->role, $rule->resource, $rule->privilege);
  }
	
	
	public function getParentRole($parent_id, $parent_key, &$roles) {
		$sql = $this->database->table(self::ROLES_TABLE)->where('users_roles_id', $parent_id);
    $rows = $sql;
    if($sql->count('*')) {
      foreach ($rows as $row) {
        $roles[] = array('name' => $row->name, 'parent_key' => $parent_key);
        $this->getParentRole($row->id, $row->name, $roles);
      }
    }
  }
  /**
    * Return all roles hierarchically ordered
    *
    * @return  array
  */
  public function getRoles() {
    $roles = array();
    $this->getParentRole(NULL, NULL, $roles);
    return $roles;
  }

  /**
    * Put in to array parents of specific resource
    *
    * @param integer ID of parent resource
    * @param string Key name of parent resource
    * @param array Array of all resource
  */
  public function getParentResource($parent_id, $parent_key, &$resources) {
		$sql = $this->database->table(self::RESOURCES_TABLE)->where('users_resources_id', $parent_id);
    $rows = $sql;
    if ($sql->count('*')) {
      foreach ($rows as $row) {
        $resources[] = array('name' => $row->name, 'parent_key' => $parent_key);
        $this->getParentResource($row->id, $row->name, $resources);
      }
    }
  }
  /**
    * Return all resources hierarchically ordered
    *
    * @return  array
  */
  public function getResources() {
    $resources = array();
    $this->getParentResource(NULL, NULL, $resources);
    return $resources;
  }

  /**
    * Return all rules of permissions
    *
    * @return  object
  */
  public function getRulees() {
		$sql = $this->database->table(self::ACL_TABLE)->select(self::ACL_TABLE.'.allow AS access, users_roles.name AS role,users_resources.name AS resource, users_privileges.name AS privilege')->order(self::ACL_TABLE.'.id ASC');
    return $sql->fetchAll();
  }
}
