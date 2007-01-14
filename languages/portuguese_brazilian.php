<?php
//===========================================================================\\
// Aardvark Topsites PHP 5                                                   \\
// Copyright (c) 2003-2006 Jeremy Scheff.  All rights reserved.              \\
//---------------------------------------------------------------------------\\
// http://www.aardvarktopsitesphp.com/                http://www.avatic.com/ \\
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

if (!defined('ATSPHP')) {
  die("This file cannot be accessed directly.");
}

// When you make a new translation, fill out the following four variables to
// get credit for you work.
$translation = 'Portuguese (Brazilian) (Portugu�s Brasileiro)';
$translator_name = 'Felipe';
$translator_email = 'woodenideas@gmail.com';
$translator_url = '';

// Set this to the character encoding of your translation
$LNG['charset'] = "iso-8859-1";

// Global
$LNG['g_form_submit_short'] = "Ir";
$LNG['g_username'] = "Nome de Usu&aacute;rio";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "T�tulo";
$LNG['g_description'] = "Descri�&atilde;o";
$LNG['g_category'] = "Categoria"; // 4.1.0
$LNG['g_email'] = "Email";
$LNG['g_banner_url'] = "URL do Banner";
$LNG['g_password'] = "Senha";
$LNG['g_average'] = "M�dia";
$LNG['g_today'] = "Hoje";
$LNG['g_yesterday'] = "Ontem";
$LNG['g_daily'] = "Di&aacute;ria"; // 5.0
$LNG['g_this_month'] = "Esse M&ecirc;s"; // 5.0
$LNG['g_last_month'] = "M&ecirc;s passado"; // 5.0
$LNG['g_monthly'] = "Mensalmente"; // 5.0
$LNG['g_this_week'] = "Essa semana"; // 5.0
$LNG['g_last_week'] = "Semana Passada"; // 5.0
$LNG['g_weekly'] = "Semanal"; // 5.0
$LNG['g_pv'] = 'Pageviews'; // 5.0
$LNG['g_overall'] = 'Total'; // 5.0
$LNG['g_in'] = 'Clicks'; // 5.0
$LNG['g_out'] = 'Clicks'; // 5.0
$LNG['g_unq_pv'] = "Pageviews &uacute;nicas"; // 5.0
$LNG['g_tot_pv'] = "Total de pageviews"; // 5.0
$LNG['g_unq_in'] = "Clicks &uacute;nicos"; // 5.0
$LNG['g_tot_in'] = "Total de clicks"; // 5.0
$LNG['g_unq_out'] = "Clicks &uacute;nicos"; // 5.0
$LNG['g_tot_out'] = "Total de Clicks"; // 5.0
$LNG['g_invalid_u_or_p'] = "Usu&aacute;rio ou senha inv&aacute;lidos. Tente novamente."; // 5.0
$LNG['g_invalid_u'] = "Usu&aacute;rio inv&aacute;lido. Tente novamente."; // 5.0
$LNG['g_invalid_p'] = "Senha inv&aacute;lida. Tente novamente."; // 5.0
$LNG['g_session_expired'] = "Sess&atilde;o expirada Tente novamente."; // 5.0
$LNG['g_error'] = "Erro"; // 5.0
$LNG['g_delete_install'] = "Por motivos de seguran�a, voc� deve apagar o diret�rio de instala��o."; // 5.0

// Edit Account
$LNG['edit_header'] = "Editar Conta";
$LNG['edit_info_edited'] = "Sua conta foi editada com sucesso.";
$LNG['edit_password_blank'] = "Deixe em branco pra n&atilde;o mudar a senha"; // 4.0

// Gateway Page
$LNG['gateway_header'] = "Topsites - Barreira anti-cheating";
$LNG['gateway_text'] = "Para prevenir cheaters, usamos essa barreira.  Click no link abaixo pra entrar no topsite.";
$LNG['gateway_vote'] = "Entre e vote";
$LNG['gateway_no_vote'] = "Entre sem votar"; // 5.0

