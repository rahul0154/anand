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

namespace Config\Components;

/**
 * Configuration Class.
 */
class Mail
{
	/**
	 * Recommended configuration
	 * Outlook = 2030
	 * Thunderbird = 8036
	 * GMAIL = 8036
	 */
	public static $MAILTO_LIMIT = 2030;

	/** List of of modules from which you can choose e-mail address in the mail. */
	public static $RC_COMPOSE_ADDRESS_MODULES = ['Accounts', 'Contacts', 'OSSEmployees', 'Leads', 'Vendors', 'Partners', 'Competition'];

	/** What status should be set when a new mail is received regarding a ticket, whose status is awaiting response. */
	public static $HELPDESK_NEXT_WAIT_FOR_RESPONSE_STATUS = 'Answered';

	/** What status should be set when a ticket is closed, but a new mail regarding the ticket is received. */
	public static $HELPDESK_OPENTICKET_STATUS = 'Open';

	/** Required acceptation before sending mails. */
	public static $MAILER_REQUIRED_ACCEPTATION_BEFORE_SENDING = false;
}
