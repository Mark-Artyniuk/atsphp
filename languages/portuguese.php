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
$translation = 'Portuguese (Portugu�s)';
$translator_name = 'Barba Ruiva';
$translator_email = 'barbaruiva@hotmail.com';
$translator_url = 'http://www.blog-barbaruiva.com/';

// Set this to the character encoding of your translation
$LNG['charset'] = "windows-1252";

// Global
$LNG['g_form_submit_short'] = "Ir";
$LNG['g_username'] = "Nome de Utilizador";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "T�tulo";
$LNG['g_description'] = "Descri��o";
$LNG['g_category'] = "Categoria"; // 4.1.0
$LNG['g_email'] = "E-mail";
$LNG['g_banner_url'] = "URL da Faixa Publicit�ria";
$LNG['g_password'] = "Palavra-Passe";
$LNG['g_average'] = "M�dia";
$LNG['g_today'] = "Hoje";
$LNG['g_yesterday'] = "Ontem";
$LNG['g_daily'] = "Di�ria"; // 5.0
$LNG['g_this_month'] = "Este M�s"; // 5.0
$LNG['g_last_month'] = "�ltimo M�s"; // 5.0
$LNG['g_monthly'] = "Mensalmente"; // 5.0
$LNG['g_this_week'] = "Esta Semana"; // 5.0
$LNG['g_last_week'] = "�ltima "; // 5.0
$LNG['g_weekly'] = "Semanalmente"; // 5.0
$LNG['g_pv'] = 'Visitas'; // 5.0
$LNG['g_overall'] = 'Geral'; // 5.0
$LNG['g_in'] = 'Entrada'; // 5.0
$LNG['g_out'] = 'Sa�da'; // 5.0
$LNG['g_unq_pv'] = "Visitas �nicas"; // 5.0
$LNG['g_tot_pv'] = "Visitas Totais"; // 5.0
$LNG['g_unq_in'] = "Entradas �nicas"; // 5.0
$LNG['g_tot_in'] = "Entradas Totais"; // 5.0
$LNG['g_unq_out'] = "Sa�das �nicas"; // 5.0
$LNG['g_tot_out'] = "Sa�das Totais"; // 5.0
$LNG['g_invalid_u_or_p'] = "Nome de Utilizador ou Palavra-Passe inv�lidos .  Por favor, tente outra vez."; // 5.0
$LNG['g_invalid_u'] = "Nome de Utilizador inv�lido.  Por favor, tente outra vez."; // 5.0
$LNG['g_invalid_p'] = "Palavra-Passe inv�lida.  Por favor, tente outra vez."; // 5.0
$LNG['g_session_expired'] = "A sua Sess�o Expirou.  Por favor, entre outra vez."; // 5.0
$LNG['g_error'] = "Erro"; // 5.0
$LNG['g_delete_install'] = "Por motivos de seguran�a, deve eliminar a directoria INSTALL antes de correr o script."; // 5.0

// Editar Conta
$LNG['edit_header'] = "Editar Conta";
$LNG['edit_info_edited'] = "A sua conta foi editada com sucesso.";
$LNG['edit_password_blank'] = "Deixe em branco se quiser manter a mesma Palavra-Passe"; // 4.0

// P�gina de Acesso
$LNG['gateway_header'] = "P�gina de acesso ao Topsite ";
$LNG['gateway_text'] = "Para impedir fraudes, foi colocada uma p�gina de acesso.  Clique na Hiperliga��o em baixo para aceder ao Topsite.";
$LNG['gateway_vote'] = "Entrar e Votar";
$LNG['gateway_no_vote'] = "Entrar sem Votar"; // 5.0

