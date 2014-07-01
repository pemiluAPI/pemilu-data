FORMAT: 1A
HOST: http://api.pemiluapi.org/results/api/

# Results API
The Results API is a service that provides information about election results from the 2014 Indonesian elections. It's part of [API Pemilu](http://developer.pemiluapi.org/)

Sample calls:

**List all legislative election result totals by province**

[http://api.pemiluapi.org/results/api/hasil_legislatif?apiKey=fea6f7d9ec0b31e256a673114792cb17&tahun=2014&lembaga=DPR&area=provinsi](http://api.pemiluapi.org/results/api/hasil_legislatif?apiKey=fea6f7d9ec0b31e256a673114792cb17&tahun=2014&lembaga=DPR)

**List parties who received the most overall votes in the legislative election by dapil**

[http://api.pemiluapi.org/results/api/hasil_legislatif?apiKey=fea6f7d9ec0b31e256a673114792cb17&tahun=2014&lembaga=DPR&area=dapil&filter=jumlah&range=1](http://api.pemiluapi.org/results/api/hasil_legislatif?apiKey=fea6f7d9ec0b31e256a673114792cb17&tahun=2014&lembaga=DPR&filter=jumlah&range=1)

# Group Legislative Results
Legislative Results related resources of the **Results API**

## Legislative Results Collection [/hasil_legislatif?apiKey={apiKey}&tahun={tahun}&lembaga={lembaga}&provinsi={provinsi}&dapil={dapil}&partai={partai}&area={area}&filter={filter}&range={range}&limit={limit}&offset={offset}]
A list of Legislative Results objects with details

+ Parameters
    + offset (optional, number, `300`) ... Number the offset from the beginning of the list of records to return (use in combination with `limit` to support pagination)
    + limit (optional, number, `25`) ... Number the number of records to return (use in combination with `offset` to support pagination)
    + range (optional, string, `1`) ... String the range of results to return; use in combination with `filter` to get targeted results (defaults to all; example values are `1` to return only the top vote getters, `1-5` to return the top five)
    + filter (optional, string, `calon_terpilih`) ... String a category of results to return; use in combination with `range` to get targeted results (defaults to all; possible values are `calon_terpilih`, `calon_semua`, `partai`, `jumlah`)
    + area (optional, string, `dapil`) ... String name of the organizing area of results returned (defaults to `dapil`; possible values are `dapil`, `provinsi`)
    + partai (optional, string, `1`) ... String id of the `partai` (party) associated with the contribution.
    + dapil (optional, string, `1101-00-0000`) ... String id of the `dapil` (electoral district) that the candidate is running in.
    + provinsi (optional, string, `11`) ... String id of the `provinsi` (province) that the candidate is running in.
    + lembaga (optional, string, `DPR`) ... String `lembaga` (legislative body) that the contribution is associated with.
    + tahun (optional, number, `2014`) ... Number `tahun` (election year) that the contribution took place during (default is `2014`).
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.

### List Legislative Results [GET]
+ Response 200 (application/json)

        {
            "data": {
                "results": {
                    "count": 2,
                    "total": 925,
                    "lembaga": "DPR",
                    "tahun": "2014",
                    "area": "provinsi",
                    "hasil": [
                        "provinsi": {
                            "id": 11,
                            "nama": "Aceh"
                        },
                        "partai": {
                            "id": 1,
                            "nama": "Partai NasDem"
                        },
                        "suara_calon_terpilih": 62568,
                        "peringkat_suara_calon_terpilih": 5,
                        "suara_calon_semua": 168213,
                        "peringkat_suara_calon_semua": 5,
                        "suara_partai": 103361,
                        "peringkat_suara_partai": 1,
                        "jumlah_suara": 271574,
                        "peringkat_jumlah_suara": 3
                    }, {
                        "provinsi": {
                            "id": 11,
                            "nama": "Aceh"
                        },
                        "partai": {
                            "id": 2,
                            "nama": "Partai Kebangkitan Bangsa"
                        },
                        "suara_calon_terpilih": 40191,
                        "peringkat_suara_calon_terpilih": 9,
                        "suara_calon_semua": 96855,
                        "peringkat_suara_calon_semua": 9,
                        "suara_partai": 40616,
                        "peringkat_suara_partai": 8,
                        "jumlah_suara": 137471,
                        "peringkat_jumlah_suara": 9
                    }]
                }
            }
        }