// Install
$LNG['install_header'] = "Instalar";
$LNG['install_welcome'] = "Bem vindo ao Aardvark Topsites PHP 5.  Preencha o formul�rio para instalar o script.";
$LNG['install_sql_prefix'] = "Prefixo da tabela - s� mude se voc� planejar instalar mais de um topsite no mesmo banco de dados";
$LNG['install_error_chmod'] = "Imposs�vel escrever no settings_sql.php . Utilize CHMOD 666 nesse arquivo.";
$LNG['install_error_sql'] = "Imposs�vel conectar ao banco de dados. Volte e cheque as configura��es do MySQL";
$LNG['install_done'] = "Seu topsite foi instalado. Apague esse diret�rio agora.";
$LNG['install_your'] = "Seu topsite";
$LNG['install_admin'] = "Admin";
$LNG['install_manual'] = "Manual";
$LNG['upgrade_header'] = "Upgrade";
$LNG['upgrade_welcome'] = "Bem vindo ao Aardvark Topsites PHP 5.  Antes do upgrade, lembre-se de fazer um backup.";
$LNG['upgrade_version'] = "Certifique-se que est� fazendo upgrade na vers�o %s."; // 5.1.0
$LNG['upgrade_error_version'] = "O upgrade s� funciona nas vers�es 4.1.0 ou mais novas.";
$LNG['upgrade_done'] = "Seu topsite foi atualizado. Apague esse diret�rio agora.";

// Join
$LNG['join_header'] = "Cadastro";
$LNG['join_enter_text'] = "Coloque o texto que voc&ecirc; v&ecirc; abaixo:"; // 4.2.2
$LNG['join_user'] = "Usu&aacute;rio"; // 5.0
$LNG['join_website'] = "Website"; // 5.0
$LNG['join_error_username'] = "Coloque um nome de usu&aacute;rio v&aacute;lido: apenas letras, n&uacute;meros, _ e -"; // 5.0
$LNG['join_error_username_duplicate'] = "Coloque um nome de usu&aacute;rio v&aacute;lido: esse j&aacute; foi cadastrado"; // 5.0
$LNG['join_error_url'] = "Digite uma URL v&aacute;lida";
$LNG['join_error_email'] = "Digite um e-mail v&aacute;lido";
$LNG['join_error_title'] = "Coloque o t�tulo do site";
$LNG['join_error_password'] = "Digite uma senha";
$LNG['join_error_urlbanner'] = "Coloque um banner v&aacute;lido. Deixo em branco se n&atilde;o possui um."; // 4.0
$LNG['join_error_time'] = "N&atilde;o clique atualizar na p&aacute;gina de cadastro."; // 4.2.0
$LNG['join_error_captcha'] = "Escreva a palavra de seguran�a corretamente."; // 4.2.2
$LNG['join_thanks'] = "Obrigado por entrar. Use esse c&oacute;digo para receber votos no rank.";
$LNG['join_change_warning'] = "Se mudar o c�digo, pode n&atilde;o funcionar.";
$LNG['join_welcome'] = "Bemvindo ao %s";
$LNG['join_welcome_admin'] = "Um novo membro entrou no topsite.";
$LNG['join_approve'] = "Seu site vai ser listado quando o administrador ativar seu cadastro."; // 5.1.0
$LNG['join_type'] = "Tipo de conta"; // 5.1.0
$LNG['join_standard'] = "Normal"; // 5.1.0

// Link Code
$LNG['link_code_header'] = "C�digo do link"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Senha Perdida"; // 5.0
$LNG['lost_pw_forgot'] = "Esqueceu sua senha?"; // 5.0
$LNG['lost_pw_get'] = "Adquirir senha"; // 5.0
$LNG['lost_pw_emailed'] = "Cheque o seu email para as instru��es."; // 5.0
$LNG['lost_pw_email'] = "Para pegar uma senha nova, entre nesse site:"; // 5.0
$LNG['lost_pw_new'] = "Digite uma nova senha"; // 5.0
$LNG['lost_pw_set_new'] = "Ativar a senha"; // 5.0
$LNG['lost_pw_finish'] = "Sua senha foi mudada com sucesso."; // 5.0

// Main Page
$LNG['main_header'] = "Ranking"; // 5.0
$LNG['main_all'] = "Todos os sites"; // 4.2.0
$LNG['main_method'] = "M�todo de ranking";
$LNG['main_members'] = "Membros";
$LNG['main_menu_rankings'] = "Ranking";
$LNG['main_menu_join'] = "Cadastro";
$LNG['main_menu_random'] = "Membro aleat�rio";
$LNG['main_menu_search'] = "Busca";
$LNG['main_menu_lost_code'] = "Perdi o c�digo"; // 5.0
$LNG['main_menu_lost_password'] = "Esqueci a senha"; // 5.0
$LNG['main_menu_edit'] = "Editar informa��es de membro";
$LNG['main_menu_user_cp'] = "Painel de Controle"; // 5.0
$LNG['main_featured'] = "Featured Member"; // 4.0.2
$LNG['main_executiontime'] = "Tempo de execu�&atilde;o"; // 4.0
$LNG['main_queries'] = "Queries SQL"; // 4.0
$LNG['main_powered'] = "Powered by";

