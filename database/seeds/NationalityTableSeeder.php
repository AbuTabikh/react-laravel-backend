<?php

use Illuminate\Database\Seeder;

class NationalityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
        DB::table('nationalities')->delete();

        $nationalities = array(
			array(
				"country_code" => "US",
				"name" => "United States",
			),
			array(
				"country_code" => "CA",
				"name" => "Canada",
			),
			array(
				"country_code" => "AU",
				"name" => "Australia",
			),
			array(
				"country_code" => "GB",
				"name" => "United Kingdom",
			),
			array(
				"country_code" => "AF",
				"name" => "Afghanistan",
			),
			array(
				"country_code" => "AX",
				"name" => "Åland Islands",
			),
			array(
				"country_code" => "AL",
				"name" => "Albania",
			),
			array(
				"country_code" => "DZ",
				"name" => "Algeria",
			),
			array(
				"country_code" => "AS",
				"name" => "American Samoa",
			),
			array(
				"country_code" => "AD",
				"name" => "Andorra",
			),
			array(
				"country_code" => "AO",
				"name" => "Angola",
			),
			array(
				"country_code" => "AI",
				"name" => "Anguilla",
			),
			array(
				"country_code" => "AQ",
				"name" => "Antarctica",
			),
			array(
				"country_code" => "AG",
				"name" => "Antigua and Barbuda",
			),
			array(
				"country_code" => "AR",
				"name" => "Argentina",
			),
			array(
				"country_code" => "AM",
				"name" => "Armenia",
			),
			array(
				"country_code" => "AW",
				"name" => "Aruba",
			),
			array(
				"country_code" => "AT",
				"name" => "Austria",
			),
			array(
				"country_code" => "AZ",
				"name" => "Azerbaijan",
			),
			array(
				"country_code" => "BS",
				"name" => "Bahamas",
			),
			array(
				"country_code" => "BH",
				"name" => "Bahrain",
			),
			array(
				"country_code" => "BD",
				"name" => "Bangladesh",
			),
			array(
				"country_code" => "BB",
				"name" => "Barbados",
			),
			array(
				"country_code" => "BY",
				"name" => "Belarus",
			),
			array(
				"country_code" => "BE",
				"name" => "Belgium",
			),
			array(
				"country_code" => "BZ",
				"name" => "Belize",
			),
			array(
				"country_code" => "BJ",
				"name" => "Benin",
			),
			array(
				"country_code" => "BM",
				"name" => "Bermuda",
			),
			array(
				"country_code" => "BT",
				"name" => "Bhutan",
			),
			array(
				"country_code" => "BO",
				"name" => "Bolivia",
			),
			array(
				"country_code" => "BA",
				"name" => "Bosnia and Herzegovina",
			),
			array(
				"country_code" => "BW",
				"name" => "Botswana",
			),
			array(
				"country_code" => "BV",
				"name" => "Bouvet Island",
			),
			array(
				"country_code" => "BR",
				"name" => "Brazil",
			),
			array(
				"country_code" => "BN",
				"name" => "Brunei Darussalam",
			),
			array(
				"country_code" => "BG",
				"name" => "Bulgaria",
			),
			array(
				"country_code" => "BF",
				"name" => "Burkina Faso",
			),
			array(
				"country_code" => "BI",
				"name" => "Burundi",
			),
			array(
				"country_code" => "KH",
				"name" => "Cambodia",
			),
			array(
				"country_code" => "CM",
				"name" => "Cameroon",
			),
			array(
				"country_code" => "CV",
				"name" => "Cape Verde",
			),
			array(
				"country_code" => "KY",
				"name" => "Cayman Islands",
			),
			array(
				"country_code" => "CF",
				"name" => "Central African Republic",
			),
			array(
				"country_code" => "TD",
				"name" => "Chad",
			),
			array(
				"country_code" => "CL",
				"name" => "Chile",
			),
			array(
				"country_code" => "CN",
				"name" => "China",
			),
			array(
				"country_code" => "CX",
				"name" => "Christmas Island",
			),
			array(
				"country_code" => "CC",
				"name" => "Cocos (Keeling) Islands",
			),
			array(
				"country_code" => "CO",
				"name" => "Colombia",
			),
			array(
				"country_code" => "KM",
				"name" => "Comoros",
			),
			array(
				"country_code" => "CG",
				"name" => "Congo - Brazzaville",
			),
			array(
				"country_code" => "CD",
				"name" => "Congo - Kinshasa",
			),
			array(
				"country_code" => "CK",
				"name" => "Cook Islands",
			),
			array(
				"country_code" => "CR",
				"name" => "Costa Rica",
			),
			array(
				"country_code" => "CI",
				"name" => "Cote d'Ivoire",
			),
			array(
				"country_code" => "HR",
				"name" => "Croatia",
			),
			array(
				"country_code" => "CU",
				"name" => "Cuba",
			),
			array(
				"country_code" => "CY",
				"name" => "Cyprus",
			),
			array(
				"country_code" => "CZ",
				"name" => "Czech Republic",
			),
			array(
				"country_code" => "DK",
				"name" => "Denmark",
			),
			array(
				"country_code" => "DJ",
				"name" => "Djibouti",
			),
			array(
				"country_code" => "DM",
				"name" => "Dominica",
			),
			array(
				"country_code" => "DO",
				"name" => "Dominican Republic",
			),
			array(
				"country_code" => "EC",
				"name" => "Ecuador",
			),
			array(
				"country_code" => "EG",
				"name" => "Egypt",
			),
			array(
				"country_code" => "SV",
				"name" => "El Salvador",
			),
			array(
				"country_code" => "GQ",
				"name" => "Equatorial Guinea",
			),
			array(
				"country_code" => "ER",
				"name" => "Eritrea",
			),
			array(
				"country_code" => "EE",
				"name" => "Estonia",
			),
			array(
				"country_code" => "ET",
				"name" => "Ethiopia",
			),
			array(
				"country_code" => "FK",
				"name" => "Falkland Islands",
			),
			array(
				"country_code" => "FO",
				"name" => "Faroe Islands",
			),
			array(
				"country_code" => "FJ",
				"name" => "Fiji",
			),
			array(
				"country_code" => "FI",
				"name" => "Finland",
			),
			array(
				"country_code" => "FR",
				"name" => "France",
			),
			array(
				"country_code" => "GF",
				"name" => "French Guiana",
			),
			array(
				"country_code" => "PF",
				"name" => "French Polynesia",
			),
			array(
				"country_code" => "GA",
				"name" => "Gabon",
			),
			array(
				"country_code" => "GM",
				"name" => "Gambia",
			),
			array(
				"country_code" => "GE",
				"name" => "Georgia",
			),
			array(
				"country_code" => "DE",
				"name" => "Germany",
			),
			array(
				"country_code" => "GH",
				"name" => "Ghana",
			),
			array(
				"country_code" => "GI",
				"name" => "Gibraltar",
			),
			array(
				"country_code" => "GR",
				"name" => "Greece",
			),
			array(
				"country_code" => "GL",
				"name" => "Greenland",
			),
			array(
				"country_code" => "GD",
				"name" => "Grenada",
			),
			array(
				"country_code" => "GP",
				"name" => "Guadeloupe",
			),
			array(
				"country_code" => "GU",
				"name" => "Guam",
			),
			array(
				"country_code" => "GT",
				"name" => "Guatemala",
			),
			array(
				"country_code" => "GN",
				"name" => "Guinea",
			),
			array(
				"country_code" => "GW",
				"name" => "Guinea-bissau",
			),
			array(
				"country_code" => "GY",
				"name" => "Guyana",
			),
			array(
				"country_code" => "HT",
				"name" => "Haiti",
			),
			array(
				"country_code" => "HN",
				"name" => "Honduras",
			),
			array(
				"country_code" => "HK",
				"name" => "Hong Kong",
			),
			array(
				"country_code" => "HU",
				"name" => "Hungary",
			),
			array(
				"country_code" => "IS",
				"name" => "Iceland",
			),
			array(
				"country_code" => "IN",
				"name" => "India",
			),
			array(
				"country_code" => "ID",
				"name" => "Indonesia",
			),
			array(
				"country_code" => "IR",
				"name" => "Iran",
			),
			array(
				"country_code" => "IQ",
				"name" => "Iraq",
			),
			array(
				"country_code" => "IE",
				"name" => "Ireland",
			),
			array(
				"country_code" => "IL",
				"name" => "Israel",
			),
			array(
				"country_code" => "IT",
				"name" => "Italy",
			),
			array(
				"country_code" => "JM",
				"name" => "Jamaica",
			),
			array(
				"country_code" => "JP",
				"name" => "Japan",
			),
			array(
				"country_code" => "JO",
				"name" => "Jordan",
			),
			array(
				"country_code" => "KZ",
				"name" => "Kazakhstan",
			),
			array(
				"country_code" => "KE",
				"name" => "Kenya",
			),
			array(
				"country_code" => "KI",
				"name" => "Kiribati",
			),
			array(
				"country_code" => "KP",
				"name" => "Korea, North",
			),
			array(
				"country_code" => "KR",
				"name" => "Korea, South",
			),
			array(
				"country_code" => "KW",
				"name" => "Kuwait",
			),
			array(
				"country_code" => "KG",
				"name" => "Kyrgyzstan",
			),
			array(
				"country_code" => "LA",
				"name" => "Laos",
			),
			array(
				"country_code" => "LV",
				"name" => "Latvia",
			),
			array(
				"country_code" => "LB",
				"name" => "Lebanon",
			),
			array(
				"country_code" => "LS",
				"name" => "Lesotho",
			),
			array(
				"country_code" => "LR",
				"name" => "Liberia",
			),
			array(
				"country_code" => "LY",
				"name" => "Libya",
			),
			array(
				"country_code" => "LI",
				"name" => "Liechtenstein",
			),
			array(
				"country_code" => "LT",
				"name" => "Lithuania",
			),
			array(
				"country_code" => "LU",
				"name" => "Luxembourg",
			),
			array(
				"country_code" => "MO",
				"name" => "Macao",
			),
			array(
				"country_code" => "MK",
				"name" => "Macedonia",
			),
			array(
				"country_code" => "MG",
				"name" => "Madagascar",
			),
			array(
				"country_code" => "MW",
				"name" => "Malawi",
			),
			array(
				"country_code" => "MY",
				"name" => "Malaysia",
			),
			array(
				"country_code" => "MV",
				"name" => "Maldives",
			),
			array(
				"country_code" => "ML",
				"name" => "Mali",
			),
			array(
				"country_code" => "MT",
				"name" => "Malta",
			),
			array(
				"country_code" => "MH",
				"name" => "Marshall Islands",
			),
			array(
				"country_code" => "MQ",
				"name" => "Martinique",
			),
			array(
				"country_code" => "MR",
				"name" => "Mauritania",
			),
			array(
				"country_code" => "MU",
				"name" => "Mauritius",
			),
			array(
				"country_code" => "YT",
				"name" => "Mayotte",
			),
			array(
				"country_code" => "MX",
				"name" => "Mexico",
			),
			array(
				"country_code" => "FM",
				"name" => "Micronesia",
			),
			array(
				"country_code" => "MD",
				"name" => "Moldova",
			),
			array(
				"country_code" => "MC",
				"name" => "Monaco",
			),
			array(
				"country_code" => "MN",
				"name" => "Mongolia",
			),
			array(
				"country_code" => "MS",
				"name" => "Montserrat",
			),
			array(
				"country_code" => "MA",
				"name" => "Morocco",
			),
			array(
				"country_code" => "MZ",
				"name" => "Mozambique",
			),
			array(
				"country_code" => "MM",
				"name" => "Myanmar",
			),
			array(
				"country_code" => "NA",
				"name" => "Namibia",
			),
			array(
				"country_code" => "NR",
				"name" => "Nauru",
			),
			array(
				"country_code" => "NP",
				"name" => "Nepal",
			),
			array(
				"country_code" => "NL",
				"name" => "Netherlands",
			),
			array(
				"country_code" => "AN",
				"name" => "Netherlands Antilles",
			),
			array(
				"country_code" => "NC",
				"name" => "New Caledonia",
			),
			array(
				"country_code" => "NZ",
				"name" => "New Zealand",
			),
			array(
				"country_code" => "NI",
				"name" => "Nicaragua",
			),
			array(
				"country_code" => "NE",
				"name" => "Niger",
			),
			array(
				"country_code" => "NG",
				"name" => "Nigeria",
			),
			array(
				"country_code" => "NU",
				"name" => "Niue",
			),
			array(
				"country_code" => "NF",
				"name" => "Norfolk Island",
			),
			array(
				"country_code" => "MP",
				"name" => "Northern Mariana Islands",
			),
			array(
				"country_code" => "NO",
				"name" => "Norway",
			),
			array(
				"country_code" => "OM",
				"name" => "Oman",
			),
			array(
				"country_code" => "PK",
				"name" => "Pakistan",
			),
			array(
				"country_code" => "PW",
				"name" => "Palau",
			),
			array(
				"country_code" => "PS",
				"name" => "Palestine",
			),
			array(
				"country_code" => "PA",
				"name" => "Panama",
			),
			array(
				"country_code" => "PG",
				"name" => "Papua New Guinea",
			),
			array(
				"country_code" => "PY",
				"name" => "Paraguay",
			),
			array(
				"country_code" => "PE",
				"name" => "Peru",
			),
			array(
				"country_code" => "PH",
				"name" => "Philippines",
			),
			array(
				"country_code" => "PN",
				"name" => "Pitcairn",
			),
			array(
				"country_code" => "PL",
				"name" => "Poland",
			),
			array(
				"country_code" => "PT",
				"name" => "Portugal",
			),
			array(
				"country_code" => "PR",
				"name" => "Puerto Rico",
			),
			array(
				"country_code" => "QA",
				"name" => "Qatar",
			),
			array(
				"country_code" => "RE",
				"name" => "Reunion",
			),
			array(
				"country_code" => "RO",
				"name" => "Romania",
			),
			array(
				"country_code" => "RU",
				"name" => "Russian Federation",
			),
			array(
				"country_code" => "RW",
				"name" => "Rwanda",
			),
			array(
				"country_code" => "SH",
				"name" => "Saint Helena",
			),
			array(
				"country_code" => "KN",
				"name" => "Saint Kitts and Nevis",
			),
			array(
				"country_code" => "LC",
				"name" => "Saint Lucia",
			),
			array(
				"country_code" => "PM",
				"name" => "Saint Pierre and Miquelon",
			),
			array(
				"country_code" => "VC",
				"name" => "Saint Vincent",
			),
			array(
				"country_code" => "WS",
				"name" => "Samoa",
			),
			array(
				"country_code" => "SM",
				"name" => "San Marino",
			),
			array(
				"country_code" => "ST",
				"name" => "Sao Tome and Principe",
			),
			array(
				"country_code" => "SA",
				"name" => "Saudi Arabia",
			),
			array(
				"country_code" => "SN",
				"name" => "Senegal",
			),
			array(
				"country_code" => "RS",
				"name" => "Serbia",
			),
			array(
				"country_code" => "SC",
				"name" => "Seychelles",
			),
			array(
				"country_code" => "SL",
				"name" => "Sierra Leone",
			),
			array(
				"country_code" => "SG",
				"name" => "Singapore",
			),
			array(
				"country_code" => "SK",
				"name" => "Slovakia",
			),
			array(
				"country_code" => "SI",
				"name" => "Slovenia",
			),
			array(
				"country_code" => "SB",
				"name" => "Solomon Islands",
			),
			array(
				"country_code" => "SO",
				"name" => "Somalia",
			),
			array(
				"country_code" => "ZA",
				"name" => "South Africa",
			),
			array(
				"country_code" => "ES",
				"name" => "Spain",
			),
			array(
				"country_code" => "LK",
				"name" => "Sri Lanka",
			),
			array(
				"country_code" => "SD",
				"name" => "Sudan",
			),
			array(
				"country_code" => "SR",
				"name" => "Suriname",
			),
			array(
				"country_code" => "SJ",
				"name" => "Svalbard and Jan Mayen",
			),
			array(
				"country_code" => "SZ",
				"name" => "Swaziland",
			),
			array(
				"country_code" => "SE",
				"name" => "Sweden",
			),
			array(
				"country_code" => "CH",
				"name" => "Switzerland",
			),
			array(
				"country_code" => "SY",
				"name" => "Syria",
			),
			array(
				"country_code" => "TW",
				"name" => "Taiwan",
			),
			array(
				"country_code" => "TJ",
				"name" => "Tajikistan",
			),
			array(
				"country_code" => "TZ",
				"name" => "Tanzania",
			),
			array(
				"country_code" => "TH",
				"name" => "Thailand",
			),
			array(
				"country_code" => "TL",
				"name" => "Timor-leste",
			),
			array(
				"country_code" => "TG",
				"name" => "Togo",
			),
			array(
				"country_code" => "TK",
				"name" => "Tokelau",
			),
			array(
				"country_code" => "TO",
				"name" => "Tonga",
			),
			array(
				"country_code" => "TT",
				"name" => "Trinidad and Tobago",
			),
			array(
				"country_code" => "TN",
				"name" => "Tunisia",
			),
			array(
				"country_code" => "TR",
				"name" => "Turkey",
			),
			array(
				"country_code" => "TM",
				"name" => "Turkmenistan",
			),
			array(
				"country_code" => "TC",
				"name" => "Turks and Caicos Islands",
			),
			array(
				"country_code" => "TV",
				"name" => "Tuvalu",
			),
			array(
				"country_code" => "UG",
				"name" => "Uganda",
			),
			array(
				"country_code" => "UA",
				"name" => "Ukraine",
			),
			array(
				"country_code" => "AE",
				"name" => "United Arab Emirates",
			),
			array(
				"country_code" => "UY",
				"name" => "Uruguay",
			),
			array(
				"country_code" => "UZ",
				"name" => "Uzbekistan",
			),
			array(
				"country_code" => "VU",
				"name" => "Vanuatu",
			),
			array(
				"country_code" => "VA",
				"name" => "Vatican City (Holy See)",
			),
			array(
				"country_code" => "VE",
				"name" => "Venezuela",
			),
			array(
				"country_code" => "VN",
				"name" => "Viet Nam",
			),
			array(
				"country_code" => "VG",
				"name" => "Virgin Islands, British",
			),
			array(
				"country_code" => "VI",
				"name" => "Virgin Islands, U.S.",
			),
			array(
				"country_code" => "WF",
				"name" => "Wallis and Futuna",
			),
			array(
				"country_code" => "EH",
				"name" => "Western Sahara",
			),
			array(
				"country_code" => "YE",
				"name" => "Yemen",
			),
			array(
				"country_code" => "ZM",
				"name" => "Zambia",
			),
			array(
				"country_code" => "ZW",
				"name" => "Zimbabwe",
			),
		);
        DB::table('nationalities')->insert($nationalities);
    }
}
