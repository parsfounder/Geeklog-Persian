<?php

###############################################################################
# persian_utf-8.php
#
# This is the Persian language file for Geeklog faq plugin
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

$LANG_FAQ_COMMON = array(
    'FAQs' => 'پرسشگان ها',
    'FAQ' => 'پرسشگان',
    'no_new' => 'No recent new FAQs',
    'FAQ_cat_header' => $_CONF['site_name'] . ' پرسشگان',
    'Categories' => 'دسته بندی ها',
    'Question' => 'پرسش',
    'Hits' => 'بازدید',
    'Updated' => 'بروزرسانی شد',
    'Answer' => 'پاسخ',
    'no_autolink_faq' => '[FAQ ID "%s" does not exist or you do not have access to it]',
    'no_autolink_cat' => '[FAQ category "%s" does not exist or you do not have access to it]',
    'autolink_error' => '[error in "%s" FAQ link]'
);

/******************************************************************************
* for stats
******************************************************************************/
$LANG_FAQ_STATS = array(
    'stats_no_hits' => 'به نظر می رسد که هیچ پرسشگانی در این سایت وجود ندارد یا هیچکس همواره روی یکی کلیک نکرده است.',
    'stats_summary' => 'دسته بندی های/ورودی های پرسشگان (بازدید) در سیستم',
    'Question' => 'پرسش',
    'Hits' => 'بازدید',
    'headline' => 'ده پرسشگان برتر',
);

/******************************************************************************
* for the search
******************************************************************************/
$LANG_FAQ_SEARCH = array(
 'FAQ' => 'پرسشگان',
 'category' => 'دسته بندی',
 'results' => 'نتایج پرسشگان',
 'title' => 'پرسش',
 'date' => 'بروزرسانی شد',
 'author' => 'نویسنده',
 'category' => 'دسته بندی',
 'hits' => 'بازدید'
);

/******************************************************************************
* Messages for COM_showMessage the submission form
******************************************************************************/

$PLG_faq_MESSAGE1 = "شما در حال تلاش برای دسترسی به یک دسته بندی پرسشگان می باشید که به آن دسترسی ندارید یا آن وجود ندارد. این تلاش ضبط شده است.";
$PLG_faq_MESSAGE2 = "شما در حال تلاش برای دسترسی به یک ورودی پرسشگان می باشید که به آن دسترسی ندارید یا آن وجود ندارد. این تلاش ضبط شده است.";
$PLG_faq_MESSAGE3 = 'پرسشگان با موفقیت حذف شده است.';
$PLG_faq_MESSAGE4 = 'پرسشگان با موفقیت ذخیره شده است.';
$PLG_faq_MESSAGE5 = "شما در حال تلاش برای انجام یک اقدام روی یک ورودی پرسشگان می باشید که دسترسی ندارید یا آن وجود ندارد. این تلاش ضبط شده است.";
$PLG_faq_MESSAGE6 = 'ارتقا افزونه پرسشگان موفق بود.';
$PLG_faq_MESSAGE7 = 'ارتقا ناموفق افزونه پرسشگان.';
/******************************************************************************
* admin
******************************************************************************/
$LANG_FAQ_ADMIN = array(
    'FAQ_Cat' => 'دسته بندی پرسشگان',
    'FAQ_Entry' => 'ورودی پرسشگان',
    'FAQ Entries' => 'ورودی های پرسشگان',
    'Edit' => 'ویرایش',
    'FAQ Editor' => 'ویرایشگر پرسشگان',
    'Cat Editor' => 'ویرایشگر دسته بندی پرسشگان',
    'Access Denied MSG' => 'با عرض پوزش، شما به صفحه مدیریت وب سایت دسترسی ندارید. لطفا توجه داشته باشید که همه تلاش ها برای دسترسی به ویژگی های غیر مجاز ضبط شده اند.',
    'delete' => 'حذف',
    'save' => 'ذخیره',
    'cancel' => 'لغو',
    'show' => 'نمایش',
    'accessdenied' => "شما در حال تلاش برای دسترسی به یک مورد پرسشگان می باشید که حق آن را ندارید. این تلاش ضبط شده است لطفا <a href=\"{$_CONF['site_admin_url']}/plugins/faq/index.php\">به صفحه مدیریت پرسشگان بازگردید</a>",
    'title' => 'عنوان',
    'description' => 'شرح',
    'question' => 'پرسش',
    'answer' => 'پاسخ',
    'id' => 'شناسه',
    'hits' => 'بازدید',
    'changed' => 'بروزرسانی شد',
    'category' => 'دسته بندی',
    'all_cat' => 'همه دسته بندی ها',
    'date_will_update' => '<b>توجه:</b> اگر ذخیره کنید، تاریخ بروزرسانی خواهد شد!',
    'reset_date' => 'بروزرسانی تاریخ را به <i>در حال حاضر</i> تغییر داد.',
    'save_rights_error' => 'شما نمی توانید با مجوز هایی که ندارید ذخیره کنید.',
    'missing_fields_faq' => 'باید پرسش، پاسخ و یک دسته بندی برای هر ورودی پرسشگان عرضه کنید.',
    'missing_fields_cat' => 'باید عنوان و یک شرح برای هر دسته بندی پرسشگان عرضه کنید.',
    'delete_note' => 'توجه: حذف این دسته بندی همه پرسشگان های مرتبط با این دسته بندی را حذف می کند.',
    'FAQ Plugin' => 'افزونه پرسشگان',
    'faqman_import' => 'افزونه مدیریت پرسشگان را نصب کرده اید (که مشابه این افزونه نمی باشد). اما می توانید داده ها را از افزونه مدیریت پرسشگان وارد کنید.',
    'cat instructions' => 'برای ایجاد یک دسته بندی پرسشگان روی "ایجاد جدید" کلیک کنید. برای ایجاد ورودی های پرسشگان برای دسته بندی پرسشگان خود روی "ویرایشگر پرسشگان" کلیک کنید.',
    'import' => 'وارد كردن',
    'access' => 'دسترسی'
);

$LANG_FAQ_IMPORT = array(
    'header' => 'وارد کردن افزونه پرسشگان',
    'no_topics' => 'هیچ موضوع مدیریت پرسشگان برای وارد کردن وجود ندارد.',
    'no_faqman' => 'افزونه مدیریت پرسشگان نصب نشده است.',
    'not_root' => 'به منظور وارد کردن موضوعات مدیریت پرسشگان باید یک عضو گروه ریشه باشید.',
    'unknown' => 'اقدام وارد کردن ناشناخته: ',
    'imported' => '%d پرسشگان در %d دسته بندی وارد شد'
);

?>
