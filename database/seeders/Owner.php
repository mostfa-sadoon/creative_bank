<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Owner extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('owners')->insert([
            'img' => 'ceo.jpeg',
            'desc_ar' => 'منذ إنشاء RFCO ، نحن ملتزمون بالبناء بيئة قائمة على الابتكار والكفاءة. أين عملائنا ويتم استقبال الموظفين بالنزاهة والاحترام الذي يهدفون إليه. تؤمن شركة RFCO بضرورة إنشاء مجتمعات للعيش فيها تشمل الجميع خدمات نمط الحياة والمرافق اللازمة لحياة خالية من المتاعب. مجتمع يعمل ككيان واحد متناغم يخدم احتياجاتنا العملاء أثناء وبعد التسليم. منذ أن بدأنا رحلتنا ، لقد كان نجاحنا مصدر فخر وإلهام لنا احتضان الحاضر ومواصلة البناء للمستقبل. لدينا باستمرار سعينا جاهدين لإنشاء مجتمعات ومشاريع
            ',

            'desc_en' => 'LSince inception of RFCO, we are dedicated to build an environment based on innovation and efficiency. Where our clients and employees are met with the integrity and respect they aim for. RFCO believes in creating communities to live in that include all the lifestyle services and needed facilities for a hassle-free life. A community that acts as one harmonious entity serving the needs of our customers during and after delivery. Since we began our journey, our success has been a source of pride and inspiration for us to embrace the present and continue building for the future. We have constantly strived to create livable communities and projects.',
        ]);
    }
}
