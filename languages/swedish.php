<?php
//===========================================================================\\
// Aardvark Topsites PHP 5                                                   \\
// Copyright (c) 2003-2005 Jeremy Scheff.  All rights reserved.              \\
//---------------------------------------------------------------------------\\
// http://www.aardvarkind.com/                        http://www.avatic.com/ \\
//---------------------------------------------------------------------------\\
// This program is free software; you can redistribute it and/or modify it   \\
// under the terms of the GNU General Public License as published by the     \\
// Free Software Foundation; either version 2 of the License, or (at your    \\
// option) any later version.                                                \\
//                                                                           \\
// This program is distributed in the hope that it will be useful, but       \\
// WITHOUT ANY WARRANTY; without even the implied warranty of                \\
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General \\
// Public License for more details.                                          \\
//===========================================================================\\

// When you make a new translation, fill out the following four variables to
// get credit for you work.
$translation = 'Svenska';
$translator_name = 'Topplista.se';
$translator_email = 'info@topplista.se';
$translator_url = 'http://www.topplista.se/';

// Global
$LNG['g_form_submit_short'] = "OK";
$LNG['g_username'] = "Anv�ndarnamn";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Titel";
$LNG['g_description'] = "Beskrivning";
$LNG['g_category'] = "Kategori"; // 4.1.0
$LNG['g_email'] = "E-post";
$LNG['g_banner_url'] = "URL till banner";
$LNG['g_password'] = "L�senord";
$LNG['g_average'] = "Genomsnitt";
$LNG['g_today'] = "Idag";
$LNG['g_yesterday'] = "Ig�r";
$LNG['g_daily'] = "Dagligen"; // 5.0
$LNG['g_this_month'] = "Den h�r m�naden"; // 5.0
$LNG['g_last_month'] = "F�rra m�naden"; // 5.0
$LNG['g_monthly'] = "M�natligen"; // 5.0
$LNG['g_this_week'] = "Den h�r veckan"; // 5.0
$LNG['g_last_week'] = "F�rra veckan"; // 5.0
$LNG['g_weekly'] = "Veckovis"; // 5.0
$LNG['g_pv'] = 'Visningar'; // 5.0
$LNG['g_overall'] = 'Totalt'; // 5.0
$LNG['g_in'] = 'In'; // 5.0
$LNG['g_out'] = 'Ut'; // 5.0
$LNG['g_unq_pv'] = "Unika visningar"; // 5.0
$LNG['g_tot_pv'] = "Visningar"; // 5.0
$LNG['g_unq_in'] = "Unika in"; // 5.0
$LNG['g_tot_in'] = "In"; // 5.0
$LNG['g_unq_out'] = "Unika ut"; // 5.0
$LNG['g_tot_out'] = "Ut"; // 5.0
$LNG['g_invalid_u_or_p'] = "Fel anv�ndarnamn eller l�senord. F�rs�k igen."; // 5.0
$LNG['g_invalid_u'] = "Felaktigt anv�ndarnamn. F�rs�k igen."; // 5.0
$LNG['g_invalid_p'] = "Felaktigt l�senord. F�rs�k igen."; // 5.0
$LNG['g_session_expired'] = "Din inloggningssession har g�tt ut. F�rs�k igen."; // 5.0
$LNG['g_error'] = "Fel"; // 5.0
$LNG['g_delete_install'] = "Av s�kerhetssk�l m�ste du ta bort katalogen install innan scriptet k�rs."; // 5.0

// Edit Account
$LNG['edit_header'] = "�ndra anv�ndarkonto";
$LNG['edit_info_edited'] = "Ditt anv�ndarkonto �ndrades.";
$LNG['edit_password_blank'] = "L�mna f�ltet tomt f�r att beh�lla nuvarande l�senord"; // 4.0

// Gateway Page
$LNG['gateway_header'] = "Ing�ngssida";
$LNG['gateway_text'] = "Den h�r sidan finns till f�r att f�rhindra fusk. Klicka p� l�nken nedan f�r att komma till topplistan.";
$LNG['gateway_vote'] = "G� in";
$LNG['gateway_no_vote'] = "G� in utan att r�sta"; // 5.0

