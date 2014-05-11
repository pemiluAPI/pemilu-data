FORMAT: 1A
HOST: http://api.pemiluapi.org/campaignfinance/api/

# Campaign Finance Report API
The Campaign Finance Report API is a service that provides information about campaign finance reports in the 2014 Indonesian elections. It's part of [API Pemilu](http://developer.pemiluapi.org/)

# Group Contributions
Contributions related resources of the **Campaign Finance Report API**

## Contributions Collection [/caleg?apiKey={apiKey}&tahun={tahun}&lembaga={lembaga}&partai={partai}&nama={nama}&periode={periode}&limit={limit}&offset={offset}]
A list of Contributions objects with details

+ Parameters
    + offset (optional, number, `300`) ... Number the offset from the beginning of the list of records to return (use in combination with `limit` to support pagination)
    + limit (optional, number, `25`) ... Number the number of records to return (use in combination with `offset` to support pagination)
    + periode (optional, string, `1,2,3`) ... String the period or periods to return results for (defaults to all available)
    + nama (optional, string, `afzal`) ... String full or partial `nama` (name) of the person or organization associated with the contribution. Will return all matching records.
    + partai (optional, string, `1`) ... String id of the `partai` (party) associated with the contribution.
    + lembaga (optional, string, `DPR`) ... String `lembaga` (legislative body) that the contribution is associated with.
    + tahun (optional, number, `2014`) ... Number `tahun` (election year) that the contribution took place during.
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.

### List Contributions [GET]
+ Response 200 (application/json)

        {
            "periode": ["1", "2", "3"],
            "partai": {
                "id": "15",
                "nama": "PKPI"
            },
            "role": "calon anggota legislatif",
            "nama": "MUHAMMAD ILHAM PASHA"
            "id_calon": "3603-00-0000-1504",
            "mata_uang": "Rp",
            "uang": 0,
            "nilai_barang": 0,
            "unit_barang": 0,
            "nilai_jasa": 12850000,
            "bentuk_jasa": "",
            "jumlah": 12850000,
            "keterangan": ""
        }