// Instala��o
$LNG['install_header'] = "Instalar";
$LNG['install_welcome'] = "Bem Vindo ao Aardvark Topsites PHP 5.  Preencha o Formul�rio em baixo para instalar o script .";
$LNG['install_sql_prefix'] = "Prefixo da tabela - modifique-o apenas se estiver a correr mais do que uma tabela a partir da mesma Base de Dados";
$LNG['install_error_chmod'] = "N�o foi poss�vel escrever para settings_sql.php.  Assegure-se de que tem permiss�es CHMOD 666 em settings_sql.php.";
$LNG['install_error_sql'] = "N�o foi possivel conectar com a Base de Dados  SQL .  Por favor volte atr�s e verifique as configura��es de SQL.";
$LNG['install_done'] = "O seu Topsite foi instalado.  Por motivos de seguran�a, deve eliminar a directoria INSTALL antes de continuar .";
$LNG['install_your'] = "A sua lista de Topsites";
$LNG['install_admin'] = "Administrador";
$LNG['install_manual'] = "Manual";
$LNG['upgrade_header'] = "Actualiza��o";
$LNG['upgrade_welcome'] = "Bem Vindo ao Aardvark Topsites PHP 5.  Antes de qualquer actualiza��o, lembre-se de guardar os seus dados.";
$LNG['upgrade_version'] = "Por favor certifique-se de que est� a actulizar a partir da vers�o %s."; // 5.1.0
$LNG['upgrade_error_version'] = "As actualiza��es s� s�o suportadas a partir da vers�o PHP 4.1.0 ou superior.";
$LNG['upgrade_done'] = "A sua lista de Topsites foi actualizada.  Antes de continuar, elimine esta directoria.";

// Inscri��o
$LNG['join_header'] = "Inscreva-se";
$LNG['join_enter_text'] = "Escreva o texto exactamente como mostrado na Imagem:"; // 4.2.2
$LNG['join_user'] = "Utilizador"; // 5.0
$LNG['join_website'] = "Website"; // 5.0
$LNG['join_error_username'] = "Escreva um Nome de Utilzador V�lido: apenas letras, n�meros, underscore e h�fens."; // 5.0
$LNG['join_error_username_duplicate'] = "Escreva um Nome de Utilzador V�lido: O Nome de Utilizador que escolheu j� est� a ser utilzado."; // 5.0
$LNG['join_error_url'] = "Escreva um URL V�lido.";
$LNG['join_error_email'] = "Escreva um endere�o de E-mail V�lido.";
$LNG['join_error_title'] = "Escreva um t�tulo para o seu Website.";
$LNG['join_error_password'] = "Escreva uma Palavra-Passe.";
$LNG['join_error_urlbanner'] = "Escreva uma Faixa Publicit�ria V�lida.  deixe em branco se n�o tiver nenhuma.  tem que ser mais pequena que"; // 4.0
$LNG['join_error_time'] = "N�o actualize a p�gina de confirma��o de inscri��o ."; // 4.2.0
$LNG['join_error_captcha'] = "A palavra que escreveu n�o coincide com a imagem."; // 4.2.2
$LNG['join_thanks'] = "Agradecemos desde j� a sua inscri��o!  Coloque este c�digo no seu site para poder ser avaliado.";
$LNG['join_change_warning'] = "Se mudar o c�digo, pode n�o funcionar correctamente.";
$LNG['join_welcome'] = "Bem Vindo ao  %s";
$LNG['join_welcome_admin'] = "Increveu-se um novo membro na sua lista de Topsites.";
$LNG['join_approve'] = "O seu site entrar� para a lista, assim que for aprovado pelos administradores."; // 5.1.0
$LNG['join_type'] = "Tipo de Conta"; // 5.1.0
$LNG['join_standard'] = "Normal"; // 5.1.0

//C�digo da Hiperliga��o
$LNG['link_code_header'] = "C�digo da Hiperliga��o"; // 5.0

// Palavra-Passe Perdida
$LNG['lost_pw_header'] = "Palavra-Passe Perdida"; // 5.0
$LNG['lost_pw_forgot'] = "Esqueceu-se da Palavra-Passe?"; // 5.0
$LNG['lost_pw_get'] = "Obtenha uma nova Palavra-Passe"; // 5.0
$LNG['lost_pw_emailed'] = "Por favor verifique o seu E-mail para mais instru��es."; // 5.0
$LNG['lost_pw_email'] = "Para escolher uma nova Palavra-Passe para a sua conta, v� at� este URL:"; // 5.0
$LNG['lost_pw_new'] = "Escrever uma nova Palavra-Passe"; // 5.0
$LNG['lost_pw_set_new'] = "Definir a Palavra-Passe"; // 5.0
$LNG['lost_pw_finish'] = "A Palavra-Passe da sua conta foi alterada para a nova Palavra-Passe que escolheu."; // 5.0

