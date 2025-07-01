<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agent;

class AgentSeeder extends Seeder
{
    public function run(): void
    {
        $agents = [
            // ['agent_name' => 'AIRA MEDINA', 'agency_name' => 'MIS', 'agent_level' => 'RSC', 'ticket' => 20, 'ticket_numbers' => 0],
            // ['agent_name' => 'DENMARK IROG', 'agency_name' => 'HO', 'agent_level' => 'RSC', 'ticket' => 33, 'ticket_numbers' => 0],
            // ['agent_name' => 'LOVELY REYES', 'agency_name' => 'MIS', 'agent_level' => 'RSC', 'ticket' => 50, 'ticket_numbers' => 0],
            // ['agent_name' => 'MARVIN ANDRES', 'agency_name' => 'MIS', 'agent_level' => 'RSC', 'ticket' => 5, 'ticket_numbers' => 0],
            // ['agent_name' => 'RONA CABANYOG', 'agency_name' => 'MIS', 'agent_level' => 'RSC', 'ticket' => 14, 'ticket_numbers' => 0],
            // ['agent_name' => 'CHRISTIAN ASILO', 'agency_name' => 'HO', 'agent_level' => 'RSC', 'ticket' => 24, 'ticket_numbers' => 0],
            // ['agent_name' => 'CHRISTIAN JOHN BORJAL', 'agency_name' => 'HO', 'agent_level' => 'RSC', 'ticket' => 17, 'ticket_numbers' => 0],
            // ['agent_name' => 'LEMUEL LIPIO', 'agency_name' => 'MIS', 'agent_level' => 'RSC', 'ticket' => 42, 'ticket_numbers' => 0],
            // ['agent_name' => 'KERBY MARCELINO', 'agency_name' => 'HO', 'agent_level' => 'RSC', 'ticket' => 38, 'ticket_numbers' => 0],


                // ['agent_name' => 'Florita B. Arellano', 'agency_name'=> 'GAM', 'agent_level'=> 'Amity', 'branch'=> 'Batangas City', 'ticket'=> 173, 'ticket_numbers' => 0],
                // ['agent_name' => 'Saturnina G. Alcantara', 'agency_name'=> 'GAM', 'agent_level'=> 'NGA', 'branch'=> 'Batangas City', 'ticket'=> 117, 'ticket_numbers' => 0],
                // ['agent_name' => 'Concepcion P. Bagos', 'agency_name'=> 'GAM', 'agent_level'=> 'Rainbow Connections', 'branch'=> 'Batangas City', 'ticket'=> 108, 'ticket_numbers' => 0],
                // ['agent_name' => 'Lourdes G. Tidon', 'agency_name'=> 'GAM', 'agent_level'=> 'Primemovers', 'branch'=> 'Batangas City', 'ticket'=> 105, 'ticket_numbers' => 0],
                // ['agent_name' => 'Leonora C. Belen', 'agency_name'=> 'GAM', 'agent_level'=> 'Horizon Legacy', 'branch'=> 'Batangas City', 'ticket'=> 59, 'ticket_numbers' => 0],
                // ['agent_name' => 'Cecille D. Navarro', 'agency_name'=> 'GAM', 'agent_level'=> 'Celestials', 'branch'=> 'Batangas City', 'ticket'=> 31, 'ticket_numbers' => 0],
                // ['agent_name' => 'Aquilina A. Lazarte', 'agency_name'=> 'GAM', 'agent_level'=> 'Queen of Angels', 'branch'=> 'Batangas City', 'ticket'=> 46, 'ticket_numbers' => 0],

                // ['agent_name' => 'Juvy A. Manalo', 'agency_name'=> 'RUM', 'agent_level'=> 'Amity', 'branch'=> 'Batangas City', 'ticket'=> 133, 'ticket_numbers' => 0,],
                // ['agent_name' => 'Karen T. Macalalad', 'agency_name'=> 'RUM', 'agent_level'=> 'Primemovers', 'branch'=> 'Batangas City', 'ticket'=> 125, 'ticket_numbers' => 0],
                // ['agent_name' => 'Reynante M. Navarro', 'agency_name'=> 'RUM', 'agent_level'=> 'Celestials', 'branch'=> 'Batangas City', 'ticket'=> 113, 'ticket_numbers' => 0],
                // ['agent_name' => 'Maria Cristina M. Marasigan', 'agency_name'=> 'RUM', 'agent_level'=> 'Primemovers', 'branch'=> 'Batangas City', 'ticket'=> 86, 'ticket_numbers' => 0],
                // ['agent_name' => 'Salud B. Panaligan', 'agency_name'=> 'RUM', 'agent_level'=> 'Rainbow Connections', 'branch'=> 'Batangas City', 'ticket'=> 83, 'ticket_numbers' => 0],
                // ['agent_name' => 'Marlene G. Doneza', 'agency_name'=> 'RUM', 'agent_level'=> 'Amity', 'branch'=> 'Batangas City', 'ticket'=> 83, 'ticket_numbers' => 0],
                // ['agent_name' => 'Marilou C. Albay', 'agency_name'=> 'RUM', 'agent_level'=> 'Rainbow Connections', 'branch'=> 'Batangas City', 'ticket'=> 77, 'ticket_numbers' => 0],
                // ['agent_name' => 'Edensueda C. Mercado', 'agency_name'=> 'RUM', 'agent_level'=> 'NGA', 'branch'=> 'Batangas City', 'ticket'=> 75, 'ticket_numbers' => 0],
                // ['agent_name' => 'Marilyn S. Braceros', 'agency_name'=> 'RUM', 'agent_level'=> 'Amity', 'branch'=> 'Batangas City', 'ticket'=> 68, 'ticket_numbers' => 0],
                // ['agent_name' => 'Miguela A. De Ocampo', 'agency_name'=> 'RUM', 'agent_level'=> 'NGA', 'branch'=> 'Batangas City', 'ticket'=> 64, 'ticket_numbers' => 0],
                // ['agent_name' => 'Rosalia C. Barrameda', 'agency_name'=> 'RUM', 'agent_level'=> 'Amity', 'branch'=> 'Batangas City', 'ticket'=> 61, 'ticket_numbers' => 0],
                // ['agent_name' => 'Dolorosa A. Almarez', 'agency_name'=> 'RUM', 'agent_level'=> 'NGA', 'branch'=> 'Batangas City', 'ticket'=> 54, 'ticket_numbers' => 0],
                // ['agent_name' => 'Lilian N. Almazan', 'agency_name'=> 'RUM', 'agent_level'=> 'Horizon Legacy', 'branch'=> 'Batangas City', 'ticket'=> 53, 'ticket_numbers' => 0],
                // ['agent_name' => 'Belen E. Bagui', 'agency_name'=> 'RUM', 'agent_level'=> 'Rainbow Connections', 'branch'=> 'Batangas City', 'ticket'=> 46, 'ticket_numbers' => 0],
                // ['agent_name' => 'Soledad M. Soriano', 'agency_name'=> 'RUM', 'agent_level'=> 'NGA', 'branch'=> 'Batangas City', 'ticket'=> 40, 'ticket_numbers' => 0],
                // ['agent_name' => 'Danniel Kyle B. Bico', 'agency_name'=> 'RUM', 'agent_level'=> 'Queen of Angels', 'branch'=> 'Batangas City', 'ticket'=> 39, 'ticket_numbers' => 0],
                // ['agent_name' => 'Prensisita S. Aguda', 'agency_name'=> 'RUM', 'agent_level'=> 'Horizon Legacy', 'branch'=> 'Batangas City', 'ticket'=> 36, 'ticket_numbers' => 0],
                // ['agent_name' => 'Felisa C. Melendres', 'agency_name'=> 'RUM', 'agent_level'=> 'Queen of Angels', 'branch'=> 'Batangas City', 'ticket'=> 28, 'ticket_numbers' => 0],
                // ['agent_name' => 'Vaneza B. Sanvictores', 'agency_name'=> 'RUM', 'agent_level'=> 'Horizon Legacy', 'branch'=> 'Batangas City', 'ticket'=> 13, 'ticket_numbers' => 0],
                // ['agent_name' => 'Maricel G. Chavez', 'agency_name'=> 'RUM', 'agent_level'=> 'Queen of Angels', 'branch'=> 'Batangas City', 'ticket'=> 18, 'ticket_numbers' => 0],

                // ['agent_name' => 'Jethro Lee A. De Ocampo', 'agency_name'=> 'PSC', 'agent_level'=> 'NGA', 'branch'=> 'Batangas City', 'ticket'=> 45, 'ticket_numbers' => 0],
                // ['agent_name' => 'Ed Anthony B. Delos Reyes', 'agency_name'=> 'PSC', 'agent_level'=> 'Amity', 'branch'=> 'Batangas City', 'ticket'=> 31, 'ticket_numbers' => 0],
                // ['agent_name' => 'Victorio C. Marasigan', 'agency_name'=> 'PSC', 'agent_level'=> 'Primemovers', 'branch'=> 'Batangas City', 'ticket'=> 28, 'ticket_numbers' => 0],

                // ['agent_name' => 'Ruby B. Olaso', 'agency_name'=> 'RSC', 'agent_level'=> 'Amity', 'branch'=> 'Batangas City', 'ticket'=> 359, 'ticket_numbers' => 0],
                // ['agent_name' => 'Marites E. Ramirez', 'agency_name'=> 'RSC', 'agent_level'=> 'Amity', 'branch'=> 'Batangas City', 'ticket'=> 243, 'ticket_numbers' => 0],
                // ['agent_name' => 'Bianca Victoria P. Navarro', 'agency_name'=> 'RSC', 'agent_level'=> 'Celestials', 'branch'=> 'Batangas City', 'ticket'=> 171, 'ticket_numbers' => 0],
                // ['agent_name' => 'Marina B. Pagcaliwagan', 'agency_name'=> 'RSC', 'agent_level'=> 'Amity', 'branch'=> 'Batangas City', 'ticket'=> 125, 'ticket_numbers' => 0],
                // ['agent_name' => 'Wylimina G. Soriano', 'agency_name'=> 'RSC', 'agent_level'=> 'Celestials', 'branch'=> 'Batangas City', 'ticket'=> 117, 'ticket_numbers' => 0],
                // ['agent_name' => 'Mariefe C. Javier', 'agency_name'=> 'RSC', 'agent_level'=> 'Horizon Legacy', 'branch'=> 'Batangas City', 'ticket'=> 115, 'ticket_numbers' => 0],
                // ['agent_name' => 'Odonia H. Quinio', 'agency_name'=> 'RSC', 'agent_level'=> 'Rainbow Connections', 'branch'=> 'Batangas City', 'ticket'=> 104, 'ticket_numbers' => 0],
                // ['agent_name' => 'Anacleta R. Cometa', 'agency_name'=> 'RSC', 'agent_level'=> 'Rainbow Connections', 'branch'=> 'Batangas City', 'ticket'=> 102, 'ticket_numbers' => 0],
                // ['agent_name' => 'Thelma M. Cruzat', 'agency_name'=> 'RSC', 'agent_level'=> 'Horizon Legacy', 'branch'=> 'Batangas City', 'ticket'=> 81, 'ticket_numbers' => 0],
                // ['agent_name' => 'Jackson G. Cabio', 'agency_name'=> 'RSC', 'agent_level'=> 'Amity', 'branch'=> 'Batangas City', 'ticket'=> 67, 'ticket_numbers' => 0],
                // ['agent_name' => 'Elpidio B. Casao', 'agency_name'=> 'RSC', 'agent_level'=> 'NGA', 'branch'=> 'Batangas City', 'ticket'=> 63, 'ticket_numbers' => 0],
                // ['agent_name' => 'Aelyn O. Zara', 'agency_name'=> 'RSC', 'agent_level'=> 'Celestials', 'branch'=> 'Batangas City', 'ticket'=> 61, 'ticket_numbers' => 0],
                // ['agent_name' => 'Juanita B. Dimayuga', 'agency_name'=> 'RSC', 'agent_level'=> 'NGA', 'branch'=> 'Batangas City', 'ticket'=> 59, 'ticket_numbers' => 0],

                // ['agent_name' => 'MA. TERESA B. MAGBUHOS', 'agency_name'=> 'RSC', 'agent_level'=> 'CELESTIALS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 50, 'ticket_numbers' => 0],
                // ['agent_name' => 'MARIVIC D. DIMAYUGA', 'agency_name'=> 'RSC', 'agent_level'=> 'RAINBOW CONNECTIONS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 50, 'ticket_numbers' => 0],
                // ['agent_name' => 'MA. TERESA D. RAMIREZ', 'agency_name'=> 'RSC', 'agent_level'=> 'RAINBOW CONNECTIONS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 48, 'ticket_numbers' => 0],
                // ['agent_name' => 'WENNIE B. BICO', 'agency_name'=> 'RSC', 'agent_level'=> 'QUEEN OF ANGELS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 47, 'ticket_numbers' => 0],
                // ['agent_name' => 'MAYVEL M. TIDON', 'agency_name'=> 'RSC', 'agent_level'=> 'PRIMEMOVERS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 46, 'ticket_numbers' => 0],
                // ['agent_name' => 'LOVELLA L. ANISCO', 'agency_name'=> 'RSC', 'agent_level'=> 'QUEEN OF ANGELS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 44, 'ticket_numbers' => 0],
                // ['agent_name' => 'STEFANIE B. OLIT', 'agency_name'=> 'RSC', 'agent_level'=> 'QUEEN OF ANGELS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 41, 'ticket_numbers' => 0],
                // ['agent_name' => 'ROSENIE H. BUENAFE', 'agency_name'=> 'RSC', 'agent_level'=> 'NGA', 'branch'=> 'BATANGAS CITY', 'ticket'=> 41, 'ticket_numbers' => 0],
                // ['agent_name' => 'MYRA C. CANICON', 'agency_name'=> 'RSC', 'agent_level'=> 'PRIMEMOVERS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 39, 'ticket_numbers' => 0],
                // ['agent_name' => 'MARIETA D. PANGANIBAN', 'agency_name'=> 'RSC', 'agent_level'=> 'PRIMEMOVERS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 37, 'ticket_numbers' => 0],
                // ['agent_name' => 'IRENE D. PANGANIBAN', 'agency_name'=> 'RSC', 'agent_level'=> 'NGA', 'branch'=> 'BATANGAS CITY', 'ticket'=> 36, 'ticket_numbers' => 0],
                // ['agent_name' => 'GLORIA M. ESCAL', 'agency_name'=> 'RSC', 'agent_level'=> 'RAINBOW CONNECTIONS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 34, 'ticket_numbers' => 0],
                // ['agent_name' => 'MARIA TERESA B. PEDRAZA', 'agency_name'=> 'RSC', 'agent_level'=> 'RAINBOW CONNECTIONS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 34, 'ticket_numbers' => 0],
                // ['agent_name' => 'SENEN B. TINGCHUY', 'agency_name'=> 'RSC', 'agent_level'=> 'NGA', 'branch'=> 'BATANGAS CITY', 'ticket'=> 33, 'ticket_numbers' => 0],
                // ['agent_name' => 'RIC G. BARTE', 'agency_name'=> 'RSC', 'agent_level'=> 'NGA', 'branch'=> 'BATANGAS CITY', 'ticket'=> 33, 'ticket_numbers' => 0],
                // ['agent_name' => 'MARYLEIGH P. CASTILLO', 'agency_name'=> 'RSC', 'agent_level'=> 'PRIMEMOVERS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 33, 'ticket_numbers' => 0],
                // ['agent_name' => 'DINA P. LOTA', 'agency_name'=> 'RSC', 'agent_level'=> 'PRIMEMOVERS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 33, 'ticket_numbers' => 0],
                // ['agent_name' => 'YOLANDA D. DALISAY', 'agency_name'=> 'RSC', 'agent_level'=> 'RAINBOW CONNECTIONS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 32, 'ticket_numbers' => 0],
                // ['agent_name' => 'KIMBERLY H. GUTIERREZ', 'agency_name'=> 'RSC', 'agent_level'=> 'AMITY', 'branch'=> 'BATANGAS CITY', 'ticket'=> 32, 'ticket_numbers' => 0],
                // ['agent_name' => 'ROSEMARIE DIMAYUGA', 'agency_name'=> 'RSC', 'agent_level'=> 'NGA', 'branch'=> 'BATANGAS CITY', 'ticket'=> 32, 'ticket_numbers' => 0],
                // ['agent_name' => 'ANA R. CLAVERIA', 'agency_name'=> 'RSC', 'agent_level'=> 'QUEEN OF ANGELS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 31, 'ticket_numbers' => 0],
                // ['agent_name' => 'ZOILA A. ANDAL', 'agency_name'=> 'RSC', 'agent_level'=> 'QUEEN OF ANGELS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 30, 'ticket_numbers' => 0],
                // ['agent_name' => 'ROSALIE C. EBORA', 'agency_name'=> 'RSC', 'agent_level'=> 'RAINBOW CONNECTIONS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 30, 'ticket_numbers' => 0],
                // ['agent_name' => 'KRISTINE T. CULLA', 'agency_name'=> 'RSC', 'agent_level'=> 'PRIMEMOVERS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 27, 'ticket_numbers' => 0],
                // ['agent_name' => 'MAXIMA B. PERADILLA', 'agency_name'=> 'RSC', 'agent_level'=> 'PRIMEMOVERS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 26, 'ticket_numbers' => 0],
                // ['agent_name' => 'ELENOR P. DAELO', 'agency_name'=> 'RSC', 'agent_level'=> 'PRIMEMOVERS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 25, 'ticket_numbers' => 0],
                // ['agent_name' => 'AGNES V. DITAN', 'agency_name'=> 'RSC', 'agent_level'=> 'HORIZON LEGACY', 'branch'=> 'BATANGAS CITY', 'ticket'=> 25, 'ticket_numbers' => 0],
                // ['agent_name' => 'MAILA C. LAPITAN', 'agency_name'=> 'RSC', 'agent_level'=> 'HORIZON LEGACY', 'branch'=> 'BATANGAS CITY', 'ticket'=> 24, 'ticket_numbers' => 0],
                // ['agent_name' => 'AIDA CLAUDIA A. BALMES', 'agency_name'=> 'RSC', 'agent_level'=> 'PRIMEMOVERS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 22, 'ticket_numbers' => 0],
                // ['agent_name' => 'ROSA CECILIA S. ACLAN', 'agency_name'=> 'RSC', 'agent_level'=> 'AMITY', 'branch'=> 'BATANGAS CITY', 'ticket'=> 21, 'ticket_numbers' => 0],
                // ['agent_name' => 'CLARA B. MANALO', 'agency_name'=> 'RSC', 'agent_level'=> 'NGA', 'branch'=> 'BATANGAS CITY', 'ticket'=> 19, 'ticket_numbers' => 0],
                // ['agent_name' => 'MODESTA J. CATAPANG', 'agency_name'=> 'RSC', 'agent_level'=> 'AMITY', 'branch'=> 'BATANGAS CITY', 'ticket'=> 19, 'ticket_numbers' => 0],
                // ['agent_name' => 'JULIANA M. DE TORRES', 'agency_name'=> 'RSC', 'agent_level'=> 'NGA', 'branch'=> 'BATANGAS CITY', 'ticket'=> 19, 'ticket_numbers' => 0],
                // ['agent_name' => 'MARITES P. PERALTA', 'agency_name'=> 'RSC', 'agent_level'=> 'NGA', 'branch'=> 'BATANGAS CITY', 'ticket'=> 18, 'ticket_numbers' => 0],
                // ['agent_name' => 'RETCHIE G. TALABIS', 'agency_name'=> 'RSC', 'agent_level'=> 'PRIMEMOVERS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 18, 'ticket_numbers' => 0],
                // ['agent_name' => 'SOLEDAD B. EBORA', 'agency_name'=> 'RSC', 'agent_level'=> 'QUEEN OF ANGELS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 18, 'ticket_numbers' => 0],
                // ['agent_name' => 'MIRIAM D. PAGCALIWAGAN', 'agency_name'=> 'RSC', 'agent_level'=> 'PRIMEMOVERS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 18, 'ticket_numbers' => 0],
                // ['agent_name' => 'MERLIN D. DE GUZMAN', 'agency_name'=> 'RSC', 'agent_level'=> 'AMITY', 'branch'=> 'BATANGAS CITY', 'ticket'=> 17, 'ticket_numbers' => 0],
                // ['agent_name' => 'EMELITA A. MENDOZA', 'agency_name'=> 'RSC', 'agent_level'=> 'PRIMEMOVERS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 17, 'ticket_numbers' => 0],
                // ['agent_name' => 'CORAZON G. CASAS', 'agency_name'=> 'RSC', 'agent_level'=> 'AMITY', 'branch'=> 'BATANGAS CITY', 'ticket'=> 17, 'ticket_numbers' => 0],
                // ['agent_name' => 'MERLINDA D. SANDRO', 'agency_name'=> 'RSC', 'agent_level'=> 'NGA', 'branch'=> 'BATANGAS CITY', 'ticket'=> 16, 'ticket_numbers' => 0],
                // ['agent_name' => 'ELENA O. DE TORRES', 'agency_name'=> 'RSC', 'agent_level'=> 'RAINBOW CONNECTIONS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 15, 'ticket_numbers' => 0],
                // ['agent_name' => 'ZENAIDA L. DE CHAVEZ', 'agency_name'=> 'RSC', 'agent_level'=> 'AMITY', 'branch'=> 'BATANGAS CITY', 'ticket'=> 15, 'ticket_numbers' => 0],
                // ['agent_name' => 'NANCY D. MERCADO', 'agency_name'=> 'RSC', 'agent_level'=> 'NGA', 'branch'=> 'BATANGAS CITY', 'ticket'=> 15, 'ticket_numbers' => 0],
                // ['agent_name' => 'MARIA ANA B. REYES', 'agency_name'=> 'RSC', 'agent_level'=> 'PRIMEMOVERS', 'branch'=> 'BATANGAS CITY', 'ticket'=> 14, 'ticket_numbers' => 0],
            ];

        foreach ($agents as $agent) {
            Agent::create($agent);
        }
    }
}
