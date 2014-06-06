FORMAT: 1A
HOST: http://api.pemiluapi.org/campaignfinance/api/

# Campaign Finance Report API
The Campaign Finance Report API is a service that provides information about campaign finance reports in the 2014 Indonesian elections. It's part of [API Pemilu](http://developer.pemiluapi.org/)

Sample calls:

**List all contributions**

[http://api.pemiluapi.org/campaignfinance/api/contributions?apiKey=fea6f7d9ec0b31e256a673114792cb17](http://api.pemiluapi.org/campaignfinance/api/contributions?apiKey=fea6f7d9ec0b31e256a673114792cb17)

**List all partai contributions and show a total**

[http://api.pemiluapi.org/campaignfinance/api/contributions?apiKey=fea6f7d9ec0b31e256a673114792cb17&role=partai&total=true](http://api.pemiluapi.org/campaignfinance/api/contributions?apiKey=fea6f7d9ec0b31e256a673114792cb17&role=partai&total=true)

# Group Contributions
Contributions related resources of the **Campaign Finance Report API**

## Contributions Collection [/contributions?apiKey={apiKey}&tahun={tahun}&lembaga={lembaga}&partai={partai}&nama={nama}&role={role}&periode={periode}&total={total}&limit={limit}&offset={offset}]
A list of Contributions objects with details

+ Parameters
    + offset (optional, number, `300`) ... Number the offset from the beginning of the list of records to return (use in combination with `limit` to support pagination)
    + limit (optional, number, `25`) ... Number the number of records to return (use in combination with `offset` to support pagination)
    + total (optional, string, `false`) ... String if `true`, include the sum total values for all requested records in the result (defaults to `false`)
    + periode (optional, string, `1,2,3`) ... String the period or periods to return results for (defaults to all available)
    + role (optional, string, `calon`) ... String the role or roles of the entity associated with the contribution (defaults to all; possible values are `calon`, `partai`, `perseorangan`, `kelompok`, `usaha`)
    + nama (optional, string, `pasha`) ... String full or partial `nama` (name) of the person or organization associated with the contribution. Will return all matching records.
    + partai (optional, string, `1`) ... String id of the `partai` (party) associated with the contribution.
    + lembaga (optional, string, `DPR`) ... String `lembaga` (legislative body) that the contribution is associated with.
    + tahun (optional, number, `2014`) ... Number `tahun` (election year) that the contribution took place during (default is `2014`).
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.

### List Contributions [GET]
+ Response 200 (application/json)

        {
            "data": {
                "results": {
                    "count": 2,
                    "total": 6645,
                    "contributions": [{
                        "periode": [
                            "1",
                            "2"
                        ],
                        "partai": {
                            "id": 7,
                            "nama": "Partai Demokrat"
                        },
                        "role": "partai politik",
                        "nama": "Partai Demokrat",
                        "id_calon": "",
                        "lembaga": "DPR",
                        "tahun": "2014",
                        "mata_uang": "Rp",
                        "uang": 235000000,
                        "nilai_barang": 0,
                        "unit_barang": 0,
                        "nilai_jasa": 0,
                        "bentuk_jasa": "",
                        "jumlah": 235000000,
                        "keterangan": ""
                    }, {
                        "periode": [
                            "1",
                            "2"
                        ],
                        "partai": {
                            "id": 6,
                            "nama": "Partai Gerakan Indonesia Raya"
                        },
                        "role": "partai politik",
                        "nama": "Partai Gerindra",
                        "id_calon": "",
                        "lembaga": "DPR",
                        "tahun": "2014",
                        "mata_uang": "Rp",
                        "uang": 0,
                        "nilai_barang": 0,
                        "unit_barang": 0,
                        "nilai_jasa": 0,
                        "bentuk_jasa": "",
                        "jumlah": 0,
                        "keterangan": ""
                    }],
                    "value_totals": {
                        "uang": 235000000,
                        "nilai_barang": 0,
                        "unit_barang": 0,
                        "nilai_jasa": 0,
                        "jumlah": 235000000
                    }
                }
            }
        }


## Contributions [/contributions/{id}?apiKey={apiKey}&periode={periode}]
The contributions for a single candidate

+ Parameters
    + periode (optional, string, `1,2,3`) ... String the period or periods to return results for (defaults to all available)
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.
    + id (required, string, `1101-00-0000-0101`) ... String `id` of the candidate to collect information on

### Retrieve contributions for a candidate [GET]
+ Response 200 (application/json)

        {
            "data": {
                "results": {
                    "count": 1,
                    "total": 6608,
                    "contributions": [{
                        "periode": [
                            "1",
                            "2"
                        ],
                        "partai": {
                            "id": 7,
                            "nama": "Partai Demokrat"
                        },
                        "role": "calon anggota legislatif",
                        "nama": "H. TEUKU RIEFKY HARSYA B.Sc, MT",
                        "id_calon": "1101-00-0000-0701",
                        "lembaga": "DPR",
                        "tahun": "2014",
                        "mata_uang": "Rp",
                        "uang": 0,
                        "nilai_barang": 110000000,
                        "unit_barang": 0,
                        "nilai_jasa": 207550000,
                        "bentuk_jasa": "",
                        "jumlah": 317550000,
                        "keterangan": ""
                    }]
                }
            }
        }
