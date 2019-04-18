<?php
/////////////////////////////////////////////////////////////////////////////////////
// xbtit - Bittorrent tracker/frontend
//
// Copyright (C) 2004 - 2019  btiteam
//
//    This file is part of xbtit.
//
// Redistribution and use in source and binary forms, with or without modification,
// are permitted provided that the following conditions are met:
//
//   1. Redistributions of source code must retain the above copyright notice,
//      this list of conditions and the following disclaimer.
//   2. Redistributions in binary form must reproduce the above copyright notice,
//      this list of conditions and the following disclaimer in the documentation
//      and/or other materials provided with the distribution.
//   3. The name of the author may not be used to endorse or promote products
//      derived from this software without specific prior written permission.
//
// THIS SOFTWARE IS PROVIDED BY THE AUTHOR ``AS IS'' AND ANY EXPRESS OR IMPLIED
// WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
// MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
// IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
// SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
// TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
// PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF
// LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
// NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE,
// EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
//
////////////////////////////////////////////////////////////////////////////////////
// english installation file //

$install_lang["charset"]                = "ISO-8859-1";
$install_lang["lang_rtl"]               = false;
$install_lang["step"]                   = "PASSO:";
$install_lang["welcome_header"]         = "Benvenuto";
$install_lang["welcome"]                = "Benvenuto nell'installazione del nuovo xbtit.";
$install_lang["installer_language"]     = "Lingua:";
$install_lang["installer_language_set"] = "Abilita questo linguaggio";
$install_lang["start"]                  = "Avvio";
$install_lang["next"]                   = "Prossimo";
$install_lang["back"]                   = "Ritorna";
$install_lang["requirements_check"]     = "Controlli Richiesti";
$install_lang["reqcheck"]               = "Controlli";
$install_lang["settings"]               = "Impostazioni";
$install_lang["system_req"]             = "<p>".$GLOBALS["btit-tracker"]."&nbsp;".$GLOBALS["current_btit_version"]." richiede PHP 4.1.2 o superiore ed un database MySQL.</p>";
$install_lang["list_chmod"]             = "<p>Prima di continuare, ti preghiamo di controllare che tutti i file che hai inviato (nel server ftp o locale), siano provvisti dei necessari permessi di lettura e scrittura (0777 &egrave; sufficiente).</p>";
$install_lang["view_log"]               = "Puoi vedere il log di tutti i  cambiamenti";
$install_lang["here"]                   = "qui";
$install_lang["settingup"]              = "Imposta il tuo tracker";
$install_lang["settingup_info"]         = "Impostazioni Base";
$install_lang["sitename"]               = "Nome del sito";
$install_lang["sitename_input"]         = "xbtit";
$install_lang["siteurl"]                = "URL del sito";
$install_lang["siteurl_info"]           = "Senza riportare l'ultimo slash";
$install_lang["mysql_settings"]         = "Settaggi MySQL<br />\nCrea l'utente mysql ed il database, inserisci qui i dettagli:";
$install_lang["mysql_settings_info"]    = "Settaggi Database.";
$install_lang["mysql_settings_server"]  = "Nome Host (localhost funziona per molti server)";
$install_lang["mysql_settings_username"] = "Nome Utente";
$install_lang["mysql_settings_password"] = "Password";
$install_lang["mysql_settings_database"] = "Nome Database";
$install_lang["mysql_settings_prefix"]  = "Prefisso Tabelle";
$install_lang["cache_folder"]           = "Cartella Cache";
$install_lang["torrents_folder"]        = "Cartella Torrent";
$install_lang["badwords_file"]          = "badwords.txt";
$install_lang["chat.php"]               = "chat.php";
$install_lang["write_succes"]           = "<span style=\"color:#00FF00; font-weight: bold;\">&egrave; scrivibile!</span>";
$install_lang["write_fail"]             = "<span style=\"color:#FF0000; font-weight: bold;\">NON &egrave; scrivibile!</span> (0777)";
$install_lang["write_file_not_found"]   = "<span style=\"color:#FF0000; font-weight: bold;\">NON trovato!</span>";
$install_lang["mysqlcheck"]             = "Controllo Connessione MySQL";
$install_lang["mysqlcheck_step"]        = "Controllo MySQL";
$install_lang["mysql_succes"]           = "<span style=\"color:#00FF00; font-weight: bold;\">Connesso al database con successo!</span>";
$install_lang["mysql_fail"]             = "<span style=\"color:#FF0000; font-weight: bold;\">ERRORE, la connessione non pu&ograve; essere stabilita!</span>";
$install_lang["back_to_settings"]       = "Ritorna indietro e riempi le informazioni necessarie.";
$install_lang["saved"]                  = "completato";
$install_lang["file_not_writeable"]     = "Il file <b>./include/settings.php</b> non pu&ograve; essere scritto.";
$install_lang["file_not_exists"]        = "Il file <b>./include/settings.php</b> non esiste.";
$install_lang["not_continue_settings"]  = "Non puoi continuare con l'installazione senza averli resi leggibili/scrivibili.";
$install_lang["not_continue_settings2"] = "Non puoi continuare con questo file.";
$install_lang["settings.php"]           = "./include/settings.php";
$install_lang["can_continue"]           = "Puoi continuare e cambiarlo dopo.";
$install_lang["mysql_import"]           = "Importo MySQL";
$install_lang["mysql_import_step"]      = "Imp. SQL.";
$install_lang["create_owner_account"]   = "Creazione dell'account Proprietario";
$install_lang["create_owner_account_step"] = "Creazione Proprietario";
$install_lang["database_saved"]         = "Il file db.sql &egrave; stato importato nel tuo database.";
$install_lang["create_owner_account_info"] = "Qui puoi creare l'account Proprietario.";
$install_lang["username"]               = "Nome Utente";
$install_lang["password"]               = "Password";
$install_lang["password2"]              = "Ripeti password";
$install_lang["email"]                  = "Email";
$install_lang["email2"]                 = "Ripeti email";
$install_lang["is_succes"]              = "completato.";
$install_lang["no_leave_blank"]         = "Non lasciare nulla vuoto.";
$install_lang["not_valid_email"]        = "Questa email non &egrave; valida.";
$install_lang["pass_not_same_username"] = "La Password non pu&ograve; essere uguale al nome utente.";
$install_lang["email_not_same"]         = "Gli indirizzi email non corrispondono.";
$install_lang["pass_not_same"]          = "Le Passwords non corrispondono.";
$install_lang["site_config"]            = "Impostazioni Tracker";
$install_lang["site_config_step"]       = "Imp. Tracker";
$install_lang["default_lang"]           = "Lingua di Default";
$install_lang["default_style"]          = "Style di Default";
$install_lang["torrents_dir"]           = "Cartella Torrent";
$install_lang["validation"]             = "Tipo di Convalida";
$install_lang["more_settings"]          = "*&nbsp;&nbsp;&nbsp;Altri settaggi sono nel <u>Pannello di Amministrazione</u> quando l'installazione sar&agrave; completata.";
$install_lang["tracker_saved"]          = "Le impostazioni sono state salvate.";
$install_lang["finished"]               = "Installazione Completata";
$install_lang["finished_step"]          = "Fine";
$install_lang["succes_install1"]        = "L'installazione &egrave; stata completata!";
$install_lang["succes_install2a"]       = "<p>Hai installato con successo ".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"]." sul tuo server.</p><p>L'installazione &egrave; stata conclusa con successo, per prevenire che l'installer possa essere riutilizzato ti consigliamo di rimuovere anche il file <b>install.php</b> per maggiore sicurezza.</p>";
$install_lang["succes_install2b"]       = "<p>Hai installato con successo ".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"]." sul tuo server.</p><p>Ti consigliamo di bloccare l'installer. Lo puoi fare rinominando <b>install.unlock</b> in <b>install.lock</b> oppure cancellando il file <b>install.php</b> </p>";
$install_lang["succes_install3"]        = "<p>Noi del DPWS Media LTD speriamo che usufruirai di questo prodotto, e che ci rivedremo di nuovo nel nostro <a href=\"http://dpwsmedia.com/smf/index.php\" target=\"_blank\">forum</a>.</p>";
$install_lang["go_to_tracker"]          = "Vai al tuo tracker";
$install_lang["forum_type"]             = "Tipo Forum";
$install_lang["forum_internal"]         = "xbtit Forum Interno";
$install_lang["forum_smf"]              = "Simple Machines Forum";
$install_lang["forum_other"]            = "Forum Esterno non integrato - Digita l'url qui -->";
$install_lang["smf_download_a"]         = "<strong>Se usi Simple Machines Forum:</strong><br /><br/ >Scarica l'ultima versione di Simple Machines Forum <a target='_new' href='http://www.simplemachines.org/download/'>qui</a> ed invia il contenuto dell'archivio nella cartella \"smf\" , e <a target='_new' href='smf/install.php'>premi qui</a> per installare.*<br /><strong>(Usa le stesse credenziali che hai usato per la procedura d'installazione).<br /><br /><font color='#FF0000'>Una volta installato</font></strong> fai CHMOD per il file di lingua di SMF Inglese(<strong>";
$install_lang["smf_download_b"]         = "</strong>) a 777 e premi <strong>Prossimo</strong> per continuare con l'installazione di xbtit<br /><br /><strong>* Ambo i collegamenti si apriranno in una nuova finestra/tabella per prevenire di perdere la pagina di installazione di xbtit.</strong></p>";
$install_lang["smf_err_1"]              = "Non trovo Simple Machines Forum nella cartella\"smf\", installa prima di procedere.<br /><br />Premi <a href=\"javascript: history.go(-1);\">qui</a> per tornare alla pagina precedente.";
$install_lang["smf_err_2"]              = "Non trovo Simple Machines Forum nel database, installa prima di procedere.<br /><br />Premi <a href=\"javascript: history.go(-1);\">qui</a> per tornare alla pagina precedente.";
$install_lang["smf_err_3a"]             = "Non posso scrivere nel file SMF English language (<strong>";
$install_lang["smf_err_3b"]             = "</strong>) fai  CHMOD 777 prima di procedere.<br /><br />Premi <a href=\"javascript: history.go(-1);\">qui</a> per tornare alla pagina precedente.";
$install_lang["allow_url_fopen"]        = "php.ini valore di \"allow_url_fopen\" (meglio se ON)";
$install_lang["allow_url_fopen_ON"]        = "<span style=\"color:#00FF00; font-weight: bold;\">ON</span>";
$install_lang["allow_url_fopen_OFF"]        = "<span style=\"color:#FF0000; font-weight: bold;\">OFF</span>";

