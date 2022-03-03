<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class About extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('abouts')->insert([
            'ideaRate_ar' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي
            القارئ عن
            التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. الهدف من استخدام لوريم إيبسوم هو
             أنه يحتوي على توزيع طبيعي -إلى حد ما- للأحرف ، بدلاً من استخدام "هنا يوجد محتوى نصي ، هنا يوجد محتوى نصي"
            ، مما يجعلها تبدو وكأنها إنجليزية قابلة للقراءة. تستخدم العديد من حزم النشر المكتبي ومحرري
            ',
            'ideaRate_en' => 'Duis sed sollicitudin, lorem quis bibendum auctor, nisi elit consequat
             ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.
              Proin gravida nibh vel velit auctor aliquet de saitis nicius. em quis bibendum auctor.
            ',

            'ideaStudy_ar' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء
             لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. الهدف من استخدام لوريم إيبسوم هو أنه يحتوي على توزيع طبيعي -إلى حد ما- للأحرف ، بدلاً من استخدام "هنا يوجد محتوى نصي ، هنا يوجد محتوى نصي" ، مما يجعلها تبدو
             وكأنها إنجليزية قابلة للقراءة. تستخدم العديد من حزم النشر المكتبي ومحرري ',
            'ideaStudy_en' => 'Duis sed sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus. Proin gravida nibh vel velit auctor aliquet de saitis nicius. em quis bibendum auctor.
            ',

            'acceptedIdea_ar' => 'هناك حقيقة مثبتة منذ زمن طويل وهي
            أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. الهدف من استخدام لوريم إيبسوم هو أنه يحتوي على توزيع طبيعي -إلى حد ما- للأحرف ، بدلاً من استخدام "هنا يوجد محتوى نصي ، هنا يوجد محتوى نصي" ، مما يجعلها تبدو وكأنها إنجليزية قابلة للقراءة. تستخدم العديد من حزم النشر المكتبي ومحرري ',
            'acceptedIdea_en' => 'Duis sed sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus. Proin gravida nibh vel velit auctor aliquet de saitis nicius. em quis bibendum auctor.
            ',

            'vision_en' => 'A national electronic bank that contributes to technological development based on innovation and invention'
            ,
            'vision_ar' => 'بنك الكتروني وطني يساهم في التنمية التكنولوجية القائمة على الابتكار والاختراع'
            ,

            'mission_en' => 'Innovations and inventions that lead to the generation of national technology and contribute to the coordination of national innovation development through a marketing outlet for innovations, support innovators, inventors and civil projects'
            ,
            'mission_ar' => 'تشجيع الابتكارات والاختراعات التي تؤدى إلى توليد تكنولوجيا وطنية ، والمساهمة في تنسيق الجهود الوطنية لتنمية القدرات الابتكارية من خلال توفير منفذ تسويقي للابتكارات ، دعم المبتكرين والمخترعين ومؤسسات المجتمع المدني'
            ,
            'description_en' => 'Innovations and inventions that lead to the generation of national technology and contribute to the coordination of national innovation development through a marketing outlet for innovations, support innovators, inventors and civil projects'
            ,
            'description_ar' => 'تشجيع الابتكارات والاختراعات التي تؤدى إلى توليد تكنولوجيا وطنية ، والمساهمة في تنسيق الجهود الوطنية لتنمية القدرات الابتكارية من خلال توفير منفذ تسويقي للابتكارات ، دعم المبتكرين والمخترعين ومؤسسات المجتمع المدني'
            ,

        ]);
    }
}