// Ranking Table
$LNG['table_stats'] = "Status";
$LNG['table_unique'] = "&Uacute;nicos";
$LNG['table_total'] = "Total";
$LNG['table_rank'] = "Rank";
$LNG['table_title'] = "T&iacute;tulo"; // 4.0
$LNG['table_description'] = "Descri�&atilde;o"; // 4.0
$LNG['table_movement'] = "Movimenta�&atilde;o";
$LNG['table_up'] = "Subiu"; // 5.0
$LNG['table_down'] = "Desceu"; // 5.0
$LNG['table_neutral'] = "Neutro"; // 5.0

// Rate and Review
$LNG['rate_header'] = "Notas e reviews";
$LNG['rate_rating'] = "Notas";
$LNG['rate_review'] = "Review - HTML n&atilde;o permitido"; // 5.0
$LNG['rate_thanks'] = "Obrigado por dar a nota.";
$LNG['rate_error'] = "Voc&ecirc; j&aacute; deu nota a esse site.";
$LNG['rate_back'] = "Voltar aos Status";
$LNG['rate_email_admin'] = "Uma nova review foi postada no topsites."; // 5.1.0

// Search
$LNG['search_header'] = "Busca";
$LNG['search_off'] = "A busca est&aacute; desativada.";
$LNG['search_no_sites'] = "Desculpe, mas a busca n&atilde;o encontrou nada."; // 5.0
$LNG['search_prev'] = "Anterior"; // 3.2.1
$LNG['search_next'] = "Pr�ximo"; // 3.2.1
$LNG['search_displaying_results'] = "Mostrando %s de %s do(s) %s resultado(s) pra <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "Status";
$LNG['stats_info'] = "Info";
$LNG['stats_member_since'] = "Membro desde"; // 5.0
$LNG['stats_rating_avg'] = "M�dia";
$LNG['stats_rating_num'] = "N� de Notas";
$LNG['stats_rate'] = "D&ecirc; nota e escreva sobre o site";
$LNG['stats_reviews'] = "Reviews";
$LNG['stats_allreviews'] = "Mostrar todas as Reviews"; // 4.0
$LNG['stats_week'] = "Semanal"; // 5.0
$LNG['stats_highest'] = "Melhores"; // 5.0

