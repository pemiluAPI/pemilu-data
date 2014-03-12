FORMAT: 1A
HOST: http://api.pemiluapi.org/geographic/api/

# Geographic API
The Geographic API is a service that provides information about geographic boundaries relevant to Indonesian elections and civic government. It's part of [API Pemilu](http://developer.pemiluapi.org/)

Sample call: [http://api.pemiluapi.org/geographic/api/caleg?apiKey=fea6f7d9ec0b31e256a673114792cb17&long=116.817627&lat=0.329588&lembaga=DPR](http://api.pemiluapi.org/geographic/api/caleg?apiKey=fea6f7d9ec0b31e256a673114792cb17&long=116.817627&lat=0.329588&lembaga=DPR)


# Group Caleg
Services related to candidates from the **Geographic API**

## Caleg Collection [/caleg?apiKey={apiKey}&lat={lat}&long={long}&lembaga={lembaga}]
A list of Candidates running in electoral districts that cover the passed point.

+ Parameters
    + lembaga (optional, string, `DPD`) ... String `lembaga` (legislative body) that the candidates are running for.
    + long (required, Float, `96.63463338700006`) ... Float the `long` (longitude) of the point.
    + lat (required, Float, `2.186393991000045`) ... Float the `lat` (latitude) of the point.
    + apiKey (required, String, `fea6f7d9ec0b31e256a673114792cb17`) ... String `apiKey` of the application.

### List Candidates In Dapil Covering Point [GET]
+ Response 200 (application/json)

        {
            "data": {
                "results": [{
                    "kind": "Provinsi",
                    "lembaga": "DPD",
                    "id": 75,
                    "nama": "Gorontalo",
                    "count": 2,
                    "total": 2,
                    "caleg": [{
                        "id": "7500-00-0000-0001",
                        "tahun": 2014,
                        "lembaga": "DPD",
                        "nama": "Drs. A.D. KHALY",
                        "jenis_kelamin": "L",
                        "agama": "ISLAM",
                        "tempat_lahir": "TILAMUTA",
                        "tanggal_lahir": "1949-07-25",
                        "status_perkawinan": "KAWIN",
                        "nama_pasangan": "TRIMURTY ILAHUDE",
                        "jumlah_anak": "4",
                        "kelurahan_tinggal": "KAYUBULAN",
                        "kecamatan_tinggal": "LIMBOTO",
                        "kab_kota_tinggal": "GORONTALO",
                        "provinsi_tinggal": "GORONTALO",
                        "provinsi": {
                            "id": 75,
                            "nama": "Gorontalo"
                        },
                        "dapil": {
                            "id": "7500-00-0000",
                            "nama": "Gorontalo"
                        },
                        "partai": null,
                        "urutan": 1,
                        "foto_url": "http:\/\/apipemilu-caleg.s3-website-ap-southeast-1.amazonaws.com\/caleg\/foto\/DPD\/75.%20GORONTALO\/01.%20A%20D%20KHALY.jpg"
                    }, {
                        "id": "7500-00-0000-0002",
                        "tahun": 2014,
                        "lembaga": "DPD",
                        "nama": "Dr. ABD. RAZAK MOZIN, S.Ag., M.Si.",
                        "jenis_kelamin": "L",
                        "agama": "ISLAM",
                        "tempat_lahir": "GORONTALO",
                        "tanggal_lahir": "1971-06-26",
                        "status_perkawinan": "KAWIN",
                        "nama_pasangan": "SISCA AVRELIA YUDHA, SE",
                        "jumlah_anak": "1",
                        "kelurahan_tinggal": "MOLOSIFAT W",
                        "kecamatan_tinggal": "KOTA BARAT",
                        "kab_kota_tinggal": "KOTA GORONTALO",
                        "provinsi_tinggal": "GORONTALO",
                        "provinsi": {
                            "id": 75,
                            "nama": "Gorontalo"
                        },
                        "dapil": {
                            "id": "7500-00-0000",
                            "nama": "Gorontalo"
                        },
                        "partai": null,
                        "urutan": 2,
                        "foto_url": "http:\/\/apipemilu-caleg.s3-website-ap-southeast-1.amazonaws.com\/caleg\/foto\/DPD\/75.%20GORONTALO\/02.%20Dr.%20ABD.%20RAZAK%20MOZIN%2C%20S.Ag%2C%20M.Si.JPG"
                    }]
                }]
            }
        }

# Group Areas
Services related to a passed point from the **Geographic API**

## Areas Collection [/point?apiKey={apiKey}&lat={lat}&long={long}]
A list of Area objects that cover the passed point.

+ Parameters
    + apiKey (required, String, `fea6f7d9ec0b31e256a673114792cb17`) ... String `apiKey` of the application.
    + lat (required, Float, `2.186393991000045`) ... Float the `lat` (latitude) of the point.
    + long (required, Float, `96.63463338700006`) ... Float the `long` (longitude) of the point.

### List Areas Covering Point [GET]
+ Response 200 (application/json)

        {
            "data": {
                "results": {
                    "count": 3,
                    "total": 3,
                    "areas": [{
                        "kind": "Provinsi",
                        "id": "11",
                        "nama": "Aceh",
                        "lembaga": "DPD",
                    }, {
                        "kind": "Dapil",
                        "id": "1101-00-0000",
                        "nama": "Aceh I",
                        "lembaga": "DPR",
                    }, {
                        "kind": "Dapil",
                        "id": "1100-10-0000",
                        "nama": "Aceh 10",
                        "lembaga": "DPRDI",
                    }]
                }
            }
        }

## Area [/area/{id}?apiKey={apiKey}]
A single area object with all its details

+ Parameters
    + apiKey (required, String, `fea6f7d9ec0b31e256a673114792cb17`) ... String `apiKey` of the application.
    + id (required, String, `1101-00-0000`) ... String `id` of the Area to retrieve.

### Retrieve an Area [GET]
+ Response 200 (application/json)

        {
            "data": {
                "results": [{
                    "kind": "Dapil",
                    "id": "3100-07-0000",
                    "nama": "DKI Jakarta 7",
                    "lembaga": "DPRDI",
                    "type": "Polygon",
                    "coordinates": [
                        [
                            [106.848190505, -6.2079706739999],
                            [106.848196168, -6.207962831],
                            [106.846032729, -6.220880566],
                            [106.80961, -6.249],
                            [106.813983094, -6.2758317659999],
                            [106.808929624, -6.3145499629999],
                            [106.77989978, -6.3165440779999],
                            [106.757218073, -6.2778429809999],
                            [106.757197965, -6.276273913],
                            [106.757182978, -6.2757820329999],
                            [106.756866199, -6.2742622399999],
                            [106.751485887, -6.2727678329999],
                            [106.751135711, -6.2723641079999],
                            [106.750702227, -6.2723190899999],
                            [106.75030826, -6.2718503199999],
                            [106.753649939, -6.268392891],
                            [106.754176644, -6.2678479419999],
                            [106.748153878, -6.2496161509999],
                            [106.748134147, -6.249433445],
                            [106.746811039, -6.2454002769999],
                            [106.746818747, -6.2450347239999],
                            [106.737315523, -6.2236231439999],
                            [106.77845, -6.224841085],
                            [106.792389108, -6.207788023],
                            [106.799591252, -6.2289972589999],
                            [106.822708311, -6.2026987359999],
                            [106.848190505, -6.2079706739999]
                        ]
                    ]
                }]
            }
        }

# Group Maps
Download static TopoJSON map files from the **Geographic API**

## Map [/getmap?apiKey={apiKey}&filename={filename}]
A raw TopoJSON file matching the passed filename. Available files are:

* [dapil_nasional_dpd-simplified.topojson](https://github.com/pemiluAPI/pemilu-data/blob/master/dapil/shapefiles/map_share/dapil_nasional_dpd-simplified.topojson) (DPD dapil boundaries - *197Kb*)
* [dapil_nasional_dpr-simplified.topojson](https://github.com/pemiluAPI/pemilu-data/blob/master/dapil/shapefiles/map_share/dapil_nasional_dpr-simplified.topojson) (DPR dapil boundaries - *220Kb*)
* [dapil_provinsi_dprdi-simplified.topojson](https://github.com/pemiluAPI/pemilu-data/blob/master/dapil/shapefiles/map_share/dapil_provinsi_dprdi-simplified.topojson) (DPRD I dapil boundaries - *309Kb*)
* [provinsi_administrative_area-simplified.topojson](https://github.com/pemiluAPI/pemilu-data/blob/master/dapil/shapefiles/map_share/provinsi_administrative_area-simplified.topojson) (provincial boundaries - *195Kb*)
* [admin-simple.topojson](https://github.com/pemiluAPI/pemilu-data/blob/master/dapil/shapefiles/map_share/admin-simple.topojson) (simplified provincial boundaries - *32Kb*)
* [kabukota_administrative_area-simplified.topojson](https://github.com/pemiluAPI/pemilu-data/blob/master/dapil/shapefiles/map_share/kabukota_administrative_area-simplified.topojson) (kab/kota boundaries - *407Kb*)
* [kecamatan_administrative_area-simplified.topojson](https://github.com/pemiluAPI/pemilu-data/blob/master/dapil/shapefiles/map_share/kecamatan_administrative_area-simplified.topojson) (kecamatan boundaries - *2.9Mb*)
* [nearby_countries.topojson](https://github.com/pemiluAPI/pemilu-data/blob/master/dapil/shapefiles/map_share/nearby_countries.topojson) (boundaries of countries surrounding Indonesia - *80Kb*)

To request additional files, please [start an issue on the pemilu-data GitHub repository](https://github.com/pemiluAPI/pemilu-data/issues).

+ Parameters
    + apiKey (required, String, `fea6f7d9ec0b31e256a673114792cb17`) ... String `apiKey` of the application.
    + filename (required, String, `admin-simple.topojson`) ... String the `filename` of the desired file.

### Retrieve Map File [GET]
+ Response 200 (application/json)

        {
            "type": "Topology",
            "transform": {
                "scale": [0.00018327379338842084, 0.00020965993001850834],
                "translate": [106.737315523, -6.31654407799994]
            },
            "objects": {
                "layer1": {
                    "type": "GeometryCollection",
                    "geometries": [{
                        "type": "Polygon",
                        "arcs": [
                            [0]
                        ],
                        "id": 0,
                        "properties": {}
                    }],
                    "bbox": [106.737315523, -6.31654407799994, 106.848196168, -6.20269873599989]
                }
            },
            "arcs": [
                [
                    [605, 518],
                    [0, 0],
                    [-12, -62],
                    [-199, -134],
                    [24, -128],
                    [-27, -184],
                    [-159, -10],
                    [-123, 185],
                    [-1, 7],
                    [0, 2],
                    [-1, 8],
                    [-30, 7],
                    [-2, 2],
                    [-2, 0],
                    [-2, 2],
                    [18, 17],
                    [3, 2],
                    [-33, 87],
                    [0, 1],
                    [-7, 19],
                    [0, 2],
                    [-52, 102],
                    [224, -6],
                    [76, 82],
                    [40, -101],
                    [126, 125],
                    [139, -25]
                ]
            ],
            "bbox": [106.737315523, -6.31654407799994, 106.848196168, -6.20269873599989]
        }