// P�gina Principal
$LNG['main_header'] = "Classifica��o"; // 5.0
$LNG['main_all'] = "Todos os Sites "; // 4.2.0
$LNG['main_method'] = "M�todos de Classifica��o";
$LNG['main_members'] = "Membro";
$LNG['main_menu_rankings'] = "Classifica��es";
$LNG['main_menu_join'] = "Inscreva-se";
$LNG['main_menu_random'] = "Membro Aleat�rio";
$LNG['main_menu_search'] = "Pesquisa";
$LNG['main_menu_lost_code'] = "C�digo Perdido"; // 5.0
$LNG['main_menu_lost_password'] = "Palavra-Passe Perdida"; // 5.0
$LNG['main_menu_edit'] = "Editar as Informa��es de um membro";
$LNG['main_menu_user_cp'] = "Painel de Controlo de Utilizador"; // 5.0
$LNG['main_featured'] = "Membro em Destaque"; // 4.0.2
$LNG['main_executiontime'] = "Tempo de Execu��o do Script (em segundos) "; // 4.0
$LNG['main_queries'] = "Pesquisas SQL"; // 4.0
$LNG['main_powered'] = "Programado por:";

// Tabela de Classifica��es
$LNG['table_stats'] = "Estat�sticas";
$LNG['table_unique'] = "�nico";
$LNG['table_total'] = "Total";
$LNG['table_rank'] = "Lugar";
$LNG['table_title'] = "T�tulo"; // 4.0
$LNG['table_description'] = "Descri��o"; // 4.0
$LNG['table_movement'] = "Movimenta��o";
$LNG['table_up'] = "A Subir"; // 5.0
$LNG['table_down'] = "A Descer"; // 5.0
$LNG['table_neutral'] = "Igual"; // 5.0

// Avaliar e Analisar
$LNG['rate_header'] = "Avalie e Analise";
$LNG['rate_rating'] = "Avalia��o";
$LNG['rate_review'] = "Analise - N�o � permitido HTML"; // 5.0
$LNG['rate_thanks'] = "Agradecemos a sua avalia��o.";
$LNG['rate_error'] = "J� Avaliou este site antes.";
$LNG['rate_back'] = "Voltar para as Estat�sticas";
$LNG['rate_email_admin'] = "Una nova an�lise foi colocada na sua lista de Topsites."; // 5.1.0

// Pesquisa
$LNG['search_header'] = "Pesquisar";
$LNG['search_off'] = "A funcionalidade de Pesquisa foi desactivada .";
$LNG['search_no_sites'] = "Pedimos desculpa, mas n�o foram encontrados sites condizentes com os seus crit�rios."; // 5.0
$LNG['search_prev'] = "Anterior"; // 3.2.1
$LNG['search_next'] = "Pr�ximo"; // 3.2.1
$LNG['search_displaying_results'] = "Mostrando %s a %s dos %s dos resultados para <b>%s</b>."; // 5.1.0

// Estat�sticas
$LNG['stats_header'] = "Estat�sticas";
$LNG['stats_info'] = "Informa��o";
$LNG['stats_member_since'] = "Membro desde"; // 5.0
$LNG['stats_rating_avg'] = "M�dia das Avalia��es";
$LNG['stats_rating_num'] = "N�mero de Avalia��es";
$LNG['stats_rate'] = "Avalie e Analise este site";
$LNG['stats_reviews'] = "An�lises";
$LNG['stats_allreviews'] = "Mostrar todas as An�lises"; // 4.0
$LNG['stats_week'] = "Semana"; // 5.0
$LNG['stats_highest'] = "Mais Alto"; // 5.0

// ssi.php
$LNG['ssi_top'] = "%s Sites do Top"; // 4.0
$LNG['ssi_new'] = "%s Membros mais recentes"; // 5.0
$LNG['ssi_all'] = "Todos os Sites"; // 4.0

// Painel de Controlo de Utilizador // 5.0
$LNG['user_cp_header'] = "Painel de Controlo de Utilizador"; // 5.0
$LNG['user_cp_login'] = "Entrar"; // 5.0
$LNG['user_cp_logout'] = "Sair"; // 5.0
$LNG['user_cp_welcome'] = "Bem Vindo ao Painel de Controlo de Utilizador.  Utilize as Hiperliga��es � esquerda para gerir a sua conta."; // 5.0
$LNG['user_cp_logout_message'] = "Saiu do Painel de Controlo de Utilizador."; // 5.0
$LNG['user_cp_login_long'] = "Entre com o seu Nome de Utilizador e Palavra-Passe ou com a ID de adminisra��o."; // 5.1.0
$LNG['user_cp_openid'] = "ID de Administra��o"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "N�o foi poss�vel encontrar a ID de Administra��o para este servidor %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Tem que se inscrever nesta lista de Topsites para ter acesso ao Painel de Controlo de Utilizador."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Ocorreu um erro ao processar a sua entrada.  Por favor, tente de novo."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Tem que lhe ser concedido acesso para continuar.  Por favor, tente de novo."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Erro do Servidor: %s"; // 5.1.0

