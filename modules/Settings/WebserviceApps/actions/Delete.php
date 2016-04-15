<?php

/**
 * Delete Application
 * @package YetiForce.Action
 * @license licenses/License.html
 * @author Tomasz Kur <t.kur@yetiforce.com>
 */
class Settings_WebserviceApps_Delete_Action extends Settings_Vtiger_Index_Action
{
	function process(Vtiger_Request $request)
	{
		$db = PearDatabase::getInstance();
		$id = $request->get('id');
		$db->delete('w_yf_servers', 'id = ?', [$id]);
	}
}
