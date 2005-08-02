<?php
//=================================================================\\
// Aardvark Topsites PHP 5.0                                       \\
//-----------------------------------------------------------------\\
// Copyright 2003-2004 Jeremy Scheff - http://www.aardvarkind.com/ \\
//-----------------------------------------------------------------\\
// This program is free software; you can redistribute it and/or   \\
// modify it under the terms of the GNU General Public License     \\
// as published by the Free Software Foundation; either version 2  \\
// of the License, or (at your option) any later version.          \\
//                                                                 \\
// This program is distributed in the hope that it will be useful, \\
// but WITHOUT ANY WARRANTY; without even the implied warranty of  \\
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the   \\
// GNU General Public License for more details.                    \\
//=================================================================\\

class skin {
  public $filename;

  function skin($filename) {
    $this->filename = $filename;
  }

  function make() {
    global $CONF, $TMPL;

    $file = "{$CONF['skins_path']}/{$TMPL['skin_name']}/{$this->filename}.html";
    $fh_skin = fopen($file, 'r');
    $skin = @fread($fh_skin, filesize($file));
    fclose($fh_skin);
  
    if ($this->filename == 'wrapper') {
      $powered_by_check = preg_match('/<#powered_by>/', $skin) ? 1 : 0;
  
      if ($powered_by_check) {
        $return = $skin;
      }
      else {
        $return = 'You cannot delete the &lt;#powered_by&gt; tag from wrapper.html.';
      }
    }
    elseif ($this->filename == 'admin' || $this->filename == 'ssi_top' || $this->filename == 'ssi_members') {
      $return = $skin;
    }
    else {
      $return = "<!-- Begin {$this->filename}.html -->\n{$skin}\n<!-- End {$this->filename}.html -->\n\n";
    }

    return $this->parse($return);
  }

  function send_email($email) {
    global $CONF, $TMPL;

    $file = "{$CONF['skins_path']}/{$TMPL['skin_name']}/{$this->filename}.html";
    $fh_skin = fopen($file, "r");
    $skin = @fread($fh_skin, filesize($file));
    fclose($fh_skin);

    $skin_array = explode("\n", $skin);

    $subject = array_shift($skin_array);
    $subject = str_replace('Subject: ', '', $subject);
    $body = implode("\n", $skin_array);

    $subject = $this->parse($subject);
    $body = $this->parse($body);

    mail($email, $subject, $body, "From: ".$CONF['youremail']."\r\n");
  }
  
  function parse($skin) {
    global $LNG, $TMPL;

    $skin = preg_replace('/<#lng\{\'(.+?)\'\}>/ei', "\$LNG['\\1']", $skin);
    $skin = preg_replace('/<#include=\"(.+?)\">/ei', "file_get_contents('\\1')", $skin);
    $skin = preg_replace('/<#(.+?)>/ei', "\$TMPL['\\1']", $skin);
    return $skin;
  }
}

class main_skin extends skin {
  function main_skin($filename) {
    global $CONF, $DB, $FORM, $LNG, $TIMER, $TMPL;

    $this->filename = $filename;

    // Number of members
    list($TMPL['num_members']) = $DB->fetch('SELECT COUNT(*) FROM '.$CONF['sql_prefix'].'_sites WHERE active = 1', __FILE__, __LINE__);

    // Build the multiple pages menu
    if ($TMPL['num_members'] > $CONF['num_list']) {
      $num = $TMPL['num_members'];
      $done = 0;
      $TMPL['multiple_pages_menu'] = "<select name=\"start\">\n";
      while ($num > 0) {
        $start = $done * $CONF['num_list'] + 1;
        $end = ($done + 1) * $CONF['num_list'];
        $FORM['start'] = isset($FORM['start']) ? $FORM['start'] : 1;
  
        if ($FORM['start'] == $start) {
          $TMPL['multiple_pages_menu'] .= "<option value=\"{$start}\" selected=\"selected\">{$start} - {$end}\n";
        }
        else {
          $TMPL['multiple_pages_menu'] .= "<option value=\"{$start}\">{$start} - {$end}\n";
        }
  
        $num = $num - $CONF['num_list'];
        $done++;
      }
      $TMPL['multiple_pages_menu'] .= '</select>';
    }
    else { $TMPL['multiple_pages_menu'] = ''; }
  
    // Build the ranking method menu
    $ranking_method = isset($FORM['method']) ? $FORM['method'] : $CONF['ranking_method'];
    $TMPL['ranking_methods_menu'] = '<select name="method">'."\n";
    if ($ranking_method == 'pv') { $TMPL['ranking_methods_menu'] .= '<option value="pv" selected="selected">'.$LNG['g_pv']."\n"; }
    else { $TMPL['ranking_methods_menu'] .= '<option value="pv">'.$LNG['g_pv']."\n"; }
    if ($ranking_method == 'in') { $TMPL['ranking_methods_menu'] .= '<option value="in" selected="selected">'.$LNG['g_in']."\n"; }
    else { $TMPL['ranking_methods_menu'] .= '<option value="in">'.$LNG['g_in']."\n"; }
    if ($ranking_method == 'out') { $TMPL['ranking_methods_menu'] .= '<option value="out" selected="selected">'.$LNG['g_out']."\n"; }
    else { $TMPL['ranking_methods_menu'] .= '<option value="out">'.$LNG['g_out']."\n"; }
    $TMPL['ranking_methods_menu'] .= '</select>';
  
    // Build the categories menu
    $current_cat = isset($FORM['cat']) ? $FORM['cat'] : $LNG['main_all'];
    $TMPL['categories_menu'] = '<select name="cat">'."\n";
    if ($current_cat == $LNG['main_all']) {
      $TMPL['categories_menu'] .= '<option value="" selected="selected">'.$LNG['main_all']."\n";
    }
    else {
      $TMPL['categories_menu'] .= '<option value="">'.$LNG['main_all']."\n";
    }
    foreach ($CONF['categories'] as $cat) {
      if ($current_cat == $cat) {
        $TMPL['categories_menu'] .= '<option value="'.$cat.'" selected="selected">'.$cat."\n";
      }
      else {
        $TMPL['categories_menu'] .= '<option value="'.$cat.'">'.$cat."\n";
      }
    }
    $TMPL['categories_menu'] .= '</select>';

    // Featured member
    if ($CONF['featured_member'] && $TMPL['num_members']) {
      unset($TMPL['id']);
      while (!$TMPL['id']) {
        if ($TMPL['num_members']) {
          $limit = rand(0, ($TMPL['num_members'] - 1));
        }
        else { $limit = 0; }
        $result = $DB->select_limit('SELECT id, url, title, description, banner_url FROM '.$CONF['sql_prefix'].'_sites WHERE active = 1', 1, $limit, __FILE__, __LINE__);
        $row = $DB->fetch_array($result);
        $TMPL = array_merge($TMPL, $row);
      }
      $TMPL['out_url'] = $CONF['list_url'].'/out.php?id='.$TMPL['id'];
      $TMPL['featured_member'] = do_template('featured_member');
    }
  
    // Please do not remove the link to http://www.aardvarkind.com/.
    // This is a free script, all I ask for is a link back.
    $TMPL['powered_by'] = $LNG['main_powered'].' <a href="http://www.aardvarkind.com/" target="_blank">Aardvark Topsites PHP</a> '.$TMPL['version'];
    $TMPL['powered_by'] .= '<br /><a href="http://www.itopsites.com/">iTopsites.com - Get a Free Hosted Topsites List</a>';

    $TMPL['num_queries'] = $DB->num_queries;
    $TMPL['execution_time'] = $TIMER->get_time();
  }
}
?>