// Administra��o > Aprovar Novos Membros // 4.0
$LNG['a_approve_header'] = "Aprovar Novos Membros"; // 5.0
$LNG['a_approve'] = "Aprovar"; // 4.0
$LNG['a_approve_none'] = "N�o h� novos membros � espera de aprova��o."; // 4.0
$LNG['a_approve_done'] = "O membro foi Aprovado."; // 4.0
$LNG['a_approve_dones'] = "Os membros foram Aprovados."; // 4.0
$LNG['a_approve_sel'] = "Com Selecionado:"; // 5.0

// Administra��o > Aprovar novas An�lises// 5.0
$LNG['a_approve_rev_header'] = "Aprovar novas An�lises"; // 5.0
$LNG['a_approve_rev_none'] = "N�o h� novas analises para serem aprovadas."; // 5.0
$LNG['a_approve_rev_done'] = "A an�lise foi aprovada."; // 5.0
$LNG['a_approve_rev_dones'] = "As an�lises foram aprovadas."; // 5.0

// Administra��o> Criar uma P�gina Personalizada // 5.1.0
$LNG['a_create_page_header'] = "Criar uma P�gina Personalizada"; // 5.1.0
$LNG['a_create_page_id'] = "ID da p�gina - Vai ser usado no URL, por isso s� pode conter letras, n�meros, underscores e h�fens"; // 5.1.0
$LNG['a_create_page_error_id'] = "O ID da p�gina s� pode conter letras, n�meros, underscores e h�fens.  Por favor, volte atr�s e corrija o ID da p�gina."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "J� existe uma p�gina personalizada com o mesmo  ID.  por favor, volte atr�s e corrija o ID da p�gina."; // 5.1.0
$LNG['a_create_page_created'] = "A p�gina foi criada com sucsso.  tem que adicionar manualmente a hiperliga��o %s em wrapper.html."; // 5.1.0

// Administra��o > Eliminar Membro
$LNG['a_del_header'] = "Eliminar Membro"; // 5.0
$LNG['a_del_headers'] = "Eliminar Membros"; // 5.0
$LNG['a_del_done'] = "O membro foi eliminado."; // 5.0
$LNG['a_del_dones'] = "O membro foram eliminados."; // 5.0
$LNG['a_del_warn'] = "Tem a certeza que quer eliminar %s?"; // 5.0
$LNG['a_del_multi'] = "estes %s membros"; //5.0

// Administra��o > Eliminar Palavras Indesejadas // 5.1.0
$LNG['a_del_bad_word_header'] = "Eliminar a Palavra Filtrada"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Eliminar as Palavras Filtradas"; // 5.1.0
$LNG['a_del_bad_word_done'] = "A palavra filtrada foi eliminada."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "As palavra  filtrada  foram eliminadas."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Tem a certeza que quer eliminar %s da lista de palavras filtradas?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "estas %s palavras"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "ID da palavra filtrada inv�lido.  Por favor, tente de novo."; // 5.1.0

// Administra��o > Eliminar P�gina Personalizada // 5.1.0
$LNG['a_del_page_header'] = "Eliminar P�gina Personalizada"; // 5.1.0
$LNG['a_del_page_headers'] = "Eliminar P�ginas Personalizadas"; // 5.1.0
$LNG['a_del_page_done'] = "A P�gina Personalizada foi eliminada."; // 5.1.0
$LNG['a_del_page_dones'] = "As P�ginas Personalizadas foram eliminadas."; // 5.1.0
$LNG['a_del_page_warn'] = "Tem a certeza que quer eliminar %s?"; //5.1.0
$LNG['a_del_page_multi'] = "estas %s p�ginas"; //5.1.0
$LNG['a_del_page_invalid_id'] = "ID da P�gina Personalizada inv�lido.  Por favor, tente de novo."; // 5.1.0

