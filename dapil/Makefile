SHP_PATH ?= shapefiles
# smaller numbers (1e-8 == .00000001) are more precise
SIMPLIFY ?= 1e-6

all: \
	admin.topojson \
	admin-simple.topojson \
	dapil.topojson \
	test

admin.topojson:
	topojson --bbox --id-property id_provinsi --properties id_provinsi,nm_provinsi \
		--simplify 3e-7 \
		$(SHP_PATH)/admin_provinsi/shp/PROVINSI_ADMINISTRATIVE_AREA.shp \
		> $@

admin-simple.topojson:
	topojson --bbox --id-property id_provinsi --properties id_provinsi,nm_provinsi \
		--simplify 1e-5 \
		$(SHP_PATH)/admin_provinsi/shp/PROVINSI_ADMINISTRATIVE_AREA.shp \
		> $@

dapil.topojson:
	topojson --bbox --id-property id_dapil --properties id_provinsi,nm_provinsi,nm_dapil \
		--simplify $(SIMPLIFY) \
		$(SHP_PATH)/dapil_nasional_DPR/shp/DAPIL_NASIONAL_DPR.shp \
		$(SHP_PATH)/dapil_provinsi_DPRDI/shp/DAPIL_PROVINSI_DPRDI.shp \
		> $@

test:
	du -h *.topojson

clean:
	rm -f admin.topojson
	rm -f dapil.topojson
