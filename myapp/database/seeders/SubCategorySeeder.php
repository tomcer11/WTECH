<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_categories')->insert([
            'main_category_id' => 1,
            'category' => 'Downhill',
            'description' => 'Downhill bicykle sú navrhnuté pre extrémne terény a rýchlejšie zostupy pre adrenalínových nadšencov horských bicyklov. Ich robustná konštrukcia a vysoké zdvihy tlmičov navrhnuté na zvládanie náročných podmienok terénu, poskytujú jazdcovi stabilitu a kontrolu aj v najťažších situáciách.',
            'banner_path' => 'Obrazky/Banery/horske_downhill.jpg',
            'small_banner_path' => 'Obrazky/Banery_PodKategorie/horske_downhill.jpg',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);
        
        DB::table('sub_categories')->insert([
            'main_category_id' => 1,
            'category' => 'Enduro',
            'description' => 'Enduro bicykle sú navrhnuté pre náročné terény a agresívne jazdenie, či už ide o strmé zjazdy alebo technické singletracky. Ich odolná konštrukcia a zdvihy tlmičov umožňujú jazdcovi prekonať rôznorodé prekážky s dôverou a stabilitou.',
            'banner_path' => 'Obrazky/Banery/horske_enduro.jpg',
            'small_banner_path' => 'Obrazky/Banery_PodKategorie/horske_enduro.jpg',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('sub_categories')->insert([
            'main_category_id' => 1,
            'category' => 'Trail',
            'description' => 'Trail bicykle sú vynikajúcim spojením všestrannosti a výkonnosti, ideálne pre jazdu po rôznorodom teréne. S ich agilným rámom a geometriou sú trail bicykle navrhnuté na pohodlnú a zábavnú jazdu, ktorá zvláda technické úseky, ale je stále dostatočne efektívna na dlhé výlety v prírode.',
            'banner_path' => 'Obrazky/Banery/horske_trail.jpg',
            'small_banner_path' => 'Obrazky/Banery_PodKategorie/horske_trail.jpg',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('sub_categories')->insert([
            'main_category_id' => 1,
            'category' => 'XC',
            'description' => 'Cross-country bicykle sú navrhnuté pre rýchlu a efektívnu jazdu po rôznych typoch terénu, od náročných stúpaní po rýchle zjazdy, ideálna voľba pre pretekárov aj rekreačných jazdcov. Ľahký rám a optimalizovaná geometria robia XC bicykle ideálnou voľbou pre dlhé výlety ako aj pretekárske podujatia.',
            'banner_path' => 'Obrazky/Banery/horske_xc.jpg',
            'small_banner_path' => 'Obrazky/Banery_PodKategorie/horske_xc.jpg',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);
        
        DB::table('sub_categories')->insert([
            'main_category_id' => 2,
            'category' => 'Urban',
            'description' => 'Urban bicykle ponúkajú štýlové a praktické dopravné riešenia pre mestské prostredie. Sú navrhnuté s dôrazom na pohodlie a praktickosť, čo robí z nich ideálnu voľbu pre každodennú jazdu. Ich elegantný dizajn a funkčné vlastnosti spájajú mestský štýl s výkonom a spoľahlivosťou.',
            'banner_path' => 'Obrazky/Banery/damske_urban.jpg',
            'small_banner_path' => 'Obrazky/Banery_PodKategorie/damske_urban.jpg',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('sub_categories')->insert([
            'main_category_id' => 2,
            'category' => 'Cross',
            'description' => 'Cross bicykle ponúkajú spojenie elegantného dizajnu s výkonnosťou terénneho bicykla. Ideálne pre dobrodružné ženy, ktoré vyhľadávajú výzvy terénu bez kompromisov v štýle a pohodlí. Bicykle sú navrhnuté s ohľadom na ženskú anatómiu a poskytujú spoľahlivý výkon na rôznych povrchoch.',
            'banner_path' => 'Obrazky/Banery/damske_cross.jpeg',
            'small_banner_path' => 'Obrazky/Banery_PodKategorie/damske_cross.webp',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('sub_categories')->insert([
            'main_category_id' => 3,
            'category' => 'Horské',
            'description' => 'Kategória elektrických horských bicyklov prezentuje spojenie dobrodružstva v prírode s technologickými inováciami. Tieto e-biky sú navrhnuté s ohľadom na extrémne terény a poskytujú silný elektrický pohon, ktorý pomáha pri zdolaní náročných stúpaní a zvládaní zjazdov s väčšou istotou.',
            'banner_path' => 'Obrazky/Banery/ebike_horske.jpg',
            'small_banner_path' => 'Obrazky/Banery_PodKategorie/ebike_horske.jpg',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('sub_categories')->insert([
            'main_category_id' => 3,
            'category' => 'Urban',
            'description' => 'Kategória elektrických mestských bicyklov predstavuje spojenie modernej mobility a ekologickej udržateľnosti. Tieto e-biky sú navrhnuté s dôrazom na pohodlie a efektívnosť pre mestské prostredie. S elektrickým pohonom sú ideálnym spoločníkom pre každodenné dojazdy do práce, nákupy alebo objavovanie mesta.',
            'banner_path' => 'Obrazky/Banery/ebike_urban.jpg',
            'small_banner_path' => 'Obrazky/Banery_PodKategorie/ebike_urban.jpg',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);

        DB::table('sub_categories')->insert([
            'main_category_id' => 4,
            'category' => 'Racing',
            'description' => 'Cestné pretekárske bicykle predstavujú vrchol technológie a výkonu pre cyklistov zameraných na rýchlostné preteky. Tieto bicykle sú navrhnuté s maximálnym dôrazom na aerodynamiku, tuhosť a ľahkosť, čo im umožňuje dosiahnuť vysoké rýchlosti a optimálnu efektivitu pri jazde po cestách.',
            'banner_path' => 'Obrazky/Banery/cestne_racing.jpg',
            'small_banner_path' => 'Obrazky/Banery_PodKategorie/cestne_racing.jpg',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);
        
        DB::table('sub_categories')->insert([
            'main_category_id' => 4,
            'category' => 'Gravel',
            'description' => 'Gravel bicykle predstavujú spojenie všestrannosti a výkonu pre dobrodružné jazdy po rôznych terénoch. Tieto bicykle sú navrhnuté s dôrazom na robustnosť a komfort pre dlhé trasy po zmesi cestných a terénnych povrchov.',
            'banner_path' => 'Obrazky/Banery/cestne_gravel.jpg',
            'small_banner_path' => 'Obrazky/Banery_PodKategorie/cestne_gravel.jpg',
            'created_at' => Carbon::now(timezone: true),
            'updated_at' => Carbon::now(timezone: true)
        ]);
    }
}