// Administra��o > Eliminar An�lise // 5.0
$LNG['a_del_rev_header'] = "Eliminar An�lise"; // 5.0
$LNG['a_del_rev_headers'] = "Eliminar An�lises"; // 5.0
$LNG['a_del_rev_done'] = "A An�lise  foi eliminada."; // 5.0
$LNG['a_del_rev_dones'] = "As An�lises  foram eliminadas."; // 5.0
$LNG['a_del_rev_warn'] = "Tem a certeza que quer eliminar esta An�lise?"; //5.0
$LNG['a_del_rev_warns'] = "Tem a certeza que quer eliminar estas An�lises?"; //5.0
$LNG['a_del_rev_invalid_id'] = "ID da an�lise inv�lido.  Por favor, tente de novo."; // 5.0

// Administra��o > Editar Membro
$LNG['a_edit_header'] = "Editar Membro"; // 5.0
$LNG['a_edit_site_is'] = "Este Site est�"; // 4.0
$LNG['a_edit_active'] = "Activo (Listado)"; // 4.0
$LNG['a_edit_inactive'] = "Inactivo (N�o Listado)"; // 5.0
$LNG['a_edit_edited'] = "O membro foi editado.";

// Administra��o > Editar as Palavras Indesejadas // 5.1.0
$LNG['a_edit_bad_word_header'] = "Editar Palavra Filtrada"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "A palavra filtrada foi editada."; // 5.1.0

// Administra��o > Editar P�ginas Personalizadas // 5.1.0
$LNG['a_edit_page_header'] = "Editar P�gina Personalizada"; // 5.1.0
$LNG['a_edit_page_content'] = "Conte�do - Aqui, pode usar c�digo HTML"; // 5.1.0
$LNG['a_edit_page_edited'] = "A P�gina Personalizada foi editada."; // 5.1.0

// Administra��o > Editar An�lise // 5.0
$LNG['a_edit_rev_header'] = "Editar An�lise"; // 5.0
$LNG['a_edit_rev_edited'] = "A An�lise foi editada.";

// Administra��o > Enviar E-mail aos Membros
$LNG['a_email_header'] = "Enviar E-mail aos Membros"; // 5.0
$LNG['a_email_subject'] = "Assunto"; // 4.2.0
$LNG['a_email_message'] = "Menssagem"; // 4.2.0
$LNG['a_email_msg_sent'] = "Foi enviado um e-mail para %s"; // 5.0
$LNG['a_email_not_sent'] = "Um E-mail n�o pode ser enviado para %s"; // 5.0
$LNG['a_email_sent'] = "Foi enviado um E-mail para estes membros %s ."; // 4.2.0
$LNG['a_email_failed'] = "N�o foi enviado um E-mail para estes membros %s ."; // 4.2.0

// Administra��o > Sa�da
$LNG['a_logout_message'] = "Sa�u da Administra��o."; // 5.0

// Administra��o > Principal
$LNG['a_header'] = "Administra��o"; // 5.0
$LNG['a_main'] = "Bem Vindo � administra��o.  Utilize as Hiperliga��es � esquerda para gerir a sua lista de Topsites."; // 5.0
$LNG['a_main_approve'] = "Existe 1 site � espera para ser aprovado."; // 5.0
$LNG['a_main_approves'] = "Existem %s sites � espera para serem aprovados."; // 5.0
$LNG['a_main_approve_rev'] = "Existe 1 an�lise � espera para ser aprovada."; // 5.0
$LNG['a_main_approve_revs'] = "Existem %s an�lises � espera para serem aprovadas."; // 5.0
$LNG['a_main_your'] = "A sua Vers�o"; // 5.0
$LNG['a_main_latest'] = "�ltima vers�o"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Administra��o > Gest�o dos Membros
$LNG['a_man_header'] = "Gerir Membros"; // 5.0
$LNG['a_man_actions'] = "Ac��es"; // 4.2.0
$LNG['a_man_edit'] = "Editar"; // 4.2.0
$LNG['a_man_delete'] = "Eliminar"; // 4.2.0
$LNG['a_man_email'] = "E-mail"; // 4.2.0
$LNG['a_man_all'] = "Seleccionar Todos"; // 5.0
$LNG['a_man_none'] = "N�o Seleccionar Nenhum"; // 5.0
$LNG['a_man_del_sel'] = "Eliminar os Seleccionados"; // 5.0