// Install
$LNG['install_header'] = "Installation";
$LNG['install_welcome'] = "V�lkommen till Aardvark Topsites PHP 5. Fyll i formul�ret nedan f�r att installera scriptet.";
$LNG['install_sql_prefix'] = "Tabell-prefix (table prefix) - �ndra bara om det finns mer �n en installation i samma databas";
$LNG['install_error_chmod'] = "Kunde inte skriva till settings_sql.php. Se till att du har satt CHMOD 666 p� settings_sql.php.";
$LNG['install_error_sql'] = "Kunde inte ansluta till SQL-databasen. G� tillbaka och kontrollera inst�llningarna f�r SQL.";
$LNG['install_done'] = "Din topplista installerades. Ta bort katalogen install.";
$LNG['install_your'] = "Din topplista";
$LNG['install_admin'] = "Administration";
$LNG['install_manual'] = "Manual";
$LNG['upgrade_header'] = "Uppgradera";
$LNG['upgrade_welcome'] = "V�lkommen till Aardvark Topsites PHP 5. Se till att du har en backup av databasen innan du uppgraderar.";
$LNG['upgrade_error_version'] = "Uppgraderingen st�djer bara Aardvark Topsites PHP 4.1.0 eller senare version.";
$LNG['upgrade_done'] = "Din topplista uppgraderades. Ta bort katalogen install.";

// Join
$LNG['join_header'] = "Registrera ny webbplats";
$LNG['join_enter_text'] = "Enter the text as it is shown in the image below:"; // 4.2.2
$LNG['join_user'] = "Anv�ndarnamn"; // 5.0
$LNG['join_website'] = "Webbplats"; // 5.0
$LNG['join_error_forgot'] = "Du gl�mde att:";
$LNG['join_error_username'] = "Skriva in ett giltig anv�ndarnamn: anv�nd bara bokst�ver, siffror, understreck och bindestreck."; // 5.0
$LNG['join_error_username_duplicate'] = "Enter a valid username: your username is already in use."; // 5.0
$LNG['join_error_url'] = "Skriva in en giltig URL.";
$LNG['join_error_email'] = "Skriva in en giltig e-postadress.";
$LNG['join_error_title'] = "Skriva in en titel f�r din webbplats.";
$LNG['join_error_password'] = "Skriva in ett l�senord.";
$LNG['join_error_urlbanner'] = "Skriva in en giltig banner. L�mna f�ltet tomt om du inte har n�gon. Den m�ste vara mindre �n"; // 4.0
$LNG['join_error_back'] = "G� tillbaka och r�ttat till felen.";
$LNG['join_error_time'] = "Uppdatera inte den h�r sidan."; // 4.2.0
$LNG['join_error_captcha'] = "Ordet du skrev st�mde inte �verens med inneh�llet i bilden."; // 4.2.2
$LNG['join_thanks'] = "Tack f�r din registrering! L�gg in den h�r l�nkkoden p� din webbplats f�r att b�rja skicka r�ster.";
$LNG['join_change_warning'] = "Om du �ndrar koden riskerar du att den inte fungerar.";
$LNG['join_welcome'] = "V�lkommen till %s";
$LNG['join_welcome_admin'] = "En ny webbplats har registrerats.";

// Link Code
$LNG['link_code_header'] = "L�nkkod"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Gl�mt l�senordet"; // 5.0
$LNG['lost_pw_forgot'] = "Gl�m l�senordet?"; // 5.0
$LNG['lost_pw_get'] = "�terf� l�senordet"; // 5.0
$LNG['lost_pw_emailed'] = "Du har f�tt e-post med instruktioner."; // 5.0
$LNG['lost_pw_email'] = "F�r att skapa ett nytt l�senord till ditt anv�ndarkonto, g� hit:"; // 5.0
$LNG['lost_pw_new'] = "Skriv in ett nytt l�senord"; // 5.0
$LNG['lost_pw_set_new'] = "V�lj nytt l�senord"; // 5.0
$LNG['lost_pw_finish'] = "Ditt l�senord har �ndrats."; // 5.0

