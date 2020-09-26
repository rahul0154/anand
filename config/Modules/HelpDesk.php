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
class HelpDesk
{
	/** Check if account exists */
	public static $CHECK_ACCOUNT_EXISTS = true;

	/** Check if service contracts exists */
	public static $CHECK_SERVICE_CONTRACTS_EXISTS = true;

	/** Show summary products and services */
	public static $SHOW_SUMMARY_PRODUCTS_SERVICES = true;

	/** Default record view: Value - LBL_RECORD_PREVIEW or LBL_RECORD_SUMMARY or LBL_RECORD_DETAILS */
	public static $DEFAULT_VIEW_RECORD = 'LBL_RECORD_PREVIEW';

	/** Check email opt-out */
	public static $CONTACTS_CHECK_EMAIL_OPTOUT = true;
}
