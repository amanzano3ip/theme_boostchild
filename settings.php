<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package    theme_boostchild
 * @copyright  2024 Tresipunt
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    $settings = new theme_boost_admin_settingspage_tabs('themesettingboostchild',
        get_string('configtitle', 'theme_boostchild'));

    $page = new admin_settingpage('theme_boostchild_funcionalidades',
        'Funcionalidades');

    $page->add(
        new admin_setting_heading(
            'theme_boostchild_comportamiento',
            'Comportamiento',
            'Configure los compartamientos del tema')
    );

    $name = 'theme_boostchild/extendscontent';
    $title  = 'Expandir contenido';
    $description = 'Si está activo el contenido se expande';
    $setting = new admin_setting_configcheckbox($name, $title, $description, false);
    $page->add($setting);

    $settings->add($page);

    $page = new admin_settingpage('theme_boostchild_branding',
        'Branding');

    $page->add(
        new admin_setting_heading(
            'theme_boostchild_colores',
                'Colores',
            'Seleccione los colores del tema')
    );

    $name = 'theme_boostchild/primarycolor';
    $title = 'Color primario';
    $description = 'Seleccionar el color primario';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#64a5af');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_boostchild/navbarcolor';
    $title = 'Color de la barra de navegación';
    $description = 'Seleccionar el color de fondo de la barra de navegación';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ddeeff');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_boostchild/secondarycolor';
    $title = 'Color secundardio';
    $description = 'Seleccionar el color secundario';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ea7e37');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_boostchild/fontcolor';
    $title = 'Color de la fuente';
    $description = 'Seleccionar el color de la fuente principal';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#333333');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_boostchild/cardbgcolor';
    $title = 'Color fondo de la carta';
    $description = 'Seleccionar el color de fondo de la carta';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ebf6ff');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $settings->add($page);

}
