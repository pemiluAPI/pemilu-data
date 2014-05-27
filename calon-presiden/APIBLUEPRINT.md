FORMAT: 1A
HOST: http://api.pemiluapi.org/calonpresiden/api/

# Presidential Candidate API
The Presidential Candidate API is a service that provides information about candidates running for president and vice-president in the 2014 Indonesian elections. It's part of [API Pemilu](http://developer.pemiluapi.org/)

Sample call: [http://api.pemiluapi.org/calonpresiden/api/caleg?apiKey=fea6f7d9ec0b31e256a673114792cb17&limit=25](http://api.pemiluapi.org/calonpresiden/api/caleg?apiKey=fea6f7d9ec0b31e256a673114792cb17&limit=25)

# Group Candidates
Candidates related resources of the **Presidential Candidate API**

## Candidates Collection [/caleg?apiKey={apiKey}&tahun={tahun}&jenis_kelamin={jenis_kelamin}&agama={agama}&partai={partai}&nama={nama}&limit={limit}&offset={offset}]
A list of Candidates objects with all its details

+ Parameters
    + offset (optional, number, `300`) ... Number the offset from the beginning of the list of records to return (use in combination with `limit` to support pagination)
    + limit (optional, number, `25`) ... Number the number of records to return (use in combination with `offset` to support pagination)
    + nama (optional, string, `afzal`) ... String full or partial `nama` (name) of the candidate. Will return all matching records.
    + partai (optional, string, `1`) ... String id of the `partai` (party) that the candidate is a member of
    + agama (optional, string, `islam`) ... String full or partial `agama` (religion) of the candidate. Will return all matching records.
    + jenis_kelamin (optional, string, `L`) ... String `jenis_kelamin` (gender) of the candidate.
    + tahun (optional, number, `2014`) ... Number `tahun` (election year) that the candidate is running for.
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.

### List Candidates [GET]
+ Response 200 (application/json)

        {
            "results": {
                "count": 2,
                "total": 2,
                "caleg": [{
                    "id": "jw",
                    "tahun": 2014,
                    "nama": "Joko Widodo",
                    "jenis_kelamin": "L",
                    "agama": "Islam",
                    "tempat_lahir": "Surakarta",
                    "tanggal_lahir": "1961-06-21",
                    "status_perkawinan": "Kawin",
                    "nama_pasangan": "Hj. Iriana, SE., MM.",
                    "jumlah_anak": "3",
                    "kelurahan_tinggal": "",
                    "kecamatan_tinggal": "",
                    "kab_kota_tinggal": "Jakarta Pusat",
                    "provinsi_tinggal": "DKI Jakarta",
                    "partai": {
                        "id": 4,
                        "nama": "Partai Demokrasi Indonesia"
                    },
                    "riwayat_pendidikan": [
                        {
                            "id": 1,
                            "ringkasan": "SDN III Tirtoyoso Solo",
                            "tanggal_mulai": "",
                            "tanggal_selesai": ""
                        },
                        {
                            "id": 2,
                            "ringkasan": "SMPN I Solo",
                            "tanggal_mulai": "",
                            "tanggal_selesai": ""
                        },
                        {
                            "id": 3,
                            "ringkasan": "SMAN 6 Solo",
                            "tanggal_mulai": "",
                            "tanggal_selesai": ""
                        },
                        {
                            "id": 4,
                            "ringkasan": "Fakultas Kehutanan UGM Yogyakarta",
                            "tanggal_mulai": "1985",
                            "tanggal_selesai": "1985"
                        }
                    ],
                    "riwayat_pekerjaan": [
                        {
                            "id": 5,
                            "ringkasan": "Eksportir Mebel",
                            "tanggal_mulai": "",
                            "tanggal_selesai": ""
                        },
                        {
                            "id": 6,
                            "ringkasan": "Walikota Surakarta",
                            "tanggal_mulai": "2005",
                            "tanggal_selesai": "2010"
                        },
                        {
                            "id": 7,
                            "ringkasan": "Walikota Surakarta",
                            "tanggal_mulai": "2010",
                            "tanggal_selesai": "2015"
                        },
                        {
                            "id": 8,
                            "ringkasan": "Gubernur Prov. DKI Jakarta",
                            "tanggal_mulai": "2012",
                            "tanggal_selesai": "2017"
                        }
                    ]
                }, {
                    "id": "ps",
                    "tahun": 2014,
                    "nama": "Prabowo Subianto",
                    "jenis_kelamin": "L",
                    "agama": "ISLAM",
                    "tempat_lahir": "Jakarta",
                    "tanggal_lahir": "1951-06-17",
                    "status_perkawinan": "Cerai",
                    "nama_pasangan": "",
                    "jumlah_anak": "1",
                    "kelurahan_tinggal": "Desa Bojongkoneng",
                    "kecamatan_tinggal": "Babakan Madang",
                    "kab_kota_tinggal": "Bogor",
                    "provinsi_tinggal": "Jawa Barat",
                    "partai": {
                        "id": 6,
                        "nama": "Partai Gerakan Indonesia"
                    },
                    "riwayat_pendidikan": [
                        {
                            "id": 9,
                            "ringkasan": "SD Victoria Institution, Kuala Lumpur",
                            "tanggal_mulai": "1960",
                            "tanggal_selesai": "1963"
                        },
                        {
                            "id": 10,
                            "ringkasan": "SMP International School, Zurich",
                            "tanggal_mulai": "1963",
                            "tanggal_selesai": "1964"
                        },
                        {
                            "id": 11,
                            "ringkasan": "SMA American School, London",
                            "tanggal_mulai": "1964",
                            "tanggal_selesai": "1967"
                        },
                        {
                            "id": 12,
                            "ringkasan": "Akademi Militer Nasional, Magelang",
                            "tanggal_mulai": "1970",
                            "tanggal_selesai": "1974"
                        },
                        {
                            "id": 13,
                            "ringkasan": "The Army Special Forces Training Course Fort Bragg (USA)",
                            "tanggal_mulai": "1980",
                            "tanggal_selesai": "1980"
                        },
                        {
                            "id": 14,
                            "ringkasan": "The Army Special Forces Training Course (GSG-9 Germany)",
                            "tanggal_mulai": "1981",
                            "tanggal_selesai": "1981"
                        },
                        {
                            "id": 15,
                            "ringkasan": "The Advanced Infantry Officers Course Fort Benning (USA)",
                            "tanggal_mulai": "1985",
                            "tanggal_selesai": "1985"
                        }
                    ],
                    "riwayat_pekerjaan": [
                        {
                            "id": 16,
                            "ringkasan": "Komandan Peleton Para Komando Group-1 Kopassandha",
                            "tanggal_mulai": "1976",
                            "tanggal_selesai": "1976"
                        },
                        {
                            "id": 17,
                            "ringkasan": "Komandan Kompi Para Komando Group-1 Kopassandha",
                            "tanggal_mulai": "1977",
                            "tanggal_selesai": "1977"
                        },
                        {
                            "id": 18,
                            "ringkasan": "Wakil Komandan Detasemen-81 Kopassus",
                            "tanggal_mulai": "1983",
                            "tanggal_selesai": "1985"
                        },
                        {
                            "id": 19,
                            "ringkasan": "Wakil Komandan Batalyon Infanteri Lintas Udara 328 Kostrad",
                            "tanggal_mulai": "1985",
                            "tanggal_selesai": "1987"
                        },
                        {
                            "id": 20,
                            "ringkasan": "Komandan Batalyon Infanteri Lintas Udara 328 Kostrad",
                            "tanggal_mulai": "1987",
                            "tanggal_selesai": "1991"
                        },
                        {
                            "id": 21,
                            "ringkasan": "Kepala Staf Brigade Infanteri Lintas Udara 17/Kujang I/Kostrad",
                            "tanggal_mulai": "1991",
                            "tanggal_selesai": "1993"
                        },
                        {
                            "id": 22,
                            "ringkasan": "Komandan Group-3/Pusat Pendidikan Pasukan Khusus",
                            "tanggal_mulai": "1993",
                            "tanggal_selesai": "1995"
                        },
                        {
                            "id": 23,
                            "ringkasan": "Wakil Komandan Komando Pasukan Khusus",
                            "tanggal_mulai": "1994",
                            "tanggal_selesai": "1994"
                        },
                        {
                            "id": 24,
                            "ringkasan": "Komandan Komando Pasukan Khusus",
                            "tanggal_mulai": "1995",
                            "tanggal_selesai": "1996"
                        },
                        {
                            "id": 25,
                            "ringkasan": "Komandan Jenderal Komando Pasukan Khusus",
                            "tanggal_mulai": "1996",
                            "tanggal_selesai": "1998"
                        },
                        {
                            "id": 26,
                            "ringkasan": "Panglima Komando Cadangan Strategi TNI Angkatan Darat",
                            "tanggal_mulai": "1998",
                            "tanggal_selesai": "1998"
                        },
                        {
                            "id": 27,
                            "ringkasan": "Komandan Sekolah Staf dan Komando ABRI",
                            "tanggal_mulai": "1998",
                            "tanggal_selesai": "1998"
                        },
                        {
                            "id": 28,
                            "ringkasan": "Ketua Umum HKTI Periode",
                            "tanggal_mulai": "2004",
                            "tanggal_selesai": "2009"
                        },
                        {
                            "id": 29,
                            "ringkasan": "Ketua Umum HKTI Periode",
                            "tanggal_mulai": "2010",
                            "tanggal_selesai": "2015"
                        },
                        {
                            "id": 30,
                            "ringkasan": "Ketua Umum Pengurus Besar Ikatan Pencak Silat Indonesia (PB IPSI) Periode",
                            "tanggal_mulai": "2001",
                            "tanggal_selesai": "2011"
                        },
                        {
                            "id": 31,
                            "ringkasan": "Komisari Perusahaan Migas Karazanbasmunai di Kazakhstan",
                            "tanggal_mulai": "",
                            "tanggal_selesai": ""
                        },
                        {
                            "id": 32,
                            "ringkasan": "Komisaris Utama PT Tidar Kerinci Agung",
                            "tanggal_mulai": "",
                            "tanggal_selesai": ""
                        },
                        {
                            "id": 33,
                            "ringkasan": "Presiden dan CEO PT Nusantara Energy",
                            "tanggal_mulai": "",
                            "tanggal_selesai": ""
                        },
                        {
                            "id": 34,
                            "ringkasan": "Presiden dan CEO PT Jaladri Nusantara",
                            "tanggal_mulai": "",
                            "tanggal_selesai": ""
                        },
                        {
                            "id": 35,
                            "ringkasan": "Dewan Penasihat Organisasi Kosgoro",
                            "tanggal_mulai": "",
                            "tanggal_selesai": ""
                        },
                        {
                            "id": 36,
                            "ringkasan": "Ketua Yayasan Pendidikan Kebangsaan (Universitas Kebangsaan)",
                            "tanggal_mulai": "",
                            "tanggal_selesai": ""
                        },
                        {
                            "id": 37,
                            "ringkasan": "Pendiri Koperasi Swadesi Indonesia (KSI)",
                            "tanggal_mulai": "",
                            "tanggal_selesai": ""
                        }
                    ]                    
                }]
            }
        }

## Candidates [/caleg/{id}?apiKey={apiKey}]
A single Candidates object with all its details

+ Parameters
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.
    + id (required, string, `jw`) ... String `id` of the Candidate to perform action with.

### Retrieve a Candidate [GET]
+ Response 200 (application/json)

        {
            "results": {
                "count": 1,
                "total": 1,
                "caleg": [{
                    "id": "jw",
                    "tahun": 2014,
                    "nama": "Joko Widodo",
                    "jenis_kelamin": "L",
                    "agama": "Islam",
                    "tempat_lahir": "Surakarta",
                    "tanggal_lahir": "1961-06-21",
                    "status_perkawinan": "Kawin",
                    "nama_pasangan": "Hj. Iriana, SE., MM.",
                    "jumlah_anak": "3",
                    "kelurahan_tinggal": "",
                    "kecamatan_tinggal": "",
                    "kab_kota_tinggal": "Jakarta Pusat",
                    "provinsi_tinggal": "DKI Jakarta",
                    "partai": {
                        "id": 4,
                        "nama": "Partai Demokrasi Indonesia"
                    },
                    "riwayat_pendidikan": [
                        {
                            "id": 1,
                            "ringkasan": "SDN III Tirtoyoso Solo",
                            "tanggal_mulai": "",
                            "tanggal_selesai": ""
                        },
                        {
                            "id": 2,
                            "ringkasan": "SMPN I Solo",
                            "tanggal_mulai": "",
                            "tanggal_selesai": ""
                        },
                        {
                            "id": 3,
                            "ringkasan": "SMAN 6 Solo",
                            "tanggal_mulai": "",
                            "tanggal_selesai": ""
                        },
                        {
                            "id": 4,
                            "ringkasan": "Fakultas Kehutanan UGM Yogyakarta",
                            "tanggal_mulai": "1985",
                            "tanggal_selesai": "1985"
                        }
                    ],
                    "riwayat_pekerjaan": [
                        {
                            "id": 5,
                            "ringkasan": "Eksportir Mebel",
                            "tanggal_mulai": "",
                            "tanggal_selesai": ""
                        },
                        {
                            "id": 6,
                            "ringkasan": "Walikota Surakarta",
                            "tanggal_mulai": "2005",
                            "tanggal_selesai": "2010"
                        },
                        {
                            "id": 7,
                            "ringkasan": "Walikota Surakarta",
                            "tanggal_mulai": "2010",
                            "tanggal_selesai": "2015"
                        },
                        {
                            "id": 8,
                            "ringkasan": "Gubernur Prov. DKI Jakarta",
                            "tanggal_mulai": "2012",
                            "tanggal_selesai": "2017"
                        }
                    ],
                }]
            }
        }


