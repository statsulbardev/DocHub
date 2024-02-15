<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Einstellungen',
    'settings_save' => 'Einstellungen speichern',
    'system_version' => 'Systemversion',
    'categories' => 'Kategorien',

    // App Settings
    'app_customization' => 'Personalisierung',
    'app_features_security' => 'Funktionen & Sicherheit',
    'app_name' => 'Anwendungsname',
    'app_name_desc' => 'Dieser Name wird im Header und in E-Mails angezeigt.',
    'app_name_header' => 'Anwendungsname im Header anzeigen?',
    'app_public_access' => 'Öffentlicher Zugriff',
    'app_public_access_desc' => 'Wenn du diese Option aktivierst, können Besucher, die nicht angemeldet sind, auf Inhalte in deiner BookStack-Instanz zugreifen.',
    'app_public_access_desc_guest' => 'Der Zugang für öffentliche Besucher kann über den Benutzer "Guest" gesteuert werden.',
    'app_public_access_toggle' => 'Öffentlichen Zugriff erlauben',
    'app_public_viewing' => 'Öffentliche Ansicht erlauben?',
    'app_secure_images' => 'Erhöhte Sicherheit für hochgeladene Bilder aktivieren?',
    'app_secure_images_toggle' => 'Aktiviere Bild-Upload mit höherer Sicherheit',
    'app_secure_images_desc' => 'Aus Leistungsgründen sind alle Bilder öffentlich sichtbar. Diese Option fügt zufällige, schwer zu erratene, Zeichenketten zu Bild-URLs hinzu. Stelle sicher, dass Verzeichnisindizes deaktiviert sind, um einen einfachen Zugriff zu verhindern.',
    'app_default_editor' => 'Standard Seiteneditor',
    'app_default_editor_desc' => 'Wähle aus, welcher Editor bei der Bearbeitung neuer Seiten standardmäßig verwendet werden soll. Dies kann auf Seitenebene außer Kraft gesetzt werden, sofern die Berechtigungen dies zulassen.',
    'app_custom_html' => 'Benutzerdefinierter HTML <head> Inhalt',
    'app_custom_html_desc' => 'Jeder Inhalt, der hier hinzugefügt wird, wird am Ende der <head> Sektion jeder Seite eingefügt. Diese kann praktisch sein, um CSS Styles anzupassen oder Analytics-Code hinzuzufügen.',
    'app_custom_html_disabled_notice' => 'Benutzerdefinierte HTML-Kopfzeileninhalte sind auf dieser Einstellungsseite deaktiviert, um sicherzustellen, dass alle Änderungen rückgängig gemacht werden können.',
    'app_logo' => 'Anwendungslogo',
    'app_logo_desc' => 'Dies wird unter anderem in der Kopfzeile der Anwendung verwendet. Dieses Bild sollte 86px hoch sein. Große Bilder werden herunterskaliert.',
    'app_icon' => 'Anwendungssymbol',
    'app_icon_desc' => 'Dieses Symbol wird für Browser-Registerkarten und Verknüpfungssymbole verwendet. Dies sollte ein 256px quadratisches PNG-Bild sein.',
    'app_homepage' => 'Startseite der Anwendung',
    'app_homepage_desc' => 'Wähle eine Seite als Startseite aus, die statt der Standardansicht angezeigt werden soll. Seitenberechtigungen werden für die ausgewählten Seiten ignoriert.',
    'app_homepage_select' => 'Wähle eine Seite aus',
    'app_footer_links' => 'Fußzeilen-Links',
    'app_footer_links_desc' => 'Füge Links hinzu, die innerhalb der Seitenfußzeile angezeigt werden. Diese werden am unteren Ende der meisten Seiten angezeigt, einschließlich derjenigen, die keinen Login benötigen. Du kannst die Bezeichnung "trans::<key>" verwenden, um systemdefinierte Übersetzungen zu verwenden. Beispiel: Mit "trans::common.privacy_policy" wird der übersetzte Text "Privacy Policy" bereitgestellt, und "trans::common.terms_of_service" liefert den übersetzten Text "Terms of Service".',
    'app_footer_links_label' => 'Link-Label',
    'app_footer_links_url' => 'Link-URL',
    'app_footer_links_add' => 'Fußzeilenlink hinzufügen',
    'app_disable_comments' => 'Kommentare deaktivieren',
    'app_disable_comments_toggle' => 'Kommentare deaktivieren',
    'app_disable_comments_desc' => 'Deaktiviert Kommentare über alle Seiten in der Anwendung. Vorhandene Kommentare werden nicht angezeigt.',

    // Color settings
    'color_scheme' => 'Farbschema der Anwendung',
    'color_scheme_desc' => 'Lege die Farben, die in der Benutzeroberfläche verwendet werden, fest. Farben können separat für dunkle und helle Modi konfiguriert werden, um am besten zum Farbschema zu passen und die Lesbarkeit zu gewährleisten.',
    'ui_colors_desc' => 'Lege die primäre Farbe und die Standard-Linkfarbe der Anwendung fest. Die primäre Farbe wird hauptsächlich für Kopfzeilen, Buttons und Interface-Dekorationen verwendet. Die Standard-Linkfarbe wird für textbasierte Links und Aktionen sowohl innerhalb des geschriebenen Inhalts als auch in der Benutzeroberfläche verwendet.',
    'app_color' => 'Primäre Farbe',
    'link_color' => 'Standard-Linkfarbe',
    'content_colors_desc' => 'Lege Farben für alle Elemente in der Seitenorganisationshierarchie fest. Die Auswahl von Farben mit einer ähnlichen Helligkeit wie die Standardfarben wird zur Lesbarkeit empfohlen.',
    'bookshelf_color' => 'Regalfarbe',
    'book_color' => 'Buchfarbe',
    'chapter_color' => 'Kapitelfarbe',
    'page_color' => 'Seitenfarbe',
    'page_draft_color' => 'Seitenentwurfsfarbe',

    // Registration Settings
    'reg_settings' => 'Registrierungseinstellungen',
    'reg_enable' => 'Registrierung erlauben?',
    'reg_enable_toggle' => 'Registrierung erlauben',
    'reg_enable_desc' => 'Wenn die Registrierung erlaubt ist, kann sich der Benutzer als Anwendungsbenutzer anmelden. Bei der Registrierung erhält er eine einzige, voreingestellte Benutzerrolle.',
    'reg_default_role' => 'Standard-Benutzerrolle nach Registrierung',
    'reg_enable_external_warning' => 'Die obige Option wird ignoriert, während eine externe LDAP oder SAML Authentifizierung aktiv ist. Benutzerkonten für nicht existierende Mitglieder werden automatisch erzeugt, wenn die Authentifizierung gegen das verwendete externe System erfolgreich ist.',
    'reg_email_confirmation' => 'Bestätigung per E-Mail',
    'reg_email_confirmation_toggle' => 'Bestätigung per E-Mail erforderlich',
    'reg_confirm_email_desc' => 'Falls die Einschränkung für Domains genutzt wird, ist die Bestätigung per E-Mail zwingend erforderlich und der untenstehende Wert wird ignoriert.',
    'reg_confirm_restrict_domain' => 'Registrierung auf bestimmte Domains einschränken',
    'reg_confirm_restrict_domain_desc' => 'Füge eine durch Komma getrennte Liste von Domains hinzu, auf die die Registrierung eingeschränkt werden soll. Benutzern wird eine E-Mail gesendet, um ihre E-Mail Adresse zu bestätigen, bevor sie diese Anwendung nutzen können.
