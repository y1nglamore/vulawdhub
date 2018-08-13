<?php
$config->dev->group['my']             = 'my';
$config->dev->group['todo']           = 'my';
$config->dev->group['product']        = 'product';
$config->dev->group['story']          = 'product';
$config->dev->group['storyspec']      = 'product';
$config->dev->group['storystage']     = 'product';
$config->dev->group['branch']         = 'product';
$config->dev->group['productplan']    = 'product';
$config->dev->group['release']        = 'product';
$config->dev->group['project']        = 'project';
$config->dev->group['projectproduct'] = 'project';
$config->dev->group['projectstory']   = 'project';
$config->dev->group['task']           = 'project';
$config->dev->group['taskestimate']   = 'project';
$config->dev->group['team']           = 'project';
$config->dev->group['build']          = 'project';
$config->dev->group['burn']           = 'project';
$config->dev->group['bug']            = 'qa';
$config->dev->group['case']           = 'qa';
$config->dev->group['testcase']       = 'qa';
$config->dev->group['casestep']       = 'qa';
$config->dev->group['testtask']       = 'qa';
$config->dev->group['testreport']     = 'qa';
$config->dev->group['testsuite']      = 'qa';
$config->dev->group['testresult']     = 'qa';
$config->dev->group['testrun']        = 'qa';
$config->dev->group['suitecase']      = 'qa';
$config->dev->group['doc']            = 'doc';
$config->dev->group['doccontent']     = 'doc';
$config->dev->group['doclib']         = 'doc';
$config->dev->group['report']         = 'report';
$config->dev->group['company']        = 'company';
$config->dev->group['dept']           = 'company';
$config->dev->group['group']          = 'company';
$config->dev->group['grouppriv']      = 'company';
$config->dev->group['user']           = 'company';
$config->dev->group['usercontact']    = 'company';
$config->dev->group['usergroup']      = 'company';
$config->dev->group['userquery']      = 'company';
$config->dev->group['usertpl']        = 'company';
$config->dev->group['admin']          = 'admin';
$config->dev->group['extension']      = 'admin';
$config->dev->group['lang']           = 'admin';
$config->dev->group['convert']        = 'admin';
$config->dev->group['action']         = 'admin';
$config->dev->group['history']        = 'admin';
$config->dev->group['mail']           = 'admin';
$config->dev->group['backup']         = 'admin';
$config->dev->group['cron']           = 'admin';
$config->dev->group['dev']            = 'admin';

$config->dev->tableMap['storyspec']      = 'story';
$config->dev->tableMap['storystage']     = 'story';
$config->dev->tableMap['burn']           = 'task';
$config->dev->tableMap['projectproduct'] = 'project';
$config->dev->tableMap['projectstory']   = 'story';
$config->dev->tableMap['taskestimate']   = 'task';
$config->dev->tableMap['team']           = 'project';
$config->dev->tableMap['case']           = 'testcase';
$config->dev->tableMap['casestep']       = 'testcase';
$config->dev->tableMap['testresult']     = 'testtask';
$config->dev->tableMap['testrun']        = 'testtask';
$config->dev->tableMap['doccontent']     = 'doc';
$config->dev->tableMap['doclib']         = 'doc';
$config->dev->tableMap['grouppriv']      = 'group';
$config->dev->tableMap['usercontact']    = 'user-contacts';
$config->dev->tableMap['usergroup']      = 'user';
$config->dev->tableMap['userquery']      = 'search';
$config->dev->tableMap['usertpl']        = 'user-tpl';
$config->dev->tableMap['history']        = 'action-history';
$config->dev->tableMap['lang']           = 'custom';
$config->dev->tableMap['config']         = 'custom';
$config->dev->tableMap['mailqueue']      = 'mail';
$config->dev->tableMap['module']         = 'tree';
$config->dev->tableMap['suitecase']      = 'testcase';