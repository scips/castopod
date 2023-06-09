<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'all_podcasts' => 'Tous les podcasts',
    'no_podcast' => 'Aucun podcast trouvé !',
    'create' => 'Créer un podcast',
    'import' => 'Importer un podcast',
    'new_episode' => 'Créer un épisode',
    'view' => 'Voir le podcast',
    'edit' => 'Modifier le podcast',
    'publish' => 'Publier le podcast',
    'publish_edit' => 'Modifier la publication',
    'delete' => 'Supprimer le podcast',
    'see_episodes' => 'Voir les épisodes',
    'see_contributors' => 'Voir les contributeurs',
    'go_to_page' => 'Aller à la page',
    'latest_episodes' => 'Derniers épisodes',
    'see_all_episodes' => 'Voir tous les épisodes',
    'draft' => 'Brouillon',
    'messages' => [
        'createSuccess' => 'Le podcast a été créé avec succès !',
        'editSuccess' => 'Le podcast a bien été mis à jour !',
        'importSuccess' => 'Le podcast a été importé avec succès !',
        'deleteSuccess' => 'Podcast @{podcast_handle} a été supprimé avec succès !',
        'deletePodcastMediaError' => 'Impossible de supprimer le podcast {type, select,
            cover {couverture}
            banner {bannière}
            other {média}
        }.',
        'deleteEpisodeMediaError' => 'Impossible de supprimer l\'épisode de podcast {episode_slug} {type, select,
            transcript {transcription}
            chapters {chapitres}
            image {couverture}
            audio {audio}
            other {média}
        }.',
        'deletePodcastMediaFolderError' => 'Impossible de supprimer le dossier de podcast {folder_path}. Vous pouvez le supprimer manuellement de votre disque.',
        'podcastFeedUpdateSuccess' => 'Mise à jour réussie : {number_of_new_episodes, plural,
            one {# épisode a été}
            other {# épisodes ont été}
        } ajoutés au podcast!',
        'podcastFeedUpToDate' => 'Le podcast est déjà à jour.',
        'podcastNotImported' => 'Le podcast n\'a pas pu être mis à jour car il n\'a pas été importé.',
        'publishError' => 'Ce podcast est soit déjà publié, soit programmé pour publication.',
        'publishEditError' => 'Ce podcast n\'est pas programmé pour publication.',
        'publishCancelSuccess' => 'Publication de Podcast annulée avec succès !',
        'scheduleDateError' => 'La date de planification doit être définie !',
    ],
    'form' => [
        'identity_section_title' => 'Informations sur le Podcast',
        'identity_section_subtitle' => 'Ces champs vous permettent de vous faire remarquer.',
        'cover' => 'Couverture du podcast',
        'cover_size_hint' => 'La couverture du podcast doit être carrée, avec au minimum 1400px de largeur et de hauteur.',
        'banner' => 'Bannière du podcast',
        'banner_size_hint' => 'La bannière doit être au format 3/1, avec au minimum 1500px de largeur.',
        'banner_delete' => 'Supprimer la bannière du podcast',
        'title' => 'Titre',
        'handle' => 'Identifiant',
        'handle_hint' =>
            'Utilisé pour identifier le podcast. Les majuscules, les minuscules, les chiffres et le caractère souligné « _ » sont acceptés.',
        'type' => [
            'label' => 'Type',
            'episodic' => 'Épisodique',
            'episodic_hint' => 'Si les épisodes sont destinés à être consommés sans ordre spécifique. Les épisodes les plus récents seront présentés en premier.',
            'serial' => 'Série',
            'serial_hint' => 'Si les épisodes sont destinés à être consommés dans un ordre séquentiel bien défini. Les épisodes les plus anciens seront présentés en premier.',
        ],
        'description' => 'Description',
        'classification_section_title' => 'Classification',
        'classification_section_subtitle' =>
            'Ces champs auront un impact sur votre audience et votre concurrence.',
        'language' => 'Langue',
        'category' => 'Catégorie',
        'category_placeholder' => 'Sélectionner une catégorie…',
        'other_categories' => 'Autres catégories',
        'parental_advisory' => [
            'label' => 'Avertissement parental',
            'hint' => 'Contient-il un contenu explicite ?',
            'undefined' => 'non défini',
            'clean' => 'Convenable',
            'explicit' => 'Explicite',
        ],
        'author_section_title' => 'Auteur / Autrice',
        'author_section_subtitle' => 'Qui gère le podcast ?',
        'owner_name' => 'Nom du/de la propriétaire',
        'owner_name_hint' =>
            'Pour usage administratif uniquement. Visible dans le flux RSS public.',
        'owner_email' => 'E-mail du/de la propriétaire',
        'owner_email_hint' =>
            'Utilisé par la plupart des plateformes pour vérifier la propriété du podcast. Visible dans le flux RSS public.',
        'publisher' => 'Éditeur / Éditrice',
        'publisher_hint' =>
            'Le groupe responsable de la création du podcast. Fait souvent référence à la société mère ou au réseau d’un podcast. Ce champ est parfois appelé « Auteur ».',
        'copyright' => 'Droit d’auteur',
        'location_section_title' => 'Localisation',
        'location_section_subtitle' => 'De quel lieu ce podcast parle-t-il ?',
        'location_name' => 'Nom ou adresse du lieu',
        'location_name_hint' => 'Ce lieu peut être réel ou fictif',
        'monetization_section_title' => 'Monétisation',
        'monetization_section_subtitle' =>
            'Gagnez de l’argent grâce à votre audience.',
        'premium' => 'Prémium',
        'premium_by_default' => 'Les épisodes doivent être définis comme premium par défaut',
        'premium_by_default_hint' => 'Les épisodes de Podcast seront marqués comme premium par défaut. Vous pouvez toujours choisir de définir certains épisodes, bandes-annonces ou bonus comme publics.',
        'op3' => 'Open Podcast Prefix Project (OP3)',
        'op3_hint' => 'Value your analytics data with OP3, an open-source and trusted third party analytics service. Share, validate and compare your analytics data with the open podcasting ecosystem.',
        'op3_enable' => 'Enable OP3 analytics service',
        'op3_enable_hint' => 'For security reasons, premium episodes\' analytics data will not be shared with OP3.',
        'payment_pointer' => 'Adresse de paiement (Payment Pointer) pour Web Monetization',
        'payment_pointer_hint' =>
            'L’adresse où vous recevrez de l’argent grâce à Web Monetization',
        'advanced_section_title' => 'Paramètres avancés',
        'advanced_section_subtitle' =>
            'Si vous avez besoin d’une balise que nous n’avons pas couverte, définissez-la ici.',
        'custom_rss' => 'Balises RSS personnalisées pour le podcast',
        'custom_rss_hint' => 'Ceci sera injecté dans la balise ❬channel❭.',
        'new_feed_url' => 'URL du nouveau flux',
        'new_feed_url_hint' => 'Utilisez ce champ lorsque vous déplacez ce podcast vers un autre domaine ou que vous changez d’hébergeur. Par défaut, ce champ est rempli avec l’URL du flux actuel si le podcast est importé.',
        'old_feed_url' => 'URL de l\'ancien flux',
        'update_feed' => 'Actualiser ce flux',
        'update_feed_tip' => 'Importer les derniers épisodes de ce podcast',
        'partnership' => 'Partenariat',
        'partner_id' => 'ID',
        'partner_link_url' => 'URL lien',
        'partner_image_url' => 'URL image',
        'partner_id_hint' => 'Votre identifiant personnel partenaire',
        'partner_link_url_hint' => 'L’adresse générique des liens partenaire',
        'partner_image_url_hint' => 'L’adresse générique des images partenaire',
        'status_section_title' => 'Statut',
        'block' => 'L\'épisode doit être masqué dans les catalogues publics',
        'block_hint' =>
            'The podcast show or hide status: toggling this on prevents the entire podcast from appearing in Apple Podcasts, Google Podcasts, and any third party apps that pull shows from these directories. (Not guaranteed)',
        'complete' => 'Le podcast n’aura plus de nouveaux épisodes.',
        'lock' => 'Empêcher la copie du podcast',
        'lock_hint' =>
            'Le but est d’indiquer aux autres plates-formes de podcast si elles sont autorisées à importer ce flux. La valeur « oui » signifie que toute tentative d’importation de ce flux dans une nouvelle plateforme doit être rejetée.',
        'submit_create' => 'Créer le podcast',
        'submit_edit' => 'Enregistrer le podcast',
    ],
    'category_options' => [
        'uncategorized' => 'non catégorisé',
        'arts' => 'Arts',
        'business' => 'Entreprise',
        'comedy' => 'Comédie',
        'education' => 'Éducation',
        'fiction' => 'Fiction',
        'government' => 'Gouvernement',
        'health_and_fitness' => 'Santé et remise en forme',
        'history' => 'Histoire',
        'kids_and_family' => 'Enfants et famille',
        'leisure' => 'Loisirs',
        'music' => 'Musique',
        'news' => 'Actualités',
        'religion_and_spirituality' => 'Religion et spiritualité',
        'science' => 'Science',
        'society_and_culture' => 'Société et Culture',
        'sports' => 'Sports',
        'technology' => 'Technologie',
        'true_crime' => 'Documentaire criminel',
        'tv_and_film' => 'Télévision et films',
        'books' => 'Livres',
        'design' => 'Design',
        'fashion_and_beauty' => 'Mode et beauté',
        'food' => 'Nourriture',
        'performing_arts' => 'Arts du spectacle',
        'visual_arts' => 'Arts visuels',
        'careers' => 'Carrières',
        'entrepreneurship' => 'Entrepreneuriat',
        'investing' => 'Investissement',
        'management' => 'Gestion',
        'marketing' => 'Marketing',
        'non_profit' => 'À but non lucratif',
        'comedy_interviews' => 'Entretiens comiques',
        'improv' => 'Improvisation',
        'stand_up' => 'Stand up',
        'courses' => 'Cours',
        'how_to' => 'Tutoriels',
        'language_learning' => 'Apprentissage des langues',
        'self_improvement' => 'Développement personnel',
        'comedy_fiction' => 'Comédie Fiction',
        'drama' => 'Drame',
        'science_fiction' => 'Science-fiction',
        'alternative_health' => 'Santé alternative',
        'fitness' => 'Remise en forme',
        'medicine' => 'Médecine',
        'mental_health' => 'Santé mentale',
        'nutrition' => 'Nutrition',
        'sexuality' => 'Sexualité',
        'education_for_kids' => 'Éducation pour les enfants',
        'parenting' => 'Parentalité',
        'pets_and_animals' => 'Animaux de compagnie et animaux',
        'stories_for_kids' => 'Histoires pour enfants',
        'animation_and_manga' => 'Animation et Manga',
        'automotive' => 'Automobile',
        'aviation' => 'Aviation',
        'crafts' => 'Artisanat',
        'games' => 'Jeux',
        'hobbies' => 'Loisirs',
        'home_and_garden' => 'Maison et jardin',
        'video_games' => 'Jeux vidéo',
        'music_commentary' => 'Commentaire musical',
        'music_history' => 'Histoire de la musique',
        'music_interviews' => 'Entretiens musicaux',
        'business_news' => 'Actualités économiques',
        'daily_news' => 'Actualités quotidiennes',
        'entertainment_news' => 'Actualités du divertissement',
        'news_commentary' => 'Commentaire d’actualité',
        'politics' => 'Politique',
        'sports_news' => 'Actualités sportives',
        'tech_news' => 'Actualités techniques',
        'buddhism' => 'Bouddhisme',
        'christianity' => 'Christianisme',
        'hinduism' => 'Hindouisme',
        'islam' => 'Islam',
        'judaism' => 'Judaïsme',
        'religion' => 'Religion',
        'spirituality' => 'Spiritualité',
        'astronomy' => 'Astronomie',
        'chemistry' => 'Chimie',
        'earth_sciences' => 'Sciences de la Terre',
        'life_sciences' => 'Sciences de la vie',
        'mathematics' => 'Mathématiques',
        'natural_sciences' => 'Sciences naturelles',
        'nature' => 'Nature',
        'physics' => 'Physique',
        'social_sciences' => 'Sciences sociales',
        'documentary' => 'Documentaire',
        'personal_journals' => 'Journaux personnels',
        'philosophy' => 'Philosophie',
        'places_and_travel' => 'Lieux et voyages',
        'relationships' => 'Relations',
        'baseball' => 'Baseball',
        'basketball' => 'Basket-ball',
        'cricket' => 'Cricket',
        'fantasy_sports' => 'Sports fantastiques',
        'football' => 'Football',
        'golf' => 'Golf',
        'hockey' => 'Hockey',
        'rugby' => 'Rugby',
        'running' => 'Course',
        'soccer' => 'Football',
        'swimming' => 'Natation',
        'tennis' => 'Tennis',
        'volleyball' => 'Volley-ball',
        'wilderness' => 'Naturalité',
        'wrestling' => 'Lutte',
        'after_shows' => 'Après spectacle',
        'film_history' => 'Histoire du cinéma',
        'film_interviews' => 'Entretiens de films',
        'film_reviews' => 'Critiques de films',
        'tv_reviews' => 'Critiques TV',
    ],
    'publish_form' => [
        'back_to_podcast_dashboard' => 'Back to podcast dashboard',
        'post' => 'Your announcement post',
        'post_hint' =>
            "Write a message to announce the publication of your podcast. The message will be featured in your podcast's homepage.",
        'message_placeholder' => 'Write your message…',
        'submit' => 'Publish',
        'publication_date' => 'Publication date',
        'publication_method' => [
            'now' => 'Now',
            'schedule' => 'Schedule',
        ],
        'scheduled_publication_date' => 'Scheduled publication date',
        'scheduled_publication_date_hint' =>
            'You can schedule the podcast release by setting a future publication date. This field must be formatted as YYYY-MM-DD HH:mm',
        'submit_edit' => 'Edit publication',
        'cancel_publication' => 'Cancel publication',
        'message_warning' => 'You did not write a message for your announcement post!',
        'message_warning_hint' => 'Having a message increases social engagement, resulting in a better visibility for your podcast.',
        'message_warning_submit' => 'Publish anyway',
    ],
    'publication_status_banner' => [
        'draft_mode' => 'draft mode',
        'not_published' => 'This podcast is not yet published.',
        'scheduled' => 'This podcast is scheduled for publication on {publication_date}.',
    ],
    'delete_form' => [
        'disclaimer' =>
            "Deleting the podcast will delete all episodes, media files, posts and analytics associated with it. This action is irreversible, you will not be able to retrieve them afterwards.",
        'understand' => 'I understand, I want the podcast to be permanently deleted',
        'submit' => 'Delete',
    ],
    'by' => 'Par {publisher}',
    'season' => 'Saison {seasonNumber}',
    'list_of_episodes_year' => 'Épisodes de {year} ({episodeCount})',
    'list_of_episodes_season' =>
        'Épisodes de la saison {seasonNumber} ({episodeCount})',
    'no_episode' => 'Aucun épisode trouvé !',
    'follow' => 'Suivre',
    'followers' => '{numberOfFollowers, plural,
        one {# follower}
        other {# followers}
    }',
    'posts' => '{numberOfPosts, plural,
        one {# post}
        other {# posts}
    }',
    'activity' => 'Activité',
    'episodes' => 'Épisodes',
    'sponsor' => 'Soutenez-nous',
    'funding_links' => 'Liens de financement pour {podcastTitle}',
    'find_on' => 'Trouvez {podcastTitle} sur',
    'listen_on' => 'Écoutez sur',
];