// Main Page
$LNG['main_header'] = "Topplista"; // 5.0
$LNG['main_all'] = "Alla webbplatser"; // 4.2.0
$LNG['main_method'] = "Sortera efter";
$LNG['main_members'] = "Webbplatser";
$LNG['main_menu_rankings'] = "Topplista";
$LNG['main_menu_join'] = "Registrera ny webbplats";
$LNG['main_menu_random'] = "Slumpa en webbplats";
$LNG['main_menu_search'] = "S�k";
$LNG['main_menu_lost_code'] = "Gl�mt koden"; // 5.0
$LNG['main_menu_lost_password'] = "Gl�mt l�senordet"; // 5.0
$LNG['main_menu_edit'] = "�ndra anv�ndaruppgifter";
$LNG['main_menu_user_cp'] = "Kontrollpanel"; // 5.0
$LNG['main_featured'] = "Utvald webbplats"; // 4.0.2
$LNG['main_executiontime'] = "Sidvisningstid"; // 4.0
$LNG['main_queries'] = "SQL-fr�gor"; // 4.0
$LNG['main_powered'] = "Med kraft fr�n";

// Ranking Table
$LNG['table_stats'] = "Statistik";
$LNG['table_unique'] = "Unika";
$LNG['table_total'] = "Totalt";
$LNG['table_rank'] = "Placering";
$LNG['table_title'] = "Titel"; // 4.0
$LNG['table_description'] = "Beskrivning"; // 4.0
$LNG['table_movement'] = "Trend";
$LNG['table_up'] = "Upp"; // 5.0
$LNG['table_down'] = "Ner"; // 5.0
$LNG['table_neutral'] = "Of�r�ndrad"; // 5.0

// Rate and Review
$LNG['rate_header'] = "Betyg och recension";
$LNG['rate_rating'] = "Ge betyg";
$LNG['rate_review'] = "Skriv recension - bara text, ingen HTML"; // 5.0
$LNG['rate_thanks'] = "Tack f�r ditt betyg.";
$LNG['rate_error'] = "Du har redan gett betyg �t den h�r webbplatsen.";
$LNG['rate_back'] = "Tillbaka till statistiken";

// Search
$LNG['search_header'] = "S�k";
$LNG['search_off'] = "S�kfunktionen har inaktiverats.";
$LNG['search_for'] = "Du s�kte efter";
$LNG['search_no_sites'] = "Hittade inga webbplatser i topplistan som matchade din s�kning."; // 5.0
$LNG['search_prev'] = "F�reg�ende"; // 3.2.1
$LNG['search_next'] = "N�sta"; // 3.2.1

// Stats
$LNG['stats_header'] = "Statistik";
$LNG['stats_info'] = "Information";
$LNG['stats_member_since'] = "Registreringsdatum"; // 5.0
$LNG['stats_rating_avg'] = "Betyg i genomsnitt";
$LNG['stats_rating_num'] = "Antal betyg";
$LNG['stats_rate'] = "Ge betyg eller skriv recension";
$LNG['stats_reviews'] = "Recensioner";
$LNG['stats_allreviews'] = "Visa alla recensioner"; // 4.0
$LNG['stats_week'] = "Vecka"; // 5.0
$LNG['stats_highest'] = "H�gst"; // 5.0

