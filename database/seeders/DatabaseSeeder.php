<?php

namespace Database\Seeders;

use App\Models\Aqours;
use App\Models\Chara;
use App\Models\Image;
use App\Models\Seiyuu;
use App\Models\Song;
use App\Models\Subunit;
use App\Models\Unit;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Unit::create([
            'name' => 'Muse',
            'slug' => 'muse',
        ]);
        
        Unit::create([
            'name' => 'Aqours',
            'slug' => 'aqours',
        ]);
        
        Unit::create([
            'name' => 'Nijigasaki High School Idol Club',
            // 'name' => 'Nijigasaki',
            'slug' => 'nijigasaki',
        ]);

        Subunit::create([
            'name' => 'Printemps',
            'slug' => 'printemps'
        ]);

        Subunit::create([
            'name' => 'BiBi',
            'slug' => 'bibi'
        ]);

        Subunit::create([
            'name' => 'Lily White',
            'slug' => 'lily-white'
        ]);

        Subunit::create([
            'name' => 'CYaRon!',
            'slug' => 'cyaron!'
        ]);

        Subunit::create([
            'name' => 'Guilty Kiss',
            'slug' => 'guilty-kiss'
        ]);

        Subunit::create([
            'name' => 'AZALEA',
            'slug' => 'azalea'
        ]);

        Subunit::create([
            'name' => 'DiverDiva',
            'slug' => 'diverdiva'
        ]);

        Subunit::create([
            'name' => 'A・ZU・NA',
            'slug' => 'azuna'
        ]);

        Subunit::create([
            'name' => 'QU4RTZ',
            'slug' => 'qu4rtz'
        ]);

        Subunit::create([
            'name' => 'R3BIRTH',
            'slug' => 'r3birth'
        ]);

        Subunit::create([
            'name' => 'NONE',
            'slug' => 'none'
        ]);

        // \App\Models\User::factory(10)->create();

        // Aqours Section
        Chara::create([
            'name' => 'Ruby Kurosawa',
            'kanji_name' => '黒澤 ルビィ',
            'slug' => 'ruby-kurosawa',
            'seiyuu_id' => '1',
            'unit_id' => '2',
            'subunit_id' => '4',
            'grade' => '1st Year',
            'birthday' => '21 September',
            'height' => '154',
            'divcolor' => 'text-above-img-ruby',
            'desc' => "Murid kelas 10 yang hampir selalu ada dengan Hanamaru, teman baiknya. Dia pengecut dan sangat cenderung menangis, tapi dia masih mempunyai inti yang teguh, ditempa oleh perannya sebagai anak dari keluarga yang kaya dan ternama. Dia selalu memandang tinggi idola dan menjahit adalah satu-satunya hal yang dia paling jago.",
        ]);
        
        Chara::create([
            'name' => 'Yoshiko Tsushima',
            'kanji_name' => '津島 善子',
            'slug' => 'yoshiko-tsushima',
            'seiyuu_id' => '2',
            'unit_id' => '2',
            'subunit_id' => '5',
            'grade' => '1st Year',
            'birthday' => '13 July',
            'height' => '156',
            'divcolor' => 'text-above-img-yoshiko',
            'desc' => "Siswa SMA tahun 1 yang suka tampil 'little devil' dan suka pangil dirinya 'the fallen angel Yohane.' Lahir di sisi kota Kota Numazu, dia cerah, percaya diri, pintar, dan bijaksana. Dia juga terkutuk dengan nasib buruk, mengalami segala macam masalah ke mana pun dia pergi.",
        ]);
        
        Chara::create([
            'name' => 'Hanamaru Kunikida',
            'kanji_name' => '国木田 花丸',
            'slug' => 'hanamaru-kunikida',
            'seiyuu_id' => '3',
            'unit_id' => '2',
            'subunit_id' => '6',
            'grade' => '1st Year',
            'birthday' => '4 March',
            'height' => '152',
            'divcolor' => 'text-above-img-maru',
            'desc' => "A first-year student, the daughter of a family who's run a nearby temple for generations. An fan of reading, she has a deep fondness for Japanese literature. She's also a gifted singer, earning her a spot in a choir and gentle and caring to those around her.",
        ]);

        Chara::create([
            'name' => 'Chika Takami',
            'kanji_name' => '高海 千歌',
            'slug' => 'chika-takami',
            'seiyuu_id' => '4',
            'unit_id' => '2',
            'subunit_id' => '4',
            'grade' => '2nd Year',
            'birthday' => '1 August',
            'height' => '157',
            'divcolor' => 'text-above-img-chika',
            'desc' => "The second-year student at Uranohoshi Girls' High School who launched Aqours. The youngest of three sisters, she comes from a ryokan-owning family and is proud of their open-air, ocean-view bath. She is sociable and rarely gives in easily. Her positive, can-do attitude gradually begins to affect everyone around her.",
        ]);

        Chara::create([
            'name' => 'Riko Sakurauchi',
            'kanji_name' => '桜内 梨子',
            'slug' => 'riko-sakurauchi',
            'seiyuu_id' => '5',
            'unit_id' => '2',
            'subunit_id' => '5',
            'grade' => '2nd Year',
            'birthday' => '19 September',
            'height' => '160',
            'divcolor' => 'text-above-img-riko',
            'desc' => "Murid kelas 11 dari Akihabara yang berpindah ke kelas Chika. Gadis normal dengan watak pendiam yang lebih memilih tinggal di dalam rumah daripada keluar. Meskipun dia memberi kesan yang dewasa dan tenang, sesungguhnya dia cukup lalai, sering loncat ke kesimpulan dan membuat kesalahan.",
        ]);
        
        Chara::create([
            'name' => 'You Watanabe',
            'kanji_name' => '渡辺 曜',
            'slug' => 'you-watanabe',
            'seiyuu_id' => '6',
            'unit_id' => '2',
            'subunit_id' => '4',
            'grade' => '2nd Year',
            'birthday' => '19 September',
            'height' => '160',
            'divcolor' => 'text-above-img-you',
            'desc' => "A second-year classmate of Chika's. Good enough at the high dive to qualify for the national team. She tends to take action without thinking matters over first. Her father captains a ferry, and she'd like to have his job someday.",
        ]);
        
        Chara::create([
            'name' => 'Kanan Matsuura',
            'kanji_name' => '松浦 果南',
            'slug' => 'kanan-matsuura',
            'seiyuu_id' => '7',
            'unit_id' => '2',
            'subunit_id' => '6',
            'grade' => '3rd Year',
            'birthday' => '10 February',
            'height' => '162',
            'divcolor' => 'text-above-img-kanan',
            'desc' => "A third-year student who is breezily mature and she rarely sweats the details and usually maintains a calm, cool demeanor.",
        ]);
        
        Chara::create([
            'name' => 'Dia Kurosawa',
            'kanji_name' => '黒澤 ダイヤ',
            'slug' => 'dia-kurosawa',
            'seiyuu_id' => '8',
            'unit_id' => '2',
            'subunit_id' => '6',
            'grade' => '3rd Year',
            'birthday' => '1 January',
            'height' => '162',
            'divcolor' => 'text-above-img-dia',
            'desc' => "A third-year student who leads the student council. She is from an old fishing family whose name is well-known in the area. Prideful and perfectionistic in her ways, she can't abide it when things are done sloppily or incorrectly.",
        ]);
        
        Chara::create([
            'name' => 'Mari Ohara',
            'kanji_name' => '小原 鞠莉',
            'slug' => 'mari-ohara',
            'seiyuu_id' => '9',
            'unit_id' => '2',
            'subunit_id' => '5',
            'grade' => '3rd Year',
            'birthday' => '13 Juny',
            'height' => '163',
            'divcolor' => 'text-above-img-mari',
            'desc' => "A third-year student. Her mother is Japanese, while her father is Italian-American and manages a hotel chain. Cheerful in personality, she often prefers to work by herself. Mari always keeps her chin up when faced with hardship and ready to try her hand at anything.",
        ]);

        // Nijigasaki Section
        Chara::create([
            'name' => 'Rina Tennoji',
            'kanji_name' => '天王寺 璃奈',
            'slug' => 'rina-tennoji',
            'seiyuu_id' => '10',
            'unit_id' => '3',
            'subunit_id' => '9',
            'grade' => '1st Year',
            'birthday' => '13 November',
            'height' => '149',
            'divcolor' => 'text-above-img-rina',
            'desc' => "A first-year at Nijigasaki High School who went to its attached middle school. She has a lot of trouble expressing her emotions through facial expressions, so she draws a face on white paper -- the 'Rina-chan Board' -- and uses that to communicate.",
        ]);
        
        Chara::create([
            'name' => 'Shizuku Osaka',
            'kanji_name' => '桜坂 しずく',
            'slug' => 'shizuku-osaka',
            'seiyuu_id' => '11',
            'unit_id' => '3',
            'subunit_id' => '8',
            'grade' => '1st Year',
            'birthday' => '3 April',
            'height' => '157',
            'divcolor' => 'text-above-img-shizuku',
            'desc' => "A recent addition to Nijigasaki's High School and first-year. A straight-laced star student, Shizuku is part of the theater club. She's athletic, but poor at ball sports. She wants to grow up to be an actress, and she seeks to use her school idol experience to that end.",
        ]);
        
        Chara::create([
            'name' => 'Kasumi Nakasu',
            'kanji_name' => '中須 かすみ',
            'slug' => 'kasumi-nakasu',
            'seiyuu_id' => '12',
            'unit_id' => '3',
            'subunit_id' => '9',
            'grade' => '1st Year',
            'birthday' => '23 Januari',
            'height' => '155',
            'divcolor' => 'text-above-img-kasumi',
            'desc' => "A first-year at Nijigasaki High School. She loves cute things and admires school idols far more than the average person. She hates losing, and gets angry when people call her by her nickname, Kasukasu. She'll do all sorts of mischief to overcome her rivals, but often ends up doing what everyone else does.",
        ]);
        
        Chara::create([
            'name' => 'Shioriko Mifune',
            'kanji_name' => '三船 栞子',
            'slug' => 'shioriko-mifune',
            'seiyuu_id' => '13',
            'unit_id' => '3',
            'subunit_id' => '10',
            'grade' => '1st Year',
            'birthday' => '5 October',
            'height' => '160',
            'divcolor' => 'text-above-img-shioriko',
            'desc' => "A first-year at Nijigasaki High School. She was elected as the student council president for one year in hopes she will lead everyone to their best life. Even with her earnest, inflexible stiffness, her actions are “for everyone”, such as volunteering on holidays.",
        ]);
        
        Chara::create([
            'name' => 'Ayumu Uehara',
            'kanji_name' => '上原 歩夢',
            'slug' => 'ayumu-uehara',
            'seiyuu_id' => '14',
            'unit_id' => '3',
            'subunit_id' => '8',
            'grade' => '2nd Year',
            'birthday' => '1 March',
            'height' => '159',
            'divcolor' => 'text-above-img-ayumu',
            'desc' => "A second-year student at Nijigasaki High School, she's a hard worker who takes anything and everything on diligently. She started being a school idol at the suggestion of her childhood friend. She's a highly caring friend who always supports her beloved pal in her endeavors.",
        ]);
        
        Chara::create([
            'name' => 'Setsuna Yuki',
            'kanji_name' => '優木 せつ菜',
            'slug' => 'setsuna-yuki',
            'seiyuu_id' => '15',
            'unit_id' => '3',
            'subunit_id' => '8',
            'grade' => '2nd Year',
            'birthday' => '8 August',
            'height' => '154',
            'divcolor' => 'text-above-img-setsuna',
            'desc' => "A second-year at Nijigasaki and a rising star of the school idol world. Setsuna's energetic smile and great performances draw many eyes. She loves anime and manga, and if you get her talking about either, she won't stop. Since she's so busy with her idol work, she has urban legend-style rumors surrounding her, stating that no one has ever seen her on campus.",
        ]);
        
        Chara::create([
            'name' => 'Ai Miyashita',
            'kanji_name' => '優木 せつ菜',
            'slug' => 'ai-miyashita',
            'seiyuu_id' => '16',
            'unit_id' => '3',
            'subunit_id' => '7',
            'grade' => '2nd Year',
            'birthday' => '30 May',
            'height' => '163',
            'divcolor' => 'text-above-img-ai',
            'desc' => "A second-year at Nijigasaki High School. Ai is easy to get along with and very caring, leading her to have plenty of friends. Her flashy appearance leads to many a misunderstanding, but she goes to great lengths for friends and family and loves her grandmother. Her favorite food is miso-pickled vegetables.",
        ]);
        
        Chara::create([
            'name' => 'Lanzhu Zhong ',
            'kanji_name' => 'ショウ・ランジュ',
            'slug' => 'lanzhu-zhong',
            'seiyuu_id' => '17',
            'unit_id' => '3',
            'subunit_id' => '10',
            'grade' => '2nd Year',
            'birthday' => '15 February',
            'height' => '165',
            'divcolor' => 'text-above-img-lanzhu',
            'desc' => "a 2nd-year student at Nijigasaki High School who is from Hong Kong. She had a very refined upbringing, and everything she does ends up absolutely perfect. She very much wants to be friends with everyone, but can't seem to manage it. She loves the girls in the Club. Her favorite thing to eat is meat. Lanzhu's name in Chinese: 鐘嵐珠",
        ]);
        
        Chara::create([
            'name' => 'Karin Asaka',
            'kanji_name' => '朝香 果林',
            'slug' => 'karin-asaka',
            'seiyuu_id' => '18',
            'unit_id' => '3',
            'subunit_id' => '7',
            'grade' => '3rd Year',
            'birthday' => '29 June',
            'height' => '167',
            'divcolor' => 'text-above-img-karin',
            'desc' => "A third-year at Nijigasaki High School. She has looks and proportions unlike any high school student and has been an amateur model before. Karin is surprisingly stubborn in contrast to her mature appearance. She hasn't taken much seriously until now, but ever since becoming a school idol on a whim, she's really gotten into it.",
        ]);
        
        Chara::create([
            'name' => 'Emma Verde',
            'kanji_name' => 'エマ・ヴェルデ',
            'slug' => 'emma-verde',
            'seiyuu_id' => '19',
            'unit_id' => '3',
            'subunit_id' => '9',
            'grade' => '3rd Year',
            'birthday' => '5 February',
            'height' => '166',
            'divcolor' => 'text-above-img-emma',
            'desc' => "Murid kelas 12 yang bekerja dengan aplikasi Love Live SIF. Emma berasal dari negara Swiss, dan bisa berbicara dalam bahasa Italia. Dia riang, dan suka berjalan dalam alam, terutama hutan dan gunung. Dia memiliki kambing peliharaan bernama Neve.",
        ]);
        
        Chara::create([
            'name' => 'Kanata Konoe',
            'kanji_name' => 'エマ・ヴェルデ',
            'slug' => 'kanata-konoe',
            'seiyuu_id' => '20',
            'unit_id' => '3',
            'subunit_id' => '9',
            'grade' => '3rd Year',
            'birthday' => '16 December',
            'height' => '158',
            'divcolor' => 'text-above-img-kanata',
            'desc' => "Murid kelas 12 yang bekerja dengan aplikasi Love Live SIF. Kanata menyukai tidur siang. Dia membara bantal dengan dia untuk membantunya dengan ini, tapi dia juga menyukai pangkuan teman-temannya, terutama punyanya Emma. Kanata juga kakak yang sangat bangga, dan berkembang dari pujian adiknya.",
        ]);
        
        Chara::create([
            'name' => 'Mia Taylor',
            'kanji_name' => 'ミア・テイラー',
            'slug' => 'mia-taylor',
            'seiyuu_id' => '21',
            'unit_id' => '3',
            'subunit_id' => '10',
            'grade' => '3rd Year',
            'birthday' => '6 December',
            'height' => '156',
            'divcolor' => 'text-above-img-mia',
            'desc' => "By the time she reached 14 years old, she had skipped many school years and was studying in university. She then enrolled at Nijigasaki High School as a 3rd-year student. Daughter of the world-renowned Taylor family of musicians, she once wanted to be a vocalist. Now, she's composed hit songs one after the other. She can get a bit cheeky at times. Hamburgers and baseball are two of her other obsessions.",
        ]);

        // Seiyuu Aqours
        Seiyuu::create([
            'name' => 'Ai Furihata',
            'kanji_name' => '降幡 愛',
            'nickname' => 'Furirin',
            'birthday' => '19 February 1994',
            'height' => '148',
        ]);
        
        Seiyuu::create([
            'name' => 'Aika Kobayashi',
            'kanji_name' => '小林 愛香',
            'nickname' => 'Aikyan',
            'birthday' => '23 October 1993',
            'height' => '152',
        ]);
        
        Seiyuu::create([
            'name' => 'Kanako Takatsuki',
            'kanji_name' => '高槻 かなこ',
            'nickname' => 'Kinchan',
            'birthday' => '25 September 1993',
            'height' => '164',
        ]);
        
        Seiyuu::create([
            'name' => 'Anju Inami',
            'kanji_name' => '伊波 杏樹',
            'nickname' => 'Anchan',
            'birthday' => '7 February 1996',
            'height' => '158',
        ]);
        
        Seiyuu::create([
            'name' => 'Aida Rikako',
            'kanji_name' => '逢田 梨香子',
            'nickname' => 'Rikyako',
            'birthday' => '8 August 1992',
            'height' => '152',
        ]);
        
        Seiyuu::create([
            'name' => 'Shuka Saitou',
            'kanji_name' => '斉藤 朱夏',
            'nickname' => 'Shukashuu',
            'birthday' => '16 August 1996',
            'height' => '152',
        ]);
        
        Seiyuu::create([
            'name' => 'Nanaka Suwa',
            'kanji_name' => '諏訪 ななか',
            'nickname' => 'Suwawa',
            'birthday' => '2 November 1994',
            'height' => '157',
        ]);
        
        Seiyuu::create([
            'name' => 'Arisa Komiya',
            'kanji_name' => '小宮 有紗',
            'nickname' => 'Arisha',
            'birthday' => '5 February 1994',
            'height' => '163',
        ]);
        
        Seiyuu::create([
            'name' => 'Aina Suzuki',
            'kanji_name' => '鈴木 愛奈',
            'nickname' => 'Ainya',
            'birthday' => '23 July 1995',
            'height' => '147',
        ]);

        // Seiyuu Niji
        Seiyuu::create([
            'name' => 'Chiemi Tanaka',
            'kanji_name' => '田中 ちえ美',
            'nickname' => 'Chiemin',
            'birthday' => '6 October 2017',
            'height' => '154',
        ]);
        
        Seiyuu::create([
            'name' => 'Kaori Maeda',
            'kanji_name' => '前田 佳織里',
            'nickname' => 'Kaorin',
            'birthday' => '25 April 1996',
            'height' => '146',
        ]);
        
        Seiyuu::create([
            'name' => 'Mayu Sagara',
            'kanji_name' => '相良 茉優',
            'nickname' => 'Mayuchi',
            'birthday' => '17 April 2017',
            'height' => '155',
        ]);
        
        Seiyuu::create([
            'name' => 'Moeka Koizumi',
            'kanji_name' => '小泉 萌香',
            'nickname' => 'Moeppi',
            'birthday' => '27 February 1996',
            'height' => '163',
        ]);
        
        Seiyuu::create([
            'name' => 'Aguri Oonishi',
            'kanji_name' => '大西 亜玖璃',
            'nickname' => 'Agupon',
            'birthday' => '2 May 1997',
            'height' => '160',
        ]);
        
        Seiyuu::create([
            'name' => 'Tomori Kusunoki',
            'kanji_name' => '楠木 ともり',
            'nickname' => 'Tomoriru',
            'birthday' => '22 December 1999',
            'height' => '154',
        ]);
        
        Seiyuu::create([
            'name' => 'Natsumi Murakami',
            'kanji_name' => '村上 奈津実',
            'nickname' => 'Nacchan',
            'birthday' => '7 September 1995',
            'height' => '152',
        ]);
        
        Seiyuu::create([
            'name' => 'Akina Homoto',
            'kanji_name' => '法元 明菜',
            'nickname' => 'Minmin',
            'birthday' => '5 Agu 1996',
            'height' => '153',
        ]);
        
        Seiyuu::create([
            'name' => 'Miyu Kubota',
            'kanji_name' => '久保田 未夢',
            'nickname' => 'Miyutan',
            'birthday' => '31 Janaury 1995',
            'height' => '157',
        ]);
        
        Seiyuu::create([
            'name' => 'Maria Sashide',
            'kanji_name' => '指出 毬亜',
            'nickname' => 'Chunrun',
            'birthday' => '20 September 1998',
            'height' => '163',
        ]);
        
        Seiyuu::create([
            'name' => 'Akari Kitou',
            'kanji_name' => '鬼頭 明里',
            'nickname' => 'Akarin',
            'birthday' => '16 October 1994',
            'height' => '153',
        ]);
        
        Seiyuu::create([
            'name' => 'Shu Uchida',
            'kanji_name' => '内田 秀',
            'nickname' => 'Shushu',
            'birthday' => '24 May 1996',
            'height' => '155',
        ]);

        Song::create([
            'name' => 'Aozora Jumping Heart',
            'written_by' => 'Aki Hata',
            'composer' => 'Ken Itou',
            'to_unit' => '2',
            'to_subunit' => '11',
        ]);
        
        Song::create([
            'name' => 'Mirai Ticket',
            'written_by' => 'Aki Hata',
            'composer' => 'Ken Itou',
            'to_unit' => '2',
            'to_subunit' => '11',
        ]);

        Image::create([
            'name' => 'rubybefore',
            'chara_id' => '1',
            'type' => 'image',
        ]);

        Image::create([
            'name' => 'yoshikobefore',
            'chara_id' => '2',
            'type' => 'image',
        ]);

        Image::create([
            'name' => 'marubefore',
            'chara_id' => '3',
            'type' => 'image',
        ]);

        Image::create([
            'name' => 'chikabefore',
            'chara_id' => '4',
            'type' => 'image',
        ]);

        Image::create([
            'name' => 'rikobefore',
            'chara_id' => '5',
            'type' => 'image',
        ]);

        Image::create([
            'name' => 'youbefore',
            'chara_id' => '6',
            'type' => 'image',
        ]);

        Image::create([
            'name' => 'kananbefore',
            'chara_id' => '7',
            'type' => 'image',
        ]);

        Image::create([
            'name' => 'diabefore',
            'chara_id' => '8',
            'type' => 'image',
        ]);

        Image::create([
            'name' => 'maribefore',
            'chara_id' => '9',
            'type' => 'image',
        ]);
    }
}