// ssi.php
$LNG['ssi_top'] = "Top %s Sites"; // 4.0
$LNG['ssi_new'] = "%s membros mais novos"; // 5.0
$LNG['ssi_all'] = "Todos os sites"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Painel de Controle"; // 5.0
$LNG['user_cp_login'] = "Login"; // 5.0
$LNG['user_cp_logout'] = "Logout"; // 5.0
$LNG['user_cp_welcome'] = "Bem vindo ao painel de controle.  Use os links na esquerda para configurar sua conta"; // 5.0
$LNG['user_cp_logout_message'] = "Voc&ecirc; acaba de sair do painel de controle."; // 5.0
$LNG['user_cp_login_long'] = "Logue com seu nome e senha ou ID."; // 5.1.0
$LNG['user_cp_openid'] = "IF"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "N&atilde;o foi possivel encontrar o id %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Voc&ecirc; deve se cadastrar no site antes de entrar no painel de controle."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Erro ao processar login. Tente de novo.."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Voc&ecirc; precisa ter acesso pra proseguir. Tente de novo."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Erro: %s"; // 5.1.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Aprovar Novos Membros"; // 5.0
$LNG['a_approve'] = "Aprovar"; // 4.0
$LNG['a_approve_none'] = "N�o h� membros esperando aprova��o."; // 4.0
$LNG['a_approve_done'] = "O membro foi aprovado."; // 4.0
$LNG['a_approve_dones'] = "Os membros foram aprovados."; // 4.0
$LNG['a_approve_sel'] = "Marcados:"; // 5.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Aprovar Novas Reviews"; // 5.0
$LNG['a_approve_rev_none'] = "N�o h� reviews esperando aprova��o."; // 5.0
$LNG['a_approve_rev_done'] = "A review foi aprovada."; // 5.0
$LNG['a_approve_rev_dones'] = "As reviews foram aprovadas."; // 5.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Criar p�gina"; // 5.1.0
$LNG['a_create_page_id'] = "ID da p�gina - Vai ser usado na URL, portanto s� pode conter letras, n�meros, _ e -"; // 5.1.0
$LNG['a_create_page_error_id'] = "O ID da p�gina s� pode conter letras, n�meros, _ e -. Volte e corrija."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "J� existe uma p�gina com esse ID. Volte e coloque um novo."; // 5.1.0
$LNG['a_create_page_created'] = "A p�gina foi criada. O link pra %s s� pode ser colocado pelo administrador."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Deletar Membro"; // 5.0
$LNG['a_del_headers'] = "Deletar Membros"; // 5.0
$LNG['a_del_done'] = "O membro foi deletado."; // 5.0
$LNG['a_del_dones'] = "Os membros foram deletados."; // 5.0
$LNG['a_del_warn'] = "Voc� quer apagar %s?"; // 5.0
$LNG['a_del_multi'] = "esses %s membros"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Deletar filtro de palavr�o"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Deletar filtros de palavr�o"; // 5.1.0
$LNG['a_del_bad_word_done'] = "O filtro de palavr�o foi deletado."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Os filtros de palavr�o foram deletados."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Voc� quer mesmo deletar %s da lista de palavr�es?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "essas %s palavras"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "ID dp filtro inv�lido. Tente novamente."; // 5.1.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Deletar p�gina"; // 5.1.0
$LNG['a_del_page_headers'] = "Deletar p�ginas"; // 5.1.0
$LNG['a_del_page_done'] = "A p�gina foi deletada."; // 5.1.0
$LNG['a_del_page_dones'] = "As p�ginas foram deletadas."; // 5.1.0
$LNG['a_del_page_warn'] = "Quer mesmo deletar %s?"; //5.1.0
$LNG['a_del_page_multi'] = "essas %s p�ginas"; //5.1.0
$LNG['a_del_page_invalid_id'] = "ID da p�gina inv�lido. Tente novamente."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Deletar Review"; // 5.0
$LNG['a_del_rev_headers'] = "Deletar Reviews"; // 5.0
$LNG['a_del_rev_done'] = "A review foi deletada."; // 5.0
$LNG['a_del_rev_dones'] = "As reviews foram deletadas."; // 5.0
$LNG['a_del_rev_warn'] = "Quer mesmo apagar essa review?"; //5.0
$LNG['a_del_rev_warns'] = "Quer mesmo apagar essas reviews?"; //5.0
$LNG['a_del_rev_invalid_id'] = "ID da review in�lido. Tente de novo."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Editar Membro"; // 5.0
$LNG['a_edit_site_is'] = "Esse site est�"; // 4.0
$LNG['a_edit_active'] = "Ativo (Listado)"; // 4.0
$LNG['a_edit_inactive'] = "Inativo (N�o Listado)"; // 5.0
$LNG['a_edit_edited'] = "O membro foi editado.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Editar Filtros"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "O filtro de palavr�o foi editado."; // 5.1.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Editar P�gina"; // 5.1.0
$LNG['a_edit_page_content'] = "Conte�do - Voc� pode usar HTML aqui"; // 5.1.0
$LNG['a_edit_page_edited'] = "A p�gina foi editada."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Editar Review"; // 5.0
$LNG['a_edit_rev_edited'] = "A review foi editada.";

// Admin > Email Members
$LNG['a_email_header'] = "Email pros Membros"; // 5.0
$LNG['a_email_subject'] = "Assunto"; // 4.2.0
$LNG['a_email_message'] = "Mensagem"; // 4.2.0
$LNG['a_email_msg_sent'] = "Um e-mail foi enviado pra %s"; // 5.0
$LNG['a_email_not_sent'] = "O e-mail n�o p�de ser enviado a %s"; // 5.0
$LNG['a_email_sent'] = "%s membros receberam e-mail."; // 4.2.0
$LNG['a_email_failed'] = "%s membros n�o receberam e-mail."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Voc� acaba de sair do painel de admin."; // 5.0

