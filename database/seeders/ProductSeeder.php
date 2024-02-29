<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'product_code' => 'S10_1678',
            'product_name' => '1969 Harley Davidson Ultimate Chopper',
            'product_line' => 'Motorcycles',
            'product_scale' => '1:10',
            'product_vendor' => 'Min Lin Diecast',
            'product_description' => 'This replica features working kickstand, front suspension, gear-shift lever, footbrake lever, drive chain, wheels and steering. All parts are particularly delicate due to their precise scale and require special care and attention.',
            'quantity_in_stock' => 7933,
            'buy_price' => '48.81',
            'MSRP' => '95.70'
        ]);



        Product::create([
            'product_code' => 'S10_1949',
            'product_name' => '1952 Alpine Renault 1300',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:10',
            'product_vendor' => 'Classic Metal Creations',
            'product_description' => 'Turnable front wheels; steering function; detailed interior; detailed engine; opening hood; opening trunk; opening doors; and detailed chassis.',
            'quantity_in_stock' => 7305,
            'buy_price' => '98.58',
            'MSRP' => '214.30'
        ]);



        Product::create([
            'product_code' => 'S10_2016',
            'product_name' => '1996 Moto Guzzi 1100i',
            'product_line' => 'Motorcycles',
            'product_scale' => '1:10',
            'product_vendor' => 'Highway 66 Mini Classics',
            'product_description' => 'Official Moto Guzzi logos and insignias, saddle bags located on side of motorcycle, detailed engine, working steering, working suspension, two leather seats, luggage rack, dual exhaust pipes, small saddle bag located on handle bars, two-tone paint with chrome accents, superior die-cast detail , rotating wheels , working kick stand, diecast metal with plastic parts and baked enamel finish.',
            'quantity_in_stock' => 6625,
            'buy_price' => '68.99',
            'MSRP' => '118.94'
        ]);



        Product::create([
            'product_code' => 'S10_4698',
            'product_name' => '2003 Harley-Davidson Eagle Drag Bike',
            'product_line' => 'Motorcycles',
            'product_scale' => '1:10',
            'product_vendor' => 'Red Start Diecast',
            'product_description' => 'Model features, official Harley Davidson logos and insignias, detachable rear wheelie bar, heavy diecast metal with resin parts, authentic multi-color tampo-printed graphics, separate engine drive belts, free-turning front fork, rotating tires and rear racing slick, certificate of authenticity, detailed engine, display stand\r\n, precision diecast replica, baked enamel finish, 1:10 scale model, removable fender, seat and tank cover piece for displaying the superior detail of the v-twin engine',
            'quantity_in_stock' => 5582,
            'buy_price' => '91.02',
            'MSRP' => '193.66'
        ]);



        Product::create([
            'product_code' => 'S10_4757',
            'product_name' => '1972 Alfa Romeo GTA',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:10',
            'product_vendor' => 'Motor City Art Classics',
            'product_description' => 'Features include: Turnable front wheels; steering function; detailed interior; detailed engine; opening hood; opening trunk; opening doors; and detailed chassis.',
            'quantity_in_stock' => 3252,
            'buy_price' => '85.68',
            'MSRP' => '136.00'
        ]);



        Product::create([
            'product_code' => 'S10_4962',
            'product_name' => '1962 LanciaA Delta 16V',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:10',
            'product_vendor' => 'Second Gear Diecast',
            'product_description' => 'Features include: Turnable front wheels; steering function; detailed interior; detailed engine; opening hood; opening trunk; opening doors; and detailed chassis.',
            'quantity_in_stock' => 6791,
            'buy_price' => '103.42',
            'MSRP' => '147.74'
        ]);



        Product::create([
            'product_code' => 'S12_1099',
            'product_name' => '1968 Ford Mustang',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:12',
            'product_vendor' => 'Autoart Studio Design',
            'product_description' => 'Hood, doors and trunk all open to reveal highly detailed interior features. Steering wheel actually turns the front wheels. Color dark green.',
            'quantity_in_stock' => 68,
            'buy_price' => '95.34',
            'MSRP' => '194.57'
        ]);



        Product::create([
            'product_code' => 'S12_1108',
            'product_name' => '2001 Ferrari Enzo',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:12',
            'product_vendor' => 'Second Gear Diecast',
            'product_description' => 'Turnable front wheels; steering function; detailed interior; detailed engine; opening hood; opening trunk; opening doors; and detailed chassis.',
            'quantity_in_stock' => 3619,
            'buy_price' => '95.59',
            'MSRP' => '207.80'
        ]);



        Product::create([
            'product_code' => 'S12_1666',
            'product_name' => '1958 Setra Bus',
            'product_line' => 'Trucks and Buses',
            'product_scale' => '1:12',
            'product_vendor' => 'Welly Diecast Productions',
            'product_description' => 'Model features 30 windows, skylights & glare resistant glass, working steering system, original logos',
            'quantity_in_stock' => 1579,
            'buy_price' => '77.90',
            'MSRP' => '136.67'
        ]);



        Product::create([
            'product_code' => 'S12_2823',
            'product_name' => '2002 Suzuki XREO',
            'product_line' => 'Motorcycles',
            'product_scale' => '1:12',
            'product_vendor' => 'Unimax Art Galleries',
            'product_description' => 'Official logos and insignias, saddle bags located on side of motorcycle, detailed engine, working steering, working suspension, two leather seats, luggage rack, dual exhaust pipes, small saddle bag located on handle bars, two-tone paint with chrome accents, superior die-cast detail , rotating wheels , working kick stand, diecast metal with plastic parts and baked enamel finish.',
            'quantity_in_stock' => 9997,
            'buy_price' => '66.27',
            'MSRP' => '150.62'
        ]);



        Product::create([
            'product_code' => 'S12_3148',
            'product_name' => '1969 Corvair Monza',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Welly Diecast Productions',
            'product_description' => '1:18 scale die-cast about 10\" long doors open, hood opens, trunk opens and wheels roll',
            'quantity_in_stock' => 6906,
            'buy_price' => '89.14',
            'MSRP' => '151.08'
        ]);



        Product::create([
            'product_code' => 'S12_3380',
            'product_name' => '1968 Dodge Charger',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:12',
            'product_vendor' => 'Welly Diecast Productions',
            'product_description' => '1:12 scale model of a 1968 Dodge Charger. Hood, doors and trunk all open to reveal highly detailed interior features. Steering wheel actually turns the front wheels. Color black',
            'quantity_in_stock' => 9123,
            'buy_price' => '75.16',
            'MSRP' => '117.44'
        ]);



        Product::create([
            'product_code' => 'S12_3891',
            'product_name' => '1969 Ford Falcon',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:12',
            'product_vendor' => 'Second Gear Diecast',
            'product_description' => 'Turnable front wheels; steering function; detailed interior; detailed engine; opening hood; opening trunk; opening doors; and detailed chassis.',
            'quantity_in_stock' => 1049,
            'buy_price' => '83.05',
            'MSRP' => '173.02'
        ]);



        Product::create([
            'product_code' => 'S12_3990',
            'product_name' => '1970 Plymouth Hemi Cuda',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:12',
            'product_vendor' => 'Studio M Art Models',
            'product_description' => 'Very detailed 1970 Plymouth Cuda model in 1:12 scale. The Cuda is generally accepted as one of the fastest original muscle cars from the 1970s. This model is a reproduction of one of the orginal 652 cars built in 1970. Red color.',
            'quantity_in_stock' => 5663,
            'buy_price' => '31.92',
            'MSRP' => '79.80'
        ]);



        Product::create([
            'product_code' => 'S12_4473',
            'product_name' => '1957 Chevy Pickup',
            'product_line' => 'Trucks and Buses',
            'product_scale' => '1:12',
            'product_vendor' => 'Exoto Designs',
            'product_description' => '1:12 scale die-cast about 20\" long Hood opens, Rubber wheels',
            'quantity_in_stock' => 6125,
            'buy_price' => '55.70',
            'MSRP' => '118.50'
        ]);



        Product::create([
            'product_code' => 'S12_4675',
            'product_name' => '1969 Dodge Charger',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:12',
            'product_vendor' => 'Welly Diecast Productions',
            'product_description' => 'Detailed model of the 1969 Dodge Charger. This model includes finely detailed interior and exterior features. Painted in red and white.',
            'quantity_in_stock' => 7323,
            'buy_price' => '58.73',
            'MSRP' => '115.16'
        ]);



        Product::create([
            'product_code' => 'S18_1097',
            'product_name' => '1940 Ford Pickup Truck',
            'product_line' => 'Trucks and Buses',
            'product_scale' => '1:18',
            'product_vendor' => 'Studio M Art Models',
            'product_description' => 'This model features soft rubber tires, working steering, rubber mud guards, authentic Ford logos, detailed undercarriage, opening doors and hood,  removable split rear gate, full size spare mounted in bed, detailed interior with opening glove box',
            'quantity_in_stock' => 2613,
            'buy_price' => '58.33',
            'MSRP' => '116.67'
        ]);



        Product::create([
            'product_code' => 'S18_1129',
            'product_name' => '1993 Mazda RX-7',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Highway 66 Mini Classics',
            'product_description' => 'This model features, opening hood, opening doors, detailed engine, rear spoiler, opening trunk, working steering, tinted windows, baked enamel finish. Color red.',
            'quantity_in_stock' => 3975,
            'buy_price' => '83.51',
            'MSRP' => '141.54'
        ]);



        Product::create([
            'product_code' => 'S18_1342',
            'product_name' => '1937 Lincoln Berline',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Motor City Art Classics',
            'product_description' => 'Features opening engine cover, doors, trunk, and fuel filler cap. Color black',
            'quantity_in_stock' => 8693,
            'buy_price' => '60.62',
            'MSRP' => '102.74'
        ]);



        Product::create([
            'product_code' => 'S18_1367',
            'product_name' => '1936 Mercedes-Benz 500K Special Roadster',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Studio M Art Models',
            'product_description' => 'This 1:18 scale replica is constructed of heavy die-cast metal and has all the features of the original: working doors and rumble seat, independent spring suspension, detailed interior, working steering system, and a bifold hood that reveals an engine so accurate that it even includes the wiring. All this is topped off with a baked enamel finish. Color white.',
            'quantity_in_stock' => 8635,
            'buy_price' => '24.26',
            'MSRP' => '53.91'
        ]);



        Product::create([
            'product_code' => 'S18_1589',
            'product_name' => '1965 Aston Martin DB5',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Classic Metal Creations',
            'product_description' => 'Die-cast model of the silver 1965 Aston Martin DB5 in silver. This model includes full wire wheels and doors that open with fully detailed passenger compartment. In 1:18 scale, this model measures approximately 10 inches/20 cm long.',
            'quantity_in_stock' => 9042,
            'buy_price' => '65.96',
            'MSRP' => '124.44'
        ]);



        Product::create([
            'product_code' => 'S18_1662',
            'product_name' => '1980s Black Hawk Helicopter',
            'product_line' => 'Planes',
            'product_scale' => '1:18',
            'product_vendor' => 'Red Start Diecast',
            'product_description' => '1:18 scale replica of actual Army\'s UH-60L BLACK HAWK Helicopter. 100% hand-assembled. Features rotating rotor blades, propeller blades and rubber wheels.',
            'quantity_in_stock' => 5330,
            'buy_price' => '77.27',
            'MSRP' => '157.69'
        ]);



        Product::create([
            'product_code' => 'S18_1749',
            'product_name' => '1917 Grand Touring Sedan',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Welly Diecast Productions',
            'product_description' => 'This 1:18 scale replica of the 1917 Grand Touring car has all the features you would expect from museum quality reproductions: all four doors and bi-fold hood opening, detailed engine and instrument panel, chrome-look trim, and tufted upholstery, all topped off with a factory baked-enamel finish.',
            'quantity_in_stock' => 2724,
            'buy_price' => '86.70',
            'MSRP' => '170.00'
        ]);



        Product::create([
            'product_code' => 'S18_1889',
            'product_name' => '1948 Porsche 356-A Roadster',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Gearbox Collectibles',
            'product_description' => 'This precision die-cast replica features opening doors, superb detail and craftsmanship, working steering system, opening forward compartment, opening rear trunk with removable spare, 4 wheel independent spring suspension as well as factory baked enamel finish.',
            'quantity_in_stock' => 8826,
            'buy_price' => '53.90',
            'MSRP' => '77.00'
        ]);



        Product::create([
            'product_code' => 'S18_1984',
            'product_name' => '1995 Honda Civic',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Min Lin Diecast',
            'product_description' => 'This model features, opening hood, opening doors, detailed engine, rear spoiler, opening trunk, working steering, tinted windows, baked enamel finish. Color yellow.',
            'quantity_in_stock' => 9772,
            'buy_price' => '93.89',
            'MSRP' => '142.25'
        ]);



        Product::create([
            'product_code' => 'S18_2238',
            'product_name' => '1998 Chrysler Plymouth Prowler',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Gearbox Collectibles',
            'product_description' => 'Turnable front wheels; steering function; detailed interior; detailed engine; opening hood; opening trunk; opening doors; and detailed chassis.',
            'quantity_in_stock' => 4724,
            'buy_price' => '101.51',
            'MSRP' => '163.73'
        ]);



        Product::create([
            'product_code' => 'S18_2248',
            'product_name' => '1911 Ford Town Car',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Motor City Art Classics',
            'product_description' => 'Features opening hood, opening doors, opening trunk, wide white wall tires, front door arm rests, working steering system.',
            'quantity_in_stock' => 540,
            'buy_price' => '33.30',
            'MSRP' => '60.54'
        ]);



        Product::create([
            'product_code' => 'S18_2319',
            'product_name' => '1964 Mercedes Tour Bus',
            'product_line' => 'Trucks and Buses',
            'product_scale' => '1:18',
            'product_vendor' => 'Unimax Art Galleries',
            'product_description' => 'Exact replica. 100+ parts. working steering system, original logos',
            'quantity_in_stock' => 8258,
            'buy_price' => '74.86',
            'MSRP' => '122.73'
        ]);



        Product::create([
            'product_code' => 'S18_2325',
            'product_name' => '1932 Model A Ford J-Coupe',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Autoart Studio Design',
            'product_description' => 'This model features grille-mounted chrome horn, lift-up louvered hood, fold-down rumble seat, working steering system, chrome-covered spare, opening doors, detailed and wired engine',
            'quantity_in_stock' => 9354,
            'buy_price' => '58.48',
            'MSRP' => '127.13'
        ]);



        Product::create([
            'product_code' => 'S18_2432',
            'product_name' => '1926 Ford Fire Engine',
            'product_line' => 'Trucks and Buses',
            'product_scale' => '1:18',
            'product_vendor' => 'Carousel DieCast Legends',
            'product_description' => 'Gleaming red handsome appearance. Everything is here the fire hoses, ladder, axes, bells, lanterns, ready to fight any inferno.',
            'quantity_in_stock' => 2018,
            'buy_price' => '24.92',
            'MSRP' => '60.77'
        ]);



        Product::create([
            'product_code' => 'S18_2581',
            'product_name' => 'P-51-D Mustang',
            'product_line' => 'Planes',
            'product_scale' => '1:72',
            'product_vendor' => 'Gearbox Collectibles',
            'product_description' => 'Has retractable wheels and comes with a stand',
            'quantity_in_stock' => 992,
            'buy_price' => '49.00',
            'MSRP' => '84.48'
        ]);



        Product::create([
            'product_code' => 'S18_2625',
            'product_name' => '1936 Harley Davidson El Knucklehead',
            'product_line' => 'Motorcycles',
            'product_scale' => '1:18',
            'product_vendor' => 'Welly Diecast Productions',
            'product_description' => 'Intricately detailed with chrome accents and trim, official die-struck logos and baked enamel finish.',
            'quantity_in_stock' => 4357,
            'buy_price' => '24.23',
            'MSRP' => '60.57'
        ]);



        Product::create([
            'product_code' => 'S18_2795',
            'product_name' => '1928 Mercedes-Benz SSK',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Gearbox Collectibles',
            'product_description' => 'This 1:18 replica features grille-mounted chrome horn, lift-up louvered hood, fold-down rumble seat, working steering system, chrome-covered spare, opening doors, detailed and wired engine. Color black.',
            'quantity_in_stock' => 548,
            'buy_price' => '72.56',
            'MSRP' => '168.75'
        ]);



        Product::create([
            'product_code' => 'S18_2870',
            'product_name' => '1999 Indy 500 Monte Carlo SS',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Red Start Diecast',
            'product_description' => 'Features include opening and closing doors. Color: Red',
            'quantity_in_stock' => 8164,
            'buy_price' => '56.76',
            'MSRP' => '132.00'
        ]);



        Product::create([
            'product_code' => 'S18_2949',
            'product_name' => '1913 Ford Model T Speedster',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Carousel DieCast Legends',
            'product_description' => 'This 250 part reproduction includes moving handbrakes, clutch, throttle and foot pedals, squeezable horn, detailed wired engine, removable water, gas, and oil cans, pivoting monocle windshield, all topped with a baked enamel red finish. Each replica comes with an Owners Title and Certificate of Authenticity. Color red.',
            'quantity_in_stock' => 4189,
            'buy_price' => '60.78',
            'MSRP' => '101.31'
        ]);



        Product::create([
            'product_code' => 'S18_2957',
            'product_name' => '1934 Ford V8 Coupe',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Min Lin Diecast',
            'product_description' => 'Chrome Trim, Chrome Grille, Opening Hood, Opening Doors, Opening Trunk, Detailed Engine, Working Steering System',
            'quantity_in_stock' => 5649,
            'buy_price' => '34.35',
            'MSRP' => '62.46'
        ]);



        Product::create([
            'product_code' => 'S18_3029',
            'product_name' => '1999 Yamaha Speed Boat',
            'product_line' => 'Ships',
            'product_scale' => '1:18',
            'product_vendor' => 'Min Lin Diecast',
            'product_description' => 'Exact replica. Wood and Metal. Many extras including rigging, long boats, pilot house, anchors, etc. Comes with three masts, all square-rigged.',
            'quantity_in_stock' => 4259,
            'buy_price' => '51.61',
            'MSRP' => '86.02'
        ]);



        Product::create([
            'product_code' => 'S18_3136',
            'product_name' => '18th Century Vintage Horse Carriage',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Red Start Diecast',
            'product_description' => 'Hand crafted diecast-like metal horse carriage is re-created in about 1:18 scale of antique horse carriage. This antique style metal Stagecoach is all hand-assembled with many different parts.\r\n\r\nThis collectible metal horse carriage is painted in classic Red, and features turning steering wheel and is entirely hand-finished.',
            'quantity_in_stock' => 5992,
            'buy_price' => '60.74',
            'MSRP' => '104.72'
        ]);



        Product::create([
            'product_code' => 'S18_3140',
            'product_name' => '1903 Ford Model A',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Unimax Art Galleries',
            'product_description' => 'Features opening trunk,  working steering system',
            'quantity_in_stock' => 3913,
            'buy_price' => '68.30',
            'MSRP' => '136.59'
        ]);



        Product::create([
            'product_code' => 'S18_3232',
            'product_name' => '1992 Ferrari 360 Spider red',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Unimax Art Galleries',
            'product_description' => 'his replica features opening doors, superb detail and craftsmanship, working steering system, opening forward compartment, opening rear trunk with removable spare, 4 wheel independent spring suspension as well as factory baked enamel finish.',
            'quantity_in_stock' => 8347,
            'buy_price' => '77.90',
            'MSRP' => '169.34'
        ]);



        Product::create([
            'product_code' => 'S18_3233',
            'product_name' => '1985 Toyota Supra',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Highway 66 Mini Classics',
            'product_description' => 'This model features soft rubber tires, working steering, rubber mud guards, authentic Ford logos, detailed undercarriage, opening doors and hood, removable split rear gate, full size spare mounted in bed, detailed interior with opening glove box',
            'quantity_in_stock' => 7733,
            'buy_price' => '57.01',
            'MSRP' => '107.57'
        ]);



        Product::create([
            'product_code' => 'S18_3259',
            'product_name' => 'Collectable Wooden Train',
            'product_line' => 'Trains',
            'product_scale' => '1:18',
            'product_vendor' => 'Carousel DieCast Legends',
            'product_description' => 'Hand crafted wooden toy train set is in about 1:18 scale, 25 inches in total length including 2 additional carts, of actual vintage train. This antique style wooden toy train model set is all hand-assembled with 100% wood.',
            'quantity_in_stock' => 6450,
            'buy_price' => '67.56',
            'MSRP' => '100.84'
        ]);



        Product::create([
            'product_code' => 'S18_3278',
            'product_name' => '1969 Dodge Super Bee',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Min Lin Diecast',
            'product_description' => 'This replica features opening doors, superb detail and craftsmanship, working steering system, opening forward compartment, opening rear trunk with removable spare, 4 wheel independent spring suspension as well as factory baked enamel finish.',
            'quantity_in_stock' => 1917,
            'buy_price' => '49.05',
            'MSRP' => '80.41'
        ]);



        Product::create([
            'product_code' => 'S18_3320',
            'product_name' => '1917 Maxwell Touring Car',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Exoto Designs',
            'product_description' => 'Features Gold Trim, Full Size Spare Tire, Chrome Trim, Chrome Grille, Opening Hood, Opening Doors, Opening Trunk, Detailed Engine, Working Steering System',
            'quantity_in_stock' => 7913,
            'buy_price' => '57.54',
            'MSRP' => '99.21'
        ]);



        Product::create([
            'product_code' => 'S18_3482',
            'product_name' => '1976 Ford Gran Torino',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Gearbox Collectibles',
            'product_description' => 'Highly detailed 1976 Ford Gran Torino \"Starsky and Hutch\" diecast model. Very well constructed and painted in red and white patterns.',
            'quantity_in_stock' => 9127,
            'buy_price' => '73.49',
            'MSRP' => '146.99'
        ]);



        Product::create([
            'product_code' => 'S18_3685',
            'product_name' => '1948 Porsche Type 356 Roadster',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Gearbox Collectibles',
            'product_description' => 'This model features working front and rear suspension on accurately replicated and actuating shock absorbers as well as opening engine cover, rear stabilizer flap,  and 4 opening doors.',
            'quantity_in_stock' => 8990,
            'buy_price' => '62.16',
            'MSRP' => '141.28'
        ]);



        Product::create([
            'product_code' => 'S18_3782',
            'product_name' => '1957 Vespa GS150',
            'product_line' => 'Motorcycles',
            'product_scale' => '1:18',
            'product_vendor' => 'Studio M Art Models',
            'product_description' => 'Features rotating wheels , working kick stand. Comes with stand.',
            'quantity_in_stock' => 7689,
            'buy_price' => '32.95',
            'MSRP' => '62.17'
        ]);



        Product::create([
            'product_code' => 'S18_3856',
            'product_name' => '1941 Chevrolet Special Deluxe Cabriolet',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Exoto Designs',
            'product_description' => 'Features opening hood, opening doors, opening trunk, wide white wall tires, front door arm rests, working steering system, leather upholstery. Color black.',
            'quantity_in_stock' => 2378,
            'buy_price' => '64.58',
            'MSRP' => '105.87'
        ]);



        Product::create([
            'product_code' => 'S18_4027',
            'product_name' => '1970 Triumph Spitfire',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Min Lin Diecast',
            'product_description' => 'Features include opening and closing doors. Color: White.',
            'quantity_in_stock' => 5545,
            'buy_price' => '91.92',
            'MSRP' => '143.62'
        ]);



        Product::create([
            'product_code' => 'S18_4409',
            'product_name' => '1932 Alfa Romeo 8C2300 Spider Sport',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Exoto Designs',
            'product_description' => 'This 1:18 scale precision die cast replica features the 6 front headlights of the original, plus a detailed version of the 142 horsepower straight 8 engine, dual spares and their famous comprehensive dashboard. Color black.',
            'quantity_in_stock' => 6553,
            'buy_price' => '43.26',
            'MSRP' => '92.03'
        ]);



        Product::create([
            'product_code' => 'S18_4522',
            'product_name' => '1904 Buick Runabout',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Exoto Designs',
            'product_description' => 'Features opening trunk,  working steering system',
            'quantity_in_stock' => 8290,
            'buy_price' => '52.66',
            'MSRP' => '87.77'
        ]);



        Product::create([
            'product_code' => 'S18_4600',
            'product_name' => '1940s Ford truck',
            'product_line' => 'Trucks and Buses',
            'product_scale' => '1:18',
            'product_vendor' => 'Motor City Art Classics',
            'product_description' => 'This 1940s Ford Pick-Up truck is re-created in 1:18 scale of original 1940s Ford truck. This antique style metal 1940s Ford Flatbed truck is all hand-assembled. This collectible 1940\'s Pick-Up truck is painted in classic dark green color, and features rotating wheels.',
            'quantity_in_stock' => 3128,
            'buy_price' => '84.76',
            'MSRP' => '121.08'
        ]);



        Product::create([
            'product_code' => 'S18_4668',
            'product_name' => '1939 Cadillac Limousine',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Studio M Art Models',
            'product_description' => 'Features completely detailed interior including Velvet flocked drapes,deluxe wood grain floor, and a wood grain casket with seperate chrome handles',
            'quantity_in_stock' => 6645,
            'buy_price' => '23.14',
            'MSRP' => '50.31'
        ]);



        Product::create([
            'product_code' => 'S18_4721',
            'product_name' => '1957 Corvette Convertible',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Classic Metal Creations',
            'product_description' => '1957 die cast Corvette Convertible in Roman Red with white sides and whitewall tires. 1:18 scale quality die-cast with detailed engine and underbvody. Now you can own The Classic Corvette.',
            'quantity_in_stock' => 1249,
            'buy_price' => '69.93',
            'MSRP' => '148.80'
        ]);



        Product::create([
            'product_code' => 'S18_4933',
            'product_name' => '1957 Ford Thunderbird',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Studio M Art Models',
            'product_description' => 'This 1:18 scale precision die-cast replica, with its optional porthole hardtop and factory baked-enamel Thunderbird Bronze finish, is a 100% accurate rendition of this American classic.',
            'quantity_in_stock' => 3209,
            'buy_price' => '34.21',
            'MSRP' => '71.27'
        ]);



        Product::create([
            'product_code' => 'S24_1046',
            'product_name' => '1970 Chevy Chevelle SS 454',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:24',
            'product_vendor' => 'Unimax Art Galleries',
            'product_description' => 'This model features rotating wheels, working streering system and opening doors. All parts are particularly delicate due to their precise scale and require special care and attention. It should not be picked up by the doors, roof, hood or trunk.',
            'quantity_in_stock' => 1005,
            'buy_price' => '49.24',
            'MSRP' => '73.49'
        ]);



        Product::create([
            'product_code' => 'S24_1444',
            'product_name' => '1970 Dodge Coronet',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:24',
            'product_vendor' => 'Highway 66 Mini Classics',
            'product_description' => '1:24 scale die-cast about 18\" long doors open, hood opens and rubber wheels',
            'quantity_in_stock' => 4074,
            'buy_price' => '32.37',
            'MSRP' => '57.80'
        ]);



        Product::create([
            'product_code' => 'S24_1578',
            'product_name' => '1997 BMW R 1100 S',
            'product_line' => 'Motorcycles',
            'product_scale' => '1:24',
            'product_vendor' => 'Autoart Studio Design',
            'product_description' => 'Detailed scale replica with working suspension and constructed from over 70 parts',
            'quantity_in_stock' => 7003,
            'buy_price' => '60.86',
            'MSRP' => '112.70'
        ]);



        Product::create([
            'product_code' => 'S24_1628',
            'product_name' => '1966 Shelby Cobra 427 S/C',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:24',
            'product_vendor' => 'Carousel DieCast Legends',
            'product_description' => 'This diecast model of the 1966 Shelby Cobra 427 S/C includes many authentic details and operating parts. The 1:24 scale model of this iconic lighweight sports car from the 1960s comes in silver and it\'s own display case.',
            'quantity_in_stock' => 8197,
            'buy_price' => '29.18',
            'MSRP' => '50.31'
        ]);



        Product::create([
            'product_code' => 'S24_1785',
            'product_name' => '1928 British Royal Navy Airplane',
            'product_line' => 'Planes',
            'product_scale' => '1:24',
            'product_vendor' => 'Classic Metal Creations',
            'product_description' => 'Official logos and insignias',
            'quantity_in_stock' => 3627,
            'buy_price' => '66.74',
            'MSRP' => '109.42'
        ]);



        Product::create([
            'product_code' => 'S24_1937',
            'product_name' => '1939 Chevrolet Deluxe Coupe',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:24',
            'product_vendor' => 'Motor City Art Classics',
            'product_description' => 'This 1:24 scale die-cast replica of the 1939 Chevrolet Deluxe Coupe has the same classy look as the original. Features opening trunk, hood and doors and a showroom quality baked enamel finish.',
            'quantity_in_stock' => 7332,
            'buy_price' => '22.57',
            'MSRP' => '33.19'
        ]);



        Product::create([
            'product_code' => 'S24_2000',
            'product_name' => '1960 BSA Gold Star DBD34',
            'product_line' => 'Motorcycles',
            'product_scale' => '1:24',
            'product_vendor' => 'Highway 66 Mini Classics',
            'product_description' => 'Detailed scale replica with working suspension and constructed from over 70 parts',
            'quantity_in_stock' => 15,
            'buy_price' => '37.32',
            'MSRP' => '76.17'
        ]);



        Product::create([
            'product_code' => 'S24_2011',
            'product_name' => '18th century schooner',
            'product_line' => 'Ships',
            'product_scale' => '1:24',
            'product_vendor' => 'Carousel DieCast Legends',
            'product_description' => 'All wood with canvas sails. Many extras including rigging, long boats, pilot house, anchors, etc. Comes with 4 masts, all square-rigged.',
            'quantity_in_stock' => 1898,
            'buy_price' => '82.34',
            'MSRP' => '122.89'
        ]);



        Product::create([
            'product_code' => 'S24_2022',
            'product_name' => '1938 Cadillac V-16 Presidential Limousine',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:24',
            'product_vendor' => 'Classic Metal Creations',
            'product_description' => 'This 1:24 scale precision die cast replica of the 1938 Cadillac V-16 Presidential Limousine has all the details of the original, from the flags on the front to an opening back seat compartment complete with telephone and rifle. Features factory baked-enamel black finish, hood goddess ornament, working jump seats.',
            'quantity_in_stock' => 2847,
            'buy_price' => '20.61',
            'MSRP' => '44.80'
        ]);



        Product::create([
            'product_code' => 'S24_2300',
            'product_name' => '1962 Volkswagen Microbus',
            'product_line' => 'Trucks and Buses',
            'product_scale' => '1:24',
            'product_vendor' => 'Autoart Studio Design',
            'product_description' => 'This 1:18 scale die cast replica of the 1962 Microbus is loaded with features: A working steering system, opening front doors and tailgate, and famous two-tone factory baked enamel finish, are all topped of by the sliding, real fabric, sunroof.',
            'quantity_in_stock' => 2327,
            'buy_price' => '61.34',
            'MSRP' => '127.79'
        ]);



        Product::create([
            'product_code' => 'S24_2360',
            'product_name' => '1982 Ducati 900 Monster',
            'product_line' => 'Motorcycles',
            'product_scale' => '1:24',
            'product_vendor' => 'Highway 66 Mini Classics',
            'product_description' => 'Features two-tone paint with chrome accents, superior die-cast detail , rotating wheels , working kick stand',
            'quantity_in_stock' => 6840,
            'buy_price' => '47.10',
            'MSRP' => '69.26'
        ]);



        Product::create([
            'product_code' => 'S24_2766',
            'product_name' => '1949 Jaguar XK 120',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:24',
            'product_vendor' => 'Classic Metal Creations',
            'product_description' => 'Precision-engineered from original Jaguar specification in perfect scale ratio. Features opening doors, superb detail and craftsmanship, working steering system, opening forward compartment, opening rear trunk with removable spare, 4 wheel independent spring suspension as well as factory baked enamel finish.',
            'quantity_in_stock' => 2350,
            'buy_price' => '47.25',
            'MSRP' => '90.87'
        ]);



        Product::create([
            'product_code' => 'S24_2840',
            'product_name' => '1958 Chevy Corvette Limited Edition',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:24',
            'product_vendor' => 'Carousel DieCast Legends',
            'product_description' => 'The operating parts of this 1958 Chevy Corvette Limited Edition are particularly delicate due to their precise scale and require special care and attention. Features rotating wheels, working streering, opening doors and trunk. Color dark green.',
            'quantity_in_stock' => 2542,
            'buy_price' => '15.91',
            'MSRP' => '35.36'
        ]);



        Product::create([
            'product_code' => 'S24_2841',
            'product_name' => '1900s Vintage Bi-Plane',
            'product_line' => 'Planes',
            'product_scale' => '1:24',
            'product_vendor' => 'Autoart Studio Design',
            'product_description' => 'Hand crafted diecast-like metal bi-plane is re-created in about 1:24 scale of antique pioneer airplane. All hand-assembled with many different parts. Hand-painted in classic yellow and features correct markings of original airplane.',
            'quantity_in_stock' => 5942,
            'buy_price' => '34.25',
            'MSRP' => '68.51'
        ]);



        Product::create([
            'product_code' => 'S24_2887',
            'product_name' => '1952 Citroen-15CV',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:24',
            'product_vendor' => 'Exoto Designs',
            'product_description' => 'Precision crafted hand-assembled 1:18 scale reproduction of the 1952 15CV, with its independent spring suspension, working steering system, opening doors and hood, detailed engine and instrument panel, all topped of with a factory fresh baked enamel finish.',
            'quantity_in_stock' => 1452,
            'buy_price' => '72.82',
            'MSRP' => '117.44'
        ]);



        Product::create([
            'product_code' => 'S24_2972',
            'product_name' => '1982 Lamborghini Diablo',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:24',
            'product_vendor' => 'Second Gear Diecast',
            'product_description' => 'This replica features opening doors, superb detail and craftsmanship, working steering system, opening forward compartment, opening rear trunk with removable spare, 4 wheel independent spring suspension as well as factory baked enamel finish.',
            'quantity_in_stock' => 7723,
            'buy_price' => '16.24',
            'MSRP' => '37.76'
        ]);



        Product::create([
            'product_code' => 'S24_3151',
            'product_name' => '1912 Ford Model T Delivery Wagon',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:24',
            'product_vendor' => 'Min Lin Diecast',
            'product_description' => 'This model features chrome trim and grille, opening hood, opening doors, opening trunk, detailed engine, working steering system. Color white.',
            'quantity_in_stock' => 9173,
            'buy_price' => '46.91',
            'MSRP' => '88.51'
        ]);



        Product::create([
            'product_code' => 'S24_3191',
            'product_name' => '1969 Chevrolet Camaro Z28',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:24',
            'product_vendor' => 'Exoto Designs',
            'product_description' => '1969 Z/28 Chevy Camaro 1:24 scale replica. The operating parts of this limited edition 1:24 scale diecast model car 1969 Chevy Camaro Z28- hood, trunk, wheels, streering, suspension and doors- are particularly delicate due to their precise scale and require special care and attention.',
            'quantity_in_stock' => 4695,
            'buy_price' => '50.51',
            'MSRP' => '85.61'
        ]);



        Product::create([
            'product_code' => 'S24_3371',
            'product_name' => '1971 Alpine Renault 1600s',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:24',
            'product_vendor' => 'Welly Diecast Productions',
            'product_description' => 'This 1971 Alpine Renault 1600s replica Features opening doors, superb detail and craftsmanship, working steering system, opening forward compartment, opening rear trunk with removable spare, 4 wheel independent spring suspension as well as factory baked enamel finish.',
            'quantity_in_stock' => 7995,
            'buy_price' => '38.58',
            'MSRP' => '61.23'
        ]);



        Product::create([
            'product_code' => 'S24_3420',
            'product_name' => '1937 Horch 930V Limousine',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:24',
            'product_vendor' => 'Autoart Studio Design',
            'product_description' => 'Features opening hood, opening doors, opening trunk, wide white wall tires, front door arm rests, working steering system',
            'quantity_in_stock' => 2902,
            'buy_price' => '26.30',
            'MSRP' => '65.75'
        ]);



        Product::create([
            'product_code' => 'S24_3432',
            'product_name' => '2002 Chevy Corvette',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:24',
            'product_vendor' => 'Gearbox Collectibles',
            'product_description' => 'The operating parts of this limited edition Diecast 2002 Chevy Corvette 50th Anniversary Pace car Limited Edition are particularly delicate due to their precise scale and require special care and attention. Features rotating wheels, poseable streering, opening doors and trunk.',
            'quantity_in_stock' => 9446,
            'buy_price' => '62.11',
            'MSRP' => '107.08'
        ]);



        Product::create([
            'product_code' => 'S24_3816',
            'product_name' => '1940 Ford Delivery Sedan',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:24',
            'product_vendor' => 'Carousel DieCast Legends',
            'product_description' => 'Chrome Trim, Chrome Grille, Opening Hood, Opening Doors, Opening Trunk, Detailed Engine, Working Steering System. Color black.',
            'quantity_in_stock' => 6621,
            'buy_price' => '48.64',
            'MSRP' => '83.86'
        ]);



        Product::create([
            'product_code' => 'S24_3856',
            'product_name' => '1956 Porsche 356A Coupe',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Classic Metal Creations',
            'product_description' => 'Features include: Turnable front wheels; steering function; detailed interior; detailed engine; opening hood; opening trunk; opening doors; and detailed chassis.',
            'quantity_in_stock' => 6600,
            'buy_price' => '98.30',
            'MSRP' => '140.43'
        ]);



        Product::create([
            'product_code' => 'S24_3949',
            'product_name' => 'Corsair F4U ( Bird Cage)',
            'product_line' => 'Planes',
            'product_scale' => '1:24',
            'product_vendor' => 'Second Gear Diecast',
            'product_description' => 'Has retractable wheels and comes with a stand. Official logos and insignias.',
            'quantity_in_stock' => 6812,
            'buy_price' => '29.34',
            'MSRP' => '68.24'
        ]);



        Product::create([
            'product_code' => 'S24_3969',
            'product_name' => '1936 Mercedes Benz 500k Roadster',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:24',
            'product_vendor' => 'Red Start Diecast',
            'product_description' => 'This model features grille-mounted chrome horn, lift-up louvered hood, fold-down rumble seat, working steering system and rubber wheels. Color black.',
            'quantity_in_stock' => 2081,
            'buy_price' => '21.75',
            'MSRP' => '41.03'
        ]);



        Product::create([
            'product_code' => 'S24_4048',
            'product_name' => '1992 Porsche Cayenne Turbo Silver',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:24',
            'product_vendor' => 'Exoto Designs',
            'product_description' => 'This replica features opening doors, superb detail and craftsmanship, working steering system, opening forward compartment, opening rear trunk with removable spare, 4 wheel independent spring suspension as well as factory baked enamel finish.',
            'quantity_in_stock' => 6582,
            'buy_price' => '69.78',
            'MSRP' => '118.28'
        ]);



        Product::create([
            'product_code' => 'S24_4258',
            'product_name' => '1936 Chrysler Airflow',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:24',
            'product_vendor' => 'Second Gear Diecast',
            'product_description' => 'Features opening trunk,  working steering system. Color dark green.',
            'quantity_in_stock' => 4710,
            'buy_price' => '57.46',
            'MSRP' => '97.39'
        ]);



        Product::create([
            'product_code' => 'S24_4278',
            'product_name' => '1900s Vintage Tri-Plane',
            'product_line' => 'Planes',
            'product_scale' => '1:24',
            'product_vendor' => 'Unimax Art Galleries',
            'product_description' => 'Hand crafted diecast-like metal Triplane is Re-created in about 1:24 scale of antique pioneer airplane. This antique style metal triplane is all hand-assembled with many different parts.',
            'quantity_in_stock' => 2756,
            'buy_price' => '36.23',
            'MSRP' => '72.45'
        ]);



        Product::create([
            'product_code' => 'S24_4620',
            'product_name' => '1961 Chevrolet Impala',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Classic Metal Creations',
            'product_description' => 'This 1:18 scale precision die-cast reproduction of the 1961 Chevrolet Impala has all the features-doors, hood and trunk that open; detailed 409 cubic-inch engine; chrome dashboard and stick shift, two-tone interior; working steering system; all topped of with a factory baked-enamel finish.',
            'quantity_in_stock' => 7869,
            'buy_price' => '32.33',
            'MSRP' => '80.84'
        ]);



        Product::create([
            'product_code' => 'S32_1374',
            'product_name' => '1997 BMW F650 ST',
            'product_line' => 'Motorcycles',
            'product_scale' => '1:32',
            'product_vendor' => 'Exoto Designs',
            'product_description' => 'Features official die-struck logos and baked enamel finish. Comes with stand.',
            'quantity_in_stock' => 178,
            'buy_price' => '66.92',
            'MSRP' => '99.89'
        ]);



        Product::create([
            'product_code' => 'S32_2206',
            'product_name' => '1982 Ducati 996 R',
            'product_line' => 'Motorcycles',
            'product_scale' => '1:32',
            'product_vendor' => 'Gearbox Collectibles',
            'product_description' => 'Features rotating wheels , working kick stand. Comes with stand.',
            'quantity_in_stock' => 9241,
            'buy_price' => '24.14',
            'MSRP' => '40.23'
        ]);



        Product::create([
            'product_code' => 'S32_2509',
            'product_name' => '1954 Greyhound Scenicruiser',
            'product_line' => 'Trucks and Buses',
            'product_scale' => '1:32',
            'product_vendor' => 'Classic Metal Creations',
            'product_description' => 'Model features bi-level seating, 50 windows, skylights & glare resistant glass, working steering system, original logos',
            'quantity_in_stock' => 2874,
            'buy_price' => '25.98',
            'MSRP' => '54.11'
        ]);



        Product::create([
            'product_code' => 'S32_3207',
            'product_name' => '1950\'s Chicago Surface Lines Streetcar',
            'product_line' => 'Trains',
            'product_scale' => '1:32',
            'product_vendor' => 'Gearbox Collectibles',
            'product_description' => 'This streetcar is a joy to see. It has 80 separate windows, electric wire guides, detailed interiors with seats, poles and drivers controls, rolling and turning wheel assemblies, plus authentic factory baked-enamel finishes (Green Hornet for Chicago and Cream and Crimson for Boston).',
            'quantity_in_stock' => 8601,
            'buy_price' => '26.72',
            'MSRP' => '62.14'
        ]);



        Product::create([
            'product_code' => 'S32_3522',
            'product_name' => '1996 Peterbilt 379 Stake Bed with Outrigger',
            'product_line' => 'Trucks and Buses',
            'product_scale' => '1:32',
            'product_vendor' => 'Red Start Diecast',
            'product_description' => 'This model features, opening doors, detailed engine, working steering, tinted windows, detailed interior, die-struck logos, removable stakes operating outriggers, detachable second trailer, functioning 360-degree self loader, precision molded resin trailer and trim, baked enamel finish on cab',
            'quantity_in_stock' => 814,
            'buy_price' => '33.61',
            'MSRP' => '64.64'
        ]);



        Product::create([
            'product_code' => 'S32_4289',
            'product_name' => '1928 Ford Phaeton Deluxe',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:32',
            'product_vendor' => 'Highway 66 Mini Classics',
            'product_description' => 'This model features grille-mounted chrome horn, lift-up louvered hood, fold-down rumble seat, working steering system',
            'quantity_in_stock' => 136,
            'buy_price' => '33.02',
            'MSRP' => '68.79'
        ]);



        Product::create([
            'product_code' => 'S32_4485',
            'product_name' => '1974 Ducati 350 Mk3 Desmo',
            'product_line' => 'Motorcycles',
            'product_scale' => '1:32',
            'product_vendor' => 'Second Gear Diecast',
            'product_description' => 'This model features two-tone paint with chrome accents, superior die-cast detail , rotating wheels , working kick stand',
            'quantity_in_stock' => 3341,
            'buy_price' => '56.13',
            'MSRP' => '102.05'
        ]);



        Product::create([
            'product_code' => 'S50_1341',
            'product_name' => '1930 Buick Marquette Phaeton',
            'product_line' => 'Vintage Cars',
            'product_scale' => '1:50',
            'product_vendor' => 'Studio M Art Models',
            'product_description' => 'Features opening trunk,  working steering system',
            'quantity_in_stock' => 7062,
            'buy_price' => '27.06',
            'MSRP' => '43.64'
        ]);



        Product::create([
            'product_code' => 'S50_1392',
            'product_name' => 'Diamond T620 Semi-Skirted Tanker',
            'product_line' => 'Trucks and Buses',
            'product_scale' => '1:50',
            'product_vendor' => 'Highway 66 Mini Classics',
            'product_description' => 'This limited edition model is licensed and perfectly scaled for Lionel Trains. The Diamond T620 has been produced in solid precision diecast and painted with a fire baked enamel finish. It comes with a removable tanker and is a perfect model to add authenticity to your static train or car layout or to just have on display.',
            'quantity_in_stock' => 1016,
            'buy_price' => '68.29',
            'MSRP' => '115.75'
        ]);



        Product::create([
            'product_code' => 'S50_1514',
            'product_name' => '1962 City of Detroit Streetcar',
            'product_line' => 'Trains',
            'product_scale' => '1:50',
            'product_vendor' => 'Classic Metal Creations',
            'product_description' => 'This streetcar is a joy to see. It has 99 separate windows, electric wire guides, detailed interiors with seats, poles and drivers controls, rolling and turning wheel assemblies, plus authentic factory baked-enamel finishes (Green Hornet for Chicago and Cream and Crimson for Boston).',
            'quantity_in_stock' => 1645,
            'buy_price' => '37.49',
            'MSRP' => '58.58'
        ]);



        Product::create([
            'product_code' => 'S50_4713',
            'product_name' => '2002 Yamaha YZR M1',
            'product_line' => 'Motorcycles',
            'product_scale' => '1:50',
            'product_vendor' => 'Autoart Studio Design',
            'product_description' => 'Features rotating wheels , working kick stand. Comes with stand.',
            'quantity_in_stock' => 600,
            'buy_price' => '34.17',
            'MSRP' => '81.36'
        ]);



        Product::create([
            'product_code' => 'S700_1138',
            'product_name' => 'The Schooner Bluenose',
            'product_line' => 'Ships',
            'product_scale' => '1:700',
            'product_vendor' => 'Autoart Studio Design',
            'product_description' => 'All wood with canvas sails. Measures 31 1/2 inches in Length, 22 inches High and 4 3/4 inches Wide. Many extras.\r\nThe schooner Bluenose was built in Nova Scotia in 1921 to fish the rough waters off the coast of Newfoundland. Because of the Bluenose racing prowess she became the pride of all Canadians. Still featured on stamps and the Canadian dime, the Bluenose was lost off Haiti in 1946.',
            'quantity_in_stock' => 1897,
            'buy_price' => '34.00',
            'MSRP' => '66.67'
        ]);



        Product::create([
            'product_code' => 'S700_1691',
            'product_name' => 'American Airlines: B767-300',
            'product_line' => 'Planes',
            'product_scale' => '1:700',
            'product_vendor' => 'Min Lin Diecast',
            'product_description' => 'Exact replia with official logos and insignias and retractable wheels',
            'quantity_in_stock' => 5841,
            'buy_price' => '51.15',
            'MSRP' => '91.34'
        ]);



        Product::create([
            'product_code' => 'S700_1938',
            'product_name' => 'The Mayflower',
            'product_line' => 'Ships',
            'product_scale' => '1:700',
            'product_vendor' => 'Studio M Art Models',
            'product_description' => 'Measures 31 1/2 inches Long x 25 1/2 inches High x 10 5/8 inches Wide\r\nAll wood with canvas sail. Extras include long boats, rigging, ladders, railing, anchors, side cannons, hand painted, etc.',
            'quantity_in_stock' => 737,
            'buy_price' => '43.30',
            'MSRP' => '86.61'
        ]);



        Product::create([
            'product_code' => 'S700_2047',
            'product_name' => 'HMS Bounty',
            'product_line' => 'Ships',
            'product_scale' => '1:700',
            'product_vendor' => 'Unimax Art Galleries',
            'product_description' => 'Measures 30 inches Long x 27 1/2 inches High x 4 3/4 inches Wide. \r\nMany extras including rigging, long boats, pilot house, anchors, etc. Comes with three masts, all square-rigged.',
            'quantity_in_stock' => 3501,
            'buy_price' => '39.83',
            'MSRP' => '90.52'
        ]);



        Product::create([
            'product_code' => 'S700_2466',
            'product_name' => 'America West Airlines B757-200',
            'product_line' => 'Planes',
            'product_scale' => '1:700',
            'product_vendor' => 'Motor City Art Classics',
            'product_description' => 'Official logos and insignias. Working steering system. Rotating jet engines',
            'quantity_in_stock' => 9653,
            'buy_price' => '68.80',
            'MSRP' => '99.72'
        ]);



        Product::create([
            'product_code' => 'S700_2610',
            'product_name' => 'The USS Constitution Ship',
            'product_line' => 'Ships',
            'product_scale' => '1:700',
            'product_vendor' => 'Red Start Diecast',
            'product_description' => 'All wood with canvas sails. Measures 31 1/2\" Length x 22 3/8\" High x 8 1/4\" Width. Extras include 4 boats on deck, sea sprite on bow, anchors, copper railing, pilot houses, etc.',
            'quantity_in_stock' => 7083,
            'buy_price' => '33.97',
            'MSRP' => '72.28'
        ]);



        Product::create([
            'product_code' => 'S700_2824',
            'product_name' => '1982 Camaro Z28',
            'product_line' => 'Classic Cars',
            'product_scale' => '1:18',
            'product_vendor' => 'Carousel DieCast Legends',
            'product_description' => 'Features include opening and closing doors. Color: White. \r\nMeasures approximately 9 1/2\" Long.',
            'quantity_in_stock' => 6934,
            'buy_price' => '46.53',
            'MSRP' => '101.15'
        ]);



        Product::create([
            'product_code' => 'S700_2834',
            'product_name' => 'ATA: B757-300',
            'product_line' => 'Planes',
            'product_scale' => '1:700',
            'product_vendor' => 'Highway 66 Mini Classics',
            'product_description' => 'Exact replia with official logos and insignias and retractable wheels',
            'quantity_in_stock' => 7106,
            'buy_price' => '59.33',
            'MSRP' => '118.65'
        ]);



        Product::create([
            'product_code' => 'S700_3167',
            'product_name' => 'F/A 18 Hornet 1/72',
            'product_line' => 'Planes',
            'product_scale' => '1:72',
            'product_vendor' => 'Motor City Art Classics',
            'product_description' => '10\" Wingspan with retractable landing gears.Comes with pilot',
            'quantity_in_stock' => 551,
            'buy_price' => '54.40',
            'MSRP' => '80.00'
        ]);



        Product::create([
            'product_code' => 'S700_3505',
            'product_name' => 'The Titanic',
            'product_line' => 'Ships',
            'product_scale' => '1:700',
            'product_vendor' => 'Carousel DieCast Legends',
            'product_description' => 'Completed model measures 19 1/2 inches long, 9 inches high, 3inches wide and is in barn red/black. All wood and metal.',
            'quantity_in_stock' => 1956,
            'buy_price' => '51.09',
            'MSRP' => '100.17'
        ]);



        Product::create([
            'product_code' => 'S700_3962',
            'product_name' => 'The Queen Mary',
            'product_line' => 'Ships',
            'product_scale' => '1:700',
            'product_vendor' => 'Welly Diecast Productions',
            'product_description' => 'Exact replica. Wood and Metal. Many extras including rigging, long boats, pilot house, anchors, etc. Comes with three masts, all square-rigged.',
            'quantity_in_stock' => 5088,
            'buy_price' => '53.63',
            'MSRP' => '99.31'
        ]);



        Product::create([
            'product_code' => 'S700_4002',
            'product_name' => 'American Airlines: MD-11S',
            'product_line' => 'Planes',
            'product_scale' => '1:700',
            'product_vendor' => 'Second Gear Diecast',
            'product_description' => 'Polished finish. Exact replia with official logos and insignias and retractable wheels',
            'quantity_in_stock' => 8820,
            'buy_price' => '36.27',
            'MSRP' => '74.03'
        ]);



        Product::create([
            'product_code' => 'S72_1253',
            'product_name' => 'Boeing X-32A JSF',
            'product_line' => 'Planes',
            'product_scale' => '1:72',
            'product_vendor' => 'Motor City Art Classics',
            'product_description' => '10\" Wingspan with retractable landing gears.Comes with pilot',
            'quantity_in_stock' => 4857,
            'buy_price' => '32.77',
            'MSRP' => '49.66'
        ]);



        Product::create([
            'product_code' => 'S72_3212',
            'product_name' => 'Pont Yacht',
            'product_line' => 'Ships',
            'product_scale' => '1:72',
            'product_vendor' => 'Unimax Art Galleries',
            'product_description' => 'Measures 38 inches Long x 33 3/4 inches High. Includes a stand.\r\nMany extras including rigging, long boats, pilot house, anchors, etc. Comes with 2 masts, all square-rigged',
            'quantity_in_stock' => 414,
            'buy_price' => '33.30',
            'MSRP' => '54.60'
        ]);
    }
}