// Administra��o > Gest�o das Palavras Indesejadas // 5.1.0
$LNG['a_man_bad_words_header'] = "Filtro de Linguagem Inapropriada"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Escreva em baixo uma palavra e a sua substituta.  Por exemplo, pode escrever \"Hell\" no campo da palavra \"H***\" no campo de substitui��o."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "O emparelhamento Exacto apenas ir� substituir a palavra exacta.  O emparelhamento Global ir� subsituir qualquer express�o que contenha a palavra .  Por exemplo, o emparelhamento global de \"hell\" tamb�m substituir� \"shell\" e \"hello\"."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Palavra"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Substituta"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Emparelhamento"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Exacto"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Global"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Filtrar Palavra"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" foi adicionada ao Filtro de Linguagem Inapropriada."; // 5.1.0

// Administra��o > Gesta�o das P�ginas Personalizadas // 5.1.0
$LNG['a_man_pages_header'] = "Gerir P�ginas Personalizadas"; // 5.1.0

// Administra��o > Gest�o de An�lises // 5.0
$LNG['a_man_rev_header'] = "Gerir An�lises "; // 5.0
$LNG['a_man_rev_enter'] = "Para gerir as an�lises de um site, escreva em baixo o nome de utilizador do membro."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "An�lise"; // 5.0
$LNG['a_man_rev_date'] = "Data"; // 5.0

// Administra��o > Menu
$LNG['a_menu'] = "Menu";
$LNG['a_menu_main'] = "Principal"; // 5.0
$LNG['a_menu_approve'] = "Aprovar Novos Membros";
$LNG['a_menu_manage'] = "Gerir Membros"; // 4.2.0
$LNG['a_menu_settings'] = "Mudar as Configura��es"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Filtro de Linguagem Inapropriada"; // 5.1.0
$LNG['a_menu_skins'] = "Aspecto e Categorias"; // 5.0
$LNG['a_menu_approve_reviews'] = "Aprovar novas An�lises"; // 5.0
$LNG['a_menu_manage_reviews'] = "Gerir An�lises"; // 5.0
$LNG['a_menu_email'] = "Enviar um E-Mail aos Membros";
$LNG['a_menu_delete_review'] = "Eliminar An�lise";
$LNG['a_menu_logout'] = "Sair";
$LNG['a_menu_delete'] = "Eliminar Membro";
$LNG['a_menu_edit'] = "Editar Membro";
$LNG['a_menu_create_page'] = "Criar uma P�gina Personalizada"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Gerir P�ginas Personalizadas"; // 5.1.0
$LNG['a_header_members'] = "Membros"; // 5.0
$LNG['a_header_settings'] = "Configura��es"; // 5.0
$LNG['a_header_reviews'] = "An�lises"; // 5.0
$LNG['a_header_pages'] = "P�ginas Personalizadas"; // 5.1.0

// Administra��o > Configura��es
$LNG['a_s_header'] = "Mudar as Configura��es";
$LNG['a_s_help'] = "Ajuda"; // 5.1.0

$LNG['a_s_general'] = "Configura��es Gerais";
$LNG['a_s_admin_password'] = "Palavra-Passe de Administra��o";
$LNG['a_s_list_name'] = "Nome da sua lista de Topsites";
$LNG['a_s_list_url'] = "URL para a directoria dos seu Topsite";
$LNG['a_s_default_language'] = "Linguagem pr�-definida";
$LNG['a_s_your_email'] = "O seu endere�o de E-mail";

$LNG['a_s_sql'] = "Configura��es de SQL";
$LNG['a_s_sql_type'] = "Tipo de Base de Dados"; // 4.1.0
$LNG['a_s_sql_host'] = "Host";
$LNG['a_s_sql_database'] = "Nome da Base de Dados";
$LNG['a_s_sql_username'] = "Nome de Utilizador da Base de Dados";
$LNG['a_s_sql_password'] = "Palavra-Passe da Base de Dados";

