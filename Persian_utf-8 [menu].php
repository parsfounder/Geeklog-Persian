<?php

###############################################################################
# persian_utf-8.php
#
# This is the Persian language file for Geeklog menu plugin
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

global $LANG32;

$LANG_MENU_1 = array(
    'plugin_name' => 'منو',
);

$LANG_MENU00 = array (
    'menulabel'         => 'منو',
    'plugin'            => 'منو',
    'access_denied'     => 'دسترسی ممنوع است',
    'access_denied_msg' => 'شما برای دسترسی به این صفحه امتیاز امنیتی مناسب ندارید. نام کاربری و آیپی شما ضبط شده است.',
    'admin'             => 'مدیریت منو'
);

$LANG_MENU01 = array (
    'instructions'      => 'منو به شما اجازه می دهد تا به راحتی آرم سایت خود را سفارشی کرده و نمایش شعار سایت را کنترل کنید.',
    'javascript_required' => 'منو نیاز به فعال شدن جاوا اسکریپت دارد.',
    'logo_options'      => 'گزینه های آرم منو',
    'use_graphic_logo'  => 'استفاده آرم گرافیکی',
    'use_text_logo'     => 'استفاده آرم متنی',
    'use_no_logo'       => 'آرمی را نمایش نده',
    'display_site_slogan'   => 'نمایش شعار سایت',
    'upload_logo'       => 'بارگذاری آرم جدید',
    'current_logo'      => 'آرم فعلی',
    'no_logo_graphic'   => 'هیچ آرم گرافیکی موجود نمی باشد',
    'logo_help'         => 'تصاویر آرم گرافیکی بارگذاری شده تغییر اندازه نشده اند، اندازه استاندارد برای آرم منو باید ۱۰۰ پیکسل طول و باید کمتر از ۵۰۰ پیکسل عرض می باشد. شما می توانید تصاویر بزرگتری را بارگذاری کنید، اما نیاز خواهید داشت سی اس اس سایت را در styles.css تغییر دهید تا مطمئن شوید که به درستی نمایش می دهد.',
    'save'              => 'ذخیره',
    'create_element'    => 'ایجاد عنصر منو',
    'add_new'           => 'افزودن مورد جدید منو',
    'add_newmenu'       => 'ایجاد منو جدید',
    'edit_menu'         => 'ویرایش منو',
    'menu_list'         => 'فهرست نویسی منو',
    'configuration'     => 'پیکربندی',
    'edit_element'      => 'ویرایش مورد منو',
    'menu_element'      => 'عنصر منو',
    'menu_type'         => 'نوع منو',
    'elements'          => 'عناصر',
    'enabled'           => 'فعال شده',
    'edit'              => 'ویرایش',
    'delete'            => 'حذف',
    'move_up'           => 'حرکت به بالا',
    'move_down'         => 'حرکت به پایین',
    'order'             => 'ترتیب',
    'id'                => 'شناسه',
    'parent'            => 'اصلی',
    'label'             => 'نام منو',
    'elementlabel'      => 'نام عنصر',
    'display_after'     => 'نمایش پس از',
    'type'              => 'نوع',
    'url'               => 'نشانی اینترنتی',
    'php'               => 'عملکرد پی اچ پی',
    'coretype'          => 'منوی گیکلاگ',
    'group'             => 'گروه',
    'permission'        => 'نمایان برای',
    'active'            => 'فعال',
    'top_level'         => 'منوی سطح بالا',
    'confirm_delete'    => 'آیا مطمئن هستید که می خواهید این مورد منو را حذف کنید؟',
    'type_submenu'      => 'منوی زیرین',
    'type_url_same'     => 'پنجره اصلی',
    'type_url_new'      => 'پنجره جدید با جهت یابی',
    'type_url_new_nn'   => 'پنجره جدید بدون جهت یابی',
    'type_core'         => 'منوی گیکلاگ',
    'type_php'          => 'عملکرد پی اچ پی',
    'gl_user_menu'      => 'منوی کاربر',
    'gl_admin_menu'     => 'منوی مدیریت',
    'gl_topics_menu'    => 'منوی موضوعات',
    'gl_sp_menu'        => 'منوی صفحات آمار',
    'gl_plugin_menu'    => 'منوی افزونه',
    'gl_header_menu'    => 'منوی سرآیند',
    'plugins'           => 'افزونه',
    'static_pages'      => 'صفحات ایستا',
    'geeklog_function' => 'عملکرد گیکلاگ',
    'save'              => 'ذخیره',
    'cancel'            => 'لغو',
    'action'            => 'عمل',
    'first_position'    => 'موقعیت اول',
    'info'              => 'اطلاعات',
    'non-logged-in'     => 'فقط کاربران وارد نشده',
    'target'            => 'پنجره نشانی اینترنتی',
    'same_window'       => 'پنجره یکسان',
    'new_window'        => 'پنجره جدید',
    'menu_color_options'    => 'گزینه های رنگ منو',
    'top_menu_bg'           => 'زمینه منوی اصلی',
    'top_menu_hover'        => 'شناور منوی اصلی',
    'top_menu_text'         => 'متن منوی اصلی',
    'top_menu_text_hover'   => 'شناور متن منوی اصلی / متن منوی زیرین',
    'sub_menu_text_hover'   => 'شناور متن منوی زیرین',
    'sub_menu_text'         => 'رنگ متن منوی زیرین',
    'sub_menu_bg'           => 'زمینه منوی زیرین',
    'sub_menu_hover_bg'     => 'زمینه شناور منوی زیرین',
    'sub_menu_highlight'    => 'برجسته منوی زیرین',
    'sub_menu_shadow'       => 'سایه منوی زیرین',
    'menu_builder'          => 'سازنده منو',
    'logo'                  => 'آرم',
    'menu_colors'           => 'گزینه های منو',
    'options'               => 'گزینه ها',
    'menu_graphics'         => 'گرافیک منو',
    'graphics_or_colors'    => 'استفاده گرافیک یا رنگ ها؟',
    'graphics'              => 'گرافیک',
    'colors'                => 'رنگ ها',
    'menu_bg_image'         => 'تصویر زمینه منوی اصلی',
    'currently'             => 'در حال حاضر',
    'menu_hover_image'      => 'تصویر شناور منوی اصلی',
    'parent_item_image'     => 'شاخص اصلی منوی زیرین',
    'not_used'              => ' استفاده نمی شود اگر استفاده گرافیک در زیر انتخاب شده است.',
	'select_color'			=> 'انتخاب رنگ',
	'menu_alignment'		=> 'تنظیم منو',
	'alignment_question'	=> 'تنظیم منو به سمت',
	'align_left'			=> 'چپ',
	'align_right'			=> 'راست',
	'blocks'                => 'سبک های بلوک',
	'reset'                 => 'بازنشانی فرم',
	'defaults'              => 'بازنشانی به مقادیر پیشفرض',
	'confirm_reset'         => 'این رنگ ها و گرافیک منو را به مقادیر نصب باز خواهد نشاند. آیا مطمئن هستید که میخواهید ادامه دهید؟ هنگامی که انجام شد، برای پاکسازی حافظه نهان مرورگر محلی خود نیز مطمئن شوید.',
	'menu_properties'       => 'خواص منو برای',
	'disabled_plugin'       => 'افزونه یافت نشد یا غیرفعال شده',
	'clone'                 => 'نسخه',
	'clone_menu_label'      => 'نام برای منو همسان شده',
	'topic'                 => 'موضوعات',
);

