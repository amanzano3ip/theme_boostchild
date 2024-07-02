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

namespace theme_boostchild\output;

use moodle_url;

defined('MOODLE_INTERNAL') || die;

/**
 * Renderers to align Moodle's HTML with that expected by Bootstrap
 *
 * @package    theme_boost
 * @copyright  2012 Bas Brands, www.basbrands.nl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class core_renderer extends \theme_boost\output\core_renderer {


    /**
     * Create a navbar switch for toggling editing mode.
     *
     * @return ?string Html containing the edit switch
     */
    public function edit_switch() {
        if ($this->page->user_allowed_editing()) {

            $data = (object) [
                    'legacyseturl' => (new moodle_url('/editmode.php'))->out(false),
                    'pagecontextid' => $this->page->context->id,
                    'pageurl' => $this->page->url,
                    'sesskey' => sesskey(),
            ];
            if ($this->page->user_is_editing()) {
                $data->checked = true;
            }
            return $this->render_from_template('core/editswitch', $data);
        }
    }

}
