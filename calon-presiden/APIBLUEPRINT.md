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
                    "role": "capres"
                    "id_running_mate": "jk"
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
                    "biografi": "Joko Widodo atau Jokowi (lahir di Surakarta, Jawa Tengah, 21 Juni 1961; umur 52 tahun) adalah politikus Indonesia dan Gubernur DKI Jakarta. Ia adalah mantan Wali Kota Surakarta (Solo) dari tahun 2005 sampai 2012. Dua tahun sementara menjalani periode keduanya di Solo, Jokowi ditunjuk oleh partainya,Partai Demokrasi Indonesia Perjuangan (PDIP) untuk memasuki pemilihan Gubernur DKI Jakarta bersama dengan Basuki Tjahaja Purnama (Ahok).\n\nWalaupun pada masa kecilnya pernah tergusur sebanyak tiga kali, ia mampu diterima di Fakultas Kehutanan Universitas Gajah Mada dan setelah lulus berhasil menjadi pengusaha furnitur. Setelah itu, karier politiknya dimulai dengan menjadi Wali Kota Surakarta pada tahun 2005. Kemudian, pada tahun 2012, ia dicalonkan oleh PDI-P sebagai calon Gubernur DKI Jakarta.\n\nPada tanggal 20 September 2012, Jokowi berhasil memenangkan Pilkada Jakarta 2012, dan kemenangannya dianggap mencerminkan dukungan populer untuk seorang pemimpin yang ""baru"" dan ""bersih"", meskipun umurnya sudah lebih dari lima puluh tahun. Ia akan menjabat selama lima tahun dan berakhir pada tahun 2017. Selama menjabat sebagai gubernur, ia melancarkan berbagai program seperti Kartu Jakarta Sehat, Kartu Jakarta Pintar, lelang jabatan, pembangunan Angkutan Massal Cepat (MRT) dan Monorel, pengembalian fungsi waduk dan sungai, serta penyediaan ruang terbuka hijau.\n\nSemenjak terpilih sebagai gubernur, popularitasnya melambung tinggi dan ia terus menjadi sorotan media. Akibatnya, muncul wacana untuk menjadikannya calon presiden untuk pemilihan umum presiden Indonesia 2014. Ditambah lagi, hasil survei menunjukkan bahwa nama Jokowi terus diunggulkan. Pada awalnya, Ketua Umum PDI-P, Megawati Soekarnoputri menyatakan bahwa ia tidak akan mengumumkan Calon Presiden PDI-P sampai setelah pemilihan umum legislatif 9 April 2014. Namun, pada tanggal 14 Maret 2014, Jokowi telah menerima mandat dari Megawati untuk maju sebagai calon presiden dari PDI-P, tiga minggu sebelum pemilihan umum legislatif dan dua hari sebelum kampanye.",
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
                        }
                    ],
                    "riwayat_pekerjaan": [
                        {
                            "id": 3,
                            "ringkasan": "Eksportir Mebel",
                            "tanggal_mulai": "",
                            "tanggal_selesai": ""
                        },
                        {
                            "id": 4,
                            "ringkasan": "Walikota Surakarta",
                            "tanggal_mulai": "2005",
                            "tanggal_selesai": "2010"
                        }
                    ],
                    "riwayat_organisasi": [
                        {
                            "id": 5,
                            "ringkasan": "Bidang Pertambangan dan energi KADIN Surakarta",
                            "jabatan": "Ketua",
                            "tanggal_mulai": "1992",
                            "tanggal_selesai": "1996"
                        }, {
                            "id": 6,
                            "ringkasan": "ASMINDO Komda Surakarta",
                            "jabatan": "Ketua",
                            "tanggal_mulai": "2002",
                            "tanggal_selesai": "2007"
                        }
                    ],
                    "riwayat_penghargaan": [
                        {
                            "id": "7",
                            "ringkasan": "Satya Bhakti",
                            "institusi": "Kadin Jawa Tengah",
                            "tanggal": "2007"
                        }, {
                            "id": "8",
                            "ringkasan": "Solo Pos Award",
                            "institusi": "Solo Pos",
                            "tanggal": "2007"
                        }
                    ]
                }, {
                    "id": "ps",
                    "tahun": 2014,
                    "nama": "Prabowo Subianto",
                    "role": "capres"
                    "id_running_mate": "hr"
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
                    "biografi": "Letnan Jenderal TNI (Purn.) Prabowo Subianto Djojohadikusumo (lahir diJakarta, 17 Oktober 1951; umur 62 tahun) adalah seorang pengusaha, politisi, dan mantan perwira TNI Angkatan Darat. Ia menempuh pendidikan dan jenjang karier militer selama 28 tahun sebelum berkecimpung dalam bisnis dan politik. Bersama Hatta Rajasa, ia maju sebagai calon Presiden Indonesia ke-7 dalam pemilihan umum presiden Indonesia 2014.\n\nLahir di Jakarta, masa kecil Prabowo putra begawan ekonomi Soemitro Djojohadikoesoemo banyak dilewatkan di luar negeri bersama orangtuanya. Minatnya pada dunia militer dipengaruhi figur paman Soebianto Djojohadikusumo yang gugur dalam Pertempuran Lengkong 1946. Keluar sebagai lulusan terbaik Akademi Militer tahun 1974, Prabowo mencatatkan diri sebagai komandan termuda saat mengikuti operasi Tim Nanggala di Timor Timur. Kariernya melejit setelah menjabat Wakil Detasemen Penanggulangan Teror Komando Pasukan Khusus (Kopassus) pada 1983. Merengkuh jabatan Komandan Kopassus pada 1995, selang setahun ia dipromosikan sebagaiKomandan Jenderal Kopasus, memimpin operasi pembebasan sandera Mapenduma. Terakhir, ia bertugas sebagai Panglima Kostrad dua bulan sampai kejatuhan Presiden Soeharto pada Mei 1998.\n\nSetelah tidak aktif dalam dinas militer, Prabowo menghabiskan waktu di Yordania dan beberapa negera Eropa. Ia menekuni dunia bisnis, mengikuti adiknya Hashim Djojohadikusumo yang pengusaha minyak. Bisnis Prabo meliputi sedikitnya 27 perusahaan yang bergerak di sektor berbeda. Kembali ke Tanah Air, ia berkecimpung dalam politik. Pada 2008, ia bersama rekannya mengukuhkan pembentukan Partai Gerakan Indonesia Raya. Lewat jalur perhimpunan, Prabowo merangkul petani, pedagang pasar tradisional, dan kegiatan pencak silat Indonesia. Selama dua periode, ia memimpin Himpunan Kerukunan Tani Indonesia (HKTI) sejak 2004.",
                    "riwayat_pendidikan": [
                        {
                            "id": 7,
                            "ringkasan": "SD Victoria Institution, Kuala Lumpur",
                            "tanggal_mulai": "1960",
                            "tanggal_selesai": "1963"
                        },
                        {
                            "id": 8,
                            "ringkasan": "SMP International School, Zurich",
                            "tanggal_mulai": "1963",
                            "tanggal_selesai": "1964"
                        }
                    ],
                    "riwayat_pekerjaan": [
                        {
                            "id": 9,
                            "ringkasan": "Komandan Peleton Para Komando Group-1 Kopassandha",
                            "tanggal_mulai": "1976",
                            "tanggal_selesai": "1976"
                        },
                        {
                            "id": 10,
                            "ringkasan": "Komandan Kompi Para Komando Group-1 Kopassandha",
                            "tanggal_mulai": "1977",
                            "tanggal_selesai": "1977"
                        }
                    ],
                    "riwayat_organisasi": [
                        {
                            "id": 11,
                            "ringkasan": "Ketua Umum Dewan Mesjid Indonesia",
                            "jabatan": "Ketua",
                            "tanggal_mulai": "2010",
                            "tanggal_selesai": "2014"
                        }, {
                            "id": 12,
                            "ringkasan": "Ketua Umum Palang Merah Indonesia",
                            "jabatan": "Ketua",
                            "tanggal_mulai": "2009",
                            "tanggal_selesai": "2014"
                        }
                    ],
                    "riwayat_penghargaan": [
                        {
                            "id": "13",
                            "ringkasan": "Bintang Kartika Eka Paksi Nararya",
                            "institusi": "Tentara Nasional Indonesia (TNI) Angkatan Darat Republik Indonesia",
                            "tanggal": ""
                        }, {
                            "id": "14",
                            "ringkasan": "Bintang Yudha Dharma Nararya",
                            "institusi": "Tentara Nasional Indonesia (TNI) Angkatan Darat Republik Indonesia",
                            "tanggal": ""
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
                    "role": "capres"
                    "id_running_mate": "jk"
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
                    "biografi": "Joko Widodo atau Jokowi (lahir di Surakarta, Jawa Tengah, 21 Juni 1961; umur 52 tahun) adalah politikus Indonesia dan Gubernur DKI Jakarta. Ia adalah mantan Wali Kota Surakarta (Solo) dari tahun 2005 sampai 2012. Dua tahun sementara menjalani periode keduanya di Solo, Jokowi ditunjuk oleh partainya,Partai Demokrasi Indonesia Perjuangan (PDIP) untuk memasuki pemilihan Gubernur DKI Jakarta bersama dengan Basuki Tjahaja Purnama (Ahok).\n\nWalaupun pada masa kecilnya pernah tergusur sebanyak tiga kali, ia mampu diterima di Fakultas Kehutanan Universitas Gajah Mada dan setelah lulus berhasil menjadi pengusaha furnitur. Setelah itu, karier politiknya dimulai dengan menjadi Wali Kota Surakarta pada tahun 2005. Kemudian, pada tahun 2012, ia dicalonkan oleh PDI-P sebagai calon Gubernur DKI Jakarta.\n\nPada tanggal 20 September 2012, Jokowi berhasil memenangkan Pilkada Jakarta 2012, dan kemenangannya dianggap mencerminkan dukungan populer untuk seorang pemimpin yang ""baru"" dan ""bersih"", meskipun umurnya sudah lebih dari lima puluh tahun. Ia akan menjabat selama lima tahun dan berakhir pada tahun 2017. Selama menjabat sebagai gubernur, ia melancarkan berbagai program seperti Kartu Jakarta Sehat, Kartu Jakarta Pintar, lelang jabatan, pembangunan Angkutan Massal Cepat (MRT) dan Monorel, pengembalian fungsi waduk dan sungai, serta penyediaan ruang terbuka hijau.\n\nSemenjak terpilih sebagai gubernur, popularitasnya melambung tinggi dan ia terus menjadi sorotan media. Akibatnya, muncul wacana untuk menjadikannya calon presiden untuk pemilihan umum presiden Indonesia 2014. Ditambah lagi, hasil survei menunjukkan bahwa nama Jokowi terus diunggulkan. Pada awalnya, Ketua Umum PDI-P, Megawati Soekarnoputri menyatakan bahwa ia tidak akan mengumumkan Calon Presiden PDI-P sampai setelah pemilihan umum legislatif 9 April 2014. Namun, pada tanggal 14 Maret 2014, Jokowi telah menerima mandat dari Megawati untuk maju sebagai calon presiden dari PDI-P, tiga minggu sebelum pemilihan umum legislatif dan dua hari sebelum kampanye.",
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
                        }
                    ],
                    "riwayat_pekerjaan": [
                        {
                            "id": 3,
                            "ringkasan": "Eksportir Mebel",
                            "tanggal_mulai": "",
                            "tanggal_selesai": ""
                        },
                        {
                            "id": 4,
                            "ringkasan": "Walikota Surakarta",
                            "tanggal_mulai": "2005",
                            "tanggal_selesai": "2010"
                        }
                    ],
                    "riwayat_organisasi": [
                        {
                            "id": 5,
                            "ringkasan": "Bidang Pertambangan dan energi KADIN Surakarta",
                            "jabatan": "Ketua",
                            "tanggal_mulai": "1992",
                            "tanggal_selesai": "1996"
                        }, {
                            "id": 6,
                            "ringkasan": "ASMINDO Komda Surakarta",
                            "jabatan": "Ketua",
                            "tanggal_mulai": "2002",
                            "tanggal_selesai": "2007"
                        }
                    ],
                    "riwayat_penghargaan": [
                        {
                            "id": "7",
                            "ringkasan": "Satya Bhakti",
                            "institusi": "Kadin Jawa Tengah",
                            "tanggal": "2007"
                        }, {
                            "id": "8",
                            "ringkasan": "Solo Pos Award",
                            "institusi": "Solo Pos",
                            "tanggal": "2007"
                        }
                    ]
                }]
            }
        }