$LANG_HC = array (
    'main_menu_bg_color'         => 'زمینه منوی اصلی',
    'main_menu_hover_bg_color'   => 'شناور منوی اصلی',
    'main_menu_text_color'       => 'متن منوی اصلی',
    'main_menu_hover_text_color' => 'شناور متن منوی اصلی / متن منوی زیرین',
	'menu_bg_filename'           => 'نام پرونده تصویر زمینه منو',
	'menu_hover_filename'        => 'نام پرونده تصویر شناور منو',
	'menu_parent_filename'       => 'نام پرونده اصلی منو',
	'menu_alignment'             => 'تنظیم منو',
	'use_images'                 => 'استفاده تصاویر',
    'submenu_hover_text_color'   => 'شناور متن منوی زیرین',
    'submenu_background_color'   => 'زمینه منوی زیرین',
    'submenu_hover_bg_color'     => 'زمینه شناور منوی زیرین',
    'submenu_highlight_color'    => 'برجسته منوی زیرین',
    'submenu_shadow_color'       => 'سایه منوی زیرین',
);
$LANG_HS = array (
    'main_menu_text_color'          => 'متن',
    'main_menu_hover_text_color'    => 'شناور',
    'submenu_highlight_color'       => 'جداساز',
);
$LANG_VC = array(
    'main_menu_bg_color'           => 'زمینه منو',
    'main_menu_hover_bg_color'     => 'شناور زمینه منو',
    'main_menu_text_color'         => 'متن منو',
    'main_menu_hover_text_color'   => 'شناور متن منو',
    'submenu_text_color'           => 'متن منوی زیرین',
    'submenu_hover_text_color'     => 'شناور متن منوی زیرین',
    'submenu_highlight_color'      => 'حاشیه',
);
$LANG_VS = array (
    'main_menu_text_color'          => 'متن منو',
    'main_menu_hover_text_color'    => 'شناور متن منو',
);

