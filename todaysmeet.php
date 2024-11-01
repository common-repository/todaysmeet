<?php
/**
 * Plugin Name: TodaysMeet
 * Plugin URI: * https://todaysmeet.com/help/faq/14
 * Description: Embed TodaysMeet rooms in your posts and pages.
 * Version: 1.0.4
 * Author: TodaysMeet
 * Author URI: https://todaysmeet.com/
 * License: GPL2
 */
/*  Copyright 2014  TodaysMeet, LLC (email: help@todaysmeet.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
defined("ABSPATH") or die("No script kiddies please!");

function todaysmeet_embed($atts) {
    $options = shortcode_atts(array(
        "id" => "none",
        "type" => "transcript",
        "participate" => "no",
        "height" => 400,
        "width" => "100%",
    ), $atts);

    if (!ctype_digit($options["id"])) {
        return "[ERROR: You must specify a room ID.]";
    }

    $url = "https://todaysmeet.com/room/{$options['id']}/embed?";

    $params = array();
    if ($options["type"] == "live") {
        $params["type"] = "live";
    } else {
        $params["type"] = "transcript";
    }

    if ($options["participate"] != "yes") {
        $params["hide_ui"] = 1;
    }

    $url .= http_build_query($params);

    return "<iframe src=\"$url\" height=\"{$options["height"]}\" width=\"{$options["width"]}\"></iframe>";
}

add_shortcode("todaysmeet", "todaysmeet_embed");
