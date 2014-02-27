FORMAT: 1A
HOST: http://www.pemiluapi.org/pendidikan/

# Pendidikan API
The Pendidikan API is a service that provides information about the Indonesian elections.

# Group Pertanyaan
Pertanyaan related resources of the **Pendidikan API**

## Pertanyaan Collection [/pertanyaan?apiKey={apiKey}&tags={tags}&limit={limit}&offset={offset}]
A list of Pertanyaan objects with abbreviated details (no riwayat pendidikan, pekerjaan, or organisasi)

+ Parameters
    + offset (optional, number, `300`) ... Number the offset from the beginning of the list of records to return (use in combination with `limit` to support pagination)
    + limit (optional, number, `25`) ... Number the number of records to return (use in combination with `offset` to support pagination)
    + tags (optional, string, `Caleg,Legaslatif`) ... String list of `tags` by which to filter the questions.
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.

### List Pertanyaan [GET]
+ Response 200 (application/json)

        {
            "results": {
                "count": 2,
                "total": 2,
                "pertanyaan": [{
                    "id": "002",
                    "question": "Kapan diselenggarakan Pemilu 2014?",
                    "answer": "Pada tanggal 9 April 2014 untuk Pemilu Legislatif dan 9 Juli 2014 untuk Pemilu Presiden. Jika terjadi putaran kedua dalam Pemilu Presiden, maka akan diselenggarakan pada bulan September 2014.",
                    "tags": [
                        "Legaslatif", "Presiden", "Jadwal"
                    ]
                }, {
                    "id": "003",
                    "question": "Siapa itu Pemilih?",
                    "answer": "Setiap warga Negara Indonesia yang telah memenuhi syarat sebagai pemilih untuk memberikan suara di Tempat Pemungutan Suara (TPS) sesuai ketentuan undang-undang.",
                    "tags": [
                        "TPS"
                    ]
                }]
            }
        }

## Pertanyaan [/pertanyaan/{id}?apiKey={apiKey}]
A single Pertanyaan object with all its details

+ Parameters
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.
    + id (required, string, `002`) ... String `id` of the Question to perform action with.

### Retrieve a Question [GET]
+ Response 200 (application/json)

        {
            "results": {
                "count": 1,
                "total": 1,
                "pertanyaan": [{
                    "id": "002",
                    "question": "Kapan diselenggarakan Pemilu 2014?",
                    "answer": "Pada tanggal 9 April 2014 untuk Pemilu Legislatif dan 9 Juli 2014 untuk Pemilu Presiden. Jika terjadi putaran kedua dalam Pemilu Presiden, maka akan diselenggarakan pada bulan September 2014.",
                    "tags": [
                        "Legaslatif", "Presiden", "Jadwal"
                    ]
                }]
            }
        }

# Group Tags
Tag related resources of the **Pendidikan API**

## Tags Collection [/tags?apiKey={apiKey}]
A list of Tags objects

+ Parameters
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.

### List all Tags [GET]
+ Response 200 (application/json)

        {
            "results": {
                "count": 9,
                "tags": [{
                    "tag": "women",
                    "question_count": 7
                }, {
                    "tag": "Legaslatif",
                    "question_count": 2
                }, {
                    "tag": "Presiden",
                    "question_count": 4
                }, {
                    "tag": "Jadwal",
                    "question_count": 15
                }, {
                    "tag": "TPS",
                    "question_count": 8
                }, {
                    "tag": "Warga Negara",
                    "question_count": 12
                }, {
                    "tag": "Persyaratan",
                    "question_count": 21
                }, {
                    "tag": "TPS",
                    "question_count": 17
                }, {
                    "tag": "Caleg",
                    "question_count": 2
                }]
            }
        }
