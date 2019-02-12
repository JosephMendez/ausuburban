<?php

use Illuminate\Database\Seeder;

class MaldiveIslandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	ini_set('memory_limit','256M');

        DB::table('suburbs')->insert([
        	[
				"postcode"	=> "09010",
				"suburb"	=> "THODDOO",
				"state"		=> "AA",
				"lon"		=> 72.9593439,
				"lat"		=> 4.4382327
			],
			[
				"postcode"	=> "09020",
				"suburb"	=> "RASDHOO",
				"state"		=> "AA",
				"lon"		=> 72.9925589,
				"lat"		=> 4.263245
			],
			[
				"postcode"	=> "09030",
				"suburb"	=> "UKULHAS",
				"state"		=> "AA",
				"lon"		=> 72.8644712,
				"lat"		=> 4.2151281
			],
			[
				"postcode"	=> "09040",
				"suburb"	=> "MATHIVERI",
				"state"		=> "AA",
				"lon"		=> 72.7459205,
				"lat"		=> 4.1912499
			],
			[
				"postcode"	=> "09050",
				"suburb"	=> "BODUFOLHUDHOO",
				"state"		=> "AA",
				"lon"		=> 72.7739937,
				"lat"		=> 4.1857438
			],
			[
				"postcode"	=> "09060",
				"suburb"	=> "FERIDHOO",
				"state"		=> "AA",
				"lon"		=> 72.7252329,
				"lat"		=> 4.050984
			],
			[
				"postcode"	=> "09070",
				"suburb"	=> "MAALHOS",
				"state"		=> "AA",
				"lon"		=> 73.1076675,
				"lat"		=> 5.1343132
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HIMANDHOO",
				"state"		=> "AA",
				"lon"		=> 72.7444429,
				"lat"		=> 3.9205338
			],
			[
				"postcode"	=> "09090",
				"suburb"	=> "BATHALA",
				"state"		=> "AA",
				"lon"		=> 72.9456875,
				"lat"		=> 4.070193
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ELLAIDHU",
				"state"		=> "AA",
				"lon"		=> 72.9497476,
				"lat"		=> 4.0080801
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FESDHOO",
				"state"		=> "AA",
				"lon"		=> 72.810558,
				"lat"		=> 4.0066218
			],
			[
				"postcode"	=> "09120",
				"suburb"	=> "GANGEHI",
				"state"		=> "AA",
				"lon"		=> 72.7551555,
				"lat"		=> 4.2200227
			],
			[
				"postcode"	=> "09130",
				"suburb"	=> "HALAVELI",
				"state"		=> "AA",
				"lon"		=> 72.919849,
				"lat"		=> 4.0383729
			],
			[
				"postcode"	=> "09140",
				"suburb"	=> "KURAMATHI",
				"state"		=> "AA",
				"lon"		=> 72.9822258,
				"lat"		=> 4.2593168
			],
			[
				"postcode"	=> "09150",
				"suburb"	=> "MAAYAAFUSHI",
				"state"		=> "AA",
				"lon"		=> 72.8875468,
				"lat"		=> 4.0736791
			],
			[
				"postcode"	=> "09160",
				"suburb"	=> "MADOOGALI",
				"state"		=> "AA",
				"lon"		=> 72.7529391,
				"lat"		=> 4.0960081
			],
			[
				"postcode"	=> "09170",
				"suburb"	=> "KUDAFOLHUDHOO",
				"state"		=> "AA",
				"lon"		=> 72.7669757,
				"lat"		=> 4.1809801
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VELIGANDU",
				"state"		=> "AA",
				"lon"		=> 73.0115631,
				"lat"		=> 4.2986312
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VELIDHOO",
				"state"		=> "AA",
				"lon"		=> 73.2750618,
				"lat"		=> 5.662222
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MUSHIMASMIGILI",
				"state"		=> "AA",
				"lon"		=> 72.9189902,
				"lat"		=> 3.9395888
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ALIKOIRAH",
				"state"		=> "AA",
				"lon"		=> 72.8801629,
				"lat"		=> 3.9434187
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BEYRUMADIVARU",
				"state"		=> "AA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHINNOLHUFINOLHU",
				"state"		=> "AA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ETHEREMADIVARU",
				"state"		=> "AA",
				"lon"		=> 72.9377517,
				"lat"		=> 4.1186373
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FUSHI",
				"state"		=> "AA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GAATHAFUSHI",
				"state"		=> "AA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KANDHOLHUDHOO",
				"state"		=> "AA",
				"lon"		=> 72.8552404,
				"lat"		=> 5.6187542
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAGAU",
				"state"		=> "AA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MADIVARU",
				"state"		=> "AA",
				"lon"		=> 73.3701328,
				"lat"		=> 5.4596339
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MADIVARUFINOLHU",
				"state"		=> "AA",
				"lon"		=> 73.0005582,
				"lat"		=> 4.2690268
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MATHIVEREEFINOLHU",
				"state"		=> "AA",
				"lon"		=> 72.7501686,
				"lat"		=> 4.1856662
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEERUFENFUSHI",
				"state"		=> "AA",
				"lon"		=> 73.717222,
				"lat"		=> 4.453333
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VIHAMAAFARU",
				"state"		=> "AA",
				"lon"		=> 72.7470287,
				"lat"		=> 4.1216261
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "AVI ISLAND",
				"state"		=> "ADH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "00170",
				"suburb"	=> "MACHCHAFUSHI",
				"state"		=> "ADH",
				"lon"		=> 72.8829319,
				"lat"		=> 3.5936102
			],
			[
				"postcode"	=> "00010",
				"suburb"	=> "HANGNAMEEDHOO",
				"state"		=> "ADH",
				"lon"		=> 72.9541767,
				"lat"		=> 3.8491932
			],
			[
				"postcode"	=> "00020",
				"suburb"	=> "OMADHOO",
				"state"		=> "ADH",
				"lon"		=> 72.9630347,
				"lat"		=> 3.7920205
			],
			[
				"postcode"	=> "00030",
				"suburb"	=> "KUBURUDHOO",
				"state"		=> "ADH",
				"lon"		=> 72.9250169,
				"lat"		=> 3.7757066
			],
			[
				"postcode"	=> "00040",
				"suburb"	=> "MAHIBADHOO",
				"state"		=> "ADH",
				"lon"		=> 72.9689398,
				"lat"		=> 3.7567833
			],
			[
				"postcode"	=> "00050",
				"suburb"	=> "MANDHOO",
				"state"		=> "ADH",
				"lon"		=> 72.7089772,
				"lat"		=> 3.6980172
			],
			[
				"postcode"	=> "00060",
				"suburb"	=> "DHANGETHI",
				"state"		=> "ADH",
				"lon"		=> 72.9556531,
				"lat"		=> 3.6080671
			],
			[
				"postcode"	=> "00070",
				"suburb"	=> "DHIGURAH",
				"state"		=> "ADH",
				"lon"		=> 72.9290773,
				"lat"		=> 3.5359371
			],
			[
				"postcode"	=> "00080",
				"suburb"	=> "FENFUSHI",
				"state"		=> "ADH",
				"lon"		=> 72.7843357,
				"lat"		=> 3.4895769
			],
			[
				"postcode"	=> "00090",
				"suburb"	=> "DHIDHDHOO",
				"state"		=> "ADH",
				"lon"		=> 73.113569,
				"lat"		=> 6.888644
			],
			[
				"postcode"	=> "00100",
				"suburb"	=> "MAAMIGILI",
				"state"		=> "ADH",
				"lon"		=> 72.8367776,
				"lat"		=> 3.4730027
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ARIYADHOO",
				"state"		=> "ADH",
				"lon"		=> 72.8549981,
				"lat"		=> 3.4784673
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ANGAAGA",
				"state"		=> "ADH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHIDHDHOOFINOLHU",
				"state"		=> "ADH",
				"lon"		=> 72.8962227,
				"lat"		=> 3.498644
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ATHURUGAU",
				"state"		=> "ADH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "00140",
				"suburb"	=> "DHIFFUSHI",
				"state"		=> "ADH",
				"lon"		=> 73.7132147,
				"lat"		=> 4.4401762
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDA RAH",
				"state"		=> "ADH",
				"lon"		=> 72.9102511,
				"lat"		=> 3.5741041
			],
			[
				"postcode"	=> "00160",
				"suburb"	=> "HUVAHENDHOO",
				"state"		=> "ADH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "00170",
				"suburb"	=> "MACHCHAFUSHI",
				"state"		=> "ADH",
				"lon"		=> 72.8829319,
				"lat"		=> 3.5936102
			],
			[
				"postcode"	=> "00190",
				"suburb"	=> "MIRIHI",
				"state"		=> "ADH",
				"lon"		=> 72.7804575,
				"lat"		=> 3.6193965
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "RANGALIFINOLHU",
				"state"		=> "ADH",
				"lon"		=> 72.7233857,
				"lat"		=> 3.618432
			],
			[
				"postcode"	=> "00200",
				"suburb"	=> "MOOFUSHI",
				"state"		=> "ADH",
				"lon"		=> 72.7281884,
				"lat"		=> 3.8847822
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VILLINGILIVARU",
				"state"		=> "ADH",
				"lon"		=> 72.9550994,
				"lat"		=> 3.619144
			],
			[
				"postcode"	=> "00220",
				"suburb"	=> "NALAGURAIDHOO",
				"state"		=> "ADH",
				"lon"		=> 72.8028024,
				"lat"		=> 3.4832642
			],
			[
				"postcode"	=> "00230",
				"suburb"	=> "THUNDUFUSHI",
				"state"		=> "ADH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "00240",
				"suburb"	=> "MAAFUSHIVARU",
				"state"		=> "ADH",
				"lon"		=> 72.900099,
				"lat"		=> 3.6080585
			],
			[
				"postcode"	=> "00250",
				"suburb"	=> "VAKARUFALHI",
				"state"		=> "ADH",
				"lon"		=> 72.9021295,
				"lat"		=> 3.5788039
			],
			[
				"postcode"	=> "00260",
				"suburb"	=> "VILAMENDHOO",
				"state"		=> "ADH",
				"lon"		=> 72.959,
				"lat"		=> 3.6335
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "AAFINOLHU",
				"state"		=> "ADH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUFINOLHU",
				"state"		=> "ADH",
				"lon"		=> 73.4566922,
				"lat"		=> 3.8572228
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUKAASHIHURAA",
				"state"		=> "ADH",
				"lon"		=> 72.9547303,
				"lat"		=> 3.8759205
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BULHALHOHI",
				"state"		=> "ADH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHIGGIRI",
				"state"		=> "ADH",
				"lon"		=> 72.9149578,
				"lat"		=> 3.8586877
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ENBOODHOO",
				"state"		=> "ADH",
				"lon"		=> 72.8563481,
				"lat"		=> 5.0640106
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FUSHIDHIGGAA",
				"state"		=> "ADH",
				"lon"		=> 72.7708541,
				"lat"		=> 3.757816
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HEENFARU",
				"state"		=> "ADH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HIYAFUSHI",
				"state"		=> "ADH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HUKURUDHOO",
				"state"		=> "ADH",
				"lon"		=> 72.7178441,
				"lat"		=> 3.5707066
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HURASDHOO",
				"state"		=> "ADH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HURUELHI",
				"state"		=> "ADH",
				"lon"		=> 72.7195066,
				"lat"		=> 3.5442209
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "INNAFUSHI",
				"state"		=> "ADH",
				"lon"		=> 72.8797937,
				"lat"		=> 4.8779864
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KALHAHADHIHURAA",
				"state"		=> "ADH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDADHOO",
				"state"		=> "ADH",
				"lon"		=> 72.9078515,
				"lat"		=> 6.4361071
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "LONUBOI",
				"state"		=> "ADH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THELUVELIGAA",
				"state"		=> "ADH",
				"lon"		=> 72.9026832,
				"lat"		=> 3.6697899
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THEYOFULHIHURAA",
				"state"		=> "ADH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THOLHIFUSHI",
				"state"		=> "ADH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "06010",
				"suburb"	=> "KUDARIKILU",
				"state"		=> "B",
				"lon"		=> 73.07078,
				"lat"		=> 5.3001382
			],
			[
				"postcode"	=> "06020",
				"suburb"	=> "KAMADHOO",
				"state"		=> "B",
				"lon"		=> 73.1371733,
				"lat"		=> 5.2818905
			],
			[
				"postcode"	=> "06030",
				"suburb"	=> "KENDHOO",
				"state"		=> "B",
				"lon"		=> 73.0102716,
				"lat"		=> 5.2758409
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAADDOO",
				"state"		=> "B",
				"lon"		=> 73.0619261,
				"lat"		=> 5.093013
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "UDOODHOO",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "06040",
				"suburb"	=> "KIHAADHOO",
				"state"		=> "B",
				"lon"		=> 73.1253715,
				"lat"		=> 5.215028
			],
			[
				"postcode"	=> "06050",
				"suburb"	=> "DHONFANU",
				"state"		=> "B",
				"lon"		=> 73.1238962,
				"lat"		=> 5.1873933
			],
			[
				"postcode"	=> "06060",
				"suburb"	=> "DHARAVANDHOO",
				"state"		=> "B",
				"lon"		=> 73.1334853,
				"lat"		=> 5.1569402
			],
			[
				"postcode"	=> "06070",
				"suburb"	=> "MAALHOS",
				"state"		=> "B",
				"lon"		=> 73.1076675,
				"lat"		=> 5.1343132
			],
			[
				"postcode"	=> "06080",
				"suburb"	=> "EYDHAFUSHI",
				"state"		=> "B",
				"lon"		=> 73.0685665,
				"lat"		=> 5.1025787
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FUNADHOO",
				"state"		=> "B",
				"lon"		=> 73.2905413,
				"lat"		=> 6.1488525
			],
			[
				"postcode"	=> "06090",
				"suburb"	=> "THULHAADHOO",
				"state"		=> "B",
				"lon"		=> 72.8404703,
				"lat"		=> 5.0220524
			],
			[
				"postcode"	=> "06100",
				"suburb"	=> "HITHAADHOO",
				"state"		=> "B",
				"lon"		=> 72.9231712,
				"lat"		=> 5.0067908
			],
			[
				"postcode"	=> "06110",
				"suburb"	=> "FULHADHOO",
				"state"		=> "B",
				"lon"		=> 72.9349833,
				"lat"		=> 4.8848747
			],
			[
				"postcode"	=> "06120",
				"suburb"	=> "FEHENDHOO",
				"state"		=> "B",
				"lon"		=> 72.9707851,
				"lat"		=> 4.8811337
			],
			[
				"postcode"	=> "06130",
				"suburb"	=> "GOIDHOO",
				"state"		=> "B",
				"lon"		=> 72.9298156,
				"lat"		=> 6.4302973
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "LANDAAGIRAAVARU",
				"state"		=> "B",
				"lon"		=> 73.1120936,
				"lat"		=> 5.2862175
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHUNIKOLHU",
				"state"		=> "B",
				"lon"		=> 72.8818243,
				"lat"		=> 5.0394007
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KIHAADHUFFARU",
				"state"		=> "B",
				"lon"		=> 73.1320518,
				"lat"		=> 5.1911059
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FONIMAGOODHOO",
				"state"		=> "B",
				"lon"		=> 73.1637253,
				"lat"		=> 5.2562501
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUNFUNADHOO",
				"state"		=> "B",
				"lon"		=> 73.0781579,
				"lat"		=> 5.1122262
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HORUBADHOO",
				"state"		=> "B",
				"lon"		=> 73.0530718,
				"lat"		=> 5.1628964
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "AHIVAHFUSHI",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "AIDHOO",
				"state"		=> "B",
				"lon"		=> 73.1635409,
				"lat"		=> 5.1873776
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ANHENUNFUSHI",
				"state"		=> "B",
				"lon"		=> 72.9688949,
				"lat"		=> 5.3420955
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BALHUFINOLHU",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BATHALAA",
				"state"		=> "B",
				"lon"		=> 73.0696732,
				"lat"		=> 5.3538368
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BATHALAAHURAA",
				"state"		=> "B",
				"lon"		=> 73.0616494,
				"lat"		=> 5.3571464
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BOADHAAFUSHEEFINOLHU",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUFINOLHU",
				"state"		=> "B",
				"lon"		=> 73.4566922,
				"lat"		=> 3.8572228
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BOIFUSHI",
				"state"		=> "B",
				"lon"		=> 72.9938505,
				"lat"		=> 5.2984506
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHAKANDHOO",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHANDHOO",
				"state"		=> "B",
				"lon"		=> 73.4614796,
				"lat"		=> 0.6214407
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHIGUDHEFARU",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHIGUFARUVINAGANDU",
				"state"		=> "B",
				"lon"		=> 72.9900809,
				"lat"		=> 5.3521579
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHOOGANDUFINOLHU",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "EMBUDHOO",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FAREEDHAAFINOLHU",
				"state"		=> "B",
				"lon"		=> 72.9515008,
				"lat"		=> 4.8846039
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FARES",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FEHENFARU",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FINOLHAS",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FUNADHOO",
				"state"		=> "B",
				"lon"		=> 73.2905413,
				"lat"		=> 6.1488525
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GAAGADUFARUHURAA",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GAAVILIGILI",
				"state"		=> "B",
				"lon"		=> 72.8373315,
				"lat"		=> 5.062089
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GEMENDHOO",
				"state"		=> "B",
				"lon"		=> 73.0196809,
				"lat"		=> 5.2756333
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HANIFARU",
				"state"		=> "B",
				"lon"		=> 73.1513016,
				"lat"		=> 5.1725218
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HIBALHIDHOO",
				"state"		=> "B",
				"lon"		=> 73.1150443,
				"lat"		=> 5.1407766
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HIRUNDHOO",
				"state"		=> "B",
				"lon"		=> 73.1537687,
				"lat"		=> 5.2173756
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HULHUDHOO",
				"state"		=> "B",
				"lon"		=> 73.318549,
				"lat"		=> 5.8149761
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "INNAFUSHI",
				"state"		=> "B",
				"lon"		=> 72.8797937,
				"lat"		=> 4.8779864
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KANUFUSHEEFINOLHU",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KANUFUSHEEGAATHUFINOLHU",
				"state"		=> "B",
				"lon"		=> 72.9631295,
				"lat"		=> 5.0141137
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KANUFUSHI",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KASHIDHOO",
				"state"		=> "B",
				"lon"		=> 73.4622161,
				"lat"		=> 4.9540207
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KASHIDHUHFARUFINOLHU",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KEYODHOO",
				"state"		=> "B",
				"lon"		=> 73.5494743,
				"lat"		=> 3.4620471
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KIHAVAH HARUVALHI",
				"state"		=> "B",
				"lon"		=> 73.0571301,
				"lat"		=> 5.2963016
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDADHOO",
				"state"		=> "B",
				"lon"		=> 72.9078515,
				"lat"		=> 6.4361071
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAADDOO",
				"state"		=> "B",
				"lon"		=> 73.0619261,
				"lat"		=> 5.093013
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAADDOOHULHUDHOO",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAFUSHEEFINOLHU",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAMADUVVAREE",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAARIKILI",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MADHIRIVAADHOO",
				"state"		=> "B",
				"lon"		=> 73.161144,
				"lat"		=> 5.2690518
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEDHUFINOLHU",
				"state"		=> "B",
				"lon"		=> 72.9665409,
				"lat"		=> 5.0159099
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEDHUFINOLHU",
				"state"		=> "B",
				"lon"		=> 72.9665409,
				"lat"		=> 5.0159099
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MENDHOO",
				"state"		=> "B",
				"lon"		=> 72.9955111,
				"lat"		=> 5.1751022
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MILAIDHOO",
				"state"		=> "B",
				"lon"		=> 73.1286908,
				"lat"		=> 5.266897
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MIRIANDHOO",
				"state"		=> "B",
				"lon"		=> 73.0313037,
				"lat"		=> 5.0631045
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MUDHDHOO",
				"state"		=> "B",
				"lon"		=> 73.0840602,
				"lat"		=> 5.2063668
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MUTHAAFUSHI",
				"state"		=> "B",
				"lon"		=> 72.8779476,
				"lat"		=> 5.0785005
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "NELIVARUFINOLHU",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "NIBILIGAA",
				"state"		=> "B",
				"lon"		=> 72.9445039,
				"lat"		=> 5.1730946
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "OLHUGIRI",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FULHADHOO RAHKAIRI FINOLHU",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THILADHOO",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "UDOODHOO",
				"state"		=> "B",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "UFULIGIRI",
				"state"		=> "B",
				"lon"		=> 72.9703699,
				"lat"		=> 5.017066
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VAKKARU",
				"state"		=> "B",
				"lon"		=> 72.9098819,
				"lat"		=> 5.1339348
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VEYOFUSHI",
				"state"		=> "B",
				"lon"		=> 73.1596689,
				"lat"		=> 5.2288323
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VINANEIYFARUHURAA",
				"state"		=> "B",
				"lon"		=> 73.0787574,
				"lat"		=> 5.3462741
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VOAVAH",
				"state"		=> "B",
				"lon"		=> 73.0779735,
				"lat"		=> 5.3165165
			],
			[
				"postcode"	=> 13010,
				"suburb"	=> "MEEDHOO",
				"state"		=> "DH",
				"lon"		=> 73.2333333,
				"lat"		=> -0.5833333
			],
			[
				"postcode"	=> 13020,
				"suburb"	=> "BANDIDHOO",
				"state"		=> "DH",
				"lon"		=> 72.9910827,
				"lat"		=> 2.9366909
			],
			[
				"postcode"	=> 13030,
				"suburb"	=> "RINBUDHOO",
				"state"		=> "DH",
				"lon"		=> 72.8947287,
				"lat"		=> 2.9257475
			],
			[
				"postcode"	=> 13040,
				"suburb"	=> "HULHUDHELI",
				"state"		=> "DH",
				"lon"		=> 72.8463784,
				"lat"		=> 2.8590695
			],
			[
				"postcode"	=> 13050,
				"suburb"	=> "GEMENDHOO",
				"state"		=> "DH",
				"lon"		=> 73.0196809,
				"lat"		=> 5.2756333
			],
			[
				"postcode"	=> 13060,
				"suburb"	=> "VAANEE",
				"state"		=> "DH",
				"lon"		=> 73.0028915,
				"lat"		=> 2.7253266
			],
			[
				"postcode"	=> 13070,
				"suburb"	=> "MAAENBOODHOO",
				"state"		=> "DH",
				"lon"		=> 72.9630347,
				"lat"		=> 2.6961447
			],
			[
				"postcode"	=> 13080,
				"suburb"	=> "KUDAHUVADHOO",
				"state"		=> "DH",
				"lon"		=> 72.8914233,
				"lat"		=> 2.6707039
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VELAVARU",
				"state"		=> "DH",
				"lon"		=> 73.0139673,
				"lat"		=> 2.9830167
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEEDHUFFUSHI",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ALUVIFUSHI",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "AYYUKALOAHURAA",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BHULALAFUSHI",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUFUSHI",
				"state"		=> "DH",
				"lon"		=> 72.9689398,
				"lat"		=> 5.5073549
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHEBAIDHOO",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHOORES",
				"state"		=> "DH",
				"lon"		=> 72.7474442,
				"lat"		=> 4.1914981
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "EMBUDHOOFUSHI",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FAANDHOO",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FENARUVAAHURAA",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FENFUSHI",
				"state"		=> "DH",
				"lon"		=> 72.7843357,
				"lat"		=> 3.4895769
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FENMEERUHURAA",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GAHADHIFFUSHI",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HASANNALAAFUSHI",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HINAIDHOO",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HIRIYAFUSHI",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HUDUFUSHIFINOLHU",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HULHUVELI",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ISSARI",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KANNEFARU",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KEDHIGADU",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KIRAIDHOO",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "LHOHI",
				"state"		=> "DH",
				"lon"		=> 73.3775009,
				"lat"		=> 5.8167536
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAADHELI",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAFUSHI",
				"state"		=> "DH",
				"lon"		=> 73.4894652,
				"lat"		=> 3.9408934
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAGAU",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAALEFARU",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAVARUFINOLHU",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MATHIDHEBAIDHOO",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEDHURAH",
				"state"		=> "DH",
				"lon"		=> 73.0790802,
				"lat"		=> 6.0231211
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEEDHUFFUSHI",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MINIMASGALI",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "NAIBUKALOABODUFUSHI",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "OLHUFUSHI",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "OLHUVELI",
				"state"		=> "DH",
				"lon"		=> 73.4054975,
				"lat"		=> 1.8169723
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "SARAKAFUSHI",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "SATHAARAA",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THABALHAIDHOO",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THILABOLHUFUSHI",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THINHURAA",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "UDHDHOO",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VAALIA",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VALLALHOHI",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VOMMULI",
				"state"		=> "DH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> 12010,
				"suburb"	=> "FEEALI",
				"state"		=> "F",
				"lon"		=> 73.0028915,
				"lat"		=> 3.2699133
			],
			[
				"postcode"	=> 12020,
				"suburb"	=> "BILEDHDHOO",
				"state"		=> "F",
				"lon"		=> 72.983702,
				"lat"		=> 3.1178079
			],
			[
				"postcode"	=> 12030,
				"suburb"	=> "MAGOODHOO",
				"state"		=> "F",
				"lon"		=> 72.964511,
				"lat"		=> 3.0790263
			],
			[
				"postcode"	=> 12040,
				"suburb"	=> "DHARABOODHOO",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> 12050,
				"suburb"	=> "NILANDHOO",
				"state"		=> "F",
				"lon"		=> 72.8914233,
				"lat"		=> 3.0556098
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAFUSHI",
				"state"		=> "F",
				"lon"		=> 73.4894652,
				"lat"		=> 3.9408934
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FILITHEYO",
				"state"		=> "F",
				"lon"		=> 73.0368382,
				"lat"		=> 3.2138169
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ADHANGAU",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "AGULUGALEE-FINOLHU",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BANDIDHUHFUSHEEFINOLHU",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUFINOLHU",
				"state"		=> "F",
				"lon"		=> 73.4566922,
				"lat"		=> 3.8572228
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHIGUVARU",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DUNIFINOLHU",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "EMBULUFUSHI",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FAANUMAAHURAA",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GAAHURAA",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HIMITHI",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HURAA",
				"state"		=> "F",
				"lon"		=> 73.6013702,
				"lat"		=> 4.3336631
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "JINNATHGAU",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KADUMOONUFUSHI",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KOFESDHOO",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAFALHUFINOLHU",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAFAREEFINOLHU",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAVARUHURAA",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MADIVARU HURAA",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MADIVARU HURAA",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAGOODHOOBODUFINOLHU",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAKUNUERI",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MINIMASGALI",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "RANGALEEFINOLHU",
				"state"		=> "F",
				"lon"		=> 72.7233857,
				"lat"		=> 3.618432
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VILLIGINLIVARUFINOLHU",
				"state"		=> "F",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> 16010,
				"suburb"	=> "KOLAMAAFUSHI",
				"state"		=> "GA",
				"lon"		=> 73.1836372,
				"lat"		=> 0.8384066
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VILLINGILI",
				"state"		=> "GA",
				"lon"		=> 73.434227,
				"lat"		=> 0.7573413
			],
			[
				"postcode"	=> 16030,
				"suburb"	=> "MAAMENDHOO",
				"state"		=> "GA",
				"lon"		=> 73.3892894,
				"lat"		=> 1.8179892
			],
			[
				"postcode"	=> 16040,
				"suburb"	=> "NILANDHOO",
				"state"		=> "GA",
				"lon"		=> 72.8914233,
				"lat"		=> 3.0556098
			],
			[
				"postcode"	=> 16050,
				"suburb"	=> "DHAANDHOO",
				"state"		=> "GA",
				"lon"		=> 73.4614796,
				"lat"		=> 0.6214407
			],
			[
				"postcode"	=> 16060,
				"suburb"	=> "DHEVVADHOO",
				"state"		=> "GA",
				"lon"		=> 73.2418879,
				"lat"		=> 0.557231
			],
			[
				"postcode"	=> 16070,
				"suburb"	=> "KONDEY",
				"state"		=> "GA",
				"lon"		=> 73.5491062,
				"lat"		=> 0.498594
			],
			[
				"postcode"	=> 16080,
				"suburb"	=> "DHIYADHOO",
				"state"		=> "GA",
				"lon"		=> 73.5572043,
				"lat"		=> 0.4787917
			],
			[
				"postcode"	=> 16090,
				"suburb"	=> "GEMANAFUSHI",
				"state"		=> "GA",
				"lon"		=> 73.5689828,
				"lat"		=> 0.4425974
			],
			[
				"postcode"	=> 16100,
				"suburb"	=> "KANDUHULHUDHOO",
				"state"		=> "GA",
				"lon"		=> 73.5395353,
				"lat"		=> 0.3510085
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KOODDOO",
				"state"		=> "GA",
				"lon"		=> 73.4334904,
				"lat"		=> 0.7339759
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KENDHERAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ARAIGATHTHAA",
				"state"		=> "GA",
				"lon"		=> 73.5347497,
				"lat"		=> 0.4518533
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BAAVANADHOO",
				"state"		=> "GA",
				"lon"		=> 73.5399035,
				"lat"		=> 0.5215193
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BABERAAHUTTAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BAKETHTHAA",
				"state"		=> "GA",
				"lon"		=> 73.4977497,
				"lat"		=> 0.3809854
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BEYRUMAUDDOO",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BOADDOO",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUBONDEYYAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUFUSHI",
				"state"		=> "GA",
				"lon"		=> 72.9689398,
				"lat"		=> 5.5073549
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODEHUTTAA",
				"state"		=> "GA",
				"lon"		=> 73.0407122,
				"lat"		=> 0.2993347
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHEVAAMAAGALAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHEVALAABADHOO",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHIGUDHOO",
				"state"		=> "GA",
				"lon"		=> 73.5347497,
				"lat"		=> 0.5424827
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHIGURAH",
				"state"		=> "GA",
				"lon"		=> 72.9290773,
				"lat"		=> 3.5359371
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FALHUMAAFUSHI",
				"state"		=> "GA",
				"lon"		=> 73.4382783,
				"lat"		=> 0.6716667
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FALHUVERREHAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FARUHULHUDHOO",
				"state"		=> "GA",
				"lon"		=> 73.2555266,
				"lat"		=> 0.8744066
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FENREHAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FENREHAAHUTTAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FULANGI",
				"state"		=> "GA",
				"lon"		=> 73.164094,
				"lat"		=> 0.6655922
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FUNADHOO",
				"state"		=> "GA",
				"lon"		=> 73.2905413,
				"lat"		=> 6.1488525
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FUNADHOOVILIGILLAA",
				"state"		=> "GA",
				"lon"		=> 73.5200241,
				"lat"		=> 0.5696703
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FUNAMAUDDOO",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GALAMADHOO",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HADAHAA",
				"state"		=> "GA",
				"lon"		=> 73.4541144,
				"lat"		=> 0.5057108
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HAGEDHOO",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HAGEVILLAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HEENAAMAAGALAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HIRIHUTTAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HITHAADHOO",
				"state"		=> "GA",
				"lon"		=> 72.9231712,
				"lat"		=> 5.0067908
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HITHANDHOOGALAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HULHIMENDHOO",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HUREDHDHOO",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "IDIMAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "INAREHA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KANDUVILINGILI",
				"state"		=> "GA",
				"lon"		=> 73.1906428,
				"lat"		=> 0.8661151
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KALHEHUTTAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KEESSEYRAHAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KOADHOO",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KODAFUTTAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KODEYMATHEELAABADHOO",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KODEYVILINGILI",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KOLHAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUBUMAAFUSHI",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAFEHALA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDALAFARI",
				"state"		=> "GA",
				"lon"		=> 73.3498692,
				"lat"		=> 0.8965603
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDHEBONDEYYAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUREDHDHOO",
				"state"		=> "GA",
				"lon"		=> 73.4644256,
				"lat"		=> 5.3336969
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "LHOSSAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAADHIGUVARA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAFEHELAA",
				"state"		=> "GA",
				"lon"		=> 73.5513148,
				"lat"		=> 0.3747378
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAGEHUTTAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAMUTAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAANAAGALAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAARANDHOO",
				"state"		=> "GA",
				"lon"		=> 72.983702,
				"lat"		=> 6.852979
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAREHAA",
				"state"		=> "GA",
				"lon"		=> 73.5630936,
				"lat"		=> 0.4629548
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAHADHDHOO",
				"state"		=> "GA",
				"lon"		=> 73.5126609,
				"lat"		=> 0.5849728
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MATHIDHDHOO",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEDHUHUTTAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEDHUREHAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MELAIMU",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MERADHOO",
				"state"		=> "GA",
				"lon"		=> 73.0932821,
				"lat"		=> 0.5870886
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MINIMENSAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MUNANDHOO",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ODAGALLAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "RAAVEHREHAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "RIBIDHOO",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VILIGALAA",
				"state"		=> "GA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VODAMULAA",
				"state"		=> "GA",
				"lon"		=> 73.4879923,
				"lat"		=> 0.6033497
			],
			[
				"postcode"	=> 17010,
				"suburb"	=> "MADAVELI",
				"state"		=> "GDH",
				"lon"		=> 72.95,
				"lat"		=> 0.4666667
			],
			[
				"postcode"	=> 17020,
				"suburb"	=> "HOADEDHDHOO",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> 17030,
				"suburb"	=> "NADELLAA",
				"state"		=> "GDH",
				"lon"		=> 73.0390519,
				"lat"		=> 0.2944147
			],
			[
				"postcode"	=> 17040,
				"suburb"	=> "GADHDHOO",
				"state"		=> "GDH",
				"lon"		=> 73.4555875,
				"lat"		=> 0.2888652
			],
			[
				"postcode"	=> 17050,
				"suburb"	=> "RATHAFANDHOO",
				"state"		=> "GDH",
				"lon"		=> 73.1047167,
				"lat"		=> 0.2523801
			],
			[
				"postcode"	=> 17060,
				"suburb"	=> "VAADHOO",
				"state"		=> "GDH",
				"lon"		=> 72.9925589,
				"lat"		=> 5.8570104
			],
			[
				"postcode"	=> 17070,
				"suburb"	=> "FIYOARI",
				"state"		=> "GDH",
				"lon"		=> 73.1364357,
				"lat"		=> 0.2226692
			],
			[
				"postcode"	=> 17100,
				"suburb"	=> "THINADHOO",
				"state"		=> "GDH",
				"lon"		=> 72.9977252,
				"lat"		=> 0.531061
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FARES-MAATHODAA",
				"state"		=> "GDH",
				"lon"		=> 73.1858495,
				"lat"		=> 0.2019649
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KONOTTAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KAADEDHDHOO",
				"state"		=> "GDH",
				"lon"		=> 72.994773,
				"lat"		=> 0.4881098
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BAULHAGEELLA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHIGULAABADHOO",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHOONIREHAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FAANAHUTTAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FAREHULHUDHOO",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GAN",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GAZEERA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GOLHALLAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HAADHOO",
				"state"		=> "GDH",
				"lon"		=> 72.9997548,
				"lat"		=> 0.4521381
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HAVODDAA",
				"state"		=> "GDH",
				"lon"		=> 73.0954953,
				"lat"		=> 0.5406718
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HAVODIGALAA",
				"state"		=> "GDH",
				"lon"		=> 73.0748379,
				"lat"		=> 0.5230788
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HULHUVAARULU",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KAADEHDHUVAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KAASHIDHOO",
				"state"		=> "GDH",
				"lon"		=> 73.4622161,
				"lat"		=> 4.9540207
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KADAHALAGALAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KAFENAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KALHEHAMALA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KALHEREHAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KODAANAFUTTAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ODAVARREHAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAHUTTAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDHELAIHAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "LAIHAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "LONUDHOO",
				"state"		=> "GDH",
				"lon"		=> 73.4132327,
				"lat"		=> 0.308229
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "LONUDHOOHUTTAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GEHEMAAGALA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAGODEREHAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAHUTIGALAA",
				"state"		=> "GDH",
				"lon"		=> 73.2007822,
				"lat"		=> 0.2891836
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAODAGALAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAVAARULU",
				"state"		=> "GDH",
				"lon"		=> 73.5108201,
				"lat"		=> 0.3379825
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAVADHDHUVAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAGUDHDHUVAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MALLAAREHAA",
				"state"		=> "GDH",
				"lon"		=> 72.987946,
				"lat"		=> 0.492751
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MATHIHUTTAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MENTHANDHUVAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MUDHIMAAHUTTAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ODAGALLAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "RAHADHUVAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEEHUNTHIBENEHUTTAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THINEHUTTAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ULLEGALAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VAIREYAADHUVAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VATAVARREHAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GEHEVELAGALAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VERAAVILIGILILLAA",
				"state"		=> "GDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FUVAHMULAH",
				"state"		=> "GN",
				"lon"		=> 73.4268608,
				"lat"		=> -0.2983944
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THURAAKUNU",
				"state"		=> "HA",
				"lon"		=> 72.8995453,
				"lat"		=> 7.1043334
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ULIGAN",
				"state"		=> "HA",
				"lon"		=> 72.9268626,
				"lat"		=> 7.0840131
			],
			[
				"postcode"	=> "01030",
				"suburb"	=> "BERINMADHOO",
				"state"		=> "HA",
				"lon"		=> 72.9718923,
				"lat"		=> 7.0475395
			],
			[
				"postcode"	=> "01040",
				"suburb"	=> "HATHIFUSHI",
				"state"		=> "HA",
				"lon"		=> 72.8304999,
				"lat"		=> 7.019956
			],
			[
				"postcode"	=> "01050",
				"suburb"	=> "MOLHADHOO",
				"state"		=> "HA",
				"lon"		=> 72.9977252,
				"lat"		=> 7.0116486
			],
			[
				"postcode"	=> "01060",
				"suburb"	=> "HOARAFUSHI",
				"state"		=> "HA",
				"lon"		=> 72.8951151,
				"lat"		=> 6.9826462
			],
			[
				"postcode"	=> "01070",
				"suburb"	=> "IHAVANDHOO",
				"state"		=> "HA",
				"lon"		=> 72.9268626,
				"lat"		=> 6.9521843
			],
			[
				"postcode"	=> "01080",
				"suburb"	=> "KELAA",
				"state"		=> "HA",
				"lon"		=> 73.2160825,
				"lat"		=> 6.9550113
			],
			[
				"postcode"	=> "01090",
				"suburb"	=> "VASHAFARU",
				"state"		=> "HA",
				"lon"		=> 73.16088,
				"lat"		=> 6.8967099
			],
			[
				"postcode"	=> "01100",
				"suburb"	=> "DHIDHDHOO",
				"state"		=> "HA",
				"lon"		=> 73.113569,
				"lat"		=> 6.888644
			],
			[
				"postcode"	=> "01110",
				"suburb"	=> "FILLADHOO",
				"state"		=> "HA",
				"lon"		=> 73.2308288,
				"lat"		=> 6.8780157
			],
			[
				"postcode"	=> "01120",
				"suburb"	=> "MAARANDHOO",
				"state"		=> "HA",
				"lon"		=> 72.983702,
				"lat"		=> 6.852979
			],
			[
				"postcode"	=> "01130",
				"suburb"	=> "THAKANDHOO",
				"state"		=> "HA",
				"lon"		=> 72.9955111,
				"lat"		=> 6.8443813
			],
			[
				"postcode"	=> "01140",
				"suburb"	=> "UTHEEMU",
				"state"		=> "HA",
				"lon"		=> 73.1128313,
				"lat"		=> 6.835068
			],
			[
				"postcode"	=> "01150",
				"suburb"	=> "MURAIDHOO",
				"state"		=> "HA",
				"lon"		=> 73.1666753,
				"lat"		=> 6.8376416
			],
			[
				"postcode"	=> "01160",
				"suburb"	=> "BAARAH",
				"state"		=> "HA",
				"lon"		=> 73.208333,
				"lat"		=> 6.818889
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAFAHI",
				"state"		=> "HA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ALIDHOO",
				"state"		=> "HA",
				"lon"		=> 73.1519248,
				"lat"		=> 6.8487255
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HUVAHANDHOO",
				"state"		=> "HA",
				"lon"		=> 72.905452,
				"lat"		=> 6.9584944
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHONAKULHI",
				"state"		=> "HA",
				"lon"		=> 73.0515961,
				"lat"		=> 6.8412491
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BEENAAFUSHI",
				"state"		=> "HA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHAPPARUHURAA",
				"state"		=> "HA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHIGUFARUHURAA",
				"state"		=> "HA",
				"lon"		=> 72.9706006,
				"lat"		=> 6.9255535
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GAAFUSHI",
				"state"		=> "HA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GAAMATHIKULHUDHOO",
				"state"		=> "HA",
				"lon"		=> 72.9803806,
				"lat"		=> 7.0423594
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GALLANDHOO",
				"state"		=> "HA",
				"lon"		=> 72.983333,
				"lat"		=> 6.9468393
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GOVVAAFUSHI",
				"state"		=> "HA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "INNAFINOLHU",
				"state"		=> "HA",
				"lon"		=> 72.8109274,
				"lat"		=> 7.0725299
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAFINOLHU",
				"state"		=> "HA",
				"lon"		=> 72.883578,
				"lat"		=> 6.9895632
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAFARI",
				"state"		=> "HA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAFINOLHU",
				"state"		=> "HA",
				"lon"		=> 72.8622558,
				"lat"		=> 7.0024121
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MADULU",
				"state"		=> "HA",
				"lon"		=> 72.9530694,
				"lat"		=> 7.05492
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MANAFARU",
				"state"		=> "HA",
				"lon"		=> 72.9408891,
				"lat"		=> 6.9959714
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MATHEERAH",
				"state"		=> "HA",
				"lon"		=> 72.8194213,
				"lat"		=> 7.0272921
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEDHAFUSHI",
				"state"		=> "HA",
				"lon"		=> 72.9346142,
				"lat"		=> 7.0109217
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MULIDHOO",
				"state"		=> "HA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "NARIDHOO",
				"state"		=> "HA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "UBULIFINOLHU",
				"state"		=> "HA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "UMARAIYFINOLHU",
				"state"		=> "HA",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VANGAARU",
				"state"		=> "HA",
				"lon"		=> 73.203916,
				"lat"		=> 6.0902868
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VELIFINOLHU",
				"state"		=> "HA",
				"lon"		=> 72.8746248,
				"lat"		=> 6.9943158
			],
			[
				"postcode"	=> "02010",
				"suburb"	=> "FARIDHOO",
				"state"		=> "HDH",
				"lon"		=> 73.0545476,
				"lat"		=> 6.7846398
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HONDAIDHOO",
				"state"		=> "HDH",
				"lon"		=> 73.0870112,
				"lat"		=> 6.7703375
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HANIMAADHOO",
				"state"		=> "HDH",
				"lon"		=> 73.1747877,
				"lat"		=> 6.7573452
			],
			[
				"postcode"	=> "02030",
				"suburb"	=> "FINEY",
				"state"		=> "HDH",
				"lon"		=> 73.0538097,
				"lat"		=> 6.7453295
			],
			[
				"postcode"	=> "02040",
				"suburb"	=> "NAIVAADHOO",
				"state"		=> "HDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "02050",
				"suburb"	=> "HIRIMARADHOO",
				"state"		=> "HDH",
				"lon"		=> 73.0235553,
				"lat"		=> 6.724302
			],
			[
				"postcode"	=> "02060",
				"suburb"	=> "NOLHIVARANFARU",
				"state"		=> "HDH",
				"lon"		=> 73.1216833,
				"lat"		=> 6.696237
			],
			[
				"postcode"	=> "02070",
				"suburb"	=> "NELLAIDHOO",
				"state"		=> "HDH",
				"lon"		=> 72.9467948,
				"lat"		=> 6.7151391
			],
			[
				"postcode"	=> "02080",
				"suburb"	=> "NOLHIVARAM",
				"state"		=> "HDH",
				"lon"		=> 73.0833224,
				"lat"		=> 6.6614421
			],
			[
				"postcode"	=> "02090",
				"suburb"	=> "KURINBI",
				"state"		=> "HDH",
				"lon"		=> 72.9969872,
				"lat"		=> 6.6654795
			],
			[
				"postcode"	=> "02100",
				"suburb"	=> "KUNBURUDHOO",
				"state"		=> "HDH",
				"lon"		=> 72.9250169,
				"lat"		=> 3.7757066
			],
			[
				"postcode"	=> "02110",
				"suburb"	=> "KULHUDHUFFUSHI",
				"state"		=> "HDH",
				"lon"		=> 73.0670909,
				"lat"		=> 6.6261633
			],
			[
				"postcode"	=> "02120",
				"suburb"	=> "KUMUNDHOO",
				"state"		=> "HDH",
				"lon"		=> 73.0508582,
				"lat"		=> 6.572931
			],
			[
				"postcode"	=> "02130",
				"suburb"	=> "NEYKURENDHOO",
				"state"		=> "HDH",
				"lon"		=> 72.9785353,
				"lat"		=> 6.5409063
			],
			[
				"postcode"	=> "02140",
				"suburb"	=> "VAIKARADHOO",
				"state"		=> "HDH",
				"lon"		=> 72.9534385,
				"lat"		=> 6.5490157
			],
			[
				"postcode"	=> "02150",
				"suburb"	=> "MAAVAIDHOO",
				"state"		=> "HDH",
				"lon"		=> 73.0538097,
				"lat"		=> 6.5165638
			],
			[
				"postcode"	=> "02160",
				"suburb"	=> "MAKUNUDHOO",
				"state"		=> "HDH",
				"lon"		=> 72.7052826,
				"lat"		=> 6.4097891
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VAIKARAMURAIDHOO",
				"state"		=> "HDH",
				"lon"		=> 72.903237,
				"lat"		=> 6.5421391
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THEEFARIDHOO",
				"state"		=> "HDH",
				"lon"		=> 73.0338865,
				"lat"		=> 6.7401151
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHIPPARUFUSHI",
				"state"		=> "HDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FENBOAHURAA",
				"state"		=> "HDH",
				"lon"		=> 73.5362222,
				"lat"		=> 2.0609808
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HIRINAIDHOO",
				"state"		=> "HDH",
				"lon"		=> 72.9486403,
				"lat"		=> 6.7020212
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HODAAFUSHI",
				"state"		=> "HDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "INNAFUSHI",
				"state"		=> "HDH",
				"lon"		=> 72.8797937,
				"lat"		=> 4.8779864
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KANAMANA",
				"state"		=> "HDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KANDINMAAHURAA",
				"state"		=> "HDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KATTALAFUSHI",
				"state"		=> "HDH",
				"lon"		=> 72.983333,
				"lat"		=> 6.566415
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KEYLAKUNU",
				"state"		=> "HDH",
				"lon"		=> 73.0095336,
				"lat"		=> 6.6023137
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAFARU",
				"state"		=> "HDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAMURAIDHOO",
				"state"		=> "HDH",
				"lon"		=> 72.9202181,
				"lat"		=> 6.643494
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MUIRI",
				"state"		=> "HDH",
				"lon"		=> 72.9357215,
				"lat"		=> 6.6588179
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "NAAGOASHI",
				"state"		=> "HDH",
				"lon"		=> 72.9039753,
				"lat"		=> 6.6686169
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "RAHBURI",
				"state"		=> "HDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "RASFUSHI",
				"state"		=> "HDH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "RUFFUSHI",
				"state"		=> "HDH",
				"lon"		=> 72.939182,
				"lat"		=> 6.7588982
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VELIGANDU",
				"state"		=> "HDH",
				"lon"		=> 73.0115631,
				"lat"		=> 4.2986312
			],
			[
				"postcode"	=> "08010",
				"suburb"	=> "KAASHIDHOO",
				"state"		=> "K",
				"lon"		=> 73.4622161,
				"lat"		=> 4.9540207
			],
			[
				"postcode"	=> "08020",
				"suburb"	=> "GAAFARU",
				"state"		=> "K",
				"lon"		=> 73.4997747,
				"lat"		=> 4.7359159
			],
			[
				"postcode"	=> "08030",
				"suburb"	=> "DHIFFUSHI",
				"state"		=> "K",
				"lon"		=> 73.7132147,
				"lat"		=> 4.4401762
			],
			[
				"postcode"	=> "08040",
				"suburb"	=> "THULUSDHOO",
				"state"		=> "K",
				"lon"		=> 73.6514134,
				"lat"		=> 4.3743687
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HURAA",
				"state"		=> "K",
				"lon"		=> 73.6013702,
				"lat"		=> 4.3336631
			],
			[
				"postcode"	=> "08060",
				"suburb"	=> "HIMMAFUSHI",
				"state"		=> "K",
				"lon"		=> 73.5704551,
				"lat"		=> 4.3094901
			],
			[
				"postcode"	=> "08070",
				"suburb"	=> "GULHI",
				"state"		=> "K",
				"lon"		=> 73.5089792,
				"lat"		=> 3.9906812
			],
			[
				"postcode"	=> "08090",
				"suburb"	=> "MAAFUSHI",
				"state"		=> "K",
				"lon"		=> 73.4894652,
				"lat"		=> 3.9408934
			],
			[
				"postcode"	=> "08080",
				"suburb"	=> "GURAIDHOO",
				"state"		=> "K",
				"lon"		=> 73.4673716,
				"lat"		=> 3.9012198
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THILAFUSHI",
				"state"		=> "K",
				"lon"		=> 73.4438026,
				"lat"		=> 4.1808598
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDA BANDOS",
				"state"		=> "K",
				"lon"		=> 73.5001429,
				"lat"		=> 4.2637859
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KANDUOIYGIRI",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "AARAH",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHOONIDHOO",
				"state"		=> "K",
				"lon"		=> 73.5141336,
				"lat"		=> 4.1968603
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FUNADHOO",
				"state"		=> "K",
				"lon"		=> 73.2905413,
				"lat"		=> 6.1488525
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GIRIFUSHI",
				"state"		=> "K",
				"lon"		=> 73.5789204,
				"lat"		=> 4.3186383
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GAAMAADHOO",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FEYDHOOFINOLHU",
				"state"		=> "K",
				"lon"		=> 73.4854149,
				"lat"		=> 4.2141157
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ASDHU",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "08480",
				"suburb"	=> "BANDOS",
				"state"		=> "K",
				"lon"		=> 73.490938,
				"lat"		=> 4.2694469
			],
			[
				"postcode"	=> "08120",
				"suburb"	=> "BAROS",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BIYAADHU",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "08140",
				"suburb"	=> "BODUHITHI",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "08160",
				"suburb"	=> "BOLIFUSHI",
				"state"		=> "K",
				"lon"		=> 73.3833333,
				"lat"		=> 4.1
			],
			[
				"postcode"	=> "08170",
				"suburb"	=> "FARUKOLHUFUSHI",
				"state"		=> "K",
				"lon"		=> 73.5443208,
				"lat"		=> 4.2308137
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "RANNALHI",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "08180",
				"suburb"	=> "MAKUNUFUSHI",
				"state"		=> "K",
				"lon"		=> 73.4697652,
				"lat"		=> 3.9179654
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHIGUFINOHLU",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "EMBOODHU",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "08210",
				"suburb"	=> "ERIYADHOO",
				"state"		=> "K",
				"lon"		=> 73.2890671,
				"lat"		=> 6.1054256
			],
			[
				"postcode"	=> "08220",
				"suburb"	=> "FIHAALHOHI",
				"state"		=> "K",
				"lon"		=> 73.3671855,
				"lat"		=> 3.8771566
			],
			[
				"postcode"	=> "08230",
				"suburb"	=> "KUDA HURAA",
				"state"		=> "K",
				"lon"		=> 73.597322,
				"lat"		=> 4.3276998
			],
			[
				"postcode"	=> "08240",
				"suburb"	=> "FURANAFUSHI",
				"state"		=> "K",
				"lon"		=> 73.5457933,
				"lat"		=> 4.2499735
			],
			[
				"postcode"	=> "08250",
				"suburb"	=> "BODUFINOLHU",
				"state"		=> "K",
				"lon"		=> 73.4566922,
				"lat"		=> 3.8572228
			],
			[
				"postcode"	=> "08260",
				"suburb"	=> "GASFINOLHU",
				"state"		=> "K",
				"lon"		=> 73.5400875,
				"lat"		=> 1.9523759
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GIRAAVARU",
				"state"		=> "K",
				"lon"		=> 73.4126802,
				"lat"		=> 4.2003614
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HELEGELI",
				"state"		=> "K",
				"lon"		=> 72.9280515,
				"lat"		=> 6.9506116
			],
			[
				"postcode"	=> "08290",
				"suburb"	=> "LANKANFUSHI",
				"state"		=> "K",
				"lon"		=> 73.5583086,
				"lat"		=> 4.2953208
			],
			[
				"postcode"	=> "08300",
				"suburb"	=> "IHURU",
				"state"		=> "K",
				"lon"		=> 73.416111,
				"lat"		=> 4.306667
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KANDOOMAFUSHI",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "08320",
				"suburb"	=> "KANIFINOLHU",
				"state"		=> "K",
				"lon"		=> 73.6083622,
				"lat"		=> 4.3434033
			],
			[
				"postcode"	=> "08330",
				"suburb"	=> "KUDAHITHI",
				"state"		=> "K",
				"lon"		=> 73.3802639,
				"lat"		=> 4.4169689
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VIHAMANAAFUSHI",
				"state"		=> "K",
				"lon"		=> 73.5203923,
				"lat"		=> 4.2269009
			],
			[
				"postcode"	=> "08350",
				"suburb"	=> "VELASSARU",
				"state"		=> "K",
				"lon"		=> 73.4368051,
				"lat"		=> 4.121301
			],
			[
				"postcode"	=> "08360",
				"suburb"	=> "LHOHIFUSHI",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MANKUNUDHOO",
				"state"		=> "K",
				"lon"		=> 72.7052826,
				"lat"		=> 6.4097891
			],
			[
				"postcode"	=> "08380",
				"suburb"	=> "MEERUFENFUSHI",
				"state"		=> "K",
				"lon"		=> 73.717222,
				"lat"		=> 4.453333
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "NAKATCHAFUSHI",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "OLHUVELI",
				"state"		=> "K",
				"lon"		=> 73.4054975,
				"lat"		=> 1.8169723
			],
			[
				"postcode"	=> "08410",
				"suburb"	=> "VELIGANDU HURAA",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "08420",
				"suburb"	=> "LANKANFINOLHU",
				"state"		=> "K",
				"lon"		=> 73.5542596,
				"lat"		=> 4.2868931
			],
			[
				"postcode"	=> "08440",
				"suburb"	=> "MEDHUFINOLHU",
				"state"		=> "K",
				"lon"		=> 72.9665409,
				"lat"		=> 5.0159099
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAHAANAELHI HURAA",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "08460",
				"suburb"	=> "ZIYAARAIYFUSHI",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KANUOIY HURAA",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THULHAGIRI",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HAMBADHU",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "08480",
				"suburb"	=> "EMBUDHU FINOLHU",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VAADHU",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "08110",
				"suburb"	=> "VABBINFARU",
				"state"		=> "K",
				"lon"		=> 73.423546,
				"lat"		=> 4.3096261
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VILIVARU",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODU HURAA",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BUSHY",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "EMBOODHOO FINOLHU",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ERRUHHURAA",
				"state"		=> "K",
				"lon"		=> 73.4163636,
				"lat"		=> 3.8146711
			],
			[
				"postcode"	=> "08170",
				"suburb"	=> "FARUKOLHUFUSHI",
				"state"		=> "K",
				"lon"		=> 73.5443208,
				"lat"		=> 4.2308137
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FEYDHOO",
				"state"		=> "K",
				"lon"		=> 73.0479067,
				"lat"		=> 6.3600652
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HEMBADHOO",
				"state"		=> "K",
				"lon"		=> 73.3937099,
				"lat"		=> 5.9672626
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KADUOIYGIRI",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KAGI",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAFINOLHU",
				"state"		=> "K",
				"lon"		=> 72.883578,
				"lat"		=> 6.9895632
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "LITTLE HURAA",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAADHOO",
				"state"		=> "K",
				"lon"		=> 73.4587177,
				"lat"		=> 3.8690469
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MADIVARU",
				"state"		=> "K",
				"lon"		=> 73.3701328,
				"lat"		=> 5.4596339
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MANIYAFUSHI",
				"state"		=> "K",
				"lon"		=> 73.4112069,
				"lat"		=> 4.0557419
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MASLEGGIHURAA",
				"state"		=> "K",
				"lon"		=> 73.5006952,
				"lat"		=> 5.5436937
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "OIDHUNIFINOLHU",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "OLHIGANDUFINOLHU",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "OLHUHALI",
				"state"		=> "K",
				"lon"		=> 73.4513524,
				"lat"		=> 4.689454
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "RASFARI",
				"state"		=> "K",
				"lon"		=> 73.3518957,
				"lat"		=> 4.3946721
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THABURUDHOO",
				"state"		=> "K",
				"lon"		=> 73.584257,
				"lat"		=> 4.3152025
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THOLHIMARAAHURAA",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THULUSDHOO IRUMATHEE HURA",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VAAGALI",
				"state"		=> "K",
				"lon"		=> 73.3558564,
				"lat"		=> 3.9485089
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VABBOAHURAA",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VALASSARU",
				"state"		=> "K",
				"lon"		=> 73.4368051,
				"lat"		=> 4.121301
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VAMMAAFUSHI",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VILLINGILIMATHIDHAHURAA",
				"state"		=> "K",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ISDHOO",
				"state"		=> "L",
				"lon"		=> 73.5623575,
				"lat"		=> 2.1163543
			],
			[
				"postcode"	=> 15020,
				"suburb"	=> "DHABIDHOO",
				"state"		=> "L",
				"lon"		=> 73.5454252,
				"lat"		=> 2.093182
			],
			[
				"postcode"	=> 15030,
				"suburb"	=> "MAABAIDHOO",
				"state"		=> "L",
				"lon"		=> 73.5321728,
				"lat"		=> 2.0270955
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MUNDOO",
				"state"		=> "L",
				"lon"		=> 73.5336454,
				"lat"		=> 2.0165222
			],
			[
				"postcode"	=> 15050,
				"suburb"	=> "KALHAIDHOO",
				"state"		=> "L",
				"lon"		=> 73.5365904,
				"lat"		=> 1.9871531
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GAN",
				"state"		=> "L",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAVAH",
				"state"		=> "L",
				"lon"		=> 73.2433624,
				"lat"		=> 1.8856397
			],
			[
				"postcode"	=> 15080,
				"suburb"	=> "FONADHOO",
				"state"		=> "L",
				"lon"		=> 73.5049293,
				"lat"		=> 1.8372299
			],
			[
				"postcode"	=> 15090,
				"suburb"	=> "GAADHOO",
				"state"		=> "L",
				"lon"		=> 73.4489586,
				"lat"		=> 1.8179674
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAMENDHOO",
				"state"		=> "L",
				"lon"		=> 73.3892894,
				"lat"		=> 1.8179892
			],
			[
				"postcode"	=> 15110,
				"suburb"	=> "HITHADHOO",
				"state"		=> "L",
				"lon"		=> 73.0892245,
				"lat"		=> -0.6060574
			],
			[
				"postcode"	=> 15120,
				"suburb"	=> "KUNAHANDHOO",
				"state"		=> "L",
				"lon"		=> 73.369396,
				"lat"		=> 1.7844713
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BARESDHOO",
				"state"		=> "L",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAANDHOO",
				"state"		=> "L",
				"lon"		=> 73.5284915,
				"lat"		=> 1.8749546
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HULHIMENDHOO",
				"state"		=> "L",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KADHDHOO",
				"state"		=> "L",
				"lon"		=> 73.5226012,
				"lat"		=> 1.8584872
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ATHAHEDHA",
				"state"		=> "L",
				"lon"		=> 73.2857502,
				"lat"		=> 1.8102832
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BILEITHEYRAHAA",
				"state"		=> "L",
				"lon"		=> 73.5347497,
				"lat"		=> 2.0544889
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUFENRAHAA",
				"state"		=> "L",
				"lon"		=> 73.2798532,
				"lat"		=> 1.8172431
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUFINOLHU",
				"state"		=> "L",
				"lon"		=> 73.4566922,
				"lat"		=> 3.8572228
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUHURAA",
				"state"		=> "L",
				"lon"		=> 73.0437561,
				"lat"		=> 6.0718722
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUHURAA",
				"state"		=> "L",
				"lon"		=> 73.0437561,
				"lat"		=> 6.0718722
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAHURAA",
				"state"		=> "L",
				"lon"		=> 73.597322,
				"lat"		=> 4.3276998
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUHURAA",
				"state"		=> "L",
				"lon"		=> 73.0437561,
				"lat"		=> 6.0718722
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUMAABULHALI",
				"state"		=> "L",
				"lon"		=> 73.2555266,
				"lat"		=> 1.8491776
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BOKAIYFUSHI",
				"state"		=> "L",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BURAHAA",
				"state"		=> "L",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHEKUNUVINAGADU",
				"state"		=> "L",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHONBERAHAA",
				"state"		=> "L",
				"lon"		=> 73.5356701,
				"lat"		=> 2.071722
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FARES",
				"state"		=> "L",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FENBOAHURAA",
				"state"		=> "L",
				"lon"		=> 73.5362222,
				"lat"		=> 2.0609808
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FENBOARAHAA",
				"state"		=> "L",
				"lon"		=> 73.2888828,
				"lat"		=> 1.8098745
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FONAGAADHOO",
				"state"		=> "L",
				"lon"		=> 73.5421122,
				"lat"		=> 2.1152493
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FUSHI",
				"state"		=> "L",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GASFINOLHU",
				"state"		=> "L",
				"lon"		=> 73.5400875,
				"lat"		=> 1.9523759
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GURAIDHOO",
				"state"		=> "L",
				"lon"		=> 73.4673716,
				"lat"		=> 3.9012198
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HAIYTHIRAHAA",
				"state"		=> "L",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HAIYTHOSHI",
				"state"		=> "L",
				"lon"		=> 73.2582912,
				"lat"		=> 1.8420379
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HANHUSHI",
				"state"		=> "L",
				"lon"		=> 73.2616085,
				"lat"		=> 1.9516041
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HEDHA",
				"state"		=> "L",
				"lon"		=> 73.2822489,
				"lat"		=> 1.8244291
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HIKANDHIRAHAA",
				"state"		=> "L",
				"lon"		=> 73.5362222,
				"lat"		=> 2.0580369
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HOLHURAHAA",
				"state"		=> "L",
				"lon"		=> 73.5391672,
				"lat"		=> 2.0686674
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HULHISDHOO",
				"state"		=> "L",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HULHIYANDHOO",
				"state"		=> "L",
				"lon"		=> 73.5410078,
				"lat"		=> 2.0801726
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KALHURAHAA",
				"state"		=> "L",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KANDARU",
				"state"		=> "L",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KANUHURAA",
				"state"		=> "L",
				"lon"		=> 73.5067702,
				"lat"		=> 5.5326472
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KASHIDHOO",
				"state"		=> "L",
				"lon"		=> 73.4622161,
				"lat"		=> 4.9540207
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KILEGERAHAA",
				"state"		=> "L",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAFARES",
				"state"		=> "L",
				"lon"		=> 73.3012289,
				"lat"		=> 1.7999073
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAFENHURAA",
				"state"		=> "L",
				"lon"		=> 73.597322,
				"lat"		=> 4.3276998
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAFUSHI",
				"state"		=> "L",
				"lon"		=> 73.3303407,
				"lat"		=> 1.7893675
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAKALHAIDHOO",
				"state"		=> "L",
				"lon"		=> 73.5360382,
				"lat"		=> 1.991997
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAMAABULHAHI",
				"state"		=> "L",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAMAHIGULI",
				"state"		=> "L",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAVESHI",
				"state"		=> "L",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAFUSHI",
				"state"		=> "L",
				"lon"		=> 73.4894652,
				"lat"		=> 3.9408934
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAKALHUVELI",
				"state"		=> "L",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAVESHI",
				"state"		=> "L",
				"lon"		=> 73.2717446,
				"lat"		=> 1.8329549
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAHAKANFUSHI",
				"state"		=> "L",
				"lon"		=> 73.5406397,
				"lat"		=> 1.9592831
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAHIGULHI",
				"state"		=> "L",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEDHUVINAGADU",
				"state"		=> "L",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MENDHOO",
				"state"		=> "L",
				"lon"		=> 72.9955111,
				"lat"		=> 5.1751022
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "OLHUTHOLHU",
				"state"		=> "L",
				"lon"		=> 73.3524483,
				"lat"		=> 1.7884049
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "OLHUVELI",
				"state"		=> "L",
				"lon"		=> 73.4054975,
				"lat"		=> 1.8169723
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THATHUNRAHAA",
				"state"		=> "L",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THUNBURI",
				"state"		=> "L",
				"lon"		=> 73.5399035,
				"lat"		=> 2.0745648
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "USFINOLHU",
				"state"		=> "L",
				"lon"		=> 73.5400875,
				"lat"		=> 1.9523759
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "UTHURUVINAGADU",
				"state"		=> "L",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "UVADHEVIFUSHI",
				"state"		=> "L",
				"lon"		=> 73.5376947,
				"lat"		=> 1.9786423
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VADINOLHU",
				"state"		=> "L",
				"lon"		=> 73.3594486,
				"lat"		=> 2.0179345
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VELIGANDUFINOLHU",
				"state"		=> "L",
				"lon"		=> 73.4092731,
				"lat"		=> 1.8299546
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ZIYAARAIFFUSHI",
				"state"		=> "L",
				"lon"		=> 73.3121002,
				"lat"		=> 1.9923252
			],
			[
				"postcode"	=> "07010",
				"suburb"	=> "HINNAVARU",
				"state"		=> "LH",
				"lon"		=> 73.4128644,
				"lat"		=> 5.4936596
			],
			[
				"postcode"	=> "07020",
				"suburb"	=> "NAIFARU",
				"state"		=> "LH",
				"lon"		=> 73.3657118,
				"lat"		=> 5.4443719
			],
			[
				"postcode"	=> "07030",
				"suburb"	=> "KURENDHOO",
				"state"		=> "LH",
				"lon"		=> 73.4644256,
				"lat"		=> 5.3336969
			],
			[
				"postcode"	=> "07040",
				"suburb"	=> "OLHUVELIFUSHI",
				"state"		=> "LH",
				"lon"		=> 73.6072583,
				"lat"		=> 5.278407
			],
			[
				"postcode"	=> "07050",
				"suburb"	=> "MAAFILAAFUSHI",
				"state"		=> "LH",
				"lon"		=> 73.4158111,
				"lat"		=> 5.362583
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FELIVARU",
				"state"		=> "LH",
				"lon"		=> 73.3863423,
				"lat"		=> 5.4777589
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KANUHURAA",
				"state"		=> "LH",
				"lon"		=> 73.5067702,
				"lat"		=> 5.5326472
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KOMANDOO",
				"state"		=> "LH",
				"lon"		=> 73.0545476,
				"lat"		=> 6.0546333
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUREDHDHOO",
				"state"		=> "LH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MADHIRIGURAIDHOO",
				"state"		=> "LH",
				"lon"		=> 73.5597809,
				"lat"		=> 5.4690733
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ALHIGAA",
				"state"		=> "LH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUFINOLHU",
				"state"		=> "LH",
				"lon"		=> 73.4566922,
				"lat"		=> 3.8572228
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BOVALHAFUSHI",
				"state"		=> "LH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHASHUGIRIFINOLHU",
				"state"		=> "LH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHERUHFINOLHU",
				"state"		=> "LH",
				"lon"		=> 73.6473663,
				"lat"		=> 5.3245183
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHIDHDHOO",
				"state"		=> "LH",
				"lon"		=> 73.113569,
				"lat"		=> 6.888644
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHIRUNBAAFUSHI",
				"state"		=> "LH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FAADHOO",
				"state"		=> "LH",
				"lon"		=> 73.6308089,
				"lat"		=> 5.4315913
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FAINUAADHAMHURAA",
				"state"		=> "LH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FARUFINOLHU",
				"state"		=> "LH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FEHIGILI",
				"state"		=> "LH",
				"lon"		=> 73.4827453,
				"lat"		=> 5.5544816
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FUSHIFARU",
				"state"		=> "LH",
				"lon"		=> 73.5156062,
				"lat"		=> 5.4911986
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GAAERIFARU",
				"state"		=> "LH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GOVAAFUSHI",
				"state"		=> "LH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HUDHUFUSHI",
				"state"		=> "LH",
				"lon"		=> 73.6558284,
				"lat"		=> 5.3578376
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HURUVALHI",
				"state"		=> "LH",
				"lon"		=> 73.4419612,
				"lat"		=> 5.5206942
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "INNAHURAA",
				"state"		=> "LH",
				"lon"		=> 73.6547247,
				"lat"		=> 5.3499272
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KALHUMANJEHURAA",
				"state"		=> "LH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KANIFUSHI",
				"state"		=> "LH",
				"lon"		=> 73.3347624,
				"lat"		=> 5.3641093
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "LHOHI",
				"state"		=> "LH",
				"lon"		=> 73.3775009,
				"lat"		=> 5.8167536
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "LHOSALAFUSHI",
				"state"		=> "LH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAKOA",
				"state"		=> "LH",
				"lon"		=> 73.4305439,
				"lat"		=> 5.3579523
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAVAAFUSHI",
				"state"		=> "LH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAABINHURAA",
				"state"		=> "LH",
				"lon"		=> 73.6528851,
				"lat"		=> 5.3375862
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MADIVARU",
				"state"		=> "LH",
				"lon"		=> 73.3701328,
				"lat"		=> 5.4596339
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MADUVVARI",
				"state"		=> "LH",
				"lon"		=> 72.8965919,
				"lat"		=> 5.4863391
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAIDHOO",
				"state"		=> "LH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEDHAADIHURAA",
				"state"		=> "LH",
				"lon"		=> 73.5029043,
				"lat"		=> 5.5409121
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEDHAFUSHI",
				"state"		=> "LH",
				"lon"		=> 72.9346142,
				"lat"		=> 7.0109217
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEEDHAAHURAA",
				"state"		=> "LH",
				"lon"		=> 73.4078918,
				"lat"		=> 5.3691344
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEYAFUSHI",
				"state"		=> "LH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "OOKOLHUFINOLHU",
				"state"		=> "LH",
				"lon"		=> 73.6230816,
				"lat"		=> 5.281666
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "RUHELHIFUSHI",
				"state"		=> "LH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THILAMAAFUSHI",
				"state"		=> "LH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "UTHURUHURAA",
				"state"		=> "LH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VARIHURAA",
				"state"		=> "LH",
				"lon"		=> 73.4881765,
				"lat"		=> 5.3033438
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VAVVARU",
				"state"		=> "LH",
				"lon"		=> 73.3544747,
				"lat"		=> 5.4180494
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VEJVAH",
				"state"		=> "LH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VELIGANDU",
				"state"		=> "LH",
				"lon"		=> 73.0115631,
				"lat"		=> 4.2986312
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VIHAFARU",
				"state"		=> "LH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> 11010,
				"suburb"	=> "RAIMANDHOO",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> 11020,
				"suburb"	=> "MADIFUSHI",
				"state"		=> "M",
				"lon"		=> 73.3539221,
				"lat"		=> 2.3556467
			],
			[
				"postcode"	=> 11030,
				"suburb"	=> "VEYVAH",
				"state"		=> "M",
				"lon"		=> 73.5998981,
				"lat"		=> 2.9568707
			],
			[
				"postcode"	=> 11040,
				"suburb"	=> "MULAH",
				"state"		=> "M",
				"lon"		=> 73.584722,
				"lat"		=> 2.947222
			],
			[
				"postcode"	=> 11050,
				"suburb"	=> "MULI",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> 11060,
				"suburb"	=> "NAALAAFUSHI",
				"state"		=> "M",
				"lon"		=> 73.5774482,
				"lat"		=> 2.8949765
			],
			[
				"postcode"	=> 11070,
				"suburb"	=> "KOLHUFUSHI",
				"state"		=> "M",
				"lon"		=> 73.4246509,
				"lat"		=> 2.7768103
			],
			[
				"postcode"	=> 11080,
				"suburb"	=> "DHIGGARU",
				"state"		=> "M",
				"lon"		=> 73.5660382,
				"lat"		=> 3.1116474
			],
			[
				"postcode"	=> 11090,
				"suburb"	=> "MADUVVARI",
				"state"		=> "M",
				"lon"		=> 72.8965919,
				"lat"		=> 5.4863391
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HAKURAA HURAA",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEDHUFUSHI",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BOAHURAA",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHEKUNUBODUVELI",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHITHTHUDI",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ERRUH-HURAA",
				"state"		=> "M",
				"lon"		=> 73.4163636,
				"lat"		=> 3.8146711
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FENBOAFINOLHU",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FENBOAKURALI",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FENFURAVELI",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GAAKURALI",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GASVELI",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GONGALIHURAA",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HURASVELI (UTHURUGASVELI)",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KAKAAHURAA",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KEKURAALHUVELI",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAUSFUSHI",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAHURAA",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAALHAVELI",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAUSFUSHI",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEDHUFUSHI",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "SEEDHEEHURAA",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "SEEDIHURAAVELIGANDU",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THUVARU",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "UTHURUBODUVELI",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VERINEIYBE",
				"state"		=> "M",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MALE'",
				"state"		=> "MALE'",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VILLINGILI",
				"state"		=> "MALE'",
				"lon"		=> 73.434227,
				"lat"		=> 0.7573413
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HULHUMALE'",
				"state"		=> "MALE'",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HULHULE",
				"state"		=> "MALE'",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HENBANDHOO",
				"state"		=> "N",
				"lon"		=> 73.3937099,
				"lat"		=> 5.9672626
			],
			[
				"postcode"	=> "04020",
				"suburb"	=> "KENDHIKOLHUDHOO",
				"state"		=> "N",
				"lon"		=> 73.422441,
				"lat"		=> 5.9433257
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THOLHENDHOO",
				"state"		=> "N",
				"lon"		=> 73.4364368,
				"lat"		=> 5.9214859
			],
			[
				"postcode"	=> "04040",
				"suburb"	=> "MAALHENDHOO",
				"state"		=> "N",
				"lon"		=> 73.4555875,
				"lat"		=> 5.9029874
			],
			[
				"postcode"	=> "04050",
				"suburb"	=> "KUDAFARI",
				"state"		=> "N",
				"lon"		=> 73.3996038,
				"lat"		=> 5.8822125
			],
			[
				"postcode"	=> "04060",
				"suburb"	=> "LANDHOO",
				"state"		=> "N",
				"lon"		=> 73.4666351,
				"lat"		=> 5.8810667
			],
			[
				"postcode"	=> "04070",
				"suburb"	=> "MAAFARU",
				"state"		=> "N",
				"lon"		=> 73.4762093,
				"lat"		=> 5.8247974
			],
			[
				"postcode"	=> "04080",
				"suburb"	=> "LHOHI",
				"state"		=> "N",
				"lon"		=> 73.3775009,
				"lat"		=> 5.8167536
			],
			[
				"postcode"	=> "04090",
				"suburb"	=> "MILADHOO",
				"state"		=> "N",
				"lon"		=> 73.3627645,
				"lat"		=> 5.7909251
			],
			[
				"postcode"	=> "04100",
				"suburb"	=> "MAGOODHOO",
				"state"		=> "N",
				"lon"		=> 72.964511,
				"lat"		=> 3.0790263
			],
			[
				"postcode"	=> "04110",
				"suburb"	=> "MANADHOO",
				"state"		=> "N",
				"lon"		=> 73.4106543,
				"lat"		=> 5.7650768
			],
			[
				"postcode"	=> "04120",
				"suburb"	=> "HOLHUDHOO",
				"state"		=> "N",
				"lon"		=> 73.26253,
				"lat"		=> 5.7549431
			],
			[
				"postcode"	=> "04130",
				"suburb"	=> "FODHDHOO",
				"state"		=> "N",
				"lon"		=> 73.2153451,
				"lat"		=> 5.7433882
			],
			[
				"postcode"	=> "04140",
				"suburb"	=> "VELIDHOO",
				"state"		=> "N",
				"lon"		=> 73.2750618,
				"lat"		=> 5.662222
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "AARAH",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BADAIDHIDHDHOO",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUFUSHI",
				"state"		=> "N",
				"lon"		=> 72.9689398,
				"lat"		=> 5.5073549
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODULHAIMENDHOO",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BOMASDHOO",
				"state"		=> "N",
				"lon"		=> 73.3450794,
				"lat"		=> 5.9733975
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BUREHIFASDHOO",
				"state"		=> "N",
				"lon"		=> 73.369396,
				"lat"		=> 5.9646031
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHEEFURAM",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHEKENANFARU",
				"state"		=> "N",
				"lon"		=> 73.1569032,
				"lat"		=> 5.9200311
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHIGURAH",
				"state"		=> "N",
				"lon"		=> 72.9290773,
				"lat"		=> 3.5359371
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHONAERIKANDOODHOO",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "EDHDHUFFARU MAIRAH",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "EKULHIVARU",
				"state"		=> "N",
				"lon"		=> 73.3067567,
				"lat"		=> 5.9505792
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ERRUHHURAA",
				"state"		=> "N",
				"lon"		=> 73.4163636,
				"lat"		=> 3.8146711
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FARUMULI",
				"state"		=> "N",
				"lon"		=> 73.4751967,
				"lat"		=> 5.8647178
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FELIVARU",
				"state"		=> "N",
				"lon"		=> 73.3863423,
				"lat"		=> 5.4777589
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FELIVARUKUDARAH",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FOHDHIPPARU",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FUSHIVELAVARU",
				"state"		=> "N",
				"lon"		=> 73.2068655,
				"lat"		=> 5.8639413
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GOABILIVAADHOO",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HOLHUMEEDHOO",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HUIVANI",
				"state"		=> "N",
				"lon"		=> 73.315601,
				"lat"		=> 5.9139706
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HULHUDHDHOO",
				"state"		=> "N",
				"lon"		=> 73.318549,
				"lat"		=> 5.8149761
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HUVADHUMAAVATTARU",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "INGURAIDHOO",
				"state"		=> "N",
				"lon"		=> 73.0331486,
				"lat"		=> 5.4632323
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KAALHUGEMENDHOO",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KADINMAAHURAA",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KAFAKOMANDOO",
				"state"		=> "N",
				"lon"		=> 73.3863423,
				"lat"		=> 5.9619437
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KALAIDHOO",
				"state"		=> "N",
				"lon"		=> 73.5365904,
				"lat"		=> 1.9883287
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KARINMA",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KARINMAVATTARU",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KEDHIVARU",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KOLHUFUSHI",
				"state"		=> "N",
				"lon"		=> 73.4246509,
				"lat"		=> 2.7768103
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAFUNAFARU",
				"state"		=> "N",
				"lon"		=> 73.3778693,
				"lat"		=> 5.8844114
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAFUSHI",
				"state"		=> "N",
				"lon"		=> 73.3303407,
				"lat"		=> 1.7893675
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUNNUMALEI",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KURAMAADHOO",
				"state"		=> "N",
				"lon"		=> 73.1445492,
				"lat"		=> 5.8731335
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUREDHIVARU",
				"state"		=> "N",
				"lon"		=> 73.3432371,
				"lat"		=> 5.8750958
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "LOAFARU",
				"state"		=> "N",
				"lon"		=> 73.275799,
				"lat"		=> 5.785773
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAFUNAFARU",
				"state"		=> "N",
				"lon"		=> 73.3657118,
				"lat"		=> 5.8608496
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAKANAAFUSHI",
				"state"		=> "N",
				"lon"		=> 73.4161334,
				"lat"		=> 5.7277859
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAKURANDHOO",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAVANDHOO",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAVELAVARU",
				"state"		=> "N",
				"lon"		=> 73.1718377,
				"lat"		=> 5.806087
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEDHAFUSHI",
				"state"		=> "N",
				"lon"		=> 72.9346142,
				"lat"		=> 7.0109217
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEDHUFARU",
				"state"		=> "N",
				"lon"		=> 73.4158111,
				"lat"		=> 5.7138711
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MINAAVARU",
				"state"		=> "N",
				"lon"		=> 73.3428686,
				"lat"		=> 5.7681277
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ORIMASVARU",
				"state"		=> "N",
				"lon"		=> 73.2094463,
				"lat"		=> 5.8319701
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ORIVARU",
				"state"		=> "N",
				"lon"		=> 73.2979121,
				"lat"		=> 5.8016628
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ORIVARUKUDARAH",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "RAAFUSHI",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "RAALHUGADU",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "RAALHULAAKOLHU",
				"state"		=> "N",
				"lon"		=> 73.4045766,
				"lat"		=> 5.6867702
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "RANDHELI",
				"state"		=> "N",
				"lon"		=> 73.3406579,
				"lat"		=> 5.6913794
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THABURUDHOO",
				"state"		=> "N",
				"lon"		=> 73.584257,
				"lat"		=> 4.3152025
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THABURUDHUFFUSHI",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THOLHENDHOO",
				"state"		=> "N",
				"lon"		=> 73.4364368,
				"lat"		=> 5.9214859
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THOSHIGANDUKOLHU",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VAVATHI",
				"state"		=> "N",
				"lon"		=> 73.2271423,
				"lat"		=> 5.7969862
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VIHAFARU",
				"state"		=> "N",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VIHAFARUFINOLHU",
				"state"		=> "N",
				"lon"		=> 73.5821408,
				"lat"		=> 5.4555702
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ALIFUSHI",
				"state"		=> "R",
				"lon"		=> 72.9534385,
				"lat"		=> 5.9668489
			],
			[
				"postcode"	=> "05020",
				"suburb"	=> "VAADHOO",
				"state"		=> "R",
				"lon"		=> 72.9925589,
				"lat"		=> 5.8570104
			],
			[
				"postcode"	=> "05030",
				"suburb"	=> "RASGETHEEMU",
				"state"		=> "R",
				"lon"		=> 73.0028915,
				"lat"		=> 5.8078884
			],
			[
				"postcode"	=> "05040",
				"suburb"	=> "ANGOLHITHEEMU",
				"state"		=> "R",
				"lon"		=> 73.0065816,
				"lat"		=> 5.7934306
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GAAUDOODHOO",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "05060",
				"suburb"	=> "UNGOOFAARU",
				"state"		=> "R",
				"lon"		=> 73.0301968,
				"lat"		=> 5.6675876
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KADHOLHUDHOO",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "05080",
				"suburb"	=> "MAAKURATHU",
				"state"		=> "R",
				"lon"		=> 73.0449551,
				"lat"		=> 5.607373
			],
			[
				"postcode"	=> "05090",
				"suburb"	=> "RASMAADHOO",
				"state"		=> "R",
				"lon"		=> 73.0442172,
				"lat"		=> 5.5625322
			],
			[
				"postcode"	=> "05100",
				"suburb"	=> "INNAMAADHOO",
				"state"		=> "R",
				"lon"		=> 73.0449551,
				"lat"		=> 5.5493044
			],
			[
				"postcode"	=> "05110",
				"suburb"	=> "MADUVVARI",
				"state"		=> "R",
				"lon"		=> 72.8965919,
				"lat"		=> 5.4863391
			],
			[
				"postcode"	=> "05020",
				"suburb"	=> "INGURAIDHOO",
				"state"		=> "R",
				"lon"		=> 73.0331486,
				"lat"		=> 5.4632323
			],
			[
				"postcode"	=> "05130",
				"suburb"	=> "FAINU",
				"state"		=> "R",
				"lon"		=> 73.0166667,
				"lat"		=> 5.4666667
			],
			[
				"postcode"	=> "05140",
				"suburb"	=> "MEEDHOO",
				"state"		=> "R",
				"lon"		=> 73.2333333,
				"lat"		=> -0.5833333
			],
			[
				"postcode"	=> "05150",
				"suburb"	=> "KINOLHAS",
				"state"		=> "R",
				"lon"		=> 73.0294589,
				"lat"		=> 5.4486412
			],
			[
				"postcode"	=> "05050",
				"suburb"	=> "HULHUDHUFFAARU",
				"state"		=> "R",
				"lon"		=> 73.0124856,
				"lat"		=> 5.7632128
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "IFURU",
				"state"		=> "R",
				"lon"		=> 73.0242932,
				"lat"		=> 5.7078803
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEEDHUPPARU",
				"state"		=> "R",
				"lon"		=> 72.9792734,
				"lat"		=> 5.4560053
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "AARAH",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ANGAAGIRI",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ARILUNDHOO",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BADAVERI",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUFARUFINOLHU",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUFENMAAEMBUDHOO",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUFUSHI",
				"state"		=> "R",
				"lon"		=> 72.9689398,
				"lat"		=> 5.5073549
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUHURAA",
				"state"		=> "R",
				"lon"		=> 73.0437561,
				"lat"		=> 6.0718722
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHEBURIDHEYTHEREYVAADHOO",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHEKUNUMAAFARU",
				"state"		=> "R",
				"lon"		=> 72.879771,
				"lat"		=> 5.4313668
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHIGALI",
				"state"		=> "R",
				"lon"		=> 72.9541767,
				"lat"		=> 5.4754261
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHIKKUREDHDHOO",
				"state"		=> "R",
				"lon"		=> 72.9574985,
				"lat"		=> 5.5773224
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHINNAAFUSHI",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHORAGALI",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHUVAAFARU",
				"state"		=> "R",
				"lon"		=> 73.0412656,
				"lat"		=> 5.6293702
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHUVAAFARUHURAA",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "EHTHIGANDUJEHIHURAA",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "EHTHIGILI",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "EKURUFUSHIFINOLHU",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FAARUFUSHI",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FASGANDUFARU",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FASMENDHOO",
				"state"		=> "R",
				"lon"		=> 72.8818243,
				"lat"		=> 5.4947223
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FENFUSHI",
				"state"		=> "R",
				"lon"		=> 72.7843357,
				"lat"		=> 3.4895769
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FILAIDHOO",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FUGGIRI",
				"state"		=> "R",
				"lon"		=> 72.8548711,
				"lat"		=> 5.7239131
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FURAVERI",
				"state"		=> "R",
				"lon"		=> 72.9084053,
				"lat"		=> 5.4401032
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GAAUDOODHOO",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GEMANA",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GIRAAVAARU",
				"state"		=> "R",
				"lon"		=> 73.4126802,
				"lat"		=> 4.2003614
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GOIYMARU",
				"state"		=> "R",
				"lon"		=> 72.8882852,
				"lat"		=> 5.6303198
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GOYYAFARU",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GUBOLHI",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODU HAIYKODI",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HIBOODHOO",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HIRAVERI",
				"state"		=> "R",
				"lon"		=> 72.8614533,
				"lat"		=> 5.5739336
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HULHUDHOO",
				"state"		=> "R",
				"lon"		=> 73.318549,
				"lat"		=> 5.8149761
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HURUVALHI",
				"state"		=> "R",
				"lon"		=> 73.4419612,
				"lat"		=> 5.5206942
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KADOOGADU",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KANDHOOMEEHUNGE LHAABUGALI",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KOTHAAFARU",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KOTTEFARU",
				"state"		=> "R",
				"lon"		=> 73.0423725,
				"lat"		=> 5.5098145
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAFENMAAEMBUDHOO",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAFUSHI",
				"state"		=> "R",
				"lon"		=> 73.3303407,
				"lat"		=> 1.7893675
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAKURATHU",
				"state"		=> "R",
				"lon"		=> 73.0449551,
				"lat"		=> 5.5846434
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDALHOSGIRI",
				"state"		=> "R",
				"lon"		=> 72.9192952,
				"lat"		=> 5.6129435
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDATHULHAADHOO",
				"state"		=> "R",
				"lon"		=> 72.8986223,
				"lat"		=> 5.4075827
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUKULHUDHOO",
				"state"		=> "R",
				"lon"		=> 72.8711172,
				"lat"		=> 5.4594693
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUREDHDHOO",
				"state"		=> "R",
				"lon"		=> 73.4644256,
				"lat"		=> 5.3336969
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUROSHIGIRI",
				"state"		=> "R",
				"lon"		=> 72.8506248,
				"lat"		=> 5.5138006
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "LHAABUGALI",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "LHOHI",
				"state"		=> "R",
				"lon"		=> 73.3775009,
				"lat"		=> 5.8167536
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "LIBOAKANDHOO",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "LUNDHUFUSHI",
				"state"		=> "R",
				"lon"		=> 72.9870234,
				"lat"		=> 5.6444918
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAMINGILI",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAMUNAGAU",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAMUNAGAUFINOLHU",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAANENFUSHI",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAASHIGIRI",
				"state"		=> "R",
				"lon"		=> 72.8268071,
				"lat"		=> 5.5141994
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MADIVAAFARU",
				"state"		=> "R",
				"lon"		=> 72.9898834,
				"lat"		=> 5.6086577
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAHIDHOO",
				"state"		=> "R",
				"lon"		=> 72.9462412,
				"lat"		=> 5.5566466
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEEDHUPPARU",
				"state"		=> "R",
				"lon"		=> 72.9792734,
				"lat"		=> 5.4560053
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MINAADHOO",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MULLAAFUSHI",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MURAVANDHOO",
				"state"		=> "R",
				"lon"		=> 72.9527004,
				"lat"		=> 5.6077868
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "NEYO",
				"state"		=> "R",
				"lon"		=> 73.0604504,
				"lat"		=> 6.4507611
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ORIMASFUSHI",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THAAVATHAA",
				"state"		=> "R",
				"lon"		=> 72.9752139,
				"lat"		=> 5.4845417
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "UFULANDHOO",
				"state"		=> "R",
				"lon"		=> 72.9128351,
				"lat"		=> 5.4641478
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "UGULU",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "UTHURUMAAFARU",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VAFFUSHIHURAA",
				"state"		=> "R",
				"lon"		=> 72.8399164,
				"lat"		=> 5.6427505
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VAHFUSHI",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VANDHOO",
				"state"		=> "R",
				"lon"		=> 72.9416274,
				"lat"		=> 2.292053
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VEYVEH",
				"state"		=> "R",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VILLINGILI",
				"state"		=> "R",
				"lon"		=> 73.434227,
				"lat"		=> 0.7573413
			],
			[
				"postcode"	=> 19010,
				"suburb"	=> "MEEDHOO",
				"state"		=> "S",
				"lon"		=> 73.2333333,
				"lat"		=> -0.5833333
			],
			[
				"postcode"	=> 19020,
				"suburb"	=> "HITHADHOO",
				"state"		=> "S",
				"lon"		=> 73.0892245,
				"lat"		=> -0.6060574
			],
			[
				"postcode"	=> 19030,
				"suburb"	=> "MARADHOO",
				"state"		=> "S",
				"lon"		=> 73.1207847,
				"lat"		=> -0.6680918
			],
			[
				"postcode"	=> 19040,
				"suburb"	=> "FEYDHOO",
				"state"		=> "S",
				"lon"		=> 73.0479067,
				"lat"		=> 6.3600652
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MARADHOO-FEYDHOO",
				"state"		=> "S",
				"lon"		=> 73.1253715,
				"lat"		=> -0.673689
			],
			[
				"postcode"	=> 19060,
				"suburb"	=> "HULHUDHOO",
				"state"		=> "S",
				"lon"		=> 73.318549,
				"lat"		=> 5.8149761
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HULHUMEEDHOO",
				"state"		=> "S",
				"lon"		=> 73.2323033,
				"lat"		=> -0.5872364
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GAN",
				"state"		=> "S",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BEDEYAURAH",
				"state"		=> "S",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUHAJARA",
				"state"		=> "S",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUKALHUHERA",
				"state"		=> "S",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHEERONDI",
				"state"		=> "S",
				"lon"		=> 73.0875645,
				"lat"		=> -0.5948605
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHIGIHERA",
				"state"		=> "S",
				"lon"		=> 73.1309037,
				"lat"		=> -0.6864879
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GOMAHERA",
				"state"		=> "S",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HANKEDE",
				"state"		=> "S",
				"lon"		=> 73.1115964,
				"lat"		=> -0.6558394
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HASSANBEAARAH",
				"state"		=> "S",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HERETHERE",
				"state"		=> "S",
				"lon"		=> 73.1945143,
				"lat"		=> -0.673509
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HIKAHERA",
				"state"		=> "S",
				"lon"		=> 73.2217968,
				"lat"		=> -0.5799772
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KAFATHALHAAHERA",
				"state"		=> "S",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KAN'DIHERA",
				"state"		=> "S",
				"lon"		=> 73.1490668,
				"lat"		=> -0.6119901
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KEDAVAAHERA",
				"state"		=> "S",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAMAAHERA",
				"state"		=> "S",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KAOHERA",
				"state"		=> "S",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAHERA",
				"state"		=> "S",
				"lon"		=> 73.0903311,
				"lat"		=> -0.5955775
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MULIKE'DE",
				"state"		=> "S",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "SAVAAHELI",
				"state"		=> "S",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VILLINGILI",
				"state"		=> "S",
				"lon"		=> 73.434227,
				"lat"		=> 0.7573413
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THUN'BAFUSHI",
				"state"		=> "S",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "03010",
				"suburb"	=> "KANDITHEEMU",
				"state"		=> "SH",
				"lon"		=> 72.9180032,
				"lat"		=> 6.4401357
			],
			[
				"postcode"	=> "03020",
				"suburb"	=> "NOOMARAA",
				"state"		=> "SH",
				"lon"		=> 73.0693043,
				"lat"		=> 6.4344047
			],
			[
				"postcode"	=> "03030",
				"suburb"	=> "GOIDHOO",
				"state"		=> "SH",
				"lon"		=> 72.9298156,
				"lat"		=> 6.4302973
			],
			[
				"postcode"	=> "03040",
				"suburb"	=> "FEYDHOO",
				"state"		=> "SH",
				"lon"		=> 73.0479067,
				"lat"		=> 6.3600652
			],
			[
				"postcode"	=> "03050",
				"suburb"	=> "FEEVAH",
				"state"		=> "SH",
				"lon"		=> 73.2101837,
				"lat"		=> 6.3501213
			],
			[
				"postcode"	=> "03060",
				"suburb"	=> "BILEHFFAHI",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "03070",
				"suburb"	=> "FOAKAIDHOO",
				"state"		=> "SH",
				"lon"		=> 73.148237,
				"lat"		=> 6.3250312
			],
			[
				"postcode"	=> "03080",
				"suburb"	=> "NARUDHOO",
				"state"		=> "SH",
				"lon"		=> 73.2190318,
				"lat"		=> 6.2634203
			],
			[
				"postcode"	=> "03090",
				"suburb"	=> "MAAKANDOODHOO",
				"state"		=> "SH",
				"lon"		=> 73.2691646,
				"lat"		=> 6.2343758
			],
			[
				"postcode"	=> "03100",
				"suburb"	=> "MAROSHI",
				"state"		=> "SH",
				"lon"		=> 73.0619261,
				"lat"		=> 6.2091008
			],
			[
				"postcode"	=> "03110",
				"suburb"	=> "LHAIMAGU",
				"state"		=> "SH",
				"lon"		=> 73.251472,
				"lat"		=> 6.1648319
			],
			[
				"postcode"	=> "03120",
				"suburb"	=> "FIRUBAIDHOO",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> "03130",
				"suburb"	=> "KOMANDOO",
				"state"		=> "SH",
				"lon"		=> 73.0545476,
				"lat"		=> 6.0546333
			],
			[
				"postcode"	=> "03140",
				"suburb"	=> "MAAUNGOODHOO",
				"state"		=> "SH",
				"lon"		=> 73.2846445,
				"lat"		=> 6.0377289
			],
			[
				"postcode"	=> "03150",
				"suburb"	=> "FUNADHOO",
				"state"		=> "SH",
				"lon"		=> 73.2905413,
				"lat"		=> 6.1488525
			],
			[
				"postcode"	=> "03160",
				"suburb"	=> "MILANDHOO",
				"state"		=> "SH",
				"lon"		=> 73.2455741,
				"lat"		=> 6.2847483
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "NILANDHOO",
				"state"		=> "SH",
				"lon"		=> 72.8914233,
				"lat"		=> 3.0556098
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KEEKIMINI",
				"state"		=> "SH",
				"lon"		=> 73.1120936,
				"lat"		=> 6.0068315
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BISALHAAHURAA",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUHURAA",
				"state"		=> "SH",
				"lon"		=> 73.0437561,
				"lat"		=> 6.0718722
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BOLISSAFARU",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHIGURAH",
				"state"		=> "SH",
				"lon"		=> 72.9290773,
				"lat"		=> 3.5359371
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHIGUVELIDHOO",
				"state"		=> "SH",
				"lon"		=> 73.0873801,
				"lat"		=> 6.0197263
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHOLHIYADHOO",
				"state"		=> "SH",
				"lon"		=> 73.2164511,
				"lat"		=> 5.9977092
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHONVELIHURAA",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DOLHIYADHOO KUDARAH",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ERIADHOO",
				"state"		=> "SH",
				"lon"		=> 73.2890671,
				"lat"		=> 6.1054256
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ESKASDHOO",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FARUKOLHU",
				"state"		=> "SH",
				"lon"		=> 73.2993862,
				"lat"		=> 6.1925491
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FUSHIFARU",
				"state"		=> "SH",
				"lon"		=> 73.5156062,
				"lat"		=> 5.4911986
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GAAKOSHIBEE",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GALLAIDHOO",
				"state"		=> "SH",
				"lon"		=> 73.124265,
				"lat"		=> 5.9693771
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HAHFATHIGADU",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HIRUBADHOO",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HURASFARU",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KA'BAALIFARU",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KAKAAERIADHOO",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDADHOO",
				"state"		=> "SH",
				"lon"		=> 72.9078515,
				"lat"		=> 6.4361071
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAFARUFINOLHU",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAFARUHURAA",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAFUNADHOO",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDALHAIMENDHOO",
				"state"		=> "SH",
				"lon"		=> 73.2960694,
				"lat"		=> 6.0167523
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MADIDHOO",
				"state"		=> "SH",
				"lon"		=> 73.1098806,
				"lat"		=> 6.3032963
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MADIKUREDHDHOO",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MATHIKOMANDOO",
				"state"		=> "SH",
				"lon"		=> 73.046062,
				"lat"		=> 6.0572261
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEDHUKUBURUDHOO",
				"state"		=> "SH",
				"lon"		=> 73.0309348,
				"lat"		=> 6.1966013
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEDHURAH",
				"state"		=> "SH",
				"lon"		=> 73.0790802,
				"lat"		=> 6.0231211
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MIGOODHOO",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MULEEHURAA",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "NAAINFARU",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "NAALAAHURAA",
				"state"		=> "SH",
				"lon"		=> 73.0366537,
				"lat"		=> 6.1277711
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "NALANDHOO",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "NARURIBUDHOO",
				"state"		=> "SH",
				"lon"		=> 73.195436,
				"lat"		=> 6.2805462
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "NEYO",
				"state"		=> "SH",
				"lon"		=> 73.0604504,
				"lat"		=> 6.4507611
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VAGARU",
				"state"		=> "SH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> 14010,
				"suburb"	=> "BURUNI",
				"state"		=> "TH",
				"lon"		=> 73.1076675,
				"lat"		=> 2.5589355
			],
			[
				"postcode"	=> 14020,
				"suburb"	=> "VILUFUSHI",
				"state"		=> "TH",
				"lon"		=> 73.3082308,
				"lat"		=> 2.5045603
			],
			[
				"postcode"	=> 14030,
				"suburb"	=> "MADIFUSHI",
				"state"		=> "TH",
				"lon"		=> 73.3539221,
				"lat"		=> 2.3556467
			],
			[
				"postcode"	=> 14040,
				"suburb"	=> "DHIYAMIGILI",
				"state"		=> "TH",
				"lon"		=> 73.3362363,
				"lat"		=> 2.33885
			],
			[
				"postcode"	=> 14050,
				"suburb"	=> "GURAIDHOO",
				"state"		=> "TH",
				"lon"		=> 73.4673716,
				"lat"		=> 3.9012198
			],
			[
				"postcode"	=> 14060,
				"suburb"	=> "KANDOODHOO",
				"state"		=> "TH",
				"lon"		=> 72.9172649,
				"lat"		=> 2.3206804
			],
			[
				"postcode"	=> 14070,
				"suburb"	=> "VANDHOO",
				"state"		=> "TH",
				"lon"		=> 72.9416274,
				"lat"		=> 2.292053
			],
			[
				"postcode"	=> 14080,
				"suburb"	=> "HIRILANDHOO",
				"state"		=> "TH",
				"lon"		=> 72.9305538,
				"lat"		=> 2.2712658
			],
			[
				"postcode"	=> 14090,
				"suburb"	=> "GAADHIFFUSHI",
				"state"		=> "TH",
				"lon"		=> 73.2123957,
				"lat"		=> 2.2522215
			],
			[
				"postcode"	=> 14100,
				"suburb"	=> "THIMARAFUSHI",
				"state"		=> "TH",
				"lon"		=> 73.1489746,
				"lat"		=> 2.2089896
			],
			[
				"postcode"	=> 14110,
				"suburb"	=> "VEYMANDOO",
				"state"		=> "TH",
				"lon"		=> 73.0951264,
				"lat"		=> 2.1877317
			],
			[
				"postcode"	=> 14120,
				"suburb"	=> "KINBIDHOO",
				"state"		=> "TH",
				"lon"		=> 73.066353,
				"lat"		=> 2.1679599
			],
			[
				"postcode"	=> 14130,
				"suburb"	=> "OMADHOO",
				"state"		=> "TH",
				"lon"		=> 72.9630347,
				"lat"		=> 3.7920205
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FONDHOO",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KANIMEEDHOO",
				"state"		=> "TH",
				"lon"		=> 73.1120936,
				"lat"		=> 2.1955899
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUFINOLHU",
				"state"		=> "TH",
				"lon"		=> 73.4566922,
				"lat"		=> 3.8572228
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUREHAA",
				"state"		=> "TH",
				"lon"		=> 73.2267736,
				"lat"		=> 2.2656805
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHIFFUSHI",
				"state"		=> "TH",
				"lon"		=> 73.7132147,
				"lat"		=> 4.4401762
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHONANFUSHI",
				"state"		=> "TH",
				"lon"		=> 73.3150483,
				"lat"		=> 2.4899459
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "DHURUREHAA",
				"state"		=> "TH",
				"lon"		=> 73.0121166,
				"lat"		=> 2.1682178
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "EKRUFFUSHI",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ELAA",
				"state"		=> "TH",
				"lon"		=> 73.0796335,
				"lat"		=> 2.1716464
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FENFUSHI",
				"state"		=> "TH",
				"lon"		=> 72.7843357,
				"lat"		=> 3.4895769
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FENMEERUFUSHI",
				"state"		=> "TH",
				"lon"		=> 73.2335936,
				"lat"		=> 2.2706354
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FONIDHAANI",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FUNADDHOO",
				"state"		=> "TH",
				"lon"		=> 73.2905413,
				"lat"		=> 6.1488525
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FUSHI",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FUSHIFARU",
				"state"		=> "TH",
				"lon"		=> 73.5156062,
				"lat"		=> 5.4911986
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GAALEE",
				"state"		=> "TH",
				"lon"		=> 73.1545062,
				"lat"		=> 2.5473846
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "GAATHUREHAA",
				"state"		=> "TH",
				"lon"		=> 73.0158066,
				"lat"		=> 2.1700267
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HATHIFUSHI",
				"state"		=> "TH",
				"lon"		=> 72.8304999,
				"lat"		=> 7.019956
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HIKANDHILOHI",
				"state"		=> "TH",
				"lon"		=> 73.2267736,
				"lat"		=> 2.520421
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HIRIYANFUSHI",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HODELIFUSHI",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HULHIYANFUSHI",
				"state"		=> "TH",
				"lon"		=> 73.2181101,
				"lat"		=> 2.2586375
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KAADHOO",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KADUFUSHI",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KAFIDHOO",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KAKOLHAS",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KALHUDHEYFUSHI",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KALHUFAHALAFUSHI",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KANDARU",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KANI",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KOLAFUSHI",
				"state"		=> "TH",
				"lon"		=> 73.2236401,
				"lat"		=> 2.2637235
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KOLHUFUSHI",
				"state"		=> "TH",
				"lon"		=> 73.4246509,
				"lat"		=> 2.7768103
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KOLHUFUSHI",
				"state"		=> "TH",
				"lon"		=> 73.4246509,
				"lat"		=> 2.7768103
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDADHOO",
				"state"		=> "TH",
				"lon"		=> 72.9078515,
				"lat"		=> 6.4361071
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDADHOOFINOLHU",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAKAADHOO",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDAKIBIDHOO",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KURADHUVARU",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUREDHIFUSHI",
				"state"		=> "TH",
				"lon"		=> 73.0338865,
				"lat"		=> 2.1675859
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "LHAVADDOO",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MAAGULHI",
				"state"		=> "TH",
				"lon"		=> 73.1795812,
				"lat"		=> 2.5382127
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MALEAFUSHI",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MATHIDHOO",
				"state"		=> "TH",
				"lon"		=> 73.3425002,
				"lat"		=> 2.3463274
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "MEDHAFUSHI",
				"state"		=> "TH",
				"lon"		=> 72.9346142,
				"lat"		=> 7.0109217
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "OLHUDHIYAFUSHI",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "OLHUFUSHI",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "OLHUFUSHIFINOLHU",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "OLHUGIRI",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "RIHAAMAAFUSHI",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "RUTHTHIBIRAH",
				"state"		=> "TH",
				"lon"		=> 73.0527029,
				"lat"		=> 2.1680971
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THINKOLHUFUSHI",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "UFURIYAA",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "USFUSHI",
				"state"		=> "TH",
				"lon"		=> 73.2048378,
				"lat"		=> 2.2463754
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VANBADHI",
				"state"		=> "TH",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> 10010,
				"suburb"	=> "FULIDHOO",
				"state"		=> "V",
				"lon"		=> 73.4158111,
				"lat"		=> 3.6801817
			],
			[
				"postcode"	=> 10020,
				"suburb"	=> "THINADHOO",
				"state"		=> "V",
				"lon"		=> 72.9977252,
				"lat"		=> 0.531061
			],
			[
				"postcode"	=> 10030,
				"suburb"	=> "FELIDHOO",
				"state"		=> "V",
				"lon"		=> 73.5468976,
				"lat"		=> 3.4720236
			],
			[
				"postcode"	=> 10040,
				"suburb"	=> "KEYODHOO",
				"state"		=> "V",
				"lon"		=> 73.5494743,
				"lat"		=> 3.4620471
			],
			[
				"postcode"	=> 10050,
				"suburb"	=> "RAKEEDHOO",
				"state"		=> "V",
				"lon"		=> 73.4699493,
				"lat"		=> 3.3151436
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "ANBARAA",
				"state"		=> "V",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "BODUMOHURAA",
				"state"		=> "V",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> 10060,
				"suburb"	=> "ALIMATHA",
				"state"		=> "V",
				"lon"		=> 73.4979338,
				"lat"		=> 3.5936813
			],
			[
				"postcode"	=> 10070,
				"suburb"	=> "DHIGGIRI",
				"state"		=> "V",
				"lon"		=> 72.9149578,
				"lat"		=> 3.8586877
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "AARAH",
				"state"		=> "V",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "FOTHTHEYO BODUFUSHI",
				"state"		=> "V",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "HULHIDHOO",
				"state"		=> "V",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUDHIBOLI",
				"state"		=> "V",
				"lon"		=> 73.3647908,
				"lat"		=> 3.6367081
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "KUNAAVASHI",
				"state"		=> "V",
				"lon"		=> 73.3688434,
				"lat"		=> 3.6188212
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "RAGGADU",
				"state"		=> "V",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "RUHHURIHURAA",
				"state"		=> "V",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "THUDUHURAA",
				"state"		=> "V",
				"lon"		=> NULL,
				"lat"		=> NULL
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VASHUGIRI",
				"state"		=> "V",
				"lon"		=> 73.3778693,
				"lat"		=> 3.6297993
			],
			[
				"postcode"	=> NULL,
				"suburb"	=> "VATTARU",
				"state"		=> "V",
				"lon"		=> NULL,
				"lat"		=> NULL
			]
        ]);
    }
}