# Group Events
Events related resources of the **Presidential Candidate API**

## Events Collection [/events?apiKey={apiKey}&id_calon={id_calon}&tags={tags}&before={before}&after={after}&limit={limit}&offset={offset}]
A list of Event objects

+ Parameters
    + offset (optional, number, `300`) ... Number the offset from the beginning of the list of records to return (use in combination with `limit` to support pagination)
    + limit (optional, number, `25`) ... Number the number of records to return (use in combination with `offset` to support pagination)
    + after (optional, date, `2014-05-21`) ... String return events only on or after this date
    + before (optional, date, `2014-06-21`) ... String return events only on or before this date
    + tags (optional, string, `women,participation`) ... String list of `tags` by which to filter the events.
    + id_calon (optional, string, `ps`) ... String list of candidate IDs for the candidate or candidates related to the events
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.

### List all Events [GET]
+ Response 200 (application/json)

        {
            "results": {
                "count": 3,
                "events": [{
                    "id": "0001",
                    "id_calon": ["ps", "jw"],
                    "judul": "Debat Capres di SCTV",
                    "deskripsi": "Dua orang capres akan berdebat dalam acara yang diselenggarakan oleh salah satu Televisi Swasta yaitu SCTV",
                    "tanggal_mulai": "2014-06-08",
                    "waktu_mulai": "",
                    "tanggal_selesai": "2014-06-08",
                    "waktu_selesai": "",
                    "tags": ["debat", "capres", "televisi"]
                }, {
                    "id": "0002",
                    "id_calon": ["ps", "jw"],
                    "judul": "Debat Capres di TV One",
                    "deskripsi": "Dua orang capres akan berdebat dalam acara yang diselenggarakan oleh salah satu Televisi Swasta yaitu TV One",
                    "tanggal_mulai": "2014-06-22",
                    "waktu_mulai": "",
                    "tanggal_selesai": "2014-06-22",
                    "waktu_selesai": "",
                    "tags": ["debat", "capres", "televisi"]
                }, {
                    "id": "0003",
                    "id_calon": ["jk", "hr"],
                    "judul": "Debat Cawapres di Metro TV",
                    "deskripsi": "Dua orang cawapres akan berdebat dalam acara yang diselenggarakan oleh salah satu Televisi Swasta yaitu Metro TV",
                    "tanggal_mulai": "2014-06-15",
                    "waktu_mulai": "",
                    "tanggal_selesai": "2014-06-15",
                    "waktu_selesai": "",
                    "tags": ["debat", "capres", "televisi", "cawapres"]
                }]
            }
        }

