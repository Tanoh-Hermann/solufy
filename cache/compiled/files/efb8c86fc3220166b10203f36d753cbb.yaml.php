<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/jscomments/languages.yaml',
    'modified' => 1590026952,
    'data' => [
        'de' => [
            'PLUGINS' => [
                'JS_COMMENTS' => [
                    'PLUGIN_NAME' => 'JSComments',
                    'PLUGIN_STATUS' => 'Plugin Status',
                    'PLUGIN_ACTIVE' => 'Aktiv',
                    'PLUGIN_ACTIVE_HELP' => 'Diese Option dient zur (De-)Aktivierung des Plugins auf Seiten-Ebene.',
                    'NONE_SELECTED' => '- Nichts ausgewählt -',
                    'USE_DEFAULT' => '- Standard -',
                    'OVERRIDE' => [
                        'PAGE_TITLE' => 'Überschreibe Seiten-Titel',
                        'PAGE_URL' => 'Überschreibe Seiten-URL',
                        'PAGE_ID' => 'Überschreibe Seiten-ID'
                    ],
                    'POWERED_BY' => 'Kommentare unterstützt von <span>%s</span>',
                    'COMMENTS' => 'Kommentare',
                    'PROVIDERS' => [
                        'TITLE' => 'Provider',
                        'TITLE_SETTINGS' => 'Provider-Einstellungen',
                        'HELP' => 'Wähle ein Kommentarsystem-Dienst.',
                        'DISCOURSE' => [
                            'TITLE' => 'Discourse',
                            'NOSCRIPT' => 'Bitte aktivieren Sie JavaScript um <a href="https://www.discourse.org/" rel="nofollow noopener noreferrer">die Discourse-Kommentare anzuzeigen zu können.</a>',
                            'COPYRIGHT' => '<a href="https://www.discourse.org/" rel="nofollow noopener noreferrer">Kommentare unterstützt von <span>Discourse</span>.</a>',
                            'FIELDS' => [
                                'HOST' => 'Discourse-URL',
                                'HOST_HELP' => 'Die URL zum Discourse-Kommentardienst.'
                            ]
                        ],
                        'DISQUS' => [
                            'TITLE' => 'Disqus',
                            'NOSCRIPT' => 'Bitte aktivieren Sie JavaScript um <a href="http://disqus.com/?ref_noscript" rel="nofollow noopener noreferrer">die Disqus-Kommentare anzuzeigen zu können.</a>',
                            'COPYRIGHT' => '<a href="http://disqus.com" class="dsq-brlink" rel="nofollow noopener noreferrer">Kommentare unterstützt von <span class="logo-disqus">Disqus</span>.</a>',
                            'FIELDS' => [
                                'SHORTNAME' => 'Forum Kurzname',
                                'SHORTNAME_HELP' => 'Ermöglicht dem Disqus-Dienst deinen eindeutigen Forum Kurznamen zu laden. Falls undefiniert wird Disqus keine Kommentare laden.',
                                'SHORTNAME_PLACEHOLDER' => 'z.B., getgrav',
                                'COUNT' => 'Kommentarzähler anzeigen',
                                'DEFAULT_LANGUAGE' => 'Sprache',
                                'DEFAULT_LANGUAGE_HELP' => 'Verwende die eingestellte Sprache für das Disqus-Kommentarfeld.',
                                'DEFAULT_LANGUAGE_PLACEHOLDER' => 'de'
                            ]
                        ],
                        'FACEBOOK' => [
                            'TITLE' => 'Facebook',
                            'FIELDS' => [
                                'APPID' => 'App ID',
                                'APPID_HELP' => 'Die App ID, die man von der Facebook Developers Seite erhält (https://developers.facebook.com/apps).',
                                'APPID_PLACEHOLDER' => '0123456789012345',
                                'LANGUAGE' => 'Sprache',
                                'LANGUAGE_HELP' => 'Passe die Sprache des Kommentar-Moduls an (lädt eine lokalisierte Version des Facebook SDK für JavaSkript).',
                                'LANGUAGE_PLACEHOLDER' => 'de_DE',
                                'NUM_POSTS' => 'Anzahl Kommentare',
                                'NUM_POSTS_HELP' => 'Die Anzahl an Kommentaren, die standardmäßig angezeigt werden.',
                                'NUM_POSTS_APPEND' => 'Kommentare',
                                'COLORSCHEME' => [
                                    'TITLE' => 'Farbschema',
                                    'HELP' => 'Das verwendete Farbschema. Kann "hell" oder "dunkel" sein.',
                                    'OPTIONS' => [
                                        'LIGHT' => 'Hell',
                                        'DARK' => 'Dunkel'
                                    ]
                                ],
                                'ORDER_BY' => [
                                    'TITLE' => 'Reihenfolge',
                                    'HELP' => 'Beeinflusst die Reihenfolge wie Kommenare angezeigt werden.',
                                    'OPTIONS' => [
                                        'SOCIAL' => 'Sozial',
                                        'REVERSE_TIME' => 'Umgekehrt zeitlich geordnet',
                                        'TIME' => 'Zeitlich geordnet'
                                    ]
                                ],
                                'WIDTH' => 'Breite (px oder %)',
                                'WIDTH_HELP' => 'Die Breite des Kommentar-Plugins auf der Webseite. Das kann ein Pixel-Wert oder ein prozentualer Wert sein (wie z.B. 100% für dynamische Breiten).'
                            ]
                        ],
                        'GOOGLEPLUS' => [
                            'TITLE' => 'Google+',
                            'FIELDS' => [
                                'COUNT' => 'Kommentarzähler anzeigen',
                                'DEFAULT_LANGUAGE' => 'Sprache',
                                'DEFAULT_LANGUAGE_HELP' => 'Verwende die eingestellte Sprache für Google+ Kommentare.',
                                'DEFAULT_LANGUAGE_PLACEHOLDER' => 'de',
                                'WIDTH' => 'Breite (px oder %)',
                                'WIDTH_HELP' => 'Die Breite des Kommentar-Plugins auf der Webseite. Das kann ein Pixel-Wert oder ein prozentualer Wert sein (wie z.B. 100% für dynamische Breiten).'
                            ]
                        ],
                        'INTENSEDEBATE' => [
                            'TITLE' => 'IntenseDebate',
                            'FIELDS' => [
                                'ACCOUNT_NUMBER' => 'Account Nummer',
                                'ACCOUNT_NUMBER_HELP' => 'Dies ist deine IntenseDebate Blog Account-Nummer, die du nach dem Erstellen des Blog-Accounts vorfindest.'
                            ]
                        ],
                        'ISSO' => [
                            'TITLE' => 'Isso',
                            'NOSCRIPT' => 'Bitte aktivieren Sie JavaScript um <a href="https://posativ.org/isso/" rel="nofollow noopener noreferrer">die Isso-Kommentare anzuzeigen zu können.</a>',
                            'COPYRIGHT' => '<a href="https://posativ.org/isso/" rel="nofollow noopener noreferrer">Kommentare unterstützt von <span class="logo-disqus">Isso</span>.</a>',
                            'FIELDS' => [
                                'HOST' => 'Isso-URL',
                                'HOST_HELP' => 'Die URL zum Isso-Kommentardienst.',
                                'HOST_PLACEHOLDER' => 'http://isso.example.com/',
                                'COUNT' => 'Kommentarzähler anzeigen',
                                'DEFAULT_LANGUAGE' => 'Sprache',
                                'DEFAULT_LANGUAGE_HELP' => 'Verwende die eingestellte Sprache für Google+ Kommentare.',
                                'DEFAULT_LANGUAGE_PLACEHOLDER' => 'de',
                                'BUILTIN_CSS' => 'Vorhandenes Stylesheet verwenden',
                                'BUILTIN_CSS_HELP' => 'Legt fest, ob Isso das Stylesheet automatisch anfügen soll oder nicht.',
                                'REPLY_TO_SELF' => 'Selbst-Antworten',
                                'REPLY_TO_SELF_HELP' => 'Erlaubt Antworten auf eigene Kommentare. Aktiveren falls Isso mit reply-to-self = true konfiguriert worden ist.',
                                'REQUIRE' => [
                                    'LABEL' => 'Pflichtfelder',
                                    'AUTHOR' => 'Autor',
                                    'EMAIL' => 'E-Mail-Adresse'
                                ],
                                'COMMENTS' => [
                                    'LABEL' => 'Kommentare',
                                    'NUMBER_LABEL' => 'Toplevel Kommentare',
                                    'NUMBER_HELP' => 'Anzahl der Top-Level-Kommentare, die standardmäßig angezeigt werden sollen. Stellen Sie "-1" ein, um alle anzuzeigen, oder "0", um alle auszublenden.',
                                    'NESTED_LABEL' => 'Verschachtelte Kommentare',
                                    'NESTED_HELP' => 'Anzahl der verschachtelten Kommentare, die standardmäßig angezeigt werden sollen. Stellen Sie "-1" ein, um alle anzuzeigen, oder "0", um alle auszublenden.',
                                    'REVEAL_LABEL' => 'Bei Klick anzeigen',
                                    'REVEAL_HELP' => 'Anzahl der Kommentare, die beim Klicken auf den Link "X" angezeigt werden.'
                                ],
                                'AVATAR' => [
                                    'LABEL' => 'Avatar',
                                    'HELP' => 'Aktivieren oder deaktivieren Sie die Erstellung von Avataren.',
                                    'BG_COLOR' => 'Hintergrundfarbe',
                                    'BG_COLOR_HELP' => 'Avatar-Hintergrundfarbe einstellen. Jede gültige CSS-Farbe ist erlaubt.',
                                    'FG_COLOR' => 'Vordergrundfarbe',
                                    'FG_COLOR_HELP' => 'Avatar-Vordergrundfarbe einstellen. Jede gültige CSS-Farbe ist erlaubt.'
                                ],
                                'VOTE' => [
                                    'LABEL' => 'Abstimmung',
                                    'HELP' => 'Aktivieren oder Deaktivieren der Abstimmungsfunktion auf der Client-Seite.',
                                    'LEVELS_LABEL' => 'Abstimmungsebenen',
                                    'LEVELS_HELP' => 'Liste der Abstimmungsstufen, die verwendet werden, um das Aussehen des Kommentars basierend auf der Punktzahl anzupassen.',
                                    'LEVELS_DESCRIPTION' => 'Geben Sie durch Komma getrennte Werte (z. B. "0,5,10,25,100") oder ein JSON-Array (z. B. "[-5,5,15]") an.',
                                    'LEVELS_PLACEHOLDER' => 'z.B. "-5,5"'
                                ]
                            ]
                        ],
                        'MUUT' => [
                            'TITLE' => 'Muut',
                            'COMMENTS' => 'Kommentare',
                            'FIELDS' => [
                                'FORUM' => 'Forum Name',
                                'FORUM_PLACEHOLDER' => 'z.B., getgrav',
                                'CHANNEL' => 'Kanal',
                                'CHANNEL_PLACEHOLDER' => 'z.B., allgemein',
                                'SHOW_ONLINE' => 'Online-User anzeigen',
                                'SHOW_TITLE' => 'Titel anzeigen',
                                'UPLOAD' => 'Uploads erlauben',
                                'SHARE' => '"Gefällt mir"-Button anzeigen',
                                'WIDGET' => 'Nachrichten-Widget',
                                'WIDGET_HELP' => 'Blendet ein Nachrichten-Button auf der unteren rechten Seite des Browsers ein.',
                                'LANGUAGE' => 'Sprache',
                                'LANGUAGE_PLACEHOLDER' => 'de'
                            ]
                        ],
                        'HYPERCOMMENTS' => [
                            'TITLE' => 'HyperComments',
                            'COMMENTS' => 'Kommentare',
                            'COPYRIGHT' => '<a href="http://hypercomments.com" rel="nofollow noopener noreferrer" class="hc-link" title="comments widget">Kommentare unterstützt von <span>HyperComments</span>.</a>',
                            'FIELDS' => [
                                'WIDGET_ID' => 'Die ID deines Widgets',
                                'SHOW_COUNT' => 'Kommentarzähler anzeigen',
                                'SOCIAL' => 'Die Ordnung und die Menge der sozialen Netzwerke',
                                'SOCIAL_HELP' => 'Hiermit können Sie die Liste und die Reihenfolge der sozialen Netzwerke angeben, durch die die Genehmigung möglich ist. Der Wert der Berechtigungsanbieter wird über ein Komma angegeben, die Reihenfolge der Sozialnetzzuweisungen entspricht der Reihenfolge, in der sie im Widget angezeigt werden',
                                'SOCIAL_PLACEHOLDER' => 'z.B., vk, google, twitter, tumblr'
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'en' => [
            'PLUGINS' => [
                'JS_COMMENTS' => [
                    'PLUGIN_NAME' => 'JSComments',
                    'PLUGIN_STATUS' => 'Plugin status',
                    'PLUGIN_ACTIVE' => 'Active',
                    'PLUGIN_ACTIVE_HELP' => 'This option is used to (de-)activate this plugin on a per-page basis.',
                    'NONE_SELECTED' => '- None selected -',
                    'USE_DEFAULT' => '- Use default -',
                    'OVERRIDE' => [
                        'PAGE_TITLE' => 'Override page title',
                        'PAGE_URL' => 'Override page URL',
                        'PAGE_ID' => 'Override page ID'
                    ],
                    'POWERED_BY' => 'Comments powered by <span>%s</span>',
                    'COMMENTS' => 'Comments',
                    'PROVIDERS' => [
                        'TITLE' => 'Provider',
                        'TITLE_SETTINGS' => 'Provider settings',
                        'HELP' => 'Choose a comment system provider.',
                        'DISCOURSE' => [
                            'TITLE' => 'Discourse',
                            'NOSCRIPT' => 'Please enable JavaScript to view the <a href="https://www.discourse.org/" rel="nofollow noopener noreferrer">comments powered by Discourse.</a>',
                            'COPYRIGHT' => '<a href="https://www.discourse.org/" rel="nofollow noopener noreferrer">Blog Comments powered by <span>Discourse</span>.</a>',
                            'FIELDS' => [
                                'HOST' => 'Discourse URL',
                                'HOST_HELP' => 'The URL to the Discourse commenting system.',
                                'HOST_PLACEHOLDER' => 'http://discourse.example.com/'
                            ]
                        ],
                        'DISQUS' => [
                            'TITLE' => 'Disqus',
                            'NOSCRIPT' => 'Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript" rel="nofollow noopener noreferrer">comments powered by Disqus.</a>',
                            'COPYRIGHT' => '<a href="http://disqus.com" class="dsq-brlink" rel="nofollow noopener noreferrer">Blog Comments powered by <span class="logo-disqus">Disqus</span>.</a>',
                            'FIELDS' => [
                                'SHORTNAME' => 'Forum shortname',
                                'SHORTNAME_HELP' => 'Tells the Disqus service your forum\'s shortname, which is the unique identifier for your website as registered on Disqus. If undefined, the Disqus embed will not load.',
                                'SHORTNAME_PLACEHOLDER' => 'e.g., getgrav',
                                'COUNT' => 'Show comment count',
                                'DEFAULT_LANGUAGE' => 'Default language',
                                'DEFAULT_LANGUAGE_HELP' => 'Dynamically load the Disqus embed in different languages on a per-page basis.',
                                'DEFAULT_LANGUAGE_PLACEHOLDER' => 'en'
                            ]
                        ],
                        'FACEBOOK' => [
                            'TITLE' => 'Facebook',
                            'FIELDS' => [
                                'APPID' => 'App ID',
                                'APPID_HELP' => 'The App ID you get from the Facebook Developers page (https://developers.facebook.com/apps).',
                                'APPID_PLACEHOLDER' => '0123456789012345',
                                'LANGUAGE' => 'Language',
                                'LANGUAGE_HELP' => 'Adjust the language of the Comments plugin by loading a localized version of the Facebook SDK for JavaScript.',
                                'LANGUAGE_PLACEHOLDER' => 'en_EN',
                                'NUM_POSTS' => 'Number of visible posts',
                                'NUM_POSTS_HELP' => 'The number of comments to show by default.',
                                'NUM_POSTS_APPEND' => 'posts',
                                'COLORSCHEME' => [
                                    'TITLE' => 'Color scheme',
                                    'HELP' => 'The color scheme used by the comments plugin. Can be "light" or "dark".',
                                    'OPTIONS' => [
                                        'LIGHT' => 'Light',
                                        'DARK' => 'Dark'
                                    ]
                                ],
                                'ORDER_BY' => [
                                    'TITLE' => 'Order by',
                                    'HELP' => 'The order to use when displaying comments.',
                                    'OPTIONS' => [
                                        'SOCIAL' => 'Social',
                                        'REVERSE_TIME' => 'Reverse time',
                                        'TIME' => 'Time'
                                    ]
                                ],
                                'WIDTH' => 'Width (px or %)',
                                'WIDTH_HELP' => 'The width of the comments plugin on the webpage. This can be either a pixel value or a percentage (such as 100%) for fluid width.'
                            ]
                        ],
                        'GOOGLEPLUS' => [
                            'TITLE' => 'Google+',
                            'FIELDS' => [
                                'COUNT' => 'Show comment count',
                                'DEFAULT_LANGUAGE' => 'Default language',
                                'DEFAULT_LANGUAGE_HELP' => 'Dynamically load Google+ comments in different languages on a per-page basis.',
                                'DEFAULT_LANGUAGE_PLACEHOLDER' => 'en',
                                'WIDTH' => 'Width (px or %)',
                                'WIDTH_HELP' => 'The width of the comments plugin on the webpage. This can be either a pixel value or a percentage (such as 100%) for fluid width.'
                            ]
                        ],
                        'INTENSEDEBATE' => [
                            'TITLE' => 'IntenseDebate',
                            'FIELDS' => [
                                'ACCOUNT_NUMBER' => 'Account number',
                                'ACCOUNT_NUMBER_HELP' => 'This is your IntenseDebate blog account number, which is assigned when you create your account.'
                            ]
                        ],
                        'ISSO' => [
                            'TITLE' => 'Isso',
                            'NOSCRIPT' => 'Please enable JavaScript to view the <a href="https://posativ.org/isso/" rel="nofollow noopener noreferrer">comments powered by Isso.</a>',
                            'COPYRIGHT' => '<a href="https://posativ.org/isso/" rel="nofollow noopener noreferrer">Blog Comments powered by <span>Isso</span>.</a>',
                            'FIELDS' => [
                                'HOST' => 'Isso URL',
                                'HOST_HELP' => 'The URL to the Isso commenting system.',
                                'HOST_PLACEHOLDER' => 'http://isso.example.com/',
                                'COUNT' => 'Show comment count',
                                'DEFAULT_LANGUAGE' => 'Default language',
                                'DEFAULT_LANGUAGE_HELP' => 'Dynamically load Google+ comments in different languages on a per-page basis.',
                                'DEFAULT_LANGUAGE_PLACEHOLDER' => 'en',
                                'BUILTIN_CSS' => 'Use provided stylesheet',
                                'BUILTIN_CSS_HELP' => 'Set to false prevents Isso from automatically appending the stylesheet.',
                                'REPLY_TO_SELF' => 'Reply to self',
                                'REPLY_TO_SELF_HELP' => 'Set to true when spam guard is configured with reply-to-self = true.',
                                'REQUIRE' => [
                                    'LABEL' => 'Require',
                                    'AUTHOR' => 'Author name',
                                    'EMAIL' => 'Author email'
                                ],
                                'COMMENTS' => [
                                    'LABEL' => 'comments',
                                    'NUMBER_LABEL' => 'Toplevel comments',
                                    'NUMBER_HELP' => 'Number of top level comments to show by default. Set to "-1" to show all, or "0" to hide all.',
                                    'NESTED_LABEL' => 'Nested comments',
                                    'NESTED_HELP' => 'Number of nested comments to show by default. Set to "-1" to show all, or "0" to hide all.',
                                    'REVEAL_LABEL' => 'Reveal on click',
                                    'REVEAL_HELP' => 'Number of comments to reveal on clicking the "X Hidden" link.'
                                ],
                                'AVATAR' => [
                                    'LABEL' => 'Avatar',
                                    'HELP' => 'Enable or disable avatar generation.',
                                    'BG_COLOR' => 'Background color',
                                    'BG_COLOR_HELP' => 'Set avatar background color. Any valid CSS color will do.',
                                    'FG_COLOR' => 'Foreground color',
                                    'FG_COLOR_HELP' => 'Set avatar foreground color. Any valid CSS color will do.'
                                ],
                                'VOTE' => [
                                    'LABEL' => 'Vote',
                                    'HELP' => 'Enable or disable voting feature on the client side.',
                                    'LEVELS_LABEL' => 'Vote levels',
                                    'LEVELS_HELP' => 'List of vote levels used to customize comment appearance based on score.',
                                    'LEVELS_DESCRIPTION' => 'Provide a comma-separated values (e.g., "0,5,10,25,100") or a JSON array (e.g., "[-5,5,15]").',
                                    'LEVELS_PLACEHOLDER' => 'e.g., "-5,5"'
                                ]
                            ]
                        ],
                        'MUUT' => [
                            'TITLE' => 'Muut',
                            'COMMENTS' => 'Comments',
                            'FIELDS' => [
                                'FORUM' => 'Forum name',
                                'FORUM_PLACEHOLDER' => 'e.g., getgrav',
                                'CHANNEL' => 'Channel',
                                'CHANNEL_PLACEHOLDER' => 'e.g., general',
                                'SHOW_ONLINE' => 'Show online',
                                'SHOW_TITLE' => 'Show title',
                                'UPLOAD' => 'Allow uploads',
                                'SHARE' => 'Show "Like" button',
                                'WIDGET' => 'Messages widget',
                                'WIDGET_HELP' => 'Shows a message button on the bottom-right of the browser.',
                                'LANGUAGE' => 'Language',
                                'LANGUAGE_PLACEHOLDER' => 'en'
                            ]
                        ],
                        'HYPERCOMMENTS' => [
                            'TITLE' => 'HyperComments',
                            'COMMENTS' => 'Comments',
                            'COPYRIGHT' => '<a href="http://hypercomments.com" rel="nofollow noopener noreferrer" class="hc-link" title="comments widget">Blog Comments powered by <span>HyperComments</span>.</a>',
                            'FIELDS' => [
                                'WIDGET_ID' => 'The ID of your widget',
                                'SHOW_COUNT' => 'Show comment counter',
                                'SOCIAL' => 'The order and set of social networks.',
                                'SOCIAL_HELP' => 'Allows you to specify the list and order of social networks through which authorization will be possible. The value of the authorization providers is specified via a comma, the order of the social network assignments corresponds to the order in which they are displayed in the widget',
                                'SOCIAL_PLACEHOLDER' => 'e.g., vk, google, twitter, tumblr'
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'ro' => [
            'PLUGINS' => [
                'JS_COMMENTS' => [
                    'PLUGIN_NAME' => 'JSComments',
                    'PLUGIN_STATUS' => 'Stare Plugin',
                    'PLUGIN_ACTIVE' => 'Activă',
                    'PLUGIN_ACTIVE_HELP' => 'Această opțiune este folosită pentru a (de)activa acest modul pagină cu pagină.',
                    'NONE_SELECTED' => '- Nici una selectată -',
                    'USE_DEFAULT' => '- Folosește implicit -',
                    'OVERRIDE' => [
                        'PAGE_TITLE' => 'Suprascrie titlul paginii',
                        'PAGE_URL' => 'Suprascrie URL-ul paginii',
                        'PAGE_ID' => 'Suprascrie ID-ul paginii'
                    ],
                    'PROVIDERS' => [
                        'TITLE' => 'Furnizor',
                        'TITLE_SETTINGS' => 'Setările furnizorului',
                        'HELP' => 'Alege un furnizor pentru comentarii.',
                        'DISCOURSE' => [
                            'TITLE' => 'Discourse',
                            'NOSCRIPT' => 'Te rugăm să activezi JavaScript pentru a vizualiza comentariile <a href="https://www.discourse.org/" rel="nofollow noopener noreferrer"> prin Discourse.</a>',
                            'COPYRIGHT' => '<a href="https://www.discourse.org/" rel="nofollow noopener noreferrer">Comentarii furmizate de  <span>Discourse</span>.</a>',
                            'FIELDS' => [
                                'HOST' => 'URL pentru Discourse',
                                'HOST_HELP' => 'URL-ul către sistemul de comentarii Discourse.'
                            ]
                        ],
                        'DISQUS' => [
                            'TITLE' => 'Disqus',
                            'NOSCRIPT' => 'Te rugăm să activezi JavaScript pentru a vizualiza comentariile <a href="http://disqus.com/?ref_noscript" rel="nofollow noopener noreferrer"> furnizate prin Disqus.</a>',
                            'COPYRIGHT' => '<a href="http://disqus.com" class="dsq-brlink" rel="nofollow noopener noreferrer">Comentarii furmizate de <span class="logo-disqus">Disqus</span>.</a>',
                            'FIELDS' => [
                                'SHORTNAME' => 'Numele forumului ',
                                'SHORTNAME_HELP' => 'Îi spune serviciului Disqus numele scurt al forumului, care este unicul identificator pentru site-ul tău înregistrat prin Disqus. Dacă nu este definit, comentariile Disqus nu vor fi încărcate.',
                                'COUNT' => 'Arată numărul de comentarii',
                                'DEFAULT_LANGUAGE' => 'Limba implicită',
                                'DEFAULT_LANGUAGE_HELP' => 'Încarcă în mod dinamic limbile diferite pentru Disqus pagină cu pagină.'
                            ]
                        ],
                        'FACEBOOK' => [
                            'TITLE' => 'Facebook',
                            'FIELDS' => [
                                'APPID' => 'App ID',
                                'APPID_HELP' => 'ID-ul aplicației create cu Facebook Developers (https://developers.facebook.com/apps).',
                                'LANGUAGE' => 'Limba',
                                'LANGUAGE_HELP' => 'Ajustează limba modului de comentarii prin încărcarea unei versiuni localizate a Facebook SDK pentru JavaScript.',
                                'NUM_POSTS' => 'Numărul postărilor vizibile',
                                'NUM_POSTS_HELP' => 'Numărul de comentarii afișate în mod implicit.',
                                'NUM_POSTS_APPEND' => 'postări',
                                'COLORSCHEME' => [
                                    'TITLE' => 'Tematica culorii',
                                    'HELP' => 'Tematica culorii ce poate fi folosită de modului de comentarii. Poate fi "Deschisă" sau "Închisă".',
                                    'OPTIONS' => [
                                        'LIGHT' => 'Deschisă',
                                        'DARK' => 'Închisă'
                                    ]
                                ],
                                'ORDER_BY' => [
                                    'TITLE' => 'Ordonează după',
                                    'HELP' => 'Ordinea folosită la afișarea comentariilor.',
                                    'OPTIONS' => [
                                        'SOCIAL' => 'Social',
                                        'REVERSE_TIME' => 'Inversează data',
                                        'TIME' => 'Timp'
                                    ]
                                ],
                                'WIDTH' => 'Lățime (px or %)',
                                'WIDTH_HELP' => 'Lățimea ocupată de modulul de comentarii pe pagina de internet. Aceasta poate fi exprimată în pixeli sau procentaj (de eg: 100%) pentru lătime fluidă.'
                            ]
                        ],
                        'GOOGLEPLUS' => [
                            'TITLE' => 'Google+',
                            'FIELDS' => [
                                'COUNT' => 'Arată numărul comentariilor',
                                'DEFAULT_LANGUAGE' => 'Limba implicită',
                                'DEFAULT_LANGUAGE_HELP' => 'Încarcă în mod dinamic comentariile Google+ în limbi diferite pagină cu pagină.',
                                'WIDTH' => 'Lățime (px sau %)',
                                'WIDTH_HELP' => 'Lățimea ocupată de modulul de comentarii pe pagina de internet. Aceasta poate fi exprimată în pixeli sau procentaj (de eg: 100%) pentru lătime fluidă.'
                            ]
                        ],
                        'INTENSEDEBATE' => [
                            'TITLE' => 'IntenseDebate',
                            'FIELDS' => [
                                'ACCOUNT_NUMBER' => 'Numărul contului',
                                'ACCOUNT_NUMBER_HELP' => 'Acesta este numărul contului tău de pe IntenseDebate pe care îl primești la crearea contului.'
                            ]
                        ],
                        'MUUT' => [
                            'TITLE' => 'Muut',
                            'COMMENTS' => 'Comentarii',
                            'FIELDS' => [
                                'FORUM' => 'Numele forumului',
                                'CHANNEL' => 'Canal',
                                'SHOW_ONLINE' => 'Arată online',
                                'SHOW_TITLE' => 'Arată titlu',
                                'UPLOAD' => 'Permite încărcări',
                                'SHARE' => 'Arată butonul "Like"',
                                'WIDGET' => 'Widget pentru mesaje',
                                'WIDGET_HELP' => 'Arată un buton pentru mesaj în partea dreapta-jos a browser-ului.',
                                'LANGUAGE' => 'Limba'
                            ]
                        ],
                        'HYPERCOMMENTS' => [
                            'TITLE' => 'HyperComments',
                            'COMMENTS' => 'Comentarii',
                            'FIELDS' => [
                                'WIDGET_ID' => 'ID-ul widget-ului',
                                'SHOW_COUNT' => 'Afișați un contor de comentarii',
                                'SOCIAL' => 'Ordinea și setul de rețele sociale',
                                'SOCIAL_HELP' => 'Vă permite să specificați lista și ordinea rețelelor sociale prin care autorizarea va fi posibilă. Valoarea furnizorilor de autorizație este specificată printr-o virgulă, ordinea repartizării rețelei sociale corespunde ordinii în care acestea sunt afișate în widget-ul'
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'it' => [
            'PLUGINS' => [
                'JS_COMMENTS' => [
                    'PLUGIN_NAME' => 'JSComments',
                    'PLUGIN_STATUS' => 'Stato del plugin',
                    'PROVIDERS' => [
                        'TITLE' => 'Provider',
                        'TITLE_SETTINGS' => 'Impostazioni provider',
                        'DISQUS' => [
                            'TITLE' => 'Disqus',
                            'NOSCRIPT' => 'Per farvore abilita JavaScript per visualizzare <a href="http://disqus.com/?ref_noscript" rel="nofollow noopener noreferrer">i commenti offerto da Disqus.</a>',
                            'COPYRIGHT' => '<a href="http://disqus.com" class="dsq-brlink" rel="nofollow noopener noreferrer">Commenti offerti da <span class="logo-disqus">Disqus</span></a>',
                            'FIELDS' => [
                                'SHORTNAME' => 'Shortname',
                                'DEFAULT_LANGUAGE' => 'Lingua predefina'
                            ]
                        ],
                        'FACEBOOK' => [
                            'TITLE' => 'Facebook',
                            'FIELDS' => [
                                'APPID' => 'App ID',
                                'LANGUAGE' => 'Lingua',
                                'NUM_POSTS' => 'Numero dei posts visibili',
                                'NUM_POSTS_APPEND' => 'posts',
                                'COLORSCHEME' => [
                                    'TITLE' => 'Colore schema',
                                    'OPTIONS' => [
                                        'LIGHT' => 'Chiaro',
                                        'DARK' => 'Scuro'
                                    ]
                                ],
                                'ORDER_BY' => [
                                    'TITLE' => 'Ordina per',
                                    'OPTIONS' => [
                                        'SOCIAL' => 'Sociale',
                                        'REVERSE_TIME' => 'Tempo inverso',
                                        'TIME' => 'Tempo'
                                    ]
                                ],
                                'WIDTH' => 'Larghezza (px o %)'
                            ]
                        ],
                        'INTENSEDEBATE' => [
                            'TITLE' => 'IntenseDebate'
                        ],
                        'MUUT' => [
                            'TITLE' => 'Muut',
                            'COMMENTS' => 'Commenti',
                            'FIELDS' => [
                                'FORUM' => 'Nome Forum',
                                'CHANNEL' => 'Canale',
                                'SHOW_ONLINE' => 'Visualizza online',
                                'SHOW_TITLE' => 'Visualizza titolo',
                                'WIDGET' => 'Widget',
                                'LANGUAGE' => 'Lingua'
                            ]
                        ],
                        'HYPERCOMMENTS' => [
                            'TITLE' => 'HyperComments',
                            'COMMENTS' => 'Commenti',
                            'FIELDS' => [
                                'WIDGET_ID' => 'L\'ID del tuo widget',
                                'SHOW_COUNT' => 'Mostra contatore commenti',
                                'SOCIAL' => 'L\'ordine e l\'insieme delle reti sociali',
                                'SOCIAL_HELP' => 'Consente di specificare l\'elenco e l\'ordine delle reti sociali attraverso le quali sarà possibile l\'autorizzazione. Il valore dei provider di autorizzazioni viene specificato tramite una virgola, l\'ordine delle assegnazioni della rete sociale corrisponde all\'ordine in cui vengono visualizzati nel widget'
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'ru' => [
            'PLUGINS' => [
                'JS_COMMENTS' => [
                    'PLUGIN_NAME' => 'JSComments',
                    'PLUGIN_STATUS' => 'Статус плагина',
                    'PLUGIN_ACTIVE' => 'Активный',
                    'PLUGIN_ACTIVE_HELP' => 'Эта опция используется для (де-)активации этого плагина для каждой страницы.',
                    'NONE_SELECTED' => '- Ничего не выбрано -',
                    'USE_DEFAULT' => '- Использовать по умолчанию -',
                    'OVERRIDE' => [
                        'PAGE_TITLE' => 'Переопределить заголовок страницы',
                        'PAGE_URL' => 'Переопределить URL страницы',
                        'PAGE_ID' => 'Переопределить ID страницы'
                    ],
                    'PROVIDERS' => [
                        'TITLE' => 'Поставщик',
                        'TITLE_SETTINGS' => 'Параметры поставщиков',
                        'HELP' => 'Выберите поставщика системы комментариев.',
                        'DISCOURSE' => [
                            'TITLE' => 'Discourse',
                            'NOSCRIPT' => 'Включите JavaScript, чтобы просмотреть <a href="https://www.discourse.org/" rel="nofollow noopener noreferrer">комментарии, основанные на Discourse.</a>',
                            'COPYRIGHT' => '<a href="https://www.discourse.org/" rel="nofollow noopener noreferrer">Blog Comments powered by <span>Discourse</span>.</a>',
                            'FIELDS' => [
                                'HOST' => 'Discourse URL',
                                'HOST_HELP' => 'URL-адрес системы комментирования Discourse.'
                            ]
                        ],
                        'DISQUS' => [
                            'TITLE' => 'Disqus',
                            'NOSCRIPT' => 'Включите JavaScript, чтобы просмотреть <a href="http://disqus.com/?ref_noscript" rel="nofollow noopener noreferrer">комментарии, основанные на Disqus.</a>',
                            'COPYRIGHT' => '<a href="http://disqus.com" class="dsq-brlink" rel="nofollow noopener noreferrer">Blog Comments powered by <span class="logo-disqus">Disqus</span>.</a>',
                            'FIELDS' => [
                                'SHORTNAME' => 'Краткое название форума',
                                'SHORTNAME_HELP' => 'Сообщает службе Disqus краткое имя вашего форума, которое является уникальным идентификатором вашего сайта, зарегистрированным на Disqus. Если не определено, Disqus embed не загружается.',
                                'COUNT' => 'Показать количество комментариев',
                                'DEFAULT_LANGUAGE' => 'Язык по умолчанию',
                                'DEFAULT_LANGUAGE_HELP' => 'Динамически загружайте Disqus на разных языках для каждой страницы.'
                            ]
                        ],
                        'FACEBOOK' => [
                            'TITLE' => 'Facebook',
                            'FIELDS' => [
                                'APPID' => 'App ID',
                                'APPID_HELP' => 'Идентификатор приложения, который вы получаете на странице разработчиков Facebook (https://developers.facebook.com/apps).',
                                'LANGUAGE' => 'Язык',
                                'LANGUAGE_HELP' => 'Откорректируйте язык плагина комментариев, загрузив локализованную версию SDK Facebook для JavaScript.',
                                'NUM_POSTS' => 'Количество видимых сообщений',
                                'NUM_POSTS_HELP' => 'Количество комментариев для показа по умолчанию.',
                                'NUM_POSTS_APPEND' => 'posts',
                                'COLORSCHEME' => [
                                    'TITLE' => 'Цветовая схема',
                                    'HELP' => 'Цветовая схема, используемая в плагине комментариев. Может быть "light" или "dark".',
                                    'OPTIONS' => [
                                        'LIGHT' => 'Light',
                                        'DARK' => 'Dark'
                                    ]
                                ],
                                'ORDER_BY' => [
                                    'TITLE' => 'Сортировать по',
                                    'HELP' => 'Порядок отображения комментариев.',
                                    'OPTIONS' => [
                                        'SOCIAL' => 'Social',
                                        'REVERSE_TIME' => 'Reverse time',
                                        'TIME' => 'Time'
                                    ]
                                ],
                                'WIDTH' => 'Ширина (px или %)',
                                'WIDTH_HELP' => 'Ширина плагина комментирования на веб-странице. Это может быть либо значение в пикселях, либо процент (например, 100%) от ширины контейнера.'
                            ]
                        ],
                        'GOOGLEPLUS' => [
                            'TITLE' => 'Google+',
                            'FIELDS' => [
                                'COUNT' => 'Показать количество комментариев',
                                'DEFAULT_LANGUAGE' => 'Язык по умолчанию',
                                'DEFAULT_LANGUAGE_HELP' => 'Динамически загружать комментарии Google+ на разных языках на странице.',
                                'WIDTH' => 'Ширина (px или %)',
                                'WIDTH_HELP' => 'Ширина плагина комментирования на веб-странице. Это может быть либо значение в пикселях, либо процент (например, 100%) от ширины контейнера.'
                            ]
                        ],
                        'INTENSEDEBATE' => [
                            'TITLE' => 'IntenseDebate',
                            'FIELDS' => [
                                'ACCOUNT_NUMBER' => 'Номер аккаунта',
                                'ACCOUNT_NUMBER_HELP' => 'Это ваш номер учетной записи блога IntenseDebate, который присваивается при создании вашей учетной записи.'
                            ]
                        ],
                        'MUUT' => [
                            'TITLE' => 'Muut',
                            'COMMENTS' => 'Комментарии',
                            'FIELDS' => [
                                'FORUM' => 'Имя на форуме',
                                'CHANNEL' => 'Канал',
                                'SHOW_ONLINE' => 'Показать online',
                                'SHOW_TITLE' => 'Показать заголовок',
                                'UPLOAD' => 'Разрешить загрузку',
                                'SHARE' => 'Показать кнопку «Нравится»',
                                'WIDGET' => 'Виджет сообщений',
                                'WIDGET_HELP' => 'Показывает кнопку сообщения в правом нижнем углу браузера.',
                                'LANGUAGE' => 'Язык'
                            ]
                        ],
                        'HYPERCOMMENTS' => [
                            'TITLE' => 'HyperComments',
                            'COMMENTS' => 'Комментарии',
                            'FIELDS' => [
                                'WIDGET_ID' => 'ID Вашего виджета',
                                'SHOW_COUNT' => 'Показать счетчик комментариев',
                                'SOCIAL' => 'Порядок и набор социальных сетей.',
                                'SOCIAL_HELP' => 'Позволяет задать перечень и порядок социальных сетей через которые будет возможна авторизация. Значение провайдеров авторизации задаются через запятую, порядок задания соц.сетей соответствует порядку их отображения в виджете.',
                                'SOCIAL_PLACEHOLDER' => 'например: vk, google, twitter, tumblr'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