$LNG['a_s_ranking'] = "Configura��o da Classifica��o";
$LNG['a_s_num_list'] = "N�mero de membros a listar por p�gina"; // 5.0
$LNG['a_s_ranking_period'] = "Per�odo da Classifica��o"; // 5.0
$LNG['a_s_ranking_method'] = "M�todo de Classifica��o"; // 5.0
$LNG['a_s_ranking_average'] = "Classifica��o por m�dia ou apenas por %s"; // 5.0
$LNG['a_s_featured_member'] = 'Membro em Destaque - tem que adicionar {$featured_member} a wrapper.html depois de viabilizar eata op��o.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "N�mero de membroa que utilizam o aspecto _top para";
$LNG['a_s_ad_breaks'] = "Mostrar an�ncios depois destas classifica��es (separar por v�rgulas) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_member'] = "Configura��o dos membros";
$LNG['a_s_active_default'] = "� requerido que um membro novo seja aprovado antes de entrar para a lista";
$LNG['a_s_active_default_review'] = "� requerido que uma an�lise novo seja aprovada antes de entrar para a lista";
$LNG['a_s_delete_after'] = "Eliminar membros inactivos ao fim de quantos dias (colocar 0 para desligar)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Enviar um E-Mail � Administra��o quando um novo membro se inscreve"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Enviar um E-Mail � Administra��o quando � feita uma nova an�lise"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Largura m�xima da faixa publicit�ria dos membros  (colocar 0 para desligar)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Altura m�xima da faixa publicit�ria dos membros  (colocar 0 para desligar)"; // 4.2.0
$LNG['a_s_default_banner'] = "Faixa publicit�ria pr�-definida para os membros que n�o colocarem nenhuma";

$LNG['a_s_button'] = "Configura��o dos Bot�es";
$LNG['a_s_ranks_on_buttons'] = "Classifica��o nos Bot�es-  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Bot�es Est�cticos"; // 4.2.0
$LNG['a_s_button_url'] = "Se Sim/N�o - URL para o bot�o pr�-definido que quer que apare�a nos sites dos membros"; // 4.0
$LNG['a_s_button_dir'] = "Se Sim - URL para a directoria onde se encontram os bot�es"; // 4.0
$LNG['a_s_button_ext'] = "Se Sim - exten��es dos bot�es (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "Se Sim - N~umero de bot�es que criou"; // 4.0
$LNG['a_s_google_friendly_links'] = "Hiperliga��es amigas do Google - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_other'] = "Outras Configura��es";
$LNG['a_s_search'] = "Pesquisa";
$LNG['a_s_time_offset'] = "Tempo offset a partir do seu servidor (em horas)";
$LNG['a_s_gateway'] = "Acesso � p�gina de preven��o de fraudes";
$LNG['a_s_captcha'] = "Verifica��o de Palavras na inscri��o (protec��o contra spam) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_on'] = "Ligado";
$LNG['a_s_off'] = "Desligado";
$LNG['a_s_days'] = "Dias";
$LNG['a_s_months'] = "Meses";
$LNG['a_s_weeks'] = "Semanas"; // 4.2.0
$LNG['a_s_yes'] = "Sim";
$LNG['a_s_no'] = "N�o";

$LNG['a_s_updated'] = "As suas configura��es foram actualizadas.";

// Admin > Aspecto e Categorias // 5.0
$LNG['a_skins_header'] = "Aspecto e Categorias"; // 5.0
$LNG['a_skins_default'] = "Aspecto Pr�-definido"; // 5.0
$LNG['a_skins_set_default'] = "Determinar como Aspecto Pr�-definido"; // 5.0
$LNG['a_skins_anon'] = "An�nimo"; // 5.0
$LNG['a_skins_default_done'] = "O Aspecto Pr�-definido foi determinado."; // 5.0
$LNG['a_skins_categories_done'] = "O Aspecto das Categorias foi determinado."; // 5.0
$LNG['a_skins_new_category_done'] = "A Nova Categoria foi criada."; // 5.0
$LNG['a_skins_delete_done'] = "A categoria foi eliminada."; // 5.0
$LNG['a_skins_delete_error'] = "A categoria n�o foi eliminada, porque tem que existir pelo menos uma categoria."; // 5.1.0
$LNG['a_skins_edit_done'] = "A Categoria foi editada."; // 5.0
$LNG['a_skins_invalid_skin'] = "Aspecto Inv�lido: %s.  Por favor, tente de novo."; // 5.0
$LNG['a_skins_categories'] = "Categorias"; // 5.0
$LNG['a_skins_new_category'] = "Criar uma nova categoria"; // 5.0
$LNG['a_skins_set_skins'] = "Determinar o aspecto da categoria"; // 5.0
$LNG['a_skins_edit_category'] = "Editar Categoria"; // 5.0
$LNG['a_skins_category_name'] = "Nome da categoria"; // 5.0
$LNG['a_skins_diff_skins'] = "Se quer ter um aspecto diferente para cada categoria, seleccione-os em baixo."; // 5.0
?>