## Events [/events/{id}?apiKey={apiKey}]
A single Events object with all its details

+ Parameters
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.
    + id (required, string, `0003`) ... String `id` of the event to perform action with.

### Retrieve a Event [GET]
+ Response 200 (application/json)

        {
            "results": {
                "count": 1,
                "events": [{
                    "id": "0003",
                    "id_calon": ["jk", "hr"],
                    "judul": "Debat Cawapres di Metro TV",
                    "deskripsi": "Dua orang cawapres akan berdebat dalam acara yang diselenggarakan oleh salah satu Televisi Swasta yaitu Metro TV",
                    "tanggal_mulai": "2014-06-15",
                    "waktu_mulai": "",
                    "tanggal_selesai": "2014-06-15",
                    "waktu_selesai": "",
                    "tags": ["debat", "capres", "televisi", "cawapres"]
                }]
            }
        }


# Group Promises
Promises related resources of the **Presidential Candidate API**

## Promises Collection [/promises?apiKey={apiKey}&id_calon={id_calon}&tags={tags}&limit={limit}&offset={offset}]
A list of Promise objects

+ Parameters
    + offset (optional, number, `300`) ... Number the offset from the beginning of the list of records to return (use in combination with `limit` to support pagination)
    + limit (optional, number, `25`) ... Number the number of records to return (use in combination with `offset` to support pagination)
    + tags (optional, string, `women,participation`) ... String list of `tags` by which to filter the promises.
    + id_calon (optional, string, `ps`) ... String list of candidate IDs for the candidate or candidates related to the promises
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.

