<?php

return [
    // Settings
    'settings' => [
        'general' => [
            'title' => 'Allgemeines',
            'install_button' => 'Install',
            'site_name' => 'Name der Website',
            'lang' => 'Sprache',
            'private_help' => 'Privater Inhalt (alle Inhalte sind privat und eine Anmeldung ist erforderlich)',
            'private_download' => 'Downloads privat halten (Links und Alben)',
            'use_default_search' => 'Use classic SQL search instead of full-text search',
        ],

        'appearance' => [
            'title' => "Aussehen",
            'is_dark' => "Dark Mode",
            'home_show_tags' => "Zeige Tags auf der Homepage",
            'home_show_chests' => "Zeige Truhen auf der Homepage",
            'compact_cardslist' => "Komprimiere die Liste der Karten",
            'columns_count' => "Anzahl der angezeigten Spoalten",
            'custom_background' => "Benutzerdefiniertes Hintergrundbild",
            'custom_icon' => "Custom icon (PNG, 512px)",
        ],

        '2fa' => [
            'title' => "sichere Anmeldung",
            'secure_login' => "Zwei-Faktor-Authentifizierung (erfordert einen per E-Mail gesendeten Code)",
            'secure_code_expires' => "Ablauf des Sicherheitscodes (in Minuten)",
            'secure_code_length' => "Länge des Sicherheitscodes",
        ],

        'archiving' => [
            'title' => "Archivierung",
            'link_archive_pdf' => "PDF-Archivierung (Webseiten zu PDF)",
            'node_bin' => "ausführbare Node.js-Datei",
            'link_archive_media' => "Archvierung der Medien (Youtube, Soundcloud, ...)",
            'youtube_dl_bin' => "ausführbare Youtube-dl-Datei",
            'python_bin' => 'ausführbare Python-Datei',
            'check_pdf_archiving' => 'Test PDF archiving',
            'check_media_archiving' => 'Test Media archiving',
        ],

        'backup' => [
            'title' => 'Backup',
            'enabled' => 'Backup aktiviert?',
            'enabled_help' => 'Stellen Sie sicher, dass Ihre Sicherungskonfiguration korrekt ist.',
            'only_database' => 'Nur Datenbank speichern?',
            'period' => 'Sicherungszeitraum',
            'period_daily' => 'Täglich',
            'period_weekly' => 'Wöchentlich',
        ],

        'images' => [
            'title' => 'Bilder',
            'images_original_resize' => 'Originalbildgröße ändern?',
            'images_original_resize_width' => 'Ursprüngliche maximale Breite in Pixel',
            'images_thumb_format' => 'Thumbnail-Format',
            'format_square' => 'Platz',
            'format_original' => 'Original',
            'images_thumb_queue' => 'Vorschaubild im Hintergrund erzeugen?',
        ],

        'comments' => [
            'title' => 'Bemerkungen',
            'comments_enabled' => 'Kommentare aktivieren',
            'comments_guest_view' => 'Gäste können Kommentare sehen',
            'comments_guest_add' => 'Gäste können Kommentare hinzufügen',
            'comments_moderation' => 'Neue Kommentarmoderation',
            'comments_notification' => 'Benachrichtigung über neue Kommentare',
            'disabled' => 'Behindert',
            'whitelist' => 'Whitelisting',
            'all' => 'Alle',
        ]
    ],

    // Mails
    'mails' => [
        '2fa' => [
            'title' => 'Sichern Sie Ihre Anmeldung ab',
            'message' => 'Bitte verwenden Sie den folgenden Code :code, um auf Ihr Konto zuzugreifen.',
            'button' => 'Anmeldung bestätigen'
        ],

        'check' => [
            'title' => 'Es klappt!',
            'message' => 'Diese E-Mail wurde von :name gesendet, um Ihre E-Mail-Konfiguration zu testen.',
        ],

        'comment' => [
            'title' => 'Neuer Kommentar',
            'message' => 'Sie haben einen Kommentar von ":name" (:email) zum Beitrag ":post".',
            'action' => 'Aussicht',
        ],

        'unmoderated' => [
            'title' => 'Neuer nicht moderierter Kommentar',
            'message' => 'Sie haben einen neuen nicht moderierten Kommentar von ":name" (:email) zum Post ":post".',
            'action' => 'Anschauen und moderieren',
        ]
    ],
];