<?php

/**
 * Configuration file.
 * This file is auto-generated.
 *
 * @package Config
 *
 * @copyright YetiForce Sp. z o.o
 * @license   YetiForce Public License 3.0 (licenses/LicenseEN.txt or yetiforce.com)
 */

namespace Config\Modules;

/**
 * Configuration Class.
 */
class OpenStreetMap
{
	/** Address URL to route API */
	public static $ADDRESS_TO_ROUTE = 'http://www.yournavigation.org/api/1.0/gosmore.php';

	/** Address URL to searching API */
	public static $ADDRESS_TO_SEARCH = 'https://nominatim.openstreetmap.org';

	/** Max number to update addresses */
	public static $CRON_MAX_UPDATED_ADDRESSES = 1000;

	/** Allow modules */
	public static $ALLOW_MODULES = ['Accounts', 'Contacts', 'Competition', 'Vendors', 'Partners', 'Leads'];

	/** List of fields to appear in POP-UP */
	public static $FIELDS_IN_POPUP = [
		'Accounts' => ['accountname', 'email1', 'phone'],
		'Leads' => ['company', 'firstname', 'lastname', 'email'],
		'Partners' => ['subject', 'email'],
		'Competition' => ['subject', 'email'],
		'Vendors' => ['vendorname', 'email', 'website'],
		'Contacts' => ['firstname', 'lastname', 'email', 'phone'],
	];

	/** Name of connector to get coordinates. Value - OpenStreetMap or Base */
	public static $COORDINATE_CONNECTOR = 'OpenStreetMap';

	/** Name of connector to get coordinates  Value - Yours or Base */
	public static $ROUTE_CONNECTOR = 'Yours';
}
