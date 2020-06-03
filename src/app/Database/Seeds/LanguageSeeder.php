<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LanguageSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            array('code'=>'ab','name'=>'Abkhaz','native_name'=>'аҧсуа'),
            array('code'=>'aa','name'=>'Afar','native_name'=>'Afaraf'),
            array('code'=>'af','name'=>'Afrikaans','native_name'=>'Afrikaans'),
            array('code'=>'ak','name'=>'Akan','native_name'=>'Akan'),
            array('code'=>'sq','name'=>'Albanian','native_name'=>'Shqip'),
            array('code'=>'am','name'=>'Amharic','native_name'=>'አማርኛ'),
            array('code'=>'ar','name'=>'Arabic','native_name'=>'العربية'),
            array('code'=>'an','name'=>'Aragonese','native_name'=>'Aragonés'),
            array('code'=>'hy','name'=>'Armenian','native_name'=>'Հայերեն'),
            array('code'=>'as','name'=>'Assamese','native_name'=>'অসমীয়া'),
            array('code'=>'av','name'=>'Avaric','native_name'=>'авар мацӀ, магӀарул мацӀ'),
            array('code'=>'ae','name'=>'Avestan','native_name'=>'avesta'),
            array('code'=>'ay','name'=>'Aymara','native_name'=>'aymar aru'),
            array('code'=>'az','name'=>'Azerbaijani','native_name'=>'azərbaycan dili'),
            array('code'=>'bm','name'=>'Bambara','native_name'=>'bamanankan'),
            array('code'=>'ba','name'=>'Bashkir','native_name'=>'башҡорт теле'),
            array('code'=>'eu','name'=>'Basque','native_name'=>'euskara, euskera'),
            array('code'=>'be','name'=>'Belarusian','native_name'=>'Беларуская'),
            array('code'=>'bn','name'=>'Bengali','native_name'=>'বাংলা'),
            array('code'=>'bh','name'=>'Bihari','native_name'=>'भोजपुरी'),
            array('code'=>'bi','name'=>'Bislama','native_name'=>'Bislama'),
            array('code'=>'bs','name'=>'Bosnian','native_name'=>'bosanski jezik'),
            array('code'=>'br','name'=>'Breton','native_name'=>'brezhoneg'),
            array('code'=>'bg','name'=>'Bulgarian','native_name'=>'български език'),
            array('code'=>'my','name'=>'Burmese','native_name'=>'ဗမာစာ'),
            array('code'=>'ca','name'=>'Catalan; Valencian','native_name'=>'Català'),
            array('code'=>'ch','name'=>'Chamorro','native_name'=>'Chamoru'),
            array('code'=>'ce','name'=>'Chechen','native_name'=>'нохчийн мотт'),
            array('code'=>'ny','name'=>'Chichewa; Chewa; Nyanja','native_name'=>'chiCheŵa, chinyanja'),
            array('code'=>'zh','name'=>'Chinese','native_name'=>'中文 (Zhōngwén), 汉语, 漢語'),
            array('code'=>'cv','name'=>'Chuvash','native_name'=>'чӑваш чӗлхи'),
            array('code'=>'kw','name'=>'Cornish','native_name'=>'Kernewek'),
            array('code'=>'co','name'=>'Corsican','native_name'=>'corsu, lingua corsa'),
            array('code'=>'cr','name'=>'Cree','native_name'=>'ᓀᐦᐃᔭᐍᐏᐣ'),
            array('code'=>'hr','name'=>'Croatian','native_name'=>'hrvatski'),
            array('code'=>'cs','name'=>'Czech','native_name'=>'česky, čeština'),
            array('code'=>'da','name'=>'Danish','native_name'=>'dansk'),
            array('code'=>'dv','name'=>'Divehi; Dhivehi; Maldivian;','native_name'=>'ދިވެހި'),
            array('code'=>'nl','name'=>'Dutch','native_name'=>'Nederlands, Vlaams'),
            array('code'=>'en','name'=>'English','native_name'=>'English'),
            array('code'=>'eo','name'=>'Esperanto','native_name'=>'Esperanto'),
            array('code'=>'et','name'=>'Estonian','native_name'=>'eesti, eesti keel'),
            array('code'=>'ee','name'=>'Ewe','native_name'=>'Eʋegbe'),
            array('code'=>'fo','name'=>'Faroese','native_name'=>'føroyskt'),
            array('code'=>'fj','name'=>'Fijian','native_name'=>'vosa Vakaviti'),
            array('code'=>'fi','name'=>'Finnish','native_name'=>'suomi, suomen kieli'),
            array('code'=>'fr','name'=>'French','native_name'=>'français, langue française'),
            array('code'=>'ff','name'=>'Fula; Fulah; Pulaar; Pular','native_name'=>'Fulfulde, Pulaar, Pular'),
            array('code'=>'gl','name'=>'Galician','native_name'=>'Galego'),
            array('code'=>'ka','name'=>'Georgian','native_name'=>'ქართული'),
            array('code'=>'de','name'=>'German','native_name'=>'Deutsch'),
            array('code'=>'el','name'=>'Greek, Modern','native_name'=>'Ελληνικά'),
            array('code'=>'gn','name'=>'Guaraní','native_name'=>'Avañeẽ'),
            array('code'=>'gu','name'=>'Gujarati','native_name'=>'ગુજરાતી'),
            array('code'=>'ht','name'=>'Haitian; Haitian Creole','native_name'=>'Kreyòl ayisyen'),
            array('code'=>'ha','name'=>'Hausa','native_name'=>'Hausa, هَوُسَ'),
            array('code'=>'he','name'=>'Hebrew (modern)','native_name'=>'עברית'),
            array('code'=>'hz','name'=>'Herero','native_name'=>'Otjiherero'),
            array('code'=>'hi','name'=>'Hindi','native_name'=>'हिन्दी, हिंदी'),
            array('code'=>'ho','name'=>'Hiri Motu','native_name'=>'Hiri Motu'),
            array('code'=>'hu','name'=>'Hungarian','native_name'=>'Magyar'),
            array('code'=>'ia','name'=>'Interlingua','native_name'=>'Interlingua'),
            array('code'=>'id','name'=>'Indonesian','native_name'=>'Bahasa Indonesia'),
            array('code'=>'ie','name'=>'Interlingue','native_name'=>'Originally called Occidental; then Interlingue after WWII'),
            array('code'=>'ga','name'=>'Irish','native_name'=>'Gaeilge'),
            array('code'=>'ig','name'=>'Igbo','native_name'=>'Asụsụ Igbo'),
            array('code'=>'ik','name'=>'Inupiaq','native_name'=>'Iñupiaq, Iñupiatun'),
            array('code'=>'io','name'=>'Ido','native_name'=>'Ido'),
            array('code'=>'is','name'=>'Icelandic','native_name'=>'Íslenska'),
            array('code'=>'it','name'=>'Italian','native_name'=>'Italiano'),
            array('code'=>'iu','name'=>'Inuktitut','native_name'=>'ᐃᓄᒃᑎᑐᑦ'),
            array('code'=>'ja','name'=>'Japanese','native_name'=>'日本語 (にほんご／にっぽんご)'),
            array('code'=>'jv','name'=>'Javanese','native_name'=>'basa Jawa'),
            array('code'=>'kl','name'=>'Kalaallisut, Greenlandic','native_name'=>'kalaallisut, kalaallit oqaasii'),
            array('code'=>'kn','name'=>'Kannada','native_name'=>'ಕನ್ನಡ'),
            array('code'=>'kr','name'=>'Kanuri','native_name'=>'Kanuri'),
            array('code'=>'ks','name'=>'Kashmiri','native_name'=>'कश्मीरी, كشميري‎'),
            array('code'=>'kk','name'=>'Kazakh','native_name'=>'Қазақ тілі'),
            array('code'=>'km','name'=>'Khmer','native_name'=>'ភាសាខ្មែរ'),
            array('code'=>'ki','name'=>'Kikuyu, Gikuyu','native_name'=>'Gĩkũyũ'),
            array('code'=>'rw','name'=>'Kinyarwanda','native_name'=>'Ikinyarwanda'),
            array('code'=>'ky','name'=>'Kirghiz, Kyrgyz','native_name'=>'кыргыз тили'),
            array('code'=>'kv','name'=>'Komi','native_name'=>'коми кыв'),
            array('code'=>'kg','name'=>'Kongo','native_name'=>'KiKongo'),
            array('code'=>'ko','name'=>'Korean','native_name'=>'한국어 (韓國語), 조선말 (朝鮮語)'),
            array('code'=>'ku','name'=>'Kurdish','native_name'=>'Kurdî, كوردی‎'),
            array('code'=>'kj','name'=>'Kwanyama, Kuanyama','native_name'=>'Kuanyama'),
            array('code'=>'la','name'=>'Latin','native_name'=>'latine, lingua latina'),
            array('code'=>'lb','name'=>'Luxembourgish, Letzeburgesch','native_name'=>'Lëtzebuergesch'),
            array('code'=>'lg','name'=>'Luganda','native_name'=>'Luganda'),
            array('code'=>'li','name'=>'Limburgish, Limburgan, Limburger','native_name'=>'Limburgs'),
            array('code'=>'ln','name'=>'Lingala','native_name'=>'Lingála'),
            array('code'=>'lo','name'=>'Lao','native_name'=>'ພາສາລາວ'),
            array('code'=>'lt','name'=>'Lithuanian','native_name'=>'lietuvių kalba'),
            array('code'=>'lu','name'=>'Luba-Katanga','native_name'=>''),
            array('code'=>'lv','name'=>'Latvian','native_name'=>'latviešu valoda'),
            array('code'=>'gv','name'=>'Manx','native_name'=>'Gaelg, Gailck'),
            array('code'=>'mk','name'=>'Macedonian','native_name'=>'македонски јазик'),
            array('code'=>'mg','name'=>'Malagasy','native_name'=>'Malagasy fiteny'),
            array('code'=>'ms','name'=>'Malay','native_name'=>'bahasa Melayu, بهاس ملايو‎'),
            array('code'=>'ml','name'=>'Malayalam','native_name'=>'മലയാളം'),
            array('code'=>'mt','name'=>'Maltese','native_name'=>'Malti'),
            array('code'=>'mi','name'=>'Māori','native_name'=>'te reo Māori'),
            array('code'=>'mr','name'=>'Marathi (Marāṭhī)','native_name'=>'मराठी'),
            array('code'=>'mh','name'=>'Marshallese','native_name'=>'Kajin M̧ajeļ'),
            array('code'=>'mn','name'=>'Mongolian','native_name'=>'монгол'),
            array('code'=>'na','name'=>'Nauru','native_name'=>'Ekakairũ Naoero'),
            array('code'=>'nv','name'=>'Navajo, Navaho','native_name'=>'Diné bizaad, Dinékʼehǰí'),
            array('code'=>'nb','name'=>'Norwegian Bokmål','native_name'=>'Norsk bokmål'),
            array('code'=>'nd','name'=>'North Ndebele','native_name'=>'isiNdebele'),
            array('code'=>'ne','name'=>'Nepali','native_name'=>'नेपाली'),
            array('code'=>'ng','name'=>'Ndonga','native_name'=>'Owambo'),
            array('code'=>'nn','name'=>'Norwegian Nynorsk','native_name'=>'Norsk nynorsk'),
            array('code'=>'no','name'=>'Norwegian','native_name'=>'Norsk'),
            array('code'=>'ii','name'=>'Nuosu','native_name'=>'ꆈꌠ꒿ Nuosuhxop'),
            array('code'=>'nr','name'=>'South Ndebele','native_name'=>'isiNdebele'),
            array('code'=>'oc','name'=>'Occitan','native_name'=>'Occitan'),
            array('code'=>'oj','name'=>'Ojibwe, Ojibwa','native_name'=>'ᐊᓂᔑᓈᐯᒧᐎᓐ'),
            array('code'=>'cu','name'=>'Old Church Slavonic, Church Slavic, Church Slavonic, Old Bulgarian, Old Slavonic','native_name'=>'ѩзыкъ словѣньскъ'),
            array('code'=>'om','name'=>'Oromo','native_name'=>'Afaan Oromoo'),
            array('code'=>'or','name'=>'Oriya','native_name'=>'ଓଡ଼ିଆ'),
            array('code'=>'os','name'=>'Ossetian, Ossetic','native_name'=>'ирон æвзаг'),
            array('code'=>'pa','name'=>'Panjabi, Punjabi','native_name'=>'ਪੰਜਾਬੀ, پنجابی‎'),
            array('code'=>'pi','name'=>'Pāli','native_name'=>'पाऴि'),
            array('code'=>'fa','name'=>'Persian','native_name'=>'فارسی'),
            array('code'=>'pl','name'=>'Polish','native_name'=>'polski'),
            array('code'=>'ps','name'=>'Pashto, Pushto','native_name'=>'پښتو'),
            array('code'=>'pt','name'=>'Portuguese','native_name'=>'Português'),
            array('code'=>'qu','name'=>'Quechua','native_name'=>'Runa Simi, Kichwa'),
            array('code'=>'rm','name'=>'Romansh','native_name'=>'rumantsch grischun'),
            array('code'=>'rn','name'=>'Kirundi','native_name'=>'kiRundi'),
            array('code'=>'ro','name'=>'Romanian, Moldavian, Moldovan','native_name'=>'română'),
            array('code'=>'ru','name'=>'Russian','native_name'=>'русский язык'),
            array('code'=>'sa','name'=>'Sanskrit (Saṁskṛta)','native_name'=>'संस्कृतम्'),
            array('code'=>'sc','name'=>'Sardinian','native_name'=>'sardu'),
            array('code'=>'sd','name'=>'Sindhi','native_name'=>'सिन्धी, سنڌي، سندھی‎'),
            array('code'=>'se','name'=>'Northern Sami','native_name'=>'Davvisámegiella'),
            array('code'=>'sm','name'=>'Samoan','native_name'=>'gagana faa Samoa'),
            array('code'=>'sg','name'=>'Sango','native_name'=>'yângâ tî sängö'),
            array('code'=>'sr','name'=>'Serbian','native_name'=>'српски језик'),
            array('code'=>'gd','name'=>'Scottish Gaelic; Gaelic','native_name'=>'Gàidhlig'),
            array('code'=>'sn','name'=>'Shona','native_name'=>'chiShona'),
            array('code'=>'si','name'=>'Sinhala, Sinhalese','native_name'=>'සිංහල'),
            array('code'=>'sk','name'=>'Slovak','native_name'=>'slovenčina'),
            array('code'=>'sl','name'=>'Slovene','native_name'=>'slovenščina'),
            array('code'=>'so','name'=>'Somali','native_name'=>'Soomaaliga, af Soomaali'),
            array('code'=>'st','name'=>'Southern Sotho','native_name'=>'Sesotho'),
            array('code'=>'es','name'=>'Spanish; Castilian','native_name'=>'español, castellano'),
            array('code'=>'su','name'=>'Sundanese','native_name'=>'Basa Sunda'),
            array('code'=>'sw','name'=>'Swahili','native_name'=>'Kiswahili'),
            array('code'=>'ss','name'=>'Swati','native_name'=>'SiSwati'),
            array('code'=>'sv','name'=>'Swedish','native_name'=>'svenska'),
            array('code'=>'ta','name'=>'Tamil','native_name'=>'தமிழ்'),
            array('code'=>'te','name'=>'Telugu','native_name'=>'తెలుగు'),
            array('code'=>'tg','name'=>'Tajik','native_name'=>'тоҷикӣ, toğikī, تاجیکی‎'),
            array('code'=>'th','name'=>'Thai','native_name'=>'ไทย'),
            array('code'=>'ti','name'=>'Tigrinya','native_name'=>'ትግርኛ'),
            array('code'=>'bo','name'=>'Tibetan Standard, Tibetan, Central','native_name'=>'བོད་ཡིག'),
            array('code'=>'tk','name'=>'Turkmen','native_name'=>'Türkmen, Түркмен'),
            array('code'=>'tl','name'=>'Tagalog','native_name'=>'Wikang Tagalog, ᜏᜒᜃᜅ᜔ ᜆᜄᜎᜓᜄ᜔'),
            array('code'=>'tn','name'=>'Tswana','native_name'=>'Setswana'),
            array('code'=>'to','name'=>'Tonga (Tonga Islands)','native_name'=>'faka Tonga'),
            array('code'=>'tr','name'=>'Turkish','native_name'=>'Türkçe'),
            array('code'=>'ts','name'=>'Tsonga','native_name'=>'Xitsonga'),
            array('code'=>'tt','name'=>'Tatar','native_name'=>'татарча, tatarça, تاتارچا‎'),
            array('code'=>'tw','name'=>'Twi','native_name'=>'Twi'),
            array('code'=>'ty','name'=>'Tahitian','native_name'=>'Reo Tahiti'),
            array('code'=>'ug','name'=>'Uighur, Uyghur','native_name'=>'Uyƣurqə, ئۇيغۇرچە‎'),
            array('code'=>'uk','name'=>'Ukrainian','native_name'=>'українська'),
            array('code'=>'ur','name'=>'Urdu','native_name'=>'اردو'),
            array('code'=>'uz','name'=>'Uzbek','native_name'=>'zbek, Ўзбек, أۇزبېك‎'),
            array('code'=>'ve','name'=>'Venda','native_name'=>'Tshivenḓa'),
            array('code'=>'vi','name'=>'Vietnamese','native_name'=>'Tiếng Việt'),
            array('code'=>'vo','name'=>'Volapük','native_name'=>'Volapük'),
            array('code'=>'wa','name'=>'Walloon','native_name'=>'Walon'),
            array('code'=>'cy','name'=>'Welsh','native_name'=>'Cymraeg'),
            array('code'=>'wo','name'=>'Wolof','native_name'=>'Wollof'),
            array('code'=>'fy','name'=>'Western Frisian','native_name'=>'Frysk'),
            array('code'=>'xh','name'=>'Xhosa','native_name'=>'isiXhosa'),
            array('code'=>'yi','name'=>'Yiddish','native_name'=>'ייִדיש'),
            array('code'=>'yo','name'=>'Yoruba','native_name'=>'Yorùbá'),
            array('code'=>'za','name'=>'Zhuang, Chuang','native_name'=>'Saɯ cueŋƅ, Saw cuengh'),
        );

        $this->db->table('languages')->insertBatch($data);
    }
}