### List all Promises [GET]
+ Response 200 (application/json)

        {
            "results": {
                "count": 3,
                "promises": [{
                    "id": "0001",
                    "id_calon": "jw",
                    "context_janji": "Tetap akan mengawal pembangunan di Jakarta",
                    "janji": "Ya tentu saja akan mengawal, karena apa? Ini Jakarta menyangkut Jabodetabek, untuk transportasi Ini justru bisa mempercepat penyelesaian masalah-masalah yang ada",
                    "tanggal": "2014-03-24",
                    "judul_sumber": "merdeka.com",
                    "url_sumber": "https://id.berita.yahoo.com/jika-jadi-presiden-jokowi-janji-tetap-benahi-jakarta-072751011.html",
                    "tags": ["janji","jokowi","pembangunan jakarta"]
                }, {
                    "id": "0002",
                    "id_calon": "jw",
                    "context_janji": "Selamatkan lahan pertanian",
                    "janji": "Jokowi mengatakan jika terpilih menjadi presiden maka ia akan fokus pada penanganan lahan untuk masyarakat. Terutama lahan yang digunakan sebagai lahan pertanian",
                    "tanggal": "2014-05-01",
                    "judul_sumber": "merdeka.com",
                    "url_sumber": "https://id.berita.yahoo.com/jadi-presiden-jokowi-janji-ke-petani-selamatkan-lahan-064346728.html",
                    "tags": ["janji","jokowi","lahan pertanian"]
                }, {
                    "id": "0003",
                    "id_calon": "jw",
                    "context_janji": "Memperbaiki capaian kinerja pemerintahan SBY",
                    "janji": "Calon presiden dari partai PDIP, Joko Widodo menyatakan siap memperbaiki capaian kinerja Pemerintahan pimpinan Susilo Bambang Yudhoyono (SBY)",
                    "tanggal": "2014-04-30",
                    "judul_sumber": "portalkbr.com",
                    "url_sumber": "http://www.portalkbr.com/berita/beritapemilu/3229825_6033.html",
                    "tags": ["janji","jokowi","kinerja"]
                }]
            }
        }

