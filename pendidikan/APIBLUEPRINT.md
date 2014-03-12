FORMAT: 1A
HOST: http://api.pemiluapi.org/pendidikan/api/

# Pendidikan API
The Pendidikan API is a service that provides answers to common questions about the Indonesian elections. It's part of [API Pemilu](http://developer.pemiluapi.org/)

Sample call: [http://api.pemiluapi.org/pendidikan/api/pertanyaan?apiKey=fea6f7d9ec0b31e256a673114792cb17](http://api.pemiluapi.org/pendidikan/api/pertanyaan?apiKey=fea6f7d9ec0b31e256a673114792cb17)

# Group Pertanyaan
Question related resources of the **Pendidikan API**

## Pertanyaan Collection [/pertanyaan?apiKey={apiKey}&tags={tags}&limit={limit}&offset={offset}]
A list of Question objects

+ Parameters
    + offset (optional, number, `300`) ... Number the offset from the beginning of the list of records to return (use in combination with `limit` to support pagination)
    + limit (optional, number, `25`) ... Number the number of records to return (use in combination with `offset` to support pagination)
    + tags (optional, string, `Caleg,Legaslatif`) ... String list of `tags` by which to filter the questions.
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.

### List Pertanyaan [GET]
+ Response 200 (application/json)

        {
            "data": {
                "results": {
                    "count": 2,
                    "total": 2,
                    "questions": [{
                        "id": "001",
                        "question": "Apa itu Pemilu?",
                        "answer": "Sarana pelaksanaan kedaulatan rakyat dalam memilih Presiden, DPR, DPD, DPRD Provinsi, dan DPRD Kabupaten\/Kota.",
                        "tags": ["Pilpres", "Pilleg"]
                    }, {
                        "id": "002",
                        "question": "Kapan diselenggarakan Pemilu 2014?",
                        "answer": "Pada tanggal 9 April 2014 untuk Pemilu Legislatif dan 9 Juli 2014 untuk Pemilu Presiden. Jika terjadi putaran kedua dalam Pemilu Presiden, maka akan diselenggarakan pada bulan September 2014.",
                        "tags": ["Legislatif", "Presiden", "Jadwal"]
                    }]
                }
            }
        }

## Pertanyaan [/pertanyaan/{id}?apiKey={apiKey}]
A single Question object with all its details

+ Parameters
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.
    + id (required, string, `002`) ... String `id` of the Question to perform action with.

### Retrieve a Question [GET]
+ Response 200 (application/json)

        {
            "data": {
                "results": {
                    "count": 1,
                    "total": 1,
                    "questions": [{
                        "id": "002",
                        "question": "Kapan diselenggarakan Pemilu 2014?",
                        "answer": "Pada tanggal 9 April 2014 untuk Pemilu Legislatif dan 9 Juli 2014 untuk Pemilu Presiden. Jika terjadi putaran kedua dalam Pemilu Presiden, maka akan diselenggarakan pada bulan September 2014.",
                        "tags": ["Legislatif", "Presiden", "Jadwal"]
                    }]
                }
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
            "data": {
                "results": {
                    "count": 9,
                    "tags": [{
                        "tag": null,
                        "question_count": 1
                    }, {
                        "tag": "Bawaslu",
                        "question_count": 1
                    }, {
                        "tag": "Berhalangan",
                        "question_count": 1
                    }, {
                        "tag": "Caleg",
                        "question_count": 1
                    }, {
                        "tag": "Cara Pilih",
                        "question_count": 1
                    }, {
                        "tag": "Coblos",
                        "question_count": 2
                    }, {
                        "tag": "Dana Kampanye",
                        "question_count": 1
                    }, {
                        "tag": "DCS",
                        "question_count": 2
                    }, {
                        "tag": "DPD",
                        "question_count": 1
                    }]
                }
            }
        }
