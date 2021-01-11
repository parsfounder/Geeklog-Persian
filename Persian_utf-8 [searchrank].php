<?php

###############################################################################
# persian_utf-8.php
#
# This is the Persian language file for Geeklog searchrank plugin
# Special thanks to Mahdi Montazeri for his work on this project
#
# Copyright (C) 2018 geeklog.ir
# info AT mahdimontazeri DOT com
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
#
###############################################################################

$LANG_CHARSET = 'utf-8';

$LANG_ISO639_1 = 'fa';
$LANG_DIRECTION = 'rtl';

###############################################################################
# Array Format:
# $LANGXX[YY]:  $LANG - variable name
#               XX    - file id number
#               YY    - phrase id number
###############################################################################

###############################################################################
# USER PHRASES - These are file phrases used in end user scripts
###############################################################################

###############################################################################
# lib-common.php

global $LANG32, $LANG09;

$LANG_SEARCHRANK_1 = array(
    'plugin_name' => 'جستجو رتبه بندی کلمه',
    'title' => 'بیشتر جستجو شده',
    'noresults' => $LANG09[70],
    'clear_link' => 'پاکسازی لاگ جستجو',
    'conf_link' => 'ویرایش تنظیمات',
    'viewlog_link' => 'دیدن لاگ جستجو',
    'clear_confirm' => 'واقعا می خواهید لاگ جستجو را پاک کنید؟',
    'clear_msg' => 'لاگ جستجو پاک شده',
    'entries' => 'کل: %s ورودی',
    'queries' => 'پرس و جو ها',
    'hits' => 'بازدید',
    'back' => 'بازگردید',
    'prev' => 'صفحه قبلی',
    'next' => 'صفحه بعدی',
    'info' => 'اطلاعات',
    'admin' => 'به صفحه مدیریت افزونه جستجو رتبه بندی کلمه خوش آمدید.',
    'info_main' => 'در زیر گزینه های پیکربندی که برای این افزونه وجود دارند.',
    'info_log' => 'در زیر می توانید پرس و جو های جستجو که تا کنون ضبط شده اند را ببینید. از دکمه های پایین این صفحه برای هدایت از طریق لاگ استفاده کنید.',
    'stats_headline' => 'ده پرس و جو برتر جستجو',
    'stats_no_hits' => 'به نظر می رسد هیچکس تا به حال برای چیزی جستجو نکرده است.'
);

// Messages for the plugin upgrade
$PLG_searchrank_MESSAGE3002 = $LANG32[9]; // "requires a newer version of Geeklog"


// Localization of the Admin Configuration UI
$LANG_configsections['searchrank'] = array(
    'label' => 'جستجو رتبه بندی کلمه',
    'title' => 'پیکربندی جستجو رتبه بندی کلمه'
);

$LANG_confignames['searchrank'] = array(
    'showstats' => 'نمایش ده پرس و جو برتر جستجو در آمار سایت',
    'showblock' => 'نمایش بلوک جستجو رتبه بندی کلمه',
    'maxresults' => 'تعداد ورودی ها در بلوک',
    'isleftblock' => 'نمایش بلوک در چپ',
    'ttl' => 'روز ها برای نگهداری لاگ ورودی ها',
    'itemsperpage' => 'موارد هر صفحه در نمایشگر لاگ',
    'blockorder' => 'ترتیب بلوک',
    'rootonly' => 'فقط نمایش بلوک به کاربران گروه ریشه'
);

$LANG_configsubgroups['searchrank'] = array(
    'sg_main' => 'تنظیمات اصلی'
);

$LANG_tab['searchrank'] = array(
    'tab_main' => 'تنظیمات اصلی جستجو رتبه بندی کلمه'
);

$LANG_fs['searchrank'] = array(
    'fs_main' => 'تنظیمات اصلی جستجو رتبه بندی کلمه'
);

$LANG_configselects['searchrank'] = array(
    0 => array('True' => 1, 'False' => 0),
    1 => array('True' => true, 'False' => false)
);

?>
