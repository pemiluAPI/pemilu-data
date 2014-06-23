FORMAT: 1A
HOST: http://api.pemiluapi.org/candidate/api/

# Candidate API
The Candidate API is a service that provides information about candidates running for office in the 2014 Indonesian elections. It's part of [API Pemilu](http://developer.pemiluapi.org/)

Sample calls:

[Candidates](#candidates)
==========

**List candidates**

[http://api.pemiluapi.org/candidate/api/caleg?apiKey=fea6f7d9ec0b31e256a673114792cb17&limit=25](http://api.pemiluapi.org/candidate/api/caleg?apiKey=fea6f7d9ec0b31e256a673114792cb17&limit=25)

**Get a single candidate's information**

[http://api.pemiluapi.org/candidate/api/caleg/8200-00-0000-0029?apiKey=fea6f7d9ec0b31e256a673114792cb17](http://api.pemiluapi.org/candidate/api/caleg/8200-00-0000-0029?apiKey=fea6f7d9ec0b31e256a673114792cb17)

**Get a list of woman candidates who were elected to the DPR**

[http://api.pemiluapi.org/candidate/api/caleg?apiKey=fea6f7d9ec0b31e256a673114792cb17&jenis_kelamin=p&acara_terpilih=true&lembaga=dpr](http://api.pemiluapi.org/candidate/api/caleg?apiKey=fea6f7d9ec0b31e256a673114792cb17&jenis_kelamin=p&acara_terpilih=true&lembaga=dpr)

[Parties](#parties)
=======

**List parties**

[http://api.pemiluapi.org/candidate/api/partai?apiKey=fea6f7d9ec0b31e256a673114792cb17](http://api.pemiluapi.org/candidate/api/partai?apiKey=fea6f7d9ec0b31e256a673114792cb17)

[Provinces](#provinces)
=======

**List provinces**

[http://api.pemiluapi.org/candidate/api/provinsi?apiKey=fea6f7d9ec0b31e256a673114792cb17](http://api.pemiluapi.org/candidate/api/provinsi?apiKey=fea6f7d9ec0b31e256a673114792cb17)

[Electoral Districts](#electoraldistricts)
=======

**List electoral districts**

[http://api.pemiluapi.org/candidate/api/dapil?apiKey=fea6f7d9ec0b31e256a673114792cb17](http://api.pemiluapi.org/candidate/api/dapil?apiKey=fea6f7d9ec0b31e256a673114792cb17)


# Group Candidates
Candidates related resources of the **Candidates API**

## Candidates Collection [/caleg?apiKey={apiKey}&tahun={tahun}&lembaga={lembaga}&acara_terpilih={acara_terpilih}&jenis_kelamin={jenis_kelamin}&agama={agama}&provinsi={provinsi}&dapil={dapil}&partai={partai}&nama={nama}&limit={limit}&offset={offset}]
A list of Candidates objects with abbreviated details (no riwayat pendidikan, pekerjaan, or organisasi)

+ Parameters
    + offset (optional, number, `300`) ... Number the offset from the beginning of the list of records to return (use in combination with `limit` to support pagination)
    + limit (optional, number, `25`) ... Number the number of records to return (use in combination with `offset` to support pagination)
    + nama (optional, string, `afzal`) ... String full or partial `nama` (name) of the candidate. Will return all matching records.
    + partai (optional, string, `1`) ... String id of the `partai` (party) that the candidate is a member of
    + dapil (optional, string, `1101-00-0000`) ... String id of the `dapil` (electoral district) that the candidate is running in.
    + provinsi (optional, string, `11`) ... String id of the `provinsi` (province) that the candidate is running in.
    + agama (optional, string, `islam`) ... String full or partial `agama` (religion) of the candidate. Will return all matching records.
    + jenis_kelamin (optional, string, `L`) ... String `jenis_kelamin` (gender) of the candidate.
    + acara_terpilih (optional, string, `true`) ... String if true, show only candidates who were elected
    + lembaga (optional, string, `DPD`) ... String `lembaga` (legislative body) that the candidate is running for.
    + tahun (optional, number, `2014`) ... Number `tahun` (election year) that the candidate is running for.
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.

### List Candidates [GET]
+ Response 200 (application/json)

        {
            "results": {
                "count": 2,
                "total": 2,
                "caleg": [{
                    "id": "1101-00-0000-0101",
                    "tahun": 2014,
                    "lembaga": "DPR",
                    "nama": "PROF. DR. BACHTIAR ALY, MA",
                    "jenis_kelamin": "L",
                    "agama": "ISLAM",
                    "tempat_lahir": "BANDA ACEH",
                    "tanggal_lahir": "1949-12-21",
                    "status_perkawinan": "KAWIN",
                    "nama_pasangan": "HJ. RR. INDRIJATI INAWANGSIH, SE",
                    "jumlah_anak": "2",
                    "kelurahan_tinggal": "PAMULANG TIMUR",
                    "kecamatan_tinggal": "PAMULANG",
                    "kab_kota_tinggal": "KOTA TANGERANG SELATAN",
                    "provinsi_tinggal": "BANTEN",
                    "provinsi": {
                        "id": 11,
                        "nama": "Aceh"
                    },
                    "dapil": {
                        "id": "1101-00-0000",
                        "nama": "Aceh I"
                    },
                    "partai": {
                        "id": "1",
                        "nama": "Partai NasDem"
                    },
                    "urutan": 1,
                    "foto_url": "http:\/\/dct.kpu.go.id\/images\/foto\/DPR\/1101.%20ACEH%20I\/01.%20NASDEM\/01.%20PROF.%20DR.%20BACHTIAR%20ALY%2C%20MA.jpg",
                    "suara_sah": 38820,
                    "peringkat_suara_sah_calon": 1,
                    "terpilih": "true"
                }, {
                    "id": "1101-00-0000-0102",
                    "tahun": 2014,
                    "lembaga": "DPR",
                    "nama": "Drs. H. T. PRIBADI",
                    "jenis_kelamin": "L",
                    "agama": "ISLAM",
                    "tempat_lahir": "BANDA ACEH",
                    "tanggal_lahir": "1950-01-19",
                    "status_perkawinan": "KAWIN",
                    "nama_pasangan": "CUT MUSRI",
                    "jumlah_anak": "3",
                    "kelurahan_tinggal": "GEUCEU INIEM",
                    "kecamatan_tinggal": "BANDA RAYA",
                    "kab_kota_tinggal": "KOTA BANDA ACEH",
                    "provinsi_tinggal": "ACEH",
                    "provinsi": {
                        "id": 11,
                        "nama": "Aceh"
                    },
                    "dapil": {
                        "id": "1101-00-0000",
                        "nama": "Aceh I"
                    },
                    "partai": {
                        "id": "1",
                        "nama": "Partai NasDem"
                    },
                    "urutan": 2,
                    "foto_url": "http:\/\/dct.kpu.go.id\/images\/foto\/DPR\/1101.%20ACEH%20I\/01.%20NASDEM\/02.%20DRS.%20H.T.%20PRIBADI.JPG",
                    "suara_sah": 16523,
                    "peringkat_suara_sah_calon": 3,
                    "terpilih": "false"
                }]
            }
        }

## Candidates [/caleg/{id}?apiKey={apiKey}]
A single Candidates object with all its details

+ Parameters
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.
    + id (required, string, `1101-00-0000-0101`) ... String `id` of the Candidate to perform action with.

### Retrieve a Candidate [GET]
+ Response 200 (application/json)

        {
            "results": {
                "count": 1,
                "total": 1,
                "caleg": [
                    {
                        "id": "1101-00-0000-0102",
                        "tahun": 2014,
                        "lembaga": "DPR",
                        "nama": "Drs. H. T. PRIBADI",
                        "jenis_kelamin": "L",
                        "agama": "ISLAM",
                        "tempat_lahir": "BANDA ACEH",
                        "tanggal_lahir": "1950-01-19",
                        "status_perkawinan": "KAWIN",
                        "nama_pasangan": "CUT MUSRI",
                        "jumlah_anak": "3",
                        "kelurahan_tinggal": "GEUCEU INIEM",
                        "kecamatan_tinggal": "BANDA RAYA",
                        "kab_kota_tinggal": "KOTA BANDA ACEH",
                        "provinsi_tinggal": "ACEH",
                        "riwayat_pendidikan": [{
                            "id": 9,
                            "ringkasan": "1982-1983, S1, UNIVERSITAS ISKANDAR MUDA, BANDA ACEH"
                        }],
                        "riwayat_pekerjaan": [{
                            "id": 7,
                            "ringkasan": "2006-2007, PEMERINTAHAN, PEJABAT BUPATI ACEH UTARA"
                        }],
                        "riwayat_organisasi": [{
                            "id": 7,
                            "ringkasan": "1991-1991, GM KOSGORO, WAKIL KETUA DPD, ACEH"
                        }, {
                            "id": 8,
                            "ringkasan": "2009-2002, SOKSI, WAKIL KETUA, ACEH"
                        }, {
                            "id": 9,
                            "ringkasan": "2010-2013, NASIONAL DEMOKRAT, KETUA DPW, ACEH"
                        }, {
                            "id": 10,
                            "ringkasan": "2011-2013, PARTAI NASDEM, KETUA DEWAN PERTIMBANGAN, ACEH"
                        }],
                        "provinsi": {
                            "id": 11,
                            "nama": "Aceh"
                        },
                        "dapil": {
                            "id": "1101-00-0000",
                            "nama": "Aceh I"
                        },
                        "partai": {
                            "id": "1",
                            "nama": "Partai NasDem"
                        },
                        "urutan": 2,
                        "foto_url": "http:\/\/dct.kpu.go.id\/images\/foto\/DPR\/1101.%20ACEH%20I\/01.%20NASDEM\/02.%20DRS.%20H.T.%20PRIBADI.JPG",
                        "suara_sah": 16523,
                        "peringkat_suara_sah_calon": 3,
                        "terpilih": "false"
                    }
                ]
            }
        }


# Group Parties
Parties related resources of the **Candidates API**

## Parties Collection [/partai?apiKey={apiKey}]
A list of Parties objects

+ Parameters
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.

### List all Parties [GET]
+ Response 200 (application/json)

        {
            "results": {
                "count": 3,
                "partai": [{
                    "id": "1",
                    "nama": "Partai NasDem",
                    "nama_lengkap": "Partai NasDem",
                    "url_situs": "http://www.partainasdem.org/",
                    "url_facebook": "https://www.facebook.com/pages/Partai-Nasdem/135724689838285",
                    "url_twitter": "https://twitter.com/NasDem",
                    "url_logo_mini": "http://apipemilu-caleg.s3-website-ap-southeast-1.amazonaws.com/partai/logos/01-17.jpg",
                    "url_logo_small": "http://apipemilu-caleg.s3-website-ap-southeast-1.amazonaws.com/partai/logos/01-100.jpg",
                    "url_logo_medium": "http://apipemilu-caleg.s3-website-ap-southeast-1.amazonaws.com/partai/logos/01-200.jpg"
                }, {
                    "id": "2",
                    "nama": "PKB",
                    "nama_lengkap": "Partai Kebangkitan Bangsa",
                    "url_situs": "http://www.dpp.pkb.or.id/",
                    "url_facebook": "https://www.facebook.com/pages/DPP-PKB/167600963307010",
                    "url_twitter": "https://twitter.com/PKB_News_Online",
                    "url_logo_mini": "http://apipemilu-caleg.s3-website-ap-southeast-1.amazonaws.com/partai/logos/02-17.jpg",
                    "url_logo_small": "http://apipemilu-caleg.s3-website-ap-southeast-1.amazonaws.com/partai/logos/02-100.jpg",
                    "url_logo_medium": "http://apipemilu-caleg.s3-website-ap-southeast-1.amazonaws.com/partai/logos/02-200.jpg"
                }, {
                    "id": "3",
                    "nama": "PKS",
                    "nama_lengkap": "Partai Keadilan Sejahtera",
                    "url_situs": "http://www.pks.or.id/",
                    "url_facebook": "https://www.facebook.com/HumasPartaiKeadilanSejahtera",
                    "url_twitter": "https://twitter.com/PKSejahtera",
                    "url_logo_mini": "http://apipemilu-caleg.s3-website-ap-southeast-1.amazonaws.com/partai/logos/03-17.jpg",
                    "url_logo_small": "http://apipemilu-caleg.s3-website-ap-southeast-1.amazonaws.com/partai/logos/03-100.jpg",
                    "url_logo_medium": "http://apipemilu-caleg.s3-website-ap-southeast-1.amazonaws.com/partai/logos/03-200.jpg"
                }]
            }
        }

## Parties [/partai/{id}?apiKey={apiKey}]
A single Parties object with all its details

+ Parameters
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.
    + id (required, string, `3`) ... String `id` of the Party to perform action with.

### Retrieve a Party [GET]
+ Response 200 (application/json)

        {
            "results": {
                "count": 1,
                "partai": [{
                    "id": "3",
                    "nama": "PKS",
                    "nama_lengkap": "Partai Keadilan Sejahtera",
                    "url_situs": "http://www.pks.or.id/",
                    "url_facebook": "https://www.facebook.com/HumasPartaiKeadilanSejahtera",
                    "url_twitter": "https://twitter.com/PKSejahtera",
                    "url_logo_mini": "http://apipemilu-caleg.s3-website-ap-southeast-1.amazonaws.com/partai/logos/03-17.jpg",
                    "url_logo_small": "http://apipemilu-caleg.s3-website-ap-southeast-1.amazonaws.com/partai/logos/03-100.jpg",
                    "url_logo_medium": "http://apipemilu-caleg.s3-website-ap-southeast-1.amazonaws.com/partai/logos/03-200.jpg"
                }]
            }
        }

# Group Provinces
Provinces related resources of the **Candidates API**

## Provinces Collection [/provinsi?apiKey={apiKey}]
A list of Province objects with abbreviated details (no contained dapil)

+ Parameters
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.

### List all Provinces [GET]
+ Response 200 (application/json)

        {
            "results": {
                "count": 2,
                "provinsi": [{
                    "id": "11",
                    "nama": "Aceh",
                    "nama_lengkap": "Aceh",
                    "nama_inggris": "Special Region of Aceh",
                    "jumlah_kursi": 13,
                    "jumlah_penduduk": 5015234,
                    "pro_id": 1
                }, {
                    "id": "12",
                    "nama": "Sumut",
                    "nama_lengkap": "Sumatera Utara",
                    "nama_inggris": "North Sumatra",
                    "jumlah_kursi": 30,
                    "jumlah_penduduk": 15227719,
                    "pro_id": 6728
                }]
            }
        }

## Provinces [/provinsi/{id}?apiKey={apiKey}]
A single Provinces object with all its details

+ Parameters
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.
    + id (required, string, `11`) ... String `id` of the Province to perform action with.

### Retrieve a Province [GET]
+ Response 200 (application/json)

        {
            "data": {
                "results": {
                    "count": 1,
                    "total": 1,
                    "provinsi": [{
                        "id": 11,
                        "nama": "Aceh",
                        "nama_lengkap": "Aceh",
                        "nama_inggris": "Special Region of Aceh",
                        "jumlah_kursi": 13,
                        "jumlah_penduduk": 5015234,
                        "pro_id": 1,
                        "dapil": [{
                            "id": "1101-00-0000",
                            "nama": "Aceh I"
                        }, {
                            "id": "1100-01-0000",
                            "nama": "Aceh 1"
                        }, {
                            "id": "1100-01-0101",
                            "nama": "Aceh Besar 1"
                        }, {
                            "id": "1100-01-0102",
                            "nama": "Aceh Besar 2"
                        }, {
                            "id": "1100-01-0103",
                            "nama": "Aceh Besar 3"
                        }, {
                            "id": "1100-01-0104",
                            "nama": "Aceh Besar 4"
                        }, {
                            "id": "1100-01-0105",
                            "nama": "Aceh Besar 5"
                        }, {
                            "id": "1100-01-0201",
                            "nama": "Kota Banda Aceh 1"
                        }, {
                            "id": "1100-01-0202",
                            "nama": "Kota Banda Aceh 2"
                        }, {
                            "id": "1100-01-0203",
                            "nama": "Kota Banda Aceh 3"
                        }, {
                            "id": "1100-01-0204",
                            "nama": "Kota Banda Aceh 4"
                        }, {
                            "id": "1100-01-0205",
                            "nama": "Kota Banda Aceh 5"
                        }, {
                            "id": "1100-01-0301",
                            "nama": "Kota Sabang 1"
                        }, {
                            "id": "1100-01-0302",
                            "nama": "Kota Sabang 2"
                        }]
                    }]
                }
            }
        }


# Group Electoral Districts
Electoral Districts related resources of the **Candidates API**

## Electoral Districts Collection [/dapil?apiKey={apiKey}&provinsi={provinsi}&lembaga={lembaga}]
A list of Electoral Districts objects

+ Parameters
    + lembaga (optional, string, `DPRDI`) ... String name of the `lembaga` (electoral body) to filter the districts by.
    + provinsi (optional, string, `11`) ... String id of the `provinsi` (province) to filter the districts by.
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.

### List all Electoral Districts [GET]
+ Response 200 (application/json)

        {
            "results": {
                "count": 6,
                "dapil": [{
                    "id": "1101-00-0000",
                    "nama": "Aceh I",
                    "nama_lengkap": "Aceh I",
                    "nama_lembaga": "DPR",
                    "jumlah_kursi": 7,
                    "jumlah_penduduk": 2642760,
                    "provinsi": {
                        "id": "11",
                        "nama": "Aceh"
                    }
                }, {
                    "id": "1100-01-0000",
                    "nama": "Aceh 1",
                    "nama_lengkap": "Aceh 1",
                    "nama_lembaga": "DPRDI",
                    "jumlah_kursi": 11,
                    "jumlah_penduduk": 0,
                    "provinsi": {
                        "id": "11",
                        "nama": "Aceh"
                    }
                }, {
                    "id": "1100-01-0101",
                    "nama": "Aceh Besar 1",
                    "nama_lengkap": "Aceh Besar 1",
                    "nama_lembaga": "DPRDII",
                    "jumlah_kursi": 7,
                    "jumlah_penduduk": 0,
                    "provinsi": {
                        "id": "11",
                        "nama": "Aceh"
                    }
                }, {
                    "id": "1201-00-0000",
                    "nama": "Sumut I",
                    "nama_lengkap": "Sumatera Utara I",
                    "nama_lembaga": "DPR",
                    "jumlah_kursi": 10,
                    "jumlah_penduduk": 2686316,
                    "provinsi": {
                        "id": "12",
                        "nama": "Sumut"
                    }
                }, {
                    "id": "1200-01-0000",
                    "nama": "Sumut 1",
                    "nama_lengkap": "Sumatera Utara 1",
                    "nama_lembaga": "DPRDI",
                    "jumlah_kursi": 10,
                    "jumlah_penduduk": 0,
                    "provinsi": {
                        "id": "12",
                        "nama": "Sumut"
                    }
                }, {
                    "id": "1200-01-0101",
                    "nama": "Kota Medan 1",
                    "nama_lengkap": "Kota Medan 1",
                    "nama_lembaga": "DPRDII",
                    "jumlah_kursi": 11,
                    "jumlah_penduduk": 0,
                    "provinsi": {
                        "id": "12",
                        "nama": "Sumut"
                    }
                }]
            }
        }

## Electoral Districts [/dapil/{id}?apiKey={apiKey}]
A single Electoral District object with all its details

+ Parameters
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.
    + id (required, string, `1101-00-0000`) ... String `id` of the Electoral District to perform action with.

### Retrieve an Electoral District [GET]
+ Response 200 (application/json)

        {
            "results": {
                "count": 1,
                "dapil": [{
                    "id": "1101-00-0000",
                    "nama": "Aceh I",
                    "nama_lengkap": "Aceh I",
                    "nama_lembaga": "DPR",
                    "jumlah_kursi": 7,
                    "jumlah_penduduk": 2642760,
                    "provinsi": {
                        "id": "11",
                        "nama": "Aceh"
                    }
                }]
            }
        }

