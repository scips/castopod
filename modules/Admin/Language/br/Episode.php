<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'season' => 'Koulzad {seasonNumber}',
    'season_abbr' => 'K{seasonNumber}',
    'number' => 'Rann {episodeNumber}',
    'number_abbr' => 'R. {episodeNumber}',
    'season_episode' => 'Koulzad {seasonNumber} rann {episodeNumber}',
    'season_episode_abbr' => 'K{seasonNumber}R{episodeNumber}',
    'number_of_comments' => '{numberOfComments, plural,
        0 {evezhiadenn ebet}
        one {# evezhiadenn}
        other {# evezhiadenn}
    }',
    'all_podcast_episodes' => 'Holl rannoù ar podkast',
    'back_to_podcast' => 'Mont d\'ar podkast en-dro',
    'edit' => 'Kemmañ',
    'publish' => 'Embann',
    'publish_edit' => 'Kemmañ an embannadur',
    'publish_date_edit' => 'Edit publication date',
    'unpublish' => 'Diembannañ',
    'publish_error' => 'Embannet eo bet ar rann dija.',
    'publish_edit_error' => 'Embannet eo bet ar rann dija.',
    'publish_cancel_error' => 'Embannet eo bet ar rann dija.',
    'publish_date_edit_error' => 'Episode has not been published yet, you cannot edit its publication date.',
    'publish_date_edit_future_error' => 'Episode\'s publication date can only be set to a past date! If you would like to reschedule it, unpublish it first.',
    'publish_date_edit_success' => 'Episode\'s publication date has been updated successfully!',
    'unpublish_error' => 'N\'eo ket bet embannet ar rann.',
    'delete' => 'Dilemel',
    'go_to_page' => 'Gwelet ar bajenn',
    'create' => 'Ouzhpennañ ur rann',
    'publication_status' => [
        'published' => 'Embannet',
        'with_podcast' => 'Embannet',
        'scheduled' => 'Steuñvet',
        'not_published' => 'Diembann',
    ],
    'with_podcast_hint' => 'Embannet e vo war un dro gant ar podkast',
    'list' => [
        'search' => [
            'placeholder' => 'Klask ur rann',
            'clear' => 'Diverkañ an enklask',
            'submit' => 'Klask',
        ],
        'number_of_episodes' => '{numberOfEpisodes, plural,
        0 {rann ebet}
        one {# rann}
        other {# rann}
    }',
        'episode' => 'Rann',
        'visibility' => 'Gwelusted',
        'comments' => 'Evezhiadennoù',
        'actions' => 'Obererezhioù',
    ],
    'messages' => [
        'createSuccess' => 'Krouet eo bet ar rann gant berzh!',
        'editSuccess' => 'Hizivaet eo bet ar rann gant berzh!',
        'publishSuccess' => '{publication_status, select,
            published {Embannet eo bet ar rann gant berzh!}
            scheduled {Raktreset eo bet embannadur ar rann gant berzh!}
            with_podcast {Ar rann-mañ a vo embannet war un dro gant ar podkast.}
            other {N\'eo ket bet embannet ar rann-mañ.}
        }',
        'publishCancelSuccess' => 'Nullet eo bet embannadur ar rann gant berzh!',
        'unpublishBeforeDeleteTip' => 'Ret eo deoc\'h diembannañ ar rann a-raok dilemel anezhi.',
        'scheduleDateError' => 'Ret eo lakaat un deiziad evit an embannadur!',
        'deletePublishedEpisodeError' => 'Diembannit ar rann a-raok dilemel anezhi mar plij.',
        'deleteSuccess' => 'Dilamet eo bet ar rann gant berzh!',
        'deleteError' => 'C\'hwitadenn war dilemel {type, select,
            transcript {treuzskrivadur}
            chapters {chabistroù}
            image {golo}
            audio {aodio}
            other {media}
        } ar rann.',
        'deleteFileError' => 'C\'hwitadenn war dilemel restr {type, select,
            transcript {an treuzskrivadur}
            chapters {ar chabistroù}
            image {ar golo}
            audio {an aodio}
            other {ar media}
        } ({file_key}). Gallout a rit lemel kuit ar restr-mañ diouzh ar gantenn dre zorn.',
        'sameSlugError' => 'Bez ez eus eus ur rann gant ar berradur-mañ (slug) dija.',
    ],
    'form' => [
        'file_size_error' =>
            'Re vras eo ho restr! {0} eo ar braster uhelañ. Dav eo deoc\'h kreskaat an talvoudoù `memory_limit`, `upload_max_filesize` ha `post_max_size` en ho restr kefluniañ, a-raok adloc\'hañ ho tafariad web hag uskargañ ho restr.',
        'audio_file' => 'Restr aodio',
        'audio_file_hint' => 'Dibabit ur restr .mp3 pe .m4a.',
        'info_section_title' => 'Titouroù ar rann',
        'cover' => 'Golo ar rann',
        'cover_hint' =>
            'Ma n\'ho peus ket kaset ur golo e vo implijet hini ar podkast en e blas.',
        'cover_size_hint' => 'Ar golo a rankfe bezañ ur c\'harrez ha 1400px e vent da nebeutañ.',
        'title' => 'Titl',
        'title_hint' =>
            'Dleout a rafe anv ar rann, sklaer ha berr. Arabat lakaat niverenn ar rann pe ar c\'houlzad amañ.',
        'permalink' => 'Ere peurzalc\'hus',
        'season_number' => 'Koulzad',
        'episode_number' => 'Rann',
        'type' => [
            'label' => 'Doare',
            'full' => 'Klok',
            'full_hint' => 'Rann a-bezh',
            'trailer' => 'Tañvadenn',
            'trailer_hint' => 'Tennad berr evit brudañ ar podkast',
            'bonus' => 'Bonuz',
            'bonus_hint' => 'Danvez ouzhpenn ar podkast (da skouer, titouroù diwar-benn kostezioù pe atersadennoù gant an aktourien·ezed), pe bruderezh kroaziet evit ur podkast all',
        ],
        'premium_title' => 'Premium',
        'premium' => 'Episode must be accessible to premium subscribers only',
        'parental_advisory' => [
            'label' => 'Kemenn evit ar gerent',
            'hint' => 'Hag ar rann-mañ a zo danvez ha ne zlefe ket gwelet gant bugale?',
            'undefined' => 'andermenet',
            'clean' => 'Dereat',
            'explicit' => 'Danvez evit an oadourien',
        ],
        'show_notes_section_title' => 'Notennoù ar rann',
        'show_notes_section_subtitle' =>
            'Betek 4000 arouez, sklaer ha berr. Notennoù a rann a c\'hell sikour selaouerien·ezed zo kavout anezhi.',
        'description' => 'Deskrivadur',
        'description_footer' => 'Traoñ an deskrivadur',
        'description_footer_hint' =>
            'Emañ ouzhpennet an destenn-mañ e dibenn an holl rannoù. Ul lec\'h mat eo evit lakaat ereoù ho rouedadoù sokial da skouer.',
        'additional_files_section_title' => 'Restroù ouzhpenn',
        'additional_files_section_subtitle' =>
            'Ar restroù-mañ a c\'hell bezañ implijet gant savennoù all evit aesaat an traoù d\'ho selaouerien·ezed. Sellit ouzh {podcastNamespaceLink} evit muioc\'h a ditouroù.',
        'location_section_title' => 'Lec\'h',
        'location_section_subtitle' => 'Eus peseurt lec\'h ez eus kaoz er rann-mañ?',
        'location_name' => 'Anv pe chomlec\'h al lec\'h',
        'location_name_hint' => 'Al lec\'h-mañ a c\'hell bezañ unan gwir pe unan faltaziet',
        'transcript' => 'Treuzskrivadur (istitloù)',
        'transcript_hint' => 'Aotreet e vez nemet .srt.',
        'transcript_download' => 'Pellgargañ an treuzskrivadur',
        'transcript_file' => 'Restr an treuzskrivadur (.srt)',
        'transcript_remote_url' => 'URL a-bell evit restr an treuzskrivadur',
        'transcript_file_delete' => 'Dilemel restr an treuzskrivadur',
        'chapters' => 'Chabistroù',
        'chapters_hint' => 'Dleout a ra ar restr bezañ er furmad JSON Chapters.',
        'chapters_download' => 'Pellgargañ ar chabistroù',
        'chapters_file' => 'Restr ar chabistroù',
        'chapters_remote_url' => 'URL a-bell evit restr ar chabistroù',
        'chapters_file_delete' => 'Dilemel restr ar chabistroù',
        'advanced_section_title' => 'Arventennoù kempleshoc\'h',
        'advanced_section_subtitle' =>
            'M\'ho peus ezhomm eus balizennoù RSS ha n\'eus ket anezho e Castopod e c\'hellit o lakaat amañ.',
        'custom_rss' => 'Balizennoù RSS personelaet evit ar rann',
        'custom_rss_hint' => 'An dra-se a vo ouzhpennet e-barzh ar valizenn ❬item❭.',
        'block' => 'Ar rann-se a rankfe bezañ kuzhet diouzh ar rolladoù publik',
        'block_hint' =>
            'Diskouez pe kuzhat ar rann: trec\'haoliñ an afell-mañ a viro ar rann-mañ ouzh bezañ diskouezet war Apple Podcasts, Google Podcasts pe savennoù all hag a implij ar renabloù-se. (N\'eus gwarant ebet)',
        'submit_create' => 'Krouiñ ar rann',
        'submit_edit' => 'Enrollañ ar rann',
    ],
    'publish_form' => [
        'back_to_episode_dashboard' => 'Distreiñ da daolenn-stur ar rann',
        'post' => 'Ho kemennadenn vrudañ',
        'post_hint' =>
            "Skrivit ur gemennadenn evit brudañ embannadur ho rann. Skignet e vo ar gemennadenn-se d'an holl re a heuilh ac'hanoc'h war ar c'hevrebed (fediverse) ha lakaet e vo war well war pajenn ho podkast.",
        'message_placeholder' => 'Skrivit ho kemennadenn…',
        'publication_date' => 'Deiziad embannadur',
        'publication_method' => [
            'now' => 'Bremañ',
            'schedule' => 'Steuñviñ',
            'with_podcast' => 'Embann asambles gant ar podkast',
        ],
        'scheduled_publication_date' => 'Deiziad embannadur steuñvet',
        'scheduled_publication_date_clear' => 'Skarzhañ deiziad embannadur',
        'scheduled_publication_date_hint' =>
            'Gallout a rit steuñviñ embannadur ar rann en ur steuñviñ embannadur ar rann en dazont. Dleout a ra ar vaezienn bezañ er furmad YYYY-MM-DD HH:mm',
        'submit' => 'Embann',
        'submit_edit' => 'Kemmañ an embannadur',
        'cancel_publication' => 'Nullañ an embannadur',
        'message_warning' => 'N\'ho peus ket skrivet ur gemennadenn evit brudañ ho rann!',
        'message_warning_hint' => 'Ouzhpennañ ur gemennadenn a lakay muioc\'h a dud er jeu, ha diwar se e vo gwelet muioc\'h ho rann.',
        'message_warning_submit' => 'Embann memestra',
    ],
    'publish_date_edit_form' => [
        'new_publication_date' => 'New publication date',
        'new_publication_date_hint' => 'Must be set to a past date.',
        'submit' => 'Edit publication date',
    ],
    'unpublish_form' => [
        'disclaimer' =>
            "Diembann ar rann a zilamo an holl gemennadennoù liammet outi ha skarzhet e vo eus lanv RSS ar podkast.",
        'understand' => 'Komprennet eo, diembann ar rann a fell din',
        'submit' => 'Diembann',
    ],
    'delete_form' => [
        'disclaimer' =>
            "Gant ar rann e vo dilamet an holl restroù media, evezhiadennoù, tennadoù video ha son liammet outi.",
        'understand' => 'Komprennet eo, dilemel ar rann a fell din',
        'submit' => 'Dilemel',
    ],
    'embed' => [
        'title' => 'Lenner enkorfet',
        'label' =>
            'Dibabit ul liv evit an tem, eilit ar c\'hod er golver ha pegit anezhañ war ho lec\'hienn.',
        'clipboard_iframe' => 'Eilañ al lenner enkorfet er golver',
        'clipboard_url' => 'Eilañ ar chomlec\'h er golver',
        'dark' => 'Teñval',
        'dark-transparent' => 'Teñval treuzwelus',
        'light' => 'Sklaer',
        'light-transparent' => 'Sklaer treuzwelus',
    ],
];