$LANG_MENU_MENU_TYPES = array(
    1                   => 'افقی - آبشار',
    2                   => 'افقی - ساده',
    3                   => 'عمودی - آبشار',
    4                   => 'عمودی - ساده',
);

$LANG_MENU_TYPES = array(
    1                   => 'منوی زیرین',
    2                   => 'عمل گیکلاگ',
    3                   => 'منوی گیکلاگ',
    4                   => 'افزونه',
    5                   => 'صفحه ایستا',
    6                   => 'نشانی اینترنتی خارجی',
    7                   => 'عملکرد پی اچ پی',
    8                   => 'برچسب',
    9                   => 'موضوع',
);


$LANG_MENU_TARGET = array(
    1                   => 'پنجره اصلی',
    2                   => 'پنجره جدید با جهت یابی',
    3                   => 'پنجره جدید بدون جهت یابی',
);

$LANG_MENU_GLFUNCTION = array(
    0                   => 'خانه',
    1                   => 'مشارکت',
    2                   => 'پوشه',
    3                   => 'ترجیحات',
    4                   => 'جستجو',
    5                   => 'آمار سایت',
);

$LANG_MENU_GLTYPES = array(
    1                   => 'منوی کاربر',
    2                   => 'منوی مدیریت',
    3                   => 'منوی موضوعات',
    4                   => 'منوی صفحات ایستا',
    5                   => 'منوی افزونه',
    6                   => 'منوی سرآیند',
);

$LANG_MENU_ADMIN = array(
    1                   => 'سازنده منو به شما اجازه می دهد تا منو ها را برای سایت خود ایجاد و ویرایش کنید. برای افزودن یک منوی جدید، روی پیوند ایجاد منو جدید در بالا کلیک کنید. برای ویرایش موارد یک منو، روی نقشک زیر ستون عناصر کلیک کنید. برای تغییر رنگ های منو، روی نقشک زیر ستون گزینه ها کلیک کنید.',
    2                   => 'برای ایجاد یک منو جدید، یک نام منو و نوع منو در زیر مشخص کنید. همچنین می توانید وضعیت فعال را تنظیم کنید و چه گروهی از کاربران قادر خواهند بود منو را با فیلد های فعال و نمایان برای ببینند.',
    3                   => 'روی نقشک زیر ستون ویرایش کلیک کنید تا خواص مورد یک منو را ویرایش کنید. موارد را زیر ستون ترتیب با حرکت دادن آنها به بالا یا پایین با پیکان ها مرتب کنید.',
    4                   => 'برای ایجاد عنصر منو جدید، جزئیات و مجوز های آن را در زیر مشخص کنید.',
    5                   => 'هنگامی که یک عنصر ایجاد شد، همیشه می توانید به عقب برگردید و جزئیات و مجوز های آن را در زیر ویرایش کنید.',
    6                   => 'سازنده منو به شما اجازه می دهد تا به راحتی ظاهر و حس منو های خود را سفارشی کنید. مقادیر زیر را برای ایجاد یک سبک منو منحصر به فرد تنظیم کنید.',
);

$PLG_menu_MESSAGE1 = 'گزینه های آرم منو با موفقیت ذخیره شد.';
$PLG_menu_MESSAGE2 = 'آرم بارگذاری شده یک تصویر JPG، GIF یا PNG نبود.';
$PLG_menu_MESSAGE3 = 'یک مشکل ارتقا منو وجود داشت، لطفا پرونده لاگ خطا را بررسی کنید.';
$PLG_menu_MMESSAGE4 = 'آرم فراتر از حداکثر ارتفاع یا عرض مجاز است.';

// Messages for the plugin upgrade
$PLG_menu_MESSAGE3002 = $LANG32[9]; // "requires a newer version of Geeklog"

// Localization of the Admin Configuration UI
$LANG_configsections['menu'] = array(
    'label' => 'منو',
    'title' => 'پیکربندی منو'
);

$LANG_confignames['menu'] = array(
    'samplesetting1' => 'تنظیم نمونه #1',
    'samplesetting2' => 'تنظیم نمونه #2',
);

$LANG_configsubgroups['menu'] = array(
    'sg_main' => 'تنظیمات اصلی'
);

$LANG_tab['menu'] = array(
    'tab_main' => 'تنظیمات اصلی منو'
);

$LANG_fs['menu'] = array(
    'fs_main' => 'تنظیمات اصلی منو'
);

$LANG_configselects['menu'] = array(
    0 => array('True' => 1, 'False' => 0),
    1 => array('True' => true, 'False' => false)
);
?>