$install_lang["forum_ipb"]              = "Invision Power Board";
$install_lang["ipb_download_a"]         = "<b>If using Invision Power Board:</b><br /><br/ >Please download the latest version of Invision Power Board from your <a target='_new' href='http://www.invisionpower.com/customer/'>Client Area</a> at Invision Power Services, extract the files somewhere on your computer and then upload the contents of the \"upload\" folder to the \"ipb\" folder.<br /><br />Once uploaded please make sure the \"cache\", \"hooks\", \"public\" and \"uploads\" folders are CHMOD'd to 777 recursively, rename \"conf_global.dist.php\" to \"conf_global.php\" and CHMOD that to 777 as well.<br /><br />Once done please <a target='_new' href='ipb/admin/install/index.php'>click here</a> to install it.*<br /><b>(Please use the same database credentials you used for this installation procedure and be sure to enter a database prefix, we suggest using <span style='color:blue;'>ipb_</span> as your prefix).<br /><br /><font color='#FF0000'>Once installed</font></b> please CHMOD the default cached English language file (<b>";
$install_lang["ipb_download_b"]         = "</b>) to 777 and click <b>Next</b> to continue with the xbtit installation.<br /><br /><b>* Both links will open into a new window/tab to prevent losing your place on the xbtit installation.</b></p>";
$install_lang["ipb_err_1"]              = "Can't find Invision Power Board in the \"ipb\" folder, please install it before proceeding.<br /><br />Click <a href=\"javascript: history.go(-1);\">here</a> to return to the previous page.";
$install_lang["ipb_err_2"]              = "Can't find Invision Power Board in the database, please install it before proceeding.<br /><br />Click <a href=\"javascript: history.go(-1);\">here</a> to return to the previous page.";
$install_lang["ipb_err_3a"]             = "Unable to write to the IPB English language file (<b>";
$install_lang["ipb_err_3b"]             = "</b>) please CHMOD to 777 before proceeding.<br /><br />Click <a href=\"javascript: history.go(-1);\">here</a> to return to the previous page.";
$install_lang["ipb_err_4a"]             = "IPB English language file (<b>";
$install_lang["ipb_err_4b"]             = "</b>) doesn't exist, cannot proceed.<br /><br />Click <a href=\"javascript: history.go(-1);\">here</a> to return to the previous page.";
$install_lang["ipb_err_5"]             = "Unable to write to the IPB Config file (<b>";
$install_lang["ipb_err_6"]             = "Unable to write to the Tracker Config file (<b>";
?>