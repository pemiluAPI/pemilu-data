FORMAT: 1A
HOST: http://api.pemiluapi.org/incumbent/api/

# Incumbent API
The Incumbent API is a service that provides information about members of DPR and DPD. It's part of [API Pemilu](http://developer.pemiluapi.org/)

Sample call: [http://api.pemiluapi.org/incumbent/api/incumbents?apiKey=fea6f7d9ec0b31e256a673114792cb17&limit=25](http://api.pemiluapi.org/incumbent/api/incumbents?apiKey=fea6f7d9ec0b31e256a673114792cb17&limit=25)

# Group Incumbents
Incumbents related resources of the **Incumbents API**

## Incumbents Collection [/incumbents?apiKey={apiKey}&tahun={tahun}&lembaga={lembaga}&jenis_kelamin={jenis_kelamin}&agama={agama}&provinsi={provinsi}&dapil={dapil}&partai={partai}&nama={nama}&limit={limit}&offset={offset}]
A list of Incumbents objects with abbreviated details (no riwayat pendidikan, pekerjaan, or organisasi)

+ Parameters
    + offset (optional, number, `300`) ... Number the offset from the beginning of the list of records to return (use in combination with `limit` to support pagination)
    + limit (optional, number, `25`) ... Number the number of records to return (use in combination with `offset` to support pagination)
    + nama (optional, string, `afzal`) ... String full or partial `nama` (name) of the incumbent. Will return all matching records.
    + partai (optional, string, `1`) ... String id of the `partai` (party) that the incumbent is a member of
    + dapil (optional, string, `1101-00-0000`) ... String id of the `dapil` (electoral district) that the incumbent is running in.
    + provinsi (optional, string, `11`) ... String id of the `provinsi` (province) that the incumbent is running in.
    + agama (optional, string, `islam`) ... String full or partial `agama` (religion) of the incumbent. Will return all matching records.
    + jenis_kelamin (optional, string, `L`) ... String `jenis_kelamin` (gender) of the incumbent.
    + lembaga (optional, string, `DPD`) ... String `lembaga` (legislative body) that the incumbent is running for.
    + tahun (optional, number, `2014`) ... Number `tahun` (election year) that the incumbent is running for.
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.

### List Incumbents [GET]
+ Response 200 (application/json)

        {
            "results": {
                "count": 2,
                "total": 2,
                "incumbents": [{
                    "id": "1901-00-0000-0504",
                    "tahun": 2009,
                    "lembaga": "DPR",
                    "nama": "Ir. Basuki Tjahaya Purnama, MM",
                    "jenis_kelamin": "L",
                    "agama": "KRISTEN PROTESTAN",
                    "tempat_lahir": "MANGGAR",
                    "tanggal_lahir": "1966-06-29",
                    "status_perkawinan": "KAWIN",
                    "nama_pasangan": "Veronica, ST",
                    "jumlah_anak": "3",
                    "kelurahan_tinggal": "",
                    "kecamatan_tinggal": "",
                    "kab_kota_tinggal": "",
                    "provinsi_tinggal": "",
                    "provinsi": {
                        "id": 19,
                        "nama": "Babel"
                    },
                    "dapil": {
                        "id": "1901-00-0000",
                        "nama": "Babel"
                    },
                    "partai": {
                        "id": "5",
                        "nama": "Partai Golongan Karya"
                    },
                    "urutan": 4,
                    "foto_url": "",
                    "tanggal_mulai": "2009-04-01",
                    "tanggal_berakhir": "2014-04-01",
                    "keterangan": "Ir. Basuki Tjahaya Purnama, MM digantikan oleh Ir. H. AZHAR ROMLI, M.Si. pada Mei 2012"
                }, {
                    "id": "1901-00-0000-0504",
                    "tahun": 2009,
                    "lembaga": "DPR",
                    "nama": "Gede Pasek Suardika, SH., MH",
                    "jenis_kelamin": "L",
                    "agama": "HINDU",
                    "tempat_lahir": "SINGARAJA, BALI",
                    "tanggal_lahir": "1969-07-21",
                    "status_perkawinan": "KAWIN",
                    "nama_pasangan": "Evie Lestari Andajani, SH",
                    "jumlah_anak": "4",
                    "kelurahan_tinggal": "",
                    "kecamatan_tinggal": "",
                    "kab_kota_tinggal": "",
                    "provinsi_tinggal": "",
                    "provinsi": {
                        "id": 51,
                        "nama": "Bali"
                    },
                    "dapil": {
                        "id": "5101-00-0000",
                        "nama": "Bali"
                    },
                    "partai": {
                        "id": "7",
                        "nama": "Partai Demokrat"
                    },
                    "urutan": 4,
                    "foto_url": "",
                    "tanggal_mulai": "2009-04-01",
                    "tanggal_berakhir": "2014-04-01",
                    "keterangan": "Gede Pasek Suardika, SH., MH. Pengganti Antar Waktu Ir. Jero Wacik (Menjadi Menteri Kebudayaan dan Pariwisata)"
                }]
            }
        }

## Incumbents [/incumbents/{id}?apiKey={apiKey}]
A single Incumbents object with all its details

+ Parameters
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.
    + id (required, string, `1101-00-0000-0101`) ... String `id` of the Incumbent to perform action with.

### Retrieve a Incumbent [GET]
+ Response 200 (application/json)

        {
            "results": {
                "count": 1,
                "total": 1,
                "incumbents": [{
                    "id": "1901-00-0000-0504",
                    "tahun": 2009,
                    "lembaga": "DPR",
                    "nama": "Ir. Basuki Tjahaya Purnama, MM",
                    "jenis_kelamin": "L",
                    "agama": "KRISTEN PROTESTAN",
                    "tempat_lahir": "MANGGAR",
                    "tanggal_lahir": "1966-06-29",
                    "status_perkawinan": "KAWIN",
                    "nama_pasangan": "Veronica, ST",
                    "jumlah_anak": "3",
                    "kelurahan_tinggal": "",
                    "kecamatan_tinggal": "",
                    "kab_kota_tinggal": "",
                    "provinsi_tinggal": "",
                    "provinsi": {
                        "id": 19,
                        "nama": "Babel"
                    },
                    "dapil": {
                        "id": "1901-00-0000",
                        "nama": "Babel"
                    },
                    "partai": {
                        "id": "5",
                        "nama": "Partai Golongan Karya"
                    },
                    "urutan": 4,
                    "foto_url": "",
                    "tanggal_mulai": "2009-04-01",
                    "tanggal_berakhir": "2014-04-01",
                    "keterangan": "Ir. Basuki Tjahaya Purnama, MM digantikan oleh Ir. H. AZHAR ROMLI, M.Si. pada Mei 2012"
                }]
            }
        }