// Admin > Main
$LNG['a_header'] = "Admin"; // 5.0
$LNG['a_main'] = "Bem-vindo ao admin.  Use os links � esquerda para modificar o topsite."; // 5.0
$LNG['a_main_approve'] = "H� 1 site esperando aprova��o."; // 5.0
$LNG['a_main_approves'] = "H� %s sites esperando aprova��o."; // 5.0
$LNG['a_main_approve_rev'] = "H� is 1 review esperando aprova��o."; // 5.0
$LNG['a_main_approve_revs'] = "H� %s reviews esperando aprova��o."; // 5.0
$LNG['a_main_your'] = "Sua vers�o"; // 5.0
$LNG['a_main_latest'] = "�ltima vers�o"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Editar Membros"; // 5.0
$LNG['a_man_actions'] = "A��es"; // 4.2.0
$LNG['a_man_edit'] = "Editar"; // 4.2.0
$LNG['a_man_delete'] = "Deletar"; // 4.2.0
$LNG['a_man_email'] = "Email"; // 4.2.0
$LNG['a_man_all'] = "Selecionar tudo"; // 5.0
$LNG['a_man_none'] = "Tirar sele��o"; // 5.0
$LNG['a_man_del_sel'] = "Deletar selecionados"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Filtro de palavr�es"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Coloque uma palavra e a substitui��o abaixo.  Por exemplo, \"porra\" e \"p****\"."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "A troca exata utiliza s� uma palavra. Global vai detectar qualquer coisa contendo a palavra. Ent�o, global em \"pato\" iria filtrar tamb�m \"carrapato\"."; // 5.1.0
$LNG['a_man_bad_words_word'] = "palavra"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Substituir"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "que tenha"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Exatamente"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Global"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Filtrar palavra"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" foi adicionada ao filtro."; // 5.1.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Editar p�ginas"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Editar Reviews"; // 5.0
$LNG['a_man_rev_enter'] = "Para controlar as reviews, digite o nome de usu�rio de um membro."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Review"; // 5.0
$LNG['a_man_rev_date'] = "Data"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Menu";
$LNG['a_menu_main'] = "Principal"; // 5.0
$LNG['a_menu_approve'] = "Aprovar Membros";
$LNG['a_menu_manage'] = "Editar Membros"; // 4.2.0
$LNG['a_menu_settings'] = "Configura��es"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Filtro de Palavr�o"; // 5.1.0
$LNG['a_menu_skins'] = "Skins e Categorias"; // 5.0
$LNG['a_menu_approve_reviews'] = "Aprovar Reviews"; // 5.0
$LNG['a_menu_manage_reviews'] = "Editar Reviews"; // 5.0
$LNG['a_menu_email'] = "Email pros Membros";
$LNG['a_menu_delete_review'] = "Deletar Review";
$LNG['a_menu_logout'] = "Logout";
$LNG['a_menu_delete'] = "Deletar Member";
$LNG['a_menu_edit'] = "Editar Member";
$LNG['a_menu_create_page'] = "Criar p�gina"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Editar p�ginas"; // 5.1.0
$LNG['a_header_members'] = "Membros"; // 5.0
$LNG['a_header_settings'] = "Configura��es"; // 5.0
$LNG['a_header_reviews'] = "Reviews"; // 5.0
$LNG['a_header_pages'] = "P�ginas"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Configura��es";
$LNG['a_s_help'] = "Ajuda"; // 5.1.0

$LNG['a_s_general'] = "Configura��es Gerais";
$LNG['a_s_admin_password'] = "Senha do Admin";
$LNG['a_s_list_name'] = "Nome do seu topsite";
$LNG['a_s_list_url'] = "URL para o diret�rio do topsite";
$LNG['a_s_default_language'] = "Idioma";
$LNG['a_s_your_email'] = "Seu endere�o de e-mail";

$LNG['a_s_sql'] = "Configura��es SQL";
$LNG['a_s_sql_type'] = "Tipo de banco de dados"; // 4.1.0
$LNG['a_s_sql_host'] = "Host";
$LNG['a_s_sql_database'] = "Database";
$LNG['a_s_sql_username'] = "Username";
$LNG['a_s_sql_password'] = "Senha";

