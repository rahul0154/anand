{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
* ("License"); You may not use this file except in compliance with the License
* The Original Code is:  vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
* Contributor(s): YetiForce Sp. z o.o
********************************************************************************/
-->*}
{strip}
	<!-- tpl-Base-Footer -->
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<input class="tpl-Footer d-none noprint" type="hidden" id="activityReminder" value="{$ACTIVITY_REMINDER}"/>
	
	{* javascript files *}
	{include file=\App\Layout::getTemplatePath('JSResources.tpl')}
	{if \App\Debuger::isDebugBar()}
		{\App\Debuger::getDebugBar()->getJavascriptRenderer()->render()}
	{/if}
	</body>
	</html>
	<!-- /tpl-Base-Footer -->
{/strip}