// ssi.php
$LNG['ssi_top'] = "Topp %s webbplatser"; // 4.0
$LNG['ssi_new'] = "%s senaste webbplatserna"; // 5.0
$LNG['ssi_all'] = "Alla webbplatser"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Kontrollpanel"; // 5.0
$LNG['user_cp_login'] = "Logga in"; // 5.0
$LNG['user_cp_logout'] = "Logga ut"; // 5.0
$LNG['user_cp_welcome'] = "V�lkommen till kontrollpanelen. Anv�nd l�nkarna i menyn till v�nster f�r att �ndra ditt anv�ndarkonto."; // 5.0
$LNG['user_cp_logout_message'] = "Du har loggats ut fr�n kontrollpanelen."; // 5.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Godk�nn nya webbplatser"; // 5.0
$LNG['a_approve'] = "Godk�nn"; // 4.0
$LNG['a_approve_none'] = "Inga webbplatser v�ntar p� godk�nnande."; // 4.0
$LNG['a_approve_done'] = "Webbplatsen godk�ndes."; // 4.0
$LNG['a_approve_dones'] = "Webbplatserna godk�ndes."; // 4.0
$LNG['a_approve_sel'] = "Med markerade:"; // 5.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Godk�nn nya recensioner"; // 5.0
$LNG['a_approve_rev_none'] = "Inga recensioner v�ntar p� godk�nnande."; // 5.0
$LNG['a_approve_rev_done'] = "Recensionen godk�ndes."; // 5.0
$LNG['a_approve_rev_dones'] = "Recensionerna godk�ndes."; // 5.0

// Admin > Delete Member
$LNG['a_del_header'] = "Ta bort anv�ndarkonto"; // 5.0
$LNG['a_del_headers'] = "Ta bort anv�ndarkonton"; // 5.0
$LNG['a_del_done'] = "Anv�ndarkontot togs bort."; // 5.0
$LNG['a_del_dones'] = "Anv�ndarkontona togs bort."; // 5.0
$LNG['a_del_warn'] = "�r du s�ker p� att du vill ta bort %s?"; // 5.0
$LNG['a_del_multi'] = "dessa %s anv�ndarkonton"; //5.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Ta bort recension"; // 5.0
$LNG['a_del_rev_headers'] = "Ta bort recensioner"; // 5.0
$LNG['a_del_rev_done'] = "Recensionen togs bort."; // 5.0
$LNG['a_del_rev_dones'] = "Recensionerna togs bort."; // 5.0
$LNG['a_del_rev_warn'] = "�r du s�ker p� att du vill ta bort den h�r recensionen?"; //5.0
$LNG['a_del_rev_warns'] = "�r du s�ker p� att du vill ta bort dessa recensionener?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Felaktigt recensions-ID. F�rs�k igen."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "�ndra anv�ndaruppgifter"; // 5.0
$LNG['a_edit_site_is'] = "Den h�r webbplatsen �r"; // 4.0
$LNG['a_edit_active'] = "Aktiv (visas)"; // 4.0
$LNG['a_edit_inactive'] = "Inaktiv (dold)"; // 5.0
$LNG['a_edit_edited'] = "Anv�ndaruppgifterna �ndrades.";

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "�ndra recension"; // 5.0
$LNG['a_edit_rev_edited'] = "Recensionen �ndrades.";

// Admin > Email Members
$LNG['a_email_header'] = "Skicka e-post"; // 5.0
$LNG['a_email_subject'] = "�mne"; // 4.2.0
$LNG['a_email_message'] = "Meddelande"; // 4.2.0
$LNG['a_email_msg_sent'] = "E-post skickades till %s"; // 5.0
$LNG['a_email_not_sent'] = "Kunde inte skicka till %s"; // 5.0
$LNG['a_email_sent'] = "Skickade e-post till %s anv�ndare."; // 4.2.0
$LNG['a_email_failed'] = "Kunde inte skicka e-post till %s anv�ndare."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Du �r utloggad."; // 5.0