Hinweis: Benutzer können ihre E-Mail Adresse nach erfolgreicher Registrierung ändern.',
    'reg_confirm_restrict_domain_placeholder' => 'Keine Einschränkung gesetzt',

    // Maintenance settings
    'maint' => 'Wartung',
    'maint_image_cleanup' => 'Bilder bereinigen',
    'maint_image_cleanup_desc' => 'Überprüft Seiten- und Versionsinhalte auf ungenutzte und mehrfach vorhandene Bilder. Erstelle vor dem Start ein Backup Deiner Datenbank und Bilder.',
    'maint_delete_images_only_in_revisions' => 'Lösche auch Bilder, die nur in alten Seitenüberarbeitungen vorhanden sind',
    'maint_image_cleanup_run' => 'Reinigung starten',
    'maint_image_cleanup_warning' => ':count eventuell unbenutze Bilder wurden gefunden. Möchtest du diese Bilder löschen?',
    'maint_image_cleanup_success' => ':count eventuell unbenutze Bilder wurden gefunden und gelöscht.',
    'maint_image_cleanup_nothing_found' => 'Keine unbenutzen Bilder gefunden. Nichts zu löschen!',
    'maint_send_test_email' => 'Test E-Mail versenden',
    'maint_send_test_email_desc' => 'Dies sendet eine Test E-Mail an die in deinem Profil angegebene E-Mail-Adresse.',
    'maint_send_test_email_run' => 'Sende eine Test E-Mail',
    'maint_send_test_email_success' => 'E-Mail wurde an :address gesendet',
    'maint_send_test_email_mail_subject' => 'Test E-Mail',
    'maint_send_test_email_mail_greeting' => 'E-Mail-Versand scheint zu funktionieren!',
    'maint_send_test_email_mail_text' => 'Glückwunsch! Da du diese E-Mail Benachrichtigung erhalten hast, scheinen deine E-Mail-Einstellungen korrekt konfiguriert zu sein.',
    'maint_recycle_bin_desc' => 'Gelöschte Regale, Bücher, Kapitel & Seiten werden in den Papierkorb verschoben, so dass sie wiederhergestellt oder dauerhaft gelöscht werden können. Ältere Einträge im Papierkorb können, in Abhängigkeit von der Systemkonfiguration, nach einer Weile automatisch entfernt werden.',
    'maint_recycle_bin_open' => 'Papierkorb öffnen',
    'maint_regen_references' => 'Verweise neu generieren',
    'maint_regen_references_desc' => 'Diese Aktion wird den Verweisindex innerhalb der Datenbank neu erstellen. Dies wird normalerweise automatisch ausgeführt, aber diese Aktion kann nützlich sein, um alte Inhalte oder Inhalte zu indizieren, die mittels inoffizieller Methoden hinzugefügt wurden.',
    'maint_regen_references_success' => 'Verweisindex wurde neu generiert!',
    'maint_timeout_command_note' => 'Hinweis: Die Ausführung dieser Aktion kann einige Zeit in Anspruch nehmen, was in einigen Webumgebungen zu Timeout-Problemen führen kann. Alternativ kann diese Aktion auch mit einem Terminalbefehl ausgeführt werden.',

    // Recycle Bin
    'recycle_bin' => 'Papierkorb',
    'recycle_bin_desc' => 'Hier kannst du gelöschte Einträge wiederherstellen oder sie dauerhaft aus dem System entfernen. Diese Liste ist nicht gefiltert, im Gegensatz zu ähnlichen Aktivitätslisten im System, wo Berechtigungsfilter angewendet werden.',
    'recycle_bin_deleted_item' => 'Gelöschter Eintrag',
    'recycle_bin_deleted_parent' => 'Übergeordnet',
    'recycle_bin_deleted_by' => 'Gelöscht von',
    'recycle_bin_deleted_at' => 'Löschzeitpunkt',
    'recycle_bin_permanently_delete' => 'Dauerhaft löschen',
    'recycle_bin_restore' => 'Wiederherstellen',
    'recycle_bin_contents_empty' => 'Der Papierkorb ist derzeit leer',
    'recycle_bin_empty' => 'Papierkorb leeren',
    'recycle_bin_empty_confirm' => 'Dies wird alle Einträge im Papierkorb dauerhaft entfernen, einschließlich der Inhalte, die darin enthalten sind. Bist du sicher, dass du den Papierkorb leeren möchtest?',
    'recycle_bin_destroy_confirm' => 'Diese Aktion wird diesen Eintrag zusammen mit allen unten aufgeführten Untereinträgen dauerhaft aus dem System löschen und du wirst nicht in der Lage sein, diesen Inhalt wiederherzustellen. Bist du sicher, dass du diesen Eintrag endgültig löschen möchtest?',
    'recycle_bin_destroy_list' => 'Zu löschende Einträge',
    'recycle_bin_restore_list' => 'Wiederherzustellende Einträge',
    'recycle_bin_restore_confirm' => 'Mit dieser Aktion wird der gelöschte Eintrag einschließlich aller untergeordneten Einträge an seinem ursprünglichen Ort wiederhergestellt. Wenn der ursprüngliche Ort gelöscht wurde und sich nun im Papierkorb befindet, muss auch der übergeordnete Eintrag wiederhergestellt werden.',
    'recycle_bin_restore_deleted_parent' => 'Der übergeordnete Eintrag wurde ebenfalls gelöscht. Dieser Eintrag wird weiterhin als gelöscht zählen, bis auch der übergeordnete Eintrag wiederhergestellt wurde.',
    'recycle_bin_restore_parent' => 'Übergeordneter Eintrag wiederherstellen',
    'recycle_bin_destroy_notification' => ':count Einträge wurden aus dem Papierkorb gelöscht.',
    'recycle_bin_restore_notification' => ':count Einträge wurden aus dem Papierkorb wiederhergestellt.',

    // Audit Log
    'audit' => 'Änderungsprotokoll',
    'audit_desc' => 'Dieses Audit-Protokoll zeigt eine Liste der Aktivitäten an, welche vom System protokolliert werden. Im Gegensatz zu den anderen Aktivitätslisten im System, bei denen Berechtigungen angewendet werden, ist diese Liste ungefiltert.',
    'audit_event_filter' => 'Ereignisfilter',
    'audit_event_filter_no_filter' => 'Kein Filter',
    'audit_deleted_item' => 'Gelöschtes Element',
    'audit_deleted_item_name' => 'Name: :name',
    'audit_table_user' => 'Benutzer',
    'audit_table_event' => 'Ereignis',
    'audit_table_related' => 'Verknüpfter Eintrag oder Detail',
    'audit_table_ip' => 'IP Adresse',
    'audit_table_date' => 'Aktivitätsdatum',
    'audit_date_from' => 'Zeitraum von',
    'audit_date_to' => 'Zeitraum bis',

    // Role Settings
    'roles' => 'Rollen',
    'role_user_roles' => 'Benutzer-Rollen',
    'roles_index_desc' => 'Rollen werden verwendet, um Benutzer zu gruppieren und System-Berechtigungen für ihre Mitglieder zuzuweisen. Wenn ein Benutzer Mitglied mehrerer Rollen ist, stapeln die gewährten Berechtigungen und der Benutzer wird alle Fähigkeiten erben.',
    'roles_x_users_assigned' => ':count Benutzer zugewiesen|:count Benutzer zugewiesen',
    'roles_x_permissions_provided' => ':count Berechtigung|:count Berechtigungen',
    'roles_assigned_users' => 'Zugewiesene Benutzer',
    'roles_permissions_provided' => 'Genutzte Berechtigungen',
    'role_create' => 'Neue Rolle anlegen',
    'role_delete' => 'Rolle löschen',
    'role_delete_confirm' => 'Dies wird die Rolle ":roleName" löschen.',
    'role_delete_users_assigned' => 'Diese Rolle ist :userCount Benutzern zugeordnet. Du kannst unten eine neue Rolle auswählen, die du diesen Benutzern zuordnen möchtest.',
    'role_delete_no_migration' => "Den Benutzern keine andere Rolle zuordnen",
    'role_delete_sure' => 'Bist du sicher, dass du diese Rolle löschen möchtest?',
    'role_edit' => 'Rolle bearbeiten',
    'role_details' => 'Rollendetails',
    'role_name' => 'Rollenname',
    'role_desc' => 'Kurzbeschreibung der Rolle',
    'role_mfa_enforced' => 'Benötigt Mehrfach-Faktor-Authentifizierung',
    'role_external_auth_id' => 'Externe Authentifizierungs-IDs',
    'role_system' => 'System-Berechtigungen',
    'role_manage_users' => 'Benutzer verwalten',
    'role_manage_roles' => 'Rollen und Rollen-Berechtigungen verwalten',
    'role_manage_entity_permissions' => 'Alle Buch-, Kapitel- und Seiten-Berechtigungen verwalten',
    'role_manage_own_entity_permissions' => 'Nur Berechtigungen eigener Bücher, Kapitel und Seiten verwalten',
    'role_manage_page_templates' => 'Seitenvorlagen verwalten',
    'role_access_api' => 'Systemzugriffs-API',
    'role_manage_settings' => 'Globaleinstellungen verwalten',
    'role_export_content' => 'Inhalt exportieren',
    'role_editor_change' => 'Seiteneditor ändern',
    'role_notifications' => 'Empfangen und Verwalten von Benachrichtigungen',
    'role_asset' => 'Berechtigungen',
    'roles_system_warning' => 'Beachte, dass der Zugriff auf eine der oben genannten drei Berechtigungen einem Benutzer erlauben kann, seine eigenen Berechtigungen oder die Rechte anderer im System zu ändern. Weise nur Rollen mit diesen Berechtigungen vertrauenswürdigen Benutzern zu.',
    'role_asset_desc' => 'Diese Berechtigungen gelten für den Standard-Zugriff innerhalb des Systems. Berechtigungen für Bücher, Kapitel und Seiten überschreiben diese Berechtigungen.',
    'role_asset_admins' => 'Administratoren erhalten automatisch Zugriff auf alle Inhalte, aber diese Optionen können Oberflächenoptionen ein- oder ausblenden.',
    'role_asset_image_view_note' => 'Das bezieht sich auf die Sichtbarkeit innerhalb des Bildmanagers. Der tatsächliche Zugriff auf hochgeladene Bilddateien hängt von der Speicheroption des Systems für Bilder ab.',
    'role_all' => 'Alle',
    'role_own' => 'Eigene',
    'role_controlled_by_asset' => 'Berechtigungen werden vom Uploadziel bestimmt',
    'role_save' => 'Rolle speichern',
    'role_users' => 'Dieser Rolle zugeordnete Benutzer',
    'role_users_none' => 'Bisher sind dieser Rolle keine Benutzer zugeordnet',

    // Users
    'users' => 'Benutzer',
    'users_index_desc' => 'Erstelle und Verwalte individuelle Benutzerkonten innerhalb des Systems. Benutzerkonten werden zur Anmeldung und der Zuordnung von Inhalten und Aktivitäten verwendet. Zugriffsberechtigungen sind in erster Linie rollenbasiert, aber der Besitz von Benutzerinhalten kann unter anderem auch Berechtigungen beeinflussen.',
    'user_profile' => 'Benutzerprofil',
    'users_add_new' => 'Benutzer hinzufügen',
    'users_search' => 'Benutzer suchen',
    'users_latest_activity' => 'Neueste Aktivitäten',
    'users_details' => 'Benutzerdetails',
    'users_details_desc' => 'Lege für diesen Benutzer einen Anzeigenamen und eine E-Mail-Adresse fest. Die E-Mail-Adresse wird bei der Anmeldung verwendet.',
    'users_details_desc_no_email' => 'Lege für diesen Benutzer einen Anzeigenamen fest, damit andere ihn erkennen können.',
    'users_role' => 'Benutzerrollen',
    'users_role_desc' => 'Wählen Sie aus, welchen Rollen dieser Benutzer zugeordnet werden soll. Wenn ein Benutzer mehreren Rollen zugeordnet ist, werden die Berechtigungen dieser Rollen gestapelt und er erhält alle Fähigkeiten der zugewiesenen Rollen.',
    'users_password' => 'Benutzerpasswort',
    'users_password_desc' => 'Lege ein Passwort fest, mit dem du dich anmelden möchtest. Diese muss mindestens 8 Zeichen lang sein.',
    'users_send_invite_text' => 'Du kannst diesem Benutzer eine Einladungs-E-Mail senden, die es ihm erlaubt, sein eigenes Passwort zu setzen, andernfalls kannst du sein Passwort selbst setzen.',
    'users_send_invite_option' => 'Benutzer-Einladungs-E-Mail senden',
    'users_external_auth_id' => 'Externe Authentifizierungs-ID',
    'users_external_auth_id_desc' => 'Wenn ein externes Authentifizierungssystem verwendet wird (z. B. SAML2, OIDC oder LDAP) ist dies die ID, die diesen BookStack-Benutzer mit dem Authentifizierungs-Systemkonto verknüpft. Du kannst dieses Feld ignorieren, wenn du die Standard-E-Mail-basierte Authentifizierung verwenden.',
    'users_password_warning' => 'Fülle die untenstehenden Felder nur aus, wenn du das Passwort für diesen Benutzer ändern möchten.',
    'users_system_public' => 'Dieser Benutzer repräsentiert alle unangemeldeten Benutzer, die diese Seite betrachten. Er kann nicht zum Anmelden benutzt werden, sondern wird automatisch zugeordnet.',
    'users_delete' => 'Benutzer löschen',
    'users_delete_named' => 'Benutzer ":userName" löschen',
    'users_delete_warning' => 'Der Benutzer ":userName" wird aus dem System gelöscht.',
    'users_delete_confirm' => 'Bist du sicher, dass du diesen Benutzer löschen möchtest?',
    'users_migrate_ownership' => 'Besitz migrieren',
    'users_migrate_ownership_desc' => 'Wähle hier einen Benutzer, wenn du möchtest, dass ein anderer Benutzer der Besitzer aller Einträge wird, die diesem Benutzer derzeit gehören.',
    'users_none_selected' => 'Kein Benutzer ausgewählt',
    'users_edit' => 'Benutzer bearbeiten',
    'users_edit_profile' => 'Profil bearbeiten',
    'users_avatar' => 'Benutzer-Bild',
    'users_avatar_desc' => 'Das Bild sollte eine Auflösung von 256x256px haben.',
    'users_preferred_language' => 'Bevorzugte Sprache',
    'users_preferred_language_desc' => 'Diese Option ändert die Sprache, die für die Benutzeroberfläche der Anwendung verwendet wird. Dies hat keinen Einfluss auf von Benutzern erstellte Inhalte.',
    'users_social_accounts' => 'Social-Media Konten',
    'users_social_accounts_desc' => 'Zeigt den Status der verbundenen sozialen Konten für diesen Benutzer an. Social Accounts können zusätzlich zum primären Authentifizierungssystem für den Systemzugriff verwendet werden.',
    'users_social_accounts_info' => 'Hier kannst Du andere Social-Media-Konten für eine schnellere und einfachere Anmeldung verknüpfen. Wenn Du ein Social-Media Konto löschst, bleibt der Zugriff erhalten. Entferne in diesem Falle die Berechtigung in Deinen Profil-Einstellungen des verknüpften Social-Media-Kontos.',
    'users_social_connect' => 'Social-Media-Konto verknüpfen',
    'users_social_disconnect' => 'Social-Media-Konto lösen',
    'users_social_status_connected' => 'Verbunden',
    'users_social_status_disconnected' => 'Getrennt',
    'users_social_connected' => ':socialAccount-Konto wurde erfolgreich mit dem Profil verknüpft.',
    'users_social_disconnected' => ':socialAccount-Konto wurde erfolgreich vom Profil gelöst.',
    'users_api_tokens' => 'API-Token',
    'users_api_tokens_desc' => 'Erstelle und verwalte die Zugangs-Tokens zur Authentifizierung mit der BookStack REST API. Berechtigungen für die API werden über den Benutzer verwaltet, dem das Token gehört.',
    'users_api_tokens_none' => 'Für diesen Benutzer wurden kein API-Token erstellt',
    'users_api_tokens_create' => 'Token erstellen',
    'users_api_tokens_expires' => 'Endet',
    'users_api_tokens_docs' => 'API Dokumentation',
    'users_mfa' => 'Multi-Faktor-Authentifizierung',
    'users_mfa_desc' => 'Richte die Multi-Faktor-Authentifizierung als zusätzliche Sicherheitsstufe für dein Benutzerkonto ein.',
    'users_mfa_x_methods' => ':count Methode konfiguriert|:count Methoden konfiguriert',
    'users_mfa_configure' => 'Methoden konfigurieren',

    // API Tokens
    'user_api_token_create' => 'Neuen API-Token erstellen',
    'user_api_token_name' => 'Name',
    'user_api_token_name_desc' => 'Gebe deinem Token einen aussagekräftigen Namen als spätere Erinnerung an seinen Verwendungszweck.',
    'user_api_token_expiry' => 'Ablaufdatum',
    'user_api_token_expiry_desc' => 'Lege ein Datum fest, zu dem dieser Token abläuft. Nach diesem Datum funktionieren Anfragen, die mit diesem Token gestellt werden, nicht mehr. Wenn du dieses Feld leer lässt, wird ein Ablaufdatum von 100 Jahren in der Zukunft festgelegt.',
    'user_api_token_create_secret_message' => 'Unmittelbar nach der Erstellung dieses Tokens wird eine "Token ID" & ein "Token Kennwort" generiert und angezeigt. Das Kennwort wird nur ein einziges Mal angezeigt. Stelle also sicher, dass du den Inhalt an einen sicheren Ort kopierst, bevor du fortfährst.',
    'user_api_token' => 'API-Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'Dies ist ein nicht editierbarer, vom System generierter Identifikator für diesen Token, welcher bei API-Anfragen angegeben werden muss.',
    'user_api_token_secret' => 'Token Kennwort',
    'user_api_token_secret_desc' => 'Dies ist ein systemgeneriertes Kennwort für diesen Token, das bei API-Anfragen zur Verfügung gestellt werden muss. Es wird nur dieses eine Mal angezeigt, deshalb kopiere diesen an einen sicheren und geschützten Ort.',
    'user_api_token_created' => 'Token erstellt :timeAgo',
    'user_api_token_updated' => 'Token aktualisiert :timeAgo',
    'user_api_token_delete' => 'Lösche Token',
    'user_api_token_delete_warning' => 'Dies löscht den API-Token mit dem Namen \':tokenName\' vollständig aus dem System.',
    'user_api_token_delete_confirm' => 'Bist du sicher, dass du diesen API-Token löschen möchtest?',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_index_desc' => 'Webhooks sind eine Möglichkeit, Daten an externe URLs zu senden, wenn bestimmte Aktionen und Ereignisse im System auftreten, was eine ereignisbasierte Integration mit externen Plattformen wie Messaging- oder Benachrichtigungssystemen ermöglicht.',
    'webhooks_x_trigger_events' => ':count Auslöserereignis|:count Auslöserereignisse',
    'webhooks_create' => 'Neuen Webhook erstellen',
    'webhooks_none_created' => 'Es wurden noch keine Webhooks erstellt.',
    'webhooks_edit' => 'Webhook bearbeiten',
    'webhooks_save' => 'Webhook speichern',
    'webhooks_details' => 'Webhook-Details',
    'webhooks_details_desc' => 'Gebe einen benutzerfreundlichen Namen und einen POST-Endpunkt als Ziel an, an den die Webhook-Daten gesendet werden sollen.',
    'webhooks_events' => 'Webhook Ereignisse',
    'webhooks_events_desc' => 'Wähle alle Ereignisse, die diesen Webhook auslösen sollen.',
    'webhooks_events_warning' => 'Beachte, dass diese Ereignisse für alle ausgewählten Ereignisse ausgelöst werden, auch wenn benutzerdefinierte Berechtigungen angewendet werden. Stelle sicher, dass die Verwendung dieses Webhooks keine vertraulichen Inhalte enthüllt.',
    'webhooks_events_all' => 'Alle System-Ereignisse',
    'webhooks_name' => 'Webhook-Name',
    'webhooks_timeout' => 'Webhook Request Timeout (Sekunden)',
    'webhooks_endpoint' => 'Webhook Endpunkt',
    'webhooks_active' => 'Webhook aktiv',
    'webhook_events_table_header' => 'Ereignisse',
    'webhooks_delete' => 'Webhook löschen',
    'webhooks_delete_warning' => 'Dies wird diesen Webhook mit dem Namen \':webhookName\' vollständig aus dem System löschen.',
    'webhooks_delete_confirm' => 'Bist du sicher, dass du diesen Webhook löschen möchtest?',
    'webhooks_format_example' => 'Webhook Format Beispiel',
    'webhooks_format_example_desc' => 'Webhook Daten werden als POST-Anfrage an den konfigurierten Endpunkt als JSON im folgenden Format gesendet. Die Eigenschaften "related_item" und "url" sind optional und hängen vom Typ des ausgelösten Ereignisses ab.',
    'webhooks_status' => 'Webhook-Status',
    'webhooks_last_called' => 'Zuletzt aufgerufen:',
    'webhooks_last_errored' => 'Letzter Fehler:',
    'webhooks_last_error_message' => 'Letzte Fehlermeldung:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'Englisch',
        'ar' => 'Arabisch',
        'bg' => 'Bulgarisch',
        'bs' => 'Bosnisch',
        'ca' => 'Katalanisch',
        'cs' => 'Tschechisch',
        'da' => 'Dänisch',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'el' => 'ελληνικά',
        'es' => 'Spanisch',
        'es_AR' => 'Spanisch Argentinisch',
        'et' => 'Estnisch',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fi' => 'Suomi',
        'fr' => 'Französisch',
        'he' => 'עברית',
        'hr' => 'Kroatisch',
        'hu' => 'Ungarisch',
        'id' => 'Bahasa-Indonesisch',
        'it' => 'Italienisch',
        'ja' => 'Japanisch',
        'ko' => 'Koreanisch',
        'lt' => 'Litauisch',
        'lv' => 'Lettisch',
        'nb' => 'Norwegisch (Bokmål)',
        'nn' => 'Nynorsk',
        'nl' => 'Niederländisch',
        'pl' => 'Polnisch',
        'pt' => 'Portugiesisch',
        'pt_BR' => 'Portugiesisch (Brasilien)',
        'ro' => 'Română',
        'ru' => 'Russisch',
        'sk' => 'Slowenisch',
        'sl' => 'Slowenisch',
        'sv' => 'Schwedisch',
        'tr' => 'Türkisch',
        'uk' => 'Ukrainisch',
        'uz' => 'O‘zbekcha',
        'vi' => 'Vietnamesisch',
        'zh_CN' => 'Vereinfachtes Chinesisch',
        'zh_TW' => 'Traditionelles Chinesisch',
    ],
    //!////////////////////////////////
];