## Promises [/promises/{id}?apiKey={apiKey}]
A single Promises object with all its details

+ Parameters
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.
    + id (required, string, `0003`) ... String `id` of the promise to perform action with.

### Retrieve a Promise [GET]
+ Response 200 (application/json)

        {
            "results": {
                "count": 1,
                "promises": [{
                    "id": "0003",
                    "id_calon": "jw",
                    "context_janji": "Memperbaiki capaian kinerja pemerintahan SBY",
                    "janji": "Calon presiden dari partai PDIP, Joko Widodo menyatakan siap memperbaiki capaian kinerja Pemerintahan pimpinan Susilo Bambang Yudhoyono (SBY)",
                    "tanggal": "2014-04-30",
                    "judul_sumber": "portalkbr.com",
                    "url_sumber": "http://www.portalkbr.com/berita/beritapemilu/3229825_6033.html",
                    "tags": ["janji","jokowi","kinerja"]
                }]
            }
        }


# Group Videos
Videos related resources of the **Presidential Candidate API**

## Videos Collection [/videos?apiKey={apiKey}&id_calon={id_calon}&tags={tags}&limit={limit}&offset={offset}]
A list of Video objects

+ Parameters
    + offset (optional, number, `300`) ... Number the offset from the beginning of the list of records to return (use in combination with `limit` to support pagination)
    + limit (optional, number, `25`) ... Number the number of records to return (use in combination with `offset` to support pagination)
    + tags (optional, string, `women,participation`) ... String list of `tags` by which to filter the videos.
    + id_calon (optional, string, `ps`) ... String list of candidate IDs for the candidate or candidates related to the events
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.