// Admin > Main
$LNG['a_header'] = "Administration"; // 5.0
$LNG['a_main'] = "V�lkommen till administrationen. Anv�nd l�nkarna i menyn till v�nster f�r att administrera din topplista."; // 5.0
$LNG['a_main_approve'] = "1 webbplats v�ntar p� att godk�nnas."; // 5.0
$LNG['a_main_approves'] = "%s webbplatser v�ntar p� att godk�nnas."; // 5.0
$LNG['a_main_approve_rev'] = "1 recension v�ntar p� att godk�nnas."; // 5.0
$LNG['a_main_approve_revs'] = "%s recensioner v�ntar p� att godk�nnas."; // 5.0
$LNG['a_main_your'] = "Din version"; // 5.0
$LNG['a_main_latest'] = "Senaste versionen"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarkind.com/\">Aardvark Topsites PHP</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Anv�ndare"; // 5.0
$LNG['a_man_actions'] = "Alternativ"; // 4.2.0
$LNG['a_man_edit'] = "�ndra"; // 4.2.0
$LNG['a_man_delete'] = "Ta bort"; // 4.2.0
$LNG['a_man_email'] = "Skicka e-post"; // 4.2.0
$LNG['a_man_all'] = "Markera alla"; // 5.0
$LNG['a_man_none'] = "Avmarkera alla"; // 5.0
$LNG['a_man_del_sel'] = "Ta bort markerade"; // 5.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Recensioner"; // 5.0
$LNG['a_man_rev_enter'] = "F�r att �ndra recensioner tillh�rande en webbplats, skriv in webbplatsens anv�ndarnamn nedan."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Recension"; // 5.0
$LNG['a_man_rev_date'] = "Datum"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Meny";
$LNG['a_menu_main'] = "Startsida"; // 5.0
$LNG['a_menu_approve'] = "Godk�nn nya webbplatser";
$LNG['a_menu_manage'] = "Anv�ndare"; // 4.2.0
$LNG['a_menu_settings'] = "Inst�llningar"; // 5.0
$LNG['a_menu_skins'] = "Stilar och kategorier"; // 5.0
$LNG['a_menu_approve_reviews'] = "Godk�nn nya recensioner"; // 5.0
$LNG['a_menu_manage_reviews'] = "Recensioner"; // 5.0
$LNG['a_menu_email'] = "Skicka e-post";
$LNG['a_menu_delete_review'] = "Ta bort recension";
$LNG['a_menu_logout'] = "Logga ut";
$LNG['a_menu_delete'] = "Ta bort anv�ndare";
$LNG['a_menu_edit'] = "�ndra anv�ndare";
$LNG['a_header_members'] = "Anv�ndare"; // 5.0
$LNG['a_header_settings'] = "Inst�llningar"; // 5.0
$LNG['a_header_reviews'] = "Recensioner"; // 5.0

// Admin > Settings
$LNG['a_s_header'] = "�ndra inst�llningar";
$LNG['a_s_general'] = "Allm�nna inst�llningar";
$LNG['a_s_admin_password'] = "L�senord till administration";
$LNG['a_s_list_name'] = "Topplistans namn";
$LNG['a_s_list_url'] = "URL till topplistan";
$LNG['a_s_default_language'] = "Standardspr�k";
$LNG['a_s_your_email'] = "Topplistans e-postadress";

$LNG['a_s_sql'] = "SQL-inst�llningar";
$LNG['a_s_sql_type'] = "Databastyp"; // 4.1.0
$LNG['a_s_sql_host'] = "V�rd";
$LNG['a_s_sql_database'] = "Databas";
$LNG['a_s_sql_username'] = "Anv�ndarnamn";
$LNG['a_s_sql_password'] = "L�senord";

$LNG['a_s_ranking'] = "Placeringar och urval";
$LNG['a_s_num_list'] = "Antal webbplatser att visa per sida"; // 5.0
$LNG['a_s_ranking_period'] = "R�kna statisken utifr�n dagar, veckor eller m�nader"; // 5.0
$LNG['a_s_ranking_method'] = "Sortera efter"; // 5.0
$LNG['a_s_ranking_average'] = "R�kna statistiken fr�n genomsnitt eller bara genom %s"; // 5.0
$LNG['a_s_featured_member'] = 'Utvald webbplats - f�r att funktionen ska fungera m�ste taggen {$featured_member} finns i wrapper.html.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Antal webbplatser som f�r anv�nda _top-stilen";
$LNG['a_s_ad_breaks'] = "Visa avbrott f�r reklam efter dessa placeringar (separera med komma-tecken)";

