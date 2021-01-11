<?php

###############################################################################
# persian_utf-8.php
#
# This is the Persian language file for Geeklog faqman plugin
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

if (stripos($_SERVER['PHP_SELF'], basename(__FILE__)) !== false) {
    die('This file cannot be used on its own!');
}

$LANG_FAQ = array(
    'plugin'               => 'پرسشگان',
    'CATEGORY'             => 'دسته بندی',
    'QUESTION'             => 'پرسش',
    'ANSWER'               => 'پاسخ',
    'headerlabel'          => 'پرسشگان',
    'searchlabel'          => 'پرسشگان',
    'searchresults'        => 'نتایج جستجو مدیریت پرسشگان',
    'statslabel'           => 'کل پست های مدیریت پرسشگان',
    'no_cats'              => 'هیچ دسته بندی پرسشگان وجود ندارد.',
    'no_topics'            => 'هیچ موضوع پرسشگان در این دسته بندی وجود ندارد.',
    'admin'                => 'مدیریت افزونه',
    'admin_menu'           => 'مدیریت پرسشگان',
    'admin_menu_desc'      => 'دسته بندی ها و موضوعات پرسشگان را مدیریت می کند. <span style="color: red;">اگر یک دسته بندی را حذف کنید، همه موضوع مربوط به آن حذف خواهد شد.</span>',
    'admin_create_cat'     => 'ایجاد دسته بندی',
    'admin_create_topic'   => 'ایجاد موضوع',
    'admin_list_cats'      => 'فهرست دسته بندی ها',
    'admin_cat_editor'     => 'ویرایشگر دسته بندی پرسشگان',
    'admin_cat_id'         => 'شناسه',
    'admin_cat_name'       => 'نام',
    'admin_cat_desc'       => 'شرح',
    'admin_cat_num_topics' => 'تعداد موضوعات',
    'admin_list_topics'    => 'فهرست موضوعات',
    'admin_topic_editor'   => 'ویرایشگر موضوع پرسشگان',
    'admin_topic_id'       => 'شناسه',
    'admin_topic_name'     => 'نام',
    'admin_topic_question' => 'پرسش',
    'admin_topic_answer'   => 'پاسخ',
    'error'                => 'خطا',
    'error_page'           => 'خطا|پرسشگان',
    'error_1'              => 'شناسه دسته بندی که شما در تلاش برای ویرایش بودید یافت نشد.',
    'error_2'              => 'دسته بندی که ویرایش می کردید نتوانست ذخیره شود.',
    'error_3'              => 'شناسه موضوعی که شما در تلاش برای ویرایش بودید یافت نشد.',
    'error_4'              => 'موضوعی که ویرایش می کردید نتوانست ذخیره شود.',
    'error_5'              => 'یک دسته بندی معتبر را انتخاب نکردید.',
    'error_6'              => 'هیچ موضوع پرسشگان در این دسته بندی وجود ندارد.',
    'error_7'              => 'موضوع یافت نشد.',
    'message_1'            => ' دسته بندی که ویرایش می کردید با موفقیت ذخیره شد.',
    'message_2'            => 'دسته بندی با موفقیت حذف شد.',
    'message_3'            => 'موضوعی که ویرایش می کردید با موفقیت ذخیره شد.',
    'message_4'            => 'موضوع با موفقیت حذف شد.',
);

// Localization of the Admin Configuration UI
$LANG_configsections['faqman'] = array(
    'label' => 'مدیریت پرسشگان',
    'title' => 'پیکربندی مدیریت پرسشگان'
);

$LANG_confignames['faqman'] = array(
    'default_permissions' => 'مجوز های پیشفرض صفحه',
);

$LANG_configsubgroups['faqman'] = array(
    'sg_main' => 'تنظیمات اصلی'
);

$LANG_fs['faqman'] = array(
    'fs_main'        => 'تنظیمات اصلی مدیریت پرسشگان',
    'fs_permissions' => 'مجوز های پیشفرض',
);

// Note: entries 0, 1, 9, and 12 are the same as in $LANG_configselects['Core']
$LANG_configselects['faqman'] = array(
    0 => array('True' => 1, 'false' => 0),
    1 => array('True' => true, 'false' => FALSE),
    9 => array('Forward to page' => 'item', 'Display List' => 'list', 'Display Home' => 'home', 'Display Admin' => 'admin'),
    12 => array('No access' => 0, 'Read-Only' => 2, 'Read-Write' => 3),
);
