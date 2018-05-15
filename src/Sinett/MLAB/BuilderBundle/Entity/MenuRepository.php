<?php
/*******************************************************************************************************************************
@copyright Copyright (c) 2013-2016, Norwegian Defence Research Establishment (FFI) - All Rights Reserved
@license Proprietary and confidential
@author Arild Bergh/Sinett 3.0 programme (firstname.lastname@ffi.no)

Unauthorized copying of this file, via any medium is strictly prohibited

For the full copyright and license information, please view the LICENSE_MLAB file that was distributed with this source code.
*******************************************************************************************************************************/

namespace Sinett\MLAB\BuilderBundle\Entity;

use Doctrine\ORM\EntityRepository;


/**
 * MenuRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MenuRepository extends EntityRepository
{
    
	/**
	 * Builds a query based on the users roles and groups + current URL and returns all the menus they should see 
	 * 
	 * @param unknown $user: Current user, use role and groups from this to determine what the can see
	 * @param unknown $url: Current URL used to filter against
	 * @return array of menu items
	 */
	public function findMenuItems($user, $current_url, $role_hierarchy) {
		$roles = $menus = array();

//roles can contain roles that contain roles, pick up top level first, then loop through to get rest
		$user_role = $user->getRoles()[0];
		$roles[] = $user_role;
		$roles = array_merge($roles, $role_hierarchy[$user_role]);
		
//this loop picks up all sub-roles that a role covers 
		foreach ($role_hierarchy[$user_role] as $sub_role) {
			if (isset($role_hierarchy[$sub_role])) {
				$roles = array_merge($roles, $role_hierarchy[$sub_role]);
			}
		}
		
//store roles as a CSV so we can use it in an IN statement
		$filter_roles = implode(",", $roles);

//the URLs in Symfony usually have the action last and parameters (such as ID to lookup etc) in the middle.
//Therefore we need to take the current URL and replace all but first and last element 
		$url_elements = explode("/", $current_url);
		if (empty($url_elements[0])) {
			array_shift($url_elements);
		}
		if (empty($url_elements[sizeof($url_elements) - 1])) {
			array_pop($url_elements);
		}
		
		$current_url = array_shift($url_elements) . "-" . array_pop($url_elements);
		if($current_url == "-") {
			$current_url = "";
		}

		$sql = "SELECT m FROM SinettMLABBuilderBundle:Menu AS m
				WHERE m.parentId = 0
				AND ((COALESCE(m.filterUrl, '') = '') OR ('{$current_url}' <> '' AND COALESCE(m.filterUrl, '') <> '' AND m.filterUrl LIKE '%{$current_url}%'))
				AND ((COALESCE(m.filterRole, '') = '') OR m.filterRole IN('{$filter_roles}'))
				ORDER BY m.orderBy";
		
		$top_menus = $this->getEntityManager()->createQuery($sql)->getArrayResult();

		foreach ($top_menus as $menu_item) {
			$menu_item["help"] = htmlspecialchars($menu_item["help"]);
				
			$sql = "SELECT m FROM SinettMLABBuilderBundle:Menu AS m
					WHERE m.parentId = {$menu_item["id"]}
					AND ((COALESCE(m.filterUrl, '') = '') OR ('{$current_url}' <> '' AND COALESCE(m.filterUrl, '') <> '' AND m.filterUrl LIKE '%{$current_url}%'))
					AND ((COALESCE(m.filterRole, '') = '') OR m.filterRole IN('{$filter_roles}'))
					ORDER BY m.orderBy";
			
			$sub_menus = $this->getEntityManager()->createQuery($sql)->getArrayResult();
				
			$menu_item["children"] = array();
			
			foreach ($sub_menus as $sub_row) {
				$menu_subitem = (array) $sub_row;
				$menu_subitem["help"] = htmlspecialchars($menu_subitem["help"]);
				$menu_item["children"][] = $menu_subitem;
			}
				
			$menus[] = $menu_item;
				
		}
		
		return $menus;
			
	}

	/**
	 * Returns all items without filtering by access
	 * @return unknown
	 */
	public function findMenuItemsRaw() {
	
		$menus = array();
	
		$sql = "SELECT m FROM SinettMLABBuilderBundle:Menu AS m
				WHERE m.parentId = 0
				ORDER BY m.orderBy";
	
		$menus = $this->getEntityManager()->createQuery($sql)->getArrayResult();
	
		foreach ($menus as $id => $menu_item) {

			$sql = "SELECT m FROM SinettMLABBuilderBundle:Menu AS m
					WHERE m.parentId = {$menu_item["id"]}
					ORDER BY m.orderBy";
				
			$menus[$id]["children"] = $this->getEntityManager()->createQuery($sql)->getArrayResult();
		}	
		
		return $menus;
				
	}
	
	
}