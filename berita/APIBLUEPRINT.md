FORMAT: 1A
HOST: http://api.pemiluapi.org/

# Berita API
Berita API is a curated *election news feed* service. It's part of [API Pemilu](http://developer.pemiluapi.org/)

Sample call: [http://api.pemiluapi.org/berita?json=get_recent_posts&apiKey=fea6f7d9ec0b31e256a673114792cb17](http://api.pemiluapi.org/berita?json=get_recent_posts&apiKey=fea6f7d9ec0b31e256a673114792cb17)

# Group Posts
Post related resources of the **Berita API**

## Post Collection [/berita?json=get_recent_posts&apiKey={apiKey}&count={count}]
Get a list of recent posts.

+ Parameters
    + count (optional, integer, `2`) ... Integer The number of posts to return. Default is 10 if not specified.
    + apiKey (required, string, `fea6f7d9ec0b31e256a673114792cb17`) ... String `apiKey` of the application.

### List Recent Posts [GET]
+ Response 200 (application/json)

        {
            "status": "ok",
            "count": 2,
            "count_total": 75,
            "pages": 38,
            "posts": [{
                "id": 168,
                "type": "post",
                "slug": "25-ribu-warga-jateng-jadi-relawan-pengawas-pemilu",
                "url": "http:\/\/103.23.20.184\/25-ribu-warga-jateng-jadi-relawan-pengawas-pemilu\/",
                "status": "publish",
                "title": "25 Ribu Warga Jateng Jadi Relawan Pengawas Pemilu",
                "title_plain": "25 Ribu Warga Jateng Jadi Relawan Pengawas Pemilu",
                "content": "Gerakan sejuta relawan yang dicanangkan Badan Pengawas Pemilu (Bawaslu) disambut ribuan warga Jawa Tengah.",
                "excerpt": "Gerakan sejuta relawan yang dicanangkan Badan Pengawas Pemilu[&hellip;]",
                "date": "2014-03-07 09:15:48",
                "modified": "2014-03-07 09:15:48",
                "categories": [],
                "tags": [{
                    "id": 2,
                    "slug": "bawaslu",
                    "title": "Bawaslu",
                    "description": "",
                    "post_count": 12
                }, {
                    "id": 15,
                    "slug": "kabupatenkota",
                    "title": "Kabupaten\/Kota",
                    "description": "",
                    "post_count": 2
                }],
                "author": {
                    "id": 2,
                    "slug": "apipemilu",
                    "name": "API Pemilu",
                    "first_name": "API",
                    "last_name": "Pemilu",
                    "nickname": "apipemilu",
                    "url": "http:\/\/pemiluapi.org",
                    "description": ""
                },
                "comments": [],
                "attachments": [],
                "comment_count": 0,
                "comment_status": "closed",
                "custom_fields": {}
            }, {
                "id": 166,
                "type": "post",
                "slug": "kpu-maluku-tak-dilibatkan-dalam-distribusi-surat-suara",
                "url": "http:\/\/103.23.20.184\/kpu-maluku-tak-dilibatkan-dalam-distribusi-surat-suara\/",
                "status": "publish",
                "title": "KPU Maluku Tak Dilibatkan dalam Distribusi Surat Suara",
                "title_plain": "KPU Maluku Tak Dilibatkan dalam Distribusi Surat Suara",
                "content": "Komisi Pemilihan Umum Provinsi Maluku merasa kecewa tak dilibatkan dalam pendistribusian surat suara ke KPU kabupaten\/kota.",
                "excerpt": "Komisi Pemilihan Umum Provinsi Maluku merasa kecewa tak dilibatkan[&hellip;]",
                "date": "2014-03-07 08:49:49",
                "modified": "2014-03-07 08:49:49",
                "categories": [],
                "tags": [{
                    "id": 117,
                    "slug": "distribusi",
                    "title": "Distribusi",
                    "description": "",
                    "post_count": 3
                }, {
                    "id": 95,
                    "slug": "kpu-maluku",
                    "title": "KPU Maluku",
                    "description": "",
                    "post_count": 2
                }],
                "author": {
                    "id": 2,
                    "slug": "apipemilu",
                    "name": "API Pemilu",
                    "first_name": "API",
                    "last_name": "Pemilu",
                    "nickname": "apipemilu",
                    "url": "http:\/\/pemiluapi.org",
                    "description": ""
                },
                "comments": [],
                "attachments": [],
                "comment_count": 0,
                "comment_status": "closed",
                "custom_fields": {}
            }]
        }

## Post Search [/berita?json=get_search_results&apiKey={apiKey}&search={search}&count={count}]
Get a list of posts matching the passed search term.

+ Parameters
    + count (optional, integer, `2`) ... Integer The number of posts to return. Default is 10 if not specified.
    + search (required, string, `TPS`) ... String The term to search for.
    + apiKey (required, string, `fea6f7d9ec0b31e256a673114792cb17`) ... String The `apiKey` of the application.

### Search Posts [GET]
+ Response 200 (application/json)

        {
            "status": "ok",
            "count": 1,
            "count_total": 9,
            "pages": 9,
            "posts": [{
                "id": 160,
                "type": "post",
                "slug": "kpu-berkomitmen-sediakan-tps-yang-aksesibel",
                "url": "http:\/\/103.23.20.184\/kpu-berkomitmen-sediakan-tps-yang-aksesibel\/",
                "status": "publish",
                "title": "KPU Berkomitmen Sediakan TPS yang Aksesibel",
                "title_plain": "KPU Berkomitmen Sediakan TPS yang Aksesibel",
                "content": "Komisi Pemilihan Umum menegaskan, lokasi dan desain Tempat Pemungutan Suara (TPS) harus memberikan jaminan kemudahan akses bagi penyandang disabilitas.",
                "excerpt": "Komisi Pemilihan Umum menegaskan, lokasi dan desain Tempat Pemungutan Suara (TPS)[&hellip;]",
                "date": "2014-03-07 08:43:24",
                "modified": "2014-03-07 08:43:24",
                "categories": [],
                "tags": [{
                    "id": 131,
                    "slug": "kpps",
                    "title": "KPPS",
                    "description": "",
                    "post_count": 2
                }, {
                    "id": 6,
                    "slug": "kpu",
                    "title": "KPU",
                    "description": "",
                    "post_count": 32
                }],
                "author": {
                    "id": 2,
                    "slug": "apipemilu",
                    "name": "API Pemilu",
                    "first_name": "API",
                    "last_name": "Pemilu",
                    "nickname": "apipemilu",
                    "url": "http:\/\/pemiluapi.org",
                    "description": ""
                },
                "comments": [],
                "attachments": [],
                "comment_count": 0,
                "comment_status": "closed",
                "custom_fields": {}
            }]
        }

## Get Tagged Posts [/berita?json=get_tag_posts&apiKey={apiKey}&slug={slug}&id={id}&count={count}]
Get a list of posts with the passed tag.

+ Parameters
    + count (optional, integer, `2`) ... Integer The number of posts to return. Default is 10 if not specified.
    + id (required, string, `TPS`) ... String The id of the tag. Either this or `slug` is required.
    + slug (required, string, `TPS`) ... String The name of the tag. Either this or `id` is required.
    + apiKey (required, string, `fea6f7d9ec0b31e256a673114792cb17`) ... String The `apiKey` of the application.

### Get Tagged Posts [GET]
+ Response 200 (application/json)

        {
            "status": "ok",
            "count": 1,
            "pages": 16,
            "tag": {
                "id": 22,
                "slug": "dana-kampanye",
                "title": "Dana Kampanye",
                "description": "",
                "post_count": 16
            },
            "posts": [{
                "id": 152,
                "type": "post",
                "slug": "pbb-dan-pks-serahkan-rekening-dana-kampanye",
                "url": "http:\/\/103.23.20.184\/pbb-dan-pks-serahkan-rekening-dana-kampanye\/",
                "status": "publish",
                "title": "PBB dan PKS Serahkan Rekening Dana Kampanye",
                "title_plain": "PBB dan PKS Serahkan Rekening Dana Kampanye",
                "content": "Jelang batas akhir penyerahan laporan dana kampanye 2 Maret nanti, hanya dua partai yang sudah menyerahkan rekening khusus dana kampanye kepada Komisi Pemilihan Umum.",
                "date": "2014-03-07 08:32:24",
                "modified": "2014-03-07 08:32:24",
                "categories": [],
                "tags": [{
                    "id": 22,
                    "slug": "dana-kampanye",
                    "title": "Dana Kampanye",
                    "description": "",
                    "post_count": 16
                }],
                "author": {
                    "id": 2,
                    "slug": "apipemilu",
                    "name": "API Pemilu",
                    "first_name": "API",
                    "last_name": "Pemilu",
                    "nickname": "apipemilu",
                    "url": "http:\/\/pemiluapi.org",
                    "description": ""
                },
                "comments": [],
                "attachments": [],
                "comment_count": 0,
                "comment_status": "closed",
                "custom_fields": {}
            }]
        }

## Get Post [/berita?json=get_post&apiKey={apiKey}&post_id={post_id}]
Get a single post.

+ Parameters
    + post_id (required, integer, `12`) ... Integer The id of the post.
    + apiKey (required, string, `fea6f7d9ec0b31e256a673114792cb17`) ... String The `apiKey` of the application.

### Get Individual Post [GET]
+ Response 200 (application/json)

        {
            "status": "ok",
            "post": {
                "id": 12,
                "type": "post",
                "slug": "jual-beli-suara-dengan-ppk-patut-diawasi",
                "url": "http:\/\/103.23.20.184\/jual-beli-suara-dengan-ppk-patut-diawasi\/",
                "status": "publish",
                "title": "Jual Beli Suara dengan PPK Patut Diawasi",
                "title_plain": "Jual Beli Suara dengan PPK Patut Diawasi",
                "content": "<p>Jual beli suara tak hanya terjadi di masyarakat sebagai pemilih.",
                "excerpt": "<p>Jual beli suara tak hanya terjadi[&hellip;]<\/p>\n",
                "date": "2014-02-27 08:38:25",
                "modified": "2014-03-06 08:38:59",
                "categories": [],
                "tags": [{
                    "id": 9,
                    "slug": "jual-beli-suara",
                    "title": "Jual Beli Suara",
                    "description": "",
                    "post_count": 1
                }],
                "author": {
                    "id": 2,
                    "slug": "apipemilu",
                    "name": "API Pemilu",
                    "first_name": "API",
                    "last_name": "Pemilu",
                    "nickname": "apipemilu",
                    "url": "http:\/\/pemiluapi.org",
                    "description": ""
                },
                "comments": [],
                "attachments": [],
                "comment_count": 0,
                "comment_status": "closed",
                "custom_fields": {}
            },
            "next_url": "http:\/\/103.23.20.184\/matamassa-laporkan-187-laporan-dugaan-pelanggaran-2\/"
        }


# Group Tags
Tag related resources of the **Berita API**

## List Tags [/berita?json=get_tag_index&apiKey={apiKey}]
Get a list of active tags.

+ Parameters
    + apiKey (required, string, `fea6f7d9ec0b31e256a673114792cb17`) ... String The `apiKey` of the application.

### List Active Tags [GET]
+ Response 200 (application/json)

        {
            "status": "ok",
            "count": 5,
            "tags": [{
                "id": 52,
                "slug": "100-persen",
                "title": "100 Persen",
                "description": "",
                "post_count": 3
            }, {
                "id": 137,
                "slug": "15-maret",
                "title": "15 Maret",
                "description": "",
                "post_count": 1
            }, {
                "id": 40,
                "slug": "air-dan-listrik",
                "title": "Air dan Listrik",
                "description": "",
                "post_count": 1
            }, {
                "id": 94,
                "slug": "alissa-wahid",
                "title": "Alissa Wahid",
                "description": "",
                "post_count": 1
            }, {
                "id": 76,
                "slug": "api",
                "title": "API",
                "description": "",
                "post_count": 1
            }]
        }


