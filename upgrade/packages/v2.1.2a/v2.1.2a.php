<?php

/**
 * ECSHOP v2.1.2a 升级程序
 * ============================================================================
 * 版权所有 2005-2009 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Date: 2009-12-14 17:22:19 +0800 (周一, 2009-12-14) $
 * $Id: v2.1.2a.php 16882 2009-12-14 09:22:19Z liubo $
 */

class up_v2_1_2a
{
    var $sql_files = array('data' => 'data.sql');

    var $auto_match = true;

    function __construct(){}
    function up_v2_1_2a(){}

    function update_database_optionally(){}
    function update_files(){}
}

?>