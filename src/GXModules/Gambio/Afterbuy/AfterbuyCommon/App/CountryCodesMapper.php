<?php
/* --------------------------------------------------------------
   CountryCodesMapper.php 2023-10-18
   Gambio GmbH
   http://www.gambio.de
   Copyright (c) 2023 Gambio GmbH
   Released under the GNU General Public License (Version 2)
   [http://www.gnu.org/licenses/gpl-2.0.html]
   --------------------------------------------------------------
*/
declare(strict_types=1);

namespace GXModules\Gambio\Afterbuy\AfterbuyCommon\App;

/**
 * Class CountryCodesMapper
 *
 * @package GXModules\Gambio\Afterbuy\AfterbuyCommon\App
 */
class CountryCodesMapper
{
    /**
     * @var array|string[]
     */
    private static array $countryMap = [
        'AD' => 'AND',
        'AE' => 'UAE',
        'AF' => 'AFG',
        'AG' => 'AG',
        'AI' => 'AXA',
        'AL' => 'AL',
        'AM' => 'AM',
        'AN' => 'NA',
        'AO' => 'ANG',
        'AR' => 'RA',
        'AT' => 'A',
        'AU' => 'AUS',
        'AW' => 'ARU',
        'AX' => 'AX',
        'AZ' => 'AZ',
        'BA' => 'BIH',
        'BB' => 'BDS',
        'BD' => 'BD',
        'BE' => 'B',
        'BF' => 'BF',
        'BG' => 'BG',
        'BH' => 'BRN',
        'BI' => 'RU',
        'BJ' => 'BJ',
        'BN' => 'BRU',
        'BO' => 'BOL',
        'BR' => 'BR',
        'BS' => 'BS',
        'BT' => 'BHT',
        'BW' => 'RB',
        'BY' => 'BY',
        'BZ' => 'BZ',
        'CA' => 'CDN',
        'CD' => 'CGO',
        'CF' => 'RCA',
        'CG' => 'RCB',
        'CH' => 'CH',
        'CI' => 'CI',
        'CL' => 'RCH',
        'CM' => 'CAM',
        'CN' => 'CHN',
        'CO' => 'CO',
        'CR' => 'CR',
        'CU' => 'C',
        'CV' => 'CV',
        'CY' => 'CY',
        'CZ' => 'CZ',
        'DE' => 'D',
        'DJ' => 'DJI',
        'DK' => 'DK',
        'DM' => 'WD',
        'DO' => 'DOM',
        'DZ' => 'DZ',
        'EC' => 'EC',
        'EE' => 'EST',
        'EG' => 'ET',
        'EH' => 'WSA',
        'ER' => 'ER',
        'ES' => 'E',
        'ET' => 'ETH',
        'FI' => 'FIN',
        'FJ' => 'FJI',
        'FM' => 'FSM',
        'FO' => 'FO',
        'FR' => 'F',
        'GA' => 'G',
        'GB' => 'UK',
        'GD' => 'WG',
        'GE' => 'GE',
        'GG' => 'GBA',
        'GH' => 'GH',
        'GI' => 'GBZ',
        'GL' => 'KN',
        'GM' => 'WAG',
        'GN' => 'RG',
        'GQ' => 'GQ',
        'GR' => 'GR',
        'GT' => 'GCA',
        'GW' => 'GUB',
        'GY' => 'GUY',
        'HK' => 'HK',
        'HN' => 'HN',
        'HR' => 'HR',
        'HT' => 'RH',
        'HU' => 'H',
        'ID' => 'RI',
        'IE' => 'IRL',
        'IL' => 'IL',
        'IM' => 'GBM',
        'IN' => 'IND',
        'IQ' => 'IRQ',
        'IR' => 'IR',
        'IS' => 'IS',
        'IT' => 'I',
        'JE' => 'GBJ',
        'JM' => 'JA',
        'JO' => 'JOR',
        'JP' => 'J',
        'KE' => 'EAK',
        'KG' => 'KG',
        'KH' => 'K',
        'KI' => 'KIR',
        'KM' => 'COM',
        'KN' => 'KAN',
        'KP' => 'KP',
        'KR' => 'ROK',
        'KW' => 'KWT',
        'KZ' => 'KZ',
        'LA' => 'LAO',
        'LB' => 'RL',
        'LC' => 'WL',
        'LI' => 'FL',
        'LK' => 'CL',
        'LR' => 'LB',
        'LS' => 'LS',
        'LT' => 'LT',
        'LU' => 'L',
        'LV' => 'LV',
        'LY' => 'LAR',
        'MA' => 'MA',
        'MC' => 'MC',
        'MD' => 'MD',
        'ME' => 'MNE',
        'MG' => 'RM',
        'MH' => 'MH',
        'MK' => 'NMK',
        'ML' => 'RMM',
        'MM' => 'MYA',
        'MN' => 'MNG',
        'MR' => 'RIM',
        'MT' => 'M',
        'MU' => 'MS',
        'MV' => 'MV',
        'MW' => 'MW',
        'MX' => 'MEX',
        'MY' => 'MAL',
        'MZ' => 'MOC',
        'NA' => 'NAM',
        'NC' => 'NCL',
        'NE' => 'RN',
        'NG' => 'NGR',
        'NI' => 'NIC',
        'NL' => 'NL',
        'NO' => 'N',
        'NP' => 'NEP',
        'NR' => 'NAU',
        'NZ' => 'NZ',
        'OM' => 'OM',
        'PA' => 'PA',
        'PE' => 'PE',
        'PG' => 'PNG',
        'PH' => 'RP',
        'PK' => 'PK',
        'PL' => 'PL',
        'PR' => 'PRI',
        'PS' => 'WB',
        'PT' => 'P',
        'PW' => 'PAL',
        'PY' => 'PY',
        'QA' => 'Q',
        'RO' => 'RO',
        'RS' => 'SRB',
        'RU' => 'RUS',
        'RW' => 'RWA',
        'SA' => 'KSA',
        'SB' => 'SOL',
        'SC' => 'SY',
        'SD' => 'SUD',
        'SE' => 'S',
        'SG' => 'SGP',
        'SI' => 'SLO',
        'SK' => 'SK',
        'SL' => 'WAL',
        'SM' => 'RSM',
        'SN' => 'SN',
        'SO' => 'SO',
        'SR' => 'SME',
        'SS' => 'SSD',
        'ST' => 'STP',
        'SU' => 'PMR',
        'SV' => 'ES',
        'SY' => 'SYR',
        'SZ' => 'SD',
        'TD' => 'TD',
        'TG' => 'RT',
        'TH' => 'T',
        'TJ' => 'TJ',
        'TL' => 'TL',
        'TM' => 'TM',
        'TN' => 'TN',
        'TO' => 'TON',
        'TR' => 'TR',
        'TT' => 'TT',
        'TV' => 'TUV',
        'TW' => 'RC',
        'TZ' => 'EAT',
        'UA' => 'UA',
        'UG' => 'EAU',
        'US' => 'USA',
        'UY' => 'ROU',
        'UZ' => 'UZ',
        'VA' => 'V',
        'VC' => 'WV',
        'VE' => 'YV',
        'VG' => 'VG',
        'VN' => 'VN',
        'VU' => 'VAN',
        'WS' => 'WS',
        'XK' => 'RKS',
        'YE' => 'YEM',
        'ZA' => 'ZA',
        'ZM' => 'Z',
        'ZW' => 'ZW',
    ];
    
    
    /**
     * Returns the License Plate Code for an ISO2 country code or null if the code is unknown/invalid.
     *
     * @param string $iso2code
     *
     * @return string|null
     */
    public static function getLicensePlateCodeForIso2Code(string $iso2code): ?string
    {
        return static::$countryMap[$iso2code] ?? null;
    }
}