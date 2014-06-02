FORMAT: 1A
HOST: http://api.pemiluapi.org/laporan_pelanggaran/api/

# Laporan Pelanggaran API
The Laporan Pelanggaran API is a service that provides election violation reports. It's part of [API Pemilu](http://developer.pemiluapi.org/)

Sample call: [http://api.pemiluapi.org/laporan_pelanggaran/api/reports?apiKey=fea6f7d9ec0b31e256a673114792cb17](http://api.pemiluapi.org/laporan_pelanggaran/api/reports?apiKey=fea6f7d9ec0b31e256a673114792cb17)


# Group Reports
Report related resources of the **Laporan Pelanggaran API**

## Report Collection [/reports?apiKey={apiKey}&tags={tags}&law={law}&limit={limit}&offset={offset}]
A list of Report objects with abbreviated details (no riwayat pendidikan, pekerjaan, or organisasi)

+ Parameters
    + offset (optional, number, `300`) ... Number the offset from the beginning of the list of records to return (use in combination with `limit` to support pagination)
    + limit (optional, number, `25`) ... Number the number of records to return (use in combination with `offset` to support pagination)
    + tags (optional, string, `women,participation`) ... String list of `tags` by which to filter the reports.
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.

### List Reports [GET]
+ Response 200 (application/json)

        {
            "data": {
                "results": {
                    "count": 3,
                    "total": 205,
                    "reports": [{
                        "id": "00001",
                        "judul_laporan": "Hanura Ada di Atas PKB",
                        "tanggal_kejadian": "2014-04-09 22:32",
                        "alamat": "",
                        "kelurahan_desa": "",
                        "kecamatan": "",
                        "kab_kota": "Kota Tangerang Selatan",
                        "provinsi": "Banten",
                        "keterangan": "Caleg DPRD Kota Tangerang Selatan Dapil VI Pamulang ternyata masih ingin kampanye.\n\nDari dimulainya masa tenang hingga hari pemilu 9 April 2014, poster kampanye dari caleg bernomor urut 7 bernama H. Afrianto masih terpasang di pohon Perumahan Gria Jakarta, Pamulang, Tangerang Selatan.\n\nPoster dari caleg partai Hanura tersebut persis tepampang di atas poster kampanye dari partai PKB bernama Drs. H. Tobaroni.\n\nFoto diambil pada 17.11 WIB.",
                        "kategori": "Dugaan Pelanggaran Pidana",
                        "status": "verified",
                        "tags": ["hanura", "masa tenang", "poster", "foto"]
                    }, {
                        "id": "00002",
                        "judul_laporan": "PKB Masih Kampanye",
                        "tanggal_kejadian": "2014-04-09 22:23",
                        "alamat": "",
                        "kelurahan_desa": "",
                        "kecamatan": "",
                        "kab_kota": "Kota Tangerang Selatan",
                        "provinsi": "Banten",
                        "keterangan": "PKB ikut terlibat dalam dugaan pelanggaran. Hal tersebut karena masih adanya atribut kampanye berupa poster yang ditemukan terpasang di salah satu pohon Perumahan Gria Jakarta, Pamulang, Tangerang Selatan.\n\nPoster yang dimaksud memperlihatkan calon DPRD 1 Provinsi Banten, Drs. H. Tobaroni dari PKB.\n\nFoto diambil hari ini, 9 April 2014 pada 17.11 WIB.",
                        "kategori": "Dugaan Pelanggaran Pidana",
                        "status": "verified",
                        "tags": ["pkb", "poster", "foto"]
                    }, {
                        "id": "00003",
                        "judul_laporan": "Posting berbau kampanye di Facebook Prabowo",
                        "tanggal_kejadian": "2014-04-09 19:57",
                        "alamat": "",
                        "kelurahan_desa": "",
                        "kecamatan": "",
                        "kab_kota": "Jakarta",
                        "provinsi": "DKI Jakarta",
                        "keterangan": "Pelanggaran dilakukan oleh Capres Prabowo Subianto dengan cara memasang Cover Picture bertuliskan \"COBLOS NOMOR.6 PRABOWO PRESIDEN\". Pemasangan ini dilakukan pada masa tenang.",
                        "kategori": "Dugaan Pelanggara Pidana",
                        "status": "verified",
                        "tags": ["facebook", "masa tenang"]
                    }]
                }
            }
        }

## Report [/reports/{id}?apiKey={apiKey}]
A single Report object with all its details

+ Parameters
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.
    + id (required, string, `002`) ... String `id` of the Report to perform action with.

### Retrieve a Report [GET]
+ Response 200 (application/json)

        {
            "data": {
                "results": {
                    "count": 1,
                    "total": 1,
                    "reports": [{
                        "id": "00003",
                        "judul_laporan": "Posting berbau kampanye di Facebook Prabowo",
                        "tanggal_kejadian": "2014-04-09 19:57",
                        "alamat": "",
                        "kelurahan_desa": "",
                        "kecamatan": "",
                        "kab_kota": "Jakarta",
                        "provinsi": "DKI Jakarta",
                        "keterangan": "Pelanggaran dilakukan oleh Capres Prabowo Subianto dengan cara memasang Cover Picture bertuliskan \"COBLOS NOMOR.6 PRABOWO PRESIDEN\". Pemasangan ini dilakukan pada masa tenang.",
                        "kategori": "Dugaan Pelanggara Pidana",
                        "status": "verified",
                        "tags": ["facebook", "masa tenang"]
                    }]
                }
            }
        }

# Group Tags
Tag related resources of the **Laporan Pelanggaran API**

## Tags Collection [/tags?apiKey={apiKey}]
A list of Tags objects

+ Parameters
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.

### List all Tags [GET]
+ Response 200 (application/json)

        {
            "data": {
                "results": {
                    "count": 9,
                    "tags": [{
                        "tag": "facebook",
                        "report_count": 1
                    }, {
                        "tag": "foto",
                        "report_count": 2
                    }, {
                        "tag": "hanura",
                        "report_count": 1
                    }, {
                        "tag": "masa tenang",
                        "report_count": 2
                    }, {
                        "tag": "pkb",
                        "report_count": 1
                    }, {
                        "tag": "poster",
                        "report_count": 2
                    }]
                }
            }
        }
