(function($) {
    /**
     * French language package
     * Translated by @dlucazeau
     */
    $.fn.bootstrapValidator.i18n = $.extend(true, $.fn.bootstrapValidator.i18n, {
        base64: {
            'default': 'Veuillez fournir une donnée correctement encodée en Base64'
        },
        between: {
            'default': 'Veuillez fournir une valeur comprise entre %s et %s',
            notInclusive: 'Veuillez fournir une valeur strictement comprise entre %s et %s'
        },
        callback: {
            'default': 'Veuillez fournir une valeur valide'
        },
        choice: {
            'default': 'Veuillez fournir une valeur valide',
            less: 'Veuillez choisir au minimum %s options',
            more: 'Veuillez choisir au maximum %s options',
            between: 'Veuillez choisir de %s à %s options'
        },
        creditCard: {
            'default': 'Numéro de carte de crédit non valide'
        },
        cusip: {
            'default': 'Code CUSIP non valide'
        },
        cvv: {
            'default': 'Code CVV non valide'
        },
        date: {
            'default': 'Date non valide'
        },
        different: {
            'default': 'Valeur identique'
        },
        digits: {
            'default': 'Veuillez ne fournir que des chiffres'
        },
        ean: {
            'default': 'Code-barre EAN non valide'
        },
        emailAddress: {
            'default': 'Adresse mail non valide'
        },
        file: {
            'default': 'Fichier non valide'
        },
        greaterThan: {
            'default': 'Veuillez fournir une valeur supérieure ou égale à %s',
            notInclusive: 'Veuillez fournir une valeur supérieure à %s'
        },
        grid: {
            'default': 'Code GRId non valide'
        },
        hex: {
            'default': 'Nombre hexadécimal non valide'
        },
        hexColor: {
            'default': 'Couleur hexadécimale non valide'
        },
        iban: {
            'default': 'Code IBAN non valide',
            countryNotSupported: 'Le code de pays %s n\'est pas accepté',
            country: 'Code IBAN non valide pour %s',
            countries: {
                AD: 'Andorre',
                AE: 'Émirats Arabes Unis',
                AL: 'Albanie',
                AO: 'Angola',
                AT: 'Autriche',
                AZ: 'Azerbaïdjan',
                BA: 'Bosnie-Herzégovine',
                BE: 'Belgique',
                BF: 'Burkina Faso',
                BG: 'Bulgarie',
                BH: 'Bahrein',
                BI: 'Burundi',
                BJ: 'Bénin',
                BR: 'Brésil',
                CH: 'Suisse',
                CI: 'Côte d\'ivoire',
                CM: 'Cameroun',
                CR: 'Costa Rica',
                CV: 'Cap Vert',
                CY: 'Chypre',
                CZ: 'République Tchèque',
                DE: 'Allemagne',
                DK: 'Danemark',
                DO: 'République Dominicaine',
                DZ: 'Algérie',
                EE: 'Estonie',
                ES: 'Espagne',
                FI: 'Finlande',
                FO: 'Îles Féroé',
                FR: 'France',
                GB: 'Royaume Uni',
                GE: 'Géorgie',
                GI: 'Gibraltar',
                GL: 'Groënland',
                GR: 'Gréce',
                GT: 'Guatemala',
                HR: 'Croatie',
                HU: 'Hongrie',
                IE: 'Irlande',
                IL: 'Israël',
                IR: 'Iran',
                IS: 'Islande',
                IT: 'Italie',
                JO: 'Jordanie',
                KW: 'Koweït',
                KZ: 'Kazakhstan',
                LB: 'Liban',
                LI: 'Liechtenstein',
                LT: 'Lithuanie',
                LU: 'Luxembourg',
                LV: 'Lettonie',
                MC: 'Monaco',
                MD: 'Moldavie',
                ME: 'Monténégro',
                MG: 'Madagascar',
                MK: 'Macédoine',
                ML: 'Mali',
                MR: 'Mauritanie',
                MT: 'Malte',
                MU: 'Maurice',
                MZ: 'Mozambique',
                NL: 'Pays-Bas',
                NO: 'Norvège',
                PK: 'Pakistan',
                PL: 'Pologne',
                PS: 'Palestine',
                PT: 'Portugal',
                QA: 'Quatar',
                RO: 'Roumanie',
                RS: 'Serbie',
                SA: 'Arabie Saoudite',
                SE: 'Suède',
                SI: 'Slovènie',
                SK: 'Slovaquie',
                SM: 'Saint-Marin',
                SN: 'Sénégal',
                TN: 'Tunisie',
                TR: 'Turquie',
                VG: 'Îles Vierges britanniques'
            }
        },
        id: {
            'default': 'Numéro d\'identification non valide',
            countryNotSupported: 'Le code de pays %s n\'est pas accepté',
            country: 'Numéro d\'identification non valide pour %s',
            countries: {
                BA: 'Bosnie-Herzégovine',
                BG: 'Bulgarie',
                BR: 'Brésil',
                CH: 'Suisse',
                CL: 'Chili',
                CN: 'Chine',
                CZ: 'République Tchèque',
                DK: 'Danemark',
                EE: 'Estonie',
                ES: 'Espagne',
                FI: 'Finlande',
                HR: 'Croatie',
                IE: 'Irlande',
                IS: 'Islande',
                LT: 'Lituanie',
                LV: 'Lettonie',
                ME: 'Monténégro',
                MK: 'Macédoine',
                NL: 'Pays-Bas',
                RO: 'Roumanie',
                RS: 'Serbie',
                SE: 'Suède',
                SI: 'Slovénie',
                SK: 'Slovaquie',
                SM: 'Saint-Marin',
                TH: 'Thaïlande',
                ZA: 'Afrique du Sud'
            }
        },
        identical: {
            'default': 'Veuillez fournir la même valeur'
        },
        imei: {
            'default': 'Code IMEI non valide'
        },
        imo: {
            'default': 'Code IMO non valide'
        },
        integer: {
            'default': 'Nombre non valide'
        },
        ip: {
            'default': 'Adresse IP non valide',
            ipv4: 'Adresse IPv4 non valide',
            ipv6: 'Adresse IPv6 non valide'
        },
        isbn: {
            'default': 'Code ISBN non valide'
        },
        isin: {
            'default': 'Code ISIN non valide'
        },
        ismn: {
            'default': 'Code ISMN non valide'
        },
        issn: {
            'default': 'Code ISSN non valide'
        },
        lessThan: {
            'default': 'Veuillez fournir une valeur inférieure ou égale à %s',
            notInclusive: 'Veuillez fournir une valeur inférieure à %s'
        },
        mac: {
            'default': 'Adresse MAC non valide'
        },
        meid: {
            'default': 'Code MEID  non valide'
        },
        notEmpty: {
            'default': 'Veuillez fournir une valeur'
        },
        numeric: {
            'default': 'Valeur décimale non valide'
        },
        phone: {
            'default': 'Veuillez fournir un numéro de téléphone valide',
            countryNotSupported: 'Le code de pays %s n\'est pas accepté',
            country: 'Numéro de téléphone non valide pour %s',
            countries: {
                BR: 'Brésil',
                CN: 'Chine',
                CZ: 'République Tchèque',
                DK: 'Danemark',
                ES: 'Espagne',
                FR: 'France',
                GB: 'Royaume-Uni',
                MA: 'Maroc',
                PK: 'Pakistan',
                RO: 'Roumanie',
                RU: 'Russie',
                SK: 'Slovaquie',
                TH: 'Thaïlande',
                US: 'USA',
                VE: 'Venezuela'
            }
        },
        regexp: {
            'default': 'Veuillez fournir une valeur correspondant au modèle'
        },
        remote: {
            'default': 'Valeur non valide'
        },
        rtn: {
            'default': 'Code RTN non valide'
        },
        sedol: {
            'default': 'Numéro SEDOL non valide'
        },
        siren: {
            'default': 'Numéro SIREN non valide'
        },
        siret: {
            'default': 'Numéro SIRET non valide'
        },
        step: {
            'default': 'Veuillez fournir un écart valide de %s'
        },
        stringCase: {
            'default': 'Veuillez ne fournir que des caractères minuscules',
            upper: 'Veuillez ne fournir que des caractères majuscules'
        },
        stringLength: {
            'default': 'Valeur de longueur non valide',
            less: 'Veuillez fournir moins de %s caractères',
            more: 'Veuillez fournir plus de %s caractères',
            between: 'Veuillez fournir entre %s et %s caractères'
        },
        uri: {
            'default': 'URL non valide'
        },
        uuid: {
            'default': 'Veuillez fournir un UUID valide',
            version: 'Veuillez fournir un UUID version %s number'
        },
        vat: {
            'default': 'Code VAT non valide',
            countryNotSupported: 'Le code de pays %s n\'est pas accepté',
            country: 'Code VAT non valide pour %s',
            countries: {
                AT: 'Autriche',
                BE: 'Belgique',
                BG: 'Bulgarie',
                BR: 'Brésil',
                CH: 'Suisse',
                CY: 'Chypre',
                CZ: 'République Tchèque',
                DE: 'Allemagne',
                DK: 'Danemark',
                EE: 'Estonie',
                ES: 'Espagne',
                FI: 'Finlande',
                FR: 'France',
                GB: 'Royaume-Uni',
                GR: 'Grèce',
                EL: 'Grèce',
                HU: 'Hongrie',
                HR: 'Croatie',
                IE: 'Irlande',
                IS: 'Islande',
                IT: 'Italie',
                LT: 'Lituanie',
                LU: 'Luxembourg',
                LV: 'Lettonie',
                MT: 'Malte',
                NL: 'Pays-Bas',
                NO: 'Norvège',
                PL: 'Pologne',
                PT: 'Portugal',
                RO: 'Roumanie',
                RU: 'Russie',
                RS: 'Serbie',
                SE: 'Suède',
                SI: 'Slovénie',
                SK: 'Slovaquie',
                VE: 'Venezuela',
                ZA: 'Afrique du Sud'
            }
        },
        vin: {
            'default': 'Code VIN non valide'
        },
        zipCode: {
            'default': 'Veuillez fournir un code postal valide',
            countryNotSupported: 'Le code de pays %s n\'est pas accepté',
            country: 'Code postal non valide pour %s',
            countries: {
                BR: 'Brésil',
                CA: 'Canada',
                CZ: 'République Tchèque',
                DK: 'Danemark',
                GB: 'Royaume-Uni',
                IT: 'Italie',
                MA: 'Maroc',
                NL: 'Pays-Bas',
                RO: 'Roumanie',
                RU: 'Russie',
                SE: 'Suède',
                SG: 'Singapour',
                SK: 'Slovaquie',
                US: 'USA'
            }
        }
    });
}(window.jQuery));