$LNG['a_s_member'] = "Anv�ndare";
$LNG['a_s_active_default'] = "Nyregistrerade webbplatser m�ste godk�nnas innan de f�r visas i topplistan";
$LNG['a_s_active_default_review'] = "Nya recensioner m�ste godk�nnas innan de visas";
$LNG['a_s_delete_after'] = "Ta bort inaktiva anv�ndare efter antal dagar (skriv 0 f�r att inaktivera funktionen)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Skicka e-post till administrat�ren n�r nya webbplatser registreras";
$LNG['a_s_max_banner_width'] = "Maximal banner-bredd (skriv 0 f�r att inaktivera funktionen)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Maximal banner-h�jd (skriv 0 f�r att inaktivera funktionen)"; // 4.2.0
$LNG['a_s_default_banner'] = "Standard-banner f�r anv�ndare som inte anger en egen banner";

$LNG['a_s_button'] = "Knappinst�llningar";
$LNG['a_s_ranks_on_buttons'] = "Vill du visa webbplatsernas placeringar p� knapparna? Du b�r l�sa <a href=\"http://www.aardvarkind.com/topsitesphp/manual/\" target=\"_blank\">manualen</a> innan du b�rjar anv�nda knappar som visar placeringar. Om du aktiverar den h�r funktioner kan du hoppa �ver resten av den h�r delen p� den h�r sidan."; // 4.2.0
$LNG['a_s_stat_buttons'] = "Knappar som visar placeringar"; // 4.2.0
$LNG['a_s_button_url'] = "Om ja/nej - webbadress till knappen du vill visa p� dina anv�ndares webbplatser"; // 4.0
$LNG['a_s_button_dir'] = "Om ja - webbadress till mappen med knapparna"; // 4.0
$LNG['a_s_button_ext'] = "Om ja - filtyper (gif, jpg, png och s� vidare)"; // 4.0
$LNG['a_s_button_num'] = "Om ja - Antal knappar - ju h�gre antal, desto mer resurser anv�nder scriptet p� servern"; // 4.0

$LNG['a_s_other'] = "�vriga inst�llningar";
$LNG['a_s_search'] = "S�kfunktion";
$LNG['a_s_time_offset'] = "Tidskompensation gentemot din server (om du eventullt befinner dig i annan tidszon eller har sommartid/vintertid)";
$LNG['a_s_gateway'] = "Aktivera separat ing�ngssida f�r topplistans bes�kare (f�r att f�rhindra fusk)";
$LNG['a_s_captcha'] = "Aktivera bildverifiering vid registrering (f�r att f�rhindra automatiska registreringar)"; // 4.2.2

$LNG['a_s_on'] = "Aktiverat";
$LNG['a_s_off'] = "Inaktiverat";
$LNG['a_s_days'] = "Dagar";
$LNG['a_s_months'] = "M�nader";
$LNG['a_s_weeks'] = "Veckor"; // 4.2.0
$LNG['a_s_yes'] = "Ja";
$LNG['a_s_no'] = "Nej";

$LNG['a_s_updated'] = "Inst�llningarna uppdaterades.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Stilar och kategorier"; // 5.0
$LNG['a_skins_default'] = "Standardstil"; // 5.0
$LNG['a_skins_set_default'] = "V�lj standardstil"; // 5.0
$LNG['a_skins_anon'] = "Anonym"; // 5.0
$LNG['a_skins_default_done'] = "Standardstilen �ndrades."; // 5.0
$LNG['a_skins_categories_done'] = "Kategoriernas stilar �ndrades."; // 5.0
$LNG['a_skins_new_category_done'] = "Kategorin skapades."; // 5.0
$LNG['a_skins_delete_done'] = "Kategorin togs bort."; // 5.0
$LNG['a_skins_edit_done'] = "Kategorin �ndrades."; // 5.0
$LNG['a_skins_invalid_skin'] = "Felaktig stil: %s. F�rs�k igen."; // 5.0
$LNG['a_skins_categories'] = "Kategorier"; // 5.0
$LNG['a_skins_new_category'] = "Skapa ny kategori"; // 5.0
$LNG['a_skins_set_skins'] = "�ndra kategoriernas stilar"; // 5.0
$LNG['a_skins_edit_category'] = "�ndra kategori"; // 5.0
$LNG['a_skins_category_name'] = "Kategorins namn"; // 5.0
$LNG['a_skins_diff_skins'] = "Du kan v�lja att ha olika stilar f�r olika kategorier nedan."; // 5.0
?>