$LNG['a_s_ranking'] = "Configura��es de Ordena��o";
$LNG['a_s_num_list'] = "N�mero de sites por p�gina"; // 5.0
$LNG['a_s_ranking_period'] = "Per�odo de ranking"; // 5.0
$LNG['a_s_ranking_method'] = "M�todo de ranking"; // 5.0
$LNG['a_s_ranking_average'] = "Rank por m�dia ou apenas por %s"; // 5.0
$LNG['a_s_featured_member'] = 'Membro especial - Voc� tem que adicionar {$featured_member} ao wrapper.html depois de ligar a op��o.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "N�mero de membros que usar�o o skin _top";
$LNG['a_s_ad_breaks'] = "Mostrar propaganda depois desses ranks (separe com v�rgula) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_member'] = "Configura��es dos Membros";
$LNG['a_s_active_default'] = "Membros s� ser�o listados depois da aprova��o";
$LNG['a_s_active_default_review'] = "Reviews s� ser�o mostradas depois da aprova��o";
$LNG['a_s_delete_after'] = "Apagar membros inativos ap�s esses dias (0 para desligar)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Enviar email ao admin quando um membro se cadastrar"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Enviar email ao admin quando uma review for postada"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Largura m�xima do banner (0 para desligar)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Altura m�xima do banner (0 para desligar)"; // 4.2.0
$LNG['a_s_default_banner'] = "Banner geral para os membros que n�o tiverem um";

$LNG['a_s_button'] = "Configura��es dos Bot�es (clicks)";
$LNG['a_s_ranks_on_buttons'] = "Ranks nos bot�es -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Bot�es de stat"; // 4.2.0
$LNG['a_s_button_url'] = "Se sim/n�o - URL do bot�o geral para os sites membros"; // 4.0
$LNG['a_s_button_dir'] = "Se sim - URL do diret�rio onde os bot�es est�o"; // 4.0
$LNG['a_s_button_ext'] = "Se sim - Extens�o dos bot�es (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "Se sim - N�mero de bot�es que voc� fez"; // 4.0
$LNG['a_s_google_friendly_links'] = "Google-friendly links - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_other'] = "Outras configura��es";
$LNG['a_s_search'] = "Busca";
$LNG['a_s_time_offset'] = "Seu fuso hor�rio em rela��o ao servidor (em horas)";
$LNG['a_s_gateway'] = "Gateway page to deter cheating for hits in";
$LNG['a_s_captcha'] = "Verifica��o de palavras no cadastro (prote��o contra spammers) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_on'] = "Ligado";
$LNG['a_s_off'] = "Desligado";
$LNG['a_s_days'] = "Dias";
$LNG['a_s_months'] = "Meses";
$LNG['a_s_weeks'] = "Semanas"; // 4.2.0
$LNG['a_s_yes'] = "Sim";
$LNG['a_s_no'] = "N�o";

$LNG['a_s_updated'] = "Your settings have been updated.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Skins e Categorias"; // 5.0
$LNG['a_skins_default'] = "Skin principal"; // 5.0
$LNG['a_skins_set_default'] = "Definir skin principal"; // 5.0
$LNG['a_skins_anon'] = "An�nimo"; // 5.0
$LNG['a_skins_default_done'] = "O skin principal foi definido."; // 5.0
$LNG['a_skins_categories_done'] = "Os skins das categorias foram definidos."; // 5.0
$LNG['a_skins_new_category_done'] = "Uma nova categoria foi criada."; // 5.0
$LNG['a_skins_delete_done'] = "A categoria foi apagada."; // 5.0
$LNG['a_skins_delete_error'] = "A categoria n�o foi apagada, porque voc� precisa de no m�nimo uma categoria."; // 5.1.0
$LNG['a_skins_edit_done'] = "A categoria foi editada."; // 5.0
$LNG['a_skins_invalid_skin'] = "Skin inv�lido: %s.  Tente novamente."; // 5.0
$LNG['a_skins_categories'] = "Categorias"; // 5.0
$LNG['a_skins_new_category'] = "Criar Nova Categoria"; // 5.0
$LNG['a_skins_set_skins'] = "Definir Skin da Categoria"; // 5.0
$LNG['a_skins_edit_category'] = "Editar Categoria"; // 5.0
$LNG['a_skins_category_name'] = "Nome da Categoria"; // 5.0
$LNG['a_skins_diff_skins'] = "Se quiser skins diferentes por categorias, escolha abaixo."; // 5.0
?>