### List all Videos [GET]
+ Response 200 (application/json)

        {
            "results": {
                "count": 3,
                "videos": [{
                    "id": "0001",
                    "id_calon": ["ps"],
                    "judul": "Prabowo Subianto: Orasi Politik Prabowo Subianto pada Hari Buruh",
                    "url_video": "http://www.youtube.com/watch?v=UH73XrMKxUI",
                    "tanggal_direkam": "2014-05-01",
                    "tanggal_upload": "2014-05-01",
                    "tags": ["orasi", "pidato", "prabowo"]
                }, {
                    "id": "0002",
                    "id_calon": ["ps"],
                    "judul": "Pidato Letjen TNI Prabowo Subianto satu bulan sebelum Presiden Soeharto Lengser pada acara Syukuran Pangkostrad",
                    "url_video": "http://www.youtube.com/watch?v=0aWF8S9HJCw",
                    "tanggal_direkam": "1998-04-21",
                    "tanggal_upload": "2013-05-13",
                    "tags": ["orasi", "pidato", "prabowo"]
                }, {
                    "id": "0003",
                    "id_calon": ["ps"],
                    "judul": "Prabowo Subianto berbicara dengan Dalton Tanonaka mengenai keinginannya menjadi presiden Republik Indonesia, kepergiannya ke Jordan tahun 1998, berakhirnya dukungan Prabowo kepada SBY, pesan yang ingin disampaikan dengan Partai Gerindra, kerusuhan 1998, penculikan aktivis demokrasi 1998, tuduhan kekerasan terhadap suku Cina, visa Amerika, dan orang-orang yang mempengaruhi cara berpikir Prabowo. Direkam tahun 2008.",
                    "url_video": "http://www.youtube.com/watch?v=08SMkHVMK3E",
                    "tanggal_direkam": "2008",
                    "tanggal_upload": "2011-12-05",
                    "tags": ["interview", "prabowo"]
                }]
            }
        }

## Videos [/videos/{id}?apiKey={apiKey}]
A single Videos object with all its details

+ Parameters
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.
    + id (required, string, `0003`) ... String `id` of the Video to perform action with.

### Retrieve a Video [GET]
+ Response 200 (application/json)

        {
            "results": {
                "count": 1,
                "videos": [{
                    "id": "0003",
                    "id_calon": ["ps"],
                    "judul": "Prabowo Subianto berbicara dengan Dalton Tanonaka mengenai keinginannya menjadi presiden Republik Indonesia, kepergiannya ke Jordan tahun 1998, berakhirnya dukungan Prabowo kepada SBY, pesan yang ingin disampaikan dengan Partai Gerindra, kerusuhan 1998, penculikan aktivis demokrasi 1998, tuduhan kekerasan terhadap suku Cina, visa Amerika, dan orang-orang yang mempengaruhi cara berpikir Prabowo. Direkam tahun 2008.",
                    "url_video": "http://www.youtube.com/watch?v=08SMkHVMK3E",
                    "tanggal_direkam": "2008",
                    "tanggal_upload": "2011-12-05",
                    "tags": ["interview", "prabowo"]
                }]
            }
        }
