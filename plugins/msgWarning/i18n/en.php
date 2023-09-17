<?php
return array(
	'msgWarning.meta.name'			=> "Message Warning",
	'msgWarning.meta.title'			=> "System exception message warning",
	'msgWarning.meta.desc'			=> "When the system is in abnormal state, send a message warning to the administrator for timely processing and ensure the normal operation of the system.",

	'msgWarning.config.setDesc'		=> "<div class='info-alert info-alert-blue p-10 align-left can-select can-right-menu'>
	<li>This plugin is used for system exception message alerts. The specific configuration can be performed at <a href='./#admin/tools/warning' target='_blank'>Security Control-Message Alert</a>. </li>
	</div>",
	'msgWarning.config.sysNtc'		=> 'system message',
	'msgWarning.config.sysNtcDesc'	=> '<div class="desc mt-10 mb-10">This item detects the usage of administrator account, storage space, etc. If the prompt is abnormal, please handle it in time to ensure the normal operation of the system </div>',
	'msgWarning.config.setNtc'		=> 'Notification settings',
	'msgWarning.config.openNtc'		=> 'Open warning',
	'msgWarning.config.openNtcDesc'	=> 'This item detects CPU and memory usage. In case of any exception, it will be sent to the specified target together with the system exception message (if it exists)',
	'msgWarning.config.warnType'	=> 'warning type',
	'msgWarning.config.warnTypeCpu' => 'CPU usage',
	'msgWarning.config.warnTypeMem' => 'Memory usage',
	'msgWarning.config.useRatio' 	=> 'Use ratio',
	'msgWarning.config.useRatioDesc'=> 'The usage ratio exceeds m%',
	'msgWarning.config.useTime'		=> 'Duration',
	'msgWarning.config.useTimeDesc' => 'minutes, if the usage ratio exceeds m%, and the duration exceeds n minutes, a notification reminder will be triggered',
	'msgWarning.config.sendType' 	=> 'send method',
	'msgWarning.config.dingTalk' 	=> 'DingTalk',
	'msgWarning.config.weChat' 		=> 'Enterprise WeChat',
	'msgWarning.config.email' 		=> 'mail',
	'msgWarning.config.target' 		=> 'send target',
	'msgWarning.config.targetDesc' 	=> "The selected target user must be bound with a valid specified sending method.",

	'msgWarning.main.tipsTitle' 	=> 'Running Warning',
	'msgWarning.main.msgSysOK' 		=> 'The system is normal!',
	'msgWarning.main.msgPwdErr' 	=> 'You are using the initial password, please change the password as soon as possible to ensure security;',
	'msgWarning.main.msgEmlErr' 	=> 'You have not yet bound your email address, please bind your email address as soon as possible in order to ensure normal functions such as notification or password retrieval;',
	'msgWarning.main.msgSysPathErr' => 'The server system path is abnormal(the root directory "%s" must have read permission, or enable the exec function);',
	'msgWarning.main.msgSysSizeErr' => 'The remaining space of the server system disk is insufficient (%s);',
	'msgWarning.main.msgDefPathErr' => 'The system <a href="%s" style="padding:0px;text-decoration:none;">default storage</a> is abnormal, please check the relevant configuration and read and write permissions;',
	'msgWarning.main.msgDefSizeErr' => 'The system <a href="%s" style="padding:0px;text-decoration:none;">default storage</a> space is insufficient (%s);',
	'msgWarning.main.setNow' 		=> 'set now',
	'msgWarning.main.msgSysErr' 	=> 'The server usage rate of %s continued to exceed %s (currently %s) in the past %s minutes. To avoid affecting the normal use of the system, please check and optimize the relevant configuration. ',
	'msgWarning.main.msgEmpty' 		=> 'Empty!',
	'msgWarning.main.msgFmtErr' 	=> 'Format error!',
	'msgWarning.main.ignoreTips'	=> 'No remind for now',

	'msgWarning.main.taskTitle' 	=> 'message warning',
	'msgWarning.main.taskDesc' 		=> 'System usage message warning, this task comes from the [Message Warning] plugin',
	'msgWarning.main.memory' 		=> 'memory',
	'msgWarning.main.ntcTitle' 		=> 'Server exception reminder',
);