FORMAT: 1A
HOST: http://api.pemiluapi.org/stamps/api/

# Stamps API
The Stamps API is a service that provides links to election-related stamps and banners that can be overlaid on photographs.  It's part of [API Pemilu](http://developer.pemiluapi.org/)

Sample call: [http://api.pemiluapi.org/stamps/api/stamps?apiKey=fea6f7d9ec0b31e256a673114792cb17](http://api.pemiluapi.org/stamps/api/stamps?apiKey=fea6f7d9ec0b31e256a673114792cb17)


# Group Stamps
Stamp related resources of the **Stamps API**

## Stamp Collection [/stamps?apiKey={apiKey}&tags={tags}&text={text}&limit={limit}&offset={offset}]
A list of Stamp objects with all details

+ Parameters
    + offset (optional, number, `300`) ... Number the offset from the beginning of the list of records to return (use in combination with `limit` to support pagination)
    + limit (optional, number, `25`) ... Number the number of records to return (use in combination with `offset` to support pagination)
    + text (optional, string, `vote`) ... String full or partial text of the stamp. Will return all matching records.
    + tags (optional, string, `women,participation`) ... String list of `tags` by which to filter the stamps.
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.

### List Stamps [GET]
+ Response 200 (application/json)

        {
            "data": {
                "results": {
                    "count": 1,
                    "total": 60,
                    "stamps": [{
                        "id": "001",
                        "text": "Menuju Istana Negara",
                        "url_small": "http://apipemilu-caleg.s3-website-ap-southeast-1.amazonaws.com/stamps/fpo-preview-50x50.png",
                        "width_small": 100,
                        "height_small": 100,
                        "url_medium": "http://apipemilu-caleg.s3-website-ap-southeast-1.amazonaws.com/stamps/fpo-full-135x135.png",
                        "width_medium": 400,
                        "height_medium": 400,
                        "url_large": "http://apipemilu-caleg.s3-website-ap-southeast-1.amazonaws.com/stamps/fpo-full-135x135.png",
                        "width_large": 800,
                        "height_large": 800,
                        "tags": ["fpo", "sample", "vote"]
                    }]
                }
            }
        }

## Stamp [/stamps/{id}?apiKey={apiKey}]
A single Stamp object with all its details

+ Parameters
    + apiKey (required, string, `06ec082d057daa3d310b27483cc3962e`) ... String `apiKey` of the application.
    + id (required, string, `002`) ... String `id` of the Stamp to perform action with.

### Retrieve a Stamp [GET]
+ Response 200 (application/json)

        {
            "data": {
                "results": {
                    "count": 1,
                    "total": 1,
                    "stamps": [{
                        "id": "001",
                        "text": "Menuju Istana Negara",
                        "url_small": "http://apipemilu-caleg.s3-website-ap-southeast-1.amazonaws.com/stamps/fpo-preview-50x50.png",
                        "width_small": 100,
                        "height_small": 100,
                        "url_medium": "http://apipemilu-caleg.s3-website-ap-southeast-1.amazonaws.com/stamps/fpo-full-135x135.png",
                        "width_medium": 400,
                        "height_medium": 400,
                        "url_large": "http://apipemilu-caleg.s3-website-ap-southeast-1.amazonaws.com/stamps/fpo-full-135x135.png",
                        "width_large": 800,
                        "height_large": 800,
                        "tags": ["fpo", "sample", "vote"]
                    }]
                }
            }
        }

# Group Tags
Tag related resources of the **Stamps API**

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
                        "tag": "fpo",
                        "stamp_count": 1
                    }, {
                        "tag": "sample",
                        "stamp_count": 3
                    }, {
                        "tag": "vote",
                        "stamp_count": 3
                    }, {
                        "tag": "women",
                        "stamp_count": 6
                    }, {
                        "tag": "jokowi",
                        "stamp_count": 2
                    }, {
                        "tag": "prabowo",
                        "stamp_count": 1
                    }, {
                        "tag": "jusuf",
                        "stamp_count": 1
                    }, {
                        "tag": "hatta",
                        "stamp_count": 5
                    }, {
                        "tag": "register",
                        "stamp_count": 1
                    }]
                }
            }
        }
